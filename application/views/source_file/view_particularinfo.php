<!-- Button trigger modal -->
<br><br><br>

      <link href="<?php echo base_url(); ?>resource/css/bootstrap.min.css" rel="stylesheet">
           <script src="<?php echo base_url(); ?>data_table/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url(); ?>data_table/js/DT_bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>data_table/js/bootstrap-dataTables-paging.js"></script>
        <script src="<?php echo base_url(); ?>data_table/js/bootstrap-dataTables.js"></script>
        <script src="<?php echo base_url(); ?>data_table/js/jquery.js"></script>
        <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
        <script src="<?php echo base_url(); ?>resource/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url();?>resource/js/jquery-ui.js"></script>

        <script src="<?php echo base_url(); ?>resource/Context.js-master/context.js"></script>
        <script src="<?php echo base_url(); ?>resource/Context.js-master/demo.js"></script>

        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.standalone.css" rel="stylesheet">
   

<!-- Modal -->
<div class="" id="adsf" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
            </div>
            <div class="modal-body">
                <center>
                    <div class="row">
                        <div class="col-xs-5">
                            <!-- Button trigger modal -->
                            <div align="left">


                                <button class="btn btn-default" data-toggle="modal" data-target="#particular">
                                    <span class="glyphicon glyphicon-edit"></span>
                                    Edit Particular &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </button>

                                
                            </div>
                        </div>
                 

                    </div>



                </center>
            </div>

        </div>
    </div>
</div>


<!-- particular -->
<div class="modal fade" id="particular" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <div class="form-group has-success">
                    <br><br>
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="particularinfo">

                        <thead>
                            <tr class="success">
                                <th width="200">M. P_ID</th>
                                <th width="500">Patient Name</th>
                                <th width="120">Cell Number</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($view_particulardata as $data) {
                                ?>

                                <tr class="">
                                    <td><?php  $length=strlen($data->manual_pid); 
        $part1=substr_replace("$data->manual_pid","/",2);
        //$part2=substr_replace("$data->manual_pid","",$length-2);
        $part2=substr("$data->manual_pid",2);
        $manual_pid=$part1.$part2;
    echo $manual_pid;?></span></td>
                                    <td><?php echo $data->patient_name; ?></span></td>


                                    <td><?php echo $data->cell_number; ?></span></td>


                                    <td>
                                        <a class="link" href="<?php echo base_url(); ?>data_record/edit_form_particular_name/<?php echo $data->patient_id; ?>" onClick="return sure();" style="text-decoration:none"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                        <?php
                                        /*
                                          <a class="link" href="<?php echo base_url();?>data_record/delete_dose_schedule/<?php echo $data->patient_id;?>" onClick="return sure();" style="text-decoration:none"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                         */
                                        ?>


                                    </td>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>



                </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

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