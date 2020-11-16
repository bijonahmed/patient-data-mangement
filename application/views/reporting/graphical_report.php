<!DOCTYPE html> 

<meta charset="utf-8">

        <script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>admin_panel/js/bootstrap.js"></script>
  <script src="<?php echo base_url(); ?>resource/Simple-jQuery-Plugin-To-Draw-A-SVG-Pie-Chart/PieChart.js"></script>
   <link href="<?php echo base_url(); ?>resource/Simple-jQuery-Plugin-To-Draw-A-SVG-Pie-Chart/PieChart.css" rel="stylesheet">
   <link href="<?php echo base_url(); ?>resource/Simple-jQuery-Plugin-To-Draw-A-SVG-Pie-Chart/jquerysctipttop.css" rel="stylesheet">
   
 <script src="<?php echo base_url(); ?>resource/Context.js-master/context.js"></script>
  <script src="<?php echo base_url(); ?>resource/Context.js-master/demo.js"></script>

   <link href="<?php echo base_url(); ?>resource/Context.js-master/context.bootstrap.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>resource/Context.js-master/context.standalone.css" rel="stylesheet">

  <!-- Bootstrap -->
  <body>
      
     <style type="text/css">
		#target {
			width: 150px;
			height: 150px;
		}
	</style>
  </body>
  <style>
      myImage {
    text-decoration: none;
    display: block;
    width: 330px;
    height: 328px;
    float: left;
    margin: 0 3px 3px 0;
    opacity: 1;
    -webkit-transform: scale(1,1);
    -webkit-transition-timing-function: ease-out;
    -webkit-transition-duration: 250ms;
    -moz-transform: scale(1,1);
    -moz-transition-timing-function: ease-out;
    -moz-transition-duration: 250ms;
}
.Image:hover {
    opacity: 7;
    -webkit-transform: scale(1.05,1.07);
    -webkit-transition-timing-function: ease-out;
    -webkit-transition-duration: 250ms;
    -moz-transform: scale(1.05,1.07);
    -moz-transition-timing-function: ease-out;
    -moz-transition-duration: 250ms;
    position: relative;
    z-index: 99;
}
  </style>
<script>
    /* right button click option off
 $(function(){
			$(document).bind('contextmenu',function(e){
				e.preventDefault();
				$('#mm').menu('show', {
					left: e.pageX,
					top: e.pageY
				});
			});
		});
     */
		
	</script> 
        <br><br>

 
<style>
    .boxshadow {
   padding: 20px;
   margin: 10px;
   background: #3987A5;
  
  
   
   border: 2px dashed #fff;
   border-radius: 10px;
   box-shadow: 0 0 0 4px #3987A5, 2px 1px 6px 4px rgba(10, 10, 0, 0.5);
   

}

    
</style>
</head>


   
<!--use report -->
<style> 
.borderinfo {
    border:2px solid;
    padding:10px;
    background:#dddddd;
    border-radius: 8px;
    height: 70px;
}
</style>
<div class="row">
    <div class="col-md-12">
        
    </div>
    
      
        
        
    </div>
    
   
          <div id="target">
           
	</div>
      </div>
<div class="col-md-6" style="width: 700px;">
        <script>
    $(document).ready(function() {
  $('table.highchart').highchartTable();
});
</script>
      <script src="<?php echo base_url(); ?>resource/home_chart/highcharts.js"></script>
      <script src="<?php echo base_url(); ?>resource/home_chart/jquery.highchartTable-min.js"></script>
 <?php

$starting_year  = 2000;
$ending_year    = 2021;

for($starting_year; $starting_year <= $ending_year; $starting_year++) {
    $years[] = '<option value="'.$starting_year.'">'.$starting_year.'</option>';
}

?>
      <form id="someform" action="<?php echo base_url();?>data_record/patient_monthly_wise_rpt.html" method="post">
      <div class="row">
          <div class="col-md-2">
              <div class="" style="">
          <select class="form-control" name="year">
              <option selected="selected" value="<?php echo date("Y",  strtotime(date("Y-m-d")));?>" ><?php echo date("Y",  strtotime(date("Y-m-d")));?></option>
    <?php echo implode("\n\r", $years);  ?>
</select> 
        
</div>
          </div>
          <div class="col-md-2">
          <button class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button>
          </div>
      </div>
      
      
    
           </form>  
<table class="highchart" data-graph-container-before="1" data-graph-type="column" style="display:none">
    <caption>Month wise patient</caption>
    <thead>
        <tr>                                  
            <th>Month</th>
            <th>Patient</th>
        </tr>
     </thead>
     <tbody>
        <tr>
            <td>Jan</td>
            <td><?php echo $jan;?></td>
        </tr>
        <tr>
            <td>Feb</td>
            <td>5</td>
        </tr>
        <tr>
            <td>Mar</td>
            <td>10</td>
        </tr>
        <tr>
            <td>Apr</td>
            <td>15</td>
        </tr>
        <tr>
            <td>May</td>
            <td>20</td>
        </tr>
        <tr>
            <td>Jun</td>
            <td>25</td>
        </tr>
        <tr>
            <td>Jul</td>
            <td>30</td>
        </tr>
        <tr>
            <td>Aug</td>
            <td>35</td>
        </tr>
        <tr>
            <td>Sep</td>
            <td>40</td>
        </tr>
        <tr>
            <td>Oct</td>
            <td>45</td>
        </tr>
        <tr>
            <td>Nov</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Dec</td>
            <td>55</td>
        </tr>
        
    </tbody>
</table>
</div>
    </div>
     
      
    </div>
 
<script type="text/javascript">
	$(function() {
		$('#source').pieChart('#target');
	});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
     
    </div>
    </div>
</div>
   
    </div>
  
      
 
     
      
          <style>
             @-webkit-keyframes typing {
    from { width: 0 }
    to { width:16.3em }
}

@-moz-keyframes typing {
    from { width: 0 }
    to { width:16.3em }
}

@-webkit-keyframes blink-caret {
    from, to { border-color: transparent }
    50% { border-color: black }
}

@-moz-keyframes blink-caret {
    from, to { border-color: transparent }
    50% { border-color: black }
}

body { font-family: Consolas, monospace; }

.textinfo { 
    font-size:150%;
    width:16.3em;
    white-space:nowrap;
    overflow:hidden;
    border-right: .1em solid black;
    
    -webkit-animation: typing 17s steps(30, end), /* # of steps = # of characters */
                        blink-caret 1s step-end infinite;
    -moz-animation: typing 17s steps(30, end), /* # of steps = # of characters */
                        blink-caret 1s step-end infinite;
} 
              
          </style>
      
     
            
        
   </div> 
    
    
    
</div>