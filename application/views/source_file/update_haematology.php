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
 

            </div>
     <br>
             <div class="container " style="height: 560px; ">
             <form name="haematology" method="post" action="<?php echo base_url(); ?>data_record/update_haematologyreporting.html">
             <div class="form-group has-success">
                <div class="">

  
                    <div class="row">
                        
                     
                        <div class="col-xs-2">
                            
                            <input type="text" name="reciv_date" data-date-format="dd-mm-yyyy" class="form-control" id="reciv_date" placeholder="Reci.Date" value="<?php echo $haematologyreport->reciv_date;?>">
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
                 
                    <div class="row">

                    <div class="container">
                     Total Count    <font color="#FF0000">
        <?php
        $message = $this->session->userdata('save_message');
        //echo $message;
        if (isset($message)) {
            echo $message;
            $this->session->unset_userdata('save_message');
        }
        ?>
        </font> 
                        <div class="form-group has-success">

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="col-xs-2">
                                        <input type="text" name="hb" class="form-control" placeholder="Hb" value="<?php echo $haematologyreport->hb;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="esr" class="form-control" placeholder="ESR" value="<?php echo $haematologyreport->esr;?>">
                                    </div>
                                    <br><br>
                                    <div class="col-xs-2">
                                        <input type="text" name="rbc" class="form-control" placeholder="RBC" value="<?php echo $haematologyreport->rbc;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="platelete" class="form-control" placeholder="PLT" value="<?php echo $haematologyreport->platelete;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="wbc" class="form-control" placeholder="WBC" value="<?php echo $haematologyreport->wbc;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="ce" class="form-control" placeholder="TCE" value="<?php echo $haematologyreport->ce;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="rc" class="form-control" placeholder="RC" value="<?php echo $haematologyreport->rc;?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        Differential Count.
                        <div class="form-group has-success">

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="col-xs-2">
                                        <input type="text" name="neutrophils" class="form-control" placeholder="Neutrophils" value="<?php echo $haematologyreport->neutrophils;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="lymphocytes" class="form-control" placeholder="Lymphocytes" value="<?php echo $haematologyreport->lymphocytes;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="monocytes" class="form-control" placeholder="Monocytes" value="<?php echo $haematologyreport->monocytes;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="eosinophils" class="form-control" placeholder="Eosinophils" value="<?php echo $haematologyreport->eosinophils;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="basophil" class="form-control" placeholder="Basophbils" value="<?php echo $haematologyreport->basophil;?>">
                                    </div> <br> <br>

                                    <div class="col-xs-2">
                                        <input type="text" name="parameter_one" class="form-control" placeholder="Blank Parameter" value="<?php echo $haematologyreport->parameter_one;?>">
                                    </div>

                                    <div class="col-xs-2">
                                        <input type="text" name="para_one_rpt" class="form-control" placeholder="Result" value="<?php echo $haematologyreport->para_one_rpt;?>">
                                    </div>

                                    <div class="col-xs-2">
                                        <input type="text" name="parameter_two" class="form-control" placeholder="Blank Parameter" value="<?php echo $haematologyreport->parameter_two;?>">
                                    </div>

                                    <div class="col-xs-2">
                                        <input type="text" name="para_two_rpt" class="form-control" placeholder="Result" value="<?php echo $haematologyreport->para_two_rpt;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="parameter_three" class="form-control" placeholder="Blank Parameter" value="<?php echo $haematologyreport->parameter_three;?>">
                                    </div>

                                    <div class="col-xs-2">
                                        <input type="text" name="para_three_rpt" class="form-control" placeholder="Result" value="<?php echo $haematologyreport->para_three_rpt;?>">
                                    </div>
                                    <br><br>
                                    <div class="col-xs-2">
                                        <input type="text" name="parameter_four" class="form-control" placeholder="Blank Parameter" value="<?php echo $haematologyreport->parameter_four;?>">
                                    </div>

                                    <div class="col-xs-2">
                                        <input type="text" name="para_four_rpt" class="form-control" placeholder="Result" value="<?php echo $haematologyreport->para_four_rpt;?>">
                                    </div>

                                    <div class="col-xs-2">
                                        <input type="text" name="parameter_five" class="form-control" placeholder="Blank Parameter" value="<?php echo $haematologyreport->parameter_five;?>">
                                    </div>

                                    <div class="col-xs-2">
                                        <input type="text" name="para_five_rpt" class="form-control" placeholder="Result" value="<?php echo $haematologyreport->para_five_rpt;?>">
                                    </div>

                                    <div class="col-xs-2">
                                        <input type="text" name="mp" class="form-control" placeholder="MP" value="<?php echo $haematologyreport->mp;?>">
                                         <input type="hidden" name="haematology_id" class="form-control" value="<?php echo $haematologyreport->haematology_id;?>">
                                         
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="col-md-10">
                        Absolute Value
                        <div class="form-group has-success">

                            <div class="row">
                                <div class="col-md-10">
                                    <div class="col-xs-2">
                                        <input type="text" name="hct" class="form-control" placeholder="HCT/PCV" value="<?php echo $haematologyreport->hct;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="mcv" class="form-control" placeholder="MCV" value="<?php echo $haematologyreport->mcv;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="mch" class="form-control" placeholder="MCH" value="<?php echo $haematologyreport->mch;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="mchc" class="form-control" placeholder="MCHC" value="<?php echo $haematologyreport->mchc;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="rdw" class="form-control" placeholder="RDW" value="<?php echo $haematologyreport->rdw;?>">
                                    </div>
                                   
                                    <br><br>
                                    <div class="col-xs-2">
                                        <input type="text" name="bt_min" class="form-control" placeholder="BT" value="<?php echo $haematologyreport->bt_min;?>">
                                    </div>

                                    <div class="col-xs-2">
                                        <input type="text" name="bt_sec" class="form-control" placeholder="Result" value="<?php echo $haematologyreport->bt_sec;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="ct_min" class="form-control" placeholder="CT" value="<?php echo $haematologyreport->ct_min;?>">
                                    </div>
                                    <div class="col-xs-2">
                                        <input type="text" name="ct_sec" class="form-control" placeholder="Result" value="<?php echo $haematologyreport->ct_sec;?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                 <center>
                     <button class="btn btn-primary"onClick="return save_()"><span class="glyphicon glyphicon-edit"></span>&nbsp;Update Report</button>
                   
                       
                     <!-- Button trigger modal -->




                 </center>

             </form>
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