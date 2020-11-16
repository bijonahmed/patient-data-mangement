<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
<link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
        <script src="<?php echo base_url(); ?>resource/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url();?>resource/js/jquery-ui.js"></script>

        <script src="<?php echo base_url(); ?>resource/Context.js-master/context.js"></script>
        <script src="<?php echo base_url(); ?>resource/Context.js-master/demo.js"></script>

        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.standalone.css" rel="stylesheet">
    <!-- Bootstrap -->
<script src="<?php echo base_url(); ?>data_table/js/jquery.js"></script>
<script language="javascript" src="<?php echo base_url();?>resource/modal.popup.js"></script>
       <script>
  $(document).ready(function() {

		//Change these values to style your modal popup
		var align = 'center';									//Valid values; left, right, center
		var top = 40; 											//Use an integer (in pixels)
		var width = 900; 										//Use an integer (in pixels)
		var padding = 10;										//Use an integer (in pixels)
		var backgroundColor = '#FFFFFF'; 						//Use any hex code
		var source = '<?php echo base_url();?>data_record/preview_date_wise_statment_print'; 								//Refer to any page on your server, external pages are not valid e.g. http://www.google.co.uk
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
 <script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>
<script>
 $(document).ready(function() {
$(".btnPrint").printPage({
url: "<?php echo base_url(); ?>data_record/preview_date_wise_statment_print.html",
attr: "href",
message:"Your document is being created Print"
});
});
</script>

  </head>
  <body>


<body>  <br><br><br><br>
    <div class="container">
        
        <div class="row">
            <div class="col-md-1">
                
                
                
            </div>
             <div class="col-md-12">
               
<div class="form-group has-success">
    <div align="right">
<button type="button" class="btn btn-default" onclick="javascript:printDiv('printablediv')"><i class="icon-print"></i> <span class="glyphicon glyphicon-zoom-in"></span> Printing</button>

<?php
/*
<a href="<?php echo base_url();?>data_record/pdf_all_comorbidity_info"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-book"></span> PDF</button>
    </a>
 *  <button type="button" class="btn btn-success" id="btnExport"><span class="glyphicon glyphicon-stats"></span> Excel</button>

 */

?>

   



    </div>
    <div id="printablediv" style=" width: 1000px; background-color: none; height: auto">
    <div align="center">
        <strong>Cytogenetic Statement<BR><font color="red"></font> </strong>
       From <?php echo $date_from;?> To <?php echo $date_to;?>
        <br>
    
     
    </div>
        <div id="dvData">
            
             <?php
$x=1;
foreach($cytogenetic_rpt_searching as $data) {
?>

 <hr>
 <strong><font color="#000000">Patient ID: <?php  $length=strlen($data->manual_pid); 
        $part1=substr_replace("$data->manual_pid","/",2);
        //$part2=substr_replace("$data->manual_pid","",$length-2);
        $part2=substr("$data->manual_pid",2);
        $manual_pid=$part1.$part2;
    echo $manual_pid;?></strong><br>
<strong>Patient Name: <?php echo $data->patient_name;?></strong>
Age: <strong><?php echo $data->age;?></strong>
Sex : <strong><?php echo $data->sex;?></strong>, Date : <strong><?php echo $data->reciv_date;?></strong>

 <hr>
 <font color="white">
        <?php
        $message = $this->session->userdata('save_messages');
        //echo $message;
        if (isset($message)) {
            echo $message;
            $this->session->unset_userdata('save_messages');
        }
        ?>
        </font> 
 <table border="0" align="center" cellpadding="0" cellspacing="0" class="table" id="example_">
<thead>
<tr>
<th width="32">SL NO</th>
<th width="150"><div align="left">Test Name</div></th>

<th width="66">Result</th>

 
</tr>
</thead>
<tbody>


<tr>
<td><?php echo $x;?></td>

<td><?php echo $data->cytogenetic_test_name;?></td>


<td><?php echo $data->result;?> </td>

</tr>
</tbody>
</table>
 
 <br>


 <p>
 </p>
 <table width="880" align="center" cellpadding="0" cellspacing="0">
   <tr>
     <th width="171" scope="row">&nbsp;</th>
     <th width="323" scope="row">&nbsp;</th>
     <td width="384">&nbsp;</td>
   </tr>
   <tr>
     <th scope="row"><hr style="width:150px;"></th>
     <th height="4" scope="row">&nbsp;</th>
     <td><hr style="width:150px;"></td>
   </tr>
 </table>
        
           <?php 
 $x++;

}?> 
  
            </div>
    </div>
        </div> 
         
         
     </div> 
                
                
            </div>
             <div class="col-md-1">
                
                
                
            </div>
            
        </div>
    </div>
    
    
    
</body>
<script>
$("#btnExport").click(function(e) {
    window.open('data:application/vnd.ms-excel,' + encodeURIComponent($('#dvData').html()));
    e.preventDefault();
}) 
    </script>
