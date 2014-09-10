<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<?php echo anchor('welcome', $this->nav_brand, array('class'=>'navbar-brand', 'title'=>$this->nav_brand_title)); ?>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li><?php echo anchor('#', 'Create Account', array('title'=>'Create a New Garage Finder Account')); ?></li>
				<li><?php echo anchor('#', 'Login', array('title'=>'Login to your Garage Finder Account')); ?></li>
			</ul>
		</div>
	</div>
</nav>