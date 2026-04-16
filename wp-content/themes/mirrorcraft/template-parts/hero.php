<?php
$eyebrow = mirrorcraft_default_text('hero_eyebrow', 'LED Bathroom Mirrors & Medicine Cabinets');
$title = mirrorcraft_default_text('hero_title', 'Project-Ready Mirror Solutions for Hospitality, Commercial, Multifamily, Healthcare, and Senior Living');
$text = mirrorcraft_default_text('hero_text', 'OJMIRROR helps architects, designers, purchasers, and facilities teams source LED bathroom mirrors and medicine cabinets with practical lighting, storage, and specification support.');
$primary_label = mirrorcraft_default_text('hero_primary_button_text', 'Explore Products');
$primary_link  = mirrorcraft_default_text('hero_primary_button_link', mirrorcraft_link_by_slug('products', '/products'));
$secondary_label = mirrorcraft_default_text('hero_secondary_button_text', 'Request a Quote');
$secondary_link  = mirrorcraft_default_text('hero_secondary_button_link', mirrorcraft_link_by_slug('contact', '/contact'));
$hero_background_url = mirrorcraft_get_active_hero_image_url();
$hero_background_srcset = mirrorcraft_get_active_hero_image_srcset();
?>
<section class="section hero-section hero-showcase">
  <div class="shell hero-shell hero-shell-cinematic">
    <?php if ($hero_background_url) : ?>
      <div class="hero-media hero-media-cinematic" aria-hidden="true">
        <img
          src="<?php echo esc_url($hero_background_url); ?>"
          alt=""
          width="1600"
          height="900"
          fetchpriority="high"
          loading="eager"
          decoding="async"
          sizes="100vw"
          <?php if ($hero_background_srcset) : ?>srcset="<?php echo esc_attr($hero_background_srcset); ?>"<?php endif; ?>
        >
      </div>
    <?php endif; ?>

    <div class="hero-media-overlay hero-media-overlay-cinematic" aria-hidden="true"></div>

    <div class="hero-grid hero-grid-cinematic">
      <div class="hero-copy hero-copy-cinematic">
        <p class="eyebrow"><?php echo esc_html($eyebrow); ?></p>
        <h1><?php echo esc_html($title); ?></h1>
        <p class="section-copy"><?php echo esc_html($text); ?></p>

        <div class="button-row hero-button-row-cinematic">
          <a class="button button-primary" href="<?php echo esc_url($primary_link); ?>"><?php echo esc_html($primary_label); ?></a>
          <a class="button button-outline" href="<?php echo esc_url($secondary_link); ?>"><?php echo esc_html($secondary_label); ?></a>
        </div>
      </div>
    </div>
  </div>
</section>
