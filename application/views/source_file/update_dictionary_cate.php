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
                $("#dose_suggestion").focus();
                $(":focus").css("background-color", "white");
            });
        </script>


    </head>
    <br><br><br>
    <body>
        <div class="container">
            <h3>Add New Category Name</h3>
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
Update Category
 
                </div>
                <div class="col-md-4">
                    <div class="">
                        <form name="employee" method="post" action="<?php echo base_url(); ?>data_record/update_category_name.html">
                             <div class="form-group has-success">
                               
                                 <input type="text" class="form-control" name="category_name" id="dose_suggestion" required="1" value="<?php echo $cat_name_dictionary->category_name;?>">
                                 <input type="hidden" class="form-control" name="category_id" id="dose_suggestion" required="1" value="<?php echo $cat_name_dictionary->category_id;?>">
                               

                            </div>
                            <center> <button class="btn btn-info" onClick="return save()"><span class="glyphicon glyphicon-edit"></span>
                                    Update Category</button></center><br>
                        </form>       
                      
      
     
                        </center>

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