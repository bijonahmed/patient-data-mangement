<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
        <script src="<?php echo base_url(); ?>resource/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url(); ?>resource/js/jquery-ui.js"></script>
        <script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>resource/Context.js-master/context.js"></script>
        <script src="<?php echo base_url(); ?>resource/Context.js-master/demo.js"></script>

        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.standalone.css" rel="stylesheet">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url(); ?>resource/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url(); ?>resource/js/jquery-ui.js"></script>

        <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">

    </head>
</script>
<style>
    table, td, th {
        border: 1px solid #98BF21;
    }

    th {
        background-color: #A7C942;
        color: white;
    }
</style>

<style>
    .red-tooltip + .tooltip > .tooltip-inner {background-color: #f00;}

</style>
<br>
<script>
    $(function() {
<?php
foreach ($dynamicSearch_pInfo as $row):
    $dynamicSearch_pInfo[] = $row->patient_id;
endforeach;

echo "var javascript_array =" . json_encode($dynamicSearch_pInfo);
?>

        $("#patient_id").autocomplete({
            source: javascript_array
        });

    });
</script>

<script>
    $(function() {
<?php
foreach ($dynamicSearch_pInfo_mauan_pid as $row):
    $length = strlen($row->manual_pid);
    $part1 = substr_replace("$row->manual_pid", "/", 2);
    $part2 = substr("$row->manual_pid", 2);
    //$part2=substr_replace("$row->manual_pid","",$length);
    $manual_pid = $part1 . $part2;
    $dynamicSearch_pInfo_mauan_pid[] = $manual_pid;
endforeach;

echo "var javascript_array =" . json_encode($dynamicSearch_pInfo_mauan_pid);
?>

        $("#TBox0").autocomplete({
            source: javascript_array
        });

    });
</script>
<style>
    p {
        margin-top:10px;
        padding:50px;
        border: 1px solid lightgrey;
    }
    #myDiv {
        margin-top: 10px;
    }
</style>

</head>
<br><br>
<body>


    <div class="">
        <div class="">
            <div class="tabbable tabs-left" style="margin-left: 40px;">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#a" data-toggle="tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Patient ID wise</a></li>

                    <li><a href="<?php echo base_url(); ?>welcome/patient_name_searching.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;By Name</a></li>

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



        </div><div class="col-md-9">
            <h3>Find Patient Information <font color="red"><strong>[Find Patient ID]</strong></font></h3>
            <hr>
            <div id="">
                <form class="form-inline" name="p_id" method="post" action="<?php echo base_url(); ?>data_record/patient_id_search.html">
                    <div class="form-group has-warning">


                        <label>Input Patient ID</label> <input type="text" name="manual_pid" placeholder="Input Patient ID" id="TBox0" class="form-control" autofocus="" required="1">

                        <button class="btn btn-primary" id="start"> <span class="glyphicon glyphicon-search"></span> Search</button>
                    </div>
                </form>
            </div>
            <hr>
            <div id="progress_bar" class="ui-progress-bar ui-container">
                <div class="ui-progress" style="width: 79%;">
                    <span class="ui-label" style="display:none;">Processing <b class="value">79%</b></span>
                </div><!-- .ui-progress -->
            </div><!-- #progress_bar -->
            <div class="content" id="main_content" style="display: none; width: 800px;">
                <div class="alert alert-danger">
                    <center>  <strong>Sorry Data Not found</strong></center>
                </div>
            </div><!-- #main_content -->
            <div class="form-group has-success">




                <?php
                if ($patient_id_search) {
                    ?>
                    <table cellpadding="0" cellspacing="0" border="2" class="table" id="example_" style="width: 890px;">
                        <thead>
                            <tr class="">

                                <th width="500">Patient Name</th>
                                <th width="300">Patient ID</th>
                                <th width="300">Age</th>
                                <th width="100">Sex</th>
                                <th width="500">Date</th>
                                <th width="900">Mobile Number</th>
                                <th width="300">Address</th>
                                <th width="300">Action</th>


                            </tr>
                        </thead>

                        <tr class="">

                            <td><?php
                if (isset($patient_id_search)) {
                    echo $patient_id_search->patient_name;
                };
                    ?></span></td>
                            <td><?php
                            if (isset($patient_id_search)) {
                                $length = strlen($patient_id_search->manual_pid);
                                $part1 = substr_replace("$patient_id_search->manual_pid", "/", 2);
                                //$part2=substr_replace("$data->manual_pid","",$length-2);
                                $part2 = substr("$patient_id_search->manual_pid", 2);
                                $manual_pid = $part1 . $part2;
                                echo $manual_pid;
                            };
                    ?></span></td>
                            <td><?php
                            if (isset($patient_id_search)) {
                                echo $patient_id_search->age;
                            };
                    ?></span></td>
                            <td><?php
                            if (isset($patient_id_search)) {
                                echo $patient_id_search->sex;
                            };
                    ?></span></td>
                            <td><?php
                            if (isset($patient_id_search)) {
                                echo date("d-m-Y", strtotime($patient_id_search->current_date));
                            };
                    ?></span></td>
                            <td><?php
                            if (isset($patient_id_search)) {
                                echo $patient_id_search->cell_number;
                            };
                    ?></span></td>
                            <td><?php
                            if (isset($patient_id_search)) {
                                echo $patient_id_search->address;
                            };
                    ?></span></td>
                            <td>
                                <a class="red-tooltip link" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eid Patient Particular"  href="<?php echo base_url(); ?>data_record/edit_form_particular_name/<?php echo $patient_id_search->patient_id; ?>" onClick="return sure_();" style="text-decoration:none"> <div class="glyphicon glyphicon-edit"></div>&nbspEDIT</a>

                            </td>


                        </tr>
                    </table>
                </div>
                <?php
            }
            ?>
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

</html>
