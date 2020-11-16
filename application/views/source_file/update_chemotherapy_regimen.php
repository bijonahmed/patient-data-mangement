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
    <br><br><br><br>
      <div class="col-md-4"></div>
    <div class="container">
  
        <div class="form-group has-success">
            <div class="row">
            
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
                    <div class="col-md-3 alert alert-success">
                        <br>
                          <form name="appearnce" method="post" action="<?php echo base_url();?>data_record/update_customized_chemotherapy_regmin_name.html">
                              <input type="text" class="form-control" name="customized_chemotherapy_regimen_name" id="inputSuccess1" value="<?php echo $chemotherapy_regimen->customized_chemotherapy_regimen_name;?>"><br>
                              <input type="hidden" class="form-control" name="custom_chemotherapy_regmine_id" id="inputSuccess1" value="<?php echo $chemotherapy_regimen->custom_chemotherapy_regmine_id;?>"><br> 
                        <center>                    
                            <button class="btn btn-primary" onclick="return sure_ ()"><span class="glyphicon glyphicon-edit"></span> Update</button>  
                        
                         
                        </center>
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