<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Controller extends MX_Controller {
	
	public $meta_description, $meta_keywords, $meta_author, $nav_brand, $nav_brand_title;
	public $footer_links, $company_name, $company_link_title, $company_wesbite_link, $extra_footer_links;
	public $sub_counties, $item_categories, $report_flags, $item_reports, $user;

	function __construct(){
		parent::__construct();
		$this->meta_description = 'Garage finder: Find Garages Easy.';
		$this->meta_keywords = array('html', 'css', 'javascript', 'bootstrap', 'codeigniter', 'nairobi', 'kenya');
		$this->meta_author = '@Biggie_1969, @GillyGathogo';

		$this->nav_brand = 'Garage Finder';
		$this->nav_brand_title = 'Find Garages Easy';

		$footer_links = array(
			anchor('#', 'Link name', 'Link title'),
			anchor('#', 'Link name', 'Link title'),
			anchor('#', 'Link name', 'Link title'),
			anchor('#', 'Link name', 'Link title'),
		);
		$this->footer_links = implode(' - ', $footer_links);

		$this->company_name = 'Caiman Technologies';
		$this->company_link_title = 'Caiman Technologies | helping you realize IT';
		$this->company_wesbite_link = 'http://www.caimantechnologies.co.ke';

		$extra_footer_links = array(
			anchor('#', 'Link name', 'Link title'),
			anchor('#', 'Link name', 'Link title'),
		);
		$this->extra_footer_links = implode(' - ', $extra_footer_links);
	}

}