<?php include "header.php";


$i=0;

foreach ($no_problem_cat as $num_prob_cats ) { //no_problem_cat is renamed ro num_prob_cats
$number_of_problem_categorys=$num_prob_cats->number_of_id; //number_of_id is the name of total row of each table. It is used in count_num model. //$num_prob_cats->number_of_id returns the total number of rows of each table //number_of_problem_categorys is used defined variable
}

foreach ($no_admin as $num_admins ) {
$number_of_admins=$num_admins->number_of_id;
}

foreach ($no_user as $no_users ) {
$no_of_user=$no_users->number_of_id;
}

foreach ($no_division as $no_divisions ) {
$no_of_division=$no_divisions->number_of_id;
}

foreach ($no_district as $no_districts ) {
$no_of_district=$no_districts->number_of_id;
}


foreach ($no_thana as $no_thanas ) {
$no_of_thana=$no_thanas->number_of_id;
}

foreach ($no_dept as $no_depts ) {
$no_of_dept=$no_depts->number_of_id;
}

foreach ($no_depthead as $no_deptheads ) {
$no_of_depthead=$no_deptheads->number_of_id;
}

foreach ($no_deptemp as $no_deptemps ) {
$no_of_deptemp=$no_deptemps->number_of_id;
}

foreach ($no_complain as $no_complains ) {
$no_of_complain=$no_complains->number_of_id;
}

foreach ($no_progress as $no_progresses ) {
$no_of_progress=$no_progresses->number_of_id;
}

foreach ($no_memarea as $no_memareas ) {
$no_of_memarea=$no_memareas->number_of_id;
}

foreach ($no_member as $no_members ) {
$no_of_member=$no_members->number_of_id;
}


$i++;

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
				<li><a href="<?php echo base_url() ?>index.php/admin/index">Dashboard</a></li>
			</ul>

			<div class="row-fluid">
			

				<!-- summery of product end !-->				
				<div class="span3 statbox red" onTablet="span6" onDesktop="span3">
					
					<div class="number"><?php echo $number_of_admins ?></div>
					<div class="title">Admin</div>
					<div class="footer" style="background:#BC3000;"> <!-- Plan B: style="background:red;" -->
						<a href="<?php echo base_url() ?>index.php/admin/show_admin"> read full report</a>
					</div>
				</div>
				
				<div class="span3 statbox blue noMargin" onTablet="span6" onDesktop="span3">
					
					<div class="number"><?php echo $no_of_user ?></div>
					<div class="title">User</div>
					<div class="footer" style="background:#246EBF;">
						<a href="<?php echo base_url() ?>index.php/admin/show_user"> read full report</a>
					</div>
				</div>

					<div class="span3 statbox green" onTablet="span6" onDesktop="span3">
					
					<div class="number"><?php echo $no_of_complain ?></div>
					<div class="title">Complaint</div>
					<div class="footer" style="background:#008300;">
						<a href="<?php echo base_url() ?>index.php/admin/show_complain"> read full report</a>
					</div>
				</div>	

				<div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
					
					<div class="number"><?php echo $no_of_progress ?></div>
					<div class="title">Complaint Progress Status</div>
					<div class="footer" style="background:#4D3095;">
						<a href="<?php echo base_url() ?>index.php/admin/show_progress"> read full report</a>
					</div>
				</div>	



			</div>

				
		


			<div class="row-fluid">		


					<div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
					
					<div class="number"><?php echo $no_of_dept ?></div>
					<div class="title">Department Category</div>
					<div class="footer" style="background:#4D3095;">
						<a href="<?php echo base_url() ?>index.php/admin/show_deptcat"> read full report</a>
					</div>
				</div>


					<div class="span3 statbox green" onTablet="span6" onDesktop="span3">
					
					<div class="number"><?php echo $number_of_problem_categorys ?></div>
					<div class="title">Problem Category</div>
					<div class="footer" style="background:#008300;">
						<a href="<?php echo base_url() ?>index.php/admin/show_probcat"> read full report</a>
					</div>	
				</div>




				<div class="span3 statbox blue noMargin" onTablet="span6" onDesktop="span3">
					
					<div class="number"><?php echo $no_of_depthead ?></div>
					<div class="title">Department Head</div>
					<div class="footer" style="background:#246EBF;">
						<a href="<?php echo base_url() ?>index.php/admin/show_depthead"> read full report</a>
					</div>
				</div>	

			   <div class="span3 statbox red" onTablet="span6" onDesktop="span3">
					
					<div class="number"><?php echo $no_of_deptemp ?></div>
					<div class="title">Department Employee</div>
					<div class="footer" style="background:#BC3000;">
						<a href="<?php echo base_url() ?>index.php/admin/show_deptemp"> read full report</a>
					</div>
				</div>


			</div>



			<div class="row-fluid">		

				<div class="span3 statbox red" onTablet="span6" onDesktop="span3">
					
					<div class="number"><?php echo $no_of_division ?></div>
					<div class="title">Division</div>
					<div class="footer" style="background:#BC3000;">
						<a href="<?php echo base_url() ?>index.php/admin/show_division"> read full report</a>
					</div>
				</div>	

				<div class="span3 statbox blue noMargin" onTablet="span6" onDesktop="span">
					
					<div class="number"><?php echo $no_of_district ?></div>
					<div class="title">District</div>
					<div class="footer" style="background:#246EBF;">
						<a href="<?php echo base_url() ?>index.php/admin/show_district"> read full report</a>
					</div>
				</div>
				<div class="span3 statbox green" onTablet="span6" onDesktop="span3">
					
					<div class="number"><?php echo $no_of_thana ?></div>
					<div class="title">Thana</div>
					<div class="footer" style="background:#008300;">
						<a href="<?php echo base_url() ?>index.php/admin/show_thana"> read full report</a>
					</div>
				</div>	


					<div class="span3 statbox red" onTablet="span6" onDesktop="span3">
					
					<div class="number"><?php echo $no_of_memarea ?></div>
					<div class="title">Member of Parliament Area</div>
					<div class="footer" style="background:#BC3000;">
						<a href="<?php echo base_url() ?>index.php/admin/show_memarea"> read full report</a>
					</div>
				    </div>





			</div>


			<div class="row-fluid">	

					<div class="span3 statbox purple" onTablet="span6" onDesktop="span3">
					
					<div class="number"><?php echo $no_of_member ?></div>
					<div class="title">Member of Parliament</div>
					<div class="footer" style="background:#4D3095;">
						<a href="<?php echo base_url() ?>index.php/admin/show_member"> read full report</a>
					</div>
				    </div>	


			</div>


			<!--/row-->
			
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	
	<div class="clearfix"></div>
	
<?php include"footer.php"; ?>