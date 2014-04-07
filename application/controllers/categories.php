<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends CI_Controller {
	
	var $usr;
	
	function __construct(){
		parent::__construct();
		$this->usr ="Administrador";
	}
	
	public function index()
	{
		$this->load->model("categories_model");
		$data["query"]=$this->categories_model->get_categories();
		$data["nRows"]=$this->categories_model->get_count_categories();
		$this->load->view('categories/index.php',$data);
		$this->load->view("cssjs");
	}
	
	public function get_Categories(){
		$this->load->model("categories_model");
		$data["query"]=$this->categories_model->get_categories();
		$this->load->view("categories/categories_list",$data);
		$this->load->view("cssjs");
	}
	
	public function insert_Categories(){
			$config['upload_path'] = './img/categorias/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if (!$this->upload->do_upload("imagen")){
				$data["errores"] = array('error' => $this->upload->display_errors());
				$data["result"]="0";
				$this->load->view("categories/categories_insert",$data);
				$this->load->view("cssjs");
			}else{	
				$file_info = $this->upload->data();
				$imagen = $file_info['file_name'];
				$titulo = $this->input->post('nombre');
				$descripcion=$this->input->post('descripcion');
				$this->load->model("categories_model");
				$data["result"]=$this->categories_model->insert_categories($titulo,$descripcion,$imagen);
				$this->load->view("categories/categories_insert",$data);
				$this->load->view("cssjs");
			}
	}
}
?>