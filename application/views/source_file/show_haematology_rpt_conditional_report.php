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
 * 
    <button type="button" class="btn btn-default" id="btnExport"><span class="glyphicon glyphicon-stats"></span> Excel</button>

 */

?>


    </div>
    <div id="printablediv" style="width: 100%; background-color: none; height: auto">
    <div align="center">
        <strong>Haematology Report<BR><font color="red"></font> </strong>
        <br>From <?php echo $date_from;?> To <?php echo $date_to;?>
        <br>
       
     
    </div>
        <div id="dvData">
                 
  <?php
$x=1;
foreach($haematology_rpt_searching as $data) {
?>
    
 <br>
 
 <div style="height:600">
   
 <div align="center" class="style58"><span class="style125"></span><br>

 </div>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Patient ID: <?php  $length=strlen($data->manual_pid); 
        $part1=substr_replace("$data->manual_pid","/",2);
        //$part2=substr_replace("$data->manual_pid","",$length-2);
        $part2=substr("$data->manual_pid",2);
        $manual_pid=$part1.$part2;
    echo $manual_pid;?></strong><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Patient Name: <?php echo $data->patient_name;?></strong>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age: <strong><?php echo $data->age;?></strong>
Sex : <strong><?php echo $data->sex;?></strong>, Date : <strong><?php echo date("d-m-Y",  strtotime($data->reciv_date));?></strong>
     
<br><br><br>
 


                            <!--Haematology Report-->
                            <strong><u>Haematology Report</u></strong><br>
                            <?php
    $x = 1; {
        ?>                  
        

                                                <?php
                                                if ($data->hb != Null) {
                                                    ?>
                                            Hb%  <?php echo $data->hb; ?> <br>
                                                    <?php
                                                }
                                                ?>

                                                    <?php
                                                if ($data->esr != Null) {
                                                    ?>
                                            ESR   :<?php echo $data->esr; ?> <br>
                              <?php
                }
                ?>

                              <?php
                if ($data->rbc != Null) {
                    ?>
                                            Red Blood Cell :<?php echo $data->rbc; ?><br>
                                                        <?php
                                                    }
                                                    ?>

                                                        <?php
                                                    if ($data->platelete != Null) {
                                                        ?>
                                            Platelete Count:<?php echo $data->platelete; ?><br>
                              <?php
                }
                ?>
                                            <?php
                                        if ($data->wbc != Null) {
                                            ?>
                                            WBC:<?php echo $data->wbc; ?><br>
                                            <?php
                                        }
                                        ?>
                              <?php
                if ($data->ce != Null) {
                    ?>
                                            TCE: <?php echo $data->ce; ?> <br>
                                            <?php
                                        }
                                        ?>
                                            <?php
                                        if ($data->neutrophils != Null) {
                                            ?>
                                            Neutrophil:<?php echo $data->neutrophils; ?><br>
                                            <?php
                                        }
                                        ?>
                                            <?php
                                        if ($data->lymphocytes != Null) {
                                            ?>
                                            Lymphocytes:<?php echo $data->lymphocytes; ?><br>
                                            <?php
                                        }
                                        ?>
                                            <?php
                                        if ($data->monocytes != Null) {
                                            ?>
                                            Monocytes:<?php echo $data->monocytes; ?> <br>
                                            <?php
                                        }
                                        ?>
                                            <?php
                                        if ($data->eosinophils != Null) {
                                            ?>
                                            Eosinophil:<?php echo $data->eosinophils; ?><br>
                                            <?php
                                        }
                                        ?>
                                            <?php
                                        if ($data->basophil != Null) {
                                            ?>
                                            Basophil:<?php echo $data->basophil; ?><br>
                                            <?php
                                        }
                                        ?>
                                              <?php
                                        if ($data->para_one_rpt != Null) {
                                            ?>
                                            
                                        Blast:<?php echo $data->parameter_one; ?> <?php echo $data->para_one_rpt; ?><br>
                                           <?php
                                        }
                                        ?>
                                        <?php
                                        if ($data->para_two_rpt != Null) {
                                            ?>
                                            Myeloblast:<?php echo $data->parameter_two; ?> <?php echo $data->para_two_rpt; ?> <br>
                                            <?php
                                        }
                                        ?>
                                            <?php
                                        if ($data->para_three_rpt != Null) {
                                            ?>
                                            Atypical cells: <?php echo $data->parameter_three; ?> <?php echo $data->para_three_rpt; ?><br>

                                            <?php
                                        }
                                        ?>   
                                            <?php
                                        if ($data->hct != Null) {
                                            ?>
                                            HCT/PCV: <?php echo $data->hct; ?> <br>
                                            <?php
                                        }
                                        ?>   
                                            <?php
                                        if ($data->mcv != Null) {
                                            ?>
                                            MCV:<?php echo $data->mcv; ?><br>
                                            <?php
                                        }
                                        ?>   
                                            <?php
                                        if ($data->mch != Null) {
                                            ?>
                                            MCH:<?php echo $data->mch; ?><br>
                                            <?php
                                        }
                                        ?>  
                                            <?php
                                        if ($data->mchc != Null) {
                                            ?>
                                            MCHC:<?php echo $data->mchc; ?> <br>
                                            <?php
                                        }
                                        ?> 
                                            <?php
                                        if ($data->rdw != Null) {
                                            ?>
                                            RDW:<?php echo $data->rdw; ?><br>
                                            <?php
                                        }
                                        ?>
                                            <?php
                                        if ($data->bt_min != Null) {
                                            ?>
                                            BT :  <?php echo $data->bt_min; ?><br>
                                            <?php
                                        }
                                        ?> 
                                            <?php
                                        if ($data->ct_min != Null) {
                                            ?>
                                            CT :<?php echo $data->ct_min; ?> <br>
                                            <?php
                                        }
                                        ?>
                                            <?php
                                        if ($data->mp != Null) {
                                            ?>
                                            Malarial Parasite : <?php echo $data->mp; ?><br>
                                            <?php
                                        }
                                        ?>
                                            <?php
                                        if ($data->pbf != Null) {
                                            ?>
                                            PBF:   <?php echo $data->pbf; ?><br>
                                            <?php
                                        }
                                        ?>
                                            <?php
                                        $x++;

    }
                              

                            ?>
          
                                            <hr>
                             
 
 <?php
}

 ?>
  
                
                
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
