<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Template extends MY_Controller {
	
	public function index($data){
		$this->load->view('skeleton_v', $data);
	}

}