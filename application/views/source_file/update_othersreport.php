<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Others Report</title>


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
    <style>
    .fontstyleing{
        font-size: 19px;
        
    }
</style>
  <style>
    .fontstyleing{
        font-size: 25px;
        
    }
</style>
    </head>
    <br><br><br>


    <body>


        <div class="container">
            <div class="">
           
         

                                <font color="red">
                                <?php
                                $message = $this->session->userdata('save_messages_others');
                                //echo $message;
                                if (isset($message)) {
                                    echo $message;
                                    $this->session->unset_userdata('save_messages_others');
                                }
                                ?>
                                </font> 

            </div>
            <br>
             <form name="haematology" method="post" action="<?php echo base_url(); ?>data_record/update_others_report.html">
            <div class="container">
                  <center><div class="fontstyleing"><u>Others Report</u></div></center>
       
                
                    <div class="form-group has-success">
                        <div class="">

                              
                                <div class="col-xs-2">

                                    <input type="text" name="reciv_date" data-date-format="dd-mm-yyyy" class="form-control" id="reciv_date" value="<?php echo $othersreport->reciv_date;?>">
                                 
                                </div>
                                  <br>
                            </div>
                            <br>
                        </div>

                 

                          
                                <div class="form-group has-success">
                                    <input type="hidden" name="others_id" class="form-control" placeholder="Ref. by Doctor Name" value="<?php echo $othersreport->others_id;?>">
                                    <div class="row">
                                        <div class="col-xs-2"></div>
                                        <textarea class="form-control" id="ck_editor" name="report_description" ><?php echo $othersreport->report_description;?></textarea>
<?php echo display_ckeditor($check_editor['ckeditor']);?>
                                        </div>
                                    </div>
                           
                         
   <center>
                            <button class="btn btn-primary"onClick="return save_()"><span class="glyphicon glyphicon-saved"></span>&nbsp;Update</button>
                  </center>
                           
 
                        </div>
            
             </form>
                     

               
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