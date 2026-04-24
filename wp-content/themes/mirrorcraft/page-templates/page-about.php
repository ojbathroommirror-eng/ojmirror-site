<?php
/*
Template Name: About Page
*/

if (!function_exists('mirrorcraft_render_about_page_icon')) {
  function mirrorcraft_render_about_page_icon($slug) {
    switch ($slug) {
      case 'manufacturing':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M3 21V7.5A1.5 1.5 0 0 1 4.5 6H11v15H3Zm10 0V3h6.5A1.5 1.5 0 0 1 21 4.5V21h-8Zm-7-9h2v2H6v-2Zm0 4h2v2H6v-2Zm9-7h2v2h-2V9Zm0 4h2v2h-2v-2Z"/>
        </svg>
        <?php
        break;
      case 'oem':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M11.4 3.1a1.2 1.2 0 0 1 1.2 0l6.2 3.6a1.2 1.2 0 0 1 .6 1v7.2a1.2 1.2 0 0 1-.6 1L12.6 19.5a1.2 1.2 0 0 1-1.2 0l-6.2-3.6a1.2 1.2 0 0 1-.6-1V7.7a1.2 1.2 0 0 1 .6-1l6.2-3.6Zm.6 2.42L7.3 8.2 12 10.9l4.7-2.7L12 5.52Zm-5.4 4.3v4.57l4.4 2.54v-4.57L6.6 9.82Zm6.4 7.11 4.4-2.54V9.82L13 12.37v4.57Z"/>
        </svg>
        <?php
        break;
      case 'project':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M4 20V9l5-3 4 3V4l7 4v12H4Zm3-2h2v-2H7v2Zm0-4h2v-2H7v2Zm5 4h2v-2h-2v2Zm0-4h2v-2h-2v2Zm5 4h2v-6h-2v6Z"/>
        </svg>
        <?php
        break;
      case 'quality':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 2 4 5v6c0 5 3.4 9.74 8 11 4.6-1.26 8-6 8-11V5l-8-3Zm0 17.87C8.6 18.76 6 14.73 6 11V6.36l6-2.25 6 2.25V11c0 3.73-2.6 7.76-6 8.87Zm-1.2-4.37-2.6-2.6 1.41-1.4 1.19 1.18 3.79-3.78 1.41 1.41-5.2 5.19Z"/>
        </svg>
        <?php
        break;
      case 'experience':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M11 2h2v4h-2V2Zm6.36 2.64 1.41 1.41-2.83 2.83-1.41-1.41 2.83-2.83ZM4.64 4.64l2.83 2.83-1.41 1.41L3.23 6.05l1.41-1.41ZM12 8a6 6 0 1 0 6 6h-2a4 4 0 1 1-4-4V8Zm7 10v2H5v-2h14Z"/>
        </svg>
        <?php
        break;
      case 'factory':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M3 21V7h7v4l4-2v2l4-2v12H3Zm3-2h2v-3H6v3Zm4 0h2v-3h-2v3Zm4 0h2v-5h-2v5Z"/>
        </svg>
        <?php
        break;
      case 'team':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M9 11a3 3 0 1 0-3-3 3 3 0 0 0 3 3Zm6 1a2.5 2.5 0 1 0-2.5-2.5A2.5 2.5 0 0 0 15 12ZM4 18.5V20h10v-1.5A4.5 4.5 0 0 0 9.5 14h-1A4.5 4.5 0 0 0 4 18.5Zm11.5-4a4.4 4.4 0 0 0-1.5.26 5.9 5.9 0 0 1 2 4.24V20H20v-1a4.5 4.5 0 0 0-4.5-4.5Z"/>
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
      case 'reliable':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 3 6 5.5v4.8c0 3.88 2.28 7.32 6 9.2 3.72-1.88 6-5.32 6-9.2V5.5L12 3Zm-1 11.2-2.2-2.2 1.4-1.4 1.2 1.2 2.9-2.9 1.4 1.4-4.3 4.3Z"/>
        </svg>
        <?php
        break;
      case 'flexible':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="m5 19 2-2 2 2 1.4-1.4-2-2 2.6-2.6 2 2 1.4-1.4-2-2L15 9l2 2L18.4 9.6l-2-2 2.6-2.6 2 2L22.4 5l-3-3-3 3-2-2L13 4.4l2 2L12.4 9l-2-2L9 8.4l2 2-2.6 2.6-2-2L5 12.4l2 2L4.4 17 3 15.6 0 18.6 1.4 20l3-3Z"/>
        </svg>
        <?php
        break;
      case 'moq':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M11.4 3.1a1.2 1.2 0 0 1 1.2 0l6.2 3.6a1.2 1.2 0 0 1 .6 1v7.2a1.2 1.2 0 0 1-.6 1l-6.2 3.6a1.2 1.2 0 0 1-1.2 0l-6.2-3.6a1.2 1.2 0 0 1-.6-1V7.7a1.2 1.2 0 0 1 .6-1l6.2-3.6Zm.6 2.42L7.3 8.2 12 10.9l4.7-2.7L12 5.52Zm-5.4 4.3v4.57l4.4 2.54v-4.57L6.6 9.82Zm6.4 7.11 4.4-2.54V9.82L13 12.37v4.57Z"/>
        </svg>
        <?php
        break;
      case 'delivery':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M3 6a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v2h2.59a2 2 0 0 1 1.7.95l1.41 2.35c.2.33.3.71.3 1.1V16a2 2 0 0 1-2 2h-1.17a3 3 0 0 1-5.66 0H9.83a3 3 0 0 1-5.66 0H3V6Zm2 10a1 1 0 1 0 0 2 1 1 0 0 0 0-2Zm12 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2Zm0-6v3h4v-.42L19.58 10H17Z"/>
        </svg>
        <?php
        break;
      case 'price':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M12 3a9 9 0 1 0 9 9 9 9 0 0 0-9-9Zm1 14.93V19h-2v-1.08A4 4 0 0 1 8 14h2a2 2 0 1 0 2-2 4 4 0 1 1 1-7.87V3h2v1.13A4 4 0 0 1 16 8h-2a2 2 0 1 0-2 2 4 4 0 0 1 1 7.93Z"/>
        </svg>
        <?php
        break;
      case 'size-shape':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M4 4h7v2H6v5H4V4Zm16 0v7h-2V6h-5V4h7ZM4 13h2v5h5v2H4v-7Zm14 0h2v7h-7v-2h5v-5Z"/>
        </svg>
        <?php
        break;
      case 'lighting':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M11 2h2v3h-2V2Zm6.95 2.46 1.41 1.41-2.12 2.12-1.41-1.41 2.12-2.12ZM4.64 4.64 6.76 6.76 5.34 8.17 3.22 6.05l1.42-1.41ZM12 6a6 6 0 0 0-3 11.2V20h6v-2.8A6 6 0 0 0 12 6Zm-2 15v-1h4v1h-4Z"/>
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
      case 'anti-fog':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M7 6a5 5 0 0 1 10 0c0 2.5-2 3.7-3.2 4.8A3.3 3.3 0 0 0 13 13h-2a4.9 4.9 0 0 1 1.3-3.4C13.5 8.3 15 7.5 15 6a3 3 0 0 0-6 0H7Zm3 9h4v2h-4v-2Zm-2 4h8v2H8v-2Z"/>
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
      case 'packaging':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M11.4 3.1a1.2 1.2 0 0 1 1.2 0l6.2 3.6a1.2 1.2 0 0 1 .6 1v7.2a1.2 1.2 0 0 1-.6 1l-6.2 3.6a1.2 1.2 0 0 1-1.2 0l-6.2-3.6a1.2 1.2 0 0 1-.6-1V7.7a1.2 1.2 0 0 1 .6-1l6.2-3.6Zm.6 2.42L7.3 8.2 12 10.9l4.7-2.7L12 5.52Zm0 7.05L6.6 9.82v4.57l5.4 3.12v-4.93Z"/>
        </svg>
        <?php
        break;
      case 'sample':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M6 3h9l4 4v14H6V3Zm2 2v14h9V8h-3V5H8Zm1 6h6v2H9v-2Zm0 4h4v2H9v-2Z"/>
        </svg>
        <?php
        break;
      case 'drawing':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M4 4h11v2H6v12h12v-9h2v11H4V4Zm12.7.3 3 3-8.9 8.9-3.4.4.4-3.4 8.9-8.9Zm-7.8 10.6.9.9 7.5-7.5-.9-.9-7.5 7.5Z"/>
        </svg>
        <?php
        break;
      case 'inspection':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="currentColor" d="M10 4a6 6 0 1 1-4.47 10l-3.76 3.76 1.41 1.41L6.94 15A6 6 0 0 1 10 4Zm0 2a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm7.29 8.29L22 19l-1.41 1.41-4.71-4.7 1.41-1.42Z"/>
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

$about_contact_url  = mirrorcraft_link_by_slug('contact', '/contact/');
$about_quote_url    = $about_contact_url;
$about_projects_url = mirrorcraft_link_by_slug('projects', '/projects/');
$about_email        = mirrorcraft_get_contact_email();
$about_phone        = mirrorcraft_get_contact_phone();

$about_hero_image = mirrorcraft_theme_image_url('home-hero-banner-20260422.png');

if ($about_hero_image === '') {
  $about_hero_image = mirrorcraft_theme_image_url('hospitality-led-mirror-project.png');
}

$about_collage_images = array(
  array(
    'src' => mirrorcraft_theme_image_url('who-we-are-workshop.png'),
    'alt' => __('Mirror workshop production line', 'mirrorcraft'),
  ),
  array(
    'src' => mirrorcraft_theme_image_url('factory.png'),
    'alt' => __('Laser cutting and mirror fabrication process', 'mirrorcraft'),
  ),
  array(
    'src' => mirrorcraft_theme_image_url('who-we-are-inspection.png'),
    'alt' => __('Mirror quality inspection', 'mirrorcraft'),
  ),
  array(
    'src' => mirrorcraft_theme_image_url('home-hero-banner-20260422.png'),
    'alt' => __('LED mirror application scene', 'mirrorcraft'),
  ),
);

$about_stats = array(
  array('icon' => 'experience', 'value' => '10+', 'label' => __('Years Experience', 'mirrorcraft')),
  array('icon' => 'factory', 'value' => '20000+ m²', 'label' => __('Factory Area', 'mirrorcraft')),
  array('icon' => 'team', 'value' => '100+', 'label' => __('Skilled Employees', 'mirrorcraft')),
  array('icon' => 'globe', 'value' => '80+', 'label' => __('Countries Exported', 'mirrorcraft')),
);

$about_services = array(
  array(
    'icon'  => 'manufacturing',
    'title' => __('Product Manufacturing', 'mirrorcraft'),
    'text'  => __('LED mirrors, mirror cabinets, framed mirrors, and full-length mirrors with reliable quality.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'oem',
    'title' => __('OEM & ODM Service', 'mirrorcraft'),
    'text'  => __('Custom size, shape, lighting, functions, and packaging to match your brand needs.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'project',
    'title' => __('Project Supply', 'mirrorcraft'),
    'text'  => __('Solutions for hospitality, residential, commercial, healthcare, and salon projects.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'quality',
    'title' => __('Quality & Support', 'mirrorcraft'),
    'text'  => __('Strict quality control, safe packaging, and professional export support.', 'mirrorcraft'),
  ),
);

$about_advantages = array(
  array(
    'icon'  => 'reliable',
    'title' => __('Reliable Quality', 'mirrorcraft'),
    'text'  => __('Strict QC system ensures stable and consistent product quality.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'flexible',
    'title' => __('Flexible Customization', 'mirrorcraft'),
    'text'  => __('Support OEM & ODM with strong R&D and design capabilities.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'moq',
    'title' => __('Low MOQ', 'mirrorcraft'),
    'text'  => __('Flexible order quantity to support your business growth.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'delivery',
    'title' => __('Fast Delivery', 'mirrorcraft'),
    'text'  => __('Efficient production management ensures on-time delivery.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'price',
    'title' => __('Competitive Price', 'mirrorcraft'),
    'text'  => __('Factory direct supply provides the best value for your business.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'globe',
    'title' => __('Global Experience', 'mirrorcraft'),
    'text'  => __('Rich export experience, serving clients in 80+ countries.', 'mirrorcraft'),
  ),
);

$about_capabilities = array(
  array('icon' => 'size-shape', 'title' => __('Size & Shape', 'mirrorcraft')),
  array('icon' => 'lighting', 'title' => __('Lighting (CCT / CRI)', 'mirrorcraft')),
  array('icon' => 'touch', 'title' => __('Touch / Sensor', 'mirrorcraft')),
  array('icon' => 'anti-fog', 'title' => __('Anti-fog Function', 'mirrorcraft')),
  array('icon' => 'smart', 'title' => __('Smart Functions', 'mirrorcraft')),
  array('icon' => 'frame', 'title' => __('Frame & Finish', 'mirrorcraft')),
  array('icon' => 'branding', 'title' => __('Logo & Branding', 'mirrorcraft')),
  array('icon' => 'packaging', 'title' => __('Packaging', 'mirrorcraft')),
);

$about_capability_images = array(
  array(
    'src' => mirrorcraft_theme_image_url('beauty-salon-led-mirror.png'),
    'alt' => __('Oval LED mirror', 'mirrorcraft'),
  ),
  array(
    'src' => mirrorcraft_theme_image_url('home-hero-banner-20260422.png'),
    'alt' => __('Rounded rectangle LED mirror', 'mirrorcraft'),
  ),
  array(
    'src' => mirrorcraft_theme_image_url('hospitality-led-mirror-project.png'),
    'alt' => __('Framed LED mirror', 'mirrorcraft'),
  ),
  array(
    'src' => mirrorcraft_theme_image_url('residential-led-bathroom-mirror.png'),
    'alt' => __('Bathroom mirror application', 'mirrorcraft'),
  ),
);

$about_industries = array(
  array(
    'image' => mirrorcraft_theme_image_url('hospitality-led-mirror-project.png'),
    'title' => __('Hospitality', 'mirrorcraft'),
    'text'  => __('Hotels, resorts, and serviced apartments.', 'mirrorcraft'),
  ),
  array(
    'image' => mirrorcraft_theme_image_url('residential-led-bathroom-mirror.png'),
    'title' => __('Residential', 'mirrorcraft'),
    'text'  => __('Luxury homes and apartment projects.', 'mirrorcraft'),
  ),
  array(
    'image' => mirrorcraft_theme_image_url('commercial-washroom-led-mirror.png'),
    'title' => __('Commercial', 'mirrorcraft'),
    'text'  => __('Offices, public spaces, and commercial buildings.', 'mirrorcraft'),
  ),
  array(
    'image' => mirrorcraft_theme_image_url('beauty-salon-led-mirror.png'),
    'title' => __('Beauty & Wellness', 'mirrorcraft'),
    'text'  => __('Salons, spas, and beauty studios.', 'mirrorcraft'),
  ),
  array(
    'image' => mirrorcraft_theme_image_url('healthcare-hospital-mirror.png'),
    'title' => __('Healthcare', 'mirrorcraft'),
    'text'  => __('Hospitals, clinics, and healthcare facilities.', 'mirrorcraft'),
  ),
  array(
    'image' => mirrorcraft_theme_image_url('retail-store-fitting-mirror.png'),
    'title' => __('Retail', 'mirrorcraft'),
    'text'  => __('Shops, showrooms, and chain stores.', 'mirrorcraft'),
  ),
);

$about_process_steps = array(
  array(
    'icon'  => 'sample',
    'title' => __('Inquiry', 'mirrorcraft'),
    'text'  => __('Understand your requirements.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'drawing',
    'title' => __('Design / Drawing', 'mirrorcraft'),
    'text'  => __('Provide design and technical solutions.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'oem',
    'title' => __('Sample', 'mirrorcraft'),
    'text'  => __('Develop samples for approval.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'manufacturing',
    'title' => __('Mass Production', 'mirrorcraft'),
    'text'  => __('Standardized production with strict QC.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'inspection',
    'title' => __('Inspection', 'mirrorcraft'),
    'text'  => __('100% inspection before packing.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'packaging',
    'title' => __('Packing & Shipping', 'mirrorcraft'),
    'text'  => __('Safe packing and on-time delivery.', 'mirrorcraft'),
  ),
);

$about_quality_images = array(
  array(
    'src' => mirrorcraft_theme_image_url('who-we-are-warehouse.png'),
    'alt' => __('Drop test and transport packaging', 'mirrorcraft'),
    'label' => __('Drop Test', 'mirrorcraft'),
  ),
  array(
    'src' => mirrorcraft_theme_image_url('home-hero-banner-20260422.png'),
    'alt' => __('LED mirror lighting test', 'mirrorcraft'),
    'label' => __('Light Test', 'mirrorcraft'),
  ),
  array(
    'src' => mirrorcraft_theme_image_url('who-we-are-inspection.png'),
    'alt' => __('Final mirror inspection', 'mirrorcraft'),
    'label' => __('Inspection', 'mirrorcraft'),
  ),
  array(
    'src' => mirrorcraft_theme_image_url('who-we-are-warehouse.png'),
    'alt' => __('Secure export packaging', 'mirrorcraft'),
    'label' => __('Secure Packaging', 'mirrorcraft'),
  ),
);

$about_certifications = array('CE', 'RoHS', 'IP44', 'SAA', 'UL');
?>
<main id="site-main" class="site-main page-shell about-page" tabindex="-1">
  <section class="section about-page-hero">
    <div class="shell about-page-hero__shell">
      <div class="about-page-hero__copy">
        <p class="about-page__eyebrow"><?php esc_html_e('About Us', 'mirrorcraft'); ?></p>
        <h1><?php esc_html_e('Your Trusted LED Mirror Manufacturing Partner', 'mirrorcraft'); ?></h1>
        <p><?php esc_html_e('OJMIRROR is a professional manufacturer of LED mirrors and mirror cabinets, providing high-quality, innovative, and customized mirror solutions for global B2B clients.', 'mirrorcraft'); ?></p>
        <div class="about-page-hero__actions">
          <a class="button button-primary" href="<?php echo esc_url($about_contact_url); ?>"><?php esc_html_e('Contact Us', 'mirrorcraft'); ?></a>
        </div>
      </div>
      <div class="about-page-hero__media">
        <?php if ($about_hero_image !== '') : ?>
          <img src="<?php echo esc_url($about_hero_image); ?>" alt="<?php esc_attr_e('LED mirror bathroom scene', 'mirrorcraft'); ?>" loading="eager" decoding="async">
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="section about-page-who">
    <div class="shell about-page-who__shell">
      <div class="about-page-who__intro">
        <p class="about-page__section-label"><?php esc_html_e('Who We Are', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('A Professional Manufacturer You Can Rely On', 'mirrorcraft'); ?></h2>
        <p><?php esc_html_e('With years of experience in LED mirror and mirror cabinet manufacturing, we serve wholesalers, distributors, brands, contractors, and project clients worldwide.', 'mirrorcraft'); ?></p>

        <div class="about-page-stats">
          <?php foreach ($about_stats as $stat) : ?>
            <article class="about-page-stat">
              <span class="about-page-stat__icon" aria-hidden="true"><?php mirrorcraft_render_about_page_icon($stat['icon']); ?></span>
              <strong><?php echo esc_html($stat['value']); ?></strong>
              <span><?php echo esc_html($stat['label']); ?></span>
            </article>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="about-page-collage">
        <?php foreach ($about_collage_images as $image) : ?>
          <?php if (!empty($image['src'])) : ?>
            <figure class="about-page-collage__item">
              <img src="<?php echo esc_url($image['src']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" decoding="async">
            </figure>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section about-page-services">
    <div class="shell">
      <div class="about-page-heading">
        <p class="about-page__section-label"><?php esc_html_e('What We Do', 'mirrorcraft'); ?></p>
      </div>
      <div class="about-page-services__grid">
        <?php foreach ($about_services as $service) : ?>
          <article class="about-page-service-card">
            <span class="about-page-service-card__icon" aria-hidden="true"><?php mirrorcraft_render_about_page_icon($service['icon']); ?></span>
            <h3><?php echo esc_html($service['title']); ?></h3>
            <p><?php echo esc_html($service['text']); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section about-page-advantages">
    <div class="shell">
      <div class="about-page-heading">
        <p class="about-page__section-label"><?php esc_html_e('Why Choose Us', 'mirrorcraft'); ?></p>
      </div>
      <div class="about-page-advantages__grid">
        <?php foreach ($about_advantages as $item) : ?>
          <article class="about-page-advantage-card">
            <span class="about-page-advantage-card__icon" aria-hidden="true"><?php mirrorcraft_render_about_page_icon($item['icon']); ?></span>
            <h3><?php echo esc_html($item['title']); ?></h3>
            <p><?php echo esc_html($item['text']); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section about-page-customization">
    <div class="shell about-page-customization__shell">
      <div class="about-page-customization__capabilities">
        <div class="about-page-heading">
          <p class="about-page__section-label"><?php esc_html_e('Customization Capability', 'mirrorcraft'); ?></p>
        </div>
        <div class="about-page-capability-grid">
          <?php foreach ($about_capabilities as $capability) : ?>
            <article class="about-page-capability-card">
              <span class="about-page-capability-card__icon" aria-hidden="true"><?php mirrorcraft_render_about_page_icon($capability['icon']); ?></span>
              <span><?php echo esc_html($capability['title']); ?></span>
            </article>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="about-page-capability-gallery">
        <?php foreach ($about_capability_images as $image) : ?>
          <?php if (!empty($image['src'])) : ?>
            <figure class="about-page-capability-gallery__item">
              <img src="<?php echo esc_url($image['src']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" decoding="async">
            </figure>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section about-page-industries">
    <div class="shell">
      <div class="about-page-heading">
        <p class="about-page__section-label"><?php esc_html_e('Industries We Serve', 'mirrorcraft'); ?></p>
      </div>
      <div class="about-page-industries__grid">
        <?php foreach ($about_industries as $industry) : ?>
          <article class="about-page-industry-card">
            <?php if (!empty($industry['image'])) : ?>
              <figure class="about-page-industry-card__media">
                <img src="<?php echo esc_url($industry['image']); ?>" alt="<?php echo esc_attr($industry['title']); ?>" loading="lazy" decoding="async">
              </figure>
            <?php endif; ?>
            <h3><?php echo esc_html($industry['title']); ?></h3>
            <p><?php echo esc_html($industry['text']); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section about-page-process">
    <div class="shell">
      <div class="about-page-heading">
        <p class="about-page__section-label"><?php esc_html_e('Our Production Process', 'mirrorcraft'); ?></p>
      </div>
      <div class="about-page-process__grid">
        <?php foreach ($about_process_steps as $index => $step) : ?>
          <article class="about-page-process-card">
            <span class="about-page-process-card__icon" aria-hidden="true"><?php mirrorcraft_render_about_page_icon($step['icon']); ?></span>
            <h3><?php echo esc_html(($index + 1) . '. ' . $step['title']); ?></h3>
            <p><?php echo esc_html($step['text']); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section about-page-quality">
    <div class="shell about-page-quality__shell">
      <div class="about-page-quality__certs">
        <div class="about-page-heading">
          <p class="about-page__section-label"><?php esc_html_e('Quality & Certification', 'mirrorcraft'); ?></p>
        </div>
        <div class="about-page-quality__badges">
          <?php foreach ($about_certifications as $badge) : ?>
            <span class="about-page-quality__badge"><?php echo esc_html($badge); ?></span>
          <?php endforeach; ?>
        </div>
        <p><?php esc_html_e('Our products comply with international standards and are safe and reliable for global markets.', 'mirrorcraft'); ?></p>
      </div>

      <div class="about-page-quality__gallery">
        <?php foreach ($about_quality_images as $image) : ?>
          <?php if (!empty($image['src'])) : ?>
            <figure class="about-page-quality__gallery-item">
              <img src="<?php echo esc_url($image['src']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" loading="lazy" decoding="async">
              <figcaption><?php echo esc_html($image['label']); ?></figcaption>
            </figure>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>

      <aside class="about-page-quality__cta">
        <p class="about-page__section-label"><?php esc_html_e('Let’s Work Together', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('We are ready to be your reliable partner and grow your business together.', 'mirrorcraft'); ?></h2>
        <div class="about-page-quality__actions">
          <a class="button button-primary" href="<?php echo esc_url($about_quote_url); ?>"><?php esc_html_e('Contact Us', 'mirrorcraft'); ?></a>
          <a class="button button-secondary" href="<?php echo esc_url($about_projects_url); ?>"><?php esc_html_e('Projects', 'mirrorcraft'); ?></a>
        </div>
        <ul class="about-page-quality__contact-list">
          <li><?php echo esc_html__('Email: ', 'mirrorcraft') . esc_html($about_email); ?></li>
          <li><?php echo esc_html__('Tel: ', 'mirrorcraft') . esc_html($about_phone); ?></li>
        </ul>
      </aside>
    </div>
  </section>
</main>
<?php
get_footer();
