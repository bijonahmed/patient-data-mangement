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
        <script src="<?php echo base_url(); ?>javascript_form/examples/gen_validatorv4.js"  type="text/javascript" xml:space="preserve"></script>
<script>
$(document).ready(function(){
  $("#height").focus();
  $(":focus").css("background-color","yellow");
});
</script>
    </head>
    <br><br><br>
    <body>
        <div class="container">
            <br>
            
           <!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab">Presenting Complaints</a></li>
 
</ul>
<style> 
.myborder
{
border:2px solid #3CB371;
padding:100px 2px; 
background:#20B2AA;
width:auto;
border-radius:7px;
}
</style>
<style>
    a.tooltips {
  position: relative;
  display: inline;
}
a.tooltips span {
  position: absolute;
  width:140px;
  color: #FFFFFF;
  background: #000000;
  height: 30px;
  line-height: 30px;
  text-align: center;
  visibility: hidden;
  border-radius: 6px;
}
a.tooltips span:after {
  content: '';
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -8px;
  width: 0; height: 0;
  border-top: 8px solid #000000;
  border-right: 8px solid transparent;
  border-left: 8px solid transparent;
}
a:hover.tooltips span {
  visibility: visible;
  opacity: 0.8;
  bottom: 30px;
  left: 50%;
  margin-left: -76px;
  z-index: 999;
}
</style>
<style type="text/css">
<!--
.fontstyle {font-size: 30px}
-->
</style>
<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="home">
      <div class="row">
         <div class="col-md-10">
         <div class="">
      

            
                 <div class="form-group has-success">

<form name="step_one" method="post" action="<?php echo base_url(); ?>data_record/save_patieint_history_info_by_prescription_update.html">
    <table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">

<thead>
<tr>
<th>Complaint List</th>
<th></th>
<th>Duration</th>
<th>Timing</th>
</tr>
</thead>
<tbody>


<tr>
    <td><select name="cc_name_id" class="form-control" id="cc_name_id">

<option value="">--- Select ---</option>
<option value="">None</option>
<?php
foreach ($complaint_nameInfo as $data) {
?>
<option value="<?php echo $data->cc_name_id; ?>"> <?php echo $data->complain_name; ?> </option>
<?php } ?>
</select></td>
<td>
    <a class="tooltips" data-toggle="modal" data-target="#add_new_complaint" href="#"><div class="btn-group"><div class="fontstyle">+</div></div>
<span>Please Click here</span></a>


<!-- -->
  </td>
 <td><select name="complaint_duration" class="form-control" id="complaint_duration" style="width:auto;">
      <option value="">--- Select ---</option>

          <?php 

    for($i=1; $i<=100; $i++)
     {
      ?>

     <option value="<?php echo $i;?>"><?php echo $i;?></option>
    <?php
        }
        ?>
</select></td>
<td>
    <select name="complaint_timing" class="form-control" id="complaint_timing" style="width:auto;">
        <option value="">--- Select ---</option>
        <option>Day</option>
        <option>Week</option>
        <option>Month</option>
        <option>Years</option>
        
        
</select>
    
</td>
<td><button class="btn btn-primary" id="" onClick="return add_prescription_info()"><span class="glyphicon glyphicon-pencil"></span> Update Complaint</button></td>
<td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Extra Complaint</button></td>
</tr>
</tbody>
</table>
<table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">
<thead>
<tr>
<th>SL NO</th>
<th>Complaint Name</th>
<th>Duration</th>
<th>Timing</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
$x=1; {

?>
<?php
//$patient_id=$this->session->userdata('patient_id');
if(isset($presentingComplaintInfo)) {





foreach($presentingComplaintInfo as $data) {
?>

<tr>
<td><?php echo $x;?></td>
<td><?php echo $data->complain_name;?></td>
<td><?php echo $data->complaint_duration;?> </td>
<td><?php echo $data->complaint_timing;?> </td>
<td>
     

    <a class="" href="<?php echo base_url();?>data_record/delete_complaintName_update/<?php echo $data->cc_name_id;?>" onClick="return delete_data();" style="text-decoration:none"><i class="icon-trash icon-black"></i>&nbsp;Delete</a>
</td>

<?php
$x++;
}
}
}
?>
</tr>

</tbody>
</table>
    
     
    <input type="hidden" name="current_date" value="<?php echo date("Y-m-d");?>">
    
     
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Extra Complaint</h4>
            </div>
            <div class="modal-body">
                <textarea class="jqte-test form-control" name="extra_complaint" ></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
</form> 

</div>


                        </div>

             </div>
           
          
          </div>
      
      
      
  </div>

    <style>
        .fontsize
        {
            font-size: 19px;
        }
    </style>
  
</div>
 </div>
  
</body> 


<script>
                                $('.jqte-test').jqte();

                                // settings of status
                                var jqteStatus = true;
                                $(".status").click(function()
                                {
                                    jqteStatus = jqteStatus ? false : true;
                                    $('.jqte-test').jqte({"status": jqteStatus})
                                });
</script>

<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });
</script>


<script>
    function save()
    {
        chk = confirm("Are You Sure");
        if (chk)
        {
            return true;
        }
        else {
            return false;
        }
    }
</script>




 
<script>
    function add_pathologyical_testInfo()
    {
        chk = confirm("Are You Sure Save Pathological Test Information ..?");
        if (chk)
        {
            return true;
        }
        else {
            return false;
        }
    }
</script>

<script>
    function delete_data()
    {
        chk = confirm("Are you sure");
        if (chk)
        {
            return true;
        }
        else {
            return false;
        }
    }
</script>
 <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });
    </script>
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
</html> 