<div id="footer" class="container">
	<div class="row">
		<div class="col-md-6">
			<p><?php
			echo $this->footer_links;
			?></p>
		</div>
		<div class="col-md-6">
			<p class="text-right">
				&copy; <?php echo anchor($this->company_wesbite_link, $this->company_name, array('title'=>$this->company_link_title, 'target'=>'_blank')).' '.date('Y'); ?>.
				<?php echo $this->extra_footer_links; ?>
			</p>
		</div>
	</div>
</div>