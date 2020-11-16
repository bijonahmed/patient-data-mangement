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

    </head>
    <br><br><br>
    <body>
        <div class="container">
            <h3>Add Comorbidity Name</h3>
            <hr>

            <div class="row">
                <div class="col-md-4">
<font color="red">
<?php
$message = $this->session->userdata('save_message');
//echo $message;
if (isset($message)) {
echo $message;
$this->session->unset_userdata('save_message');
}
?></font>


                </div>
                <div class="col-md-4">
                    <div class="">
                        <form name="employee" method="post" action="<?php echo base_url(); ?>data_record/save_comorbidity_info.html">
                            Add Comorbidity Name <div class="form-group has-success">
                                <label class="control-label" for="inputSuccess1"></label>
                                <input type="text" class="form-control" name="comorbidity_name" id="dose_type"required="1" ><br>
                                <center> <button class="btn btn-info" onClick="return save()"><span class="glyphicon glyphicon-save"></span>
                                        Save&nbsp;&nbsp;</button>
  
                                </center>

                            </div>
                            <input type="hidden" name="current_date" value="<?php echo date("Y-m-d");?>">
                        </form>
                     
                    </div>
 <center>
                            <a href="<?php echo base_url(); ?>welcome/viewComorbidityInfo.html">
                                <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>&nbsp;Search
                                </button></a>
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