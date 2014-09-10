<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php
		//if(http_response_code() !== 404){
			?>
			<meta name="description" content="<?php echo $this->meta_description; ?>">
			<meta name="keywords" content="<?php echo implode(', ', $this->meta_keywords); ?>">
			<meta name="author" content="<?php echo $this->meta_author; ?>">
			<?php
		//}
		?>

		<title><?php echo $page_title; ?></title>

		<link href="<?php echo base_url(); ?>assets/bootstrap-3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/global.css" rel="stylesheet">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>