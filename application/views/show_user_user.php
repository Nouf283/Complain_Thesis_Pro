<?php include"header_user.php"; ?>
			
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
				<li><a href="#">User Profile</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>User Profile</h2>

					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>User Name</th>
								   <th>Email</th>
								    <th>Phone</th>
								  
								 
							  </tr>
						  </thead>   
						  <tbody>
						 


<!-- modify the code below for retrieve -->

						 <?php 
                         $i=0;
                         foreach ($users as $user) {
                         ?>
                         <tr>
                     <td class="center"><?php  echo $user->user_name ?> </td>
                      
                      <td class="center"><?php  echo $user->user_email ?> </td>
                      <td class="center"><?php  echo $user->user_phone ?> </td>


                    
                    </tr>
                      <?php } ?>


                      <!-- modify the code below for retrieve ends -->
						
						
								                                   
							  </tbody>
						 </table>  
						 
					</div>
				</div><!--/span-->
				
				</div><!--/row-->
    

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		

	
	<div class="clearfix"></div>
	
<?php include"footer.php"; ?>