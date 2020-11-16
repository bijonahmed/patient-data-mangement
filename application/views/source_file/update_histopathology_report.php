<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bone Marrow Report</title>


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
                $("#patient_id").focus();
                $(":focus").css("background-color", "white");
            });
        </script>
       
        <style> 
            .borderdiv
            {
                background-color: blue;
                border-radius: 39px;
            }
        </style>

    </head>
    <br><br><br>


    <body>


        <div class="container">
            <div class="">
                <br>
         


            </div>
            <br>
            <div class="container">
         
                <form name="haematology" method="post" action="<?php echo base_url(); ?>data_record/update_histopathology_report.html">
                    <div class="form-group has-success">
                        <div class="">

                            <div class="row" style="" >
                               
                                <div class="col-xs-2">

                                    <input type="text" name="reciv_date" data-date-format="dd-mm-yyyy" class="form-control" id="reciv_date" placeholder="Please Enter Date" value="<?php echo $histopathology_data->reciv_date;?>">
                                </div>
                               <div class="col-sm-1 inline">
                              <label>Display</label>
                            
                        </div>
                        
                        <div class="col-sm-2 inline">
                             
                        <select name="display" class="form-control" id="complaint_timing" style="width:auto;">
                                                          
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            
                                                        </select>
                            
                        </div>
                                
                            </div>
                            <br>
                        </div>

                        <div class="row" >

                            <div class="container">
                                <font color="#FF0000">
                                <?php
                                $message = $this->session->userdata('save_messages');
                                //echo $message;
                                if (isset($message)) {
                                    echo $message;
                                    $this->session->unset_userdata('save_messages');
                                }
                                ?>
                                </font> 
                                <div class="form-group has-success">
                                    <input type="hidden" name="histopathology_id" value="<?php echo $histopathology_data->histopathology_id?>">
                                    <div class="row">
                                        <textarea class="jqte-test form-control" name="report_description"><?php echo $histopathology_data->report_description;?></textarea>

                                        </div>
                                    </div>
                                </div>
                            </div>

                           
 
                        </div>
                        <center>
                            <button class="btn btn-primary"onClick="return save()"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Update Report</button>
                    
                        </center>

                </form>
            </div>
        </div>
     


    </div>
    <script>
            function save()
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
    <script type="text/javascript">
        $('#reciv_date').datepicker()
    </script>

    <script type="text/javascript">
        $('#deli_date').datepicker()
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