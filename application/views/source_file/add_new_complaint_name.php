<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

        <script src="<?php echo base_url(); ?>data_table/js/jquery.js"></script>
             
<script src="<?php echo base_url(); ?>resource/prescription/data_table/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>resource/prescription/data_table/js/DT_bootstrap.js"></script>
<script src="<?php echo base_url(); ?>resource/prescription/data_table/js/bootstrap-dataTables-paging.js"></script>
<script src="<?php echo base_url(); ?>resource/prescription/data_table/js/bootstrap-dataTables.js"></script>
        <script>
            $(document).ready(function() {
                $("#complain_name").focus();
                $(":focus").css("background-color", "white");
            });
        </script>


    </head>
    <br><br><br>
    <body>
        <div class="container">
            <h3>Add Complaint Name</h3>
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
                        <form name="employee" method="post" action="<?php echo base_url(); ?>data_record/save_complaint_name.html">
                            <div class="form-group has-success">
                               
                                Add Complaint Name
                                <label class="control-label" for="inputSuccess1"></label>
                                <input type="text" class="form-control" name="complain_name" id="complain_name" required="1" ><br>
                                <center> <button class="btn btn-info" onClick="return save()"><span class="glyphicon glyphicon-saved"></span>
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
  <div class="form-group has-success">
    <br>
         <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="example">

<thead>
<tr class="success">
<th width="300">Complaint Name</th>

<th>Action</th>
</tr>
</thead>
<tbody>
   <?php

foreach($view_complaint as $data) {
?>

<tr class="">
    <td><?php echo $data->complain_name;?></span></td>

<td>
<a class="link" href="<?php echo base_url();?>data_record/edit_form_informaiton_by_complaint/<?php echo $data->cc_name_id;?>" onClick="return sure();" style="text-decoration:none"><span class="glyphicon glyphicon-edit"></span> Edit</a>
 <a class="link" href="<?php echo base_url();?>data_record/delete_complaint_name/<?php echo $data->cc_name_id;?>" onClick="return sure();" style="text-decoration:none"><span class="glyphicon glyphicon-trash"></span> Delete</a>





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