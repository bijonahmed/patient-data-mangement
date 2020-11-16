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

        <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
     

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
<style>
    ._bottoninfo
    {
        margin-bottom: 100px;
    }
</style>
<body>
    <br> <br>  <br>

    <div class="">
        <div class="">
            <div class="tabbable tabs-left" style="margin-left: 40px;">
                <ul class="nav nav-tabs">
                    <li><a href="<?php echo base_url(); ?>welcome/patient_date_to_date_searching.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Patient ID wise</a></li>

                    <li ><a href="<?php echo base_url(); ?>welcome/patient_name_searching.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;By Name</a></li>

                    <li ><a href="<?php echo base_url(); ?>data_record/patient_find_information_by_date_wise.html" data-toggle="_tab"><span class="glyphicon glyphicon-search"></span>&nbsp;Date wise</a></li>
                    <li><a href="<?php echo base_url(); ?>welcome/patient_find_information_by_remarks.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Remarks wise</a></li>
                    <li class="active"><a href="#d" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Gender wise</a></li>
                   
                </ul>
            </div>
        </div>
        <div class="">



        </div><div class="col-md-8">
            <h3>Find Patient Information <font color="red"><strong>[Find Gender Wise]</strong></font></h3>
            <hr>
            <div id="">
                <div class="form-group has-warning">
                    <form class="form-inline" name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/preview_date_wise_statment_sex_searching.html">
                        <table width="922" border="0" style="margin-left: 100px;">
                            <tr>
                                <th scope="col">  <select name="sex" class="form-control">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                    <input type="text" class="form-control" id="starting_date_sex" name="starting_date_sex" required="1" placeholder="Form Date">
                                    <input type="text" class="form-control" id="ending_date_sex" name="ending_date_sex" required="1" placeholder="To Date">
                                    <button class="btn btn-primary" id="start"><span class="glyphicon glyphicon-search"></span> Search</button>
                                </th>
                            </tr>
                        </table>     



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
                    <div class="form-group has-success">
                        <?php
                        if (isset($sex_by_search)) {
                            ?><br>

                            <table cellpadding="0" cellspacing="0" border="0" class="table table-hover" id="example" style="width: 1000px;">
                                <thead>
                                    <tr>
                                        <td colspan="8" valign="top"><div align="center"><strong>Gender : <font color="red">
                                                    <?php if (isset($sex_information)) echo $sex_information; ?>
                                                    </font> </strong></div></td>
                                    </tr>
                                    <tr>
                                        <th colspan="8" valign="top"><center>From <?php echo date("d-m-Y", strtotime(($date_from))); ?> To <?php echo date("d-m-Y", strtotime(($date_to))); ?></center></th>
                                </tr>
                                <tr>
                                    <td valign="top"><div align="left">SL NO</div></td>
                                    <td valign="top"><div align="left">Patient Name</div></td>
                                    <td valign="top"><div align="left">Patient ID</div></td>
                                    <td valign="top"><div align="left">Date</div></td>
                                    <td valign="top"><div align="left">Age</div></td>
                                    <td valign="top"><div align="left">Sex</div></td>
                                    <td valign="top"><div align="left">Mobile</div></td>
                                    <td valign="top"><div align="left">Address</div></td>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $x = 1; {
                                        ?>
                                        <?php
                                        foreach ($sex_by_search as $data) {
                                            ?>

                                            <tr>
                                                <td valign="top"><div align="left"><?php
                                echo $x;

                                ;
                                            ?></div></td>
                                                <td valign="top"><div align="left">
                                                        <?php
                                                        echo $data->patient_name;
                                                        ?>
                                                    </div></td>
                                                <td valign="top"><div align="left">
                                                        <?php
                                                        $length = strlen($data->manual_pid);
                                                        $part1 = substr_replace("$data->manual_pid", "/", 2);
                                                        //$part2=substr_replace("$data->manual_pid","",$length-2);
                                                        $part2 = substr("$data->manual_pid", 2);
                                                        $manual_pid = $part1 . $part2;
                                                        echo $manual_pid;
                                                        ?> 
                                                    </div></td>
                                                <td valign="top"><div align="left">
                                                        <?php
                                                        echo date("d-m-Y", strtotime($data->current_date));
                                                        ?> 
                                                    </div></td>
                                                <td valign="top"><div align="left">
                                                        <?php
                                                        echo $data->age;
                                                        ?> 
                                                    </div></td>
                                                <td valign="top"><div align="left">
                                                        <?php
                                                        echo $data->sex;
                                                        ?> 
                                                    </div></td>
                                                <td valign="top"><div align="left">
                                                        <?php
                                                        echo $data->cell_number;
                                                        ?> 
                                                    </div></td>
                                                <td valign="top"><div align="left">
                                                        <?php
                                                        echo $data->address;
                                                        ?> 
                                                    </div></td>



                                                <?php
                                                $x++;
                                            }
                                        }
                                        ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
    $("#btnExport").click(function(e) {
        window.open('data:application/vnd.ms-excel,' + encodeURIComponent($('#dvData').html()));
        e.preventDefault();
    })
</script>

<script type="text/javascript">
    $('#starting_date_sex').datepicker()
</script>
<script type="text/javascript">
    $('#ending_date_sex').datepicker()
</script>

</body>


</html>