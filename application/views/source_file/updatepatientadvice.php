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
                $("#patient_advice_name").focus();
                $(":focus").css("background-color", "white");
            });
        </script>

    </head>
    <br><br><br>
    <body>
        <div class="container">
            <h3>Update Advice Name</h3>
            <hr>

            <div class="row">
                <div class="col-md-4">


                    <font color="#FF0000">
                    <?php
                    $message = $this->session->userdata('save_message');
                    //echo $message;
                    if (isset($message)) {
                        echo $message;
                        $this->session->unset_userdata('save_message');
                    }
                    ?>
                    </font>  

                </div>
                <div class="col-md-4">
                    <div class="">
                        <form name="employee" method="post" action="<?php echo base_url(); ?>data_record/update_patient_advice_info.html">
                            Update Advice Name <div class="form-group has-success">
                                <label class="control-label" for="inputSuccess1"></label>
                                <input type="text" class="form-control" name="patient_advice_name" id="patient_advice_name"required="1" value="<?php echo $patientAdviceInformation->patient_advice_name;?>">
                                <input type="hidden" class="form-control" name="add_advice_id" id="patient_advice_name"required="1" value="<?php echo $patientAdviceInformation->add_advice_id;?>"><br>
                                <br>
                                <center> <button class="btn btn-info" onClick="return save_()"><span class="glyphicon glyphicon-save"></span>
                                        Update&nbsp;&nbsp;</button>
  
                                </center>

                            </div>
                        </form>
                     
                    </div>
 <center>
                        
                        </center> 

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
