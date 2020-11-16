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
          <h3>Update Generic Name</h3>
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
               <div class="alert alert-success">
               <form name="employee" method="post" action="<?php echo base_url();?>data_record/update_generic_info.html">
                   Update Generic Name <div class="form-group has-success">
  <label class="control-label" for="inputSuccess1"></label>
  <input type="text" class="form-control" name="generic_name" required="1" value="<?php echo $generic_name->generic_name;?>">
  <input type="hidden" class="form-control" name="medicine_generic_id" required="1" value="<?php echo $generic_name->medicine_generic_id;?>">
  <br>
  <center> <button class="btn btn-info" onClick="return save_()"><span class="glyphicon glyphicon-edit"></span>
Update</button>
  
  </center>

</div>
                </form>       
                   
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