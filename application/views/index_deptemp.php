<?php 
include ("header_deptemp.php"); 
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
					<a href="<?php echo base_url() ?>index.php/deptemp/index">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="<?php echo base_url() ?>index.php/deptemp/index">Dashboard</a></li>
			</ul>


	
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<!-- Must use different id on div for different graph -->
<div id="container_problem" style="min-width: auto; height: 400px; max-width: auto; margin: 0 auto" /> </div>
<div id="container_thana" style="min-width: auto; height: 400px; max-width: auto; margin: 0 auto" /> </div>
<div id="container_district" style="min-width: auto; height: 400px; max-width: auto; margin: 0 auto" /> </div>
<div id="container_division" style="min-width: auto; height: 400px; max-width: auto; margin: 0 auto" /> </div>
<div id="container_memarea" style="min-width: auto; height: 400px; max-width: auto; margin: 0 auto" /> </div>
<div id="container_progress" style="min-width: auto; height: 400px; max-width: auto; margin: 0 auto" /> </div>



			</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		

	
	<div class="clearfix"></div>
	
<?php include"footer.php"; ?>


<!--graph for Problem wise complaints percentage-->

<script type="text/javascript">

var graph_data_problem=[];

   $.ajax({
		           
		           url:"http://localhost/complain/index.php/deptemp/process_graph_problem",
		           method:"post",
		           dataType: "json",

		    }).done(function(data)
			{
				//console.log((data));
				
				for(i=0;i<data.length;i++)
				{
					
					values_problem={}
				    
					values_problem['name']=data[i]['name'];
					values_problem['y']=parseFloat(data[i]['y']);
					
					graph_data_problem.push(values_problem);


				 }
				console.log(graph_data_problem);

	Highcharts.chart('container_problem', { //give here the id of the particular div you want to use
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Problem Wise Complaints Percentage'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Problem',
        colorByPoint: true,
        data: graph_data_problem
    }]
});

				
			});


</script>


<!--graph for Area wise complaints percentage-->

<script type="text/javascript">

var graph_data_thana=[];

   $.ajax({
		           
		           url:"http://localhost/complain/index.php/deptemp/process_graph_thana",
		           method:"post",	  
		           dataType: "json",

		    }).done(function(data)
			{
				//console.log((data));
				
				
				for(i=0;i<data.length;i++)
				{
					
					values_thana={}
				    
					values_thana['name']=data[i]['name'];
					values_thana['y']=parseFloat(data[i]['y']);
					
					graph_data_thana.push(values_thana);


				 }
				console.log(graph_data_thana);

	Highcharts.chart('container_thana', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Area Wise Complaints Percentage'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Thana',
        colorByPoint: true,
        data: graph_data_thana
    }]
});

				
			});


</script>



<!--graph for District wise complaints percentage-->

<script type="text/javascript">

var graph_data_district=[];

   $.ajax({
		           
		           url:"http://localhost/complain/index.php/deptemp/process_graph_district",
		           method:"post",	  
		           dataType: "json",

		    }).done(function(data)
			{
				//console.log((data));
				
				for(i=0;i<data.length;i++)
				{
					
					values_district={}
				    
					values_district['name']=data[i]['name'];
					values_district['y']=parseFloat(data[i]['y']);
					
					graph_data_district.push(values_district);


				 }
				console.log(graph_data_district);

	Highcharts.chart('container_district', { //give here the id of the particular div you want to use
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'District Wise Complaints Percentage'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'District',
        colorByPoint: true,
        data: graph_data_district
    }]
});

				
			});


</script>




<!--graph for Division wise complaints percentage-->

<script type="text/javascript">

var graph_data_division=[];

   $.ajax({
		           
		           url:"http://localhost/complain/index.php/deptemp/process_graph_division",
		           method:"post",
		           dataType: "json",

		    }).done(function(data)
			{
				//console.log((data));
				
				for(i=0;i<data.length;i++)
				{
					
					values_division={}
				    
					values_division['name']=data[i]['name'];
					values_division['y']=parseFloat(data[i]['y']);
					
					graph_data_division.push(values_division);


				 }
				console.log(graph_data_division);

	Highcharts.chart('container_division', { //give here the id of the particular div you want to use
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Division Wise Complaints Percentage'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Division',
        colorByPoint: true,
        data: graph_data_division
    }]
});

				
			});


</script>



<!--graph for Parliamentary Constituency wise complaints percentage-->

<script type="text/javascript">

var graph_data_memarea=[];

   $.ajax({
		           
		           url:"http://localhost/complain/index.php/deptemp/process_graph_memarea",
		           method:"post",
		           dataType: "json",

		    }).done(function(data)
			{
				//console.log((data));
				
				for(i=0;i<data.length;i++)
				{
					
					values_memarea={}
				    
					values_memarea['name']=data[i]['name'];
					values_memarea['y']=parseFloat(data[i]['y']);
					
					graph_data_memarea.push(values_memarea);


				 }
				console.log(graph_data_memarea);

	Highcharts.chart('container_memarea', { //give here the id of the particular div you want to use
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Parliamentary Constituency Wise Complaints Percentage'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Parliamentary Constituency',
        colorByPoint: true,
        data: graph_data_memarea
    }]
});

				
			});


</script>


<!--graph for Current Progress wise complaints percentage-->

<script type="text/javascript">

var graph_data_progress=[];

   $.ajax({
		           
		           url:"http://localhost/complain/index.php/deptemp/process_graph_progress",
		           method:"post",
		           dataType: "json",

		    }).done(function(data)
			{
				//console.log((data));
				
				for(i=0;i<data.length;i++)
				{
					
					values_progress={}
				    
					values_progress['name']=data[i]['name'];
					values_progress['y']=parseFloat(data[i]['y']);
					
					graph_data_progress.push(values_progress);


				 }
				console.log(graph_data_progress);

	Highcharts.chart('container_progress', { //give here the id of the particular div you want to use
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Current Progress Wise Complaints Percentage'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Current Progress',
        colorByPoint: true,
        data: graph_data_progress
    }]
});

				
			});


</script>