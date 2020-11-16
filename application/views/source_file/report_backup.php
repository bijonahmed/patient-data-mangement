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
  <script>
$(document).ready(function(){
  $("#select").focus();
  $(":focus").css("background-color","MistyRose");
});
</script>

    
  </head>
  <br><br><br>
  <body>
      <form name="patient_revisit" method="post" action="<?php echo base_url();?>data_record/preview_date_wise_statment.html">
      <div class="container">
          <h3>Report</h3>
      <hr>
      
      <div class="row">
          
          <div class="col-md-4">
 
              
              
          </div>
          <div class="col-md-4"><div class="form-group has-success">
               <label> Presenting Complaint Name</label> <select name="cc_name_id" id="select" required="1" class="form-control">
                              
                                <?php
                                foreach ($complaint_nameInfo as $data) {
                                    ?>
                                    <option value="<?php echo $data->cc_name_id; ?>"> <?php echo $data->complain_name; ?> </option>
                                <?php } ?>
                            </select>
               </div>
            
           <div class="form-group has-success">
                
               
                </div>
            
             Starting Date<div class="form-group has-success">
                 <input type="text" class="form-control" data-date-format="" id="starting_date" name="prescription_date_from" required="1">
             </div>
                
                 Ending Date<div class="form-group has-success">
                     <input type="text" class="form-control" data-date-format="" id="ending_date"name="prescription_date_from_date_to" required="1">
             </div>
                 
                 <center><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></center>
             
              
              
          </div>
          
           <div class="col-md-4">
              
              
              
          </div>
      </div>
   
      </div>
          </form>
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
    $('#starting_date').datepicker()
</script>

<script type="text/javascript">
    $('#ending_date').datepicker()
</script>