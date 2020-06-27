<?php 

include ("header_user_before_verification.php");
$i=0;
foreach ($verifications as $verification_info) {
	# code...
	$i++;
	$mobilenumber=$verification_info->user_phone;
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
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Before Continue, Please verify your mobile number.</h2>

					</div>
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url(); ?>index.php/user/add_verification_user" method="POST" enctype="multipart/form-data">
							<fieldset>
							  

							  <!-- verification code starts !-->
							<div class="control-group">
								
								<div class="controls">
								  <input class="input-xlarge focused" value="<?php echo $mobilenumber; ?>" id="mobilenumber" type="hidden">
								</div>
							  </div>
							  <!-- verification code ends  !-->							  
				

							  <!-- verification code starts !-->
							<div class="control-group">
								<div class="controls">
								  <input class="input-xlarge focused" value="<?php echo $verificationcode; ?>" id="verificationcode" type="hidden">
								</div>
							  </div>
							  <!-- verification code ends  !-->

			                <div class="form-actions">
								<button  id="send_msg" class="btn btn-primary">Send me verification code</button>
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


	<!-- start: JavaScript-->
 	<script src="<?php echo(rsc.'js/jquery-1.9.1.min.js') ?>"></script>
		<script type="text/javascript">


//code for bulk sms starts

$(document).ready(function()
{
	verification=$('#verificationcode').val();
	console.log(verification);
mobile=$('#mobilenumber').val();
console.log(mobile);
	$('#send_msg').click(function()
	{
	sms_info={
	"user":"asifulhoque001",
	"password":"43azb5Pl",
	
};

sms_info['sender']="Citizen";
sms_info['SMSText']="Your Citizen verification code is "+verification;

sms_info['GSM']="88"+mobile;

$.ajax({
url:"http://api.mimsms.com/api/sendsms/plain",
method:"post",
data:sms_info,

}).done(function(data)
	{
		alert(data);
	});
});

	});

</script>

//code for bulk sms ends

	
<?php include"footer.php"; ?>
