<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
  <label class="screen-reader-text" for="mirrorcraft-search-field"><?php esc_html_e('Search for:', 'mirrorcraft'); ?></label>
  <div class="search-form-row">
    <input id="mirrorcraft-search-field" type="search" class="search-field" placeholder="<?php echo esc_attr__('Search products, articles, or pages', 'mirrorcraft'); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s">
    <button type="submit" class="button button-primary search-submit"><?php esc_html_e('Search', 'mirrorcraft'); ?></button>
  </div>
</form>
