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

    </head>
    <body>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->


        <!-- Include all compiled plugins (below), or include individual files as needed -->



    <body>  <br><br><br>
        <div class="container">

            <div class="row">
                <div class="col-md-1">



                </div>
                <div class="col-md-10">

                    <div class="form-group has-success">
                        <br><br>
                         <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="phy_findings">

<thead>
<tr class="success">
<th width="250">For Bangla</th>
<th width="250">For English</th>
<th width="250">Footer</th>
<th>Action</th>
</tr>
</thead>
<tbody>
   <?php

foreach($searchdata_for_seal as $data) {
?>

<tr class="">
    <td><?php echo $data->for_bangla_seal;?></span></td>

  <td><?php echo $data->for_english_seal;?></span></td>
    <td><?php echo $data->prescription_footer;?></span></td>
<td>
<a class="link" href="<?php echo base_url();?>data_record/edit_form_doctor_seal/<?php echo $data->seal_id;?>" onClick="return sure_();" style="text-decoration:none"><span class="glyphicon glyphicon-edit"></span> Edit</a>
 



</td>
</td>
</tr>
<?php }?>
</tbody>
</table>



                    </div> 


                </div>
                <div class="col-md-1">



                </div>

            </div>
        </div>



    </body>

    <script>
        function sure()
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