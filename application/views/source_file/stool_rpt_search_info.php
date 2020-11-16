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
                        <li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Haematology</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_histopathology.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Histopathology</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_cytopathology.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Cytopathology</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_cytogenetic.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Cytogenetic</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_single_line_rpt.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Single Line report</a></li>         

                        <li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_bone_marrow.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Bone Marrow</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_radiology.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Radiology</a></li>

                        <li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_ultrasonography.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Ultrasonography</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_urine.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Urine</a></li>
                        <li class="active"><a href="#" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Stool</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_immunophentypint.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Immunophentotype</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_karyotype.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Karyotype</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_echo.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Echo</a></li>

                    </ul>
                </div>
            </div>
            <div class="">



            </div><div class="col-md-8">
                <h3>Find Patient Investigation <font color="red"><strong>[Stool]</strong></font></h3>
                <hr>
                <div id="">
                    <div class="form-group has-warning">
                        <form class="form-inline" name="p_id" method="post" action="<?php echo base_url(); ?>welcome/patient_find_investigation_stool.html">
                            <input type="text" class="form-control" name="manual_pid" placeholder="Patient ID" id="TBox0" autofocus="">
                            <input type="text" class="form-control" data-date-format="" id="starting_date" name="starting_date_stool" required="1" placeholder="From Date">   
                            <input type="text" class="form-control" data-date-format="" id="ending_date"name="ending_date_stool" required="1" placeholder="Ending Date">

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
                        if ($stool_rpt_searching != null) {
                            ?>
                            <button type="button" class="btn btn-default" onclick="javascript:printDiv('printablediv')"><i class="icon-print"></i> <span class="glyphicon glyphicon-zoom-in"></span> Printing</button>
                            <div id="printablediv" style="width: 100%; background-color: none; height: auto">
                                <div align="center">
                                    <strong>Stool Report Statement<BR><font color="red"></font> </strong>
                                    From <?php echo $date_from; ?> To <?php echo $date_to; ?>
                                    <br>
                                    <br>

                                </div>
                                <div id="dvData">


                                    <?php
                                    $x = 1;
                                    foreach ($stool_rpt_searching as $data) {
                                        ?> 

                                        <hr>
                                        <font color="#000000">Patient ID: <?php
                                        $length = strlen($data->manual_pid);
                                        $part1 = substr_replace("$data->manual_pid", "/", 2);
                                        //$part2=substr_replace("$data->manual_pid","",$length-2);
                                        $part2 = substr("$data->manual_pid", 2);
                                        $manual_pid = $part1 . $part2;
                                        echo $manual_pid;
                                        ?><br>
                                        <strong>Patient Name: <?php echo $data->patient_name; ?></strong>
                                        Age: <strong><?php echo $data->age; ?></strong>
                                        Sex : <strong><?php echo $data->sex; ?></strong>, Date : <strong><?php echo $data->reciv_date; ?></strong>




                                        <hr>

                                        Reporting Date: <?php echo $data->reciv_date; ?>
                                        <br>
                                        <?php
                                        if ($data->quantity != Null) {
                                            ?>
                                            Quantity(Amount):<?php echo $data->quantity; ?>  <br>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if ($data->ordor != Null) {
                                            ?>
                                            Odour :<?php echo $data->ordor; ?> <br>
                                            <?php
                                        }
                                        ?> 
                                        <?php
                                        if ($data->consistency != Null) {
                                            ?>
                                            Consistency : <?php echo $data->consistency; ?>  <br>
                                            <?php
                                        }
                                        ?> 
                                        <?php
                                        if ($data->mucus != Null) {
                                            ?>
                                            Mucus :<?php echo $data->mucus; ?>  <br>
                                            <?php
                                        }
                                        ?> 
                                        <?php
                                        if ($data->color != Null) {
                                            ?>
                                            Colour :<?php echo $data->color; ?> <br>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if ($data->blood != Null) {
                                            ?>
                                            Blood : <?php echo $data->blood; ?> <br>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if ($data->un_fp != Null) {
                                            ?>
                                            Undigested Food Particles :<?php echo $data->un_fp; ?> <br>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if ($data->helminth != Null) {
                                            ?>
                                            Helminth. :<?php echo $data->helminth; ?> <br>
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
                                        if ($data->obt != Null) {
                                            ?>
                                            Occult Blood Test (OBT) :<?php echo $data->obt; ?><br>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if ($data->rs != Null) {
                                            ?>
                                            Reducing Substances (R/S): 
                                            </td> 
                                            <?php echo $data->rs; ?><br>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if ($data->bilirubin != Null) {
                                            ?>
                                            Bilirubin :<?php echo $data->bilirubin; ?><br>
                                            <?php
                                        }
                                        ?>   
                                        <?php
                                        if ($data->fat != Null) {
                                            ?>
                                            Fat.: <?php echo $data->fat; ?> <br>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if ($data->str_and_sterobili != Null) {
                                            ?>
                                            Stercobili. and stercob : <?php echo $data->str_and_sterobili; ?> <br>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if ($data->vege_cell != Null) {
                                            ?>
                                            Vegetable Cell: <?php echo $data->vege_cell; ?> <br>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if ($data->troph_giardia != Null) {
                                            ?>
                                            Trophozoites of Giardia  :<?php echo $data->troph_giardia; ?> <br>
                                            <?php
                                        }
                                        ?>  
                                        <?php
                                        if ($data->epithe_cells != Null) {
                                            ?>
                                            Epithelial Cells: <?php echo $data->epithe_cells; ?> <br>
                                            <?php
                                        }
                                        ?> 
                                        <?php
                                        if ($data->ova_al != Null) {
                                            ?>
                                            Ova of A.L :<?php echo $data->ova_al; ?> <br>
                                            <?php
                                        }
                                        ?> 
                                        <?php
                                        if ($data->puss_cell != Null) {
                                            ?>
                                            Pus Cells : <?php echo $data->puss_cell; ?> <br>
                                            <?php
                                        }
                                        ?> 
                                        <?php
                                        if ($data->larva_of != Null) {
                                            ?>
                                            Larva of :<?php echo $data->larva_of; ?> <br>
                                            <?php
                                        }
                                        ?> 
                                        <?php
                                        if ($data->rbc != Null) {
                                            ?>
                                            RBC :<?php echo $data->rbc; ?> <br>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if ($data->cyst_of_giardia != Null) {
                                            ?>
                                            Cyst of Giardia :<?php echo $data->cyst_of_giardia; ?> <br>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if ($data->macrophages != Null) {
                                            ?>
                                            Macrophage  :<?php echo $data->macrophages; ?> <br>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if ($data->cyst_of_col != Null) {
                                            ?>
                                            Cyst of E.Coli : <?php echo $data->cyst_of_col; ?> <br>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if ($data->muscle_fibre != Null) {
                                            ?>
                                            Muscle Fibre : <?php echo $data->muscle_fibre; ?> <br>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if ($data->t_hominis != Null) {
                                            ?>
                                            T. hominis : <?php echo $data->t_hominis; ?> <br>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if ($data->fat_globules != Null) {
                                            ?>
                                            Fat Globules :<?php echo $data->fat_globules; ?> <br>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if ($data->blas_homins != Null) {
                                            ?>
                                            Blastocystis hominis : <?php echo $data->blas_homins; ?> <br>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if ($data->starch_granules != Null) {
                                            ?>
                                            Starch Granules : <?php echo $data->starch_granules; ?> <br>
                                            <?php
                                        }
                                        ?> 
                                        <?php
                                        if ($data->cast != Null) {
                                            ?>
                                            Cast :<?php echo $data->cast; ?> <br>
                                            <?php
                                        }
                                        ?> 
                                        <?php
                                        if ($data->cl_crystals != Null) {
                                            ?>
                                            C.L.Crystals  :<?php echo $data->cl_crystals; ?> <br>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if ($data->fusifo_bacili != Null) {
                                            ?>  

                                            Fusiform long bacilli :<?php echo $data->fusifo_bacili; ?> <br>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if ($data->bacteria != Null) {
                                            ?> 
                                            Bacteria : <?php echo $data->bacteria; ?><br>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if ($data->candida != Null) {
                                            ?> 
                                            Candida  :<?php echo $data->candida; ?> <br>
                                            <?php
                                        }
                                        ?>




                                        <?php
                                    }
                                    ?>








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