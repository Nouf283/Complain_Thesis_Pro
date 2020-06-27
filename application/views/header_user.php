<?php header('Access-Control-Allow-Origin: *'); ?>

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
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
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
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#"><span>Citizen</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">

						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> <?php echo  $this->session->userdata('username'); ?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="<?php echo base_url() ?>index.php/user/show_user_user"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="<?php echo base_url();?>index.php/loginuser/logout"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full" style="height:auto; overflow:auto; background-color:#424242" > <!-- Change the color of dashboard here-->
		<div class="row-fluid" style="height:auto">
				
			<!-- start: Main Menu -->
	

			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2" style="height:auto">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="<?php echo base_url() ?>index.php/user/index"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						
						

						
						<!-- Vendor starts  -->
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Complain</span></a>
							<ul>
								<li><a class="submenu" href="<?php echo base_url() ?>index.php/user/add_complain_user"><i class="icon-file-alt"></i><span class="hidden-tablet"> Create Complain</span></a></li>
								<li><a class="submenu" href="<?php echo base_url() ?>index.php/user/show_complain_user"><i class="icon-file-alt"></i><span class="hidden-tablet"> View Complain </span></a></li>
							
							</ul>	
						</li>
						<!-- Vendor end  -->



						<!-- Purchase starts  -->
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> See Similar Complaints </span></a>
							<ul>
								
                                <li><a class="submenu" href="<?php echo base_url() ?>index.php/user/show_similar_complain"><i class="icon-file-alt"></i><span class="hidden-tablet"> View Similar Complain </span></a></li>							
							</ul>	
						</li>
						<!-- Purchase end  -->


						<!-- Vendor starts  -->
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Complain Progress Status</span></a>
							<ul>
								<li><a class="submenu" href="<?php echo base_url() ?>index.php/user/show_progress_user"><i class="icon-file-alt"></i><span class="hidden-tablet"> View Complain Progress Status</span></a></li>
							
							</ul>	
						</li>
						<!-- Vendor end  -->
					


						<!-- Purchase starts  -->
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> User Profile </span></a>
							<ul>
								
								<li><a class="submenu" href="<?php echo base_url() ?>index.php/user/show_user_user"><i class="icon-file-alt"></i><span class="hidden-tablet"> View User Profile </span></a></li>
							
							</ul>	
						</li>
						<!-- Purchase end  -->




						
						
						


						
						
						
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->



			<!-- end: Main Menu -->