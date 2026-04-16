<?php get_header(); ?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <section class="page-hero">
      <div class="shell page-hero-shell page-hero-shell-basic">
        <div class="page-hero-copy">
          <p class="eyebrow"><?php esc_html_e('Page', 'mirrorcraft'); ?></p>
          <h1><?php the_title(); ?></h1>
          <?php if (mirrorcraft_get_page_summary(get_the_ID()) !== '') : ?>
            <p class="hero-lead"><?php echo esc_html(mirrorcraft_get_page_summary(get_the_ID())); ?></p>
          <?php endif; ?>
        </div>
        <aside class="page-hero-aside">
          <span class="feature-tag"><?php esc_html_e('Quick route', 'mirrorcraft'); ?></span>
          <p><?php esc_html_e('Need product support, a project quote, or a custom brief? The new site keeps those paths visible from every page.', 'mirrorcraft'); ?></p>
          <a class="text-link" href="<?php echo esc_url(mirrorcraft_link_by_slug('contact', '/contact/')); ?>"><?php esc_html_e('Open contact page', 'mirrorcraft'); ?></a>
        </aside>
      </div>
    </section>

    <section class="section section-tight">
      <div class="shell content-shell">
        <article <?php post_class('entry-panel'); ?>>
          <div class="entry-content prose-flow">
            <?php the_content(); ?>
          </div>
        </article>
      </div>
    </section>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
