
<select name="strength" class="tb5" id="strength_name">

    <?php foreach ($show_strength_info as $value) { ?>

        <option value="<?php if (isset($value->drug_id)) echo $value->drug_id; ?>"  >
		<?php if (isset($value->strength_name)) echo $value->strength_name; ?></option>
    <?php } ?>
        <option selected="selected">Select Type</option>

</select>
 