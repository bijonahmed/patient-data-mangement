<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
        <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">      

        <script src="<?php echo base_url(); ?>resource/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url(); ?>resource/js/jquery-ui.js"></script>

        <script src="<?php echo base_url(); ?>resource/Context.js-master/context.js"></script>
        <script src="<?php echo base_url(); ?>resource/Context.js-master/demo.js"></script>
        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.standalone.css" rel="stylesheet">   


        <script src="<?php echo base_url(); ?>resource/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url(); ?>resource/js/jquery-ui.js"></script>


        <script src="<?php echo base_url(); ?>resource/datatablebyName/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url(); ?>resource/datatablebyName/js/DT_bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>resource/datatablebyName/js/bootstrap-dataTables-paging.js"></script>
        <script src="<?php echo base_url(); ?>resource/datatablebyName/js/bootstrap-dataTables.js"></script>

        <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">


        <style>
            .red-tooltip + .tooltip > .tooltip-inner {background-color: #f00;}

        </style>


        <script>
            $(function() {
<?php
foreach ($dynamicSearch_pInfo as $row):
    $dynamicSearch_pInfo[] = $row->patient_name;
endforeach;

echo "var javascript_array =" . json_encode($dynamicSearch_pInfo);
?>

                $("#patient_name").autocomplete({
                    source: javascript_array
                });

            });
        </script>

    </head>
    <br><br><br>
    <body>


        <div class="">
            <div class="">
                <div class="tabbable tabs-left" style="margin-left: 40px;">
                    <ul class="nav nav-tabs">
                        <li><a href="<?php echo base_url(); ?>welcome/patient_date_to_date_searching.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Patient ID wise</a></li>
                        <li class="active"><a href="<?php echo base_url(); ?>welcome/patient_name_searching.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;By Name</a></li>
                        <li ><a href="<?php echo base_url(); ?>data_record/patient_find_information_by_date_wise.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Date wise</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/patient_find_information_by_remarks.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Remarks wise</a></li>

                        <li><a href="<?php echo base_url(); ?>welcome/patient_find_information_by_gender_wise.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Gender wise</a></li>
                       
                    <?php
                    /*
                      <li><a href="<?php echo base_url(); ?>welcome/patient_find_information_by_between_age.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Between Age</a></li>
                     */
                    ?>
                    </ul>
                </div>
            </div>
            <div class="">



            </div><div class="col-md-10">
                <h3>Find Patient Information <font color="red"><strong>[Find Patient Name]</strong></font></h3>
                <hr>
                <div id="">
                    <div class="form-group has-warning">
                        <form class="form-inline" name="p_id" method="post" action="<?php echo base_url(); ?>data_record/pt_find_information_by_name.html">

                            <label>Input Patient Name</label> <input type="text" name="patient_name" placeholder="Input Patient Patient" id="patient_name" class="form-control" autofocus="" required="1">

                            <button class="btn btn-primary" id="start"> <span class="glyphicon glyphicon-search"></span> Search</button>

                        </form>
                    </div>
                    <hr>
                    <div id="progress_bar" class="ui-progress-bar ui-container">
                        <div class="ui-progress" style="width: 79%;">
                            <span class="ui-label" style="display:none;">Processing <b class="value">79%</b></span>
                        </div><!-- .ui-progress -->
                    </div><!-- #progress_bar -->
                    <div class="content" id="main_content" style="display: none; width: 900px;">
                        <div class="alert alert-danger">
                            <center>  <strong>Sorry Data Not found</strong></center>
                        </div>
                    </div><!-- #main_content -->
                    <div class="form-group has-success">




                        <?php
                        if ($patientname != null) {
                            ?>                

                            <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="example" style="width:950px; border-radius: 5px;">

                                <thead>

                                    <tr class="">
                                        <td width="80"><div align="left"><strong>S.N.</strong></div></td>
                                        <td width="100"><div align="left"><strong>Patient ID</strong></div></td>
                                        <td width="200"><div align="left"><strong>Patient Name</strong></div></td>
                                        <td width="100"><div align="left"><strong>Cell Number</strong></div></td>
                                        <td width="200"> <div align="left"><strong>Date</strong></div></td>
                                        <td width="100"> <div align="left"><strong>Age</strong></div></td>
                                        <td width="80"> <div align="left"><strong>Sex</strong></div></td>
                                        <td width="250"> <div align="left"><strong>Address</strong></div></td>
                                        <th width="250">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $x = 1;

                                    foreach ($patientname as $data) {
                                        ?>

                                        <tr class="">
                                            <td><?php echo $x; ?></span></td>
                                            <td><?php
                                                $length = strlen($data->manual_pid);
                                                $part1 = substr_replace("$data->manual_pid", "/", 2);
                                                $part2 = substr("$data->manual_pid", 2);
                                                //$part2=substr_replace("$data->manual_pid","",-($length-2));
                                                $manual_pid = $part1 . $part2;
                                                echo $manual_pid;
                                                ?></span></td>
                                            <td><?php echo $data->patient_name; ?></span></td>
                                            <td><?php echo $data->cell_number; ?></span></td>
                                            <td><span><?php echo date("d-m-Y", strtotime($data->current_date)); ?></span></td>
                                            <td><span><?php echo $data->age; ?></span></td>
                                            <td><span><?php echo $data->sex; ?></span></td>
                                            <td><span><?php echo $data->address; ?></span></td>
                                            <td><a class="red-tooltip link" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eid Patient Particular" href="<?php echo base_url(); ?>data_record/edit_form_particular_by_name/<?php
                                                if (isset($data)) {
                                                    echo $data->patient_id;
                                                }
                                                ?>" onClick="return sure_();" style="text-decoration:none"><div class="glyphicon glyphicon-edit"></div>&nbsp;EDIT</a></td>

                                            </td>
                                        </tr>
                                        <?php
                                        $x++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <?php
                        }
                        ?>

                    </div>


                </div>
            </div>
        </div>


    </body>


    <script>
        $(function() {
            $('#myTab a:first').tab('show')
        })
    </script>
    <script>
        $(document).ready(function() {
            $("a").tooltip();
        });
    </script>


</body>


</html>