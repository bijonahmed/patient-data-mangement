<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

        <script src="<?php echo base_url(); ?>data_table/js/jquery.js"></script>
        <link href="<?php echo base_url(); ?>admin_panel/jQuery-TE_v.1.4.0/job_ jquery-te-1.4.0.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>admin_panel/jQuery-TE_v.1.4.0/jquery-te-1.4.0.min.js"></script>
        <script src="<?php echo base_url(); ?>admin_panel/js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>javascript_form/examples/gen_validatorv4.js"  type="text/javascript" xml:space="preserve"></script>
        
        <script src="<?php echo base_url(); ?>resource/data_table/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url(); ?>resource/data_table/js/DT_bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>resource/data_table/js/bootstrap-dataTables-paging.js"></script>
        <script src="<?php echo base_url(); ?>resource/data_table/js/bootstrap-dataTables.js"></script>


        <script language="javascript" src="<?php echo base_url(); ?>resource/modal.popup.js"></script>
        <script language="javascript" src="<?php echo base_url(); ?>resource/jquery.printPage.js"></script>

        <script src="<?php echo base_url(); ?>resource/js/jquery-ui.js"></script>
        <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
        <script>
            $(document).ready(function() {
                $("#complain_name").focus();
                $(":focus").css("background-color", "white");
            });
        </script>
        <style>
            .shadow
            { 
                -moz-box-shadow:10px 10px 5px #000000;
                -webkit-box-shadow:10px 10px 5px #000000;
                box-shadow:10px 10px 5px #000000;
 }
        </style>
        <style>
            .aligment
            {
                margin-left: -250px;    
            }
        </style>
    <br><br><br>

</head>
<div class="form-group has-success">
    <div class="container">

        <strong><h3>Patient Appointment</h3></strong>
        <hr>
        <div class="tabbable tabs-left" >
            <ul class="nav nav-tabs" id="myTab">

                <li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-cog"></span>&nbsp;Configure Patient Limit</a></li>
                <li><a href="#check_appointment" data-toggle="tab"><span class="glyphicon glyphicon-check"></span>&nbsp;Check Appointment</a></li>
                <li><a href="#date_to_date_range" data-toggle="tab"><span class="glyphicon glyphicon-search"></span>&nbsp;Data to Date Range</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane active" id="home">

                <h3><font color="red">Configure Patient Limit</font></h3>
                <hr>

                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
  </div>
                        <div class="col-md-8">

                            <form name="frm" class="form-horizontal" method="post" action="<?php echo base_url(); ?>data_record/save_manage_patient_appoint_info.html"  onsubmit="return valid_mobile();">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Date</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="current_date" id="current_date" required="1">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Patient Limit</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="patient_limit" required="1" autofocus="" >
                                    </div>
                                </div><div class="form-group">
                                    
                                    <label for="notice" class="col-sm-2 control-label">Notice</label>
                                    <div class="col-sm-10" style="margin-top: -20px;">
                                        <textarea name="notice" class="jqte-test form-control"></textarea>   
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-saved"></span>&nbsp;Save</button>
                                    </div>
                                </div>  
                            </form>


                        </div>

                    </div>


                </div>




            </div>
            <div class="tab-pane" id="check_appointment">
                <h3><font color="red">Check Appointment</font></h3>
               
                <div class="row">
                    <div class="col-md-3">
                        
                        
                    </div>
                    
                    <div class="col-md-9">
                        <div class="form-group has-success">

                                <br>
                                <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">

                                    <thead>
                                        <tr class="">
                                             
                                            <th width="200">Patient Name</th>
                                            <th width="200">Sex</th>
                                            <th width="200">Cell Number</th>
                                            <th width="200">Remarks</th>
                                             <th width="200">Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
foreach ($manage_appointment_data as $data) {
    ?>

                                            <tr class="">
           
<td><?php echo $data->patient_name; ?></span></td>
<td><?php echo $data->sex; ?></span></td>
<td><?php echo $data->cell_number; ?></span></td>
<td><?php echo $data->remarks; ?></span></td>
<td><?php echo date("d-m-Y", strtotime($data->current_date)); ?></span></td>
<td><a class="tooltips link" href="<?php echo base_url(); ?>data_record/edit_form_usg_report/<?php echo $data->appointment_id; ?>" style="text-decoration:none"><span>EDIT</span> Edit</a>
    <?php
    /*
      <a class="link" href="<?php echo base_url();?>data_record/delete_haematology_report_name/<?php echo $data->haematology_id;?>" onClick="return save();" style="text-decoration:none"><span class="glyphicon glyphicon-trash"></span> Delete</a>

     */
    ?></td>
                                                
                                            </tr>
<?php } ?>
                                    </tbody>
                                </table>



                            </div> 
                        
                        
                    </div>
                    
                </div>
                
                
                
                
                
                
 </div>

 <div class="tab-pane" id="date_to_date_range">
                <h3><font color="red">Date to Date Range</font></h3>
                <hr>


                <form name="patient_revisit" method="post" action="<?php echo base_url(); ?>data_record/patient_revisit_information_data_revisit_by_date.html">

                    <div class="row">

                        <div class="col-md-2">
                            <div class="">
                                From Date<div class="form-group has-success">
                                    <input type="text" class="form-control" id="starting_date" name="starting_date" placeholder="From Date" >
                                    <br>
                                    To Date
                                    <input type="text" class="form-control" id="ending_date"name="ending_date" placeholder="To Date">

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


        </div>
    </div>
</div>

<script type="text/javascript">
    $('#current_date').datepicker()
</script>
<script type="text/javascript">
    $('#starting_date').datepicker()
</script>
<script type="text/javascript">
    $('#ending_date').datepicker()
</script>
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