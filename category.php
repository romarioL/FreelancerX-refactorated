<?php get_header(); ?>
<div class="banner-posts">
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<a class="post-link" href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
	<?php the_excerpt(); ?>
<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>