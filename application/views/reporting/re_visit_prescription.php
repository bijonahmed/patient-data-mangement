<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:621px;
	top:65px;
	width:272px;
	height:80px;
	z-index:1;
}
.style19 {font-size: 18px}
.diabetis {font-size: 10px}
.degree {font-size: 10px}
.degreeInfo {font-size: 13px}
.style21 {
	font-weight: bold;
	font-size: 24px;
	font-family: "Times New Roman", Times, serif;
	color: #000000;
}
.style22 {font-family: "Times New Roman", Times, serif}
.style23 {font-family: "Times New Roman", Times, serif; font-size: 19px; }
.style24 {font-size: 19px}
-->
</style>
<br>
<br>
 <table width="973" cellspacing="0" align="center" cellpadding="1">
  <tr>
    <td width="390" height="85" valign="top" scope="row"><p class="diabetis">
        <span class="style19"> Dr. Md. Kamrul Hasan</span><br>
    <span class="degreeInfo"> MBBS; MD (Clinical Haematology); BCS</span><br>
    <span class="degree">Assistant Professor of Haematology<br>
    National Institute of Cancer Research & <br>
    Hospital, Mohakhali, Dhaka<br>
    Registration no. A27189 </span><br>
    Email: akndkamrul@gmail.com</p>
    </td>
    <td width="250" valign="top">&nbsp;</td>
    <td width="500" valign="top"><span class="style19">ডাঃ মোঃ কামরুল হাসান</span><br>
      মেডিসিন, রক্তরোগ ও ব্লাডক্যান্সার বিশেষজ্ঞ<br>
  <span class="diabetis">ডায়াবেটিস, স্নায়ুরোগ, লিভার ও পরিপাকতন্ত্রে উচ্চতর প্রশিক্ষণপ্রাপ্ত</span><br>
সহকারী অধ্যাপক<br>
        জাতীয় ক্যান্সার গবেষণা ইন্সটিটিউট ও হাসপাতাল, ঢাকা<br>
        ফোনঃ ০১৯১৪-৭৯৯৭৫৩
        </td>
  </tr>
</table>

<div style="height: 700px">
<table width="" border="0" align="left" cellpadding="0" cellspacing="0">
  <caption align="top">&nbsp;
  </caption>
  
  <tr>
    <td height="23" colspan="9" valign="top"><span class="style10 style22 style24">
            PT. ID: <strong><?php echo $this->session->userdata('patient_id')?></strong></span>, Name :<strong><?php echo $this->session->userdata('patient_name')?></strong> , Age : <strong><?php  echo $this->session->userdata('age')?></strong>, Sex:<strong> <?php echo $this->session->userdata('sex')?></strong> , 
            Date: <?php echo $this->session->userdata('current_date') ?>, 
    </span></td>date
  </tr>
  <tr>
    <td width="255" rowspan="6" valign="top"><span class="style23">
     </span><br />
      
      <u><strong>Complaint </strong> </u><br />
   <?php

foreach($complaintList as $data) {
?>
         
    <?php echo $data->complain_name.'<br>';
}
    ?>
<?php echo $this->session->userdata('extra_complaint')?><br />

     <u><strong>Physical Findings</strong></u><br />
     
     <?php 
if($physicalfindingsInfo_prescription==NULL)
{
 echo '';   
}  else {
 echo 'Height: '.$physicalfindingsInfo_prescription->height.'<br>';   
echo 'Weight: '.$physicalfindingsInfo_prescription->weight.'<br>';   
echo 'Presaure: '.$physicalfindingsInfo_prescription->presasure.'<br>';   
echo 'BSA: '.$physicalfindingsInfo_prescription->bsa.'<br>';   

}

//echo $physicalfindingsInfo_prescription->weight;
?>
     <br>   

     <u><strong>Diagnosis</strong></u><br />
     <?php
if($diagnosisInfo_by_prescripiton_tab==NULL)
{
    echo '';
}  else {
 echo $diagnosisInfo_by_prescripiton_tab->diagnosis;    
}

?><br>
      <u><strong>Investigation</strong></u><br />
      <?php  //$test_name=$this->session->userdata('test_name');
      
      
      if(isset($test_name))
      
         foreach($test_name as $advice){
             echo $advice->test_name.'<br>';
         }
      
  
      ?>
   
      </span>
      <div align="right" class="style9 style22 style24"></div></td>
<td width="699" height="23" colspan="8" valign="top"><span class="style1  style21">R</span><strong><sub>X</sub></strong></td>
  </tr>
  <tr>
    <td colspan="8" valign="top"><p align="left" class="style9 style22 style24">

      <?php
   $x=1; 
 
       
$patient_id=$this->session->userdata('p_id');
if(isset($patient_id)) {
    
foreach($prescriptoin_data as $pres) {
?>
      <?php echo $x;?>. <?php echo $pres->dose_type;?>-&nbsp;<?php echo $pres->brand_name;?> -&nbsp;<?php echo $pres->dose_schedule;?> <?php echo $pres->amount;?>-&nbsp; <?php echo $pres->dose_suggestion;?>-&nbsp;<?php echo $pres->day;?><strong><br>
      </strong>
      <?php
$x++;
}
}
 
?>
      <hr>  
           <?php
   $x=1; 
 
       
$patient_id=$this->session->userdata('p_id');
if(isset($patient_id)) {
    
foreach($adviceInformation as $data) {
?>
      <?php echo $x;?>. <?php echo $data->patient_advice_name;?><strong><br>
      </strong>
      <?php
$x++;
}
}
 
?>
        
        </p></td>
  </tr>
  <tr>
    <td height="23" colspan="8" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="23" colspan="8" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="23" colspan="8" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="23" colspan="8" valign="top">&nbsp;</td>
  </tr>
</table>
</div>
      <table width="973" cellspacing="0" align="center" cellpadding="1">
  <tr>
    <td width="350" height="85" valign="top" scope="row"><p class="style19">চেম্বারঃ কমফোর্ট ডক্টরস চেম্বার <br>
    (ব্যাংক বিল্ডিং-এর দোতলায়) <br>
    ১৬৭, গ্রীনরোড, ঢাকা-১২০৫।  <br>
   সাক্ষাতঃ সন্ধ্যা ৬ টা - রাত ৯ টা (শুক্রবার বন্ধ)  <br>
    সিরিয়ালঃ ০১৭২৪২২৯৩৩৪<br>
   
</p>    </td>
    <td width="250" valign="top">&nbsp;</td>
    <td width="500" valign="top" align="right"><span class="style19">ডাঃ মোঃ কামরুল হাসান<br>
চেম্বারঃ মুন হাসপাতাল <br>
ঝাউতলা, কুমিল্লা।  <br>
সাক্ষাতঃ প্রতি শুক্রবার <br>
       সকাল ১০ টা -বিকেল ৫ টা <br>
       সিরিয়ালঃ ০১৭১৫৪৭০০০১, ০১৭৭৬৩৬৫৪৩০
        </span></td>
  </tr>
</table>


</html>