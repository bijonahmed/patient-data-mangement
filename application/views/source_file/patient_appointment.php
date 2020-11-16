<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Doctor Prescription Login</title>
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>resource/img/doctor.ico" />
        <!-- Bootstrap -->
 <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
       
        <script src="<?php echo base_url();?>resource/js/jquery.js"></script>
        <link href="<?php echo base_url(); ?>resource/css/bootstrap.min.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>resource/js/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url(); ?>resource/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>resource/js/jquery-ui.js"></script>
                <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">

        <script>
            $(document).ready(function() {
                $("#email").focus();
                $(":focus").css("background-color", "white");
            });
        </script>
        <script lang="javascript">
            function validate() {
                var mobile = document.getElementById("mobilex").value;
                var pattern = /(011)|(015)|(016)|(017)|(018)|(019)\d{8}/;
                if (pattern.test(mobile) && mobile.length == 11) {

                    document.getElementById("msg").innerHTML = "";
                    return true;

                }
                document.getElementById("msg").innerHTML = "<br>This is not a valid mobile number<br>";
                return false;

            }

        </script>
        <script lang="javascript">
            function valid_mobile() {
                var mobile = document.getElementById("mobilex").value;
                var pattern = /(011)|(015)|(016)|(017)|(018)|(019)\d{8}/;
                if (pattern.test(mobile) && mobile.length == 11) {

                    // document.getElementById("msg").innerHTML="";
                    return true;

                } else {
                    alert("Please insert a valid mobile number");

                    return false;
                }
            }

        </script>
    </head>
    <body>
        <div class="">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-home"></span> Home </a></li>

                        </ul>

                        <ul class="nav navbar-nav navbar-right visible-lg">
                            <li><a href="#" data-toggle="modal" data-target="#myModal"><strong><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</strong></a></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>  

        </div>



        <style>
            .bottominfo{
                margin-bottom: 500px;
            }
        </style>

        <br>


        <div class="form-group has-success">
            <?php
            $message = $this->session->userdata('message');
            //echo $message;
            if (isset($message)) {
                echo $message;
                $this->session->unset_userdata('message');
            }
            ?>

        </div>

        <div class="container">
            <div class="row">
            <div class="col-md-9">
                
                   <h3> Patient Appointment Form</h3>
            <hr>

            <form name="frm" class="form-horizontal" method="post" action="<?php echo base_url(); ?>data_record/save_patient_appoint_info.html"  onsubmit="return valid_mobile();">
                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="current_date" id="current_date">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Patient Name</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="patient_name" required="1" autofocus="" >
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
                        <input type="text" id="mobilex" name="cell_number" class="form-control" value="" placeholder="Input Cell/Mobile no" onchange="validate();" />   
                        <div id="msg" class="controls" style="color:red;"><p></p></div> 

                    </div>
                </div>


                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Remarks</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="remarks"><br>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-registration-mark"></span>&nbsp;Register</button>
                    </div>
                </div>  
                 </form>
                
            </div>
                <style>
                    .registrationinfo
                    {
                        margin-left: -850px;
                    }
                    </style>
             <div class="col-md-3">
                 
               
                 <div>
              <font color="#FF0000">
              <br><br><br>
              <h1> <center class="registrationinfo"><?php
$message = $this->session->userdata('save_message');
//echo $message;
if (isset($message)) {
    echo $message;
    $this->session->unset_userdata('save_message');
}
?></center></h1>
                            </font>   
                </div>
            </div>
            
            </div>
           
        </div>
        
        
      
        <div class="container">
        <hr> 
 </div>
</div>
 </body>

<!-- Modal -->
<!-- Button trigger modal -->


<!-- Modal -->
<style>
    .loginforminfo
    {
        margin-left: 120px;
        margin-right: 120px;
    }
</style> 
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Login <font color="#FF7F50"><div align="center">Patient Data Management..</div></font></h4>
            </div>
            <div class="loginforminfo modal-body">
                <br>
                <div class="form-group has-success">
                    <form class="form-signin" role="form" method="post" action="<?php echo base_url(); ?>login/check_user_login.html">


                        <input type="text" class=" form-control" id="email" name="email" placeholder="User Name" required="1" autofocus="1"><br>
                        <input type="password" class=" form-control"name="password" placeholder="Password" required>
                        <br>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>



                        <center>
                            <font color="#FF0000">
<?php
$message = $this->session->userdata('message');
//echo $message;
if (isset($message)) {
    echo $message;
    $this->session->unset_userdata('message');
}
?>
                            </font>
                        </center>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#current_date').datepicker()
</script>
</html>
