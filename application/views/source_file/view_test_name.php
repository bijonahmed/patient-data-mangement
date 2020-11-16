<select >

   <?php foreach ($show_test_name_left as $value) { ?>

        <option >
		<?php if (isset($value->test_name)) echo trim($value->test_name); ?></option>
    <?php } ?>

  </select>