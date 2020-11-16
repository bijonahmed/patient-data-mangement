<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
 
        <script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
     
        <script src="<?php echo base_url(); ?>admin_panel/js/bootstrap.js"></script>
       
        <script>
            $(document).ready(function() {
                $("#height").focus();
                $(":focus").css("background-color", "yellow");
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
                
                    <li class="active"><a href="#home" data-toggle="tab">Update Physical Findings.</a></li>
                   
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
                            <div class="col-md-10">
                                <div class="">



                                    <div class="form-group has-success">

                                        <!-- Tab panes -->
                                      
                                        
                                        
                                        
                     <div class="tab-pane active" id="home">

                                                   <!-- Nav tabs -->
<ul class="nav nav-tabs">

  <?php
  /*
   <li><a href="<?php echo base_url()?>welcome/add_new_physicalfindings_systolic_information.html" data-toggle="tab_">Systolic</a></li>
   * 
   */
  
  ?>
  
 
 

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane active" id="gene">
        
        <div class="row">
                                                        <br>
                                                       <font color="#FF0000">
                                                        <?php
                                                        $message = $this->session->userdata('message');
                                                        //echo $message;
                                                        if (isset($message)) {
                                                            echo $message;
                                                            $this->session->unset_userdata('message');
                                                        }
                                                        ?>
                                                        </font>

                                                        <div class="form-group has-success">
                                                            <div class="row">
                                                                <div class="col-xs-2">
<form name="myform" method="post" action="<?php echo base_url(); ?>data_record/save_patieint_history_info_by_physical_findings_updateinfo.html">
                                                                        <input type="text" class="form-control" id="height" name="height" placeholder="Height" value="<?php echo $physicalfindings->height;?>"><br>        
                                                                        <input type="text" class="form-control" id="textbox1" name="weight" placeholder="Weight" value="<?php echo $physicalfindings->weight;?>"><br>
                                                                    <input type="text" class="form-control" name="bsa" id="textbox2" placeholder="BSA" value="<?php echo $physicalfindings->bsa;?>"> <br>
                                                                    <input type="hidden" class="form-control" id="textbox1" name="weightkg" value="<?php echo $physicalfindings->weightkg;?>">
Blood Pressure 
id<input type="text" class="form-control" name="physical_examination_id" placeholder="Systolic" value="<?php echo $physicalfindings->physical_examination_id;?>"><br>
<input type="text" class="form-control" name="systolic" placeholder="Systolic" value="<?php echo $physicalfindings->systolic;?>"><br>
<input type="text" class="form-control" name="diastolic" placeholder="Diastolic" value="<?php echo $physicalfindings->diastolic;?>">
 


           <script type="text/javascript">
$(document).ready(function() {
$("#textbox1").change(function()
        {
    var weight = $("#textbox1").val(); 
    var value1 = Number(weight)*4 + 7;
    var value2 = Number(weight) + 90;
    var result = value1/value2;
    var bsax = result.toPrecision(5);
    $("#textbox2").val(bsax);
        }); 
});
</script>



                                                                </div>
                           
                                                
                                                                <div class="col-xs-3">
  
  <select name="custom_phy_findings_id" class="form-control sm" onchange="physical_findingsInfo(this.value);">
                        <option value="">--- Select ---</option>
                                            <option value="">None</option>
                  <?php
foreach ($custom_phy_info as $data) {
    ?>
                                        <option value="<?php echo $data->custom_phy_findings_id; ?>"> <?php echo $data->customized_physical_findings_name; ?> </option>
                                    <?php } ?>
</select>   <br><br><br>       
                                                                             
                                                               </div>
                                                                   
                                                                <div class="col-xs-3">
           <select name="phy_fin_value[]"  class="form-control"  id="phy_fin_value_Id"  multiple="multiple">
    <option></option>
</select>     
                                                                </div>
                                                                
                                                                <input type="hidden" name="current_date" value="<?php echo date("Y-m-d"); ?>">
                                                                <div class="col-xs-2">
                                                                    <input type="text" class="form-control" name="others_information">
                                                                    
                                                                </div>
                                                                <button class="btn btn-primary" onClick="return save_()"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Add Phy. Findings</button></center> 
                                                           
                                                                </form>    
                                                                             <div class="col-xs-8">
<table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">
<thead>
<tr>
<th>SL NO</th>
<th>Height</th>
<th>Weight</th>
<th>Systolic</th>
<th>Diastolic</th>
<th>BSA</th>
 
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





foreach($view_physicalfindingsInfo as $data) {
?>

<tr>
<td><?php echo $x;?></td>
<td><?php echo $data->height;?></td>
<td><?php echo $data->weight;?> </td>
<td><?php echo $data->systolic;?> </td>
<td><?php echo $data->diastolic;?> </td>
<td><?php echo $data->bsa;?>&nbsp;<?php echo $data->weightkg;?> </td>
 
<td>
<a class="" href="<?php echo base_url();?>data_record/delete_phy_value_data_revisit/<?php echo $data->physical_examination_id;?>" onClick="return delete_data();" style="text-decoration:none"><i class="icon-trash icon-black"></i>&nbsp;Delete</a>
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
  <table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">
<thead>
<tr>
 
<th>Heading</th>
<th>Value</th>
<th>Result</th>
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





foreach($view_physicalfindingsInfo_value as $data) {
?>

<tr>
 
<td><?php echo $data->customized_physical_findings_name;?> </td>
<td><?php echo $data->phy_fin_value;?> </td>
<td><?php echo $data->others_information;?> </td>
<td>
<a class="" href="<?php echo base_url();?>data_record/delete_phy_value_data_revisit/<?php echo $data->physical_finds_multiple_id;?>" onClick="return delete_data();" style="text-decoration:none"><i class="icon-trash icon-black"></i>&nbsp;Delete</a>
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




                                                    </div>
        
        
        
    </div>
  
</div>

                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    



                                                </div>

                    </div>


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