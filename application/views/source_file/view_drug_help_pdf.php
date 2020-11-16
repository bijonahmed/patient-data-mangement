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
    
   
        <table cellpadding="0" c border="1" cellspacing="0" bordercolor="#000000"  class="table table-hover tableradius" id="example_">
   
<thead>
<tr class="success">
    <th width="40">SL NO</th>
<th width="200">Complaint Name</th>
<th width="130">Generic Name</th>
<th width="120">Brand Name</th>

</tr>
</thead>
<tbody>
   <?php
$x=1;
foreach($drug_help as $data) {
?>

<tr class="">
    <td><?php echo $x;?></span></td>
<td><?php echo $data->complain_name;?></span></td>
<td><?php echo $data->generic_name;?></span></td>
<td><?php echo $data->brand_name;?></td>

 
</tr>
<?php 
$x++;

}?>
</tbody>
</table><br> <br> 
    <div align="left"><small>Printing Date <?php echo date("d-m-Y")?></small></div>   
         </div>
         
     </div> 
                
                
            </div>
             <div class="col-md-1">
                
                
                
            </div>
            
        </div>
    </div>
    
    
    
</body>
