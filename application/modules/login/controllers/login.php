<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Home extends MY_Controller {

	function __construct(){

	}
	
	public function index(){
		$data = array(
			'page_title' => 'Login to your Garage Finder Account',
			'page_module' => 'login',
			'page_view' => 'login_v'
		);
		echo modules::run('template', $data);
	}

	function forgot_password(){

	}

	function reset_password($user_id, $reset_code){

	}

}