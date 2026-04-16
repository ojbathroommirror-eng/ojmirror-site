<?php get_header(); ?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <section class="page-hero">
    <div class="shell page-hero-shell page-hero-shell-basic">
      <div class="page-hero-copy">
        <p class="eyebrow"><?php esc_html_e('Search', 'mirrorcraft'); ?></p>
        <h1><?php printf(esc_html__('Results for "%s"', 'mirrorcraft'), esc_html(get_search_query())); ?></h1>
        <p class="hero-lead"><?php esc_html_e('The rebuilt search experience now uses the same clear layout as the journal and archive pages.', 'mirrorcraft'); ?></p>
      </div>
      <aside class="page-hero-aside">
        <?php get_search_form(); ?>
      </aside>
    </div>
  </section>

  <section class="section section-tight">
    <div class="shell">
      <?php if (have_posts()) : ?>
        <div class="post-grid">
          <?php while (have_posts()) : the_post(); ?>
            <?php mirrorcraft_render_post_card(); ?>
          <?php endwhile; ?>
        </div>
        <?php the_posts_pagination(); ?>
      <?php else : ?>
        <article class="empty-state">
          <h2><?php esc_html_e('No matching content found.', 'mirrorcraft'); ?></h2>
          <p><?php esc_html_e('Try broader terms such as mirror, cabinet, custom, hospitality, or quote.', 'mirrorcraft'); ?></p>
        </article>
      <?php endif; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>
