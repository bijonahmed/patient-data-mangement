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

</head>
<br><br><br>
<body>


    <div class="">
        <div class="">
            <div class="tabbable tabs-left" style="margin-left: 40px;">
                <ul class="nav nav-tabs">
                    <li><a href="#a" data-toggle="tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Presenting Complaint</a></li>

                    <li><a href="<?php echo base_url(); ?>welcome/comorbidity_search_informaiton.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Comorbidity</a></li>

                    <li ><a href="<?php echo base_url(); ?>welcome/personalhistory_search_info.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Personal History</a></li>
                    <li><a href="<?php echo base_url(); ?>welcome/family_history_search_info.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Family History</a></li>
                    <li><a href="<?php echo base_url(); ?>welcome/physical_findings_info.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Physical Findings</a></li>
                    <li><a href="<?php echo base_url(); ?>welcome/diagnosis_info.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Diagnosis</a></li>
                    <li class="active"><a href="<?php echo base_url(); ?>welcome/protocol_info.html" data-toggle="tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Protocol</a></li>
                </ul>
            </div>
        </div>


        <div class="col-md-9">
            <h3>Find Patient Information <font color="red"><strong>[Find Protocol]</strong></font></h3>
            <hr>
            <div class="">
                <form name="conditional_report" class="" method="post" action="<?php echo base_url(); ?>welcome/protocol_search.html" target="_top">
                    <div class="form-group has-success">
                        <div class="row">
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="manual_pid" placeholder="Patient ID" id="mpid" autofocus="">
                            </div>
                            <div class="col-md-3">
                                <select name="custom_chemotherapy_regmine_id" class="form-control">

                                    <option value="">--- Select ---</option>
                                    <option value="">None</option>
                                    <?php
                                    foreach ($view_ChemotherayRegimen_name as $data) {
                                        ?>
                                        <option value="<?php echo $data->custom_chemotherapy_regmine_id; ?>"> <?php echo $data->customized_chemotherapy_regimen_name; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" data-date-format="" id="starting_date_protocol" name="starting_date_protocol" required="1" placeholder="From Date">

                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" data-date-format="" id="ending_date_protocol"name="ending_date_protocol" required="1" placeholder="Ending Date">
                            </div>
                            <div class="col-md-1">
                                <button class="btn btn-primary" id="start"><span class="glyphicon glyphicon-search"></span> Search</button>

                            </div>
                        </div>
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
                if ($protocol_search != null) {
                    ?>


                    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="example">

                        <thead>
                            <tr class=" ">
                                <th colspan="7" valign="top"> <div align="center">
                            <strong>Protocol List OF<BR><font color="red"><?php if (isset($protocolInfo)) echo $protocolInfo; ?></font> </strong>
                            <br>From <?php echo $date_from; ?> To <?php echo $date_to; ?>


                        </div></th>
                        </tr>
                        <tr class=" ">
                            <th width="100" valign="top"><div align="left">SL NO</div></th>
                        <th width="150" valign="top"><div align="left">Patient ID</div></th>
                        <th width="254" valign="top"><div align="left">Patient Name</div></th>
                        <th width="150" valign="top"><div align="left">File</div></th>
                        <th width="173" valign="top"><div align="left">Cell Number</div></th>
                        <th width="100" valign="top"> <div align="left">Date</div></th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            $x = 1;
                            foreach ($protocol_search as $data) {
                                ?>

                                <tr class="">
                                    <td valign="top"><div align="left"><?php echo $x; ?></span></div></td>
                                    <td valign="top"><div align="left">
                                            <?php
                                            $length = strlen($data->manual_pid);
                                            $part1 = substr_replace("$data->manual_pid", "/", 2);
                                            //$part2=substr_replace("$data->manual_pid","",$length-2);
                                            $part2 = substr("$data->manual_pid", 2);
                                            $manual_pid = $part1 . $part2;
                                            echo $manual_pid;
                                            ?>
                                            </span></div></td>
                                    <td valign="top"><div align="left"><?php echo $data->patient_name; ?></span></div></td>
                                    <td valign="top"><div align="left"><a href="<?php echo base_url(); ?><?php echo $data->file_upload; ?>">
                                                <button class="btn btn-danger"><span class="glyphicon glyphicon-download"></span>&nbsp;Download</button>
                                            </a></span></div></td>
                                    <td valign="top"><div align="left"><?php echo $data->cell_number; ?></span></div></td>
                                    <td valign="top"><div align="left"><?php echo $data->current_date; ?></span></div></td>
                                </tr>
                                <?php
                                $x++;
                            }
                            ?>
                        </tbody>
                    </table>
                    <?php
                } else {
                    echo "<center><font color=red><h5></h5></font></center>";
                }
                ?>
            </div>


        </div>
    </div>
</div>


</body>

</div>

<script>
    $(function() {
        $('#myTab a:first').tab('show')
    })
</script>
<script type="text/javascript">
    $('#starting_date_protocol').datepicker()
</script>
<script type="text/javascript">
    $('#ending_date_protocol').datepicker()
</script>
</html>