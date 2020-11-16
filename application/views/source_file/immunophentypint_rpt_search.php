<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
        <script src="<?php echo base_url(); ?>data_table/js/jquery.js"></script>

        <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
          <script src="<?php echo base_url(); ?>resource/jquery-1.9.1.js"></script>
<script src="<?php echo base_url();?>resource/js/jquery-ui.js"></script> 

<link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
        <script src="<?php echo base_url(); ?>resource/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url();?>resource/js/jquery-ui.js"></script>

        <script src="<?php echo base_url(); ?>resource/Context.js-master/context.js"></script>
        <script src="<?php echo base_url(); ?>resource/Context.js-master/demo.js"></script>

        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.standalone.css" rel="stylesheet">

        
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
    <br><br>
    <center><h2>Immunophenotyping Report</h2></center>
    <hr>
    
    <div class="">
        <div class="col-md-4">
            
            
            
            
        </div>
        
          <div class="col-md-3" style="background-color: #66CCFF; border-radius: 10px;">
              <br>
             <form name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/preview_date_wise_statment_immunphenotyping.html" target="_top">
 <div class="form-group has-success">
     <input type="text" class="form-control" name="manual_pid" placeholder="Manual Patient ID" id="TBox0" autofocus="">
                                </div>
                            <div class="form-group has-success">


<font color="black">Starting Date</font><div class="form-group has-success">
    <input type="text" class="form-control" data-date-format="" id="starting_date_immunophenotyping" name="starting_date_immunophenotyping" required="1">
</div>

<font color="black">  Ending Date</font><div class="form-group has-success">
    <input type="text" class="form-control" data-date-format="" id="ending_date_immunophenotyping" name="ending_date_immunophenotyping" required="1">
</div>
<center><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></center>
</div>

                        </form>
            
            
        </div>
         <div class="col-md-3">
           <div align="right">
                    <a href="<?php echo base_url(); ?>welcome/backhome.html">
                                <button class="btn btn-danger">&nbsp;Cancel
                                </button></a>
                    </div> 
            
            
            
        </div>
        
        
    </div>


 <script type="text/javascript">
        $('#starting_date_mt').datepicker()
    </script>
    <script type="text/javascript">
        $('#ending_date_mt').datepicker()
    </script>
    
    
    
      <script type="text/javascript">
        $('#starting_date_cytogenetic').datepicker()
    </script>
    <script type="text/javascript">
        $('#ending_date_cytogenetic').datepicker()
    </script>
   
      <script type="text/javascript">
        $('#starting_date_karyotype').datepicker()
    </script>
    <script type="text/javascript">
        $('#ending_date_karyotype').datepicker()
    </script>
    
     <script type="text/javascript">
        $('#starting_date_immunophenotyping').datepicker()
    </script>
    <script type="text/javascript">
        $('#ending_date_immunophenotyping').datepicker()
    </script>
  <script type="text/javascript">
        $('#starting_date_cytopathology').datepicker()
    </script>
    <script type="text/javascript">
        $('#ending_date_cytopathology').datepicker()
    </script>    
     <script type="text/javascript">
        $('#starting_date_histopathology').datepicker()
    </script>
    <script type="text/javascript">
        $('#ending_date_histopathology').datepicker()
    </script>
     <script type="text/javascript">
        $('#starting_date_echo').datepicker()
    </script>
    <script type="text/javascript">
        $('#ending_date_echo').datepicker()
    </script>
    <script type="text/javascript">
        $('#starting_date_stool').datepicker()
    </script>
    <script type="text/javascript">
        $('#ending_date_stool').datepicker()
    </script>
    <script type="text/javascript">
        $('#starting_date_urine').datepicker()
    </script>
    <script type="text/javascript">
        $('#ending_date_urine').datepicker()
    </script>
    <script type="text/javascript">
        $('#starting_date_radiology').datepicker()
    </script>
    <script type="text/javascript">
        $('#ending_date_radiology').datepicker()
    </script>

    <script type="text/javascript">
        $('#starting_date_bonemarrow').datepicker()
    </script>
    <script type="text/javascript">
        $('#ending_date_bonemarrow').datepicker()
    </script>
    <script type="text/javascript">
        $('#starting_date_haematology').datepicker()
    </script>
    <script type="text/javascript">
        $('#ending_date_haematology').datepicker()
    </script>
    <script type="text/javascript">
        $('#starting_date_protocol').datepicker()
    </script>
    <script type="text/javascript">
        $('#ending_date_protocol').datepicker()
    </script>
    <script type="text/javascript">
        $('#starting_date_p_history').datepicker()
    </script>
    <script type="text/javascript">
        $('#ending_date_p_history').datepicker()
    </script>
    <script type="text/javascript">
        $('#starting_date_comorbidity').datepicker()
    </script>
    <script type="text/javascript">
        $('#ending_date_comorbidity').datepicker()
    </script>
    <script type="text/javascript">
        $('#starting_date').datepicker()
    </script>

    <script type="text/javascript">
        $('#ending_date').datepicker()
    </script>
    <script type="text/javascript">
        $('#starting_date_family_history').datepicker()
    </script>

    <script type="text/javascript">
        $('#ending_date_family_history').datepicker()
    </script>
    <script type="text/javascript">
        $('#starting_date_physicalfindings').datepicker()
    </script>

    <script type="text/javascript">
        $('#ending_date_physicalfindings').datepicker()
    </script>

    <script type="text/javascript">
        $('#starting_date_diagnosis').datepicker()
    </script>

    <script type="text/javascript">
        $('#ending_date_diagnosis').datepicker()
    </script>
    
       <script type="text/javascript">
        $('#starting_date_usgInfo').datepicker()
    </script>
       <script type="text/javascript">
        $('#ending_date_usginfo').datepicker()
    </script>
    
    
      <script type="text/javascript">
        $('#starting_date_multiple').datepicker()
    </script>
    
      <script type="text/javascript">
        $('#ending_date_multiple').datepicker()
    </script>
    
    
     <script type="text/javascript">
        $('#starting_date_usg').datepicker()
    </script>
     <script type="text/javascript">
        $('#ending_date_usg').datepicker()
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

