 <!DOCTYPE HTML>
 <html>
 <style>
 @media only screen and (max-width: 800px) {
/* Force table to not be like tables anymore */
#no-more-tables table,
#no-more-tables thead,
#no-more-tables tbody,
#no-more-tables th,
#no-more-tables td,
#no-more-tables tr {
display: block;
}
 
/* Hide table headers (but not display: none;, for accessibility) */
#no-more-tables thead tr {
position: absolute;
top: -9999px;
left: -9999px;
}
 
#no-more-tables tr { border: 1px solid #ccc; }
 
#no-more-tables td {
/* Behave like a "row" */
border: none;
border-bottom: 1px solid #eee;
position: relative;
padding-left: 50%;
white-space: normal;
text-align:left;
}
 
#no-more-tables td:before {
/* Now like a table header */
position: absolute;
/* Top/left values mimic padding */
top: 6px;
left: 6px;
width: 45%;
padding-right: 10px;
white-space: nowrap;
text-align:left;
font-weight: bold;
}
 
/*
Label the data
*/
#no-more-tables td:before { content: attr(data-title); }
}
 </style>
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
.style45 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; font-style: italic; }
#Layer2 {
	position:absolute;
	left:60px;
	top:675px;
	width:190px;
	height:34px;
	z-index:1;
}
.style58 {
	font-size: 15px;
	font-weight: bold;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
.style59 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; }
.style64 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style26 {font-size: 11px}
.style28 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style80 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 15px;
	font-style: italic;
}
.style84 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 13px;
}
.style125 {font-family: Arial, Helvetica, sans-serif; font-size: 16px; }
.style133 {color: #000000; font-size: 16px; font-family: Arial, Helvetica, sans-serif; }
.style143 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 16px; }
.style75 {color: #000000;
	font-size: 13px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
-->
 </style>
<script type="text/javascript">
window.onresize = doResize;

function doResize() {
    var h = (typeof window.innerHeight != 'undefined' ? window.innerHeight : document.documentElement.clientHeight) - 20;
    $('#mainHolder').css('max-height', h);
    $('#mainHolder').css('height', h);
};

$(document).ready(function () { doResize(); });
</script>

 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p><span class="style41"> </span></p>
 <table width="775" height="29" border="1" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td width="769" height="23"><div align="center"><span class="style1 style41 style9">HAEMATOLOGY REPORT </span></div></td>
   </tr>
 </table>
 <br>
 <hr>
 <div style="height:600">
     <strong><u><font color="#000000">
             
     <?php
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

 <div align="center" class="style58"><span class="style125">Estimations were carried out by automated Haematology analyzer Sysmes XT-2000i and checked manully </span><br>
  <br>
 </div>
 <table width="850" border="1" align="center" cellspacing="0">
   <tr>
     <td width="211"><span class="style64">Test</span></td>
     <td width="285"><strong>Result</strong></td>
     <td width="340"><span class="style59"><strong>Reference Value </strong></span></td>
   </tr>
 </table>

 <br>
 </div>
 <div>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <div style="height:600px">
 <table width="845" height="220" border="0" align="center" cellspacing="0">
   <thead>
     <?php
            if($this->session->userdata('hb'))
             {
       ?>
     <tr>
       <td width="238" height="62" valign="top" nowrap class="style28"><div align="left" class="style125">Haemoglobin <font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div></td>
       <td width="262" valign="top" nowrap class="style28"><div align="left" class="style125"><font color="black"><?php echo $this->session->userdata('hb')?> <?php echo "gm/dl"?></font> <font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div></td>
       <td width="339" valign="top" nowrap class="style28"><div align="left" class="style133">Adult:Men 15.0&plusmn;2.0, Women:13.5&plusmn;1.5 <br />
         At birth: 13.5-19.5, 3 Days:14.5-22.5<br />
         1 Month: 11-17,2-6 Months:9.5-13.5 <br />
        2-6 Years: 11-14, 6-12 Years: 11.5-15.5 </div></td>
     </tr>
   </thead>
   <tbody>
     <?php 
             }
           if($this->session->userdata('esr'))
           {
             
           ?>
     <tr>
       <td height="21" valign="top" nowrap class="style133" data-title="Company">ESR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
       <td valign="top" nowrap class="style75" data-title="Price"><span class="style125"><font color="black"><?php echo $this->session->userdata('esr')?> <?php echo "mm in 1st hour (Westergren)";?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span></td>
       <td valign="top" nowrap class="style133" data-title="Change"><span class="style9">Men:0-10,Women 0-20 <font color="black">&nbsp;&nbsp;&nbsp;&nbsp;</font></span><font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
     </tr>
     <?php 
             }
           if($this->session->userdata('rbc'))
           {
             
           ?>
     <tr>
       <td height="21" colspan="3" valign="top" nowrap data-title="Company"><span class="style143">Total Count </span></td>
     </tr>
     <tr>
       <td height="21" valign="top" nowrap class="style133" data-title="Company">Red Blood Cell </td>
       <td valign="top" nowrap class="style75" data-title="Price"><span class="style125"><font color="black"><?php echo $this->session->userdata('rbc')?> <?php echo "million/cumm";?></font></span></td>
       <td valign="top" nowrap class="style133" data-title="Change">3.8-5.5</td>
     </tr>
     <?php 
             }
           if($this->session->userdata('platelete'))
           {
             
           ?>
     <tr>
       <td height="21" valign="top" nowrap class="style133" data-title="Company">Platelete Count</td>
       <td valign="top" nowrap class="style75" data-title="Price"><span class="style125"><font color="black"><?php echo $this->session->userdata('platelete')?> <?php echo "/cumm";?></font></span></td>
       <td valign="top" nowrap class="style133" data-title="Change">1,50,000-4,00,000</td>
     </tr>
     <?php 
             }
           if($this->session->userdata('wbc'))
           {
             
           ?>
     <tr>
       <td height="21" valign="top" nowrap class="style75" data-title="Company"><span class="style133">WBC</span></td>
       <td valign="top" nowrap class="style75" data-title="Price"><span class="style125"><font color="black"><?php echo $this->session->userdata('wbc')?> <?php echo "/cumm";?></font></span></td>
       <td valign="top" nowrap class="style133" data-title="Change">4,000-10,000</td>
     </tr>
     <?php 
             }
           if($this->session->userdata('ce'))
           {
             
           ?>
     <tr>
       <td height="20" valign="top" nowrap class="style133" data-title="Company">Total Circulating Eossinophils </td>
       <td valign="top" nowrap class="style133" data-title="Price"><?php echo $this->session->userdata('ce')?> <font color="black"><?php echo "/cumm";?></font></td>
       <td valign="top" nowrap class="style133" data-title="Change">50-500</td>
     </tr>
     <?php 
             }
           if($this->session->userdata('rc'))
           {
             
           ?>
     <tr>
       <td height="21" valign="top" nowrap class="style133" data-title="Company">RC</td>
       <td valign="top" nowrap class="style75" data-title="Price"><span class="style125"><font color="black"><?php echo $this->session->userdata('rc')?> <?php echo "/cumm";?></font></span></td>
       <td valign="top" nowrap class="style133" data-title="Change">&nbsp;</td>
     </tr>
     <?php 
             }
           if($this->session->userdata('neutrophils'))
           {
             
           ?>
     <tr>
       <td height="21" colspan="3" valign="top" nowrap data-title="Company"><strong class="style143">Differential Count</strong></td>
     </tr>
     <tr>
       <td height="21" valign="top" nowrap class="style133" data-title="Company">Neutrophil</td>
       <td valign="top" nowrap class="style75" data-title="Price"><span class="style125"><font color="black"><?php echo $this->session->userdata('neutrophils')?> <?php echo "%";?></font></span></td>
       <td valign="top" nowrap class="style133" data-title="Change">40-80</td>
     </tr>
     <?php 
             }
           if($this->session->userdata('lymphocytes'))
           {
             
           ?>
     <tr>
       <td height="21" valign="top" nowrap class="style133" data-title="Company">Lymphocytes</td>
       <td valign="top" nowrap class="style75" data-title="Price"><span class="style125"><font color="black"><?php echo $this->session->userdata('lymphocytes')?> <?php echo "%";?></font></span></td>
       <td valign="top" nowrap class="style133" data-title="Change">20-40</td>
     </tr>
     <?php 
             }
           if($this->session->userdata('monocytes'))
           {
             
           ?>
     <tr>
       <td height="21" valign="top" nowrap class="style133" data-title="Company">Monocytes</td>
       <td valign="top" nowrap class="style75" data-title="Price"><span class="style125"><font color="black"><?php echo $this->session->userdata('monocytes')?> <?php echo "%";?></font></span></td>
       <td valign="top" nowrap class="style133" data-title="Change">02-10</td>
     </tr>
     <?php 
             }
           if($this->session->userdata('eosinophils'))
           {
             
           ?>
     <tr>
       <td height="21" valign="top" nowrap class="style133" data-title="Company">Eosinophil</td>
       <td valign="top" nowrap class="style75" data-title="Price"><span class="style125"><font color="black"><?php echo $this->session->userdata('eosinophils')?> <?php echo "%";?></font></span></td>
       <td valign="top" nowrap class="style133" data-title="Change">01-06</td>
     </tr>
     <?php 
             }
           if($this->session->userdata('basophil'))
           {
             
           ?>
     <tr>
       <td height="21" valign="top" nowrap class="style133" data-title="Company">Basophil</td>
       <td valign="top" nowrap class="style75" data-title="Price"><span class="style125"><font color="black"><?php echo $this->session->userdata('basophil')?> <?php echo "%";?></font></span></td>
       <td valign="top" nowrap class="style133" data-title="Change">&lt;1.0</td>
     </tr>
     <?php 
             }
           if($this->session->userdata('parameter_one'))
           {
             
           ?>
     <tr>
       <td height="21" valign="top" nowrap class="style75" data-title="Company"><span class="style125"><?php echo $this->session->userdata('parameter_one')?></span></td>
       <td valign="top" nowrap class="style75" data-title="Price"><span class="style125"><font color="black"><?php echo $this->session->userdata('para_one_rpt')?> <?php echo "%";?></font></span></td>
       <td valign="top" nowrap class="style133" data-title="Change">&nbsp;</td>
     </tr>
     <?php 
             }
           if($this->session->userdata('parameter_two'))
           {
             
           ?>
     <tr>
       <td height="21" valign="top" nowrap class="style75" data-title="Company"><span class="style125"><?php echo $this->session->userdata('parameter_two')?></span></td>
       <td valign="top" nowrap class="style75" data-title="Price"><span class="style125"><font color="black"><?php echo $this->session->userdata('para_two_rpt')?> <?php echo "%";?></font></span></td>
       <td valign="top" nowrap class="style133" data-title="Change">&nbsp;</td>
     </tr>
     <?php 
             }
           if($this->session->userdata('parameter_three'))
           {
             
           ?>
     <tr>
       <td height="21" valign="top" nowrap class="style75" data-title="Company"><span class="style125"><?php echo $this->session->userdata('parameter_three')?></span></td>
       <td valign="top" nowrap class="style75" data-title="Price"><span class="style125"><font color="black"><?php echo $this->session->userdata('para_three_rpt')?> <?php echo "%";?></font></span></td>
       <td valign="top" nowrap class="style133" data-title="Change">&nbsp;</td>
     </tr>
     <?php 
             }
           if($this->session->userdata('parameter_four'))
           {
             
           ?>
     <tr>
       <td height="21" valign="top" nowrap class="style75" data-title="Company"><span class="style125"><?php echo $this->session->userdata('parameter_four')?></span></td>
       <td valign="top" nowrap class="style75" data-title="Price"><span class="style125"><font color="black"><?php echo $this->session->userdata('para_four_rpt')?> <?php echo "%";?></font></span></td>
       <td valign="top" nowrap class="style133" data-title="Change">&nbsp;</td>
     </tr>
     <?php 
             }
           if($this->session->userdata('parameter_five'))
           {
             
           ?>
     <tr>
       <td height="21" valign="top" nowrap class="style75" data-title="Company"><span class="style125"><?php echo $this->session->userdata('parameter_five')?></span></td>
       <td valign="top" nowrap class="style75" data-title="Price"><span class="style125"><font color="black"><?php echo $this->session->userdata('para_five_rpt')?> <?php echo "%";?></font></span></td>
       <td valign="top" nowrap class="style133" data-title="Change">&nbsp;</td>
     </tr>
     <?php 
             }
           if($this->session->userdata('hct'))
           {
             
           ?>
     <tr>
       <td height="21" colspan="3" valign="top" nowrap data-title="Company"><strong class="style143">Absulote Value </strong></td>
     </tr>
     <tr>
       <td height="21" valign="top" nowrap class="style133" data-title="Company">HCT/PCV</td>
       <td valign="top" nowrap class="style75" data-title="Price"><font color="black"><span class="style125"><?php echo $this->session->userdata('hct')?> <?php echo "%"?></span></font></td>
       <td valign="top" nowrap class="style133" data-title="Change">36-50</td>
     </tr>
     <?php 
             }
           if($this->session->userdata('mcv'))
           {
             
           ?>
     <tr>
       <td height="21" valign="top" nowrap class="style133" data-title="Company">MCV</td>
       <td valign="top" nowrap class="style75" data-title="Price"><font color="black"><span class="style125"><?php echo $this->session->userdata('mcv')?> <?php echo "fl"?></span></font></td>
       <td valign="top" nowrap class="style133" data-title="Change">83-101</td>
     </tr>
     <?php 
             }
           if($this->session->userdata('mch'))
           {
             
           ?>
     <tr>
       <td height="21" valign="top" nowrap class="style133" data-title="Company">MCH</td>
       <td valign="top" nowrap class="style75" data-title="Price"><span class="style125"><font color="black"><?php echo $this->session->userdata('mch')?> <?php echo "pg"?></font></span></td>
       <td valign="top" nowrap class="style133" data-title="Change">27-32</td>
     </tr>
     <?php 
             }
           if($this->session->userdata('mchc'))
           {
             
           ?>
     <tr>
       <td height="21" valign="top" nowrap class="style133" data-title="">MCHC</td>
       <td valign="top" nowrap class="style75" data-title=""><font color="black"><span class="style125"><?php echo $this->session->userdata('mchc')?> <?php echo "g/dL"?></span></font></td>
       <td valign="top" nowrap class="style133" data-title="">31.5-34.5</td>
     </tr>
     <?php 
             }
           if($this->session->userdata('rdw'))
           {
             
           ?>
     <tr>
       <td height="20" valign="top" nowrap class="style133" data-title="">RDW</td>
       <td valign="top" nowrap class="style75" data-title=""><font color="black"><span class="style125"><?php echo $this->session->userdata('rdw')?> <?php echo "%"?></span></font></td>
       <td valign="top" nowrap class="style133" data-title="">11.6-14.0</td>
     </tr>
	 
	 <?php 
             }
           if($this->session->userdata('bt_sec'))
           {
             
           ?>
     <tr>
       <td height="20" valign="top" nowrap class="style133" data-title=""><strong>BT CT</strong><br>
        BT</td>
       <td valign="top" nowrap class="style133" data-title=""><font color="black"><br>
        <?php echo $this->session->userdata('bt_min')?></font> min <font color="black"><?php echo $this->session->userdata('bt_sec')?></font> sec <font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
       <td valign="top" nowrap class="style133" data-title=""><br>
        2-7 min. <font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font></td>
     </tr>
     <?php 
             }
           if($this->session->userdata('ct_min'))
           {
             
           ?>
     <tr>
       <td height="21" valign="top" nowrap class="style133" data-title="">CT</td>
       <td valign="top" nowrap class="style133" data-title=""><font color="black"><?php echo $this->session->userdata('ct_min')?></font> min <font color="black"><?php echo $this->session->userdata('ct_sec')?></font> sec <font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
       <td valign="top" nowrap class="style133" data-title="">5-11 min. </td>
     </tr>
     <?php 
             }
           if($this->session->userdata('mp'))
           {
             
           ?>
     <tr>
       <th height="20" valign="top" class="style133" data-title="Company"><div align="left">Malarial Parasite </div></th>
       <th valign="top" class="style75" data-title=""><div align="left"><span class="style125"><font color="black"><?php echo $this->session->userdata('mp')?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span></div></th>
       <th valign="top" class="style75" data-title=""><span class="style125"><font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span></th>
     </tr>
     <?php 
             }
           if($this->session->userdata('pbf'))
           {
             
           ?>
     <tr>
       <td height="21" colspan="3" valign="top" data-title="Company"><font color="black"><span class="style125">
	   <strong>PBF: </strong><br>
	   <?php echo $this->session->userdata('pbf')?></span></font></td>
     </tr>
     <?php
	 
	 }else{
	 ?>
     <?php
         }
       ?>
   </tbody>
 </table>
 </div>
 <br>
 <br>
 <br>
 <table width="856" border="0" align="center" cellspacing="0">
      <tr>
        <td valign="top"><span class="style80">Checked by </span></td>
        <td valign="top">&nbsp;</td>
        <td valign="top">&nbsp;</td>
        <td width="304" rowspan="6" valign="top"><p class="style26"><span class="style84"></span><br />
              <span class="style28"><br />
              <br />
             <br />
       </span></p>
        </td>
      </tr>
    <tr>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
    </tr>
   <tr>
     <td width="160" valign="top">&nbsp;</td>
     <td width="237" valign="top">&nbsp;</td>
     <td width="147" valign="top">&nbsp;</td>
    </tr>
   <tr>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
    </tr>
   <tr>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
    </tr>
   <tr>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
    </tr>
 </table>
 </div>
 </html>