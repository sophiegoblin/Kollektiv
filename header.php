<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>

    <?php wp_head(); ?>

    <style type="text/css">
      .home .content-wrap {
        background: #ffffff url(<?php the_field('background_image');?>) no-repeat center center fixed;
        background-size: cover;
      }
    </style>

  </head>


  <body <?php body_class(); ?>>
      <div class="container">

          <?php include 'partials/menu.php';?>

          <?php include 'partials/logo.php';?>

          <div class="content-wrap">
              <div class="content">

                  <header id="header">

                      <nav>


        <!--                  --><?php
        //
        //                  $args = array(
        //                    'container' => false,
        //                    'theme_location' => 'primary-menu',
        //                    'menu_class' => 'no-bullet'
        //                  );
        //
        //                  wp_nav_menu( $args );
        //
        //                  ?>

                      </nav>
                  </header>
                  <div id="middle">