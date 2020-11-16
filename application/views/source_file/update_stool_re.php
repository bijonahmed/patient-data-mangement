<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>


        <link rel="stylesheet" href="<?php echo base_url() ?>resource/css/jquery-ui.css" />
        <script src="<?php echo base_url(); ?>data_table/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>resource/js/jquery-ui.js"></script>
        <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">

        <script language="javascript" src="<?php echo base_url(); ?>resource/modal.popup.js"></script>
        <script language="javascript" src="<?php echo base_url(); ?>resource/jquery.printPage.js"></script>
        <script>
            $(document).ready(function() {
                $("#patient_id").focus();
                $(":focus").css("background-color", "white");
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
            <br>
            <div class="container">
                <form name="haematology" method="post" action="<?php echo base_url(); ?>data_record/update_stool_re_information.html">
                    <div class="form-group has-success">
                        <div class="">

<?php
/*
    <div class="col-xs-2">
                                    <input type="text" name="test_id" class="form-control"id="patient_id" placeholder="Test ID" value="<?php echo $stool_re->test_id;?>">
                                    

                                </div>
 */

?>
                            <div class="row" style="" >
                            
                                <div class="col-xs-2">
                                <input type="hidden" name="stool_id" class="form-control"id="patient_id" value="<?php echo $stool_re->stool_id;?>">
                                    <input type="text" name="reciv_date" data-date-format="dd-mm-yyyy" class="form-control" id="reciv_date" placeholder="Reci.Date" value="<?php echo $stool_re->reciv_date;?>">
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
                                                <input type="text" name="quantity" class="form-control" placeholder="Quantity" value="<?php echo $stool_re->quantity;?>">
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="text" name="consistency" class="form-control" placeholder="Consistency" value="<?php echo $stool_re->consistency;?>">
                                            </div>

                                            <div class="col-xs-2">
                                                <input type="text" name="color" class="form-control" placeholder="Colour" value="<?php echo $stool_re->color;?>">
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="text" name="un_fp" class="form-control" placeholder="Un. F P" value="<?php echo $stool_re->un_fp;?>">
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="text" name="ordor" class="form-control" placeholder="Odour" value="<?php echo $stool_re->ordor;?>">
                                            </div>
                                            
                                            <div class="col-xs-2">
                                                <input type="text" name="mucus" class="form-control" placeholder="Mucus" value="<?php echo $stool_re->mucus;?>">
                                            </div>
                                            <br><br>
                                            <div class="col-xs-2">
                                                <input type="text" name="blood" class="form-control" placeholder="Blood" value="<?php echo $stool_re->blood;?>">
                                            </div>
                                            
                                            <div class="col-xs-2">
                                                <input type="text" name="helminth" class="form-control" placeholder="Helminth." value="<?php echo $stool_re->helminth;?>">
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
                                                <input type="text" name="reaction" class="form-control" placeholder="Reaction" value="<?php echo $stool_re->reaction;?>">
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="text" name="rs" class="form-control" placeholder="R/S" value="<?php echo $stool_re->rs;?>">
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="text" name="fat" class="form-control" placeholder="Fat" value="<?php echo $stool_re->rs;?>">
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="text" name="sugur" class="form-control" placeholder="Sugar" value="<?php echo $stool_re->sugur;?>">
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="text" name="ova_al" class="form-control" placeholder="Ova of A.L" value="<?php echo $stool_re->ova_al;?>">
                                            </div> <br> <br>

                                            <div class="col-xs-2">
                                                <input type="text" name="bilirubin" class="form-control" placeholder="Bilirubin" value="<?php echo $stool_re->bilirubin;?>">
                                            </div>

                                            <div class="col-xs-2">
                                                <input type="text" name="str_and_sterobili" class="form-control" placeholder="Sterco. and sterco." value="<?php echo $stool_re->str_and_sterobili;?>">
                                            </div>

                                            <div class="col-xs-2">
                                                <input type="text" name="obt" class="form-control" placeholder="OBT" value="<?php echo $stool_re->obt;?>">
                                            </div>

                                            <div class="col-xs-2">
                                                <input type="text" name="vege_cell" class="form-control" placeholder="Vege. Cell" value="<?php echo $stool_re->vege_cell;?>">
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="text" name="epithe_cells" class="form-control" placeholder="Epi. Cells" value="<?php echo $stool_re->epithe_cells;?>">
                                            </div>

                                            <div class="col-xs-2">
                                                <input type="text" name="puss_cell" class="form-control" placeholder="Pus Cells" value="<?php echo $stool_re->puss_cell;?>">
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
                                                <input type="text" name="rbc" class="form-control" placeholder="RBC" value="<?php echo $stool_re->rbc;?>">
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="text" name="macrophages" class="form-control" placeholder="Macrophage" value="<?php echo $stool_re->macrophages;?>">
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="text" name="muscle_fibre" class="form-control" placeholder="Muscle Fibre" value="<?php echo $stool_re->muscle_fibre;?>">
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="text" name="fat_globules" class="form-control" placeholder="Fat Globules" value="<?php echo $stool_re->fat_globules;?>">
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="text" name="starch_granules" class="form-control" placeholder="Starch Granules" value="<?php echo $stool_re->starch_granules;?>">
                                            </div>


                                            <div class="col-xs-2">
                                                <input type="text" name="cl_crystals" class="form-control" placeholder="C.L.Crystals" value="<?php echo $stool_re->cl_crystals;?>">
                                            </div>
                                            <br><br>
                                            <div class="col-xs-2">
                                                <input type="text" name="bacteria" class="form-control" placeholder="Bacteria" value="<?php echo $stool_re->bacteria;?>">
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="text" name="troph_giardia" class="form-control" placeholder="Trop. Giardia" value="<?php echo $stool_re->troph_giardia;?>">
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="text" name="ova_al" class="form-control" placeholder="Ova of A.L" value="<?php echo $stool_re->ova_al;?>">
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="text" name="larva_of" class="form-control" placeholder="Larva of" value="<?php echo $stool_re->larva_of;?>">
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="text" name="cyst_of_giardia" class="form-control" placeholder="Cyst of Giardia" value="<?php echo $stool_re->cyst_of_giardia;?>">
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="text" name="cyst_of_col" class="form-control" placeholder="Cyst of  E.Coli" value="<?php echo $stool_re->cyst_of_col;?>">
                                            </div>
                                            <br><br>
                                            <div class="col-xs-2">
                                                <input type="text" name="t_hominis" class="form-control" placeholder="T. hominis" value="<?php echo $stool_re->t_hominis;?>">
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="text" name="blas_homins" class="form-control" placeholder="Blastocystis hominis" value="<?php echo $stool_re->blas_homins;?>">
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="text" name="cast" class="form-control" placeholder="Cast" value="<?php echo $stool_re->cast;?>">
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="text" name="fusifo_bacili" class="form-control" placeholder="Fusifo. bacilli" value="<?php echo $stool_re->fusifo_bacili;?>">
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="text" name="candida" class="form-control" placeholder="Candida" value="<?php echo $stool_re->candida;?>">
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="text" name="b_jons_protein" class="form-control" placeholder="B.Jons protein" value="<?php echo $stool_re->b_jons_protein;?>">
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <center>
                            <button class="btn btn-primary"onClick="return save()"><span class="glyphicon glyphicon-edit"></span>&nbsp;Update Report</button>
                           
                        </center>

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
                        <h4 class="modal-title" id="myModalLabel">Search</h4>
                    </div>
                    <div class="modal-body">

                        <div class="">

                            <div class="form-group has-success">

                                <br>
                                <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">

                                    <thead>
                                        <tr class="success">
                                            <th width="90">Pt. ID</th>
                                            <th width="250">Pt. Name</th>
                                            <th width="100">Rev. date</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($stool_re_data as $data) {
                                            ?>

                                            <tr class="">
                                                <td><?php echo $data->patient_id; ?></span></td>
                                                <td><?php echo $data->patient_name; ?></span></td>
                                                <td><?php echo $data->reciv_date; ?></span></td>

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