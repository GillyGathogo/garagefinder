<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Garage extends MY_Controller {

	function __construct(){

	}
	
	public function index(){
		show_404();
	}

	function create(){

	}

	function view($garage_id){
		// List garage information, services and changes
		// Other garages around you
		// Garage ratings, client stats, shops we work with, recommended (according to proximity to users)
	}

	function edit($garage_id){

	}

	function delete($garage_id){
		
	}

	function help(){
		// Where are you? What assistance would you like? How will you pay?
		// Give tips - what you can do while waiting, what not to do etc.
	}

	function appointment($my_action, $my_rating=false){
		// User - My request = book, cancel/confirm, confirm attendance and rate service
	}

	function invoice($action){
		// Invoice for garage services
		// Generate (form), Validate, Complete (paid invoice)
	}

}