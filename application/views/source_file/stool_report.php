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
                var source = '<?php echo base_url(); ?>welcome/print_preview_stoolre'; 								//Refer to any page on your server, external pages are not valid e.g. http://www.google.co.uk
                var borderColor = '#333333'; 							//Use any hex code
                var borderWeight = 4; 									//Use an integer (in pixels)
                var borderRadius = 5; 									//Use an integer (in pixels)
                var fadeOutTime = 300; 									//Use any integer, 0 = no fade
                var disableColor = '#666666'; 							//Use any hex code
                var disableOpacity = 40; 								//Valid range 0-100
                var loadingImage = '<?php echo base_url(); ?>resource/loading.gif';		//Use relative path from this page

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
                    url: "<?php echo base_url(); ?>welcome/print_preview_stoolre.html",
                    attr: "href",
                    message: "Your document is being created Print"
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
                  <center><div class="fontstyleing"><u>Stool Report</u></div></center>
       
                <form name="stool_re" method="post" action="<?php echo base_url(); ?>data_record/save_stool_re.html">
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
                                                Consistency
                                                <input type="text" name="consistency" class="form-control" placeholder="Consistency" value="">
                                            </div>

                                            <div class="col-xs-2">
                                                Colour
                                                <input type="text" name="color" class="form-control" placeholder="Colour"  value="">
                                            </div>
                                            <div class="col-xs-2">
                                                Un. F P
                                                <input type="text" name="un_fp" class="form-control" placeholder="Un. F P"  value="">
                                            </div>
                                            <div class="col-xs-2">
                                                Odour
                                                <input type="text" name="ordor" class="form-control" placeholder="Odour"  value="">
                                            </div>
                                            
                                            <div class="col-xs-2">
                                                Mucus
                                                <input type="text" name="mucus" class="form-control" placeholder="Mucus"  value="">
                                            </div>
                                            <br><br>
                                            <div class="col-xs-2">
                                                Blood
                                                <input type="text" name="blood" class="form-control" placeholder="Blood" value="">
                                            </div>
                                            
                                            <div class="col-xs-2">
                                                Helminth
                                                <input type="text" name="helminth" class="form-control" placeholder="Helminth." value="">
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
                                                R/S
                                                <input type="text" name="rs" class="form-control" placeholder="R/S" value="">
                                            </div>
                                            <div class="col-xs-2">
                                                Fat
                                                <input type="text" name="fat" class="form-control" placeholder="Fat" value="">
                                            </div>
                                            <div class="col-xs-2">
                                                Sugar
                                                <input type="text" name="sugur" class="form-control" placeholder="Sugar" value="">
                                            </div>
                                            <div class="col-xs-2">
                                                Ova of A.L
                                                <input type="text" name="ova_al" class="form-control" placeholder="Ova of A.L" value="">
                                            </div> <br> <br> <br>

                                            <div class="col-xs-2">
                                                Bilirubin
                                                <input type="text" name="bilirubin" class="form-control" placeholder="Bilirubin" value="">
                                            </div>

                                            <div class="col-xs-2">
                                                Sterco. and sterco
                                                <input type="text" name="str_and_sterobili" class="form-control" placeholder="Sterco. and sterco." value="">
                                            </div>

                                            <div class="col-xs-2">
                                                OBT
                                                <input type="text" name="obt" class="form-control" placeholder="OBT" value="">
                                            </div>

                                            <div class="col-xs-2">
                                                Vege. Cell
                                                <input type="text" name="vege_cell" class="form-control" placeholder="Vege. Cell" value="">
                                            </div>
                                            <div class="col-xs-2">
                                                Epi. Cells
                                                <input type="text" name="epithe_cells" class="form-control" placeholder="Epi. Cells" value="">
                                            </div>

                                            <div class="col-xs-2">
                                                Pus Cells
                                                <input type="text" name="puss_cell" class="form-control" placeholder="Pus Cells" value="">
                                            </div>

                                            <br>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="col-md-12">
                               
                                <div class="form-group has-success">

                                    <div class="row">
                                        <div class="col-md-10">
<div class="col-xs-2">
    RBC
    <input type="text" name="rbc" class="form-control" placeholder="RBC" value="">
</div>
<div class="col-xs-2">
    Macrophage
    <input type="text" name="macrophages" class="form-control" placeholder="Macrophage" value="">
</div>
<div class="col-xs-2">
    Muscle Fibre
    <input type="text" name="muscle_fibre" class="form-control" placeholder="Muscle Fibre" value="">
</div>
<div class="col-xs-2">
    Fat Globules
    <input type="text" name="fat_globules" class="form-control" placeholder="Fat Globules" value="">
</div>
<div class="col-xs-2">
    Starch Granules
    <input type="text" name="starch_granules" class="form-control" placeholder="Starch Granules" value="">
</div>


<div class="col-xs-2">
    C.L.Crystals
    <input type="text" name="cl_crystals" class="form-control" placeholder="C.L.Crystals" value="">
</div>
<br><br>
<div class="col-xs-2">
    Bacteria
    <input type="text" name="bacteria" class="form-control" placeholder="Bacteria" value="">
</div>
<div class="col-xs-2">
    Trop. Giardia
    <input type="text" name="troph_giardia" class="form-control" placeholder="Trop. Giardia" value="">
</div>
<div class="col-xs-2">
    Ova of A.L
    <input type="text" name="ova_al" class="form-control" placeholder="Ova of A.L" value="">
</div>
<div class="col-xs-2">
    Larva of
    <input type="text" name="larva_of" class="form-control" placeholder="Larva of" value="">
</div>
<div class="col-xs-2">
    Cyst of Giardia
    <input type="text" name="cyst_of_giardia" class="form-control" placeholder="Cyst of Giardia" value="">
                                            </div>
                                            <div class="col-xs-2">
                                                Cyst of  E.Coli
                                                <input type="text" name="cyst_of_col" class="form-control" placeholder="Cyst of  E.Coli"  value="">
                                            </div>
                                            <br><br>
                                            <div class="col-xs-2">
                                                T. hominis
                                                <input type="text" name="t_hominis" class="form-control" placeholder="T. hominis" value="">
                                            </div>
                                            <div class="col-xs-2">
                                                Blastocystis hominis
                                                <input type="text" name="blas_homins" class="form-control" placeholder="Blastocystis hominis" value="">
                                            </div>
                                            <div class="col-xs-2">
                                                Cast
                                                <input type="text" name="cast" class="form-control" placeholder="Cast" value="">
                                            </div>
                                            <div class="col-xs-2">
                                                Fusifo. bacilli
                                                <input type="text" name="fusifo_bacili" class="form-control" placeholder="Fusifo. bacilli" value="">
                                            </div>
                                            <div class="col-xs-2">
                                                Candida
                                                <input type="text" name="candida" class="form-control" placeholder="Candida" value="">
                                            </div>
                                            <div class="col-xs-2">
                                                B.Jons protein
                                                <input type="text" name="b_jons_protein" class="form-control" placeholder="B.Jons protein" value="">
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
     * 
     */
    
    ?>
    
    <a href="link" data-toggle="modal" data-target="#search_stool" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>&nbsp;Extra Stool</a>
    <a href="link" data-toggle="modal" data-target="#search" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>&nbsp;Search</a>

                                 <a href="<?php echo base_url();?>welcome/cancel_haematology.html">
        <button type="button" class="btn btn-danger"><i class="icon-print"></i> CLOSE</button>
    </a>
                        </center>
     <!-- extra urine Modal -->
<div class="modal fade bs-example-modal-lg" id="search_stool" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Customized Stool Report</h4>
      </div>
      <div class="modal-body">
       
    <div class="">
               
<div class="form-group has-success">
    
   
         <textarea class="form-control" cols="5" rows="3" name="extra_stool" placeholder="Input your extra parameter"></textarea>
         
         
     </div> 
                
                
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
                </form>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade bs-example-modal-lg" id="dd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">PBF</h4>
                    </div>
                    <div class="modal-body">
                        <textarea class="form-control" rows="3" name="pbf" placeholder="PBF Report"></textarea>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade bs-example-modal-lg" id="search" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Search Stool Report</h4>
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
                                        foreach ($stool_re_data as $data) {
                                            ?>

                                            <tr class="">
                                                <td><?php  
    $length=strlen($data->manual_pid); 
        $part1=substr_replace("$data->manual_pid","/",2);
        //$part2=substr_replace("$data->manual_pid","",$length-2);
        $part2=substr("$data->manual_pid",2);
        $manual_pid=$part1.$part2;
    echo $manual_pid;?></span></td>
                                            
                                                <td><?php echo date("d-m-Y",strtotime($data->reciv_date)); ?></span></td>

                                                <td>
                                                    <a class="link" href="<?php echo base_url(); ?>data_record/edit_form_stool_re/<?php echo $data->stool_id; ?>" onClick="return save();" style="text-decoration:none"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                                    <?php
                                                    /*
                                                      <a class="link" href="<?php echo base_url();?>data_record/delete_haematology_report_name/<?php echo $data->haematology_id;?>" onClick="return save();" style="text-decoration:none"><span class="glyphicon glyphicon-trash"></span> Delete</a>

                                                     */
                                                    ?>


                                                </td>
                                                </td>
                                            </tr>
<?php } ?>
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