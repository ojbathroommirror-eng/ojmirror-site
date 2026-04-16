<section class="entry-card entry-card-rich empty-state-card">
  <p class="eyebrow"><?php esc_html_e('No Results', 'mirrorcraft'); ?></p>
  <h2><?php esc_html_e('Nothing matched this page yet.', 'mirrorcraft'); ?></h2>
  <p><?php esc_html_e('Try a different search term, browse the product page, or return to the homepage to continue exploring the site.', 'mirrorcraft'); ?></p>
  <div class="button-row">
    <a class="button button-primary" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Back to Home', 'mirrorcraft'); ?></a>
    <a class="button button-outline" href="<?php echo esc_url(mirrorcraft_link_by_slug('products', '/products')); ?>"><?php esc_html_e('Open Products', 'mirrorcraft'); ?></a>
  </div>
  <div class="search-panel">
    <?php get_search_form(); ?>
  </div>
</section>
