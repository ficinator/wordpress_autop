<?php

// include('widget-test.php');

if (!function_exists('autop_setup')) {

  function autop_setup() {
    load_theme_textdomain('autop', get_template_directory() . '/languages');
    show_admin_bar(false);
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    // set_post_thumbnail_size(9999, 200);
    // add_image_size('gallery', 9999, 200);
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
  wp_enqueue_style('normalize-style', get_stylesheet_directory_uri() . '/normalize.css');
  wp_enqueue_style('autop-style', get_stylesheet_uri());

  // wp_enqueue_script('test', get_template_directory_uri() . '/js/test.js', array('jquery'), false, true);

  wp_enqueue_script('jquery-ui', '//code.jquery.com/ui/1.11.4/jquery-ui.js', array('jquery'));
  // wp_enqueue_script('unslider', '//unslider.com/unslider.min.js', array('jquery'));
  // wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js');
  wp_enqueue_script('hc-sticky', get_template_directory_uri() . '/js/jquery.hc-sticky.min.js', array('jquery'));

  // wp_enqueue_script('enquire-script', get_template_directory_uri() . '/js/enquire.min.js', false, false, true);
  // wp_enqueue_script('liptovzije-script', get_template_directory_uri() . '/js/functions.js', array('jquery'), false, true);
  // wp_enqueue_script('maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDmg1Z2SiD6LGw5C4nsnLa3SrvRrCOuclE&callback=initMap', false, false, true);
  // wp_enqueue_script('slick', '//cdn.jsdelivr.net/jquery.slick/1.5.6/slick.min.js', array('jquery'), false, true);
  wp_enqueue_script('functions', get_template_directory_uri() . '/js/functions.js', array('jquery'), false, true);
}

function autop_widgets_init() {
  // register_widget('Foo_Widget');
  register_sidebar(array(
    'name'          => __('Primary Sidebar'),
    'id'            => 'sidebar',
    'description'   => __('Main sidebar that appears on the right.'),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));
}
add_action('widgets_init', 'autop_widgets_init');

add_action('wp_enqueue_scripts', 'autop_scripts');

function add_defer_attribute($tag, $handle) {
    if ('maps-script' !== $handle)
      return $tag;
    return str_replace(' src', ' async defer src', $tag);
}

add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);

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

function get_social() {
  return array(
    'facebook' => 'https://www.facebook.com/Autop-621331907997397',
    'plus'    => 'https://plus.google.com/105527706793888645913',
  );
}

function get_stores() {
  return array(
    'liptovsky-mikulas' => array(
      'name' => 'Liptovský Mikuláš',
      'type' => 'main store',
      'phone' => '+421 44/562 10 10',
      'hours' => array(
        'Mon' => array('7:30', '17:00'),
        'Tue' => array('7:30', '17:00'),
        'Wed' => array('7:30', '17:00'),
        'Thu' => array('7:30', '17:00'),
        'Fri' => array('7:30', '17:00'),
        'Sat' => array('8:00', '12:00'),
        'Sun' => null,
      ),
      'address' => array(
        // 'name' => 'Autop Ing. Povolný Jiří',
        'street' => 'Rachmaninovo nám. 3529/1',
        'town' => '031 01 Liptovský Mikuláš',
        // 'country' => 'Slovensko'
      ),
    ),
    'liptovsky-hradok' => array(
      'name' => 'Liptovský Hrádok',
      'type' => 'branch office',
      'phone' => '+421 44/522 34 02',
      'hours' => array(
        'Mon' => array('8:00', '16:00'),
        'Tue' => array('8:00', '16:00'),
        'Wed' => array('8:00', '16:00'),
        'Thu' => array('8:00', '16:00'),
        'Fri' => array('8:00', '16:00'),
        'Sat' => array('8:00', '11:00'),
        'Sun' => null,
      ),
      'address' => array(
        // 'name' => 'Autop Ing. Povolný Jiří',
        'street' => 'SNP 309/42',
        'town' => '033 01 Liptovský Hrádok',
        // 'country' => 'Slovensko'
      ),
    )
  );
}

function the_email() {
  echo 'autoplm@gmail.com';
}
