<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>

    </head>
    <body>


    <body> 
        <div class="container">

            <div class="row">
                <div class="col-md-1">



                </div>
                <div class="col-md-10">

                    <div class="form-group has-success">




                    </div>
                    <div id="printablediv" style="width: 100%; background-color: none; height: auto">
                        <div align="center">

                        </div>
 <center><h3>Patient Appointment List</h3></center>
                        <table cellpadding="0" c border="1" cellspacing="0" bordercolor="#000000"  class="table table-hover tableradius" id="example_">

                            <thead>
                                <tr class="success">
                                    <th width="40"><div align="left">SL NO</div></th>
                            <th width="70"><div align="center">Patient ID</div></th>
                            <th width="160"><div align="left">Patient Name</div></th>
                            <th width="50"><div align="left">Age</div></th>
                            <th width="50"><div align="left">Sex</div></th>
                            <th width="80"><div align="left">Cell Number</div></th>
                            <th width="70"><div align="center"> Date</div></th>
                           
                            </tr>

                            </thead>

                            <tbody>
                                <?php
                                $x = 1;
                                foreach ($patient_appointment as $data) {
                                    ?>

                                    <tr class="">
                                        <td><div align="center"><?php echo $x; ?></div></span></td>
                                        <td><div align="center"><?php echo $data->patient_id; ?></div></span></td>
                                        <td><div align="left"><?php echo $data->patient_name; ?></div></span></td>
                                        <td><div align="left"><?php echo $data->age; ?></div></span></td>
                                        <td><div align="left"><?php echo $data->sex; ?></div></span></td>
                                        <td><div align="left"><?php echo $data->cell_number; ?></div></span></td>
                                        <td><div align="center"><?php echo $data->current_date; ?></div></span></td>
                                       
                                    </tr>
                                    <?php
                                    $x++;
                                }
                                ?>
                            </tbody>
                        </table><br><br>
                        <div align="left"><small>Printing Date <?php echo date("d-m-Y")?></small></div>  
                    </div>
                </div> 


            </div> 


        </div>
        <div class="col-md-1">



        </div>

    </div>
</div>



</body>
