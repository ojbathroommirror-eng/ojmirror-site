<?php
/*
Template Name: About Page
*/
get_header();
?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <section class="page-hero">
      <div class="shell page-hero-shell">
        <div class="page-hero-copy">
          <p class="eyebrow"><?php esc_html_e('About OJMIRROR', 'mirrorcraft'); ?></p>
          <h1><?php the_title(); ?></h1>
          <p class="hero-lead"><?php echo esc_html(mirrorcraft_get_page_summary(get_the_ID(), __('We rebuilt this page to explain what OJMIRROR actually does well: product direction, custom development, and better project support.', 'mirrorcraft'))); ?></p>
        </div>
        <aside class="page-hero-aside">
          <div class="mini-stat-list">
            <div><strong><?php esc_html_e('Project-led', 'mirrorcraft'); ?></strong><span><?php esc_html_e('Built for real procurement flow', 'mirrorcraft'); ?></span></div>
            <div><strong><?php esc_html_e('OEM / ODM', 'mirrorcraft'); ?></strong><span><?php esc_html_e('Custom programs stay visible', 'mirrorcraft'); ?></span></div>
            <div><strong><?php echo esc_html(mirrorcraft_get_contact_city_name()); ?></strong><span><?php esc_html_e('Operations base', 'mirrorcraft'); ?></span></div>
          </div>
        </aside>
      </div>
    </section>

    <section class="section">
      <div class="shell card-grid card-grid-three">
        <article class="statement-card statement-card-dark">
          <h3><?php esc_html_e('Category-first thinking', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('We focus the conversation around the right mirror or cabinet family first, then narrow specs from there.', 'mirrorcraft'); ?></p>
        </article>
        <article class="statement-card">
          <h3><?php esc_html_e('Custom development support', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('The rebuilt site makes custom routes easier to discover for private label, project, and designer-led buyers.', 'mirrorcraft'); ?></p>
        </article>
        <article class="statement-card">
          <h3><?php esc_html_e('Repeat-order mindset', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('The story now emphasizes consistency, packaging, and execution instead of one-off brochure claims.', 'mirrorcraft'); ?></p>
        </article>
      </div>
    </section>

    <?php mirrorcraft_render_editor_content_section(array('section_class' => 'editor-bridge-section')); ?>

    <section class="section section-tight">
      <div class="shell cta-shell">
        <div class="cta-card">
          <div>
            <p class="eyebrow"><?php esc_html_e('Talk To Us', 'mirrorcraft'); ?></p>
            <h2><?php esc_html_e('Use the rebuilt site to start a better product conversation.', 'mirrorcraft'); ?></h2>
            <p><?php esc_html_e('If you are comparing routes, planning a custom collection, or preparing a project brief, the next step is a cleaner inquiry.', 'mirrorcraft'); ?></p>
          </div>
          <div class="button-row">
            <a class="button button-primary" href="<?php echo esc_url(mirrorcraft_link_by_slug('contact', '/contact/')); ?>"><?php esc_html_e('Send Inquiry', 'mirrorcraft'); ?></a>
            <a class="button button-secondary" href="<?php echo esc_url(mirrorcraft_link_by_slug('products', '/products/')); ?>"><?php esc_html_e('View Products', 'mirrorcraft'); ?></a>
          </div>
        </div>
      </div>
    </section>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
