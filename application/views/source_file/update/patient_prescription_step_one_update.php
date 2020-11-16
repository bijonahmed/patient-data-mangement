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
        <script>
            $(document).ready(function() {
                $("#height").focus();
                $(":focus").css("background-color", "yellow");
            });//edit_revisit_prescription_comorbidity
        </script>

    </head>
    <br><br>
    <body>
        <div class="container">
            <br>

            <!-- Nav tabs -->
            <div class="tabbable tabs-left" style="">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Presenting Complaints</a></li>
                    
                    <li><a href="<?php echo base_url(); ?>data_record/edit_revisit_prescription_comorbidity.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Comorbidity</a></li>
                    <li><a href="<?php echo base_url(); ?>welcome/personalHistorInfo.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Personal History</a></li>
                    <li><a href="<?php echo base_url(); ?>welcome/familyHistory.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Family History</a></li>
                    <li><a href="<?php echo base_url(); ?>welcome/physical_findings.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Phys. Finds.</a></li>
                    <li><a href="<?php echo base_url(); ?>welcome/diagnosis.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Diagnosis</a></li>
                    <li><a href="<?php echo base_url(); ?>welcome/chemotherapy_region.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Chemo. Regimen</a></li>
                    <li><a href="<?php echo base_url(); ?>welcome/investigation.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Investigation</a></li>
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
                <div class="tab-pane active" id="home">
                    <div class="row">
                        <div class="col-md-9">
                            <h3> <font color="red"><strong>[Presenting Complaint ]</strong></font></h3><hr>
                            <div class="">



                                <div class="form-group has-success">

                                    <form name="step_one" method="post" action="<?php echo base_url(); ?>data_record/save_patieint_history_info_by_prescription_update.html">
                                        <table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">

                                            <thead>
                                                <tr>
                                                    <th>Complaint List</th>
                                                    <th></th>
                                                    <th>Duration</th>
                                                    <th>Timing</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                <tr>
                                                    <td><select name="cc_name_id" class="form-control" id="cc_name_id">

                                                            <option value="">--- Select ---</option>
                                                            <option value="">None</option>
                                                            <?php
                                                            foreach ($complaint_nameInfo as $data) {
                                                                ?>
                                                                <option value="<?php echo $data->cc_name_id; ?>"> <?php echo $data->complain_name; ?> </option>
                                                            <?php } ?>
                                                        </select></td>
                                                    <td>
                                                        <a class="tooltips" data-toggle="modal" data-target="#add_new_complaint" href="#"><div class="btn-group"><div class="fontstyle">+</div></div>
                                                            <span>Please Click here</span></a>


                                                        <!-- -->
                                                    </td>
                                                    <td><select name="complaint_duration" class="form-control" id="complaint_duration" style="width:auto;">
                                                            <option value="">--- Select ---</option>

                                                            <?php
                                                            for ($i = 1; $i <= 100; $i++) {
                                                                ?>

                                                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select></td>
                                                    <td>
                                                        <select name="complaint_timing" class="form-control" id="complaint_timing" style="width:auto;">
                                                            <option value="">--- Select ---</option>
                                                            <option>Day</option>
                                                            <option>Week</option>
                                                            <option>Month</option>
                                                            <option>Years</option>


                                                        </select>

                                                    </td>
                                                    <td><button class="btn btn-default" id="" onClick="return add_prescription_info()"><span class="glyphicon glyphicon-pencil"></span> Add Complaint</button></td>
                                                    <td><button class="btn btn-default" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Extra Complaint</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">
                                            <thead>
                                                <tr>
                                                    <th>SL NO</th>
                                                    <th>Complaint Name</th>
                                                    <th>Duration</th>
                                                    <th>Timing</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $x = 1; {
                                                    ?>
                                                    <?php
                                                    $patient_id = $this->session->userdata('patient_id');
                                                    if (isset($presentingComplaint)) {
                                                        foreach ($presentingComplaint as $data) {
                                                            ?>

                                                            <tr>
                                                                <td><?php echo $x; ?></td>
                                                                <td><?php echo $data->complain_name; ?></td>
                                                                <td><?php echo $data->complaint_duration; ?> </td>
                                                                <td><?php echo $data->complaint_timing; ?> </td>
                                                                <td>


                                                                    <a class="tooltips link" href="<?php echo base_url(); ?>data_record/delete_complaintName_update/<?php echo $data->cc_name_id; ?>" onClick="return delete_data();" style="text-decoration:none">&nbsp;Delete
                                                                        <span>Delete Complaint</span>
                                                                    </a>
                                                                </td>

                                                                <?php
                                                                $x++;
                                                            }
                                                        }
                                                    }
                                                    ?>
                                                </tr>

                                            </tbody>
                                        </table>

                                        <input type="hidden" name="current_date" value="<?php echo date("Y-m-d"); ?>">


                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="myModalLabel">Extra Complaint</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <textarea class="jqte-test form-control" name="extra_complaint" ></textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form> 

                                </div>


                            </div>

                        </div>


                    </div>



                </div>


                <style>
                    .topmarginInfo{
                        margin-top: 30px;
                    }
                </style>


            </div>

    </body> 

    <script type="text/javascript">
        $('#reciv_date').datepicker()
    </script>

    <script type="text/javascript">
        $('#deli_date').datepicker()
    </script>
    <!-- Modal -->
    <div class="modal fade bs-example-modal-lg" id="search" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Search USG</h4>
                </div>
                <div class="modal-body">

                    <div class="">

                        <div class="form-group has-success">

                            <br>
                            <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">

                                <thead>
                                    <tr class="success">
                                        <th width="90">Pt. ID</th>
                                        <th width="250">Pt. Name</th>
                                        <th width="100">Rev. date</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($usg_data as $data) {
                                        ?>

                                        <tr class="">
                                            <td><?php echo $data->patient_id; ?></span></td>
                                            <td><?php echo $data->patient_name; ?></span></td>
                                            <td><?php echo $data->reciv_date; ?></span></td>

                                            <td>
                                                <a class="link" href="<?php echo base_url(); ?>data_record/edit_form_usg_report/<?php echo $data->usg_id; ?>" onClick="return save();" style="text-decoration:none"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                                <?php
                                                /*
                                                  <a class="link" href="<?php echo base_url();?>data_record/delete_haematology_report_name/<?php echo $data->haematology_id;?>" onClick="return save();" style="text-decoration:none"><span class="glyphicon glyphicon-trash"></span> Delete</a>

                                                 */
                                                ?>


                                            </td>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>



                        </div> 


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <script>
        $('.jqte-test').jqte();

        // settings of status
        var jqteStatus = true;
        $(".status").click(function()
        {
            jqteStatus = jqteStatus ? false : true;
            $('.jqte-test').jqte({"status": jqteStatus})
        });
    </script>

    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("active");
        });
    </script>


    <script>
        function save()
        {
            chk = confirm("Are You Sure");
            if (chk)
            {
                return true;
            }
            else {
                return false;
            }
        }
    </script>





    <script>
        function add_pathologyical_testInfo()
        {
            chk = confirm("Are You Sure Save Pathological Test Information ..?");
            if (chk)
            {
                return true;
            }
            else {
                return false;
            }
        }
    </script>

    <script>
        function delete_data()
        {
            chk = confirm("Are you sure");
            if (chk)
            {
                return true;
            }
            else {
                return false;
            }
        }
    </script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("active");
        });
    </script>
    <script>
        /*
         * Accordion v1.0
         * Developed by Yuriy Vaskevich
         * Simple jQuery Accordion plugin
         * Date: 02/24/2013
         * Usege: $("dl").SimleAccordion();
         * This work is licensed under a Creative Commons Attribution-ShareAlike 3.0
         * Unported License: http://creativecommons.org/licenses/by-sa/3.0/
         */
        (function($) {

            $.fn.SimpleAccordion = function() {

                // Cache element
                var accordion = $(this);

                // Fade in on load
                accordion.hide().fadeIn();

                // Open active panel
                accordion.find(".active").show();

                // Listen to onClick
                accordion.find("dt").on("click", function() {

                    // Cache current
                    var current = $(this).next("dd");

                    // Check if not active
                    if (current.is(":hidden")) {

                        // Open curren panel
                        current.slideDown().siblings("dd").slideUp();

                    }

                });

            };

        })(jQuery);

        $(".accordion").SimpleAccordion();
    </script>
</html> 