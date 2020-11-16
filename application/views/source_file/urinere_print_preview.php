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
     <td height="23"><div align="center"><span class="style1 style41 style9">URINE EXAMINATION REPORT  </span></div></td>
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

 
 <br>
 <br>
 <br>
 <table width="863" border="1" align="center" cellpadding="1" cellspacing="0">
   <tr bgcolor="#888888">
     <td colspan="4" scope="row"><div align="center" class="style72"><u>PHYSICAL EXAMINATION</u></div></td>
   </tr>
   <tr>
     <td width="182" bordercolor="#111111" scope="row"><span class="style70">Quantity</span></td>
     <td width="230" bordercolor="#111111"><div align="center" class="style70"><?php echo $this->session->userdata('quantity')?></div></td>
     <td width="192" bordercolor="#111111"><span class="style70">Sediment</span></td>
     <td width="251" bordercolor="#111111"><div align="center" class="style70"><?php echo $this->session->userdata('sediment')?></div></td>
   </tr>
   <tr>
     <td bordercolor="#111111" scope="row"><span class="style70">Colour</span></td>
     <td bordercolor="#111111"><div align="center" class="style70"><?php echo $this->session->userdata('color')?></div></td>
     <td bordercolor="#111111"><span class="style70">Specific  Gravity </span></td>
     <td bordercolor="#111111"><div align="center" class="style70"><?php echo $this->session->userdata('spe_grav')?></div></td>
   </tr>
   <tr>
     <td bordercolor="#111111" scope="row"><span class="style70">Appearance</span></td>
     <td bordercolor="#111111"><div align="center" class="style70"><?php echo $this->session->userdata('apper')?></div></td>
     <td bordercolor="#111111">&nbsp;</td>
     <td bordercolor="#111111"><div align="center" class="style70"></div></td>
   </tr>
   <tr bgcolor="#888888">
     <td colspan="4" scope="row"><div align="center" class="style72"><u>CHEMICAL  EXAMINATION</u></div></td>
   </tr>
   <tr>
     <td scope="row"><span class="style70">Reaction</span></td>
     <td><div align="center" class="style70"><?php echo $this->session->userdata('reaction')?></div></td>
     <td><span class="style70">Acetone</span></td>
     <td><div align="center" class="style70"><?php echo $this->session->userdata('acetone')?></div></td>
   </tr>
   <tr>
     <td scope="row"><span class="style70">Excess of Phos.</span></td>
     <td><div align="center" class="style70"><?php echo $this->session->userdata('ex_ph')?></div></td>
     <td class="style62"><span class="style70">Bile Salt</span></td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('bile_salt')?></div></td>
   </tr>
   <tr>
     <td class="style62" scope="row"><span class="style70">Albumin</span></td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('albumin')?></div></td>
     <td class="style62"><span class="style70">Bile pigment</span></td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('bile_pig')?></div></td>
   </tr>
   <tr>
     <td class="style62" scope="row"><span class="style70">Sugar</span></td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('sugur')?></div></td>
     <td class="style62"><span class="style70">Urobilinogen</span></td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('urobili')?></div></td>
   </tr>
   <tr>
     <td class="style62" scope="row"><span class="style70">Others</span></td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('others')?></div></td>
     <td class="style62"><span class="style70">Chyle</span></td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('chyle')?></div></td>
   </tr>
   <tr bgcolor="#777777">
     <td colspan="4" scope="row"><div align="center" class="style72"><u>MICROSCOPIC  EXAMINATION</u></div></td>
   </tr>
   <tr>
     <td class="style70" scope="row">Epithelial cell</td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('ep_cell')?></div></td>
     <td class="style70">Calcium Oxalate</td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('cal_oxa')?></div></td>
   </tr>
   <tr>
     <td class="style70" scope="row">Pus Cells</td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('pus_cells')?></div></td>
     <td class="style70">Uric Acid Crystals</td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('uric_acid')?></div></td>
   </tr>
   <tr>
     <td class="style70" scope="row">RBCs</td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('rbcs')?></div></td>
     <td class="style70">Urate Crystals</td>
     <td class="style62"><div align="center"><span class="style70"><?php echo $this->session->userdata('urate_crys')?></span></div></td>
   </tr>
   <tr>
     <td class="style70" scope="row">Mucus</td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('mucus')?></div></td>
     <td class="style70">Amorph. Phosphate</td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('amr_ph')?></div></td>
   </tr>
   <tr>
     <td class="style70" scope="row">Pus Casts</td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('pus_cast')?></div></td>
     <td class="style70">Triple Phosphate</td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('tre_phs')?></div></td>
   </tr>
   <tr>
     <td class="style70" scope="row">Spermatozoa</td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('sperat')?></div></td>
     <td class="style70">Candida </td>
     <td class="style62"><div align="center"><span class="style70"><?php echo $this->session->userdata('candida')?></span></div></td>
   </tr>
   <tr>
     <td class="style70" scope="row">WBC Cast </td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('wbc')?> </div></td>
     <td class="style70">Hyaline Cast </td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('hayline_cast')?></div></td>
   </tr>
   <tr>
     <td class="style70" scope="row">Granular Cast.</td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('granuloar')?></div></td>
     <td class="style70">Bacteria</td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('bacteria')?></div></td>
   </tr>
 </table>
 <p>&nbsp;</p>
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