<section id="info">
  <div class="section-container">
    <ul class="info-list">

      <li id="otvaracia-doba">
        <header>
          <span class="icon"></span>
          <!-- <h3><?php _e('Opening Hours', 'autop'); ?></h3> -->
        </header>
        <div class="opening-hours-container">
          <ul class="opening-hours">
            <?php foreach (opening_hours() as $day => $hours): ?>
              <?php
                $now = time();
                $now = strtotime('16. September 2015 10:00');
                $today = $day == date('D', $now) ? true : false;
                $opened = ($now >= strtotime($hours[0], $now) && $now <= strtotime($hours[1], $now)) ? 'opened' : 'closed';
                if ($today) {
                  $class = ' today ' . $opened;
                }
                else {
                  $class = 'day';
                }
              ?>
              <li class="<?php echo $class; ?>">
                <strong><?php echo __($day) . ':'; ?></strong>
                <span>
                  <?php echo $hours ? $hours[0] . ' - '. $hours[1] : __('Closed', 'autop'); ?>
                </span>
                <?php if ($today && $hours): ?>
                  <br />
                  <span class="is-opened">
                    <?php echo __("Right now we're ", 'autop') . __($opened, 'autop') . '.'; ?>
                  </span>
                <?php endif; ?>
              </li>
            <?php endforeach ?>
          </ul> <!-- .opening-hours -->
          <span class="show-more">
            <?php _e('Show More'); ?>
          </span>
        </div> <!-- .opening-hours-container -->
      </li> <!-- #otvaracia-doba -->

      <li id="email">
        <header>
          <span class="icon"></span>
          <!-- <h3><?php _e('Email', 'autop'); ?></h3> -->
        </header>
        <a href="mailto:<?php the_email(); ?>"><?php the_email(); ?></a>
      </li>

      <li id="telefon">
        <header>
          <span class="icon"></span>
          <!-- <h3><?php _e('Phone', 'autop'); ?></h3> -->
        </header>
        <div class="phone-container">
          <ul class="phone-number-list">
            <?php foreach (phone_numbers() as $key => $number): ?>
              <li class="<?php _e($key); ?>"><?php _e($number); ?></li>
            <?php endforeach ?>
          </ul>
        </div> <!-- phone-container -->
      </li> <!-- #telefon -->

      <li id="adresa">
        <header>
          <span class="icon"></span>
          <!-- <h3><?php _e('Address', 'autop'); ?></h3> -->
        </header>
        <ul class="address-list">
          <?php foreach (address() as $key => $value): ?>
            <li class="<?php _e($key); ?>"><?php _e($value); ?></li>
          <?php endforeach ?>
        </ul> <!-- .address-list -->
      </li> <!-- #adresa -->

    </ul>
  </div> <!-- .section-container -->
</section> <!-- #info -->
