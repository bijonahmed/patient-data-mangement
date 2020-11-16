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
        <script>
            $(document).ready(function() {
                $("#height").focus();
                $(":focus").css("background-color", "yellow");
            });
        </script>
    </head>
    <br><br><br>
    <body>
        <div class="container">
            <!-- Nav tabs -->
            <div class="tabbable tabs-left" style="">
            <ul class="nav nav-tabs">
                <li class=""><a href="<?php echo base_url(); ?>welcome/patient_prescription_step_one.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Presenting Complaints</a></li>
                <li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Comorbidity</a></li>
                <li><a href="<?php echo base_url(); ?>welcome/personalHistorInfo.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Personal History</a></li>
                <li><a href="<?php echo base_url(); ?>welcome/familyHistory.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Family History</a></li>
                <li><a href="<?php echo base_url(); ?>welcome/physical_findings.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Phys. Finds.</a></li>
                <li><a href="<?php echo base_url(); ?>welcome/diagnosis.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Diagnosis</a></li>
                <li><a href="<?php echo base_url(); ?>welcome/chemotherapy_region.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Chemo. Regimen</a></li>
                <li><a href="<?php echo base_url(); ?>welcome/investigation.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Investigation</a></li>
                <li><a href="<?php echo base_url(); ?>welcome/my_prescription.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Prescription</a></li>
            </ul>
                </div>
            <style> 
                .myborder
                {
                    border:2px solid #3CB371;
                    padding:20px 2px; 
                    background:#20B2AA;
                    width:auto;
                    border-radius:7px;
                }
            </style>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="home">

                    <div class="row">
                        <div class="col-md-9">
                              <h3> <font color="red"><strong>[Comorbdity]</strong></font></h3><hr>
                            <div class="">
                                <div class="form-group has-success">

                                    <form name="step_one" method="post" action="<?php echo base_url(); ?>data_record/save_patieint_history_info_by_comorbidity_update.html">
                                        <table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">

                                            <thead>
                                                <tr>
                                                    <th>Comorbidity List</th>
                                                    <th></th>
                                                    <th>Duration</th>
                                                    <th>Timing</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><select name="comorbidity_id" class="form-control" id="cc_name_id">

                                                            <option value="">--- Select ---</option>
                                                            <option value="">None</option>
                                                            <?php
                                                            foreach ($view_comorbidityInfo as $data) {
                                                                ?>
                                                                <option value="<?php echo $data->comorbidity_id; ?>"> <?php echo $data->comorbidity_name; ?> </option>
                                                            <?php } ?>
                                                        </select></td>
                                                    <td>
                                                        <a class="tooltips link" data-toggle="modal" data-target="#ex_comorbidity" href="#"><div class="btn-group"><div class="fontstyle">+</div></div>
                                                            <span>Please Click here</span></a>
                                                        <!-- -->
                                                    </td>
                                                    <td><select name="comorbidity_duration" class="form-control" id="complaint_duration" style="width:auto;">
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
                                                        <select name="comorbidity_timing" class="form-control" id="complaint_timing" style="width:auto;">
                                                            <option value="">--- Select ---</option>
                                                            <option>Day</option>
                                                            <option>Week</option>
                                                            <option>Month</option>
                                                            <option>Years</option>


                                                        </select>

                                                    </td>
                                                    <td><button class="btn btn-default" id="" onClick="return add_prescription_info()"><span class="glyphicon glyphicon-pencil"></span> Add Comorbidity</button></td>

                                                    <td><button class="btn btn-default" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Exra Comorbidity</button></td>

                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <h4 class="modal-title" id="myModalLabel">Extra Comorbidity..</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <textarea class="jqte-test form-control" name="extra_comorbidity"></textarea>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <table cellpadding="0" cellspacing="0" border="0" class="table table-hover" id="example_">
                                            <thead>
                                                <tr>
                                                    <th>SL NO</th>
                                                    <th>Comorbidity Name</th>
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
                                                    if (isset($patient_id)) {

                                                        foreach ($comorbidityinfo as $data) {
                                                            ?>

                                                            <tr>
                                                                <td><?php echo $x; ?></td>
                                                                <td><?php echo $data->comorbidity_name; ?></td>
                                                                <td><?php echo $data->comorbidity_duration; ?> </td>
                                                                <td><?php echo $data->comorbidity_timing; ?> </td>
                                                                <td>


                                                                    <a class="tooltips link" href="<?php echo base_url(); ?>data_record/delete_ComorbidityName/<?php echo $data->comoribdity_info_id; ?>" onClick="return delete_data();" style="text-decoration:none"><i class="icon-trash icon-black"></i>&nbsp;Delete
                                                                        <span>Delete Comorbidity</span>
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
                                    </form> 

                                    <form name="ext_com" method="post" action="<?php echo base_url(); ?>data_record/save_comorbidity_nameinfo_by_modal.html">
                                        <div class="modal fade" id="ex_comorbidity" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title" id="myModalLabel">Add Comorbidity</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="text" class="form-control" name="comorbidity_name" required="1">
                                                        <br><br>
                                                        <center><button class="btn btn-success"><span class="glyphicon glyphicon-saved"></span>Save</button></center>

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
                    .fontsize
                    {
                        font-size: 15px;
                    }
                </style>
            </div>

        </form>

    </div>
</div>

</body> 
<!-- Modal -->
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
</html> 