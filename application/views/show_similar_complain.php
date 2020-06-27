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
				<li><a href="#">Complaint</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Complaint</h2>

					</div>
					<div class="box-content" style="overflow-x:auto">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Problem Name</th>
								   <th>Department</th>
								  <th>Division</th>
								   <th>District</th>
								    <th>Thana</th>
								    <th>Parliamentary Constituency</th>
								   <th>Location</th>
								   <th>Complaint Description</th>
								   	<th>Complaint Video Evidence</th>
								   <th>Complaint Status</th>
								   <th>Complaint Date</th>
								   <!--  <th>Total votes </th> -->
								   <th>Vote</th>


								    
								   
								 
							  </tr>
						  </thead>   
						  <tbody>
						 



						<?php 
                         $i=0;
                         foreach ($complains as $complain) {
                         ?>
                         <tr>

                     <td class="center"><?php  echo $complain->problem_name ?> </td>
                      <td class="center"><?php  echo $complain->dept_name ?> </td>
                     <td class="center"><?php  echo $complain->division_name ?> </td>
                     <td class="center"><?php  echo $complain->district_name ?> </td>
                     <td class="center"><?php  echo $complain->thana_name ?> </td>
                      <td class="center"><?php  echo $complain->memarea_name ?> </td>
                     <td class="center"><?php  echo $complain->location ?> </td>
                     <td class="center"><?php  echo $complain->complain_des ?> </td>

                     <td class="center"><?php  echo $complain->complain_video ?> </td>
                     <td class="center"><?php  echo $complain->complain_status ?> </td>

                     <td class="center"><?php  echo $complain->current_date ?> </td>
                    

                     
                     	<td class="center">
									

							<a class="btn btn-info" onclick="return confirm('Are you sure you want to vote this?')"  href="<?php echo base_url(); ?>index.php/user/user_vote/<?php  echo $complain->complain_id ?>/<?php echo  $this->session->userdata('userid'); ?>">
								<i class="halflings-icon white edit"></i> 
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