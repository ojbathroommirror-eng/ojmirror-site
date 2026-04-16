<?php get_header(); ?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <section class="page-hero">
    <div class="shell page-hero-shell page-hero-shell-basic">
      <div class="page-hero-copy">
        <?php mirrorcraft_render_breadcrumbs(); ?>
        <p class="eyebrow"><?php esc_html_e('404', 'mirrorcraft'); ?></p>
        <h1><?php esc_html_e('That page could not be found.', 'mirrorcraft'); ?></h1>
        <p class="hero-lead"><?php esc_html_e('Jump back into products, applications, or the inquiry flow to keep moving.', 'mirrorcraft'); ?></p>
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
