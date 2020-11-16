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
            <div class="form-group has-success">
           
          <!-- Nav tabs -->
<ul class="nav nav-tabs">
 <li class="active"><a href="#home" data-toggle="tab">Update Diagnosis</a></li>
</ul>
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
         <div class="col-md-12">
         <div class="">
     
            
                 <div class="form-group has-success">

              <!-- Tab panes -->

  
<div class="tab-content">
   <div class="tab-pane active" id="home">
        <br>
<form name="myform" method="post" action="<?php echo base_url(); ?>data_record/save_patieint_history_info_by_diagnosis_update.html">
    
        <div class="row">
            
            <div class="col-md-3">
               
                <select name="diagnosis_category_id" class="form-control" id="cc_name_id">

<option value="">--- Select ---</option>
<option value="">None</option>
<?php
foreach ($view_diagnosis_category_name as $data) {
?>
<option value="<?php echo $data->diagnosis_category_id; ?>"> <?php echo $data->customized_diagnosis_category_name; ?> </option>
<?php } ?>
                </select>
            
<input type="hidden" name="current_date" value="<?php echo date("Y-m-d"); ?>">
            </div>
            <div class="col-md-2">
              <center><button class="btn btn-primary" onclick="return sure();"><span class="glyphicon glyphicon-saved"></span>&nbsp;Save</button></center> 
               
               
            </div>
            <div class="col-md-2">
                  <div align="left">
             <a class="tooltips" data-toggle="modal" data-target="#new_diagnosis" href="#"><div class="btn-group"><div class="fontstyle">+</div></div>
<span>Please Click here</span></a>
                </div>
            </div>
            </form> 
            
            

 
     



        
   
                         <div class="modal fade" id="new_diagnosis" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Add Diangosis</h4>
            </div>
            <div class="modal-body">
                  <div class="form-group has-success">
                        <form id="category_diagnosis" method="post" action="<?php echo base_url();?>data_record/save_customized_diagnosis.html">
                        <input type="text" class="form-control" name="customized_diagnosis_category_name" id="inputSuccess1" placeholder="Add New Diagnsos Category" required="1"><br>
                                      
                        <center>  <button class="btn btn-primary" id="btn_diag_cat"><span class="glyphicon glyphicon-plus"></span> Add Diagnosis Name</button>  </center>
                       </form>
                    </div>
                <br><br>
  
          
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
                         
                         
             
        <div class="col-md-12">
        <table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">
<thead>
<tr>

<th width="100">SL NO</th>
<th>Diangosis Name</th>

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





foreach($diagnosisInfo as $data) {
?>

<tr>
<td><?php echo $x;?></td>
<td><?php echo $data->customized_diagnosis_category_name;?> </td>


<td>
    <a class="" href="<?php echo base_url();?>data_record/delete_diagnosisinformation_update/<?php echo $data->diagnosis_id;?>" onClick="return delete_data();" style="text-decoration:none"><i class="icon-trash icon-black"></i>&nbsp;<span class="glyphicon glyphicon-trash"></span>&nbsp;Delete</a>
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
        </div>
        
           </div>
    </div>
 
                        <input type="hidden" name="current_date" value="<?php echo date("Y-m-d"); ?>">
      
  </div>
  <style>
        .fontsize
        {
            font-size: 19px;
        }
    </style>
     

<script>
//
function weightInfo(str)
{
var  strUrl="<?php echo base_url(); ?>data_record/weightinfo_by_bsa.html?="+str;
//alert(str);var  strUrl="<?php echo base_url(); ?>data_record/weightinfo_by_bsa.html?custom_phy_findings_id="+str;
var xmlhttp;
if (str=="")
{
document.getElementById("bsa").innerHTML="";
return;
}
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("bsa").innerHTML=xmlhttp.responseText;
//alert(xmlhttp.responseText);
}
}
xmlhttp.open("GET",strUrl,true);
xmlhttp.send();
}
</script>


<script>
//
function physical_findingsInfo(str)
{
var  strUrl="<?php echo base_url(); ?>data_record/physicalFindings_by_search.html?custom_phy_findings_id="+str;
//alert(str);
var xmlhttp;
if (str=="")
{
document.getElementById("phy_fin_value_Id").innerHTML="";
return;
}
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("phy_fin_value_Id").innerHTML=xmlhttp.responseText;
//alert(xmlhttp.responseText);
}
}
xmlhttp.open("GET",strUrl,true);
xmlhttp.send();
}
</script>
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