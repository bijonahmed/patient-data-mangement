<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  


  </head>
  <body>
<div align="center">
        <div class=""><strong>Patient List</strong></div>
         Sex: <font color="red"><?php if(isset($sex_information)) echo $sex_information;?></font> 
        <br>From <?php echo $date_from;?> To <?php echo $date_to;?><br>
       
        <br>
        <br>
     
    </div>
   
        
   
         <table width="562" border="1" cellpadding="0" cellspacing="0" class="table table-hover tableradius" id="example">

<thead>
<tr class="success">
       <th width="52" valign="top"><div align="left">S. N.</div></th>
    <th width="47" valign="top"><div align="left">Pt. ID</div></th>
<th width="98" valign="top"><div align="left">Patient Name</div></th>
<th width="98" valign="top"><div align="left">Cell Number</div></th>
<th width="76" valign="top"> <div align="left">Date</div></th>
<th width="50" valign="top"> <div align="left">Age</div></th>
<th width="41" valign="top"> <div align="left">Sex</div></th>

<th width="98" valign="top"> <div align="left">Address</div></th>
</tr>
</thead>
<tbody>
   <?php
$x=1;
foreach($sex_by_search as $data) {
?>

<tr class="">
<td valign="top"><div align="left"><?php echo $x;?></span></div></td>
<td valign="top"><div align="left">
  <?php  $length=strlen($data->manual_pid); 
        $part1=substr_replace("$data->manual_pid","/",2);
        $part2=substr("$data->manual_pid",2);
        //$part2=substr_replace("$data->manual_pid","",-($length-2));
        $manual_pid=$part1.$part2;
    echo  $manual_pid;?>
  </span></div></td>
<td valign="top"><div align="left"><?php echo $data->patient_name;?></span></div></td>
<td valign="top"><div align="left"><?php echo $data->cell_number;?></span></div></td>
<td valign="top"><div align="left"><span><?php echo date("d-m-Y",strtotime($data->current_date));?></span></div></td>
<td valign="top"><div align="left"><span><?php echo $data->age;?></span></div></td>
<td valign="top"><div align="left"><span><?php echo $data->sex;?></span></div></td>

<td valign="top"><div align="left"><span><?php echo $data->address;?></span></div></td>
</tr>
<?php 
 $x++;

}?>
</tbody>
</table>
