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
        
         <style>
      .margintopinfo
      {
          margin-top: 60px;
          /*background-color: yellowgreen;*/
      }
  </style>
      
      <div class="row">
          <div class="col-md-4">
              
              
              
          </div>
           <div class="col-md-4">
               <div class="alert alert-success margintopinfo">
               <form name="employee" method="post" action="<?php echo base_url();?>data_record/update_doseschedule_name.html">
                   Update Dose Schedule Name <div class="form-group has-success">
  <label class="control-label" for="inputSuccess1"></label>
  <input type="text" class="form-control" name="dose_schedule" required="1" value="<?php echo $dose_schedule->dose_schedule;?>" >
  <input type="hidden" class="form-control" name="dose_schedule_id" required="1" value="<?php echo $dose_schedule->dose_schedule_id;?>" >
  <br>
  <center> <button class="btn btn-info" onClick="return save_()"><span class="glyphicon glyphicon-save"></span>
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