<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Biochemistry Report</title>


<link rel="stylesheet" href="<?php echo base_url()?>resource/css/jquery-ui.css" />
 <script src="<?php echo base_url();?>data_table/js/jquery.js"></script>
<script src="<?php echo base_url();?>resource/js/jquery-ui.js"></script>
<link href="<?php echo base_url();?>resource/css/jquery-ui.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
     
<script language="javascript" src="<?php echo base_url();?>resource/modal.popup.js"></script>
<script language="javascript" src="<?php echo base_url();?>resource/jquery.printPage.js"></script>
        <script>
            $(document).ready(function() {
                $("#patient_id").focus();
                $(":focus").css("background-color", "white");
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
		var source = '<?php echo base_url();?>welcome/print_preview_multireport'; 								//Refer to any page on your server, external pages are not valid e.g. http://www.google.co.uk
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
url: "<?php echo base_url(); ?>welcome/print_preview_urinere.html",
attr: "href",
message:"Your document is being created Print"
});
});
</script>
        <style> 
            .borderdiv
            {
                background-color: blue;
                border-radius: 39px;
            }
        </style>

    </head>
    <br><br><br>


    <body>
    
        
 <div class="container">
      <div class="">
          <?php
          /*
           <center><small>
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
                ?>
 <font color="#FF0000">
        <?php
        $message = $this->session->userdata('save_messages');
        //echo $message;
        if (isset($message)) {
            echo $message;
            $this->session->unset_userdata('save_messages');
        }
        ?>
        </font> 
</small>
          </center>
           * 
           */
          
          
          ?>
    


            </div>
    
     <div class="container">
           <div align="right">
         <form name="cancel" action="<?php echo base_url();?>welcome/cancel_haematology" method="post" <?php
                $patient_name = $this->session->userdata('patient_name');
                if (isset($patient_name))

// foreach($patientComplain as $valueComplain){
                    echo $patient_name . ', ';
                ?> Back">
           
             <button class="btn btn-danger"><span class="glyphicon glyphicon-th-list"></span>&nbsp;Cancel</button>
        </form>
         <br>
     </div>
             <form name="multiple report" method="post" action="<?php echo base_url(); ?>data_record/save_multiple_reporting.html">
             <div class="form-group has-success">
                <div class="">

  
<div class="row" style="" >
    <div class="col-xs-2">
        <input type="text" name="test_id" class="form-control"id="patient_id" placeholder="Test ID" value="<?php $testid=$this->session->userdata('test_id'); 
        if(isset($testid)){
            echo $testid;
        }
        ?>">
        

    </div>
    <div class="col-xs-2">

        <input type="text" name="reciv_date" data-date-format="dd-mm-yyyy" class="form-control" id="reciv_date" placeholder="Reci.Date" value="<?php $recdata=$this->session->userdata('reciv_date'); 
        if(isset($recdata)){
            echo $recdata;
        }
        ?>">
    </div>
    <div class="col-xs-2">
        <input type="text" name="deli_date" data-date-format="dd-mm-yyyy"class="form-control" id="deli_date" placeholder="Deli.Date" value="<?php $delidata=$this->session->userdata('deli_date'); 
        if(isset($delidata)){
            echo $delidata;
        }
        ?>">
    </div>
    <div class="col-xs-3">
        <input type="text" name="patient_name" class="form-control" placeholder="Patient Name" value="<?php $ptname=$this->session->userdata('patient_name'); 
        if(isset($ptname)){
            echo $ptname;
        }
        ?>">
    </div>
    <div class="col-xs-1">
        <input type="text" name="age" class="form-control" placeholder="Age" value="<?php $age=$this->session->userdata('age'); 
        if(isset($age)){
            echo $age;
        }
        ?>">
   
    </div>
                        <div class="col-xs-1">
                            <select name="sex" class="form-control" id="complaint_duration" style="width:auto;">
                                <option value="<?php $sex=$this->session->userdata('sex'); 
        if(isset($sex)){
            echo $sex;
        }
        ?>">--- Select ---</option>


                                <option>Male</option>

                                <option>Female</option>
                            </select>

                        </div>
                        <br><br>
                        <div class="col-xs-6">
                            <input type="text" name="ref_by" class="form-control" placeholder="Ref. by Doctor Name" value="<?php $ref_by=$this->session->userdata('ref_by'); 
        if(isset($ref_by)){
            echo $ref_by;
        }
        ?>">
                        </div>
                        <div class="col-xs-5">
                            <input type="text" name="hospital_name" class="form-control" placeholder="Hospital Clinic" style="width: 510px;" value="<?php $hospital_name=$this->session->userdata('hospital_name'); 
        if(isset($hospital_name)){
            echo $hospital_name;
        }
        ?>">
                        </div>
                    </div>
                    <br>
                </div>
                 
                    <div class="row" >

                    <div class="container">
  
                        <div class="form-group has-success">

                            <div class="row">
<div class="">
                                    <div class="col-xs-3">
<select name="path_test_id" class="form-control" id="path_test_id" onChange="unit_info(this.value);show_normal_range(this.value);">

<option value="">--- Select ---</option>
<option value="">None</option>
<?php
foreach ($bichemistrydata as $data) {
?>
<option value="<?php echo $data->path_test_id; ?>"> <?php echo $data->test_name; ?> </option>
<?php } ?>
</select>
                                    </div>
        <div class="col-xs-1">
            <input type="text" name="result" id="result" class="form-control" placeholder="Result">
        </div>
                                   
<div class="col-xs-2">
   
      <select name="unit"  class="form-control" id="unit" required="1">
    <option></option>
</select>
</div>
<div class="col-xs-2">
<select name="normal_range" class="form-control" id="normal_range">
<option value=" "></option>

</select>
</div>
        <div class="col-xs-4">
        <button class="btn btn-primary" onClick="return save_()"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Add report</button>
      
         <button type="button" class="btn btn-success btn bijon" ><i class="icon-zoom-in"></i> <span class="glyphicon glyphicon-zoom-in"></span> Preview</button>
        <button type="button" class="btn btn-info btn btnPrint"><i class="icon-print"></i> <span class="glyphicon glyphicon-print"></span>  Printing</button>
       
        
        
         </div>
       </form>
                                </div>
                            </div>
                        </div>
                    </div>


                   
                </div>
<table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">
<thead>
<tr>
<th>SL NO</th>
<th>Test Name</th>
<th>Result</th>
<th>Unit</th>
<th>Normal Range</th>
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





foreach($multiplereport as $data) {
?>

<tr>
<td><?php echo $x;?></td>
<td><?php echo $data->test_name;?></td>
<td><?php echo $data->result;?> </td>
<td><?php echo $data->unit;?> </td>
<td><?php echo $data->normal_range;?> </td>
<td>
     

    <a class="" href="<?php echo base_url();?>data_record/delete_multiple_report/<?php echo $data->multiple_report_id;?>" onClick="return save();" style="text-decoration:none"><i class="icon-trash icon-black"></i>&nbsp;Delete</a>
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
          <script>
    //onclick retrive delivery date
    function unit_info(str)
    {
        var  strUrl="<?php echo base_url(); ?>data_record/test_wise_unit.html?path_test_id="+str;
        //alert(str);
        var xmlhttp;    
        if (str=="")
        {
            document.getElementById("unit").innerHTML="";
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
                document.getElementById("unit").innerHTML=xmlhttp.responseText;
                //alert(xmlhttp.responseText);
            }
        }
        xmlhttp.open("GET",strUrl,true);
        xmlhttp.send();
    }
</script> 


 <script>
    //onclick retrive delivery date
    function show_normal_range(str)
    {
        var  strUrl="<?php echo base_url(); ?>data_record/test_wise_normal_range.html?path_test_id="+str;
        //alert(str);
        var xmlhttp;    
        if (str=="")
        {
            document.getElementById("normal_range").innerHTML="";
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
                document.getElementById("normal_range").innerHTML=xmlhttp.responseText;
                //alert(xmlhttp.responseText);
            }
        }
        xmlhttp.open("GET",strUrl,true);
        xmlhttp.send();
    }
</script> 
 <script>
    function save()
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
<script type="text/javascript">
    $('#reciv_date').datepicker()
</script>

<script type="text/javascript">
    $('#deli_date').datepicker()
</script>      
