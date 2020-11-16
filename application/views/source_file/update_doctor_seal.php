<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    

         
      
        
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
        
           <link href="<?php echo base_url(); ?>admin_panel/jQuery-TE_v.1.4.0/job_ jquery-te-1.4.0.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>admin_panel/jQuery-TE_v.1.4.0/jquery-te-1.4.0.min.js"></script>
        <script src="<?php echo base_url(); ?>admin_panel/js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>javascript_form/examples/gen_validatorv4.js"  type="text/javascript" xml:space="preserve"></script>
        
        
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
          
            <form name="doctorseal" method="post" action="<?php echo base_url();?>data_record/update_doctor_seal.html">
                <input type="hidden" name="seal_id" value="<?php echo $edit_doctorsealInfo->seal_id;?>">
            <div class="row">
                <div class="col-md-5">
                    For Bangla  <br>
                    <textarea class="jqte-test form-control" name="for_bangla_seal" cols="5" rows="5"><?php echo $edit_doctorsealInfo->for_bangla_seal;?></textarea>
                    
                </div>   
                <div class="col-md-5">
                    
                For English   <br>
                 <textarea class="jqte-test form-control" name="for_english_seal" cols="5" rows="5"><?php echo $edit_doctorsealInfo->for_english_seal;?></textarea>    
                </div>  
               <div class="col-md-5">
                
                Prescription Footer  <br>
                 <textarea class="jqte-test form-control" name="prescription_footer" cols="5" rows="5"><?php echo $edit_doctorsealInfo->prescription_footer;?></textarea>    
                </div>
             
                </div>
         
                   <div class="col-md-5">

</div>
              <div class="col-md-1">
            <button class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span>&nbsp;Update</button>
            
              </div>

             </form>
     
         
        </div>
    </body>
        
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