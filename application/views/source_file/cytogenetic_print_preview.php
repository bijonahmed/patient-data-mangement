 <!DOCTYPE HTML>
 <html>
 <style type="text/css">
<!--
.style9 {color: #000000}
#Layer1 {
	position:absolute;
	left:142px;
	top:563px;
	width:224px;
	height:63px;
	z-index:1;
}
.style41 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 24px; font-weight: bold; color: #000000; }
.style47 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; font-style: italic; }
.style17 {
	color: #000000;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style56 {color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style57 {font-size: 13px}
.style62 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; }
.style65 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style70 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 17px; }
.style89 {font-size: 14px; font-family: Verdana, Arial, Helvetica, sans-serif;}
-->
 </style>
 
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p><span class="style41"> <h3><center><u>Cytogenetic Report</u></center></h3></span></p>
 <br>
 <hr>
 <strong><u><font color="#000000"><?php
                            $patient_id = $this->session->userdata('manual_pid');
                            if (isset($patient_id))
 $length=strlen($patient_id); 
        $part1=substr_replace("$patient_id","/",2);
        $part2=substr("$patient_id",2);

  $patient_id=$part1.$part2;
                                echo "Manual P. ID: " . $patient_id;
                            ?></font></u></strong><br><br>
Date : <?php echo $this->session->userdata('reciv_date')?><br>

 <hr>
 <font color="white">
        <?php
        $message = $this->session->userdata('save_messages');
        //echo $message;
        if (isset($message)) {
            echo $message;
            $this->session->unset_userdata('save_messages');
        }
        ?>
        </font> 
 <table border="0" align="center" cellpadding="0" cellspacing="0" class="table" id="example_">
<thead>
<tr>
<th width="32">SL NO</th>
<th width="150"><div align="left">Test Name</div></th>
<th width="66">Result</th>

 
</tr>
</thead>
<tbody>
<?php
$x=1; {

?>
<?php
$patient_id=$this->session->userdata('patient_id');
if(isset($patient_id)) {





foreach($cytogenetic_rpt as $data) {
?>

<tr>
<td><?php echo $x;?></td>
<td><?php echo $data->cytogenetic_test_name;?></td>
<td><?php echo $data->result;?> </td>


<?php
$x++;
}
}
}
?>
</tr>
</tbody>
</table>
 <br>
 <br>
 <br>
 <p align="left"><span class="style70"> </span></p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p>
 </p>
 <table width="880" align="center" cellpadding="0" cellspacing="0">
   <tr>
     <th width="171" scope="row">&nbsp;</th>
     <th width="323" scope="row">&nbsp;</th>
     <td width="384">&nbsp;</td>
   </tr>
   <tr>
     <th scope="row"><hr style="width:150px;"></th>
     <th height="4" scope="row">&nbsp;</th>
     <td><hr style="width:150px;"></td>
   </tr>
 </table>
 <table width="858" align="center" cellpadding="1" cellspacing="1">
   <tr>
     <td width="594" valign="top" scope="row"><div align="left"><span class="style65">     Checked by </span></div></td>
     <td width="255" valign="top"><div align="left"><span class="style65">     Signature</span> </div></td>
   </tr>
   <tr>
     <td colspan="2" valign="top" scope="row"><div align="center" class="style57">
       <div align="center"><span class="style56"><br>
         Prepared by:</span><span class="style17"> <strong>
          <?php 
		 $username=$this->session->userdata('full_name');
echo "$username";
		 
?>
          </strong> </span><span class="style56">&nbsp;</span><span class="style89">Printing Date &amp; Time</span>: 
         <?php
$today=date("d-m-Y");
$timeset=strtotime("+ 5hour");
$bdtimes=date("h:i:s A",$timeset);

echo "$today, $bdtimes";

?>
       </div>
     </div></td>
   </tr>
 </table>
 <p>&nbsp;</p>
 </html>