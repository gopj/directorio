<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends CI_Controller {
	
	var $usr;
	
	function __construct(){
		parent::__construct();
		$this->usr ="Administrador";
	}
	
	public function index($usuario="")
	{
		if($usuario=="")
			$data["usr"] = $this->usr;
		else
			$data["usr"] = $usuario;
		
		$this->load->view('categories/index.php',$data);
	}
	
	public function get_Categories(){
		$this->load->model("categories_model");
		$data["query"]=$this->categories_model->get_categories();
		$this->load->view("categories/categories_list",$data);
	}
}
?>