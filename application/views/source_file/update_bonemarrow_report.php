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
                <form name="haematology" method="post" action="<?php echo base_url(); ?>data_record/update_bonemarrow_report.html">
                    <div class="form-group has-success">
                        <div class="">


                            <div class="row" style="" >
                                 

                                <div class="col-xs-2">

                                    <input type="text" name="reciv_date" data-date-format="dd-mm-yyyy" class="form-control" id="reciv_date" placeholder="Reci.Date" value="<?php echo $boneMarrowData->reciv_date; ?>">
                                    <input type="hidden" name="bonemarrow_id" class="form-control"id="patient_id" placeholder="Test ID" value="<?php echo $boneMarrowData->bonemarrow_id; ?>">
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

                                        <div class="form-group has-success">

                                            <br>
                                            <center>Customized  Update</center>
                                            <div class="row">

                                                <div class="col-md-1"></div>

                                                <div class="col-md-5">

                                                    <input type="text" name="introudction" class="form-control" placeholder="Indication" value="<?php echo $boneMarrowData->introudction; ?>">
                                                    <br>
                                                    <input type="text" name="aspiration" class="form-control" placeholder="Site of aspiration" value="<?php echo $boneMarrowData->aspiration; ?>">
                                                    <br>
                                                    <input type="text" name="stain_used" class="form-control" placeholder="Stain used" value="<?php echo $boneMarrowData->stain_used; ?>">
                                                    <br>
                                                    <input type="text" name="cellularity_inf" class="form-control" placeholder="Cellularity" value="<?php echo $boneMarrowData->cellularity_inf; ?>">
                                                    <br>
                                                    <input type="text" name="meratio" class="form-control" placeholder=" M:E ratio" value="<?php echo $boneMarrowData->meratio; ?>">
                                                    <br>
                                                    <input type="text" name="ery" class="form-control" placeholder="Erythropoiesis" value="<?php echo $boneMarrowData->ery; ?>">
                                                    <br>
                                                    <input type="text" name="granu" class="form-control" placeholder="Granulopoiesis" value="<?php echo $boneMarrowData->granu; ?>">
                                                    <br>
                                                    <input type="text" name="mega" class="form-control" placeholder="Megakaryocytes" value="<?php echo $boneMarrowData->mega; ?>">

                                                </div>
                                                <div class="col-md-5">

                                                    <textarea name="ly_his_pls_cells" class="form-control" placeholder="Lymphocytes, histiocytes and plasma cells" ><?php echo $boneMarrowData->ly_his_pls_cells; ?></textarea>
                                                    <br>
                                                    <input type="text" name="parasites" class="form-control" placeholder="Parasites" value="<?php echo $boneMarrowData->parasites; ?>">
                                                    <br>
                                                    <input type="text" name="others" class="form-control" placeholder="Others" value="<?php echo $boneMarrowData->others; ?>">
                                                    <br>
                                                    <input type="text" name="special_stain" class="form-control" placeholder="Special stain" value="<?php echo $boneMarrowData->special_stain; ?>">
                                                    <br>
                                                    <input type="text" name="comment" class="form-control" placeholder="Comment" value="<?php echo $boneMarrowData->comment; ?>">
                                                    <br>
                                                    <input type="text" name="test_to_follow" class="form-control" placeholder="Further tests to follow:" value="<?php echo $boneMarrowData->test_to_follow; ?>">
                                                    <br>
                                                    <input type="text" name="reviewed_by" class="form-control" value="<?php echo $boneMarrowData->reviewed_by; ?>">
                                                    <br>
                                                    <input type="text" name="report_description" class="form-control" value="<?php echo $boneMarrowData->report_description; ?>">
                                                </div>


                                            </div>

                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                    <center>
                        <button class="btn btn-primary"onClick="return save()"><span class="glyphicon glyphicon-edit"></span>&nbsp;Update Report</button>
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