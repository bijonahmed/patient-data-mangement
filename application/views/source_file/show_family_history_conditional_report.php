<!DOCTYPE html>
<html lang="en">
     <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>data_table/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>resource/data_table/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url(); ?>resource/data_table/js/DT_bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>resource/data_table/js/bootstrap-dataTables-paging.js"></script>
        <script src="<?php echo base_url(); ?>resource/data_table/js/bootstrap-dataTables.js"></script>
        
        <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
        <script src="<?php echo base_url(); ?>resource/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url();?>resource/js/jquery-ui.js"></script>

        <script src="<?php echo base_url(); ?>resource/Context.js-master/context.js"></script>
        <script src="<?php echo base_url(); ?>resource/Context.js-master/demo.js"></script>

        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.standalone.css" rel="stylesheet">

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
    </head>
    <body>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->


        <!-- Include all compiled plugins (below), or include individual files as needed -->



    <body>  <br><br><br>
        <div class="container">
            <center><button type="button" class="btn btn-success" onclick="javascript:printDiv('printablediv')"><i class="icon-print"></i> <span class="glyphicon glyphicon-zoom-in"></span> Printing</button>
            <button type="button" class="btn btn-success" id="btnExport"><span class="glyphicon glyphicon-stats"></span>&nbsp;Excel</button>
            

            <div align="center">
        <strong>List OF Family History<font color="red"></font> </strong>
        <br>From <?php echo $date_from;?> To <?php echo $date_to;?>
       
     
    </div>
            <div class="row">
                <div class="col-md-1">



                </div>
                <div class="col-md-10">

                    <div class="form-group has-success">
                        <br><br>
                        <div id="printablediv" style="width: 100%; background-color: none; height: auto">
                            <div id="dvData">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="example_">

                            <thead>
                                <tr class="success">
                                     <th width="10">Manual P.ID</th>
                                    <th width="10">Patient Name</th>
                                    <th width="10">Age</th>
                                    <th width="10">Sex</th>
                                    <th width="20">Date</th>
                                 
                                     <th width="50">History Type</th>




                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($family_history as $data) {
                                    ?>

                                    <tr class="">
                                         <td><?php $length=strlen($data->manual_pid); 
        $part1=substr_replace("$data->manual_pid","/",2);
        //$part2=substr_replace("$data->manual_pid","",$length-2);
        $part2=substr("$data->manual_pid",2);
        $manual_pid=$part1.$part2;
    echo $manual_pid;?></span></td>
                                        <td><?php echo $data->patient_name; ?></span></td>
                                        <td><?php echo $data->age; ?></span></td>
                                         <td><?php echo $data->sex; ?></span></td>
                                        <td><?php echo $data->current_date; ?></span></td>
                                     
                                           <td><?php echo $data->familyhistory_value; ?></span></td>






                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
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
        function sure()
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
$("#btnExport").click(function(e) {
    window.open('data:application/vnd.ms-excel,' + encodeURIComponent($('#dvData').html()));
    e.preventDefault();
}) 
    </script>