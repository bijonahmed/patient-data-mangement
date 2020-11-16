<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
        <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">      

        <script src="<?php echo base_url(); ?>resource/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url(); ?>resource/js/jquery-ui.js"></script>

         <script src="<?php echo base_url(); ?>resource/Context.js-master/context.js"></script>
        <script src="<?php echo base_url(); ?>resource/Context.js-master/demo.js"></script>
        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.standalone.css" rel="stylesheet">   
        
        <script src="<?php echo base_url(); ?>resource/bootstrap_searching_table/src/jquery.tabulate.js"></script>

        <script src="<?php echo base_url(); ?>resource/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url(); ?>resource/js/jquery-ui.js"></script>

       
      
       
    
    
 <script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>
 
</head>

<body>
    <br><br><br>
    
    <div class="">
        <div class="">
            <div class="tabbable tabs-left" style="margin-left: 40px;">
        <ul class="nav nav-tabs">
<li><a href="<?php echo base_url();?>welcome/patient_find_investigation.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Haematology</a></li>
<li><a href="<?php echo base_url();?>welcome/patient_find_investigation_histopathology.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Histopathology</a></li>
<li><a href="<?php echo base_url();?>welcome/patient_find_investigation_cytopathology.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Cytopathology</a></li>
<li><a href="<?php echo base_url();?>welcome/patient_find_investigation_cytogenetic.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Cytogenetic</a></li>
<li><a href="<?php echo base_url();?>welcome/patient_find_investigation_single_line_rpt.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Single Line report</a></li>         

<li><a href="<?php echo base_url();?>welcome/patient_find_investigation_bone_marrow.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Bone Marrow</a></li>
 <li><a href="<?php echo base_url();?>welcome/patient_find_investigation_radiology.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Radiology</a></li>

 <li><a href="<?php echo base_url();?>welcome/patient_find_investigation_ultrasonography.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Ultrasonography</a></li>
 <li class="active"><a href="#" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Urine</a></li>
 <li><a href="<?php echo base_url();?>welcome/patient_find_investigation_stool.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Stool</a></li>
 <li><a href="<?php echo base_url();?>welcome/patient_find_investigation_immunophentypint.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Immunophentotype</a></li>
 <li><a href="<?php echo base_url();?>welcome/patient_find_investigation_karyotype.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Karyotype</a></li>
 <li><a href="<?php echo base_url();?>welcome/patient_find_investigation_echo.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Echo</a></li>
 
        </ul>
        </div>
        </div>
        <div class="">
         
            
            
        </div><div class="col-md-8">
            <h3>Find Patient Investigation <font color="red"><strong>[Urine]</strong></font></h3>
         <hr>
            <div id="">
            <div class="form-group has-warning">
              <form class="form-inline" name="p_id" method="post" action="<?php echo base_url();?>welcome/patient_find_investigation_urine.html">
                   <input type="text" class="form-control" name="manual_pid" placeholder="Patient ID" id="TBox0" autofocus="">
                   <input type="text" class="form-control" data-date-format="" id="starting_date" name="starting_date_urine" required="1" placeholder="From Date">
                      <input type="text" class="form-control" data-date-format="" id="ending_date"name="ending_date_urine" required="1"  placeholder="Ending Date">

                        <button class="btn btn-primary" id="start"> <span class="glyphicon glyphicon-search"></span> Search</button>
                     </form>
                </div>
            <hr>
             <div id="progress_bar" class="ui-progress-bar ui-container">
            <div class="ui-progress" style="width: 79%;">
                <span class="ui-label" style="display:none;">Processing <b class="value">79%</b></span>
            </div><!-- .ui-progress -->
        </div><!-- #progress_bar -->
   <div class="content" id="main_content" style="display: none; width: 900px;">
            <div class="alert alert-danger">
                <center>  <strong>Sorry Data Not found</strong></center>
            </div>
        </div><!-- #main_content -->
              <div class="form-group has-success">
                   
                
                
    
            <?php
            if($urine_rpt_searching!=null){
            ?>
                  <button type="button" class="btn btn-default" onclick="javascript:printDiv('printablediv')"><i class="icon-print"></i> <span class="glyphicon glyphicon-zoom-in"></span> Printing</button>
        <div id="printablediv" style="width: 100%; background-color: none; height: auto">
    <div align="center">
        <strong>Urine Report<BR><font color="red"></font> </strong>
       From <?php echo $date_from;?> To <?php echo $date_to;?>
        <br>
        <br>
     
    </div>
        <div id="dvData">
     
            
            
               <?php
$x=1;
foreach($urine_rpt_searching as $data) {
?>

 
 <br>
 <hr>
 <strong><font color="#000000">Patient ID: <?php  $length=strlen($data->manual_pid); 
        $part1=substr_replace("$data->manual_pid","/",2);
        //$part2=substr_replace("$data->manual_pid","",$length-2);
        $part2=substr("$data->manual_pid",2);
        $manual_pid=$part1.$part2;
    echo $manual_pid;?></strong><br>
  <strong>Patient Name: <?php echo $data->patient_name;?></strong>
Age: <strong><?php echo $data->age;?></strong>
Sex : <strong><?php echo $data->sex;?></strong>, Date : <strong><?php echo $data->reciv_date;?></strong>
     

 
 <br>
 

                                                <strong><u>URINE REPORT</u></strong><br>

                                    Reporting Date: <?php echo $data->reciv_date; ?>
                                    <br>

                                    <?php
                                    if ($data->quantity != Null) {
                                        ?>                           
                                        Quantity :<?php echo $data->quantity; ?>,<br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->sediment != Null) {
                                        ?>
                                        Sediment : <?php echo $data->sediment; ?> <br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->color != Null) {
                                        ?>
                                        Colour : <?php echo $data->color; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->spe_grav != Null) {
                                        ?>
                                        Specific  Gravity : <?php echo $data->spe_grav; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->apper != Null) {
                                        ?>
                                        Appearance : <?php echo $data->apper; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->reaction != Null) {
                                        ?>
                                        Reaction : <?php echo $data->reaction; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->acetone != Null) {
                                        ?>
                                        Acetone : <?php echo $data->acetone; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->ex_ph != Null) {
                                        ?>
                                        Excess of Phos. : <?php echo $data->ex_ph; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->bile_salt != Null) {
                                        ?>
                                        Bile Salt : <?php echo $data->bile_salt; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->albumin != Null) {
                                        ?>
                                        Albumin : <?php echo $data->albumin; ?><br>
                              <?php
            }
            ?>
                                        <?php
                                    if ($data->bile_pig != Null) {
                                        ?>
                                        Bile pigment : <?php echo $data->bile_pig; ?><br>
                                        <?php
                                    }
                                    ?>
                              <?php
            if ($data->sugur != Null) {
                ?>
                                        Sugar : <?php echo $data->sugur; ?><br>
                                        <?php
                                    }
                                    ?>
                              <?php
            if ($data->urobili != Null) {
                ?>
                                        Urobilinogen : <?php echo $data->urobili; ?> <br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->others != Null) {
                                        ?>
                                        Others : <?php echo $data->others; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->chyle != Null) {
                                        ?>
                                        Chyle : <?php echo $data->chyle; ?> <br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->ep_cell != Null) {
                                        ?>
                                        Epithelial cell : <?php echo $data->ep_cell; ?> <br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->cal_oxa != Null) {
                                        ?>
                                        Calcium Oxalate  :<?php echo $data->cal_oxa; ?> <br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->pus_cells != Null) {
                                        ?>
                                        Pus Cells :<?php echo $data->pus_cells; ?><br>

                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->uric_acid != Null) {
                                        ?>
                                        Uric Acid Crystals : <?php echo $data->uric_acid; ?> <br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->rbcs != Null) {
                                        ?>
                                        RBCs : <?php echo $data->rbcs; ?>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->urate_crys != Null) {
                                        ?>
                                        Urate Crystals : <?php echo $data->urate_crys; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->mucus != Null) {
                                        ?>
                                        Mucus : <?php echo $data->mucus; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->amr_ph != Null) {
                                        ?>
                                        Amorph. Phosphate : <?php echo $data->amr_ph; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->pus_cast != Null) {
                                        ?>
                                        Pus Casts : <?php echo $data->pus_cast; ?> <br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->tre_phs != Null) {
                                        ?>
                                        Triple Phosphate : <?php echo $data->tre_phs; ?> <br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->sperat != Null) {
                                        ?>
                                        Spermatozoa :  <?php echo $data->sperat; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->candida != Null) {
                                        ?>
                                        Candida : <?php echo $data->candida; ?> <br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->wbc != Null) {
                                        ?>
                                        WBC Cast : <?php echo $data->wbc; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->hayline_cast != Null) {
                                        ?>
                                        Hyaline Cast :<?php echo $data->hayline_cast; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->granuloar != Null) {
                                        ?>
                                        Granular Cast: <?php echo $data->granuloar; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->bacteria != Null) {
                                        ?>
                                        Bacteria: <?php echo $data->bacteria; ?><br>
                                        <?php
                                    }

                                    ?>

                                    
  
     <?php 
 $x++;

}?>
       
            
            
            </div>
    </div>
            <?php
           }
            ?>
          
                </div>
            
            
        </div>
            </div>
    </div>


    </body>
        

<script>
$("#btnExport").click(function(e) {
    window.open('data:application/vnd.ms-excel,' + encodeURIComponent($('#dvData').html()));
    e.preventDefault();
}) 
    </script>
<script>
  $(function () {
    $('#myTab a:first').tab('show')
  })
</script>

<script type="text/javascript">
    $('#starting_date').datepicker()
</script>

<script type="text/javascript">
    $('#ending_date').datepicker()
</script>
 

</body>


     </html>
 
