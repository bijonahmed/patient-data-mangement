<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    
<link href="<?php echo base_url();?>resource/css/jquery-ui.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
<script src="<?php echo base_url();?>resource/js/jquery-1.9.1.js"></script>
<script src="<?php echo base_url();?>resource/js/jquery-ui.js"></script>
<script language="javascript" src="<?php echo base_url();?>resource/modal.popup.js"></script>
<script language="javascript" src="<?php echo base_url();?>resource/jquery.printPage.js"></script>

<script>
$(document).ready(function(){
  $("#dose_id").focus();
  $(":focus").css("background-color","yellow");
});
</script>


    <script>
  $(document).ready(function() {

		//Change these values to style your modal popup
		var align = 'center';									//Valid values; left, right, center
		var top = 40; 											//Use an integer (in pixels)
		var width = 900; 										//Use an integer (in pixels)
		var padding = 10;										//Use an integer (in pixels)
		var backgroundColor = '#FFFFFF'; 						//Use any hex code
		var source = '<?php echo base_url();?>data_record/print_preview_prescription'; 								//Refer to any page on your server, external pages are not valid e.g. http://www.google.co.uk
		var borderColor = '#333333'; 							//Use any hex code
		var borderWeight = 4; 									//Use an integer (in pixels)
		var borderRadius = 5; 									//Use an integer (in pixels)
		var fadeOutTime = 300; 									//Use any integer, 0 = no fade
		var disableColor = '#666666'; 							//Use any hex code
		var disableOpacity = 40; 								//Valid range 0-100
		var loadingImage = '<?php echo base_url();?>resource/loading.gif';		//Use relative path from this page

		//This method initialises the modal popup
        $(".bijon").click(function() {
            modalPopup(align, top, width, padding, disableColor, disableOpacity, backgroundColor, borderColor, borderWeight, borderRadius, fadeOutTime, source, loadingImage);
        });

		//This method hides the popup when the escape key is pressed
		$(document).keyup(function(e) {
			if (e.keyCode == 27) {
				closePopup(fadeOutTime);
			}
		});

    });
</script>
<script>
 $(document).ready(function() {
$(".btnPrint").printPage({
url: "<?php echo base_url(); ?>data_record/print_preview_prescription.html",
attr: "href",
message:"Your document is being created Print"
});
});
</script>
<style type="text/css">
<!--
.font {color: #006600}
-->
</style>
<style type="text/css">
<!--
.font_two

{
color: #000099;
font-size: 15px;

}
-->
</style>

<style type="text/css">
<!--
.font {
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 12px;
}
-->
</style>
<style type="text/css">
<!--
.color_font {
font-size: 12px;
font-family: Verdana, Arial, Helvetica, sans-serif;
color: #FF00FF;
-->
</style>
  </head>
  <br><br><br>
  <body>
      <div class="">
          <div class="">
              <div class="col-md-1"></div>
              <div class="col-md-2">
<div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
<strong><i class="icon-user icon-large"></i>&nbsp;

    <strong></strong>
<font color="red">
<?php
$message = $this->session->userdata('save_message');
//echo $message;
if (isset($message)) {
echo $message;
$this->session->unset_userdata('save_message');
}
?></font>
<br>
<span class="style21"><u>H/O</u></span>
<span class="style20">
Height:<?php

echo $this->session->userdata('height');
?><br>
Weight:<?php

echo $this->session->userdata('weight');
?><br>
Pressure:<?php

echo $this->session->userdata('pressure');
?><br>

<style>
.history
{
color: #993399;
}


</style>
</span>

<font color="red">   <?php
$message = $this->session->userdata('save_message');
//echo $message;
if (isset($message)) {
echo $message;
$this->session->unset_userdata('save_message');
}
?></font>

<span class="style21"><u>Patient History</u></span><br>

<font color="#FF0099"> <?php

echo $this->session->userdata('patient_history_info');
?></font><br>
 
<span class="style20">
<span class="style21"><u>Complaint</u></span><br>
<?php
//$patientComplain = $this->session->userdata('complain_name');
if (isset($complaintList)) {

foreach ($complaintList as $valueCom) { // it is 233 number line

echo $valueCom . "<br>";
}
}
?>
<u><strong>Extra Complaint</strong></u><br>

<font color="#FF0099">
 <?php 
 $complaintList = $this->session->userdata('extra_complaint');
 echo $complaintList->extra_complaint;?></font>
</span>


</div>
              </div>
               <div class="col-md-8">
                                      <div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">&times;</button>

    <div align="left">
        <strong><font color="red"><?php
$patient_id=$this->session->userdata('patient_id');
if(isset($patient_id))

// foreach($patientComplain as $valueComplain){

echo "Patient Id: ".$patient_id.', ';  ?></font></strong>


Patient Name:
<?php
$patient_name=$this->session->userdata('patient_name');
if(isset($patient_name))

// foreach($patientComplain as $valueComplain){

echo $patient_name.', ';

?>
Age: <?php
$age=$this->session->userdata('age');
if(isset($age))

// foreach($patientComplain as $valueComplain){

echo $age;

?>,
Sex: <?php
$sex=$this->session->userdata('sex');
if(isset($sex))

// foreach($patientComplain as $valueComplain){

echo $sex ;

?>

</div>

 

 



</div>  
   <hr>     
   
   
 <form name="userinfo" id="userinfo" method="post" action="<?php echo base_url();?>data_record/save_prescription_ajax_table.html">  
<button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span>Test Advice</button>
   
   <button type="button" class="btn btn-success btn bijon" ><i class="icon-zoom-in"></i> <span class="glyphicon glyphicon-zoom-in"></span> Preview</button>
<button type="button" class="btn btn-info btn btnPrint"><i class="icon-print"></i> <span class="glyphicon glyphicon-print"></span>  Printing</button>



<div class="form-group has-success">


    <table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">

<thead>
<tr>
<th>Dose Type</th>
<th>Drug & Strength</th>
<th>Schedule</th>
<th>Amount</th>
<th>Day</th>
<th>Suggestion</th>
<th>Action</th>
</tr>
</thead>
<tbody>


<tr>
    <td><select name="dose_id" class="form-control" id="dose_id"  onchange="brand_name_presctiption_info(this.value);">

<option selected="selected">Select Type</option>
<?php
foreach ($dosetype as $doseTypeInfo) {
?>
<option value="<?php echo $doseTypeInfo->dose_id; ?>"> <?php echo $doseTypeInfo->dose_type; ?> </option>
<?php } ?>
</select></td>
<td>
    <select name="brand_name"  class="form-control"  id="brand_name" required="1" exclude=" ">
    <option></option>
</select>
<!-- -->
  </td>
<td><select name="dose_schedule_id"id="dose_schedule_id" class="form-control" style="width:auto">
<option selected="selected">Select Type</option>
<?php
foreach ($scheduleInfo as $schedule) {
?>
<option value="<?php echo $schedule->dose_schedule_id; ?>"> <?php echo $schedule->dose_schedule; ?> </option>
<?php } ?>
</select></td>
<td><input type="text" name="amount" class="form-control"id="amount"></td>

<td><input type="text" name="day" class="form-control" id="day"></td>
<td><select name="doseSuggestion_id" class="form-control" id="doseSuggestion_id" style="width:auto;">
<option selected="selected" >Select Type</option>
<?php
foreach ($suggestion as $suggestion) {
?>
<option value="<?php echo $suggestion->doseSuggestion_id; ?>"> <?php echo $suggestion->dose_suggestion; ?> </option>
<?php } ?>
</select></td>
<td><button class="btn btn-primary" id="" onClick="return add_prescription_info()">Add Drug</button></td>



</tr>

</tbody>
</table>

<table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">

<thead>
<tr>
<th>SL NO</th>
<th>Dose Type</th>
<th>Drug & Strength</th>

<th>Schedule</th>
<th>Amount</th>
<th>Suggestion</th>
<th>Day</th>
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





foreach($prescriptoin_data as $pres) {
?>

<tr>
<td><?php echo $x;?></td>
<td><?php echo $pres->dose_type;?></td>
<td><?php echo $pres->brand_name;?></td>


<td><?php echo $pres->dose_schedule;?></td>
<td><?php echo $pres->amount;?></td>
<td><?php echo $pres->dose_suggestion;?></td>
<td><?php echo $pres->day;?> </td>
<td>
     

<a class="" href="<?php echo base_url();?>data_record/delete_medicine/<?php echo $pres->prescription_id;?>" onClick="return delete_medicine();" style="text-decoration:none"><i class="icon-trash icon-black"></i>&nbsp;Delete</a>
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
    <input type="hidden" name="date" value="<?php echo date("Y-m-d");?>">
</form> 

</div></div>
            <div class="col-md-1"></div>  


              </div>
              
              
              
              
          </div>
<script>
//onclick retrive delivery date
function brand_name_presctiption_info(str)
{
var  strUrl="<?php echo base_url(); ?>data_record/dose_type_wise_brand_name_info.html?dose_id="+str;
//alert(str);
var xmlhttp;
if (str=="")
{
document.getElementById("brand_name").innerHTML="";
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
document.getElementById("brand_name").innerHTML=xmlhttp.responseText;
//alert(xmlhttp.responseText);
}
}
xmlhttp.open("GET",strUrl,true);
xmlhttp.send();
}
</script>


   <script>
    //onclick retrive delivery date
    function srengthinfo(str)
    {
        var  strUrl="<?php echo base_url(); ?>data_record/srength_info_by_prescription.html?drug_id="+str;
        //alert(str);
        var xmlhttp;
        if (str=="")
        {
            document.getElementById("strength_name").innerHTML="";
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
                document.getElementById("strength_name").innerHTML=xmlhttp.responseText;
                //alert(xmlhttp.responseText);
            }
        }
        xmlhttp.open("GET",strUrl,true);
        xmlhttp.send();
    }
</script> 
<script type="text/javaScript">
function moveToRightOrLeft(side){
var listLeft=document.getElementById('show_test_name_left');
var listRight=document.getElementById('selectRight');

if(side==1){
if(listLeft.options.length==0){
alert('You have already moved all to Right');
return false;
}else{
var selectedComplain=listLeft.options.selectedIndex;

move(listRight,listLeft.options[selectedComplain].value,listLeft.options[selectedComplain].text);
listLeft.remove(selectedComplain);

if(listLeft.options.length>0){
listLeft.options[0].selected=true;
}
}
}else if(side==2){
if(listRight.options.length==0){
alert('You have already moved all  to Left');
return false;
}else{
var selectedComplain=listRight.options.selectedIndex;

move(listLeft,listRight.options[selectedComplain].value,listRight.options[selectedComplain].text);
listRight.remove(selectedComplain);

if(listRight.options.length>0){
listRight.options[0].selected=true;
}
}
}
}

function move(listBoxTo,optionValue,optionDisplayText){
var newOption = document.createElement("option");
newOption.value = optionValue;
newOption.text = optionDisplayText;
listBoxTo.add(newOption, null);
return true;
}
</script>

<script type="text/javaScript">

// pathological test advice select. info
function moveToRightOrLeft_path(side){
var listLeft=document.getElementById('show_test_name');
var listRight=document.getElementById('select_right');

if(side==1){
if(listLeft.options.length==0){
alert('You have already moved all to Right');
return false;
}else{
var selectedComplain=listLeft.options.selectedIndex;

move(listRight,listLeft.options[selectedComplain].value,listLeft.options[selectedComplain].text);
listLeft.remove(selectedComplain);

if(listLeft.options.length>0){
listLeft.options[0].selected=true;
}
}
}else if(side==2){
if(listRight.options.length==0){
alert('You have already moved all  to Left');
return false;
}else{
var selectedComplain=listRight.options.selectedIndex;

move(listLeft,listRight.options[selectedComplain].value,listRight.options[selectedComplain].text);
listRight.remove(selectedComplain);

if(listRight.options.length>0){
listRight.options[0].selected=true;
}
}
}
}

function move(listBoxTo,optionValue,optionDisplayText){
var newOption = document.createElement("option");
newOption.value = optionValue;
newOption.text = optionDisplayText;
listBoxTo.add(newOption, null);
return true;
}
</script>



<script>
//onclick retrive delivery date
function test_groupinfo(str)
{
var strUrl = "<?php echo base_url(); ?>data_record/test_group_wise_test_name.html?path_test_group_id=" + str;
//alert(str);
var xmlhttp;
if (str == "")
{
document.getElementById("show_test_name_left").innerHTML = "";
return;
}
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp = new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function()
{
if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
{
document.getElementById("show_test_name_left").innerHTML = xmlhttp.responseText;
//alert(xmlhttp.responseText);
}
}
xmlhttp.open("GET", strUrl, true);
xmlhttp.send();
}
</script>

<!--/path Advice modal-->
<form name="userinfo" id="userinfo" method="post" action="<?php echo base_url();?>data_record/save_prescription_ajax_table_by_investigation.html">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Advice</h4>
      </div>
      <div class="modal-body">
          <div class="alert alert-success">
              
              
          
  <div class="row">
      
      <div class="col-md-6">
          <div class="form-group has-success">
             
      <label>Test Group</label>
<select name="path_test_group_id" id="path_test_group_id" class="form-control" onChange="test_groupinfo(this.value);">
<option selected="selected">Select Group Group</option>
<?php
foreach ($path_groupName as $compalinInfo) {
?>
<option value="<?php echo $compalinInfo->path_test_group_id; ?>"> <?php echo $compalinInfo->path_test_group_name; ?> </option>
<?php } ?>
</select>
      </div>
           <input type="hidden" name="current_date" value="<?php echo date("Y-m-d");?>">
Test

<select name="test_info_[]" size="15" class="jon font" id="show_test_name_left" style="width: 265px;">


</select>
<style type="text/css">
.jon {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #006633;
}
</style>
<br><br>
<input class="btn btn-default" name="btnRight" type="button" id="btnRight" value="Add" onClick="javaScript:moveToRightOrLeft(1);">
<input class="btn btn-default" name="btnLeft" type="button" id="btnLeft" value="Minus" onClick="javaScript:moveToRightOrLeft(2);">
 <br> <br>
     
      </div>
  
       <div class="col-md-4">
          
  <label>Select Test Name (Ctrl+Click)</label>
   <input type="submit" class="btn btn-primary" name="submit" onClick="return next_step_msg();" value="Add Prescription"  />
    
  <br>
  <br>
  
<select name="test_name[]" multiple="true" size="15" class="jon font_two" id="selectRight" style="width: 250px;">
</select> 
          
          
      </div>
      
      
      </div>
              </div>
      </div>
   
    </div>
  </div>
</div>
    </form>