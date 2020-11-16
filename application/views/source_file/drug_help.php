<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
 

    
  </head>
  <br><br><br>
  <body>
      <div class="container">
          <h3>Drug Help</h3>
          <hr>
      
              <div class="row">

                  <div class="col-md-4">

                        
            <font color="#FF0000">
                            <?php
                        $message=$this->session->userdata('save_message');
                        //echo $message;
                        if(isset($message))
                        {
                            echo $message;
                            $this->session->unset_userdata('save_message');
                        }
                        
                    ?>
                        </font>  

                  </div>
                  <div class="col-md-4">
                      <form name="employee" method="post" action="<?php echo base_url(); ?>data_record/save_drug_help.html">
                      <div class="">

                         <div class="form-group has-success">
                               
                              
                              <br>

                             Drug Name
                                  <select name="drug_id" id="select" required="1" class="form-control input-lg">

                                  <?php
                                  foreach ($brand_name_info as $data) {
                                      ?>
                                      <option value="<?php echo $data->drug_id; ?>"> <?php echo $data->brand_name; ?> </option>
                                  <?php } ?>
                              </select><br>
                              <textarea type="text" name="drug_help_name" class="form-control inline"></textarea>
<br><br>

                                      <center> <button class="btn btn-info" ><span class="glyphicon glyphicon-saved"></span>
                                              Save</button>
                                          
                                           <a href="<?php echo base_url();?>welcome/view_drug_help.html">
                                           <button type="button" class="btn btn-primary">Search</button>
                                             </a>
                                      </center>
                              
                                  </div>
                                    

                              </div>
</form>

                          </div>


                      </div>

                  </div>
                  <div class="col-md-4">

                     
                  </div>

              </div>
        
  </body> 
 <script>
function save()
{
chk=confirm("Are You Sure");
if(chk)
{
return true;
}
else{
return false;
}
}
</script>