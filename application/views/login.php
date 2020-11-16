<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doctor Prescription Login</title>
<link rel="icon" type="image/png" href="<?php echo base_url(); ?>resource/img/doctor.ico" />
    <!-- Bootstrap -->
 
    <link href="<?php echo base_url(); ?>resource/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>resource/js/jquery-1.9.1.js"></script>
    <script src="<?php echo base_url(); ?>resource/js/bootstrap.min.js"></script>
    <style>
       
    </style>
 <script>
$(document).ready(function(){
  $("#email").focus();
  $(":focus").css("background-color","yellow");
});
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
          <li class="active"><a href="<?php echo base_url();?>login/patient_appointment.html"><span class="glyphicon glyphicon-pencil"></span> &nbsp;Appointment </a></li>
       
      </ul>
     
      <ul class="nav navbar-nav navbar-right visible-lg">
          <li><a href="#" data-toggle="modal" data-target="#myModal"><strong><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</strong></a></li>
         
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>  
          
      </div>
 
      <div class="container visible-lg">
          <!--
So we will have an animated background with 5 clouds moving across the screen.
Steps: 
1. create the clouds
2. Animate them to move across the screen
3. Stylize the clouds(can be done as step #2 also)
-->
 



<!-- Thats the markup! -->
<!-- That looks cool. We are done!! -->
          
<br>
<br>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
        <img src="<?php echo base_url();?>resource/img/1.jpg" alt="image">
      <div class="carousel-caption">
    
      </div>
    </div>
     <div class="item">
        <img src="<?php echo base_url();?>resource/img/2.jpg" alt="image">
      <div class="carousel-caption">
   
      </div>
    </div>
       
      
       
        
        <div class="item">
        <img src="<?php echo base_url();?>resource/img/7.jpg" alt="image">
      <div class="carousel-caption">
   
      </div>
    </div>
        <div class="item">
        <img src="<?php echo base_url();?>resource/img/8.jpg" alt="image">
      <div class="carousel-caption">
      
      </div>
    </div>
        <div class="item">
        <img src="<?php echo base_url();?>resource/img/9.jpg" alt="image">
      <div class="carousel-caption">
     
      </div>
    </div>
      
      
  </div>
 
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

      </div>
      <br>
     <br>
  <center><font color="black" class="visible-lg"><h1><strong>PATIENT DATA MANAGEMENT SOFTWARE</strong></h1></font></center>
  <style>
          .bottominfo{
              margin-bottom: 500px;
          }
      </style>
  <div class="hidden-lg">
<br><br><br>
<center><strong><h3>PATIENT DATA MANAGEMENT SOFTWARE</h3></strong><br></center>
<br>
  <strong>Please Login..</strong>
   <div class="form-group has-success">
                <form class="form-signin" role="form" method="post" action="<?php echo base_url();?>login/check_user_login.html">
                
                    
                    <input type="text" class=" form-control" id="email" name="email" placeholder="User Name" required="1" autofocus="1"><br>
        <input type="password" class=" form-control"name="password" placeholder="Password" required>
        <br>
               <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                  
     
 
        <center>
        <font color="#FF0000">
                            <?php
                        $message=$this->session->userdata('message');
                        //echo $message;
                        if(isset($message))
                        {
                            echo $message;
                            $this->session->unset_userdata('message');
                        }
                        
                    ?>
                        </font>
        </center>
      </form>
                   </div>
  
  
  </div>

  </body>
 


	 

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
                <form class="form-signin" role="form" method="post" action="<?php echo base_url();?>login/check_user_login.html">
                
                    
                    <input type="text" class=" form-control" id="email" name="email" placeholder="User Name" required="1" autofocus="1" value="admin"><br>
        <input type="password" class=" form-control"name="password" placeholder="Password" value="123" required>
        <br>
               <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                  
     
 
        <center>
        <font color="#FF0000">
                            <?php
                        $message=$this->session->userdata('message');
                        //echo $message;
                        if(isset($message))
                        {
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

 

    <style type="text/css">

 
.footerInfo {
	background-color: black;
height: 80px;
border-radius: 20px;
}

</style>
</html>
