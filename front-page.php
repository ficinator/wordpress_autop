<?php
  get_header();
  get_template_part('page', 'stores');
?>

<div id="page">
  <div id="primary">
    <?php
      get_template_part('page', 'about');
      get_template_part('page', 'contact');
    ?>
  </div> <!-- #primary -->

  <?php get_sidebar() ?>

</div> <!-- #page -->

<?php get_footer() ?>