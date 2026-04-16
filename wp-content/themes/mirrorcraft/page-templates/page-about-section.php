<?php
/*
Template Name: About Section Page
*/
get_header();
?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <section class="page-hero">
      <div class="shell page-hero-shell page-hero-shell-basic">
        <div class="page-hero-copy">
          <p class="eyebrow"><?php esc_html_e('About Section', 'mirrorcraft'); ?></p>
          <h1><?php the_title(); ?></h1>
          <p class="hero-lead"><?php echo esc_html(mirrorcraft_get_page_summary(get_the_ID(), __('This rebuilt section template is meant for deeper company, process, or capability stories without inheriting the old sprawling layout.', 'mirrorcraft'))); ?></p>
        </div>
      </div>
    </section>

    <section class="section section-alt">
      <div class="shell card-grid card-grid-three">
        <article class="statement-card"><h3><?php esc_html_e('Focused narrative', 'mirrorcraft'); ?></h3><p><?php esc_html_e('Each section page can now stay on one topic instead of carrying too many competing goals.', 'mirrorcraft'); ?></p></article>
        <article class="statement-card"><h3><?php esc_html_e('Cleaner hierarchy', 'mirrorcraft'); ?></h3><p><?php esc_html_e('Headlines, supporting cards, and editor content now share one consistent visual language.', 'mirrorcraft'); ?></p></article>
        <article class="statement-card"><h3><?php esc_html_e('Better handoff', 'mirrorcraft'); ?></h3><p><?php esc_html_e('Visitors can move from supporting content back into products or inquiry without losing context.', 'mirrorcraft'); ?></p></article>
      </div>
    </section>

    <?php mirrorcraft_render_editor_content_section(array('section_class' => 'editor-bridge-section')); ?>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
