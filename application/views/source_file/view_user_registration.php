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



    <body>  <br><br><br><br>
        <div class="container">

            <div class="row">
                <div class="col-md-1">



                </div>
                <div class="col-md-10">

                    <div class="form-group has-success">
                        <style>
                            .tableradius
                            {


                                border-radius:50px;


                            }

                        </style>
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="example">

                            <thead>
                                <tr class="success">
                                    <th width="300">User Name</th>
                                    <th width="200">Cell Number</th>
                                    <th width="200">Type</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($registrationInfo as $data) {
                                    ?>

                                    <tr class="">
                                        <td><?php echo $data->name; ?></span></td>
                                        <td><?php echo $data->cell_number; ?></span></td>
                                        <td><?php echo $data->type; ?></span></td>
                                        <td>
                                            <a class="btn btn-primary" href="<?php echo base_url(); ?>data_record/edit_form_registration/<?php echo $data->user_id; ?>" onClick="return sure();"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                            <a class="btn btn-danger" href="<?php echo base_url(); ?>data_record/delete_user_info/<?php echo $data->user_id; ?>" onClick="return sure();"><span class="glyphicon glyphicon-trash"></span> Delete</a>

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