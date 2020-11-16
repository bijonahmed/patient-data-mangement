<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo base_url(); ?>resource/css/bootstrap.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>resource/js/jquery-ui.js"></script>
        <title>Welcome</title>

        <style type="text/css">
            <!--
            .style2 {font-size: 16}
            .style4 {font-size: 14}
            .style6 {font-size: 14; font-weight: bold; }
            .style8 {font-size: 18}
            .style14 {font-size: 18px}
            -->
        </style>

    </div>

    <?php
    /*
      Dynamic Seal off
      <table width="1250" border="0" align="center">
      <tr>
      <th colspan="0" valign="top" scope="col"><div align="left">
      <p><?php echo $view_doctor_sealinfo->for_bangla_seal; ?></p>
      <p>&nbsp;</p>
      </div></th>
      <th width="8" valign="top" scope="col">&nbsp;</th>
      <th width="" colspan="2" valign="top" scope="col"><p align="right" style=""><?php echo $view_doctor_sealinfo->for_english_seal; ?></p></th>
      </tr>
      </table>
     */
    ?>
<div align="center" style="margin-bottom: 150px;">

</div> 
<div align="center" style="height: 1100px;" class="style14">

    <strong><span class="style2">
            <?php
            if ($patient_information == NULL) {
                echo '';
            } else {
                $length = strlen($patient_information->manual_pid);
                $part1 = substr_replace("$patient_information->manual_pid", "/", 2);
                //$part2=substr_replace("$data->manual_pid","",$length-2);
                $part2 = substr("$patient_information->manual_pid", 2);
                $manual_pid = $part1 . $part2;
                echo 'Patient ID: ' . $manual_pid;
            }
            ?>
        </span></strong><span class="style2">
        Patient Name:
        <?php
        if ($patient_information == NULL) {
            echo '';
        } else {
            echo ' ' . $patient_information->patient_name;
        }
        ?>
        , <?php
        if ($patient_information == NULL) {
            echo '';
        } else {
            echo 'Age: ' . $patient_information->age;
        }
        ?>
        ,                            <?php
        if ($patient_information == NULL) {
            echo '';
        } else {
            echo 'Sex: ' . $patient_information->sex;
        }
        ?>

        <?php
        if ($prescriptoin_data_visitingNo == NULL) {
            echo '';
        } else {
            echo 'Visit No: ' . $prescriptoin_data_visitingNo->visiting_no;
        }
        ?>  

        <?php
        if ($prescriptoin_data_visitingNo == NULL) {
            echo '';
        } else {
            echo 'Date: ' . date("d-m-Y", strtotime($prescriptoin_data_visitingNo->current_date));
        }
        ?>
    </span>
    <br><br>
    <div align="right">              <!--Physical findings  -->
        <?php
        if ($physicalfindings != Null) {
            ?>

            <table cellpadding="1" cellspacing="0" border="0" class="table" id="example_">

                <tbody>
                    <?php
                    $x = 1; {
                        ?> <?php
                        $patient_id = $this->session->userdata('patient_id');
                        if (isset($patient_id)) {


                            //foreach ($physicalfindings as $pres) {
                            ?>

                        <strong> <?php
                if ($physicalfindings->display == "Yes") {
                    echo "Height -";
                    echo $physicalfindings->height;
                } else {
                    echo "";
                }
                            ?>
                        </strong>

                        <strong> <?php
                if ($physicalfindings->display == "Yes") {
                    echo "Weight -";
                    echo $physicalfindings->weight;
                } else {
                    echo "";
                }
                            ?>
                        </strong>

                        <strong><?php
                if ($physicalfindings->display == "Yes") {
                    echo "BSA-";
                    echo $physicalfindings->bsa;
                } else {
                    echo "";
                }
                            ?>
                        </strong>



            <?php
        }
    }
    // }
    ?>

                </tbody>
            </table>


    <?php
}
?>   </div>

    <hr>
    <table width="1077" height="93" border="0" align="center" cellspacing="0">
        <tr>
            <td height="87" colspan="2" valign="top" scope="col">
                <div align="left">
                    <!--Diagnosis -->


                    <!--Diagnosis -->
                    <span class="style4">
<?php
if ($diagnosis != Null) {
    ?>
                        </span>
                            <?php
                            $x = 1; {
                                ?>
                            <?php
                            $patient_id = $this->session->userdata('patient_id');
                            if (isset($patient_id)) {


                                foreach ($diagnosis as $pres) {
                                    ?>

                                    <strong><?php
                                    if ($pres->display == "Yes") {
                                        echo " <strong><u> Diagnosis :</u></strong>";
                                        echo $pres->customized_diagnosis_category_name;
                                    } else {
                                        echo "";
                                    }
                                    ?>
                                    </strong>

                                        <?php
                                        $x++;
                                    }
                                }
                            }
                            ?>
                        <?php
                    }
                    ?><!--comorbidity  -->
                    <br>   <br>
                    <?php
                    if ($comorbidityInformation != Null) {
                        ?>
                        <strong><u>Comorbidity</u></strong><br>
                        <table class="table" border="1">
                            <!-- On rows -->
                            <thead>


                            </thead>

                            <!-- On cells (`td` or `th`) -->
    <?php
    $x = 1; {
        ?>
        <?php
        $patient_id = $this->session->userdata('patient_id');
        if (isset($patient_id)) {

            foreach ($comorbidityInformation as $pres) {
                ?>
                                        <?php
                                        if ($pres->display == "Yes") {
                                            echo $pres->comorbidity_name;
                                        } else {
                                            echo '';
                                        }
                                        ?>

                                        <?php
                                        if ($pres->display == "Yes") {
                                            echo $pres->comorbidity_duration;
                                        } else {
                                            echo '';
                                        }
                                        ?>

                                        <?php
                                        if ($pres->display == "Yes") {
                                            echo $pres->comorbidity_timing . "<strong>/</strong>";
                                        } else {
                                            echo '';
                                        }
                                        ?> <?php
                        $x++;
                    }
                }
            }
                            ?>
                        </table>
                            <?php
                        }
                        ?>

                    <!--Perosnal History  -->

                        <?php
                        if ($personalhistory != Null) {
                            ?>
                        <strong><u>Personal History</u></strong><br>
                        <table class="table" border="1">
                            <!-- On rows -->
                            <thead>


                            </thead>

                            <!-- On cells (`td` or `th`) -->
    <?php
    $x = 1; {
        ?>
        <?php
        $patient_id = $this->session->userdata('patient_id');
        if (isset($patient_id)) {

            foreach ($personalhistory as $pres) {
                ?>
                                        <?php
                                        if ($pres->display == "Yes") {
                                            echo $pres->personal_history_name;
                                        } else {
                                            echo '';
                                        }
                                        ?>     
                                        <?php
                                        if ($pres->display == "Yes") {
                                            echo $pres->personal_history_duration;
                                        } else {
                                            echo '';
                                        }
                                        ?>  
                                        <?php
                                        if ($pres->display == "Yes") {
                                            echo $pres->personal_history_timing . "<strong>/<strong>";
                                        } else {
                                            echo '';
                                        }
                                        ?> <?php
                                        $x++;
                                    }
                                }
                            }
                            ?>
                        </table>
                            <?php
                        }
                        ?>
                    <span class="style4">
                        <?php
                        if ($protocol_type != Null) {
                            ?>
                        </span>
                        <table cellpadding="1" cellspacing="0" border="1" class="table" id="example_">

                            <thead>
                                <tr>
                            <strong><u>Protocol</u></strong>:                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $x = 1; {
                                ?>
        <?php
        $patient_id = $this->session->userdata('patient_id');
        if (isset($patient_id)) {


            foreach ($protocol_type as $pres) {
                ?>

                                            <tr>

                                            <?php echo $pres->customized_chemotherapy_regimen_name; ?> 



                                            <?php
                                            $x++;
                                        }
                                    }
                                }
                                ?>
                                </tr>
                            </tbody>
                        </table>

                                    <?php
                                }
                                ?>
                                <?php
                                if ($protocol_pt_info != Null) {
                                    ?>

                        <table cellpadding="1" cellspacing="0" border="0" class="table" id="example_">

                            <thead>
                                <tr>

                                    <td width="50" class="style4">C.No</td>
                                    <td width="100" class="style4">Date</td>
                                    <td width="100" class="style4">Next Cycle</td>
                                    <td width="123" class="style4">Remarks</td>
                                </tr>
                            </thead>
                            <tbody>
    <?php
    $x = 1; {
        ?>
        <?php
        $patient_id = $this->session->userdata('patient_id');
        if (isset($patient_id)) {


            foreach ($protocol_pt_info as $pres) {
                ?>

                                            <tr>

                                                <td class="style4"><?php echo $pres->cycle_no; ?></td>
                                                <td class="style4"><?php echo date("d-m-Y", strtotime($pres->cycle_date_one)); ?></td>
                                                <td class="style4"><?php echo date("d-m-Y", strtotime($pres->cycle_date_two)); ?></td>
                                                <td class="style4"><?php echo $pres->remarks; ?></td>


                                            <?php
                                            $x++;
                                        }
                                    }
                                }
                                ?>
                                </tr>
                            </tbody>
                        </table>
                        <span class="">
                                    <?php
                                }
                                ?>        <span class="">

                        </span> 

                        <!--Physical Findings -->
<?php
if ($presentingComplaint != Null) {
    ?>
                        </span><span class="style4"></span><br>
                        </strong>
                        <table class="table" border="1">
                            <!-- On rows -->
                            <thead>

                            <strong><u>Complaint</u></strong><br>

                            <!-- On cells (`td` or `th`) -->
                            <?php
                            $x = 1; {
                                ?>
        <?php
        $patient_id = $this->session->userdata('patient_id');
        if (isset($patient_id)) {

            foreach ($presentingComplaint as $pres) {
                ?>

                                        <tr class="">

                                        <?php
                                        if ($pres->display == "Yes") {

                                            echo $pres->complain_name;
                                        } else {
                                            echo '';
                                        }
                                        ?>

                <?php
                if ($pres->display == "Yes") {
                    echo $pres->complaint_duration;
                } else {
                    echo '';
                }
                ?>

                                            <?php
                                            if ($pres->display == "Yes") {
                                                echo $pres->complaint_timing . "<br>";
                                            } else {
                                                echo '';
                                            }
                                            ?>
                                        </tr><?php
                                            $x++;
                                        }
                                    }
                                }
                                ?>

                        </table>
                        <span class="style6">
                                <?php
                            }
                            ?>

                        <!--Physical findings  -->
                            <?php
                            if ($physicalfindingsValue != Null) {
                                ?>
                        </span><span class="style4"></span>

                            <?php
                            if ($physicalfindings->display == "Yes") {
                                echo "<u><strong>Physical Findings</strong></u><br>";
                                echo "BP:" . $physicalfindings->systolic . " /";
                            } else {
                                echo "";
                            }
                            ?>
                            <?php
                            if ($physicalfindings->display == "Yes") {
                                echo $physicalfindings->diastolic;
                            } else {
                                echo "";
                            }
                            ?>
                        <br>
                        <table cellpadding="1" cellspacing="0" border="0" class="table" id="example_">

                            <thead>
                                <tr>                                </tr>
                            </thead>
                            <tbody>
                        <?php
                        $x = 1; {
                            ?>
                            <?php
                            $patient_id = $this->session->userdata('patient_id');
                            if (isset($patient_id)) {


                                foreach ($physicalfindingsValue as $pres) {
                                    ?>

                                            <tr>

                <?php //echo $pres->customized_physical_findings_name; ?>


                <?php
                if ($pres->display == "Yes") {
                    echo $pres->phy_fin_value . " /";
                } else {
                    echo "";
                }
                ?>
                                            <?php
                                            $x++;
                                        }
                                    }
                                }
                                ?>
                                </tr>
                            </tbody>
                        </table>

                                    <?php
                                }
                                ?>                 
                    <u><strong></strong></u> <br>
                    <!--Others Report-->
                                <?php
                                if ($bomemarrow_report != Null) {
                                    ?>
                        <div class="table-responsive">
                            <table class="table" border="">
                                </thead>
                                <tbody>
                                    <?php
                                    $x = 1; {
                                        ?>
                                        <?php
                                        $patient_id = $this->session->userdata('patient_id');
                                        if (isset($patient_id)) {

                                            if ($bomemarrow_report) {
                                                foreach ($bomemarrow_report as $pres) {
                                                    if ($pres->display == "Yes") {
                                                        ?>
                                            <?php echo $pres->reciv_date; ?> -  <strong>Bone Marrow Report</strong>-
                        <?php echo $pres->report_description; ?>





                        <?php
                        $x++;
                    }
                }
            } else {
                echo "No others marrow report available";
            }
        }
    }
    ?>
                                </tr>
                                </tbody>
                            </table>
                                    <?php
                                }
                                ?>

                            <?php
                            if ($karyotype_report != Null) {
                                ?>

                            <!--KARYOTYPE REPORT Report-->
                            <div class="table-responsive style4">
                                <table class="table" border="0">
                                    <thead>
                                    </thead>
                                    <tbody>
                                <?php
                                $x = 1; {
                                    ?>
                                    <?php
                                    $patient_id = $this->session->userdata('patient_id');
                                    if (isset($patient_id)) {

                                        if ($karyotype_report) {
                                            foreach ($karyotype_report as $pres) {
                                                if ($pres->display == "Yes") {
                                                    ?>
                                                <?php echo date("d-m-Y", strtotime($pres->reciv_date)); ?> - <strong>Karyotype Report</strong> - 
                                                <?php echo $pres->report_description; ?><br>


                                                <?php
                                                $x++;
                                            }
                                        }
                                    } else {
                                        echo "No available report";
                                    }
                                }
                            }
                            ?>
                                    </tr>

                                    </tbody>
                                </table>

                                        <?php
                                    }
                                    ?>



                            <!--usg  Report-->
<?php
if ($usg_report != Null) {
    ?><table class="table" border="0">
                                    <thead>



                                    </thead>
                                    <tbody>
                                    <?php
                                    $x = 1; {
                                        ?>
        <?php
        $patient_id = $this->session->userdata('patient_id');
        if (isset($patient_id)) {

            if ($usg_report) {
                foreach ($usg_report as $pres) {
                    if ($pres->display == "Yes") {
                        ?>

                                                            <tr>

                                                    <?php echo $pres->reciv_date; ?>-    <strong>USG Report</strong> -
                                                    <?php echo $pres->report_description; ?> 

                                                    <?php
                                                    $x++;
                                                }
                                            }
                                        } else {
                                            echo "No available report";
                                        }
                                    }
                                }
                                ?>
                                    </tr>
                                    </tbody>
                                </table>
                                        <?php
                                    }
                                    ?> <!--ECHO   Report-->
                                    <?php
                                    if ($echo_report != Null) {
                                        ?>
                                <table class="table" border="0">
                                    <thead>


                                    </thead>
                                    <tbody>
                                    <?php
                                    $x = 1; {
                                        ?>
                                        <?php
                                        $patient_id = $this->session->userdata('patient_id');
                                        if (isset($patient_id)) {

                                            if ($echo_report) {
                                                foreach ($echo_report as $pres) {
                                                    if ($pres->display == "Yes") {
                                                        ?>

                                                            <tr>

                                                    <?php echo $pres->reciv_date; ?> -   <strong>ECHO Report</strong>-
                                                    <?php echo $pres->report_description; ?>

                                                    <?php
                                                    $x++;
                                                }
                                            }
                                        } else {
                                            echo "No available report";
                                        }
                                    }
                                }
                                ?>
                                    </tr>
                                    </tbody>
                                </table>
                                        <?php
                                    }
                                    ?> <!--Histopathology   Report-->
                                    <?php
                                    if ($histopathology_report != Null) {
                                        ?>


                                <table class="table" border="0">
                                    <thead>

                                    </thead>
                                    <tbody>
                                    <?php
                                    $x = 1; {
                                        ?>
                                        <?php
                                        $patient_id = $this->session->userdata('patient_id');
                                        if (isset($patient_id)) {

                                            if ($histopathology_report) {
                                                foreach ($histopathology_report as $pres) {
                                                    if ($pres->display == "Yes") {
                                                        ?>

                                                            <tr>
                        <?php echo $pres->reciv_date; ?>  -  <strong>Histopathology Report</strong>-
                                                    <?php echo $pres->report_description; ?> 

                                                    <?php
                                                    $x++;
                                                }
                                            }
                                        } else {
                                            echo "No available report";
                                        }
                                    }
                                }
                                ?>
                                    </tr>
                                    </tbody>
                                </table>
                                        <?php
                                    }
                                    ?>

                                    <?php
                                    if ($cytopathology_report != Null) {
                                        ?><table class="table" border="0">
                                    <thead>

                                    </thead>
                                    <tbody>
                                        <?php
                                        $x = 1; {
                                            ?>
                                                <?php
                                        $patient_id = $this->session->userdata('patient_id');
                                        if (isset($patient_id)) {

                                            if ($cytopathology_report) {
                                                foreach ($cytopathology_report as $pres) {
                                                    if ($pres->display == "Yes") {
                                                        ?>

                                                        <?php echo $pres->reciv_date; ?> -<strong>Cytopathology Report </strong> -
                                                        <?php echo $pres->report_description; ?>  

                                                        <?php
                                                        $x++;
                                                    }
                                                }
                                            } else {
                                                echo "No available report";
                                            }
                                        }
                                    }
                                    ?>
                                    </tr>
                                    </tbody>
                                </table>
    <?php
}
?>
                                    <?php
                                    if ($radiology_report != Null) {
                                        ?>

                                <!--Radiology Report-->

                                <table class="table" border="0">
                                    <thead>

                                    </thead>
                                    <tbody>
                                        <?php
                                        $x = 1; {
                                            ?>
                                        <?php
                                        $patient_id = $this->session->userdata('patient_id');
                                        if (isset($patient_id)) {

                                            if ($radiology_report) {
                                                foreach ($radiology_report as $pres) {
                                                    if ($pres->display == "Yes") {
                                                        ?>

                                                            <tr>
                                                        <?php echo $pres->reciv_date; ?>  -<strong>Radiology Report </strong> -
                                                        <?php echo $pres->report_description; ?>

                        <?php
                        $x++;
                    }
                }
            } else {
                echo "No available report";
            }
        }
    }
    ?>
                                    </tr>
                                    </tbody>
                                </table>
    <?php
}
?> <?php
                                    if ($others_report != Null) {
                                        ?>

                                <!--Others   Report-->

                                <table class="table" border="0">
                                    <thead>

                                    </thead>
                                    <tbody>
                                        <?php
                                        $x = 1; {
                                            ?>
        <?php
        $patient_id = $this->session->userdata('patient_id');
        if (isset($patient_id)) {

            if ($others_report) {
                foreach ($others_report as $pres) {
                    if ($pres->display == "Yes") {
                        ?>

                                                            <tr>
                                                        <?php echo $pres->reciv_date; ?>  -<strong>Others Report </strong> -
                                                        <?php echo $pres->report_description; ?>

                                                        <?php
                                                        $x++;
                                                    }
                                                }
                                            } else {
                                                echo "No available report";
                                            }
                                        }
                                    }
                                    ?>
                                    </tr>
                                    </tbody>
                                </table>
    <?php
}
?>
                            <!--IMMUNOPHENOTYPING   Report-->
                                    <?php
                                    if ($immunophenotyping_report != Null) {
                                        ?>

                                <u><strong>Immunophenotyping Report</strong></u>
                                <table class="table" border="0">
                                    <thead>
                                        <tr>

                                            <td class=""> Date</td>
                                            <td class="" style="width:150px;">Test Name</td>
                                            <td class="">Value</td>
                                            <td class="">cell_line</td>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $x = 1; {
                                        ?>
                                        <?php
                                        $patient_id = $this->session->userdata('patient_id');
                                        if (isset($patient_id)) {

                                            if ($immunophenotyping_report) {
                                                foreach ($immunophenotyping_report as $pres) {
                                                    if ($pres->display == "Yes") {
                                                        ?>

                                                            <tr>

                                                                <td class=""><?php echo $pres->reciv_date; ?></td>
                                                                <td class=""><?php echo $pres->immunophenotype_test_name; ?></td>
                                                                <td class=""><?php echo $pres->value; ?></td>
                                                                <td class=""><?php echo $pres->cell_line; ?></td>




                        <?php
                        $x++;
                    }
                }
            } else {
                echo "No available data ";
            }
        }
    }
    ?>
                                        </tr>
                                    </tbody>
                                </table>
                                        <?php
                                    }
                                    ?>
                            <!--Singline  Report-->
                                    <?php
                                    if ($multile_report != Null) {
                                        ?>



                                <table class="table" border="0">
                                    <thead>
                                        <tr>

                                            <td class="">Date</td>
                                            <td class="">T.Name</td>
                                            <td class="">Result</td>
                                            <td class="">Unit</td>
                                            <td class="">N/R</td>
                                        </tr>
                                    </thead>
                                    <tbody>
    <?php
    $x = 1; {
        ?>
                                                <?php
                                                $patient_id = $this->session->userdata('patient_id');
                                                if (isset($patient_id)) {

                                                    if ($multile_report) {
                                                        foreach ($multile_report as $pres) {
                                                            if ($pres->display == "Yes") {
                                                                ?>
                                                            <tr>
                                                                <td class=""><?php echo $pres->reciv_date; ?></td>
                                                                <td class=""><?php echo $pres->test_name; ?></td>
                                                                <td class=""><?php echo $pres->result; ?></td>
                                                                <td class=""><?php echo $pres->unit; ?></td>
                                                                <td class=""><?php echo $pres->normal_range; ?></td>
                                                    <?php
                                                    $x++;
                                                }
                                            }
                                        } else {
                                            echo "No multiple report available";
                                        }
                                    }
                                }
                                ?>
                                        </tr>
                                    </tbody>
                                </table>
    <?php
}
?>
<?php
if ($cytogenetic_report != Null) {
    ?>

                                <!--CYTOGENETIC   Report-->
                                <u><strong>Cytogenetic Report</strong></u>
                                <table class="table" border="0">
                                    <thead>
                                        <tr>

                                            <td class=""> Date</td>
                                            <td class="">Test Name</td>
                                            <td class="">Result</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $x = 1; {
                                            ?>
        <?php
        $patient_id = $this->session->userdata('patient_id');
        if (isset($patient_id)) {

            if ($cytogenetic_report) {
                foreach ($cytogenetic_report as $pres) {
                    if ($pres->display == "Yes") {
                        ?><tr>
                                                                <td class=""><?php echo $pres->reciv_date; ?></td>
                                                                <td class=""><?php echo $pres->cytogenetic_test_name; ?></td>
                                                                <td class=""><?php echo $pres->result; ?></td>
                                                                <?php
                                                                $x++;
                                                            }
                                                        }
                                                    } else {
                                                        echo "No available data ";
                                                    }
                                                }
                                            }
                                            ?>
                                        </tr>
                                    </tbody>
                                </table>
    <?php
}
?>
<?php
if ($haematology_report != Null) {
    ?>
                                <!--Haematology Report-->
    <?php
    $x = 1; {
        ?>                  
        <?php
        if ($haematology_report) {
            foreach ($haematology_report as $data) {
                if ($data->display == "Yes") {
                    ?>

                                                        <?php
                                                        if ($data->hb != Null) {
                                                            ?>
                                                    Hb%  <?php echo $data->hb; ?> <br>
                                                            <?php
                                                        }
                                                        ?>

                                                        <?php
                                                        if ($data->esr != Null) {
                                                            ?>
                                                    ESR   :<?php echo $data->esr; ?> <br>
                                                                <?php
                                                            }
                                                            ?>

                                                            <?php
                                                            if ($data->rbc != Null) {
                                                                ?>
                                                    Red Blood Cell :<?php echo $data->rbc; ?><br>
                                                                <?php
                                                            }
                                                            ?>

                    <?php
                    if ($data->platelete != Null) {
                        ?>
                                                    Platelete Count:<?php echo $data->platelete; ?><br>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($data->wbc != Null) {
                                                    ?>
                                                    WBC:<?php echo $data->wbc; ?><br>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($data->ce != Null) {
                                                    ?>
                                                    TCE: <?php echo $data->ce; ?> <br>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($data->neutrophils != Null) {
                                                    ?>
                                                    Neutrophil:<?php echo $data->neutrophils; ?><br>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($data->lymphocytes != Null) {
                                                    ?>
                                                    Lymphocytes:<?php echo $data->lymphocytes; ?><br>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($data->monocytes != Null) {
                                                    ?>
                                                    Monocytes:<?php echo $data->monocytes; ?> <br>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($data->eosinophils != Null) {
                                                    ?>
                                                    Eosinophil:<?php echo $data->eosinophils; ?><br>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($data->basophil != Null) {
                                                    ?>
                                                    Basophil:<?php echo $data->basophil; ?><br>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($data->parameter_one != Null) {
                                                    ?>
                                                    Blast:<?php echo $data->parameter_one; ?> <?php echo $data->para_one_rpt; ?><br>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($data->para_two_rpt != Null) {
                                                    ?>
                                                    Myeloblast:<?php echo $data->parameter_two; ?> <?php echo $data->para_two_rpt; ?> <br>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($data->para_three_rpt != Null) {
                                                    ?>
                                                    Atypical cells: <?php echo $data->parameter_three; ?> <?php echo $data->para_three_rpt; ?><br>

                                                    <?php
                                                }
                                                ?>   
                                                <?php
                                                if ($data->hct != Null) {
                                                    ?>
                                                    HCT/PCV: <?php echo $data->hct; ?> <br>
                                                    <?php
                                                }
                                                ?>   
                                                <?php
                                                if ($data->mcv != Null) {
                                                    ?>
                                                    MCV:<?php echo $data->mcv; ?><br>
                                                    <?php
                                                }
                                                ?>   
                                                <?php
                                                if ($data->mch != Null) {
                                                    ?>
                                                    MCH:<?php echo $data->mch; ?><br>
                                                    <?php
                                                }
                                                ?>  
                                                <?php
                                                if ($data->mchc != Null) {
                                                    ?>
                                                    MCHC:<?php echo $data->mchc; ?> <br>
                                                    <?php
                                                }
                                                ?> 
                                                <?php
                                                if ($data->rdw != Null) {
                                                    ?>
                                                    RDW:<?php echo $data->rdw; ?><br>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($data->bt_min != Null) {
                                                    ?>
                                                    BT :  <?php echo $data->bt_min; ?><br>
                        <?php
                    }
                    ?> <?php
                                                if ($data->ct_min != Null) {
                                                    ?>
                                                    CT :<?php echo $data->ct_min; ?> <br>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($data->mp != Null) {
                                                    ?>
                                                    Malarial Parasite : <?php echo $data->mp; ?><br>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($data->pbf != Null) {
                                                    ?>
                                                    PBF:   <?php echo $data->pbf; ?><br>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                $x++;
                                            }
                                        }
                                    } else {
                                        echo "No available  data";
                                    }
                                }
                                ?><br> 
                                <?php
                            }
                            ?>       

                            <!--BONE MARROW REPORT Report-->
                            <?php
                            if ($bomemarrow_report != Null) {
                                ?>
                                <?php
                                $x = 1; {
                                    ?>
                                    <?php
                                    $patient_id = $this->session->userdata('patient_id');
                                    if (isset($patient_id)) {

                                        if ($bomemarrow_report) {
                                            foreach ($bomemarrow_report as $pres) {
                                                if ($pres->display == "Yes") {
                                                    ?>

                                                    Date : <?php echo $pres->reciv_date; ?><br>
                                                    <?php
                                                    if ($pres->introudction != Null) {
                                                        ?>     
                                                        Introduction :<?php echo $pres->introudction; ?> <br>
                                                        <?php
                                                    }
                                                    ?>
                                                    <?php
                                                    if ($pres->aspiration != Null) {
                                                        ?>   
                                                        Aspiration :<?php echo $pres->aspiration; ?><br>
                                                        <?php
                                                    }
                                                    ?>
                                                    <?php
                                                    if ($pres->stain_used != Null) {
                                                        ?> 
                                                        Stain_used : <?php echo $pres->stain_used; ?><br>
                                                        <?php
                                                    }
                                                    ?>
                                                    <?php
                                                    if ($pres->cellularity_inf != Null) {
                                                        ?>
                                                        Cellularity_info:  <?php echo $pres->cellularity_inf; ?> <br>
                                                        <?php
                                                    }
                                                    ?>
                                                    <?php
                                                    if ($pres->ery != Null) {
                                                        ?>
                                                        Erythropoesis : <?php echo $pres->ery; ?><br>
                                                        <?php
                                                    }
                                                    ?>
                                                    <?php
                                                    if ($pres->granu != Null) {
                                                        ?>
                                                        Granulopoesis : <?php echo $pres->granu; ?><br>
                                                        <?php
                                                    }
                                                    ?>
                                                    <?php
                                                    if ($pres->mega != Null) {
                                                        ?>
                                                        Megakaryocytes: <?php echo $pres->mega; ?><br>
                                                        <?php
                                                    }
                                                    ?>
                                                    <?php
                                                    if ($pres->ly_his_pls_cells != Null) {
                                                        ?>
                                                        Lymphocytes, Histocytes and Plasma Cell: <?php echo $pres->ly_his_pls_cells; ?> <br>
                                                        <?php
                                                    }
                                                    ?><?php
                                                    if ($pres->parasites != Null) {
                                                        ?>
                                                        Parasite: <?php echo $pres->parasites; ?><br>
                                                        <?php
                                                    }
                                                    ?>
                                                    <?php
                                                    if ($pres->comment != Null) {
                                                        ?>

                                                        Comment: <?php echo $pres->comment; ?><br>
                                                        <?php
                                                    }
                                                    ?>
                                                    <?php
                                                    if ($pres->reviewed_by != Null) {
                                                        ?>
                                                        Reviewed by: <?php echo $pres->reviewed_by; ?><br>
                                                        <?php
                                                    }
                                                    ?>           

                                                    <?php
                                                    $x++;
                                                }
                                            }
                                        } else {
                                            echo "No available data";
                                        }
                                    }
                                }
                                ?>

                                <br>        
                                <?php
                            }
                            ?>          

                            <?php
                            if ($urine_report != Null) {
                                ?>
                                <?php
                                if ($urine_report) {
                                    foreach ($urine_report as $data) {
                                        if ($data->display == "Yes") {
                                            ?>
                                            Reporting Date: <?php echo $data->reciv_date; ?>
                                            <br>

                                            <?php
                                            if ($data->quantity != Null) {
                                                ?>                           
                                                Quantity :<?php echo $data->quantity; ?>,<br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->sediment != Null) {
                                                ?>
                                                Sediment : <?php echo $data->sediment; ?> <br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->color != Null) {
                                                ?>

                                                Colour : <?php echo $data->color; ?><br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->spe_grav != Null) {
                                                ?>
                                                Specific  Gravity : <?php echo $data->spe_grav; ?><br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->apper != Null) {
                                                ?>
                                                Appearance : <?php echo $data->apper; ?><br>
                    <?php
                }
                ?>
                                            <?php
                                            if ($data->reaction != Null) {
                                                ?>
                                                Reaction : <?php echo $data->reaction; ?><br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->acetone != Null) {
                                                ?>
                                                Acetone : <?php echo $data->acetone; ?><br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->ex_ph != Null) {
                                                ?>
                                                Excess of Phos. : <?php echo $data->ex_ph; ?><br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->bile_salt != Null) {
                                                ?>
                                                Bile Salt : <?php echo $data->bile_salt; ?><br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->albumin != Null) {
                                                ?>
                                                Albumin : <?php echo $data->albumin; ?><br>
                    <?php
                }
                ?>
                                            <?php
                                            if ($data->bile_pig != Null) {
                                                ?>
                                                Bile pigment : <?php echo $data->bile_pig; ?><br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->sugur != Null) {
                                                ?>
                                                Sugar : <?php echo $data->sugur; ?><br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->urobili != Null) {
                                                ?>
                                                Urobilinogen : <?php echo $data->urobili; ?> <br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->others != Null) {
                                                ?>
                                                Others : <?php echo $data->others; ?><br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->chyle != Null) {
                                                ?>
                                                Chyle : <?php echo $data->chyle; ?> <br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->ep_cell != Null) {
                                                ?>
                                                Epithelial cell : <?php echo $data->ep_cell; ?> <br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->cal_oxa != Null) {
                                                ?>
                                                Calcium Oxalate  :<?php echo $data->cal_oxa; ?> <br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->pus_cells != Null) {
                                                ?>
                                                Pus Cells :<?php echo $data->pus_cells; ?><br>

                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->uric_acid != Null) {
                                                ?>
                                                Uric Acid Crystals : <?php echo $data->uric_acid; ?> <br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->rbcs != Null) {
                                                ?>
                                                RBCs : <?php echo $data->rbcs; ?>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->urate_crys != Null) {
                                                ?>
                                                Urate Crystals : <?php echo $data->urate_crys; ?><br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->mucus != Null) {
                                                ?>
                                                Mucus : <?php echo $data->mucus; ?><br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->amr_ph != Null) {
                                                ?>
                                                Amorph. Phosphate : <?php echo $data->amr_ph; ?><br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->pus_cast != Null) {
                                                ?>
                                                Pus Casts : <?php echo $data->pus_cast; ?> <br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->tre_phs != Null) {
                                                ?>
                                                Triple Phosphate : <?php echo $data->tre_phs; ?> <br>
                    <?php
                }
                ?>
                                            <?php
                                            if ($data->sperat != Null) {
                                                ?>
                                                Spermatozoa :  <?php echo $data->sperat; ?><br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->candida != Null) {
                                                ?>
                                                Candida : <?php echo $data->candida; ?> <br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->wbc != Null) {
                                                ?>
                                                WBC Cast : <?php echo $data->wbc; ?><br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->hayline_cast != Null) {
                                                ?>
                                                Hyaline Cast :<?php echo $data->hayline_cast; ?><br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->granuloar != Null) {
                                                ?>
                                                Granular Cast: <?php echo $data->granuloar; ?><br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->bacteria != Null) {
                                                ?>
                                                Bacteria: <?php echo $data->bacteria; ?><br>
                                                <?php
                                            }
                                            ?>

                                            <?php
                                        }
                                    }
                                } else {
                                    echo "No available  data";
                                }
                                ?>

                                <?php
                            }
                            ?>


                            <?php
                            if ($stool_report != Null) {
                                ?>
                                <?php
                                if ($stool_report) {

                                    foreach ($stool_report as $data) {
                                        if ($data->display == "Yes") {
                                            ?>
                                            Reporting Date: <?php echo $data->reciv_date; ?>
                                            <br>
                                            <?php
                                            if ($data->quantity != Null) {
                                                ?>
                                                Quantity(Amount):<?php echo $data->quantity; ?>  <br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->ordor != Null) {
                                                ?>
                                                Odour :<?php echo $data->ordor; ?> <br>
                                                <?php
                                            }
                                            ?> 
                                            <?php
                                            if ($data->consistency != Null) {
                                                ?>
                                                Consistency : <?php echo $data->consistency; ?>  <br>
                                                <?php
                                            }
                                            ?> 
                                            <?php
                                            if ($data->mucus != Null) {
                                                ?>
                                                Mucus :<?php echo $data->mucus; ?>  <br>
                                                <?php
                                            }
                                            ?> 
                                            <?php
                                            if ($data->color != Null) {
                                                ?>
                                                Colour :<?php echo $data->color; ?> <br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->blood != Null) {
                                                ?>
                                                Blood : <?php echo $data->blood; ?> <br>
                    <?php
                }
                ?>
                                            <?php
                                            if ($data->un_fp != Null) {
                                                ?>
                                                Undigested Food Particles :<?php echo $data->un_fp; ?> <br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->helminth != Null) {
                                                ?>
                                                Helminth. :<?php echo $data->helminth; ?> <br>
                    <?php
                }
                ?>
                                            <?php
                                            if ($data->reaction != Null) {
                                                ?>
                                                Reaction : <?php echo $data->reaction; ?><br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->obt != Null) {
                                                ?>
                                                Occult Blood Test (OBT) :<?php echo $data->obt; ?><br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->rs != Null) {
                                                ?>
                                                Reducing Substances (R/S): </td> <?php echo $data->rs; ?><br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->bilirubin != Null) {
                                                ?>
                                                Bilirubin :<?php echo $data->bilirubin; ?><br>
                                                <?php
                                            }
                                            ?>   
                                            <?php
                                            if ($data->fat != Null) {
                                                ?>
                                                Fat.: <?php echo $data->fat; ?> <br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->str_and_sterobili != Null) {
                                                ?>
                                                Stercobili. and stercob : <?php echo $data->str_and_sterobili; ?> <br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->vege_cell != Null) {
                                                ?>
                                                Vegetable Cell: <?php echo $data->vege_cell; ?> <br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->troph_giardia != Null) {
                                                ?>
                                                Trophozoites of Giardia  :<?php echo $data->troph_giardia; ?> <br>
                                                <?php
                                            }
                                            ?>  
                                            <?php
                                            if ($data->epithe_cells != Null) {
                                                ?>
                                                Epithelial Cells: <?php echo $data->epithe_cells; ?> <br>
                                                <?php
                                            }
                                            ?> 
                                            <?php
                                            if ($data->ova_al != Null) {
                                                ?>
                                                Ova of A.L :<?php echo $data->ova_al; ?> <br>
                                                <?php
                                            }
                                            ?> 
                                            <?php
                                            if ($data->puss_cell != Null) {
                                                ?>
                                                Pus Cells : <?php echo $data->puss_cell; ?> <br>
                                                <?php
                                            }
                                            ?> 
                                            <?php
                                            if ($data->larva_of != Null) {
                                                ?>
                                                Larva of :<?php echo $data->larva_of; ?> <br>
                                                <?php
                                            }
                                            ?> 
                                            <?php
                                            if ($data->rbc != Null) {
                                                ?>
                                                RBC :<?php echo $data->rbc; ?> <br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->cyst_of_giardia != Null) {
                                                ?>
                                                Cyst of Giardia :<?php echo $data->cyst_of_giardia; ?> <br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->macrophages != Null) {
                                                ?>
                                                Macrophage  :<?php echo $data->macrophages; ?> <br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->cyst_of_col != Null) {
                                                ?>
                                                Cyst of E.Coli : <?php echo $data->cyst_of_col; ?> <br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->muscle_fibre != Null) {
                                                ?>
                                                Muscle Fibre : <?php echo $data->muscle_fibre; ?> <br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->t_hominis != Null) {
                                                ?>
                                                T. hominis : <?php echo $data->t_hominis; ?> <br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->fat_globules != Null) {
                                                ?>
                                                Fat Globules :<?php echo $data->fat_globules; ?> <br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->blas_homins != Null) {
                                                ?>
                                                Blastocystis hominis : <?php echo $data->blas_homins; ?> <br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->starch_granules != Null) {
                                                ?>
                                                Starch Granules : <?php echo $data->starch_granules; ?> <br>
                                                <?php
                                            }
                                            ?> 
                                            <?php
                                            if ($data->cast != Null) {
                                                ?>
                                                Cast :<?php echo $data->cast; ?> <br>
                                                <?php
                                            }
                                            ?> 
                                            <?php
                                            if ($data->cl_crystals != Null) {
                                                ?>
                                                C.L.Crystals  :<?php echo $data->cl_crystals; ?> <br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->fusifo_bacili != Null) {
                                                ?>  

                                                Fusiform long bacilli :<?php echo $data->fusifo_bacili; ?> <br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->bacteria != Null) {
                                                ?> 
                                                Bacteria : <?php echo $data->bacteria; ?><br>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if ($data->candida != Null) {
                                                ?> 
                                                Candida  :<?php echo $data->candida; ?> <br>
                                                <?php
                                            }
                                            ?>

                                            <?php
                                        }
                                    }
                                } else {
                                    // echo "No available  data";
                                }
                                ?>
                                <?php
                            }
                            ?><br>
                            <!--Advice -->
                            <?php
                            if ($adviceinfo != Null) {
                                ?>

                                </span>
                                <table cellpadding="1" cellspacing="0" border="0" class="table" id="example_">

                                    <thead>
                                        <tr>

                                    <u><strong>Advice</strong></u><br>
                                    </tr>
                                    </thead>
                                    <tbody>
                                <?php
                                $x = 1; {
                                    ?>
                                    <?php
                                    $patient_id = $this->session->userdata('patient_id');
                                    if (isset($patient_id)) {

                                        foreach ($adviceinfo as $pres) {
                                            ?>

                                                    <tr>

                                            <?php echo $pres->patient_advice_name; ?> /


                                            <?php
                                            $x++;
                                        }
                                    }
                                }
                                ?>
                                        </tr>
                                    </tbody>
                                </table> 
                                <?php
                            }
                            ?>
                            <!--Investigation -->
                            <?php
                            if ($investigationinfo != Null) {
                                ?>

                                <table cellpadding="0" cellspacing="0" border="0" class="table" id="example_">

                                    <thead>
                                        <tr>


                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php
                                $x = 1; {
                                    ?>
        <?php
        $patient_id = $this->session->userdata('patient_id');
        if (isset($patient_id)) {

            foreach ($investigationinfo as $pres) {
                ?>
                                                    <tr>
                <?php echo $pres->test_name; ?>/</td>


                                                    <?php
                                                    $x++;
                                                }
                                            }
                                        }
                                        ?>
                                        </tr>
                                    </tbody>
                                </table> 
                                        <?php
                                    }
                                    ?>
                        </div>
                    </div>    </td>
        <style>
            .line
            {
                margin-bottom: 400px;       
                border-right: 1px solid black;
                top: 0;
                bottom: 0;
                height: auto;

            }
        </style>
        <th width="45" valign="top" scope="col" class="line"></th>

        <td width="591" colspan="2" valign="top" scope="col">
            <div align="left">
                <!--Protocol Type -->

                <div class="col-6 col-sm-6 col-lg-6">

                    <!--Protocol Type -->

                    <!--Drug -->
                    <!--Drug -->
<?php
if ($prescriptoin_data != Null) {
    ?>
                        <br>
                        <style>
                            .rx
                            {
                                font-size: 25px;
                            }
                        </style>
                        <div class="rx style4"  style="width: 400px;"><strong><span class="style8"><span class="style14"><sup>R</sup></span><sub>x</sub></span></strong></div>

                        <span class="style4"><br>
                                        <?php
                                        $x = 1; {
                                            ?>
                                                <?php
                                                $patient_id = $this->session->userdata('patient_id');
                                                if (isset($patient_id)) {


                                                    foreach ($prescriptoin_data as $pres) {
                                                        ?>

                                        <strong><?php echo $pres->dose_type; ?> </strong>
                                                        <?php echo $pres->brand_name; ?><br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $pres->dose_schedule; ?>

                                        -<?php echo $pres->dose_suggestion; ?>
                                            <?php echo $pres->day; ?> Day<br>
                                        <br>


                <?php
                $x++;
            }
        }
    }
    ?>

    <?php
}
?>
                    </span></div>
            </div>
            </div>
