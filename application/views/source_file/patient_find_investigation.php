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
                        <li class="active"><a href="#" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Haematology</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_histopathology.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Histopathology</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_cytopathology.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Cytopathology</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_cytogenetic.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Cytogenetic</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_single_line_rpt.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Single Line report</a></li>         

                        <li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_bone_marrow.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Bone Marrow</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_radiology.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Radiology</a></li>

                        <li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_ultrasonography.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Ultrasonography</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_urine.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Urine</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_stool.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Stool</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_immunophentypint.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Immunophentotype</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_karyotype.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Karyotype</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_echo.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Echo</a></li>

                    </ul>
                </div>
            </div>
            <div class="">



            </div><div class="col-md-8">
                <h3>Find Patient Investigation <font color="red"><strong>[Haematology]</strong></font></h3>
                <hr>
                <div id="">
                    <div class="form-group has-warning">
                        <form class="form-inline" name="p_id" method="post" action="<?php echo base_url(); ?>welcome/patient_find_investigation.html">
                            <input type="text" class="form-control" name="manual_pid" placeholder="Patient ID" id="TBox0" autofocus="">
                            <input type="text" class="form-control" data-date-format="" id="starting_date" name="starting_date_haematology" required="1" placeholder="From Date">
                            <input type="text" class="form-control" data-date-format="" id="ending_date"name="ending_date_haematology" required="1" placeholder="Ending Date">



                            <button class="btn btn-primary" id="start"> <span class="glyphicon glyphicon-search"></span> Search</button>
                        </form>
                        <script>
var from = $("#starting_date").val();
var to = $("#ending_date").val();

if(Date.parse(from) > Date.parse(to)){
   alert("Invalid Date Range");
}
else{
   alert("Valid date Range");
}
}
                        </script>
                    </div>
                    <hr>
                   
                    <div class="form-group has-success">




                        <?php
                        if ($haematology_rpt_searching != null) {
                            ?>
                            <button type="button" class="btn btn-default" onclick="javascript:printDiv('printablediv')"><i class="icon-print"></i> <span class="glyphicon glyphicon-zoom-in"></span> Printing</button>
                            <div id="printablediv" style="width: 100%; background-color: none; height: auto">
                                <div align="center">
                                    <strong>Haematology Report<BR><font color="red"></font> </strong>
                                    <br>From <?php echo $date_from; ?> To <?php echo $date_to; ?>
                                    <br>


                                </div>
                                <div id="dvData">

                                    <?php
                                    $x = 1;
                                    foreach ($haematology_rpt_searching as $data) {
                                        ?>

                                        <br>

                                        <div style="height:600">

                                            <div align="center" class="style58"><span class="style125"></span><br>

                                            </div>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Patient ID: <?php
                                                $length = strlen($data->manual_pid);
                                                $part1 = substr_replace("$data->manual_pid", "/", 2);
                                                //$part2=substr_replace("$data->manual_pid","",$length-2);
                                                $part2 = substr("$data->manual_pid", 2);
                                                $manual_pid = $part1 . $part2;
                                                echo $manual_pid;
                                                ?></strong><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Patient Name: <?php echo $data->patient_name; ?></strong>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age: <strong><?php echo $data->age; ?></strong>
                                            Sex : <strong><?php echo $data->sex; ?></strong>, Date : <strong><?php echo date("d-m-Y", strtotime($data->reciv_date)); ?></strong>

                                            <br><br><br>



                                            <!--Haematology Report-->
                                            <strong><u>Haematology Report</u></strong><br>
                                            <?php
                                            $x = 1;
                                            {
                                                ?>                  


                                                <?php
                                                if ($data->hb != Null) {
                                                    ?>
                                                    Hb%  <?php echo $data->hb; ?> <br>
                                                    <?php
                                                }
                                                ?>

                                                <?php
                                                if ($data->esr != Null) {
                                                    ?>
                                                    ESR   :<?php echo $data->esr; ?> <br>
                                                    <?php
                                                }
                                                ?>

                                                <?php
                                                if ($data->rbc != Null) {
                                                    ?>
                                                    Red Blood Cell :<?php echo $data->rbc; ?><br>
                                                    <?php
                                                }
                                                ?>

                                                <?php
                                                if ($data->platelete != Null) {
                                                    ?>
                                                    Platelete Count:<?php echo $data->platelete; ?><br>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($data->wbc != Null) {
                                                    ?>
                                                    WBC:<?php echo $data->wbc; ?><br>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($data->ce != Null) {
                                                    ?>
                                                    TCE: <?php echo $data->ce; ?> <br>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($data->neutrophils != Null) {
                                                    ?>
                                                    Neutrophil:<?php echo $data->neutrophils; ?><br>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($data->lymphocytes != Null) {
                                                    ?>
                                                    Lymphocytes:<?php echo $data->lymphocytes; ?><br>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($data->monocytes != Null) {
                                                    ?>
                                                    Monocytes:<?php echo $data->monocytes; ?> <br>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($data->eosinophils != Null) {
                                                    ?>
                                                    Eosinophil:<?php echo $data->eosinophils; ?><br>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($data->basophil != Null) {
                                                    ?>
                                                    Basophil:<?php echo $data->basophil; ?><br>
                                                    <?php
                                                }
                                                ?>
            <?php
            if ($data->para_one_rpt != Null) {
                ?>

                                                    Blast:<?php echo $data->parameter_one; ?> <?php echo $data->para_one_rpt; ?><br>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($data->para_two_rpt != Null) {
                                                    ?>
                                                    Myeloblast:<?php echo $data->parameter_two; ?> <?php echo $data->para_two_rpt; ?> <br>
                                                    <?php
                                                }
                                                ?>
            <?php
            if ($data->para_three_rpt != Null) {
                ?>
                                                    Atypical cells: <?php echo $data->parameter_three; ?> <?php echo $data->para_three_rpt; ?><br>

                                                    <?php
                                                }
                                                ?>   
                                                <?php
                                                if ($data->hct != Null) {
                                                    ?>
                                                    HCT/PCV: <?php echo $data->hct; ?> <br>
                                                    <?php
                                                }
                                                ?>   
                                                <?php
                                                if ($data->mcv != Null) {
                                                    ?>
                                                    MCV:<?php echo $data->mcv; ?><br>
                                                    <?php
                                                }
                                                ?>   
                                                <?php
                                                if ($data->mch != Null) {
                                                    ?>
                                                    MCH:<?php echo $data->mch; ?><br>
                                                    <?php
                                                }
                                                ?>  
                                                <?php
                                                if ($data->mchc != Null) {
                                                    ?>
                                                    MCHC:<?php echo $data->mchc; ?> <br>
                                                    <?php
                                                }
                                                ?> 
                                                <?php
                                                if ($data->rdw != Null) {
                                                    ?>
                                                    RDW:<?php echo $data->rdw; ?><br>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($data->bt_min != Null) {
                                                    ?>
                                                    BT :  <?php echo $data->bt_min; ?><br>
                                                    <?php
                                                }
                                                ?> 
                                                <?php
                                                if ($data->ct_min != Null) {
                                                    ?>
                                                    CT :<?php echo $data->ct_min; ?> <br>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($data->mp != Null) {
                                                    ?>
                                                    Malarial Parasite : <?php echo $data->mp; ?><br>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($data->pbf != Null) {
                                                    ?>
                                                    PBF:   <?php echo $data->pbf; ?><br>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                $x++;
                                            }
                                            ?>

                                            <hr>


                                            <?php
                                        }
                                        ?>



                                    </div>


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
        $(function() {
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