<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
        <link href="<?php echo base_url(); ?>admin_panel/jQuery-TE_v.1.4.0/job_ jquery-te-1.4.0.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>admin_panel/jQuery-TE_v.1.4.0/jquery-te-1.4.0.min.js"></script>
        <script src="<?php echo base_url(); ?>admin_panel/js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>javascript_form/examples/gen_validatorv4.js"  type="text/javascript" xml:space="preserve"></script>

        <script language="javascript" src="<?php echo base_url(); ?>resource/modal.popup.js"></script>
        <script language="javascript" src="<?php echo base_url(); ?>resource/jquery.printPage.js"></script>

        <script src="<?php echo base_url(); ?>resource/js/jquery-ui.js"></script>
        <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">

    </head>
    <br><br>
    <body>
        <div class="container">
            <br>

            <!-- Nav tabs -->
            <div class="tabbable tabs-left" style="">
                <ul class="nav nav-tabs">

                    <li><a href="<?php echo base_url(); ?>welcome/comorbidityInfo.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Comorbidity</a></li>
                    <li><a href="<?php echo base_url(); ?>welcome/personalHistorInfo.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Personal History</a></li>
                    <li><a href="<?php echo base_url(); ?>welcome/familyHistory.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Family History</a></li>
                    <li><a href="<?php echo base_url(); ?>welcome/physical_findings.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Phys. Finds.</a></li>
                    <li><a href="<?php echo base_url(); ?>welcome/diagnosis.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Diagnosis</a></li>
                    <li><a href="<?php echo base_url(); ?>welcome/chemotherapy_region.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Chemo. Regimen</a></li>
                    <li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Investigation</a></li>
                    <li><a href="<?php echo base_url(); ?>welcome/my_prescription.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Prescription</a></li>
                </ul>
            </div>
            <style type="text/css">
                <!--
                .fontstyle {font-size: 30px}
                -->
            </style>
            <!-- Tab panes -->
            <div class="tab-content">


                <h3> <font color="red"><strong>[Investigation]</strong></font></h3><hr>
                <div class="row">
                    <div class="panel-group" id="accordion">

                        <div class="col-md-4">

                            <div class="panel panel-info in">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a style="text-decoration: none;" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Investigation Report</a><br>

                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <a style="text-decoration: none;" href="<?php echo base_url(); ?>welcome/haematology.html" target=""><span class="glyphicon glyphicon-plus"></span>&nbsp;Haematology</a><br>
                                        <a style="text-decoration: none;" href="<?php echo base_url(); ?>welcome/biochemistry_report.html" target=""><span class="glyphicon glyphicon-plus"></span>&nbsp;Multiple Single Line</a><br>
                                        <a style="text-decoration: none;" href="<?php echo base_url(); ?>welcome/stool_report.html" target=""><span class="glyphicon glyphicon-plus"></span>&nbsp;Stool</a><br>
                                        <a style="text-decoration: none;" href="<?php echo base_url(); ?>welcome/urine_report.html" target=""><span class="glyphicon glyphicon-plus"></span>&nbsp;Urine</a><br>
                                        <a style="text-decoration: none;" href="<?php echo base_url(); ?>welcome/radiology_report.html" target=""><span class="glyphicon glyphicon-plus"></span>&nbsp;Radiology</a><br>
                                        <a style="text-decoration: none;" href="<?php echo base_url(); ?>welcome/usg_report.html" target=""><span class="glyphicon glyphicon-plus"></span>&nbsp;USG</a><br>
                                        <a style="text-decoration: none;" href="<?php echo base_url(); ?>welcome/bone_marrow.html" target=""><span class="glyphicon glyphicon-plus"></span>&nbsp;Bone Marrow</a><br>
                                        <a style="text-decoration: none;" href="<?php echo base_url(); ?>welcome/echo_report.html" target=""><span class="glyphicon glyphicon-plus"></span>&nbsp;Echo </a><br>
                                        <a style="text-decoration: none;" href="<?php echo base_url(); ?>welcome/histopathology_report.html" target=""><span class="glyphicon glyphicon-plus"></span>&nbsp;Histopathology</a><br>
                                        <a style="text-decoration: none;" href="<?php echo base_url(); ?>welcome/cytopathology_report.html" target=""><span class="glyphicon glyphicon-plus"></span>&nbsp;Cytopathology</a><br>
                                        <a style="text-decoration: none;" href="<?php echo base_url(); ?>welcome/immunophenotyping_report.html" target=""><span class="glyphicon glyphicon-plus"></span>&nbsp;Immunophenotyping</a><br>
                                        <a style="text-decoration: none;" href="<?php echo base_url(); ?>welcome/karyotype_report_report.html" target=""><span class="glyphicon glyphicon-plus"></span>&nbsp;Karyotype</a><br>
                                        <a style="text-decoration: none;" href="<?php echo base_url(); ?>welcome/cytogenetic_report.html" target=""><span class="glyphicon glyphicon-plus"></span>&nbsp;Cytogenetic</a><br>
                                        <a style="text-decoration: none;" href="<?php echo base_url(); ?>welcome/others_report.html" target=""><span class="glyphicon glyphicon-plus"></span>&nbsp;Others Report</a><br>
                                    </div>
                                </div>
                            </div>
 </div>

                    </div>
 </div>
 </div>
        </div>

    </body> 
