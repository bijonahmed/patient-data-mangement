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
   <style>
body
{
/* IE10 Consumer Preview */ 
background-image: -ms-radial-gradient(center, circle farthest-corner, #FFFFFF 0%, #00A3EF 100%);

/* Mozilla Firefox */ 
background-image: -moz-radial-gradient(center, circle farthest-corner, #FFFFFF 0%, #00A3EF 100%);

/* Opera */ 
background-image: -o-radial-gradient(center, circle farthest-corner, #FFFFFF 0%, #00A3EF 100%);

/* Webkit (Safari/Chrome 10) */ 
background-image: -webkit-gradient(radial, center center, 0, center center, 506, color-stop(0, #FFFFFF), color-stop(1, #00A3EF));

/* Webkit (Chrome 11+) */ 
background-image: -webkit-radial-gradient(center, circle farthest-corner, #FFFFFF 0%, #00A3EF 100%);

/* W3C Markup, IE10 Release Preview */ 
background-image: radial-gradient(circle farthest-corner at center, #FFFFFF 0%, #00A3EF 100%);
}

</style>
 
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
      <a class="navbar-brand" href="#">DOCTOR PRESCRIPTION</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="#"></a></li>
        <li><a href="#"></a></li>
       
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"></a></li>
       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<br><br><br>
   <div class="container">

       <div class="row">
           
           <div class="col-md-4">
               
               
               
               
               
           </div>
            
           <div class="col-md-3">
               <div class="form-group has-success">
                <form class="form-signin" role="form" method="post" action="<?php echo base_url();?>login/check_user_login.html">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" class="form-control" name="email" placeholder="Email address" required autofocus><br>
        <input type="password" class="form-control"name="password" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
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
      </form>
                   </div>
 
               
               
               
               
           </div>
           
            
           <div class="col-md-4">
               
               
               
               
               
           </div>
           </div>
       
    
    </div> <!-- /container -->