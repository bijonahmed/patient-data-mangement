<!DOCTYPE html> 

<meta charset="utf-8">

        
<link href="<?php echo base_url(); ?>resource/css/bootstrap.min.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>admin_panel/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>resource/Simple-jQuery-Plugin-To-Draw-A-SVG-Pie-Chart/PieChart.js"></script>
<link href="<?php echo base_url(); ?>resource/Simple-jQuery-Plugin-To-Draw-A-SVG-Pie-Chart/PieChart.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>resource/Simple-jQuery-Plugin-To-Draw-A-SVG-Pie-Chart/jquerysctipttop.css" rel="stylesheet">

<script src="<?php echo base_url(); ?>resource/Context.js-master/context.js"></script>
<script src="<?php echo base_url(); ?>resource/Context.js-master/demo.js"></script>

<link href="<?php echo base_url(); ?>resource/Context.js-master/context.bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>resource/Context.js-master/context.standalone.css" rel="stylesheet">


 <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
       
        <script src="<?php echo base_url();?>resource/js/jquery-ui.js"></script>
<!-- Bootstrap -->
<body>
    <style>
        .textinfo{
            text-decoration: none;
        }
    </style>
    <style type="text/css">
        #target {
            width: 150px;
            height: 150px;
        }
    </style>
</body>
 
<br><br>
 </head>

<div class="col-md-12">
    <?php
    if ($this->session->userdata('type') === "admin") {
        /*
          <a href="<?php echo base_url();?>welcome/patient_informaiton_record.html">
          <button class="btn btn-primary"><span class="glyphicon glyphicon-align-justify"></span>  My Prescription</button>

          </a>
         */
        ?><br>

        <!-- Modal -->



        <!-- Sidebar -->

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
<!--            <div class="col-md-12">
                <div class="alert alert-success">
                    Welcome, <?php echo $this->session->userdata('name'); ?>, User Type: <?php echo $this->session->userdata('type'); ?>, 
                </div>
            </div>-->
            
        </div><br>
        <div class="container">
        <div class="col-md-3 pull-left">
           
                
              <div class="panel panel-primary" style="">
                <div class="panel-heading">
                    <h3 class="panel-title">Total Patient </h3>
                </div>
                <div class="panel-body">
                    <strong>  Male  : <?php echo $total_patient_male; ?></strong>,
                    <strong>  Female : <?php echo $total_patient_female; ?></strong><br>
                    Total :  <?php echo $total_patient_count; ?>
                </div>
            </div>   
           
         
             
            <div class="panel-group" id="accordion">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="tooltips" style="text-decoration: none;" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="text-decoration: none;">
                            Database
                            </a>
                            
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <a style="text-decoration: none;" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">
                          <a style="text-decoration: none;" href="<?php echo base_url(); ?>data_record/backup_db.html"><span class="glyphicon glyphicon-download"></span>&nbsp;Backup</a>
                            </a>
                        </div>
                    </div>
                </div>
              


            </div>

        </div>
            <div class="row">
                <div class="col-md-8">
                <div class="panel panel-success" style="">
                <div class="panel-heading">
                    <h3 class="panel-title">Find Patient</h3>
                </div>
                <div class="panel-body">
                 <div align="left">
                            <form name="patient_revisit" class="form-inline" method="post" action="<?php echo base_url();?>data_record/patient_revisit_information.html">
                              
              <div class="form-group has-success">
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="text" class="form-control" name="current_date" id="rev_date" required="1" placeholder="Date">
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  
                   <input type="text" class="form-control" name="manual_pid" id="TBox0" required="1" placeholder="Patient ID" autofocus="1">
                          &nbsp;&nbsp;&nbsp;&nbsp;
                    <button class="btn btn-default"><span class="glyphicon glyphicon-search"></span>&nbsp;Search</button>
                          
             
                </div> 
                    </form>
            </div>
                </div>
            </div> 
                    
                </div>
           
                <div class="col-md-8" style="margin-top: 10px;">
                    
                    <div class="row">
                        <div class="col-md-3">
                       <ul id="source">
                <li class="pieChart" value="<?php echo $total_patient_male; ?>"><strong><font color="red">Red: - Male</font></strong></li>
                <li class="pieChart" value="<?php echo $total_patient_female; ?>"><strong><font color="blue">Blue: -Female</font></strong></li>

            </ul>
            <div id="target">

            </div>
                        </div>   
                        
                        <div class="col-md-9">
                           <script>
                $(document).ready(function() {
                    $('table.highchart').highchartTable();
                });
            </script>

            <script src="<?php echo base_url(); ?>resource/home_chart/highcharts.js"></script>
            <script src="<?php echo base_url(); ?>resource/home_chart/jquery.highchartTable-min.js"></script>
            <?php
            $starting_year = 2000;
            $ending_year = 2021;

            for ($starting_year; $starting_year <= $ending_year; $starting_year++) {
                $years[] = '<option value="' . $starting_year . '">' . $starting_year . '</option>';
            }
            ?>

            <form id="someform" action="<?php echo base_url(); ?>welcome/index.html" method="post">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="" style="">
                            <select class="form-control" name="year">
                                <option selected="selected" value="<?php
        $cyear = $this->session->userdata('cyear');

        if ($cyear != null) {
            echo $cyear;
        } else {
            echo date("Y", strtotime(date("Y-m-d")));
        };
            ?>"><?php
                                        $cyear = $this->session->userdata('year');

                                        if ($cyear != null) {
                                            echo $cyear;
                                        } else {
                                            echo date("Y", strtotime(date("Y-m-d")));
                                        };
                                        ?></option>
                                <?php echo implode("\n\r", $years); ?>
                            </select> 

                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button>
                    </div>
                </div>



            </form>  
              <script>
            $(function() {
<?php
foreach ($dynamicSearch_pInfo_mauan_pid as $row):
        $length=strlen($row->manual_pid); 
        $part1=substr_replace("$row->manual_pid","/",2);
        $part2=substr("$row->manual_pid",2);
                //$part2=substr_replace("$row->manual_pid","",$length);
        $manual_pid=$part1.$part2;
    $dynamicSearch_pInfo_mauan_pid[] = $manual_pid;
endforeach;

echo "var javascript_array =" . json_encode($dynamicSearch_pInfo_mauan_pid);
?>

                $( "#TBox0" ).autocomplete({
                    source: javascript_array
                });

            });
        </script>
         
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
                        <td><?php echo $jan; ?></td>
                    </tr>
                    <tr>
                        <td>Feb</td>
                        <td><?php echo $Feb ?></td>
                    </tr>
                    <tr>
                        <td>Mar</td>
                        <td><?php echo $Mar; ?></td>
                    </tr>
                    <tr>
                        <td>Apr</td>
                        <td><?php echo $apr; ?></td>
                    </tr>
                    <tr>
                        <td>May</td>
                        <td><?php echo $may; ?></td>
                    </tr>
                    <tr>
                        <td>Jun</td>
                        <td><?php echo $june; ?></td>
                    </tr>
                    <tr>
                        <td>Jul</td>
                        <td><?php echo $july ?></td>
                    </tr>
                    <tr>
                        <td>Aug</td>
                        <td><?php echo $aug; ?></td>
                    </tr>
                    <tr>
                        <td>Sep</td>
                        <td><?php echo $sep; ?></td>
                    </tr>
                    <tr>
                        <td>Oct</td>
                        <td><?php echo $octo; ?></td>
                    </tr>
                    <tr>
                        <td>Nov</td>
                        <td><?php echo $nov ?></td>
                    </tr>
                    <tr>
                        <td>Dec</td>
                        <td><?php echo $decem; ?></td>
                    </tr>

                </tbody>
            </table>
                        </div>
                        
               
                        
                        
                    </div>
                    
                </div>
                
                
            </div>
                
             
                
          
            
            
            
      </div>
       
        
        
     
      
    </div>


    </div>

    <script type="text/javascript">
                $(function() {
                    $('#source').pieChart('#target');
                });
    </script>
  

    </div>
    </div>
    </div>

    </div>




    <?php
} elseif ($this->session->userdata('type') === "user") {
    ?>


    <a href="<?php echo base_url(); ?>welcome/view_drug_help.html">
        <button class="btn btn-info"><span class="glyphicon glyphicon-align-justify"></span>  My Drug Help</button>
    </a> 

    <a href="<?php echo base_url(); ?>welcome/patient_appointment.html">
        <button class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> Add Appointment</button>
    </a> 
    <a href="<?php echo base_url(); ?>welcome/patient_appointment_list.html">
        <button class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> Add Appointment List</button>
    </a> 
    <br><br>
    <style>


    </style>
    <div class="jumbotron example1">
        <h1>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong><i class="icon-user icon-large"></i>&nbsp;<font color="white">Dashboard</font></strong> <font color="yellow"><?php
                $type = $this->session->userdata('type');
                echo "Welcome $type";
                ?> <br>
        </h1></font>



        <font color="white"><marquee>The best Doctor Prescription Software</marquee></font>

    </div>

    <?php
} else {
    ?>

    <?php
}
?>
<br> <br> <br>
<div align="center">

    <a href="<?php echo base_url(); ?>welcome/add_new_dose.html">

    </a>

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

<!-- My Prescription -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Select Patient Type</h4>
            </div>
            <div class="modal-body">
                <center>
                    <a href="<?php echo base_url(); ?>welcome/patient_informaiton_record.html">
                        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> New Visit</button>  
                    </a> 
                    <a href="<?php echo base_url(); ?>welcome/re_visit_patient.html">
                        <button type="button" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span> Re-Visit</button>
                    </a>
                </center>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Developer Info</h4>
            </div>
            <div class="modal-body">
                Kazi Shamim and Md. Gazi Giash Uddin Bijon<br>
                kazi.shamim@yahoo.com, mdbijon@gmail.com<br>
                Cell Phone: 01949376654, 01915728982
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#rev_date').datepicker()
</script>
<script>
    $('[data-toggle="tooltip"]').tooltip({
        'placement': 'right'
    });
    $('[data-toggle="popover"]').popover({
        trigger: 'hover',
        'placement': 'right'
    });

    $('#userNameField').tooltip({
        'show': true,
        'placement': 'bottom',
        'title': ""
    });

    $('#userNameField').tooltip('show');
</script>
