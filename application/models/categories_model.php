<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories_model extends CI_Model {
	
	function __construct(){
		parent::__construct();
		
	}
	
	function insert_categorie(){
	
	}
	
	function get_categories(){
		$query= $this->db->get("categorias");
		return $query->result();
	}
}
?>