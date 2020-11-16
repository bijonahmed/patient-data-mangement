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
                $("#complain_group_name").focus();
                $(":focus").css("background-color", "white");
            });
        </script>

    </head>
    <br><br><br>
    <body>
        <div class="container">
            <h3>Add Complaint Group Name</h3>
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
                        <form name="employee" method="post" action="<?php echo base_url(); ?>data_record/save_complaint_info.html">
                            Add Complaint Group Name<div class="form-group has-success">
                                <label class="control-label" for="inputSuccess1"></label>
                                <input type="text" class="form-control" name="complain_group_name" id="complain_group_name" required="1" ><br>
                                <center> <button class="btn btn-info" onClick="return save()"><span class="glyphicon glyphicon-save"></span>
                                        Save&nbsp;&nbsp;</button>
                                  
                                </center>

                            </div>
                        </form>     
                        <center>
   <a href="<?php echo base_url(); ?>welcome/view_complaint_group_name_Info.html">
                                        <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
                                            <span class="glyphicon glyphicon-search"></span>
                                            Search
                                        </button>
                                    </a>
                                </center>
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