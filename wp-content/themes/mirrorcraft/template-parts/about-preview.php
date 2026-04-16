<?php
$eyebrow = mirrorcraft_default_text('about_preview_eyebrow', 'About OJMIRROR');
$title = mirrorcraft_default_text('about_preview_title', 'Who We Are');
$text  = mirrorcraft_default_text('about_preview_text', 'OJMIRROR develops LED bathroom mirrors and medicine cabinets for hospitality, commercial, multifamily, healthcare, and senior living projects.');
$button_label = mirrorcraft_default_text('about_preview_button_text', 'Learn More');
$button_link  = mirrorcraft_default_text('about_preview_button_link', mirrorcraft_link_by_slug('about', '/about'));
$video_url = mirrorcraft_default_text('about_preview_video_url', 'https://www.youtube.com/watch?v=c2h3nWBracQ');
$video_embed_url = mirrorcraft_get_youtube_embed_url($video_url);
$about_points = mirrorcraft_get_text_items_from_rows(
  mirrorcraft_get_rows(
    'about_preview_points',
    array(
      array('item_text' => __('Product focus on LED bathroom mirrors and lighted medicine cabinets', 'mirrorcraft')),
      array('item_text' => __('Support for architects, designers, purchasers, and facilities teams', 'mirrorcraft')),
      array('item_text' => __('Sample, specification, and production coordination for project-driven work', 'mirrorcraft')),
      array('item_text' => __('OEM / ODM and custom development for project-specific requirements', 'mirrorcraft')),
    )
  )
);
$about_metrics = mirrorcraft_get_stat_items_from_rows(
  mirrorcraft_get_rows(
    'about_preview_metrics',
    array(
      array('value' => __('Project Ready', 'mirrorcraft'), 'label' => __('Workflow focus', 'mirrorcraft')),
      array('value' => mirrorcraft_get_contact_city_name(), 'label' => __('Manufacturing base', 'mirrorcraft')),
      array('value' => 'LED + Cabinet', 'label' => __('Core categories', 'mirrorcraft')),
      array('value' => __('Global B2B', 'mirrorcraft'), 'label' => __('Customer type', 'mirrorcraft')),
    )
  )
);
$company_eyebrow = mirrorcraft_default_text('about_preview_company_eyebrow', 'Company Overview');
$company_text = mirrorcraft_default_text('about_preview_company_text', 'We help project teams move from concept drawings and performance needs to workable mirror specifications, samples, and production planning.');
$video_eyebrow = mirrorcraft_default_text('about_preview_video_eyebrow', 'Factory Video');
$video_title = mirrorcraft_default_text('about_preview_video_title', 'See how OJMIRROR presents product quality and manufacturing capability');
?>
<section id="about-preview" class="section section-alt">
  <div class="shell about-preview-stack">
    <div class="split-grid about-split align-center">
      <div class="about-copy">
        <p class="eyebrow"><?php echo esc_html($eyebrow); ?></p>
        <h2><?php echo esc_html($title); ?></h2>
        <p class="section-copy"><?php echo esc_html($text); ?></p>
        <ul class="feature-list spec-list">
          <?php foreach ($about_points as $item) : ?>
            <li><?php echo esc_html($item); ?></li>
          <?php endforeach; ?>
        </ul>
        <a class="button button-primary" href="<?php echo esc_url($button_link); ?>"><?php echo esc_html($button_label); ?></a>
      </div>
      <div class="visual-panel about-panel">
        <p class="eyebrow"><?php echo esc_html($company_eyebrow); ?></p>
        <div class="stats-grid about-metrics">
          <?php foreach ($about_metrics as $metric) : ?>
            <article class="stat-card">
              <strong class="stat-value"><?php echo esc_html($metric['value']); ?></strong>
              <span class="stat-label"><?php echo esc_html($metric['label']); ?></span>
            </article>
          <?php endforeach; ?>
        </div>
        <p><?php echo esc_html($company_text); ?></p>
      </div>
    </div>
    <?php if ($video_embed_url) : ?>
      <div class="visual-panel about-video-panel">
        <div class="about-video-head">
          <p class="eyebrow"><?php echo esc_html($video_eyebrow); ?></p>
          <h3><?php echo esc_html($video_title); ?></h3>
        </div>
        <div class="about-video-frame">
          <iframe
            src="<?php echo esc_url($video_embed_url); ?>"
            title="<?php esc_attr_e('OJMIRROR video presentation', 'mirrorcraft'); ?>"
            loading="lazy"
            referrerpolicy="strict-origin-when-cross-origin"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
          ></iframe>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>
