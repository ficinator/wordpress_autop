<aside id="adresa" class="info">
  <header>  
    <span class="icon"></span>
    <!-- <h3><?php _e('Address', 'autop'); ?></h3> -->
  </header>
  <ul class="address-list">
    <?php foreach ($store['address'] as $key => $value): ?>
      <li class="<?php _e($key); ?>"><?php _e($value); ?></li>
    <?php endforeach ?>
  </ul> <!-- .address-list -->
</aside> <!-- #adresa -->
