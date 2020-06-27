<?php 

include ("header_user_before_verification.php");

$i=0;
foreach ($verifications as $verification_info) {
	# code...
	$i++;
	$verificationcode=$verification_info->verification_code;

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
					<a href="#">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Verification</a>
				</li>
			</ul>
			
		

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Enter the verification code we have sent on your mobile number</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url(); ?>index.php/user/check_verification_user" method="POST" enctype="multipart/form-data">
							<fieldset>


							  <!-- verification code starts !-->
							<div class="control-group">
								<label class="control-label" for="selectError">Enter verification code</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="verification_code" id="verificationcode" type="text" required="">
								</div>
							  </div>
							  <!-- verification code ends  !-->
							  
							  
							  <div class="form-actions">
								<button id="check_verification_code" type="submit" class="btn btn-primary">Verify Mobile Number</button>
								
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
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
<?php include"footer.php"; ?>
