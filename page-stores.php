<?php $stores = get_stores() ?>

<section id="predajne">
  <div class="section-container">

    <h2 class="section-title"><?php _e('Stores') ?></h2>

    <div id="store-tabs">
      <ul class="store-list">
        <?php foreach ($stores as $slug => $store): ?>
          <li class="store">
            <a href="#predajna-<?php _e($slug) ?>">
              <?php _e($store['name']) ?>
            </a>
          </li>
        <?php endforeach ?>
      </ul>

      <?php foreach ($stores as $slug => $store): ?>

        <div id="predajna-<?php _e($slug) ?>" class="store">
          <div class="info-container">

            <?php include(locate_template('partials/map.php')) ?>

            <div class="info-list-container">
              <ul class="info-list">
                <?php
                  include(locate_template('partials/aside-hours.php'));
                  include(locate_template('partials/aside-phone.php'));
                  include(locate_template('partials/aside-email.php'));
                ?>
              </ul>
            </div> <!-- .info-list-container -->

          </div> <!-- .info-container -->
        </div> <!-- .store -->

      <?php endforeach ?>
    </div> <!-- #store-tabs -->

  </div> <!-- .section-container -->
</section> <!-- #predajne -->
