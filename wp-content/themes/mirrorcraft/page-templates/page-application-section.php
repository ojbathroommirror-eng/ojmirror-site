<?php
/*
Template Name: Application Section Page
*/
get_header();
?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <section class="page-hero">
      <div class="shell page-hero-shell page-hero-shell-basic">
        <div class="page-hero-copy">
          <p class="eyebrow"><?php esc_html_e('Application Section', 'mirrorcraft'); ?></p>
          <h1><?php the_title(); ?></h1>
          <p class="hero-lead"><?php echo esc_html(mirrorcraft_get_page_summary(get_the_ID(), __('This rebuilt template is designed for one application story at a time, with enough room to explain layout logic, user needs, and product fit.', 'mirrorcraft'))); ?></p>
        </div>
      </div>
    </section>

    <section class="section section-alt">
      <div class="shell card-grid card-grid-three">
        <article class="statement-card"><h3><?php esc_html_e('Space-specific priorities', 'mirrorcraft'); ?></h3><p><?php esc_html_e('Application pages now make it easier to explain what changes between guestroom, residential, care, and branded environments.', 'mirrorcraft'); ?></p></article>
        <article class="statement-card"><h3><?php esc_html_e('Product mapping', 'mirrorcraft'); ?></h3><p><?php esc_html_e('Use this template to connect the space directly to the best product family and feature mix.', 'mirrorcraft'); ?></p></article>
        <article class="statement-card"><h3><?php esc_html_e('Better next step', 'mirrorcraft'); ?></h3><p><?php esc_html_e('Every application page should make the next route into products or inquiry feel obvious.', 'mirrorcraft'); ?></p></article>
      </div>
    </section>

    <?php mirrorcraft_render_editor_content_section(array('section_class' => 'editor-bridge-section')); ?>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
