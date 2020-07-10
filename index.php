<?php get_header(); ?>

<div class="banner-folders ">
	<div class="folder">
		<img class="folder-img" src="<?php bloginfo('template_url'); ?>/img/html.svg" />
		<h4>HTML</h4>
		<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
	</div>

	<div class="folder">
		<img class="folder-img" src="<?php bloginfo('template_url'); ?>/img/javascript.png" />
		<h4>Javascript</h4>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
	</div>

	<div class="folder">
		<img class="folder-img" src="<?php bloginfo('template_url'); ?>/img/php-logo.svg" />
		<h4>PHP</h4>
		<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
	</div>

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