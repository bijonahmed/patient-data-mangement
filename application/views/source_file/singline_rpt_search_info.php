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
                        <li  class="active"><a href="#" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Single Line report</a></li>         
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
                <h3>Find Patient Investigation <font color="red"><strong>[Single Line]</strong></font></h3>
                <hr>
                <div id="">
                    <div class="form-group has-warning">
                        <form class="form-inline" name="p_id" method="post" action="<?php echo base_url(); ?>welcome/patient_find_investigation_single_line_rpt.html">
                            <input type="text" class="form-control" name="manual_pid" placeholder="Patient ID" id="TBox0" autofocus="">
                            <input type="text" class="form-control" data-date-format="" id="starting_date" name="starting_date_multiple" required="1" placeholder="From Date">
                            <input type="text" class="form-control" data-date-format="" id="ending_date" name="ending_date_multiple" required="1" placeholder="Ending Date">
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
                        if ($multiple_rpt_searching != null) {
                            ?>
                            <button type="button" class="btn btn-default" onclick="javascript:printDiv('printablediv')"><i class="icon-print"></i> <span class="glyphicon glyphicon-zoom-in"></span> Printing</button>
                            <div id="printablediv" style="width: 100%; background-color: none; height: auto">
                                <div align="center">
                                    <strong>Multiple Single Line Report Statement<BR><font color="red"></font> </strong>
                                    From <?php echo $date_from; ?> To <?php echo $date_to; ?>
                                    <br>
                                    <br>

                                </div>
                                <div id="dvData">
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="example_">

                                        <thead>
                                            <tr class="success">
                                                <th width="80" valign="top"><div align="left">SL NO</div></th>
                                        <th width="100" valign="top"><div align="left">Patient ID</div></th>
                                        <th width="200" valign="top"><div align="left">Patient Name</div></th>
                                        <th width="100" valign="top"> <div align="left">Date</div></th>
                                        <th width="200" valign="top"> <div align="left">Test Name</div></th>
                                        <th width="70" valign="top"> <div align="left">Unit</div></th>
                                        <th width="200" valign="top"> <div align="left">Normal Range</div></th>

                                        <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $x = 1;
                                            foreach ($multiple_rpt_searching as $data) {
                                                ?>

                                                <tr class="">
                                                    <td valign="top"><div align="left"><?php echo $x; ?></span></div></td>
                                                    <td valign="top"><div align="left">
                                                            <?php
                                                            $length = strlen($data->manual_pid);
                                                            $part1 = substr_replace("$data->manual_pid", "/", 2);
                                                            //$part2=substr_replace("$data->manual_pid","",$length-2);
                                                            $part2 = substr("$data->manual_pid", 2);
                                                            $manual_pid = $part1 . $part2;
                                                            echo $manual_pid;
                                                            ?>
                                                            </span></div></td>
                                                    <td valign="top"><div align="left"><?php echo $data->patient_name; ?></span></div></td>

                                                    <td valign="top"><div align="left"><?php echo date("d-m-Y", strtotime(($data->reciv_date))); ?></span></div></td>
                                                    <td valign="top"><div align="left"><?php echo $data->test_name; ?></span></div></td>
                                                    <td valign="top"><div align="left"><?php echo $data->unit; ?></span></div></td>
                                                    <td valign="top"><div align="left"><?php echo $data->normal_range; ?></span></div></td>

                                                    </td>
                                                </tr>
                                                <?php
                                                $x++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
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