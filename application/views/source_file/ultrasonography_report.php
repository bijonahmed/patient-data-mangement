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
.style72 {
	font-size: 20px;
	font-weight: bold;
}
.style89 {font-size: 14px; font-family: Verdana, Arial, Helvetica, sans-serif;}
-->
 </style>
 
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p><span class="style41"> </span></p>
 <table width="567" height="29" border="1" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td height="23"><div align="center"><span class="style1 style41 style9">ULTRASONOGRAPHY REPORT  </span></div></td>
   </tr>
 </table>
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
 
 <br>
 <br>
 <br>
 <p align="left"><span class="style70"> <?php echo $this->session->userdata('report_description')?></span></p>
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