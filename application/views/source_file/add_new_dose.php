<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

        <script src="<?php echo base_url(); ?>data_table/js/jquery.js"></script>
        <script>
            $(document).ready(function() {
                $("#dose_type").focus();
                $(":focus").css("background-color", "white");
            });
        </script>
        <script>
        
        </script>
    </head>
     <body>
    <br><br><br>
    <div id="sidebar-wrapper" style="font-size: 15px;">
            <ul class="sidebar-nav">
                         
                <li><a href="<?php echo base_url();?>welcome/add_new_dose.html"><span class="glyphicon glyphicon-plus"></span>&nbsp;New Dose</a>
                </li>
                <li><a href="<?php echo base_url();?>welcome/add_new_dose_schedule.html"><span class="glyphicon glyphicon-plus"></span>&nbsp; New Dose Schedule</a>
                </li>
                <li><a href="<?php echo base_url();?>welcome/add_new_generic_name.html"><span class="glyphicon glyphicon-plus"></span>&nbsp;New Generic Name</a>
                </li>
                <li><a href="<?php echo base_url();?>welcome/add_new_suggestion.html"><span class="glyphicon glyphicon-plus"></span>&nbsp;New Suggestion</a>
                </li>
                <li><a href="<?php echo base_url();?>welcome/add_new_patient_advice_name.html"><span class="glyphicon glyphicon-plus"></span>&nbsp;New Patient Advice Name</a>
                </li>
                <li><a href="<?php echo base_url();?>welcome/add_new_complaint.html"><span class="glyphicon glyphicon-plus"></span>&nbsp;New Complaint Name</a>
                </li>
                <li><a href="<?php echo base_url();?>welcome/add_new_drug.html"><span class="glyphicon glyphicon-plus"></span>&nbsp;New Drug Name</a>
                </li>
                <li><a href="<?php echo base_url();?>welcome/drug_help.html"><span class="glyphicon glyphicon-plus"></span>&nbsp;New Drug Help </a>
                </li>
                          
                <li><a href="<?php echo base_url();?>welcome/add_new_advice_group_name.html"><span class="glyphicon glyphicon-plus"></span>&nbsp;New Inves. Group Name</a>
                </li>
                
                <li><a href="<?php echo base_url();?>welcome/add_new_advice_name.html"><span class="glyphicon glyphicon-plus"></span>&nbsp;New Investigation</a>
                </li>
                <li><a href="<?php echo base_url();?>welcome/add_new_investigation_by_prescription_name.html"><span class="glyphicon glyphicon-plus"></span>&nbsp;New Invest. by Pres.</a>
                </li>
                <li><a href="<?php echo base_url();?>welcome/add_new_comorbidity.html"><span class="glyphicon glyphicon-plus"></span>&nbsp;New Comorbidity</a>
                </li>
                <li><a href="<?php echo base_url();?>welcome/add_new_personal_history.html"><span class="glyphicon glyphicon-plus"></span>&nbsp;New Personal History</a>
                </li>
                <li><a href="<?php echo base_url();?>welcome/add_new_physicalfindings_systolic.html"><span class="glyphicon glyphicon-plus"></span>&nbsp;New Systolic</a>
                </li>
                 <li><a href="<?php echo base_url();?>welcome/add_new_physicalfindings.html"><span class="glyphicon glyphicon-plus"></span>&nbsp;New Physical Findings</a>
                </li>
                
            </ul>
     
        </div>
   
         <style>
      .margintopinfo
      {
          margin-top: 60px;
          /*background-color: yellowgreen;*/
      }
  </style>
        <div class="container">
           
     <div align="right">
                  <a href="<?php echo base_url(); ?>welcome/viewdoeseInfo.html">
                                <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>&nbsp;Search
                                </button></a>
                    </div>

            <div class="row">
                <div class="col-md-4">



                </div>
                <div class="col-md-4">
                 
                    <div class="margintopinfo">
                        <form name="employee" method="post" action="<?php echo base_url(); ?>data_record/save_doseType_info.html">
                            Add Dose Name <div class="form-group has-success">
                                <label class="control-label" for="inputSuccess1"></label>
                                <input type="text" class="form-control" name="dose_type" id="dose_type"required="1" ><br>
                                <center> <button class="btn btn-info" onClick="return save_()"><span class="glyphicon glyphicon-save"></span>
                                        Save&nbsp;&nbsp;</button>
  
                                </center>

                            </div>
                        </form>
                     
                    </div>


                </div>

                <div class="col-md-4">



                </div>
            </div>

        </div>
    </body>


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