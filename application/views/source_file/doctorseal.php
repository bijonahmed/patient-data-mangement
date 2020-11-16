<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
         <script src="<?php echo base_url(); ?>data_table/js/jquery.js"></script>

        <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
        <script src="<?php echo base_url(); ?>resource/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url();?>resource/js/jquery-ui.js"></script>

        <script src="<?php echo base_url(); ?>resource/Context.js-master/context.js"></script>
        <script src="<?php echo base_url(); ?>resource/Context.js-master/demo.js"></script>

        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.standalone.css" rel="stylesheet">

        </style>
        <script src="<?php echo base_url(); ?>data_table/js/jquery.js"></script>
        <script>
            $(document).ready(function() {
                $("#dose_suggestion").focus();
                $(":focus").css("background-color", "white");
            });
        </script>


    </head>
    <br><br><br>
    <body>
         <div id="target">
           
	</div>
      
        <div class="container">
             <font color="#FF0000">
                    <?php
                    $message = $this->session->userdata('save_message');
                    //echo $message;
                    if (isset($message)) {
                        echo $message;
                        $this->session->unset_userdata('save_message');
                    }
                    ?>
                    </font>
            <h4>Add Your Seal</h4>
            <hr>
            <form name="doctorseal" method="post" action="<?php echo base_url();?>data_record/save_doctor_seal.html">
            <div class="row">
                <div class="col-md-5">
                    For Bangla  <br><br>
                    <textarea class="form-control" name="for_bangla_seal" cols="5" rows="5"></textarea>
                    
                </div>   
                <div class="col-md-5">
                    
                For English   <br><br>  
                 <textarea class="form-control" name="for_english_seal" cols="5" rows="5"></textarea>    
                </div>  
               <div class="col-md-5">
                    <br><br>
                Prescription Footer  <br><br>  
                 <textarea class="form-control" name="prescription_footer" cols="5" rows="5"></textarea>    
                </div>
             
                </div>
            <br>
              <div class="col-md-1">
            <button class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span>&nbsp;Save</button>
            
              </div>

             </form>
            <div class="col-md-5">
                <a href="<?php echo base_url();?>welcome/view_doctor_seal.html">
                <button class="btn btn-info"><span class="glyphicon glyphicon-edit"></span> Edit</button>             
                </a>
</div>
             <hr>
        </div>
    </body>
        
    
    
      <!-- doctor_seal Modal -->
<div class="modal fade" id="doctor_seal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Doctor Seal</h4>
      </div>
      <div class="modal-body">
<div class="form-group has-success">
    <br>
         <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="phy_findings">

<thead>
<tr class="success">
<th width="250">For Bangla</th>
<th width="250">For English</th>

<th>Action</th>
</tr>
</thead>
<tbody>
   <?php

foreach($searchdata_for_seal as $data) {
?>

<tr class="">
    <td><?php echo $data->for_bangla_seal;?></span></td>

  <td><?php echo $data->for_english_seal;?></span></td>
<td>
<a class="link" href="<?php echo base_url();?>data_record/edit_form_doctor_seal/<?php echo $data->seal_id;?>" onClick="return sure();" style="text-decoration:none"><span class="glyphicon glyphicon-edit"></span> Edit</a>
 



</td>
</td>
</tr>
<?php }?>
</tbody>
</table>
         
         
         
     </div> 
      </div>
     
    </div>
  </div>
</div>
