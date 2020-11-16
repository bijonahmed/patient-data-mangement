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


  <!-- Bootstrap -->
  <body>
       <script src="<?php echo base_url(); ?>resource/Context.js-master/context.js"></script>
  <script src="<?php echo base_url(); ?>resource/Context.js-master/demo.js"></script>

   <link href="<?php echo base_url(); ?>resource/Context.js-master/context.bootstrap.css" rel="stylesheet">
      <link href="<?php echo base_url(); ?>resource/Context.js-master/context.standalone.css" rel="stylesheet">
     <style type="text/css">
		#target {
			width: 300px;
			height: 300px;
		}
	</style>
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
               <script>
            $(function() {
<?php
foreach ($dynamicSearch_pInfo_mauan_pid as $row):
    $dynamicSearch_pInfo_mauan_pid[] = $row->manual_pid;
endforeach;

echo "var javascript_array =" . json_encode($dynamicSearch_pInfo_mauan_pid);
?>

                $( "#c_pid" ).autocomplete({
                    source: javascript_array
                });

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
            $(document).ready(function() {
                $("#select").focus();
                $(":focus").css("background-color", "MistyRose");
            });
        </script>
        <style type="text/css">
            .box{
                padding: 20px;
                display: none;
                margin-top: 20px;
                border-radius: 20px;

                /* border: 1px solid #000;*/
            }
            .red{ background: white; }
            .presenting_complaint{ background: white; }
            .comorbidity{ background: white; }
            .personal_history{ background: white; }
            .family_history{ background: white; }
            .physical_findings{ background: white; }
            .diagnosis_information{ background: white; }
            .protocol_search{ background: white; }
            .investigation_haematology{ background: white; }
            .investigation_bonemarrow{ background: white; }
            .investigation_radiology{ background: white; }
            .investigation_usg{ background: white; }
            .investigation_urine{ background: white; }
            .investigation_stool{ background: white; }
            .add_new_physicalfindings{ background: white; }
            .add_new_diagnosis_category{ background: white; }
            .diagnosis_one{ background: white; }
            .physical_findings_one{ background: white; }
            .family_history_one{ background: white; }
            .personal_history_one{ background: white; }
            .comorbidity_one{ background: white; }
            .presenting_complaint_one{ background: white; }
            .investigation_echo{ background: white; }
            .investigation_histopathology{ background: white; }
            .investigation_cytopathology{ background: white; }
            .investigation_immuno{ background: white; }
            .investigation_karyotype{ background: white; }
            .investigation_cytogenetic{ background: white; }
            .investigation_mt{ background: white; }
            .my_protocol{ background: white; }
            .haematology{ background: white; }
            .bonemarrow{ background: white; }
             .radiology{ background: white; }
            .usg{ background: white; }
            .investigation_multiple{ background: white; }
        </style>

        <script type="text/javascript">

            $(document).ready(function() {
                $("select").change(function() {
                    $("select option:selected").each(function() {
                        if ($(this).attr("value") == "red") {
                            $(".box").hide();
                            $(".red").show();
                        }
                        if ($(this).attr("value") == "presenting_complaint") {
                            $(".box").hide();
                            $(".presenting_complaint").show();
                        }
                        if ($(this).attr("value") == "comorbidity") {
                            $(".box").hide();
                            $(".comorbidity").show();
                        }
                        if ($(this).attr("value") == "personal_history") {
                            $(".box").hide();
                            $(".personal_history").show();
                        }
                        if ($(this).attr("value") == "family_history") {
                            $(".box").hide();
                            $(".family_history").show();
                        }
                        if ($(this).attr("value") == "physical_findings") {
                            $(".box").hide();
                            $(".physical_findings").show();
                        }
                        if ($(this).attr("value") == "diagnosis_information") {
                            $(".box").hide();
                            $(".diagnosis_information").show();
                        }
                        if ($(this).attr("value") == "protocol_search") {
                            $(".box").hide();
                            $(".protocol_search").show();
                        }
                        if ($(this).attr("value") == "investigation_haematology") {
                            $(".box").hide();
                            $(".investigation_haematology").show();
                        }
                        if ($(this).attr("value") == "investigation_bonemarrow") {
                            $(".box").hide();
                            $(".investigation_bonemarrow").show();
                        }
                        if ($(this).attr("value") == "investigation_radiology") {
                            $(".box").hide();
                            $(".investigation_radiology").show();
                        }
                        if ($(this).attr("value") == "investigation_usg") {
                            $(".box").hide();
                            $(".investigation_usg").show();
                        }
                        if ($(this).attr("value") == "investigation_urine") {
                            $(".box").hide();
                            $(".investigation_urine").show();
                        }
                        if ($(this).attr("value") == "investigation_stool") {
                            $(".box").hide();
                            $(".investigation_stool").show();
                        }
                        if ($(this).attr("value") == "diagnosis_one") {
                            $(".box").hide();
                            $(".diagnosis_one").show();
                        }
                        if ($(this).attr("value") == "physical_findings_one") {
                            $(".box").hide();
                            $(".physical_findings_one").show();
                        }
                        if ($(this).attr("value") == "family_history_one") {
                            $(".box").hide();
                            $(".family_history_one").show();
                        }
                        if ($(this).attr("value") == "personal_history_one") {
                            $(".box").hide();
                            $(".personal_history_one").show();
                        }
                        if ($(this).attr("value") == "comorbidity_one") {
                            $(".box").hide();
                            $(".comorbidity_one").show();
                        }
                        if ($(this).attr("value") == "presenting_complaint_one") {
                            $(".box").hide();
                            $(".presenting_complaint_one").show();
                        }
                         if ($(this).attr("value") == "investigation_echo") {
                            $(".box").hide();
                            $(".investigation_echo").show();
                        }
                        if ($(this).attr("value") == "investigation_histopathology") {
                            $(".box").hide();
                            $(".investigation_histopathology").show();
                        }
                        if ($(this).attr("value") == "investigation_cytopathology") {
                            $(".box").hide();
                            $(".investigation_cytopathology").show();
                        }
                        if ($(this).attr("value") == "investigation_immuno") {
                            $(".box").hide();
                            $(".investigation_immuno").show();
                        }
                        if ($(this).attr("value") == "investigation_karyotype") {
                            $(".box").hide();
                            $(".investigation_karyotype").show();
                        }
                        if ($(this).attr("value") == "investigation_cytogenetic") {
                            $(".box").hide();
                            $(".investigation_cytogenetic").show();
                        }
                        if ($(this).attr("value") == "investigation_mt") {
                            $(".box").hide();
                            $(".investigation_mt").show();
                        }
                         if ($(this).attr("value") == "my_protocol") {
                            $(".box").hide();
                            $(".my_protocol").show();
                        }
                        if ($(this).attr("value") == "haematology") {
                            $(".box").hide();
                            $(".haematology").show();
                        }
                        if ($(this).attr("value") == "bonemarrow") {
                            $(".box").hide();
                            $(".bonemarrow").show();
                        }
                        if ($(this).attr("value") == "radiology") {
                            $(".box").hide();
                            $(".radiology").show();
                        }
                         if ($(this).attr("value") == "usg") {
                            $(".box").hide();
                            $(".usg").show();
                        }
                        if ($(this).attr("value") == "investigation_multiple") {
                            $(".box").hide();
                            $(".investigation_multiple").show();
                        }
                    });
                }).change();
            });
            //investigation_multiple
        </script>
        <style>
            /* Gradient transparent - color - transparent */ hr.style-two { border: 0; height: 1px; background-image: -webkit-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); background-image: -moz-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); background-image: -ms-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); background-image: -o-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); }
        </style>
        <style>
            .topinfo
            {
                margin-top: 20px;

            }
        </style>
    </head>

    <body class="info topinfo">
        <br><br>
        <div class="container">
            <h2><font color="black">Data Searching ...</font></h2>

            <hr class="style-two">
            <div class="row">
                <div class="col-md-3">
                    <div class="col-md-4">
        
                </div>
                    <div class="form-group has-success">
                        <br>
                        <select name="choose_selected" class="form-control input-append">
                            <option>Select report type</option>
                            <?php
                            /*
                              <option value="red">Red</option>
                             *   <option value="investigation_mt">MT Report</option>
                             * 
                             */
                            ?>
                             <option value="presenting_complaint_one">Presenting Complaint</option>
                            <option value="comorbidity_one">Comorbidity</option>
                            <option value="personal_history_one">Personal History</option>
                            <option value="family_history_one">Family History</option>
                            <option value="physical_findings_one">Physical Findings</option>
                            <option value="diagnosis_one">Diagnosis</option>
                            <option value="my_protocol">Protocol</option>
                            <option value="haematology">Haematological Report</option>
                              <option value="investigation_multiple">Multiple Report</option>
                            <option value="bonemarrow">Bone Marrow Report</option>
                            <option value="radiology">Radiology Report</option>
                            <option value="usg">USG Report</option>
                            <option value="investigation_urine">Urine Report</option>
                            <option value="investigation_stool">Stool Report</option>
                             <option value="investigation_echo">Echo Report</option>
                             <option value="investigation_histopathology">Histopathology Report</option>
                             <option value="investigation_cytopathology">Cytopathology Report</option>
                             <option value="investigation_immuno">Immunophenotyping Report</option>
                             <option value="investigation_karyotype">Karyotype Report</option>
                             <option value="investigation_cytogenetic">Cytogenetic Report</option>
                            
                        </select>
                    </div>

                </div>
                <div class="col-md-2">
        
                </div>


                <div class="col-md-3">
                    <?php
                    /*
                     * 
                      <div class="red box">You have selected <strong>red option</strong> so i am here</div>
                   
                   
                    
                    <div class="investigation_mt box" style="background-color:  cornflowerblue; border-radius: 10px;">
                        
                      <form name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/preview_date_wise_statment_mt.html" target="_top">

                            <div class="form-group has-success">


                                <font color="black">Starting Date</font><div class="form-group has-success">
                                    <input type="text" class="form-control" data-date-format="" id="starting_date_mt" name="starting_date_mt" required="1">
                                </div>

                                <font color="black">  Ending Date</font><div class="form-group has-success">
                                    <input type="text" class="form-control" data-date-format="" id="ending_date_mt" name="ending_date_mt" required="1">
                                </div>
                                <center><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></center>
                            </div>

                        </form>
                        
                        
                    </div>
                     *   */
                  
                     ?>
                    
                    <div class="investigation_multiple box">
                        multiple report
                          <form name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/preview_date_wise_statment_multiple_rpt.html" target="_top">
    <div class="form-group has-success">
 <input type="text" class="form-control" name="manual_pid" placeholder="Manual Patient ID">
                            
                                  </div>
                            <font color="white"> Starting Date</font><div class="form-group has-success">
                                <input type="text" class="form-control" data-date-format="" id="starting_date_usg" name="starting_date_multiple" required="1">
                            </div>

                            <font color="white">  Ending Date</font><div class="form-group has-success">
                                <input type="text" class="form-control" data-date-format="" id="ending_date_usg" name="ending_date_multiple" required="1">
                            </div>

                            <center><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></center>



                        </form>
                        
                        
                        
                        
                    </div>
                     
                     
                       <div class="usg box"  style="background-color:#CC66FF; border-radius: 10px;">  
                       
                          

                        <form name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/preview_date_wise_statment_usg.html" target="_top">
    <div class="form-group has-success">
 <input type="text" class="form-control" name="manual_pid" placeholder="Manual Patient ID">
                            
                                  </div>
                            <font color="white"> Starting Date</font><div class="form-group has-success">
                                <input type="text" class="form-control" data-date-format="" id="starting_date_usgInfo" name="starting_date_usg" required="1">
                            </div>

                            <font color="white">  Ending Date</font><div class="form-group has-success">
                                <input type="text" class="form-control" data-date-format="" id="ending_date_usginfo" name="ending_date_usg" required="1">
                            </div>

                            <center><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></center>



                        </form>
                           
                           
                       </div>
                       
                       
                    <div class="radiology box"  style="background-color:#CC00FF; border-radius: 10px;">
                           <form name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/preview_date_wise_statment_radiology.html" target="_top">
                            <div class="form-group has-success">
 <input type="text" class="form-control" name="manual_pid" placeholder="Manual Patient ID">
                            
                                  </div>
                            <font color="white"> Starting Date</font><div class="form-group has-success">
                                <input type="text" class="form-control" data-date-format="" id="starting_date_radiology" name="starting_date_radiology" required="1">
                            </div>

                            <font color="white">  Ending Date</font><div class="form-group has-success">
                                <input type="text" class="form-control" data-date-format="" id="ending_date_radiology"name="ending_date_radiology" required="1">
                            </div>

                            <center><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></center>

                        </form>
                        
                        
                    </div>
                     
                     
                     <div class="bonemarrow box" style="background-color:#9999FF; border-radius: 10px;">
                         
                          <form name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/preview_date_wise_statment_bonemarrow.html" target="_top">
                            <div class="form-group has-success">
 <input type="text" class="form-control" name="manual_pid" placeholder="Manual Patient ID">
 </div>
                                 
                            <font color="white"> Starting Date</font><div class="form-group has-success">
                                <input type="text" class="form-control" data-date-format="" id="starting_date_bonemarrow" name="starting_date_bonemarrow" required="1">
                            </div>

                            <font color="white">  Ending Date</font><div class="form-group has-success">
                                <input type="text" class="form-control" data-date-format="" id="ending_date_bonemarrow"name="ending_date_bonemarrow" required="1">
                            </div>

                            <center><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></center>



                        </form>
             
                     
                     
                     </div>
                     
                     
                     
                    <div class="haematology box" style="background-color:#9966FF; border-radius: 10px;">
             <form name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/preview_date_wise_statment_haematology.html" target="_top">
 <input type="text" class="form-control" name="manual_pid" placeholder="Manual Patient ID">
                                  <br>
                            <font color="white"> Starting Date</font><div class="form-group has-success">
                                <input type="text" class="form-control" data-date-format="" id="starting_date_haematology" name="starting_date_haematology" required="1">
                            </div>

                            <font color="white">  Ending Date</font><div class="form-group has-success">
                                <input type="text" class="form-control" data-date-format="" id="ending_date_haematology"name="ending_date_haematology" required="1">
                            </div>

                            <center><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></center>

                        </form>
 
                        
                    </div>
                      
                      
                      
                      
                    <div class="my_protocol box" style="background-color:#9933FF; border-radius: 10px;"> 
                    
                    
                        <form name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/preview_date_wise_statment_protocol.html" target="_top">
<input type="text" class="form-control" name="manual_pid" placeholder="Manual Patient ID">
                                  <br>
                                       <font color="white">Protocol Select</font> 
                            <select name="custom_chemotherapy_regmine_id" class="form-control">

                                <option value="">--- Select ---</option>
                                <option value="">None</option>
<?php
foreach ($view_ChemotherayRegimen_name as $data) {
    ?>
                                    <option value="<?php echo $data->custom_chemotherapy_regmine_id; ?>"> <?php echo $data->customized_chemotherapy_regimen_name; ?> </option>
                                <?php } ?>
                            </select>


                            <font color="white"> Starting Date</font><div class="form-group has-success">
                                <input type="text" class="form-control" data-date-format="" id="starting_date_protocol" name="starting_date_protocol" required="1">
                            </div>

                            <font color="white">  Ending Date</font><div class="form-group has-success">
                                <input type="text" class="form-control" data-date-format="" id="ending_date_protocol"name="ending_date_protocol" required="1">
                            </div>

                            <center><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></center>



                        </form>
                    
                    
                    
                    
                    
                    
                    
                    </div>
                    
                    
                    
                     <div class="investigation_cytogenetic box" style="background-color: #7aba7b; border-radius: 10px;">
                
                <form name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/preview_date_wise_statment_cytogenetice.html" target="_top">
 <div class="form-group has-success">
                                 <input type="text" class="form-control" name="manual_pid" placeholder="Manual Patient ID">
                                </div>
                            <div class="form-group has-success">


                                <font color="black">Starting Date</font><div class="form-group has-success">
                                    <input type="text" class="form-control" data-date-format="" id="starting_date_cytogenetic" name="starting_date_cytogenetic" required="1">
                                </div>

                                <font color="black">  Ending Date</font><div class="form-group has-success">
                                    <input type="text" class="form-control" data-date-format="" id="ending_date_cytogenetic" name="ending_date_cytogenetic" required="1">
                                </div>
                                <center><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></center>
                            </div>

                        </form>
                
                </div>
                     
                     
                    <div class="investigation_karyotype box" style="background-color: #46a546; border-radius: 10px;">
                        <form name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/preview_date_wise_statment_karyotype.html" target="_top">
 <div class="form-group has-success">
                                 <input type="text" class="form-control" name="manual_pid" placeholder="Manual Patient ID">
                                </div>
                            <div class="form-group has-success">


                                <font color="black">Starting Date</font><div class="form-group has-success">
                                    <input type="text" class="form-control" data-date-format="" id="starting_date_karyotype" name="starting_date_karyotype" required="1">
                                </div>

                                <font color="black">  Ending Date</font><div class="form-group has-success">
                                    <input type="text" class="form-control" data-date-format="" id="ending_date_karyotype" name="ending_date_karyotype" required="1">
                                </div>
                                <center><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></center>
                            </div>

                        </form>
                        
                        
                        </div>
                    
                    
                    
                    <div class="investigation_immuno box" style="background-color: #66CCFF; border-radius: 10px;">
              <form name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/preview_date_wise_statment_immunphenotyping.html" target="_top">
 <div class="form-group has-success">
                                 <input type="text" class="form-control" name="manual_pid" placeholder="Manual Patient ID">
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
                     
                     
                     
                     
                      <div class="investigation_cytopathology box" style="background-color: #CC99FF; border-radius: 10px;">
                      
                       <form name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/preview_date_wise_statment_cytopathology.html" target="_top">
 <div class="form-group has-success">
                                 <input type="text" class="form-control" name="manual_pid" placeholder="Manual Patient ID">
                                </div>
                            <div class="form-group has-success">


                                <font color="black">Starting Date</font><div class="form-group has-success">
                                    <input type="text" class="form-control" data-date-format="" id="starting_date_cytopathology" name="starting_date_cytopathology" required="1">
                                </div>

                                <font color="black">  Ending Date</font><div class="form-group has-success">
                                    <input type="text" class="form-control" data-date-format="" id="ending_date_cytopathology" name="ending_date_cytopathology" required="1">
                                </div>

                                <center><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></center>
                            </div>

                        </form>
                          
                      
                      </div>
                      
                    <div class="investigation_histopathology box" style="background-color: #d4d4d4; border-radius: 10px;">
                           <form name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/preview_date_wise_statment_histpathology.html" target="_top">
 <div class="form-group has-success">
                                 <input type="text" class="form-control" name="manual_pid" placeholder="Manual Patient ID">
                                </div>
                            <div class="form-group has-success">


                                <font color="black">Starting Date</font><div class="form-group has-success">
                                    <input type="text" class="form-control" data-date-format="" id="starting_date_histopathology" name="starting_date_histopathology" required="1">
                                </div>

                                <font color="black">  Ending Date</font><div class="form-group has-success">
                                    <input type="text" class="form-control" data-date-format="" id="ending_date_histopathology"name="ending_date_histopathology" required="1">
                                </div>

                                <center><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></center>
                            </div>

                        </form>
                        
                        
                    </div>
                       
                       
                     <div class="investigation_echo box" style="background-color: #2aabd2; border-radius: 10px;">
                      
                           <form name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/preview_date_wise_statment_echo.html" target="_top">

                            <div class="form-group has-success">

 <div class="form-group has-success">
                                 <input type="text" class="form-control" name="manual_pid" placeholder="Manual Patient ID">
                                </div>
                                <font color="black">Starting Date</font><div class="form-group has-success">
                                    <input type="text" class="form-control" data-date-format="" id="starting_date_echo" name="starting_date_echo" required="1">
                                </div>

                                <font color="black">  Ending Date</font><div class="form-group has-success">
                                    <input type="text" class="form-control" data-date-format="" id="ending_date_echo"name="ending_date_echo" required="1">
                                </div>

                                <center><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></center>
                            </div>

                        </form>
                     
                     </div>
                     
                     
                     
                    <div class="presenting_complaint_one box" style="background-color: #00c0ef; border-radius: 10px;">

                        <form name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/preview_date_wise_statment.html" target="_top">

                            <div class="form-group has-success">
                             
                                <input type="text" class="form-control" name="manual_pid" placeholder="Manual Patient ID" id="TBox0">
                                 <br>   <label> <font color="white">Presenting Complaint Name</font></label> 
                                <select name="cc_name_id" id="select" required="1" class="form-control">

<?php
foreach ($complaint_nameInfo as $data) {
    ?>

                                        <option value="<?php echo $data->cc_name_id; ?>"> <?php echo $data->complain_name; ?> </option>
<?php } ?>
                                </select>
                            </div>

                            <div class="form-group has-success">




                                <font color="white"> Starting Date</font><div class="form-group has-success">
                                    <input type="text" class="form-control" data-date-format="" id="starting_date" name="prescription_date_from" required="1">
                                </div>

                                <font color="white">Ending Date</font><div class="form-group has-success">
                                    <input type="text" class="form-control" data-date-format="" id="ending_date"name="prescription_date_from_date_to" required="1">
                                </div>

                                <center><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></center>
                            </div>
                        </form>

                    </div> 


                    <div class="comorbidity_one box" style="background-color: #CC99FF; border-radius: 10px;">

                        <form name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/preview_date_wise_statment_comorbidity.html" target="_top">
                            <div class="form-group has-success">
                                 <input type="text" class="form-control" name="manual_pid" placeholder="Manual Patient ID" id="c_pid">
                                 <br>
                                <label><font color="white"> Comorbidity Name</font></label> <select name="comorbidity_id" id="select" required="1" class="form-control">

<?php
foreach ($view_comorbidityInfo as $data) {
    ?>
                                        <option value="<?php echo $data->comorbidity_id; ?>"> <?php echo $data->comorbidity_name; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group has-success">




                                <font color="white">Starting Date</font><div class="form-group has-success">
                                    <input type="text" class="form-control" data-date-format="" id="starting_date_comorbidity" name="prescription_date_from_comorbidity" required="1">
                                </div>

                                <font color="white">Ending Date</font><div class="form-group has-success">
                                    <input type="text" class="form-control" data-date-format="" id="ending_date_comorbidity"name="prescription_date_from_date_to_comorbidity" required="1">
                                </div>

                                <center><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></center>

                            </div>


                        </form> 



                    </div> 

                    <div class="personal_history_one box" style="background-color: peachpuff; border-radius: 10px;">

                        <form name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/preview_date_wise_statment_personal_history.html" target="_top">

                            <div class="form-group has-success">
                                  <input type="text" class="form-control" name="manual_pid" placeholder="Manual Patient ID">
                                  <br>
                                <label> <font color="black">Personal History</font></label> <select name="personal_id" id="select" required="1" class="form-control">

<?php
foreach ($view_personalhistoryInfo as $data) {
    ?>
                                        <option value="<?php echo $data->personal_id; ?>"> <?php echo $data->personal_history_name; ?> </option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group has-success" style="text-decoration-color: white">

                                <font color="black"> Starting Date</font><div class="form-group has-success">
                                    <input type="text" class="form-control" data-date-format="" id="starting_date_p_history" name="prescription_date_from_p_history" required="1">
                                </div>

                                <font color="black">  Ending Date</font><div class="form-group has-success">
                                    <input type="text" class="form-control" data-date-format="" id="ending_date_p_history"name="prescription_date_from_date_to_p_history" required="1">
                                </div>

                                <center><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></center>
                            </div>
                        </form>

                    </div> 


                    <div class="family_history_one box" style="background-color: #6666FF; border-radius: 10px;">


                        <form name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/preview_date_wise_statment_family_history.html" target="_top">

                            <div class="form-group has-success">
<input type="text" class="form-control" name="manual_pid" placeholder="Manual Patient ID">
                                  <br>

                                <font color="black">Starting Date</font><div class="form-group has-success">
                                    <input type="text" class="form-control" data-date-format="" id="starting_date_family_history" name="starting_date_family_history" required="1">
                                </div>

                                <font color="black">  Ending Date</font><div class="form-group has-success">
                                    <input type="text" class="form-control" data-date-format="" id="ending_date_family_history"name="ending_date_family_history" required="1">
                                </div>

                                <center><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></center>
                            </div>

                        </form>
                    </div> 



                    <div class="physical_findings_one box" style="background-color:rosybrown; border-radius: 10px;">

                        <form name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/preview_date_wise_statment_physicalfindings.html" target="_top">

                            <div class="form-group has-success">
                                <input type="text" class="form-control" name="manual_pid" placeholder="Manual Patient ID">
                                  <br>
                                <font color="black">Starting Date</font><div class="form-group has-success">
                                    <input type="text" class="form-control" data-date-format="" id="starting_date_physicalfindings" name="starting_date_physicalfindings" required="1">
                                </div>

                                <font color="black">Ending Date</font><div class="form-group has-success">
                                    <input type="text" class="form-control" data-date-format="" id="ending_date_physicalfindings"name="ending_date_physicalfindings" required="1">
                                </div>

                                <center><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></center>

                            </div>


                        </form>

                    </div> 



                    <div class="diagnosis_one box" style="background-color:#99CC33; border-radius: 10px;">
                        <form name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/preview_date_wise_statment_diagnosis.html" target="_top">
                            <div class="form-group has-success">

 <input type="text" class="form-control" name="manual_pid" placeholder="Manual Patient ID">
                                  <br>
                                <font color="white">Type</font> 
                                <select name="diagnosis_category_id" class="form-control" id="cc_name_id">

                                    <option value="">--- Select ---</option>
                                    <option value="">None</option>
<?php
foreach ($view_diagnosis_category_name as $data) {
    ?>
                                        <option value="<?php echo $data->diagnosis_category_id; ?>"> <?php echo $data->customized_diagnosis_category_name; ?> </option>
                                    <?php } ?>
                                </select>
                                <br>
                                <font color="white"> Starting Date</font><div class="form-group has-success">
                                    <input type="text" class="form-control" data-date-format="" id="starting_date_diagnosis" name="starting_date_diagnosis" required="1">
                                </div>

                                <font color="white">  Ending Date</font><div class="form-group has-success">
                                    <input type="text" class="form-control" data-date-format="" id="ending_date_diagnosis"name="ending_date_diagnosis" required="1">
                                </div>

                                <center><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></center>
                            </div>


                        </form>


                    </div> 



                    <div class="investigation_stool box" style="background-color:#99CC33; border-radius: 10px;">
                        <form name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/preview_date_wise_statment_stool.html" target="_top">
                             <div class="form-group has-success">
                                 <input type="text" class="form-control" name="manual_pid" placeholder="Manual Patient ID">
                                </div>
                            <font color="black"> Starting Date</font><div class="form-group has-success">
                                <input type="text" class="form-control" data-date-format="" id="starting_date_stool" name="starting_date_stool" required="1">
                            </div>

                            <font color="black">  Ending Date</font><div class="form-group has-success">
                                <input type="text" class="form-control" data-date-format="" id="ending_date_stool"name="ending_date_stool" required="1">
                            </div>

                            <center><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></center>



                        </form> 




                    </div>

                    <div class="investigation_urine box" style="background-color:#CC99FF; border-radius: 10px;">

                        <form name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/preview_date_wise_statment_urine.html" target="_top">
   <div class="form-group has-success">
 <input type="text" class="form-control" name="manual_pid" placeholder="Manual Patient ID">
                            
                                

                            <font color="white"> Starting Date</font><div class="form-group has-success">
                                <input type="text" class="form-control" data-date-format="" id="starting_date_urine" name="starting_date_urine" required="1">
                            </div>

                            <font color="white">  Ending Date</font><div class="form-group has-success">
                                <input type="text" class="form-control" data-date-format="" id="ending_date_urine"name="ending_date_urine" required="1">
                            </div>

                            <center><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></center>



                      

                    </div>
  </form> 
                    <div class="investigation_usg box" style="background-color:#CC66FF; border-radius: 10px;">

                        <form name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/preview_date_wise_statment_usg.html" target="_top">
    <div class="form-group has-success">
 <input type="text" class="form-control" name="manual_pid" placeholder="Manual Patient ID">
                            
                                  </div>
                            <font color="white"> Starting Date</font><div class="form-group has-success">
                                <input type="text" class="form-control" data-date-format="" id="starting_date_usgInfo" name="starting_date_usg" required="1">
                            </div>

                            <font color="white">  Ending Date</font><div class="form-group has-success">
                                <input type="text" class="form-control" data-date-format="" id="ending_date_usginfo" name="ending_date_usg" required="1">
                            </div>

                            <center><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></center>



                        </form>

                    </div>

                    <div class="investigation_radiology box" style="background-color:#CC00FF; border-radius: 10px;">



                        <form name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/preview_date_wise_statment_radiology.html" target="_top">
                            <div class="form-group has-success">
 <input type="text" class="form-control" name="manual_pid" placeholder="Manual Patient ID">
                            
                                  </div>
                            <font color="white"> Starting Date</font><div class="form-group has-success">
                                <input type="text" class="form-control" data-date-format="" id="starting_date_radiology" name="starting_date_radiology" required="1">
                            </div>

                            <font color="white">  Ending Date</font><div class="form-group has-success">
                                <input type="text" class="form-control" data-date-format="" id="ending_date_radiology"name="ending_date_radiology" required="1">
                            </div>

                            <center><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></center>

                        </form>




                    </div>

                    <div class="investigation_bonemarrow box" style="background-color:#9999FF; border-radius: 10px;">

                        <form name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/preview_date_wise_statment_bonemarrow.html" target="_top">
                            <div class="form-group has-success">
 <input type="text" class="form-control" name="manual_pid" placeholder="Manual Patient ID">
 </div>
                                 
                            <font color="white"> Starting Date</font><div class="form-group has-success">
                                <input type="text" class="form-control" data-date-format="" id="starting_date_bonemarrow" name="starting_date_bonemarrow" required="1">
                            </div>

                            <font color="white">  Ending Date</font><div class="form-group has-success">
                                <input type="text" class="form-control" data-date-format="" id="ending_date_bonemarrow"name="ending_date_bonemarrow" required="1">
                            </div>

                            <center><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></center>



                        </form>

                    </div>
                    <div class="investigation_haematology box" style="background-color:#9966FF; border-radius: 10px;">


                        <form name="conditional_report" method="post" action="<?php echo base_url(); ?>data_record/preview_date_wise_statment_haematology.html" target="_top">
 <input type="text" class="form-control" name="manual_pid" placeholder="Manual Patient ID">
                                  <br>
                            <font color="white"> Starting Date</font><div class="form-group has-success">
                                <input type="text" class="form-control" data-date-format="" id="starting_date_haematology" name="starting_date_haematology" required="1">
                            </div>

                            <font color="white">  Ending Date</font><div class="form-group has-success">
                                <input type="text" class="form-control" data-date-format="" id="ending_date_haematology"name="ending_date_haematology" required="1">
                            </div>

                            <center><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></center>

                        </form>

                    </div>

                    <div class="protocol_search box" style="background-color:#9933FF; border-radius: 10px;">
                   
                    
                        <div class="diagnosis_information box" style="background-color:#9900FF; border-radius: 10px;">
                        </div>
                        <div class="physical_findings box" style="background-color:#66CCFF; border-radius: 10px;">
                        </div>
                        <div class="family_history box" style="background-color:#6699FF; border-radius: 10px;">
                        </div>

                        <div class="personal_history box" style="background-color:#6666FF; border-radius: 10px;">
                        </div>

                        <div class="comorbidity box" style="background-color:#6633FF; border-radius: 10px;">

                        </div>
                        <div class="presenting_complaint box" style="background-color:#6600FF; border-radius: 10px;">
                        </div> 

                    </div>



                </div>
            </div>
        </div>  
        <div class="col-md-2">

        </div>

    </body>


    <script>
        function save()
        {
            chk = confirm("Are You Sure");
            if (chk)
            {
                return true;
            }
            else {
                return false;
            }
        }
    </script>
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
