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
  <body>


<body>  <br><br>
    <div class="container">
        
        <div class="row">
           
             <div class="col-md-12">
               
<div class="form-group has-success">
    <div align="right">
<a href="<?php echo base_url();?>data_record/create_pdf_date_to_date_searching"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-book"></span> PDF</button>
    </a>
        
<?php
/*
 * <button type="button" class="btn btn-default" onclick="javascript:printDiv('printablediv')"><i class="icon-print"></i> <span class="glyphicon glyphicon-zoom-in"></span> Printing</button>

<a href="<?php echo base_url();?>data_record/pdf_all_complaint_group_info"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-book"></span> PDF</button>
    </a>
 *   <button type="button" class="btn btn-default" id="btnExport"><span class="glyphicon glyphicon-stats"></span> Excel</button>
    <a href="<?php echo base_url();?>data_record/create_pdf_date_to_date_searching.html">
    <button type="button" class="btn btn-default" id="btnExport"><span class="glyphicon glyphicon-book"></span> PDF</button>
</a>
 */

?>
<style>
    
    .font_size_patientlist
    {
        font-size: 30px;
    }
</style>
  

    </div>
    <div id="printablediv" style="width: 100%; background-color: none; height: auto">
    <div align="center">
        <div class="font_size_patientlist">Patient List</div>
        <br>From <?php echo $date_from;?> To <?php echo $date_to;?>
        <br>
        <br>
     
    </div>
   
        
        <div id="dvData">
         <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="example">

<thead>
<tr class="">
       <th width="80">SL NO</th>
    <th width="100">Patient ID</th>
<th width="200">Patient Name</th>
<th width="150">Cell Number</th>
<th width="100"> Date</th>
<th width="100"> Age</th>
<th width="100"> Sex</th>
<th width="100"> Address</th>
<th width="100"> Diagnosis</th>

<th></th>
</tr>
</thead>
<tbody>
   <?php
$x=1;
foreach($complaint as $data) {
?>

<tr class="">
<td><?php echo $x;?></span></td>
<td><?php  $length=strlen($data->manual_pid); 
        $part1=substr_replace("$data->manual_pid","/",2);
        $part2=substr("$data->manual_pid",2);
        //$part2=substr_replace("$data->manual_pid","",-($length-2));
        $manual_pid=$part1.$part2;
    echo  $manual_pid;?></span></td>
<td><?php echo $data->patient_name;?></span></td>
<td><?php echo $data->cell_number;?></span></td>
<td><span><?php echo date("d-m-Y",strtotime($data->current_date));?></span></td>
<td><span><?php echo $data->age;?></span></td>
<td><span><?php echo $data->sex;?></span></td>
<td><span><?php echo $data->address;?></span></td>
<td><span><?php echo $data->customized_diagnosis_category_name;?></span></td>

<td>






</td>
</td>
</tr>
<?php 
 $x++;

}?>
</tbody>
</table>
            </div>
    </div>
        </div> 
         
         
     </div> 
                
            
            </div>
            
            
        </div>
    </div>
    
    
    
</body>
<script>
$("#btnExport").click(function(e) {
    window.open('data:application/vnd.ms-excel,' + encodeURIComponent($('#dvData').html()));
    e.preventDefault();
}) 
    </script>