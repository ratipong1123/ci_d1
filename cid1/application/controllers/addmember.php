<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class member extends CI_Controller {

	public function add(){
		$this->load->view('addview');
	}
	
	public function addmember(){
		echo $this->input->get('id');
	}
}
