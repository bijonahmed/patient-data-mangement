<select>

   <?php foreach ($show_complain_name_left as $value) { ?>
        
        <option >
		<?php if (isset($value->complain_name)) echo trim($value->complain_name); ?></option>
    <?php } ?> 
 
  </select>