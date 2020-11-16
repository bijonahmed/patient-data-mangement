<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

        <script src="<?php echo base_url(); ?>data_table/js/jquery.js"></script>
        <script>
            $(document).ready(function() {
                $("#dose_type").focus();
                $(":focus").css("background-color", "white");
            });
        </script>
        <script>
        
        </script>
    </head>
     <body>

   
     
        </div>
 
         <style>
      .margintopinfo
      {
          margin-top: 130px;
          /*background-color: yellowgreen;*/
      }
  </style>
        <div class="container margintopinfo">
         
            
            <div class="row">
                <div class="col-md-4">


                </div>
                <div class="form-group has-success">
                <div class="col-md-4">
                  
             <font color="#FF0000">
        <?php
        $message = $this->session->userdata('save_messages_help');
        //echo $message;
        if (isset($message)) {
            echo $message;
            $this->session->unset_userdata('save_messages_help');
        }
        ?>
        </font>
        
       
<form name="myform" method="post" action="<?php echo base_url(); ?>data_record/update_chemotherapy_regemin_main_help.html"  enctype="multipart/form-data">
        <select name="custom_chemotherapy_regmine_id" class="form-control" id="custom_chemotherapy_regmine_id" onchange="OnChangeChemotherapyValue(this.value);" required="1">


            <option value="<?php echo $protocolhelpiinfo->custom_chemotherapy_regmine_id; ?>"><?php echo $protocolhelpiinfo->customized_chemotherapy_regimen_name; ?></option>
<?php
foreach ($chemotherapy_regimen_name as $data) {
?>
<option value="<?php echo $data->custom_chemotherapy_regmine_id; ?>"> <?php echo $data->customized_chemotherapy_regimen_name; ?> </option>
<?php } ?>
                </select>
                
           
                    <div class="margintopinfo_">
                    
                            <div class="form-group has-success">
                                <label class="control-label" for="inputSuccess1"></label>
                                <input type="hidden" name="protocol_help_id" class="form-control" value="<?php echo $protocolhelpiinfo->protocol_help_id;?>">
                                <textarea name="cycle" row="15" col="4" class="form-control" placeholder="Cycle"><?php echo $protocolhelpiinfo->cycle;?></textarea>
                                <br>
                                <textarea name="next_cycle" row="15" col="4" class="form-control" placeholder="Next Cycle"><?php echo $protocolhelpiinfo->cycle;?></textarea>
                                <br>
                                <input type="hidden" name="current_date" value="<?php echo date("Y-m-d"); ?>">
                                <center> <button class="btn btn-info" onClick="return save_()"><span class="glyphicon glyphicon-edit"></span>
                                        Update&nbsp;&nbsp;</button>
           
                                </center>

                            </div>
               
                     
                    </div>
   </form>

                </div>
                </div>
                <div class="col-md-4">



                </div>
            </div>

        </div>
    </body>


    <script>
            function save()
            {
                chk = confirm("Are You Sure");
                if (chk)
                {
                    return true;
                }
                else {
                    return false;
                }
            }
    </script>