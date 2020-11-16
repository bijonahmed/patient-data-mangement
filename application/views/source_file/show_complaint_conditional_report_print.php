<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>

    <!-- Bootstrap -->
 
  </head>
  <body>


<body>  <br><br><br><br>
    <div class="container">
        
        <div class="row">
           
             <div class="col-md-10">
               
<div class="form-group has-success">
    <div align="center">
        <strong>COMPLAINT GROUP OF<BR><font color="red"><?php if(isset($complaint_group_nameInformation)) echo $complaint_group_nameInformation;?></font> </strong>
        <br>From <?php echo $date_from;?> To <?php echo $date_to;?>
     
    </div>

         <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius">

<thead>
<tr class="success">
    <th width="100">Patient ID</th>
<th width="300">Patient Name</th>
<th width="200">Cell Number</th>
<th width="100"> Date</th>
<th></th>
</tr>
</thead>
<tbody>
   <?php

foreach($complaint as $data) {
?>

<tr class="">
    <td><?php echo $data->patient_id;?></span></td>
<td><?php echo $data->patient_name;?></span></td>
<td><?php echo $data->cell_number;?></span></td>
<td><?php echo $data->current_date;?></span></td>
<td>

 





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
    
    
    
</body>