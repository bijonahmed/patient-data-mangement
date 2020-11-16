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
                $("#test_name").focus();
                $(":focus").css("background-color", "white");
            });
        </script>


<link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
        <script src="<?php echo base_url(); ?>resource/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url();?>resource/js/jquery-ui.js"></script>

        <script src="<?php echo base_url(); ?>resource/Context.js-master/context.js"></script>
        <script src="<?php echo base_url(); ?>resource/Context.js-master/demo.js"></script>

        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.standalone.css" rel="stylesheet">
        
        <script src="<?php echo base_url(); ?>resource/prescription/data_table/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>resource/prescription/data_table/js/DT_bootstrap.js"></script>
<script src="<?php echo base_url(); ?>resource/prescription/data_table/js/bootstrap-dataTables-paging.js"></script>
<script src="<?php echo base_url(); ?>resource/prescription/data_table/js/bootstrap-dataTables.js"></script>
<style>
    .modal.modal-wide .modal-dialog {
  width: 90%;
}
.modal-wide .modal-body {
  overflow-y: auto;
}

/* irrelevant styling */
 
body p { 
  max-width: 400px; 
  margin: 20px auto; 
}
#tallModal .modal-body p { margin-bottom: 900px }
</style>
    </head>
    <br><br><br>
    <body>
        <div class="container">
            <h3>Add Investigation Test Name /  Unit / Normal Range</h3>
            <hr>

            <div class="row">
                <div class="col-md-4">

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

                </div>
                <div class="col-md-4">
                    <div class="">
                        <form name="employee" method="post" action="<?php echo base_url(); ?>data_record/save_advice_name.html">
                            <div class="form-group has-success">
                                <label class="control-label" for="inputSuccess1">     Add Investigation Group Name</label> <select name="path_test_group_id" id="select" required="1" class="form-control">
                                    <option selected="selected">Selected</option>
<?php
foreach ($add_new_advice_group as $data) {
    ?>
                                        <option value="<?php echo $data->path_test_group_id; ?>"> <?php echo $data->path_test_group_name; ?> </option>
                                    <?php } ?>
                                </select>

                                Test Name 
                                <label class="control-label" for="inputSuccess1"></label>
                                <input type="text" class="form-control" name="test_name" id="test_name" required="1" >
                                Unit

                                <input type="text" class="form-control" name="unit" required="1" >

                                Normal Range

                                <input type="text" class="form-control" name="normal_range" required="1" ><br>
                                <center> <button class="btn btn-info" onClick="return save()"><span class="glyphicon glyphicon-save"></span>
                                        Save&nbsp;&nbsp;</button>
                                   
                                </center>

                            </div>
                        </form>       
                        <center>
                           
                                         <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                            <span class="glyphicon glyphicon-search"></span>
                                            Search
                                        </button>
                             
                        </center>
                    </div>


                </div>

                <div class="col-md-4">



                </div>
            </div>

        </div>
    </body>

<!-- Modal -->
<div class="fade modal modal-wide fad" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
  <div class="form-group has-success">
    <br>
          <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="example">

<thead>
<tr class="success">

<th width="200">Test Name</th>
<th width="200">Normal Range</th>
<th width="20">Unit</th>
<th  width="130">Action</th>
</tr>
</thead>
<tbody>
   <?php

foreach($advie_info as $data) {
?>

<tr class="">

    <td><?php echo $data->test_name;?></span></td>
    <td><?php echo $data->normal_range;?></span></td>
     <td><?php echo $data->unit;?></span></td>

<td>
<a class="link" href="<?php echo base_url();?>data_record/edit_form_advice_name/<?php echo $data->path_test_id;?>" onClick="return sure();" style="text-decoration:none"><span class="glyphicon glyphicon-edit"></span> Edit</a>
 <a class="link" href="<?php echo base_url();?>data_record/delete_advice_name/<?php echo $data->path_test_id;?>" onClick="return sure();" style="text-decoration:none"><span class="glyphicon glyphicon-trash"></span> Delete</a>



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

    <script>
            function sure()
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