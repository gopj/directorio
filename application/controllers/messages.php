<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messages extends CI_Controller {

	public function index()
	{
		$this->load->view('messages/index.php');
	}
}
?>