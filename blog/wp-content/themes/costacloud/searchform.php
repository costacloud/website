<div class="input-group margin-bottom-40">
<form method="get" id="searchform" action="<?php echo home_url() ; ?>/">
  <input type="text" class="form-control" placeholder="Search" name="s" id="s" maxlength="33" value="<?php echo esc_html($s, 1); ?>">
  <span class="input-group-btn">
	  <button class="btn-u" type="button">Go</button>
  </span> 
 </form>

</div>
