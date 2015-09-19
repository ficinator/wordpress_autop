<?php
  /* Template Name: Stores */
 $stores = get_stores()
?>

<div class="section-container">
  <section id="predajne">

    <div id="store-tabs">

      <div class="section-title-container">
        <h2 class="section-title"><?php the_title() ?></h2>
        <ul class="store-list">
          <?php foreach ($stores as $slug => $store): ?>
            <li class="store-title">
              <a href="#info-<?php _e($slug) ?>">
                <h3><?php _e($store['name']) ?></h3>
                <p><?php _e($store['type']) ?></p>
              </a>
            </li>
          <?php endforeach ?>
        </ul> <!-- .store-list -->
      </div> <!-- .section-title-container -->

      <div class="store">

        <div class="map-container">
          <div id="map" class="map"></div>
        </div> <!-- .map-container -->

        <?php foreach ($stores as $slug => $store): ?>

        <div id="info-<?php _e($slug) ?>" class="info-list-container">
          <ul class="info-list">
            <?php
              include(locate_template('aside-address.php'));
              include(locate_template('aside-hours.php'));
              include(locate_template('aside-phone.php'));
              include(locate_template('aside-email.php'));
            ?>
          </ul>
        </div> <!-- .info-list-container -->

        <?php endforeach ?>

      </div> <!-- .store -->
    </div> <!-- #store-tabs -->

    <?php the_content() ?>

  </section> <!-- #predajne -->
</div> <!-- .section-container -->
