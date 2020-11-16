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
  $(":focus").css("background-color","yellow");
});

</script>
<style>
    .ui-autocomplete {
            max-height: 200px;
            overflow-y: auto;
            /* prevent horizontal scrollbar */
            overflow-x: hidden;
            /* add padding to account for vertical scrollbar */
            padding-right: 20px;
    }
    /* IE 6 doesn't support max-height
     * we use height instead, but this forces the menu to always be this tall
     */
    * html .ui-autocomplete {
        height: 100px;
    }
</style>
  <script type="text/javascript">
function $_(IDS) { return document.getElementById(IDS); }
function toggle(Info) {
  var CState = $_(Info);
  if (CState.style.display != "none") { CState.style.display = "none"; }
                                 else { CState.style.display = "block"; }
}
function HideElem(IDS1, IDS2) {
  toggle(IDS1);
  toggle(IDS2);
}
</script>

<script>
            $(function() {
<?php
foreach ($dynamicSearch_pInfo as $row):
    $dynamicSearch_pInfo[] = $row->patient_id;
endforeach;

echo "var javascript_array =" . json_encode($dynamicSearch_pInfo);
?>

                $( "#patient_id" ).autocomplete({
                    source: javascript_array
                });

            });
        </script>
        
        <script>
            $(function() {
<?php
foreach ($dynamicSearch_pInfo_mauan_pid as $row):
        $length=strlen($row->manual_pid); 
        $part1=substr_replace("$row->manual_pid","/",2);
        $part2=substr("$row->manual_pid",2);
                //$part2=substr_replace("$row->manual_pid","",$length);
        $manual_pid=$part1.$part2;
    $dynamicSearch_pInfo_mauan_pid[] = $manual_pid;
endforeach;

echo "var javascript_array =" . json_encode($dynamicSearch_pInfo_mauan_pid);
?>

                $( "#TBox0" ).autocomplete({
                    source: javascript_array
                });

            });
        </script>
    </head>
    <br><br><br>
    <body>
     
  
           <div class="container">
               <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <center><h4> <strong>Date to Date Searching Remarks</strong></h4></center>
         </div>
           
               
 <div align="right">
                    <a href="<?php echo base_url(); ?>welcome/backhome.html">
                                <button class="btn btn-default">&nbsp;Cancel
                                </button></a>
                    </div>
                <form name="patient_revisit" method="post" action="<?php echo base_url();?>data_record/patient_revisit_information_data_revisit_by_date_remarks.html">
                   
            <div class="row">
                 <div class="col-md-2"></div>
                 <div class="col-md-2"></div>
                <div class="col-md-2">
                      <div class="">
               Starting Date<div class="form-group has-success">
                   <input type="date" class="form-control" id="starting_date" name="starting_date" autofocus="">
                     <br>
                     Ending Date
                     <input type="date" class="form-control" id="ending_date"name="ending_date">
                          
        </center>
        <br>
                             <div class="">
                                 <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>
Search</button>
                                 
                             </div>
        
                <br>
                </div></div>
                    
                </div>
           
                
            </div>
        
        
        </form> 
        
  

</div>
            
            
        </div>
     
    </body>

<script type="text/javascript">
    $('#starting_date').datepicker()
</script>

<script type="text/javascript">
    $('#ending_date').datepicker()
</script>
<script type="text/javascript">
    $('#current_date').datepicker()
</script>
<script type="text/javascript">
    $('#rev_date').datepicker()
</script>
     </html>
       