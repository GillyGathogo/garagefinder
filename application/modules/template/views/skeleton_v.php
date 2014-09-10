<?php
$this->load->view('html_open_v');
	if(uri_string() !== 'login'){
		$this->load->view('navigation_v');
	}
		?>
		<div id="main-content" class="container-fluid">
			<div class="row">
				<?php $this->load->view($page_module.'/'.$page_view); ?>
			</div>
		</div>
		<?php
	if(uri_string() !== 'login'){
		$this->load->view('footer_v');
	}
$this->load->view('html_close_v');