<?php 

include ("header.php");

$i=0;
foreach ($deptemps as $deptemp) {
	# code...
	$i++;
	$deptemp_name=$deptemp->deptemp_name;
	$deptemp_address=$deptemp->deptemp_address;
	$deptemp_email=$deptemp->deptemp_email;
	$deptemp_phone=$deptemp->deptemp_phone;
	$deptemp_des=$deptemp->deptemp_des;

	$deptid=$deptemp->dept_id;
	$deptname=$deptemp->dept_name;



	$divisionid=$deptemp->division_id;
	$divisionname=$deptemp->division_name;
	$districtid=$deptemp->district_id;
	$districtname=$deptemp->district_name;
	$thanaid=$deptemp->thana_id;
	$thananame=$deptemp->thana_name;

	$deptemp_username=$deptemp->deptemp_username;
	$deptemp_password=$deptemp->deptemp_password;

	$id=$deptemp->deptemp_id;
	
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
					<a href="#">Department Employee Profile</a>
				</li>
			</ul>
			
		

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Update Department Employee Profile</h2>

					</div>
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url(); ?>index.php/process/up_deptemp/<?php echo $id ?>" method="POST">
							<fieldset>
							<!--  Employee Name starts !-->
							<div class="control-group">
								<label class="control-label" for="selectError">Employee Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="deptemp_name" id="focusedInput" type="text" value="<?php echo $deptemp_name ?>" required="">
								</div>
							  </div>
							  <!--  Employee Name ends  !-->
							  
							  
							  <!--  Employee Address starts !-->
							<div class="control-group">
								<label class="control-label" for="selectError">Employee Address</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="deptemp_address" id="focusedInput" type="text" value="<?php echo $deptemp_address ?>" required="">
								</div>
							  </div>
							  <!--  Employee Address ends  !-->
							  
							 
							

                                <!--  Employee Email start !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Employee Email</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="deptemp_email" id="focusedInput" type="email" value="<?php echo $deptemp_email ?>" required="">
								</div>
							  </div>
							   <!-- Employee Email End  !-->

						        <!--  Employee Phone start !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Employee Phone</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="deptemp_phone" id="focusedInput" type="text" value="<?php echo $deptemp_phone ?>" required="">
								</div>
							  </div>
							   <!-- Employee Phone End  !-->


                                <!--  Employee Designation start !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Employee Designation</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="deptemp_des" id="focusedInput" type="text" value="<?php echo $deptemp_des ?>" required="">
								</div>
							  </div>
							   <!-- Employee Designation End  !-->


                               <!-- Department Name Starts !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Department Name</label>
								<div class="controls">


								<select name="dept_id" id="selectError4" data-rel="chosen">
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
							   <!-- Department Name End  !-->



                                 <!--  Division starts !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Division</label>
								<div class="controls">

                                <select name="division_id" id="selectError1" data-rel="chosen">
								<option value="<?php echo $divisionid  ?>" selected="yes"> <?php echo $divisionname ?> </option>
								<?php
								$i=0;
								foreach ($division as $divisions) {
									# code...
									$i++;?>
									<option value="<?php echo $divisions->division_id  ?>"> <?php echo $divisions->division_name ?> </option>
								<?php 
								}

								?>

								</select>
								
								</div>
							  </div>
							   <!--  Division End  !-->


                                <!--  District start !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">District</label>
								<div class="controls">
								
								<select name="district_id" id="selectError2" data-rel="chosen">
								<option value="<?php echo $districtid  ?>" selected="yes"> <?php echo $districtname ?> </option>
								<?php
								$i=0;
								foreach ($district as $districts) {
									# code...
									$i++;?>
									<option value="<?php echo $districts->district_id  ?>"> <?php echo $districts->district_name ?> </option>
								<?php 
								}

								?>

								</select>
								
								</div>
							  </div>
							   <!--  District End  !-->	

                                <!--  Thana start !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Thana</label>
								<div class="controls">
								
								<select name="thana_id" id="selectError3" data-rel="chosen"> <!-- use different id for different dropdown of same page -->
								<option value="<?php echo $thanaid  ?>" selected="yes"> <?php echo $thananame ?> </option>
								<?php
								$i=0;
								foreach ($thana as $thanas) {
									# code...
									$i++;?>
									<option value="<?php echo $thanas->thana_id  ?>"> <?php echo $thanas->thana_name ?> </option>
								<?php 
								}

								?>

								</select>
								
								</div>
							  </div>
							   <!--  Thana End  !-->	

							    <!--  Employee Usrname start !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Employee User Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="deptemp_username" id="focusedInput" type="text" value="<?php echo $deptemp_username ?>" required="">
								</div>
							  </div>
							   <!-- Employee User Name End  !-->	

                                <!--  Employee Password start !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Employee Password</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="deptemp_password" id="focusedInput" type="password" value="<?php echo $deptemp_password ?>" required="">
								</div>
							  </div>
							   <!-- Employee Password End  !-->								  
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