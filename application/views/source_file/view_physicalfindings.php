<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>resource/css/bootstrap.min.css" rel="stylesheet">

        <script src="<?php echo base_url(); ?>data_table/js/jquery.js"></script>

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

                    <div class="form-group has-success">
                        <br><br>
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="example">

                            <thead>
                                <tr class="success">
                                    <th width="120">Patient ID</th>
                                    <th width="50">Height</th>
                                    <th width="50">Weight</th>
                                    <th width="50">Presure</th>
                                    <th width="250">Ge. Examination</th>
                                    <th width="150">Posting date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($view_physicalfindings as $data) {
                                    ?>

                                    <tr class="">
                                        <td><?php echo $data->patient_id; ?></span></td>
                                        <td><?php echo $data->height; ?></span></td>
                                        <td><?php echo $data->weight; ?></span></td>
                                        <td><?php echo $data->presasure; ?></span></td>
                                        <td><?php echo $data->general_examination; ?></span></td>
                                        <td><?php echo $data->current_date; ?></span></td>


                                        <td>
                                            <a class="link" href="<?php echo base_url(); ?>data_record/edit_form_physicalFindings_name/<?php echo $data->physical_examination_id; ?>" onClick="return sure();" style="text-decoration:none"><span class="glyphicon glyphicon-edit"></span> Edit</a>

                                            <a class="link" href="<?php echo base_url(); ?>data_record/delete_physicalFindings/<?php echo $data->physical_examination_id; ?>" onClick="return sure();" style="text-decoration:none"><span class="glyphicon glyphicon-trash"></span> Delete</a>



                                        </td>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>



                    </div> 


                </div>
                <div class="col-md-1">



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