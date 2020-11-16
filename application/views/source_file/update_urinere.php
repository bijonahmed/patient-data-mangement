<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>


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
          <br> 
            </div>
     <br>
     <div class="container">
             <form name="haematology" method="post" action="<?php echo base_url(); ?>data_record/update_urine_re_information.html">
             <div class="form-group has-success">
                <div class="">

  
                    <div class="row" style="" >
                     
                      <div class="col-xs-2">
                            
                            <input type="text" name="reciv_date" data-date-format="dd-mm-yyyy" class="form-control" id="reciv_date" placeholder="Reci.Date" value="<?php echo $urinereport->reciv_date;?>">
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
                                        <input type="hidden" name="urine_id" class="form-control" value="<?php echo $urinereport->urine_id;?>">
                                        <input type="text" name="quantity" class="form-control" placeholder="Quantity" value="<?php echo $urinereport->quantity;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="color" class="form-control" placeholder="Colour" value="<?php echo $urinereport->color;?>">
                                    </div>
                                   
                                    <div class="col-xs-2">
                                        <input type="text" name="apper" class="form-control" placeholder="Appearance" value="<?php echo $urinereport->apper;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="sediment" class="form-control" placeholder="Sediment" value="<?php echo $urinereport->sediment;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="spe_grav" class="form-control" placeholder="Spec.Grav." value="<?php echo $urinereport->spe_grav;?>">
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
                                        <input type="text" name="reaction" class="form-control" placeholder="Reaction" value="<?php echo $urinereport->reaction;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="ex_ph" class="form-control" placeholder="Ex. Ph." value="<?php echo $urinereport->ex_ph;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="albumin" class="form-control" placeholder="Albumin" value="<?php echo $urinereport->albumin;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="sugur" class="form-control" placeholder="Sugar" value="<?php echo $urinereport->sugur;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="others" class="form-control" placeholder="Others" value="<?php echo $urinereport->others;?>">
                                    </div> <br> <br>

                                    <div class="col-xs-2">
                                        <input type="text" name="acetone" class="form-control" placeholder="Acetone" value="<?php echo $urinereport->acetone;?>">
                                    </div>

                                    <div class="col-xs-2">
                                        <input type="text" name="bile_salt" class="form-control" placeholder="BileSalt" value="<?php echo $urinereport->bile_salt;?>">
                                    </div>

                                    <div class="col-xs-2">
                                        <input type="text" name="bile_pig" class="form-control" placeholder="Bile pig." value="<?php echo $urinereport->bile_pig;?>">
                                    </div>

                                    <div class="col-xs-2">
                                        <input type="text" name="urobili" class="form-control" placeholder="Urobili." value="<?php echo $urinereport->urobili;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="chyle" class="form-control" placeholder="Chyle" value="<?php echo $urinereport->chyle;?>">
                                    </div>

                                    <div class="col-xs-2">
                                        <input type="text" name="b_jons_protein" class="form-control" placeholder="B.Jons Protein" value="<?php echo $urinereport->b_jons_protein;?>">
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
                                        <input type="text" name="ep_cell" class="form-control" placeholder="Epi. Cell" value="<?php echo $urinereport->ep_cell;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="pus_cast" class="form-control" placeholder="PusCells" value="<?php echo $urinereport->pus_cast;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="rbcs" class="form-control" placeholder="RBCs" value="<?php echo $urinereport->rbcs;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="mucus" class="form-control" placeholder="Mucus" value="<?php echo $urinereport->mucus;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="pus_cast" class="form-control" placeholder="Pus Cust" value="<?php echo $urinereport->pus_cast;?>">
                                    </div>
                                   
                                
                                    <div class="col-xs-2">
                                        <input type="text" name="sperat" class="form-control" placeholder="Sperto." value="<?php echo $urinereport->sperat;?>">
                                    </div>
                                    <br><br>
                                    <div class="col-xs-2">
                                        <input type="text" name="wbc" class="form-control" placeholder="WBCcast" value="<?php echo $urinereport->wbc;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="granuloar" class="form-control" placeholder="Granu.Cast" value="<?php echo $urinereport->granuloar;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="cal_oxa" class="form-control" placeholder="Cal.Oxa." value="<?php echo $urinereport->cal_oxa;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="uric_acid" class="form-control" placeholder="U.A.Cry" value="<?php echo $urinereport->uric_acid;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="tre_phs" class="form-control" placeholder="Tre.Phs" value="<?php echo $urinereport->tre_phs;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="sulph_cry" class="form-control" placeholder="Sulph.Cry" value="<?php echo $urinereport->sulph_cry;?>">
                                    </div>
                                    <br><br>
                                    <div class="col-xs-2">
                                        <input type="text" name="hayline_cast" class="form-control" placeholder="HaylineCast " value="<?php echo $urinereport->hayline_cast;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="bacteria" class="form-control" placeholder="Bacteria" value="<?php echo $urinereport->bacteria;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="candida" class="form-control" placeholder="Candida" value="<?php echo $urinereport->candida;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="amr_ph" class="form-control" placeholder="Amor.Ph" value="<?php echo $urinereport->amr_ph;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="urate_crys" class="form-control" placeholder="Urate Crystals" value="<?php echo $urinereport->urate_crys;?>">
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