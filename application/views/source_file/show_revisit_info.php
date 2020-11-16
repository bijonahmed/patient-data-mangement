<?php
header('Cache-Control: max-age=900');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>admin_panel/js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>resource/js/jquery-ui.js"></script>
        <script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
        <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
        <script src="<?php echo base_url(); ?>resource/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url(); ?>resource/js/jquery-ui.js"></script>
        <script src="<?php echo base_url(); ?>resource/Context.js-master/context.js"></script>
        <script src="<?php echo base_url(); ?>resource/Context.js-master/demo.js"></script>
        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.standalone.css" rel="stylesheet">
        <link href="<?php echo base_url();?>resource/css/jquery-ui.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
     
<script language="javascript" src="<?php echo base_url();?>resource/modal.popup.js"></script>
<script language="javascript" src="<?php echo base_url();?>resource/jquery.printPage.js"></script>
    

    </head>
    <body>
        <style>
            .red-tooltip + .tooltip > .tooltip-inner {background-color: #000000;}

        </style>
    <body>  <br>

        <div class="container">

            <div class="row">
                <div class="col-md-1">



                </div>
                <div class="col-md-10">

                    <div class="form-group has-success">
                        <style>
                            .tableradius
                            {  border-radius:50px; }

                        </style>
    <style>
        #cssDisplay {
  background-color: #FFFFFF;
  color: #000000;
  font-family: verdana;
  font-style: normal;
  font-weight: bold;
  font-size: 21px;
  font-variant: small-caps;
  text-transform: none;
  background-repeat: no-repeat;
  background-attachment: scroll;

  border-radius: 20px;
}
    </style>
                        <font color="red">
                        <center> <div id="cssDisplay">
                            <br><strong><h3> Re-Visit Patient Information</h6></strong>
                           
                            <h4><?php
                                $patient_id = $this->session->userdata('manual_pid');
                                if (isset($patient_id))
                                    $length = strlen($patient_id);
                                $part1 = substr_replace("$patient_id", "/", 2);
                                $part2 = substr("$patient_id", 2);

                                $patient_id = $part1 . $part2;
                                echo "Patient ID: " . $patient_id;
                                ?><br>
                                Name of Patient :     <?php echo $patient_name->patient_name;
                                ?></h4>
                            
                            </div>
                            <br>
                            <form class="form-inline" method="post" action="<?php echo base_url();?>welcome/preview_all_visit_data.html">
                                <div class="col-sm-5" style="margin-left: -40px;">
                                    <label>Visit No</label>
                                    <select name="visitno1" class="form-control" id="from_visit">
                                          <?php 
                                        
                                    foreach ($revisit as $data) {
                                        
                                        ?>
                                       <option> <?php echo $data->visiting_no; ?> </option>
                                        <?php
                                    }
                                        ?>
                                       
                                    </select>
                                     <input type="hidden" name="manual_pid" value="<?php echo $this->session->userdata('manual_pid');?>"> 
                                     <label>To</label>
                                     <select name="visitno2" class="form-control" id="to_visit">
                                          <?php 
                                        
                                    foreach ($revisit as $data) {
                                        
                                        ?>
                                       <option> <?php echo $data->visiting_no; ?> </option>
                                        <?php
                                    }
                                        ?>
                                       
                                    </select>&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary" onclick="return myFunction();"><span class="glyphicon glyphicon-zoom-in"></span>&nbsp;Preview</button>
                                   
                                     
                                </div> </form> 
                               <?php
                               
                               /*
                                 <div class="">
                                
                                
                                <a href="<?php echo base_url();?>welcome/pdf_preview_all_visit_datainfo.html" class="btn btn-primary" style="margin-left: 20px;"><span class="glyphicon glyphicon-book"></span>&nbsp;Create PDF</a>
                                <button class="btn btn-primary"  data-toggle="modal" data-target="#mailto" style="margin-left: 150px;"><span class="glyphicon glyphicon-send"></span>&nbsp;Send Mail</button>
                            </div>
                                * 
                                */
                               ?> 
                          <br> <br>
                            <hr>
                            <div style="">
                           
            <!-- Modal -->
            <form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>welcome/send_mail_info.html">
<div class="modal fade" id="mailto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Send Prescription</h4>
      </div>
      <div class="modal-body">
          <input type="text" name="mailto" class="form-control" placeholder="Mail To" autofocus="">
          <br>
             <input type="text" name="subject" class="form-control" placeholder="Subject">
             <br>
          <textarea class="form-control" name="msg" placeholder="Messages"></textarea>
          <br>
          <input type="file" id="upload" name="upload_file" size="18"/>
          <br>
              <center> <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-send"></span>&nbsp;Send Mail</button></center>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
                </form>
                            </div>
<script>
 function myFunction(){
                                       
var from_visit = $('#from_visit').val();
var to_visit = $('#to_visit').val();

if (from_visit > to_visit) {
   alert('Sorry Please Valid Visit Range');
   return false;
   //return false;
}else{
 return true;    
   //return true;
}                   
 }

</script>  
                         

                        </center>      
                        </font>

                    </div>
                    <div class="form-group has-success">
                        <form method="post" action="<?php echo base_url(); ?>data_record/edit_revisit_prescription">
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-hover" id="example" align="center">

                                <thead>
                                    <tr class="">
                                        <?php if ($this->session->userdata('patient_id') != NULL) {
                                            ?>
                                            <th width="130">Dynamic P_ID</th>  
                                            <?php
                                        } else {
                                            ?>

                                            <?php
                                        }
                                        ?>


                                        <th width="200">Visit No</th>
                                        <th width="300">Visit Date</th>
                                        <th width="300">View</th>
<?php
/*
   <th width="300">PDF</th>
 * 
 */

?>
                                      
                                        
                                        <th width="300">Edit</th>
                                        <th width="300">New</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($revisit as $data) {
                                        ?>

                                        <tr class="">

                                            <td><strong><font color="red"><?php echo $data->visiting_no; ?></font></strong></span>

                                            </td>

                                            <td><?php echo date('d-m-Y', strtotime($data->current_date)); ?></span>

                                            </td>

                                            <td>

                                                <?php
                                                /*
                                                  <a class="btn btn-info" href="<?php echo base_url();?>data_record/edit_form_re_visit_info/<?php echo $data->patient_id;?>" onClick="return sure();"><span class="glyphicon glyphicon-zoom-in"></span> View Prescription</a>
                                                 *     <a class="btn btn-info" href="<?php echo base_url();?>data_record/edit_form_re_visit_info/<?php echo $data->patient_id;?>" onClick="return sure();"><span class="glyphicon glyphicon-zoom-in"></span> View Prescription</a>
                                                 */
                                                ?>
                                                <a style="text-decoration: none;" class="red-tooltip link" data-toggle="tooltip" data-placement="top" title="" data-original-title="View Prescription" target="_blank" href="<?php echo base_url(); ?>data_record/re_visit_conditional_prescription/<?php
                                                if ($this->session->userdata('patient_id') != NULL) {
                                                    echo $data->patient_id;
                                                } else {
                                                    echo $data->manual_pid;
                                                }
                                                echo 'VisitNo' . $data->visiting_no;
                                                ?>">
                                                    <div class="glyphicon glyphicon-zoom-in"></div> View
                                                </a>


                                            </td>

                                      
<?php
/*
 *       <td>
 <a style="text-decoration: none;" class="red-tooltip link" data-toggle="tooltip" data-placement="top" title="" data-original-title="Eid Prescription" target="_blank" href="<?php echo base_url(); ?>data_record/create_pdf_patient_info/<?php
                                                if ($this->session->userdata('patient_id') != NULL) {
                                                    echo $data->patient_id;
                                                } else {
                                                    echo $data->manual_pid;
                                                }
                                                echo 'VisitNo' . $data->visiting_no;
                                                ?>"> 


                                                    <div class="glyphicon glyphicon-book"></div> PDF



                                                </a>
 *    </td>
 * 
 */

?>
                                               

                                         
<td>

                                                <a style="text-decoration: none;" class="red-tooltip link" data-toggle="tooltip" data-placement="top" title="" data-original-title="Eid Prescription" target="_blank" href="<?php echo base_url(); ?>data_record/edit_revisit_prescription/<?php
                                                if ($this->session->userdata('patient_id') != NULL) {
                                                    echo $data->patient_id;
                                                } else {
                                                    echo $data->manual_pid;
                                                }
                                                echo 'VisitNo' . $data->visiting_no;
                                                ?>"> 


                                                    <div class="glyphicon glyphicon-edit"></div> EDIT



                                                </a>

                                            </td>
                                            <td>


                                                <a style="text-decoration: none;" class="red-tooltip link" data-toggle="tooltip" data-placement="top" title="" data-original-title="New Prescription" target="_blank" href="<?php echo base_url(); ?>data_record/create_new_prescription/<?php
                                                if ($this->session->userdata('patient_id') != NULL) {
                                                    echo $data->patient_id;
                                                } else {
                                                    echo urldecode($data->manual_pid);
                                                }

                                                echo 'date' . $data->current_date;
                                                ?>">
                                                    <div class="glyphicon glyphicon-plus"></div> New
                                                </a>  
                                            </td>
                                            <td>



                                            </td>

                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </form>

                    </div>  
                </div> 


            </div>

            <div class="col-md-1">



            </div>

        </div>

    </body>

    <script>
        $(document).ready(function() {
            $("a").tooltip();
        });
    </script>