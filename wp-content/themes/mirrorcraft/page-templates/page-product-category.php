<?php
/*
Template Name: Product Category Page
*/

if (!function_exists('mirrorcraft_render_products_page_icon')) {
  function mirrorcraft_render_products_page_icon($slug) {
    switch ($slug) {
      case 'eye':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" d="M2.5 12s3.5-5 9.5-5 9.5 5 9.5 5-3.5 5-9.5 5-9.5-5-9.5-5Z"/>
          <circle cx="12" cy="12" r="2.6" fill="none" stroke="currentColor" stroke-width="1.8"/>
        </svg>
        <?php
        break;
      case 'light':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M11 2h2v3h-2V2Zm6.95 2.46 1.41 1.41-2.12 2.12-1.41-1.41 2.12-2.12ZM4.64 4.64 6.76 6.76 5.34 8.17 3.22 6.05l1.42-1.41ZM12 6a6 6 0 0 0-3 11.2V20h6v-2.8A6 6 0 0 0 12 6Zm-2 15v-1h4v1h-4Z"/>
        </svg>
        <?php
        break;
      case 'cct':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" d="M6 8a6 6 0 1 1 6 8 4 4 0 1 0 4 4"/>
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" d="M18 18h3M19.5 16.5v3"/>
        </svg>
        <?php
        break;
      case 'clock':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <circle cx="12" cy="12" r="8.5" fill="none" stroke="currentColor" stroke-width="1.8"/>
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" d="M12 7.5v5l3.2 1.9"/>
        </svg>
        <?php
        break;
      case 'speaker':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" d="M4 14h3.5L12 18V6L7.5 10H4v4Z"/>
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" d="M15.5 9.5a4 4 0 0 1 0 5m2.4-7.3a7 7 0 0 1 0 9.6"/>
        </svg>
        <?php
        break;
      case 'anti-fog':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M7 6a5 5 0 0 1 10 0c0 2.5-2 3.7-3.2 4.8A3.3 3.3 0 0 0 13 13h-2a4.9 4.9 0 0 1 1.3-3.4C13.5 8.3 15 7.5 15 6a3 3 0 0 0-6 0H7Zm3 9h4v2h-4v-2Zm-2 4h8v2H8v-2Z"/>
        </svg>
        <?php
        break;
      case 'touch':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M9 11V6a1 1 0 0 1 2 0v4h1V4a1 1 0 1 1 2 0v6h1V5a1 1 0 1 1 2 0v8.5a5.5 5.5 0 0 1-11 0V10a1 1 0 0 1 2 0v1h1Z"/>
        </svg>
        <?php
        break;
      case 'shape':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <circle cx="7" cy="8" r="3.5" fill="none" stroke="currentColor" stroke-width="1.8"/>
          <rect x="13.5" y="4.5" width="6" height="7" rx="1.2" fill="none" stroke="currentColor" stroke-width="1.8"/>
          <rect x="5" y="14" width="14" height="5.5" rx="2.2" fill="none" stroke="currentColor" stroke-width="1.8"/>
        </svg>
        <?php
        break;
      case 'size':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" d="M4 7h16M4 17h16M7 4v16M17 4v16"/>
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" d="m4 7 2-2m-2 2 2 2m12-4 2 2m-2-2-2 2m4 10-2 2m2-2-2-2M6 19l-2-2m2 2-2-2"/>
        </svg>
        <?php
        break;
      case 'frame':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M4 4h16v16H4V4Zm2 2v12h12V6H6Zm2 2h8v8H8V8Z"/>
        </svg>
        <?php
        break;
      case 'branding':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M5 4h14a1 1 0 0 1 1 1v5H4V5a1 1 0 0 1 1-1Zm-1 8h16v7a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7Zm3 2v4h2v-4H7Zm4 0v4h6v-2h-4v-2h-2Z"/>
        </svg>
        <?php
        break;
      case 'commercial':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M3 21V7.5A1.5 1.5 0 0 1 4.5 6H11v15H3Zm10 0V3h6.5A1.5 1.5 0 0 1 21 4.5V21h-8Z"/>
        </svg>
        <?php
        break;
      case 'globe':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2Zm6.93 9h-3.17a15.7 15.7 0 0 0-1.07-4.39A8.05 8.05 0 0 1 18.93 11ZM12 4.07c.86 1.06 1.8 3.2 2.12 6.93H9.88C10.2 7.27 11.14 5.13 12 4.07ZM4.26 13h3.18a15.7 15.7 0 0 0 1.06 4.39A8.03 8.03 0 0 1 4.26 13Zm3.18-2H4.26a8.03 8.03 0 0 1 4.24-4.39A15.7 15.7 0 0 0 7.44 11Zm4.56 8.93c-.86-1.06-1.8-3.2-2.12-6.93h4.24c-.32 3.73-1.26 5.87-2.12 6.93ZM15.5 17.39A15.7 15.7 0 0 0 16.56 13h3.17a8.05 8.05 0 0 1-4.23 4.39Z"/>
        </svg>
        <?php
        break;
      case 'quote':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M7 3h8l4 4v14H7V3Zm2 2v14h8V8h-3V5H9Zm1 6h6v2h-6v-2Zm0 4h4v2h-4v-2Z"/>
        </svg>
        <?php
        break;
      case 'support':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 3a8 8 0 0 0-8 8v3a2 2 0 0 0 2 2h1v-5H6v-1a6 6 0 1 1 12 0v1h-1v5h1a2 2 0 0 0 2-2v-3a8 8 0 0 0-8-8Zm-5 9h2v5H7v-5Zm8 0h2v5h-2v-5Zm-6 8h6v2H9v-2Z"/>
        </svg>
        <?php
        break;
      default:
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <circle cx="12" cy="12" r="9" fill="none" stroke="currentColor" stroke-width="2"/>
        </svg>
        <?php
    }
  }
}

get_header();
?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <?php
    $page_slug = get_post_field('post_name', get_the_ID());
    $category = mirrorcraft_get_product_category_page_data($page_slug);
    $hero_image = mirrorcraft_get_product_category_image_url($category['image_key'] ?? (strpos($page_slug, 'cabinet') !== false ? 'medicine-cabinet' : 'bathroom-mirror'));
    ?>
    <?php if ('decorative-mirror' === $page_slug) : ?>
      <?php
      $dm_quote_url = mirrorcraft_link_by_slug('contact', '/contact/');
      $dm_primary_image = mirrorcraft_theme_image_first_available_url(array(
        'custom-mirrors-reference-20260422.png',
        'custom-mirrors-reference-20260422.webp',
        'retail-store-fitting-mirror.png',
      ));

      if ($dm_primary_image === '') {
        $dm_primary_image = $hero_image;
      }

      $dm_residential_image = mirrorcraft_theme_image_first_available_url(array('residential-led-bathroom-mirror.png', 'residential-led-bathroom-mirror.webp'));
      $dm_hotel_image = mirrorcraft_theme_image_first_available_url(array('hospitality-led-mirror-project.png', 'hospitality-led-mirror-project.webp'));
      $dm_retail_image = mirrorcraft_theme_image_first_available_url(array('retail-store-fitting-mirror.png', 'retail-store-fitting-mirror.webp'));
      $dm_salon_image = mirrorcraft_theme_image_first_available_url(array('beauty-salon-led-mirror.png', 'beauty-salon-led-mirror.webp'));
      $dm_real_estate_image = mirrorcraft_theme_image_first_available_url(array('real-estate-bathroom-mirror.png', 'real-estate-bathroom-mirror.webp'));
      $dm_healthcare_image = mirrorcraft_theme_image_first_available_url(array('healthcare-hospital-mirror.png', 'healthcare-hospital-mirror.webp'));
      $dm_senior_image = mirrorcraft_theme_image_first_available_url(array('senior-living-bathroom-mirror.png', 'senior-living-bathroom-mirror.webp'));
      $dm_shapes_image = mirrorcraft_theme_image_first_available_url(array('custom-solution-shapes-20260422.png', 'custom-solution-shapes-20260422.webp'));
      $dm_sizes_image = mirrorcraft_theme_image_first_available_url(array('custom-solution-sizes-20260422.png', 'custom-solution-sizes-20260422.webp'));
      $dm_frames_image = mirrorcraft_theme_image_first_available_url(array('custom-solution-frames-20260422.png', 'custom-solution-frames-20260422.webp'));
      $dm_edge_image = mirrorcraft_theme_image_first_available_url(array('custom-solution-edge-finishes-20260422.png', 'custom-solution-edge-finishes-20260422.webp'));
      $dm_workshop_image = mirrorcraft_theme_image_first_available_url(array('who-we-are-workshop.png', 'who-we-are-workshop.webp', 'factory.png'));
      $dm_warehouse_image = mirrorcraft_theme_image_first_available_url(array('who-we-are-warehouse.png', 'who-we-are-warehouse.webp'));

      $dm_scene_points = array(
        array('icon' => 'commercial', 'title' => __('Hotel Lobby', 'mirrorcraft')),
        array('icon' => 'globe', 'title' => __('Apartment & Villa', 'mirrorcraft')),
        array('icon' => 'branding', 'title' => __('Retail Store', 'mirrorcraft')),
        array('icon' => 'support', 'title' => __('Restaurant', 'mirrorcraft')),
        array('icon' => 'light', 'title' => __('Beauty Salon', 'mirrorcraft')),
        array('icon' => 'quote', 'title' => __('Showroom', 'mirrorcraft')),
      );

      $dm_type_cards = array(
        array('title' => __('1. Round Decorative Mirrors', 'mirrorcraft'), 'image' => $dm_primary_image),
        array('title' => __('2. Oval Decorative Mirrors', 'mirrorcraft'), 'image' => $dm_residential_image ?: $dm_primary_image),
        array('title' => __('3. Irregular Shape Mirrors', 'mirrorcraft'), 'image' => $dm_shapes_image ?: $dm_primary_image),
        array('title' => __('4. Metal Frame Mirrors', 'mirrorcraft'), 'image' => $dm_frames_image ?: $dm_primary_image),
        array('title' => __('5. Wood Frame Mirrors', 'mirrorcraft'), 'image' => $dm_real_estate_image ?: $dm_primary_image),
        array('title' => __('6. Antique Finish Mirrors', 'mirrorcraft'), 'image' => $dm_hotel_image ?: $dm_primary_image),
        array('title' => __('7. Wall Art Mirror Sets', 'mirrorcraft'), 'image' => $dm_retail_image ?: $dm_primary_image),
        array('title' => __('8. Custom Decorative Mirrors', 'mirrorcraft'), 'image' => $dm_edge_image ?: $dm_primary_image),
      );

      $dm_customize_points = array(
        array('icon' => 'shape', 'title' => __('Shape', 'mirrorcraft')),
        array('icon' => 'size', 'title' => __('Size', 'mirrorcraft')),
        array('icon' => 'frame', 'title' => __('Frame Material', 'mirrorcraft')),
        array('icon' => 'branding', 'title' => __('Frame Color', 'mirrorcraft')),
        array('icon' => 'eye', 'title' => __('Mirror Edge', 'mirrorcraft')),
        array('icon' => 'commercial', 'title' => __('Glass Thickness', 'mirrorcraft')),
        array('icon' => 'light', 'title' => __('Finish Style', 'mirrorcraft')),
        array('icon' => 'quote', 'title' => __('Packaging', 'mirrorcraft')),
      );

      $dm_finish_cards = array(
        array('title' => __('Brushed Metal', 'mirrorcraft'), 'image' => $dm_frames_image ?: $dm_primary_image),
        array('title' => __('Matte Black', 'mirrorcraft'), 'image' => $dm_edge_image ?: $dm_primary_image),
        array('title' => __('Champagne Gold', 'mirrorcraft'), 'image' => $dm_primary_image),
        array('title' => __('Antique Bronze', 'mirrorcraft'), 'image' => $dm_hotel_image ?: $dm_primary_image),
        array('title' => __('Natural Wood', 'mirrorcraft'), 'image' => $dm_real_estate_image ?: $dm_primary_image),
        array('title' => __('Polished Stainless Steel', 'mirrorcraft'), 'image' => $dm_sizes_image ?: $dm_primary_image),
      );

      $dm_project_cards = array(
        array('title' => __('Hospitality', 'mirrorcraft'), 'image' => $dm_hotel_image ?: $dm_primary_image),
        array('title' => __('Residential', 'mirrorcraft'), 'image' => $dm_residential_image ?: $dm_primary_image),
        array('title' => __('Commercial', 'mirrorcraft'), 'image' => $dm_retail_image ?: $dm_primary_image),
        array('title' => __('Retail', 'mirrorcraft'), 'image' => $dm_real_estate_image ?: $dm_primary_image),
        array('title' => __('Beauty & Wellness', 'mirrorcraft'), 'image' => $dm_salon_image ?: $dm_primary_image),
        array('title' => __('Real Estate Development', 'mirrorcraft'), 'image' => $dm_real_estate_image ?: $dm_primary_image),
      );

      $dm_b2b_points = array(
        array('icon' => 'branding', 'title' => __('OEM & ODM Services', 'mirrorcraft')),
        array('icon' => 'commercial', 'title' => __('Bulk Order Support', 'mirrorcraft')),
        array('icon' => 'quote', 'title' => __('Custom Packaging', 'mirrorcraft')),
        array('icon' => 'eye', 'title' => __('Strict QC', 'mirrorcraft')),
        array('icon' => 'globe', 'title' => __('Export Experience', 'mirrorcraft')),
        array('icon' => 'support', 'title' => __('Project Delivery', 'mirrorcraft')),
      );

      $dm_quality_cards = array(
        array('title' => __('Clear Reflection', 'mirrorcraft'), 'image' => $dm_primary_image),
        array('title' => __('Smooth Edge Processing', 'mirrorcraft'), 'image' => $dm_edge_image ?: $dm_primary_image),
        array('title' => __('Stable Frame Structure', 'mirrorcraft'), 'image' => $dm_frames_image ?: $dm_primary_image),
        array('title' => __('Moisture-Resistant Backing', 'mirrorcraft'), 'image' => $dm_sizes_image ?: $dm_primary_image),
        array('title' => __('Safe Packaging', 'mirrorcraft'), 'image' => $dm_warehouse_image ?: $dm_primary_image),
        array('title' => __('Consistent Batch Quality', 'mirrorcraft'), 'image' => $dm_workshop_image ?: $dm_primary_image),
      );
      ?>
      <style>
        .decorative-mirror-page {
          background: linear-gradient(180deg, #fffdfa 0%, #fff 38%, #faf5ee 100%);
        }

        .decorative-mirror-page h1,
        .decorative-mirror-page h2,
        .decorative-mirror-page h3 {
          font-family: Georgia, "Times New Roman", serif;
        }

        .decorative-mirror-hero {
          position: relative;
          padding: clamp(74px, 8vw, 112px) 0 clamp(64px, 7vw, 94px);
          background-image:
            linear-gradient(90deg, rgba(24, 18, 14, 0.82) 0%, rgba(27, 20, 15, 0.76) 38%, rgba(29, 22, 17, 0.26) 62%, rgba(29, 22, 17, 0.12) 100%),
            var(--decorative-hero-image);
          background-position: center;
          background-size: cover;
          background-repeat: no-repeat;
        }

        .decorative-mirror-hero__shell {
          min-height: 500px;
          display: grid;
          align-items: center;
        }

        .decorative-mirror-hero__copy {
          display: grid;
          gap: 20px;
          max-width: 36rem;
          color: #fff8f0;
        }

        .decorative-mirror-hero__copy h1,
        .decorative-mirror-section__head h2,
        .decorative-mirror-intro__copy h2,
        .decorative-mirror-customize__copy h2,
        .decorative-mirror-band__copy h2,
        .decorative-mirror-cta__copy h2 {
          margin: 0;
          font-weight: 700;
          letter-spacing: -0.04em;
        }

        .decorative-mirror-hero__copy h1 {
          font-size: var(--mirrorcraft-display-hero-size, clamp(3.45rem, 4.6vw, 5.45rem));
          line-height: var(--mirrorcraft-display-hero-line, 0.9);
          max-width: 34rem;
        }

        .decorative-mirror-hero__copy p {
          margin: 0;
          max-width: 31rem;
          color: rgba(255, 245, 236, 0.88);
          font-size: 1.04rem;
          line-height: 1.84;
        }

        .decorative-mirror-hero__actions,
        .decorative-mirror-cta__actions {
          display: flex;
          flex-wrap: wrap;
          gap: 14px;
        }

        .decorative-mirror-section {
          padding: clamp(42px, 6vw, 74px) 0;
        }

        .decorative-mirror-section--soft {
          background: linear-gradient(180deg, rgba(252, 247, 240, 0.88) 0%, rgba(255, 255, 255, 0.98) 100%);
        }

        .decorative-mirror-intro {
          display: grid;
          grid-template-columns: minmax(260px, 0.64fr) minmax(0, 1.36fr);
          gap: clamp(22px, 4vw, 34px);
          align-items: center;
        }

        .decorative-mirror-intro__copy,
        .decorative-mirror-customize__copy,
        .decorative-mirror-band__copy,
        .decorative-mirror-cta__copy {
          display: grid;
          gap: 18px;
        }

        .decorative-mirror-intro__copy p,
        .decorative-mirror-band__copy p,
        .decorative-mirror-cta__copy p {
          margin: 0;
          color: var(--muted);
          line-height: 1.84;
        }

        .decorative-mirror-scene-grid {
          display: grid;
          grid-template-columns: repeat(6, minmax(0, 1fr));
          gap: 16px;
        }

        .decorative-mirror-scene {
          display: grid;
          gap: 12px;
          justify-items: center;
          text-align: center;
          padding: 16px 10px;
        }

        .decorative-mirror-scene__icon,
        .decorative-mirror-customize__icon,
        .decorative-mirror-band__icon {
          display: inline-flex;
          align-items: center;
          justify-content: center;
          width: 50px;
          height: 50px;
          border-radius: 999px;
          background: rgba(197, 147, 79, 0.11);
          color: #c5934f;
        }

        .decorative-mirror-scene__icon svg,
        .decorative-mirror-customize__icon svg,
        .decorative-mirror-band__icon svg {
          width: 24px;
          height: 24px;
        }

        .decorative-mirror-scene h3,
        .decorative-mirror-type__body h3,
        .decorative-mirror-finish__body h3,
        .decorative-mirror-project__body h3,
        .decorative-mirror-band__point h3,
        .decorative-mirror-quality__body h3 {
          margin: 0;
          font-size: 1rem;
          line-height: 1.35;
        }

        .decorative-mirror-section__head {
          display: grid;
          gap: 10px;
          margin-bottom: 28px;
          text-align: center;
        }

        .decorative-mirror-section__head h2,
        .decorative-mirror-intro__copy h2,
        .decorative-mirror-customize__copy h2,
        .decorative-mirror-band__copy h2,
        .decorative-mirror-cta__copy h2 {
          font-size: clamp(2rem, 3vw, 3rem);
          line-height: 1.08;
        }

        .decorative-mirror-type-grid,
        .decorative-mirror-finish-grid,
        .decorative-mirror-project-grid,
        .decorative-mirror-quality-grid {
          display: grid;
          gap: 16px;
        }

        .decorative-mirror-type-grid {
          grid-template-columns: repeat(8, minmax(0, 1fr));
        }

        .decorative-mirror-type,
        .decorative-mirror-finish,
        .decorative-mirror-project,
        .decorative-mirror-quality {
          overflow: hidden;
          border-radius: 22px;
          border: 1px solid rgba(29, 22, 17, 0.08);
          background: #fff;
          box-shadow: 0 16px 34px rgba(24, 18, 13, 0.05);
        }

        .decorative-mirror-type__media,
        .decorative-mirror-finish__media,
        .decorative-mirror-project__media,
        .decorative-mirror-quality__media,
        .decorative-mirror-customize__media,
        .decorative-mirror-cta__panel {
          overflow: hidden;
          background: #f3ece1;
        }

        .decorative-mirror-type__media {
          aspect-ratio: 1 / 1.1;
        }

        .decorative-mirror-finish__media {
          aspect-ratio: 16 / 7;
        }

        .decorative-mirror-project__media,
        .decorative-mirror-quality__media {
          aspect-ratio: 16 / 11;
        }

        .decorative-mirror-type__media img,
        .decorative-mirror-finish__media img,
        .decorative-mirror-project__media img,
        .decorative-mirror-quality__media img,
        .decorative-mirror-customize__media img {
          display: block;
          width: 100%;
          height: 100%;
          object-fit: cover;
        }

        .decorative-mirror-type__body,
        .decorative-mirror-finish__body,
        .decorative-mirror-project__body,
        .decorative-mirror-quality__body {
          display: grid;
          gap: 8px;
          padding: 14px 12px 16px;
          text-align: center;
        }

        .decorative-mirror-customize {
          display: grid;
          grid-template-columns: minmax(250px, 0.78fr) minmax(0, 0.96fr) minmax(260px, 0.76fr);
          gap: clamp(20px, 4vw, 34px);
          align-items: center;
        }

        .decorative-mirror-customize__grid {
          display: grid;
          grid-template-columns: repeat(4, minmax(0, 1fr));
          gap: 16px 14px;
        }

        .decorative-mirror-customize__item {
          display: grid;
          gap: 10px;
          justify-items: center;
          text-align: center;
          padding: 14px 10px;
        }

        .decorative-mirror-customize__media {
          border-radius: 26px;
          min-height: 320px;
          box-shadow: 0 20px 42px rgba(24, 18, 13, 0.08);
        }

        .decorative-mirror-finish-grid,
        .decorative-mirror-project-grid,
        .decorative-mirror-quality-grid {
          grid-template-columns: repeat(6, minmax(0, 1fr));
        }

        .decorative-mirror-band {
          display: grid;
          grid-template-columns: minmax(260px, 0.52fr) minmax(0, 1.48fr);
          overflow: hidden;
          border-radius: 26px;
          background: linear-gradient(135deg, #24201c 0%, #171310 100%);
          color: #fff7ef;
          box-shadow: 0 22px 48px rgba(22, 18, 14, 0.12);
        }

        .decorative-mirror-band__copy {
          padding: clamp(28px, 5vw, 46px);
        }

        .decorative-mirror-band__copy p {
          color: rgba(255, 244, 235, 0.8);
        }

        .decorative-mirror-band__points {
          display: grid;
          grid-template-columns: repeat(6, minmax(0, 1fr));
          gap: 0;
        }

        .decorative-mirror-band__point {
          display: grid;
          gap: 12px;
          justify-items: center;
          text-align: center;
          padding: 22px 14px;
          border-left: 1px solid rgba(255, 244, 235, 0.1);
        }

        .decorative-mirror-band__point h3 {
          color: #fff7ef;
        }

        .decorative-mirror-cta {
          padding-bottom: clamp(42px, 6vw, 76px);
        }

        .decorative-mirror-cta__panel {
          position: relative;
          display: grid;
          grid-template-columns: minmax(260px, 0.88fr) minmax(0, 1.12fr);
          min-height: 290px;
          background-image:
            linear-gradient(90deg, rgba(28, 20, 15, 0.9) 0%, rgba(28, 20, 15, 0.76) 42%, rgba(28, 20, 15, 0.22) 100%),
            var(--decorative-cta-image);
          background-position: center;
          background-size: cover;
          background-repeat: no-repeat;
          box-shadow: 0 24px 52px rgba(22, 18, 14, 0.12);
        }

        .decorative-mirror-cta__copy,
        .decorative-mirror-cta__buttons {
          position: relative;
          z-index: 2;
          padding: clamp(28px, 5vw, 50px);
        }

        .decorative-mirror-cta__copy {
          color: #fff8f0;
        }

        .decorative-mirror-cta__copy p {
          color: rgba(255, 245, 236, 0.84);
          max-width: 30rem;
        }

        .decorative-mirror-cta__buttons {
          display: grid;
          align-content: center;
          gap: 14px;
          justify-content: end;
        }

        @media (max-width: 1200px) {
          .decorative-mirror-intro,
          .decorative-mirror-customize,
          .decorative-mirror-band,
          .decorative-mirror-cta__panel {
            grid-template-columns: 1fr;
          }

          .decorative-mirror-scene-grid,
          .decorative-mirror-type-grid,
          .decorative-mirror-finish-grid,
          .decorative-mirror-project-grid,
          .decorative-mirror-band__points,
          .decorative-mirror-quality-grid {
            grid-template-columns: repeat(3, minmax(0, 1fr));
          }

          .decorative-mirror-customize__grid {
            grid-template-columns: repeat(4, minmax(0, 1fr));
          }
        }

        @media (max-width: 760px) {
          .decorative-mirror-scene-grid,
          .decorative-mirror-type-grid,
          .decorative-mirror-customize__grid,
          .decorative-mirror-finish-grid,
          .decorative-mirror-project-grid,
          .decorative-mirror-band__points,
          .decorative-mirror-quality-grid {
            grid-template-columns: 1fr;
          }

          .decorative-mirror-hero__actions .button,
          .decorative-mirror-cta__actions .button,
          .decorative-mirror-cta__buttons .button {
            width: 100%;
          }
        }
      </style>

      <div class="decorative-mirror-page">
        <section class="decorative-mirror-hero" style="--decorative-hero-image: url('<?php echo esc_url($dm_primary_image); ?>');">
          <div class="shell decorative-mirror-hero__shell">
            <div class="decorative-mirror-hero__copy">
              <h1><?php esc_html_e('Decorative Mirrors for Stylish Commercial & Residential Spaces', 'mirrorcraft'); ?></h1>
              <p><?php esc_html_e('Custom decorative mirror solutions with elegant shapes, premium finishes, and project-ready manufacturing support.', 'mirrorcraft'); ?></p>
              <div class="decorative-mirror-hero__actions">
                <a class="button button-primary" href="<?php echo esc_url($dm_quote_url); ?>"><?php esc_html_e('Request Custom Quote', 'mirrorcraft'); ?></a>
                <a class="button button-secondary" href="#decorative-mirror-options"><?php esc_html_e('View Mirror Options', 'mirrorcraft'); ?></a>
              </div>
            </div>
          </div>
        </section>

        <section class="decorative-mirror-section">
          <div class="shell decorative-mirror-intro">
            <div class="decorative-mirror-intro__copy">
              <h2><?php esc_html_e('More Than Reflection — A Design Statement', 'mirrorcraft'); ?></h2>
              <p><?php esc_html_e('Decorative mirrors are designed to enhance interior style, expand visual space, and create focal points for modern projects.', 'mirrorcraft'); ?></p>
            </div>
            <div class="decorative-mirror-scene-grid">
              <?php foreach ($dm_scene_points as $point) : ?>
                <article class="decorative-mirror-scene">
                  <span class="decorative-mirror-scene__icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($point['icon']); ?></span>
                  <h3><?php echo esc_html($point['title']); ?></h3>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="decorative-mirror-section decorative-mirror-section--soft" id="decorative-mirror-options">
          <div class="shell">
            <div class="decorative-mirror-section__head">
              <h2><?php esc_html_e('Decorative Mirror Types', 'mirrorcraft'); ?></h2>
            </div>
            <div class="decorative-mirror-type-grid">
              <?php foreach ($dm_type_cards as $card) : ?>
                <article class="decorative-mirror-type">
                  <div class="decorative-mirror-type__media">
                    <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
                  </div>
                  <div class="decorative-mirror-type__body">
                    <h3><?php echo esc_html($card['title']); ?></h3>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="decorative-mirror-section">
          <div class="shell decorative-mirror-customize">
            <div class="decorative-mirror-customize__copy">
              <h2><?php esc_html_e('Fully Customizable for Your Project', 'mirrorcraft'); ?></h2>
            </div>
            <div class="decorative-mirror-customize__grid">
              <?php foreach ($dm_customize_points as $point) : ?>
                <article class="decorative-mirror-customize__item">
                  <span class="decorative-mirror-customize__icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($point['icon']); ?></span>
                  <h3><?php echo esc_html($point['title']); ?></h3>
                </article>
              <?php endforeach; ?>
            </div>
            <div class="decorative-mirror-customize__media">
              <img src="<?php echo esc_url($dm_primary_image); ?>" alt="<?php esc_attr_e('Decorative mirror customization preview', 'mirrorcraft'); ?>" loading="lazy" decoding="async">
            </div>
          </div>
        </section>

        <section class="decorative-mirror-section decorative-mirror-section--soft">
          <div class="shell">
            <div class="decorative-mirror-section__head">
              <h2><?php esc_html_e('Materials & Finishes', 'mirrorcraft'); ?></h2>
            </div>
            <div class="decorative-mirror-finish-grid">
              <?php foreach ($dm_finish_cards as $card) : ?>
                <article class="decorative-mirror-finish">
                  <div class="decorative-mirror-finish__media">
                    <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
                  </div>
                  <div class="decorative-mirror-finish__body">
                    <h3><?php echo esc_html($card['title']); ?></h3>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="decorative-mirror-section">
          <div class="shell decorative-mirror-intro">
            <div class="decorative-mirror-intro__copy">
              <h2><?php esc_html_e('Designed for Multiple Interior Projects', 'mirrorcraft'); ?></h2>
            </div>
            <div class="decorative-mirror-project-grid">
              <?php foreach ($dm_project_cards as $card) : ?>
                <article class="decorative-mirror-project">
                  <div class="decorative-mirror-project__media">
                    <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
                  </div>
                  <div class="decorative-mirror-project__body">
                    <h3><?php echo esc_html($card['title']); ?></h3>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="decorative-mirror-section decorative-mirror-section--soft">
          <div class="shell decorative-mirror-band">
            <div class="decorative-mirror-band__copy">
              <h2><?php esc_html_e('Built for B2B Decorative Mirror Projects', 'mirrorcraft'); ?></h2>
              <p><?php esc_html_e('From design sampling to bulk production, we support global buyers with stable quality, flexible customization, and secure export packaging.', 'mirrorcraft'); ?></p>
              <div class="decorative-mirror-cta__actions">
                <a class="button button-primary" href="<?php echo esc_url($dm_quote_url); ?>"><?php esc_html_e('Learn More', 'mirrorcraft'); ?></a>
              </div>
            </div>
            <div class="decorative-mirror-band__points">
              <?php foreach ($dm_b2b_points as $point) : ?>
                <article class="decorative-mirror-band__point">
                  <span class="decorative-mirror-band__icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($point['icon']); ?></span>
                  <h3><?php echo esc_html($point['title']); ?></h3>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="decorative-mirror-section">
          <div class="shell">
            <div class="decorative-mirror-section__head">
              <h2><?php esc_html_e('Quality in Every Detail', 'mirrorcraft'); ?></h2>
            </div>
            <div class="decorative-mirror-quality-grid">
              <?php foreach ($dm_quality_cards as $card) : ?>
                <article class="decorative-mirror-quality">
                  <div class="decorative-mirror-quality__media">
                    <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
                  </div>
                  <div class="decorative-mirror-quality__body">
                    <h3><?php echo esc_html($card['title']); ?></h3>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="decorative-mirror-cta">
          <div class="shell">
            <div class="decorative-mirror-cta__panel" style="--decorative-cta-image: url('<?php echo esc_url($dm_hotel_image ?: $dm_primary_image); ?>');">
              <div class="decorative-mirror-cta__copy">
                <h2><?php esc_html_e('Looking for Custom Decorative Mirrors?', 'mirrorcraft'); ?></h2>
                <p><?php esc_html_e('Send us your design, size, quantity, or project requirements. Our team will help you develop a suitable mirror solution.', 'mirrorcraft'); ?></p>
              </div>
              <div class="decorative-mirror-cta__buttons">
                <a class="button button-primary" href="<?php echo esc_url($dm_quote_url); ?>"><?php esc_html_e('Contact Us', 'mirrorcraft'); ?></a>
                <a class="button button-secondary" href="<?php echo esc_url($dm_quote_url); ?>"><?php esc_html_e('Get a Quote', 'mirrorcraft'); ?></a>
              </div>
            </div>
          </div>
        </section>
      </div>
      <?php continue; ?>
    <?php endif; ?>

    <?php if ('antique-mirrors' === $page_slug) : ?>
      <?php
      $am_quote_url = mirrorcraft_link_by_slug('contact', '/contact/');
      $am_primary_image = mirrorcraft_theme_image_first_available_url(array(
        'retail-store-fitting-mirror.png',
        'retail-store-fitting-mirror.webp',
        'hospitality-led-mirror-project.png',
        'hospitality-led-mirror-project.webp',
      ));

      if ($am_primary_image === '') {
        $am_primary_image = $hero_image;
      }

      $am_hotel_image = mirrorcraft_theme_image_first_available_url(array('hospitality-led-mirror-project.png', 'hospitality-led-mirror-project.webp'));
      $am_residential_image = mirrorcraft_theme_image_first_available_url(array('residential-led-bathroom-mirror.png', 'residential-led-bathroom-mirror.webp'));
      $am_retail_image = mirrorcraft_theme_image_first_available_url(array('retail-store-fitting-mirror.png', 'retail-store-fitting-mirror.webp'));
      $am_salon_image = mirrorcraft_theme_image_first_available_url(array('beauty-salon-led-mirror.png', 'beauty-salon-led-mirror.webp'));
      $am_real_estate_image = mirrorcraft_theme_image_first_available_url(array('real-estate-bathroom-mirror.png', 'real-estate-bathroom-mirror.webp'));
      $am_healthcare_image = mirrorcraft_theme_image_first_available_url(array('healthcare-hospital-mirror.png', 'healthcare-hospital-mirror.webp'));
      $am_senior_image = mirrorcraft_theme_image_first_available_url(array('senior-living-bathroom-mirror.png', 'senior-living-bathroom-mirror.webp'));
      $am_custom_image = mirrorcraft_theme_image_first_available_url(array('custom-mirrors-reference-20260422.png', 'custom-mirrors-reference-20260422.webp'));
      $am_frames_image = mirrorcraft_theme_image_first_available_url(array('custom-solution-frames-20260422.png', 'custom-solution-frames-20260422.webp'));
      $am_edge_image = mirrorcraft_theme_image_first_available_url(array('custom-solution-edge-finishes-20260422.png', 'custom-solution-edge-finishes-20260422.webp'));

      $am_collection_cards = array(
        array('title' => __('Antique Framed Mirrors', 'mirrorcraft'), 'image' => $am_primary_image),
        array('title' => __('Vintage Gold Mirrors', 'mirrorcraft'), 'image' => $am_hotel_image ?: $am_primary_image),
        array('title' => __('Arched Antique Mirrors', 'mirrorcraft'), 'image' => $am_custom_image ?: $am_primary_image),
        array('title' => __('Decorative Wall Mirrors', 'mirrorcraft'), 'image' => $am_residential_image ?: $am_primary_image),
        array('title' => __('Antique Vanity Mirrors', 'mirrorcraft'), 'image' => $am_salon_image ?: $am_primary_image),
        array('title' => __('Custom Aged Mirrors', 'mirrorcraft'), 'image' => $am_edge_image ?: $am_primary_image),
      );

      $am_solution_points = array(
        array('icon' => 'size', 'title' => __('Custom size & shape', 'mirrorcraft')),
        array('icon' => 'frame', 'title' => __('Gold / bronze / black / brushed frame', 'mirrorcraft')),
        array('icon' => 'eye', 'title' => __('Aged mirror glass effect', 'mirrorcraft')),
        array('icon' => 'shape', 'title' => __('Arched, oval, round, irregular shapes', 'mirrorcraft')),
        array('icon' => 'branding', 'title' => __('Wall-mounted or vanity use', 'mirrorcraft')),
        array('icon' => 'support', 'title' => __('OEM / ODM project support', 'mirrorcraft')),
      );

      $am_project_cards = array(
        array('title' => __('Boutique Hotels', 'mirrorcraft'), 'image' => $am_hotel_image ?: $am_primary_image),
        array('title' => __('Luxury Villas', 'mirrorcraft'), 'image' => $am_residential_image ?: $am_primary_image),
        array('title' => __('Restaurants & Cafes', 'mirrorcraft'), 'image' => $am_retail_image ?: $am_primary_image),
        array('title' => __('Retail Stores', 'mirrorcraft'), 'image' => $am_retail_image ?: $am_primary_image),
        array('title' => __('Beauty Salons', 'mirrorcraft'), 'image' => $am_salon_image ?: $am_primary_image),
        array('title' => __('Interior Design Projects', 'mirrorcraft'), 'image' => $am_real_estate_image ?: $am_primary_image),
      );

      $am_detail_bullets = array(
        __('Decorative metal frame', 'mirrorcraft'),
        __('Antique surface finish', 'mirrorcraft'),
        __('Polished or beveled edge', 'mirrorcraft'),
        __('Stable back structure', 'mirrorcraft'),
        __('Moisture-resistant materials', 'mirrorcraft'),
        __('Project-level quality inspection', 'mirrorcraft'),
      );

      $am_b2b_points = array(
        array('icon' => 'commercial', 'title' => __('Bulk order support', 'mirrorcraft')),
        array('icon' => 'frame', 'title' => __('Custom sample development', 'mirrorcraft')),
        array('icon' => 'quote', 'title' => __('Stable production capacity', 'mirrorcraft')),
        array('icon' => 'branding', 'title' => __('Secure export packaging', 'mirrorcraft')),
        array('icon' => 'support', 'title' => __('Flexible design communication', 'mirrorcraft')),
        array('icon' => 'eye', 'title' => __('Quality control before shipment', 'mirrorcraft')),
      );
      ?>
      <style>
        .antique-mirror-page {
          background: linear-gradient(180deg, #fefaf4 0%, #fff 38%, #faf4ea 100%);
        }

        .antique-mirror-page h1,
        .antique-mirror-page h2,
        .antique-mirror-page h3 {
          font-family: Georgia, "Times New Roman", serif;
        }

        .antique-mirror-hero {
          position: relative;
          padding: clamp(76px, 9vw, 118px) 0 clamp(70px, 8vw, 106px);
          background-image:
            linear-gradient(90deg, rgba(27, 19, 14, 0.84) 0%, rgba(31, 22, 16, 0.76) 36%, rgba(34, 24, 17, 0.28) 62%, rgba(34, 24, 17, 0.14) 100%),
            var(--antique-hero-image);
          background-position: center;
          background-size: cover;
          background-repeat: no-repeat;
        }

        .antique-mirror-hero__shell {
          min-height: 520px;
          display: grid;
          align-items: center;
        }

        .antique-mirror-hero__copy {
          display: grid;
          gap: 20px;
          max-width: 34rem;
          color: #fff7f0;
        }

        .antique-mirror-hero__copy h1,
        .antique-mirror-section__head h2,
        .antique-mirror-intro__copy h2,
        .antique-mirror-details__copy h2,
        .antique-mirror-cta__copy h2 {
          margin: 0;
          font-weight: 700;
          letter-spacing: -0.04em;
        }

        .antique-mirror-hero__copy h1 {
          font-size: var(--mirrorcraft-display-hero-size, clamp(3.45rem, 4.6vw, 5.45rem));
          line-height: var(--mirrorcraft-display-hero-line, 0.9);
        }

        .antique-mirror-hero__copy p {
          margin: 0;
          max-width: 31rem;
          color: rgba(255, 244, 234, 0.88);
          font-size: 1.05rem;
          line-height: 1.84;
        }

        .antique-mirror-hero__actions,
        .antique-mirror-cta__actions {
          display: flex;
          flex-wrap: wrap;
          gap: 14px;
        }

        .antique-mirror-section {
          padding: clamp(44px, 6vw, 76px) 0;
        }

        .antique-mirror-section--soft {
          background: linear-gradient(180deg, rgba(251, 246, 238, 0.9) 0%, rgba(255, 255, 255, 0.98) 100%);
        }

        .antique-mirror-section__head {
          display: grid;
          gap: 10px;
          margin-bottom: 28px;
          text-align: center;
        }

        .antique-mirror-section__head h2,
        .antique-mirror-intro__copy h2,
        .antique-mirror-details__copy h2,
        .antique-mirror-cta__copy h2 {
          font-size: clamp(2rem, 3vw, 3rem);
          line-height: 1.08;
        }

        .antique-mirror-section__head::after,
        .antique-mirror-intro__copy::after,
        .antique-mirror-details__copy::after {
          content: "";
          display: block;
          width: 74px;
          height: 2px;
          margin: 0 auto;
          border-radius: 999px;
          background: linear-gradient(90deg, rgba(193, 145, 79, 0) 0%, #c1914f 48%, rgba(193, 145, 79, 0) 100%);
        }

        .antique-mirror-intro {
          display: grid;
          grid-template-columns: minmax(250px, 0.86fr) minmax(0, 1.14fr);
          gap: clamp(22px, 4vw, 34px);
          align-items: center;
        }

        .antique-mirror-intro__copy {
          display: grid;
          gap: 20px;
        }

        .antique-mirror-intro__copy::after,
        .antique-mirror-details__copy::after {
          margin-left: 0;
          margin-right: 0;
        }

        .antique-mirror-intro__copy p,
        .antique-mirror-details__copy p,
        .antique-mirror-cta__copy p {
          margin: 0;
          color: var(--muted);
          line-height: 1.86;
        }

        .antique-mirror-intro__media {
          display: grid;
          grid-template-columns: repeat(2, minmax(0, 1fr));
          gap: 16px;
        }

        .antique-mirror-intro__frame,
        .antique-mirror-collection__media,
        .antique-mirror-projects__media,
        .antique-mirror-details__image,
        .antique-mirror-cta__panel {
          overflow: hidden;
          border-radius: 24px;
          background: #efe5d8;
          box-shadow: 0 18px 38px rgba(26, 20, 14, 0.07);
        }

        .antique-mirror-intro__frame {
          aspect-ratio: 4 / 5;
        }

        .antique-mirror-intro__frame img,
        .antique-mirror-collection__media img,
        .antique-mirror-projects__media img,
        .antique-mirror-details__image img,
        .antique-mirror-cta__panel::before {
          display: block;
          width: 100%;
          height: 100%;
          object-fit: cover;
        }

        .antique-mirror-intro__frame img,
        .antique-mirror-collection__media img,
        .antique-mirror-projects__media img,
        .antique-mirror-details__image img {
          filter: sepia(0.36) saturate(0.86) brightness(0.96);
        }

        .antique-mirror-collection {
          display: grid;
          grid-template-columns: repeat(6, minmax(0, 1fr));
          gap: 16px;
        }

        .antique-mirror-collection__card,
        .antique-mirror-projects__card,
        .antique-mirror-b2b__item {
          overflow: hidden;
          border-radius: 22px;
          border: 1px solid rgba(31, 24, 18, 0.08);
          background: #fff;
          box-shadow: 0 16px 34px rgba(24, 18, 13, 0.05);
        }

        .antique-mirror-collection__media {
          aspect-ratio: 1 / 1.2;
        }

        .antique-mirror-collection__body,
        .antique-mirror-projects__body {
          display: grid;
          gap: 8px;
          padding: 16px 14px 18px;
          text-align: center;
        }

        .antique-mirror-collection__body h3,
        .antique-mirror-projects__body h3,
        .antique-mirror-b2b__item h3 {
          margin: 0;
          font-size: 1rem;
          line-height: 1.35;
        }

        .antique-mirror-solutions {
          display: grid;
          grid-template-columns: repeat(6, minmax(0, 1fr));
          gap: 16px;
        }

        .antique-mirror-solutions__item {
          display: grid;
          gap: 12px;
          justify-items: center;
          text-align: center;
          padding: 18px 12px;
        }

        .antique-mirror-solutions__icon,
        .antique-mirror-b2b__icon {
          display: inline-flex;
          align-items: center;
          justify-content: center;
          width: 52px;
          height: 52px;
          border-radius: 999px;
          background: rgba(193, 145, 79, 0.11);
          color: #c1914f;
        }

        .antique-mirror-solutions__icon svg,
        .antique-mirror-b2b__icon svg {
          width: 24px;
          height: 24px;
        }

        .antique-mirror-projects {
          display: grid;
          grid-template-columns: repeat(6, minmax(0, 1fr));
          gap: 14px;
        }

        .antique-mirror-projects__media {
          aspect-ratio: 16 / 11;
        }

        .antique-mirror-details {
          display: grid;
          grid-template-columns: minmax(250px, 0.82fr) minmax(0, 1.18fr);
          gap: clamp(22px, 4vw, 34px);
          align-items: stretch;
        }

        .antique-mirror-details__copy {
          display: grid;
          gap: 18px;
          padding: clamp(22px, 4vw, 34px);
          border-radius: 26px;
          background: linear-gradient(180deg, #fffdfa 0%, #fbf6ed 100%);
          box-shadow: 0 18px 38px rgba(24, 18, 13, 0.05);
        }

        .antique-mirror-details__list {
          display: grid;
          grid-template-columns: repeat(2, minmax(0, 1fr));
          gap: 10px 18px;
          margin: 0;
          padding: 0;
          list-style: none;
        }

        .antique-mirror-details__list li {
          position: relative;
          padding-left: 20px;
          color: var(--muted);
          line-height: 1.66;
        }

        .antique-mirror-details__list li::before {
          content: "✓";
          position: absolute;
          left: 0;
          top: 0;
          color: #c1914f;
          font-weight: 700;
        }

        .antique-mirror-details__gallery {
          display: grid;
          grid-template-columns: repeat(3, minmax(0, 1fr));
          gap: 14px;
        }

        .antique-mirror-details__image {
          aspect-ratio: 1 / 1;
        }

        .antique-mirror-b2b {
          display: grid;
          grid-template-columns: repeat(6, minmax(0, 1fr));
          gap: 16px;
        }

        .antique-mirror-b2b__item {
          display: grid;
          gap: 12px;
          justify-items: center;
          text-align: center;
          padding: 20px 14px;
        }

        .antique-mirror-cta {
          padding-bottom: clamp(42px, 6vw, 76px);
        }

        .antique-mirror-cta__panel {
          position: relative;
          display: grid;
          grid-template-columns: minmax(260px, 0.76fr) minmax(0, 1.24fr);
          min-height: 330px;
          background: #211813;
        }

        .antique-mirror-cta__panel::before {
          content: "";
          position: absolute;
          inset: 0;
          background-image:
            linear-gradient(90deg, rgba(25, 18, 13, 0.92) 0%, rgba(25, 18, 13, 0.78) 42%, rgba(25, 18, 13, 0.32) 100%),
            var(--antique-cta-image);
          background-position: center;
          background-size: cover;
          background-repeat: no-repeat;
        }

        .antique-mirror-cta__copy,
        .antique-mirror-cta__form-wrap {
          position: relative;
          z-index: 2;
          padding: clamp(28px, 5vw, 52px);
        }

        .antique-mirror-cta__copy {
          display: grid;
          gap: 18px;
          align-content: center;
          color: #fff7ef;
        }

        .antique-mirror-cta__copy p {
          max-width: 28rem;
          color: rgba(255, 244, 235, 0.84);
        }

        .antique-mirror-cta__form-wrap {
          display: grid;
          align-content: center;
        }

        .antique-mirror-cta__form {
          display: grid;
          grid-template-columns: repeat(2, minmax(0, 1fr));
          gap: 14px;
        }

        .antique-mirror-cta__form input,
        .antique-mirror-cta__form textarea {
          width: 100%;
          padding: 14px 16px;
          border-radius: 12px;
          border: 1px solid rgba(255, 244, 235, 0.22);
          background: rgba(18, 13, 10, 0.28);
          color: #fff7ef;
          font: inherit;
        }

        .antique-mirror-cta__form input::placeholder,
        .antique-mirror-cta__form textarea::placeholder {
          color: rgba(255, 244, 235, 0.58);
        }

        .antique-mirror-cta__form textarea {
          min-height: 108px;
          grid-column: 1 / -1;
          resize: vertical;
        }

        .antique-mirror-cta__form button {
          justify-self: start;
        }

        @media (max-width: 1200px) {
          .antique-mirror-intro,
          .antique-mirror-details,
          .antique-mirror-cta__panel {
            grid-template-columns: 1fr;
          }

          .antique-mirror-collection,
          .antique-mirror-solutions,
          .antique-mirror-projects,
          .antique-mirror-b2b {
            grid-template-columns: repeat(3, minmax(0, 1fr));
          }
        }

        @media (max-width: 760px) {
          .antique-mirror-intro__media,
          .antique-mirror-collection,
          .antique-mirror-solutions,
          .antique-mirror-projects,
          .antique-mirror-details__list,
          .antique-mirror-details__gallery,
          .antique-mirror-b2b,
          .antique-mirror-cta__form {
            grid-template-columns: 1fr;
          }

          .antique-mirror-hero__actions .button,
          .antique-mirror-cta__actions .button,
          .antique-mirror-cta__form button {
            width: 100%;
          }
        }
      </style>

      <div class="antique-mirror-page">
        <section class="antique-mirror-hero" style="--antique-hero-image: url('<?php echo esc_url($am_primary_image); ?>');">
          <div class="shell antique-mirror-hero__shell">
            <div class="antique-mirror-hero__copy">
              <h1><?php esc_html_e('Antique Mirrors', 'mirrorcraft'); ?></h1>
              <p><?php esc_html_e('Vintage-inspired mirrors with custom finishes for hospitality, residential, and commercial projects.', 'mirrorcraft'); ?></p>
              <div class="antique-mirror-hero__actions">
                <a class="button button-primary" href="<?php echo esc_url($am_quote_url); ?>"><?php esc_html_e('Request a Quote', 'mirrorcraft'); ?></a>
                <a class="button button-secondary" href="#antique-custom-options"><?php esc_html_e('Explore Custom Options', 'mirrorcraft'); ?></a>
              </div>
            </div>
          </div>
        </section>

        <section class="antique-mirror-section">
          <div class="shell antique-mirror-intro">
            <div class="antique-mirror-intro__copy">
              <h2><?php esc_html_e('Bring Timeless Character to Modern Spaces', 'mirrorcraft'); ?></h2>
              <p><?php esc_html_e('Antique mirrors combine aged finishes, decorative frames, and classic detailing to create a refined vintage atmosphere for hotels, villas, restaurants, retail spaces, and interior design projects.', 'mirrorcraft'); ?></p>
            </div>
            <div class="antique-mirror-intro__media">
              <div class="antique-mirror-intro__frame">
                <img src="<?php echo esc_url($am_custom_image ?: $am_primary_image); ?>" alt="<?php esc_attr_e('Antique mirror styled vanity scene', 'mirrorcraft'); ?>" loading="lazy" decoding="async">
              </div>
              <div class="antique-mirror-intro__frame">
                <img src="<?php echo esc_url($am_edge_image ?: $am_primary_image); ?>" alt="<?php esc_attr_e('Antique mirror frame close-up', 'mirrorcraft'); ?>" loading="lazy" decoding="async">
              </div>
            </div>
          </div>
        </section>

        <section class="antique-mirror-section antique-mirror-section--soft">
          <div class="shell">
            <div class="antique-mirror-section__head">
              <h2><?php esc_html_e('Explore Our Antique Mirror Collection', 'mirrorcraft'); ?></h2>
            </div>
            <div class="antique-mirror-collection">
              <?php foreach ($am_collection_cards as $card) : ?>
                <article class="antique-mirror-collection__card">
                  <div class="antique-mirror-collection__media">
                    <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
                  </div>
                  <div class="antique-mirror-collection__body">
                    <h3><?php echo esc_html($card['title']); ?></h3>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="antique-mirror-section" id="antique-custom-options">
          <div class="shell">
            <div class="antique-mirror-section__head">
              <h2><?php esc_html_e('Custom Antique Mirror Solutions', 'mirrorcraft'); ?></h2>
            </div>
            <div class="antique-mirror-solutions">
              <?php foreach ($am_solution_points as $point) : ?>
                <article class="antique-mirror-solutions__item">
                  <span class="antique-mirror-solutions__icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($point['icon']); ?></span>
                  <h3><?php echo esc_html($point['title']); ?></h3>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="antique-mirror-section antique-mirror-section--soft">
          <div class="shell">
            <div class="antique-mirror-section__head">
              <h2><?php esc_html_e('Designed for Premium Interior Projects', 'mirrorcraft'); ?></h2>
            </div>
            <div class="antique-mirror-projects">
              <?php foreach ($am_project_cards as $card) : ?>
                <article class="antique-mirror-projects__card">
                  <div class="antique-mirror-projects__media">
                    <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
                  </div>
                  <div class="antique-mirror-projects__body">
                    <h3><?php echo esc_html($card['title']); ?></h3>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="antique-mirror-section">
          <div class="shell antique-mirror-details">
            <div class="antique-mirror-details__copy">
              <h2><?php esc_html_e('Carefully Crafted Details', 'mirrorcraft'); ?></h2>
              <p><?php esc_html_e('From frame decoration to back structure, our antique mirrors are developed for project use with stable materials, aged surface treatments, and consistent finishing quality.', 'mirrorcraft'); ?></p>
              <ul class="antique-mirror-details__list">
                <?php foreach ($am_detail_bullets as $item) : ?>
                  <li><?php echo esc_html($item); ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
            <div class="antique-mirror-details__gallery">
              <div class="antique-mirror-details__image">
                <img src="<?php echo esc_url($am_edge_image ?: $am_primary_image); ?>" alt="<?php esc_attr_e('Antique frame detail close-up', 'mirrorcraft'); ?>" loading="lazy" decoding="async">
              </div>
              <div class="antique-mirror-details__image">
                <img src="<?php echo esc_url($am_frames_image ?: $am_primary_image); ?>" alt="<?php esc_attr_e('Antique aged surface effect detail', 'mirrorcraft'); ?>" loading="lazy" decoding="async">
              </div>
              <div class="antique-mirror-details__image">
                <img src="<?php echo esc_url($am_custom_image ?: $am_primary_image); ?>" alt="<?php esc_attr_e('Antique mirror structure detail', 'mirrorcraft'); ?>" loading="lazy" decoding="async">
              </div>
            </div>
          </div>
        </section>

        <section class="antique-mirror-section antique-mirror-section--soft">
          <div class="shell">
            <div class="antique-mirror-section__head">
              <h2><?php esc_html_e('Built for B2B Project Needs', 'mirrorcraft'); ?></h2>
            </div>
            <div class="antique-mirror-b2b">
              <?php foreach ($am_b2b_points as $point) : ?>
                <article class="antique-mirror-b2b__item">
                  <span class="antique-mirror-b2b__icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($point['icon']); ?></span>
                  <h3><?php echo esc_html($point['title']); ?></h3>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="antique-mirror-cta">
          <div class="shell">
            <div class="antique-mirror-cta__panel" style="--antique-cta-image: url('<?php echo esc_url($am_primary_image); ?>');">
              <div class="antique-mirror-cta__copy">
                <h2><?php esc_html_e('Looking for Custom Antique Mirrors for Your Project?', 'mirrorcraft'); ?></h2>
                <p><?php esc_html_e('Share your design concept, size, frame finish, and project quantity. Our team can help develop antique mirror solutions for your market or project needs.', 'mirrorcraft'); ?></p>
                <div class="antique-mirror-cta__actions">
                  <a class="button button-primary" href="<?php echo esc_url($am_quote_url); ?>"><?php esc_html_e('Get Custom Quote', 'mirrorcraft'); ?></a>
                  <a class="button button-secondary" href="<?php echo esc_url($am_quote_url); ?>"><?php esc_html_e('Contact Our Team', 'mirrorcraft'); ?></a>
                </div>
              </div>
              <div class="antique-mirror-cta__form-wrap">
                <form class="antique-mirror-cta__form" action="<?php echo esc_url($am_quote_url); ?>" method="get">
                  <input type="text" name="name" placeholder="<?php esc_attr_e('Name', 'mirrorcraft'); ?>">
                  <input type="email" name="email" placeholder="<?php esc_attr_e('Email', 'mirrorcraft'); ?>">
                  <input type="text" name="company" placeholder="<?php esc_attr_e('Company', 'mirrorcraft'); ?>">
                  <input type="text" name="project_type" placeholder="<?php esc_attr_e('Project Type', 'mirrorcraft'); ?>">
                  <textarea name="message" placeholder="<?php esc_attr_e('Message', 'mirrorcraft'); ?>"></textarea>
                  <button class="button button-primary" type="submit"><?php esc_html_e('Submit', 'mirrorcraft'); ?></button>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
      <?php continue; ?>
    <?php endif; ?>

    <?php if ('custom-mirrors' === $page_slug) : ?>
      <?php
      $cm_quote_url = mirrorcraft_link_by_slug('contact', '/contact/');
      $cm_primary_image = mirrorcraft_theme_image_first_available_url(array(
        'custom-mirrors-reference-20260422.png',
        'custom-mirrors-reference-20260422.webp',
        'real-estate-bathroom-mirror.png',
      ));

      if ($cm_primary_image === '') {
        $cm_primary_image = $hero_image;
      }

      $cm_residential_image = mirrorcraft_theme_image_first_available_url(array('residential-led-bathroom-mirror.png', 'residential-led-bathroom-mirror.webp'));
      $cm_hotel_image = mirrorcraft_theme_image_first_available_url(array('hospitality-led-mirror-project.png', 'hospitality-led-mirror-project.webp'));
      $cm_retail_image = mirrorcraft_theme_image_first_available_url(array('retail-store-fitting-mirror.png', 'retail-store-fitting-mirror.webp'));
      $cm_healthcare_image = mirrorcraft_theme_image_first_available_url(array('healthcare-hospital-mirror.png', 'healthcare-hospital-mirror.webp'));
      $cm_salon_image = mirrorcraft_theme_image_first_available_url(array('beauty-salon-led-mirror.png', 'beauty-salon-led-mirror.webp'));
      $cm_senior_image = mirrorcraft_theme_image_first_available_url(array('senior-living-bathroom-mirror.png', 'senior-living-bathroom-mirror.webp'));
      $cm_real_estate_image = mirrorcraft_theme_image_first_available_url(array('real-estate-bathroom-mirror.png', 'real-estate-bathroom-mirror.webp'));
      $cm_shapes_image = mirrorcraft_theme_image_first_available_url(array('custom-solution-shapes-20260422.png', 'custom-solution-shapes-20260422.webp'));
      $cm_sizes_image = mirrorcraft_theme_image_first_available_url(array('custom-solution-sizes-20260422.png', 'custom-solution-sizes-20260422.webp'));
      $cm_frames_image = mirrorcraft_theme_image_first_available_url(array('custom-solution-frames-20260422.png', 'custom-solution-frames-20260422.webp'));
      $cm_features_image = mirrorcraft_theme_image_first_available_url(array('custom-solution-features-20260422.png', 'custom-solution-features-20260422.webp'));
      $cm_edge_image = mirrorcraft_theme_image_first_available_url(array('custom-solution-edge-finishes-20260422.png', 'custom-solution-edge-finishes-20260422.webp'));
      $cm_workshop_image = mirrorcraft_theme_image_first_available_url(array('who-we-are-workshop.png', 'who-we-are-workshop.webp', 'factory.png'));
      $cm_warehouse_image = mirrorcraft_theme_image_first_available_url(array('who-we-are-warehouse.png', 'who-we-are-warehouse.webp'));

      $cm_detail_cards = array(
        array(
          'icon'  => 'shape',
          'title' => __('Shape', 'mirrorcraft'),
          'text'  => __('Round, oval, rectangle, arch, pill, and irregular custom shapes.', 'mirrorcraft'),
        ),
        array(
          'icon'  => 'size',
          'title' => __('Size', 'mirrorcraft'),
          'text'  => __('Standard sizes or project-specific dimensions for your exact installation needs.', 'mirrorcraft'),
        ),
        array(
          'icon'  => 'frame',
          'title' => __('Frame & Edge', 'mirrorcraft'),
          'text'  => __('Aluminum frame, stainless steel, bevel, polished edge, or frosted edge options.', 'mirrorcraft'),
        ),
        array(
          'icon'  => 'light',
          'title' => __('Functions', 'mirrorcraft'),
          'text'  => __('LED lighting, anti-fog, touch sensor, motion sensor, Bluetooth, and CCT control.', 'mirrorcraft'),
        ),
      );

      $cm_solution_cards = array(
        array('title' => __('Custom LED Bathroom Mirrors', 'mirrorcraft'), 'image' => $cm_primary_image),
        array('title' => __('Custom Vanity Mirrors', 'mirrorcraft'), 'image' => $cm_salon_image ?: $cm_primary_image),
        array('title' => __('Custom Framed Mirrors', 'mirrorcraft'), 'image' => $cm_frames_image ?: $cm_primary_image),
        array('title' => __('Custom Full-Length Mirrors', 'mirrorcraft'), 'image' => $cm_senior_image ?: $cm_primary_image),
        array('title' => __('Custom Medicine Cabinets', 'mirrorcraft'), 'image' => $cm_features_image ?: $cm_primary_image),
        array('title' => __('Custom Decorative Mirrors', 'mirrorcraft'), 'image' => $cm_shapes_image ?: $cm_primary_image),
      );

      $cm_process_steps = array(
        array('number' => '1', 'icon' => 'quote', 'title' => __('Send drawing / idea', 'mirrorcraft')),
        array('number' => '2', 'icon' => 'size', 'title' => __('Confirm size, shape and functions', 'mirrorcraft')),
        array('number' => '3', 'icon' => 'frame', 'title' => __('Sample development', 'mirrorcraft')),
        array('number' => '4', 'icon' => 'commercial', 'title' => __('Mass production', 'mirrorcraft')),
        array('number' => '5', 'icon' => 'eye', 'title' => __('Quality inspection', 'mirrorcraft')),
        array('number' => '6', 'icon' => 'branding', 'title' => __('Packaging & delivery', 'mirrorcraft')),
      );

      $cm_need_cards = array(
        array('title' => __('Hotels & Resorts', 'mirrorcraft'), 'image' => $cm_hotel_image ?: $cm_primary_image),
        array('title' => __('Apartments & Real Estate', 'mirrorcraft'), 'image' => $cm_real_estate_image ?: $cm_primary_image),
        array('title' => __('Commercial Washrooms', 'mirrorcraft'), 'image' => $cm_retail_image ?: $cm_primary_image),
        array('title' => __('Beauty Salons', 'mirrorcraft'), 'image' => $cm_salon_image ?: $cm_primary_image),
        array('title' => __('Retail Fitting Rooms', 'mirrorcraft'), 'image' => $cm_residential_image ?: $cm_primary_image),
        array('title' => __('Healthcare Facilities', 'mirrorcraft'), 'image' => $cm_healthcare_image ?: $cm_primary_image),
      );

      $cm_mfg_points = array(
        array('icon' => 'branding', 'title' => __('OEM & ODM Support', 'mirrorcraft')),
        array('icon' => 'commercial', 'title' => __('Stable Bulk Production', 'mirrorcraft')),
        array('icon' => 'shape', 'title' => __('Project-based Customization', 'mirrorcraft')),
        array('icon' => 'light', 'title' => __('CRI 95 Lighting Option', 'mirrorcraft')),
        array('icon' => 'anti-fog', 'title' => __('Anti-fog & Safety Backing', 'mirrorcraft')),
        array('icon' => 'quote', 'title' => __('Export Packaging', 'mirrorcraft')),
      );

      $cm_quote_fields = array(
        array('icon' => 'size', 'title' => __('Mirror Size', 'mirrorcraft'), 'hint' => __('e.g. 800x600mm', 'mirrorcraft')),
        array('icon' => 'shape', 'title' => __('Shape or Drawing', 'mirrorcraft'), 'hint' => __('Upload or describe', 'mirrorcraft')),
        array('icon' => 'commercial', 'title' => __('Quantity', 'mirrorcraft'), 'hint' => __('e.g. 100 pcs', 'mirrorcraft')),
        array('icon' => 'frame', 'title' => __('Frame Material', 'mirrorcraft'), 'hint' => __('e.g. Aluminum', 'mirrorcraft')),
        array('icon' => 'light', 'title' => __('Lighting Requirement', 'mirrorcraft'), 'hint' => __('e.g. Frontlit', 'mirrorcraft')),
        array('icon' => 'touch', 'title' => __('Function Requirement', 'mirrorcraft'), 'hint' => __('e.g. Anti-fog', 'mirrorcraft')),
        array('icon' => 'globe', 'title' => __('Project Country', 'mirrorcraft'), 'hint' => __('e.g. USA', 'mirrorcraft')),
        array('icon' => 'branding', 'title' => __('Packaging Requirement', 'mirrorcraft'), 'hint' => __('e.g. Carton-Foam', 'mirrorcraft')),
      );
      ?>
      <style>
        .custom-mirror-page {
          background: linear-gradient(180deg, #fffdfa 0%, #fff 40%, #faf5ee 100%);
        }

        .custom-mirror-hero {
          padding: clamp(40px, 5vw, 64px) 0 clamp(34px, 4vw, 52px);
          background: linear-gradient(180deg, #fffdfa 0%, #ffffff 100%);
        }

        .custom-mirror-hero__shell {
          display: grid;
          grid-template-columns: minmax(0, 1.02fr) minmax(0, 0.98fr);
          gap: clamp(18px, 3vw, 30px);
          align-items: stretch;
        }

        .custom-mirror-hero__visual,
        .custom-mirror-hero__panel {
          border-radius: 28px;
          overflow: hidden;
          box-shadow: 0 22px 46px rgba(26, 20, 14, 0.08);
        }

        .custom-mirror-hero__visual {
          background: #efe4d2;
          min-height: 520px;
        }

        .custom-mirror-hero__visual img,
        .custom-mirror-solutions__media img,
        .custom-mirror-needs__media img,
        .custom-mirror-mfg__stack img,
        .custom-mirror-cta__media img {
          display: block;
          width: 100%;
          height: 100%;
          object-fit: cover;
        }

        .custom-mirror-hero__panel {
          display: grid;
          grid-template-columns: minmax(0, 0.68fr) minmax(170px, 0.32fr);
          gap: 18px;
          padding: clamp(28px, 4vw, 40px);
          background: linear-gradient(135deg, #ffffff 0%, #fbf6ed 100%);
        }

        .custom-mirror-hero__copy {
          display: grid;
          gap: 18px;
          align-content: center;
        }

        .custom-mirror-hero__copy h1,
        .custom-mirror-section__head h2,
        .custom-mirror-feature-band__copy h2,
        .custom-mirror-quote__head h2,
        .custom-mirror-cta__copy h2 {
          margin: 0;
          font-weight: 800;
          letter-spacing: -0.045em;
        }

        .custom-mirror-hero__copy h1 {
          font-size: var(--mirrorcraft-display-hero-size, clamp(3.45rem, 4.6vw, 5.45rem));
          line-height: var(--mirrorcraft-display-hero-line, 0.9);
          max-width: 25rem;
        }

        .custom-mirror-hero__copy p {
          margin: 0;
          max-width: 24rem;
          color: var(--muted);
          font-size: 1.03rem;
          line-height: 1.84;
        }

        .custom-mirror-hero__actions {
          display: flex;
          flex-wrap: wrap;
          gap: 14px;
          padding-top: 4px;
        }

        .custom-mirror-hero__shapes {
          display: grid;
          grid-template-columns: repeat(2, minmax(0, 1fr));
          gap: 14px;
          align-content: center;
        }

        .custom-mirror-hero__shape {
          justify-self: center;
          width: 82px;
          height: 116px;
          border: 2px solid rgba(122, 114, 103, 0.45);
          background: rgba(255, 255, 255, 0.66);
        }

        .custom-mirror-hero__shape--round {
          width: 90px;
          height: 90px;
          border-radius: 999px;
        }

        .custom-mirror-hero__shape--oval {
          width: 82px;
          height: 108px;
          border-radius: 999px;
        }

        .custom-mirror-hero__shape--arch {
          border-top-left-radius: 999px;
          border-top-right-radius: 999px;
          border-bottom-left-radius: 18px;
          border-bottom-right-radius: 18px;
        }

        .custom-mirror-hero__shape--rectangle {
          border-radius: 14px;
        }

        .custom-mirror-hero__shape--irregular {
          border-radius: 44% 56% 60% 40% / 37% 44% 56% 63%;
          width: 94px;
          height: 84px;
        }

        .custom-mirror-hero__shape--pill {
          width: 74px;
          height: 124px;
          border-radius: 999px;
        }

        .custom-mirror-section {
          padding: clamp(42px, 6vw, 74px) 0;
        }

        .custom-mirror-section--soft {
          background: linear-gradient(180deg, rgba(252, 247, 240, 0.84) 0%, rgba(255, 255, 255, 0.98) 100%);
        }

        .custom-mirror-section__head,
        .custom-mirror-quote__head {
          display: grid;
          gap: 10px;
          margin-bottom: 28px;
          text-align: center;
        }

        .custom-mirror-section__head h2,
        .custom-mirror-feature-band__copy h2,
        .custom-mirror-quote__head h2,
        .custom-mirror-cta__copy h2 {
          font-size: clamp(1.95rem, 3vw, 2.95rem);
          line-height: 1.06;
        }

        .custom-mirror-detail-grid,
        .custom-mirror-process,
        .custom-mirror-quote__grid {
          display: grid;
          gap: 16px;
        }

        .custom-mirror-detail-grid {
          grid-template-columns: repeat(4, minmax(0, 1fr));
        }

        .custom-mirror-detail-card,
        .custom-mirror-solutions__card,
        .custom-mirror-needs__card,
        .custom-mirror-quote__field,
        .custom-mirror-process__item {
          border-radius: 24px;
          border: 1px solid rgba(29, 22, 17, 0.08);
          background: #fff;
          box-shadow: 0 18px 40px rgba(27, 20, 15, 0.05);
        }

        .custom-mirror-detail-card {
          display: grid;
          gap: 14px;
          justify-items: center;
          text-align: center;
          padding: 24px 18px;
        }

        .custom-mirror-detail-card__icon,
        .custom-mirror-process__icon,
        .custom-mirror-feature-band__point-icon,
        .custom-mirror-quote__icon {
          display: inline-flex;
          align-items: center;
          justify-content: center;
          width: 52px;
          height: 52px;
          border-radius: 999px;
          background: rgba(201, 153, 86, 0.11);
          color: #c99956;
        }

        .custom-mirror-detail-card__icon svg,
        .custom-mirror-process__icon svg,
        .custom-mirror-feature-band__point-icon svg,
        .custom-mirror-quote__icon svg {
          width: 24px;
          height: 24px;
        }

        .custom-mirror-detail-card h3,
        .custom-mirror-solutions__body h3,
        .custom-mirror-process__item h3,
        .custom-mirror-needs__body h3,
        .custom-mirror-quote__field strong {
          margin: 0;
          font-size: 1rem;
          line-height: 1.35;
        }

        .custom-mirror-detail-card p,
        .custom-mirror-feature-band__copy p,
        .custom-mirror-solutions__body p,
        .custom-mirror-needs__body p,
        .custom-mirror-quote__field span,
        .custom-mirror-cta__copy p {
          margin: 0;
          color: var(--muted);
          line-height: 1.72;
        }

        .custom-mirror-solutions {
          display: grid;
          grid-template-columns: repeat(6, minmax(0, 1fr));
          gap: 16px;
        }

        .custom-mirror-solutions__card,
        .custom-mirror-needs__card {
          overflow: hidden;
          display: grid;
        }

        .custom-mirror-solutions__media,
        .custom-mirror-needs__media {
          overflow: hidden;
          background: #f3ece1;
        }

        .custom-mirror-solutions__media {
          aspect-ratio: 1 / 1.16;
        }

        .custom-mirror-needs__media {
          aspect-ratio: 16 / 11;
        }

        .custom-mirror-solutions__body,
        .custom-mirror-needs__body {
          display: grid;
          gap: 8px;
          padding: 16px 14px 18px;
          text-align: center;
        }

        .custom-mirror-process {
          grid-template-columns: repeat(6, minmax(0, 1fr));
          align-items: stretch;
        }

        .custom-mirror-process__item {
          position: relative;
          display: grid;
          gap: 10px;
          justify-items: center;
          text-align: center;
          padding: 20px 14px;
        }

        .custom-mirror-process__item:not(:last-child)::after {
          content: "→";
          position: absolute;
          right: -10px;
          top: 50%;
          transform: translateY(-50%);
          color: #c99956;
          font-size: 1.2rem;
          font-weight: 700;
        }

        .custom-mirror-process__number {
          color: #c99956;
          font-size: 0.92rem;
          font-weight: 700;
        }

        .custom-mirror-needs {
          display: grid;
          grid-template-columns: repeat(6, minmax(0, 1fr));
          gap: 14px;
        }

        .custom-mirror-feature-band {
          display: grid;
          grid-template-columns: minmax(240px, 0.56fr) minmax(0, 0.88fr) minmax(220px, 0.56fr);
          gap: clamp(22px, 4vw, 36px);
          align-items: start;
        }

        .custom-mirror-feature-band__copy {
          display: grid;
          gap: 18px;
        }

        .custom-mirror-feature-band__copy p {
          max-width: 26rem;
        }

        .custom-mirror-feature-band__actions {
          padding-top: 4px;
        }

        .custom-mirror-feature-band__points {
          display: grid;
          grid-template-columns: repeat(3, minmax(0, 1fr));
          gap: 16px 14px;
        }

        .custom-mirror-feature-band__point {
          display: grid;
          gap: 10px;
          justify-items: center;
          text-align: center;
          padding: 16px 12px;
          border-left: 1px solid rgba(29, 22, 17, 0.08);
        }

        .custom-mirror-feature-band__stack {
          display: grid;
          grid-template-rows: repeat(2, minmax(0, 1fr));
          gap: 14px;
          min-height: 100%;
        }

        .custom-mirror-mfg__stack {
          overflow: hidden;
          border-radius: 22px;
          box-shadow: 0 18px 38px rgba(26, 20, 14, 0.07);
          background: #f2eadf;
        }

        .custom-mirror-quote__grid {
          grid-template-columns: repeat(8, minmax(0, 1fr));
        }

        .custom-mirror-quote__field {
          display: grid;
          gap: 12px;
          justify-items: center;
          text-align: center;
          padding: 18px 12px;
        }

        .custom-mirror-quote__field span {
          font-size: 0.88rem;
        }

        .custom-mirror-quote__actions {
          display: flex;
          justify-content: center;
          padding-top: 24px;
        }

        .custom-mirror-cta {
          padding-bottom: clamp(42px, 6vw, 76px);
        }

        .custom-mirror-cta__panel {
          display: grid;
          grid-template-columns: minmax(250px, 0.44fr) minmax(0, 1.56fr);
          overflow: hidden;
          border-radius: 28px;
          background: linear-gradient(135deg, #1f1915 0%, #2d231d 100%);
          box-shadow: 0 26px 56px rgba(20, 16, 13, 0.12);
        }

        .custom-mirror-cta__media {
          min-height: 100%;
        }

        .custom-mirror-cta__copy {
          display: grid;
          gap: 18px;
          align-content: center;
          padding: clamp(28px, 5vw, 52px);
          color: #fff9f2;
        }

        .custom-mirror-cta__copy p {
          max-width: 30rem;
          color: rgba(255, 245, 236, 0.84);
        }

        .custom-mirror-cta__actions {
          display: flex;
          flex-wrap: wrap;
          gap: 12px;
        }

        @media (max-width: 1200px) {
          .custom-mirror-hero__shell,
          .custom-mirror-feature-band,
          .custom-mirror-cta__panel {
            grid-template-columns: 1fr;
          }

          .custom-mirror-detail-grid,
          .custom-mirror-feature-band__points {
            grid-template-columns: repeat(2, minmax(0, 1fr));
          }

          .custom-mirror-solutions,
          .custom-mirror-needs {
            grid-template-columns: repeat(3, minmax(0, 1fr));
          }

          .custom-mirror-process {
            grid-template-columns: repeat(3, minmax(0, 1fr));
          }

          .custom-mirror-process__item::after {
            display: none;
          }

          .custom-mirror-quote__grid {
            grid-template-columns: repeat(4, minmax(0, 1fr));
          }
        }

        @media (max-width: 760px) {
          .custom-mirror-hero__panel,
          .custom-mirror-detail-grid,
          .custom-mirror-solutions,
          .custom-mirror-process,
          .custom-mirror-needs,
          .custom-mirror-feature-band__points,
          .custom-mirror-quote__grid {
            grid-template-columns: 1fr;
          }

          .custom-mirror-hero__shapes {
            grid-template-columns: repeat(3, minmax(0, 1fr));
          }

          .custom-mirror-hero__actions .button,
          .custom-mirror-cta__actions .button {
            width: 100%;
          }
        }
      </style>

      <div class="custom-mirror-page">
        <section class="custom-mirror-hero">
          <div class="shell custom-mirror-hero__shell">
            <div class="custom-mirror-hero__visual">
              <img src="<?php echo esc_url($cm_primary_image); ?>" alt="<?php esc_attr_e('Custom mirror hero showcase', 'mirrorcraft'); ?>" loading="eager" decoding="async">
            </div>
            <div class="custom-mirror-hero__panel">
              <div class="custom-mirror-hero__copy">
                <h1><?php esc_html_e('Custom Mirrors for Global Projects', 'mirrorcraft'); ?></h1>
                <p><?php esc_html_e('Tailored shapes, sizes, frames, lighting, and functions for hotels, real estate, retail, and commercial spaces.', 'mirrorcraft'); ?></p>
                <div class="custom-mirror-hero__actions">
                  <a class="button button-primary" href="<?php echo esc_url($cm_quote_url); ?>"><?php esc_html_e('Request Custom Solution', 'mirrorcraft'); ?></a>
                  <a class="button button-secondary" href="<?php echo esc_url($cm_quote_url); ?>"><?php esc_html_e('Send Your Drawing', 'mirrorcraft'); ?></a>
                </div>
              </div>
              <div class="custom-mirror-hero__shapes" aria-hidden="true">
                <span class="custom-mirror-hero__shape custom-mirror-hero__shape--round"></span>
                <span class="custom-mirror-hero__shape custom-mirror-hero__shape--oval"></span>
                <span class="custom-mirror-hero__shape custom-mirror-hero__shape--rectangle"></span>
                <span class="custom-mirror-hero__shape custom-mirror-hero__shape--arch"></span>
                <span class="custom-mirror-hero__shape custom-mirror-hero__shape--pill"></span>
                <span class="custom-mirror-hero__shape custom-mirror-hero__shape--irregular"></span>
              </div>
            </div>
          </div>
        </section>

        <section class="custom-mirror-section custom-mirror-section--soft">
          <div class="shell">
            <div class="custom-mirror-section__head">
              <h2><?php esc_html_e('Customize Every Detail', 'mirrorcraft'); ?></h2>
            </div>
            <div class="custom-mirror-detail-grid">
              <?php foreach ($cm_detail_cards as $card) : ?>
                <article class="custom-mirror-detail-card">
                  <span class="custom-mirror-detail-card__icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($card['icon']); ?></span>
                  <h3><?php echo esc_html($card['title']); ?></h3>
                  <p><?php echo esc_html($card['text']); ?></p>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="custom-mirror-section">
          <div class="shell">
            <div class="custom-mirror-section__head">
              <h2><?php esc_html_e('Custom Mirror Solutions', 'mirrorcraft'); ?></h2>
            </div>
            <div class="custom-mirror-solutions">
              <?php foreach ($cm_solution_cards as $card) : ?>
                <article class="custom-mirror-solutions__card">
                  <div class="custom-mirror-solutions__media">
                    <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
                  </div>
                  <div class="custom-mirror-solutions__body">
                    <h3><?php echo esc_html($card['title']); ?></h3>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="custom-mirror-section custom-mirror-section--soft">
          <div class="shell">
            <div class="custom-mirror-section__head">
              <h2><?php esc_html_e('From Concept to Production', 'mirrorcraft'); ?></h2>
            </div>
            <div class="custom-mirror-process">
              <?php foreach ($cm_process_steps as $step) : ?>
                <article class="custom-mirror-process__item">
                  <span class="custom-mirror-process__icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($step['icon']); ?></span>
                  <span class="custom-mirror-process__number"><?php echo esc_html($step['number']); ?></span>
                  <h3><?php echo esc_html($step['title']); ?></h3>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="custom-mirror-section">
          <div class="shell">
            <div class="custom-mirror-section__head">
              <h2><?php esc_html_e('Built for Different Project Needs', 'mirrorcraft'); ?></h2>
            </div>
            <div class="custom-mirror-needs">
              <?php foreach ($cm_need_cards as $card) : ?>
                <article class="custom-mirror-needs__card">
                  <div class="custom-mirror-needs__media">
                    <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
                  </div>
                  <div class="custom-mirror-needs__body">
                    <h3><?php echo esc_html($card['title']); ?></h3>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="custom-mirror-section custom-mirror-section--soft">
          <div class="shell custom-mirror-feature-band">
            <div class="custom-mirror-feature-band__copy">
              <h2><?php esc_html_e('Reliable Manufacturing for Custom Orders', 'mirrorcraft'); ?></h2>
              <p><?php esc_html_e('We support custom mirror projects with stable production capacity, strict quality control, and flexible OEM/ODM service. From material selection to packaging, every detail is checked before delivery.', 'mirrorcraft'); ?></p>
              <div class="custom-mirror-feature-band__actions">
                <a class="button button-secondary" href="<?php echo esc_url($cm_quote_url); ?>"><?php esc_html_e('Learn More About Us', 'mirrorcraft'); ?></a>
              </div>
            </div>
            <div class="custom-mirror-feature-band__points">
              <?php foreach ($cm_mfg_points as $point) : ?>
                <article class="custom-mirror-feature-band__point">
                  <span class="custom-mirror-feature-band__point-icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($point['icon']); ?></span>
                  <h3><?php echo esc_html($point['title']); ?></h3>
                </article>
              <?php endforeach; ?>
            </div>
            <div class="custom-mirror-feature-band__stack">
              <div class="custom-mirror-mfg__stack">
                <img src="<?php echo esc_url($cm_workshop_image ?: $cm_primary_image); ?>" alt="<?php esc_attr_e('Custom mirror workshop production', 'mirrorcraft'); ?>" loading="lazy" decoding="async">
              </div>
              <div class="custom-mirror-mfg__stack">
                <img src="<?php echo esc_url($cm_warehouse_image ?: $cm_primary_image); ?>" alt="<?php esc_attr_e('Custom mirror export packaging', 'mirrorcraft'); ?>" loading="lazy" decoding="async">
              </div>
            </div>
          </div>
        </section>

        <section class="custom-mirror-section">
          <div class="shell">
            <div class="custom-mirror-quote__head">
              <h2><?php esc_html_e('What Information Helps Us Quote Faster?', 'mirrorcraft'); ?></h2>
            </div>
            <div class="custom-mirror-quote__grid">
              <?php foreach ($cm_quote_fields as $field) : ?>
                <article class="custom-mirror-quote__field">
                  <span class="custom-mirror-quote__icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($field['icon']); ?></span>
                  <strong><?php echo esc_html($field['title']); ?></strong>
                  <span><?php echo esc_html($field['hint']); ?></span>
                </article>
              <?php endforeach; ?>
            </div>
            <div class="custom-mirror-quote__actions">
              <a class="button button-primary" href="<?php echo esc_url($cm_quote_url); ?>"><?php esc_html_e('Submit Inquiry', 'mirrorcraft'); ?></a>
            </div>
          </div>
        </section>

        <section class="custom-mirror-cta">
          <div class="shell">
            <div class="custom-mirror-cta__panel">
              <div class="custom-mirror-cta__media">
                <img src="<?php echo esc_url($cm_primary_image); ?>" alt="<?php esc_attr_e('Custom mirror call to action image', 'mirrorcraft'); ?>" loading="lazy" decoding="async">
              </div>
              <div class="custom-mirror-cta__copy">
                <h2><?php esc_html_e('Need a Custom Mirror for Your Project?', 'mirrorcraft'); ?></h2>
                <p><?php esc_html_e('Send us your drawing, concept image, or project requirement. Our team will help you turn it into a production-ready mirror solution.', 'mirrorcraft'); ?></p>
                <div class="custom-mirror-cta__actions">
                  <a class="button button-primary" href="<?php echo esc_url($cm_quote_url); ?>"><?php esc_html_e('Get Custom Quote', 'mirrorcraft'); ?></a>
                  <a class="button button-secondary" href="<?php echo esc_url($cm_quote_url); ?>"><?php esc_html_e('Contact Our Team', 'mirrorcraft'); ?></a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <?php continue; ?>
    <?php endif; ?>

    <?php if ('smart-mirrors' === $page_slug) : ?>
      <?php
      $sm_quote_url = mirrorcraft_link_by_slug('contact', '/contact/');
      $sm_primary_image = $hero_image !== '' ? $hero_image : trailingslashit(get_template_directory_uri()) . 'assets/images/product-bathroom-mirror.jpg';
      $sm_hotel_image = mirrorcraft_theme_image_first_available_url(array('hospitality-led-mirror-project.png', 'hospitality-led-mirror-project.webp'));
      $sm_residential_image = mirrorcraft_theme_image_first_available_url(array('residential-led-bathroom-mirror.png', 'residential-led-bathroom-mirror.webp'));
      $sm_real_estate_image = mirrorcraft_theme_image_first_available_url(array('real-estate-bathroom-mirror.png', 'real-estate-bathroom-mirror.webp'));
      $sm_retail_image = mirrorcraft_theme_image_first_available_url(array('retail-store-fitting-mirror.png', 'retail-store-fitting-mirror.webp'));
      $sm_healthcare_image = mirrorcraft_theme_image_first_available_url(array('healthcare-hospital-mirror.png', 'healthcare-hospital-mirror.webp'));
      $sm_salon_image = mirrorcraft_theme_image_first_available_url(array('beauty-salon-led-mirror.png', 'beauty-salon-led-mirror.webp'));
      $sm_senior_image = mirrorcraft_theme_image_first_available_url(array('senior-living-bathroom-mirror.png', 'senior-living-bathroom-mirror.webp'));
      $sm_full_length_image = mirrorcraft_theme_image_first_available_url(array('gym-fitness-mirror.png', 'gym-fitness-mirror.webp', 'airport-public-mirror.png'));
      $sm_features_image = mirrorcraft_theme_image_first_available_url(array('custom-solution-features-20260422.png', 'custom-solution-features-20260422.webp'));
      $sm_shapes_image = mirrorcraft_theme_image_first_available_url(array('custom-solution-shapes-20260422.png', 'custom-solution-shapes-20260422.webp'));
      $sm_sizes_image = mirrorcraft_theme_image_first_available_url(array('custom-solution-sizes-20260422.png', 'custom-solution-sizes-20260422.webp'));
      $sm_frames_image = mirrorcraft_theme_image_first_available_url(array('custom-solution-frames-20260422.png', 'custom-solution-frames-20260422.webp'));

      $sm_solution_tiles = array(
        array('icon' => 'touch', 'title' => __('Touch & Sensor Control', 'mirrorcraft')),
        array('icon' => 'anti-fog', 'title' => __('Anti-Fog Technology', 'mirrorcraft')),
        array('icon' => 'speaker', 'title' => __('Bluetooth Audio', 'mirrorcraft')),
        array('icon' => 'light', 'title' => __('Dimmable LED Lighting', 'mirrorcraft')),
        array('icon' => 'cct', 'title' => __('CCT Color Temperature Control', 'mirrorcraft')),
        array('icon' => 'clock', 'title' => __('Smart Display / Clock Options', 'mirrorcraft')),
        array('icon' => 'eye', 'title' => __('CRI 95+ Lighting Available', 'mirrorcraft')),
        array('icon' => 'size', 'title' => __('Custom Size & Shape', 'mirrorcraft')),
      );

      $sm_option_cards = array(
        array(
          'title' => __('Smart Bathroom Mirrors', 'mirrorcraft'),
          'image' => $sm_primary_image,
        ),
        array(
          'title' => __('Smart Vanity Mirrors', 'mirrorcraft'),
          'image' => $sm_salon_image ?: $sm_primary_image,
        ),
        array(
          'title' => __('Smart Hotel Mirrors', 'mirrorcraft'),
          'image' => $sm_hotel_image ?: $sm_primary_image,
        ),
        array(
          'title' => __('Smart Medicine Cabinets', 'mirrorcraft'),
          'image' => $sm_features_image ?: $sm_primary_image,
        ),
        array(
          'title' => __('Smart Full-Length Mirrors', 'mirrorcraft'),
          'image' => $sm_full_length_image ?: $sm_primary_image,
        ),
        array(
          'title' => __('Custom Smart Mirrors', 'mirrorcraft'),
          'image' => $sm_shapes_image ?: $sm_primary_image,
        ),
      );

      $sm_feature_bullets = array(
        array('icon' => 'anti-fog', 'text' => __('Anti-fog pad keeps mirror clear after shower.', 'mirrorcraft')),
        array('icon' => 'speaker', 'text' => __('Bluetooth speaker for bathroom entertainment.', 'mirrorcraft')),
        array('icon' => 'touch', 'text' => __('Touch switch, motion sensor, or radar sensor control.', 'mirrorcraft')),
        array('icon' => 'clock', 'text' => __('Digital clock, temperature display, or smart screen options.', 'mirrorcraft')),
        array('icon' => 'cct', 'text' => __('Adjustable brightness and color temperature for different scenes.', 'mirrorcraft')),
        array('icon' => 'light', 'text' => __('Memory function and optional night light support.', 'mirrorcraft')),
      );

      $sm_usage_cards = array(
        array('title' => __('Hotels & Resorts', 'mirrorcraft'), 'image' => $sm_hotel_image ?: $sm_primary_image),
        array('title' => __('Apartments & Condos', 'mirrorcraft'), 'image' => $sm_residential_image ?: $sm_primary_image),
        array('title' => __('Luxury Bathrooms', 'mirrorcraft'), 'image' => $sm_real_estate_image ?: $sm_primary_image),
        array('title' => __('Beauty Salons', 'mirrorcraft'), 'image' => $sm_salon_image ?: $sm_primary_image),
        array('title' => __('Healthcare Spaces', 'mirrorcraft'), 'image' => $sm_healthcare_image ?: $sm_primary_image),
        array('title' => __('Retail & Commercial Projects', 'mirrorcraft'), 'image' => $sm_retail_image ?: $sm_primary_image),
      );

      $sm_brand_bullets = array(
        __('Size & shape customization', 'mirrorcraft'),
        __('Frame / frameless options', 'mirrorcraft'),
        __('LED color temperature', 'mirrorcraft'),
        __('CRI 95+ lighting', 'mirrorcraft'),
        __('Sensor type', 'mirrorcraft'),
        __('Anti-fog size', 'mirrorcraft'),
        __('Logo & packaging', 'mirrorcraft'),
        __('OEM / ODM development', 'mirrorcraft'),
      );

      $sm_brand_images = array(
        $sm_sizes_image ?: $sm_primary_image,
        $sm_features_image ?: $sm_primary_image,
        $sm_shapes_image ?: $sm_primary_image,
        $sm_frames_image ?: $sm_primary_image,
      );

      $sm_quality_points = array(
        array('icon' => 'quote', 'title' => __('Strict electrical testing', 'mirrorcraft')),
        array('icon' => 'anti-fog', 'title' => __('Waterproof structure design', 'mirrorcraft')),
        array('icon' => 'light', 'title' => __('Stable LED driver', 'mirrorcraft')),
        array('icon' => 'eye', 'title' => __('Safe mirror backing', 'mirrorcraft')),
        array('icon' => 'commercial', 'title' => __('Bulk order capability', 'mirrorcraft')),
        array('icon' => 'branding', 'title' => __('Project packaging support', 'mirrorcraft')),
      );
      ?>
      <style>
        .smart-mirror-page {
          background: linear-gradient(180deg, #fffdfa 0%, #fff 40%, #faf5ee 100%);
        }

        .smart-mirror-hero {
          position: relative;
          padding: clamp(70px, 8vw, 106px) 0 clamp(66px, 7vw, 92px);
          background-image:
            linear-gradient(90deg, rgba(18, 13, 10, 0.78) 0%, rgba(20, 15, 11, 0.72) 34%, rgba(22, 17, 13, 0.3) 58%, rgba(22, 17, 13, 0.12) 100%),
            var(--smart-hero-image);
          background-position: center;
          background-size: cover;
          background-repeat: no-repeat;
        }

        .smart-mirror-hero__shell {
          min-height: 520px;
          display: grid;
          align-items: center;
        }

        .smart-mirror-hero__copy {
          display: grid;
          gap: 20px;
          max-width: 35rem;
          color: #fff8f2;
        }

        .smart-mirror-hero__copy h1,
        .smart-mirror-section__head h2,
        .smart-mirror-feature-band__copy h2,
        .smart-mirror-brand__copy h2,
        .smart-mirror-cta__copy h2 {
          margin: 0;
          font-weight: 800;
          letter-spacing: -0.045em;
        }

        .smart-mirror-hero__copy h1 {
          font-size: var(--mirrorcraft-display-hero-size, clamp(3.45rem, 4.6vw, 5.45rem));
          line-height: var(--mirrorcraft-display-hero-line, 0.9);
          max-width: 33rem;
        }

        .smart-mirror-hero__copy p {
          margin: 0;
          max-width: 30rem;
          color: rgba(255, 245, 236, 0.88);
          line-height: 1.82;
          font-size: 1.04rem;
        }

        .smart-mirror-hero__actions {
          display: flex;
          flex-wrap: wrap;
          gap: 14px;
          padding-top: 4px;
        }

        .smart-mirror-section {
          padding: clamp(42px, 6vw, 74px) 0;
        }

        .smart-mirror-section--soft {
          background: linear-gradient(180deg, rgba(252, 247, 240, 0.84) 0%, rgba(255, 255, 255, 0.98) 100%);
        }

        .smart-mirror-section__head {
          display: grid;
          gap: 10px;
          margin-bottom: 28px;
          text-align: center;
        }

        .smart-mirror-section__head h2,
        .smart-mirror-feature-band__copy h2,
        .smart-mirror-brand__copy h2 {
          font-size: clamp(1.95rem, 3vw, 2.95rem);
          line-height: 1.06;
        }

        .smart-mirror-solution-grid {
          display: grid;
          grid-template-columns: repeat(4, minmax(0, 1fr));
          gap: 16px;
        }

        .smart-mirror-solution,
        .smart-mirror-option,
        .smart-mirror-feature-band__bullet,
        .smart-mirror-usage,
        .smart-mirror-quality__item {
          border-radius: 22px;
          border: 1px solid rgba(30, 23, 18, 0.08);
          background: #fff;
          box-shadow: 0 16px 36px rgba(28, 21, 15, 0.05);
        }

        .smart-mirror-solution {
          display: grid;
          gap: 14px;
          justify-items: center;
          text-align: center;
          padding: 24px 18px;
        }

        .smart-mirror-solution__icon,
        .smart-mirror-feature-band__icon,
        .smart-mirror-quality__icon {
          display: inline-flex;
          align-items: center;
          justify-content: center;
          width: 50px;
          height: 50px;
          border-radius: 999px;
          background: rgba(201, 153, 86, 0.11);
          color: #c99956;
        }

        .smart-mirror-solution__icon svg,
        .smart-mirror-feature-band__icon svg,
        .smart-mirror-quality__icon svg {
          width: 24px;
          height: 24px;
        }

        .smart-mirror-solution h3,
        .smart-mirror-option__body h3,
        .smart-mirror-feature-band__bullet h3,
        .smart-mirror-usage__body h3,
        .smart-mirror-brand__copy li,
        .smart-mirror-quality__item h3 {
          margin: 0;
          font-size: 1rem;
          line-height: 1.35;
        }

        .smart-mirror-options {
          display: grid;
          grid-template-columns: repeat(6, minmax(0, 1fr));
          gap: 16px;
        }

        .smart-mirror-option,
        .smart-mirror-usage {
          overflow: hidden;
          display: grid;
        }

        .smart-mirror-option__media,
        .smart-mirror-usage__media,
        .smart-mirror-feature-band__media,
        .smart-mirror-brand__image,
        .smart-mirror-cta__panel img {
          overflow: hidden;
          background: #f3ede3;
        }

        .smart-mirror-option__media {
          aspect-ratio: 1 / 1.12;
        }

        .smart-mirror-usage__media {
          aspect-ratio: 16 / 11;
        }

        .smart-mirror-option__media img,
        .smart-mirror-usage__media img,
        .smart-mirror-feature-band__media img,
        .smart-mirror-brand__image img,
        .smart-mirror-cta__panel img {
          display: block;
          width: 100%;
          height: 100%;
          object-fit: cover;
        }

        .smart-mirror-option__body,
        .smart-mirror-usage__body {
          display: grid;
          gap: 10px;
          padding: 16px 14px 18px;
          text-align: center;
        }

        .smart-mirror-option__body a {
          color: #c99956;
          font-weight: 700;
        }

        .smart-mirror-feature-band {
          display: grid;
          grid-template-columns: minmax(0, 0.9fr) minmax(0, 1.1fr);
          gap: clamp(22px, 4vw, 34px);
          align-items: center;
        }

        .smart-mirror-feature-band__media {
          border-radius: 28px;
          aspect-ratio: 16 / 10;
          box-shadow: 0 22px 46px rgba(25, 19, 14, 0.09);
        }

        .smart-mirror-feature-band__copy {
          display: grid;
          gap: 20px;
        }

        .smart-mirror-feature-band__grid {
          display: grid;
          grid-template-columns: repeat(2, minmax(0, 1fr));
          gap: 14px 16px;
        }

        .smart-mirror-feature-band__bullet {
          display: grid;
          grid-template-columns: auto 1fr;
          gap: 12px;
          align-items: start;
          padding: 18px 16px;
        }

        .smart-mirror-feature-band__bullet p {
          margin: 0;
          color: var(--muted);
          line-height: 1.68;
        }

        .smart-mirror-usage-grid {
          display: grid;
          grid-template-columns: repeat(6, minmax(0, 1fr));
          gap: 14px;
        }

        .smart-mirror-brand {
          display: grid;
          grid-template-columns: minmax(250px, 0.82fr) minmax(0, 1.18fr);
          gap: clamp(20px, 4vw, 34px);
          align-items: stretch;
        }

        .smart-mirror-brand__copy {
          display: grid;
          gap: 18px;
        }

        .smart-mirror-brand__copy ul {
          display: grid;
          grid-template-columns: repeat(2, minmax(0, 1fr));
          gap: 10px 22px;
          margin: 0;
          padding: 0;
          list-style: none;
        }

        .smart-mirror-brand__copy li {
          position: relative;
          padding-left: 20px;
          color: var(--muted);
        }

        .smart-mirror-brand__copy li::before {
          content: "✓";
          position: absolute;
          left: 0;
          top: 0;
          color: #c99956;
          font-weight: 700;
        }

        .smart-mirror-brand__images {
          display: grid;
          grid-template-columns: repeat(4, minmax(0, 1fr));
          gap: 12px;
        }

        .smart-mirror-brand__image {
          border-radius: 24px;
          aspect-ratio: 1 / 1;
          box-shadow: 0 18px 38px rgba(25, 19, 14, 0.07);
        }

        .smart-mirror-quality {
          display: grid;
          grid-template-columns: repeat(6, minmax(0, 1fr));
          gap: 14px;
        }

        .smart-mirror-quality__item {
          display: grid;
          gap: 12px;
          justify-items: center;
          text-align: center;
          padding: 20px 14px;
        }

        .smart-mirror-cta {
          padding-bottom: clamp(42px, 6vw, 76px);
        }

        .smart-mirror-cta__panel {
          position: relative;
          overflow: hidden;
          border-radius: 28px;
          min-height: 286px;
          background: #1b140f;
        }

        .smart-mirror-cta__panel img {
          position: absolute;
          inset: 0;
        }

        .smart-mirror-cta__panel::before {
          content: "";
          position: absolute;
          inset: 0;
          background: linear-gradient(90deg, rgba(22, 16, 11, 0.9) 0%, rgba(22, 16, 11, 0.78) 40%, rgba(22, 16, 11, 0.24) 100%);
          z-index: 1;
        }

        .smart-mirror-cta__copy {
          position: relative;
          z-index: 2;
          display: grid;
          gap: 18px;
          align-content: center;
          min-height: 286px;
          max-width: 36rem;
          padding: clamp(28px, 5vw, 52px);
          color: #fff8f0;
        }

        .smart-mirror-cta__copy h2 {
          font-size: clamp(2rem, 3vw, 2.95rem);
          line-height: 1.05;
        }

        .smart-mirror-cta__copy p {
          margin: 0;
          color: rgba(255, 246, 236, 0.84);
          line-height: 1.76;
          max-width: 32rem;
        }

        .smart-mirror-cta__actions {
          display: flex;
          flex-wrap: wrap;
          gap: 12px;
        }

        @media (max-width: 1200px) {
          .smart-mirror-solution-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
          }

          .smart-mirror-options,
          .smart-mirror-usage-grid {
            grid-template-columns: repeat(3, minmax(0, 1fr));
          }

          .smart-mirror-feature-band,
          .smart-mirror-brand {
            grid-template-columns: 1fr;
          }

          .smart-mirror-quality {
            grid-template-columns: repeat(3, minmax(0, 1fr));
          }
        }

        @media (max-width: 760px) {
          .smart-mirror-solution-grid,
          .smart-mirror-options,
          .smart-mirror-feature-band__grid,
          .smart-mirror-usage-grid,
          .smart-mirror-brand__copy ul,
          .smart-mirror-brand__images,
          .smart-mirror-quality {
            grid-template-columns: 1fr;
          }

          .smart-mirror-hero__actions .button,
          .smart-mirror-cta__actions .button {
            width: 100%;
          }
        }
      </style>

      <div class="smart-mirror-page">
        <section class="smart-mirror-hero" style="--smart-hero-image: url('<?php echo esc_url($sm_primary_image); ?>');">
          <div class="shell smart-mirror-hero__shell">
            <div class="smart-mirror-hero__copy">
              <h1><?php esc_html_e('Smart Mirrors for Modern Commercial & Residential Projects', 'mirrorcraft'); ?></h1>
              <p><?php esc_html_e('Custom LED smart mirrors with touch control, anti-fog, Bluetooth, sensors, dimming, and OEM/ODM options for global buyers.', 'mirrorcraft'); ?></p>
              <div class="smart-mirror-hero__actions">
                <a class="button button-primary" href="#smart-mirror-options"><?php esc_html_e('Explore Smart Mirrors', 'mirrorcraft'); ?></a>
              </div>
            </div>
          </div>
        </section>

        <section class="smart-mirror-section">
          <div class="shell">
            <div class="smart-mirror-section__head">
              <h2><?php esc_html_e('Intelligent Mirror Solutions for Global Projects', 'mirrorcraft'); ?></h2>
            </div>
            <div class="smart-mirror-solution-grid">
              <?php foreach ($sm_solution_tiles as $tile) : ?>
                <article class="smart-mirror-solution">
                  <span class="smart-mirror-solution__icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($tile['icon']); ?></span>
                  <h3><?php echo esc_html($tile['title']); ?></h3>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="smart-mirror-section smart-mirror-section--soft" id="smart-mirror-options">
          <div class="shell">
            <div class="smart-mirror-section__head">
              <h2><?php esc_html_e('Smart Mirror Options', 'mirrorcraft'); ?></h2>
            </div>
            <div class="smart-mirror-options">
              <?php foreach ($sm_option_cards as $card) : ?>
                <article class="smart-mirror-option">
                  <div class="smart-mirror-option__media">
                    <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
                  </div>
                  <div class="smart-mirror-option__body">
                    <h3><?php echo esc_html($card['title']); ?></h3>
                    <a href="<?php echo esc_url($sm_quote_url); ?>"><?php esc_html_e('View Options', 'mirrorcraft'); ?> &rarr;</a>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="smart-mirror-section">
          <div class="shell smart-mirror-feature-band">
            <div class="smart-mirror-feature-band__media">
              <img src="<?php echo esc_url($sm_primary_image); ?>" alt="<?php esc_attr_e('Smart mirror feature showcase', 'mirrorcraft'); ?>" loading="lazy" decoding="async">
            </div>
            <div class="smart-mirror-feature-band__copy">
              <h2><?php esc_html_e('Smart Features Built for Daily Use', 'mirrorcraft'); ?></h2>
              <div class="smart-mirror-feature-band__grid">
                <?php foreach ($sm_feature_bullets as $item) : ?>
                  <article class="smart-mirror-feature-band__bullet">
                    <span class="smart-mirror-feature-band__icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($item['icon']); ?></span>
                    <p><?php echo esc_html($item['text']); ?></p>
                  </article>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </section>

        <section class="smart-mirror-section smart-mirror-section--soft">
          <div class="shell">
            <div class="smart-mirror-section__head">
              <h2><?php esc_html_e('Where Smart Mirrors Are Used', 'mirrorcraft'); ?></h2>
            </div>
            <div class="smart-mirror-usage-grid">
              <?php foreach ($sm_usage_cards as $card) : ?>
                <article class="smart-mirror-usage">
                  <div class="smart-mirror-usage__media">
                    <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
                  </div>
                  <div class="smart-mirror-usage__body">
                    <h3><?php echo esc_html($card['title']); ?></h3>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="smart-mirror-section">
          <div class="shell smart-mirror-brand">
            <div class="smart-mirror-brand__copy">
              <h2><?php esc_html_e('Custom Smart Mirrors for Your Brand', 'mirrorcraft'); ?></h2>
              <ul>
                <?php foreach ($sm_brand_bullets as $bullet) : ?>
                  <li><?php echo esc_html($bullet); ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
            <div class="smart-mirror-brand__images">
              <?php foreach ($sm_brand_images as $image) : ?>
                <div class="smart-mirror-brand__image">
                  <img src="<?php echo esc_url($image); ?>" alt="<?php esc_attr_e('Smart mirror customization detail', 'mirrorcraft'); ?>" loading="lazy" decoding="async">
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="smart-mirror-section smart-mirror-section--soft">
          <div class="shell">
            <div class="smart-mirror-section__head">
              <h2><?php esc_html_e('Built for Long-Term Project Use', 'mirrorcraft'); ?></h2>
            </div>
            <div class="smart-mirror-quality">
              <?php foreach ($sm_quality_points as $point) : ?>
                <article class="smart-mirror-quality__item">
                  <span class="smart-mirror-quality__icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($point['icon']); ?></span>
                  <h3><?php echo esc_html($point['title']); ?></h3>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="smart-mirror-cta">
          <div class="shell">
            <div class="smart-mirror-cta__panel">
              <img src="<?php echo esc_url($sm_hotel_image ?: $sm_primary_image); ?>" alt="<?php esc_attr_e('Custom smart mirror project showcase', 'mirrorcraft'); ?>" loading="lazy" decoding="async">
              <div class="smart-mirror-cta__copy">
                <h2><?php esc_html_e('Need a Custom Smart Mirror Solution?', 'mirrorcraft'); ?></h2>
                <p><?php esc_html_e('Share your project requirements, and our team will help develop the right smart mirror solution for your market.', 'mirrorcraft'); ?></p>
                <div class="smart-mirror-cta__actions">
                  <a class="button button-primary" href="<?php echo esc_url($sm_quote_url); ?>"><?php esc_html_e('Request a Quote', 'mirrorcraft'); ?></a>
                  <a class="button button-secondary" href="<?php echo esc_url($sm_quote_url); ?>"><?php esc_html_e('Send Your Drawing', 'mirrorcraft'); ?></a>
                  <a class="button button-secondary" href="<?php echo esc_url($sm_quote_url); ?>"><?php esc_html_e('Talk to Our Team', 'mirrorcraft'); ?></a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <?php continue; ?>
    <?php endif; ?>

    <?php if ('medicine-cabinets' === $page_slug) : ?>
      <?php
      $mc_quote_url = mirrorcraft_link_by_slug('contact', '/contact/');
      $mc_primary_image = $hero_image !== '' ? $hero_image : trailingslashit(get_template_directory_uri()) . 'assets/images/product-medicine-cabinet.jpg';
      $mc_hotel_image = mirrorcraft_theme_image_first_available_url(array('hospitality-led-mirror-project.png', 'hospitality-led-mirror-project.webp'));
      $mc_residential_image = mirrorcraft_theme_image_first_available_url(array('residential-led-bathroom-mirror.png', 'residential-led-bathroom-mirror.webp'));
      $mc_healthcare_image = mirrorcraft_theme_image_first_available_url(array('healthcare-hospital-mirror.png', 'healthcare-hospital-mirror.webp'));
      $mc_senior_image = mirrorcraft_theme_image_first_available_url(array('senior-living-bathroom-mirror.png', 'senior-living-bathroom-mirror.webp'));
      $mc_real_estate_image = mirrorcraft_theme_image_first_available_url(array('real-estate-bathroom-mirror.png', 'real-estate-bathroom-mirror.webp'));
      $mc_features_image = mirrorcraft_theme_image_first_available_url(array('custom-solution-features-20260422.png', 'custom-solution-features-20260422.webp'));
      $mc_sizes_image = mirrorcraft_theme_image_first_available_url(array('custom-solution-sizes-20260422.png', 'custom-solution-sizes-20260422.webp'));
      $mc_frames_image = mirrorcraft_theme_image_first_available_url(array('custom-solution-frames-20260422.png', 'custom-solution-frames-20260422.webp'));
      $mc_edge_image = mirrorcraft_theme_image_first_available_url(array('custom-solution-edge-finishes-20260422.png', 'custom-solution-edge-finishes-20260422.webp'));

      $mc_feature_points = array(
        array(
          'icon'  => 'frame',
          'title' => __('Integrated Storage', 'mirrorcraft'),
          'text'  => __('Hidden bathroom storage for hotels, apartments, and residential projects.', 'mirrorcraft'),
        ),
        array(
          'icon'  => 'light',
          'title' => __('LED Lighting Options', 'mirrorcraft'),
          'text'  => __('Front light, back light, side light, CCT adjustable, and CRI 95 lighting routes.', 'mirrorcraft'),
        ),
        array(
          'icon'  => 'anti-fog',
          'title' => __('Anti-Fog & Safety Design', 'mirrorcraft'),
          'text'  => __('Defogger, tempered glass, soft-close hinges, and waterproof cabinet structure.', 'mirrorcraft'),
        ),
        array(
          'icon'  => 'branding',
          'title' => __('OEM & ODM Customization', 'mirrorcraft'),
          'text'  => __('Custom size, door style, shelves, sockets, sensors, and packaging options.', 'mirrorcraft'),
        ),
      );

      $mc_option_cards = array(
        array(
          'title' => __('Single Door LED Medicine Cabinet', 'mirrorcraft'),
          'text'  => __('Compact and practical for small bathroom spaces.', 'mirrorcraft'),
          'image' => $mc_primary_image,
        ),
        array(
          'title' => __('Double Door Mirror Cabinet', 'mirrorcraft'),
          'text'  => __('Larger storage space for everyday essentials.', 'mirrorcraft'),
          'image' => $mc_primary_image,
        ),
        array(
          'title' => __('Triple Door Bathroom Cabinet', 'mirrorcraft'),
          'text'  => __('Wider view and maximum storage for family or project bathrooms.', 'mirrorcraft'),
          'image' => $mc_primary_image,
        ),
        array(
          'title' => __('Recessed Medicine Cabinet', 'mirrorcraft'),
          'text'  => __('Wall embedded design for a clean and modern project look.', 'mirrorcraft'),
          'image' => $mc_real_estate_image ?: $mc_primary_image,
        ),
        array(
          'title' => __('Surface Mounted Cabinet', 'mirrorcraft'),
          'text'  => __('Easy installation for various wall types and renovation projects.', 'mirrorcraft'),
          'image' => $mc_residential_image ?: $mc_primary_image,
        ),
        array(
          'title' => __('Smart Medicine Cabinet', 'mirrorcraft'),
          'text'  => __('Sensor, anti-fog, clock, and other smart functions for modern bathrooms.', 'mirrorcraft'),
          'image' => $mc_features_image ?: $mc_primary_image,
        ),
      );

      $mc_custom_cards = array(
        array(
          'title' => __('Size & Installation', 'mirrorcraft'),
          'bullets' => array(
            __('Recessed / Surface Mounted', 'mirrorcraft'),
            __('Custom Width & Height', 'mirrorcraft'),
            __('Wall Thickness Options', 'mirrorcraft'),
            __('Flexible Installation', 'mirrorcraft'),
          ),
          'image' => $mc_sizes_image ?: $mc_primary_image,
        ),
        array(
          'title' => __('Lighting & Mirror', 'mirrorcraft'),
          'bullets' => array(
            __('Front-lit / Backlit / Sidelit', 'mirrorcraft'),
            __('CCT Adjustable', 'mirrorcraft'),
            __('CRI 95', 'mirrorcraft'),
            __('Anti-Fog', 'mirrorcraft'),
          ),
          'image' => $mc_edge_image ?: $mc_primary_image,
        ),
        array(
          'title' => __('Cabinet Structure', 'mirrorcraft'),
          'bullets' => array(
            __('Aluminum Body', 'mirrorcraft'),
            __('Adjustable Shelves', 'mirrorcraft'),
            __('Soft-Close Hinge', 'mirrorcraft'),
            __('Built-in Socket (Optional)', 'mirrorcraft'),
          ),
          'image' => $mc_frames_image ?: $mc_primary_image,
        ),
        array(
          'title' => __('Smart Functions', 'mirrorcraft'),
          'bullets' => array(
            __('Sensor Switch', 'mirrorcraft'),
            __('Touch Switch', 'mirrorcraft'),
            __('Bluetooth / Speaker', 'mirrorcraft'),
            __('Clock / Magnifier', 'mirrorcraft'),
          ),
          'image' => $mc_features_image ?: $mc_primary_image,
        ),
      );

      $mc_applications = array(
        array(
          'title' => __('Hotels & Resorts', 'mirrorcraft'),
          'image' => $mc_hotel_image ?: $mc_primary_image,
        ),
        array(
          'title' => __('Apartments & Real Estate', 'mirrorcraft'),
          'image' => $mc_real_estate_image ?: $mc_primary_image,
        ),
        array(
          'title' => __('Senior Living', 'mirrorcraft'),
          'image' => $mc_senior_image ?: $mc_primary_image,
        ),
        array(
          'title' => __('Healthcare Bathrooms', 'mirrorcraft'),
          'image' => $mc_healthcare_image ?: $mc_primary_image,
        ),
        array(
          'title' => __('Residential Renovation', 'mirrorcraft'),
          'image' => $mc_residential_image ?: $mc_primary_image,
        ),
      );

      $mc_process_steps = array(
        array('number' => '1', 'icon' => 'frame', 'title' => __('Material Inspection', 'mirrorcraft')),
        array('number' => '2', 'icon' => 'shape', 'title' => __('Mirror Processing', 'mirrorcraft')),
        array('number' => '3', 'icon' => 'commercial', 'title' => __('Cabinet Assembly', 'mirrorcraft')),
        array('number' => '4', 'icon' => 'light', 'title' => __('LED Testing', 'mirrorcraft')),
        array('number' => '5', 'icon' => 'anti-fog', 'title' => __('Waterproof Test', 'mirrorcraft')),
        array('number' => '6', 'icon' => 'cct', 'title' => __('Aging Test', 'mirrorcraft')),
        array('number' => '7', 'icon' => 'branding', 'title' => __('Packaging', 'mirrorcraft')),
      );
      ?>
      <style>
        .medicine-cabinet-page {
          background: linear-gradient(180deg, #fffcf8 0%, #fff 38%, #faf5ee 100%);
        }

        .medicine-cabinet-hero {
          position: relative;
          padding: clamp(72px, 8vw, 110px) 0 clamp(66px, 7vw, 96px);
          background-image:
            linear-gradient(90deg, rgba(24, 18, 14, 0.84) 0%, rgba(28, 21, 16, 0.78) 36%, rgba(31, 24, 18, 0.4) 58%, rgba(31, 24, 18, 0.12) 100%),
            var(--medicine-hero-image);
          background-position: center;
          background-size: cover;
          background-repeat: no-repeat;
        }

        .medicine-cabinet-hero__shell {
          min-height: 500px;
          display: grid;
          align-items: center;
        }

        .medicine-cabinet-hero__copy {
          display: grid;
          gap: 20px;
          max-width: 35rem;
          color: #fff7ee;
        }

        .medicine-cabinet-hero__eyebrow {
          margin: 0;
          color: rgba(255, 240, 219, 0.86);
          font-size: 0.92rem;
          letter-spacing: 0.12em;
          text-transform: uppercase;
        }

        .medicine-cabinet-hero__copy h1,
        .medicine-cabinet-section__head h2,
        .medicine-cabinet-cta__copy h2 {
          margin: 0;
          font-weight: 800;
          letter-spacing: -0.045em;
        }

        .medicine-cabinet-hero__copy h1 {
          font-size: var(--mirrorcraft-display-hero-size, clamp(3.45rem, 4.6vw, 5.45rem));
          line-height: var(--mirrorcraft-display-hero-line, 0.9);
          max-width: 33rem;
        }

        .medicine-cabinet-hero__copy p:last-of-type {
          margin: 0;
          max-width: 30rem;
          color: rgba(255, 245, 232, 0.88);
          line-height: 1.86;
          font-size: 1.04rem;
        }

        .medicine-cabinet-hero__actions {
          display: flex;
          flex-wrap: wrap;
          gap: 14px;
          padding-top: 4px;
        }

        .medicine-cabinet-section {
          padding: clamp(42px, 6vw, 74px) 0;
        }

        .medicine-cabinet-section--soft {
          background: linear-gradient(180deg, rgba(251, 246, 238, 0.84) 0%, rgba(255, 255, 255, 0.98) 100%);
        }

        .medicine-cabinet-section__head {
          display: grid;
          gap: 10px;
          margin-bottom: 28px;
          text-align: center;
        }

        .medicine-cabinet-section__head h2 {
          font-size: clamp(1.9rem, 3vw, 2.9rem);
          line-height: 1.06;
        }

        .medicine-cabinet-section__head::after {
          content: "";
          display: block;
          width: 82px;
          height: 3px;
          margin: 0 auto;
          border-radius: 999px;
          background: linear-gradient(90deg, #c7934f 0%, #debc8f 100%);
        }

        .medicine-cabinet-feature-row {
          display: grid;
          grid-template-columns: repeat(4, minmax(0, 1fr));
          gap: 18px;
        }

        .medicine-cabinet-feature,
        .medicine-cabinet-option,
        .medicine-cabinet-custom,
        .medicine-cabinet-application,
        .medicine-cabinet-process__item {
          border-radius: 24px;
          border: 1px solid rgba(32, 24, 18, 0.08);
          background: #fff;
          box-shadow: 0 18px 40px rgba(27, 20, 15, 0.05);
        }

        .medicine-cabinet-feature {
          display: grid;
          gap: 14px;
          padding: 22px 20px;
          text-align: left;
        }

        .medicine-cabinet-feature__icon,
        .medicine-cabinet-process__icon {
          display: inline-flex;
          align-items: center;
          justify-content: center;
          width: 52px;
          height: 52px;
          border-radius: 999px;
          background: rgba(199, 147, 79, 0.12);
          color: #c7934f;
        }

        .medicine-cabinet-feature__icon svg,
        .medicine-cabinet-process__icon svg {
          width: 24px;
          height: 24px;
        }

        .medicine-cabinet-feature h3,
        .medicine-cabinet-option__body h3,
        .medicine-cabinet-custom__copy h3,
        .medicine-cabinet-application__body h3,
        .medicine-cabinet-process__item h3 {
          margin: 0;
          font-size: 1rem;
          line-height: 1.35;
        }

        .medicine-cabinet-feature p,
        .medicine-cabinet-option__body p,
        .medicine-cabinet-application__body p,
        .medicine-cabinet-cta__copy p {
          margin: 0;
          color: var(--muted);
          line-height: 1.72;
        }

        .medicine-cabinet-options {
          display: grid;
          grid-template-columns: repeat(6, minmax(0, 1fr));
          gap: 16px;
        }

        .medicine-cabinet-option {
          overflow: hidden;
          display: grid;
        }

        .medicine-cabinet-option__media {
          overflow: hidden;
          aspect-ratio: 1 / 1.06;
          background: #f4ede2;
        }

        .medicine-cabinet-option__media img,
        .medicine-cabinet-custom__media img,
        .medicine-cabinet-application__media img,
        .medicine-cabinet-cta__panel img {
          display: block;
          width: 100%;
          height: 100%;
          object-fit: cover;
        }

        .medicine-cabinet-option__body {
          display: grid;
          gap: 10px;
          padding: 16px 14px 18px;
          text-align: center;
        }

        .medicine-cabinet-option__body a {
          color: #c7934f;
          font-weight: 700;
        }

        .medicine-cabinet-custom-grid {
          display: grid;
          grid-template-columns: repeat(4, minmax(0, 1fr));
          gap: 18px;
        }

        .medicine-cabinet-custom {
          display: grid;
          gap: 16px;
          padding: 22px;
        }

        .medicine-cabinet-custom__copy {
          display: grid;
          gap: 12px;
        }

        .medicine-cabinet-custom__copy ul {
          display: grid;
          gap: 8px;
          margin: 0;
          padding-left: 18px;
          color: var(--muted);
          line-height: 1.68;
        }

        .medicine-cabinet-custom__media {
          overflow: hidden;
          border-radius: 18px;
          aspect-ratio: 16 / 7;
          background: #f5eee3;
        }

        .medicine-cabinet-applications {
          display: grid;
          grid-template-columns: repeat(5, minmax(0, 1fr));
          gap: 16px;
        }

        .medicine-cabinet-application {
          overflow: hidden;
          display: grid;
        }

        .medicine-cabinet-application__media {
          overflow: hidden;
          aspect-ratio: 16 / 10;
          background: #f1eadf;
        }

        .medicine-cabinet-application__body {
          padding: 16px 16px 18px;
          text-align: center;
        }

        .medicine-cabinet-process {
          display: grid;
          grid-template-columns: repeat(7, minmax(0, 1fr));
          gap: 12px;
          align-items: stretch;
        }

        .medicine-cabinet-process__item {
          position: relative;
          display: grid;
          gap: 10px;
          justify-items: center;
          text-align: center;
          padding: 18px 14px;
        }

        .medicine-cabinet-process__item:not(:last-child)::after {
          content: "→";
          position: absolute;
          right: -10px;
          top: 50%;
          transform: translateY(-50%);
          color: #b79260;
          font-size: 1.25rem;
          font-weight: 700;
        }

        .medicine-cabinet-process__number {
          color: #b79260;
          font-size: 0.92rem;
          font-weight: 700;
        }

        .medicine-cabinet-cta {
          padding-bottom: clamp(42px, 6vw, 76px);
        }

        .medicine-cabinet-cta__panel {
          position: relative;
          overflow: hidden;
          border-radius: 28px;
          min-height: 300px;
          background: #19120d;
        }

        .medicine-cabinet-cta__panel img {
          position: absolute;
          inset: 0;
        }

        .medicine-cabinet-cta__panel::before {
          content: "";
          position: absolute;
          inset: 0;
          background: linear-gradient(90deg, rgba(21, 15, 11, 0.9) 0%, rgba(21, 15, 11, 0.76) 40%, rgba(21, 15, 11, 0.26) 100%);
          z-index: 1;
        }

        .medicine-cabinet-cta__copy {
          position: relative;
          z-index: 2;
          display: grid;
          gap: 16px;
          align-content: center;
          min-height: 300px;
          max-width: 34rem;
          padding: clamp(28px, 5vw, 54px);
          color: #fff8f0;
        }

        .medicine-cabinet-cta__copy h2 {
          font-size: clamp(2rem, 3.1vw, 3rem);
          line-height: 1.05;
        }

        .medicine-cabinet-cta__copy p {
          color: rgba(255, 246, 236, 0.84);
          max-width: 31rem;
        }

        @media (max-width: 1200px) {
          .medicine-cabinet-feature-row,
          .medicine-cabinet-custom-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
          }

          .medicine-cabinet-options {
            grid-template-columns: repeat(3, minmax(0, 1fr));
          }

          .medicine-cabinet-applications {
            grid-template-columns: repeat(2, minmax(0, 1fr));
          }

          .medicine-cabinet-process {
            grid-template-columns: repeat(4, minmax(0, 1fr));
          }

          .medicine-cabinet-process__item::after {
            display: none;
          }
        }

        @media (max-width: 760px) {
          .medicine-cabinet-feature-row,
          .medicine-cabinet-options,
          .medicine-cabinet-custom-grid,
          .medicine-cabinet-applications,
          .medicine-cabinet-process {
            grid-template-columns: 1fr;
          }

          .medicine-cabinet-hero__actions .button {
            width: 100%;
          }
        }
      </style>

      <div class="medicine-cabinet-page">
        <section class="medicine-cabinet-hero" style="--medicine-hero-image: url('<?php echo esc_url($mc_primary_image); ?>');">
          <div class="shell medicine-cabinet-hero__shell">
            <div class="medicine-cabinet-hero__copy">
              <p class="medicine-cabinet-hero__eyebrow"><?php esc_html_e('Medicine Cabinets', 'mirrorcraft'); ?></p>
              <h1><?php esc_html_e('LED Medicine Cabinets for Modern Bathroom Projects', 'mirrorcraft'); ?></h1>
              <p><?php esc_html_e('Custom mirror cabinets with lighting, storage, anti-fog, sockets, sensors, and OEM/ODM options for hotels, apartments, and commercial projects.', 'mirrorcraft'); ?></p>
              <div class="medicine-cabinet-hero__actions">
                <a class="button button-primary" href="<?php echo esc_url($mc_quote_url); ?>"><?php esc_html_e('Get Custom Quote', 'mirrorcraft'); ?></a>
                <a class="button button-secondary" href="#medicine-cabinet-options"><?php esc_html_e('View Cabinet Options', 'mirrorcraft'); ?></a>
              </div>
            </div>
          </div>
        </section>

        <section class="medicine-cabinet-section medicine-cabinet-section--soft">
          <div class="shell">
            <div class="medicine-cabinet-section__head">
              <h2><?php esc_html_e('More Than a Mirror, a Complete Bathroom Storage Solution', 'mirrorcraft'); ?></h2>
            </div>
            <div class="medicine-cabinet-feature-row">
              <?php foreach ($mc_feature_points as $point) : ?>
                <article class="medicine-cabinet-feature">
                  <span class="medicine-cabinet-feature__icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($point['icon']); ?></span>
                  <h3><?php echo esc_html($point['title']); ?></h3>
                  <p><?php echo esc_html($point['text']); ?></p>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="medicine-cabinet-section" id="medicine-cabinet-options">
          <div class="shell">
            <div class="medicine-cabinet-section__head">
              <h2><?php esc_html_e('Medicine Cabinet Options', 'mirrorcraft'); ?></h2>
            </div>
            <div class="medicine-cabinet-options">
              <?php foreach ($mc_option_cards as $card) : ?>
                <article class="medicine-cabinet-option">
                  <div class="medicine-cabinet-option__media">
                    <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
                  </div>
                  <div class="medicine-cabinet-option__body">
                    <h3><?php echo esc_html($card['title']); ?></h3>
                    <p><?php echo esc_html($card['text']); ?></p>
                    <a href="<?php echo esc_url($mc_quote_url); ?>"><?php esc_html_e('Customize This Model', 'mirrorcraft'); ?> &rarr;</a>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="medicine-cabinet-section medicine-cabinet-section--soft">
          <div class="shell">
            <div class="medicine-cabinet-section__head">
              <h2><?php esc_html_e('Custom Medicine Cabinets for Your Project', 'mirrorcraft'); ?></h2>
            </div>
            <div class="medicine-cabinet-custom-grid">
              <?php foreach ($mc_custom_cards as $card) : ?>
                <article class="medicine-cabinet-custom">
                  <div class="medicine-cabinet-custom__copy">
                    <h3><?php echo esc_html($card['title']); ?></h3>
                    <ul>
                      <?php foreach ($card['bullets'] as $bullet) : ?>
                        <li><?php echo esc_html($bullet); ?></li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                  <div class="medicine-cabinet-custom__media">
                    <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="medicine-cabinet-section">
          <div class="shell">
            <div class="medicine-cabinet-section__head">
              <h2><?php esc_html_e('Designed for Multiple Project Needs', 'mirrorcraft'); ?></h2>
            </div>
            <div class="medicine-cabinet-applications">
              <?php foreach ($mc_applications as $item) : ?>
                <article class="medicine-cabinet-application">
                  <div class="medicine-cabinet-application__media">
                    <img src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['title']); ?>" loading="lazy" decoding="async">
                  </div>
                  <div class="medicine-cabinet-application__body">
                    <h3><?php echo esc_html($item['title']); ?></h3>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="medicine-cabinet-section medicine-cabinet-section--soft">
          <div class="shell">
            <div class="medicine-cabinet-section__head">
              <h2><?php esc_html_e('Built for Long-Term Project Use', 'mirrorcraft'); ?></h2>
            </div>
            <div class="medicine-cabinet-process">
              <?php foreach ($mc_process_steps as $step) : ?>
                <article class="medicine-cabinet-process__item">
                  <span class="medicine-cabinet-process__number"><?php echo esc_html($step['number']); ?></span>
                  <span class="medicine-cabinet-process__icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($step['icon']); ?></span>
                  <h3><?php echo esc_html($step['title']); ?></h3>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="medicine-cabinet-cta">
          <div class="shell">
            <div class="medicine-cabinet-cta__panel">
              <img src="<?php echo esc_url($mc_real_estate_image ?: $mc_primary_image); ?>" alt="<?php esc_attr_e('Custom medicine cabinet project showcase', 'mirrorcraft'); ?>" loading="lazy" decoding="async">
              <div class="medicine-cabinet-cta__copy">
                <h2><?php esc_html_e('Need Custom Medicine Cabinets for Your Project?', 'mirrorcraft'); ?></h2>
                <p><?php esc_html_e('Send us your size, quantity, function requirements, or project drawings. Our team will provide a professional solution and quotation.', 'mirrorcraft'); ?></p>
                <div class="medicine-cabinet-hero__actions">
                  <a class="button button-primary" href="<?php echo esc_url($mc_quote_url); ?>"><?php esc_html_e('Request a Quote', 'mirrorcraft'); ?></a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <?php continue; ?>
    <?php endif; ?>

    <?php if ('framed-mirrors' === $page_slug) : ?>
      <?php
      $fm_quote_url = mirrorcraft_link_by_slug('contact', '/contact/');
      $fm_primary_image = mirrorcraft_theme_image_first_available_url(array(
        'product-bathroom-mirror.jpg',
        'real-estate-bathroom-mirror.png',
        'real-estate-bathroom-mirror.webp',
        'retail-store-fitting-mirror.png',
      ));

      if ($fm_primary_image === '') {
        $fm_primary_image = $hero_image;
      }

      $fm_metal_image = mirrorcraft_theme_image_first_available_url(array(
        'retail-store-fitting-mirror.png',
        'retail-store-fitting-mirror.webp',
        'real-estate-bathroom-mirror.png',
      ));
      $fm_wood_image = mirrorcraft_theme_image_first_available_url(array(
        'residential-led-bathroom-mirror.png',
        'residential-led-bathroom-mirror.webp',
        'senior-living-bathroom-mirror.png',
      ));
      $fm_black_image = mirrorcraft_theme_image_first_available_url(array(
        'hospitality-led-mirror-project.png',
        'hospitality-led-mirror-project.webp',
        'beauty-salon-led-mirror.png',
      ));
      $fm_gold_image = mirrorcraft_theme_image_first_available_url(array(
        'custom-mirrors-reference-20260422.png',
        'custom-mirrors-reference-20260422.webp',
        'beauty-salon-led-mirror.png',
      ));
      $fm_custom_image = mirrorcraft_theme_image_first_available_url(array(
        'custom-mirrors-reference-20260422.png',
        'custom-mirrors-reference-20260422.webp',
        'real-estate-bathroom-mirror.png',
      ));
      $fm_space_apartment = mirrorcraft_theme_image_first_available_url(array(
        'residential-led-bathroom-mirror.png',
        'residential-led-bathroom-mirror.webp',
        'senior-living-bathroom-mirror.png',
      ));
      $fm_space_bedroom = mirrorcraft_theme_image_first_available_url(array(
        'senior-living-bathroom-mirror.png',
        'senior-living-bathroom-mirror.webp',
        'residential-led-bathroom-mirror.png',
      ));
      $fm_space_hotel = mirrorcraft_theme_image_first_available_url(array(
        'hospitality-led-mirror-project.png',
        'hospitality-led-mirror-project.webp',
        'real-estate-bathroom-mirror.png',
      ));
      $fm_space_commercial = mirrorcraft_theme_image_first_available_url(array(
        'commercial-washroom-led-mirror.png',
        'commercial-washroom-led-mirror.webp',
        'retail-store-fitting-mirror.png',
      ));
      $fm_frame_detail = mirrorcraft_theme_image_first_available_url(array(
        'custom-solution-frames-20260422.png',
        'custom-solution-frames-20260422.webp',
      ));
      $fm_edge_detail = mirrorcraft_theme_image_first_available_url(array(
        'custom-solution-edge-finishes-20260422.png',
        'custom-solution-edge-finishes-20260422.webp',
      ));
      $fm_shape_detail = mirrorcraft_theme_image_first_available_url(array(
        'custom-solution-shapes-20260422.png',
        'custom-solution-shapes-20260422.webp',
      ));
      $fm_size_detail = mirrorcraft_theme_image_first_available_url(array(
        'custom-solution-sizes-20260422.png',
        'custom-solution-sizes-20260422.webp',
      ));

      $fm_collection_cards = array(
        array(
          'title' => __('Metal Frame Mirrors', 'mirrorcraft'),
          'text'  => __('Aluminum and stainless steel frame options for modern bathrooms and commercial spaces.', 'mirrorcraft'),
          'image' => $fm_metal_image ?: $fm_primary_image,
        ),
        array(
          'title' => __('Wood Frame Mirrors', 'mirrorcraft'),
          'text'  => __('Warm, natural finishes for residential, hospitality, and decorative interiors.', 'mirrorcraft'),
          'image' => $fm_wood_image ?: $fm_primary_image,
        ),
        array(
          'title' => __('Black Frame Mirrors', 'mirrorcraft'),
          'text'  => __('Minimalist and modern style for bathrooms, apartments, and hotel projects.', 'mirrorcraft'),
          'image' => $fm_black_image ?: $fm_primary_image,
        ),
        array(
          'title' => __('Gold & Brass Frame Mirrors', 'mirrorcraft'),
          'text'  => __('Luxury decorative framed mirrors for premium interior and branded project spaces.', 'mirrorcraft'),
          'image' => $fm_gold_image ?: $fm_primary_image,
        ),
      );

      $fm_custom_cards = array(
        array(
          'icon'  => 'frame',
          'title' => __('Frame Material', 'mirrorcraft'),
          'text'  => __('Aluminum, stainless steel, wood, brass-effect, and decorative finish options.', 'mirrorcraft'),
          'image' => $fm_frame_detail ?: $fm_primary_image,
        ),
        array(
          'icon'  => 'branding',
          'title' => __('Frame Color', 'mirrorcraft'),
          'text'  => __('Black, gold, silver, brushed nickel, bronze, and custom project colors.', 'mirrorcraft'),
          'image' => $fm_edge_detail ?: $fm_primary_image,
        ),
        array(
          'icon'  => 'shape',
          'title' => __('Mirror Shape', 'mirrorcraft'),
          'text'  => __('Rectangle, round, oval, arch, and special custom shapes for your line.', 'mirrorcraft'),
          'image' => $fm_shape_detail ?: $fm_primary_image,
        ),
        array(
          'icon'  => 'size',
          'title' => __('Size & Installation', 'mirrorcraft'),
          'text'  => __('Custom dimensions, wall-mounted formats, and project-based installation routes.', 'mirrorcraft'),
          'image' => $fm_size_detail ?: $fm_primary_image,
        ),
      );

      $fm_space_list = array(
        __('Hotels & Resorts', 'mirrorcraft'),
        __('Apartments & Residential Projects', 'mirrorcraft'),
        __('Retail Stores', 'mirrorcraft'),
        __('Salons & Beauty Spaces', 'mirrorcraft'),
        __('Commercial Bathrooms', 'mirrorcraft'),
        __('Interior Design Projects', 'mirrorcraft'),
      );

      $fm_space_gallery = array(
        array('title' => __('Apartment Vanity', 'mirrorcraft'), 'image' => $fm_space_apartment ?: $fm_primary_image),
        array('title' => __('Bedroom Feature Mirror', 'mirrorcraft'), 'image' => $fm_space_bedroom ?: $fm_primary_image),
        array('title' => __('Hotel Bathroom Project', 'mirrorcraft'), 'image' => $fm_space_hotel ?: $fm_primary_image),
        array('title' => __('Commercial Washroom', 'mirrorcraft'), 'image' => $fm_space_commercial ?: $fm_primary_image),
      );

      $fm_durability_points = array(
        array('icon' => 'eye', 'title' => __('High-definition silver mirror', 'mirrorcraft')),
        array('icon' => 'frame', 'title' => __('Durable frame construction', 'mirrorcraft')),
        array('icon' => 'anti-fog', 'title' => __('Moisture-resistant options', 'mirrorcraft')),
        array('icon' => 'shape', 'title' => __('Smooth edge finishing', 'mirrorcraft')),
        array('icon' => 'support', 'title' => __('Secure wall-mounting system', 'mirrorcraft')),
        array('icon' => 'branding', 'title' => __('OEM & ODM project support', 'mirrorcraft')),
      );

      $fm_gallery_cards = array(
        array('title' => __('Bathroom Framed Mirror', 'mirrorcraft'), 'image' => $fm_metal_image ?: $fm_primary_image),
        array('title' => __('Hotel Framed Mirror', 'mirrorcraft'), 'image' => $fm_space_hotel ?: $fm_primary_image),
        array('title' => __('Black Metal Frame Mirror', 'mirrorcraft'), 'image' => $fm_black_image ?: $fm_primary_image),
        array('title' => __('Gold Decorative Mirror', 'mirrorcraft'), 'image' => $fm_gold_image ?: $fm_primary_image),
        array('title' => __('Round Framed Mirror', 'mirrorcraft'), 'image' => $fm_space_bedroom ?: $fm_primary_image),
        array('title' => __('Custom Shape Mirror', 'mirrorcraft'), 'image' => $fm_custom_image ?: $fm_primary_image),
      );
      ?>
      <style>
        .framed-mirror-page {
          background: linear-gradient(180deg, #fffdfa 0%, #fff 36%, #fbf7f0 100%);
        }

        .framed-mirror-hero {
          position: relative;
          padding: clamp(72px, 9vw, 112px) 0 clamp(70px, 8vw, 104px);
          background-image:
            linear-gradient(90deg, rgba(17, 12, 8, 0.84) 0%, rgba(22, 15, 10, 0.82) 34%, rgba(23, 16, 11, 0.42) 56%, rgba(23, 16, 11, 0.18) 100%),
            var(--framed-hero-image);
          background-position: center;
          background-size: cover;
          background-repeat: no-repeat;
        }

        .framed-mirror-hero__shell {
          min-height: 520px;
          display: grid;
          align-items: center;
        }

        .framed-mirror-hero__copy {
          display: grid;
          gap: 22px;
          max-width: 34rem;
          color: #fff8f0;
        }

        .framed-mirror-hero__copy h1,
        .framed-mirror-section__head h2,
        .framed-mirror-spaces__copy h2,
        .framed-mirror-cta__copy h2 {
          margin: 0;
          font-family: Georgia, "Times New Roman", serif;
          font-weight: 700;
          letter-spacing: -0.04em;
        }

        .framed-mirror-hero__copy h1 {
          font-size: var(--mirrorcraft-display-hero-size, clamp(3.45rem, 4.6vw, 5.45rem));
          line-height: var(--mirrorcraft-display-hero-line, 0.9);
          max-width: 32rem;
        }

        .framed-mirror-hero__copy p {
          margin: 0;
          max-width: 31rem;
          color: rgba(255, 247, 236, 0.9);
          font-size: 1.04rem;
          line-height: 1.86;
        }

        .framed-mirror-hero__actions {
          display: flex;
          flex-wrap: wrap;
          gap: 14px;
          padding-top: 4px;
        }

        .framed-mirror-section {
          padding: clamp(44px, 6vw, 76px) 0;
        }

        .framed-mirror-section--soft {
          background: linear-gradient(180deg, rgba(251, 246, 238, 0.88) 0%, rgba(255, 255, 255, 0.98) 100%);
        }

        .framed-mirror-section__head {
          display: grid;
          gap: 12px;
          margin-bottom: 28px;
          text-align: center;
        }

        .framed-mirror-section__head h2,
        .framed-mirror-spaces__copy h2 {
          font-size: clamp(2rem, 3.1vw, 3rem);
          line-height: 1.05;
        }

        .framed-mirror-section__head::after,
        .framed-mirror-spaces__copy h2::after {
          content: "";
          display: block;
          width: 82px;
          height: 3px;
          margin: 0 auto;
          border-radius: 999px;
          background: linear-gradient(90deg, #c79b56 0%, #dfc292 100%);
        }

        .framed-mirror-collection,
        .framed-mirror-customization,
        .framed-mirror-gallery {
          display: grid;
          gap: 20px;
        }

        .framed-mirror-collection {
          grid-template-columns: repeat(4, minmax(0, 1fr));
        }

        .framed-mirror-collection__card,
        .framed-mirror-customization__card,
        .framed-mirror-gallery__card {
          overflow: hidden;
          border-radius: 26px;
          border: 1px solid rgba(32, 26, 18, 0.08);
          background: #fff;
          box-shadow: 0 18px 42px rgba(36, 26, 17, 0.06);
        }

        .framed-mirror-collection__media,
        .framed-mirror-gallery__media {
          overflow: hidden;
          background: #f3ede6;
        }

        .framed-mirror-collection__media {
          aspect-ratio: 1 / 1.15;
        }

        .framed-mirror-gallery__media {
          aspect-ratio: 16 / 11;
        }

        .framed-mirror-collection__media img,
        .framed-mirror-customization__media img,
        .framed-mirror-spaces__gallery-item img,
        .framed-mirror-gallery__media img,
        .framed-mirror-cta__panel img {
          display: block;
          width: 100%;
          height: 100%;
          object-fit: cover;
        }

        .framed-mirror-collection__body,
        .framed-mirror-gallery__body {
          display: grid;
          gap: 10px;
          padding: 18px 18px 22px;
          text-align: center;
        }

        .framed-mirror-collection__body h3,
        .framed-mirror-customization__copy h3,
        .framed-mirror-gallery__body h3,
        .framed-mirror-durability__item h3 {
          margin: 0;
          font-size: 1rem;
          line-height: 1.35;
        }

        .framed-mirror-collection__body p,
        .framed-mirror-customization__copy p,
        .framed-mirror-gallery__body p,
        .framed-mirror-cta__copy p {
          margin: 0;
          color: var(--muted);
          line-height: 1.72;
        }

        .framed-mirror-customization {
          grid-template-columns: repeat(4, minmax(0, 1fr));
        }

        .framed-mirror-customization__card {
          display: grid;
          gap: 18px;
          padding: 22px;
        }

        .framed-mirror-customization__copy {
          display: grid;
          gap: 12px;
        }

        .framed-mirror-customization__icon,
        .framed-mirror-durability__icon {
          display: inline-flex;
          align-items: center;
          justify-content: center;
          width: 52px;
          height: 52px;
          border-radius: 999px;
          background: rgba(199, 155, 86, 0.11);
          color: #c79b56;
        }

        .framed-mirror-customization__icon svg,
        .framed-mirror-durability__icon svg {
          width: 24px;
          height: 24px;
        }

        .framed-mirror-customization__media {
          overflow: hidden;
          border-radius: 18px;
          aspect-ratio: 16 / 8;
          background: #f6efe4;
        }

        .framed-mirror-spaces {
          display: grid;
          grid-template-columns: minmax(250px, 0.78fr) minmax(0, 1.22fr);
          gap: clamp(22px, 4vw, 34px);
          align-items: center;
        }

        .framed-mirror-spaces__copy {
          display: grid;
          gap: 20px;
        }

        .framed-mirror-spaces__copy h2 {
          max-width: 16rem;
          text-align: left;
        }

        .framed-mirror-spaces__copy h2::after {
          margin-left: 0;
          margin-right: 0;
        }

        .framed-mirror-spaces__list {
          display: grid;
          gap: 14px;
          margin: 0;
          padding: 0;
          list-style: none;
        }

        .framed-mirror-spaces__list li {
          position: relative;
          padding-left: 22px;
          color: var(--muted);
          line-height: 1.65;
        }

        .framed-mirror-spaces__list li::before {
          content: "";
          position: absolute;
          left: 0;
          top: 0.72em;
          width: 8px;
          height: 8px;
          border-radius: 999px;
          background: linear-gradient(180deg, #c79b56 0%, #e1c490 100%);
          transform: translateY(-50%);
        }

        .framed-mirror-spaces__gallery {
          display: grid;
          grid-template-columns: repeat(4, minmax(0, 1fr));
          gap: 14px;
        }

        .framed-mirror-spaces__gallery-item {
          overflow: hidden;
          border-radius: 24px;
          min-height: 300px;
          box-shadow: 0 20px 38px rgba(22, 15, 10, 0.08);
          background: #f2e7d8;
        }

        .framed-mirror-durability {
          display: grid;
          grid-template-columns: repeat(6, minmax(0, 1fr));
          gap: 14px;
        }

        .framed-mirror-durability__item {
          display: grid;
          gap: 12px;
          justify-items: center;
          text-align: center;
          padding: 18px 12px;
        }

        .framed-mirror-gallery {
          grid-template-columns: repeat(6, minmax(0, 1fr));
        }

        .framed-mirror-cta {
          padding-bottom: clamp(42px, 6vw, 76px);
        }

        .framed-mirror-cta__panel {
          position: relative;
          overflow: hidden;
          border-radius: 28px;
          min-height: 290px;
          background: #1c140e;
        }

        .framed-mirror-cta__panel img {
          position: absolute;
          inset: 0;
        }

        .framed-mirror-cta__panel::before {
          content: "";
          position: absolute;
          inset: 0;
          background: linear-gradient(90deg, rgba(24, 16, 11, 0.88) 0%, rgba(24, 16, 11, 0.72) 36%, rgba(24, 16, 11, 0.35) 100%);
          z-index: 1;
        }

        .framed-mirror-cta__copy {
          position: relative;
          z-index: 2;
          display: grid;
          gap: 18px;
          align-content: center;
          min-height: 290px;
          max-width: 34rem;
          padding: clamp(28px, 5vw, 54px);
          color: #fff8f0;
        }

        .framed-mirror-cta__copy h2 {
          font-size: clamp(2rem, 3.2vw, 3rem);
          line-height: 1.04;
        }

        .framed-mirror-cta__copy p {
          color: rgba(255, 247, 236, 0.85);
        }

        @media (max-width: 1180px) {
          .framed-mirror-collection,
          .framed-mirror-customization {
            grid-template-columns: repeat(2, minmax(0, 1fr));
          }

          .framed-mirror-spaces,
          .framed-mirror-gallery {
            grid-template-columns: 1fr;
          }

          .framed-mirror-spaces__gallery {
            grid-template-columns: repeat(2, minmax(0, 1fr));
          }

          .framed-mirror-durability {
            grid-template-columns: repeat(3, minmax(0, 1fr));
          }
        }

        @media (max-width: 760px) {
          .framed-mirror-collection,
          .framed-mirror-customization,
          .framed-mirror-spaces__gallery,
          .framed-mirror-durability,
          .framed-mirror-gallery {
            grid-template-columns: 1fr;
          }

          .framed-mirror-hero__actions .button {
            width: 100%;
          }

          .framed-mirror-hero__copy h1 {
            max-width: 16rem;
          }
        }
      </style>

      <div class="framed-mirror-page">
        <section class="framed-mirror-hero" style="--framed-hero-image: url('<?php echo esc_url($fm_primary_image); ?>');">
          <div class="shell framed-mirror-hero__shell">
            <div class="framed-mirror-hero__copy">
              <h1><?php esc_html_e('Custom Framed Mirrors for Residential & Commercial Projects', 'mirrorcraft'); ?></h1>
              <p><?php esc_html_e('Premium framed mirrors with customizable sizes, finishes, shapes, and frame materials for hotels, apartments, retail, and interior design projects.', 'mirrorcraft'); ?></p>
              <div class="framed-mirror-hero__actions">
                <a class="button button-primary" href="<?php echo esc_url($fm_quote_url); ?>"><?php esc_html_e('Request a Quote', 'mirrorcraft'); ?></a>
                <a class="button button-secondary" href="#framed-customization"><?php esc_html_e('View Custom Options', 'mirrorcraft'); ?></a>
              </div>
            </div>
          </div>
        </section>

        <section class="framed-mirror-section">
          <div class="shell">
            <div class="framed-mirror-section__head">
              <h2><?php esc_html_e('Framed Mirrors Collection', 'mirrorcraft'); ?></h2>
            </div>
            <div class="framed-mirror-collection">
              <?php foreach ($fm_collection_cards as $card) : ?>
                <article class="framed-mirror-collection__card">
                  <div class="framed-mirror-collection__media">
                    <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
                  </div>
                  <div class="framed-mirror-collection__body">
                    <h3><?php echo esc_html($card['title']); ?></h3>
                    <p><?php echo esc_html($card['text']); ?></p>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="framed-mirror-section framed-mirror-section--soft" id="framed-customization">
          <div class="shell">
            <div class="framed-mirror-section__head">
              <h2><?php esc_html_e('Flexible Customization for Your Project', 'mirrorcraft'); ?></h2>
            </div>
            <div class="framed-mirror-customization">
              <?php foreach ($fm_custom_cards as $card) : ?>
                <article class="framed-mirror-customization__card">
                  <div class="framed-mirror-customization__copy">
                    <span class="framed-mirror-customization__icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($card['icon']); ?></span>
                    <h3><?php echo esc_html($card['title']); ?></h3>
                    <p><?php echo esc_html($card['text']); ?></p>
                  </div>
                  <div class="framed-mirror-customization__media">
                    <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="framed-mirror-section">
          <div class="shell framed-mirror-spaces">
            <div class="framed-mirror-spaces__copy">
              <h2><?php esc_html_e('Designed for Multiple Project Spaces', 'mirrorcraft'); ?></h2>
              <ul class="framed-mirror-spaces__list">
                <?php foreach ($fm_space_list as $item) : ?>
                  <li><?php echo esc_html($item); ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
            <div class="framed-mirror-spaces__gallery">
              <?php foreach ($fm_space_gallery as $item) : ?>
                <div class="framed-mirror-spaces__gallery-item">
                  <img src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['title']); ?>" loading="lazy" decoding="async">
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="framed-mirror-section framed-mirror-section--soft">
          <div class="shell">
            <div class="framed-mirror-section__head">
              <h2><?php esc_html_e('Built for Long-Term Use', 'mirrorcraft'); ?></h2>
            </div>
            <div class="framed-mirror-durability">
              <?php foreach ($fm_durability_points as $point) : ?>
                <article class="framed-mirror-durability__item">
                  <span class="framed-mirror-durability__icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($point['icon']); ?></span>
                  <h3><?php echo esc_html($point['title']); ?></h3>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="framed-mirror-section">
          <div class="shell">
            <div class="framed-mirror-section__head">
              <h2><?php esc_html_e('Project Gallery', 'mirrorcraft'); ?></h2>
            </div>
            <div class="framed-mirror-gallery">
              <?php foreach ($fm_gallery_cards as $card) : ?>
                <article class="framed-mirror-gallery__card">
                  <div class="framed-mirror-gallery__media">
                    <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
                  </div>
                  <div class="framed-mirror-gallery__body">
                    <h3><?php echo esc_html($card['title']); ?></h3>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="framed-mirror-cta">
          <div class="shell">
            <div class="framed-mirror-cta__panel">
              <img src="<?php echo esc_url($fm_black_image ?: $fm_primary_image); ?>" alt="<?php esc_attr_e('Custom framed mirror project showcase', 'mirrorcraft'); ?>" loading="lazy" decoding="async">
              <div class="framed-mirror-cta__copy">
                <h2><?php esc_html_e('Need Custom Framed Mirrors for Your Project?', 'mirrorcraft'); ?></h2>
                <p><?php esc_html_e('Send us your size, frame finish, quantity, and project requirements. Our team can provide a customized solution for your order.', 'mirrorcraft'); ?></p>
                <div class="framed-mirror-hero__actions">
                  <a class="button button-primary" href="<?php echo esc_url($fm_quote_url); ?>"><?php esc_html_e('Contact Us Now', 'mirrorcraft'); ?></a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <?php continue; ?>
    <?php endif; ?>

    <?php if ('full-length-mirrors' === $page_slug) : ?>
      <?php
      $fl_quote_url = mirrorcraft_link_by_slug('contact', '/contact/');
      $fl_products_url = mirrorcraft_link_by_slug('products', '/products/');
      $fl_custom_url = mirrorcraft_get_product_category_page_link('custom-mirrors');
      $fl_page_url = mirrorcraft_get_product_category_page_link('full-length-mirrors');

      $fl_primary_image = mirrorcraft_theme_image_first_available_url(array(
        'gym-fitness-mirror.webp',
        'gym-fitness-mirror.png',
        'residential-led-bathroom-mirror.webp',
        'residential-led-bathroom-mirror.png',
        'airport-public-mirror.webp',
        'airport-public-mirror.png',
      ));
      $fl_hotel_image = mirrorcraft_theme_image_first_available_url(array('hospitality-led-mirror-project.png', 'hospitality-led-mirror-project.webp'));
      $fl_residential_image = mirrorcraft_theme_image_first_available_url(array('residential-led-bathroom-mirror.png', 'residential-led-bathroom-mirror.webp'));
      $fl_dressing_image = mirrorcraft_theme_image_first_available_url(array('custom-mirrors-reference-20260422.png', 'custom-mirrors-reference-20260422.webp'));
      $fl_retail_image = mirrorcraft_theme_image_first_available_url(array('retail-store-fitting-mirror.png', 'retail-store-fitting-mirror.webp'));
      $fl_salon_image = mirrorcraft_theme_image_first_available_url(array('beauty-salon-led-mirror.png', 'beauty-salon-led-mirror.webp'));
      $fl_villa_image = mirrorcraft_theme_image_first_available_url(array('real-estate-bathroom-mirror.png', 'real-estate-bathroom-mirror.webp'));
      $fl_led_image = mirrorcraft_theme_image_first_available_url(array('home-hero-banner-20260423c.webp', 'home-hero-banner-20260423c.jpg', 'home-hero-banner-20260422.webp'));
      $fl_frame_image = mirrorcraft_theme_image_first_available_url(array('custom-solution-frames-20260422.png', 'custom-solution-frames-20260422.webp'));
      $fl_edge_image = mirrorcraft_theme_image_first_available_url(array('custom-solution-edge-finishes-20260422.png', 'custom-solution-edge-finishes-20260422.webp'));
      $fl_sizes_image = mirrorcraft_theme_image_first_available_url(array('custom-solution-sizes-20260422.png', 'custom-solution-sizes-20260422.webp'));
      $fl_feature_image = mirrorcraft_theme_image_first_available_url(array('custom-solution-features-20260422.png', 'custom-solution-features-20260422.webp'));
      $fl_inspection_image = mirrorcraft_theme_image_first_available_url(array('who-we-are-inspection.png', 'who-we-are-inspection.webp'));
      $fl_warehouse_image = mirrorcraft_theme_image_first_available_url(array('who-we-are-warehouse.png', 'who-we-are-warehouse.webp'));

      if ($fl_primary_image === '') {
        $fl_primary_image = $hero_image !== '' ? $hero_image : ($fl_residential_image ?: $fl_hotel_image);
      }

      if ($fl_led_image === '') {
        $fl_led_image = $fl_primary_image;
      }

      $fl_intro_points = array(
        array(
          'icon'  => 'eye',
          'title' => __('Full-body reflection', 'mirrorcraft'),
          'text'  => __('For bedrooms, hotels, dressing rooms, and project suites.', 'mirrorcraft'),
        ),
        array(
          'icon'  => 'size',
          'title' => __('Custom sizes, frames, shapes and finishes', 'mirrorcraft'),
          'text'  => __('Built for branded collections and project-specific requirements.', 'mirrorcraft'),
        ),
        array(
          'icon'  => 'frame',
          'title' => __('Tempered / safety backing options', 'mirrorcraft'),
          'text'  => __('Safer structures for large-format mirrors and installation planning.', 'mirrorcraft'),
        ),
        array(
          'icon'  => 'branding',
          'title' => __('OEM & ODM support', 'mirrorcraft'),
          'text'  => __('Flexible development support for wholesale and large-scale buyers.', 'mirrorcraft'),
        ),
      );

      $fl_option_cards = array(
        array(
          'title' => __('Frameless Full Length Mirrors', 'mirrorcraft'),
          'image' => $fl_residential_image ?: $fl_primary_image,
          'link'  => $fl_page_url,
        ),
        array(
          'title' => __('Framed Full Length Mirrors', 'mirrorcraft'),
          'image' => $fl_frame_image ?: $fl_hotel_image ?: $fl_primary_image,
          'link'  => mirrorcraft_get_product_category_page_link('framed-mirrors'),
        ),
        array(
          'title' => __('LED Full Length Mirrors', 'mirrorcraft'),
          'image' => $fl_led_image ?: $fl_primary_image,
          'link'  => mirrorcraft_get_product_category_page_link('smart-mirrors'),
        ),
        array(
          'title' => __('Arched Full Length Mirrors', 'mirrorcraft'),
          'image' => $fl_dressing_image ?: $fl_primary_image,
          'link'  => $fl_custom_url,
        ),
        array(
          'title' => __('Wall Mounted Mirrors', 'mirrorcraft'),
          'image' => $fl_villa_image ?: $fl_residential_image ?: $fl_primary_image,
          'link'  => $fl_page_url,
        ),
        array(
          'title' => __('Freestanding Mirrors', 'mirrorcraft'),
          'image' => $fl_primary_image,
          'link'  => $fl_page_url,
        ),
      );

      $fl_spaces = array(
        array('title' => __('Hotels & Resorts', 'mirrorcraft'), 'image' => $fl_hotel_image ?: $fl_primary_image),
        array('title' => __('Apartments & Residential Projects', 'mirrorcraft'), 'image' => $fl_residential_image ?: $fl_primary_image),
        array('title' => __('Dressing Rooms', 'mirrorcraft'), 'image' => $fl_dressing_image ?: $fl_primary_image),
        array('title' => __('Retail Fitting Rooms', 'mirrorcraft'), 'image' => $fl_retail_image ?: $fl_primary_image),
        array('title' => __('Beauty Salons', 'mirrorcraft'), 'image' => $fl_salon_image ?: $fl_primary_image),
        array('title' => __('Luxury Villas', 'mirrorcraft'), 'image' => $fl_villa_image ?: $fl_primary_image),
      );

      $fl_custom_points = array(
        array('icon' => 'size', 'title' => __('Size', 'mirrorcraft')),
        array('icon' => 'shape', 'title' => __('Shape', 'mirrorcraft')),
        array('icon' => 'frame', 'title' => __('Frame Material', 'mirrorcraft')),
        array('icon' => 'branding', 'title' => __('Frame Color', 'mirrorcraft')),
        array('icon' => 'eye', 'title' => __('Edge Finish', 'mirrorcraft')),
        array('icon' => 'light', 'title' => __('LED Lighting', 'mirrorcraft')),
        array('icon' => 'support', 'title' => __('Safety Backing', 'mirrorcraft')),
        array('icon' => 'quote', 'title' => __('Packaging', 'mirrorcraft')),
      );

      $fl_buyer_points = array(
        array('icon' => 'commercial', 'title' => __('Bulk order production', 'mirrorcraft')),
        array('icon' => 'eye', 'title' => __('Stable quality control', 'mirrorcraft')),
        array('icon' => 'quote', 'title' => __('Custom packaging', 'mirrorcraft')),
        array('icon' => 'branding', 'title' => __('Project-based supply', 'mirrorcraft')),
        array('icon' => 'globe', 'title' => __('Export experience', 'mirrorcraft')),
      );

      $fl_solution_cards = array(
        array(
          'title' => __('Hotel Guest Room Mirror', 'mirrorcraft'),
          'text'  => __('Durable and elegant mirrors designed to elevate the guest room experience.', 'mirrorcraft'),
          'image' => $fl_hotel_image ?: $fl_primary_image,
          'link'  => $fl_quote_url,
        ),
        array(
          'title' => __('Apartment Dressing Mirror', 'mirrorcraft'),
          'text'  => __('Custom sizes and finishes that fit modern residential projects perfectly.', 'mirrorcraft'),
          'image' => $fl_dressing_image ?: $fl_residential_image ?: $fl_primary_image,
          'link'  => $fl_quote_url,
        ),
        array(
          'title' => __('Retail Fitting Room Mirror', 'mirrorcraft'),
          'text'  => __('High-quality mirrors that support a more polished shopping experience.', 'mirrorcraft'),
          'image' => $fl_retail_image ?: $fl_primary_image,
          'link'  => $fl_quote_url,
        ),
      );

      $fl_faq_items = array(
        array(
          'question' => __('Can I customize the size?', 'mirrorcraft'),
          'answer'   => __('Yes. We support project-specific height, width, frame depth, mounting routes, and packaging for wholesale and commercial requirements.', 'mirrorcraft'),
        ),
        array(
          'question' => __('Do you offer framed and frameless options?', 'mirrorcraft'),
          'answer'   => __('Yes. Framed, frameless, LED, arched, and freestanding full length mirror options are available depending on your program and target market.', 'mirrorcraft'),
        ),
        array(
          'question' => __('Can you make LED full-length mirrors?', 'mirrorcraft'),
          'answer'   => __('Yes. Front-lit and backlit full length mirror solutions can be developed with dimming, CCT adjustment, anti-fog, and other smart functions.', 'mirrorcraft'),
        ),
        array(
          'question' => __('What packaging do you use for large mirrors?', 'mirrorcraft'),
          'answer'   => __('We can support foam protection, corner guards, carton reinforcement, and export-ready packaging routes for long-distance transportation.', 'mirrorcraft'),
        ),
        array(
          'question' => __('Do you support hotel or apartment projects?', 'mirrorcraft'),
          'answer'   => __('Yes. We regularly support hospitality, residential, retail, and developer projects that need stable supply, quality control, and custom specifications.', 'mirrorcraft'),
        ),
      );
      ?>
      <style>
        .full-length-mirror-page {
          background: linear-gradient(180deg, #fffdfa 0%, #fbf7f1 52%, #ffffff 100%);
        }

        .full-length-mirror-hero {
          padding: clamp(82px, 9vw, 122px) 0 clamp(62px, 7vw, 92px);
          background: linear-gradient(90deg, rgba(255, 248, 238, 0.96) 0%, rgba(255, 248, 238, 0.9) 34%, rgba(255, 248, 238, 0.25) 60%, rgba(255, 248, 238, 0.08) 100%);
        }

        .full-length-mirror-hero__shell {
          display: grid;
          grid-template-columns: minmax(0, 0.88fr) minmax(0, 1.12fr);
          align-items: center;
          gap: clamp(22px, 4vw, 42px);
        }

        .full-length-mirror-hero__copy {
          display: grid;
          gap: 18px;
          max-width: 31rem;
        }

        .full-length-mirror-hero__eyebrow {
          display: inline-flex;
          align-items: center;
          width: fit-content;
          padding: 7px 12px;
          border-radius: 999px;
          background: rgba(138, 92, 59, 0.1);
          color: #8a5c3b;
          font-size: 0.76rem;
          font-weight: 700;
          letter-spacing: 0.14em;
          text-transform: uppercase;
        }

        .full-length-mirror-hero__copy h1 {
          margin: 0;
          max-width: 17rem;
          font-size: var(--mirrorcraft-display-hero-size, clamp(3.45rem, 4.6vw, 5.45rem));
          line-height: var(--mirrorcraft-display-hero-line, 0.9);
          letter-spacing: var(--mirrorcraft-display-hero-track, -0.04em);
        }

        .full-length-mirror-hero__lead {
          margin: 0;
          max-width: 30rem;
          color: #54483f;
          font-size: 1.08rem;
          line-height: 1.8;
        }

        .full-length-mirror-hero__actions {
          display: flex;
          flex-wrap: wrap;
          gap: 14px;
          margin-top: 8px;
        }

        .full-length-mirror-hero__media {
          overflow: hidden;
          min-height: 620px;
          border-radius: 30px;
          background: #efe7dc;
          box-shadow: 0 28px 58px rgba(59, 41, 22, 0.12);
        }

        .full-length-mirror-hero__media img,
        .full-length-mirror-option__media img,
        .full-length-mirror-space__media img,
        .full-length-mirror-solution__media img,
        .full-length-mirror-cta__panel img {
          display: block;
          width: 100%;
          height: 100%;
          object-fit: cover;
        }

        .full-length-mirror-section {
          padding: clamp(42px, 6vw, 78px) 0;
        }

        .full-length-mirror-section--soft {
          background: linear-gradient(180deg, rgba(255, 252, 247, 0.9) 0%, rgba(250, 244, 236, 0.94) 100%);
        }

        .full-length-mirror-section__head {
          display: grid;
          gap: 10px;
          margin-bottom: 28px;
          text-align: center;
        }

        .full-length-mirror-section__head h2 {
          margin: 0;
          font-size: clamp(2rem, 3vw, 2.95rem);
          line-height: 1.04;
          letter-spacing: -0.04em;
        }

        .full-length-mirror-intro {
          display: grid;
          grid-template-columns: repeat(4, minmax(0, 1fr));
          gap: 18px;
        }

        .full-length-mirror-intro__item,
        .full-length-mirror-option,
        .full-length-mirror-custom__item,
        .full-length-mirror-buyer__item,
        .full-length-mirror-solution,
        .full-length-mirror-faq {
          border-radius: 24px;
          border: 1px solid rgba(26, 22, 18, 0.08);
          background: #fff;
          box-shadow: 0 18px 40px rgba(37, 27, 17, 0.05);
        }

        .full-length-mirror-intro__item {
          display: grid;
          gap: 14px;
          justify-items: center;
          padding: 24px 18px;
          text-align: center;
        }

        .full-length-mirror-intro__icon,
        .full-length-mirror-custom__icon,
        .full-length-mirror-buyer__icon {
          display: inline-flex;
          align-items: center;
          justify-content: center;
          width: 58px;
          height: 58px;
          border-radius: 999px;
          background: rgba(138, 92, 59, 0.09);
          color: #8a5c3b;
        }

        .full-length-mirror-intro__icon svg,
        .full-length-mirror-custom__icon svg,
        .full-length-mirror-buyer__icon svg {
          width: 28px;
          height: 28px;
        }

        .full-length-mirror-intro__item h3,
        .full-length-mirror-custom__item h3,
        .full-length-mirror-buyer__item h3,
        .full-length-mirror-option__body h3,
        .full-length-mirror-space__body h3,
        .full-length-mirror-solution__body h3 {
          margin: 0;
          font-size: 1.02rem;
          line-height: 1.3;
        }

        .full-length-mirror-intro__item p,
        .full-length-mirror-solution__body p,
        .full-length-mirror-faq p {
          margin: 0;
          color: var(--muted);
          line-height: 1.72;
        }

        .full-length-mirror-options {
          display: grid;
          grid-template-columns: repeat(6, minmax(0, 1fr));
          gap: 16px;
        }

        .full-length-mirror-option {
          display: grid;
          overflow: hidden;
        }

        .full-length-mirror-option__media {
          aspect-ratio: 1 / 1.24;
          background: #f1ebe2;
        }

        .full-length-mirror-option__body {
          display: grid;
          gap: 10px;
          padding: 16px 14px 20px;
          text-align: center;
        }

        .full-length-mirror-option__body a,
        .full-length-mirror-solution__body a {
          color: #8a5c3b;
          font-weight: 700;
        }

        .full-length-mirror-spaces {
          display: grid;
          grid-template-columns: repeat(6, minmax(0, 1fr));
          gap: 16px;
        }

        .full-length-mirror-space {
          display: grid;
          gap: 12px;
        }

        .full-length-mirror-space__media {
          overflow: hidden;
          border-radius: 22px;
          aspect-ratio: 16 / 11;
          box-shadow: 0 16px 36px rgba(45, 32, 19, 0.07);
          background: #f1ebe2;
        }

        .full-length-mirror-space__body {
          text-align: center;
        }

        .full-length-mirror-custom {
          display: grid;
          gap: 22px;
        }

        .full-length-mirror-custom__grid {
          display: grid;
          grid-template-columns: repeat(8, minmax(0, 1fr));
          gap: 16px;
        }

        .full-length-mirror-custom__item {
          display: grid;
          gap: 12px;
          justify-items: center;
          padding: 18px 12px;
          text-align: center;
        }

        .full-length-mirror-custom__actions {
          display: flex;
          justify-content: center;
        }

        .full-length-mirror-buyer {
          display: grid;
          grid-template-columns: repeat(5, minmax(0, 1fr));
          gap: 18px;
        }

        .full-length-mirror-buyer__item {
          display: grid;
          gap: 12px;
          justify-items: center;
          padding: 24px 18px;
          text-align: center;
        }

        .full-length-mirror-solutions {
          display: grid;
          grid-template-columns: repeat(3, minmax(0, 1fr));
          gap: 18px;
        }

        .full-length-mirror-solution {
          display: grid;
          overflow: hidden;
        }

        .full-length-mirror-solution__media {
          aspect-ratio: 16 / 10;
          background: #f1ebe2;
        }

        .full-length-mirror-solution__body {
          display: grid;
          gap: 10px;
          padding: 18px 18px 22px;
        }

        .full-length-mirror-faqs {
          display: grid;
          gap: 14px;
        }

        .full-length-mirror-faq {
          overflow: hidden;
        }

        .full-length-mirror-faq summary {
          position: relative;
          list-style: none;
          cursor: pointer;
          padding: 18px 54px 18px 20px;
          font-weight: 700;
          line-height: 1.55;
        }

        .full-length-mirror-faq summary::-webkit-details-marker {
          display: none;
        }

        .full-length-mirror-faq summary::after {
          content: "+";
          position: absolute;
          top: 50%;
          right: 20px;
          transform: translateY(-50%);
          color: #8a5c3b;
          font-size: 1.5rem;
          line-height: 1;
        }

        .full-length-mirror-faq[open] summary::after {
          content: "−";
        }

        .full-length-mirror-faq p {
          padding: 0 20px 20px;
        }

        .full-length-mirror-cta {
          padding-bottom: clamp(48px, 7vw, 88px);
        }

        .full-length-mirror-cta__panel {
          position: relative;
          overflow: hidden;
          border-radius: 30px;
          min-height: 330px;
          background: #1c1510;
          box-shadow: 0 24px 56px rgba(35, 24, 16, 0.14);
        }

        .full-length-mirror-cta__panel img {
          position: absolute;
          inset: 0;
          z-index: 0;
        }

        .full-length-mirror-cta__overlay {
          position: relative;
          z-index: 1;
          display: grid;
          align-content: center;
          gap: 18px;
          min-height: 330px;
          max-width: 34rem;
          padding: clamp(28px, 4vw, 42px);
          background: linear-gradient(90deg, rgba(24, 18, 13, 0.92) 0%, rgba(24, 18, 13, 0.78) 58%, rgba(24, 18, 13, 0.18) 100%);
          color: #fff;
        }

        .full-length-mirror-cta__overlay h2 {
          margin: 0;
          font-size: clamp(2rem, 3vw, 3rem);
          line-height: 1.04;
          letter-spacing: -0.04em;
          color: #fff;
        }

        .full-length-mirror-cta__overlay p {
          margin: 0;
          color: rgba(255, 255, 255, 0.82);
          line-height: 1.8;
        }

        .full-length-mirror-page .button.button-secondary {
          background: rgba(255, 255, 255, 0.78);
          color: #35261b;
          border-color: rgba(53, 38, 27, 0.16);
        }

        .full-length-mirror-page .button.button-secondary:hover,
        .full-length-mirror-page .button.button-secondary:focus-visible {
          background: rgba(255, 255, 255, 0.94);
          border-color: rgba(53, 38, 27, 0.28);
        }

        @media (max-width: 1240px) {
          .full-length-mirror-options,
          .full-length-mirror-spaces {
            grid-template-columns: repeat(3, minmax(0, 1fr));
          }

          .full-length-mirror-custom__grid {
            grid-template-columns: repeat(4, minmax(0, 1fr));
          }

          .full-length-mirror-buyer {
            grid-template-columns: repeat(5, minmax(0, 1fr));
          }
        }

        @media (max-width: 980px) {
          .full-length-mirror-hero__shell,
          .full-length-mirror-solutions,
          .full-length-mirror-intro,
          .full-length-mirror-buyer {
            grid-template-columns: repeat(2, minmax(0, 1fr));
          }

          .full-length-mirror-hero__copy {
            max-width: 100%;
          }

          .full-length-mirror-hero__copy h1 {
            max-width: 100%;
          }

          .full-length-mirror-hero__media {
            min-height: 460px;
          }
        }

        @media (max-width: 760px) {
          .full-length-mirror-hero__shell,
          .full-length-mirror-intro,
          .full-length-mirror-options,
          .full-length-mirror-spaces,
          .full-length-mirror-custom__grid,
          .full-length-mirror-buyer,
          .full-length-mirror-solutions {
            grid-template-columns: 1fr;
          }

          .full-length-mirror-hero {
            padding-top: 74px;
          }

          .full-length-mirror-hero__media {
            min-height: 340px;
          }

          .full-length-mirror-hero__actions .button,
          .full-length-mirror-custom__actions .button {
            width: 100%;
          }
        }
      </style>

      <div class="full-length-mirror-page">
        <section class="full-length-mirror-hero">
          <div class="shell full-length-mirror-hero__shell">
            <div class="full-length-mirror-hero__copy">
              <span class="full-length-mirror-hero__eyebrow"><?php esc_html_e('Premium Quality Mirrors', 'mirrorcraft'); ?></span>
              <h1><?php esc_html_e('Full Length Mirrors', 'mirrorcraft'); ?></h1>
              <p class="full-length-mirror-hero__lead"><?php esc_html_e('Custom full-length mirrors for hospitality, residential, retail, and commercial projects with flexible OEM / ODM development support.', 'mirrorcraft'); ?></p>
              <div class="full-length-mirror-hero__actions">
                <a class="button button-primary" href="<?php echo esc_url($fl_quote_url); ?>"><?php esc_html_e('Request a Quote', 'mirrorcraft'); ?></a>
                <a class="button button-secondary" href="<?php echo esc_url($fl_custom_url); ?>"><?php esc_html_e('View Custom Options', 'mirrorcraft'); ?></a>
              </div>
            </div>
            <div class="full-length-mirror-hero__media">
              <img src="<?php echo esc_url($fl_primary_image); ?>" alt="<?php esc_attr_e('Full length mirror project showcase', 'mirrorcraft'); ?>" loading="eager" decoding="async">
            </div>
          </div>
        </section>

        <section class="full-length-mirror-section">
          <div class="shell">
            <div class="full-length-mirror-section__head">
              <h2><?php esc_html_e('Designed for Style, Safety & Large-Scale Projects', 'mirrorcraft'); ?></h2>
            </div>
            <div class="full-length-mirror-intro">
              <?php foreach ($fl_intro_points as $point) : ?>
                <article class="full-length-mirror-intro__item">
                  <span class="full-length-mirror-intro__icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($point['icon']); ?></span>
                  <h3><?php echo esc_html($point['title']); ?></h3>
                  <p><?php echo esc_html($point['text']); ?></p>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="full-length-mirror-section full-length-mirror-section--soft">
          <div class="shell">
            <div class="full-length-mirror-section__head">
              <h2><?php esc_html_e('Full Length Mirror Options', 'mirrorcraft'); ?></h2>
            </div>
            <div class="full-length-mirror-options">
              <?php foreach ($fl_option_cards as $card) : ?>
                <article class="full-length-mirror-option">
                  <div class="full-length-mirror-option__media">
                    <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
                  </div>
                  <div class="full-length-mirror-option__body">
                    <h3><?php echo esc_html($card['title']); ?></h3>
                    <a href="<?php echo esc_url($card['link']); ?>"><?php esc_html_e('View More', 'mirrorcraft'); ?> &rarr;</a>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="full-length-mirror-section">
          <div class="shell">
            <div class="full-length-mirror-section__head">
              <h2><?php esc_html_e('Ideal for Multiple Spaces', 'mirrorcraft'); ?></h2>
            </div>
            <div class="full-length-mirror-spaces">
              <?php foreach ($fl_spaces as $space) : ?>
                <article class="full-length-mirror-space">
                  <div class="full-length-mirror-space__media">
                    <img src="<?php echo esc_url($space['image']); ?>" alt="<?php echo esc_attr($space['title']); ?>" loading="lazy" decoding="async">
                  </div>
                  <div class="full-length-mirror-space__body">
                    <h3><?php echo esc_html($space['title']); ?></h3>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="full-length-mirror-section full-length-mirror-section--soft">
          <div class="shell full-length-mirror-custom">
            <div class="full-length-mirror-section__head">
              <h2><?php esc_html_e('Custom Full Length Mirrors for Your Project', 'mirrorcraft'); ?></h2>
            </div>
            <div class="full-length-mirror-custom__grid">
              <?php foreach ($fl_custom_points as $point) : ?>
                <article class="full-length-mirror-custom__item">
                  <span class="full-length-mirror-custom__icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($point['icon']); ?></span>
                  <h3><?php echo esc_html($point['title']); ?></h3>
                </article>
              <?php endforeach; ?>
            </div>
            <div class="full-length-mirror-custom__actions">
              <a class="button button-primary" href="<?php echo esc_url($fl_custom_url); ?>"><?php esc_html_e('View All Custom Options', 'mirrorcraft'); ?></a>
            </div>
          </div>
        </section>

        <section class="full-length-mirror-section">
          <div class="shell">
            <div class="full-length-mirror-section__head">
              <h2><?php esc_html_e('Manufactured for Global B2B Buyers', 'mirrorcraft'); ?></h2>
            </div>
            <div class="full-length-mirror-buyer">
              <?php foreach ($fl_buyer_points as $point) : ?>
                <article class="full-length-mirror-buyer__item">
                  <span class="full-length-mirror-buyer__icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($point['icon']); ?></span>
                  <h3><?php echo esc_html($point['title']); ?></h3>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="full-length-mirror-section full-length-mirror-section--soft">
          <div class="shell">
            <div class="full-length-mirror-section__head">
              <h2><?php esc_html_e('Full Length Mirror Project Solutions', 'mirrorcraft'); ?></h2>
            </div>
            <div class="full-length-mirror-solutions">
              <?php foreach ($fl_solution_cards as $card) : ?>
                <article class="full-length-mirror-solution">
                  <div class="full-length-mirror-solution__media">
                    <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
                  </div>
                  <div class="full-length-mirror-solution__body">
                    <h3><?php echo esc_html($card['title']); ?></h3>
                    <p><?php echo esc_html($card['text']); ?></p>
                    <a href="<?php echo esc_url($card['link']); ?>"><?php esc_html_e('View More', 'mirrorcraft'); ?> &rarr;</a>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="full-length-mirror-section">
          <div class="shell">
            <div class="full-length-mirror-section__head">
              <h2><?php esc_html_e('Full Length Mirror FAQs', 'mirrorcraft'); ?></h2>
            </div>
            <div class="full-length-mirror-faqs">
              <?php foreach ($fl_faq_items as $item) : ?>
                <details class="full-length-mirror-faq">
                  <summary><?php echo esc_html($item['question']); ?></summary>
                  <p><?php echo esc_html($item['answer']); ?></p>
                </details>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="full-length-mirror-cta">
          <div class="shell">
            <div class="full-length-mirror-cta__panel">
              <img src="<?php echo esc_url($fl_led_image ?: $fl_primary_image); ?>" alt="<?php esc_attr_e('Full length mirror project background', 'mirrorcraft'); ?>" loading="lazy" decoding="async">
              <div class="full-length-mirror-cta__overlay">
                <h2><?php esc_html_e('Need Custom Full Length Mirrors for Your Project?', 'mirrorcraft'); ?></h2>
                <p><?php esc_html_e('Share your target size, frame route, quantity, lighting needs, and project application. Our team will help you build a production-ready mirror solution.', 'mirrorcraft'); ?></p>
                <div class="full-length-mirror-hero__actions">
                  <a class="button button-primary" href="<?php echo esc_url($fl_quote_url); ?>"><?php esc_html_e('Get a Quote Today', 'mirrorcraft'); ?></a>
                  <a class="button button-secondary" href="<?php echo esc_url($fl_products_url); ?>"><?php esc_html_e('View More Products', 'mirrorcraft'); ?></a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <?php continue; ?>
    <?php endif; ?>

    <?php if ('makeup-mirrors' === $page_slug) : ?>
      <?php
      $mm_quote_url = mirrorcraft_link_by_slug('contact', '/contact/');
      $mm_products_url = mirrorcraft_link_by_slug('products', '/products/');
      $mm_primary_image = $hero_image !== '' ? $hero_image : trailingslashit(get_template_directory_uri()) . 'assets/images/product-makeup-mirror.jpg';
      $mm_salon_image = mirrorcraft_theme_image_first_available_url(array('beauty-salon-led-mirror.png', 'beauty-salon-led-mirror.webp'));
      $mm_hotel_image = mirrorcraft_theme_image_first_available_url(array('hospitality-led-mirror-project.png', 'hospitality-led-mirror-project.webp'));
      $mm_residential_image = mirrorcraft_theme_image_first_available_url(array('residential-led-bathroom-mirror.png', 'residential-led-bathroom-mirror.webp'));
      $mm_retail_image = mirrorcraft_theme_image_first_available_url(array('retail-store-fitting-mirror.png', 'retail-store-fitting-mirror.webp'));
      $mm_custom_image = mirrorcraft_theme_image_first_available_url(array('custom-mirrors-reference-20260422.png', 'custom-mirrors-reference-20260422.webp'));
      $mm_shapes_image = mirrorcraft_theme_image_first_available_url(array('custom-solution-shapes-20260422.png', 'custom-solution-shapes-20260422.webp'));
      $mm_features_image = mirrorcraft_theme_image_first_available_url(array('custom-solution-features-20260422.png', 'custom-solution-features-20260422.webp'));
      $mm_sizes_image = mirrorcraft_theme_image_first_available_url(array('custom-solution-sizes-20260422.png', 'custom-solution-sizes-20260422.webp'));
      $mm_warehouse_image = mirrorcraft_theme_image_first_available_url(array('who-we-are-warehouse.png', 'who-we-are-warehouse.webp'));

      $mm_category_cards = array(
        array(
          'title' => __('LED Vanity Mirrors', 'mirrorcraft'),
          'text'  => __('Soft, even lighting for daily beauty routines and vanity projects.', 'mirrorcraft'),
          'image' => $mm_salon_image ?: $mm_primary_image,
          'link'  => mirrorcraft_get_product_category_page_link('makeup-mirrors'),
        ),
        array(
          'title' => __('Tabletop Makeup Mirrors', 'mirrorcraft'),
          'text'  => __('Countertop formats for vanity, boutique, and retail-ready collections.', 'mirrorcraft'),
          'image' => $mm_primary_image,
          'link'  => mirrorcraft_get_product_category_page_link('makeup-mirrors'),
        ),
        array(
          'title' => __('Wall Mounted Makeup Mirrors', 'mirrorcraft'),
          'text'  => __('Swing-arm and fixed solutions for bathrooms, hotels, and salons.', 'mirrorcraft'),
          'image' => $mm_primary_image,
          'link'  => mirrorcraft_get_product_category_page_link('makeup-mirrors'),
        ),
        array(
          'title' => __('Magnifying Makeup Mirrors', 'mirrorcraft'),
          'text'  => __('Closer-view mirrors for skincare, grooming, and precise daily makeup use.', 'mirrorcraft'),
          'image' => $mm_primary_image,
          'link'  => mirrorcraft_get_product_category_page_link('makeup-mirrors'),
        ),
        array(
          'title' => __('Hotel Makeup Mirrors', 'mirrorcraft'),
          'text'  => __('Hospitality-ready vanity mirrors for guest bathrooms and suites.', 'mirrorcraft'),
          'image' => $mm_hotel_image ?: $mm_residential_image,
          'link'  => mirrorcraft_get_product_category_page_link('makeup-mirrors'),
        ),
        array(
          'title' => __('Custom Makeup Mirrors', 'mirrorcraft'),
          'text'  => __('Private-label and OEM mirror development for branded beauty programs.', 'mirrorcraft'),
          'image' => $mm_custom_image ?: $mm_primary_image,
          'link'  => mirrorcraft_get_product_category_page_link('custom-mirrors'),
        ),
      );

      $mm_true_color_points = array(
        array(
          'icon'  => 'eye',
          'title' => __('CRI 95+', 'mirrorcraft'),
          'text'  => __('High color rendering for accurate makeup application under natural-looking light.', 'mirrorcraft'),
        ),
        array(
          'icon'  => 'cct',
          'title' => __('Adjustable CCT', 'mirrorcraft'),
          'text'  => __('Warm, neutral, and daylight settings for different beauty environments.', 'mirrorcraft'),
        ),
        array(
          'icon'  => 'light',
          'title' => __('Even & Shadow-Free Lighting', 'mirrorcraft'),
          'text'  => __('Soft illumination for face, skincare, and detailed beauty routines.', 'mirrorcraft'),
        ),
        array(
          'icon'  => 'branding',
          'title' => __('OEM/ODM Customization', 'mirrorcraft'),
          'text'  => __('Size, shape, frame, lighting, magnification, and packaging options.', 'mirrorcraft'),
        ),
      );

      $mm_applications = array(
        array('title' => __('Beauty Salons', 'mirrorcraft'), 'image' => $mm_salon_image ?: $mm_primary_image),
        array('title' => __('Hotel Bathrooms', 'mirrorcraft'), 'image' => $mm_hotel_image ?: $mm_residential_image),
        array('title' => __('Makeup Studios', 'mirrorcraft'), 'image' => $mm_salon_image ?: $mm_primary_image),
        array('title' => __('Retail Stores', 'mirrorcraft'), 'image' => $mm_retail_image ?: $mm_primary_image),
        array('title' => __('Residential Projects', 'mirrorcraft'), 'image' => $mm_residential_image ?: $mm_hotel_image),
        array('title' => __('Spa & Wellness Centers', 'mirrorcraft'), 'image' => $mm_hotel_image ?: $mm_salon_image),
      );

      $mm_solution_cards = array(
        array(
          'icon'  => 'size',
          'title' => __('Custom Shape & Size', 'mirrorcraft'),
          'text'  => __('Round, oval, square, rectangle, or special designs for your market.', 'mirrorcraft'),
          'image' => $mm_shapes_image ?: $mm_custom_image,
        ),
        array(
          'icon'  => 'cct',
          'title' => __('Lighting Customization', 'mirrorcraft'),
          'text'  => __('CCT, CRI, brightness, LED position, and dimming control options.', 'mirrorcraft'),
          'image' => $mm_sizes_image ?: $mm_features_image,
        ),
        array(
          'icon'  => 'touch',
          'title' => __('Function Options', 'mirrorcraft'),
          'text'  => __('Touch sensor, anti-fog, magnification, Bluetooth, battery or plug-in power.', 'mirrorcraft'),
          'image' => $mm_features_image ?: $mm_primary_image,
        ),
        array(
          'icon'  => 'branding',
          'title' => __('Brand & Packaging', 'mirrorcraft'),
          'text'  => __('Logo printing, private label, retail packaging, and project packaging.', 'mirrorcraft'),
          'image' => $mm_warehouse_image ?: $mm_custom_image,
        ),
      );

      $mm_quality_points = array(
        array('icon' => 'light', 'title' => __('Strict lighting and electrical testing', 'mirrorcraft')),
        array('icon' => 'eye', 'title' => __('Mirror clarity and coating inspection', 'mirrorcraft')),
        array('icon' => 'commercial', 'title' => __('Stable production for bulk orders', 'mirrorcraft')),
        array('icon' => 'branding', 'title' => __('Export packaging for safe delivery', 'mirrorcraft')),
        array('icon' => 'quote', 'title' => __('Support samples before mass production', 'mirrorcraft')),
      );

      $mm_project_cards = array(
        array(
          'title' => __('Hotel Project', 'mirrorcraft'),
          'meta'  => __('5-Star Hotel Bathrooms', 'mirrorcraft'),
          'image' => $mm_hotel_image ?: $mm_residential_image,
        ),
        array(
          'title' => __('Beauty Salon Project', 'mirrorcraft'),
          'meta'  => __('Professional Salon Chain', 'mirrorcraft'),
          'image' => $mm_salon_image ?: $mm_primary_image,
        ),
        array(
          'title' => __('Retail Brand Collaboration', 'mirrorcraft'),
          'meta'  => __('Global Beauty Brand', 'mirrorcraft'),
          'image' => $mm_retail_image ?: $mm_primary_image,
        ),
      );

      $mm_faq_items = array(
        array(
          'question' => __('Q1: Can you customize makeup mirrors for our brand?', 'mirrorcraft'),
          'answer'   => __('Yes. We support OEM and ODM programs including custom sizes, shapes, lighting parameters, finish details, logo branding, and packaging.', 'mirrorcraft'),
        ),
        array(
          'question' => __('Q2: What CRI do you offer?', 'mirrorcraft'),
          'answer'   => __('We commonly support high-CRI lighting routes including CRI 90+ and CRI 95+, depending on the model and target market requirements.', 'mirrorcraft'),
        ),
        array(
          'question' => __('Q3: Can we order samples before bulk production?', 'mirrorcraft'),
          'answer'   => __('Yes. Sample development and approval are available before bulk production so buyers can confirm lighting effect, structure, and finishing details.', 'mirrorcraft'),
        ),
        array(
          'question' => __('Q4: Are your makeup mirrors suitable for hotels and salons?', 'mirrorcraft'),
          'answer'   => __('Yes. Our makeup mirror programs are suitable for hotels, salons, retail stores, and branded beauty projects that need dependable lighting and consistent quality.', 'mirrorcraft'),
        ),
      );
      ?>
      <style>
        .makeup-mirror-page {
          background: linear-gradient(180deg, #fffdf8 0%, #ffffff 40%, #fcf8f1 100%);
        }

        .makeup-mirror-hero {
          padding: clamp(48px, 6vw, 80px) 0 clamp(36px, 5vw, 54px);
          background:
            radial-gradient(circle at 18% 18%, rgba(255, 255, 255, 0.96) 0%, rgba(251, 245, 234, 0.94) 34%, rgba(241, 227, 205, 0.78) 55%, rgba(241, 227, 205, 0.18) 100%);
        }

        .makeup-mirror-hero__shell {
          display: grid;
          grid-template-columns: minmax(0, 0.9fr) minmax(0, 1.1fr);
          align-items: center;
          gap: clamp(22px, 4vw, 40px);
        }

        .makeup-mirror-hero__copy {
          display: grid;
          gap: 18px;
          max-width: 29rem;
        }

        .makeup-mirror-hero__copy h1 {
          margin: 0;
          font-size: var(--mirrorcraft-display-hero-size, clamp(3.45rem, 4.6vw, 5.45rem));
          line-height: var(--mirrorcraft-display-hero-line, 0.9);
          letter-spacing: var(--mirrorcraft-display-hero-track, -0.04em);
        }

        .makeup-mirror-hero__subtitle {
          margin: 0;
          font-size: clamp(1.1rem, 1.8vw, 1.55rem);
          line-height: 1.45;
          color: #493322;
        }

        .makeup-mirror-hero__lead {
          margin: 0;
          max-width: 28rem;
          color: var(--muted);
          line-height: 1.8;
        }

        .makeup-mirror-hero__actions {
          display: flex;
          flex-wrap: wrap;
          gap: 14px;
          margin-top: 6px;
        }

        .makeup-mirror-hero__chips {
          display: grid;
          grid-template-columns: repeat(4, minmax(0, 1fr));
          gap: 14px;
          padding-top: 8px;
        }

        .makeup-mirror-hero__chip {
          display: grid;
          gap: 8px;
          align-content: start;
        }

        .makeup-mirror-hero__chip-icon {
          display: inline-flex;
          align-items: center;
          justify-content: center;
          width: 36px;
          height: 36px;
          color: #c68943;
        }

        .makeup-mirror-hero__chip-icon svg {
          width: 22px;
          height: 22px;
        }

        .makeup-mirror-hero__chip strong {
          font-size: 0.95rem;
          line-height: 1.2;
        }

        .makeup-mirror-hero__chip span {
          color: var(--muted);
          font-size: 0.84rem;
          line-height: 1.5;
        }

        .makeup-mirror-hero__media {
          overflow: hidden;
          border-radius: 30px;
          box-shadow: 0 28px 58px rgba(70, 52, 30, 0.12);
          min-height: 540px;
          background: #f2eadf;
        }

        .makeup-mirror-hero__media img,
        .makeup-mirror-card__media img,
        .makeup-mirror-application__media img,
        .makeup-mirror-solution__media img,
        .makeup-mirror-project__media img,
        .makeup-mirror-cta__media img {
          display: block;
          width: 100%;
          height: 100%;
          object-fit: cover;
        }

        .makeup-mirror-section {
          padding: clamp(42px, 6vw, 76px) 0;
        }

        .makeup-mirror-section--soft {
          background: linear-gradient(180deg, rgba(250, 244, 236, 0.82) 0%, rgba(255, 255, 255, 0.98) 100%);
        }

        .makeup-mirror-section__head {
          display: grid;
          gap: 10px;
          margin-bottom: 26px;
          text-align: center;
        }

        .makeup-mirror-section__head h2 {
          margin: 0;
          font-size: clamp(1.9rem, 3vw, 2.85rem);
          line-height: 1.05;
          letter-spacing: -0.04em;
        }

        .makeup-mirror-section__head p {
          margin: 0 auto;
          max-width: 52rem;
          color: var(--muted);
          line-height: 1.8;
        }

        .makeup-mirror-cards {
          display: grid;
          grid-template-columns: repeat(6, minmax(0, 1fr));
          gap: 16px;
        }

        .makeup-mirror-card,
        .makeup-mirror-solution,
        .makeup-mirror-project,
        .makeup-mirror-feedback,
        .makeup-mirror-faq,
        .makeup-mirror-quality__item,
        .makeup-mirror-accuracy__item {
          border-radius: 24px;
          border: 1px solid rgba(27, 28, 29, 0.08);
          background: #fff;
          box-shadow: 0 18px 40px rgba(20, 18, 14, 0.05);
        }

        .makeup-mirror-card {
          display: grid;
          overflow: hidden;
        }

        .makeup-mirror-card__media {
          aspect-ratio: 1 / 1.08;
        }

        .makeup-mirror-card__body {
          display: grid;
          gap: 10px;
          padding: 16px 14px 18px;
          text-align: center;
        }

        .makeup-mirror-card__body h3 {
          margin: 0;
          font-size: 1rem;
          line-height: 1.3;
        }

        .makeup-mirror-card__body p {
          margin: 0;
          color: var(--muted);
          font-size: 0.9rem;
          line-height: 1.7;
        }

        .makeup-mirror-card__body a {
          color: #c68943;
          font-weight: 700;
        }

        .makeup-mirror-accuracy {
          display: grid;
          grid-template-columns: repeat(4, minmax(0, 1fr));
          gap: 18px;
        }

        .makeup-mirror-accuracy__item {
          display: grid;
          gap: 12px;
          justify-items: center;
          text-align: center;
          padding: 24px 18px;
        }

        .makeup-mirror-accuracy__icon,
        .makeup-mirror-solution__icon,
        .makeup-mirror-quality__icon {
          display: inline-flex;
          align-items: center;
          justify-content: center;
          width: 52px;
          height: 52px;
          border-radius: 999px;
          background: rgba(198, 137, 67, 0.1);
          color: #c68943;
        }

        .makeup-mirror-accuracy__icon svg,
        .makeup-mirror-solution__icon svg,
        .makeup-mirror-quality__icon svg {
          width: 24px;
          height: 24px;
        }

        .makeup-mirror-accuracy__item h3,
        .makeup-mirror-solution__header h3,
        .makeup-mirror-quality__item h3,
        .makeup-mirror-project__body h3 {
          margin: 0;
          font-size: 1rem;
          line-height: 1.3;
        }

        .makeup-mirror-accuracy__item p,
        .makeup-mirror-solution__header p,
        .makeup-mirror-project__body p,
        .makeup-mirror-feedback p,
        .makeup-mirror-faq p {
          margin: 0;
          color: var(--muted);
          line-height: 1.72;
        }

        .makeup-mirror-applications {
          display: grid;
          grid-template-columns: repeat(6, minmax(0, 1fr));
          gap: 14px;
        }

        .makeup-mirror-application {
          display: grid;
          gap: 10px;
        }

        .makeup-mirror-application__media {
          overflow: hidden;
          border-radius: 22px;
          aspect-ratio: 16 / 11;
          box-shadow: 0 16px 34px rgba(17, 32, 30, 0.06);
        }

        .makeup-mirror-application h3 {
          margin: 0;
          text-align: center;
          font-size: 0.96rem;
          line-height: 1.35;
        }

        .makeup-mirror-solutions {
          display: grid;
          grid-template-columns: repeat(4, minmax(0, 1fr));
          gap: 18px;
        }

        .makeup-mirror-solution {
          display: grid;
          gap: 16px;
          overflow: hidden;
          padding: 22px;
        }

        .makeup-mirror-solution__header {
          display: grid;
          gap: 12px;
        }

        .makeup-mirror-solution__media {
          overflow: hidden;
          border-radius: 18px;
          aspect-ratio: 16 / 7;
          background: #f4ede1;
        }

        .makeup-mirror-quality {
          display: grid;
          grid-template-columns: repeat(5, minmax(0, 1fr));
          gap: 14px;
        }

        .makeup-mirror-quality__item {
          display: grid;
          gap: 12px;
          justify-items: center;
          text-align: center;
          padding: 20px 16px;
        }

        .makeup-mirror-projects {
          display: grid;
          grid-template-columns: repeat(4, minmax(0, 1fr));
          gap: 18px;
        }

        .makeup-mirror-project {
          overflow: hidden;
        }

        .makeup-mirror-project__media {
          aspect-ratio: 16 / 10;
        }

        .makeup-mirror-project__body {
          display: grid;
          gap: 8px;
          padding: 16px 16px 18px;
        }

        .makeup-mirror-project__body span {
          color: var(--muted);
          font-size: 0.92rem;
        }

        .makeup-mirror-feedback {
          display: grid;
          gap: 14px;
          align-content: start;
          padding: 24px;
        }

        .makeup-mirror-feedback h3 {
          margin: 0;
          font-size: 1.05rem;
        }

        .makeup-mirror-feedback__stars {
          color: #d4a54d;
          letter-spacing: 0.12em;
          font-size: 1.15rem;
        }

        .makeup-mirror-faq-grid {
          display: grid;
          grid-template-columns: repeat(2, minmax(0, 1fr));
          gap: 14px 18px;
        }

        .makeup-mirror-faq {
          overflow: hidden;
        }

        .makeup-mirror-faq summary {
          position: relative;
          list-style: none;
          cursor: pointer;
          padding: 18px 54px 18px 20px;
          font-weight: 700;
          line-height: 1.55;
        }

        .makeup-mirror-faq summary::-webkit-details-marker {
          display: none;
        }

        .makeup-mirror-faq summary::after {
          content: "+";
          position: absolute;
          top: 50%;
          right: 20px;
          transform: translateY(-50%);
          color: #c68943;
          font-size: 1.6rem;
          line-height: 1;
        }

        .makeup-mirror-faq[open] summary::after {
          content: "−";
        }

        .makeup-mirror-faq p {
          padding: 0 20px 20px;
        }

        .makeup-mirror-cta {
          padding-bottom: clamp(42px, 6vw, 78px);
        }

        .makeup-mirror-cta__panel {
          display: grid;
          grid-template-columns: minmax(280px, 0.58fr) minmax(0, 1.42fr);
          overflow: hidden;
          border-radius: 28px;
          border: 1px solid rgba(27, 28, 29, 0.08);
          background: linear-gradient(180deg, #f8f0e3 0%, #ffffff 100%);
          box-shadow: 0 24px 52px rgba(35, 25, 13, 0.08);
        }

        .makeup-mirror-cta__media {
          min-height: 100%;
        }

        .makeup-mirror-cta__copy {
          display: grid;
          gap: 16px;
          align-content: center;
          padding: clamp(28px, 4vw, 42px);
        }

        .makeup-mirror-cta__copy h2 {
          margin: 0;
          font-size: clamp(2rem, 3vw, 3rem);
          line-height: 1.04;
          letter-spacing: -0.04em;
        }

        .makeup-mirror-cta__copy p {
          margin: 0;
          max-width: 34rem;
          color: var(--muted);
          line-height: 1.8;
        }

        @media (max-width: 1180px) {
          .makeup-mirror-cards,
          .makeup-mirror-applications {
            grid-template-columns: repeat(3, minmax(0, 1fr));
          }

          .makeup-mirror-solutions,
          .makeup-mirror-projects,
          .makeup-mirror-quality {
            grid-template-columns: repeat(2, minmax(0, 1fr));
          }

          .makeup-mirror-accuracy {
            grid-template-columns: repeat(2, minmax(0, 1fr));
          }
        }

        @media (max-width: 900px) {
          .makeup-mirror-hero__shell,
          .makeup-mirror-cta__panel {
            grid-template-columns: 1fr;
          }

          .makeup-mirror-hero__media {
            min-height: 320px;
          }

          .makeup-mirror-hero__chips,
          .makeup-mirror-faq-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
          }
        }

        @media (max-width: 760px) {
          .makeup-mirror-cards,
          .makeup-mirror-accuracy,
          .makeup-mirror-applications,
          .makeup-mirror-solutions,
          .makeup-mirror-quality,
          .makeup-mirror-projects,
          .makeup-mirror-hero__chips,
          .makeup-mirror-faq-grid {
            grid-template-columns: 1fr;
          }

          .makeup-mirror-hero__actions .button {
            width: 100%;
          }
        }
      </style>

      <div class="makeup-mirror-page">
        <section class="makeup-mirror-hero">
          <div class="shell makeup-mirror-hero__shell">
            <div class="makeup-mirror-hero__copy">
              <h1><?php esc_html_e('Professional Makeup Mirrors', 'mirrorcraft'); ?></h1>
              <p class="makeup-mirror-hero__subtitle"><?php esc_html_e('for Beauty, Hotel & Retail Projects', 'mirrorcraft'); ?></p>
              <p class="makeup-mirror-hero__lead"><?php esc_html_e('High-CRI lighting, custom sizes, smart functions, and OEM/ODM solutions for global B2B buyers.', 'mirrorcraft'); ?></p>
              <div class="makeup-mirror-hero__actions">
                <a class="button button-primary" href="<?php echo esc_url($mm_quote_url); ?>"><?php esc_html_e('Request a Quote', 'mirrorcraft'); ?></a>
                <a class="button button-secondary" href="#makeup-custom-solutions"><?php esc_html_e('View Custom Options', 'mirrorcraft'); ?></a>
              </div>
              <div class="makeup-mirror-hero__chips">
                <div class="makeup-mirror-hero__chip">
                  <span class="makeup-mirror-hero__chip-icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon('eye'); ?></span>
                  <strong><?php esc_html_e('CRI 95+', 'mirrorcraft'); ?></strong>
                  <span><?php esc_html_e('High Color Rendering', 'mirrorcraft'); ?></span>
                </div>
                <div class="makeup-mirror-hero__chip">
                  <span class="makeup-mirror-hero__chip-icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon('cct'); ?></span>
                  <strong><?php esc_html_e('Adjustable CCT', 'mirrorcraft'); ?></strong>
                  <span><?php esc_html_e('2700K-6500K', 'mirrorcraft'); ?></span>
                </div>
                <div class="makeup-mirror-hero__chip">
                  <span class="makeup-mirror-hero__chip-icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon('branding'); ?></span>
                  <strong><?php esc_html_e('OEM/ODM', 'mirrorcraft'); ?></strong>
                  <span><?php esc_html_e('Full Customization', 'mirrorcraft'); ?></span>
                </div>
                <div class="makeup-mirror-hero__chip">
                  <span class="makeup-mirror-hero__chip-icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon('globe'); ?></span>
                  <strong><?php esc_html_e('Global Delivery', 'mirrorcraft'); ?></strong>
                  <span><?php esc_html_e('Reliable & On-time', 'mirrorcraft'); ?></span>
                </div>
              </div>
            </div>
            <div class="makeup-mirror-hero__media">
              <img src="<?php echo esc_url($mm_primary_image); ?>" alt="<?php esc_attr_e('Professional makeup mirror product image', 'mirrorcraft'); ?>" loading="eager" decoding="async">
            </div>
          </div>
        </section>

        <section class="makeup-mirror-section">
          <div class="shell">
            <div class="makeup-mirror-section__head">
              <h2><?php esc_html_e('Product Categories', 'mirrorcraft'); ?></h2>
            </div>
            <div class="makeup-mirror-cards">
              <?php foreach ($mm_category_cards as $card) : ?>
                <article class="makeup-mirror-card">
                  <div class="makeup-mirror-card__media">
                    <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
                  </div>
                  <div class="makeup-mirror-card__body">
                    <h3><?php echo esc_html($card['title']); ?></h3>
                    <p><?php echo esc_html($card['text']); ?></p>
                    <a href="<?php echo esc_url($card['link']); ?>"><?php esc_html_e('Learn More', 'mirrorcraft'); ?> &rarr;</a>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="makeup-mirror-section makeup-mirror-section--soft">
          <div class="shell">
            <div class="makeup-mirror-section__head">
              <h2><?php esc_html_e('Designed for True Color Accuracy', 'mirrorcraft'); ?></h2>
            </div>
            <div class="makeup-mirror-accuracy">
              <?php foreach ($mm_true_color_points as $point) : ?>
                <article class="makeup-mirror-accuracy__item">
                  <span class="makeup-mirror-accuracy__icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($point['icon']); ?></span>
                  <h3><?php echo esc_html($point['title']); ?></h3>
                  <p><?php echo esc_html($point['text']); ?></p>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="makeup-mirror-section">
          <div class="shell">
            <div class="makeup-mirror-section__head">
              <h2><?php esc_html_e('Ideal for Multiple Beauty & Hospitality Applications', 'mirrorcraft'); ?></h2>
            </div>
            <div class="makeup-mirror-applications">
              <?php foreach ($mm_applications as $application) : ?>
                <article class="makeup-mirror-application">
                  <div class="makeup-mirror-application__media">
                    <img src="<?php echo esc_url($application['image']); ?>" alt="<?php echo esc_attr($application['title']); ?>" loading="lazy" decoding="async">
                  </div>
                  <h3><?php echo esc_html($application['title']); ?></h3>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="makeup-mirror-section makeup-mirror-section--soft" id="makeup-custom-solutions">
          <div class="shell">
            <div class="makeup-mirror-section__head">
              <h2><?php esc_html_e('Custom Makeup Mirror Solutions', 'mirrorcraft'); ?></h2>
            </div>
            <div class="makeup-mirror-solutions">
              <?php foreach ($mm_solution_cards as $card) : ?>
                <article class="makeup-mirror-solution">
                  <div class="makeup-mirror-solution__header">
                    <span class="makeup-mirror-solution__icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($card['icon']); ?></span>
                    <h3><?php echo esc_html($card['title']); ?></h3>
                    <p><?php echo esc_html($card['text']); ?></p>
                  </div>
                  <div class="makeup-mirror-solution__media">
                    <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="makeup-mirror-section">
          <div class="shell">
            <div class="makeup-mirror-section__head">
              <h2><?php esc_html_e('Reliable Quality for Bulk Orders', 'mirrorcraft'); ?></h2>
            </div>
            <div class="makeup-mirror-quality">
              <?php foreach ($mm_quality_points as $point) : ?>
                <article class="makeup-mirror-quality__item">
                  <span class="makeup-mirror-quality__icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($point['icon']); ?></span>
                  <h3><?php echo esc_html($point['title']); ?></h3>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="makeup-mirror-section makeup-mirror-section--soft">
          <div class="shell">
            <div class="makeup-mirror-section__head">
              <h2><?php esc_html_e('Trusted by Beauty, Hotel & Retail Buyers', 'mirrorcraft'); ?></h2>
            </div>
            <div class="makeup-mirror-projects">
              <?php foreach ($mm_project_cards as $card) : ?>
                <article class="makeup-mirror-project">
                  <div class="makeup-mirror-project__media">
                    <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
                  </div>
                  <div class="makeup-mirror-project__body">
                    <h3><?php echo esc_html($card['title']); ?></h3>
                    <span><?php echo esc_html($card['meta']); ?></span>
                  </div>
                </article>
              <?php endforeach; ?>
              <aside class="makeup-mirror-feedback">
                <h3><?php esc_html_e('Customer Feedback', 'mirrorcraft'); ?></h3>
                <p><?php esc_html_e('Excellent quality and lighting performance. Our customers love the mirrors!', 'mirrorcraft'); ?></p>
                <span><?php esc_html_e('– Makeup Studio Owner', 'mirrorcraft'); ?></span>
                <div class="makeup-mirror-feedback__stars" aria-hidden="true">★★★★★</div>
              </aside>
            </div>
          </div>
        </section>

        <section class="makeup-mirror-section">
          <div class="shell">
            <div class="makeup-mirror-section__head">
              <h2><?php esc_html_e('FAQ', 'mirrorcraft'); ?></h2>
            </div>
            <div class="makeup-mirror-faq-grid">
              <?php foreach ($mm_faq_items as $item) : ?>
                <details class="makeup-mirror-faq">
                  <summary><?php echo esc_html($item['question']); ?></summary>
                  <p><?php echo esc_html($item['answer']); ?></p>
                </details>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="makeup-mirror-cta">
          <div class="shell">
            <div class="makeup-mirror-cta__panel">
              <div class="makeup-mirror-cta__media">
                <img src="<?php echo esc_url($mm_primary_image); ?>" alt="<?php esc_attr_e('Custom makeup mirror call to action image', 'mirrorcraft'); ?>" loading="lazy" decoding="async">
              </div>
              <div class="makeup-mirror-cta__copy">
                <h2><?php esc_html_e('Start Your Custom Makeup Mirror Project', 'mirrorcraft'); ?></h2>
                <p><?php esc_html_e('Tell us your size, lighting, function, and quantity requirements. Our team will provide a suitable solution for your project.', 'mirrorcraft'); ?></p>
                <div class="makeup-mirror-hero__actions">
                  <a class="button button-primary" href="<?php echo esc_url($mm_quote_url); ?>"><?php esc_html_e('Get a Custom Quote', 'mirrorcraft'); ?></a>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <?php continue; ?>
    <?php endif; ?>

    <?php if ('bathroom-mirrors' === $page_slug) : ?>
      <?php
      $bm_quote_url = mirrorcraft_link_by_slug('contact', '/contact/');
      $bm_products_url = mirrorcraft_link_by_slug('products', '/products/');
      $bm_hero_image = mirrorcraft_theme_image_first_available_url(array(
        'real-estate-bathroom-mirror.png',
        'real-estate-bathroom-mirror.webp',
        'product-bathroom-mirror.jpg',
        'residential-led-bathroom-mirror.png',
      ));

      if ($bm_hero_image === '') {
        $bm_hero_image = $hero_image;
      }

      $bm_cta_image = mirrorcraft_theme_image_first_available_url(array(
        'hospitality-led-mirror-project.png',
        'hospitality-led-mirror-project.webp',
        'real-estate-bathroom-mirror.png',
      ));

      if ($bm_cta_image === '') {
        $bm_cta_image = $bm_hero_image;
      }

      $bm_category_cards = array(
        array(
          'title' => __('LED Bathroom Mirrors', 'mirrorcraft'),
          'text'  => __('Energy-efficient LED lighting with modern design.', 'mirrorcraft'),
          'image' => mirrorcraft_theme_image_first_available_url(array('residential-led-bathroom-mirror.png', 'residential-led-bathroom-mirror.webp')),
          'link'  => mirrorcraft_get_product_category_page_link('bathroom-mirrors'),
        ),
        array(
          'title' => __('Backlit Bathroom Mirrors', 'mirrorcraft'),
          'text'  => __('Soft and even backlighting for a luxury look.', 'mirrorcraft'),
          'image' => mirrorcraft_theme_image_first_available_url(array('hospitality-led-mirror-project.png', 'hospitality-led-mirror-project.webp')),
          'link'  => mirrorcraft_get_product_category_page_link('bathroom-mirrors'),
        ),
        array(
          'title' => __('Front-Lighted Mirrors', 'mirrorcraft'),
          'text'  => __('Bright front lighting for perfect daily grooming.', 'mirrorcraft'),
          'image' => mirrorcraft_theme_image_first_available_url(array('real-estate-bathroom-mirror.png', 'real-estate-bathroom-mirror.webp')),
          'link'  => mirrorcraft_get_product_category_page_link('bathroom-mirrors'),
        ),
        array(
          'title' => __('Framed Bathroom Mirrors', 'mirrorcraft'),
          'text'  => __('Stylish frames to match different interior styles.', 'mirrorcraft'),
          'image' => mirrorcraft_theme_image_first_available_url(array('retail-store-fitting-mirror.png', 'retail-store-fitting-mirror.webp')),
          'link'  => mirrorcraft_get_product_category_page_link('framed-mirrors'),
        ),
        array(
          'title' => __('Smart Bathroom Mirrors', 'mirrorcraft'),
          'text'  => __('Intelligent features for a smart lifestyle.', 'mirrorcraft'),
          'image' => mirrorcraft_theme_image_first_available_url(array('healthcare-hospital-mirror.png', 'healthcare-hospital-mirror.webp')),
          'link'  => mirrorcraft_get_product_category_page_link('smart-mirrors'),
        ),
        array(
          'title' => __('Custom Bathroom Mirrors', 'mirrorcraft'),
          'text'  => __('Fully custom sizes, shapes, and functions.', 'mirrorcraft'),
          'image' => mirrorcraft_theme_image_first_available_url(array('custom-mirrors-reference-20260422.png', 'custom-mirrors-reference-20260422.webp')),
          'link'  => mirrorcraft_get_product_category_page_link('custom-mirrors'),
        ),
      );

      $bm_advantages = array(
        array(
          'icon'  => 'shape',
          'title' => __('Custom Solutions', 'mirrorcraft'),
          'text'  => __('Custom sizes, shapes, and functions to meet your project needs.', 'mirrorcraft'),
        ),
        array(
          'icon'  => 'anti-fog',
          'title' => __('Smart Functions', 'mirrorcraft'),
          'text'  => __('Anti-fog, sensor, dimmable lighting, and more.', 'mirrorcraft'),
        ),
        array(
          'icon'  => 'light',
          'title' => __('High Quality Lighting', 'mirrorcraft'),
          'text'  => __('CRI 95+ LED lighting for natural and clear reflection.', 'mirrorcraft'),
        ),
        array(
          'icon'  => 'branding',
          'title' => __('OEM & ODM Support', 'mirrorcraft'),
          'text'  => __('Professional design, manufacturing, and branding support.', 'mirrorcraft'),
        ),
        array(
          'icon'  => 'eye',
          'title' => __('Stable Quality', 'mirrorcraft'),
          'text'  => __('Strict quality control to ensure long-term reliability.', 'mirrorcraft'),
        ),
        array(
          'icon'  => 'commercial',
          'title' => __('Wide Applications', 'mirrorcraft'),
          'text'  => __('Ideal for hotels, apartments, and commercial projects.', 'mirrorcraft'),
        ),
      );

      $bm_custom_options = array(
        array(
          'icon'  => 'shape',
          'title' => __('Size & Shape', 'mirrorcraft'),
          'text'  => __('Round, oval, rectangle, arch, and custom shapes.', 'mirrorcraft'),
          'image' => mirrorcraft_theme_image_first_available_url(array('custom-solution-shapes-20260422.png', 'custom-solution-shapes-20260422.webp')),
        ),
        array(
          'icon'  => 'light',
          'title' => __('Lighting', 'mirrorcraft'),
          'text'  => __('Front light, backlight, dual light, CCT adjustable.', 'mirrorcraft'),
          'image' => mirrorcraft_theme_image_first_available_url(array('custom-solution-sizes-20260422.png', 'custom-solution-sizes-20260422.webp', 'custom-solution-features-20260422.png')),
        ),
        array(
          'icon'  => 'touch',
          'title' => __('Functions', 'mirrorcraft'),
          'text'  => __('Anti-fog, touch sensor, motion sensor, Bluetooth, clock, and more.', 'mirrorcraft'),
          'image' => mirrorcraft_theme_image_first_available_url(array('custom-solution-features-20260422.png', 'custom-solution-features-20260422.webp')),
        ),
        array(
          'icon'  => 'frame',
          'title' => __('Frame & Edge', 'mirrorcraft'),
          'text'  => __('Framed, frameless, polished edge, and frosted edge options.', 'mirrorcraft'),
          'image' => mirrorcraft_theme_image_first_available_url(array('custom-solution-edge-finishes-20260422.png', 'custom-solution-edge-finishes-20260422.webp', 'custom-solution-frames-20260422.png')),
        ),
      );

      $bm_applications = array(
        array(
          'title' => __('Hotel Bathrooms', 'mirrorcraft'),
          'image' => mirrorcraft_theme_image_first_available_url(array('hospitality-led-mirror-project.png', 'hospitality-led-mirror-project.webp')),
        ),
        array(
          'title' => __('Residential Apartments', 'mirrorcraft'),
          'image' => mirrorcraft_theme_image_first_available_url(array('residential-led-bathroom-mirror.png', 'residential-led-bathroom-mirror.webp')),
        ),
        array(
          'title' => __('Real Estate Projects', 'mirrorcraft'),
          'image' => mirrorcraft_theme_image_first_available_url(array('real-estate-bathroom-mirror.png', 'real-estate-bathroom-mirror.webp')),
        ),
        array(
          'title' => __('Commercial Washrooms', 'mirrorcraft'),
          'image' => mirrorcraft_theme_image_first_available_url(array('commercial-washroom-led-mirror.png', 'commercial-washroom-led-mirror.webp')),
        ),
      );

      $bm_process_steps = array(
        array(
          'number' => '1',
          'title'  => __('Glass Cutting', 'mirrorcraft'),
          'image'  => mirrorcraft_theme_image_first_available_url(array('who-we-are-workshop.png', 'who-we-are-workshop.webp', 'factory.png')),
        ),
        array(
          'number' => '2',
          'title'  => __('Edge Processing', 'mirrorcraft'),
          'image'  => mirrorcraft_theme_image_first_available_url(array('custom-solution-edge-finishes-20260422.png', 'custom-solution-edge-finishes-20260422.webp')),
        ),
        array(
          'number' => '3',
          'title'  => __('LED Assembly', 'mirrorcraft'),
          'image'  => mirrorcraft_theme_image_first_available_url(array('custom-solution-features-20260422.png', 'custom-solution-features-20260422.webp')),
        ),
        array(
          'number' => '4',
          'title'  => __('Aging Test', 'mirrorcraft'),
          'image'  => mirrorcraft_theme_image_first_available_url(array('factory.avif.png', 'factory.png')),
        ),
        array(
          'number' => '5',
          'title'  => __('Quality Inspection', 'mirrorcraft'),
          'image'  => mirrorcraft_theme_image_first_available_url(array('who-we-are-inspection.png', 'who-we-are-inspection.webp')),
        ),
        array(
          'number' => '6',
          'title'  => __('Safe Packaging', 'mirrorcraft'),
          'image'  => mirrorcraft_theme_image_first_available_url(array('who-we-are-warehouse.png', 'who-we-are-warehouse.webp')),
        ),
      );

      $bm_faq_items = array(
        array(
          'question' => __('Q1: Can you customize bathroom mirrors?', 'mirrorcraft'),
          'answer'   => __('Yes. We support custom sizes, shapes, lighting layouts, anti-fog, smart functions, frame finishes, branding, and packaging for wholesale and project orders.', 'mirrorcraft'),
        ),
        array(
          'question' => __('Q2: Do you offer OEM & ODM service?', 'mirrorcraft'),
          'answer'   => __('Yes. We provide OEM and ODM support for distributors, brands, project buyers, and importers who need private-label or project-specific mirror programs.', 'mirrorcraft'),
        ),
        array(
          'question' => __('Q3: What functions can be added?', 'mirrorcraft'),
          'answer'   => __('Common options include anti-fog, touch sensor, dimming, CCT adjustment, Bluetooth, clock, and motion sensor, depending on the model and target market.', 'mirrorcraft'),
        ),
        array(
          'question' => __('Q4: Are your mirrors suitable for hotel projects?', 'mirrorcraft'),
          'answer'   => __('Yes. Our bathroom mirror programs are designed for hospitality, residential, and commercial spaces with attention to installation planning, quality consistency, and export packaging.', 'mirrorcraft'),
        ),
        array(
          'question' => __('Q5: Can you support bulk orders?', 'mirrorcraft'),
          'answer'   => __('Yes. We support bulk production for project and wholesale orders, including sampling, quality inspection, packaging, and delivery coordination.', 'mirrorcraft'),
        ),
      );
      ?>
      <style>
        .bathroom-mirror-page {
          background: linear-gradient(180deg, #ffffff 0%, #fbf8f3 48%, #ffffff 100%);
        }

        .bathroom-mirror-hero {
          padding: clamp(88px, 11vw, 136px) 0 clamp(82px, 9vw, 118px);
          background-position: center;
          background-size: cover;
          color: #fff;
        }

        .bathroom-mirror-hero__shell {
          display: grid;
          grid-template-columns: 1fr;
          align-items: center;
          min-height: 560px;
        }

        .bathroom-mirror-hero__copy {
          display: grid;
          gap: 22px;
          max-width: 27rem;
        }

        .bathroom-mirror-hero__copy h1 {
          margin: 0;
          font-size: var(--mirrorcraft-display-hero-size, clamp(3.45rem, 4.6vw, 5.45rem));
          line-height: var(--mirrorcraft-display-hero-line, 0.9);
          letter-spacing: var(--mirrorcraft-display-hero-track, -0.04em);
          color: #fff;
        }

        .bathroom-mirror-hero__lead {
          margin: 0;
          max-width: 31rem;
          font-size: 1.12rem;
          line-height: 1.8;
          color: rgba(255, 255, 255, 0.86);
        }

        .bathroom-mirror-hero__actions {
          display: flex;
          flex-wrap: wrap;
          gap: 14px;
        }

        .bathroom-mirror-page .button.button-secondary {
          background: transparent;
          color: #fff;
          border-color: rgba(255, 255, 255, 0.65);
        }

        .bathroom-mirror-page .button.button-secondary:hover,
        .bathroom-mirror-page .button.button-secondary:focus-visible {
          border-color: #fff;
          background: rgba(255, 255, 255, 0.08);
        }

        .bathroom-mirror-section {
          padding: clamp(48px, 6vw, 78px) 0;
        }

        .bathroom-mirror-section--soft {
          background: linear-gradient(180deg, rgba(248, 242, 232, 0.72) 0%, rgba(255, 255, 255, 0.96) 100%);
        }

        .bathroom-mirror-section__head {
          display: grid;
          gap: 12px;
          margin-bottom: 28px;
          text-align: center;
        }

        .bathroom-mirror-section__head h2 {
          margin: 0;
          font-size: clamp(2rem, 3.1vw, 3rem);
          line-height: 1.03;
          letter-spacing: -0.04em;
        }

        .bathroom-mirror-section__head p {
          margin: 0 auto;
          max-width: 50rem;
          color: var(--muted);
          line-height: 1.8;
        }

        .bathroom-mirror-cards {
          display: grid;
          grid-template-columns: repeat(6, minmax(0, 1fr));
          gap: 16px;
        }

        .bathroom-mirror-card,
        .bathroom-mirror-option,
        .bathroom-mirror-faq,
        .bathroom-mirror-process__item {
          border: 1px solid rgba(27, 28, 29, 0.08);
          border-radius: 24px;
          background: #fff;
          box-shadow: 0 18px 38px rgba(17, 32, 30, 0.06);
        }

        .bathroom-mirror-card {
          display: grid;
          grid-template-rows: auto 1fr;
          overflow: hidden;
        }

        .bathroom-mirror-card__media {
          aspect-ratio: 1 / 1.08;
        }

        .bathroom-mirror-card__media img,
        .bathroom-mirror-option__media img,
        .bathroom-mirror-application img,
        .bathroom-mirror-process__media img {
          display: block;
          width: 100%;
          height: 100%;
          object-fit: cover;
        }

        .bathroom-mirror-card__body {
          display: grid;
          gap: 10px;
          padding: 16px 14px 18px;
          text-align: center;
        }

        .bathroom-mirror-card__body h3 {
          margin: 0;
          font-size: 1.06rem;
          line-height: 1.25;
        }

        .bathroom-mirror-card__body p {
          margin: 0;
          color: var(--muted);
          font-size: 0.92rem;
          line-height: 1.7;
        }

        .bathroom-mirror-card__body a {
          color: var(--ink);
          font-weight: 700;
        }

        .bathroom-mirror-advantages {
          display: grid;
          grid-template-columns: repeat(6, minmax(0, 1fr));
          gap: 18px;
        }

        .bathroom-mirror-advantage {
          display: grid;
          gap: 16px;
          justify-items: center;
          text-align: center;
          padding: 24px 18px;
          border-radius: 26px;
          background: rgba(255, 255, 255, 0.8);
          border: 1px solid rgba(198, 137, 67, 0.16);
          box-shadow: 0 18px 38px rgba(17, 32, 30, 0.05);
        }

        .bathroom-mirror-advantage__icon,
        .bathroom-mirror-option__icon {
          display: inline-flex;
          align-items: center;
          justify-content: center;
          width: 58px;
          height: 58px;
          border-radius: 999px;
          background: rgba(198, 137, 67, 0.1);
          color: #c68943;
        }

        .bathroom-mirror-advantage__icon svg,
        .bathroom-mirror-option__icon svg {
          width: 28px;
          height: 28px;
        }

        .bathroom-mirror-advantage h3,
        .bathroom-mirror-option h3 {
          margin: 0;
          font-size: 1.02rem;
          line-height: 1.25;
        }

        .bathroom-mirror-advantage p,
        .bathroom-mirror-option p {
          margin: 0;
          color: var(--muted);
          font-size: 0.95rem;
          line-height: 1.75;
        }

        .bathroom-mirror-options {
          display: grid;
          grid-template-columns: repeat(4, minmax(0, 1fr));
          gap: 18px;
        }

        .bathroom-mirror-option {
          display: grid;
          gap: 18px;
          overflow: hidden;
          padding: 22px;
        }

        .bathroom-mirror-option__header {
          display: grid;
          gap: 12px;
          align-content: start;
        }

        .bathroom-mirror-option__media {
          border-radius: 18px;
          overflow: hidden;
          aspect-ratio: 16 / 7;
          background: #f4efe7;
        }

        .bathroom-mirror-applications {
          display: grid;
          grid-template-columns: repeat(4, minmax(0, 1fr));
          gap: 18px;
        }

        .bathroom-mirror-application {
          display: grid;
          gap: 12px;
        }

        .bathroom-mirror-application figure {
          margin: 0;
          overflow: hidden;
          border-radius: 22px;
          aspect-ratio: 16 / 11;
          box-shadow: 0 16px 34px rgba(17, 32, 30, 0.06);
        }

        .bathroom-mirror-application h3 {
          margin: 0;
          text-align: center;
          font-size: 1rem;
        }

        .bathroom-mirror-process {
          display: grid;
          grid-template-columns: repeat(6, minmax(0, 1fr));
          gap: 14px;
          align-items: start;
        }

        .bathroom-mirror-process__item {
          display: grid;
          gap: 14px;
          padding: 12px;
        }

        .bathroom-mirror-process__media {
          overflow: hidden;
          border-radius: 16px;
          aspect-ratio: 4 / 3;
          background: #eee7dc;
        }

        .bathroom-mirror-process__meta {
          display: grid;
          grid-template-columns: auto 1fr;
          gap: 10px;
          align-items: center;
        }

        .bathroom-mirror-process__number {
          color: #c68943;
          font-size: 1.65rem;
          font-weight: 800;
          line-height: 1;
        }

        .bathroom-mirror-process__title {
          margin: 0;
          font-size: 0.98rem;
          line-height: 1.35;
        }

        .bathroom-mirror-faq-grid {
          display: grid;
          grid-template-columns: repeat(2, minmax(0, 1fr));
          gap: 14px 18px;
          align-items: start;
        }

        .bathroom-mirror-faq {
          overflow: hidden;
        }

        .bathroom-mirror-faq summary {
          position: relative;
          list-style: none;
          cursor: pointer;
          padding: 18px 54px 18px 20px;
          font-weight: 700;
          line-height: 1.55;
        }

        .bathroom-mirror-faq summary::-webkit-details-marker {
          display: none;
        }

        .bathroom-mirror-faq summary::after {
          content: "+";
          position: absolute;
          top: 50%;
          right: 20px;
          transform: translateY(-50%);
          color: #c68943;
          font-size: 1.6rem;
          line-height: 1;
        }

        .bathroom-mirror-faq[open] summary::after {
          content: "−";
        }

        .bathroom-mirror-faq p {
          margin: 0;
          padding: 0 20px 20px;
          color: var(--muted);
          line-height: 1.75;
        }

        .bathroom-mirror-cta {
          padding-bottom: clamp(48px, 7vw, 84px);
        }

        .bathroom-mirror-cta__panel {
          display: grid;
          grid-template-columns: minmax(0, 0.86fr) minmax(0, 1.14fr);
          align-items: stretch;
          overflow: hidden;
          border-radius: 28px;
          background: #1a1510;
          box-shadow: 0 24px 54px rgba(17, 32, 30, 0.14);
        }

        .bathroom-mirror-cta__copy {
          display: grid;
          gap: 18px;
          align-content: center;
          padding: clamp(28px, 4vw, 44px);
          color: #fff;
          background: linear-gradient(90deg, rgba(24, 17, 10, 0.96) 0%, rgba(24, 17, 10, 0.84) 100%);
        }

        .bathroom-mirror-cta__copy h2 {
          margin: 0;
          font-size: clamp(2rem, 3vw, 3rem);
          line-height: 1.04;
          letter-spacing: -0.04em;
          color: #fff;
        }

        .bathroom-mirror-cta__copy p {
          margin: 0;
          max-width: 32rem;
          color: rgba(255, 255, 255, 0.8);
          line-height: 1.8;
        }

        .bathroom-mirror-cta__media {
          min-height: 100%;
          background-position: center;
          background-size: cover;
        }

        @media (max-width: 1180px) {
          .bathroom-mirror-cards,
          .bathroom-mirror-advantages {
            grid-template-columns: repeat(3, minmax(0, 1fr));
          }

          .bathroom-mirror-options,
          .bathroom-mirror-applications {
            grid-template-columns: repeat(2, minmax(0, 1fr));
          }

          .bathroom-mirror-process {
            grid-template-columns: repeat(3, minmax(0, 1fr));
          }
        }

        @media (max-width: 900px) {
          .bathroom-mirror-hero__shell,
          .bathroom-mirror-cta__panel {
            grid-template-columns: 1fr;
          }

          .bathroom-mirror-hero__shell {
            min-height: 0;
          }

          .bathroom-mirror-hero__copy {
            max-width: 100%;
          }

          .bathroom-mirror-cta__media {
            min-height: 260px;
          }

          .bathroom-mirror-faq-grid {
            grid-template-columns: 1fr;
          }
        }

        @media (max-width: 760px) {
          .bathroom-mirror-cards,
          .bathroom-mirror-advantages,
          .bathroom-mirror-options,
          .bathroom-mirror-applications,
          .bathroom-mirror-process {
            grid-template-columns: 1fr;
          }

          .bathroom-mirror-hero {
            padding-top: 74px;
          }

          .bathroom-mirror-hero__actions .button {
            width: 100%;
          }
        }
      </style>

      <div class="bathroom-mirror-page">
        <section class="bathroom-mirror-hero" style="background-image: linear-gradient(90deg, rgba(25, 18, 10, 0.74) 0%, rgba(25, 18, 10, 0.52) 42%, rgba(25, 18, 10, 0.12) 100%), url('<?php echo esc_url($bm_hero_image); ?>');">
          <div class="shell bathroom-mirror-hero__shell">
            <div class="bathroom-mirror-hero__copy">
              <h1><?php esc_html_e('Bathroom Mirrors for Modern Projects', 'mirrorcraft'); ?></h1>
              <p class="bathroom-mirror-hero__lead"><?php esc_html_e('Custom LED bathroom mirrors designed for hotels, residential projects, commercial spaces, and global B2B buyers.', 'mirrorcraft'); ?></p>
              <div class="bathroom-mirror-hero__actions">
                <a class="button button-primary" href="<?php echo esc_url($bm_quote_url); ?>"><?php esc_html_e('Request a Quote', 'mirrorcraft'); ?></a>
                <a class="button button-secondary" href="<?php echo esc_url($bm_products_url); ?>"><?php esc_html_e('View Products', 'mirrorcraft'); ?></a>
              </div>
            </div>
          </div>
        </section>

        <section class="bathroom-mirror-section">
          <div class="shell">
            <div class="bathroom-mirror-section__head">
              <h2><?php esc_html_e('Explore Our Bathroom Mirrors', 'mirrorcraft'); ?></h2>
            </div>
            <div class="bathroom-mirror-cards">
              <?php foreach ($bm_category_cards as $card) : ?>
                <article class="bathroom-mirror-card">
                  <div class="bathroom-mirror-card__media">
                    <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
                  </div>
                  <div class="bathroom-mirror-card__body">
                    <h3><?php echo esc_html($card['title']); ?></h3>
                    <p><?php echo esc_html($card['text']); ?></p>
                    <a href="<?php echo esc_url($card['link']); ?>"><?php esc_html_e('View More', 'mirrorcraft'); ?> &rarr;</a>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="bathroom-mirror-section bathroom-mirror-section--soft">
          <div class="shell">
            <div class="bathroom-mirror-section__head">
              <h2><?php esc_html_e('Why Choose Our Bathroom Mirrors', 'mirrorcraft'); ?></h2>
            </div>
            <div class="bathroom-mirror-advantages">
              <?php foreach ($bm_advantages as $item) : ?>
                <article class="bathroom-mirror-advantage">
                  <span class="bathroom-mirror-advantage__icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($item['icon']); ?></span>
                  <h3><?php echo esc_html($item['title']); ?></h3>
                  <p><?php echo esc_html($item['text']); ?></p>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="bathroom-mirror-section">
          <div class="shell">
            <div class="bathroom-mirror-section__head">
              <h2><?php esc_html_e('Custom Options', 'mirrorcraft'); ?></h2>
            </div>
            <div class="bathroom-mirror-options">
              <?php foreach ($bm_custom_options as $option) : ?>
                <article class="bathroom-mirror-option">
                  <div class="bathroom-mirror-option__header">
                    <span class="bathroom-mirror-option__icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($option['icon']); ?></span>
                    <h3><?php echo esc_html($option['title']); ?></h3>
                    <p><?php echo esc_html($option['text']); ?></p>
                  </div>
                  <div class="bathroom-mirror-option__media">
                    <img src="<?php echo esc_url($option['image']); ?>" alt="<?php echo esc_attr($option['title']); ?>" loading="lazy" decoding="async">
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="bathroom-mirror-section">
          <div class="shell">
            <div class="bathroom-mirror-section__head">
              <h2><?php esc_html_e('Applications', 'mirrorcraft'); ?></h2>
            </div>
            <div class="bathroom-mirror-applications">
              <?php foreach ($bm_applications as $application) : ?>
                <article class="bathroom-mirror-application">
                  <figure>
                    <img src="<?php echo esc_url($application['image']); ?>" alt="<?php echo esc_attr($application['title']); ?>" loading="lazy" decoding="async">
                  </figure>
                  <h3><?php echo esc_html($application['title']); ?></h3>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="bathroom-mirror-section bathroom-mirror-section--soft">
          <div class="shell">
            <div class="bathroom-mirror-section__head">
              <h2><?php esc_html_e('Reliable Manufacturing for Bathroom Mirror Projects', 'mirrorcraft'); ?></h2>
              <p><?php esc_html_e('From glass cutting and edge processing to LED assembly, aging test, packaging, and final inspection, every mirror is produced under strict quality control.', 'mirrorcraft'); ?></p>
            </div>
            <div class="bathroom-mirror-process">
              <?php foreach ($bm_process_steps as $step) : ?>
                <article class="bathroom-mirror-process__item">
                  <div class="bathroom-mirror-process__media">
                    <img src="<?php echo esc_url($step['image']); ?>" alt="<?php echo esc_attr($step['title']); ?>" loading="lazy" decoding="async">
                  </div>
                  <div class="bathroom-mirror-process__meta">
                    <span class="bathroom-mirror-process__number"><?php echo esc_html($step['number']); ?></span>
                    <h3 class="bathroom-mirror-process__title"><?php echo esc_html($step['title']); ?></h3>
                  </div>
                </article>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="bathroom-mirror-section" id="bathroom-mirror-faq">
          <div class="shell">
            <div class="bathroom-mirror-section__head">
              <h2><?php esc_html_e('FAQ', 'mirrorcraft'); ?></h2>
            </div>
            <div class="bathroom-mirror-faq-grid">
              <?php foreach ($bm_faq_items as $item) : ?>
                <details class="bathroom-mirror-faq">
                  <summary><?php echo esc_html($item['question']); ?></summary>
                  <p><?php echo esc_html($item['answer']); ?></p>
                </details>
              <?php endforeach; ?>
            </div>
          </div>
        </section>

        <section class="bathroom-mirror-cta">
          <div class="shell">
            <div class="bathroom-mirror-cta__panel">
              <div class="bathroom-mirror-cta__copy">
                <h2><?php esc_html_e('Need Custom Bathroom Mirrors for Your Project?', 'mirrorcraft'); ?></h2>
                <p><?php esc_html_e('Send us your size, quantity, function requirements, or drawings. Our team will provide a professional mirror solution for your program.', 'mirrorcraft'); ?></p>
                <div class="bathroom-mirror-hero__actions">
                  <a class="button button-primary" href="<?php echo esc_url($bm_quote_url); ?>"><?php esc_html_e('Get a Custom Quote', 'mirrorcraft'); ?> &rarr;</a>
                </div>
              </div>
              <div class="bathroom-mirror-cta__media" style="background-image: linear-gradient(90deg, rgba(25, 18, 10, 0.08) 0%, rgba(25, 18, 10, 0.22) 100%), url('<?php echo esc_url($bm_cta_image); ?>');"></div>
            </div>
          </div>
        </section>
      </div>
      <?php continue; ?>
    <?php endif; ?>

    <section class="page-hero">
      <div class="shell page-hero-shell">
        <div class="page-hero-copy">
          <?php mirrorcraft_render_breadcrumbs(); ?>
          <p class="eyebrow"><?php esc_html_e('Product Category', 'mirrorcraft'); ?></p>
          <h1><?php the_title(); ?></h1>
          <p class="hero-lead"><?php echo esc_html(mirrorcraft_get_page_summary(get_the_ID(), $category['intro'] ?? __('Choose the product route that best fits the application, feature mix, and commercial target of the order.', 'mirrorcraft'))); ?></p>
        </div>
        <aside class="page-hero-aside page-hero-media">
          <?php if ($hero_image) : ?>
            <img src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" width="1200" height="1200" loading="eager" decoding="async">
          <?php endif; ?>
        </aside>
      </div>
    </section>

    <section class="section section-alt">
      <div class="shell card-grid card-grid-three">
        <article class="statement-card statement-card-dark">
          <h3><?php echo esc_html($category['overview_title'] ?? __('Category Overview', 'mirrorcraft')); ?></h3>
          <p><?php echo esc_html($category['overview_text'] ?? __('This category helps buyers compare the main product direction before locking specifications.', 'mirrorcraft')); ?></p>
        </article>
        <article class="statement-card">
          <h3><?php esc_html_e('Buyer Priorities', 'mirrorcraft'); ?></h3>
          <ul class="feature-list">
            <?php foreach (($category['buyer_tags'] ?? array()) as $tag) : ?>
              <li><?php echo esc_html($tag); ?></li>
            <?php endforeach; ?>
          </ul>
        </article>
        <article class="statement-card">
          <h3><?php esc_html_e('Typical Use Cases', 'mirrorcraft'); ?></h3>
          <ul class="feature-list">
            <?php foreach (($category['use_cases'] ?? array()) as $use_case) : ?>
              <li><?php echo esc_html($use_case); ?></li>
            <?php endforeach; ?>
          </ul>
        </article>
      </div>
    </section>

    <section class="section">
      <div class="shell card-grid card-grid-two">
        <article class="entry-card">
          <p class="eyebrow"><?php esc_html_e('Core Features', 'mirrorcraft'); ?></p>
          <ul class="feature-list">
            <?php foreach (($category['features'] ?? array()) as $feature) : ?>
              <li><?php echo esc_html($feature['item_text'] ?? ''); ?></li>
            <?php endforeach; ?>
          </ul>
        </article>
        <article class="entry-card">
          <p class="eyebrow"><?php esc_html_e('Customization Options', 'mirrorcraft'); ?></p>
          <ul class="feature-list">
            <?php foreach (($category['options'] ?? array()) as $option) : ?>
              <li><?php echo esc_html($option['item_text'] ?? ''); ?></li>
            <?php endforeach; ?>
          </ul>
        </article>
      </div>
    </section>

    <?php mirrorcraft_render_editor_content_section(array('section_class' => 'editor-bridge-section')); ?>

    <?php if (!empty($category['closing'])) : ?>
      <section class="section section-tight">
        <div class="shell cta-shell">
          <div class="cta-card">
            <div>
              <p class="eyebrow"><?php esc_html_e('Next Step', 'mirrorcraft'); ?></p>
              <h2><?php esc_html_e('Move this category into a workable quote brief.', 'mirrorcraft'); ?></h2>
              <p><?php echo esc_html($category['closing']); ?></p>
            </div>
            <div class="button-row">
              <a class="button button-primary" href="<?php echo esc_url(mirrorcraft_link_by_slug('contact', '/contact/')); ?>"><?php esc_html_e('Request a Quote', 'mirrorcraft'); ?></a>
            </div>
          </div>
        </div>
      </section>
    <?php endif; ?>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
