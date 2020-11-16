<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
   
      
        <script src="<?php echo base_url(); ?>admin_panel/js/bootstrap.js"></script>
       <link href="<?php echo base_url();?>resource/css/jquery-ui.css" rel="stylesheet">
     
       <script src="<?php echo base_url(); ?>resource/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url();?>resource/js/jquery-ui.js"></script>
    
        <script src="<?php echo base_url(); ?>admin_panel/js/bootstrap.js"></script>
        <script language="javascript" src="<?php echo base_url();?>resource/modal.popup.js"></script>
        <script language="javascript" src="<?php echo base_url();?>resource/jquery.printPage.js"></script>

        
        <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
        <script src="<?php echo base_url(); ?>resource/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url();?>resource/js/jquery-ui.js"></script>

        <script src="<?php echo base_url(); ?>resource/Context.js-master/context.js"></script>
        <script src="<?php echo base_url(); ?>resource/Context.js-master/demo.js"></script>

        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.standalone.css" rel="stylesheet">

    <br><br>
    <script>
  $(document).ready(function() {

		//Change these values to style your modal popup
		var align = 'center';									//Valid values; left, right, center
		var top = 40; 											//Use an integer (in pixels)
		var width = 900; 										//Use an integer (in pixels)
		var padding = 10;										//Use an integer (in pixels)
		var backgroundColor = '#FFFFFF'; 						//Use any hex code
		var source = '<?php echo base_url();?>data_record/revist_print_preview_prescription'; 								//Refer to any page on your server, external pages are not valid e.g. http://www.google.co.uk
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
     <style>
    .ui-autocomplete {
            max-height: 400px;
            overflow-y: auto;
            /* prevent horizontal scrollbar */
            overflow-x: hidden;
            /* add padding to account for vertical scrollbar */
            padding-right: 20px;
    }
    /* IE 6 doesn't support max-height
     * we use height instead, but this forces the menu to always be this tall
     */
    * html .ui-autocomplete {
        height: 100px;
    }
</style> 
    <script>
            $(function() {
<?php
foreach ($auto_complete_investigatino as $row):
    $auto_complete_investigatino[] = $row->test_name;
endforeach;

echo "var javascript_array =" . json_encode($auto_complete_investigatino);
?>

                $( "#test_name" ).autocomplete({
                    source: javascript_array
                });

            });
        </script>
     <div class="">
     
         <div id="dvData">
             
             
         <div id="printablediv" style="width: 100%; height: auto">
           
       <div class="">
           <center> <h3>Edit Prescription</h3></center>
           <hr>
  <div class="col-md-2 alert alert-info">
 
   <strong><u>Presenting Complaint</u></strong>
  <?php
  if(isset($presentingComplaint)){
   foreach ($presentingComplaint as $data) {   
      
  

?>

   <a target="_blank" data-toggle="tooltip" data-placement="left" title="Please Update Presenting Complaint" style="text-decoration: none;"href="<?php echo base_url();?>welcome/patient_prescription_by_update/<?php  
      if($this->session->userdata('patient_id')!=NULL)
   {
      
       echo $this->session->userdata('patient_id');  
   }  
   if($this->session->userdata('visiting_no')!=NULL){
   echo 'VisitNo'.$this->session->userdata('visiting_no');}
   ?>">
  <option value="<?php echo $data->complain_name; ?>"> <?php echo $data->complain_name; ?> </option>
    </a>
<?php } }?>
<br>
 <strong><u>Comorbidity</u></strong>
  <?php
  if(isset($comorbidityInformation)){
  
foreach ($comorbidityInformation as $data) {
?>
 
  
       <a target="_blank" data-toggle="tooltip" data-placement="left" title="Please Update Comorbidity" 
          style="text-decoration: none;"href="<?php echo base_url();?>welcome/comorbidity_by_update/<?php  
   if($this->session->userdata('patient_id')!=NULL)
   {
       echo $data->patient_id;  
   }  else {
        echo $data->manual_pid;
   }
            echo 'VisitNo'.$data->visiting_no;?>">
<option value="<?php echo $data->comorbidity_name; ?>"> <?php echo $data->comorbidity_name; ?> </option>
    </a>
 
 

  <?php } }?><br>
    <strong><u>Personal History</u></strong>
  <?php
   
  if(isset($personalhistory)){
foreach ($personalhistory as $data) {
?>
    
   
       <a target="_blank" data-toggle="tooltip" data-placement="left" title="Please Update Personal History" style="text-decoration: none;"href="<?php echo base_url();?>welcome/personalhistory_by_update/<?php  
   if($this->session->userdata('patient_id')!=NULL)
   {
       echo $data->patient_id;  
   }  else {
        echo $data->manual_pid;
   }
            echo 'VisitNo'.$data->visiting_no;?>">
<option value="<?php echo $data->personal_history_name; ?>"> <?php echo $data->personal_history_name; ?> </option>
    </a>
    

  <?php }} ?>  
<br>
<strong><u>Family History</u></strong><br>

 <?php
  if(isset($familyhistory)){
foreach ($familyhistory as $data) {
?>
    
   
       <a target="_blank" data-toggle="tooltip" data-placement="left" title="Please Update Personal History" style="text-decoration: none;"href="<?php echo base_url();?>welcome/familyhistory_by_update/<?php  
   if($this->session->userdata('patient_id')!=NULL)
   {
       echo $data->patient_id;  
   }  else {
        echo $data->manual_pid;
   }
            echo 'VisitNo'.$data->visiting_no;?>">
<option value="<?php echo $data->nothing_contributory; ?>"> <?php echo $data->nothing_contributory; ?> </option>
    </a>
    

  <?php } } ?>  


<?php
/*
 * 
  <?php
   
  if(isset($familyhistory)){
foreach ($familyhistory as $data) {
?>

<a target="_blank" data-toggle="tooltip" data-placement="left" title="Please Update Family History" style="text-decoration: none;"href="<?php echo base_url();?>welcome/familyhistory_by_update/<?php  
   if($this->session->userdata('patient_id')!=Null)
   {
       echo $data->patient_id;  
   }  elseif($this->session->userdata('manual_pid')!=Null) {
        echo $data->manual_pid;
   }
            echo 'VisitNo'.$data->visiting_no;
            
  }}
            ?>">
  <option value="<?php echo $data->nothing_contributory; ?>"> <?php echo $data->nothing_contributory; ?> </option>

    </a>
 */
?>

<?php 
/*
<a class="link" href="<?php echo base_url();?>data_record/delete_familyhistory_by_prescription_by_update/<?php echo $familyhistory->family_history_id;?>" onClick="return delete_data();" style="text-decoration:none"  data-toggle="tooltip" data-placement="left" title="Delete Family History Name" ><span class="glyphicon glyphicon-trash"></span></a>
 * 
 */


?>

<br>
<strong><u>Physical Findings</u></strong><br>
<?php
/*
  <?php
   
  if(isset($physicalfindings)){
foreach ($physicalfindings as $data) {
?>

    <a target="_blank" data-toggle="tooltip" data-placement="left" title="Please Update Physical Findings" style="text-decoration: none;"href="<?php echo base_url();?>welcome/physicalfindings_by_update/<?php  
   if($this->session->userdata('patient_id')!=NULL)
   {
       echo $data->patient_id;  
   }  else {
        echo $data->manual_pid;
   }
            echo 'VisitNo'.$data->visiting_no;?>">
        Height: <?php echo $data->height;?><br>
        Weight: <?php echo $data->weight;?><br>
        BSA: <?php echo $data->bsa;?><br>
    </a>

  <?php }} ?>  
 */
        


?>
 <?php
   
 
//foreach ($physicalfindings as $data) {
?>

    <a target="_blank" data-toggle="tooltip" data-placement="left" title="Please Update Physical Findings" style="text-decoration: none;"href="<?php echo base_url();?>welcome/physicalfindings_by_update_view/<?php  
  
    if($this->session->userdata('patient_id')!=NULL)
   {
      
       echo $this->session->userdata('patient_id');  
   }  
   if($this->session->userdata('visiting_no')!=NULL){
   echo 'VisitNo'.$this->session->userdata('visiting_no');}
   ?>">
        
      <?php if(isset($physicalfindings))
        {
            echo $physicalfindings->height;
        }
            
            
            
        
        ?><br>
        <?php if(isset($physicalfindings))
        {
             echo $physicalfindings->weight;
        }   
        ?><br>
        <?php if(isset($physicalfindings)) 
        {
          echo  $physicalfindings->bsa;
        }
    ?><br>
    </a>

  <?php  
  
//}
   ?>  
<br>

 <?php
   
  if(isset($physicalfindings_value_name)){
foreach ($physicalfindings_value_name as $data) {
?>

    <a target="_blank" data-toggle="tooltip" data-placement="left" title="Please Update Physical Findings Name" style="text-decoration: none;"href="<?php echo base_url();?>welcome/physicalfindings_by_update/<?php  
    if($this->session->userdata('patient_id')!=NULL)
   {
      
       echo $this->session->userdata('patient_id');  
   }  
   if($this->session->userdata('visiting_no')!=NULL){
   echo 'VisitNo'.$this->session->userdata('visiting_no');}
   ?>">
        <?php echo $data->phy_fin_value;?><br>
      
    </a>

  <?php }
  
 }
   ?>  
<strong><u>Diagnosis</u></strong><br>

  <?php
   
  if(isset($diagnosisinfo)){
foreach ($diagnosisinfo as $data) {
?>

    <a target="_blank" data-toggle="tooltip" data-placement="left" title="Please Update Diagnosis" style="text-decoration: none;"href="<?php echo base_url();?>welcome/diagnostic_by_update/<?php  
    if($this->session->userdata('patient_id')!=NULL)
   {
      
       echo $this->session->userdata('patient_id');  
   }  
   if($this->session->userdata('visiting_no')!=NULL){
   echo 'VisitNo'.$this->session->userdata('visiting_no');}
   ?>">
        Diagnosis Name: <?php echo $data->customized_diagnosis_category_name	;?><br>
       
    </a>

  <?php }} ?>  
     
 
<?php 
/*
<a class="link" href="<?php echo base_url();?>data_record/delete_familyhistory_by_prescription_by_update/<?php echo $familyhistory->family_history_id;?>" onClick="return delete_data();" style="text-decoration:none"  data-toggle="tooltip" data-placement="left" title="Delete Family History Name" ><span class="glyphicon glyphicon-trash"></span></a>
 * 
 */


?>
  
                          <table cellpadding="0" cellspacing="0" border="0" class="" id="example_">

<thead>
<tr class="">
<th width="200"><u>Investigation</u></th>
 
</tr>
</thead>
<tbody>
   <?php
if(isset($investigationinfo))
 foreach($investigationinfo as $data) {
?>

<tr class="">
    <td><?php echo $data->test_name;?></span></td>
 
</td>
<td>
<a class="link" href="<?php echo base_url();?>data_record/delete_investigation_by_prescription_by_update/<?php echo $data->investigation_id;?>" onClick="return delete_data();" style="text-decoration:none"  data-toggle="tooltip" data-placement="left" title="Delete Investigation Name" ><span class="glyphicon glyphicon-trash"></span></a>
 
</td>
</tr>
<?php }?>
</tbody>
</table> 
  </div>
  <div class="col-md-9 alert alert-success">
     &nbsp;&nbsp;&nbsp;
 <strong><?php 
 if($patient_information==NULL)
{
    echo '';
}  else {
    
    
$length=strlen($patient_information->manual_pid); 
    $part1=substr_replace("$patient_information->manual_pid","/",2);
    //$part2=substr_replace("$data->manual_pid","",$length-2);
    $part2=substr("$patient_information->manual_pid",2);
    $manual_pid=$part1.$part2;
echo $manual_pid;

    //  echo 'PT. ID: '.$patient_information->manual_pid;
}
             
                    ?></strong>
Patient Name:
                <?php
             
               if($patient_information==NULL)
{
    echo '';
}  else {
      echo ' '.$patient_information->patient_name;
}  
                
                ?>
                Age: <?php
               if($patient_information==NULL)
{
    echo '';
}  else {
      echo 'Age: '.$patient_information->age;
}  
                ?>
                <?php
               if($patient_information==NULL)
{
    echo '';
}  else {
      echo 'Sex: '.$patient_information->sex;
}  
                ?>
   <?php
               if($prescriptoin_data_visitingNo==NULL)
{
    echo '';
}  else {
      echo 'Visit No: '.$prescriptoin_data_visitingNo->visiting_no;
}  
                ?>
                     <strong>[<?php
               if($prescriptoin_data_visitingNo==NULL)
{
    echo '';
}  else {
      echo 'Date: '.$prescriptoin_data_visitingNo->current_date;
}  
                ?>]</strong>
                <br> <br>
                <div class="form-group has-success">
              <div class="">
             <form name="userinfo" method="post" action="<?php echo base_url();?>data_record/revisit_advice.html">

<div class="row">
    <div class="col-md-4">

       <select name="add_advice_id" class="form-control" id="add_advice_id">
 <option value="">--- Advice ---</option>
<?php
foreach ($patientadviceInfo as $data) {
?>
<option value="<?php echo $data->add_advice_id; ?>"> <?php echo $data->patient_advice_name; ?> </option>
<?php } ?>
</select> 
 </div>
     <div class="col-md-8">
    <button class="btn btn-default" id="" onClick="return save_()"><span class="glyphicon glyphicon-plus"></span></button>  
    <?php
    /*
    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Investigation</button>
     */
    ?>
    <?php
/*
     <button type="button" class="btn btn-warning btn bijon" ><i class="icon-zoom-in"></i> <span class="glyphicon glyphicon-zoom-in"></span> Preview</button>
<button type="button" class="btn btn-danger btn btnPrint"><i class="icon-print"></i> <span class="glyphicon glyphicon-print"></span>  Printing </button>
 
 * 
 */
?>  
    
    
    <button class="btn btn-success" data-toggle="modal" data-target="#drugModal"><span class="glyphicon glyphicon-plus"></span> Add Drug</button>
              <button class="btn btn-info" data-toggle="modal" data-target="#adviceModal"><span class="glyphicon glyphicon-plus"></span> Add Advice</button>
            
              
         
    </div>
</div>
</form>
                                                  <form name="prescription" id="mymodal" method="post" action="<?php echo base_url();?>data_record/revisit_investigation_by_precription.html">
                              <div class="row">
                                  <div class="col-md-4">
                                      <br>
                                      <input type="text" name="test_name" class="form-control" placeholder="Investigation Name" required="1" autofocus="" id="test_name">
                                     
                                  </div>
       <div class="col-md-5">
           <br>
           <button class="btn btn-danger" id="" onClick="return save_()"><span class="glyphicon glyphicon-plus"></span> &nbsp;Add Investigation</button>    
                                  </div>
    
   </div>
      </form>
                  <small>  
                      <br>
          
                      
 <form name="userinfo" method="post" action="<?php echo base_url();?>data_record/revisit_drug.html">
       <table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">
           
<thead>
<tr>
<th>Dose</th>
<th>Drug</th>
<th>Schedule</th>
 
<th>Day</th>
<th>Suggestion</th>
<th>Action</th>
</tr>
</thead>
<tbody>


<tr>
    <td><select name="dose_id" class="form-control" id="dose_id"  onchange="brand_name_presctiption_info(this.value);">

<option selected="selected">Select</option>
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
 <option value="">--- Select ---</option>
<?php
foreach ($scheduleInfo as $schedule) {
?>
<option value="<?php echo $schedule->dose_schedule_id; ?>"> <?php echo $schedule->dose_schedule; ?> </option>
<?php } ?>
</select></td>
 

<td><input type="text" name="day" class="form-control" id="day" style="width: 50px;"></td>
<td><select name="doseSuggestion_id" class="form-control" id="doseSuggestion_id" style="width:auto;">
 <option value="">--- Select ---</option>
<?php
foreach ($suggestion as $suggestion) {
?>
<option value="<?php echo $suggestion->doseSuggestion_id; ?>"> <?php echo $suggestion->dose_suggestion; ?> </option>
<?php } ?>
</select></td>
<td><button class="btn btn-primary" id="" onClick="return add_prescription_info()"><span class="glyphicon glyphicon-edit"></span> Add Drug</button></td>



</tr>

</tbody>

</table>
     <input type="hidden" name="date" value="<?php echo date("Y-m-d");?>">

    
     
     </form> 
                 
   <table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">

<thead>
<tr>
<th>SL NO</th>
<th>Dose Type</th>
<th>Drug & Strength</th>

<th>Schedule</th>
 
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




if(isset($prescriptoin_data))
foreach($prescriptoin_data as $pres) {
?>

<tr>
<td><?php echo $x;?></td>
<td><?php echo $pres->dose_type;?></td>
<td><?php echo $pres->brand_name;?></td>


<td><?php echo $pres->dose_schedule;?></td>
 
<td><?php echo $pres->dose_suggestion;?></td>
<td><?php echo $pres->day;?> </td>
<td>
     
 
    
    
    
     <a class="" href="<?php echo base_url();?>data_record/drug_delete_drug_name/<?php echo $pres->prescription_id;?>" onClick="return delete_data();" style="text-decoration:none"><i class="icon-trash icon-black"></i>&nbsp;Delete</a>


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
                          </small>  
               
   <small> 
<table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">

<thead>
<tr>
<th width="75">SL NO</th>
<th width="725">Advice Name</th>

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
if(isset($adviceInformation))
foreach($adviceInformation as $pres) {
?>

<tr>
<td><?php echo $x;?></td>
<td><?php echo $pres->patient_advice_name;?></td>

<td>
     

<a class="" href="<?php echo base_url();?>data_record/delete_patientadviceInfo_name_update/<?php echo $pres->patient_advice_id;?>" onClick="return delete_data();" style="text-decoration:none"><i class="icon-trash icon-black"></i>&nbsp;Delete</a>
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
               
</small>
       
          </div>
                    
                    </div>
             
            
          
  </div>
  
</div>
             </div>
 </div>  
    

    
    
    
     </div>
    </div>
    
    
    
   

</div>
</div>
 <!--/Add New Drug modal--> 
      <form name="drug" method="post" action="<?php echo base_url(); ?>data_record/save_new_drug_name_prescription_by_revisit.html">
  <div class="modal fade" id="drugModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Add Drug</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-2">
                        
                    </div>
                  <div class="col-md-8">

                      <div class="">
               
                              Dose Type<div class="form-group has-success">
                                  <select name="dose_id" id="select" required="1" class="form-control">

                                      <?php
                                      foreach ($dosetype as $data) {
                                          ?>
                                          <option value="<?php echo $data->dose_id; ?>"> <?php echo $data->dose_type; ?> </option>
                                      <?php } ?>
                                  </select>
                                  
                              Brand Name<div class="form-group has-success">
                                  <input type="text" class="form-control" name="brand_name" id="brand_name" required="1" ><br>
                                      
                                      </div>
                             
                                <center> <button class="btn btn-info" onClick="return save()"><span class="glyphicon glyphicon-save"></span>
                                              Save</button>
                                         
                                      </center>
 </div>
                                  </div>
 </div>   

                  </div>
                  


                          </div>


                      </div>

                  </div>
                 

              </div>
    

          </form>
      
      
      
         <!--/Add New Advice modal--> 
      <form name="advice" method="post" action="<?php echo base_url(); ?>data_record/save_patient_advice_info_by_pp_update.html">
  <div class="modal fade" id="adviceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Add Advice</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-2">
                        
                    </div>
                  <div class="col-md-8">

 <div class="alert alert-info">
 
                            Add Advice Name <div class="form-group has-success">
                                <label class="control-label" for="inputSuccess1"></label>
                                <input type="text" class="form-control" name="patient_advice_name" id="patient_advice_name"required="1" ><br>
                                <center> <button class="btn btn-info" onClick="return save()"><span class="glyphicon glyphicon-save"></span>
                                        Save&nbsp;&nbsp;</button>
  
                                </center>

                            </div>
              
     
     
     
                
 </div>
                                  </div>
 </div>   

                  </div>
                  


                          </div>


                      </div>

                  </div>
                 

              </div>
    

          </form>
</body> 

 
<!--/path Advice modal-->
<form name="prescription" id="mymodal" method="post" action="<?php echo base_url();?>data_record/save_prescription_ajax_table_by_investigation_revisit.html">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Investigation</h4>
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