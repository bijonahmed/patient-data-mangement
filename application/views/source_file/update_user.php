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
          <h3>Update New User Permission</h3>
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
          <form name="employee" method="post" action="<?php echo base_url(); ?>data_record/update_new_user_name.html">
          <div class="col-md-4">
              <div class="alert alert-danger">
                
                      Name <div class="form-group has-success">
                          <input type="text" class="form-control" name="name" required="1" value="<?php echo $userInfo->name;?>" >
                           <input type="hidden" class="form-control" name="user_id" required="1" value="<?php echo $userInfo->user_id;?>" >
                          <br>

                          Cell Phone Number <div class="form-group has-success">
                              <input type="text" class="form-control" name="cell_number" required="1" value="<?php echo $userInfo->cell_number;?>" ><br>

                              Type<select name="type" id="select" required="1" class="form-control input-lg">
                                  <option selected="selected"><?php echo $userInfo->type;?></option>
                                  <option selected="selected">admin</option>
                                  <option selected="selected">user</option>            
                              </select>
                              <br>


                              Address <div class="form-group has-success">
                                  <input type="text" class="form-control" name="address" required="1" value="<?php echo $userInfo->address;?>"><br>

                                  User Name <div class="form-group has-success">
                                      <input type="text" class="form-control" name="email" required="1" value="<?php echo $userInfo->email;?>"><br>

                                      Password <div class="form-group has-success">
                                          <input type="password" class="form-control" name="password" required="1" value="<?php echo $userInfo->password;?>" ><br>



                                          <center> <button class="btn btn-info" onClick="return save()"><span class="glyphicon glyphicon-save"></span>
                                                  Update</button>
                                         
                                          </center>

                                      </div>
                                    

                                  </div>


                              </div>   
                          </div>
                      </div>
              </div>
          </div>
          </form>
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