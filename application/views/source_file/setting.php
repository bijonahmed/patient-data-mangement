<!DOCTYPE html>  
<script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>


<script src="<?php echo base_url(); ?>resource/Context.js-master/context.js"></script>
<script src="<?php echo base_url(); ?>resource/Context.js-master/demo.js"></script>

<link href="<?php echo base_url(); ?>resource/Context.js-master/context.bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>resource/Context.js-master/context.standalone.css" rel="stylesheet">
<style>
    .info
    {


        background-color: rgba(5, 149, 87, 0.9);
        background: rgba(5, 149, 87, 0.9);
        color: rgba(5, 149, 87, 0.9);


    }

</style>
<style type="text/css">
    .box{
        padding: 20px;
        display: none;
        margin-top: 20px;
        border-radius: 20px;

        /* border: 1px solid #000;*/
    }
    .red{ background: white; }
    .green{ background: white; }
    .blue{ background: white; }
    .generic{ background: white; }
    .suggestion{ background: white; }
    .patient_advice{ background: white; }
    .patient_new_complaint{ background: white; }
    .new_drug{ background: white; }
    .new_drug_seting{ background: white; }
    .new_advice_groupname{ background: white; }
    .add_new_advice_name{ background: white; }
    .new_investigation_by_pres{ background: white; }
    .add_new_comorbidity{ background: white; }
    .add_new_physicalfindings_systolic{ background: white; }
    .add_new_physicalfindings{ background: white; }
    .add_new_diagnosis_category{ background: white; }
    .chemotherapy_regimen{ background: white; }
    .remarks{ background: white; }
</style>

<script type="text/javascript">
    /*
     $(document).ready(function(){
     $("select").change(function(){
     $( "select option:selected").each(function(){
     if($(this).attr("value")=="red"){
     $(".box").hide();
     $(".red").show();
     }
     if($(this).attr("value")=="green"){
     $(".box").hide();
     $(".green").show();
     }
     if($(this).attr("value")=="blue"){
     $(".box").hide();
     $(".blue").show();
     }
     });
     }).change();
     });
     */
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#makechange").click(function() {
            $("select option:selected").each(function() {
                if ($(this).attr("value") == "red") {
                    $(".box").hide();
                    $(".red").show();
                }
                if ($(this).attr("value") == "green") {
                    $(".box").hide();
                    $(".green").show();
                }
                if ($(this).attr("value") == "blue") {
                    $(".box").hide();
                    $(".blue").show();
                }
                if ($(this).attr("value") == "generic") {
                    $(".box").hide();
                    $(".generic").show();
                }
                if ($(this).attr("value") == "suggestion") {
                    $(".box").hide();
                    $(".suggestion").show();
                }
                if ($(this).attr("value") == "patient_advice") {
                    $(".box").hide();
                    $(".patient_advice").show();
                }
                if ($(this).attr("value") == "patient_new_complaint") {
                    $(".box").hide();
                    $(".patient_new_complaint").show();
                }
                if ($(this).attr("value") == "new_drug") {
                    $(".box").hide();
                    $(".new_drug").show();
                }
                if ($(this).attr("value") == "new_drug_seting") {
                    $(".box").hide();
                    $(".new_drug_seting").show();
                }
                if ($(this).attr("value") == "new_advice_groupname") {
                    $(".box").hide();
                    $(".new_advice_groupname").show();
                }
                if ($(this).attr("value") == "add_new_advice_name") {
                    $(".box").hide();
                    $(".add_new_advice_name").show();
                }
                if ($(this).attr("value") == "new_investigation_by_pres") {
                    $(".box").hide();
                    $(".new_investigation_by_pres").show();
                }
                if ($(this).attr("value") == "add_new_comorbidity") {
                    $(".box").hide();
                    $(".add_new_comorbidity").show();
                }
                if ($(this).attr("value") == "add_new_physicalfindings_systolic") {
                    $(".box").hide();
                    $(".add_new_physicalfindings_systolic").show();
                }
                if ($(this).attr("value") == "add_new_physicalfindings") {
                    $(".box").hide();
                    $(".add_new_physicalfindings").show();
                }
                if ($(this).attr("value") == "add_new_diagnosis_category") {
                    $(".box").hide();
                    $(".add_new_diagnosis_category").show();
                }
                if ($(this).attr("value") == "chemotherapy_regimen") {
                    $(".box").hide();
                    $(".chemotherapy_regimen").show();
                }
                if ($(this).attr("value") == "remarks") {
                    $(".box").hide();
                    $(".remarks").show();
                }

            });
        });
    });
    //remarks
</script>


<style>
    .margintopinfo
    {
        margin-top: 60px;
        /*background-color: yellowgreen; patient_advice*/
    }
</style>
<style>
    /* Flaired edges, by Tomas Theunissen */ hr.style-seven { height: 30px; border-style: solid; border-color: black; border-width: 1px 0 0 0; border-radius: 20px; } hr.style-seven:before { /* Not really supposed to work, but does */ display: block; content: ""; height: 30px; margin-top: -31px; border-style: solid; border-color: black; border-width: 0 0 1px 0; border-radius: 20px; }
</style>
<style>
    /* Gradient transparent - color - transparent */ hr.style-two { border: 0; height: 1px; background-image: -webkit-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); background-image: -moz-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); background-image: -ms-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); background-image: -o-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); }
</style>
</head>

<body>
    <style type="text/css">
        #target {
            width: 300px;
            height: 300px;
        }
    </style>

    <br><br>
    <div class="container">
        <h3>Setting Panel</h3>
        <hr class="style-two">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group has-success">
                    <select name="choose_selected" class="form-control">
                        <option>Select</option>
                        <?php
                        /*
                          <option value="red">Red</option>
                         * 
                         */
                        ?>

                        <option value="green">New Medicine Dose Name </option>
                        <option value="blue">New Medicine Dose Schedule</option>
                        <option value="generic">New Medicine Generic Name</option>
                        <option value="suggestion">New Prescription Suggestion</option>
                        <option value="patient_advice">New Patient Advice Name</option>
                        <option value="patient_new_complaint">New Presenting Complaint</option>
                        <option value="new_drug">New Drug</option>
                        <option value="new_drug_seting">New Drug Help Setting</option>
                        <option value="new_advice_groupname">New Investigation Group</option>
                        <option value="add_new_advice_name">New Investigation</option>
                        <option value="new_investigation_by_pres">New Investigation by Prescription</option>
                        <option value="add_new_comorbidity">New Comorbidity</option>
                        <option value="add_new_physicalfindings_systolic">New Systolic</option>
                        <option value="add_new_physicalfindings">New Physical Findings</option>
                        <option value="add_new_diagnosis_category">New Diagnosis Type</option>
                        <option value="chemotherapy_regimen">New Chemotherapy Regimen Type</option>
                        <option value="remarks">New Remarks</option>
                    </select>
                </div>



            </div>

            <div class="col-md-2">
                <button class="btn btn-primary" id="makechange"><span class="glyphicon glyphicon-ok"></span> OK </button>
            </div>

            <div class="col-md-5" style="top:-12px;">
                <?php
                /*
                  <div class="red box">You have selected <strong>red option</strong> so i am here</div>
                 */
                ?>
                <div class="remarks box" style="background-color: #CD853F; border-radius: 20px;">

                    Remarks

                    <center><span id="result_remarks"></span></center> 
                    <div align="right">
                        <a href="<?php echo base_url(); ?>welcome/view_remarks_Info.html" target="_top">
                            <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>&nbsp;Search
                            </button></a> 

                    </div>



                    <div class="form-group has-success">
                        <br>
                        <form id="remarksinfo" method="post" action="<?php echo base_url(); ?>data_record/save_patient_remarks_name.html">
                            <input type="text" class="form-control" name="remarks" id="inputSuccess1" placeholder="Remarks Name" required="1"><br>
                            <center>                    
                                <button class="btn btn-primary" id="btn_remarks"><span class="glyphicon glyphicon-saved"></span> Save</button>  


                            </center>
                        </form></div>

                    <script>
                        $("#btn_remarks").click(function() {
                            $.post($("#remarksinfo").attr("action"),
                                    $("#remarksinfo :input").serializeArray(),
                                    function(info) {
                                        $("#result_remarks").html(info);
                                    });
                            clearInput();
                        });

                        $("#remarksinfo").submit(function() {
                            return false;
                        });
                        function clearInput() {
                            $("#remarksinfo :input").each(function() {
                                $(this).val('');
                            });
                        }
                    </script>





                </div> 
                <div class="chemotherapy_regimen box" style="background-color: greenyellow; border-radius: 20px;">
                    <center><span id="result_ch_regimen_msg"></span></center> 
                    <div align="right">
                        <a href="<?php echo base_url(); ?>welcome/view_ChemotherapyRegimenName_Info.html" target="_top">
                            <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>&nbsp;Search
                            </button></a> 

                    </div>



                    <div class="form-group has-success">
                        <br>
                        <form id="che_regimen" method="post" action="<?php echo base_url(); ?>data_record/save_customized_chemotherapy_regmin_name.html">
                            <input type="text" class="form-control" name="customized_chemotherapy_regimen_name" id="inputSuccess1" placeholder="Chemotherapy Regimen Name" required="1"><br>
                            <center>                    
                                <button class="btn btn-primary" id="btn_chemotherapy_regimen"><span class="glyphicon glyphicon-plus"></span> Add</button>  


                            </center>
                        </form></div>

                    <script>
                        $("#btn_chemotherapy_regimen").click(function() {
                            $.post($("#che_regimen").attr("action"),
                                    $("#che_regimen :input").serializeArray(),
                                    function(info) {
                                        $("#result_ch_regimen_msg").html(info);
                                    });
                            clearInput();
                        });

                        $("#che_regimen").submit(function() {
                            return false;
                        });
                        function clearInput() {
                            $("#che_regimen :input").each(function() {
                                $(this).val('');
                            });
                        }
                    </script>



                </div> 

                <div class="add_new_diagnosis_category box" style="background-color: rosybrown; border-radius: 20px;">
                    <center><span id="result_dia_msg"></span></center> 
                    <div align="right">
                        <a href="<?php echo base_url(); ?>welcome/view_diagnosisCategory_Info.html" target="_top">
                            <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>&nbsp;Search
                            </button></a> 

                    </div> <br>
                    <div class="form-group has-success">
                        <form id="category_diagnosis" method="post" action="<?php echo base_url(); ?>data_record/save_customized_diagnosis_category.html">
                            <input type="text" class="form-control" name="customized_diagnosis_category_name" id="inputSuccess1" placeholder="Add New Diagnsos Category" required="1"><br>

                            <center>  <button class="btn btn-primary" id="btn_diag_cat"><span class="glyphicon glyphicon-plus"></span> Add</button>  </center>
                        </form>
                    </div>
                    <script>
                        $("#btn_diag_cat").click(function() {
                            $.post($("#category_diagnosis").attr("action"),
                                    $("#category_diagnosis :input").serializeArray(),
                                    function(info) {
                                        $("#result_dia_msg").html(info);
                                    });
                            clearInput();
                        });

                        $("#category_diagnosis").submit(function() {
                            return false;
                        });
                        function clearInput() {
                            $("#category_diagnosis :input").each(function() {
                                $(this).val('');
                            });
                        }
                    </script>
                </div> 
                <div class="add_new_physicalfindings box" style="background-color: #9370DB; border-radius: 20px;">

                    <center><span id="result_valmsg"></span></center> 
                    <div class="form-group has-success">
                        <div align="right">
                            <a href="<?php echo base_url(); ?>welcome/view_customized_phy_info_Info.html" target="_top">
                                <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>&nbsp;Search
                                </button></a> 
                        </div>
                        <br> 
                        <form id="physicalfindings_customized" method="post" action="<?php echo base_url(); ?>data_record/save_customized_physical_fidings.html">
                            <input type="text" class="form-control" name="customized_physical_findings_name" id="inputSuccess1" placeholder="Add New Physical Fidings" required="1"><br>
                            <center>                    
                                <button class="btn btn-primary" id="btn_customized_phy_fin"><span class="glyphicon glyphicon-plus"></span> Add</button>  




                            </center>
                        </form>
                    </div>
                    <br>
                    <div class="form-group has-success">
                        <div align="right">
                            <a href="<?php echo base_url(); ?>welcome/view_customized_phy_value_info_Info_onchangevalue.html" target="_top">
                                <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>&nbsp;Search
                                </button></a> 
                        </div><br>
                        <center><span id="result_valmsg_"></span></center> 
                        <form id="value_phycialfindings_form" method="post" action="<?php echo base_url(); ?>data_record/save_customized_physical_fidings_value.html">
                            <select name="custom_phy_findings_id" class="form-control sm">
                                <option value="">--- Select ---</option>
                                <option value="">None</option>
                                <?php
                                foreach ($view_physicafindings as $data) {
                                    ?>
                                    <option value="<?php echo $data->custom_phy_findings_id; ?>"> <?php echo $data->customized_physical_findings_name; ?> </option>
                                <?php } ?>
                            </select><br>
                            <input type="text" class="form-control" id="inputSuccess1" name="phy_fin_value" placeholder="Value" required="1"><br>
                            <center>                    
                                <button class="btn btn-primary" id="btn_valuephyfindings"><span class="glyphicon glyphicon-plus"></span> Add</button>

                            </center>

                        </form>
                    </div>
                    <script>
                        $("#btn_valuephyfindings").click(function() {
                            $.post($("#value_phycialfindings_form").attr("action"),
                                    $("#value_phycialfindings_form :input").serializeArray(),
                                    function(info) {
                                        $("#result_valmsg_").html(info);
                                    });
                            clearInput();
                        });

                        $("#value_phycialfindings_form").submit(function() {
                            return false;
                        });
                        function clearInput() {
                            $("#value_phycialfindings_form :input").each(function() {
                                $(this).val('');
                            });
                        }
                    </script>

                    <script>
                        $("#btn_customized_phy_fin").click(function() {
                            $.post($("#physicalfindings_customized").attr("action"),
                                    $("#physicalfindings_customized :input").serializeArray(),
                                    function(info) {
                                        $("#result_valmsg").html(info);
                                    });
                            clearInput();
                        });

                        $("#physicalfindings_customized").submit(function() {
                            return false;
                        });
                        function clearInput() {
                            $("#physicalfindings_customized :input").each(function() {
                                $(this).val('');
                            });
                        }
                    </script> 


                </div>
                <div class="add_new_physicalfindings_systolic box" style="background-color: #C37366; border-radius: 20px;">

                    <center><span id="result_sys_value"></span></center> 
                    <div class="form-group has-success">

                        <div align="right">
                            <a href="<?php echo base_url(); ?>welcome/view_customized_systolic_Info.html" target="_top">
                                <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>&nbsp;Search
                                </button></a> 
                        </div><br>

                        <form id="systolic_prescription" method="post" action="<?php echo base_url(); ?>data_record/save_customized_physical_fidings_systolic.html">
                            <input type="text" class="form-control" name="customized_physical_findings_systolic_name" id="inputSuccess1" placeholder="Systolic" required="1"><br>
                            <center>                    
                                <button class="btn btn-primary" id="btn_phy_systolic_value"><span class="glyphicon glyphicon-plus"></span> Add</button>  

                            </center>
                        </form>
                        <br>

                        <div align="right">
                            <a href="<?php echo base_url(); ?>welcome/view_customized_systolic_value_Info.html" target="_top">
                                <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>&nbsp;Search
                                </button></a> 
                        </div><br>
                        <center><span id="result_valuedata_msg"></span></center> 
                        <form id="systolic_value_data" method="post" action="<?php echo base_url(); ?>data_record/save_customized_physical_fidings_systolic_info_save.html">
                            <select name="custom_phy_findings_systolic_id" class="form-control sm">
                                <option value="">--- Select ---</option>
                                <option value="">None</option>
                                <?php
                                foreach ($view_systolic as $data) {
                                    ?>
                                    <option value="<?php echo $data->custom_phy_findings_systolic_id; ?>"> <?php echo $data->customized_physical_findings_systolic_name; ?> </option>
                                <?php } ?>
                            </select>
                            <br>      
                            <input type="text" class="form-control" id="inputSuccess1" name="phy_fin_value_systolic" placeholder="Value" required="1"><br>

                            <center>                    
                                <button class="btn btn-primary" id="btn_systeloic_value"><span class="glyphicon glyphicon-plus"></span> Add</button>


                            </center>
                        </form>

                        <script>
                            $("#btn_phy_systolic_value").click(function() {
                                $.post($("#systolic_prescription").attr("action"),
                                        $("#systolic_prescription :input").serializeArray(),
                                        function(info) {
                                            $("#result_sys_value").html(info);
                                        });
                                clearInput();
                            });

                            $("#systolic_prescription").submit(function() {
                                return false;
                            });
                            function clearInput() {
                                $("#systolic_prescription :input").each(function() {
                                    $(this).val('');
                                });
                            }
                        </script> 
                        <script>
                            $("#btn_systeloic_value").click(function() {
                                $.post($("#systolic_value_data").attr("action"),
                                        $("#systolic_value_data :input").serializeArray(),
                                        function(info) {
                                            $("#result_valuedata_msg").html(info);
                                        });
                                clearInput();
                            });

                            $("#systolic_value_data").submit(function() {
                                return false;
                            });
                            function clearInput() {
                                $("#systolic_value_data :input").each(function() {
                                    $(this).val('');
                                });
                            }
                        </script> 
                    </div>
                </div>
                <div class="add_new_comorbidity box" style="background-color: #F4A460; border-radius: 20px;">
                    <center><span id="result_chemo_msg"></span></center> 
                    <div align="right">
                        <a href="<?php echo base_url(); ?>welcome/viewComorbidityInfo.html" target="_top">
                            <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>&nbsp;Search
                            </button></a>
                    </div>

                    <form id="comorbidity_by_prescription" method="post" action="<?php echo base_url(); ?>data_record/save_comorbidity_info.html">
                        Add Comorbidity Name <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess1"></label>
                            <input type="text" class="form-control" name="comorbidity_name" id="dose_type"required="1" ><br>
                            <center> <button class="btn btn-info" id="btn_comorbidity"><span class="glyphicon glyphicon-save"></span>
                                    Save&nbsp;&nbsp;</button>

                            </center>

                        </div>
                        <input type="hidden" name="current_date" value="<?php echo date("Y-m-d"); ?>">
                    </form>


                    <script>
                        $("#btn_comorbidity").click(function() {
                            $.post($("#comorbidity_by_prescription").attr("action"),
                                    $("#comorbidity_by_prescription :input").serializeArray(),
                                    function(info) {
                                        $("#result_chemo_msg").html(info);
                                    });
                            clearInput();
                        });

                        $("#comorbidity_by_prescription").submit(function() {
                            return false;
                        });
                        function clearInput() {
                            $("#comorbidity_by_prescription :input").each(function() {
                                $(this).val('');
                            });
                        }
                    </script>    



                </div>
                <div class="new_investigation_by_pres box" style="background-color: #CD853F; border-radius: 20px;">
                    <center><span id="result_inv_group_msg"></span></center> 
                    <div align="right">

                        <a href="<?php echo base_url(); ?>welcome/view_advice_name_Info.html" target="_top">
                            <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
                                <span class="glyphicon glyphicon-search"></span>
                                Search
                            </button>
                        </a>
                    </div>
                    <form id="new_invesigation_by_prescription" method="post" action="<?php echo base_url(); ?>data_record/save_advice_name_by_prescription.html">
                        <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess1">     Add Investigation Group Name</label> <select name="path_test_group_id" id="select" required="1" class="form-control">
                                <option selected="selected">Selected</option>
                                <?php
                                foreach ($add_new_advice_group as $data) {
                                    ?>
                                    <option value="<?php echo $data->path_test_group_id; ?>"> <?php echo $data->path_test_group_name; ?> </option>
                                <?php } ?>
                            </select>

                            Test Name 
                            <label class="control-label" for="inputSuccess1"></label>
                            <input type="text" class="form-control" name="test_name" id="test_name" required="1" >
                            <br>


                            <center> <button class="btn btn-info" id="btn_invesigation_by_pres"><span class="glyphicon glyphicon-save"></span>
                                    Save&nbsp;&nbsp;</button>

                            </center>

                        </div>
                    </form>

                    <script>
                        $("#btn_invesigation_by_pres").click(function() {
                            $.post($("#new_invesigation_by_prescription").attr("action"),
                                    $("#new_invesigation_by_prescription :input").serializeArray(),
                                    function(info) {
                                        $("#result_inv_group_msg").html(info);
                                    });
                            clearInput();
                        });

                        $("#new_invesigation_by_prescription").submit(function() {
                            return false;
                        });
                        function clearInput() {
                            $("#new_invesigation_by_prescription :input").each(function() {
                                $(this).val('');
                            });
                        }
                    </script> 





                </div>
                <div class="add_new_advice_name box" style="background-color: #FFC0CB; border-radius: 20px;">
                    <center><span id="result_investigation_msg"></span></center> 
                    <div align="right">
                        <a href="<?php echo base_url(); ?>welcome/view_new_investigation_name_Info.html" target="_top">
                            <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
                                <span class="glyphicon glyphicon-search"></span>
                                Search
                            </button>
                        </a>
                    </div>
                    <form id="adviceinfodata" method="post" action="<?php echo base_url(); ?>data_record/save_advice_name.html">
                        <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess1">     Add Investigation Group Name</label> <select name="path_test_group_id" id="select" required="1" class="form-control">
                                <option selected="selected">Selected</option>
                                <?php
                                foreach ($add_new_advice_group as $data) {
                                    ?>
                                    <option value="<?php echo $data->path_test_group_id; ?>"> <?php echo $data->path_test_group_name; ?> </option>
                                <?php } ?>
                            </select>

                            Test Name 
                            <label class="control-label" for="inputSuccess1"></label>
                            <input type="text" class="form-control" name="test_name" id="test_name" required="1" >
                            Unit

                            <input type="text" class="form-control" name="unit" required="1" >

                            Normal Range

                            <input type="text" class="form-control" name="normal_range" required="1" ><br>
                            <center> <button class="btn btn-info" id="btn_advicname"><span class="glyphicon glyphicon-save"></span>
                                    Save&nbsp;&nbsp;</button>

                            </center>

                        </div>
                    </form>

                    <script>
                        $("#btn_advicname").click(function() {
                            $.post($("#adviceinfodata").attr("action"),
                                    $("#adviceinfodata :input").serializeArray(),
                                    function(info) {
                                        $("#result_investigation_msg").html(info);
                                    });
                            clearInput();
                        });

                        $("#adviceinfodata").submit(function() {
                            return false;
                        });
                        function clearInput() {
                            $("#adviceinfodata :input").each(function() {
                                $(this).val('');
                            });
                        }
                    </script>    






                </div>
                <div class="new_advice_groupname box" style="background-color: #3CB371; border-radius: 20px;">
                    <center><span id="result_inv_group_msg"></span></center> 
                    <div align="right">
                        <a href="<?php echo base_url(); ?>welcome/view_advice_group_name_Info.html" target="_top">
                            <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
                                <span class="glyphicon glyphicon-search"></span>
                                Search
                            </button>
                        </a>
                    </div>
                    <form id="advicegroupnameinfo" method="post" action="<?php echo base_url(); ?>data_record/save_advice_gruop_name.html">
                        Add Advice Group Name<div class="form-group has-success">
                            <label class="control-label" for="inputSuccess1"></label>
                            <input type="text" class="form-control" name="path_test_group_name" id="path_test_group_name" required="1" ><br>
                            <center> <button class="btn btn-info" id="advice_group_name"><span class="glyphicon glyphicon-save"></span>
                                    Save&nbsp;&nbsp;</button>

                            </center>

                        </div>
                    </form>  



                    <script>
                        $("#advice_group_name").click(function() {
                            $.post($("#advicegroupnameinfo").attr("action"),
                                    $("#advicegroupnameinfo :input").serializeArray(),
                                    function(info) {
                                        $("#result_inv_group_msg").html(info);
                                    });
                            clearInput();
                        });

                        $("#advicegroupnameinfo").submit(function() {
                            return false;
                        });
                        function clearInput() {
                            $("#advicegroupnameinfo :input").each(function() {
                                $(this).val('');
                            });
                        }
                    </script> 




                </div>
                <div class="new_drug_seting box" style="background-color: #9370DB; border-radius: 20px;">
                    <center><span id="result_drug_msg"></span></center> 

                    <div align="right">
                        <a href="<?php echo base_url(); ?>welcome/view_drug_help.html" target="_top">
                            <button type="button" class="btn btn-primary">Search</button>
                        </a>
                    </div>
                    <form  id="drughelpinfo" method="post" action="<?php echo base_url(); ?>data_record/save_drug_help.html">
                        <div class="form-group has-success">
                            Complaint Name  <select name="cc_name_id" id="select" required="1" class="form-control">

                                <?php
                                foreach ($complaint_nameInfo as $data) {
                                    ?>
                                    <option value="<?php echo $data->cc_name_id; ?>"> <?php echo $data->complain_name; ?> </option>
                                <?php } ?>
                            </select>
                            Generic Name    <select name="medicine_generic_id" id="select" required="1" class="form-control">

                                <?php
                                foreach ($new_generic_name as $data) {
                                    ?>
                                    <option value="<?php echo $data->medicine_generic_id; ?>"> <?php echo $data->generic_name; ?> </option>
                                <?php } ?>
                            </select>
                            Brand Name
                            <select name="drug_id" id="select" required="1" class="form-control">

                                <?php
                                foreach ($brand_name_info as $data) {
                                    ?>
                                    <option value="<?php echo $data->drug_id; ?>"> <?php echo $data->brand_name; ?> </option>
                                <?php } ?>
                            </select>
                            <br>
                            <center> <button class="btn btn-info" id="btn_help"><span class="glyphicon glyphicon-save"></span>
                                    Save</button>
                            </center>
                        </div>
                    </form>

                    <script>
                        $("#btn_help").click(function() {
                            $.post($("#drughelpinfo").attr("action"),
                                    $("#drughelpinfo :input").serializeArray(),
                                    function(info) {
                                        $("#result_drug_msg").html(info);
                                    });
                            clearInput();
                        });

                        $("#drughelpinfo").submit(function() {
                            return false;
                        });
                        function clearInput() {
                            $("#drughelpinfo :input").each(function() {
                                $(this).val('');
                            });
                        }
                    </script>  



                </div>

                <div class="new_drug box" style="background-color: #66CDAA; border-radius: 20px;">
                    <center><span id="result_new_drg_msg"></span></center> 
                    <div align="right">
                        <a href="<?php echo base_url(); ?>welcome/viewdoes_add_new_drug.html" target="_top">
                            <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
                                <span class="glyphicon glyphicon-search"></span>
                                Search
                            </button>
                        </a>
                    </div>
                    <div class="form-group has-success">
                        <form id="addnewdrug" method="post" action="<?php echo base_url(); ?>data_record/save_new_drug_name.html">
                            <div class="row">
                                <div class="col-md-5">
                                    <input type="hidden" name="current_date" value="<?php echo date("Y-m-d"); ?>">
                                    <label>Dose Type</label>
                                    <select name="dose_id" id="select" required="1" class="form-control">

                                        <?php
                                        foreach ($dosetype as $data) {
                                            ?>
                                            <option value="<?php echo $data->dose_id; ?>"> <?php echo $data->dose_type; ?> </option>
                                        <?php } ?>
                                    </select>
                                    <label>Schedule</label>
                                    <select name="dose_schedule_id" id="select" required="1" class="form-control">

                                        <?php
                                        foreach ($scheduleInfo as $data) {
                                            ?>
                                            <option value="<?php echo $data->dose_schedule_id; ?>"> <?php echo $data->dose_schedule; ?> </option>
                                        <?php } ?>
                                    </select>
                                    <label>Suggestion</label>
                                    <select name="doseSuggestion_id" id="select" required="1" class="form-control">

                                        <?php
                                        foreach ($suggestion as $data) {
                                            ?>
                                            <option value="<?php echo $data->doseSuggestion_id; ?>"> <?php echo $data->dose_suggestion; ?> </option>
                                        <?php } ?>
                                    </select>
                                    <label>   Generic Name </label>
                                    <select name="medicine_generic_id" id="select" required="1" class="form-control">

                                        <?php
                                        foreach ($new_generic_name as $data) {
                                            ?>
                                            <option value="<?php echo $data->medicine_generic_id; ?>"> <?php echo $data->generic_name; ?> </option>
                                        <?php } ?>
                                    </select>
                                    <label>Drug Info</label>
                                    <textarea class="form-control" name="drug_advice_info" rows="3"></textarea>
                                    <label>Brand Name </label>
                                    <input type="text" class="form-control" name="brand_name" id="brand_name" required="1" >

                                </div>
                                <div class="col-md-5">
                                    <label> Pharma. Name </label>
                                    <input type="text" class="form-control" name="pharma_name" required="1" value="<?php echo "N/A"?>">
                                    <label>Pharma Cell Number</label>
                                    <input type="text" class="form-control" name="pharma_cell_number" required="1" value="<?php echo "N/A"?>">
                                    <label>Pharma Email Number</label>
                                    <input type="text" class="form-control" name="pharma_email_number" required="1" value="<?php echo "N/A"?>">
                                    <label> MRO Name</label>
                                    <input type="text" class="form-control" name="mro_name" required="1" value="<?php echo "N/A"?>">
                                    <label>Address</label>
                                    <textarea class="form-control" name="address" rows="3" value="<?php echo "N/A"?>"></textarea>
                                    <br>
                                    <button class="btn btn-info" id="btn_newdrug"><span class="glyphicon glyphicon-saved"></span>  Save</button>


                                </div>
                            </div>

                        </form>
                    </div>
                    <script>
                        $("#btn_newdrug").click(function() {
                            $.post($("#addnewdrug").attr("action"),
                                    $("#addnewdrug :input").serializeArray(),
                                    function(info) {
                                        $("#result_new_drg_msg").html(info);
                                    });
                            clearInput();
                        });

                        $("#addnewdrug").submit(function() {
                            return false;
                        });
                        function clearInput() {
                            $("#addnewdrug :input").each(function() {
                                $(this).val('');
                            });
                        }
                    </script>  


                </div>


                <div class="patient_new_complaint box" style="background-color: #32CD32; border-radius: 20px;">
                    <center><span id="result_new_pres_com_msg"></span></center> 
                    <div align="right">
                        <a href="<?php echo base_url(); ?>welcome/view_presenting_complaint.html" target="_top">
                            <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
                                <span class="glyphicon glyphicon-search"></span>
                                Search
                            </button>
                        </a>
                    </div>

                    <form id="add_new_complaint" method="post" action="<?php echo base_url(); ?>data_record/save_complaint_name.html">
                        <div class="form-group has-success">
                            Add Presenting Complaint Name
                            <label class="control-label" for="inputSuccess1"></label>
                            <input type="text" class="form-control" name="complain_name" id="complain_name" required="1" ><br>
                            <center> <button class="btn btn-info" id="btn-complaint"><span class="glyphicon glyphicon-save"></span>
                                    Save&nbsp;&nbsp;</button>

                            </center>

                        </div>
                    </form>   


                    <script>
                        $("#btn-complaint").click(function() {
                            $.post($("#add_new_complaint").attr("action"),
                                    $("#add_new_complaint :input").serializeArray(),
                                    function(info) {
                                        $("#result_new_pres_com_msg").html(info);
                                    });
                            clearInput();
                        });

                        $("#add_new_complaint").submit(function() {
                            return false;
                        });
                        function clearInput() {
                            $("#add_new_complaint :input").each(function() {
                                $(this).val('');
                            });
                        }
                    </script> 



                </div>
                <div class="patient_advice box" style="background-color: #9DAF72; border-radius: 20px;">
                    <center><span id="result_pt_advice"></span></center> 
                    <div align="right">
                        <a href="<?php echo base_url(); ?>welcome/viewpatientadviceInfo.html" target="_top">
                            <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>&nbsp;Search
                            </button></a>
                    </div>

                    <form  id="patientadvicedata" method="post" action="<?php echo base_url(); ?>data_record/save_patient_advice_info.html">
                        Add Advice Name <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess1"></label>
                            <input type="text" class="form-control" name="patient_advice_name" id="patient_advice_name"required="1" ><br>
                            <center> <button class="btn btn-info" id="btn_pt_advice"><span class="glyphicon glyphicon-save"></span>
                                    Save&nbsp;&nbsp;</button>

                            </center>

                        </div>
                    </form>


                    <script>
                        $("#btn_pt_advice").click(function() {
                            $.post($("#patientadvicedata").attr("action"),
                                    $("#patientadvicedata :input").serializeArray(),
                                    function(info) {
                                        $("#result_pt_advice").html(info);
                                    });
                            clearInput();
                        });

                        $("#patientadvicedata").submit(function() {
                            return false;
                        });
                        function clearInput() {
                            $("#patientadvicedata :input").each(function() {
                                $(this).val('');
                            });
                        }
                    </script> 


                </div>
                <div class="suggestion box" style="background-color: #4CC3D9; border-radius: 20px;">
                    <center><span id="result_suggestion_msg"></span></center> 
                    <div align="right">
                        <a href="<?php echo base_url(); ?>welcome/view_suggestion_Info.html" target="_top">
                            <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
                                <span class="glyphicon glyphicon-search"></span>
                                Search
                            </button>
                        </a>

                    </div>

                    <form id="suggestiondata" method="post" action="<?php echo base_url(); ?>data_record/save_suggestion_name.html">
                        Add Suggestion Name <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess1"></label>
                            <input type="text" class="form-control" name="dose_suggestion" id="dose_suggestion" required="1" ><br>
                            <center> <button class="btn btn-info" id="btn_suggestion"><span class="glyphicon glyphicon-save"></span>
                                    Save&nbsp;&nbsp;</button>

                            </center>

                        </div>
                    </form> 
                    <script>
                        $("#btn_suggestion").click(function() {
                            $.post($("#suggestiondata").attr("action"),
                                    $("#suggestiondata :input").serializeArray(),
                                    function(info) {
                                        $("#result_suggestion_msg").html(info);
                                    });
                            clearInput();
                        });

                        $("#suggestiondata").submit(function() {
                            return false;
                        });
                        function clearInput() {
                            $("#suggestiondata :input").each(function() {
                                $(this).val('');
                            });
                        }
                    </script> 
                </div>
                <div class="generic box"  style="background-color: #0099FF; border-radius: 20px;">
                    <center><span id="result_generic_msg"></span></center>  
                    <div align="right">
                        <a href="<?php echo base_url(); ?>welcome/view_generic_Info.html" target="_top">
                            <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
                                <span class="glyphicon glyphicon-search"></span>
                                Search
                            </button>
                        </a>

                    </div>
                    <center><font color="#FF0000">
                        <?php
                        $message = $this->session->userdata('save_message');
                        //echo $message;
                        if (isset($message)) {
                            echo $message;
                            $this->session->unset_userdata('save_message');
                        }
                        ?>
                        </font></center>   
                    <form id="genericdata" method="post" action="<?php echo base_url(); ?>data_record/save_generic_info.html">
                        Add Generic Name <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess1"></label>
                            <input type="text" class="form-control" name="generic_name" id="generic_name"required="1" ><br>
                            <center> <button class="btn btn-info" id="btn_generic" onClick="return save()"><span class="glyphicon glyphicon-save"></span>
                                    Save&nbsp;&nbsp;</button>

                            </center>

                        </div>
                    </form>  

                    <script>
                        $("#btn_generic").click(function() {
                            $.post($("#genericdata").attr("action"),
                                    $("#genericdata :input").serializeArray(),
                                    function(info) {
                                        $("#result_generic_msg").html(info);
                                    });
                            clearInput();
                        });

                        $("#genericdata").submit(function() {
                            return false;
                        });
                        function clearInput() {
                            $("#genericdata :input").each(function() {
                                $(this).val('');
                            });
                        }
                    </script> 
                </div>

                <div class="green box" style="background-color: #0099FF; border-radius: 20px;">
                    <center><span id="result_green_msg"></span></center>  
                    <div align="right">
                        <a href="<?php echo base_url(); ?>welcome/viewdoeseInfo.html" target="_top">
                            <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>&nbsp;Search
                            </button></a>
                    </div>

                    <form id="dosescheduleInfotwo" action="<?php echo base_url(); ?>data_record/save_doseType_info.html" method="post">
                        Add Dose Name <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess1"></label>
                            <input type="text" class="form-control" name="dose_type"  required="1" ><br>
                            <center> <button id="bijon" class="btn btn-info" ><span class="glyphicon glyphicon-save"></span>
                                    Save&nbsp;&nbsp;</button>

                            </center>

                        </div>
                    </form>
                    <script>
                        $("#bijon").click(function() {
                            $.post($("#dosescheduleInfotwo").attr("action"),
                                    $("#dosescheduleInfotwo :input").serializeArray(),
                                    function(info) {
                                        $("#result_green_msg").html(info);
                                    });
                            clearInput();
                        });

                        $("#dosescheduleInfotwo").submit(function() {
                            return false;
                        });
                        function clearInput() {
                            $("#dosescheduleInfotwo :input").each(function() {
                                $(this).val('');
                            });
                        }
                    </script> 

                </div>

                <div class="blue box" style="background-color: #7BC8A4; border-radius: 20px;">
                    <center><span id="result_dose_sche_msg"></span></center>  
                    <div align="right">
                        <a href="<?php echo base_url(); ?>welcome/viewdoes_scheduleName.html" target="_top">
                            <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
                                <span class="glyphicon glyphicon-search"></span>
                                Search
                            </button>
                        </a>
                    </div>




                    <form id="dosescheduleInfo" method="post" action="<?php echo base_url(); ?>data_record/save_doseschedule_name.html">
                        Add Dose Schedule Name <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess1"></label>
                            <input type="text" class="form-control" name="dose_schedule" id="dose_schedule" required="1" ><br>
                            <center> <button id="doseschedule"class="btn btn-info"><span class="glyphicon glyphicon-save"></span>
                                    Save&nbsp;&nbsp;&nbsp;</button>

                            </center>

                        </div>
                    </form> 


                    <script>
                        $("#doseschedule").click(function() {
                            $.post($("#dosescheduleInfo").attr("action"),
                                    $("#dosescheduleInfo :input").serializeArray(),
                                    function(info) {
                                        $("#result_dose_sche_msg").html(info);
                                    });
                            clearInput();
                        });

                        $("#dosescheduleInfo").submit(function() {
                            return false;
                        });
                        function clearInput() {
                            $("#dosescheduleInfo :input").each(function() {
                                $(this).val('');
                            });
                        }
                    </script> 
                </div>
</div>
        </div>

    </div>

</body>