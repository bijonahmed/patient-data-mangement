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
            <div class="box-shadow alert alert-info">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong><i class="icon-edit icon-black"></i>&nbsp;Patient Information</strong>



                <strong><?php
                    $patient_id = $this->session->userdata('patient_id');
                    if (isset($patient_id))

// foreach($patientComplain as $valueComplain){
                        echo "Patient Id: " . $patient_id . ', ';
                    ?></strong>


                Patient Name:
                <?php
                $patient_name = $this->session->userdata('patient_name');
                if (isset($patient_name))

// foreach($patientComplain as $valueComplain){
                    echo $patient_name . ', ';
                ?>
                Age: <?php
                $age = $this->session->userdata('age');
                if (isset($age))

// foreach($patientComplain as $valueComplain){
                    echo $age;
                ?>
                Sex: <?php
                $sex = $this->session->userdata('sex');
                if (isset($sex))

// foreach($patientComplain as $valueComplain){
                    echo $sex;
                //phsycalfindings
                ?>




            </div>
            <div class="form-group has-success">
           
          <!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class=""><a href="#presentingComplaint" data-toggle="tab">Presenting Complaints</a></li>
  <li class=""><a href="#Comorbidity" data-toggle="tab">Comorbidity</a></li>
  <li class=""><a href="#PersonalHistory" data-toggle="tab">Personal History</a></li>
  <li class=""><a href="#familyhistory" data-toggle="tab"> Family History</a></li>
   <li class=""><a href="#phsycalfindings" data-toggle="tab">Phys. Finds.</a></li>
    <li class="active"><a href="#home" data-toggle="tab">Diagnosis</a></li>
<li><a href="#test" data-toggle="tab">Investigation</a></li>
  <li><a href="<?php echo base_url();?>welcome/my_prescription.html" data-toggle="_tab">[Prescription]</a></li>
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
<form name="myform" method="post" action="<?php echo base_url(); ?>data_record/update_patieint_history_info_by_diagnosis.html">
        <div class="row">
 
            <div class="col-md-5">

<div class="form-group has-success">

<textarea class="jqte-test_ form-control" name="diagnosis" placeholder=""><?php echo $diangosisinfo->diagnosis;?></textarea>
 
<input type="hidden" name="current_date" value="<?php echo date("Y-m-d"); ?>">
<input type="hidden" name="diagnosis_id" value="<?php echo $diangosisinfo->diagnosis_id;?>">
<br>
<center><button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Update Diagnosis</button></center>
                    </div>

 

            </div>

 
     


</form> 
        <div class="col-md-5">
 
        </div>
        
           </div>
    </div>

<div class="tab-pane" id="phsycalfindings">

                        <div class="row">
                            <div class="col-md-10">
                                <div class="">



                                    <div class="form-group has-success">

                                        <!-- Tab panes -->
                                        <form name="myform" method="post" action="<?php echo base_url(); ?>data_record/save_patieint_history_info_by_physical_findings.html">

                                            <div class="tab-content">
                                                <div class="tab-pane active" id="home">

                                                    <div class="row">
                                                        <br>
                                                        Physical Findings  <font color="#FF0000">
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
                                                                    <input type="text" class="form-control" name="height" placeholder="Height">
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    <input type="text" class="form-control" name="weight" placeholder="Weight">
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    <input type="text" class="form-control" name="presasure" placeholder="Preasure">
                                                                </div>

                                                                <div class="col-xs-2">
                                                                    <input type="text" class="form-control" name="general_examination" placeholder="General Examination">
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    <input type="text" class="form-control" name="systemic_examination" placeholder="Systemic Examination">
                                                                </div>
                                                                <div class="col-xs-2">
                                                                   <center><button class="btn btn-primary" onClick="return save()"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Add</button></center> 
                                                                </div>
                                                                 <input type="hidden" name="current_date" value="<?php echo date("Y-m-d"); ?>">
                                                            </div>



                                                           
                                                        
                                                            
                                                        </div>




                                                    </div>



                                                </div>


                                            </div>


                                        </form> 
<table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">
<thead>
<tr>
<th>SL NO</th>
<th>Height</th>
<th>Weight</th>
<th>Prasure</th>
<th>Generic Ex.</th>
<th>Syste. Ex.</th>
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
<td><?php echo $data->presasure;?> </td>
<td><?php echo $data->general_examination;?> </td>
<td><?php echo $data->systemic_examination;?> </td>

<td>
<a class="" href="<?php echo base_url();?>data_record/delete_physicalFindingsName/<?php echo $data->physical_examination_id;?>" onClick="return delete_data();" style="text-decoration:none"><i class="icon-trash icon-black"></i>&nbsp;Delete</a>
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

             </div>
           
          
          </div>
      
      
      
  </div>

   <div class="tab-pane" id="PersonalHistory">
<table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">

                            <thead>
                                <tr>
                                    <th>Personal History</th>
                                    <th></th>
                                    <th>Duration</th>
                                    <th>Timing</th>
                                </tr>
                            </thead>
                            <tbody>


                                <tr>
                                    <td><select name="personal_id" class="form-control" id="cc_name_id">

                                            <option value="">--- Select ---</option>
                                            <option value="">None</option>
                                            <?php
                                            foreach ($view_personalhistoryInfo as $data) {
                                                ?>
                                                <option value="<?php echo $data->personal_id; ?>"> <?php echo $data->personal_history_name; ?> </option>
                                            <?php } ?>
                                        </select></td>
                                    <td>
 <a class="tooltips" data-toggle="modal" data-target="#add_new_personalhistory" href="#"><div class="btn-group"><div class="fontstyle">+</div></div>
<span>Please Click here</span></a>
                                        <!-- -->
                                    </td>
                                    <td><select name="personal_history_duration" class="form-control" id="complaint_duration" style="width:auto;">
                                            <option value="">--- Select ---</option>

                                            <?php
                                            for ($i = 1; $i <= 100; $i++) {
                                                ?>

                                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
<?php
}
?>
                                        </select></td>
                                    <td>
                                        <select name="personal_history_timing" class="form-control" id="complaint_timing" style="width:auto;">
                                            <option value="">--- Select ---</option>
                                            <option>Day</option>
                                            <option>Weak</option>
                                            <option>Month</option>
                                            <option>Years</option>


                                        </select>

                                    </td>
                                    <td><button class="btn btn-primary" id="" onClick="return add_prescription_info()"><span class="glyphicon glyphicon-pencil"></span> Add Per. History</button></td>
                                    <td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Extra History</button></td>



                                </tr>
                            </tbody>
                        </table>
                        <table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">
                            <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Personal History Name</th>
                                    <th>Duration</th>
                                    <th>Timing</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
<?php
$x = 1;
{
?>
                                    <?php
                                    $patient_id = $this->session->userdata('patient_id');
                                    if (isset($patient_id)) {





                                        foreach ($patient_history_info as $data) {
                                            ?>

                                            <tr>
                                                <td><?php echo $x; ?></td>
                                                <td><?php echo $data->personal_history_name; ?></td>
                                                <td><?php echo $data->personal_history_duration; ?> </td>
                                                <td><?php echo $data->personal_history_timing; ?> </td>
                                                <td>


                                                    <a class="" href="<?php echo base_url(); ?>data_record/delete_personalHistoryName/<?php echo $data->personal_histor_id; ?>" onClick="return delete_data();" style="text-decoration:none"><i class="icon-trash icon-black"></i>&nbsp;Delete</a>
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
                        <input type="hidden" name="current_date" value="<?php echo date("Y-m-d"); ?>">
      
  </div>
  <style>
        .fontsize
        {
            font-size: 19px;
        }
    </style>
     <div class="tab-pane fontsize" id="test">
        <font size="">
        <br>
        <a href="<?php echo base_url();?>welcome/haematology.html" style="text-decoration:none" target="_blank">
            <span class="label label-danger" data-toggle="tooltip" data-placement="left" title="Please Record <?php
                $patient_name = $this->session->userdata('patient_name');
                if (isset($patient_name))

// foreach($patientComplain as $valueComplain){
                    echo $patient_name . ', ';
                ?> Previous Haematological Report"><span class="glyphicon glyphicon-plus"></span>&nbsp;Haematology</span>
        </a>
        <a href="<?php echo base_url();?>welcome/biochemistry_report.html" target="_blank" style="text-decoration:none">
            <span class="label label-danger" data-toggle="tooltip" data-placement="left" title="Please Record <?php
                $patient_name = $this->session->userdata('patient_name');
                if (isset($patient_name))

// foreach($patientComplain as $valueComplain){
                    echo $patient_name . ', ';
                ?> Previous Multiple Report"><span class="glyphicon glyphicon-plus"></span>&nbsp;Multiple Report</span>
        </a>
         
        <a href="<?php echo base_url();?>welcome/urine_report.html" target="_blank" style="text-decoration:none">
            <span class="label label-danger" data-toggle="tooltip" data-placement="left" title="Please Record <?php
                $patient_name = $this->session->userdata('patient_name');
                if (isset($patient_name))

// foreach($patientComplain as $valueComplain){
                    echo $patient_name . ', ';
                ?> Previous Urine Report"><span class="glyphicon glyphicon-plus"></span>&nbsp;Urine</span>
        </a>
        
        <a href="<?php echo base_url();?>welcome/stool_report.html" target="_blank" style="text-decoration:none">
            <span class="label label-danger" data-toggle="tooltip" data-placement="left" title="Please Record <?php
                $patient_name = $this->session->userdata('patient_name');
                if (isset($patient_name))

// foreach($patientComplain as $valueComplain){
                    echo $patient_name . ', ';
                ?> Previous Stool Report"><span class="glyphicon glyphicon-plus"></span>&nbsp;Stool</span>
        </a>
        <a href="<?php echo base_url();?>welcome/radiology_report.html" target="_blank" style="text-decoration:none">
            <span class="label label-danger" data-toggle="tooltip" data-placement="left" title="Please Record <?php
                $patient_name = $this->session->userdata('patient_name');
                if (isset($patient_name))

// foreach($patientComplain as $valueComplain){
                    echo $patient_name . ', ';
                ?> Previous Radiology Report"><span class="glyphicon glyphicon-plus"></span>&nbsp;Radiology</span>
        </a>
        <a href="<?php echo base_url();?>welcome/usg_report.html" target="_blank" style="text-decoration:none">
            <span class="label label-danger" data-toggle="tooltip" data-placement="left" title="Please Record <?php
                $patient_name = $this->session->userdata('patient_name');
                if (isset($patient_name))

// foreach($patientComplain as $valueComplain){
                    echo $patient_name . ', ';
                ?> Previous USG Report"><span class="glyphicon glyphicon-plus"></span>&nbsp;USG</span>
        </a>
        
           <a href="<?php echo base_url();?>welcome/bone_marrow.html" target="_blank" style="text-decoration:none">
            <span class="label label-danger" data-toggle="tooltip" data-placement="left" title="Please Record <?php
                $patient_name = $this->session->userdata('patient_name');
                if (isset($patient_name))

// foreach($patientComplain as $valueComplain){
                    echo $patient_name . ', ';
                ?> Previous Bone Marrow Report"><span class="glyphicon glyphicon-plus"></span>&nbsp;Bone Marrow</span>
        </a>

<br><br>
</font>
      
  </div>
     <div class="tab-pane" id="familyhistory">
      <div class="row">
         <div class="col-md-10">
         <div class="">
             <br>

            
                 <div class="form-group has-success">

              <!-- Tab panes -->
<form name="myform" method="post" action="<?php echo base_url(); ?>data_record/save_patieint_history_info_by_familyhistory.html">
  
<div class="tab-content">
    <div class="tab-pane active" id="home">
        <br>
        <div class="row">
            <div class="col-md-2">Family History</div> 
            <div class="col-md-4">
               
              
   

<div class="form-group has-success">
<select name="familyhistory" class="form-control" id="familyhistory" onchange="if (this.selectedIndex==2){this.form['other'].style.visibility='visible'}else {this.form['other'].style.visibility='hidden'};">

<option value="" selected="selected">Select...</option>
<option value="1">Nothing Contributory</option>
<option value="other">Present</option>

</select>
    <br>    
     <textarea class="form-control" rows="3" name="other" style="visibility:hidden;"></textarea>
     <br>
<input type="hidden" name="current_date" value="<?php echo date("Y-m-d"); ?>">

<center><button class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>
Add</button></center>
                    </div>

 

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
      <div class="tab-pane" id="Comorbidity">
        <br>
 <form name="step_one" method="post" action="<?php echo base_url(); ?>data_record/save_patieint_history_info_by_comorbidity.html">
      <table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">

<thead>
<tr>
<th>Comorbidity List</th>
<th></th>
<th>Duration</th>
<th>Timing</th>
</tr>
</thead>
<tbody>


<tr>
    <td><select name="comorbidity_id" class="form-control" id="cc_name_id">

<option value="">--- Select ---</option>
<option value="">None</option>
<?php
foreach ($view_comorbidityInfo as $data) {
?>
<option value="<?php echo $data->comorbidity_id; ?>"> <?php echo $data->comorbidity_name; ?> </option>
<?php } ?>
</select></td>
<td>
     <a class="tooltips" data-toggle="modal" data-target="#add_new_comorbidity" href="#"><div class="btn-group"><div class="fontstyle">+</div></div>
<span>Please Click here</span></a>
<!-- -->
  </td>
 <td><select name="comorbidity_duration" class="form-control" id="complaint_duration" style="width:auto;">
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
    <select name="comorbidity_timing" class="form-control" id="complaint_timing" style="width:auto;">
        <option value="">--- Select ---</option>
        <option>Day</option>
        <option>Weak</option>
        <option>Month</option>
        <option>Years</option>
        
        
</select>
    
</td>
<td><button class="btn btn-primary" id="" onClick="return add_prescription_info()"><span class="glyphicon glyphicon-pencil"></span> Add Comorbidity</button></td>
<td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Comorbidity</button></td>


</tr>
</tbody>
</table>
<table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">
<thead>
<tr>
<th>SL NO</th>
<th>Comorbidity Name</th>
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
$patient_id=$this->session->userdata('patient_id');
if(isset($patient_id)) {





foreach($comorbidityinfo as $data) {
?>

<tr>
<td><?php echo $x;?></td>
<td><?php echo $data->comorbidity_name;?></td>
<td><?php echo $data->comorbidity_duration;?> </td>
<td><?php echo $data->comorbidity_timing;?> </td>
<td>
     

    <a class="" href="<?php echo base_url();?>data_record/delete_ComorbidityName/<?php echo $data->comoribdity_info_id;?>" onClick="return delete_data();" style="text-decoration:none"><i class="icon-trash icon-black"></i>&nbsp;Delete</a>
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
 </form>
  </div>
     <div class="tab-pane" id="presentingComplaint">

         <form name="step_one" method="post" action="<?php echo base_url(); ?>data_record/save_patieint_history_info_by_prescription.html">
                       <div class="form-group has-success">


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
        <option>Weak</option>
        <option>Month</option>
        <option>Years</option>
        
        
</select>
    
</td>
<td><button class="btn btn-primary" id="" onClick="return add_prescription_info()"><span class="glyphicon glyphicon-pencil"></span> Add Complaint</button></td>
<td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Complaint</button></td>
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
$patient_id=$this->session->userdata('patient_id');
if(isset($patient_id)) {





foreach($chiefComplaint as $data) {
?>

<tr>
<td><?php echo $x;?></td>
<td><?php echo $data->complain_name;?></td>
<td><?php echo $data->complaint_duration;?> </td>
<td><?php echo $data->complaint_timing;?> </td>
<td>
     

    <a class="" href="<?php echo base_url();?>data_record/delete_complaintName/<?php echo $data->cc_name_id;?>" onClick="return delete_data();" style="text-decoration:none"><i class="icon-trash icon-black"></i>&nbsp;Delete</a>
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
</form> 

</div>
      
  </div>
    
    
</div>
</div>
            </form>
                
                </div>
        </div>
  
</body> 

 
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