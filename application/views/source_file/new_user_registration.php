<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
 
 <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
        <script src="<?php echo base_url(); ?>resource/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url();?>resource/js/jquery-ui.js"></script>

        <script src="<?php echo base_url(); ?>resource/Context.js-master/context.js"></script>
        <script src="<?php echo base_url(); ?>resource/Context.js-master/demo.js"></script>

        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.standalone.css" rel="stylesheet">

        </style>
        <script src="<?php echo base_url(); ?>data_table/js/jquery.js"></script>
        <script>
            $(document).ready(function() {
                $("#dose_suggestion").focus();
                $(":focus").css("background-color", "white");
            });
        </script>
  <script>
$(document).ready(function(){
  $("#name").focus();
  $(":focus").css("background-color","white");
});
</script>

    
  </head>
  <br><br><br>
  <body>
      <div class="container">
          <h3>Add New User Permission</h3>
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
          <form name="employee" method="post" action="<?php echo base_url(); ?>data_record/save_new_user_name.html">
          <div class="col-md-4">
              <div class="">
                
                      Name <div class="form-group has-success">
                          <input type="text" class="form-control" name="name" id="name" required="1" ><br>

                          Cell Phone Number <div class="form-group has-success">
                              <input type="text" class="form-control" name="cell_number" required="1" ><br>

                              Type<select name="type" id="select" required="1" class="form-control input-lg">
                                  <option selected="selected">admin</option>
                                  <?php
                                  /*
                                   <option selected="selected">user</option>   
                                   */
                                  ?>
                                         
                              </select>
                              <br>


                              Address <div class="form-group has-success">
                                  <input type="text" class="form-control" name="address" required="1" ><br>

                                  User Name <div class="form-group has-success">
                                      <input type="text" class="form-control" name="email" required="1" ><br>

                                      Password <div class="form-group has-success">
                                          <input type="password" class="form-control" name="password" required="1" ><br>



                                          <center> <button  class="btn btn-info" id="ENQUIRY_VIEWMETER"><span class="glyphicon glyphicon-save"></span>
                                                  Save</button>
                                            
                                          </center>

                                      </div>
                                    

                                  </div>


                              </div>   
                          </div>
                      </div>
              </div>
          </div>
          </form>
          <center>
                <a href="<?php echo base_url(); ?>welcome/view_new_user_Info.html">
                                                  <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
                                                      <span class="glyphicon glyphicon-search"></span>
                                                      Search
                                                  </button>
                                              </a>
                 <a href="<?php echo base_url(); ?>welcome/index.html">
                                                  <button class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg">
                                                      <span class="glyphicon glyphicon-eject"></span>
                                                      Close
                                                  </button>
                                              </a>
          </center>
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
          <script type="text/javascript">
   $("#ENQUIRY_VIEWMETER").keydown(function(event) {
        if(event.which == 113) { //F2
            $("body").append("<p>F2</p>");
            confirm("asdf");
            return false;
        } 
        else if(event.which == 114) { //F3
            $("body").append("<p>F3</p>");
            return false;
            
        }
 });

    </script>