<?php
/*
Template Name: Products Page
*/

if (!function_exists('mirrorcraft_render_products_page_icon')) {
  function mirrorcraft_render_products_page_icon($slug) {
    switch ($slug) {
      case 'cri':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <circle cx="12" cy="12" r="8" fill="none" stroke="currentColor" stroke-width="1.8"/>
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" d="M12 6v12M6 12h12"/>
        </svg>
        <?php
        break;
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
      case 'smart':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 2a7 7 0 0 0-4 12.75V18a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2v-3.25A7 7 0 0 0 12 2Zm-1 18v1h2v-1h-2Zm1-16a5 5 0 0 1 2.5 9.33l-.5.29V17h-4v-3.38l-.5-.29A5 5 0 0 1 12 4Z"/>
        </svg>
        <?php
        break;
      case 'packaging':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M11.4 3.1a1.2 1.2 0 0 1 1.2 0l6.2 3.6a1.2 1.2 0 0 1 .6 1v7.2a1.2 1.2 0 0 1-.6 1l-6.2 3.6a1.2 1.2 0 0 1-1.2 0l-6.2-3.6a1.2 1.2 0 0 1-.6-1V7.7a1.2 1.2 0 0 1 .6-1l6.2-3.6Zm.6 2.42L7.3 8.2 12 10.9l4.7-2.7L12 5.52Zm0 7.05L6.6 9.82v4.57l5.4 3.12v-4.93Z"/>
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
      case 'hospitality':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M4 20v-8a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v8h-2v-3H6v3H4Zm2-5h12v-3a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v3Z"/>
        </svg>
        <?php
        break;
      case 'residential':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M5 10.5 12 4l7 6.5V20h-5v-5H10v5H5v-9.5Z"/>
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
      case 'healthcare':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M10 4h4v6h6v4h-6v6h-4v-6H4v-4h6V4Z"/>
        </svg>
        <?php
        break;
      case 'retail':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M5 6h14l-1 4H6L5 6Zm1 6h12v8H6v-8Zm2 2v4h8v-4H8Z"/>
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
      case 'globe':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2Zm6.93 9h-3.17a15.7 15.7 0 0 0-1.07-4.39A8.05 8.05 0 0 1 18.93 11ZM12 4.07c.86 1.06 1.8 3.2 2.12 6.93H9.88C10.2 7.27 11.14 5.13 12 4.07ZM4.26 13h3.18a15.7 15.7 0 0 0 1.06 4.39A8.03 8.03 0 0 1 4.26 13Zm3.18-2H4.26a8.03 8.03 0 0 1 4.24-4.39A15.7 15.7 0 0 0 7.44 11Zm4.56 8.93c-.86-1.06-1.8-3.2-2.12-6.93h4.24c-.32 3.73-1.26 5.87-2.12 6.93ZM15.5 17.39A15.7 15.7 0 0 0 16.56 13h3.17a8.05 8.05 0 0 1-4.23 4.39Z"/>
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

if (!function_exists('mirrorcraft_products_filter_key')) {
  function mirrorcraft_products_filter_key($value) {
    return sanitize_title(wp_strip_all_tags((string) $value));
  }
}

get_header();

$products_quote_url   = mirrorcraft_link_by_slug('contact', '/contact/');
$products_contact_url = $products_quote_url;
$products_about_url   = mirrorcraft_link_by_slug('about', '/about/');
$products_faq_url     = mirrorcraft_link_by_slug('faq', '/faq/');
$products_apps_url    = mirrorcraft_link_by_slug('applications', '/applications/');

$products_hero_image = mirrorcraft_theme_image_optimized_url('real-estate-bathroom-mirror.png');

if ($products_hero_image === '') {
  $products_hero_image = mirrorcraft_theme_image_optimized_url('residential-led-bathroom-mirror.png');
}

if ($products_hero_image === '') {
  $products_hero_image = mirrorcraft_theme_image_optimized_url('hospitality-led-mirror-project.png');
}

$bathroom_image = mirrorcraft_theme_image_optimized_url('hospitality-led-mirror-project.png');
$rect_image     = mirrorcraft_theme_image_optimized_url('residential-led-bathroom-mirror.png');
$oval_image     = mirrorcraft_theme_image_optimized_url('real-estate-bathroom-mirror.png');
$arch_image     = mirrorcraft_theme_image_optimized_url('retail-store-fitting-mirror.png');
$irregular_image= mirrorcraft_theme_image_optimized_url('beauty-salon-led-mirror.png');
$makeup_image   = mirrorcraft_get_product_category_image_url('makeup-mirror');
$cabinet_image  = mirrorcraft_get_product_category_image_url('medicine-cabinet');
$smart_image    = mirrorcraft_theme_image_optimized_url('healthcare-hospital-mirror.png');
$custom_image   = mirrorcraft_theme_image_optimized_url('custom-mirrors-reference-20260422.png');

if ($makeup_image === '') {
  $makeup_image = mirrorcraft_theme_image_optimized_url('beauty-salon-led-mirror.png');
}

if ($cabinet_image === '') {
  $cabinet_image = mirrorcraft_theme_image_optimized_url('home-hero-banner-20260422.png');
}

$products_current_post = get_queried_object();
$products_current_slug = $products_current_post instanceof WP_Post ? mirrorcraft_normalize_product_category_slug($products_current_post->post_name) : '';

if ('bathroom-mirrors' === $products_current_slug) {
  $bm_hero_image = mirrorcraft_theme_image_first_available_url(array(
    'real-estate-bathroom-mirror.png',
    'real-estate-bathroom-mirror.webp',
    'product-bathroom-mirror.jpg',
    'residential-led-bathroom-mirror.png',
  ));

  if ($bm_hero_image === '') {
    $bm_hero_image = $products_hero_image;
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
      grid-template-columns: minmax(0, 0.74fr) minmax(0, 1.26fr);
      align-items: center;
      min-height: 600px;
    }

    .bathroom-mirror-hero__copy {
      display: grid;
      gap: 22px;
      max-width: 30rem;
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
  <main id="site-main" class="site-main bathroom-mirror-page" tabindex="-1">
    <section class="bathroom-mirror-hero" style="background-image: linear-gradient(90deg, rgba(25, 18, 10, 0.74) 0%, rgba(25, 18, 10, 0.52) 42%, rgba(25, 18, 10, 0.12) 100%), url('<?php echo esc_url($bm_hero_image); ?>');">
      <div class="shell bathroom-mirror-hero__shell">
        <div class="bathroom-mirror-hero__copy">
          <h1><?php esc_html_e('Bathroom Mirrors for Modern Projects', 'mirrorcraft'); ?></h1>
          <p class="bathroom-mirror-hero__lead"><?php esc_html_e('Custom LED bathroom mirrors designed for hotels, residential projects, commercial spaces, and global B2B buyers.', 'mirrorcraft'); ?></p>
          <div class="bathroom-mirror-hero__actions">
            <a class="button button-primary" href="<?php echo esc_url($products_quote_url); ?>"><?php esc_html_e('Request a Quote', 'mirrorcraft'); ?></a>
            <a class="button button-secondary" href="<?php echo esc_url(mirrorcraft_link_by_slug('products', '/products/')); ?>"><?php esc_html_e('View Products', 'mirrorcraft'); ?></a>
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
              <a class="button button-primary" href="<?php echo esc_url($products_quote_url); ?>"><?php esc_html_e('Get a Custom Quote', 'mirrorcraft'); ?> &rarr;</a>
            </div>
          </div>
          <div class="bathroom-mirror-cta__media" style="background-image: linear-gradient(90deg, rgba(25, 18, 10, 0.08) 0%, rgba(25, 18, 10, 0.22) 100%), url('<?php echo esc_url($bm_cta_image); ?>');"></div>
        </div>
      </div>
    </section>
  </main>
  <?php
  get_footer();
  return;
}

$product_cards = array(
  array(
    'title'     => __('Round Backlit LED Mirror', 'mirrorcraft'),
    'slug'      => 'bathroom-mirrors',
    'image'     => $bathroom_image,
    'cri'       => 'RA 95',
    'shape'     => __('Round', 'mirrorcraft'),
    'size'      => __('600 / 800 / 1000mm', 'mirrorcraft'),
    'tags'      => array(__('Anti-fog', 'mirrorcraft'), __('Dimmable', 'mirrorcraft'), __('CCT', 'mirrorcraft')),
    'category'  => __('Bathroom Mirrors', 'mirrorcraft'),
    'functions' => array(__('Anti-fog', 'mirrorcraft'), __('Dimmable', 'mirrorcraft'), __('CCT', 'mirrorcraft')),
    'size_band' => __('800 - 1000', 'mirrorcraft'),
  ),
  array(
    'title'     => __('Rectangular LED Mirror', 'mirrorcraft'),
    'slug'      => 'bathroom-mirrors',
    'image'     => $rect_image,
    'cri'       => 'RA 95',
    'shape'     => __('Rectangle', 'mirrorcraft'),
    'size'      => __('600x800 / 800x1000mm', 'mirrorcraft'),
    'tags'      => array(__('Anti-fog', 'mirrorcraft'), __('Dimmable', 'mirrorcraft'), __('CCT', 'mirrorcraft')),
    'category'  => __('Bathroom Mirrors', 'mirrorcraft'),
    'functions' => array(__('Anti-fog', 'mirrorcraft'), __('Dimmable', 'mirrorcraft'), __('CCT', 'mirrorcraft')),
    'size_band' => __('800 - 1000', 'mirrorcraft'),
  ),
  array(
    'title'     => __('Oval LED Mirror', 'mirrorcraft'),
    'slug'      => 'bathroom-mirrors',
    'image'     => $oval_image,
    'cri'       => 'RA 95',
    'shape'     => __('Oval', 'mirrorcraft'),
    'size'      => __('500x800 / 600x1000mm', 'mirrorcraft'),
    'tags'      => array(__('Anti-fog', 'mirrorcraft'), __('Dimmable', 'mirrorcraft'), __('CCT', 'mirrorcraft')),
    'category'  => __('Bathroom Mirrors', 'mirrorcraft'),
    'functions' => array(__('Anti-fog', 'mirrorcraft'), __('Dimmable', 'mirrorcraft'), __('CCT', 'mirrorcraft')),
    'size_band' => __('600 - 800', 'mirrorcraft'),
  ),
  array(
    'title'     => __('Arch LED Mirror', 'mirrorcraft'),
    'slug'      => 'framed-mirrors',
    'image'     => $arch_image,
    'cri'       => 'RA 95',
    'shape'     => __('Arch', 'mirrorcraft'),
    'size'      => __('600x800 / 800x1200mm', 'mirrorcraft'),
    'tags'      => array(__('Anti-fog', 'mirrorcraft'), __('Dimmable', 'mirrorcraft'), __('CCT', 'mirrorcraft')),
    'category'  => __('Framed Mirrors', 'mirrorcraft'),
    'functions' => array(__('Anti-fog', 'mirrorcraft'), __('Dimmable', 'mirrorcraft'), __('CCT', 'mirrorcraft')),
    'size_band' => __('800 - 1000', 'mirrorcraft'),
  ),
  array(
    'title'     => __('Irregular LED Mirror', 'mirrorcraft'),
    'slug'      => 'custom-mirrors',
    'image'     => $irregular_image,
    'cri'       => 'RA 95',
    'shape'     => __('Irregular', 'mirrorcraft'),
    'size'      => __('Custom Size', 'mirrorcraft'),
    'tags'      => array(__('Anti-fog', 'mirrorcraft'), __('Dimmable', 'mirrorcraft'), __('CCT', 'mirrorcraft')),
    'category'  => __('Custom Mirrors', 'mirrorcraft'),
    'functions' => array(__('Anti-fog', 'mirrorcraft'), __('Dimmable', 'mirrorcraft'), __('CCT', 'mirrorcraft')),
    'size_band' => __('1000 - 1200', 'mirrorcraft'),
  ),
  array(
    'title'     => __('LED Mirror Cabinet', 'mirrorcraft'),
    'slug'      => 'medicine-cabinets',
    'image'     => $cabinet_image,
    'cri'       => 'RA 95',
    'shape'     => __('Rectangle', 'mirrorcraft'),
    'size'      => __('600 / 700 / 800x1000mm', 'mirrorcraft'),
    'tags'      => array(__('Anti-fog', 'mirrorcraft'), __('Touch', 'mirrorcraft'), __('CCT', 'mirrorcraft')),
    'category'  => __('Mirror Cabinets', 'mirrorcraft'),
    'functions' => array(__('Anti-fog', 'mirrorcraft'), __('Touch Sensor', 'mirrorcraft'), __('CCT', 'mirrorcraft')),
    'size_band' => __('800 - 1000', 'mirrorcraft'),
  ),
  array(
    'title'     => __('Makeup LED Mirror', 'mirrorcraft'),
    'slug'      => 'makeup-mirrors',
    'image'     => $makeup_image,
    'cri'       => 'RA 95',
    'shape'     => __('Round', 'mirrorcraft'),
    'size'      => __('600 / 800mm', 'mirrorcraft'),
    'tags'      => array(__('Dimmable', 'mirrorcraft'), __('Touch', 'mirrorcraft'), __('CCT', 'mirrorcraft')),
    'category'  => __('Makeup Mirrors', 'mirrorcraft'),
    'functions' => array(__('Dimmable', 'mirrorcraft'), __('Touch Sensor', 'mirrorcraft'), __('CCT', 'mirrorcraft')),
    'size_band' => __('600 - 800', 'mirrorcraft'),
  ),
  array(
    'title'     => __('Smart LED Mirror', 'mirrorcraft'),
    'slug'      => 'smart-mirrors',
    'image'     => $smart_image,
    'cri'       => 'RA 95',
    'shape'     => __('Rectangle', 'mirrorcraft'),
    'size'      => __('600x800 / 800x1200mm', 'mirrorcraft'),
    'tags'      => array(__('Anti-fog', 'mirrorcraft'), __('Bluetooth', 'mirrorcraft'), __('Clock', 'mirrorcraft')),
    'category'  => __('Smart Mirrors', 'mirrorcraft'),
    'functions' => array(__('Anti-fog', 'mirrorcraft'), __('Bluetooth', 'mirrorcraft'), __('Clock', 'mirrorcraft')),
    'size_band' => __('800 - 1000', 'mirrorcraft'),
  ),
);

$filter_groups = array(
  'category' => array(
    __('Bathroom Mirrors', 'mirrorcraft'),
    __('Mirror Cabinets', 'mirrorcraft'),
    __('Makeup Mirrors', 'mirrorcraft'),
    __('Framed Mirrors', 'mirrorcraft'),
    __('Smart Mirrors', 'mirrorcraft'),
    __('Custom Mirrors', 'mirrorcraft'),
  ),
  'shape'    => array(
    __('Round', 'mirrorcraft'),
    __('Rectangle', 'mirrorcraft'),
    __('Oval', 'mirrorcraft'),
    __('Arch', 'mirrorcraft'),
    __('Irregular', 'mirrorcraft'),
  ),
  'function' => array(
    __('Anti-fog', 'mirrorcraft'),
    __('Dimmable', 'mirrorcraft'),
    __('Touch Sensor', 'mirrorcraft'),
    __('Bluetooth', 'mirrorcraft'),
    __('Clock', 'mirrorcraft'),
    __('CCT', 'mirrorcraft'),
  ),
  'cri'      => array(
    __('CRI 80+', 'mirrorcraft'),
    __('CRI 90+', 'mirrorcraft'),
    __('CRI 95+', 'mirrorcraft'),
  ),
  'size'     => array(
    __('600 and below', 'mirrorcraft'),
    __('600 - 800', 'mirrorcraft'),
    __('800 - 1000', 'mirrorcraft'),
    __('1000 - 1200', 'mirrorcraft'),
    __('Custom Size', 'mirrorcraft'),
  ),
);

$filter_counts = array(
  'category' => array_fill_keys($filter_groups['category'], 0),
  'shape'    => array_fill_keys($filter_groups['shape'], 0),
  'function' => array_fill_keys($filter_groups['function'], 0),
  'cri'      => array_fill_keys($filter_groups['cri'], 0),
  'size'     => array_fill_keys($filter_groups['size'], 0),
);

foreach ($product_cards as $card) {
  if (isset($filter_counts['category'][$card['category']])) {
    $filter_counts['category'][$card['category']]++;
  }

  if (isset($filter_counts['shape'][$card['shape']])) {
    $filter_counts['shape'][$card['shape']]++;
  }

  $cri_key = __('CRI 95+', 'mirrorcraft');
  if (isset($filter_counts['cri'][$cri_key])) {
    $filter_counts['cri'][$cri_key]++;
  }

  if (isset($filter_counts['size'][$card['size_band']])) {
    $filter_counts['size'][$card['size_band']]++;
  }

  foreach ($card['functions'] as $feature) {
    if (isset($filter_counts['function'][$feature])) {
      $filter_counts['function'][$feature]++;
    }
  }
}

$hero_features = array(
  array('icon' => 'cri',       'label' => __('RA ≥95', 'mirrorcraft'),          'text' => __('True Color', 'mirrorcraft')),
  array('icon' => 'eye',       'label' => __('Flicker-Free', 'mirrorcraft'),    'text' => __('Eye Comfort', 'mirrorcraft')),
  array('icon' => 'light',     'label' => __('Dimmable', 'mirrorcraft'),        'text' => __('1%-100%', 'mirrorcraft')),
  array('icon' => 'cct',       'label' => __('CCT Adjustable', 'mirrorcraft'),  'text' => __('2700K-6500K', 'mirrorcraft')),
  array('icon' => 'anti-fog',  'label' => __('Anti-fog', 'mirrorcraft'),        'text' => __('Clear Visibility', 'mirrorcraft')),
  array('icon' => 'touch',     'label' => __('Smart Control', 'mirrorcraft'),   'text' => __('Touch / Sensor', 'mirrorcraft')),
);

$comparison_points = array(
  __('Shows true skin tones and object colors', 'mirrorcraft'),
  __('Ideal for makeup, grooming, and skincare', 'mirrorcraft'),
  __('Essential for hotels, salons, and luxury projects', 'mirrorcraft'),
  __('Higher lighting quality standard', 'mirrorcraft'),
);

$category_tiles = array(
  array('title' => __('Bathroom Mirrors', 'mirrorcraft'), 'image' => $bathroom_image, 'slug' => 'bathroom-mirrors'),
  array('title' => __('Mirror Cabinets', 'mirrorcraft'), 'image' => $cabinet_image, 'slug' => 'medicine-cabinets'),
  array('title' => __('Makeup Mirrors', 'mirrorcraft'), 'image' => $makeup_image, 'slug' => 'makeup-mirrors'),
  array('title' => __('Full Length Mirrors', 'mirrorcraft'), 'image' => $rect_image, 'slug' => 'full-length-mirrors'),
  array('title' => __('Smart Mirrors', 'mirrorcraft'), 'image' => $smart_image, 'slug' => 'smart-mirrors'),
  array('title' => __('Custom Mirrors', 'mirrorcraft'), 'image' => $custom_image, 'slug' => 'custom-mirrors'),
);

$customization_tiles = array(
  array('icon' => 'shape',     'title' => __('Shape Customization', 'mirrorcraft')),
  array('icon' => 'size',      'title' => __('Size Customization', 'mirrorcraft')),
  array('icon' => 'frame',     'title' => __('Frame Options', 'mirrorcraft')),
  array('icon' => 'light',     'title' => __('Lighting Options', 'mirrorcraft')),
  array('icon' => 'smart',     'title' => __('Smart Functions', 'mirrorcraft')),
  array('icon' => 'packaging', 'title' => __('Packaging Customization', 'mirrorcraft')),
  array('icon' => 'branding',  'title' => __('Logo / Branding Service', 'mirrorcraft')),
  array('icon' => 'touch',     'title' => __('Sensor & Touch Control', 'mirrorcraft')),
);

$industry_tiles = array(
  array('icon' => 'hospitality', 'title' => __('Hospitality', 'mirrorcraft'), 'image' => mirrorcraft_theme_image_optimized_url('hospitality-led-mirror-project.png')),
  array('icon' => 'residential', 'title' => __('Residential', 'mirrorcraft'), 'image' => mirrorcraft_theme_image_optimized_url('residential-led-bathroom-mirror.png')),
  array('icon' => 'commercial',  'title' => __('Commercial', 'mirrorcraft'),  'image' => mirrorcraft_theme_image_optimized_url('commercial-washroom-led-mirror.png')),
  array('icon' => 'light',       'title' => __('Beauty Salon', 'mirrorcraft'), 'image' => mirrorcraft_theme_image_optimized_url('beauty-salon-led-mirror.png')),
  array('icon' => 'healthcare',  'title' => __('Healthcare', 'mirrorcraft'),  'image' => mirrorcraft_theme_image_optimized_url('healthcare-hospital-mirror.png')),
  array('icon' => 'retail',      'title' => __('Retail', 'mirrorcraft'),      'image' => mirrorcraft_theme_image_optimized_url('retail-store-fitting-mirror.png')),
);

$bottom_proofs = array(
  array('icon' => 'quote',   'title' => __('Quick Response', 'mirrorcraft')),
  array('icon' => 'support', 'title' => __('Professional Support', 'mirrorcraft')),
  array('icon' => 'globe',   'title' => __('Best Solutions', 'mirrorcraft')),
);

$products_total_count = count($product_cards);
?>
<main id="site-main" class="site-main products-page" tabindex="-1">
  <section class="products-page-hero">
    <div class="products-page-hero__shell shell">
      <div class="products-page-hero__copy">
        <p class="products-page-hero__eyebrow"><?php esc_html_e('Products', 'mirrorcraft'); ?></p>
        <h1><?php esc_html_e('High CRI 95 LED Mirrors for Professional Lighting', 'mirrorcraft'); ?></h1>
        <p class="products-page-hero__lead"><?php esc_html_e('True color rendering for makeup, hospitality, and premium projects.', 'mirrorcraft'); ?></p>
        <div class="products-page-hero__features" aria-label="<?php esc_attr_e('Key lighting features', 'mirrorcraft'); ?>">
          <?php foreach ($hero_features as $feature) : ?>
            <div class="products-page-hero__feature">
              <span class="products-page-hero__feature-icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($feature['icon']); ?></span>
              <strong><?php echo esc_html($feature['label']); ?></strong>
              <span><?php echo esc_html($feature['text']); ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="products-page-hero__visual">
        <img src="<?php echo esc_url($products_hero_image); ?>" alt="<?php esc_attr_e('High CRI LED mirror for professional lighting', 'mirrorcraft'); ?>" width="1600" height="1000" loading="eager" fetchpriority="high" decoding="async">
        <div class="products-page-hero__badge" aria-label="<?php esc_attr_e('RA 95 high color rendering index', 'mirrorcraft'); ?>">
          <span class="products-page-hero__badge-overline">RA</span>
          <strong>95</strong>
          <span class="products-page-hero__badge-copy"><?php esc_html_e('High color rendering index', 'mirrorcraft'); ?></span>
        </div>
      </div>
    </div>
  </section>

  <section class="products-page-main oj-section">
    <div class="shell oj-wrap">
      <div class="products-page-main__breadcrumbs">
        <?php mirrorcraft_render_breadcrumbs(); ?>
      </div>

      <div class="products-page-main__layout" data-products-page>
        <aside class="products-filter-card">
          <div class="products-filter-card__heading">
            <h2><?php esc_html_e('Filter By', 'mirrorcraft'); ?></h2>
          </div>

          <?php
          $filter_labels = array(
            'category' => __('By Category', 'mirrorcraft'),
            'shape'    => __('By Shape', 'mirrorcraft'),
            'function' => __('By Function', 'mirrorcraft'),
            'cri'      => __('By CRI (Color Rendering Index)', 'mirrorcraft'),
            'size'     => __('By Size (mm)', 'mirrorcraft'),
          );
          ?>

          <?php foreach ($filter_groups as $group_key => $options) : ?>
            <section class="products-filter-card__group">
              <header class="products-filter-card__group-head">
                <h3><?php echo esc_html($filter_labels[$group_key]); ?></h3>
              </header>
              <div class="products-filter-card__options">
                <?php foreach ($options as $index => $option) : ?>
                  <?php
                  $count = $filter_counts[$group_key][$option] ?? 0;
                  $option_key = mirrorcraft_products_filter_key($option);
                  $input_id = sprintf('products-filter-%s-%s', $group_key, $option_key);
                  $checked = ('cri' === $group_key && 2 === $index) ? ' checked' : '';
                  ?>
                  <label class="products-filter-card__option" for="<?php echo esc_attr($input_id); ?>">
                    <input
                      id="<?php echo esc_attr($input_id); ?>"
                      type="checkbox"
                      data-products-filter-input
                      data-filter-group="<?php echo esc_attr($group_key); ?>"
                      data-filter-value="<?php echo esc_attr($option_key); ?>"
                      <?php echo esc_attr($checked); ?>
                    >
                    <span><?php echo esc_html($option); ?></span>
                    <em><?php echo esc_html((string) $count); ?></em>
                  </label>
                <?php endforeach; ?>
              </div>
            </section>
          <?php endforeach; ?>

          <button class="products-filter-card__clear" type="button" data-products-clear><?php esc_html_e('Clear All', 'mirrorcraft'); ?></button>
        </aside>

        <div class="products-page-main__content">
          <div class="products-page-main__head">
            <div>
              <h2><?php esc_html_e('All Products', 'mirrorcraft'); ?></h2>
              <p><?php esc_html_e('Professional LED Mirrors with High CRI 95', 'mirrorcraft'); ?></p>
            </div>
            <div class="products-page-main__meta">
              <span data-products-results-summary><?php printf(esc_html__('Showing 1-%1$d of %2$d results', 'mirrorcraft'), $products_total_count, $products_total_count); ?></span>
              <label>
                <span class="screen-reader-text"><?php esc_html_e('Sort products', 'mirrorcraft'); ?></span>
                <select data-products-sort>
                  <option value="default"><?php esc_html_e('Default sorting', 'mirrorcraft'); ?></option>
                  <option value="title-asc"><?php esc_html_e('Title: A to Z', 'mirrorcraft'); ?></option>
                  <option value="title-desc"><?php esc_html_e('Title: Z to A', 'mirrorcraft'); ?></option>
                  <option value="category-asc"><?php esc_html_e('Category: A to Z', 'mirrorcraft'); ?></option>
                </select>
              </label>
            </div>
          </div>

          <div class="products-page-grid" data-products-grid>
            <?php foreach ($product_cards as $index => $card) : ?>
              <?php
              $function_keys = array_map('mirrorcraft_products_filter_key', $card['functions']);
              $card_cri_key = mirrorcraft_products_filter_key(__('CRI 95+', 'mirrorcraft'));
              ?>
              <article
                class="products-page-card"
                data-product-card
                data-product-order="<?php echo esc_attr((string) $index); ?>"
                data-product-title="<?php echo esc_attr($card['title']); ?>"
                data-product-category="<?php echo esc_attr(mirrorcraft_products_filter_key($card['category'])); ?>"
                data-product-shape="<?php echo esc_attr(mirrorcraft_products_filter_key($card['shape'])); ?>"
                data-product-cri="<?php echo esc_attr($card_cri_key); ?>"
                data-product-size="<?php echo esc_attr(mirrorcraft_products_filter_key($card['size_band'])); ?>"
                data-product-functions="<?php echo esc_attr(implode('|', $function_keys)); ?>"
              >
                <div class="products-page-card__media">
                  <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" width="900" height="900" loading="lazy" decoding="async">
                  <span class="products-page-card__badge"><?php echo esc_html($card['cri']); ?></span>
                </div>
                <div class="products-page-card__body">
                  <h3><?php echo esc_html($card['title']); ?></h3>
                  <div class="products-page-card__tags">
                    <span class="products-page-card__cri-chip"><?php echo esc_html($card['cri']); ?></span>
                    <?php foreach ($card['tags'] as $tag) : ?>
                      <span><?php echo esc_html($tag); ?></span>
                    <?php endforeach; ?>
                  </div>
                  <p class="products-page-card__size"><?php echo esc_html__('Size:', 'mirrorcraft') . ' ' . esc_html($card['size']); ?></p>
                  <div class="products-page-card__actions">
                    <a class="button button-primary" href="<?php echo esc_url($products_contact_url); ?>"><?php esc_html_e('Send Inquiry', 'mirrorcraft'); ?></a>
                    <a class="products-page-card__link" href="<?php echo esc_url(mirrorcraft_get_product_category_page_link($card['slug'])); ?>" aria-label="<?php echo esc_attr(sprintf(__('Open %s', 'mirrorcraft'), $card['title'])); ?>">+</a>
                  </div>
                </div>
              </article>
            <?php endforeach; ?>
          </div>

          <nav class="products-page-pagination" data-products-pagination aria-label="<?php esc_attr_e('Product pagination', 'mirrorcraft'); ?>"></nav>
        </div>
      </div>

      <section class="products-cri-comparison">
        <div class="products-cri-comparison__intro">
          <h3><?php esc_html_e('Why CRI 95 Matters?', 'mirrorcraft'); ?></h3>
          <ul>
            <?php foreach ($comparison_points as $point) : ?>
              <li><?php echo esc_html($point); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <article class="products-cri-comparison__card">
          <div class="products-cri-comparison__copy">
            <h4><?php esc_html_e('CRI 80+', 'mirrorcraft'); ?></h4>
            <p><?php esc_html_e('Colors look dull and unnatural.', 'mirrorcraft'); ?></p>
          </div>
          <img src="<?php echo esc_url($makeup_image); ?>" alt="<?php esc_attr_e('Lower CRI lighting example', 'mirrorcraft'); ?>" width="900" height="520" loading="lazy" decoding="async">
        </article>
        <article class="products-cri-comparison__card products-cri-comparison__card--highlight">
          <div class="products-cri-comparison__copy">
            <h4><?php esc_html_e('CRI 95+', 'mirrorcraft'); ?></h4>
            <p><?php esc_html_e('Colors look vivid and true-to-life.', 'mirrorcraft'); ?></p>
          </div>
          <img src="<?php echo esc_url($bathroom_image); ?>" alt="<?php esc_attr_e('High CRI lighting example', 'mirrorcraft'); ?>" width="900" height="520" loading="lazy" decoding="async">
        </article>
      </section>

      <section class="products-category-strip">
        <?php foreach ($category_tiles as $tile) : ?>
          <article class="products-category-strip__item">
            <img src="<?php echo esc_url($tile['image']); ?>" alt="<?php echo esc_attr($tile['title']); ?>" width="520" height="320" loading="lazy" decoding="async">
            <div class="products-category-strip__body">
              <h3><?php echo esc_html($tile['title']); ?></h3>
              <a href="<?php echo esc_url(mirrorcraft_get_product_category_page_link($tile['slug'])); ?>"><?php esc_html_e('View More', 'mirrorcraft'); ?></a>
            </div>
          </article>
        <?php endforeach; ?>
      </section>

      <section class="products-capability-strip">
        <div class="products-capability-strip__intro">
          <h3><?php esc_html_e('Custom LED Mirror Solutions', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('Flexible OEM / ODM services to meet your project needs.', 'mirrorcraft'); ?></p>
          <a class="button button-secondary" href="<?php echo esc_url($products_contact_url); ?>"><?php esc_html_e('Learn More', 'mirrorcraft'); ?></a>
        </div>
        <div class="products-capability-strip__grid">
          <?php foreach ($customization_tiles as $tile) : ?>
            <article class="products-capability-strip__tile">
              <span class="products-capability-strip__icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($tile['icon']); ?></span>
              <h4><?php echo esc_html($tile['title']); ?></h4>
            </article>
          <?php endforeach; ?>
        </div>
      </section>

      <section class="products-industries">
        <div class="products-section-head">
          <h3><?php esc_html_e('Widely Used In', 'mirrorcraft'); ?></h3>
        </div>
        <div class="products-industries__grid">
          <?php foreach ($industry_tiles as $tile) : ?>
            <article class="products-industries__card">
              <img src="<?php echo esc_url($tile['image']); ?>" alt="<?php echo esc_attr($tile['title']); ?>" width="600" height="380" loading="lazy" decoding="async">
              <div class="products-industries__body">
                <span class="products-industries__icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($tile['icon']); ?></span>
                <h4><?php echo esc_html($tile['title']); ?></h4>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </section>

      <section class="products-bottom-proofline">
        <?php foreach ($bottom_proofs as $proof) : ?>
          <article class="products-bottom-proofline__item">
            <span class="products-bottom-proofline__icon" aria-hidden="true"><?php mirrorcraft_render_products_page_icon($proof['icon']); ?></span>
            <strong><?php echo esc_html($proof['title']); ?></strong>
          </article>
        <?php endforeach; ?>
      </section>

      <section class="products-bottom-cta">
        <div class="products-bottom-cta__copy">
          <p class="products-bottom-cta__eyebrow"><?php esc_html_e('Need High CRI Mirrors For Your Project?', 'mirrorcraft'); ?></p>
          <h3><?php esc_html_e('Send us your size, function, quantity, and application. We will recommend suitable models or provide custom solutions for you.', 'mirrorcraft'); ?></h3>
        </div>
        <div class="products-bottom-cta__actions">
          <a class="button button-primary" href="<?php echo esc_url($products_quote_url); ?>"><?php esc_html_e('Get a Quote', 'mirrorcraft'); ?></a>
          <a class="button button-secondary" href="<?php echo esc_url($products_contact_url); ?>"><?php esc_html_e('Contact Us', 'mirrorcraft'); ?></a>
        </div>
      </section>
    </div>
  </section>
</main>
<?php
get_footer();
