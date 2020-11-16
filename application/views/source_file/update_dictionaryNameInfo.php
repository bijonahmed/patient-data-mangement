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
            <h3>Update Information</h3>
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

    Update
                </div>
                <div class="col-md-4">
                    <div class="">
                           
                        
                       
                      
                      
<form name="employee" method="post" action="<?php echo base_url(); ?>data_record/update_info_data.html">
      <div class="form-group has-success">
<select name="category_id" class="form-control" id="category_id">

<option value="selected"></option>

<?php
foreach ($category as $data) {
?>
<option value="<?php echo $data->category_id; ?>"> <?php echo $data->category_name; ?> </option>
<?php } ?>
</select>
                            <br>
                            <input type="text" class="form-control" name="name" id="dose_suggestion" required="1" placeholder="Name" value="<?php echo $dictionaryInfor_data->name;?>">
                             <br>
                             <input type="text" class="form-control" name="address" id="address" required="1" placeholder="Address" value="<?php echo $dictionaryInfor_data->address;?>">
                             <input type="hidden" class="form-control" name="category_data_id" id="category_data_id" required="1" placeholder="Address" value="<?php echo $dictionaryInfor_data->category_data_id;?>">
  <br>
  <input type="text" class="form-control" name="cell_number" id="cell_number" required="1" placeholder="Cell Number" value="<?php echo $dictionaryInfor_data->cell_number;?>">
                        
                        </div>
                    </div>
    <center> <button class="btn btn-info" onClick="return save()"><span class="glyphicon glyphicon-save"></span>
                                    Update Data</button></center>
 </form>
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