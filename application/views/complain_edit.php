<?php 

include ("header.php");


$i=0;
foreach ($complains as $complain) {
	# code...
	$i++;

    $problemid=$complain->problem_id;
	$problemname=$complain->problem_name;
	$divisionid=$complain->division_id;
	$divisionname=$complain->division_name;
	$districtid=$complain->district_id;
	$districtname=$complain->district_name;
	$thanaid=$complain->thana_id;
	$thananame=$complain->thana_name;

	$memareaid=$complain->memarea_id;
	$memareaname=$complain->memarea_name;

	$location=$complain->location;
	$complain_des=$complain->complain_des;

	$complain_video=$complain->complain_video;
	$complain_status=$complain->complain_status;

	$id=$complain->complain_id;
	
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
					<a href="#">Complaint</a>
				</li>
			</ul>
			
		

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Update Complaint</h2>

					</div>
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url(); ?>index.php/process/up_complain/<?php echo $id ?>" method="POST">
							<fieldset>

							<!--  Problem Name starts !-->

								<div class="control-group">
								<label class="control-label" for="selectError"  required="">Problem Name</label>
								<div class="controls">
								
								<!-- FETCHING Problem Name !-->
								
								<select name="problem_id" id="selectError1" data-rel="chosen">
								<option value="<?php echo $problemid  ?>" selected="yes"> <?php echo $problemname ?> </option>
								<?php
								$i=0;
								foreach ($problem as $problems) {
									# code...
									$i++;?>
									<option value="<?php echo $problems->problem_id  ?>"> <?php echo $problems->problem_name ?> </option>
								<?php 
								}

								?>

								</select>
								
								</div>
							  </div>

							  <!--  Problem Name ends !-->


                               <!--  Division starts !-->

								<div class="control-group">
								<label class="control-label" for="selectError"  required="">Division</label>
								<div class="controls">
								
								<!-- FETCHING Division NAME !-->
								
								<select name="division_id" id="selectError2" data-rel="chosen">
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

							  <!--  Division ends !-->
							  
							  

							  <!--  District starts !-->
								<div class="control-group">
								<label class="control-label" for="selectError">District</label>
								<div class="controls">
								
								<!-- FETCHING District NAME !-->
								
								<select name="district_id" id="selectError3" data-rel="chosen">
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

							  <!--  District ends  !-->
							  

							  <!--  Thana Starts  !-->
							
								<div class="control-group">
								<label class="control-label" for="selectError">Thana</label>
								<div class="controls">
								
								<!-- FETCHING Thana NAME !-->
								
								<select name="thana_id" id="selectError4" data-rel="chosen"> <!-- use different id for different dropdown of same page -->
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

							   <!--  Thana Ends  !-->


					          <!-- Parliamentary Constituency Starts !-->
							  <div class="control-group">
								<label class="control-label" for="selectError">Parliamentary Constituency</label>
								<div class="controls">


								<select name="memarea_id" id="selectError8" >  <!-- data-rel="chosen" -->
								
								<option value="<?php echo $memareaid  ?>" selected="yes"> <?php echo $memareaname ?> </option>

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
							   <!-- Parliamentary Constituency End  !-->	


							  <!-- User Location starts !-->
							<div class="control-group">
								<label class="control-label" for="selectError">User Location</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="location" id="focusedInput" type="text" value="<?php echo $location ?>" required="">
								</div>
							  </div>
							  <!-- User Location ends  !-->
							  
							  
							

                               <!--  Complaint Description Starts  !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Complaint Description</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="complain_des" id="focusedInput" type="text" value="<?php echo $complain_des ?>" required="">
								</div>
							  </div>
							   <!--  Complaint Description End  !-->	

                               <!--  Complaint Description Starts  !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Complaint Video</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="complain_video" id="focusedInput" type="text" value="<?php echo $complain_video ?>" required="">
								</div>
							  </div>
							   <!--  Complaint Description End  !-->							   
						
						   

                               <!--  Division starts !-->

								<div class="control-group">
								<label class="control-label" for="selectError7"  required="">Complain Status</label>
								<div class="controls">
								
								<!-- FETCHING Division NAME !-->
								
								<select name="complain_status" id="selectError7" data-rel="chosen">
								<option value="<?php echo $id  ?>" selected="yes"> <?php echo $complain_status ?> </option>
								<option value="Public"> Public </option>
								<option value="Private"> Private </option>
								</select>
								
								</div>
							  </div>

							  <!--  Division ends !-->


						
							  
							  
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
