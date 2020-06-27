<?php 

include ("header.php");

$i=0;
foreach ($probcats as $problem) {
	# code...
	$problem_name=$problem->problem_name;
	$deptid=$problem->dept_id;
	$deptname=$problem->dept_name;
	$id=$problem->problem_id;
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
					<a href="#">Problem Category</a>
				</li>
			</ul>
			
		

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Update Problem Category</h2>

					</div>
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url(); ?>index.php/process/up_probcat/<?php echo $id ?>" method="POST">
							<fieldset>

							<!--  Problen Name  starts !-->
							<div class="control-group">
								<label class="control-label" for="selectError">Problem Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="problem_name" id="focusedInput" type="text" value="<?php echo $problem_name ?>" required="">
								</div>
							  </div>
							  <!-- Problem Name ends  !-->

							 
						
                               <!-- Problem Name Starts !-->
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
							   <!-- Problem Name End  !-->

							  
							  
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