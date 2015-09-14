<?php

if (!function_exists('autop_setup')) {

  function autop_setup() {
    load_theme_textdomain('autop', get_template_directory() . '/languages');
    show_admin_bar(false);
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(150, 150);
    register_nav_menus(array(
      'main' => __('Top primary menu')
    ));
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('post-formats', array('aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery'));
    add_theme_support('custom-header');
  }
}

add_action('after_setup_theme', 'autop_setup');

function autop_scripts() {
  // wp_enqueue_style('roboto', 'http://fonts.googleapis.com/css?family=Roboto:400,300,700,900');
  //wp_enqueue_style('genericons', get_template_directory_uri() . '/genericons/genericons.css');
  // wp_enqueue_style('font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css');
  wp_enqueue_style('normalize-style', get_stylesheet_directory_uri() . '/normalize.css');
  wp_enqueue_style('autop-style', get_stylesheet_uri());

  // wp_enqueue_script('test', get_template_directory_uri() . '/js/test.js', array('jquery'), false, true);

  // wp_enqueue_script('jquery-ui-script', '//code.jquery.com/ui/1.11.4/jquery-ui.js', array('jquery'));
  // wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js');
  //wp_enqueue_script('sticky-kit-script', get_template_directory_uri() . '/js/sticky-kit.min.js', array('jquery'));
  wp_enqueue_script('hc-sticky-script', get_template_directory_uri() . '/js/jquery.hc-sticky.min.js', array('jquery'));
  //wp_enqueue_script('jwplayer-script', 'http://jwpsrv.com/library/eVCHtN1jEeSszA4AfQhyIQ.js');
  // wp_enqueue_script('maps-script', get_template_directory_uri() . '/js/maps.js', array('jquery'));

  // wp_enqueue_script('enquire-script', get_template_directory_uri() . '/js/enquire.min.js', false, false, true);
  // wp_enqueue_script('liptovzije-script', get_template_directory_uri() . '/js/functions.js', array('jquery'), false, true);
  wp_enqueue_script('functions-script', get_template_directory_uri() . '/js/functions.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'autop_scripts');

function get_cover_image_uri($id, $size = 'full') {
  $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($id), $size);
  return empty($thumb) ? null : $thumb['0'];
}

function the_cover_image($id = null, $size = 'full', $link_to_post = false) {
  if ($id == null)
    $id = get_the_ID();
  $uri = get_cover_image_uri($id, $size);
  if (!$uri) {
    $default = true;
    $uri = get_template_directory_uri() . '/images/placeholder.svg';
  }
  else {
    $default = false;
  }
  echo '<a href="' . ($link_to_post ? esc_url(get_permalink($id)) : $uri) . '" og:image class="cover-image ' . $size;
  if ($default)
    echo ' default';
  echo '" style="background-image:url(' . $uri . ')">';
  echo '</a>';
}

function opening_hours() {
  return array(
    'Mon' => array('7:30', '17:00'),
    'Tue' => array('7:30', '17:00'),
    'Wed' => array('7:30', '17:00'),
    'Thu' => array('7:30', '17:00'),
    'Fri' => array('7:30', '17:00'),
    'Sat' => array('8:00', '12:00'),
    'Sun' => null,
  );
}

function phone_numbers() {
  return array(
    'lm' => '+421 44/562 10 10',
    'lh' => '+421 44/562 10 11'
  );
}

function the_email() {
  echo 'autoplm@gmail.com';
}

function address() {
  return array(
    // 'name' => 'Autop Ing. Povolný Jiří',
    'street' => 'Rachmaninovo nám. 3529/1',
    'town' => '031 01 Liptovský Mikuláš',
    // 'country' => 'Slovensko'
  );
}
