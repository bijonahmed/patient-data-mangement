<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
       <script src="<?php echo base_url(); ?>data_table/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>resource/data_table/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>resource/data_table/js/DT_bootstrap.js"></script>
<script src="<?php echo base_url(); ?>resource/data_table/js/bootstrap-dataTables-paging.js"></script>
<script src="<?php echo base_url(); ?>resource/data_table/js/bootstrap-dataTables.js"></script>
        <!-- Bootstrap -->

    </head>
  <body>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->


    <!-- Include all compiled plugins (below), or include individual files as needed -->



<body>  <br><br><br>
    <div class="container">
        
        <div class="row">
            <div class="col-md-1">
                
                
                
            </div>
             <div class="col-md-10">
               
<div class="form-group has-success">
    <br><br>
         <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="example">

<thead>
<tr class="success">
 <th width="10">Patient ID</th>
<th width="10">Visit No.</th>
<th width="10">Recv. date</th>
<th width="50">Patient Name</th>
<th width="10">Action</th>





</tr>
</thead>
<tbody>
   <?php

foreach($view_radiology_report as $data) {
?>

<tr class="">
    <td><?php  
    $length=strlen($data->manual_pid); 
        $part1=substr_replace("$data->manual_pid","/",2);
        //$part2=substr_replace("$data->manual_pid","",$length-2);
        $part2=substr("$data->manual_pid",2);
        $manual_pid=$part1.$part2;
    echo $manual_pid;?></span></td>
      <td><?php echo $data->visiting_no; ?></span></td>
                                         <td><?php echo date("d-m-Y",strtotime($data->reciv_date)); ?></span></td>
                                        <td><?php echo $data->patient_name; ?></span></td>
                                     
<td>

                                            <a class="link" href="<?php echo base_url();?>data_record/edit_form_haematology/<?php echo $data->radiology_id;?>" onClick="return save();" style="text-decoration:none"><span class="glyphicon glyphicon-edit"></span> Edit</a>

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