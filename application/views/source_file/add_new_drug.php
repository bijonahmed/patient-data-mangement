<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

        <script src="<?php echo base_url(); ?>data_table/js/jquery.js"></script>
        <script>
            $(document).ready(function() {
                $("#brand_name").focus();
                $(":focus").css("background-color", "white");
            });
        </script>


    </head>
    <br><br><br>
    <body>
        <div class="container">
            <h3>Add New Drug</h3>
            <hr>
            <form name="employee" method="post" action="<?php echo base_url(); ?>data_record/save_new_drug_name.html">
                <div class="row">

                    <div class="col-md-4">

                        <div class="alert alert-info">

                            Dose Type<div class="form-group has-success">
                                <select name="dose_id" id="select" required="1" class="form-control input-lg">

                                    <?php
                                    foreach ($dosetype as $data) {
                                        ?>
                                        <option value="<?php echo $data->dose_id; ?>"> <?php echo $data->dose_type; ?> </option>
                                    <?php } ?>
                                </select>
                                <br>


                                Schedule<div class="form-group has-success">
                                    <select name="dose_schedule_id" id="select" required="1" class="form-control input-lg">

                                        <?php
                                        foreach ($scheduleInfo as $data) {
                                            ?>
                                            <option value="<?php echo $data->dose_schedule_id; ?>"> <?php echo $data->dose_schedule; ?> </option>
                                        <?php } ?>
                                    </select>
                                    <br>

                                    Suggestion<div class="form-group has-success">
                                        <select name="doseSuggestion_id" id="select" required="1" class="form-control input-lg">

                                            <?php
                                            foreach ($suggestion as $data) {
                                                ?>
                                                <option value="<?php echo $data->doseSuggestion_id; ?>"> <?php echo $data->dose_suggestion; ?> </option>
                                            <?php } ?>
                                        </select>
                                        <br>
                                    </div>


                                </div>


                            </div>


                        </div>   

                    </div>
                    <div class="col-md-4">
                        <div class="alert alert-danger">

                            Generic Name<div class="form-group has-success">
                                <select name="medicine_generic_id" id="select" required="1" class="form-control input-lg">

                                    <?php
                                    foreach ($new_generic_name as $data) {
                                        ?>
                                        <option value="<?php echo $data->medicine_generic_id; ?>"> <?php echo $data->generic_name; ?> </option>
                                    <?php } ?>
                                </select>
                                <br>


                                Brand Name<div class="form-group has-success">
                                    <input type="text" class="form-control" name="brand_name" id="brand_name" required="1" ><br>

                                    Pharma. Name<div class="form-group has-success">
                                        <input type="text" class="form-control" name="pharma_name" required="1" ><br>


                                        <center> <button class="btn btn-info" onClick="return save()"><span class="glyphicon glyphicon-save"></span>
                                                Save</button>

                                        </center>

                                    </div>


                                </div>


                            </div>


                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="alert alert-success">

                            Pharma. Cell Number<div class="form-group has-success">
                                <input type="text" class="form-control" name="pharma_cell_number" required="1" ><br>

                                Pharma. Email Number<div class="form-group has-success">
                                    <input type="text" class="form-control" name="pharma_email_number" required="1" ><br>

                                    MRO Name <div class="form-group has-success">
                                        <input type="text" class="form-control" name="mro_name" required="1" ><br>

                                        Address <div class="form-group has-success">
                                            <textarea class="form-control" name="address" rows="3"></textarea>



                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>

            <center>
                <a href="<?php echo base_url(); ?>welcome/viewdoes_add_new_drug.html">
                    <button class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
                        <span class="glyphicon glyphicon-search"></span>
                        Search
                    </button>
                </a>
            </center>
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