<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Karyotype Report</title>

<script src="<?php echo base_url(); ?>data_table/js/jquery.js"></script>
<link href="<?php echo base_url(); ?>admin_panel/jQuery-TE_v.1.4.0/job_ jquery-te-1.4.0.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>admin_panel/jQuery-TE_v.1.4.0/jquery-te-1.4.0.min.js"></script>
<script src="<?php echo base_url(); ?>admin_panel/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>javascript_form/examples/gen_validatorv4.js"  type="text/javascript" xml:space="preserve"></script>

<script src="<?php echo base_url(); ?>resource/prescription/data_table/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>resource/prescription/data_table/js/DT_bootstrap.js"></script>
<script src="<?php echo base_url(); ?>resource/prescription/data_table/js/bootstrap-dataTables-paging.js"></script>
<script src="<?php echo base_url(); ?>resource/prescription/data_table/js/bootstrap-dataTables.js"></script>


<script language="javascript" src="<?php echo base_url(); ?>resource/modal.popup.js"></script>
<script language="javascript" src="<?php echo base_url(); ?>resource/jquery.printPage.js"></script>

<script src="<?php echo base_url(); ?>resource/js/jquery-ui.js"></script>
<link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
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
                var source = '<?php echo base_url(); ?>welcome/print_preview_karyotype_report'; 								//Refer to any page on your server, external pages are not valid e.g. http://www.google.co.uk
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
                    url: "<?php echo base_url(); ?>welcome/print_preview_karyotype_report.html",
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
    <br>


    <body>


        <div class="container">
            <div class="">
                <br>
         


            </div>
            <br>
            <div class="container">
                       <center><div class="fontstyleing"><u>Karyotype Report</u></div></center>
       
                  <form id="karytypeInfo" method="post" action="<?php echo base_url(); ?>data_record/save_karyotype_report_info.html">
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
                                <div class="form-group has-success">

                                    <div class="row">
                                        <textarea class="jqte-test form-control" id="" name="report_description"></textarea>
                                        <?php
                                        /*
                                         <?php echo display_ckeditor($check_editor['ckeditor']);?>
                                         */
                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                          
 <center>
            <button class="btn btn-primary" id=""><span class="glyphicon glyphicon-saved"></span>&nbsp;Save</button>         
              <a href="link" data-toggle="modal" data-target="#search" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>&nbsp;Search</a>
                                                        <a href="<?php echo base_url();?>welcome/cancel_haematology.html">
        <button type="button" class="btn btn-danger"><i class="icon-print"></i> CLOSE</button>
    </a>
 </center>
                        </div>
                      
                           </form>
                       <center>
                           <?php
                           /*
                            <button type="button" class="btn btn-success btn bijon" ><i class="icon-zoom-in"></i> <span class="glyphicon glyphicon-zoom-in"></span> Preview</button>
                            <button type="button" class="btn btn-info btn btnPrint"><i class="icon-print"></i> <span class="glyphicon glyphicon-print"></span>  Printing</button>
                            */
                           
                           
                           ?>

                          
                        </center>

                
                
            </div>
        </div>
     


        <!-- Modal -->
        <div class="modal fade bs-example-modal-lg" id="search" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Search Karyotype Report</h4>
                    </div>
                    <div class="modal-body">

                        <div class="">

                            <div class="form-group has-success">

                                <br>
                                <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">

                                    <thead>
                                        <tr class="">
                                            <th width="200">Patient ID</th>
                                            <th width="200">Rev. date</th>
                                            <th width="150">Display</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($karyotype_report_data as $data) {
                                            ?>

                                            <tr class="">
                                                <td><?php  
    $length=strlen($data->manual_pid); 
        $part1=substr_replace("$data->manual_pid","/",2);
        //$part2=substr_replace("$data->manual_pid","",$length-2);
        $part2=substr("$data->manual_pid",2);
        $manual_pid=$part1.$part2;
    echo $manual_pid;?></span></td>
                                             
                                                <td><?php echo $data->reciv_date; ?></span></td>
                                                 <td><?php echo $data->display; ?></span></td>

                                                <td>
                                                    <a class="tooltips link" href="<?php echo base_url(); ?>data_record/edit_form_karyotype_report/<?php echo $data->karyotype_id; ?>" onClick="return save_();" style="text-decoration:none"><span>Edit Karyotype Report</span> Edit</a>
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