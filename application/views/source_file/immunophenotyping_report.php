<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Immunophenotype Report</title>


      <link href="<?php echo base_url(); ?>admin_panel/jQuery-TE_v.1.4.0/job_ jquery-te-1.4.0.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>admin_panel/jQuery-TE_v.1.4.0/jquery-te-1.4.0.min.js"></script>
        <script src="<?php echo base_url(); ?>admin_panel/js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>javascript_form/examples/gen_validatorv4.js"  type="text/javascript" xml:space="preserve"></script>
        
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
                var source = '<?php echo base_url(); ?>welcome/immunopenotype_rpt'; 								//Refer to any page on your server, external pages are not valid e.g. http://www.google.co.uk
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
                    url: "<?php echo base_url(); ?>welcome/immunopenotype_rpt.html",
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

    </head>
    <br><br><br>


    <body>


        <div class="container">
            <div class="">
        
               


            </div>
       
            <div class="container ">
                
                          <div align="right">
         <form name="cancel" action="<?php echo base_url();?>welcome/investigation" method="post" >
           
             <button class="btn btn-danger"><span class="glyphicon glyphicon-th-list"></span>&nbsp;Cancel</button>
        </form>
                             
      
     </div>
             
                <form name="haematology" method="post" action="<?php echo base_url(); ?>data_record/save_immunophenotype_report.html">
                    <div class="form-group has-success">
                        <div class="">


                            <div class="" style="" >
                             
                               
                                <div class="col-xs-2">

                                    <input type="text" name="reciv_date" data-date-format="dd-mm-yyyy" class="form-control" id="reciv_date" placeholder="Reci.Date" required="1" value="<?php echo $this->session->userdata('reciv_date');?>">
                                   
                                </div>
                                 <div class="col-md-1">
                                     <a href="<?php echo base_url();?>welcome/add_new_immunophenotype_test_name.html"><span class="glyphicon glyphicon-plus"></span>
Setting</a>
                                        
                                    </div><br><br><br>
                                <div class="col-xs-2">

                                    <select name="immunphenotype_id" id="path_test_group_id" class="form-control" >
<option selected="selected">Select</option>
<?php
foreach ($immunophenotype_data as $data) {
?>
<option value="<?php echo $data->immunphenotype_id; ?>"> <?php echo $data->immunophenotype_test_name; ?> </option>
<?php } ?>
</select>
                                </div>
                                <div class="col-xs-2">
    <select name="value" class="form-control" id="familyhistory" onchange="if (this.selectedIndex==2){this.form['cell_line'].style.visibility='visible'}else {this.form['cell_line'].style.visibility='hidden'};">

<option value="" selected="selected">Select Value</option>
<option value="Negative">Negative</option>
<option value="Positive">Positive</option>

</select>

       
                                </div>
                                  <div class="col-xs-2">
                                      <textarea class="form-control" rows="3" name="cell_line" style="visibility:hidden;" placeholder="Cell Line"></textarea>
       
                                </div>
                       
                        <div class="col-sm-1 inline">
                              <label>Display</label>
                            
                        </div>
                        
                        <div class="col-sm-1 inline">
                             
                        <select name="display" class="form-control" id="complaint_timing" style="width:auto;">
                                                          
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            
                                                        </select>
                            
                        </div>
                        
                                    <div class="col-md-4">
 <button class="btn btn-primary"onClick="return save()"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Add</button>
   <button type="button" class="btn btn-success btn bijon" ><i class="icon-zoom-in"></i> <span class="glyphicon glyphicon-zoom-in"></span> Preview</button>
        <button type="button" class="btn btn-info btn btnPrint"><i class="icon-print"></i> <span class="glyphicon glyphicon-print"></span>  Printing</button>
       <?php
       /*
       <a href="link" data-toggle="modal" data-target="#search" class="btn btn-primary">Custom</a>
        */
       
       ?>
            
                            
       
                                </div>
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
                   
                               
                            </div>
                  
                        </div>
       <table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">
                            <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Date</th>
                                    <th>Test Name</th>
                                    <th>Value</th>
                                    <th>Cell Line</th>
                                    <th>Display</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
<?php
$x = 1;
{
?>                                     <?php
                                    $patient_id = $this->session->userdata('patient_id');
                                    if (isset($patient_id)) {

                                        foreach ($immunophenotype_rpt as $data) {
                                            ?>

                                            <tr>
                                                <td><?php echo $x; ?></td>
                                                <td><?php echo $data->reciv_date; ?></td>
                                                <td><?php echo $data->immunophenotype_test_name; ?> </td>
                                                <td><?php echo $data->value; ?> </td>
                                              
                                                 <td><?php echo $data->cell_line; ?> </td>
                                               <td><?php echo $data->display; ?> </td>
                                                <td>


                                                    <a class="" href="<?php echo base_url(); ?>data_record/delete_immunophenotype_report/<?php echo $data->immuno_type_report_id; ?>" onClick="return delete_data();" style="text-decoration:none"><i class="icon-trash icon-black"></i><span class="glyphicon glyphicon-trash"></span>&nbsp;Delete</a>
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
              

                </form>
            </div>
        </div>
     
 
     
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

<?php
/*
                                   <!-- search Modal -->
        <div class="modal fade bs-example-modal-lg" id="search" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Customized Report</h4>
                    </div>
                    <div class="modal-body">
                        <textarea name="description" class="form-control" cols="4" rows="10"><?php echo "CD1:  \n";?><?php echo "CD2:  \n";?><?php echo "CD3:  \n";?><?php echo "CD4:  \n";?><?php echo "CD5: \n";?><?php echo "CD6:  \n";?></textarea>
                                 
                       
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
               
 */
?>