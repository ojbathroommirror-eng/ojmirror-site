<?php
/*
Template Name: Manufacturing Page
*/
get_header();
$process_steps = mirrorcraft_get_process_steps();

$quality_cards = array(
  array(
    'title' => __('Incoming material review', 'mirrorcraft'),
    'text'  => __('Mirror glass, frames, cabinet accessories, lighting components, and key fittings are reviewed before they move into production flow.', 'mirrorcraft'),
  ),
  array(
    'title' => __('In-process inspection', 'mirrorcraft'),
    'text'  => __('Assembly, alignment, finish consistency, and feature fit are checked during production instead of waiting until the final stage.', 'mirrorcraft'),
  ),
  array(
    'title' => __('Function and packing checks', 'mirrorcraft'),
    'text'  => __('Lighting behavior, control response, anti-fog performance, surface protection, and export packing readiness are reviewed before shipment.', 'mirrorcraft'),
  ),
);

$workflow_points = array(
  __('OEM and ODM projects usually start from a target product route, not just a style request.', 'mirrorcraft'),
  __('Sample confirmation helps align size, finish, feature mix, and packaging expectations before bulk production.', 'mirrorcraft'),
  __('Inspection and packing matter because project supply is judged by repeatability, not just by the first sample.', 'mirrorcraft'),
  __('Export delivery support depends on clear product definition, stable follow-through, and buyer-ready communication.', 'mirrorcraft'),
);
?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <section class="page-hero">
      <div class="shell page-hero-shell">
        <div class="page-hero-copy">
          <?php mirrorcraft_render_breadcrumbs(); ?>
          <p class="eyebrow"><?php esc_html_e('Manufacturing', 'mirrorcraft'); ?></p>
          <h1><?php the_title(); ?></h1>
          <p class="hero-lead"><?php echo esc_html(mirrorcraft_get_page_summary(get_the_ID(), __('See how OJMIRROR approaches manufacturing, inspection, packing, and export follow-through for LED bathroom mirrors, lighted medicine cabinets, and custom mirror programs.', 'mirrorcraft'))); ?></p>
        </div>
        <aside class="page-hero-aside">
          <span class="feature-tag"><?php esc_html_e('What buyers usually need to know', 'mirrorcraft'); ?></span>
          <ul class="feature-list">
            <li><?php esc_html_e('How samples connect to production approval', 'mirrorcraft'); ?></li>
            <li><?php esc_html_e('What gets checked before shipment', 'mirrorcraft'); ?></li>
            <li><?php esc_html_e('How packing and export readiness are handled', 'mirrorcraft'); ?></li>
            <li><?php esc_html_e('Which details should be clarified before quotation', 'mirrorcraft'); ?></li>
          </ul>
        </aside>
      </div>
    </section>

    <section class="section section-alt">
      <div class="shell section-heading">
        <p class="eyebrow"><?php esc_html_e('Quality Control', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('The manufacturing story should explain control points, not just say “factory”.', 'mirrorcraft'); ?></h2>
      </div>
      <div class="shell card-grid card-grid-three">
        <?php foreach ($quality_cards as $card) : ?>
          <article class="statement-card">
            <h3><?php echo esc_html($card['title']); ?></h3>
            <p><?php echo esc_html($card['text']); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="section">
      <div class="shell section-heading">
        <p class="eyebrow"><?php esc_html_e('Development Route', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('Move from product brief to shipment with one connected workflow.', 'mirrorcraft'); ?></h2>
      </div>
      <div class="shell process-grid">
        <?php foreach (array_slice($process_steps, 0, 4) as $index => $step) : ?>
          <article class="process-card">
            <span class="process-step"><?php echo esc_html(sprintf('%02d', $index + 1)); ?></span>
            <h3><?php echo esc_html($step['title']); ?></h3>
            <p><?php echo esc_html($step['text']); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="section section-alt">
      <div class="shell capability-shell">
        <div class="section-heading">
          <p class="eyebrow"><?php esc_html_e('Workflow', 'mirrorcraft'); ?></p>
          <h2><?php esc_html_e('A production route buyers can understand.', 'mirrorcraft'); ?></h2>
          <p class="section-copy"><?php esc_html_e('Manufacturing pages work best when they explain how decisions move from brief to sample to production to packing, instead of relying on generic factory language.', 'mirrorcraft'); ?></p>
        </div>
        <div class="entry-card">
          <ul class="feature-list">
            <?php foreach ($workflow_points as $point) : ?>
              <li><?php echo esc_html($point); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </section>

    <?php mirrorcraft_render_editor_content_section(array('section_class' => 'editor-bridge-section')); ?>

    <section class="section section-tight">
      <div class="shell cta-shell">
        <div class="cta-card">
          <div>
            <p class="eyebrow"><?php esc_html_e('Next Step', 'mirrorcraft'); ?></p>
            <h2><?php esc_html_e('Share the product route and quality expectations behind your order.', 'mirrorcraft'); ?></h2>
            <p><?php esc_html_e('If you need sample planning, compliance alignment, or export packaging support, send the brief and we can discuss the most workable manufacturing route.', 'mirrorcraft'); ?></p>
          </div>
          <div class="button-row">
            <a class="button button-primary" href="<?php echo esc_url(mirrorcraft_link_by_slug('contact', '/contact/')); ?>"><?php esc_html_e('Request a Quote', 'mirrorcraft'); ?></a>
          </div>
        </div>
      </div>
    </section>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
