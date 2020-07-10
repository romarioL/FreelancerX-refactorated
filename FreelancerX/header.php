<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/materialize.min.css"  media="screen,projection"/>

      <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title> <?php bloginfo('name'); ?></title>
    </head>

    <?php wp_head(); ?>

    <body class="black">

      <div class="main-header col s12 l12">


         <?php wp_nav_menu(array('menu' => 'Nome do Menu', 'container' => 'nav', 'container_class' => 'menu black', 'menu_class' => 'menu-links')); ?>

         <div class="main-screen black">

          <?php 

          $args = array('post_type' => 'page', 'pagename' => 'Sobre mim');

          $my_page = get_posts($args);

           if($my_page) {
           foreach ($my_page as $post) {
             setup_postdata($post);

          ?>

          <div class="container">

          <h2><?php the_title(); ?></h2>
           <?php the_excerpt(); ?>
           <a href="<?php the_permalink(); ?>" class="button-primary">Leia mais</a>

         </div>


         <?php 

       }

     }

         ?>
         </div>

    </div>