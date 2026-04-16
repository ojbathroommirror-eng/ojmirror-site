<?php get_header(); ?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <section class="page-hero">
    <div class="shell page-hero-shell page-hero-shell-basic">
      <div class="page-hero-copy">
        <?php mirrorcraft_render_breadcrumbs(); ?>
        <p class="eyebrow"><?php esc_html_e('Journal', 'mirrorcraft'); ?></p>
        <h1><?php esc_html_e('Insights, comparisons, and sourcing notes for mirror buyers.', 'mirrorcraft'); ?></h1>
        <p class="hero-lead"><?php esc_html_e('Use this section for product explainers, quote-prep guides, application comparisons, and practical notes for B2B mirror buyers.', 'mirrorcraft'); ?></p>
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
          <h2><?php esc_html_e('No posts yet.', 'mirrorcraft'); ?></h2>
          <p><?php esc_html_e('Use this area for buyer guides, project lessons, and product explainers when you are ready.', 'mirrorcraft'); ?></p>
        </article>
      <?php endif; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>
