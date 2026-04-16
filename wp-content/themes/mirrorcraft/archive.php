<?php get_header(); ?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <section class="page-hero">
    <div class="shell page-hero-shell page-hero-shell-basic">
      <div class="page-hero-copy">
        <?php mirrorcraft_render_breadcrumbs(); ?>
        <p class="eyebrow"><?php esc_html_e('Archive', 'mirrorcraft'); ?></p>
        <h1><?php the_archive_title(); ?></h1>
        <?php if (get_the_archive_description()) : ?>
          <div class="hero-lead archive-description"><?php the_archive_description(); ?></div>
        <?php endif; ?>
      </div>
      <aside class="page-hero-aside">
        <p><?php esc_html_e('Browse sourcing articles, product explainers, and category notes grouped by archive.', 'mirrorcraft'); ?></p>
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
          <h2><?php esc_html_e('Nothing is published in this archive yet.', 'mirrorcraft'); ?></h2>
        </article>
      <?php endif; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>
