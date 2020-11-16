<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
         <script src="<?php echo base_url(); ?>data_table/js/jquery.js"></script>

        <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
        <script src="<?php echo base_url(); ?>resource/jquery-1.9.1.js"></script>
        <script src="<?php echo base_url();?>resource/js/jquery-ui.js"></script>

        <script src="<?php echo base_url(); ?>resource/Context.js-master/context.js"></script>
        <script src="<?php echo base_url(); ?>resource/Context.js-master/demo.js"></script>

        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>resource/Context.js-master/context.standalone.css" rel="stylesheet">

        </style>
        <script src="<?php echo base_url(); ?>data_table/js/jquery.js"></script>
        <script>
            $(document).ready(function() {
                $("#dose_suggestion").focus();
                $(":focus").css("background-color", "white");
            });
        </script>


    </head>
    <br><br><br>
    <body>
         <div id="target">
           
	</div>
        <div class="container">
            <h3>Add New Category Name</h3>
            <hr>

            <div class="row">
                <div class="col-md-4">

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
Add Category
<br><br><br><br><br>
     Select Category
                </div>
                <div class="col-md-4">
                    <div class="">
                        <form name="employee" method="post" action="<?php echo base_url(); ?>data_record/save_category_name.html">
                             <div class="form-group has-success">
                               
                                <input type="text" class="form-control" name="category_name" id="dose_suggestion" required="1" >
                               

                            </div>
                            <center> <button class="btn btn-info" onClick="return save()"><span class="glyphicon glyphicon-saved"></span>
                                    Save Category</button></center><br>
                        </form>       
                        
                       
                      
                      
<form name="employee" method="post" action="<?php echo base_url(); ?>data_record/save_category_data.html">
      <div class="form-group has-success">
<select name="category_id" class="form-control" id="category_id">

<option value="">--- Select ---</option>

<?php
foreach ($category as $data) {
?>
<option value="<?php echo $data->category_id; ?>"> <?php echo $data->category_name	; ?> </option>
<?php } ?>
</select>
                            <br>
                             <input type="text" class="form-control" name="name" id="dose_suggestion" required="1" placeholder="Name">
                             <br>
  <input type="text" class="form-control" name="address" id="dose_suggestion" required="1" placeholder="Address">
  <br>
    <input type="text" class="form-control" name="cell_number" id="dose_suggestion" required="1" placeholder="Cell Number" >
                        
                        </div>
                    </div>
    <center> <button class="btn btn-info" onClick="return save()"><span class="glyphicon glyphicon-saved"></span>
                                    Save Data</button>
    
     <a href="<?php echo base_url(); ?>welcome/index.html">
                                                  <button class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg">
                                                      
                                                      Close
                                                  </button>
                                              </a>
    
    </center>
 </form>
                </div>
 
                <div class="col-md-4">

  <center>
   
                            
                             <a href="<?php echo base_url(); ?>welcome/view_dictionary_category_Info.html" target="">
                                        <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
                                            <span class="glyphicon glyphicon-search"></span>
                                            Search Category
                                        </button>
                                    </a>
      
      <a href="<?php echo base_url(); ?>welcome/view_dictionary_Info.html" target="">
                                        <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
                                            <span class="glyphicon glyphicon-search"></span>
                                            Search Information
                                        </button>
                                    </a>
      
                        </center>

                </div>
            </div>

        </div>
    </body>


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