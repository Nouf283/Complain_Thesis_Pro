<?php 

include ("header.php");


$i=0;
foreach ($deptheads as $depthead) {
	# code...
	$i++;
	$depthead_name=$depthead->depthead_name;
	$deptid=$depthead->dept_id;
	$deptname=$depthead->dept_name;
    $depthead_address=$depthead->depthead_address;
    $depthead_email=$depthead->depthead_email;
    $depthead_phone=$depthead->depthead_phone;
    $depthead_username=$depthead->depthead_username;
    $depthead_password=$depthead->depthead_password;

	$id=$depthead->depthead_id;
	
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
					<a href="#">Department Head Profile</a>
				</li>
			</ul>
			
		

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Update Department Head Profile</h2>

					</div>
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url(); ?>index.php/process/up_depthead/<?php echo $id ?>" method="POST">
							<fieldset>
							<!--  DepartmentHead Name starts !-->
							<div class="control-group">
								<label class="control-label" for="selectError">Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="depthead_name" id="focusedInput" type="text" value="<?php echo $depthead_name ?>">
								</div>
							  </div>
							  <!--  DepartmentHead name ends  !-->

                              <!--DepartmentName start !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Department Name</label>
								<div class="controls">

								 <select name="dept_id" id="selectError1" data-rel="chosen">
								<option value="<?php echo $deptid  ?>" selected="yes"> <?php echo $deptname ?> </option>
								<?php
								$i=0;
								foreach ($dept as $depts) {
									# code...
									$i++;?>
									<option value="<?php echo $depts->dept_id  ?>"> <?php echo $depts->dept_name ?> </option>
								<?php 
								}

								?>

								</select>
								
								</div>
							  </div>
							   <!--DepartmentName ends !-->
							  
							  
							  <!--  Address starts !-->
							<div class="control-group">
								<label class="control-label" for="selectError">Address</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="depthead_address" id="focusedInput" type="text" value="<?php echo $depthead_address ?>">
								</div>
							  </div>
							  <!--  Address ends  !-->
							  
							  
							

                               <!--Email start !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Email</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="depthead_email" id="focusedInput" type="email" value="<?php echo $depthead_email ?>">
								</div>
							  </div>
							   <!--Email ends!-->
						       
						       <!--Phone starts !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Phone</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="depthead_phone" id="focusedInput" type="text" value="<?php echo $depthead_phone ?>">
								</div>
							  </div>
							   <!--  phone End  !-->

							   <!--  Department Head Usrname start !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Department Head User Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="depthead_username" id="focusedInput" type="text" value="<?php echo $depthead_username ?>" required="">
								</div>
							  </div>
							   <!-- Department Head User Name End  !-->	

                                <!--  Department Head Password start !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Department Head Password</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="depthead_password" id="focusedInput" type="password" value="<?php echo $depthead_password ?>" required="">
								</div>
							  </div>
							   <!-- Department Head Password End  !-->	
													  
							  
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