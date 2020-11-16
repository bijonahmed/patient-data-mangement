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
         <div align="right"> <a href="<?php echo base_url()?>welcome/close_physical_findings_page.html">
                    <button class="btn btn-danger">Close</button>  </a> </div>

           
            
           <!-- Nav tabs -->

<style> 
.myborder
{
border:2px solid #3CB371;
padding:20px 2px; 
background:#20B2AA;
width:auto;
border-radius:7px;
}
</style>
<!-- Tab panes -->
<div class="tab-content">
    
        
  <div class="tab-pane active" id="home">
      <div class="row">
         <div class="col-md-10">
         <div class="">
          

            
                 <div class="form-group has-success">

<form name="step_one" method="post" action="<?php echo base_url(); ?>data_record/save_systolic_information.html">
   <table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">

<thead>
<tr>
<th>Systolic </th>
<th></th>
<th>Value</th>

</tr>
</thead>
<tbody>


<tr>
    <td><select name="custom_phy_findings_systolic_id" class="form-control" id="custom_phy_findings_systolic_id">

<option value="">--- Select ---</option>
<option value="">None</option>
<?php
foreach ($view_systolic as $data) {
?>
<option value="<?php echo $data->custom_phy_findings_systolic_id; ?>"> <?php echo $data->customized_physical_findings_systolic_name; ?> </option>
<?php } ?>
</select></td>
<td>
  <a class="tooltips" data-toggle="modal" data-target="#systolic" href="#"><div class="btn-group"><div class="fontstyle">+</div></div>
<span>Please Click here</span></a>
<!-- -->
  </td>
  <td>
      
      <input type="text" class="form-control" name="systolic_value" required="1">
          <input type="hidden" name="current_date" value="<?php echo date("Y-m-d");?>">
  </td>
<td>
  
  
</td>
<td><button class="btn btn-primary" id="" ><span class="glyphicon glyphicon-saved"></span> Save</button></td>
<td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Extra Systolic</button></td>


</tr>
</tbody>
</table>
<table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">
<thead>
<tr>
<th>SL NO</th>
<th>Systolic Name</th>
<th>Value</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
$x=1; {

?>
<?php
$patient_id=$this->session->userdata('patient_id');
if(isset($patient_id)) {





foreach($view_systolicInformaiton as $data) {
?>

<tr>
<td><?php echo $x;?></td>
<td><?php echo $data->customized_physical_findings_systolic_name;?></td>
<td><?php echo $data->systolic_value;?> </td>

<td>
     

    <a class="" href="<?php echo base_url();?>data_record/delete_SystolicName_update/<?php echo $data->new_systolic_id;?>" onClick="return delete_data();" style="text-decoration:none"><i class="icon-trash icon-black"></i>&nbsp;Delete</a>
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
    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Extra Systolic</h4>
            </div>
            <div class="modal-body">
                <textarea class="jqte-test form-control" name="extra_systolic" ></textarea>
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
    
  


 


</body> 
<form name="step_one" method="post" action="<?php echo base_url(); ?>data_record/save_customized_physical_fidings_systolic_redirect.html">

<div class="modal fade" id="systolic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Add new Systolic</h4>
            </div>
            <div class="modal-body">
                <div class="form-group has-success">
                    <input type="text" class="form-control" name="customized_physical_findings_systolic_name"><br>
                <center><button class="btn btn-primary">Add</button></center>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
</form>
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