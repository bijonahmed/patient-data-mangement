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
        
                <form name="haematology" method="post" action="<?php echo base_url(); ?>data_record/update_echo_report.html">
                    <div class="form-group has-success">
                        <div class="">

                            <div class="row" style="" >
                               
                                <div class="col-xs-2">

                                    <input type="text" name="reciv_date" data-date-format="dd-mm-yyyy" class="form-control" id="reciv_date" placeholder="Please Enter Date" value="<?php echo $echoData->reciv_date;?>">
                                    <input type="hidden" name="echo_id" data-date-format="dd-mm-yyyy" class="form-control" id="reciv_date" placeholder="Please Enter Date" value="<?php echo $echoData->echo_id;?>">
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

                                    <div class="row">
                                        <textarea class="jqte-test form-control" name="report_description"><?php echo $echoData->report_description;?></textarea>

                                        </div>
                                    </div>
                                </div>
                            </div>

                           
 
                        </div>
                        <center>
                            <button class="btn btn-primary"onClick="return save()"><span class="glyphicon glyphicon-pencil"></span>&nbsp;UPdate</button>
                             
                            
                        </center>

                </form>
            </div>
        </div>
     


        <!-- Modal -->
        <div class="modal fade bs-example-modal-lg" id="search" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Search Echo Report</h4>
                    </div>
                    <div class="modal-body">

                        <div class="">

                            <div class="form-group has-success">

                                <br>
                                <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">

                                    <thead>
                                        <tr class="success">
                                            <th width="90">Pt. ID</th>
                                            <th width="250">Pt. Name</th>
                                            <th width="100">Rev. date</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($echo_report_data as $data) {
                                            ?>

                                            <tr class="">
                                                <td><?php echo $data->patient_id; ?></span></td>
                                                <td><?php echo $data->patient_name; ?></span></td>
                                                <td><?php echo $data->reciv_date; ?></span></td>

                                                <td>
                                                    <a class="link" href="<?php echo base_url(); ?>data_record/edit_form_echo_report/<?php echo $data->echo_id; ?>" onClick="return save();" style="text-decoration:none"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                                    <?php
                                                    /*
                                                      <a class="link" href="<?php echo base_url();?>data_record/delete_haematology_report_name/<?php echo $data->haematology_id;?>" onClick="return save();" style="text-decoration:none"><span class="glyphicon glyphicon-trash"></span> Delete</a>

                                                     */
                                                    ?>


                                                </td>
                                                </td>
                                            </tr>
<?php } ?>
                                    </tbody>
                                </table>



                            </div> 


                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    </div>
                </div>
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