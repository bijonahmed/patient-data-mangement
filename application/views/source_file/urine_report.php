<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Haematology Report</title>

<link rel="stylesheet" href="<?php echo base_url()?>resource/css/jquery-ui.css" />
 <script src="<?php echo base_url();?>data_table/js/jquery.js"></script>
<script src="<?php echo base_url();?>resource/js/jquery-ui.js"></script>

<script src="<?php echo base_url(); ?>data_table/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>resource/prescription/data_table/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>resource/prescription/data_table/js/DT_bootstrap.js"></script>
<script src="<?php echo base_url(); ?>resource/prescription/data_table/js/bootstrap-dataTables-paging.js"></script>
<script src="<?php echo base_url(); ?>resource/prescription/data_table/js/bootstrap-dataTables.js"></script>

<link href="<?php echo base_url();?>resource/css/jquery-ui.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
<script src="<?php echo base_url();?>resource/js/jquery-ui.js"></script>
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
		var source = '<?php echo base_url();?>welcome/print_preview_urinere'; 								//Refer to any page on your server, external pages are not valid e.g. http://www.google.co.uk
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
            <style>
    .fontstyleing{
        font-size: 19px;
        
    }
</style>
  <style>
    .fontstyleing{
        font-size: 25px;
        
    }
</style>
    </head>
    <br><br><br>


    <body>
    
        
 <div class="container">
      <div class="">
  


            </div>

     <div class="container">
                <center><div class="fontstyleing"><u>Urine Report</u></div></center>
        
             <form name="haematology" method="post" action="<?php echo base_url(); ?>data_record/save_urine_reporting.html">
             <div class="form-group has-success">
                <div class="">

                    <div class="row" style="" >
                     
                        <div class="col-xs-2">
                            
                            <input type="text" name="reciv_date" data-date-format="dd-mm-yyyy" class="form-control" id="reciv_date" placeholder="Please Enter Date" required="1">
                        </div>
                        
                        <div class="col-sm-1 inline">
                              <label>Display</label>
                            
                        </div>
                        
                        <div class="col-sm-2 inline">
                             
                        <select name="display" class="form-control" id="complaint_timing" style="width:auto;">
                                                          
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            
                                                        </select>
                            
                        </div>
                        
                    </div>
                    <br>
                </div>
                 
                    <div class="row" >

                    <div class="container">
                      PHYSICAL EXAMINATION    <font color="#FF0000">
        <?php
        $message = $this->session->userdata('save_messages');
        //echo $message;
        if (isset($message)) {
            echo $message;
            $this->session->unset_userdata('save_messages');
        }
        ?>
        </font> 
                        <div class="form-group has-success">

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="col-xs-2">
                                        Quantity
                                        <input type="text" name="quantity" class="form-control" placeholder="Quantity" value="">
                                    </div>
                                    <div class="col-xs-2">
                                        Color
                                        <input type="text" name="color" class="form-control" placeholder="Colour" value="">
                                    </div>
                                   
                                    <div class="col-xs-2">
                                      Appearance  <input type="text" name="apper" class="form-control" placeholder="Appearance" value="">
                                    </div>
                                    <div class="col-xs-2">
                                        Sediment
                                        <input type="text" name="sediment" class="form-control" placeholder="Sediment" value="">
                                    </div>
                                    <div class="col-xs-2">
                                        Spec.Grav.
                                        <input type="text" name="spe_grav" class="form-control" placeholder="Spec.Grav."  value="">
                                    </div>
                                 
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        CHEMICAL EXAMINATION
                        <div class="form-group has-success">

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="col-xs-2">
                                        Reaction
                                        <input type="text" name="reaction" class="form-control" placeholder="Reaction" value="">
                                    </div>
                                    <div class="col-xs-2">
                                        Ex. Ph.
                                        <input type="text" name="ex_ph" class="form-control" placeholder="Ex. Ph." value="">
                                    </div>
                                    <div class="col-xs-2">
                                        Albumin
                                        <input type="text" name="albumin" class="form-control" placeholder="Albumin"  value="">
                                    </div>
                                    <div class="col-xs-2">
                                        Sugar
                                        <input type="text" name="sugur" class="form-control" placeholder="Sugar" value="">
                                    </div>
                                    <div class="col-xs-2">
                                        Others
                                        <input type="text" name="others" class="form-control" placeholder="Others" value="">
                                    </div> <br> <br>
<br>
                                    <div class="col-xs-2">
                                 Acetone
                                        <input type="text" name="acetone" class="form-control" placeholder="Acetone" value="">
                                    </div>

                                    <div class="col-xs-2">
                                    BileSalt
                                        <input type="text" name="bile_salt" class="form-control" placeholder="BileSalt" value="">
                                    </div>

                                    <div class="col-xs-2">
                                        pig
                                        <input type="text" name="bile_pig" class="form-control" placeholder="Bile pig." value="">
                                    </div>

                                    <div class="col-xs-2">
                                        Urobili
                                        <input type="text" name="urobili" class="form-control" placeholder="Urobili." value="">
                                    </div>
                                    <div class="col-xs-2">
                                        Chyle
                                        <input type="text" name="chyle" class="form-control" placeholder="Chyle" value="">
                                    </div>

                                    <div class="col-xs-2">
                                        B.Jons Protein
                                        <input type="text" name="b_jons_protein" class="form-control" placeholder="B.Jons Protein" value="">
                                    </div>
                                    
                                    <br>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-md-12">
                        MICROSCOPIC EXAMINATION
                        <div class="form-group has-success">

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="col-xs-2">
                                        Epi. Cell
                                        <input type="text" name="ep_cell" class="form-control" placeholder="Epi. Cell" value="">
                                    </div>
                                    <div class="col-xs-2">
                                        Pus cells
                                        <input type="text" name="pus_cells" class="form-control" placeholder="Pus cells" value="">
                                    </div>
                                    <div class="col-xs-2">
                                        RBCs
                                        <input type="text" name="rbcs" class="form-control" placeholder="RBCs" value="">
                                    </div>
                                    <div class="col-xs-2">
                                        Mucus
                                        <input type="text" name="mucus" class="form-control" placeholder="Mucus" value="">
                                    </div>
                                    <div class="col-xs-2">
                                        Pus Cust
                                        <input type="text" name="pus_cast" class="form-control" placeholder="Pus Cust" value="">
                                    </div>
                                   
                                
                                    <div class="col-xs-2">
                                        Sperto
                                        <input type="text" name="sperat" class="form-control" placeholder="Sperto." value="">
                                    </div>
                                    <br><br>
                                    <div class="col-xs-2">
                                        WBCcast
                                        <input type="text" name="wbc" class="form-control" placeholder="WBCcast" value="">
                                    </div>
                                    <div class="col-xs-2">
                                        Granu.Cast
                                        <input type="text" name="granuloar" class="form-control" placeholder="Granu.Cast" value="">
                                    </div>
                                    <div class="col-xs-2">
                                        Cal.Oxa.
                                        <input type="text" name="cal_oxa" class="form-control" placeholder="Cal.Oxa." value="">
                                    </div>
                                    <div class="col-xs-2">
                                        U.A.Cry
                                        <input type="text" name="uric_acid" class="form-control" placeholder="U.A.Cry" value="">
                                    </div>
                                    <div class="col-xs-2">
                                        Tre.Phs
                                        <input type="text" name="tre_phs" class="form-control" placeholder="Tre.Phs" value="">
                                    </div>
                                    <div class="col-xs-2">
                                        Sulph.Cry
                                        <input type="text" name="sulph_cry" class="form-control" placeholder="Sulph.Cry" value="">
                                    </div>
                                    <br><br>
                                    <div class="col-xs-2">
                                        HaylineCast
                                        <input type="text" name="hayline_cast" class="form-control" placeholder="HaylineCast " value="">
                                    </div>
                                    <div class="col-xs-2">
                                        Bacteria
                                        <input type="text" name="bacteria" class="form-control" placeholder="Bacteria" value="">
                                    </div>
                                    <div class="col-xs-2">
                                        Candida
                                        <input type="text" name="candida" class="form-control" placeholder="Candida" value="">
                                    </div>
                                    <div class="col-xs-2">
                                        Amor.Ph
                                        <input type="text" name="amr_ph" class="form-control" placeholder="Amor.Ph" value="">
                                    </div>
                                    <div class="col-xs-2">
                                        Urate Crystals
                                        <input type="text" name="urate_crys" class="form-control" placeholder="Urate Crystals" value="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                 <center>
                     <button class="btn btn-primary"onClick="return save()"><span class="glyphicon glyphicon-saved"></span>&nbsp;Save</button>
<?php
/*
<button type="button" class="btn btn-success btn bijon" ><i class="icon-zoom-in"></i> <span class="glyphicon glyphicon-zoom-in"></span> Preview</button>
<button type="button" class="btn btn-info btn btnPrint"><i class="icon-print"></i> <span class="glyphicon glyphicon-print"></span>  Printing</button>

 */

?>    
    <a href="link" data-toggle="modal" data-target="#search_urine" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp;Extra Urine</a>

<a href="link" data-toggle="modal" data-target="#search" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>&nbsp;Search</a>
             <a href="<?php echo base_url();?>welcome/cancel_haematology.html">
        <button type="button" class="btn btn-danger"><i class="icon-print"></i> CLOSE</button>
    </a>
     
     <!-- extra urine Modal -->
<div class="modal fade bs-example-modal-lg" id="search_urine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Customized Urine Report</h4>
      </div>
      <div class="modal-body">
       
    <div class="">
               
<div class="form-group has-success">
    
   
         <textarea class="form-control" cols="5" rows="3" name="extra_urine" placeholder="Input your extra parameter"></textarea>
         
         
     </div> 
                
                
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
           </center>

             </form>
</div>
                 </div>



     
     

<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="search" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Search</h4>
      </div>
      <div class="modal-body">
       
    <div class="">
               
<div class="form-group has-success">
    
    <br>
         <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">

<thead>
<tr class="">
<th width="200">Patient ID</th>
 
<th width="200">Date</th>

<th>Action</th>
</tr>
</thead>
<tbody>
   <?php

foreach($urine_re_data as $data) {
?>

<tr class="">
    <td><?php  
    $length=strlen($data->manual_pid); 
        $part1=substr_replace("$data->manual_pid","/",2);
        //$part2=substr_replace("$data->manual_pid","",$length-2);
        $part2=substr("$data->manual_pid",2);
        $manual_pid=$part1.$part2;
    echo $manual_pid;?></span></td>

          <td><?php echo date("d-m-Y",strtotime($data->reciv_date));?></span></td>

<td>
<a class="link" href="<?php echo base_url();?>data_record/edit_form_urine_re/<?php echo $data->urine_id;?>" onClick="return save();" style="text-decoration:none"><span class="glyphicon glyphicon-edit"></span> Edit</a>
<?php
/*
<a class="link" href="<?php echo base_url();?>data_record/delete_haematology_report_name/<?php echo $data->haematology_id;?>" onClick="return save();" style="text-decoration:none"><span class="glyphicon glyphicon-trash"></span> Delete</a>

 */

?>


</td>
</td>
</tr>
<?php }?>
</tbody>
</table>
         
         
         
     </div> 
                
                
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
</div>
 <script>
    function save_()
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