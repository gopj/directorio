<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Panel extends CI_Controller {
	
	var $usr;
	
	function __construct(){
		parent::__construct();
		
	}
	
	public function index()
	{
		$this->load->view('panel');
		$this->load->view("cssjs");
	}
	

}
?>