<select name="dose_id" class="tb5" id="brand_name" exclude=" " onChange="//union_show(this.value);">

    <?php foreach ($show_brand_name as $value) { ?>

        <option value="<?php if (isset($value->brand_name)) echo $value->brand_name; ?>"  >
		<?php if (isset($value->brand_name)) echo $value->brand_name; ?></option>
    <?php } ?>
        <option selected="selected"></option>

</select>