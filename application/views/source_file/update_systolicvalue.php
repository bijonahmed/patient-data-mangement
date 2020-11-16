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
               <div class="form-group has-success">
               <div class="alert alert-success">
                   <br>
          <form name="data" method="post" action="<?php echo base_url();?>data_record/update_customized_physical_fidings_systolic_value_info">
    <input type="text" name="phy_fin_value" class="form-control" value="<?php echo $systolic_valueinfo->phy_fin_value?>">
    <br>
    <input type="hidden" name="phy_fin_value_Id" class="form-control" value="<?php echo $systolic_valueinfo->phy_fin_value_Id?>">
    <br>
    <center><button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span>&nbsp;update</button></center>
</form>    
                   
               </div>
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