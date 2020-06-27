<?php 
include"header.php"; 

$i=0;
foreach ($admins as $admin) {
	# code...
	$admin_name=$admin->admin_name;
	$admin_password=$admin->admin_password;
	$admin_email=$admin->admin_email;
	$admin_phone=$admin->admin_phone;
	$id=$admin->admin_id;
	$i++;
}


?>		
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo base_url() ?>index.php/admin/index">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Admin</a>
				</li>
			</ul>
			
		

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Update Admin</h2>

					</div>
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url(); ?>index.php/process/up_admin/<?php echo $id ?>" method="POST">
							<fieldset>
							<!--  Admin Name starts !-->
							<div class="control-group">
								<label class="control-label" for="selectError">Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="admin_name" id="focusedInput" type="text" value="<?php echo $admin_name ?>" required="">
								</div>
							  </div>
							  <!--  Admin name ends  !-->

                               


							  <!-- passwords start !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Password</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="admin_password" id="focusedInput" type="password" value="<?php echo $admin_password ?>" required="">
								</div>
							  </div>
							   <!--  Passwords End  !-->
							  
							  
							  <!--  Admin Email starts !-->
							<div class="control-group">
								<label class="control-label" for="selectError">Email</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="admin_email" id="focusedInput" type="email" value="<?php echo $admin_email ?>"  required="">
								</div>
							  </div>
							  <!--  Admin Email ends  !-->
							  
							

                               <!--  Phone Starts  !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Phone</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="admin_phone" id="focusedInput" type="text" value="<?php echo $admin_phone ?>"  required="">
								</div>
							  </div>
							   <!-- Phone End  !-->
						
							  
							  
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Save changes</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
			
			<!--/row-->
    

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	
	<div class="clearfix"></div>
	
	<?php include"footer.php"; ?>