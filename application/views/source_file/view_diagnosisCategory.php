<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

        <!-- Bootstrap -->
<script src="<?php echo base_url(); ?>data_table/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>resource/data_table/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>resource/data_table/js/DT_bootstrap.js"></script>
<script src="<?php echo base_url(); ?>resource/data_table/js/bootstrap-dataTables-paging.js"></script>
<script src="<?php echo base_url(); ?>resource/data_table/js/bootstrap-dataTables.js"></script>
    </head>
    <body>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->


        <!-- Include all compiled plugins (below), or include individual files as needed -->



    <body>  <br><br><br>
        <div class="container">

            <div class="row">
                <div class="col-md-1">



                </div>
                <div class="col-md-10">
<div class="">
  <div class="modal-dialog">
    <div class="modal-content">
   
      <div class="modal-body">
  <div class="form-group has-success">
                        <br>
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="example">

                            <thead>
                                <tr class="success">
                                    <th width="400">Diagnosis Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($view_diagnosisCategory as $data) {
                                    ?>

                                    <tr class="">
                                        <td><?php echo $data->customized_diagnosis_category_name; ?></span></td>

                                        <td>
                                            <a class="link" href="<?php echo base_url(); ?>data_record/edit_form_diagnosis_category/<?php echo $data->diagnosis_category_id; ?>" onClick="return sure_();" style="text-decoration:none"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                            <a class="link" href="<?php echo base_url(); ?>data_record/delete_diagnosis_category/<?php echo $data->diagnosis_category_id; ?>" onClick="return sure();" style="text-decoration:none"><span class="glyphicon glyphicon-trash"></span> Delete</a>

                                        </td>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>



                    </div> 
      </div>
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                  


                </div>
                <div class="col-md-1">

        
                     <br> <br>
  <a href="<?php echo base_url();?>welcome/go_setting.html"><button class="btn btn-danger">  CLOSE&nbsp;<span class="glyphicon glyphicon-remove-circle"></span></button></a>
       

                </div>

            </div>
        </div>



    </body>

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