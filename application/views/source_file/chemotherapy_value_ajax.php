<select name="chemotherapy_regimen_value" class="tb5" id="chemotherapy_value" exclude=" " onChange="//union_show(this.value);">

    <?php foreach ($show_chemotherapy_value as $value) { ?>

        <option value="<?php if (isset($value->chemotherapy_regimen_value)) echo $value->chemotherapy_regimen_value; ?>"  >
		<?php if (isset($value->chemotherapy_regimen_value)) echo $value->chemotherapy_regimen_value; ?></option>
    <?php } ?>
        <option selected="selected">Select Type</option>

</select>

