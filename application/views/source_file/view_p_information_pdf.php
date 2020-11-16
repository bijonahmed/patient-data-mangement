<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>

    <!-- Bootstrap -->


  </head>
  <body>
 

<body>  <br>
    <div class="container">
        
        <div class="row">
            
            <div class="col-md-1">
                
                
                
            </div>
             <div class="col-md-10">
               
<div class="form-group has-success">
    <style>
        .tableradius
        {
 

border-radius:50px;
 
            
        }
        
    </style>
    
   
          <table cellpadding="0" cellspacing="0" border="2" class="table table-hover tableradius" id="example">

                            <thead>
                                <tr class="success">
                                    <th width="200">Cat.Name</th>
                                    <th width="600">Name</th>
                                    <th width="600">Cell Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($dictionaryinfo as $data) {
                                    ?>

                                    <tr class="">
                                        <td><?php echo $data->category_name; ?></span></td>
                                        <td><?php echo $data->name; ?></span></td>
                                        <td><?php echo $data->cell_number; ?></span></td>
                                        <td>
                                            <a class="link" href="<?php echo base_url(); ?>data_record/edit_form_dictionary_info/<?php echo $data->category_data_id; ?>" onClick="return sure();" style="text-decoration:none"><span class="glyphicon glyphicon-edit"></span> Edit</a>





                                        </td>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table><br> <br> 
    <div align="left"><small>Printing Date <?php echo date("d-m-Y")?></small></div>   
         </div>
         
     </div> 
                
                
            </div>
             <div class="col-md-1">
                
                
                
            </div>
            
        </div>
    </div>
       
</body>