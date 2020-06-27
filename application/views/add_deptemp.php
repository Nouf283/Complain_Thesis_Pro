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
					<a href="#">Department Employee Profile</a>
				</li>
			</ul>
			
		

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Create Department Employee Profile</h2>

					</div>
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url(); ?>index.php/process/add_deptemp" method="POST">
							<fieldset>
							<!--  Employee Name starts !-->
							<div class="control-group">
								<label class="control-label" for="selectError">Employee Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="deptemp_name" id="focusedInput" type="text" placeholder="Enter Employee Name" required="">
								</div>
							  </div>
							  <!--  Employee Name ends  !-->
							  
							  
							  <!--  Employee Address starts !-->
							<div class="control-group">
								<label class="control-label" for="selectError">Employee Address</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="deptemp_address" id="focusedInput" type="text" placeholder="Enter Employee  Address" required="">
								</div>
							  </div>
							  <!--  Employee Address ends  !-->
							  
							 
							

                                <!--  Employee Email start !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Employee Email</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="deptemp_email" id="focusedInput" type="email" placeholder="Enter Employee Email" required="">
								</div>
							  </div>
							   <!-- Employee Email End  !-->

						        <!--  Employee Phone start !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Employee Phone</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="deptemp_phone" id="focusedInput" type="text" placeholder="Enter Employee Phone" required="">
								</div>
							  </div>
							   <!-- Employee Phone End  !-->


                                <!--  Employee Designation start !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Employee Designation</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="deptemp_des" id="focusedInput" type="text" placeholder="Enter Employee Designation" required="">
								</div>
							  </div>
							   <!-- Employee Designation End  !-->




					          <!-- Department Name Starts !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Department Name</label>
								<div class="controls">


								<select name="dept_id" id="selectError4" >  <!-- data-rel="chosen" -->
								
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

								<select name="division_id" id="divisions" > <!-- data-rel="chosen" -->
								
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
								
								<select name="district_id" id="districts" >
								

								</select>
								
								</div>
							  </div>
							   <!--  District End  !-->	

                                <!--  Thana start !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Thana</label>
								<div class="controls">
								
								<select name="thana_id" id="thanas" > <!-- use different id for different dropdown of same page -->
								
								
								</select>
								
								</div>
							  </div>
							   <!--  Thana End  !-->	

							    <!--  Employee Usrname start !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Employee User Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="deptemp_username" id="focusedInput" type="text" placeholder="Enter Employee User Name" required="">
								</div>
							  </div>
							   <!-- Employee User Name End  !-->	

                                <!--  Employee Password start !-->
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Employee Password</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="deptemp_password" id="focusedInput" type="password" placeholder="Enter Employee Password" required="">
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

<!-- code to fetch only those districts of the selected division-->
<script>

$(window).load(function()
{
load_district();

});

$(document).ready(function()
{
	load_thana();

$('#divisions').change(function()
{
load_district();
load_thana();
});
$('#districts').change(function()
{
load_thana();
});

});


function load_district()
{
var div_id=$('#divisions').val();
	console.log(div_id);
$('#districts').empty();
$.ajax({
  url: "http://localhost/complain/index.php/admin/get_districts_api/"+div_id,
  
   dataType: "json",
  
}).done(function(data) {

console.log(data);
$('#districts').append("<option>Select a district </option>");
$.each(data,function(index,value)
{
	console.log(data[index]['district_id']);
	console.log(data[index]['district_name']);

  $('#districts').append(" <option value="+data[index]['district_id']+" ><span>"+data[index]['district_name']+"</span></option>");
});


});


}


	
function load_thana()
{
var dis_id=$('#districts').val();
	console.log(dis_id);
$('#thanas').empty();
$.ajax({
  url: "http://localhost/complain/index.php/admin/get_thanas_api/"+dis_id,
   dataType: "json",
  
}).done(function(data) {

console.log(data);
$('#thanas').append("<option>Select a Thana </option>");
$.each(data,function(index,value)
{
	console.log(data[index]['thana_id']);
	console.log(data[index]['thana_name']);

  $('#thanas').append("<option value="+data[index]['thana_id']+" ><span>"+data[index]['thana_name']+"</span></option>");
});


});


}


</script>