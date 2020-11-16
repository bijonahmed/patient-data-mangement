<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>

 
  </head>
  <body>
<script src="<?php echo base_url(); ?>data_table/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>resource/data_table/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>resource/data_table/js/DT_bootstrap.js"></script>
<script src="<?php echo base_url(); ?>resource/data_table/js/bootstrap-dataTables-paging.js"></script>
<script src="<?php echo base_url(); ?>resource/data_table/js/bootstrap-dataTables.js"></script>
   <br><br><br>
    <div class="container">
        
        <div class="row">
            <div class="col-md-1">
                
                
                
            </div>
             <div class="col-md-10">
               
<div class="form-group has-success">
    <style>
        .tableradius
        {
 

border-radius:50px;
 
            
        }
        
    </style>
  
    <div class="">
  <div class="modal-dialog">
    <div class="modal-content">
   
      <div class="modal-body">
      <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="example">

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
<a class="link" href="<?php echo base_url();?>data_record/edit_form_chemotherapy_regimen_name/<?php echo $data->custom_chemotherapy_regmine_id;?>" onClick="return sure_();" style="text-decoration:none"><span class="glyphicon glyphicon-edit"></span> Edit</a>
 



</td>
</td>
</tr>
<?php }?>
</tbody>
</table>
      </div>
     
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
      
         
         
         
     </div> 
                
                
            </div>
             <div class="col-md-1">
                
          <br> <br>
            
            </div>
            
        </div>
    </div>
    
    
    
</body>

 <script>
function sure()
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