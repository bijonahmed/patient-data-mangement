<!DOCTYPE html>
<html>
    
    <body>
<table width="500" border="0">
  <tr>
    <th width="500" valign="top" scope="col"><div align="left"><span style="margin-left: 40px;"><strong>
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
      , </strong> Patient Name:
      <?php
                    if ($patient_information == NULL) {
                        echo '';
                    } else {
                        echo ' ' . $patient_information->patient_name;
                    }
                    ?>
      <?php
                    if ($patient_information == NULL) {
                        echo '';
                    } else {
                        echo 'Sex: ' . $patient_information->sex;
                    }
                    ?>
      <?php
                    if ($patient_information == NULL) {
                        echo '';
                    } else {
                        echo 'Age: ' . $patient_information->age;
                    }
                    ?>
      <?php
                    if ($prescriptoin_data_visitingNo == NULL) {
                        echo '';
                    } else {
                        echo 'Visit No: ' . $prescriptoin_data_visitingNo->visiting_no;
                    }
                    ?>
      , <strong>
  <?php
                        if ($prescriptoin_data_visitingNo == NULL) {
                            echo '';
                        } else {
                            echo 'Date: ' . date("d-m-Y", strtotime($prescriptoin_data_visitingNo->current_date));
                        }
                        ?>
        ,</strong>

    </span></div></th>
  </tr>
</table>
        <table width="500" border="0">
	  <tr>
		<th width="500" valign="top" scope="col"><div align="left"><span > <!--Physical findings  -->
<?php
if ($physicalfindings != Null) {
    ?>
                                    <strong><u>Physical Findings</u></strong><br>
                     <?php
                if ($physicalfindingsValue != Null) {
                    ?>
                    </span><span class="style4"></span>
                    
                   <?php if($physicalfindings->display=="Yes")
                       
                                                {
                                              
                                                 echo "BP:".$physicalfindings->systolic." /" ;
                                                 
                                                }else{
                                                    echo "";
                                                }
                                                     ?>
                 <?php if($physicalfindings->display=="Yes")
                                                {
                                                 echo $physicalfindings->diastolic ;
                                                }else{
                                                    echo "";
                                                }
                                                     ?>
   
                            <?php
                            $x = 1;
                            {
                                ?>
                                <?php
                                $patient_id = $this->session->userdata('patient_id');
                                if (isset($patient_id)) {


                                    foreach ($physicalfindingsValue as $pres) {
                                        ?>

                                        <tr>

                                            <?php //echo $pres->customized_physical_findings_name;?>
                                                
                                                
                                                <?php if($pres->display=="Yes")
                                                {
                                                 echo $pres->phy_fin_value." /" ;
                                                }else{
                                                    echo "";
                                                }
                                                     ?>


                                            <?php
                                            $x++;
                                        }
                                    }
                                }
                                ?>
                     
                                    <?php
                                }
}
                                ?>   
	   
		</span></div></th>
	  </tr>
	</table>
</body>
</html>