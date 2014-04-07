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
	
	function get_count_categories(){
		return $this->db->count_all('categorias');
	}
	
	function insert_categories($titulo,$descripcion,$imagen=""){
		$data = array('nombre' => $titulo,'descripcion' => $descripcion,'imagen'=> $imagen);
		$this->db->insert('categorias', $data); 	
		return $this->db->affected_rows();
	}
}
?>