<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php
      if (has_post_thumbnail()) {
        the_cover_image();
      }
    ?>
    <h2 class="entry-title">
      <?php the_title(); ?>
    </h2>
  </header>
  <section class="entry-content">
    <?php the_content(); ?>
  </section>
  <footer class="entry-footer">
    <?php the_author(); ?>
  </footer>
</article>