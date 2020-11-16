<!DOCTYPE html>
<html lang="en">
    <br><br><br>
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
                $("#inputSuccess1").focus();
                $(":focus").css("background-color", "white");
            });
        </script>
      
    <div class="container">
        <div align="right"> <a href="<?php echo base_url()?>welcome/chemotherapy_region.html">
                    <button class="btn btn-danger">Close</button>  </a> </div>
        <div class="form-group has-success">
            <div class="row">
                <div class="alert alert-info">Update Customize Chemotherapy Regimen Value Data  
               <font color="#FF0000">
                    <?php
                    $message = $this->session->userdata('save_message');
                    //echo $message;
                    if (isset($message)) {
                        echo $message;
                        $this->session->unset_userdata('save_message');
                    }
                    ?>
                    </font>   </div>
              
                   
              
               <div class="col-md-3">
                        <div class="form-group has-success">

                        </div>
                    </div>
                <form name="appearnce" method="post" action="<?php echo base_url();?>data_record/update_chemotherapy_regimen_value.html">
                    <div class="col-md-3 alert alert-info">
                    <select name="custom_chemotherapy_regmine_id" class="form-control sm">
                        <option value="">--- Select ---</option>
                                            <option value="">None</option>
                  <?php
foreach ($chemotherapy_regimen_name as $data) {
    ?>
                                        <option value="<?php echo $data->custom_chemotherapy_regmine_id; ?>"> <?php echo $data->customized_chemotherapy_regimen_name; ?> </option>
                                    <?php } ?>
</select>
                        <br>
                        <input type="text" class="form-control" id="inputSuccess1" name="chemotherapy_regimen_value" value="<?php echo $chemotherapy_regimen_value->chemotherapy_regimen_value;?>"><br>
                        <input type="hidden" class="form-control" id="inputSuccess1" name="chemotherapy_regimen_value_id" value="<?php echo $chemotherapy_regimen_value->chemotherapy_regimen_value_id;?>"><br>
                        <center>                    
                            <button class="btn btn-primary" onclick="return sure()"><span class="glyphicon glyphicon-edit"></span> Update</button>
                        

                        </center>
                        
                        
              </div>
                    
                        </form>
 
</div>   
  <script>
            function sure()
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
</html>