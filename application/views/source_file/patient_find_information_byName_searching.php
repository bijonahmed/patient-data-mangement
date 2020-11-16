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
        <script src="<?php echo base_url();?>resource/js/jquery-ui.js"></script>
  <script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>resource/Context.js-master/context.js"></script>
        <script src="<?php echo base_url(); ?>resource/Context.js-master/demo.js"></script>

        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.standalone.css" rel="stylesheet">


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="<?php echo base_url(); ?>resource/jquery-1.9.1.js"></script>
<script src="<?php echo base_url();?>resource/js/jquery-ui.js"></script>

<link href="<?php echo base_url();?>resource/css/jquery-ui.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
  <script>
      $(document).ready(function(){
  $("#patient_id").focus();
  $(":focus").css("background-color","white");
});

</script>
 
<style>
    .ui-autocomplete {
            max-height: 600px;
            overflow-y: auto;
            /* prevent horizontal scrollbar */
            overflow-x: hidden;
            /* add padding to account for vertical scrollbar */
            padding-right: 200px;
    }
    /* IE 6 doesn't support max-height
     * we use height instead, but this forces the menu to always be this tall
     */
    * html .ui-autocomplete {
        height: 600px;
    }
</style>
 

<script>
            $(function() {
<?php
foreach ($dynamicSearch_pInfo_pname as $row):
    $dynamicSearch_pInfo_pname[] = $row->patient_name;
endforeach;

echo "var javascript_array =" . json_encode($dynamicSearch_pInfo_pname);
?>

                $( "#patient_name" ).autocomplete({
                    source: javascript_array
                });

            });
        </script>
         <script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>
    </head>
    <br><br><br><br>
    <body>
        <div class="container">
            
    <div class="container">
  <div class="row">

 
  </div><!-- /row -->
  <div class="row">
    
    <div class="col-md-8"><h3>Find Patient Information</h3>
        
      <!-- tabs left -->
      <div class="tabbable tabs-left">
           <ul class="nav nav-tabs">
              <li><a href="<?php echo base_url();?>welcome/patient_date_to_date_searching.html" data-toggle="_tab">Patient ID wise</a></li>
            <li class="active"><a href="<?php echo base_url();?>welcome/patient_name_searching.html" data-toggle="_tab">By Name</a></li>
         
          <li ><a href="<?php echo base_url();?>data_record/patient_find_information_by_date_wise.html" data-toggle="_tab">Date wise</a></li>
          <li><a href="<?php echo base_url();?>welcome/patient_find_information_by_gender_wise.html" data-toggle="_tab">Gender wise</a></li>
          <li><a href="#e" data-toggle="tab">Between Age</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="a">
                <span class="col-md-1"></span>
                <div class="col-md-8">
                    <?php
                    /*
                    <button type="button" class="btn btn-default" id="btnExport"><span class="glyphicon glyphicon-stats"></span> Excel</button>
                     */
                    ?>
                    
                    
                <div class="form-group has-success">
                    
                    <form class="form-inline" name="p_id" method="post" action="<?php echo base_url();?>data_record/pt_find_information_by_name.html">
                       
                        <label>Input Patient Name</label> <input type="text" name="patient_name" placeholder="Input Patient Patient" id="patient_name" class="form-control" autofocus="" required="1">
 
                        <button class="btn btn-default"> <span class="glyphicon glyphicon-search"></span> Search</button>
                        
                    </form>
                    <br>
                 
                 
                    <div id="dvData">
                    <table cellpadding="0" cellspacing="0" border="2" class="table" id="example_" style="width: 890px;">
<thead>
<tr>
<th>SL NO</th>
<th>Patient Name</th>
<th>Patient ID</th>
<th>Age</th>
<th>Sex</th>
<th>Mobile</th>
<th>Address</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
$x=1; {

?>
<?php
 
foreach($particular as $data) {
?>

<tr>
    <td><?php    echo $x;
    
        ;?></td>
    <td><?php 
     echo $data->patient_name;
    
        ?></td>
    <td><?php  $length=strlen($data->manual_pid); 
        $part1=substr_replace("$data->manual_pid","/",2);
        //$part2=substr_replace("$data->manual_pid","",$length-2);
        $part2=substr("$data->manual_pid",2);
        $manual_pid=$part1.$part2;
    echo $manual_pid;?> </td>
    <td><?php  
        echo $data->age;
    
        ?> </td>
    <td><?php  
     echo $data->sex;   
   ?> </td>
    <td><?php  
     echo $data->cell_number;   
     ?> </td>
    <td><?php  
     echo $data->address;   
   ?> </td>
    
    <td>
        <a class="tooltips link" href="<?php echo base_url(); ?>data_record/edit_form_particular_by_name/<?php echo $data->patient_id; ?>" onClick="return sure_();" style="text-decoration:none"><div class="glyphicon glyphicon-edit"></div><span>Edit Particular</span>&nbsp;EDIT</a>
                                        </td>

<?php
$x++;
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
         <div class="tab-pane" id="b">Secondo sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
         Aliquam in felis sit amet augue.</div>
         <div class="tab-pane" id="c">Thirdamuno, ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
         Quisque mauris augue, molestie tincidunt condimentum vitae. </div>
            <div class="tab-pane" id="d">Thirdamuno, ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
         Quisque mauris augue, molestie tincidunt condimentum vitae. </div>
            <div class="tab-pane" id="e">Thirdamuno, ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
         Quisque mauris augue, molestie tincidunt condimentum vitae. </div>
        </div>
      </div>
      <!-- /tabs -->
      
    </div>
  </div><!-- /row -->
</div>
  
<hr>

<script>
  $(function () {
    $('#myTab a:first').tab('show')
  })
</script>
<script>
$("#btnExport").click(function(e) {
    window.open('data:application/vnd.ms-excel,' + encodeURIComponent($('#dvData').html()));
    e.preventDefault();
}) 
    </script>
        <script>
$('[data-toggle="tooltip"]').tooltip({
    'placement': 'top'
});
$('[data-toggle="popover"]').popover({
    trigger: 'hover',
        'placement': 'top'
});

$('#userNameField').tooltip({
    'show': true,
        'placement': 'bottom',
        'title': ""
});

$('#userNameField').tooltip('show');
</script>
</div>
</body>


     </html>