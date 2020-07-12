<?php get_header(); ?>

<div class="banner-folders ">	
   <?php if(is_active_sidebar('home-banner')):
			 dynamic_sidebar('home-banner');
   endif;
    ?>

   <?php if(is_active_sidebar('home-banner2')):
			 dynamic_sidebar('home-banner2');
   endif;
    ?>

   <?php if(is_active_sidebar('home-banner3')):
			 dynamic_sidebar('home-banner3');
   endif;
    ?>
</div>

<div class="banner-posts">
	<div class="row">
		<?php  if(have_posts()): while(have_posts()):  the_post()?>
		<div class="col s12 l4 post">
			<?php the_post_thumbnail(); ?>
			<a href="<?php  the_permalink(); ?>"  class="post-link"><h4><?php  the_title(); ?></h4></a>
			<p><?php  the_excerpt();?></p>
		</div>
	<?php endwhile; endif; ?>
	</div>
</div>


<?php  get_footer(); ?>