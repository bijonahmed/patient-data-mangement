<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>

    <!-- Bootstrap -->
          <script src="<?php echo base_url(); ?>admin_panel/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>resource/js/jquery-ui.js"></script>

            <script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
  
        
        


 
 
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
    <style>
        .tableradius
        {
 

border-radius:50px;
 
            
        }
        
    </style>
    <font color="red">
    <center>
        <br><strong>From <?php echo $date_from;?> To <?php echo $date_to;?></strong>
       </center>      
    </font>
    </div>
                 <div class="form-group has-success">
         <table cellpadding="0" cellspacing="0" border="0" class="table table-hover" id="example">

<thead>
<tr class="success">
    <?php if($this->session->userdata('patient_id')!=NULL){
    
        ?>
  <th width="130">Dynamic P_ID</th>  
    <?php
    }else{
        
        ?>
  <th width="100">Manual P_ID</th>
  <?php
    }
    ?>


<th width="200">Patient Name</th>
<th width="90">Visit No</th>
<th width="100">Visit Date</th>
<th width="100">View</th>
 

 
</tr>
</thead>
<tbody>
   <?php

foreach($revisit as $data) {
?>

<tr class="">
    <td><?php  
    if($this->session->userdata('patient_id')!=NULL){
      echo $data->patient_id;  
        
    }else {
    echo $data->manual_pid;
}
    ?></span></td>
    
    <td><?php echo $data->patient_name;?></span></td>
    <td><?php echo $data->visiting_no;?></span></td>
    <td><?php echo date('d-m-Y',strtotime($data->current_date));?></span></td>

<td>

    <?php
    /*
     <a class="btn btn-info" href="<?php echo base_url();?>data_record/edit_form_re_visit_info/<?php echo $data->patient_id;?>" onClick="return sure();"><span class="glyphicon glyphicon-zoom-in"></span> View Prescription</a>
     *     <a class="btn btn-info" href="<?php echo base_url();?>data_record/edit_form_re_visit_info/<?php echo $data->patient_id;?>" onClick="return sure();"><span class="glyphicon glyphicon-zoom-in"></span> View Prescription</a>
     */ 
    ?>
    <a target="_blank" href="<?php echo base_url();?>data_record/re_visit_conditional_prescription/<?php  
   if($this->session->userdata('patient_id')!=NULL)
   {
       echo $data->patient_id;  
   }  else {
        echo $data->manual_pid;
   }
            echo 'VisitNo'.$data->visiting_no;?>">
    <button class="btn btn-primary" ><span class="glyphicon glyphicon-zoom-in"></span> View</button>
    </a>
 
 <?php
 /*
  <a href="<?php echo base_url();?>data_record/conditional_print_preview_prescription/<?php echo $data->visiting_no;?>">
    <button class="btn btn-danger"><span class="glyphicon glyphicon-book"></span> PDF</button>
    </a>
   
  */
 ?>
   

</td>




 
</tr>
<?php }?>
</tbody>
</table>
         
         
       </div>  
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
</script><script type="text/javascript">
    $('#current_date').datepicker()
</script>