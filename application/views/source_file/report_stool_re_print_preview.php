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
-->
 </style>

 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p><span class="style41"> </span></p>
 <table width="567" height="29" border="1" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td height="23"><div align="center"><span class="style1 style41 style9">STOOL EXAMINATION REPORT  </span></div></td>
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
 <table width="863" border="1" align="center" cellpadding="1" cellspacing="0">
   <tr bgcolor="#888888">
     <td colspan="4" scope="row"><div align="center" class="style72"><u>PHYSICAL EXAMINATION</u></div></td>
   </tr>
   <tr>
     <td width="239" bordercolor="#111111" class="style70" scope="row">Quantity(Amount).</td>
     <td width="189" bordercolor="#111111" class="style70"><div align="center" class="style70">
             <font color="red"> <?php echo $this->session->userdata('quantity')?></font></div></td>
     <td width="219" bordercolor="#111111" class="style70">Odour</td>
     <td width="198" bordercolor="#111111" class="style70"><div align="center" class="style70">
	 <?php echo $this->session->userdata('ordor')?></div></td>
   </tr>
   <tr>
     <td bordercolor="#111111" class="style70" scope="row">Consistency</td>
     <td bordercolor="#111111" class="style70"><div align="center" class="style70">
	 <?php echo $this->session->userdata('consistency')?></div></td>
     <td bordercolor="#111111" class="style70">Mucus</td>
     <td bordercolor="#111111" class="style70"><div align="center" class="style70">
	 <?php echo $this->session->userdata('mucus')?></div></td>
   </tr>
   <tr>
     <td bordercolor="#111111" class="style70" scope="row"><div align="left">Colour</div></td>
     <td bordercolor="#111111" class="style70"><div align="center"><?php echo $this->session->userdata('color')?></div></td>
     <td bordercolor="#111111" class="style70"><div align="left">Blood</div></td>
     <td bordercolor="#111111" class="style70"><div align="center"><?php echo $this->session->userdata('blood')?></div></td>
   </tr>
   <tr>
     <td bordercolor="#111111" class="style70" scope="row">Undigested Food Particles</td>
     <td bordercolor="#111111" class="style70"><div align="center" class="style70"><?php echo $this->session->userdata('un_fp')?></div></td>
     <td bordercolor="#111111" class="style70">Helminth.</td>
     <td bordercolor="#111111" class="style70"><div align="center" class="style70"><?php echo $this->session->userdata('helminth')?></div></td>
   </tr>
   <tr bgcolor="#888888">
     <td colspan="4" scope="row"><div align="center" class="style72"><u>CHEMICAL  EXAMINATION</u></div></td>
   </tr>
   <tr>
     <td class="style70" scope="row">Reaction</td>
     <td class="style70"><div align="center" class="style70"><?php echo $this->session->userdata('reaction')?></div></td>
     <td class="style70">Occult Blood Test (OBT) </td>
     <td class="style70"><div align="center" class="style70"><?php echo $this->session->userdata('obt')?></div></td>
   </tr>
   <tr>
     <td class="style70" scope="row">Reducing Substances (R/S) </td>
     <td class="style70"><div align="center" class="style70"><?php echo $this->session->userdata('rs')?></div></td>
     <td class="style70">Bilirubin</td>
     <td class="style70"><div align="center" class="style70"><?php echo $this->session->userdata('bilirubin')?></div></td>
   </tr>
   <tr>
     <td class="style70" scope="row">Fat.</td>
     <td class="style70"><div align="center" class="style70"><?php echo $this->session->userdata('fat')?></div></td>
     <td class="style70">Stercobili. and stercob.</td>
     <td class="style70"><div align="center" class="style70"><?php echo $this->session->userdata('str_and_sterobili')?></div></td>
   </tr>
   <tr bgcolor="#777777">
     <td colspan="4" scope="row"><div align="center" class="style72"><u>MICROSCOPIC  EXAMINATION</u></div></td>
   </tr>
   <tr>
     <td class="style70" scope="row">Vegetable Cell</td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('vege_cell')?></div></td>
     <td class="style70">Trophozoites of Giardia</td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('troph_giardia')?></div></td>
   </tr>
   <tr>
     <td class="style70" scope="row">Epithelial Cells</td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('epithe_cells')?></div></td>
     <td class="style70">Ova of A.L</td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('ova_al')?></div></td>
   </tr>
   <tr>
     <td class="style70" scope="row">Pus Cells</td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('puss_cell')?></div></td>
     <td class="style70">Larva of </td>
     <td class="style62"><div align="center"><span class="style70"><?php echo $this->session->userdata('larva_of')?></span></div></td>
   </tr>
   <tr>
     <td class="style70" scope="row">RBC</td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('rbc')?></div></td>
     <td class="style70">Cyst of Giardia</td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('cyst_of_giardia')?></div></td>
   </tr>
   <tr>
     <td class="style70" scope="row">Macrophage</td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('macrophages')?></div></td>
     <td class="style70">Cyst of&nbsp;  E.Coli</td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('cyst_of_col')?></div></td>
   </tr>
   <tr>
     <td class="style70" scope="row">Muscle Fibre</td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('muscle_fibre')?></div></td>
     <td class="style70">T. hominis</td>
     <td class="style62"><div align="center"><span class="style70"><?php echo $this->session->userdata('t_hominis')?></span></div></td>
   </tr>
   <tr>
     <td class="style70" scope="row">Fat Globules</td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('fat_globules')?> </div></td>
     <td class="style70">Blastocystis hominis</td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('blas_homins')?></div></td>
   </tr>
   <tr>
     <td class="style70" scope="row">Starch Granules </td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('starch_granules')?></div></td>
     <td class="style70">Cast&nbsp; </td>
     <td class="style62"><div align="center" class="style70"><?php echo $this->session->userdata('cast')?></div></td>
   </tr>
   <tr>
     <td class="style70" scope="row">C.L.Crystals&nbsp; </td>
     <td class="style62"><div align="center"><span class="style70"><?php echo $this->session->userdata('cl_crystals')?></span></div></td>
     <td class="style70">Fusiform long bacilli</td>
     <td class="style62"><div align="center"><span class="style70"><?php echo $this->session->userdata('fusifo_bacili')?></span></div></td>
   </tr>
   <tr>
     <td class="style70" scope="row">Bacteria</td>
     <td class="style62"><div align="center"><span class="style70"><?php echo $this->session->userdata('bacteria')?></span></div></td>
     <td class="style70">Candida </td>
     <td class="style62"><div align="center"><span class="style70"><?php echo $this->session->userdata('candida')?></span></div></td>
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
       <div align="left"><span class="style17"><br>
         Prepared by: <strong>
         <?php
		 $username=$this->session->userdata('full_name');
echo "$username";

?>
         </strong> </span><span class="style56">&nbsp;Printing Date <strong>:</strong> <?php echo  date("d-m-Y");?></span></div>
     </div></td>
   </tr>
 </table>
 <p>&nbsp;</p>
 </html>