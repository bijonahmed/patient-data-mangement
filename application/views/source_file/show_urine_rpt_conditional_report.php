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
             <div class="col-md-10">
               
<div class="form-group has-success">
    <div align="right">
<button type="button" class="btn btn-default" onclick="javascript:printDiv('printablediv')"><i class="icon-print"></i> <span class="glyphicon glyphicon-zoom-in"></span> Printing</button>

<?php
/*
<a href="<?php echo base_url();?>data_record/pdf_all_comorbidity_info"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-book"></span> PDF</button>
    </a>
 * <button type="button" class="btn btn-success" id="btnExport"><span class="glyphicon glyphicon-stats"></span> Excel</button>

 */

?>

    

    </div>
    <div id="printablediv" style="width: 100%; background-color: none; height: auto">
    <div align="center">
        <strong>Urine Report Statement<BR><font color="red"></font> </strong>
       From <?php echo $date_from;?> To <?php echo $date_to;?>
        <br>
        <br>
     
    </div>
        <div id="dvData">
     
            
            
               <?php
$x=1;
foreach($urine_rpt_searching as $data) {
?>

 
 <br>
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
     

 
 <br>
 

                                                <strong><u>URINE REPORT</u></strong><br>

                                    Reporting Date: <?php echo $data->reciv_date; ?>
                                    <br>

                                    <?php
                                    if ($data->quantity != Null) {
                                        ?>                           
                                        Quantity :<?php echo $data->quantity; ?>,<br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->sediment != Null) {
                                        ?>
                                        Sediment : <?php echo $data->sediment; ?> <br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->color != Null) {
                                        ?>
                                        Colour : <?php echo $data->color; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->spe_grav != Null) {
                                        ?>
                                        Specific  Gravity : <?php echo $data->spe_grav; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->apper != Null) {
                                        ?>
                                        Appearance : <?php echo $data->apper; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->reaction != Null) {
                                        ?>
                                        Reaction : <?php echo $data->reaction; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->acetone != Null) {
                                        ?>
                                        Acetone : <?php echo $data->acetone; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->ex_ph != Null) {
                                        ?>
                                        Excess of Phos. : <?php echo $data->ex_ph; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->bile_salt != Null) {
                                        ?>
                                        Bile Salt : <?php echo $data->bile_salt; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->albumin != Null) {
                                        ?>
                                        Albumin : <?php echo $data->albumin; ?><br>
                              <?php
            }
            ?>
                                        <?php
                                    if ($data->bile_pig != Null) {
                                        ?>
                                        Bile pigment : <?php echo $data->bile_pig; ?><br>
                                        <?php
                                    }
                                    ?>
                              <?php
            if ($data->sugur != Null) {
                ?>
                                        Sugar : <?php echo $data->sugur; ?><br>
                                        <?php
                                    }
                                    ?>
                              <?php
            if ($data->urobili != Null) {
                ?>
                                        Urobilinogen : <?php echo $data->urobili; ?> <br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->others != Null) {
                                        ?>
                                        Others : <?php echo $data->others; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->chyle != Null) {
                                        ?>
                                        Chyle : <?php echo $data->chyle; ?> <br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->ep_cell != Null) {
                                        ?>
                                        Epithelial cell : <?php echo $data->ep_cell; ?> <br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->cal_oxa != Null) {
                                        ?>
                                        Calcium Oxalate  :<?php echo $data->cal_oxa; ?> <br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->pus_cells != Null) {
                                        ?>
                                        Pus Cells :<?php echo $data->pus_cells; ?><br>

                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->uric_acid != Null) {
                                        ?>
                                        Uric Acid Crystals : <?php echo $data->uric_acid; ?> <br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->rbcs != Null) {
                                        ?>
                                        RBCs : <?php echo $data->rbcs; ?>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->urate_crys != Null) {
                                        ?>
                                        Urate Crystals : <?php echo $data->urate_crys; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->mucus != Null) {
                                        ?>
                                        Mucus : <?php echo $data->mucus; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->amr_ph != Null) {
                                        ?>
                                        Amorph. Phosphate : <?php echo $data->amr_ph; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->pus_cast != Null) {
                                        ?>
                                        Pus Casts : <?php echo $data->pus_cast; ?> <br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->tre_phs != Null) {
                                        ?>
                                        Triple Phosphate : <?php echo $data->tre_phs; ?> <br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->sperat != Null) {
                                        ?>
                                        Spermatozoa :  <?php echo $data->sperat; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->candida != Null) {
                                        ?>
                                        Candida : <?php echo $data->candida; ?> <br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->wbc != Null) {
                                        ?>
                                        WBC Cast : <?php echo $data->wbc; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->hayline_cast != Null) {
                                        ?>
                                        Hyaline Cast :<?php echo $data->hayline_cast; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->granuloar != Null) {
                                        ?>
                                        Granular Cast: <?php echo $data->granuloar; ?><br>
                                        <?php
                                    }
                                    ?>
                                        <?php
                                    if ($data->bacteria != Null) {
                                        ?>
                                        Bacteria: <?php echo $data->bacteria; ?><br>
                                        <?php
                                    }

                                    ?>

                                    
  
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
