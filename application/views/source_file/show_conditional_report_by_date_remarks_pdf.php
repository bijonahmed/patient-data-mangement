<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 

  </head>
  <body>
 
    <div align="center">
        <div class=""><strong>Remarks Patient List</strong></div>
        <br>From <?php echo $date_from;?> To <?php echo $date_to;?>
        <br>
    <br>
     
    </div>
   
        
     
<table width="534" border="1" cellpadding="0" cellspacing="0" class="table" id="example">
  <thead>
    <tr class="success">
      <th width="39" height="22" valign="top"><div align="left">S. N.</div></th>
      <th width="56" valign="top"><div align="left">Pt. ID</div></th>
      <th width="76" valign="top"><div align="left">Pt.Name</div></th>
      <th width="70" valign="top"><div align="left">Cell Number</div></th>
      <th width="60" valign="top"> <div align="left">Date</div></th>
      <th width="38" valign="top"> <div align="left">Age</div></th>
      <th width="37" valign="top"> <div align="left">Sex</div></th>
   
      <th width="76" valign="top"> <div align="left">Diagnosis</div></th>
<th width="90" valign="top"> <div align="left">Remarks</div></th>

    </tr>
  </thead>
  <tbody>
    <?php
$x=1;
foreach($complaint as $data) {
?>
    <tr class="">
      <td valign="top"><div align="left"><?php echo $x;?></div></td>
      <td valign="top"><div align="left">
        <?php  $length=strlen($data->manual_pid); 
        $part1=substr_replace("$data->manual_pid","/",2);
        $part2=substr("$data->manual_pid",2);
        //$part2=substr_replace("$data->manual_pid","",-($length-2));
        $manual_pid=$part1.$part2;
    echo  $manual_pid;?>
      </div></td>
      <td valign="top"><div align="left"><?php echo $data->patient_name;?></div></td>
      <td valign="top"><div align="left"><?php echo $data->cell_number;?></div></td>
      <td valign="top"><div align="left"><span><?php echo date("d-m-Y",strtotime($data->current_date));?></span></div></td>
      <td valign="top"><div align="left"><span><?php echo $data->age;?></span></div></td>
      <td valign="top"><div align="left"><span><?php echo $data->sex;?></span></div></td>

      <td valign="top"><div align="left"><span><?php echo $data->customized_diagnosis_category_name;?></span></div></td>
      <td valign="top"><span><?php echo $data->remarks;?></span></td>
    </tr>
    <?php 
 $x++;

}?>
  </tbody>
</table>

     
    
</body>