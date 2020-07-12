<?php get_header(); ?>




<div class="banner-posts">
	<div class="row">
		<?php  if(have_posts()): while(have_posts()):  the_post()?>
		<?php get_template_part('template-parts/content', get_post_format()); ?>
	<?php endwhile; endif; ?>
	</div>
</div>


<?php  get_footer(); ?>