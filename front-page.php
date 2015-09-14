<?php

  get_header();

  // if (have_posts()) {
  //   while (have_posts()) {
  //     the_post();
  //     get_template_part('content', get_post_format());
  //   }
  // }

  

  get_template_part('page', 'info');
  get_template_part('page', 'about');
  get_template_part('page', 'contact');

  get_footer();

?>