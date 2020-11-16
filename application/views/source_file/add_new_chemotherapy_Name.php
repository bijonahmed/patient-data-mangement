<!DOCTYPE html>
<html lang="en">
    <br><br><br>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
        <script src="<?php echo base_url(); ?>data_table/js/jquery.js"></script>
        <script>
            $(document).ready(function() {
                $("#inputSuccess1").focus();
                $(":focus").css("background-color", "white");
            });
        </script>
      
    <div class="container">
        <div align="right"> <a href="<?php echo base_url()?>welcome/chemotherapy_region.html">
                    <button class="btn btn-danger">Close</button>  </a> </div>
        <div class="form-group has-success">
            <div class="row">
                <div class="alert alert-info">Add Customize Chemotherapy Regimen Data  
               <font color="#FF0000">
                    <?php
                    $message = $this->session->userdata('save_message');
                    //echo $message;
                    if (isset($message)) {
                        echo $message;
                        $this->session->unset_userdata('save_message');
                    }
                    ?>
                    </font>   </div>
              
                    <div class="col-md-3 alert alert-success">
                          <form name="appearnce" method="post" action="<?php echo base_url();?>data_record/save_customized_chemotherapy_regmin_name.html">
                        <input type="text" class="form-control" name="customized_chemotherapy_regimen_name" id="inputSuccess1" placeholder="Chemotherapy Regimen Name" required="1"><br>
                        <center>                    
                            <button class="btn btn-primary" onclick="return sure ()"><span class="glyphicon glyphicon-plus"></span> Add</button>  
                        
                           <button class="btn btn-info" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-search"></span> View</button>
                        </center>
                             </form>
                    </div>
              
               <div class="col-md-3">
                        <div class="form-group has-success">

                        </div>
                    </div>
                <form name="appearnce" method="post" action="<?php echo base_url();?>data_record/save_chemotherapy_regimen_value.html">
                    <div class="col-md-3 alert alert-info">
                    <select name="custom_chemotherapy_regmine_id" class="form-control sm">
                        <option value="">--- Select ---</option>
                                            <option value="">None</option>
                  <?php
foreach ($chemotherapy_regimen_name as $data) {
    ?>
                                        <option value="<?php echo $data->custom_chemotherapy_regmine_id; ?>"> <?php echo $data->customized_chemotherapy_regimen_name; ?> </option>
                                    <?php } ?>
</select>
                        <br>
                        <input type="text" class="form-control" id="inputSuccess1" name="chemotherapy_regimen_value" placeholder="Value" required="1"><br>
                        <center>                    
                            <button class="btn btn-primary" onclick="return sure()"><span class="glyphicon glyphicon-plus"></span> Add</button>
                        
                             <button class="btn btn-info" data-toggle="modal" data-target="#value"><span class="glyphicon glyphicon-search"></span> View</button>
                        </center>
                        
                        
              </div>
                    
                        </form>
  <!-- Physical Fidings Heading Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Chemotherapy Regimen</h4>
      </div>
      <div class="modal-body">
<div class="form-group has-success">
    <br>
         <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="phy_findings">

<thead>
<tr class="success">
<th width="250">Name</th>
<th>Action</th>
</tr>
</thead>
<tbody>
   <?php

foreach($chemotherapy_regimen_name as $data) {
?>

<tr class="">
    <td><?php echo $data->customized_chemotherapy_regimen_name;?></span></td>


<td>
<a class="link" href="<?php echo base_url();?>data_record/edit_form_chemotherapy_regimen_name/<?php echo $data->custom_chemotherapy_regmine_id;?>" onClick="return sure();" style="text-decoration:none"><span class="glyphicon glyphicon-edit"></span> Edit</a>
 



</td>
</td>
</tr>
<?php }?>
</tbody>
</table>
         
         
         
     </div> 
      </div>
     
    </div>
  </div>
</div>               
                
   <!-- Physical Fidings Value Modal -->
<div class="modal fade" id="value" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Chemotherapy Regimen Value</h4>
      </div>
      <div class="modal-body">
<div class="form-group has-success">
    <br>
         <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="phy_findings_value">

<thead>
<tr class="success">
<th width="150">Heading</th>
<th width="250">Value</th>
<th>Action</th>
</tr>
</thead>
<tbody>
  <?php

foreach($chemotherapy_regimen_value as $data) {
?>


<tr class="">
    <td><?php echo $data->customized_chemotherapy_regimen_name;?></span></td>
    <td><?php echo $data->chemotherapy_regimen_value;?></span></td>


<td>
<a class="link" href="<?php echo base_url();?>data_record/edit_form_chemotherapy_value/<?php echo $data->chemotherapy_regimen_value_id;?>" onClick="return sure();" style="text-decoration:none"><span class="glyphicon glyphicon-edit"></span> Edit</a>



</td>
</td>
</tr>
<?php }?>
</tbody>
</table>
         
         
         
     </div> 
      </div>
     
    </div>
  </div>
</div>   
  <script>
            function sure()
            {
                chk = confirm("Are You Sure");
                if (chk)
                {
                    return true;
                }
                else {
                    return false;
                }
            }
    </script>
</html>