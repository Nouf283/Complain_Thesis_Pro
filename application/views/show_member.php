<?php include"header.php"; ?>
			
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
				<li><a href="#">Member of Parliament Profile</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Member of Parliament Profile</h2>

					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Name</th>
								   <th>Member Area</th>
								    <th>Email</th>
								   <th>Phone</th>
								   <th>User Name</th>
								   <th>Password</th>
								   <th>Action</th>
								 
							  </tr>
						  </thead>   
						  <tbody>
						 


						<?php 
                         $i=0;
                         foreach ($members as $member) {
                         ?>
                         <tr>
                     <td class="center"><?php  echo $member->member_name ?> </td>
                     <td class="center"><?php  echo $member->memarea_name ?> </td>
                     <td class="center"><?php  echo $member->member_email ?> </td>
                     <td class="center"><?php  echo $member->member_phone ?> </td>
                    
                     <td class="center"><?php  echo $member->member_username ?> </td>
                     <td class="center"><?php  echo $member->member_password ?> </td>
                     
                     	<td class="center">
									
									<a class="btn btn-info" href="<?php echo base_url(); ?>index.php/admin/member_edit/<?php echo $member->member_id ?>">
										<i class="halflings-icon white edit"></i>                                            
									</a>
									<a class="btn btn-danger" onclick="return confirm('Are you sure to delete this member?')"  href="<?php echo base_url() ?>index.php/admin/member_delete/<?php echo $member->member_id ?> ">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>

                    
                    </tr>
                      <?php } ?>

						
								                                   
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