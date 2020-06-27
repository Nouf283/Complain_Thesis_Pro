<?php 

include ("header.php");
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
					<a href="#">User</a>
				</li>
			</ul>
			
		

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Create User</h2>

					</div>
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url(); ?>index.php/process/add_user" method="POST">
							<fieldset>

							<!--  User Name starts !-->
							<div class="control-group">
								<label class="control-label" for="selectError">User Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="user_name" id="focusedInput" type="text" placeholder="Enter Name" required="">
								</div>
							  </div>
							  <!--  User name ends  !-->

                                 <!--  Passwords start !-->
							   
							  <div class="control-group">
								<label class="control-label" for="focusedInput">User Password</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="user_password" id="focusedInput" type="password" placeholder="Enter Password" required="">
								</div>
							  </div>
							   <!--  Passwords End  !-->
							  
							  
							  <!--  Email starts !-->
							<div class="control-group">
								<label class="control-label" for="selectError">User Email</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="user_email" id="focusedInput" type="email" placeholder="Enter Email" required="">
								</div>
							  </div>
							  <!-- Email ends  !-->
							  
							 
							

                               <!--  Phone starts !-->
						
							  <div class="control-group">
								<label class="control-label" for="focusedInput">User Phone</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="user_phone" id="focusedInput" type="text" placeholder="Enter Phone" required="">
								</div>
							  </div>
							   <!--  Phone End  !-->
						
							  
							  
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