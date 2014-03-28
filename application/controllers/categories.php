<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends CI_Controller {
	
	var $usr;
	
	function __construct(){
		parent::__construct();
		$this->usr ="Administrador";
	}
	
	public function index($usuario="")
	{
		$this->load->model("categories_model");
		$data["query"]=$this->categories_model->get_categories();
		$this->load->view('categories/index.php',$data);
		$this->load->view("cssjs");
	}
	
	public function get_Categories(){
		$this->load->model("categories_model");
		$data["query"]=$this->categories_model->get_categories();
		$this->load->view("categories/categories_list",$data);
		$this->load->view("cssjs");
	}
}
?>