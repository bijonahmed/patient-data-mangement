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
                    <li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Phys.Finds.</a></li>
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
                                  <h3> <font color="red"><strong>[Physical Findings] </h3></font><font color="green"><h4>Patient ID:  <?php
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

                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#gene" data-toggle="tab">General Ex.</a></li>
                                                    <?php
                                                    /*
                                                      <li><a href="<?php echo base_url()?>welcome/add_new_physicalfindings_systolic_information.html" data-toggle="tab_">Systolic</a></li>
                                                     * 
                                                     */
                                                    ?>
                                                    <div class="col-md-3">
                                                        <form method="post" action="<?php echo base_url(); ?>data_record/save_customized_physical_fidings_value.html">


                                                            <div class="form-group has-warning">

                                                                <br> 

                                                                <input type="text" class="form-control" name="customized_physical_findings_name" id="inputSuccess1" placeholder="Add New Physical Fidings" required="1"><br>
                                                                <center>                    

                                                                </center>

                                                            </div>

                                                    </div>
                                                    <br>
                                                    <div class="col-md-1">
                                                        <button class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> </button>  
                                                    </div>

                                                    </form> 

                                                    <div class="col-md-2">


                                                        <form id="value_phycialfindings_form" method="post" action="<?php echo base_url(); ?>data_record/save_customized_physical_fidings_value_ph.html">
                                                            <select name="custom_phy_findings_id" class="form-control sm">
                                                                <option value="">--- Select ---</option>
                                                                <option value="">None</option>
                                                                <?php
                                                                foreach ($view_physicafindings as $data) {
                                                                    ?>
                                                                    <option value="<?php echo $data->custom_phy_findings_id; ?>"> <?php echo $data->customized_physical_findings_name; ?> </option>
                                                                <?php } ?>
                                                            </select>
                                                    </div> 
                                                    <div class="col-md-3">
                                                        <input type="text" class="form-control" id="inputSuccess1" name="phy_fin_value" placeholder="Value" required="1">

                                                    </div>
                                                    <button class="btn btn-default" id="btn_valuephyfindings"><span class="glyphicon glyphicon-plus"></span></button>
                                                    </form>


                                                    <?php
                                                    /*
                                                      <li><a href="#settings" data-toggle="tab">Settings</a></li>
                                                     */
                                                    ?>

                                                </ul>

                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="gene">

                                                        <div class="row">
                                                            <br>
                                                            <font color="#FF0000">
                                                            <?php
                                                            $message = $this->session->userdata('message');
                                                            //echo $message;
                                                            if (isset($message)) {
                                                                echo $message;
                                                                $this->session->unset_userdata('message');
                                                            }
                                                            ?>
                                                            </font>

                                                            <div class="form-group has-success">
                                                                <div class="row">
                                                                    <div class="col-xs-2">
                                                                        <form name="myform" method="post" action="<?php echo base_url(); ?>data_record/save_patieint_history_info_by_physical_findings.html">
                                                                            <input type="text" class="form-control" id="height" name="height" placeholder="Height"><br>
                                                                            <input type="text" class="form-control" id="textbox1" name="weight" placeholder="Weight"><br>
                                                                            <input type="text" class="form-control" name="bsa" id="textbox2" placeholder="BSA"> <br>
                                                                            <input type="hidden" class="form-control" id="textbox1" name="weightkg" value="<?php echo "kg"; ?>">
                                                                            Blood Pressure 
                                                                            <input type="text" class="form-control" name="systolic" placeholder="Systolic" required=""><br>
                                                                            <input type="text" class="form-control" name="diastolic" placeholder="Diastolic">
                                                                            Display
                                                                            <select name="display" class="form-control" id="complaint_timing" style="">
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                                                


                                                                            <script type="text/javascript">
                                                                                $(document).ready(function() {
                                                                                    $("#textbox1").change(function()
                                                                                    {
                                                                                        var weight = $("#textbox1").val();
                                                                                        var value1 = Number(weight) * 4 + 7;
                                                                                        var value2 = Number(weight) + 90;
                                                                                        var result = value1 / value2;
                                                                                        var bsax = result.toPrecision(5);
                                                                                        $("#textbox2").val(bsax);
                                                                                    });
                                                                                });
                                                                            </script>



                                                                    </div>


                                                                    <div class="col-xs-3">

                                                                        <select name="custom_phy_findings_id" class="form-control sm" onchange="physical_findingsInfo(this.value);">
                                                                            <option value="">--- Select ---</option>
                                                                            <option value="">None</option>
                                                                            <?php
                                                                            foreach ($custom_phy_info as $data) {
                                                                                ?>
                                                                                <option value="<?php echo $data->custom_phy_findings_id; ?>"> <?php echo $data->customized_physical_findings_name; ?> </option>
                                                                            <?php } ?>
                                                                        </select>   <br><br><br>       

                                                                    </div>

                                                                    <div class="col-xs-3">
                                                                        <select name="phy_fin_value[]"  class="form-control"  id="phy_fin_value_Id"  multiple="multiple">
                                                                            <option></option>
                                                                        </select>     
                                                                    </div>

                                                                    <input type="hidden" name="current_date" value="<?php echo date("Y-m-d"); ?>">
                                                                    <div class="col-xs-2">
                                                                        <input type="text" class="form-control" name="others_information">

                                                                    
                                                                    
                                                                    </div>
                                                                    <div class="col-xs-2">
                                                                        <button class="btn btn-default" onClick="return save_()"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Add Findings</button></center> 
                                                                    </div>
                                                                    </form>    
                                                                    <div class="col-xs-10">
                                                                        <table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">
                                                                            <thead>
                                                                                <tr>
                                                                                  
                                                                                    <th>Height</th>
                                                                                    <th>Weight</th>
                                                                                    <th>Systolic</th>
                                                                                    <th>Diastolic</th>
                                                                                    <th>BSA</th>
                                                                                    <th>Display</th>
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





                                                                                        foreach ($view_physicalfindingsInfo as $data) {
                                                                                            ?>

                                                                                            <tr>
                                                                                                
                                                                                                <td><?php echo $data->height; ?></td>
                                                                                                <td><?php echo $data->weight; ?> </td>
                                                                                                <td><?php echo $data->systolic; ?> </td>
                                                                                                <td><?php echo $data->diastolic; ?> </td>
                                                                                                <td><?php echo $data->bsa; ?>&nbsp;<?php echo $data->weightkg; ?> </td>
                                                                                                <td><strong><?php echo $data->display; ?> </strong></td>
                                                                                                <td>
                                                                                                    <a class="tooltips link" href="<?php echo base_url(); ?>data_record/delete_phy_value_data/<?php echo $data->physical_examination_id; ?>" onClick="return delete_data();" style="text-decoration:none"><i class="icon-trash icon-black"></i>&nbsp;Delete
                                                                                                        <span>Delete</span>
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
                                                                        <table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">
                                                                            <thead>
                                                                                <tr>

                                                                                    <th>Heading</th>
                                                                                    <th>Value</th>
                                                                                    <th>Result</th>
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
                                                                                        foreach ($view_physicalfindingsInfo_value as $data) {
                                                                                            ?>

                                                                                            <tr>

                                                                                                <td><?php echo $data->customized_physical_findings_name; ?> </td>
                                                                                                <td><?php echo $data->phy_fin_value; ?> </td>
                                                                                                <td><?php echo $data->others_information; ?> </td>
                                                                                                <td>
                                                                                                    <a class="tooltips" href="<?php echo base_url(); ?>data_record/delete_phy_value_data_information_multiple/<?php echo $data->physical_finds_multiple_id; ?>" onClick="return delete_data();" style="text-decoration:none"><i class="icon-trash icon-black"></i>&nbsp;Delete
                                                                                                        <span>Delete</span>
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
                                                    <div class="tab-pane" id="profile">.ee.</div>
                                                    <div class="tab-pane" id="messages">.aa.</div>
                                                    <div class="tab-pane" id="settings">.fhgj</div>
                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
<?php
// phy fin. end
?>


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
//
    function weightInfo(str)
    {
        var strUrl = "<?php echo base_url(); ?>data_record/weightinfo_by_bsa.html?=" + str;
//alert(str);var  strUrl="<?php echo base_url(); ?>data_record/weightinfo_by_bsa.html?custom_phy_findings_id="+str;
        var xmlhttp;
        if (str == "")
        {
            document.getElementById("bsa").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById("bsa").innerHTML = xmlhttp.responseText;
//alert(xmlhttp.responseText);
            }
        }
        xmlhttp.open("GET", strUrl, true);
        xmlhttp.send();
    }
</script>


<script>
//
    function physical_findingsInfo(str)
    {
        var strUrl = "<?php echo base_url(); ?>data_record/physicalFindings_by_search.html?custom_phy_findings_id=" + str;
//alert(str);
        var xmlhttp;
        if (str == "")
        {
            document.getElementById("phy_fin_value_Id").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById("phy_fin_value_Id").innerHTML = xmlhttp.responseText;
//alert(xmlhttp.responseText);
            }
        }
        xmlhttp.open("GET", strUrl, true);
        xmlhttp.send();
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
</html> 