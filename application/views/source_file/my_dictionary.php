<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
  <link href="<?php echo base_url(); ?>admin_panel/jQuery-TE_v.1.4.0/job_ jquery-te-1.4.0.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>admin_panel/jQuery-TE_v.1.4.0/jquery-te-1.4.0.min.js"></script>
        <script src="<?php echo base_url(); ?>admin_panel/js/bootstrap.js"></script>
        
        
        <script>
            $(document).ready(function() {
                $("#complain_name").focus();
                $(":focus").css("background-color", "white");
            });
        </script>
        <style>
            .shadow
            {
   

    -moz-box-shadow:10px 10px 5px #000000;
    -webkit-box-shadow:10px 10px 5px #000000;
    box-shadow:10px 10px 5px #000000;


            }
        </style>
        <style>
            
</style>
    <br><br><br><br><br>

    </head>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success"><stron>Default Dictionary Data :</stron></li>
  <li class="list-group-item list-group-item-info"> List of Emergency Services , Top Consultants in Bangladesh</li>
  <li class="list-group-item list-group-item-warning">List of Doctors , Top Hospitals,Hospital & Clinics </li>
  <li class="list-group-item list-group-item-danger">List of Diagnostic Centers,  Medical College and University</li>
</ul>
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-success">List of  Medical Institutes, Blood Banks </a>
  <a href="#" class="list-group-item list-group-item-info">List of Pharmaceuticals , Health Societies. </a>
  <a href="#" class="list-group-item list-group-item-warning">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item list-group-item-danger">Vestibulum at eros</a>
</div>

                
            </div>
            <div class="col-md-5">
                <center>
            Click here Dictionary Image Open Dialog Box Searching Data.....<br><br>
            
                <image class="img-circle shadow" data-toggle="modal" data-target="#myModal" src="<?php echo base_url();?>resource/img/images.jpg">
        </center>
                
            </div>
            
        </div>
        
    
        
    </div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
  <div class="form-group has-success">
    <br>
         <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="example">

<thead>
<tr class="success">
<th width="160">Type</th>
<th width="450">Name</th>
<th width="100">Cell Number</th>
<th width="300">Address</th>
</tr>
</thead>
<tbody>
   <?php

foreach($searchdata as $data) {
?>

<tr class="">
<td><?php echo $data->category_name;?></span></td>
<td><?php echo $data->name;?></span></td>
<td><?php echo $data->cell_number;?></span></td>
<td>

    <a class="link"data-toggle="tooltip" data-placement="left" title="
       
       <?php echo $data->address;?>
       
       
       " href="#" style="text-decoration:none"><span class="glyphicon glyphicon-road"></span> Address</a>
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
$('[data-toggle="tooltip"]').tooltip({
    'placement': 'top'
});
$('[data-toggle="popover"]').popover({
    trigger: 'hover',
        'placement': 'top'
});

$('#userNameField').tooltip({
    'show': true,
        'placement': 'bottom',
        'title': ""
});

$('#userNameField').tooltip('show');
</script>
