<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>

 
<script src="<?php echo base_url();?>data_table/js/jquery.js"></script>
<script src="<?php echo base_url();?>resource/js/jquery-ui.js"></script>
<link href="<?php echo base_url();?>resource/css/jquery-ui.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">


<link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
        <script src="<?php echo base_url(); ?>resource/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url();?>resource/js/jquery-ui.js"></script>

        <script src="<?php echo base_url(); ?>resource/Context.js-master/context.js"></script>
        <script src="<?php echo base_url(); ?>resource/Context.js-master/demo.js"></script>

        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.standalone.css" rel="stylesheet">
        
  <script>
$(document).ready(function(){
  $("#patient_name").focus();
  $(":focus").css("background-color","white");
});
</script>

  </head>
  <br><br><br>
  <body>
      <div class="container">
          <br><br>
      
      <div class="row">
          <div class="col-md-2">
              
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
        
           <div class="col-md-8">
                 <fieldset>
                     <legend><center>Update Particular</center></legend>
               <div class="">
                   <br>
               <form name="frm" method="post" action="<?php echo base_url();?>data_record/update_add_new_patient_info.html">
                     <div class="form-group has-success">
                  <div class="row">
                       <div class="col-xs-2"></div>  
                      <div class="col-xs-4">
                         
                          <input type="text" class="form-control" name="current_date" id="registration_date" required="1" value="<?php echo date("d-m-Y", strtotime($particular->current_date));?>" ><br>
                      </div><br><br><br>
  
  <div class="col-xs-2">
         <label class="control-label" for="inputSuccess1"> Patient ID</label>  
  </div>
  <div class="col-xs-3">
   <input type="text" class="form-control" name="manual_pid" id="registration_date" required="1" value="<?php 
   
   $length=strlen($particular->manual_pid); 
        $part1=substr_replace("$particular->manual_pid","/",2);
        //$part2=substr_replace("$data->manual_pid","",$length-2);
        $part2=substr("$particular->manual_pid",2);
        $manual_pid=$part1.$part2;
    echo $manual_pid
   
   //echo $particular->manual_pid;?>
          
          
          " >
   <input type="hidden" name="patient_id" value="<?php echo $particular->patient_id;?>" required="1" >
  </div>
  <div class="col-xs-2">
    Patient Name 
  </div>
    <div class="col-xs-5">
    <input type="text" class="form-control" name="patient_name" id="patient_name" required="1" value="<?php echo $particular->patient_name;?>">
  </div>
                      <br> <br>                
                      
<div class="col-xs-2">
           Age
  </div>
  <div class="col-xs-3">
      <input type="text" class="form-control" name="age" required="1" value="<?php echo $particular->age;?>">

  </div>
  <div class="col-xs-2">
 Sex
  </div>
    <div class="col-xs-3">
    <select name="sex" class="form-control">
         <option><?php echo $particular->sex;?></option>
          <option>Male</option>
          <option>Female</option>
          
      </select>
  </div><br> <br>   
                      <div class="col-xs-2">
            Cell Number
  </div>
  <div class="col-xs-3">
  <input type="text" class="form-control" name="cell_number" value="<?php echo $particular->cell_number;?>"><br>

  </div>
  
                  <div class="col-xs-2">
          Address
  </div>
  <div class="col-xs-5">
    <textarea class="form-control" rows="3" name="address"><?php echo $particular->address;?></textarea><br>

  </div>
           
  <div class="col-xs-5"></div>
           <div class="col-xs-2">
  <center>  
      <button class="btn btn-primary btn-lg" onClick="return update_();"><span class="glyphicon glyphicon-edit"></span>&nbsp;Update</button>
  </center>
  </div>
</div>
                         


                     </div>
                </form>       
                   
               </div>
              
               </fieldset>  
          </div>
       
           <div class="col-md-2">
              
              
              
          </div>
      </div>
   
      </div>
  </body>

<script type="text/javascript">
        $('#registration_date').datepicker()
    </script>
 <script>
function update()
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