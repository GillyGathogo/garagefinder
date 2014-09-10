<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Shop extends MY_Controller {

	function __construct(){

	}
	
	public function index(){
		show_404();
	}

	function create(){
		
	}

	function view($shop_id){
		// Show shop information
		// Other shops around you
		// Garages we work with, recommended, Offers and sponsored items in the garage
	}

	function edit($shop_id){
		
	}

	function delete($shop_id){
		
	}

	function catalogue($item_id=false, $my_action){
		// Add, Edit and Delete Item
	}

	function cart($my_action){
		// Add, Update, Show, Destroy
	}

	function orders(){
		// View all shop orders
	}

	function order($order_id, $my_action){
		// View, complete, cancel (users and shop share this function)
	}

}