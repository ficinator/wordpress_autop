<?php $stores = get_stores() ?>

<div class="section-container">
  <section id="predajne">

    <div id="store-tabs">

      <div class="section-title-container">
        <h2 class="section-title"><?php _e('Stores', 'autop') ?></h2>
        <ul class="store-list">
          <?php foreach ($stores as $slug => $store): ?>
            <li class="store">
              <a href="#predajna-<?php _e($slug) ?>">
                <h3><?php _e($store['name']) ?></h3>
              </a>
            </li>
          <?php endforeach ?>
        </ul> <!-- .store-list -->
      </div> <!-- .section-title-container -->

      <?php foreach ($stores as $slug => $store): ?>

      <div id="predajna-<?php _e($slug) ?>" class="store">
        <div class="info-container">

          <?php include(locate_template('map.php')) ?>

          <div class="info-list-container">
            <ul class="info-list">
              <?php
                include(locate_template('aside-hours.php'));
                include(locate_template('aside-phone.php'));
                include(locate_template('aside-email.php'));
              ?>
            </ul>
          </div> <!-- .info-list-container -->

        </div> <!-- .info-container -->
      </div> <!-- .store -->

      <?php endforeach ?>
    </div> <!-- #store-tabs -->

  </section> <!-- #predajne -->
</div> <!-- .section-container -->
