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

   
        <style>
                            .tableradius
                            {

                                border-top: 30px;
                                border-radius:50px;


                            }

                        </style>
                        <br><br> <br><br>
                        <div class="col-md-2"></div>            
        <div class="col-md-8">
            <div class="">
  <div class="modal-dialog">
    <div class="modal-content">
     
      <div class="modal-body">
          <div class="form-group has-success">
                     
                        
                             <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="example">

<thead>
<tr class="success">
<th width="350">Name</th>
<th>Action</th>
</tr>
</thead>
<tbody>
   <?php

foreach($view_systolic as $data) {
?>

<tr class="">
    <td><?php echo $data->customized_physical_findings_systolic_name;?></span></td>


<td>
<a class="link" href="<?php echo base_url();?>data_record/edit_form_systolic_heading/<?php echo $data->custom_phy_findings_systolic_id;?>" onClick="return sure_();" style="text-decoration:none"><span class="glyphicon glyphicon-edit"></span> Edit</a>
 



</td>
</td>
</tr>
<?php }?>
</tbody>
</table>



                    </div> 
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                 


        </div>

  <br> <br>
  <a href="<?php echo base_url();?>welcome/go_setting.html"><button class="btn btn-danger">  CLOSE&nbsp;<span class="glyphicon glyphicon-remove-circle"></span></button></a>
                
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