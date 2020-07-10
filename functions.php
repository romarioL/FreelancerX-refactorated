<?php

// Require Materialize Custom Nav Walker Class


function load_scripts() {
  wp_enqueue_style('materialize-css', get_template_directory_uri() . "/css/materialize.min.css", array());
  wp_enqueue_style('material-icons','https://fonts.googleapis.com/icon?family=Material+Icons', array());
  wp_enqueue_style('template-css', get_template_directory_uri() . '/css/template.css', array());
  wp_enqueue_script('materialize-js', get_template_directory_uri() . '/js/materialize.min.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'load_scripts');




function freelancerX_widgets() {

  register_sidebar(array(
    'id' => 'footer',
    'name' => 'Footer',
    'before_widget' => '<div class = "col l4 s12 widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="white-text">',
    'after_title' => '</h3>',
  )
);

}


add_action('widgets_init', 'freelancerX_widgets');

  



 ?>