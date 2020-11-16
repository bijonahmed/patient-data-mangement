<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>resource/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>data_table/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>resource/data_table/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>resource/data_table/js/DT_bootstrap.js"></script>
<script src="<?php echo base_url(); ?>resource/data_table/js/bootstrap-dataTables-paging.js"></script>
<script src="<?php echo base_url(); ?>resource/data_table/js/bootstrap-dataTables.js"></script>
    </head>
    <body>

<script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->


        <!-- Include all compiled plugins (below), or include individual files as needed -->



    <body>  <br><br><br><br>
        <div class="container">

            <div class="row">
                
                <div class="col-md-1">



                </div>
                <div class="col-md-10">
     <?php
     /*
                         <button type="button" class="btn btn-default" id="btnExport"><span class="glyphicon glyphicon-stats"></span> Excel</button>
<a href="<?php echo base_url(); ?>data_record/all_information_PDF"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-book"></span> Create PDF</button></a>
 
      */
     
     ?>

                    <div class="form-group has-success">
                        <div id="dvData">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="example">

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
                        </table>
</div>


                    </div> 


                </div>
                <div class="col-md-1">



                </div>

            </div>
        </div>



    </body>

 <script>
$("#btnExport").click(function(e) {
    window.open('data:application/vnd.ms-excel,' + encodeURIComponent($('#dvData').html()));
    e.preventDefault();
}) 
    </script>