<?php
/*
Template Name: Homepage
*/
get_header(); global $post; ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


	<!-- BEGIN CONTENT -->	

	<div id="" class="col-sm-12">
		<div class="row">
		<div  class="col-sm-12 cover text-center">

			<div class="col-sm-6 col-sm-offset-3 searchhome">
				<?php get_search_form(); ?>
			</div>
		</div>
		</div>

		<div class="row">
		<div  class="col-sm-3 col-sm-offset-1 top-recettes">
		</div>
		<div  class="col-sm-3 top-recettes">
		</div>
		<div  class="col-sm-3 top-recettes">
		</div>
		</div>


		<!-- BEGIN POST CONTENT -->	
		<?php if($post->post_content) { ?>	
		
			<div id="post-content">
				
			</div>
			
		<?php } ?>

		<!-- END POST CONTENT -->			


	</div>
	
	<!-- END CONTENT -->	
	

<?php endwhile; endif; ?>


<?php get_footer(); ?>