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
                        <style>
                            .tableradius
                            {


                                border-radius:50px;


                            }

                        </style>
                        <a href="<?php echo base_url(); ?>data_record/appointment_list_pdf"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-book"></span> PDF Appointment List</button>
                        </a>

                        <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="example">

                            <thead>
                                <tr class="success">
                                    <th width="300">Patient Name</th>
                                    <th width="100">Age</th>
                                    <th width="100">Sex</th>
                                    <th width="150">Cell. Number</th>
                                    <th width="150">Date</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($patient_appointment as $data) {
                                    ?>

                                    <tr class="">
                                        <td><?php echo $data->patient_name; ?></span></td>
                                        <td><?php echo $data->age; ?></span></td>
                                        <td><?php echo $data->sex; ?></span></td>
                                        <td><?php echo $data->cell_number; ?></span></td>
                                        <td><?php echo $data->current_date; ?></span></td>
                                        <td>
                                            <?php
                                            /*
                                              <a class="link" href="<?php echo base_url();?>data_record/edit_form_patient_appointment/<?php echo $data->patient_id;?>" onClick="return sure();" style="text-decoration:none"><span class="glyphicon glyphicon-edit"></span> Prescription</a>

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