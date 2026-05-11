<?php
if (!function_exists('mirrorcraft_render_framed_ref_icon')) {
  function mirrorcraft_render_framed_ref_icon($slug) {
    switch ($slug) {
      case 'requirement':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <rect x="6" y="4.5" width="12" height="15" rx="2" fill="none" stroke="currentColor" stroke-width="1.7"/>
          <path fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" d="M9.2 4.5h5.6M9 9.2h6M9 13h6"/>
          <path fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" d="m9 16.4 1.7 1.7 3.3-3.3"/>
        </svg>
        <?php
        break;
      case 'drawing':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" d="m6.5 17.5 8.8-8.8 2.6 2.6-8.8 8.8H6.5v-2.6Z"/>
          <path fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" d="M13.8 6.7 15.6 4.9l3.5 3.5-1.8 1.8"/>
          <path fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" d="M4.5 20.2h5.1"/>
        </svg>
        <?php
        break;
      case 'selection':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round" d="M5 7.5h9v9H5z"/>
          <path fill="none" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round" d="M10 4.5h9v9h-5"/>
          <path fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" d="M8 10.5h3M8 13.5h4"/>
        </svg>
        <?php
        break;
      case 'install':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round" d="M5 5h10v14H5z"/>
          <path fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" d="M15 8.5h3.5M15 15.5h3.5M18.5 8.5v7"/>
          <path fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" d="m17.2 14.2 1.3 1.3 1.3-1.3"/>
        </svg>
        <?php
        break;
      case 'inspection':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round" d="M12 4 18 6.3v5.2c0 3.7-2.4 6.4-6 7.7-3.6-1.3-6-4-6-7.7V6.3L12 4Z"/>
          <circle cx="12.2" cy="11.2" r="2.3" fill="none" stroke="currentColor" stroke-width="1.7"/>
          <path fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" d="m13.9 12.9 1.8 1.8"/>
        </svg>
        <?php
        break;
      case 'delivery':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <circle cx="12" cy="12" r="8.2" fill="none" stroke="currentColor" stroke-width="1.7"/>
          <path fill="none" stroke="currentColor" stroke-width="1.7" d="M3.8 12h16.4M12 3.8c2 2.3 3.1 5.1 3.1 8.2s-1.1 5.9-3.1 8.2c-2-2.3-3.1-5.1-3.1-8.2s1.1-5.9 3.1-8.2Z"/>
          <path fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" d="m14.8 8.3 3.1.1-.1 3.1m-3 4.2 3.1-.1-.1-3.1"/>
        </svg>
        <?php
        break;
      case 'check':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <circle cx="12" cy="12" r="8.3" fill="none" stroke="currentColor" stroke-width="1.7"/>
          <path fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" d="m8.4 12.4 2.4 2.4 4.8-4.8"/>
        </svg>
        <?php
        break;
      default:
        mirrorcraft_render_products_page_icon($slug);
    }
  }
}

$cm_faq_page_url = function_exists('mirrorcraft_get_about_section_page_link')
  ? mirrorcraft_get_about_section_page_link('faqs')
  : mirrorcraft_link_by_slug('faq', '/faq/');

if ($cm_faq_page_url === '') {
  $cm_faq_page_url = $cm_quote_url;
}

$cm_reference_hero_image = mirrorcraft_theme_image_first_available_url(array(
  'custom-mirror-hero-reference-20260508.png',
  'real-estate-bathroom-mirror.png',
  'custom-mirrors-reference-20260422.png',
));

if ($cm_reference_hero_image === '') {
  $cm_reference_hero_image = $cm_primary_image;
}

$cm_reference_hero_points = array(
  array('icon' => 'commercial', 'title' => __('OEM/ODM Expertise', 'mirrorcraft')),
  array('icon' => 'shield-check', 'title' => __('Premium Quality', 'mirrorcraft')),
  array('icon' => 'globe', 'title' => __('Global Delivery On-Time', 'mirrorcraft')),
  array('icon' => 'inspection', 'title' => __('100% Inspection Before Shipment', 'mirrorcraft')),
);

$cm_reference_band_cards = array(
  array(
    'icon'  => 'commercial',
    'title' => __('OEM/ODM Expertise', 'mirrorcraft'),
    'text'  => __('Tailored solutions for your brand and projects.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'drawing',
    'title' => __('Full Customization', 'mirrorcraft'),
    'text'  => __('Size, shape, lighting, functions & more.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'support',
    'title' => __('Project Support', 'mirrorcraft'),
    'text'  => __('Design, technical drawings & after-sales support.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'delivery',
    'title' => __('Global Delivery', 'mirrorcraft'),
    'text'  => __('Secure packaging and on-time worldwide shipping.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'shield-check',
    'title' => __('Quality Assurance', 'mirrorcraft'),
    'text'  => __('Strict QC process for long-term reliability.', 'mirrorcraft'),
  ),
);

$cm_reference_customize_cards = array(
  array(
    'number'  => '01',
    'slug'    => 'shapes',
    'title'   => __('Size & Shape', 'mirrorcraft'),
    'bullets' => array(
      __('Standard & custom sizes', 'mirrorcraft'),
      __('Round, oval, square, arch', 'mirrorcraft'),
      __('Irregular & unique shapes', 'mirrorcraft'),
    ),
  ),
  array(
    'number'  => '02',
    'slug'    => 'lighting',
    'title'   => __('Lighting Options', 'mirrorcraft'),
    'bullets' => array(
      __('Front-lit, back-lit, front & back-lit', 'mirrorcraft'),
      __('Side-lit, top & bottom-lit', 'mirrorcraft'),
      __('Adjustable brightness', 'mirrorcraft'),
    ),
    'images' => array_values(array_filter(array(
      $cm_primary_image,
      $cm_hotel_image,
      $cm_real_estate_image,
    ))),
  ),
  array(
    'number'  => '03',
    'slug'    => 'cct',
    'title'   => __('CCT & CRI', 'mirrorcraft'),
    'bullets' => array(
      __('3000K / 4000K / 6000K', 'mirrorcraft'),
      __('CRI 80+ / 90+ / 95+', 'mirrorcraft'),
      __('True color, natural lighting', 'mirrorcraft'),
    ),
  ),
  array(
    'number'  => '04',
    'slug'    => 'functions',
    'title'   => __('Smart Functions', 'mirrorcraft'),
    'bullets' => array(
      __('Anti-fog touch sensor', 'mirrorcraft'),
      __('Bluetooth speaker, clock', 'mirrorcraft'),
      __('Temperature display & night light', 'mirrorcraft'),
    ),
    'icons' => array('anti-fog', 'speaker', 'clock', 'touch', 'light'),
  ),
  array(
    'number'  => '05',
    'slug'    => 'finishes',
    'title'   => __('Frame & Finish', 'mirrorcraft'),
    'bullets' => array(
      __('Frameless or framed', 'mirrorcraft'),
      __('Polished, brushed, matte', 'mirrorcraft'),
      __('Aluminum, stainless steel, custom colors', 'mirrorcraft'),
    ),
  ),
  array(
    'number'  => '06',
    'slug'    => 'packaging',
    'title'   => __('Packaging & OEM Support', 'mirrorcraft'),
    'bullets' => array(
      __('Reinforced export packaging', 'mirrorcraft'),
      __('Custom box, logo & label', 'mirrorcraft'),
      __('OEM/ODM & project solutions', 'mirrorcraft'),
    ),
    'images' => array_values(array_filter(array(
      mirrorcraft_theme_image_first_available_url(array('quality-control-ref/foam-protection.png')),
      mirrorcraft_theme_image_first_available_url(array('quality-control-ref/wooden-crate-option.png')),
      mirrorcraft_theme_image_first_available_url(array('quality-control-ref/strong-carton-packaging.png')),
    ))),
  ),
);

$cm_reference_process_cards = array(
  array(
    'number'      => '1',
    'title'       => __('Raw Materials', 'mirrorcraft'),
    'description' => __('High-quality silver glass, aluminum and components', 'mirrorcraft'),
    'image'       => mirrorcraft_theme_image_first_available_url(array('technology/glass-cutting.png')) ?: $cm_primary_image,
  ),
  array(
    'number'      => '2',
    'title'       => __('CNC Cutting', 'mirrorcraft'),
    'description' => __('Precision cutting for perfect size', 'mirrorcraft'),
    'image'       => mirrorcraft_theme_image_first_available_url(array('technology/glass-cutting.png')) ?: $cm_primary_image,
  ),
  array(
    'number'      => '3',
    'title'       => __('Edge Grinding', 'mirrorcraft'),
    'description' => __('Smooth edges safe to use', 'mirrorcraft'),
    'image'       => mirrorcraft_theme_image_first_available_url(array('technology/edge-processing.png')) ?: $cm_primary_image,
  ),
  array(
    'number'      => '4',
    'title'       => __('LED Integration', 'mirrorcraft'),
    'description' => __('High-quality LED strip & driver', 'mirrorcraft'),
    'image'       => mirrorcraft_theme_image_first_available_url(array('technology/led-assembly.png')) ?: $cm_primary_image,
  ),
  array(
    'number'      => '5',
    'title'       => __('Inspection', 'mirrorcraft'),
    'description' => __('100% inspection before packing', 'mirrorcraft'),
    'image'       => mirrorcraft_theme_image_first_available_url(array('technology/function-testing.png', 'who-we-are-inspection.png')) ?: $cm_primary_image,
  ),
  array(
    'number'      => '6',
    'title'       => __('Packaging', 'mirrorcraft'),
    'description' => __('Foam protection & reinforced cartons', 'mirrorcraft'),
    'image'       => mirrorcraft_theme_image_first_available_url(array('quality-control-ref/foam-protection.png', 'technology/packaging.png')) ?: $cm_primary_image,
  ),
  array(
    'number'      => '7',
    'title'       => __('Global Shipping', 'mirrorcraft'),
    'description' => __('On-time delivery worldwide', 'mirrorcraft'),
    'image'       => mirrorcraft_theme_image_first_available_url(array('quality-control-ref/pallet-loading.png', 'who-we-are-warehouse.png')) ?: $cm_primary_image,
  ),
);

$cm_reference_stats = array(
  array('icon' => 'shield-check', 'value' => '10+', 'label' => __('Years Experience', 'mirrorcraft')),
  array('icon' => 'box', 'value' => '500,000+', 'label' => __('Mirrors Produced', 'mirrorcraft')),
  array('icon' => 'globe', 'value' => '60+', 'label' => __('Export Markets', 'mirrorcraft')),
  array('icon' => 'inspection', 'value' => '100%', 'label' => __('Inspection Before Shipment', 'mirrorcraft')),
  array('icon' => 'clock', 'value' => '24H', 'label' => __('Response Time', 'mirrorcraft')),
);

$cm_reference_applications = array(
  array('icon' => 'scene-hotel', 'title' => __('Hospitality', 'mirrorcraft'), 'text' => __('Hotels, resorts, guest rooms & bathrooms', 'mirrorcraft'), 'image' => $cm_hotel_image ?: $cm_primary_image),
  array('icon' => 'scene-home', 'title' => __('Residential', 'mirrorcraft'), 'text' => __('Homes, apartments & luxury residences', 'mirrorcraft'), 'image' => $cm_residential_image ?: $cm_primary_image),
  array('icon' => 'scene-showroom', 'title' => __('Commercial', 'mirrorcraft'), 'text' => __('Offices, malls, public buildings & more', 'mirrorcraft'), 'image' => $cm_primary_image),
  array('icon' => 'scene-salon', 'title' => __('Beauty & Wellness', 'mirrorcraft'), 'text' => __('Salons, spas, clinics & makeup studios', 'mirrorcraft'), 'image' => $cm_salon_image ?: $cm_primary_image),
  array('icon' => 'scene-hotel', 'title' => __('Healthcare', 'mirrorcraft'), 'text' => __('Hospitals, clinics & medical facilities', 'mirrorcraft'), 'image' => $cm_healthcare_image ?: $cm_primary_image),
  array('icon' => 'quote', 'title' => __('Cruise & Marine', 'mirrorcraft'), 'text' => __('Cruise ships, yachts & marine projects', 'mirrorcraft'), 'image' => mirrorcraft_theme_image_first_available_url(array('cruise-ship-bathroom-mirror.png')) ?: $cm_primary_image),
  array('icon' => 'commercial', 'title' => __('Real Estate', 'mirrorcraft'), 'text' => __('Developers & property projects', 'mirrorcraft'), 'image' => $cm_real_estate_image ?: $cm_primary_image),
  array('icon' => 'scene-store', 'title' => __('Retail & Chain Stores', 'mirrorcraft'), 'text' => __('Shops, showrooms & franchise chains', 'mirrorcraft'), 'image' => $cm_retail_image ?: $cm_primary_image),
);

$cm_reference_partner_gallery = array_values(array_slice(array_filter(array(
  $cm_hotel_image,
  $cm_primary_image,
  $cm_real_estate_image,
  $cm_salon_image,
)), 0, 4));

$cm_reference_partner_points = array(
  array('icon' => 'clock', 'title' => __('Fast Response', 'mirrorcraft'), 'text' => __('within 24 hours', 'mirrorcraft')),
  array('icon' => 'support', 'title' => __('Professional Support', 'mirrorcraft'), 'text' => __('from design to delivery', 'mirrorcraft')),
  array('icon' => 'shield-check', 'title' => __('Confidentiality', 'mirrorcraft'), 'text' => __('your project is safe', 'mirrorcraft')),
);

$cm_reference_faqs = array(
  __('What is your MOQ for custom LED mirrors?', 'mirrorcraft'),
  __('Can you manufacture according to hotel project drawings?', 'mirrorcraft'),
  __('Can you customize size, shape, frame, CCT, CRI and smart functions?', 'mirrorcraft'),
  __('Do you support OEM packaging and private label?', 'mirrorcraft'),
  __('What is your production lead time?', 'mirrorcraft'),
  __('How do you ensure quality and safety?', 'mirrorcraft'),
);

$cm_reference_certifications = array(
  array(
    'label' => 'CE',
    'image' => mirrorcraft_theme_image_first_available_url(array('technology/certifications/ce.png')),
  ),
  array(
    'label' => 'RoHS',
    'image' => mirrorcraft_theme_image_first_available_url(array('technology/certifications/rohs.png')),
  ),
  array(
    'label' => 'ETL',
    'image' => mirrorcraft_theme_image_first_available_url(array('technology/certifications/etl.png')),
  ),
  array(
    'label' => 'IP44',
    'image' => mirrorcraft_theme_image_first_available_url(array('technology/certifications/ip44-ip54.png')),
  ),
  array(
    'label' => 'ISO',
    'image' => mirrorcraft_theme_image_first_available_url(array('technology/certifications/iso-9001.png')),
  ),
);
?>
<style>
  .custom-ref {
    --custom-ref-orange: #ff7a16;
    --custom-ref-orange-deep: #e0680c;
    --custom-ref-ink: #17110a;
    --custom-ref-copy: #695f56;
    --custom-ref-line: rgba(35, 25, 15, 0.1);
    --custom-ref-blue: #07172c;
    --custom-ref-blue-soft: #10213b;
    width: 100vw;
    max-width: 100vw;
    margin-inline: calc(50% - 50vw);
    background: linear-gradient(180deg, #fffdfa 0%, #fff 36%, #faf7f1 100%);
    color: var(--custom-ref-ink);
    padding-bottom: 88px;
  }

  .custom-ref * {
    box-sizing: border-box;
  }

  .custom-ref img,
  .custom-ref svg {
    display: block;
  }

  .custom-ref a {
    text-decoration: none;
  }

  .custom-ref h1,
  .custom-ref h2,
  .custom-ref h3 {
    margin: 0;
    font-family: Georgia, "Times New Roman", serif;
    font-weight: 700;
    letter-spacing: -0.04em;
  }

  .custom-ref p {
    margin: 0;
  }

  .custom-ref__shell {
    width: min(1280px, calc(100vw - 34px));
    margin: 0 auto;
  }

  .custom-ref__section {
    padding-top: 34px;
  }

  .custom-ref__section-head {
    display: grid;
    justify-items: center;
    gap: 9px;
    margin-bottom: 18px;
    text-align: center;
  }

  .custom-ref__section-head h2 {
    font-size: clamp(2rem, 3vw, 2.95rem);
    line-height: 1.02;
  }

  .custom-ref__section-head::after {
    content: "";
    width: 74px;
    height: 3px;
    border-radius: 999px;
    background: linear-gradient(90deg, rgba(255, 122, 22, 0.16), var(--custom-ref-orange), rgba(255, 122, 22, 0.16));
  }

  .custom-ref__section-kicker {
    color: var(--custom-ref-orange);
    font-size: 0.74rem;
    font-weight: 800;
    letter-spacing: 0.15em;
    text-transform: uppercase;
  }

  .custom-ref__section-lead {
    max-width: 44rem;
    margin: 8px auto 0;
    color: var(--custom-ref-copy);
    font-size: 0.97rem;
    line-height: 1.72;
  }

  .custom-ref__button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    min-height: 48px;
    padding: 0 18px;
    border-radius: 8px;
    border: 1px solid transparent;
    font-size: 0.88rem;
    font-weight: 700;
    line-height: 1;
    white-space: nowrap;
    transition: transform 160ms ease, box-shadow 160ms ease, background 160ms ease, border-color 160ms ease;
  }

  .custom-ref__button:hover,
  .custom-ref__button:focus-visible {
    transform: translateY(-1px);
  }

  .custom-ref__button--orange {
    background: linear-gradient(180deg, #ff8730 0%, #ff6d0c 100%);
    border-color: rgba(255, 122, 22, 0.46);
    color: #fff;
    box-shadow: 0 14px 28px rgba(255, 122, 22, 0.18);
  }

  .custom-ref__button--light {
    background: #fff;
    border-color: rgba(35, 25, 15, 0.14);
    color: var(--custom-ref-ink);
  }

  .custom-ref__hero {
    display: grid;
    grid-template-columns: minmax(320px, 0.9fr) minmax(0, 1.1fr);
    align-items: stretch;
    border-bottom: 1px solid rgba(35, 25, 15, 0.08);
    background: #fff;
  }

  .custom-ref__hero-copy {
    display: grid;
    align-content: center;
    gap: 18px;
    padding: 38px 34px 34px;
  }

  .custom-ref__hero-copy h1 {
    max-width: 18rem;
    font-size: clamp(2.45rem, 4vw, 4rem);
    line-height: 0.95;
  }

  .custom-ref__hero-copy h1 span {
    color: var(--custom-ref-orange);
  }

  .custom-ref__hero-lead {
    max-width: 26rem;
    color: var(--custom-ref-copy);
    font-size: 1rem;
    line-height: 1.76;
  }

  .custom-ref__hero-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
  }

  .custom-ref__hero-points {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 12px;
    padding-top: 2px;
  }

  .custom-ref__hero-point {
    display: grid;
    justify-items: start;
    gap: 8px;
  }

  .custom-ref__hero-point-icon {
    width: 28px;
    height: 28px;
    color: var(--custom-ref-orange);
    display: inline-flex;
    align-items: center;
    justify-content: center;
  }

  .custom-ref__hero-point-icon svg {
    width: 18px;
    height: 18px;
  }

  .custom-ref__hero-point-title {
    color: #43372d;
    font-size: 0.83rem;
    font-weight: 700;
    line-height: 1.44;
  }

  .custom-ref__hero-visual {
    min-height: 432px;
    overflow: hidden;
    background: #e7ddd0;
  }

  .custom-ref__hero-visual img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center center;
  }

  .custom-ref__band {
    display: grid;
    grid-template-columns: repeat(5, minmax(0, 1fr));
    border: 1px solid var(--custom-ref-line);
    border-radius: 18px;
    background: #fff;
    box-shadow: 0 18px 34px rgba(51, 34, 17, 0.06);
    overflow: hidden;
    margin-top: -18px;
  }

  .custom-ref__band-card {
    display: grid;
    justify-items: center;
    gap: 10px;
    min-height: 122px;
    padding: 16px 14px;
    border-left: 1px solid rgba(35, 25, 15, 0.08);
    text-align: center;
  }

  .custom-ref__band-card:first-child {
    border-left: 0;
  }

  .custom-ref__band-icon,
  .custom-ref__stats-icon,
  .custom-ref__app-label svg,
  .custom-ref__cta-meta-icon,
  .custom-ref__faq-icon {
    color: var(--custom-ref-orange);
  }

  .custom-ref__band-icon,
  .custom-ref__stats-icon,
  .custom-ref__quality-badge,
  .custom-ref__faq-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
  }

  .custom-ref__band-icon {
    width: 36px;
    height: 36px;
  }

  .custom-ref__band-icon svg,
  .custom-ref__stats-icon svg {
    width: 20px;
    height: 20px;
  }

  .custom-ref__band-title {
    font-size: 0.98rem;
    line-height: 1.24;
  }

  .custom-ref__band-text {
    color: var(--custom-ref-copy);
    font-size: 0.85rem;
    line-height: 1.58;
  }

  .custom-ref__detail-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 16px;
  }

  .custom-ref__detail-card,
  .custom-ref__app-card,
  .custom-ref__partners,
  .custom-ref__cta-card,
  .custom-ref__faq-card,
  .custom-ref__quality-card {
    border: 1px solid var(--custom-ref-line);
    background: #fff;
    box-shadow: 0 16px 34px rgba(51, 34, 17, 0.05);
  }

  .custom-ref__detail-card {
    display: grid;
    gap: 12px;
    min-height: 278px;
    padding: 16px 18px 18px;
    border-radius: 16px;
  }

  .custom-ref__detail-head {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.96rem;
    font-weight: 700;
  }

  .custom-ref__detail-number {
    color: var(--custom-ref-orange);
    font-size: 0.82rem;
    font-weight: 800;
  }

  .custom-ref__detail-visual {
    min-height: 84px;
  }

  .custom-ref__shape-set {
    display: flex;
    align-items: end;
    gap: 18px;
    min-height: 84px;
  }

  .custom-ref__shape {
    border: 2px solid #2b2b2b;
    background: transparent;
  }

  .custom-ref__shape--round {
    width: 42px;
    height: 42px;
    border-radius: 999px;
  }

  .custom-ref__shape--oval {
    width: 34px;
    height: 52px;
    border-radius: 999px;
  }

  .custom-ref__shape--arch {
    width: 40px;
    height: 52px;
    border-radius: 20px 20px 6px 6px;
  }

  .custom-ref__shape--square {
    width: 46px;
    height: 46px;
  }

  .custom-ref__mini-gallery {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 8px;
  }

  .custom-ref__mini-gallery figure {
    margin: 0;
    aspect-ratio: 1 / 0.78;
    overflow: hidden;
    border-radius: 10px;
    background: #eee5d8;
    box-shadow: 0 10px 18px rgba(51, 34, 17, 0.08);
  }

  .custom-ref__mini-gallery img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .custom-ref__temperature {
    display: grid;
    gap: 10px;
  }

  .custom-ref__temperature-scale {
    position: relative;
    height: 12px;
    border-radius: 999px;
    background: linear-gradient(90deg, #ff7a16 0%, #ffd27c 52%, #8abaff 100%);
  }

  .custom-ref__temperature-scale::after {
    content: "CRI 90+";
    position: absolute;
    right: -4px;
    top: -32px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 64px;
    min-height: 64px;
    border-radius: 999px;
    border: 1px solid rgba(35, 25, 15, 0.08);
    background: #fff;
    color: var(--custom-ref-ink);
    font-size: 0.95rem;
    font-weight: 800;
    line-height: 1.1;
    box-shadow: 0 10px 20px rgba(51, 34, 17, 0.06);
  }

  .custom-ref__temperature-labels {
    display: flex;
    justify-content: space-between;
    gap: 10px;
    color: #40362c;
    font-size: 0.82rem;
    font-weight: 700;
  }

  .custom-ref__function-icons {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
    min-height: 84px;
    align-items: center;
  }

  .custom-ref__function-icon {
    width: 30px;
    height: 30px;
    color: #3a332d;
    display: inline-flex;
    align-items: center;
    justify-content: center;
  }

  .custom-ref__function-icon svg {
    width: 20px;
    height: 20px;
  }

  .custom-ref__finish-swatches {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
    min-height: 84px;
    align-items: center;
  }

  .custom-ref__finish-swatch {
    width: 34px;
    height: 34px;
    border-radius: 999px;
    border: 1px solid rgba(35, 25, 15, 0.12);
    box-shadow: 0 10px 18px rgba(51, 34, 17, 0.08);
  }

  .custom-ref__detail-bullets,
  .custom-ref__quality-list {
    display: grid;
    gap: 8px;
    margin: 0;
    padding: 0;
    list-style: none;
    color: var(--custom-ref-copy);
    font-size: 0.88rem;
    line-height: 1.58;
  }

  .custom-ref__detail-bullets li,
  .custom-ref__quality-list li {
    display: grid;
    grid-template-columns: 8px 1fr;
    gap: 8px;
    align-items: start;
  }

  .custom-ref__detail-bullets li::before,
  .custom-ref__quality-list li::before {
    content: "";
    width: 5px;
    height: 5px;
    margin-top: 0.55em;
    border-radius: 999px;
    background: var(--custom-ref-orange);
  }

  .custom-ref__process-grid {
    display: grid;
    grid-template-columns: repeat(7, minmax(0, 1fr));
    gap: 12px;
  }

  .custom-ref__process-card {
    display: grid;
    gap: 10px;
  }

  .custom-ref__process-label {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #43372d;
    font-size: 0.85rem;
    font-weight: 700;
  }

  .custom-ref__process-number {
    width: 22px;
    height: 22px;
    border-radius: 999px;
    background: var(--custom-ref-orange);
    color: #fff;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 0.76rem;
    font-weight: 800;
  }

  .custom-ref__process-media {
    aspect-ratio: 1 / 0.78;
    overflow: hidden;
    border-radius: 12px;
    background: #e7ddd0;
    box-shadow: 0 12px 20px rgba(51, 34, 17, 0.08);
  }

  .custom-ref__process-media img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .custom-ref__process-text {
    color: var(--custom-ref-copy);
    font-size: 0.82rem;
    line-height: 1.55;
  }

  .custom-ref__stats {
    display: grid;
    grid-template-columns: repeat(5, minmax(0, 1fr));
    border-radius: 18px;
    background: linear-gradient(180deg, #061226 0%, #0b1d37 100%);
    color: #fff;
    overflow: hidden;
    box-shadow: 0 20px 36px rgba(7, 23, 44, 0.18);
  }

  .custom-ref__stats-card {
    display: grid;
    grid-template-columns: auto 1fr;
    align-items: center;
    gap: 12px;
    min-height: 84px;
    padding: 14px 18px;
    border-left: 1px solid rgba(255, 255, 255, 0.08);
  }

  .custom-ref__stats-card:first-child {
    border-left: 0;
  }

  .custom-ref__stats-icon {
    width: 38px;
    height: 38px;
  }

  .custom-ref__stats-value {
    color: #fff;
    font-size: 1.36rem;
    font-weight: 800;
    line-height: 1;
  }

  .custom-ref__stats-label {
    margin-top: 4px;
    color: rgba(226, 233, 246, 0.84);
    font-size: 0.84rem;
    line-height: 1.45;
  }

  .custom-ref__apps-grid {
    display: grid;
    grid-template-columns: repeat(8, minmax(0, 1fr));
    gap: 10px;
  }

  .custom-ref__app-card {
    overflow: hidden;
    border-radius: 14px;
  }

  .custom-ref__app-media {
    aspect-ratio: 1 / 0.72;
    overflow: hidden;
    background: #e7ddd0;
  }

  .custom-ref__app-media img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .custom-ref__app-body {
    display: grid;
    gap: 5px;
    padding: 10px 10px 12px;
    text-align: center;
  }

  .custom-ref__app-title {
    font-size: 0.9rem;
    line-height: 1.24;
  }

  .custom-ref__app-text {
    color: var(--custom-ref-copy);
    font-size: 0.76rem;
    line-height: 1.45;
  }

  .custom-ref__partners-layout {
    display: grid;
    grid-template-columns: minmax(0, 0.9fr) minmax(0, 1.1fr);
    gap: 18px;
    align-items: stretch;
  }

  .custom-ref__partners,
  .custom-ref__faq-card,
  .custom-ref__quality-card {
    border-radius: 18px;
    padding: 18px;
  }

  .custom-ref__partners-head {
    display: grid;
    gap: 8px;
    margin-bottom: 16px;
    text-align: center;
  }

  .custom-ref__partners-head h2,
  .custom-ref__faq-card h2,
  .custom-ref__quality-card h2,
  .custom-ref__cta-card h2 {
    font-size: clamp(1.72rem, 2.7vw, 2.5rem);
    line-height: 1.06;
  }

  .custom-ref__partners-head p,
  .custom-ref__faq-card p,
  .custom-ref__quality-card p {
    color: var(--custom-ref-copy);
    font-size: 0.95rem;
    line-height: 1.68;
  }

  .custom-ref__partners-gallery {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 8px;
  }

  .custom-ref__partners-gallery figure {
    margin: 0;
    aspect-ratio: 1 / 0.88;
    overflow: hidden;
    border-radius: 10px;
    background: #e7ddd0;
  }

  .custom-ref__partners-gallery img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .custom-ref__partners-actions {
    display: flex;
    justify-content: center;
    margin-top: 14px;
  }

  .custom-ref__cta-card {
    display: grid;
    gap: 16px;
    align-content: center;
    min-height: 100%;
    padding: 22px 24px;
    border-radius: 18px;
    background: linear-gradient(135deg, #061226 0%, #0b1d37 100%);
    color: #fff;
    box-shadow: 0 20px 36px rgba(7, 23, 44, 0.18);
  }

  .custom-ref__cta-kicker {
    color: rgba(255, 122, 22, 0.9);
    font-size: 0.72rem;
    font-weight: 800;
    letter-spacing: 0.16em;
    text-transform: uppercase;
  }

  .custom-ref__cta-card p {
    color: rgba(226, 233, 246, 0.84);
    font-size: 0.97rem;
    line-height: 1.72;
  }

  .custom-ref__cta-points {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 12px;
  }

  .custom-ref__cta-point {
    display: grid;
    grid-template-columns: auto 1fr;
    gap: 9px;
    align-items: start;
    color: rgba(226, 233, 246, 0.88);
    font-size: 0.82rem;
    line-height: 1.45;
  }

  .custom-ref__cta-meta-icon {
    width: 20px;
    height: 20px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
  }

  .custom-ref__cta-meta-icon svg {
    width: 16px;
    height: 16px;
  }

  .custom-ref__cta-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 4px;
  }

  .custom-ref__bottom-grid {
    display: grid;
    grid-template-columns: minmax(0, 0.9fr) minmax(0, 1.1fr);
    gap: 18px;
    align-items: stretch;
  }

  .custom-ref__faq-list {
    display: grid;
    gap: 10px;
    margin-top: 16px;
  }

  .custom-ref__faq-row {
    display: grid;
    grid-template-columns: 1fr auto;
    align-items: center;
    gap: 12px;
    padding: 10px 0;
    border-bottom: 1px solid rgba(35, 25, 15, 0.08);
    color: #352b23;
    font-size: 0.93rem;
    line-height: 1.5;
  }

  .custom-ref__faq-icon {
    width: 22px;
    height: 22px;
    font-size: 1.2rem;
    font-weight: 600;
  }

  .custom-ref__faq-actions {
    display: flex;
    justify-content: center;
    margin-top: 14px;
  }

  .custom-ref__quality-badges {
    display: grid;
    grid-template-columns: repeat(5, minmax(0, 1fr));
    gap: 14px;
    margin-top: 18px;
  }

  .custom-ref__quality-badge {
    min-height: 76px;
    border-radius: 999px;
    border: 1px solid rgba(35, 25, 15, 0.1);
    background: #fff;
    color: #22313f;
    font-size: 1.2rem;
    font-weight: 800;
    box-shadow: 0 12px 22px rgba(51, 34, 17, 0.04);
  }

  @media (max-width: 1280px) {
    .custom-ref__apps-grid {
      grid-template-columns: repeat(4, minmax(0, 1fr));
    }

    .custom-ref__detail-grid {
      grid-template-columns: repeat(2, minmax(0, 1fr));
    }
  }

  @media (max-width: 1024px) {
    .custom-ref__hero,
    .custom-ref__partners-layout,
    .custom-ref__bottom-grid {
      grid-template-columns: 1fr;
    }

    .custom-ref__hero-copy,
    .custom-ref__hero-visual {
      min-height: auto;
    }

    .custom-ref__band {
      grid-template-columns: repeat(3, minmax(0, 1fr));
      margin-top: 18px;
    }

    .custom-ref__stats {
      grid-template-columns: repeat(3, minmax(0, 1fr));
    }

    .custom-ref__cta-points {
      grid-template-columns: 1fr;
    }
  }

  @media (max-width: 820px) {
    .custom-ref__hero-copy {
      justify-items: center;
      padding: 28px 20px;
      text-align: center;
    }

    .custom-ref__hero-copy h1,
    .custom-ref__hero-lead {
      max-width: 100%;
    }

    .custom-ref__hero-points,
    .custom-ref__band,
    .custom-ref__stats,
    .custom-ref__apps-grid,
    .custom-ref__partners-gallery,
    .custom-ref__quality-badges {
      grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .custom-ref__detail-grid {
      grid-template-columns: 1fr;
    }

    .custom-ref__process-grid {
      grid-template-columns: repeat(2, minmax(0, 1fr));
    }
  }

  @media (max-width: 560px) {
    .custom-ref__shell {
      width: min(100vw - 18px, 100%);
    }

    .custom-ref__hero-points,
    .custom-ref__band,
    .custom-ref__stats,
    .custom-ref__apps-grid,
    .custom-ref__partners-gallery,
    .custom-ref__quality-badges,
    .custom-ref__process-grid {
      grid-template-columns: 1fr;
    }

    .custom-ref__hero-actions .custom-ref__button,
    .custom-ref__cta-actions .custom-ref__button {
      width: 100%;
    }
  }
</style>

<style>
  .custom-ref {
    --custom-ref-orange: #ff6d0c;
    --custom-ref-orange-deep: #de5b00;
    --custom-ref-ink: #161211;
    --custom-ref-copy: #645a53;
    --custom-ref-line: rgba(22, 18, 17, 0.08);
    --custom-ref-blue: #08182c;
    --custom-ref-blue-soft: #10243c;
    background: linear-gradient(180deg, #ffffff 0%, #fffaf5 56%, #f7f3ee 100%);
    color: var(--custom-ref-ink);
    font-family: "Avenir Next", "Helvetica Neue", "Segoe UI", sans-serif;
    padding: 20px 0 96px;
  }

  .custom-ref h1,
  .custom-ref h3 {
    font-family: "Avenir Next", "Helvetica Neue", "Segoe UI", sans-serif;
  }

  .custom-ref h2 {
    font-family: "Iowan Old Style", "Book Antiqua", "Palatino Linotype", serif;
    font-weight: 700;
    letter-spacing: -0.04em;
  }

  .custom-ref__shell {
    width: min(1320px, calc(100vw - 40px));
  }

  .custom-ref__section {
    padding-top: 40px;
  }

  .custom-ref__section-head {
    gap: 10px;
    margin-bottom: 22px;
  }

  .custom-ref__section-head h2 {
    font-size: clamp(2.2rem, 3vw, 3.05rem);
  }

  .custom-ref__section-kicker,
  .custom-ref__cta-kicker {
    color: var(--custom-ref-orange);
    font-size: 0.74rem;
    font-weight: 800;
    letter-spacing: 0.18em;
    text-transform: uppercase;
  }

  .custom-ref__section-lead {
    max-width: 44rem;
    margin-top: 6px;
    color: var(--custom-ref-copy);
    font-size: 0.98rem;
    line-height: 1.75;
  }

  .custom-ref__button {
    min-height: 52px;
    padding: 0 22px;
    border-radius: 10px;
    font-size: 0.9rem;
    font-weight: 700;
    gap: 12px;
  }

  .custom-ref__button--orange {
    background: linear-gradient(180deg, #ff8a32 0%, #ff6d0c 100%);
    border-color: rgba(255, 109, 12, 0.4);
    box-shadow: 0 18px 34px rgba(255, 109, 12, 0.22);
  }

  .custom-ref__button--light {
    border-color: rgba(22, 18, 17, 0.12);
    box-shadow: 0 10px 20px rgba(22, 18, 17, 0.04);
  }

  .custom-ref__hero {
    grid-template-columns: minmax(0, 0.9fr) minmax(0, 1.1fr);
    border: 1px solid rgba(22, 18, 17, 0.08);
    border-radius: 32px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 30px 60px rgba(22, 18, 17, 0.08);
    margin-top: 4px;
    border-bottom: 1px solid rgba(22, 18, 17, 0.08);
  }

  .custom-ref__hero-copy {
    gap: 22px;
    padding: 46px 40px 40px;
  }

  .custom-ref__hero-copy h1 {
    max-width: none;
    font-size: clamp(2.8rem, 4vw, 4.35rem);
    font-weight: 750;
    line-height: 0.94;
    letter-spacing: -0.055em;
  }

  .custom-ref__hero-copy h1 > span {
    display: block;
    color: inherit;
  }

  .custom-ref__hero-highlight {
    color: var(--custom-ref-orange);
  }

  .custom-ref__hero-lead {
    max-width: 30rem;
    font-size: 1rem;
    line-height: 1.78;
  }

  .custom-ref__hero-actions {
    gap: 14px;
  }

  .custom-ref__hero-points {
    gap: 16px;
    padding-top: 2px;
  }

  .custom-ref__hero-point {
    gap: 10px;
  }

  .custom-ref__hero-point-icon {
    width: 46px;
    height: 46px;
    border-radius: 14px;
    border: 1px solid rgba(255, 109, 12, 0.14);
    background: linear-gradient(180deg, rgba(255, 109, 12, 0.12), rgba(255, 109, 12, 0.03));
  }

  .custom-ref__hero-point-icon svg {
    width: 21px;
    height: 21px;
  }

  .custom-ref__hero-point-title {
    font-size: 0.84rem;
    line-height: 1.48;
  }

  .custom-ref__hero-visual {
    min-height: 590px;
    background: linear-gradient(180deg, #f0e5d9 0%, #e5d8c8 100%);
  }

  .custom-ref__hero-visual img {
    object-position: center;
  }

  .custom-ref__band {
    position: relative;
    z-index: 2;
    margin-top: -28px;
    border-radius: 24px;
    border: 1px solid rgba(22, 18, 17, 0.08);
    box-shadow: 0 24px 52px rgba(22, 18, 17, 0.08);
  }

  .custom-ref__band-card {
    min-height: 144px;
    padding: 22px 16px 20px;
    gap: 12px;
  }

  .custom-ref__band-icon {
    width: 44px;
    height: 44px;
    border-radius: 14px;
    background: rgba(255, 109, 12, 0.08);
  }

  .custom-ref__band-icon svg,
  .custom-ref__stats-icon svg {
    width: 22px;
    height: 22px;
  }

  .custom-ref__band-title {
    font-size: 1rem;
    font-weight: 700;
  }

  .custom-ref__band-text {
    font-size: 0.86rem;
    line-height: 1.6;
  }

  .custom-ref__detail-grid {
    gap: 18px;
  }

  .custom-ref__detail-card {
    min-height: 292px;
    padding: 18px 20px 20px;
    border-radius: 22px;
    background: linear-gradient(180deg, #ffffff 0%, #fffdfa 100%);
    box-shadow: 0 18px 38px rgba(22, 18, 17, 0.06);
  }

  .custom-ref__detail-head {
    gap: 10px;
  }

  .custom-ref__detail-head h3 {
    font-size: 1.03rem;
    font-weight: 700;
  }

  .custom-ref__detail-number {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 30px;
    height: 30px;
    padding: 0 8px;
    border-radius: 999px;
    border: 1px solid rgba(255, 109, 12, 0.16);
    background: rgba(255, 109, 12, 0.08);
    font-size: 0.78rem;
  }

  .custom-ref__detail-visual {
    min-height: 94px;
  }

  .custom-ref__shape-set {
    gap: 22px;
    min-height: 94px;
  }

  .custom-ref__shape {
    border: 2px solid #212121;
  }

  .custom-ref__mini-gallery {
    gap: 10px;
  }

  .custom-ref__mini-gallery figure {
    border-radius: 12px;
    box-shadow: 0 12px 22px rgba(22, 18, 17, 0.1);
  }

  .custom-ref__temperature {
    gap: 12px;
  }

  .custom-ref__temperature-scale {
    margin-right: 82px;
    height: 11px;
  }

  .custom-ref__temperature-scale::after {
    right: -74px;
    top: -26px;
    min-width: 68px;
    min-height: 68px;
    font-size: 0.98rem;
    box-shadow: 0 14px 28px rgba(22, 18, 17, 0.08);
  }

  .custom-ref__temperature-labels {
    font-size: 0.83rem;
  }

  .custom-ref__function-icons {
    gap: 18px;
    min-height: 94px;
  }

  .custom-ref__function-icon {
    width: 38px;
    height: 38px;
    border-radius: 12px;
    border: 1px solid rgba(22, 18, 17, 0.08);
    background: #fff;
  }

  .custom-ref__finish-swatches {
    gap: 18px;
    min-height: 94px;
  }

  .custom-ref__finish-swatch {
    width: 38px;
    height: 38px;
  }

  .custom-ref__detail-bullets {
    gap: 9px;
    font-size: 0.89rem;
  }

  .custom-ref__process-grid {
    gap: 16px;
  }

  .custom-ref__process-card {
    position: relative;
    gap: 10px;
  }

  .custom-ref__process-card:not(:last-child)::after {
    content: "→";
    position: absolute;
    right: -15px;
    top: 90px;
    color: var(--custom-ref-orange);
    font-size: 1.4rem;
    font-weight: 700;
    line-height: 1;
  }

  .custom-ref__process-label {
    gap: 10px;
    font-size: 0.85rem;
    line-height: 1.38;
  }

  .custom-ref__process-number {
    width: 24px;
    height: 24px;
    font-size: 0.78rem;
  }

  .custom-ref__process-media {
    aspect-ratio: 1 / 0.86;
    border-radius: 16px;
    border: 1px solid rgba(22, 18, 17, 0.08);
    box-shadow: 0 14px 28px rgba(22, 18, 17, 0.08);
  }

  .custom-ref__process-text {
    color: var(--custom-ref-copy);
    font-size: 0.82rem;
    line-height: 1.58;
  }

  .custom-ref__stats {
    border-radius: 24px;
    box-shadow: 0 26px 52px rgba(8, 24, 44, 0.18);
  }

  .custom-ref__stats-card {
    min-height: 108px;
    padding: 22px 24px;
  }

  .custom-ref__stats-icon {
    width: 46px;
    height: 46px;
    border-radius: 14px;
    background: rgba(255, 109, 12, 0.1);
  }

  .custom-ref__stats-value {
    font-size: 1.9rem;
  }

  .custom-ref__stats-label {
    font-size: 0.84rem;
  }

  .custom-ref__apps-grid {
    gap: 12px;
  }

  .custom-ref__app-card {
    border-radius: 16px;
    box-shadow: 0 16px 30px rgba(22, 18, 17, 0.05);
  }

  .custom-ref__app-media {
    aspect-ratio: 1 / 0.72;
  }

  .custom-ref__app-media img,
  .custom-ref__partners-gallery img {
    object-position: center;
  }

  .custom-ref__app-body {
    gap: 6px;
    padding: 12px 12px 14px;
  }

  .custom-ref__app-title {
    font-size: 0.92rem;
    font-weight: 700;
  }

  .custom-ref__app-text {
    font-size: 0.77rem;
    line-height: 1.5;
  }

  .custom-ref__partners-layout,
  .custom-ref__bottom-grid {
    gap: 20px;
  }

  .custom-ref__partners,
  .custom-ref__faq-card,
  .custom-ref__quality-card {
    padding: 24px;
    border-radius: 24px;
  }

  .custom-ref__partners-head,
  .custom-ref__faq-card,
  .custom-ref__quality-card {
    text-align: left;
  }

  .custom-ref__partners-head {
    margin-bottom: 18px;
  }

  .custom-ref__partners-gallery {
    gap: 10px;
  }

  .custom-ref__partners-gallery figure {
    border-radius: 12px;
  }

  .custom-ref__cta-card {
    padding: 26px 28px;
    border-radius: 24px;
    box-shadow: 0 26px 52px rgba(8, 24, 44, 0.18);
  }

  .custom-ref__cta-card h2 {
    font-size: clamp(2rem, 2.7vw, 2.8rem);
  }

  .custom-ref__cta-card p {
    font-size: 0.98rem;
  }

  .custom-ref__cta-points {
    gap: 14px;
  }

  .custom-ref__cta-point {
    gap: 10px;
    font-size: 0.84rem;
  }

  .custom-ref__cta-meta-icon {
    width: 36px;
    height: 36px;
    border-radius: 12px;
    background: rgba(255, 255, 255, 0.06);
  }

  .custom-ref__cta-actions {
    gap: 14px;
  }

  .custom-ref__faq-list {
    gap: 0;
    margin-top: 18px;
  }

  .custom-ref__faq-card h2,
  .custom-ref__quality-card h2,
  .custom-ref__partners-head h2 {
    font-size: clamp(2rem, 2.6vw, 2.7rem);
  }

  .custom-ref__faq-row {
    min-height: 58px;
    padding: 12px 0;
    font-size: 0.94rem;
    font-weight: 500;
  }

  .custom-ref__faq-row:last-child {
    border-bottom: 0;
  }

  .custom-ref__faq-icon {
    width: 28px;
    height: 28px;
    border-radius: 999px;
    background: rgba(255, 109, 12, 0.08);
    font-size: 1rem;
  }

  .custom-ref__quality-card p {
    margin-top: 6px;
    color: var(--custom-ref-copy);
    font-size: 0.96rem;
    line-height: 1.72;
  }

  .custom-ref__quality-badges {
    gap: 14px;
    margin-top: 20px;
  }

  .custom-ref__quality-badge {
    min-height: 108px;
    padding: 16px 12px;
    border-radius: 20px;
    border: 1px solid rgba(22, 18, 17, 0.08);
    background: linear-gradient(180deg, #ffffff 0%, #fff8f1 100%);
    box-shadow: none;
  }

  .custom-ref__quality-badge img {
    width: auto;
    max-width: 100%;
    max-height: 58px;
    object-fit: contain;
  }

  .custom-ref__quality-badge--text {
    color: #243548;
    font-size: 1.08rem;
    font-weight: 800;
  }

  @media (max-width: 1280px) {
    .custom-ref__process-card:not(:last-child)::after {
      display: none;
    }

    .custom-ref__hero-visual {
      min-height: 520px;
    }
  }

  @media (max-width: 1024px) {
    .custom-ref__hero {
      grid-template-columns: 1fr;
      border-radius: 28px;
    }

    .custom-ref__hero-visual {
      min-height: 440px;
    }

    .custom-ref__band {
      margin-top: 18px;
    }

    .custom-ref__band,
    .custom-ref__stats {
      grid-template-columns: repeat(3, minmax(0, 1fr));
    }

    .custom-ref__partners-layout,
    .custom-ref__bottom-grid {
      grid-template-columns: 1fr;
    }

    .custom-ref__process-grid {
      grid-template-columns: repeat(4, minmax(0, 1fr));
    }

    .custom-ref__quality-badges {
      grid-template-columns: repeat(3, minmax(0, 1fr));
    }
  }

  @media (max-width: 820px) {
    .custom-ref__hero-copy {
      justify-items: center;
      padding: 34px 24px 30px;
      text-align: center;
    }

    .custom-ref__hero-copy h1,
    .custom-ref__hero-lead {
      max-width: 100%;
    }

    .custom-ref__hero-points,
    .custom-ref__band,
    .custom-ref__apps-grid,
    .custom-ref__stats,
    .custom-ref__quality-badges {
      grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .custom-ref__detail-grid {
      grid-template-columns: 1fr;
    }

    .custom-ref__process-grid {
      grid-template-columns: repeat(2, minmax(0, 1fr));
    }

    .custom-ref__cta-points {
      grid-template-columns: 1fr;
    }
  }

  @media (max-width: 640px) {
    .custom-ref__shell {
      width: min(100vw - 20px, 100%);
    }

    .custom-ref__section {
      padding-top: 30px;
    }

    .custom-ref__hero-copy {
      padding: 28px 18px 24px;
      gap: 18px;
    }

    .custom-ref__hero-copy h1 {
      font-size: clamp(2.45rem, 11vw, 3.55rem);
    }

    .custom-ref__hero-actions,
    .custom-ref__cta-actions {
      display: grid;
      grid-template-columns: 1fr;
    }

    .custom-ref__temperature-scale {
      margin-right: 0;
    }

    .custom-ref__temperature-scale::after {
      display: none;
    }

    .custom-ref__hero-points,
    .custom-ref__band,
    .custom-ref__apps-grid,
    .custom-ref__stats,
    .custom-ref__process-grid {
      grid-template-columns: 1fr;
    }

    .custom-ref__partners-gallery,
    .custom-ref__quality-badges {
      grid-template-columns: repeat(2, minmax(0, 1fr));
    }
  }

  @media (min-width: 821px) {
    .custom-ref__hero-copy h1 > span {
      white-space: nowrap;
    }
  }
</style>

<div class="custom-ref">
  <div class="custom-ref__shell">
    <section class="custom-ref__hero">
      <div class="custom-ref__hero-copy">
        <p class="custom-ref__section-kicker"><?php esc_html_e('OEM/ODM LED Mirror Solutions', 'mirrorcraft'); ?></p>
        <h1>
          <span><?php esc_html_e('Custom LED Mirrors', 'mirrorcraft'); ?></span>
          <span><?php esc_html_e('for Hotels, Apartments', 'mirrorcraft'); ?></span>
          <span>&amp; <span class="custom-ref__hero-highlight"><?php esc_html_e('Commercial Projects', 'mirrorcraft'); ?></span></span>
        </h1>
        <p class="custom-ref__hero-lead"><?php esc_html_e('OEM/ODM manufacturer in China delivering fully customized LED mirrors with premium quality, smart features and reliable production for global B2B projects.', 'mirrorcraft'); ?></p>
        <div class="custom-ref__hero-actions">
          <a class="custom-ref__button custom-ref__button--orange" href="<?php echo esc_url($cm_quote_url); ?>"><?php esc_html_e('Get Custom Mirror Quote', 'mirrorcraft'); ?><span aria-hidden="true">→</span></a>
          <a class="custom-ref__button custom-ref__button--light" href="<?php echo esc_url($cm_quote_url); ?>"><?php esc_html_e('Send Drawings / Specs', 'mirrorcraft'); ?><span aria-hidden="true">→</span></a>
        </div>
        <div class="custom-ref__hero-points">
          <?php foreach ($cm_reference_hero_points as $item) : ?>
            <div class="custom-ref__hero-point">
              <span class="custom-ref__hero-point-icon" aria-hidden="true"><?php mirrorcraft_render_framed_ref_icon($item['icon']); ?></span>
              <span class="custom-ref__hero-point-title"><?php echo esc_html($item['title']); ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="custom-ref__hero-visual">
        <img src="<?php echo esc_url($cm_reference_hero_image); ?>" alt="<?php esc_attr_e('Custom LED mirror hospitality vanity', 'mirrorcraft'); ?>" loading="eager" decoding="async" fetchpriority="high">
      </div>
    </section>

    <section class="custom-ref__band">
      <?php foreach ($cm_reference_band_cards as $item) : ?>
        <article class="custom-ref__band-card">
          <span class="custom-ref__band-icon" aria-hidden="true"><?php mirrorcraft_render_framed_ref_icon($item['icon']); ?></span>
          <h3 class="custom-ref__band-title"><?php echo esc_html($item['title']); ?></h3>
          <p class="custom-ref__band-text"><?php echo esc_html($item['text']); ?></p>
        </article>
      <?php endforeach; ?>
    </section>

    <section class="custom-ref__section">
      <div class="custom-ref__section-head">
        <span class="custom-ref__section-kicker"><?php esc_html_e('Tailored to Your Project', 'mirrorcraft'); ?></span>
        <h2><?php esc_html_e('Customize Every Detail', 'mirrorcraft'); ?></h2>
        <p class="custom-ref__section-lead"><?php esc_html_e('From size and lighting to smart functions and packaging - we build mirrors to fit your exact needs.', 'mirrorcraft'); ?></p>
      </div>
      <div class="custom-ref__detail-grid">
        <?php foreach ($cm_reference_customize_cards as $card) : ?>
          <article class="custom-ref__detail-card">
            <div class="custom-ref__detail-head">
              <span class="custom-ref__detail-number"><?php echo esc_html($card['number']); ?></span>
              <h3><?php echo esc_html($card['title']); ?></h3>
            </div>
            <div class="custom-ref__detail-visual">
              <?php if ('shapes' === $card['slug']) : ?>
                <div class="custom-ref__shape-set" aria-hidden="true">
                  <span class="custom-ref__shape custom-ref__shape--round"></span>
                  <span class="custom-ref__shape custom-ref__shape--oval"></span>
                  <span class="custom-ref__shape custom-ref__shape--arch"></span>
                  <span class="custom-ref__shape custom-ref__shape--square"></span>
                </div>
              <?php elseif ('lighting' === $card['slug'] || 'packaging' === $card['slug']) : ?>
                <div class="custom-ref__mini-gallery">
                  <?php foreach ($card['images'] as $image) : ?>
                    <figure><img src="<?php echo esc_url($image); ?>" alt="" loading="lazy" decoding="async"></figure>
                  <?php endforeach; ?>
                </div>
              <?php elseif ('cct' === $card['slug']) : ?>
                <div class="custom-ref__temperature">
                  <div class="custom-ref__temperature-labels">
                    <span>3000K</span>
                    <span>4000K</span>
                    <span>6000K</span>
                  </div>
                  <div class="custom-ref__temperature-scale" aria-hidden="true"></div>
                </div>
              <?php elseif ('functions' === $card['slug']) : ?>
                <div class="custom-ref__function-icons" aria-hidden="true">
                  <?php foreach ($card['icons'] as $icon) : ?>
                    <span class="custom-ref__function-icon"><?php mirrorcraft_render_framed_ref_icon($icon); ?></span>
                  <?php endforeach; ?>
                </div>
              <?php elseif ('finishes' === $card['slug']) : ?>
                <div class="custom-ref__finish-swatches" aria-hidden="true">
                  <span class="custom-ref__finish-swatch" style="background: linear-gradient(135deg, #d2d3d7 0%, #8d9096 100%);"></span>
                  <span class="custom-ref__finish-swatch" style="background: linear-gradient(135deg, #252525 0%, #595959 100%);"></span>
                  <span class="custom-ref__finish-swatch" style="background: linear-gradient(135deg, #f0b14f 0%, #8e5d14 100%);"></span>
                  <span class="custom-ref__finish-swatch" style="background: linear-gradient(135deg, #d7d7d7 0%, #6a6a6a 100%);"></span>
                </div>
              <?php endif; ?>
            </div>
            <ul class="custom-ref__detail-bullets">
              <?php foreach ($card['bullets'] as $bullet) : ?>
                <li><span><?php echo esc_html($bullet); ?></span></li>
              <?php endforeach; ?>
            </ul>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="custom-ref__section">
      <div class="custom-ref__section-head">
        <span class="custom-ref__section-kicker"><?php esc_html_e('Our Manufacturing Process', 'mirrorcraft'); ?></span>
        <h2><?php esc_html_e('From Concept to Completion', 'mirrorcraft'); ?></h2>
        <p class="custom-ref__section-lead"><?php esc_html_e('Every mirror is crafted with precision and care.', 'mirrorcraft'); ?></p>
      </div>
      <div class="custom-ref__process-grid">
        <?php foreach ($cm_reference_process_cards as $card) : ?>
          <article class="custom-ref__process-card">
            <div class="custom-ref__process-label">
              <span class="custom-ref__process-number"><?php echo esc_html($card['number']); ?></span>
              <span><?php echo esc_html($card['title']); ?></span>
            </div>
            <div class="custom-ref__process-media">
              <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
            </div>
            <p class="custom-ref__process-text"><?php echo esc_html($card['description']); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="custom-ref__section">
      <div class="custom-ref__stats">
        <?php foreach ($cm_reference_stats as $item) : ?>
          <article class="custom-ref__stats-card">
            <span class="custom-ref__stats-icon" aria-hidden="true"><?php mirrorcraft_render_framed_ref_icon($item['icon']); ?></span>
            <div>
              <div class="custom-ref__stats-value"><?php echo esc_html($item['value']); ?></div>
              <div class="custom-ref__stats-label"><?php echo esc_html($item['label']); ?></div>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="custom-ref__section">
      <div class="custom-ref__section-head">
        <span class="custom-ref__section-kicker"><?php esc_html_e('Built for Every Space', 'mirrorcraft'); ?></span>
        <h2><?php esc_html_e('Applications', 'mirrorcraft'); ?></h2>
      </div>
      <div class="custom-ref__apps-grid">
        <?php foreach ($cm_reference_applications as $item) : ?>
          <article class="custom-ref__app-card">
            <div class="custom-ref__app-media">
              <img src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['title']); ?>" loading="lazy" decoding="async">
            </div>
            <div class="custom-ref__app-body">
              <h3 class="custom-ref__app-title"><?php echo esc_html($item['title']); ?></h3>
              <p class="custom-ref__app-text"><?php echo esc_html($item['text']); ?></p>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="custom-ref__section">
      <div class="custom-ref__partners-layout">
        <article class="custom-ref__partners">
          <div class="custom-ref__partners-head">
            <h2><?php esc_html_e('Trusted by Global Partners', 'mirrorcraft'); ?></h2>
            <p><?php esc_html_e('Delivering premium custom mirrors for world-class projects.', 'mirrorcraft'); ?></p>
          </div>
          <div class="custom-ref__partners-gallery">
            <?php foreach ($cm_reference_partner_gallery as $image) : ?>
              <figure><img src="<?php echo esc_url($image); ?>" alt="<?php esc_attr_e('Custom mirror project example', 'mirrorcraft'); ?>" loading="lazy" decoding="async"></figure>
            <?php endforeach; ?>
          </div>
          <div class="custom-ref__partners-actions">
            <a class="custom-ref__button custom-ref__button--light" href="<?php echo esc_url($cm_quote_url); ?>"><?php esc_html_e('View More Projects', 'mirrorcraft'); ?><span aria-hidden="true">→</span></a>
          </div>
        </article>

        <article class="custom-ref__cta-card">
          <span class="custom-ref__cta-kicker"><?php esc_html_e('Ready to Start Your Project?', 'mirrorcraft'); ?></span>
          <h2><?php esc_html_e('Let’s Create the Perfect Mirror for Your Project', 'mirrorcraft'); ?></h2>
          <p><?php esc_html_e('Send us your drawings, size list or project requirements - our team will provide a tailored solution and quotation within 24 hours.', 'mirrorcraft'); ?></p>
          <div class="custom-ref__cta-points">
            <?php foreach ($cm_reference_partner_points as $item) : ?>
              <div class="custom-ref__cta-point">
                <span class="custom-ref__cta-meta-icon" aria-hidden="true"><?php mirrorcraft_render_framed_ref_icon($item['icon']); ?></span>
                <span><strong><?php echo esc_html($item['title']); ?></strong><br><?php echo esc_html($item['text']); ?></span>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="custom-ref__cta-actions">
            <a class="custom-ref__button custom-ref__button--orange" href="<?php echo esc_url($cm_quote_url); ?>"><?php esc_html_e('Get Custom Mirror Quote', 'mirrorcraft'); ?><span aria-hidden="true">→</span></a>
            <a class="custom-ref__button custom-ref__button--light" href="<?php echo esc_url($cm_quote_url); ?>"><?php esc_html_e('Send Drawings / Specs', 'mirrorcraft'); ?><span aria-hidden="true">→</span></a>
          </div>
        </article>
      </div>
    </section>

    <section class="custom-ref__section">
      <div class="custom-ref__bottom-grid">
        <article class="custom-ref__faq-card">
          <h2><?php esc_html_e('FAQ', 'mirrorcraft'); ?></h2>
          <div class="custom-ref__faq-list">
            <?php foreach ($cm_reference_faqs as $faq) : ?>
              <div class="custom-ref__faq-row">
                <span><?php echo esc_html($faq); ?></span>
                <span class="custom-ref__faq-icon" aria-hidden="true">+</span>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="custom-ref__faq-actions">
            <a class="custom-ref__button custom-ref__button--light" href="<?php echo esc_url($cm_faq_page_url); ?>"><?php esc_html_e('View All FAQs', 'mirrorcraft'); ?><span aria-hidden="true">→</span></a>
          </div>
        </article>

        <article class="custom-ref__quality-card">
          <span class="custom-ref__section-kicker"><?php esc_html_e('Certifications', 'mirrorcraft'); ?></span>
          <h2><?php esc_html_e('Quality You Can Trust', 'mirrorcraft'); ?></h2>
          <p><?php esc_html_e('Built for hospitality, residential and commercial projects with certified quality standards.', 'mirrorcraft'); ?></p>
          <div class="custom-ref__quality-badges">
            <?php foreach ($cm_reference_certifications as $item) : ?>
              <span class="custom-ref__quality-badge">
                <?php if (!empty($item['image'])) : ?>
                  <img src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['label']); ?>" loading="lazy" decoding="async">
                <?php else : ?>
                  <span class="custom-ref__quality-badge--text"><?php echo esc_html($item['label']); ?></span>
                <?php endif; ?>
              </span>
            <?php endforeach; ?>
          </div>
        </article>
      </div>
    </section>
  </div>
</div>
