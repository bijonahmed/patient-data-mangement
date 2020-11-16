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
        <div align="right"> <a href="<?php echo base_url()?>welcome/immunophenotyping_report.html">
                    <button class="btn btn-danger">Close</button>  </a> </div>
        <div class="form-group has-success">
            <div class="row">
                <div class="alert alert-info">Update Cytogenetic Test Name 
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
              
                    <div class="col-md-3 alert alert-success">
                          <form name="cytogenetic" method="post" action="<?php echo base_url();?>data_record/update_cytogenetic_testName.html">
                              <input type="text" class="form-control" name="cytogenetic_test_name" id="inputSuccess1" placeholder="Cytogenetic Test Name" required="1" value="<?php echo $cytogenetic_data->cytogenetic_test_name;?>"><br>
                              <input type="hidden" class="form-control" name="cytogenetic_test_name_id" id="inputSuccess1" placeholder="Cytogenetic Test Name" required="1" value="<?php echo $cytogenetic_data->cytogenetic_test_name_id;?>"><br>
                        <center>                    
                            <button class="btn btn-primary" onclick="return sure ()"><span class="glyphicon glyphicon-edit"></span> Update</button>  
                           

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