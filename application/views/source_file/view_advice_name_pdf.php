<!DOCTYPE html>
 
    <div class="container">
        
        <div class="row">
            <div class="col-md-1">
                
                
                
            </div>
             <div class="col-md-10">
               
<div class="form-group has-success">

         <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="example">

<thead>
<tr class="success">
<th width="250">Advice Group Name</th>
<th width="200">Advice Name</th>
<th width="200">Normal Range</th>
<th width="100">Unit</th>
<th></th>
</tr>
</thead>
<tbody>
   <?php

foreach($advie_info as $data) {
?>

<tr class="">
    <td><?php echo $data->path_test_group_name;?></span></td>
    <td><?php echo $data->test_name;?></span></td>
    <td><?php echo $data->normal_range;?></span></td>
     <td><?php echo $data->unit;?></span></td>

<td>
<a class="btn btn-primary" href="<?php echo base_url();?>data_record/edit_form_advice_name/<?php echo $data->path_test_id;?>" onClick="return sure();"><span class="glyphicon glyphicon-edit"></span> Edit</a>


 <a class="btn btn-danger" href="<?php echo base_url();?>data_record/delete_advice_name/<?php echo $data->path_test_id;?>" onClick="return sure();"><span class="glyphicon glyphicon-trash"></span> Delete</a>



</td>
</td>
</tr>
<?php }?>
</tbody>
</table>
         
         
         
     </div> 
                
                
            </div>
             <div class="col-md-1">
                
                
                
            </div>
            
        </div>
    </div>
    
    
    
</body>
