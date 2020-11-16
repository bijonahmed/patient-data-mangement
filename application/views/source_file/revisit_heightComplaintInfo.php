<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
        <link href="<?php echo base_url(); ?>admin_panel/jQuery-TE_v.1.4.0/job_ jquery-te-1.4.0.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>admin_panel/jQuery-TE_v.1.4.0/jquery-te-1.4.0.min.js"></script>
        <script src="<?php echo base_url(); ?>admin_panel/js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>javascript_form/examples/gen_validatorv4.js"  type="text/javascript" xml:space="preserve"></script>

    </head>
    <br><br><br>
    <body>
        <div class="container">
         

            <hr>
            <form name="step_one" method="post" action="<?php echo base_url(); ?>data_record/revisit_save_patieint_history_info_by_prescription.html">
                
                <div class="row">

                    <div class="col-md-3">

                        <div class="alert alert-info">

                            Height<div class="form-group has-success">
                                <input type="text" class="form-control" name="height" value="<?php echo $revisitInformation->height; ?>">
                                 <input type="hidden" name="current_date" value="<?php echo date("Y-m-d");?>" required="1" >
                                <br>
<input type="hidden" name="patient_id" class="form-control" id="patient_id" value="
    <?php  if(isset($revisitInformation))
    {
       echo $revisitInformation->patient_id; 
    }
        
 ?>">

                                Weight<div class="form-group has-success">
                                    <input type="text" class="form-control" name="weight" value="<?php echo $revisitInformation->weight; ?>" >
                                    <br>

                                    Blood Pressure<div class="form-group has-success">
                                        <input type="text" class="form-control" name="pressure" required="1" value="<?php echo $revisitInformation->pressure; ?>" >
                                        <br>
                                        <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><span class="glyphicon glyphicon-plus"></span>
                                            Extra History</button>
                                    </div>


                                </div>


                            </div>


                        </div>   

                    </div>
                    <style>
                        .borderradius
                        {
                            border:2px solid;
                            border-radius:5px;

                        } 
                        .font_style
                        {
                            font-size: 16px;

                        }
                    </style>
                    <div class="col-md-4">
                        <div class="alert alert-danger">

                            Complaint Group<div class="form-group has-success">




                                <select name="cc_group_id" id="cc_group_id" class="form-control input-lg"onChange="complain_groupinfo(this.value);">
                                    <option selected="selected">Selected</option>
                                    <?php
                                    foreach ($complaint_group_info as $compalinInfo) {
                                        ?>
                                                                            <option value="<?php echo $compalinInfo->cc_group_id; ?>"> <?php echo $compalinInfo->complain_group_name; ?> </option>
                                    <?php
                                    }
                                    $cc_group_id = $this->session->userdata('cc_group_id');
                                    if (isset($cc_group_id))

                                        ?>
                                      </select>

                                <br>


                                Select Complaint <div class="form-group has-success">
                                    <select name="complain_name_[]" class="font_style borderradius" size="10"  id="show_complain_name_left" style="width: 323px;">



                                    </select><br><br>
                                    <center>
                                        <input class="btn btn-primary" name="btnRight" type="button" id="btnRight" value="Add" onClick="javaScript:moveToRightOrLeft(1);">
                                        <input class="btn btn-primary" name="btnLeft" type="button" id="btnLeft" value="Minus" onClick="javaScript:moveToRightOrLeft(2);">
                                    </center>





                                </div>


                            </div>


                        </div>


                    </div>


                    <div class="col-md-4">

                        <div class="alert alert-success">

                            <label>Select Complain (Ctrl+Click)</label><br>

                            <select name="complain_name[]" multiple="true" size="15"  id="selectRight" class="font_style borderradius" style="width: 320px;" required="1">

<?php
$complain_name = $this->session->userdata('complain_name');
if (isset($complain_name))
    
    ?> 


                            </select> <br><br>
                            <center>
<button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span>Extra Complaint</button>
<input type="submit" class="btn btn-info" name="submit" onClick="return next_step_msg_();" value="Go To Prescripton"  /><i class="icon-arrow-right"></i>
                            </center>
                        </div>
                    </div>
                
                
                <!-- Large modal History -->


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <h4>Extra History</h4>

            <textarea class="jqte-test form-control" style="height: 800px;" name="patient_history_info" ><?php echo $revisitInformation->patient_history_info; ?></textarea>


        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Extra Complaint</h4>
            </div>
            <div class="modal-body">
                <textarea class="jqte-test form-control" name="extra_complaint" ><?php echo $revisitInformation->extra_complaint; ?></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
       </form>          
                
                
                </div>
        </div>
  
</body> 

 
<script>
                                $('.jqte-test').jqte();

                                // settings of status
                                var jqteStatus = true;
                                $(".status").click(function()
                                {
                                    jqteStatus = jqteStatus ? false : true;
                                    $('.jqte-test').jqte({"status": jqteStatus})
                                });
</script>

<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });
</script>


<script>
    function save()
    {
        chk = confirm("Are You Sure");
        if (chk)
        {
            return true;
        }
        else {
            return false;
        }
    }
</script>



</html> 
<script type="text/javaScript">
    function moveToRightOrLeft(side){
    var listLeft=document.getElementById('show_complain_name_left');
    var listRight=document.getElementById('selectRight');

    if(side==1){
    if(listLeft.options.length==0){
    alert('You have already moved all to Right');
    return false;
    }else{
    var selectedComplain=listLeft.options.selectedIndex;

    move(listRight,listLeft.options[selectedComplain].value,listLeft.options[selectedComplain].text);
    listLeft.remove(selectedComplain);

    if(listLeft.options.length>0){
    listLeft.options[0].selected=true;
    }
    }
    }else if(side==2){
    if(listRight.options.length==0){
    alert('You have already moved all  to Left');
    return false;
    }else{
    var selectedComplain=listRight.options.selectedIndex;

    move(listLeft,listRight.options[selectedComplain].value,listRight.options[selectedComplain].text);
    listRight.remove(selectedComplain);

    if(listRight.options.length>0){
    listRight.options[0].selected=true;
    }
    }
    }
    }

    function move(listBoxTo,optionValue,optionDisplayText){
    var newOption = document.createElement("option");
    newOption.value = optionValue;
    newOption.text = optionDisplayText;
    listBoxTo.add(newOption, null);
    return true;
    }
</script>


<script>
    //onclick retrive delivery date
    function complain_groupinfo(str)
    {
        var strUrl = "<?php echo base_url(); ?>data_record/complain_group_wise_complaine_name.html?cc_group_id=" + str;
        //alert(str);
        var xmlhttp;
        if (str == "")
        {
            document.getElementById("show_complain_name_left").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById("show_complain_name_left").innerHTML = xmlhttp.responseText;
                //alert(xmlhttp.responseText);
            }
        }
        xmlhttp.open("GET", strUrl, true);
        xmlhttp.send();
    }
</script> 


<script>
    //onchange patholgoical test group wise test name 
    function pathological_test_advice_info(str)
    {
        var strUrl = "<?php echo base_url(); ?>data_record/pathological_test_advice_info.html?path_test_group_id=" + str;
        //alert(str);
        var xmlhttp;
        if (str == "")
        {
            document.getElementById("show_test_name").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById("show_test_name").innerHTML = xmlhttp.responseText;
                //alert(xmlhttp.responseText);
            }
        }
        xmlhttp.open("GET", strUrl, true);
        xmlhttp.send();
    }
</script> 

<script>
    function add_pathologyical_testInfo()
    {
        chk = confirm("Are You Sure Save Pathological Test Information ..?");
        if (chk)
        {
            return true;
        }
        else {
            return false;
        }
    }
</script>

<script>
    function next_step_msg()
    {
        chk = confirm("Are you sure create prescirption");
        if (chk)
        {
            return true;
        }
        else {
            return false;
        }
    }
</script>