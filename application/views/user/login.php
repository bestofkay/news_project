<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>news Admin Login</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?= base_url(); ?>public/back/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>public/back/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?= base_url(); ?>public/back/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?= base_url(); ?>public/back/css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="<?= base_url(); ?>public/back/css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="<?= base_url(); ?>public/back/css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="<?= base_url(); ?>public/back/img/favicon.ico">
	<!-- end: Favicon -->
	
			<style type="text/css">
			body { background: url(<?= base_url(); ?>public/back/img/bg-login.jpg) !important; }
		</style>
		
		
		
</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						
					</div>
					<h2>Login to your account</h2>
					<div id="infoMessage"><?php echo $message;?></div>
					<form class="form-horizontal" action="<?= site_url('news_admin/login');?>" method="post">
						<fieldset>
							
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<?php $identity= array(
													'name' => 'identity',
													'id' => 'identity',
													'placeholder' => 'username',
													'value' => '',
													'class'=>'input-large span10',
													);	
												echo form_input($identity);
									?>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<?php $password= array(
											'name' => 'password',
											'id' => 'password',
											'placeholder' => 'password',
											'value' => '',
											'class'=>'input-large span10',
											'type'=>'password'
											);	
										echo form_input($password);
							?>
							</div>
							<div class="clearfix"></div>
							
							<label class="remember" for="remember">
					<?php echo form_checkbox('remember', '1', FALSE, 'id="rememberme"');?> Remember me</label>

							<div class="button-login">	
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
							<div class="clearfix"></div>
							
					</form>

	</div><!--/.fluid-container-->
	
	<!-- start: JavaScript-->

		<script src="<?= base_url(); ?>public/back/js/jquery-1.9.1.min.js"></script>
	<script src="<?= base_url(); ?>public/back/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="<?= base_url(); ?>public/back/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="<?= base_url(); ?>public/back/js/jquery.ui.touch-punch.js"></script>
	
		<script src="<?= base_url(); ?>public/back/js/modernizr.js"></script>
	
		<script src="<?= base_url(); ?>public/back/js/bootstrap.min.js"></script>
	
		<script src="<?= base_url(); ?>public/back/js/jquery.cookie.js"></script>
	
		<script src='<?= base_url(); ?>public/back/js/fullcalendar.min.js'></script>
	
		<script src='<?= base_url(); ?>public/back/js/jquery.dataTables.min.js'></script>

		<script src="<?= base_url(); ?>public/back/js/excanvas.js"></script>
	<script src="<?= base_url(); ?>public/back/js/jquery.flot.js"></script>
	<script src="<?= base_url(); ?>public/back/js/jquery.flot.pie.js"></script>
	<script src="<?= base_url(); ?>public/back/js/jquery.flot.stack.js"></script>
	<script src="<?= base_url(); ?>public/back/js/jquery.flot.resize.min.js"></script>
	
		<script src="<?= base_url(); ?>public/back/js/jquery.chosen.min.js"></script>
	
		<script src="<?= base_url(); ?>public/back/js/jquery.uniform.min.js"></script>
		
		<script src="<?= base_url(); ?>public/back/js/jquery.cleditor.min.js"></script>
	
		<script src="<?= base_url(); ?>public/back/js/jquery.noty.js"></script>
	
		<script src="<?= base_url(); ?>public/back/js/jquery.elfinder.min.js"></script>
	
		<script src="<?= base_url(); ?>public/back/js/jquery.raty.min.js"></script>
	
		<script src="<?= base_url(); ?>public/back/js/jquery.iphone.toggle.js"></script>
	
		<script src="<?= base_url(); ?>public/back/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="<?= base_url(); ?>public/back/js/jquery.gritter.min.js"></script>
	
		<script src="<?= base_url(); ?>public/back/js/jquery.imagesloaded.js"></script>
	
		<script src="<?= base_url(); ?>public/back/js/jquery.masonry.min.js"></script>
	
		<script src="<?= base_url(); ?>public/back/js/jquery.knob.modified.js"></script>
	
		<script src="<?= base_url(); ?>public/back/js/jquery.sparkline.min.js"></script>
	
		<script src="<?= base_url(); ?>public/back/js/counter.js"></script>
	
		<script src="<?= base_url(); ?>public/back/js/retina.js"></script>

		<script src="<?= base_url(); ?>public/back/js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
