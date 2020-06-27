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
					<a href="#">Member of Parliament Profile</a>
				</li>
			</ul>
			
		

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Create Member of Parliament Profile</h2>

					</div>
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url(); ?>index.php/process/add_member" method="POST">
							<fieldset>
							<!--  Name starts !-->
							<div class="control-group">
								<label class="control-label" for="selectError">Member of Parliament Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="member_name" id="focusedInput" type="text" placeholder="Enter Member of Parliament Name" required="">
								</div>
							  </div>
							  <!--  name ends  !-->
                                
                                <!--Member Area start !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Member of Parliament Area</label>
								<div class="controls">
								 
								 <select name="memarea_id" id="selectError1" data-rel="chosen">
								
								<?php
								$i=0;
								foreach ($memarea as $memareas) {
									# code...
									$i++;?>
									<option value="<?php echo $memareas->memarea_id  ?>"> <?php echo $memareas->memarea_name ?> </option>
								<?php 
								}

								?>

								</select>
								
								</div>
							  </div>
							     <!--Member Area ends !-->
							  
							 
							

                                  <!--Email start !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Member of Parliament Email</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="member_email" id="focusedInput" type="email" placeholder="Enter Member of Parliament Email" required="">
								</div>
							  </div>
							   <!--  email End  !-->

						         <!--Phone start !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Member of Parliament Phone</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="member_phone" id="focusedInput" type="text" placeholder="Enter Member of Parliament Phone" required="">
								</div>
							  </div>
							   <!--  Phone End  !-->
							
								<!--  Member of Parliament Usrname start !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput"> Member of Parliament User Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="member_username" id="focusedInput" type="text" placeholder="Enter  Member of Parliament User Name" required="">
								</div>
							  </div>
							   <!--  Member of Parliament User Name End  !-->	

                                <!--   Member of Parliament Password start !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput"> Member of Parliament Password</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="member_password" id="focusedInput" type="password" placeholder="Enter  Member of Parliament Password" required="">
								</div>
							  </div>
							   <!--  Member of Parliament Password End  !-->							  
							  
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