
<select name="phy_fin_value[]" class="tb5" id="phy_fin_value_Id" multiple="multiple">

    <?php foreach ($show_fing_name as $value) { ?>

        <option value="<?php if (isset($value->phy_fin_value)) echo $value->phy_fin_value; ?>"  >
		<?php if (isset($value->phy_fin_value)) echo $value->phy_fin_value; ?></option>
    <?php } ?>
       

</select>
