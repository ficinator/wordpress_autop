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
    <header id="main-header">

      <div class="drawer-container">
        <button id="drawer-toggle">
          <span><?php _e('Menu') ?></span>
        </button>
        <div id="drawer">
          <?php
            wp_nav_menu(array(
              'container' => 'nav',
              'container_id' => 'main-menu'
            ));
          ?>
        </div>  <!-- #drawer -->
        <div class="drawer-overlay"></div>
      </div>  <!-- .drawer-container -->

      <a href="<?php echo esc_url(home_url('/')); ?>" class="main-logo-container">
        <div class="main-logo">
          <?php include get_template_directory() . '/images/autop_logo_white.svg'; ?>
        </div> <!-- .autop-logo -->
        <h1 class="main-title">
          <?php bloginfo('title'); ?>
        </h1>
      </a>

      <div class="search-form-container">
        <button id="search-form-toggle"><?php _e('Search') ?></button>
        <?php get_search_form() ?>
      </div>  <!-- .search-form-container -->

    </header> <!-- #main-header -->

    <main id="main">

