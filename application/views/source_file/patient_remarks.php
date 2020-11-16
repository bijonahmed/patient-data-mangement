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
 //    $dynamicSearch_pInfo_mauan_pid[] = $patient_name;
    //$dynamicSearch_pInfo_mauan_pid[] = $row->patient_name;
endforeach;

echo "var javascript_array =" . json_encode($dynamicSearch_pInfo_mauan_pid);
?>

                $( "#TBox0" ).autocomplete({
                    source: javascript_array
                });

            });
        </script>
    <br><br>
    
    <center><h2>Add Patient's Remarks</h2>
          <font color="#FF0000">
                                                        <?php
                                                        $message = $this->session->userdata('save_message');
                                                        //echo $message;
                                                        if (isset($message)) {
                                                            echo $message;
                                                            $this->session->unset_userdata('save_message');
                                                        }
                                                        ?>
                                                        </font>
    
    </center>
    <hr>
  
    <div class="">
     
            
            
            
      
        <div class="col-md-4">
            
        
            
            
        </div>
        <body>
            <div class="col-md-3" style=" border-radius: 10px;">
              <br>
              <div class="form-group has-success">
             <form name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/save_patient_remarks.html" target="_top">
                 <input type="text" class="form-control" name="manual_pid" placeholder="Patient ID" id="TBox0" autofocus="">
                                  <br>
                                   <font color="black"> Date</font><div class="form-group has-success">
                                <input type="text" class="form-control" data-date-format="" id="ending_date_haematology" name="remarks_date" required="1">
                            </div>
                               
                            <font color="black">Remarks</font>
                                                            <select name="remarks_id" id="path_test_group_id" class="form-control" >
<option selected="selected">Select</option>
<?php
foreach ($remarks_data as $data) {
?>
<option value="<?php echo $data->remarks_id; ?>"> <?php echo $data->remarks; ?> </option>
<?php } ?>
</select>
                            </div>

                           

                            <center><button class="btn btn-primary"><span class="glyphicon glyphicon-saved"></span> Save</button></center>
                            <br>
                        </form>
            
            
        </div>
         <div class="col-md-3">
           <div align="right">
              <button class="btn btn-default" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span></button>
                 <a href="<?php echo base_url(); ?>welcome/remarks_patient_data_view.html">
                                <button class="btn btn-default">&nbsp;EDIT
                                </button></a>
                    <a href="<?php echo base_url(); ?>welcome/backhome.html">
                                <button class="btn btn-default">&nbsp;Cancel
                                </button></a>
                    </div> 
            
            
            
        </div>
        
        
    </div>
      <!-- Physical Fidings Heading Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Add New Remarks</h4>
      </div>
      <div class="modal-body">
<div class="form-group has-success">
  
   <div align="right">
                           <a href="<?php echo base_url();?>welcome/view_remarks_Info.html" target="_top">
                       <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>&nbsp;Search
                       </button></a> 
                       
                    </div>
                    
                    
                    
                     <div class="form-group has-success">
                         <br>
                         <form id="remarksinfo" method="post" action="<?php echo base_url();?>data_record/save_patient_remarks_name_by_modal.html">
                        <input type="text" class="form-control" name="remarks" id="inputSuccess1" placeholder="Remarks Name" required="1"><br>
                        <center>                    
                            <button class="btn btn-primary" id="btn_remarks"><span class="glyphicon glyphicon-saved"></span> Save</button>  
                        
                        
                        </center>
                             </form></div>
         
         
         
     </div> 
      </div>
     
    </div>
  </div>
</div>               
          
</body>

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
