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
                    <li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Family History</a></li>
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
                        <div class="row_">
                            <div class="col-md-9">
                                   <h3> <font color="red"><strong>[Family History] </h3></font><font color="green"><h4>Patient ID:  <?php
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
                                                    <div class="col-md-8">
                                                    
                                                        <form name="myform" class="form-inline" method="post" action="<?php echo base_url(); ?>data_record/save_patieint_history_info_by_familyhistory.html">
                                                            <div class="form-group has-success">
                                                                
                                                                
                                                                
                                                                <input type="text" class="form-control" rows="5" name="nothing_contributory" value="<?php echo "Nothing Contributory"?>"><br><br>
                                                                <textarea class="form-control" rows="3" cols="22" name="familyhistory_value" placeholder="If Present"></textarea>
                                                                
                                                                  
                                                                
                                                                <input type="hidden" name="current_date" value="<?php echo date("Y-m-d"); ?>">


                                                            </div> 
                                                            <br><br>
 <button style="" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> Add Family History</button> 

                                                    </div>
                                                    <br>
                                                   
                                                    </form>
                                                   
                                                </div>
                                            
                                            </div>
                                            <hr>
                                                    <div class="col-md-12">
                                                        <table cellpadding="0" cellspacing="0" border="0" class="table" id="example_" >
                                                            <thead>
                                                                <tr>
                                                                    <th>SL NO</th>

                                                                    <th>Nothing Contributory</th>
                                                                    <th>Present</th>
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



//familyhistory_value

                                                                        foreach ($patient_family_history_info as $data) {
                                                                            ?>

                                                                            <tr>
                                                                                <td><?php echo $x; ?></td>
                                                                                <td><?php echo $data->nothing_contributory; ?></td>
                                                                                <td><?php echo $data->familyhistory_value; ?> </td>

                                                                                <td>


                                                                                    <a class="tooltips link" href="<?php echo base_url(); ?>data_record/delete_familyHistoryName/<?php echo $data->family_history_id; ?>" onClick="return delete_data();" style="text-decoration:none"><i class="icon-trash icon-black"></i>&nbsp;Delete
                                                                                        <span>Delete Family History</span>
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
                            font-size: 15px;
                        }
                    </style>
                </div>
            </div>
        </form>

    </div>
</div>

</body> 

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