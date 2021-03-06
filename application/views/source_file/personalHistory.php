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
                <li class=""><a href="<?php echo base_url(); ?>welcome/comorbidityInfo.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Comorbidity</a></li>
                <li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Personal History</a></li>
                <li><a href="<?php echo base_url(); ?>welcome/familyHistory.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Family History</a></li>
                <li><a href="<?php echo base_url(); ?>welcome/physical_findings.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Phys. Finds.</a></li>
                <li><a href="<?php echo base_url(); ?>welcome/diagnosis.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Diagnosis</a></li>
                <li><a href="<?php echo base_url(); ?>welcome/chemotherapy_region.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Chemo. Regimen</a></li>
                <li><a href="<?php echo base_url(); ?>welcome/investigation.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Investigation</a></li>
                <li><a href="<?php echo base_url(); ?>welcome/my_prescription.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Personal History</a></li>
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
                              <h3> <font color="red"><strong>[Personal History] </h3></font><font color="green"><h4>Patient ID:  <?php
                            $patient_id = $this->session->userdata('manual_pid');
                            if (isset($patient_id))
 $length=strlen($patient_id); 
        $part1=substr_replace("$patient_id","/",2);
        $part2=substr("$patient_id",2);

  $patient_id=$part1.$part2;
                                echo $patient_id;
                            ?>, &nbsp;Visit No:<?php echo $this->session->userdata('visiting_no');?>,&nbsp;Visit Date:<?php echo date("d-m-Y",  strtotime($this->session->userdata('current_date')));?></font></strong></h4><hr>
                            <div class="">

                                <form name="step_one" method="post" action="<?php echo base_url(); ?>data_record/save_patieint_history_info_by_personalHistory.html">

                                    <div class="form-group has-success">


                                        <table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">

                                            <thead>
                                                <tr>
                                                    <th>Personal History</th>
                                                    <th></th>
                                                    <th>Duration</th>
                                                    <th>Timing</th>
                                                    <th>Display</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                <tr>
                                                    <td><select name="personal_id" class="form-control" id="cc_name_id">

                                                            <option value="">--- Select ---</option>
                                                            <option value="">None</option>
                                                            <?php
                                                            foreach ($view_personalhistoryInfo as $data) {
                                                                ?>
                                                                <option value="<?php echo $data->personal_id; ?>"> <?php echo $data->personal_history_name; ?> </option>
                                                            <?php } ?>
                                                        </select></td>
                                                    <td>
                                                        <a class="tooltips" data-toggle="modal" data-target="#add_new_personalhistory" href="#"><div class="btn-group"><div class="fontstyle">+</div></div>
                                                            <span>Please Click here</span></a>
                                                        <!-- -->
                                                    </td>
                                                    <td><select name="personal_history_duration" class="form-control" id="complaint_duration" style="width:auto;">
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
                                                        <select name="personal_history_timing" class="form-control" id="complaint_timing" style="width:auto;">
                                                            <option value="">--- Select ---</option>
                                                            <option>Day</option>
                                                            <option>Week</option>
                                                            <option>Month</option>
                                                            <option>Years</option>


                                                        </select>
                                                      

                                                    </td>
                                                    <td>
                                                          <select name="display" class="form-control" id="complaint_timing" style="width:auto;">
                                                          
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                          


                                                        </select>
                                                    </td>
                                                    <td><button class="btn btn-default" id="" onClick="return add_prescription_info()"><span class="glyphicon glyphicon-pencil"></span> Add Per. History</button></td>
                                                    <td><button class="btn btn-default" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Extra History</button></td>
                                                    <!-- Modal -->
                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <h4 class="modal-title" id="myModalLabel">Extra History</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <textarea class="jqte-test form-control" name="extra_personal_history" ></textarea>
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
                                                    <th>Personal History Name</th>
                                                    <th>Duration</th>
                                                    <th>Timing</th>
                                                      <th>Display</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $x = 1;
                                                {
                                                    ?>
                                                    <?php
                                                    $patient_id = $this->session->userdata('patient_id');
                                                    if (isset($patient_id)) {




                                                        if (isset($patient_history_info)) {
                                                        foreach ($patient_history_info as $data) {
                                                            ?>

                                                            <tr>
                                                                <td><?php echo $x; ?></td>
                                                                <td><?php echo $data->personal_history_name; ?></td>
                                                                <td><?php echo $data->personal_history_duration; ?> </td>
                                                                <td><?php echo $data->personal_history_timing; ?> </td>
                                                                <td><strong><?php echo $data->display;?></strong></td>
                                                                <td>


                                                                    <a class="tooltips link" href="<?php echo base_url(); ?>data_record/delete_personalHistoryName/<?php echo $data->personal_histor_id; ?>" onClick="return delete_data();" style="text-decoration:none"><i class="icon-trash icon-black"></i>&nbsp;Delete
                                                                        <span>Delete History</span>
                                                                    </a>
                                                                </td>

                                                                <?php
                                                                $x++;
                                                            }
 }
                                                        }
                                                    }
                                                    ?>
                                                </tr>

                                            </tbody>
                                        </table>

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

</body> 
<form name="ext_com" method="post" action="<?php echo base_url(); ?>data_record/save_comorbidity_nameinfo_by_modal.html">
    <div class="modal fade" id="ex_comorbidity" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Add Comorbidity</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group has-success">
                        <input type="text" class="form-control" name="comorbidity_name" required="1">
                        <br><br>
                        <center><button class="btn btn-success"><span class="glyphicon glyphicon-saved"></span>Save</button></center>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</form>
<!-- add new complaint by Modal -->
<div class="modal fade" id="add_new_complaint" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Add New Complaint</h4>
            </div>
            <div class="modal-body">


                <form name="employee" method="post" action="<?php echo base_url(); ?>data_record/save_complaint_name_by_modal.html">
                    <div class="form-group has-success">
                        Add Complaint Name
                        <label class="control-label" for="inputSuccess1"></label>
                        <input type="text" class="form-control" name="complain_name" id="complain_name" required="1" ><br>
                        <center> <button class="btn btn-info" onClick="return save()"><span class="glyphicon glyphicon-pencil"></span>
                                Add Complaint&nbsp;&nbsp;</button>

                        </center>

                    </div>
                </form>  
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