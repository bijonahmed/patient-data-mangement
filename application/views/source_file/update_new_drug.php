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
          <h3>Update Drug</h3>
          <hr>
          <form name="employee" method="post" action="<?php echo base_url(); ?>data_record/update_new_drug_name.html">
              <div class="row">

                  <div class="col-md-4">

                      <div class="alert alert-info">
                     
                              Dose Type<div class="form-group has-success">
                                  <select name="dose_id" id="select" class="form-control input-lg">

                                      <?php
                                      foreach ($dosetype as $data) {
                                          ?>
                                          <option value="<?php echo $data->dose_id; ?>"> <?php echo $data->dose_type; ?> </option>
                                      <?php } ?>
                                  </select>
                                  <br>


                                  Schedule<div class="form-group has-success">
                                      <select name="dose_schedule_id" id="select" class="form-control input-lg">

                                          <?php
                                          foreach ($scheduleInfo as $data) {
                                              ?>
                                              <option value="<?php echo $data->dose_schedule_id; ?>"> <?php echo $data->dose_schedule; ?> </option>
                                          <?php } ?>
                                      </select>
                                      <br>

                                      Suggestion<div class="form-group has-success">
                                          <select name="doseSuggestion_id" id="select" class="form-control input-lg">

                                              <?php
                                              foreach ($suggestion as $data) {
                                                  ?>
                                                  <option value="<?php echo $data->doseSuggestion_id; ?>"> <?php echo $data->dose_suggestion; ?> </option>
                                              <?php } ?>
                                          </select>
                                          <br>
                                      </div>


                                  </div>


                              </div>


                      </div>   

                  </div>
                  <div class="col-md-4">
                      <div class="alert alert-danger">

                          Generic Name<div class="form-group has-success">
                              <select name="medicine_generic_id" id="select" class="form-control input-lg">
                                   <option selected></option>
                                  <?php
                                  foreach ($new_generic_name as $data) {
                                      ?>
                                      <option selected value="<?php echo $data->medicine_generic_id; ?>"> <?php echo $data->generic_name; ?> </option>
                                  <?php } ?>
                              </select>
                              <br>


                              Brand Name<div class="form-group has-success">
                                  <input type="text" class="form-control" name="brand_name"  value="<?php echo $new_drug->brand_name;?>" >
                                  <input type="hidden" class="form-control" name="drug_id"  value="<?php echo $new_drug->drug_id;?>" >
                                  <br>

                                  Pharma. Name<div class="form-group has-success">
                                      <input type="text" class="form-control" name="pharma_name" value="<?php echo $new_drug->pharma_name;?>" ><br>

Drug Info 
                                          <textarea class="form-control" name="drug_advice_info" rows="3"><?php echo $new_drug->drug_advice_info;?></textarea>
                                          <br>
                                      <center> <button class="btn btn-info" onClick="return save_()"><span class="glyphicon glyphicon-edit"></span>
                                              Update</button>
                                        
                                      </center>

                                  </div>
                                

                              </div>


                          </div>


                      </div>

                  </div>
                  <div class="col-md-4">

                      <div class="alert alert-success">

                          Pharma. Cell Number<div class="form-group has-success">
                              <input type="text" class="form-control" name="pharma_cell_number"  value="<?php echo $new_drug->pharma_cell_number;?>"><br>

                              Pharma. Email Number<div class="form-group has-success">
                                  <input type="text" class="form-control" name="pharma_email_number"  value="<?php echo $new_drug->pharma_email_number;?>"><br>

                                  MRO Name <div class="form-group has-success">
                                      <input type="text" class="form-control" name="mro_name" value="<?php echo $new_drug->mro_name;?>" ><br>

                                      Address <div class="form-group has-success">
                                          <textarea class="form-control" name="address" rows="3"><?php echo $new_drug->address;?></textarea>
                                          <br> 


                                      </div>

                                  </div>
                              </div>
                          </div>
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