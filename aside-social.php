<aside id="social">
  <ul class="social-list">
    <?php foreach (get_social() as $name => $url): ?>
      
    <li class="<?php _e($name) ?>">
      <a href="<?php _e($url) ?>" target="_blank">
        <?php _e($name, 'autop') ?>
      </a>
    </li>

    <?php endforeach ?>
  </ul>
</aside>