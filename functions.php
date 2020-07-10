<?php

// Require Materialize Custom Nav Walker Class
require get_template_directory() . '/class-materialize-navwalker.php';

add_action( 'wp_footer' , 'materialize_nav_walker_dropdown_init' );

if( ! function_exists('materialize_nav_walker_dropdown_init') ) {

  function materialize_nav_walker_dropdown_init() { ?>
      <script>
          jQuery(document).ready(function($) {
              jQuery(".nav-item-dropdown-button").dropdown({constrainWidth: true});
              jQuery(".side-menu-nav-item-dropdown-button").dropdown({constrainWidth: false});
              jQuery(".button-collapse").sideNav();
          });
      </script>
  <?php }

}





if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'id' => 'footer',
    'name' => 'Footer',
    'before_widget' => '<div class = "col l4 s12 widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="white-text">',
    'after_title' => '</h3>',
  )
);



 ?>