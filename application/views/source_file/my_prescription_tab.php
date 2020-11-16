<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
        <script src="<?php echo base_url(); ?>resource/Context.js-master/context.js"></script>
        <script src="<?php echo base_url(); ?>resource/Context.js-master/demo.js"></script>
        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.standalone.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">

        <script language="javascript" src="<?php echo base_url(); ?>resource/modal.popup.js"></script>
        <script language="javascript" src="<?php echo base_url(); ?>resource/jquery.printPage.js"></script>

        <script src="<?php echo base_url(); ?>resource/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url(); ?>resource/js/jquery-ui.js"></script>
        <script src="<?php echo base_url(); ?>admin_panel/js/bootstrap.js"></script>

        <script>
            $(document).ready(function() {

                //Change these values to style your modal popup
                var align = 'center';									//Valid values; left, right, center
                var top = 40; 											//Use an integer (in pixels)
                var width = 900; 										//Use an integer (in pixels)
                var padding = 10;										//Use an integer (in pixels)
                var backgroundColor = '#FFFFFF'; 						//Use any hex code
                var source = '<?php echo base_url(); ?>data_record/print_preview_prescription'; 								//Refer to any page on your server, external pages are not valid e.g. http://www.google.co.uk
                var borderColor = '#333333'; 							//Use any hex code
                var borderWeight = 4; 									//Use an integer (in pixels)
                var borderRadius = 5; 									//Use an integer (in pixels)
                var fadeOutTime = 300; 									//Use any integer, 0 = no fade
                var disableColor = '#666666'; 							//Use any hex code
                var disableOpacity = 40; 								//Valid range 0-100
                var loadingImage = '<?php echo base_url(); ?>resource/loading.gif';		//Use relative path from this page

                //This method initialises the modal popup
                $(".bijon").click(function() {
                    modalPopup(align, top, width, padding, disableColor, disableOpacity, backgroundColor, borderColor, borderWeight, borderRadius, fadeOutTime, source, loadingImage);
                });

                //This method hides the popup when the escape key is pressed
                $(document).keyup(function(e) {
                    if (e.keyCode == 27) {
                        closePopup(fadeOutTime);
                    }
                });

            });
        </script>
        <script>
            $(document).ready(function() {
                $(".btnPrint").printPage({
                    url: "<?php echo base_url(); ?>data_record/print_preview_prescription.html",
                    attr: "href",
                    message: "Your document is being created Print"
                });
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
                    <li class=""><a href="<?php echo base_url(); ?>welcome/personalHistorInfo.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Personal History</a></li>
                    <li class=""><a href="<?php echo base_url(); ?>welcome/familyHistory.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Family History</a></li>
                    <li class=""><a href="<?php echo base_url(); ?>welcome/physical_findings.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Phys. Finds.</a></li>
                    <li class=""><a href="<?php echo base_url(); ?>welcome/diagnosis.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Diagnosis</a></li>
                    <li><a href="<?php echo base_url(); ?>welcome/investigation.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Investigation</a></li>
                    <li><a href="<?php echo base_url(); ?>welcome/chemotherapy_region.html" data-toggle="_tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Chemo. Regimen</a></li>
                    <li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-plus"></span>&nbsp;Prescription</a></li>
                </ul>
            </div>
            <style> 
                .myborder
                {
                    border:2px solid #3CB371;
                    padding:100px 2px; 
                    background:#20B2AA;
                    width:auto;
                    border-radius:7px;
                }
            </style>

            <style type="text/css">
                <!--
                .fontstyle {font-size: 30px}
                -->
            </style>

            <script>
                $(function() {
<?php
foreach ($auto_complete_investigatino as $row):
    $auto_complete_investigatino[] = $row->test_name;
endforeach;

echo "var javascript_array =" . json_encode($auto_complete_investigatino);
?>

                    $("#test_name").autocomplete({
                        source: javascript_array
                    });

                });
            </script>
            <!-- Tab panes -->
            <div class="container">
           <font color="green"><h4>Patient ID:  <?php
                            $patient_id = $this->session->userdata('manual_pid');
                            if (isset($patient_id))
 $length=strlen($patient_id); 
        $part1=substr_replace("$patient_id","/",2);
        $part2=substr("$patient_id",2);

  $patient_id=$part1.$part2;
                                echo $patient_id;
                            ?>, &nbsp;Visit No:<?php echo $this->session->userdata('visiting_no');?>,&nbsp;Visit Date:<?php echo date("d-m-Y",  strtotime($this->session->userdata('current_date')));?></font></strong></h4><hr>
                            
                           
                           
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <div class="">
                            <div class="container">
                                <div class="">
                                    <div class="form-group has-success">
                                        <div class="">


                                            <div class="col-md-9">


                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <form name="userinfo" method="post" action="<?php echo base_url(); ?>data_record/save_adviceInformation.html">
                                                            <select name="add_advice_id" class="form-control" id="add_advice_id">
                                                                <option value="">--- Advice ---</option>
                                                                <?php
                                                                foreach ($patientadviceInfo as $data) {
                                                                    ?>
                                                                    <option value="<?php echo $data->add_advice_id; ?>"> <?php echo $data->patient_advice_name; ?> </option>
                                                                <?php } ?>
                                                            </select> 
                                                    </div>
                                                    <div class="col-md-1">
                                                        <button class="btn btn-default" id="" onClick="return save_()"><span class="glyphicon glyphicon-plus"></span></button> 
                                                    </div>
                                                    </form>

                                                    <div class="col-md-6">
                                                        <form name="prescription" id="mymodal" method="post" action="<?php echo base_url(); ?>data_record/save_prescription_ajax_table_by_investigation_autocomplete.html">
                                                            <input type="text" name="test_name" class="form-control" placeholder="Investigation Name" required="1" autofocus="" id="test_name">



                                                            </div>
                                                            <div class="col-md-1">
                                                                <button class="btn btn-default" id="" onClick="return save_()"><span class="glyphicon glyphicon-plus"></span></button> 
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <form name="userinfo" method="post" action="<?php echo base_url(); ?>data_record/save_prescription_ajax_tableinfo.html">
                                                        <table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">

                                                            <thead>
                                                                <tr>
                                                                    <th>Dose</th>
                                                                    <th>Drug</th>
                                                                    <th>Schedule</th>
                                                                    <?php
                                                                    /*
                                                                      <th>Amount</th>
                                                                     */
                                                                    ?>

                                                                    <th>Day</th>
                                                                    <th>Suggestion</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>


                                                                <tr>
                                                                    <td><select name="dose_id" class="form-control" id="dose_id" onchange="brand_name_presctiption_info(this.value);">

                                                                            <option selected="selected">Select</option>
                                                                            <?php
                                                                            foreach ($dosetype as $doseTypeInfo) {
                                                                                ?>
                                                                                <option value="<?php echo $doseTypeInfo->dose_id; ?>"> <?php echo $doseTypeInfo->dose_type; ?> </option>
                                                                            <?php } ?>
                                                                        </select></td>

                                                                    <td>
                                                                     
                                                                        
                                                                           <select name="brand_name" class="form-control" id="brand_name" onchange="drughelp(this.value);">
                                                                            <option></option>
                                                                        </select>
                                                                      
                                                                        
                                                                        <!-- -->
                                                                    </td>
                                                                    <td><select name="dose_schedule_id"id="dose_schedule_id" class="form-control" style="width:auto">
                                                                            <option value="">--- Select ---</option>
                                                                            <?php
                                                                            foreach ($scheduleInfo as $schedule) {
                                                                                ?>
                                                                                <option value="<?php echo $schedule->dose_schedule_id; ?>"> <?php echo $schedule->dose_schedule; ?> </option>
                                                                            <?php } ?>
                                                                        </select></td>
                                                                    <?php
                                                                    /*
                                                                      <td><input type="text" name="amount" class="form-control"id="amount" style="width: 50px;"></td>
                                                                     */
                                                                    ?>


                                                                    <td><input type="text" name="day" class="form-control" id="day" style="width: 50px;"></td>
                                                                    <td><select name="doseSuggestion_id" class="form-control" id="doseSuggestion_id" style="width:auto;">
                                                                            <option value="">--- Select ---</option>
                                                                            <?php
                                                                            foreach ($suggestion as $suggestion) {
                                                                                ?>
                                                                                <option value="<?php echo $suggestion->doseSuggestion_id; ?>"> <?php echo $suggestion->dose_suggestion; ?> </option>
                                                                            <?php } ?>
                                                                        </select></td>
                                                                    <td><button class="btn btn-default" id="" onClick="return add_prescription_info_()"><span class="glyphicon glyphicon-plus"></span> Add Drug</button></td>
                                                                </tr>

                                                            </tbody>

                                                        </table>

                                                    </form> 

                                                    <table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">

                                                        <thead>
                                                            <tr>
                                                                <th>SL NO</th>
                                                                <th>Dose Type</th>
                                                                <th>Drug & Strength</th>

                                                                <th>Schedule</th>
                                                                <?php
                                                                /*
                                                                  <th>Amount</th>
                                                                 */
                                                                ?>

                                                                <th>Suggestion</th>
                                                                <th>Day</th>
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
                                                                    foreach ($prescriptoin_data as $pres) {
                                                                        ?>

                                                                        <tr>
                                                                            <td><?php echo $x; ?></td>
                                                                            <td><?php echo $pres->dose_type; ?></td>
                                                                            <td><?php echo $pres->brand_name; ?></td>


                                                                            <td><?php echo $pres->dose_schedule; ?></td>

                                                                            <td><?php echo $pres->dose_suggestion; ?></td>
                                                                            <td><?php echo $pres->day; ?> </td>
                                                                            <td>


                                                                                <a class="" href="<?php echo base_url(); ?>data_record/delete_drug_name/<?php echo $pres->prescription_id; ?>" onClick="return delete_data();" style="text-decoration:none" data-toggle="tooltip" data-placement="left" title="Delete Medicine"><i class="icon-trash icon-black"></i>&nbsp;Delete</a>
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

                                                    <small> 
                                                        <table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">

                                                            <thead>
                                                                <tr>
                                                                    <th width="70">SL NO</th>
                                                                    <th width="670">Advice Name</th>

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

                                                                        foreach ($adviceInformation as $pres) {
                                                                            ?>

                                                                            <tr>
                                                                                <td><?php echo $x; ?></td>
                                                                                <td><?php echo $pres->patient_advice_name; ?></td>

                                                                                <td>


                                                                                    <a class="" href="<?php echo base_url(); ?>data_record/delete_patientadviceInfo_name/<?php echo $pres->patient_advice_id; ?>" onClick="return delete_data();" style="text-decoration:none" data-toggle="tooltip" data-placement="left" title="Delete Advice"><i class="icon-trash icon-black"></i>&nbsp;Delete</a>
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

                                                    </small>

                                                    <table cellpadding="0" cellspacing="0" border="0" class="" id="example_">

                                                        <thead>
                                                            <tr class="">
                                                                <th width="200"><u>Investigation</u></th>
                                                        <th></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
<?php
if (isset($test_name))
    foreach ($test_name as $data) {
        ?>

                                                                    <tr class="">
                                                                        <td><font color="red"><?php echo $data->test_name; ?></font></span></td>

                                                                        <td>
                                                                            <a class="link" href="<?php echo base_url(); ?>data_record/delete_investigation_by_prescription/<?php echo $data->investigation_id; ?>" onClick="return delete_data();" style="text-decoration:none" data-toggle="tooltip" data-placement="left" title="Delete Investigation Name" ><span class="glyphicon glyphicon-trash"></span></a>

                                                                        </td>
                                                                        </td>
                                                                    </tr>
    <?php } ?>
                                                        </tbody>
                                                    </table>

                                                <div id="drugHelp"></div>
                                                </div>

                                                <div class="col-md-1">
                                                    <div class="btn-group">
                                                        <button class="btn btn-info" data-toggle="modal" data-target="#drugModal"><span class="glyphicon glyphicon-plus"></span> Drug &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        <br><br>
                                                        <button class="btn btn-success" data-toggle="modal" data-target="#adviceModal"><span class="glyphicon glyphicon-plus"></span> Advice &nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        <br><br>
                                                        <button type="button" class="btn btn-default btn bijon" ><i class="icon-zoom-in"></i> <span class="glyphicon glyphicon-zoom-in"></span>&nbsp;Preview&nbsp;&nbsp;&nbsp;</button>
                                                        <br><br>
                                                        <button type="button" class="btn btn-danger btn btnPrint"><i class="icon-print"></i> <span class="glyphicon glyphicon-print"></span>&nbsp;Printing&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                                        <br><br>
<?php
/*
  <button type="button" class="btn btn-info" data-toggle="modal" href="#help_drug"><span class="glyphicon glyphicon-search"></span>&nbsp;Drug Help</button>
 */
?>
                                                    </div>
                                                </div>

                                            </div>
                                        </div></div>

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
            <!--/Add New Drug modal--> 
            <form name="drug" method="post" action="<?php echo base_url(); ?>data_record/save_new_drug_name_prescription.html">
                <div class="modal fade" id="drugModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Add Drug</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-2">

                                    </div>
                                    <div class="col-md-8">

                                        <div class="alert alert-info">

                                            Dose Type<div class="form-group has-success">
                                                <select name="dose_id" id="select" required="1" class="form-control">

<?php
foreach ($dosetype as $data) {
    ?>
                                                        <option value="<?php echo $data->dose_id; ?>"> <?php echo $data->dose_type; ?> </option>
                                                    <?php } ?>
                                                </select>

                                                Brand Name<div class="form-group has-success">
                                                    <input type="text" class="form-control" name="brand_name" id="brand_name" required="1" ><br>

                                                </div>

                                                <center> <button class="btn btn-info" onClick="return save_()"><span class="glyphicon glyphicon-saved"></span>
                                                        Save</button>

                                                </center>
                                            </div>
                                        </div>
                                    </div>   

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
            <!--/Add New Advice modal--> 
            <form name="advice" method="post" action="<?php echo base_url(); ?>data_record/save_patient_advice_info_by_pp.html">
                <div class="modal fade" id="adviceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Add Advice</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-2">

                                    </div>
                                    <div class="col-md-8">

                                        <div class="alert alert-info">

                                            Add Advice Name <div class="form-group has-success">
                                                <label class="control-label" for="inputSuccess1"></label>
                                                <input type="text" class="form-control" name="patient_advice_name" id="patient_advice_name"required="1" ><br>
                                                <center> <button class="btn btn-info" onClick="return save()"><span class="glyphicon glyphicon-save"></span>
                                                        Save&nbsp;&nbsp;</button>

                                                </center>

                                            </div>
                                        </div>
                                    </div>
                                </div>   

                            </div>
                        </div>


                    </div>

                </div>
        </div>
    </form>
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
<script>
 
    function drughelp(str)
    {
        var strUrl = "<?php echo base_url(); ?>data_record/drug_help_presctiption_info.html?brand_name=" + str;
//alert(str);
        var xmlhttp;
        if (str == "")
        {
            document.getElementById("drugHelp").innerHTML = "";
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
                document.getElementById("drugHelp").innerHTML = xmlhttp.responseText;
//alert(xmlhttp.responseText); drug_help_presctiption_info
            }
        }
        xmlhttp.open("GET", strUrl, true);
        xmlhttp.send();
    }
</script>
<script>
//onclick retrive delivery date
    function brand_name_presctiption_info(str)
    {
        var strUrl = "<?php echo base_url(); ?>data_record/dose_type_wise_brand_name_info.html?dose_id=" + str;
//alert(str);
        var xmlhttp;
        if (str == "")
        {
            document.getElementById("brand_name").innerHTML = "";
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
                document.getElementById("brand_name").innerHTML = xmlhttp.responseText;
//alert(xmlhttp.responseText); drug_help_presctiption_info
            }
        }
        xmlhttp.open("GET", strUrl, true);
        xmlhttp.send();
    }
</script>
  


</html> 