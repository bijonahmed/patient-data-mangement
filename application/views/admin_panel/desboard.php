<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>resource/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>resource/js/bootstrap.min.js"></script>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Doctor Prescription</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo base_url();?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-align-justify"></span> Deve.Info</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-align-justify"></span> Add New <b class="caret"></b></a>
          <ul class="dropdown-menu">
              <li><a href="<?php echo base_url();?>welcome/add_new_dose.html"><span class="glyphicon glyphicon-th-list"></span> Add New Dose</a></li>
           <li><a href="<?php echo base_url();?>welcome/add_new_dose.html"><span class="glyphicon glyphicon-th-list"></span> Add New Dose</a></li>
           <li><a href="<?php echo base_url();?>welcome/add_new_dose.html"><span class="glyphicon glyphicon-th-list"></span> Add New Dose</a></li>
           <li><a href="<?php echo base_url();?>welcome/add_new_dose.html"><span class="glyphicon glyphicon-th-list"></span> Add New Dose</a></li>
           <li><a href="<?php echo base_url();?>welcome/add_new_dose.html"><span class="glyphicon glyphicon-th-list"></span> Add New Dose</a></li>
           <li><a href="<?php echo base_url();?>welcome/add_new_dose.html"><span class="glyphicon glyphicon-th-list"></span> Add New Dose</a></li>
           <li><a href="<?php echo base_url();?>welcome/add_new_dose.html"><span class="glyphicon glyphicon-th-list"></span> Add New Dose</a></li>
           <li><a href="<?php echo base_url();?>welcome/add_new_dose.html"><span class="glyphicon glyphicon-th-list"></span> Add New Dose</a></li>
           
           
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
             
          </ul>
          <li><a href="<?php echo base_url();?>login/logout.html"><span class="glyphicon glyphicon-align-justify"></span> Logout</a></li>
        </li>
      </ul>
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
     <div align="center">
         <a href="<?php echo base_url();?>welcome/add_new_dose.html">
   <img src="<?php echo base_url();?>resource/img/user_desboard.jpg">
      </a>
   </div> 
    

    

        
  </body>
</html>