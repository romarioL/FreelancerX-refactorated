<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <!--Import materialize.css-->

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title> <?php bloginfo('name'); ?></title>
    </head>

    <?php wp_head(); ?>

    <body class="black">

      <div class="main-header col s12 l12">

           

           </div>
  
       
         <div class="main-screen black">

          <?php
          
          if(!is_page('Sobre mim')):

                $args = array('post_type' => 'page', 'pagename' => 'Sobre mim');

                $my_page = get_posts($args);

                if($my_page):
                foreach ($my_page as $post):
                  setup_postdata($post);

                ?>

                <div class="container">

              <?php  get_template_part('template-parts/content', 'home-page'); ?>

              </div>

                

 
<?php

          endforeach;
          endif;
      endif;

         ?>
         </div>

    </div>