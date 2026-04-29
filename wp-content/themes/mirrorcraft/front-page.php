<?php
get_header();

$product_routes = mirrorcraft_get_product_family_cards();
$product_route_image_keys = array(
  'bathroom-mirrors'  => 'bathroom-mirror',
  'medicine-cabinets' => 'medicine-cabinet',
  'makeup-mirrors'    => 'makeup-mirror',
);
$application_cards = mirrorcraft_get_application_cards();
$hero_sources = function_exists('mirrorcraft_get_home_hero_background_sources')
  ? mirrorcraft_get_home_hero_background_sources()
  : array();
$hero_image = $hero_sources['desktop'] ?? '';
$hero_image_mobile = $hero_sources['mobile'] ?? $hero_image;

if (!$hero_image) {
  $hero_image = mirrorcraft_get_active_hero_image_url();
}

if (!$hero_image_mobile) {
  $hero_image_mobile = $hero_image;
}

$hero_image_alt = __('Custom LED mirror product display for hospitality and residential buyers', 'mirrorcraft');
$hero_image_srcset = '';

if ($hero_image_mobile && $hero_image_mobile !== $hero_image) {
  $hero_image_srcset = $hero_image_mobile . ' 768w, ' . $hero_image . ' 1440w';
}

$contact_url = mirrorcraft_link_by_slug('contact', '/contact/');
$products_url = mirrorcraft_link_by_slug('products', '/products/');
$applications_url = mirrorcraft_link_by_slug('applications', '/applications/');
$about_url = mirrorcraft_link_by_slug('about', '/about/');
$manufacturing_url = mirrorcraft_link_by_slug('manufacturing', '/manufacturing/');
$resources_url = mirrorcraft_link_by_slug('resources', '/resources/');
$faq_url = mirrorcraft_link_by_slug('faq', '/faq/');
$application_card_image_map = array(
  'hospitality'             => mirrorcraft_theme_image_optimized_url('hospitality-led-mirror-project.png'),
  'residential'             => mirrorcraft_theme_image_optimized_url('residential-led-bathroom-mirror.png'),
  'commercial'              => mirrorcraft_theme_image_optimized_url('commercial-washroom-led-mirror.png'),
  'healthcare'              => mirrorcraft_theme_image_optimized_url('healthcare-hospital-mirror.png'),
  'beauty-wellness'         => mirrorcraft_theme_image_optimized_url('beauty-salon-led-mirror.png'),
  'real-estate-development' => mirrorcraft_theme_image_optimized_url('real-estate-bathroom-mirror.png'),
  'retail-chain-stores'     => mirrorcraft_theme_image_optimized_url('retail-store-fitting-mirror.png'),
  'fitness-sports'          => mirrorcraft_theme_image_optimized_url('gym-fitness-mirror.png'),
  'transportation'          => mirrorcraft_theme_image_optimized_url('airport-public-mirror.png'),
  'cruise-marine'           => mirrorcraft_theme_image_optimized_url('cruise-ship-bathroom-mirror.png'),
  'senior-living'           => mirrorcraft_theme_image_optimized_url('senior-living-bathroom-mirror.png'),
  'education'               => mirrorcraft_theme_image_optimized_url('school-washroom-mirror.png'),
);
$application_card_copy_map = array(
  'hospitality'             => __('Ideal for hotel projects, combining premium design, durability, and large-scale customization.', 'mirrorcraft'),
  'residential'             => __('Perfect for apartments and housing projects, balancing aesthetics, functionality, and cost efficiency.', 'mirrorcraft'),
  'commercial'              => __('Designed for high-traffic environments with a focus on durability, anti-fog performance, and low maintenance.', 'mirrorcraft'),
  'beauty-wellness'         => __('High CRI lighting ensures accurate color rendering, ideal for makeup studios and salons.', 'mirrorcraft'),
  'real-estate-development' => __('A standard solution for large-scale residential developments with consistent quality and bulk supply.', 'mirrorcraft'),
  'retail-chain-stores'     => __('Enhances customer experience in fitting rooms and branded retail spaces.', 'mirrorcraft'),
  'healthcare'              => __('Meets hygiene and safety standards with anti-fog, easy-to-clean, and corrosion-resistant features.', 'mirrorcraft'),
  'senior-living'           => __('Designed for safety and accessibility, including anti-glare and shatterproof options.', 'mirrorcraft'),
  'fitness-sports'          => __('Large-format mirrors with clear reflection, ideal for gyms and training environments.', 'mirrorcraft'),
  'education'               => __('Built for durability and safety in school and campus facilities.', 'mirrorcraft'),
  'transportation'          => __('Suitable for high-traffic transport hubs, focusing on reliability and easy maintenance.', 'mirrorcraft'),
  'cruise-marine'           => __('Premium solutions for marine environments with moisture and corrosion resistance.', 'mirrorcraft'),
);
$application_cards_display = array();

foreach ($application_cards as $application_card) {
  $slug = $application_card['slug'] ?? '';
  $image = '';

  if ($slug !== '' && !empty($application_card_image_map[$slug])) {
    $image = $application_card_image_map[$slug];
  }

  if (empty($image) && !empty($application_card['image'])) {
    $image = $application_card['image'];
  }

  if (empty($image)) {
    $image = mirrorcraft_get_product_category_image_url('bathroom-mirror');
  }

  if (empty($image)) {
    $image = $hero_image;
  }

  if ($slug !== '' && !empty($application_card_copy_map[$slug])) {
    $application_card['text'] = $application_card_copy_map[$slug];
  }

  $application_card['image'] = $image;
  $application_cards_display[] = $application_card;
}

if (count($application_cards_display) < 12) {
  $application_cards_display[] = array(
    'tag'         => __('All Applications', 'mirrorcraft'),
    'title'       => __('Browse All Application Pages', 'mirrorcraft'),
    'text'        => __('See the full application library for hospitality, residential, commercial, wellness, healthcare, and project-led sourcing routes.', 'mirrorcraft'),
    'image'       => $hero_image,
    'link'        => $applications_url,
    'is_overview' => true,
  );
}

$custom_solution_cards = array(
  array(
    'index'        => '01',
    'title'        => __('Custom Sizes', 'mirrorcraft'),
    'text'         => __('Tailored dimensions to fit your space and project brief.', 'mirrorcraft'),
    'type'         => 'sizes',
    'image'        => mirrorcraft_theme_image_optimized_url('custom-solution-sizes-20260422.png'),
    'image_width'  => 1688,
    'image_height' => 932,
    'image_alt'    => __('Custom size reference for LED mirror and cabinet solutions', 'mirrorcraft'),
    'details'      => array('1200mm', '1000mm', '800mm', '600mm'),
    'note'         => __('Any size / Any project', 'mirrorcraft'),
  ),
  array(
    'index'        => '02',
    'title'        => __('Custom Edge Finishes', 'mirrorcraft'),
    'text'         => __('Multiple edge finish routes for a cleaner, more refined look.', 'mirrorcraft'),
    'type'         => 'edges',
    'image'        => mirrorcraft_theme_image_optimized_url('custom-solution-edge-finishes-20260422.png'),
    'image_width'  => 1089,
    'image_height' => 1445,
    'image_alt'    => __('Custom edge finish sample for mirror fabrication', 'mirrorcraft'),
    'details'      => array(
      array(
        'label' => __('Flat Polish', 'mirrorcraft'),
        'slug'  => 'flat',
        'lines' => array(
          __('Flat', 'mirrorcraft'),
          __('Polish', 'mirrorcraft'),
        ),
      ),
      array(
        'label' => __('Beveled Edge', 'mirrorcraft'),
        'slug'  => 'beveled',
        'lines' => array(
          __('Beveled', 'mirrorcraft'),
          __('Edge', 'mirrorcraft'),
        ),
      ),
      array(
        'label' => __('Pencil Edge', 'mirrorcraft'),
        'slug'  => 'pencil',
        'lines' => array(
          __('Pencil', 'mirrorcraft'),
          __('Edge', 'mirrorcraft'),
        ),
      ),
      array(
        'label' => __('Ogee Edge', 'mirrorcraft'),
        'slug'  => 'ogee',
        'lines' => array(
          __('Ogee', 'mirrorcraft'),
          __('Edge', 'mirrorcraft'),
        ),
      ),
      array(
        'label' => __('Diamond Edge', 'mirrorcraft'),
        'slug'  => 'diamond',
        'lines' => array(
          __('Diamond', 'mirrorcraft'),
          __('Edge', 'mirrorcraft'),
        ),
      ),
    ),
    'note'         => __('Multiple edge finishes available.', 'mirrorcraft'),
  ),
  array(
    'index'        => '03',
    'title'        => __('Custom Shapes', 'mirrorcraft'),
    'text'         => __('Shape options tailored to your market.', 'mirrorcraft'),
    'type'         => 'shapes',
    'image'        => mirrorcraft_theme_image_optimized_url('custom-solution-shapes-20260422.png'),
    'image_width'  => 1691,
    'image_height' => 930,
    'image_alt'    => __('Custom shape reference for mirror solution development', 'mirrorcraft'),
    'details'      => array(
      array(
        'label' => __('Round', 'mirrorcraft'),
        'slug'  => 'round',
      ),
      array(
        'label' => __('Oval', 'mirrorcraft'),
        'slug'  => 'oval',
      ),
      array(
        'label' => __('Arch', 'mirrorcraft'),
        'slug'  => 'arch',
      ),
      array(
        'label' => __('Rectangle', 'mirrorcraft'),
        'slug'  => 'rectangle',
      ),
      array(
        'label' => __('Square', 'mirrorcraft'),
        'slug'  => 'square',
      ),
      array(
        'label' => __('Wave', 'mirrorcraft'),
        'slug'  => 'wave',
      ),
      array(
        'label' => __('Clover', 'mirrorcraft'),
        'slug'  => 'clover',
      ),
      array(
        'label' => __('Custom', 'mirrorcraft'),
        'slug'  => 'custom',
      ),
    ),
    'note'         => __('More shapes available / custom shape on request', 'mirrorcraft'),
  ),
  array(
    'index'        => '04',
    'title'        => __('Custom Frames', 'mirrorcraft'),
    'text'         => __('A wide range of frame styles, tones, and finish directions.', 'mirrorcraft'),
    'type'         => 'frames',
    'image'        => mirrorcraft_theme_image_optimized_url('custom-solution-frames-20260422.png'),
    'image_width'  => 1536,
    'image_height' => 1024,
    'image_alt'    => __('Custom frame finish samples for mirror programs', 'mirrorcraft'),
    'details'      => array(
      array(
        'label' => __('Matte Black', 'mirrorcraft'),
        'slug'  => 'matte-black',
      ),
      array(
        'label' => __('Brushed Gold', 'mirrorcraft'),
        'slug'  => 'brushed-gold',
      ),
      array(
        'label' => __('Wood Finish', 'mirrorcraft'),
        'slug'  => 'wood-finish',
      ),
      array(
        'label' => __('Stainless', 'mirrorcraft'),
        'slug'  => 'stainless-steel',
      ),
      array(
        'label' => __('Aluminum', 'mirrorcraft'),
        'slug'  => 'aluminum-silver',
      ),
      array(
        'label' => __('White PVC', 'mirrorcraft'),
        'slug'  => 'white-pvc',
      ),
    ),
    'note'         => __('More colors and finishes available', 'mirrorcraft'),
  ),
  array(
    'index'        => '05',
    'title'        => __('Custom Features', 'mirrorcraft'),
    'text'         => __('Smart feature bundles for function, usability, and brand fit.', 'mirrorcraft'),
    'type'         => 'features',
    'image'        => mirrorcraft_theme_image_optimized_url('custom-solution-features-20260422.png'),
    'image_width'  => 1536,
    'image_height' => 1024,
    'image_alt'    => __('Custom smart feature reference for mirror solutions', 'mirrorcraft'),
    'details'      => array(
      array(
        'label' => __('LED Lighting', 'mirrorcraft'),
        'slug'  => 'lighting',
      ),
      array(
        'label' => __('Touch Switch', 'mirrorcraft'),
        'slug'  => 'touch',
      ),
      array(
        'label' => __('Anti-Fog', 'mirrorcraft'),
        'slug'  => 'anti-fog',
      ),
      array(
        'label' => __('Time Display', 'mirrorcraft'),
        'slug'  => 'time',
      ),
      array(
        'label' => __('Temp. Display', 'mirrorcraft'),
        'slug'  => 'temperature',
      ),
      array(
        'label' => __('Bluetooth', 'mirrorcraft'),
        'slug'  => 'bluetooth',
      ),
      array(
        'label' => __('Dimmable', 'mirrorcraft'),
        'slug'  => 'dimmable',
      ),
      array(
        'label' => __('Motion Sensor', 'mirrorcraft'),
        'slug'  => 'sensor',
      ),
      array(
        'label' => __('Smart Memory', 'mirrorcraft'),
        'slug'  => 'memory',
      ),
    ),
    'note'         => __('Feature combinations can be adapted by project', 'mirrorcraft'),
  ),
);

$who_we_are_main_image = mirrorcraft_theme_image_optimized_url('hospitality-led-mirror-project.png');
$who_we_are_gallery = array(
  array(
    'image'    => mirrorcraft_theme_image_optimized_url('who-we-are-workshop.png'),
    'alt'      => __('Mirror workshop production line', 'mirrorcraft'),
    'position' => '50% 50%',
  ),
  array(
    'image'    => mirrorcraft_theme_image_optimized_url('who-we-are-inspection.png'),
    'alt'      => __('Mirror quality inspection in the workshop', 'mirrorcraft'),
    'position' => '50% 24%',
  ),
  array(
    'image'    => mirrorcraft_theme_image_optimized_url('who-we-are-warehouse.png'),
    'alt'      => __('Prepared export shipments in the warehouse', 'mirrorcraft'),
    'position' => '50% 50%',
  ),
);
$who_we_are_features = array(
  array(
    'slug'  => 'draft',
    'title' => __('Custom OEM & ODM Solutions', 'mirrorcraft'),
  ),
  array(
    'slug'  => 'project',
    'title' => __('Project Supply for Hotels & Real Estate', 'mirrorcraft'),
  ),
  array(
    'slug'  => 'quality',
    'title' => __('High Quality with Stable Production', 'mirrorcraft'),
  ),
  array(
    'slug'  => 'delivery',
    'title' => __('Fast Delivery & Global Export', 'mirrorcraft'),
  ),
);
$who_we_are_stats = array(
  array(
    'slug'  => 'experience',
    'value' => __('15+', 'mirrorcraft'),
    'label' => __('Years Supply Experience', 'mirrorcraft'),
  ),
  array(
    'slug'  => 'program',
    'value' => __('OEM / ODM', 'mirrorcraft'),
    'label' => __('Custom Program Support', 'mirrorcraft'),
  ),
  array(
    'slug'  => 'global',
    'value' => __('Global', 'mirrorcraft'),
    'label' => __('Project Delivery Follow-through', 'mirrorcraft'),
  ),
  array(
    'slug'  => 'focus',
    'value' => __('B2B', 'mirrorcraft'),
    'label' => __('Mirror & Cabinet Focus', 'mirrorcraft'),
  ),
);

$custom_feature_icons = array(
  'lighting'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18h6"/><path d="M10 21h4"/><path d="M8.5 14.5A5.5 5.5 0 1 1 15.5 14.5C14.7 15.3 14.2 16.1 14 17h-4c-.2-.9-.7-1.7-1.5-2.5Z"/><path d="M12 2v2"/><path d="M4.9 4.9l1.4 1.4"/><path d="M19.1 4.9l-1.4 1.4"/></svg>',
  'touch'       => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3.5a2.5 2.5 0 1 1 0 5"/><path d="M10.2 10.5V7.7a1.3 1.3 0 1 1 2.6 0v4.2"/><path d="M12.8 10.7V9.8a1.2 1.2 0 1 1 2.4 0v2.2"/><path d="M15.2 11.1v-.5a1.1 1.1 0 1 1 2.2 0v3.2c0 3.4-2.1 6.2-5.8 6.2-2.8 0-4.8-1.8-5.8-4.5l-1-2.7a1.2 1.2 0 1 1 2.2-.9l1 2.1h.2"/><path d="M12.8 15.4V10.7"/></svg>',
  'anti-fog'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M6 5.5h12a1.5 1.5 0 0 1 1.5 1.5v8A1.5 1.5 0 0 1 18 16.5H6A1.5 1.5 0 0 1 4.5 15V7A1.5 1.5 0 0 1 6 5.5Z"/><path d="M7.5 9.5c1 .9 2 .9 3 0s2-.9 3 0 2 .9 3 0"/><path d="M7.5 13c1 .9 2 .9 3 0s2-.9 3 0 2 .9 3 0"/></svg>',
  'time'        => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="8"/><path d="M12 7.8v4.6l3 1.9"/></svg>',
  'temperature' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M10 6.5a2 2 0 1 1 4 0v6.1a4 4 0 1 1-4 0Z"/><path d="M12 10v5"/><path d="M12 18.8h.01"/></svg>',
  'bluetooth'   => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M8 7.5 15.5 3v18L8 16.5"/><path d="m8 12 7.5-4.5"/><path d="M8 12 15.5 16.5"/></svg>',
  'dimmable'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 4.2v2.1"/><path d="M6.4 6.4 7.9 7.9"/><path d="M4.2 12h2.1"/><path d="M17.6 6.4 16.1 7.9"/><path d="M12 19.8v-2.1"/><path d="M19.8 12h-2.1"/><path d="M8 15.4a4.2 4.2 0 1 0 8 0A4 4 0 0 0 12 8a4.6 4.6 0 0 0-4 7.4Z"/></svg>',
  'sensor'      => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 12m-1.1 0a1.1 1.1 0 1 0 2.2 0 1.1 1.1 0 1 0-2.2 0"/><path d="M7.4 7.4a6.5 6.5 0 0 0 0 9.2"/><path d="M16.6 7.4a6.5 6.5 0 0 1 0 9.2"/><path d="M4.8 4.8a10.2 10.2 0 0 0 0 14.4"/><path d="M19.2 4.8a10.2 10.2 0 0 1 0 14.4"/></svg>',
  'memory'      => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M19 10.5a7 7 0 1 0 1.5 4.4"/><path d="M19 5.5v5h-5"/><path d="M10 9.2h4"/><path d="M10 12h4"/><path d="M10 14.8h2.5"/></svg>',
);

$testimonials = array(
  array(
    'quote'   => __('The mirror quality is excellent, with consistent lighting and premium finishing. It meets the standards required for our retail distribution.', 'mirrorcraft'),
    'name'    => __('Liam Brown', 'mirrorcraft'),
    'country' => __('United States', 'mirrorcraft'),
    'country_code' => __('United States', 'mirrorcraft'),
    'role'    => __('Distributor', 'mirrorcraft'),
    'product' => __('LED Bathroom Mirrors', 'mirrorcraft'),
    'badge'   => 'LB',
  ),
  array(
    'quote'   => __('Packaging is very secure and well-designed for international shipping. We received all units in perfect condition.', 'mirrorcraft'),
    'name'    => __('Fiona Mitchell', 'mirrorcraft'),
    'country' => __('United Kingdom', 'mirrorcraft'),
    'country_code' => __('United Kingdom', 'mirrorcraft'),
    'role'    => __('Importer', 'mirrorcraft'),
    'product' => __('Framed Mirrors', 'mirrorcraft'),
    'badge'   => 'FM',
  ),
  array(
    'quote'   => __('Their team handled our hotel project professionally, from drawings to mass production. Delivery was on time and well organized.', 'mirrorcraft'),
    'name'    => __('Hassan Mahmoud', 'mirrorcraft'),
    'country' => __('United Arab Emirates', 'mirrorcraft'),
    'country_code' => __('United Arab Emirates', 'mirrorcraft'),
    'role'    => __('Project Contractor', 'mirrorcraft'),
    'product' => __('Hospitality Mirrors', 'mirrorcraft'),
    'badge'   => 'HM',
  ),
  array(
    'quote'   => __('Communication was fast and clear throughout the entire process. It made sourcing much easier for our team.', 'mirrorcraft'),
    'name'    => __('Mason Carter', 'mirrorcraft'),
    'country' => __('Canada', 'mirrorcraft'),
    'country_code' => __('Canada', 'mirrorcraft'),
    'role'    => __('Procurement Manager', 'mirrorcraft'),
    'product' => __('Mirror Cabinets', 'mirrorcraft'),
    'badge'   => 'MC',
  ),
  array(
    'quote'   => __('Very flexible on customization - shapes, sizes, frames, and lighting functions. A strong OEM partner.', 'mirrorcraft'),
    'name'    => __('Chloe Lawson', 'mirrorcraft'),
    'country' => __('Australia', 'mirrorcraft'),
    'country_code' => __('Australia', 'mirrorcraft'),
    'role'    => __('Brand Owner', 'mirrorcraft'),
    'product' => __('Custom LED Mirrors', 'mirrorcraft'),
    'badge'   => 'CL',
  ),
  array(
    'quote'   => __('The lighting performance is impressive, especially the CRI and brightness consistency. Ideal for makeup and bathroom use.', 'mirrorcraft'),
    'name'    => __('Victoria Meyer', 'mirrorcraft'),
    'country' => __('Germany', 'mirrorcraft'),
    'country_code' => __('Germany', 'mirrorcraft'),
    'role'    => __('Retail Buyer', 'mirrorcraft'),
    'product' => __('Vanity Mirrors', 'mirrorcraft'),
    'badge'   => 'VM',
  ),
  array(
    'quote'   => __('Production lead time was reliable, and the schedule was strictly followed. This is very important for our project timelines.', 'mirrorcraft'),
    'name'    => __('Ryan Edwards', 'mirrorcraft'),
    'country' => __('Singapore', 'mirrorcraft'),
    'country_code' => __('Singapore', 'mirrorcraft'),
    'role'    => __('Developer', 'mirrorcraft'),
    'product' => __('Real Estate Projects', 'mirrorcraft'),
    'badge'   => 'RE',
  ),
  array(
    'quote'   => __('They are responsive and responsible. Any questions or small issues were handled quickly and professionally.', 'mirrorcraft'),
    'name'    => __('Bruno Martin', 'mirrorcraft'),
    'country' => __('France', 'mirrorcraft'),
    'country_code' => __('France', 'mirrorcraft'),
    'role'    => __('Wholesaler', 'mirrorcraft'),
    'product' => __('Bathroom Mirrors', 'mirrorcraft'),
    'badge'   => 'BM',
  ),
  array(
    'quote'   => __('We have been working together for multiple orders. Consistent quality and dependable service make them a trusted partner.', 'mirrorcraft'),
    'name'    => __('Olivia Davis', 'mirrorcraft'),
    'country' => __('United States', 'mirrorcraft'),
    'country_code' => __('United States', 'mirrorcraft'),
    'role'    => __('Distributor', 'mirrorcraft'),
    'product' => __('OEM / ODM Mirrors', 'mirrorcraft'),
    'badge'   => 'OD',
  ),
);

$resource_cards = array(
  array(
    'eyebrow' => __('Product Routes', 'mirrorcraft'),
    'title' => __('Browse all product categories', 'mirrorcraft'),
    'text'  => __('Review OJMIRROR product routes for LED bathroom mirrors, lighted medicine cabinets, framed LED mirrors, vanity mirrors, and custom development.', 'mirrorcraft'),
    'url'   => $products_url,
  ),
  array(
    'eyebrow' => __('Buyer Support', 'mirrorcraft'),
    'title' => __('Read buyer FAQ', 'mirrorcraft'),
    'text'  => __('Use the FAQ page to answer common questions about customization, samples, certification support, and quote preparation.', 'mirrorcraft'),
    'url'   => $faq_url,
  ),
  array(
    'eyebrow' => __('Catalog Help', 'mirrorcraft'),
    'title' => __('Request catalog support', 'mirrorcraft'),
    'text'  => __('If you need a targeted product pack or a quicker shortlist, send the application and feature direction through the inquiry form.', 'mirrorcraft'),
    'url'   => $contact_url,
  ),
  array(
    'eyebrow' => __('Market Paths', 'mirrorcraft'),
    'title' => __('Browse application routes', 'mirrorcraft'),
    'text'  => __('Review hospitality, residential, healthcare, retail, fitness, and other market paths before locking the product brief.', 'mirrorcraft'),
    'url'   => $applications_url,
  ),
  array(
    'eyebrow' => __('Factory Process', 'mirrorcraft'),
    'title' => __('Review manufacturing & QC', 'mirrorcraft'),
    'text'  => __('See how sample review, bulk production, and inspection checkpoints are organized before shipment.', 'mirrorcraft'),
    'url'   => $manufacturing_url,
  ),
  array(
    'eyebrow' => __('Quote Preparation', 'mirrorcraft'),
    'title' => __('Start a custom inquiry', 'mirrorcraft'),
    'text'  => __('Send your product route, application, quantity target, and drawings to move faster into quote preparation.', 'mirrorcraft'),
    'url'   => $contact_url,
  ),
);
?>
<main id="site-main" class="site-main home-minimal" tabindex="-1">
  <section class="oj-hero oj-hero--immersive oj-section">
    <div class="shell oj-wrap">
      <div class="oj-hero__shell">
        <?php if ($hero_image) : ?>
          <picture class="oj-hero__backdrop">
            <?php if ($hero_image_mobile && $hero_image_mobile !== $hero_image) : ?>
              <source media="(max-width: 1100px)" srcset="<?php echo esc_url($hero_image_mobile); ?>">
            <?php endif; ?>
            <img
              src="<?php echo esc_url($hero_image); ?>"
              <?php echo $hero_image_srcset !== '' ? 'srcset="' . esc_attr($hero_image_srcset) . '" sizes="100vw"' : ''; ?>
              alt="<?php echo esc_attr($hero_image_alt); ?>"
              width="1440"
              height="1024"
              loading="eager"
              fetchpriority="high"
              decoding="async"
            >
          </picture>
        <?php endif; ?>
        <div class="oj-hero__content">
          <p class="oj-eyebrow"><?php esc_html_e('LED mirror manufacturer in China', 'mirrorcraft'); ?></p>
          <h1>
            <span class="oj-hero__headline-line"><?php esc_html_e('Wholesale LED', 'mirrorcraft'); ?></span>
            <span class="oj-hero__headline-line"><?php esc_html_e('Bathroom', 'mirrorcraft'); ?></span>
            <span class="oj-hero__headline-line oj-hero__headline-line--compact"><?php esc_html_e('Mirrors & Cabinets', 'mirrorcraft'); ?></span>
          </h1>
          <p class="oj-lead"><?php esc_html_e('OJMIRROR supports distributors, hospitality buyers, residential developers, and private-label programs with reliable LED mirror and cabinet manufacturing from China.', 'mirrorcraft'); ?></p>
          <div class="oj-actions">
            <a class="oj-button oj-button--primary" href="<?php echo esc_url($contact_url); ?>"><?php esc_html_e('Request a Quote', 'mirrorcraft'); ?></a>
            <a class="oj-button oj-button--ghost" href="<?php echo esc_url($products_url); ?>"><?php esc_html_e('Browse Products', 'mirrorcraft'); ?></a>
          </div>
          <ul class="oj-proofline" aria-label="<?php esc_attr_e('Key capabilities', 'mirrorcraft'); ?>">
            <li><?php esc_html_e('15+ Years Supply Experience', 'mirrorcraft'); ?></li>
            <li><?php esc_html_e('OEM / ODM Support', 'mirrorcraft'); ?></li>
            <li><?php esc_html_e('Global Project Delivery', 'mirrorcraft'); ?></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="oj-section oj-product-categories" id="products">
    <div class="shell oj-wrap">
      <div class="oj-section-heading oj-section-heading--products">
        <h2><?php esc_html_e('Product Categories', 'mirrorcraft'); ?></h2>
        <p class="oj-section-copy"><?php esc_html_e('Browse our LED bathroom mirrors, mirror cabinets, makeup mirrors, full-length mirrors, and custom mirrors. Designed for hotels, residential, commercial, and healthcare projects.', 'mirrorcraft'); ?></p>
      </div>
      <div class="card-grid card-grid-three oj-product-categories__grid">
        <?php foreach ($product_routes as $route) : ?>
          <?php
          $route_slug = !empty($route['slug']) ? ' product-card--' . sanitize_html_class($route['slug']) : '';
          $route_media_styles = array();
          $route_image_data = array(
            'src'    => $route['image'] ?? '',
            'srcset' => '',
            'sizes'  => '',
            'width'  => 1200,
            'height' => 1200,
          );
          $route_image_key = !empty($route['slug']) ? ($product_route_image_keys[$route['slug']] ?? '') : '';

          if (!empty($route['media_fit'])) {
            $route_media_styles[] = '--oj-product-media-fit:' . $route['media_fit'];
          }

          if (!empty($route['media_position'])) {
            $route_media_styles[] = '--oj-product-media-position:' . $route['media_position'];
          }

          if (!empty($route['media_background'])) {
            $route_media_styles[] = '--oj-product-media-bg:' . $route['media_background'];
          }

          if (!empty($route['hover_scale'])) {
            $route_media_styles[] = '--oj-product-media-hover-scale:' . $route['hover_scale'];
          }

          if ($route_image_key !== '' && function_exists('mirrorcraft_get_product_category_image_data')) {
            $candidate_image_data = mirrorcraft_get_product_category_image_data(
              $route_image_key,
              '(max-width: 720px) calc(100vw - 44px), (max-width: 1100px) calc((100vw - 88px) / 2), 380px'
            );

            if (!empty($candidate_image_data['src'])) {
              $route_image_data = $candidate_image_data;
            }
          }
          ?>
          <article class="feature-card product-card<?php echo esc_attr($route_slug); ?>">
            <div class="feature-card-media"<?php echo !empty($route_media_styles) ? ' style="' . esc_attr(implode(';', $route_media_styles)) . '"' : ''; ?>>
              <img
                src="<?php echo esc_url($route_image_data['src']); ?>"
                <?php echo !empty($route_image_data['srcset']) ? 'srcset="' . esc_attr($route_image_data['srcset']) . '" sizes="' . esc_attr($route_image_data['sizes']) . '"' : ''; ?>
                alt="<?php echo esc_attr($route['title']); ?>"
                width="<?php echo esc_attr((string) $route_image_data['width']); ?>"
                height="<?php echo esc_attr((string) $route_image_data['height']); ?>"
                loading="lazy"
                decoding="async"
              >
            </div>
            <div class="feature-card-body">
              <p class="feature-tag"><?php echo esc_html($route['tag']); ?></p>
              <h3><?php echo esc_html($route['title']); ?></h3>
              <p><?php echo esc_html($route['text']); ?></p>
              <a class="text-link" href="<?php echo esc_url($route['link']); ?>"><?php esc_html_e('View more product', 'mirrorcraft'); ?></a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
      <div class="oj-product-categories__actions">
        <a class="oj-button oj-button--primary" href="<?php echo esc_url($products_url); ?>"><?php esc_html_e('Browse All Products', 'mirrorcraft'); ?></a>
      </div>
    </div>
  </section>

  <section class="oj-section section-alt oj-section--deferred" id="smart-mirrors">
    <div class="shell oj-wrap">
      <div class="oj-custom-solutions__heading">
        <h2 class="oj-custom-solutions__title">
          <span class="oj-custom-solutions__accent"><?php esc_html_e('Custom', 'mirrorcraft'); ?></span>
          <span><?php esc_html_e('Mirror Solutions', 'mirrorcraft'); ?></span>
        </h2>
        <p class="oj-custom-solutions__subhead">
          <span aria-hidden="true"></span>
          <span><?php esc_html_e('One-stop customization for your projects & brands', 'mirrorcraft'); ?></span>
          <span aria-hidden="true"></span>
        </p>
      </div>
      <div class="oj-custom-solutions__grid">
        <?php foreach ($custom_solution_cards as $card) : ?>
          <article class="oj-custom-card oj-custom-card--<?php echo esc_attr($card['type']); ?>">
            <div class="oj-custom-card__header">
              <p class="oj-custom-card__index"><?php echo esc_html($card['index']); ?></p>
              <h3><?php echo esc_html($card['title']); ?></h3>
              <p><?php echo esc_html($card['text']); ?></p>
            </div>

            <div class="oj-custom-card__visual oj-custom-card__visual--<?php echo esc_attr($card['type']); ?>">
              <img
                class="oj-custom-card__photo"
                src="<?php echo esc_url($card['image']); ?>"
                alt="<?php echo esc_attr($card['image_alt']); ?>"
                loading="lazy"
                decoding="async"
                fetchpriority="low"
                width="<?php echo esc_attr((string) $card['image_width']); ?>"
                height="<?php echo esc_attr((string) $card['image_height']); ?>"
              >
            </div>

            <div class="oj-custom-card__meta oj-custom-card__meta--<?php echo esc_attr($card['type']); ?>">
              <?php if ('sizes' === $card['type']) : ?>
                <div class="oj-size-diagram" aria-hidden="true">
                  <span class="oj-size-diagram__box oj-size-diagram__box--one"></span>
                  <span class="oj-size-diagram__box oj-size-diagram__box--two"></span>
                  <span class="oj-size-diagram__box oj-size-diagram__box--three"></span>
                  <span class="oj-size-diagram__box oj-size-diagram__box--four"></span>
                </div>
                <ul class="oj-size-list">
                  <?php foreach ($card['details'] as $detail) : ?>
                    <li><?php echo esc_html($detail); ?></li>
                  <?php endforeach; ?>
                </ul>
              <?php elseif ('edges' === $card['type']) : ?>
                <div class="oj-edge-list">
                  <?php foreach ($card['details'] as $detail) : ?>
                    <div class="oj-edge-list__item">
                      <span class="oj-edge-list__sample oj-edge-list__sample--<?php echo esc_attr($detail['slug']); ?>" aria-hidden="true"></span>
                      <span class="oj-edge-list__label">
                        <?php if (!empty($detail['lines']) && is_array($detail['lines'])) : ?>
                          <?php foreach ($detail['lines'] as $line) : ?>
                            <span class="oj-edge-list__label-line"><?php echo esc_html($line); ?></span>
                          <?php endforeach; ?>
                        <?php else : ?>
                          <span class="oj-edge-list__label-line"><?php echo esc_html($detail['label']); ?></span>
                        <?php endif; ?>
                      </span>
                    </div>
                  <?php endforeach; ?>
                </div>
              <?php elseif ('shapes' === $card['type']) : ?>
                <div class="oj-shape-list">
                  <?php foreach ($card['details'] as $detail) : ?>
                    <div class="oj-shape-list__item">
                      <span class="oj-shape-list__icon oj-shape-list__icon--<?php echo esc_attr($detail['slug']); ?>" aria-hidden="true"></span>
                      <span><?php echo esc_html($detail['label']); ?></span>
                    </div>
                  <?php endforeach; ?>
                </div>
              <?php elseif ('frames' === $card['type']) : ?>
                <div class="oj-frame-list">
                  <?php foreach ($card['details'] as $detail) : ?>
                    <div class="oj-frame-list__item">
                      <span class="oj-frame-list__sample oj-frame-list__sample--<?php echo esc_attr($detail['slug']); ?>" aria-hidden="true"></span>
                      <span><?php echo esc_html($detail['label']); ?></span>
                    </div>
                  <?php endforeach; ?>
                </div>
              <?php elseif ('features' === $card['type']) : ?>
                <div class="oj-feature-list">
                  <?php foreach ($card['details'] as $detail) : ?>
                    <div class="oj-feature-list__item">
                      <span class="oj-feature-list__icon oj-feature-list__icon--<?php echo esc_attr($detail['slug']); ?>" aria-hidden="true">
                        <?php
                        if (!empty($custom_feature_icons[$detail['slug']])) {
                          // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Static inline SVG icon markup controlled by the theme.
                          echo $custom_feature_icons[$detail['slug']];
                        }
                        ?>
                      </span>
                      <span><?php echo esc_html($detail['label']); ?></span>
                    </div>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
            </div>

            <p class="oj-custom-card__note"><?php echo esc_html($card['note']); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
      <div class="oj-custom-solutions__actions">
        <a class="oj-button oj-button--primary" href="<?php echo esc_url($contact_url); ?>">
          <?php esc_html_e('Start Custom Inquiry', 'mirrorcraft'); ?>
        </a>
      </div>
    </div>
  </section>

  <section class="oj-section oj-section--deferred" id="customization">
    <div class="shell oj-wrap">
      <div class="oj-about-showcase">
        <div class="oj-about-showcase__intro">
          <p class="oj-section-label"><?php esc_html_e('Customized LED Mirrors & Cabinets', 'mirrorcraft'); ?></p>
          <h2 class="oj-about-showcase__title">
            <span><?php esc_html_e('Who', 'mirrorcraft'); ?></span>
            <span class="oj-about-showcase__title-accent"><?php esc_html_e('We Are', 'mirrorcraft'); ?></span>
          </h2>
          <p class="oj-about-showcase__subtitle"><?php esc_html_e('Your trusted LED mirror manufacturing partner', 'mirrorcraft'); ?></p>
          <p class="oj-about-showcase__text"><?php esc_html_e('OJMIRROR is a professional LED mirror manufacturer in China, supporting hospitality, commercial, residential, and private-label programs with custom mirror and cabinet solutions.', 'mirrorcraft'); ?></p>
          <p class="oj-about-showcase__text"><?php esc_html_e('From OEM / ODM development and sample review to manufacturing, packaging, and export follow-through, we help buyers move from concept to delivery with a clearer, more practical route.', 'mirrorcraft'); ?></p>
          <div class="oj-about-showcase__actions">
            <a class="oj-button oj-button--primary" href="<?php echo esc_url($about_url); ?>"><?php esc_html_e('About OJMIRROR', 'mirrorcraft'); ?></a>
          </div>

          <div class="oj-about-showcase__features">
            <?php foreach ($who_we_are_features as $feature) : ?>
              <article class="oj-about-showcase__feature oj-about-showcase__feature--<?php echo esc_attr($feature['slug']); ?>">
                <span class="oj-about-showcase__feature-icon" aria-hidden="true">
                  <?php if ('draft' === $feature['slug']) : ?>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                      <path d="m4 20 5.5-1.4L19 9.1 14.9 5 5.4 14.5 4 20Z"/>
                      <path d="m12.6 7.3 4.1 4.1"/>
                      <path d="M3 21h18"/>
                    </svg>
                  <?php elseif ('project' === $feature['slug']) : ?>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M4 20V9l5-3 4 3V4l7 4v12"/>
                      <path d="M9 20v-5h4v5"/>
                      <path d="M14 9h2"/>
                      <path d="M14 12h2"/>
                    </svg>
                  <?php elseif ('quality' === $feature['slug']) : ?>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M12 3 5.5 5.7v5.2c0 4.2 2.5 7.9 6.5 10.1 4-2.2 6.5-5.9 6.5-10.1V5.7L12 3Z"/>
                      <path d="m9.4 12.3 1.8 1.8 3.8-4.1"/>
                    </svg>
                  <?php elseif ('delivery' === $feature['slug']) : ?>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M3 7h11v9H3z"/>
                      <path d="M14 10h3l3 3v3h-6"/>
                      <circle cx="7" cy="18" r="1.7"/>
                      <circle cx="17" cy="18" r="1.7"/>
                    </svg>
                  <?php endif; ?>
                </span>
                <h3><?php echo esc_html($feature['title']); ?></h3>
              </article>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="oj-about-showcase__media">
          <figure class="oj-about-showcase__media-main">
            <img src="<?php echo esc_url($who_we_are_main_image); ?>" alt="<?php esc_attr_e('Large LED bathroom mirror project by OJMIRROR', 'mirrorcraft'); ?>" loading="lazy" decoding="async" fetchpriority="low" width="1536" height="1024">
          </figure>
          <div class="oj-about-showcase__gallery">
            <?php foreach ($who_we_are_gallery as $gallery_item) : ?>
              <figure class="oj-about-showcase__gallery-item" style="--oj-about-gallery-position: <?php echo esc_attr($gallery_item['position']); ?>;">
                <img src="<?php echo esc_url($gallery_item['image']); ?>" alt="<?php echo esc_attr($gallery_item['alt']); ?>" loading="lazy" decoding="async" fetchpriority="low">
              </figure>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="oj-about-showcase__stats">
          <?php foreach ($who_we_are_stats as $stat) : ?>
            <article class="oj-about-showcase__stat oj-about-showcase__stat--<?php echo esc_attr($stat['slug']); ?>">
              <span class="oj-about-showcase__stat-icon" aria-hidden="true">
                <?php if ('experience' === $stat['slug']) : ?>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 20h16"/>
                    <path d="M6 20V8h12v12"/>
                    <path d="M9 8V5h6v3"/>
                    <path d="M9 12h.01"/>
                    <path d="M12 12h.01"/>
                    <path d="M15 12h.01"/>
                  </svg>
                <?php elseif ('program' === $stat['slug']) : ?>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="8"/>
                    <path d="M4.5 12h15"/>
                    <path d="M12 4a12 12 0 0 1 0 16"/>
                    <path d="M12 4a12 12 0 0 0 0 16"/>
                  </svg>
                <?php elseif ('global' === $stat['slug']) : ?>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 19h16"/>
                    <path d="M7 16V9"/>
                    <path d="M12 16V5"/>
                    <path d="M17 16v-4"/>
                  </svg>
                <?php elseif ('focus' === $stat['slug']) : ?>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M16 20v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2"/>
                    <circle cx="9.5" cy="8" r="3"/>
                    <path d="M20 20v-2a4 4 0 0 0-3-3.9"/>
                    <path d="M14.5 5.2a3 3 0 0 1 0 5.6"/>
                  </svg>
                <?php endif; ?>
              </span>
              <strong><?php echo esc_html($stat['value']); ?></strong>
              <span><?php echo esc_html($stat['label']); ?></span>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <section class="oj-section section-alt oj-section--deferred" id="applications">
    <div class="shell oj-wrap">
      <div class="oj-section-heading oj-section-heading--applications">
        <h2><?php esc_html_e('LED Mirror Solutions for Every Industry', 'mirrorcraft'); ?></h2>
        <p class="oj-section-copy"><?php esc_html_e('From hotels to large-scale developments, we deliver custom LED mirror solutions engineered for durability, performance, and design.', 'mirrorcraft'); ?></p>
      </div>
      <div class="oj-application-cards">
        <?php foreach ($application_cards_display as $application) : ?>
          <article class="oj-application-card<?php echo !empty($application['is_overview']) ? ' oj-application-card--overview' : ''; ?>">
            <div class="oj-application-card-media">
              <img src="<?php echo esc_url($application['image']); ?>" alt="<?php echo esc_attr($application['tag']); ?>" width="1400" height="1200" loading="lazy" decoding="async" fetchpriority="low">
            </div>
            <div class="oj-application-card-body">
              <h3><?php echo esc_html($application['tag']); ?></h3>
              <p><?php echo esc_html($application['text']); ?></p>
              <a class="oj-button oj-button--primary" href="<?php echo esc_url($application['link']); ?>"><?php esc_html_e('View market', 'mirrorcraft'); ?></a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="oj-section section-alt oj-section--deferred" id="testimonials">
    <div class="shell oj-wrap">
      <div class="oj-section-heading oj-section-heading--testimonials">
        <p class="oj-section-label"><?php esc_html_e('Testimonials', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('What Our Clients Are Saying About Us', 'mirrorcraft'); ?></h2>
        <p class="oj-section-copy"><?php esc_html_e('Trusted by global importers, contractors, and distributors for quality, reliability, and customization.', 'mirrorcraft'); ?></p>
      </div>
      <div class="oj-testimonials-grid">
        <?php foreach ($testimonials as $index => $item) : ?>
          <article class="oj-testimonial-card">
            <div class="oj-testimonial-card__head">
              <span class="oj-testimonial-card__quote-mark" aria-hidden="true">&ldquo;</span>
              <span class="oj-testimonial-card__stars" role="img" aria-label="<?php esc_attr_e('5 out of 5 stars', 'mirrorcraft'); ?>">
                <span aria-hidden="true">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
              </span>
              <span class="oj-testimonial-card__index"><?php echo esc_html(sprintf('%02d', $index + 1)); ?></span>
            </div>

            <p class="oj-testimonial-card__quote"><?php echo esc_html($item['quote']); ?></p>

            <div class="oj-testimonial-card__footer">
              <span class="oj-testimonial-card__badge"><?php echo esc_html($item['badge']); ?></span>

              <div class="oj-testimonial-card__meta">
                <p class="oj-testimonial-card__buyer"><?php echo esc_html($item['name']); ?>, <?php echo esc_html($item['country']); ?></p>
                <p class="oj-testimonial-card__detail">
                  <?php echo esc_html($item['role']); ?>
                  <?php if (!empty($item['product'])) : ?>
                    <?php echo esc_html(' · ' . $item['product']); ?>
                  <?php endif; ?>
                </p>
              </div>

              <span class="oj-testimonial-card__country"><?php echo esc_html($item['country_code']); ?></span>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="oj-section oj-section--deferred" id="resources">
    <div class="shell oj-wrap">
      <div class="oj-section-heading oj-section-heading--resources">
        <p class="oj-section-label"><?php esc_html_e('Mirror Knowledge', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('Knowledge & Resources', 'mirrorcraft'); ?></h2>
        <p class="oj-section-copy"><?php esc_html_e('Mirrors involve more than appearance—they require understanding materials, coatings, edge finishing, and lighting. Key factors like reflectivity, durability, and safety ensure the right fit for each application. With the right expertise, buyers achieve optimal performance, aesthetics, and long-term value.', 'mirrorcraft'); ?></p>
      </div>

      <div class="oj-resources-grid">
        <?php foreach ($resource_cards as $resource) : ?>
          <article class="oj-resource-card">
            <p class="oj-resource-card__eyebrow"><?php echo esc_html($resource['eyebrow']); ?></p>
            <h3><?php echo esc_html($resource['title']); ?></h3>
            <p><?php echo esc_html($resource['text']); ?></p>
            <a class="oj-button oj-button--ghost oj-resource-card__button" href="<?php echo esc_url($resource['url']); ?>"><?php esc_html_e('Open resource', 'mirrorcraft'); ?></a>
          </article>
        <?php endforeach; ?>
      </div>

      <div class="oj-inline-links oj-inline-links--resources">
        <a class="oj-button oj-button--primary" href="<?php echo esc_url($resources_url); ?>"><?php esc_html_e('Visit the resource center', 'mirrorcraft'); ?></a>
        <a class="oj-button oj-button--ghost" href="<?php echo esc_url($faq_url); ?>"><?php esc_html_e('Read buyer FAQ', 'mirrorcraft'); ?></a>
      </div>
    </div>
  </section>

  <section class="oj-cta oj-cta--contact oj-section oj-section--deferred" id="contact">
    <div class="shell oj-wrap">
      <div class="oj-cta-contact">
        <div class="oj-cta-contact__intro">
          <p class="oj-eyebrow"><?php esc_html_e('Contact Us', 'mirrorcraft'); ?></p>
          <h2 class="oj-cta-contact__title"><?php esc_html_e('Get in Touch with Us', 'mirrorcraft'); ?></h2>
          <p class="oj-cta-contact__copy"><?php esc_html_e('Use the inquiry page to share category, application, quantity, destination market, and custom requirements so the next quotation step starts with a workable brief.', 'mirrorcraft'); ?></p>
        </div>
        <div class="oj-cta-contact__body">
          <div class="oj-cta-form-panel oj-cta-contact__panel">
            <?php mirrorcraft_render_contact_form('home-cta'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
