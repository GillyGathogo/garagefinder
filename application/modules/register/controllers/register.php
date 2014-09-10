<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Register extends MY_Controller {

	function __construct(){

	}
	
	public function index(){
		$data = array(
			'page_title' => 'Register Account',
			'page_module' => 'register',
			'page_view' => 'home_v'
		);
		echo modules::run('template', $data);
	}

	function activate($user_id, $activation_code){

	}

}