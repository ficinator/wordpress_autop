<?php
  $args = array(
    'post_type' => 'page',
    'post__in' => array(24, 30, 27),
    'orderby' => 'menu_order',
    'order' => 'ASC',
  );
  $page_query = new WP_Query($args);
  wp_reset_postdata();

  get_header();
  get_template_part('slider');
?>

<div id="page">
  <div id="primary">
    <?php
      // get_template_part('page', 'contact');
      if ($page_query->have_posts()) {
        while ($page_query->have_posts()) {
          $page_query->the_post();
          get_template_part('page', $post->post_name);
        }
      }
    ?>
  </div> <!-- #primary -->

  <?php get_sidebar() ?>

</div> <!-- #page -->

<?php get_footer() ?>