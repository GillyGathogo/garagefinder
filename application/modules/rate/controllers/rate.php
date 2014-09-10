<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Rate extends MY_Controller {

	function __construct(){

	}
	
	public function index($module){
		$data = array(
			'page_title' => 'Rate',
			'page_module' => 'rate',
			'page_view' => 'rate_v'
		);
		echo modules::run('template', $data);
	}

}