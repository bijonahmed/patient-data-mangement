<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

        <script src="<?php echo base_url(); ?>data_table/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>resource/data_table/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url(); ?>resource/data_table/js/DT_bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>resource/data_table/js/bootstrap-dataTables-paging.js"></script>
        <script src="<?php echo base_url(); ?>resource/data_table/js/bootstrap-dataTables.js"></script>

        <link href="<?php echo base_url(); ?>admin_panel/jQuery-TE_v.1.4.0/job_ jquery-te-1.4.0.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>admin_panel/jQuery-TE_v.1.4.0/jquery-te-1.4.0.min.js"></script>
        <script src="<?php echo base_url(); ?>admin_panel/js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>javascript_form/examples/gen_validatorv4.js"  type="text/javascript" xml:space="preserve"></script>


        <script src="<?php echo base_url(); ?>resource/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url(); ?>resource/js/jquery-ui.js"></script>

        <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
        <script>
            $(document).ready(function() {
                $("#height").focus();
                $(":focus").css("background-color", "yellow");
            });
        </script>
    </head>
    <br><br>
    <body>
        <div class="container">
            <br>
            <div class="form-group has-success">

                <!-- Nav tabs -->
                <div class="tabbable tabs-left" style="">
                <ul class="nav nav-tabs">
                    <li class=""><a href="<?php echo base_url(); ?>welcome/patient_prescription_step_one.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Presenting Complaints</a></li>
                    <li class=""><a href="<?php echo base_url(); ?>welcome/comorbidityInfo.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Comorbidity</a></li>
                    <li class=""><a href="<?php echo base_url(); ?>welcome/personalHistorInfo.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Personal History</a></li>
                    <li class=""><a href="<?php echo base_url(); ?>welcome/familyHistory.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Family History</a></li>
                    <li class=""><a href="<?php echo base_url(); ?>welcome/physical_findings.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Phys. Finds.</a></li>
                    <li class=""><a href="<?php echo base_url(); ?>welcome/diagnosis.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Diagnosis</a></li>
                    <li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Che. Regimen</a></li>
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
                                   <h3> <font color="red"><strong>[Chemotherapy Regimen.]</h3></font><font color="green"><h4>Patient ID:  <?php
                            $patient_id = $this->session->userdata('manual_pid');
                            if (isset($patient_id))
 $length=strlen($patient_id); 
        $part1=substr_replace("$patient_id","/",2);
        $part2=substr("$patient_id",2);

  $patient_id=$part1.$part2;
                                echo $patient_id;
                            ?>, &nbsp;Visit No:<?php echo $this->session->userdata('visiting_no');?>,&nbsp;Visit Date:<?php echo date("d-m-Y",  strtotime($this->session->userdata('current_date')));?></font></strong></h4><hr>
                                <div class="">
                                    <div class="form-group has-success">

                                        <!-- Tab panes -->
                                        <div class="tab-content">

                                            <div class="tab-pane active" id="home">
                                          

                                                <div class="row">

                                                    <div class="col-md-9">
                                                        
                                                        <div align="left" style="margin-left: 15px;">
                                                            <a data-toggle="modal" href="#shortModal" class="btn btn-primary">Add Protocol</a> 
                                                        </div>
                                                    </div>   

                                                    <br><br><br>
                                                    <div align="left">
                                                        <div class="col-md-11">

                                                            <div class="alert alert-success">
                                                                <?php
                                                                $patient_id = $this->session->userdata('patient_id');
                                                                if (isset($patient_id)) {
                                                                    foreach ($ChemotherapyInformationMain as $data) {
                                                                        ?>

                                                                        Protocol Name &nbsp;:&nbsp;<strong><?php echo $data->customized_chemotherapy_regimen_name; ?></strong><br>


                                                                        <?php
                                                                    }
                                                                }
                                                                ?>

                                                            </div>
                                                            <!-- cycle-->                    
                                                            <form name="myform" method="post" action="<?php echo base_url(); ?>data_record/save_protocol_cycle.html"  enctype="multipart/form-data">
                                                                <table cellpadding="0" cellspacing="0" border="0" class="table" id="example_" style="margin-left: 15px;">
                                                                    <thead>
                                                                        <tr>


                                                                            <th>Cycle No</th>
                                                                            <th>Date</th>
                                                                            <th>Next Cycle</th>
                                                                            <th>Remarks</th>
                                                                            <th width="">Action</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        $patient_id = $this->session->userdata('patient_id');
                                                                        if (isset($patient_id)) {


                                                                            foreach ($patient_cycle_info as $data) {
                                                                                ?>
                                                                                <tr>
                                                                                    <td><?php echo $data->cycle_no; ?></td>    
                                                                                    <td><?php echo $data->cycle_date_one; ?></td> 
                                                                                    <td><?php echo $data->cycle_date_two; ?></td> 
                                                                                    <td><?php echo $data->remarks; ?></td> 
                                                                                    <td><?php echo ""; ?></td> 
                                                                                </tr>  

                                                                                <?php
                                                                            }
                                                                        }
                                                                        ?>
                                                                        <tr>
                                                                            <td><strong><?php echo $cycle_no;
                                                                        ?></strong></td>
                                                                            <td><input type="text" class="form-control" name="cycle_date_one" placeholder="Cycle Date" id="cycle_date" required="1" > </td>
                                                                            <td><input type="text" class="form-control" name="cycle_date_two" placeholder="Next Cycle Date" id="cycle_date_two"></td>
                                                                            <td><textarea class="form-control" name="remarks" placeholder="Remarks "></textarea></div></td>
                                                                    <input type="hidden" name="current_date" value="<?php echo date("Y-m-d"); ?>">
                                                                    <td><button class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button></td>
                                                                    </tr>

                                                                    </tbody>
                                                                </table>                  
                                                            </form> 

                                                            <script type="text/javascript">
                                                                $('#cycle_date').datepicker()
                                                            </script>     
                                                            <script type="text/javascript">
                                                                $('#cycle_date_two').datepicker()
                                                            </script> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">

                                                        <div class="form-group has-success">

                                                        </div>
                                                        </form> 
                                                    </div>
                                                    <div class="col-md-2">

                                                        <div align="right">
                                                            <div id="shortModal" class="modal fade">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                            <h4 class="modal-title">Protocol</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form name="myform" method="post" action="<?php echo base_url(); ?>data_record/save_chemotherapy_regemin_main.html"  enctype="multipart/form-data">
                                                                                <div class="row">

                                                                                    <div class="col-md-5">
                                                                                        <select name="custom_chemotherapy_regmine_id" class="form-control" id="custom_chemotherapy_regmine_id" onchange="OnChangeChemotherapyValue(this.value);">


                                                                                            <option value="">Select</option>
                                                                                            <?php
                                                                                            foreach ($chemotherapy_regimen_name as $data) {
                                                                                                ?>
                                                                                                <option value="<?php echo $data->custom_chemotherapy_regmine_id; ?>"> <?php echo $data->customized_chemotherapy_regimen_name; ?> </option>
                                                                                            <?php } ?>
                                                                                        </select>



                                                                                        <input type="hidden" name="current_date" value="<?php echo date("Y-m-d"); ?>">
                                                                                        <br>
                                                                                        <div align="left">
                                                                                            <input type="file" name="file_upload" class="">     

                                                                                        </div>

                                                                                    </div>
                                                                                    <div class="col-md-4">

                                                                                        <center><button class="btn btn-default" onclick="return sure();"><span class="glyphicon glyphicon-saved"></span> Add Protocol </button></center>
                                                                                    </div>
                                                                                </div>
                                                                            </form>


                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                                                        </div>
                                                                    </div><!-- /.modal-content -->
                                                                </div><!-- /.modal-dialog -->
                                                            </div><!-- /.modal -->

                                                            <!-- Modal -->

                                                        </div>

                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>


                        </div>
                    </div>


                    <style>
                        .fontsize
                        {
                            font-size: 19px;
                        }
                    </style>

                </div>
            </div>
        </form>

    </div>
</div>

</body> 


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