<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Home extends MY_Controller {

	function __construct(){

	}
	
	public function index(){
		$data = array(
			'page_title' => 'Welcome to Garage Finder',
			'page_module' => 'home',
			'page_view' => 'home_v'
		);
		echo modules::run('template', $data);
	}

}