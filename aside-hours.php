<aside id="otvaracia-doba" class="info">
  <header>
    <span class="icon"></span>
    <h3><?php _e('Opening Hours', 'autop'); ?></h3>
  </header>
  <div class="opening-hours-container">
    <ul class="opening-hours">
      <?php foreach ($store['hours'] as $day => $hours): ?>
        <?php
          $now = current_time('timestamp');
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
  </div> <!-- .opening-hours-container -->
</aside> <!-- #otvaracia-doba -->