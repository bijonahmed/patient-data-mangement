<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>resource/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>resource/css/tab.css" rel="stylesheet">

<link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">

<!--        <script src="<?php echo base_url(); ?>data_table/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url(); ?>data_table/js/DT_bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>data_table/js/bootstrap-dataTables-paging.js"></script>
        <script src="<?php echo base_url(); ?>data_table/js/bootstrap-dataTables.js"></script>-->
        
        
       <link rel="icon" type="image/png" href="<?php echo base_url(); ?>resource/img/doctor.ico" />


        <script src="<?php echo base_url(); ?>resource/js/bootstrap.js"></script>

  <script language="javascript" src="<?php echo base_url(); ?>resource/jquery.printPage.js"></script>


        <!-- Include all compiled plugins (below), or include individual files as needed -->
    
        <style type="text/css">
            <!--
            .fontstyle {font-size: 30px}
            -->
        </style>
        
<style>
    .ui-autocomplete {
            max-height: 200px;
            overflow-y: auto;
            /* prevent horizontal scrollbar */
            overflow-x: hidden;
            /* add padding to account for vertical scrollbar */
            padding-right: 20px;
    }
    /* IE 6 doesn't support max-height
     * we use height instead, but this forces the menu to always be this tall
     */
    * html .ui-autocomplete {
        height: 500px;
    }
</style>
  <style>
                a.tooltips {
                    position: relative;
                    display: inline;
                }
                a.tooltips span {
                    position: absolute;
                    width:140px;
                    color: #FFFFFF;
                    background: #000000;
                    height: 30px;
                    line-height: 30px;
                    text-align: center;
                    visibility: hidden;
                    border-radius: 6px;
                }
                a.tooltips span:after {
                    content: '';
                    position: absolute;
                    top: 100%;
                    left: 50%;
                    margin-left: -8px;
                    width: 0; height: 0;
                    border-top: 8px solid #000000;
                    border-right: 8px solid transparent;
                    border-left: 8px solid transparent;
                }
                a:hover.tooltips span {
                    visibility: visible;
                    opacity: 0.8;
                    bottom: 30px;
                    left: 50%;
                    margin-left: -76px;
                    z-index: 999;
                }
            </style>
          
  <script>
            $(function() {
<?php
foreach ($dynamicSearch_pInfo_mauan_pid as $row):
        $length=strlen($row->manual_pid); 
        $part1=substr_replace("$row->manual_pid","/",2);
        $part2=substr("$row->manual_pid",2);
                //$part2=substr_replace("$row->manual_pid","",$length);
        $manual_pid=$part1.$part2;
    $dynamicSearch_pInfo_mauan_pid[] = $manual_pid;
endforeach;

echo "var javascript_array =" . json_encode($dynamicSearch_pInfo_mauan_pid);
?>

                $( "#TBox0" ).autocomplete({
                    source: javascript_array
                });

            });
        </script>
    </head>
    <body>

        <br>


        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"> <strong><?php
                            $patient_id = $this->session->userdata('patient_id');
                          
                                echo "ID: " . $patient_id;
                            ?></strong> </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>

                        <?php
                        if ($this->session->userdata('type') === "admin") {
                            ?>


                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-edit"></span> Setting <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>welcome/setting.html" target="_blank"><span class="glyphicon glyphicon-plus"></span> More Setting</a></li>
                                <?php
                                /*
                                 <li><a href="<?php echo base_url(); ?>welcome/drug_help.html" target=""><span class="glyphicon glyphicon-plus"></span> Drug Help</a></li>
                                 */
                                ?> <li><a href="<?php echo base_url(); ?>welcome/my_dictonary.html"><span class="glyphicon glyphicon-road"></span> Information</a></li>
                                    <li><a href="<?php echo base_url(); ?>welcome/user_registration.html"><span class="glyphicon glyphicon-user"></span> User Permission</a></li>
                                    <li><a href="<?php echo base_url(); ?>welcome/manage_appointment.html"><span class="glyphicon glyphicon-cog"></span> Manage Appointment </a></li>
                                    <li><a href="<?php echo base_url(); ?>welcome/view_doctor_seal.html"><span class="glyphicon glyphicon-edit"></span> Edit Seal</a></li>
                                </ul>
                                
                            </li>
                           
                           
 
                            <li><a href="<?php echo base_url(); ?>welcome/patient_informaiton_record.html"><span class="glyphicon glyphicon-edit"></span> New Prescription</a></li>
                            <li><a href="<?php echo base_url(); ?>welcome/re_visit_patient.html"><span class="glyphicon glyphicon-edit"></span> Re-Visit</a></li>
                           
                                                      
                            <li><a href="<?php echo base_url(); ?>welcome/new_remarks_information.html" target=""><span class="glyphicon glyphicon-plus"></span>&nbsp;Remarks</a></li>

                            <li class="dropdown"><li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-search"></span> Find Patient <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>welcome/patient_date_to_date_searching.html" target=""><span class="glyphicon glyphicon-search"></span> Patient ID Wise</a></li>
                                    
                                    <li><a href="<?php echo base_url(); ?>welcome/patient_name_searching.html"><span class="glyphicon glyphicon-search"></span> By Name</a></li>
                                    <li><a href="<?php echo base_url(); ?>data_record/patient_find_information_by_date_wise.html"><span class="glyphicon glyphicon-search"></span> Date Wise</a></li>
                                    <li><a href="<?php echo base_url(); ?>welcome/patient_find_information_by_remarks.html"><span class="glyphicon glyphicon-search"></span> Remarks Wise</a></li>
                                    <li><a href="<?php echo base_url(); ?>welcome/patient_find_information_by_gender_wise.html"><span class="glyphicon glyphicon-search"></span> Gender Wise</a></li>
                                  
                               
                                </ul>
                                
                            </li>
                             <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-search"></span> Find History <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>welcome/presenting_complaint_search.html" target=""><span class="glyphicon glyphicon-search"></span> Presenting Complaint</a></li>
                                    
                                    <li><a href="<?php echo base_url(); ?>welcome/comorbidity_search_informaiton.html"><span class="glyphicon glyphicon-search"></span> Comorbidity</a></li>
                                    <li><a href="<?php echo base_url(); ?>welcome/personalhistory_search_info.html"><span class="glyphicon glyphicon-search"></span> Personal History</a></li>
                                    <li><a href="<?php echo base_url(); ?>welcome/family_history_search_info.html"><span class="glyphicon glyphicon-search"></span> Family History</a></li>
                                    <li><a href="<?php echo base_url(); ?>welcome/physical_findings_info.html"><span class="glyphicon glyphicon-search"></span> Physical Findings</a></li>
                                    <li><a href="<?php echo base_url(); ?>welcome/diagnosis_info.html"><span class="glyphicon glyphicon-search"></span> Diagnosis</a></li>
                                    <li><a href="<?php echo base_url(); ?>welcome/protocol_info.html"><span class="glyphicon glyphicon-search"></span> Protocol</a></li>
                                </ul>
                                
                            </li>
                               <li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-search"></span> Find Investigation <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation.html" target=""><span class="glyphicon glyphicon-search"></span> Haematology</a></li>        
    <li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_histopathology.html" target=""><span class="glyphicon glyphicon-search"></span> Histopathology</a></li>        
<li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_cytopathology.html"><span class="glyphicon glyphicon-search"></span> Cytopathology</a></li>
<li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_cytogenetic.html"><span class="glyphicon glyphicon-search"></span> Cytogenetic</a></li>
<li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_single_line_rpt.html"><span class="glyphicon glyphicon-search"></span> Single Line report</a></li>
<li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_bone_marrow.html"><span class="glyphicon glyphicon-search"></span> Bone Marrow</a></li>
<li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_radiology.html"><span class="glyphicon glyphicon-search"></span> Radiology</a></li>
<li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_ultrasonography.html"><span class="glyphicon glyphicon-search"></span> Ultrasonography</a></li>

<li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_urine.html"><span class="glyphicon glyphicon-search"></span> Urine</a></li>
<li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_stool.html"><span class="glyphicon glyphicon-search"></span> Stool</a></li>
<li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_immunophentypint.html"><span class="glyphicon glyphicon-search"></span> Immunophentotype</a></li>
<li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_karyotype.html"><span class="glyphicon glyphicon-search"></span> Karyotype</a></li>
<li><a href="<?php echo base_url(); ?>welcome/patient_find_investigation_echo.html"><span class="glyphicon glyphicon-search"></span> Echo</a></li>


                                </ul>
                                
                            </li>
                            <li><a href="<?php echo base_url(); ?>login/logout.html"><span class="glyphicon glyphicon-edit"></span> Exit</a></li>
                            <?php
                            /*
                             * <li><a href="<?php echo base_url(); ?>welcome/report.html"><span class="glyphicon glyphicon-edit"></span> Data Searching</a></li>
                              <li><a href="<?php echo base_url(); ?>welcome/user_guide.html"><span class="glyphicon glyphicon-edit"></span> Tutorial</a></li>
                             */
                            ?>




                    </div> 


                    <?php
                } elseif ($this->session->userdata('type') === "user") {
                    ?>

                    <li><a href="#"><span class="glyphicon glyphicon-align-justify"></span> Deve.Info</a></li>

                    <li><a href="<?php echo base_url(); ?>welcome/view_drug_help.html"><span class="glyphicon glyphicon-align-justify"></span> My Drug Help</a></li>
                    <li><a href="<?php echo base_url(); ?>welcome/patient_appointment.html"><span class="glyphicon glyphicon-align-justify"></span> Add Appointment</a></li>
                    <li><a href="<?php echo base_url(); ?>welcome/patient_appointment_list.html"><span class="glyphicon glyphicon-align-justify"></span> Add Appointment List</a></li>
                    <li><a href="<?php echo base_url(); ?>login/logout.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    <?php
                } else {
                    ?>

                    <?php
                }
                ?>
                </ul>

                </li>
                </ul>


            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>


    <?php echo $maincontent; ?>




</body>
</html>
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

<!-- add revisit by Modal -->
<div class="modal fade" id="visit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Please Enter Your Re-Visit ID</h4>
            </div>
            <div class="modal-body">

   <form name="patient_revisit" method="post" action="<?php echo base_url();?>data_record/patient_revisit_information.html">
        
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-5">
                      <div class="">
               Revisit Date<div class="form-group has-success">
                   <input type="text" class="form-control" name="current_date" id="revisitinfodate" required="1">
                     <br>
                     Manual Patient ID.
                     <input type="text" class="form-control" name="manual_pid" id="TBox0" required="1">
                          
        </center>
        <br>
                             <div class="">
                                 <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>
Search</button>
                             </div>
                <br>
                </div></div>
                    
                </div>
           
                
            </div>
        
        
        </form> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#revisitinfodate').datepicker()
</script>

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


<!-- add new personal history by Modal -->
<div class="modal fade" id="add_new_personalhistory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Add New Personal History</h4>
            </div>
            <div class="modal-body">


                <form name="employee" method="post" action="<?php echo base_url(); ?>data_record/save_personalHistory_info_by_modal.html">
                    <div class="form-group has-success">
                        Add Personal History Name
                        <label class="control-label" for="inputSuccess1"></label>
                        <input type="text" class="form-control" name="personal_history_name" id="complain_name" required="1" ><br>
                        <center> <button class="btn btn-info" onClick="return save()"><span class="glyphicon glyphicon-pencil"></span>
                                Add Personal History&nbsp;&nbsp;</button>

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

<!-- add new comorbidity by Modal -->
<div class="modal fade" id="add_new_comorbidity" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Add New Comorbidity</h4>
            </div>
            <div class="modal-body">


                <form name="employee" method="post" action="<?php echo base_url(); ?>data_record/save_comorbidity_info_by_modal.html">
                    <div class="form-group has-success">
                        Add Comorbidity Name
                        <label class="control-label" for="inputSuccess1"></label>
                        <input type="text" class="form-control" name="comorbidity_name" id="complain_name" required="1" ><br>
                        <center> <button class="btn btn-info" onClick="return save()"><span class="glyphicon glyphicon-pencil"></span>
                                Add Comorbidity&nbsp;&nbsp;</button>

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


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Developer Info</h4>
            </div>
            <div class="modal-body">
                Kazi Shamim and Md. Gazi Giash Uddin Bijon<br>
                kazi.shamim@yahoo.com, mdbijon@gmail.com<br>
                Cell Phone: 01949376654, 01915728982
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!--  start view data modal -->

 
 <style>
    .modal.modal-wide .modal-dialog {
  width: 90%;
}
.modal-wide .modal-body {
  overflow-y: auto;
}

/* irrelevant styling */
 
body p { 
  max-width: 400px; 
  margin: 20px auto; 
}
#tallModal .modal-body p { margin-bottom: 900px }
</style>
    <br>
 

<script type="text/javascript" language="JavaScript">
<!--
//--------------------------------
// This code compares two fields in a form and submit it
// if they're the same, or not if they're different.
//--------------------------------
    function checkEmail(theForm) {
        if (theForm.email.value != theForm.confirm_email.value)
        {
            alert('Those emails don\'t match!');
            return false;
        } else {
            return true;
        }
    }
//-->
</script> 
<script>
    (function($, window, delay) {
        // http://jsfiddle.net/AndreasPizsa/NzvKC/
        var theTimer = 0;
        var theElement = null;
        var theLastPosition = {x: 0, y: 0};
        $('[data-toggle]')
                .closest('li')
                .on('mouseenter', function(inEvent) {
                    if (theElement)
                        theElement.removeClass('open');
                    window.clearTimeout(theTimer);
                    theElement = $(this);

                    theTimer = window.setTimeout(function() {
                        theElement.addClass('open');
                    }, delay);
                })
                .on('mousemove', function(inEvent) {
                    if (Math.abs(theLastPosition.x - inEvent.ScreenX) > 4 ||
                            Math.abs(theLastPosition.y - inEvent.ScreenY) > 4)
                    {
                        theLastPosition.x = inEvent.ScreenX;
                        theLastPosition.y = inEvent.ScreenY;
                        return;
                    }

                    if (theElement.hasClass('open'))
                        return;
                    window.clearTimeout(theTimer);
                    theTimer = window.setTimeout(function() {
                        theElement.addClass('open');
                    }, delay);
                })
                .on('mouseleave', function(inEvent) {
                    window.clearTimeout(theTimer);
                    theElement = $(this);
                    theTimer = window.setTimeout(function() {
                        theElement.removeClass('open');
                    }, delay);
                });
    })(jQuery, window, 10); // 200 is the delay in milliseconds


</script>
<script>
    $('[data-toggle="tooltip"]').tooltip({
        'placement': 'top'
    });
    $('[data-toggle="popover"]').popover({
        trigger: 'hover',
        'placement': 'top'
    });

    $('#userNameField').tooltip({
        'show': true,
        'placement': 'bottom',
        'title': ""
    });

    $('#userNameField').tooltip('show');
</script>
