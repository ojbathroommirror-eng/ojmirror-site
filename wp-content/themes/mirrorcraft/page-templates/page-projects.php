<?php
/*
Template Name: Projects Page
*/
get_header();
$process_steps = mirrorcraft_get_process_steps();
$application_cards = mirrorcraft_get_application_cards();
?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <section class="page-hero">
      <div class="shell page-hero-shell">
        <div class="page-hero-copy">
          <?php mirrorcraft_render_breadcrumbs(); ?>
          <p class="eyebrow"><?php esc_html_e('Projects', 'mirrorcraft'); ?></p>
          <h1><?php the_title(); ?></h1>
          <p class="hero-lead"><?php echo esc_html(mirrorcraft_get_page_summary(get_the_ID(), __('OJMIRROR supports project supply with clearer product routes, sample review, production follow-through, and export-ready delivery planning.', 'mirrorcraft'))); ?></p>
        </div>
        <aside class="page-hero-aside">
          <p><?php esc_html_e('Use this page to speak directly to purchasers, project teams, and design partners comparing mirror supply options across different job types.', 'mirrorcraft'); ?></p>
        </aside>
      </div>
    </section>

    <section class="section">
      <div class="shell card-grid card-grid-two">
        <?php foreach ($application_cards as $card) : ?>
          <article class="feature-card sector-card">
            <div class="feature-card-media">
              <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" width="1400" height="1200" loading="lazy" decoding="async">
            </div>
            <div class="feature-card-body">
              <p class="feature-tag"><?php echo esc_html($card['tag']); ?></p>
              <h3><?php echo esc_html($card['title']); ?></h3>
              <p><?php echo esc_html($card['text']); ?></p>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="section section-alt">
      <div class="shell process-grid">
        <?php foreach ($process_steps as $index => $step) : ?>
          <article class="process-card">
            <span class="process-step"><?php echo esc_html(sprintf('%02d', $index + 1)); ?></span>
            <h3><?php echo esc_html($step['title']); ?></h3>
            <p><?php echo esc_html($step['text']); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <?php mirrorcraft_render_editor_content_section(array('section_class' => 'editor-bridge-section')); ?>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
