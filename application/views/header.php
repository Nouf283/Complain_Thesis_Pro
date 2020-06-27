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
				<a class="brand" href="<?php echo base_url() ?>index.php/admin/index"><span>Citizen</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">

						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> <?php echo  $this->session->userdata('name'); ?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="<?php echo base_url() ?>index.php/admin/show_admin_profile"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="<?php echo base_url();?>index.php/login/logout"><i class="halflings-icon off"></i> Logout</a></li>
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
	
		<div class="container-fluid-full" style="height:auto; overflow:auto" > <!-- Change the color of dashboard here ; background-color:#424242-->
		<div class="row-fluid" style="height:auto">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2" style="height:auto">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="<?php echo base_url() ?>index.php/admin/index"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						
						
						<!-- Products starts  -->
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Admin</span></a>
							<ul>
								<li><a class="submenu" href="<?php echo base_url() ?>index.php/admin/add_admin"><i class="icon-file-alt"></i><span class="hidden-tablet"> Create Admin</span></a></li>
								<li><a class="submenu" href="<?php echo base_url() ?>index.php/admin/show_admin"><i class="icon-file-alt"></i><span class="hidden-tablet"> View Admin </span></a></li>
							
							</ul>	
						</li>
						<!-- Products end  -->



						<!-- Purchase starts  -->
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> User </span></a>
							<ul>
								<!--<li><a class="submenu" href="<?php echo base_url() ?>index.php/admin/add_user"><i class="icon-file-alt"></i><span class="hidden-tablet"> Create User </span></a></li>-->
								<li><a class="submenu" href="<?php echo base_url() ?>index.php/admin/show_user"><i class="icon-file-alt"></i><span class="hidden-tablet"> View User </span></a></li>
							
							</ul>	
						</li>
						<!-- Purchase end  -->						
						
						<!-- Vendor starts  -->
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Complain</span></a>
							<ul>
								<!--<li><a class="submenu" href="<?php echo base_url() ?>index.php/admin/add_complain"><i class="icon-file-alt"></i><span class="hidden-tablet"> Create Complain</span></a></li>-->
								<li><a class="submenu" href="<?php echo base_url() ?>index.php/admin/show_complain"><i class="icon-file-alt"></i><span class="hidden-tablet"> View Complain </span></a></li>
							
							</ul>	
						</li>
						<!-- Vendor end  -->

						<!-- Compplain starts  -->
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Complain Progress Status  </span></a>
							<ul>
								<!--<li><a class="submenu" href="<?php echo base_url() ?>index.php/admin/add_progress"><i class="icon-file-alt"></i><span class="hidden-tablet"> Add Progress Status </span></a></li>-->
								<li><a class="submenu" href="<?php echo base_url() ?>index.php/admin/show_progress"><i class="icon-file-alt"></i><span class="hidden-tablet"> View Progress Status </span></a></li>
							
							</ul>	
						</li>
						<!-- Compplain end  -->


						
						<!-- Inventory starts  -->
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Department Category </span></a>
							<ul>
								<li><a class="submenu" href="<?php echo base_url() ?>index.php/admin/add_deptcat"><i class="icon-file-alt"></i><span class="hidden-tablet"> Create Department Category  </span></a></li>
								<li><a class="submenu" href="<?php echo base_url() ?>index.php/admin/show_deptcat"><i class="icon-file-alt"></i><span class="hidden-tablet"> View Department Category  </span></a></li>
							
							</ul>	
						</li>
						<!-- Inventory end  -->


							<!-- Purchase starts  -->
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Problem Category </span></a>
							<ul>
								<li><a class="submenu" href="<?php echo base_url() ?>index.php/admin/add_probcat"><i class="icon-file-alt"></i><span class="hidden-tablet"> Create Problem Category</span></a></li>
								<li><a class="submenu" href="<?php echo base_url() ?>index.php/admin/show_probcat"><i class="icon-file-alt"></i><span class="hidden-tablet"> View Problem Category</span></a></li>
							
							</ul>	
						</li>
						<!-- Purchase end  -->					


						<!-- Admin starts  -->
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Department Head  </span></a>
							<ul>
								<li><a class="submenu" href="<?php echo base_url() ?>index.php/admin/add_depthead"><i class="icon-file-alt"></i><span class="hidden-tablet"> Create Department Head Profile</span></a></li>
								<li><a class="submenu" href="<?php echo base_url() ?>index.php/admin/show_depthead"><i class="icon-file-alt"></i><span class="hidden-tablet"> View Department Head Profile</span></a></li>
							
							</ul>	
						</li>
						<!-- Admin end  -->
						


						<!-- Admin starts  -->
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Department Employee  </span></a>
							<ul>
								<li><a class="submenu" href="<?php echo base_url() ?>index.php/admin/add_deptemp"><i class="icon-file-alt"></i><span class="hidden-tablet"> Create Department Employee Profile</span></a></li>
								<li><a class="submenu" href="<?php echo base_url() ?>index.php/admin/show_deptemp"><i class="icon-file-alt"></i><span class="hidden-tablet"> View Department Employee Profile</span></a></li>
							
							</ul>	
						</li>
						<!-- Admin end  -->
					
						

						
						<!-- Purchase starts  -->
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Division </span></a>
							<ul>
								<li><a class="submenu" href="<?php echo base_url() ?>index.php/admin/add_division"><i class="icon-file-alt"></i><span class="hidden-tablet"> Create Division </span></a></li>
								<li><a class="submenu" href="<?php echo base_url() ?>index.php/admin/show_division"><i class="icon-file-alt"></i><span class="hidden-tablet"> View Division </span></a></li>
							
							</ul>	
						</li>
						<!-- Purchase end  -->


						<!-- Department starts  -->
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> District </span></a>
							<ul>
								<li><a class="submenu" href="<?php echo base_url() ?>index.php/admin/add_district"><i class="icon-file-alt"></i><span class="hidden-tablet"> Create District </span></a></li>
								<li><a class="submenu" href="<?php echo base_url() ?>index.php/admin/show_district"><i class="icon-file-alt"></i><span class="hidden-tablet"> View District </span></a></li>
							
							</ul>	
						</li>
						<!-- Department end  -->

						<!-- Purchase starts  -->
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Thana </span></a>
							<ul>
								<li><a class="submenu" href="<?php echo base_url() ?>index.php/admin/add_thana"><i class="icon-file-alt"></i><span class="hidden-tablet"> Create Thana </span></a></li>
								<li><a class="submenu" href="<?php echo base_url() ?>index.php/admin/show_thana"><i class="icon-file-alt"></i><span class="hidden-tablet"> View Thana</span></a></li>
							
							</ul>	
						</li>
						<!-- Purchase end  -->						

						<!-- Purchase starts  -->
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Member of Parliament Area </span></a>
							<ul>
								<li><a class="submenu" href="<?php echo base_url() ?>index.php/admin/add_memarea"><i class="icon-file-alt"></i><span class="hidden-tablet"> Create Member of Parliament Area </span></a></li>
								<li><a class="submenu" href="<?php echo base_url() ?>index.php/admin/show_memarea"><i class="icon-file-alt"></i><span class="hidden-tablet"> View Member of Parliament Area </span></a></li>
							
							</ul>	
						</li>
						<!-- Purchase end  -->

						<!-- Purchase starts  -->
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Member of Parliament</span></a>
							<ul>
								<li><a class="submenu" href="<?php echo base_url() ?>index.php/admin/add_member"><i class="icon-file-alt"></i><span class="hidden-tablet"> Create Member of Parliament Profile </span></a></li>
								<li><a class="submenu" href="<?php echo base_url() ?>index.php/admin/show_member"><i class="icon-file-alt"></i><span class="hidden-tablet">  View  Member of Parliament Profile </span></a></li>
							
							</ul>	
						</li>
						<!-- Purchase end  -->
						
						
						
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->