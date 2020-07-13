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



<?php  get_footer(); ?>