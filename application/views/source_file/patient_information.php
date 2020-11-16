<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>

 
<script src="<?php echo base_url();?>data_table/js/jquery.js"></script>
<script src="<?php echo base_url();?>resource/js/jquery-ui.js"></script>
<link href="<?php echo base_url();?>resource/css/jquery-ui.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">


<link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
<script src="<?php echo base_url(); ?>resource/jquery-1.9.1.js"></script>
<script src="<?php echo base_url();?>resource/js/jquery-ui.js"></script>

<script src="<?php echo base_url(); ?>resource/Context.js-master/context.js"></script>
<script src="<?php echo base_url(); ?>resource/Context.js-master/demo.js"></script>

<link href="<?php echo base_url(); ?>resource/Context.js-master/context.bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>resource/Context.js-master/context.standalone.css" rel="stylesheet">

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
  </head>
  <br><br><br>
  <body>
      <div class="container">
          <h3> Patient Registration Form</h3>
        <hr>
          <font color="#FF0000">
                                <?php
                                $message = $this->session->userdata('save_message');
                                //echo $message;
                                if (isset($message)) {
                                    echo $message;
                                    $this->session->unset_userdata('save_message');
                                }
                                ?>
                                </font> 
        <form name="frm" class="form-horizontal" method="post" action="<?php echo base_url();?>data_record/save_add_new_patient_info.html"  onsubmit="return valid_mobile();">
                <div class="form-group has-success">
                      <div class="form-group">
    <label for="inputpatientid" class="col-sm-2 control-label">Patient ID</label>
    <div class="col-sm-3">
          
            <input type="text" class="form-control" disabled="1" value="<?php
        if(isset($manual_id))
        {
            echo Date('y')."/".$manual_id;
        }
        ?>">
         
        <input type="hidden" name="next_patientid" value="<?php
        if(isset($manual_id))
        {
            echo Date('y')."/".$manual_id;
        }
        ?>">
         <input type="hidden" class="form-control" name="manual_pid" required="1" placeholder="Enter Your Manual ID" value="<?php
                            $manual_pid = $this->session->userdata('manual_pid');
                            if (isset($manual_pid)){
                              $length=strlen($manual_pid); 
        $part1=substr_replace("$manual_pid","/",2);
        $part2=substr("$manual_pid",2);

  $manual_pid=$part1.$part2;
                                echo $manual_pid;  
                            }
                           
                            ?>">
    </div>
  </div>
                    
                    
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Date</label>
    <div class="col-sm-3">
   <input type="text" class="form-control" name="current_date" id="current_date" value="<?php echo $this->session->userdata('current_date');?>">
    </div>
  </div>
           <?php
           /*
             <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Patient ID</label>
    <div class="col-sm-3">
     <input type="text" class="form-control" name="manual_pid" required="1" placeholder="Enter Your Manual ID" value="<?php
                            $manual_pid = $this->session->userdata('manual_pid');
                            if (isset($manual_pid))
 $length=strlen($manual_pid); 
        $part1=substr_replace("$manual_pid","/",2);
        $part2=substr("$manual_pid",2);

  $manual_pid=$part1.$part2;
                                echo $manual_pid;
                            ?>">   
    </div>
  </div> 
            */
           ?>     
                
   
                
 <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Patient Name</label>
    <div class="col-sm-3">
     <input type="text" class="form-control" name="patient_name" required="1" autofocus="" >
    </div>
  </div>
                
 <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Age</label>
    <div class="col-sm-3">
         <input type="text" class="form-control" name="age" required="1">
    </div>
  </div>
                
                
   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Sex</label>
    <div class="col-sm-3">
     <select name="sex" class="form-control">
          <option>Male</option>
          <option>Female</option>
          
      </select>
    </div>
  </div>    
                
                <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">  Cell Number</label>
    <div class="col-sm-3">
        <input type="text" id="mobilex" name="cell_number" class="form-control" value="" placeholder="Input Cell/Mobile no"  />   
        <div id="msg" class="controls" style="color:red;"><p></p></div> 
   <script lang="javascript">
         function validate() {
        var mobile = document.getElementById("mobilex").value;
        var pattern = /(011)|(015)|(016)|(017)|(018)|(019)\d{8}/;
        if (pattern.test(mobile) && mobile.length==11) {
            
            document.getElementById("msg").innerHTML="";
            return true; 
                
            }
            document.getElementById("msg").innerHTML="<br>This is not a valid mobile number<br>";
            return false;
             
    }   

    </script>
     <script lang="javascript">
         function valid_mobile() {
        var mobile = document.getElementById("mobilex").value;
        var pattern = /(011)|(015)|(016)|(017)|(018)|(019)\d{8}/;
        if (pattern.test(mobile) && mobile.length==11) {
            
           // document.getElementById("msg").innerHTML="";
            return true; 
                
            }else{
            alert("Please insert a valid mobile number");
            
         return false;
         }     
    }   

    </script>
    </div>
  </div>
                
                
                <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Address</label>
    <div class="col-sm-3">
        <input type="text" class="form-control" name="address"><br>
    </div>
  </div>
             <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-info">Register</button>
    </div>
  </div>   
               </div> 
            </form>
       
      </div>
     
  </body>


 <script>
function save()
{
chk=confirm("Are You Sure");
if(chk)
{
return true;
}
else{
return false;
}
}
</script>

<script type="text/javascript">
    $('#current_date').datepicker()
</script>