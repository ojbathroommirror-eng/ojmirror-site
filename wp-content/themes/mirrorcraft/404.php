<?php get_header(); ?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <section class="page-hero">
    <div class="shell page-hero-shell page-hero-shell-basic">
      <div class="page-hero-copy">
        <p class="eyebrow"><?php esc_html_e('404', 'mirrorcraft'); ?></p>
        <h1><?php esc_html_e('That page no longer exists in the rebuilt site.', 'mirrorcraft'); ?></h1>
        <p class="hero-lead"><?php esc_html_e('Use the new structure to jump back into product families, project routes, or the inquiry flow.', 'mirrorcraft'); ?></p>
        <div class="button-row">
          <a class="button button-primary" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Go Home', 'mirrorcraft'); ?></a>
          <a class="button button-secondary" href="<?php echo esc_url(mirrorcraft_link_by_slug('products', '/products/')); ?>"><?php esc_html_e('View Products', 'mirrorcraft'); ?></a>
        </div>
      </div>
      <aside class="page-hero-aside">
        <?php get_search_form(); ?>
      </aside>
    </div>
  </section>
</main>
<?php get_footer(); ?>
