<?php

global $dirname;
require(gp_inc . 'options.php'); ?>


<form method="get" id="searchform" action="<?php echo home_url(); ?>/">

	<input type="text" name="s" id="searchbar" value="" placeholder="Recherchez parmi plus de 300 recettes"  autofocus/>
	<input type="submit" id="searchsubmit" value="Rechercher" />
	<input type="hidden" name="post_type" value="post" />
	
	<?php if(get_option($dirname.'_search_criteria') == "Products") { ?>
		<input type="hidden" name="post_type" value="product" />
	<?php } elseif(get_option($dirname.'_search_criteria') == "Posts") { ?>
		<input type="hidden" name="post_type" value="post" />
	<?php } elseif(get_option($dirname.'_search_criteria') == "Posts and pages") { ?>
		<input type="hidden" name="post_type[]" value="post" />
		<input type="hidden" name="post_type[]" value="page" />	
	<?php } elseif(get_option($dirname.'_search_criteria') == "Posts, pages and products") { ?>
		<input type="hidden" name="post_type[]" value="post" />
		<input type="hidden" name="post_type[]" value="page" />	
		<input type="hidden" name="post_type[]" value="product" />
	<?php } ?>	

</form>
