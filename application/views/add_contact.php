<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Citizen</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?php echo (rsc.'css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?php echo(rsc.'css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
	<link id="base-style" href="<?php echo(rsc.'css/style.css') ?>" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo (rsc.'css/style-responsive.css') ?>" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="<?php echo(rsc.'img/favicon.ico') ?>">
	<!-- end: Favicon -->


	
			<style type="text/css">
			body { background: url(<?php echo(rsc.'img/bg-login.jpg') ?>) !important; }
		</style>
		
		
		
</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="<?php echo base_url() ?>index.php/user/index"><i class="halflings-icon home"></i></a>
						
					</div>
					<h2>আপনার প্রশ্ন করুন</h2>
					<form class="form-horizontal" id="log_form" action="<?php echo base_url() ;?>index.php/user/add_contact_process" method="post">
						<fieldset>
							
							<div class="input-prepend" title="নাম">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="contact_name"  type="text" placeholder="আপনার নাম লিখুন" required=""/>
							</div>

							<div class="clearfix"></div>

							<div class="input-prepend" title="ই-মেইল">
								<span class="add-on"><i class="halflings-icon envelope"></i></span>
								<input class="input-large span10" name="contact_email"  type="email" placeholder="আপনার ই-মেইল লিখুন" required=""/>
							</div>

							<div class="clearfix"></div>

							<div class="input-prepend" title="মোবাইল নম্বর">
								<span class="add-on"><i class="halflings-icon bell"></i></span>
								<input class="input-large span10" name="contact_phone"  type="text" placeholder="আপনার মোবাইল নম্বর লিখুন" required=""/>
							</div>
							
							<div class="clearfix"></div>

							<div class="input-prepend" title="প্রশ্ন/মতামত">
								<span class="add-on"><i class="halflings-icon file"></i></span>
								<input class="input-large span10" name="contact_msg"  type="text" placeholder="আপনার প্রশ্ন/মতামত লিখুন" required=""/>
							</div>

							<div class="clearfix"></div>

							<div class="button-login">	
								<button type="submit" class="btn btn-primary">প্রেরণ করুন</button>
							</div>
							<div class="clearfix"></div>
					</form>
					<hr>
	
				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	
	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
