<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- <script src="js/vendor/modernizr-2.8.3.min.js"></script> -->
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <header id="page-header">
      <div class="top-container">
        <?php include get_template_directory() . '/images/autop_logo_white.svg'; ?>
        <div class="page-title-container">
          <h1 id="page-title">
            <?php bloginfo('title'); ?>
          </h1>
          <p id="page-description">
            <?php bloginfo('description'); ?>
          </p>
        </div> <!-- .page-title-container -->
      </div> <!-- .top-container -->
      <?php
        wp_nav_menu(array(
          'container' => 'nav',
          'container_id' => 'main-menu'
        ));
      ?>
    </header>

    <main id="main">

