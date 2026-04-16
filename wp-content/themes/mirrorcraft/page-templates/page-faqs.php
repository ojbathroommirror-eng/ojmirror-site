<?php
/*
Template Name: FAQ Page
*/
get_header();
$faq_items = mirrorcraft_get_faq_items();
?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <section class="page-hero">
      <div class="shell page-hero-shell page-hero-shell-basic">
        <div class="page-hero-copy">
          <?php mirrorcraft_render_breadcrumbs(); ?>
          <p class="eyebrow"><?php esc_html_e('FAQ', 'mirrorcraft'); ?></p>
          <h1><?php the_title(); ?></h1>
          <p class="hero-lead"><?php echo esc_html(mirrorcraft_get_page_summary(get_the_ID(), __('Find quick answers about customization, OEM and ODM support, samples, compliance expectations, and quote preparation for mirror and cabinet orders.', 'mirrorcraft'))); ?></p>
        </div>
      </div>
    </section>

    <section class="section faq-section">
      <div class="shell">
        <?php mirrorcraft_render_faq_items($faq_items, 'faq-page'); ?>
      </div>
    </section>

    <?php mirrorcraft_render_editor_content_section(array('section_class' => 'editor-bridge-section')); ?>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
