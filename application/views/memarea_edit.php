<?php 

include ("header.php");

$i=0;
foreach ($memareas as $memarea) {
	$i++;
	$memarea_name=$memarea->memarea_name;
	$id=$memarea->memarea_id;
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
					<a href="#">Member of Parliament Area</a>
				</li>
			</ul>
			
		

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Update Member of Parliament Area</h2>

					</div>
					<div class="box-content">
						<form class="form-horizontal" action="<?php echo base_url(); ?>index.php/process/up_memarea/<?php echo $id ?>" method="POST">
							<fieldset>

							<!--  Member Area Name starts !-->
							<div class="control-group">
								<label class="control-label" for="selectError">Member Area Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="memarea_name" id="focusedInput" type="text" value="<?php echo $memarea_name ?>" >
								</div>
							  </div>
							  <!--  Member Area Name ends  !-->
					  
							   <!--  Save changes Starts  !-->
							
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