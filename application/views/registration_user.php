		<html>

		<head>
			
			<!-- start: Meta -->
			<meta charset="utf-8">
			<title>Citizen</title>
			<meta name="description" content="Bootstrap Metro Dashboard">
			
			<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
			<!-- end: Meta -->
			
			<!-- start: Mobile Specific -->
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- end: Mobile Specific -->
			
			<!-- start: CSS -->
			<link id="bootstrap-style" href="<?php echo (rsc.'css/bootstrap.min.css') ?>" rel="stylesheet">
			<script src="<?php echo(rsc.'js/jquery-1.9.1.min.js') ?>" > </script>
			<link href="<?php echo(rsc.'css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
			<link id="base-style" href="<?php echo(rsc.'css/style.css') ?>" rel="stylesheet">
			<link id="base-style-responsive" href="<?php echo (rsc.'css/style-responsive.css') ?>" rel="stylesheet">
			<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>



			<!-- end: CSS -->
			
             
			<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
			<!--[if lt IE 9]>
			  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
				<link id="ie-style" href="css/ie.css" rel="stylesheet">
			<![endif]-->
			
			<!--[if IE 9]>
				<link id="ie9style" href="css/ie9.css" rel="stylesheet">
			<![endif]-->
				

			<!-- start: Favicon -->
			<link rel="shortcut icon" href="<?php echo(rsc.'img/favicon.ico') ?>">
			<!-- end: Favicon -->


			
					<style type="text/css">
					body { background: url(<?php echo(rsc.'img/bg-login.jpg') ?>) !important; }
				</style>
				
				
				
		</head>

		<body>
				<div class="container-fluid-full">
				<div class="row-fluid">
							
					<div class="row-fluid">
						<div class="login-box">
							<div class="icons">
								<a href="<?php echo base_url() ?>index.php/user/index"><i class="halflings-icon home"></i></a>
							</div>
							<h2>Create an account</h2>
							
								<fieldset>
									
									<div class="input-prepend" title="Username">
										<span class="add-on"><i class="halflings-icon user"></i></span>
										<input class="input-large span10" name="user_name" id="username" type="text" placeholder="type name" required="" />
									</div>
									<div class="clearfix"></div>

									<div class="input-prepend" title="Password">
										<span class="add-on"><i class="halflings-icon lock"></i></span>
										<input class="input-large span10" name="user_password" id="password" type="password" placeholder="type password" required=""/>
									</div>
									<div class="clearfix"></div>

									<div class="input-prepend" title="User Email" >
		                                <div id="mailbox" > </div>
										<span class="add-on"><i class="halflings-icon user"></i></span>
										<input class="input-large span10" name="user_email" id="useremail" type="email" placeholder="type email" required=""/>
									</div>
									<div class="clearfix"></div>

									<div class="input-prepend" title="User Phone">
										<span class="add-on"><i class="halflings-icon user"></i></span>
										<input class="input-large span10" name="user_phone" id="userphone" type="text" placeholder="type phone" required=""/>
									</div>
									<div class="clearfix"></div>
								

									<div class="button-login">	
										<button type="submit" id="submit"  class="btn btn-primary">Create account</button>
									
									</div>

									<div class="clearfix"></div>
							
							<hr>
				
						</div><!--/span-->
					</div><!--/row-->
					

			</div><!--/.fluid-container-->
			
				</div><!--/fluid-row-->
			
			<!-- start: JavaScript-->
		 	</script>
			  
				


					<script type="text/javascript">

		
$(window).load(function()
{
	
	$("#submit").click(function()
	{
		
              mail=$("#useremail").val();
		      username=$("#username").val();
		      phone=$("#userphone").val();
		      password=$("#password").val();



		    $.ajax({
		           url:"http://localhost/complain/index.php/user/check_validation",
		           method:"post",
		           data:{
			           "mail":mail,
			           "phone":phone,
			           "username":username
		               },
		           dataType: "json",

		    }).done(function(data)
			{
				console.log(data);

             if(data['mail']==1) //check if the input email is matched with any of the existing emails
             {
             	alert("That email is already used. Try another.");
             }
             if(data['user']==1) //check if the input user name is matched with any of the existing user names
             {
             	alert("That user name is taken. Try another.");

             }
             if(data["phone"]==1) //check if the input phone is matched with any of the existing phones
             {
             	alert("That phone number is already used. Try another.");
             }
		     if(mail=="" || username=="" || phone=="" || password=="") //show error if any field is empty
		     {
		      			alert("Field can not be empty");
		     }
		     //if no duplicate email, user name, phone is found and no field is empty then register the user
             if(data['mail']==0 && data['user']==0 && data['phone']==0 && mail!="" && username!="" && phone!="" && password!="")
		          {
                  	mail=$("#useremail").val();
		       		username=$("#username").val();
		       		phone=$("#userphone").val();
		       		password=$("#password").val();
		       	
		       	$.ajax({
		           url:"http://localhost/complain/index.php/user/add_user",
		           method:"post",
		           data:{
		               "user_name":username,
		               "user_password":password,
		               "user_email":mail,
		               "user_phone":phone,
		               },
		           dataType: "json",


		          }).done(function(data)
		          {
		          	if(data==1) 
		          	{
		          		alert("You have been successfully registered");
		          		window.location.href="http://localhost/complain/index.php/loginuser";
		          	}


		          });
		          }

			});
		         
		   
	});
   
		       


});
		


		     
				</script>
			
		</body>
		</html>
