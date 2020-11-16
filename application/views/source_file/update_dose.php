<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>resource/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="<?php echo base_url();?>resource/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>data_table/js/jquery.js"></script>
<script src="<?php echo base_url();?>data_table/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>data_table/js/DT_bootstrap.js"></script>
<script src="<?php echo base_url();?>data_table/js/bootstrap-dataTables-paging.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
 
         <style>
      .margintopinfo
      {
          margin-top: 60px;
          /*background-color: yellowgreen;*/
      }
  </style>

  <br><br><br>
    
   

      <div class="container">
     
   
      
      <div class="row">
          <div class="col-md-4">
              
               <font color="#FF0000">
                            <?php
                        $message=$this->session->userdata('message');
                        //echo $message;
                        if(isset($message))
                        {
                            echo $message;
                            $this->session->unset_userdata('message');
                        }
                        
                    ?>
                        </font>
              
          </div>
           <div class="col-md-4 margintopinfo">
               <div class="alert alert-success">
               <form name="employee" method="post" action="<?php echo base_url();?>data_record/update_doseType_info.html">
                   Update Dose Name <div class="form-group has-success">
  <label class="control-label" for="inputSuccess1"></label>
  <input type="text" class="form-control" name="dose_type" required="1" value="<?php echo $doseinfo->dose_type;?> ">
  <input type="hidden" id="inputInfo" class="span4" name="dose_id" value="<?php echo $doseinfo->dose_id;?>">
  <br>
  <center> <button class="btn btn-primary" onClick="return save_()"><span class="glyphicon glyphicon-edit"></span>
update</button>
  
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