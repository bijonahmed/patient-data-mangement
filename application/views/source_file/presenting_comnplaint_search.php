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
        <script src="<?php echo base_url(); ?>resource/bootstrap_datatabls/dataTables.tableTools.js"></script>
        <script src="<?php echo base_url(); ?>resource/bootstrap_datatabls/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>resource/bootstrap_datatabls/TableTools/media/js/TableTools.js"></script> 
        <script src="<?php echo base_url(); ?>resource/bootstrap_datatabls/TableTools/media/js/ZeroClipboard.js"></script> 





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
    body { font-size: 140%; }
    div.DTTT { margin-bottom: 0.5em; float: right;}
    div.dataTables_wrapper { clear: left; }
</style>


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
                    <li class="active"><a href="#a" data-toggle="tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Presenting Complaint</a></li>

                    <li><a href="<?php echo base_url(); ?>welcome/comorbidity_search_informaiton.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Comorbidity</a></li>

                    <li ><a href="<?php echo base_url(); ?>welcome/personalhistory_search_info.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Personal History</a></li>
                    <li><a href="<?php echo base_url(); ?>welcome/family_history_search_info.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Family History</a></li>
                    <li><a href="<?php echo base_url(); ?>welcome/physical_findings_info.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Physical Findings</a></li>
                    <li><a href="<?php echo base_url(); ?>welcome/diagnosis_info.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Diagnosis</a></li>
                    <li><a href="<?php echo base_url(); ?>welcome/protocol_info.html" data-toggle="_tab"><div class="glyphicon glyphicon-search"></div>&nbsp;Protocol</a></li>
                </ul>
            </div>
        </div>


        <div class="col-md-9">
            <h3>Find Patient Information <font color="red"><strong>[Presenting Complaint ]</strong></font></h3>
            <hr>
            <div class="">
                <form name="conditional_report" class="" method="post" action="<?php echo base_url(); ?>welcome/presenting_complaint_search.html" target="_top">
                    <div class="form-group has-success">
                        <div class="row">
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="manual_pid" placeholder="Patient ID" id="TBox0" autofocus="">
                            </div>
                            <div class="col-md-3">
                                <select name="cc_name_id" id="select" required="1" class="form-control">

                                    <?php
                                    foreach ($complaint_nameInfo as $data) {
                                        ?>

                                        <option value="<?php echo $data->cc_name_id; ?>"> <?php echo $data->complain_name; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" data-date-format="" id="starting_date" name="prescription_date_from"  placeholder="Form Date" required="1"> 

                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" data-date-format="" id="ending_date"name="prescription_date_from_date_to"  placeholder="Ending Date">

                            </div>
                            <div class="col-md-1">
                                <button class="btn btn-primary"><span class="glyphicon glyphicon-search" onclick="return myFunction();"></span>Search</button>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <hr>
            <script>
 function myFunction(){
                                       
var starting_date =  new Date($('#starting_date').val());
var ending_date = new Date($('#ending_date').val());

if (starting_date > ending_date) {
   alert('Sorry Please Valid Date Range');
   return false;
   //return false;
}else{
 return true;    
   //return true;
}                   
 }

</script>  
             
            <div class="form-group has-success">

                <?php
                if ($complaint != null) {
                    ?>
                    <div align="center">
                        <strong>Presenting Complaint List OF<BR><font color="red"><?php if (isset($presenting_complaint)) echo $presenting_complaint; ?></font> </strong>
                        <br>From <?php echo $date_from; ?> To <?php echo $date_to; ?>


                    </div>

                    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover" id="example">

                        <thead>
                            <tr class="">
                                <th width="150">SL NO</th>
                                <th width="150">Patient ID</th>
                                <th width="300">Patient Name</th>
                                <th width="200">Cell Number</th>
                                <th width="200"> Date</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $x = 1;
                            foreach ($complaint as $data) {
                                ?>

                                <tr class="">
                                    <td><?php echo $x; ?></span></td>
                                    <td><?php
                        $length = strlen($data->manual_pid);
                        $part1 = substr_replace("$data->manual_pid", "/", 2);
                        //$part2=substr_replace("$data->manual_pid","",$length-2);
                        $part2 = substr("$data->manual_pid", 2);
                        $manual_pid = $part1 . $part2;
                        echo $manual_pid;
                                ?></span></td>
                                    <td><?php echo $data->patient_name; ?></span></td>
                                    <td><?php echo $data->cell_number; ?></span></td>
                                    <td><?php echo date("d-m-Y", strtotime($data->current_date)); ?></span></td>
                                    <td>






                                    </td>
                                    </td>
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
    $('#starting_date').datepicker()
</script>
<script type="text/javascript">
    $('#ending_date').datepicker()
</script>
<script>
 function myFunction(){
                                       
var from_visit = $('#from_visit').val();
var to_visit = $('#to_visit').val();

if (from_visit > to_visit) {
   alert('Sorry Please Valid Visit Range');
   return false;
   //return false;
}else{
 return true;    
   //return true;
}                   
 }

</script>  
</html>
