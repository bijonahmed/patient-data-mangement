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

        <script src="<?php echo base_url(); ?>resource/bootstrap_searching_table/src/jquery.tabulate.js"></script>

        <script src="<?php echo base_url(); ?>resource/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url(); ?>resource/js/jquery-ui.js"></script>

        <link href="<?php echo base_url(); ?>resource/bootstrap_datatabls/TableTools/media/css/TableTools.css" rel="stylesheet"> 

        <script src="<?php echo base_url(); ?>resource/bootstrap_datatabls/jquery.dataTables.js"></script> 
        <script src="<?php echo base_url(); ?>resource/bootstrap_datatabls/jquery.dataTables.js"></script>
        <script src="<?php echo base_url(); ?>resource/bootstrap_datatabls/dataTables.tableTools.js"></script>
        <script src="<?php echo base_url(); ?>resource/bootstrap_datatabls/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>resource/bootstrap_datatabls/TableTools/media/js/TableTools.js"></script> 
        <script src="<?php echo base_url(); ?>resource/bootstrap_datatabls/TableTools/media/js/ZeroClipboard.js"></script> 



        <style>
            body { font-size: 140%; }
            div.DTTT { margin-bottom: 0.5em; float: right;}
            div.dataTables_wrapper { clear: left; }
        </style>

    <em src="<?php echo base_url(); ?>resource/bootstrap_datatabls/TableTools/media/copy_csv_xls.swf.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="500" height="375"></em>
    <em src="<?php echo base_url(); ?>resource/bootstrap_datatabls/TableTools/media/copy_csv_xls_pdf.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="500" height="375"></em>


    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $('#example').dataTable({
                "sDom": 'T<"clear">lfrtip',
                "oTableTools": {
                    "sSwfPath": "<?php echo base_url(); ?>resource/bootstrap_datatabls/TableTools/media/swf/copy_csv_xls_pdf.swf"
                }
            });
        });
    </script>


</head>

<body>
    <br><br><br>

    <div class="">
        <div class="">
            <div class="tabbable tabs-left" style="margin-left: 40px;">
                <ul class="nav nav-tabs">
                    <li><a href="<?php echo base_url(); ?>welcome/patient_date_to_date_searching.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Patient ID wise</a></li>

                    <li ><a href="<?php echo base_url(); ?>welcome/patient_name_searching.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;By Name</a></li>

                    <li class="active" ><a href="#c" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Date wise</a></li>
                    <li><a href="<?php echo base_url(); ?>welcome/patient_find_information_by_remarks.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Remarks wise</a></li>
                    <li><a href="<?php echo base_url(); ?>welcome/patient_find_information_by_gender_wise.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Gender wise</a></li>
                    
                </ul>
            </div>
        </div>
        <div class="">



        </div><div class="col-md-10">
            <h3>Find Patient Information <font color="red"><strong>[Find Patient Date Wise]</strong></font></h3>
            <hr>
            <div id="">
                <div class="form-group has-warning">
                    <form class="form-inline" name="p_id" method="post" action="<?php echo base_url(); ?>data_record/patient_revisit_information_data_revisit_by_date_findpatient.html">

                        <input type="text" class="form-control" id="starting_date" name="starting_date" placeholder="Form Date" required="1" >
                        <input type="text" class="form-control" id="ending_date"name="ending_date" placeholder="To Date" required="1">

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
                    if (isset($date_wise_search)) {
                        ?>
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="example" style="width: 1000px;">

                            <thead>
                                <tr class="">
                                    <td colspan="10"><div align="center" style=""><strong>From 
                                                <?php
                                                if (isset($date_from)) {
                                                    echo $date_from;
                                                }
                                                ?> 
                                                To 
                                                <?php
                                                if (isset($date_to)) {
                                                    echo $date_to;
                                                }
                                                ?></strong>
                                        </div></td>
                                </tr>
                                <tr class="">
                                    <td width="80"><div align="left"><strong>S.N.</strong></div></td>
                                    <td width="80"><div align="left"><strong>Patient ID</strong></div></td>
                                    <td width="120"><div align="left"><strong>Patient Name</strong></div></td>
                                    <td width="150"><div align="left"><strong>Cell Number</strong></div></td>
                                    <td width="200"> <div align="left"><strong>Date</strong></div></td>
                                    <td width="70"> <div align="left"><strong>Age</strong></div></td>
                                    <td width="100"> <div align="left"><strong>Sex</strong></div></td>
                                    <td width="200"> <div align="left"><strong>Address</strong></div></td>
                                    <td width="100"> <div align="left"><strong>Diagnosis</strong></div></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $x = 1;

                                foreach ($date_wise_search as $data) {
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
                                        <td><span><?php echo $data->customized_diagnosis_category_name; ?></span></td>

                                        </td>
                                    </tr>
        <?php
        $x++;
    }
    ?>
                            </tbody>
                            <thead>
                                <tr class="">
                                    <td width="100"><div align="left"><strong>S.N.</strong></div></td>
                                    <td width="150"><div align="left"><strong>Patient ID</strong></div></td>
                                    <td width="200"><div align="left"><strong>Patient Name</strong></div></td>
                                    <td width="200"><div align="left"><strong>Cell Number</strong></div></td>
                                    <td width="100"> <div align="left"><strong>Date</strong></div></td>
                                    <td width="70"> <div align="left"><strong>Age</strong></div></td>
                                    <td width="100"> <div align="left"><strong>Sex</strong></div></td>
                                    <td width="200"> <div align="left"><strong>Address</strong></div></td>
                                    <td width="100"> <div align="left"><strong>Diagnosis</strong></div></td>
                                </tr>
                            </thead>
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

<script type="text/javascript">
    $('#starting_date').datepicker()
</script>

<script type="text/javascript">
    $('#ending_date').datepicker()
</script>


</body>


</html>