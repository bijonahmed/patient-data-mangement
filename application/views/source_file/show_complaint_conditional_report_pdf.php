<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

  </head>
  <body>


<body> 
    <div class="container">
        
        <div class="row">
            <div class="col-md-1">
                
                
                
            </div>
             <div class="col-md-10">
               
<div class="form-group has-success">
  



    </div>
    <div id="printablediv" style="width: 100%; background-color: none; height: auto">
    <div align="center">
        <strong>COMPLAINT LIST OF<BR><font color="red"><?php if(isset($presenting_complaint)) echo $presenting_complaint;?></font> </strong>
        <br>From <?php echo $date_from;?> To <?php echo $date_to;?>
        <br>
        <br>
     
    </div>

         <table cellpadding="0" c border="1" cellspacing="0" bordercolor="#000000"  class="table table-hover tableradius" id="example_">

<thead>
<tr class="success">
    <th width="40"><div align="left">SL NO</div></th>
    <th width="70"><div align="center">Patient ID</div></th>
    <th width="200"><div align="left">Patient Name</div></th>
<th width="100"><div align="left">Cell Number</div></th>
<th width="150"><div align="center"> Date</div></th>
<th></th>
</tr>

</thead>

<tbody>
   <?php
$x=1;
foreach($complaint as $data) {
?>

<tr class="">
<td><div align="center"><?php echo $x;?></div></span></td>
<td><div align="center"><?php echo $data->patient_id;?></div></span></td>
<td><div align="left"><?php echo $data->patient_name;?></div></span></td>
<td><div align="left"><?php echo $data->cell_number;?></div></span></td>
<td><div align="center"><?php echo $data->current_date;?></div></span></td>
<td>






</td>
</td>
</tr>
<?php 
 $x++;

}?>
</tbody>
</table>
    </div>
        </div> 
         
         
     </div> 
                
                
            </div>
             <div class="col-md-1">
                
                
                
            </div>
            
        </div>
    </div>
    
    
    
</body>
 