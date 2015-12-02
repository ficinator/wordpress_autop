<div class="search-form">
    <form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
        <label for="search" class="visuallyhidden"><?php _e('Search for:') ?></label>
        <input type="search" class="search-field" placeholder="<?php _e('Search …') ?>" value="<?php echo get_search_query() ?>" name="search" title="<?php _e('Search for:') ?>" />
        <input type="submit" class="search-submit" value="<?php _e('Search') ?>" />
    </form>
</div>  <!-- .search-form -->