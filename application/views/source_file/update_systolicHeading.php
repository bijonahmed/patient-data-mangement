<!DOCTYPE html>
<html lang="en">
    <br><br><br><br>
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
                    <br><br><br>
                    <div class="col-md-4"></div>
                    <div class="col-md-3 alert alert-success">
                          <form name="systolic" method="post" action="<?php echo base_url();?>data_record/update_customized_physical_fidings_systolic.html">
                              <input type="text" class="form-control" name="customized_physical_findings_systolic_name" value="<?php echo $systolic_data->customized_physical_findings_systolic_name;?>"><br>
                              <input type="hidden" class="form-control" name="custom_phy_findings_systolic_id" value="<?php echo $systolic_data->custom_phy_findings_systolic_id;?>"><br>
                        <center>                    
                            <button class="btn btn-primary" onclick="return sure_ ()"><span class="glyphicon glyphicon-edit"></span> Update</button>  
                             </form>

                        </center>
                    </div>
              
              
         
         
         
     </div> 
      </div>
     
    </div>
  </div>
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