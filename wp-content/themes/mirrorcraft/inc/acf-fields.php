<?php

function mirrorcraft_acf_text_field($key, $label, $instructions = '', $type = 'text', $scope = '') {
  $field_scope = $scope ? $scope : $key;

  return array(
    'key'           => 'field_' . sanitize_key($field_scope . '_' . $key),
    'label'         => $label,
    'name'          => $key,
    'type'          => $type,
    'instructions'  => $instructions,
    'required'      => 0,
    'wrapper'       => array('width' => ''),
    'default_value' => '',
  );
}

function mirrorcraft_acf_image_field($key, $label, $instructions = '', $scope = '') {
  $field_scope = $scope ? $scope : $key;

  return array(
    'key'           => 'field_' . sanitize_key($field_scope . '_' . $key),
    'label'         => $label,
    'name'          => $key,
    'type'          => 'image',
    'instructions'  => $instructions,
    'required'      => 0,
    'wrapper'       => array('width' => ''),
    'return_format' => 'array',
    'preview_size'  => 'medium',
    'library'       => 'all',
  );
}

function mirrorcraft_acf_file_field($key, $label, $instructions = '', $scope = '') {
  $field_scope = $scope ? $scope : $key;

  return array(
    'key'           => 'field_' . sanitize_key($field_scope . '_' . $key),
    'label'         => $label,
    'name'          => $key,
    'type'          => 'file',
    'instructions'  => $instructions,
    'required'      => 0,
    'wrapper'       => array('width' => ''),
    'return_format' => 'array',
    'library'       => 'all',
  );
}

function mirrorcraft_acf_repeater($key, $label, $sub_fields, $button_label = 'Add Row') {
  return array(
    'key'          => 'field_' . $key,
    'label'        => $label,
    'name'         => $key,
    'type'         => 'repeater',
    'layout'       => 'block',
    'button_label' => $button_label,
    'sub_fields'   => $sub_fields,
  );
}

function mirrorcraft_register_acf_notice() {
  if (!function_exists('acf_add_local_field_group')) {
    return;
  }

  if (function_exists('acf_add_options_page')) {
    acf_add_options_page(
      array(
        'page_title' => __('Site Settings', 'mirrorcraft'),
        'menu_title' => __('Site Settings', 'mirrorcraft'),
        'menu_slug'  => 'mirrorcraft-site-settings',
        'capability' => 'edit_posts',
        'redirect'   => false,
      )
    );
  }

  acf_add_local_field_group(
    array(
      'key'                   => 'group_mirrorcraft_homepage',
      'title'                 => __('Homepage Content', 'mirrorcraft'),
      'fields'                => array(
        mirrorcraft_acf_text_field('hero_eyebrow', 'Hero Eyebrow'),
        mirrorcraft_acf_text_field('hero_title', 'Hero Title'),
        mirrorcraft_acf_text_field('hero_text', 'Hero Text', '', 'textarea'),
        mirrorcraft_acf_image_field('hero_background_image', 'Hero Background Image', 'Optional. Upload a large hero background image.'),
        mirrorcraft_acf_image_field('hero_makeup_image', 'Hero Makeup / Lifestyle Image', 'Optional. Upload the hero lifestyle image shown on the homepage.'),
        mirrorcraft_acf_text_field('hero_primary_button_text', 'Hero Primary Button Text'),
        mirrorcraft_acf_text_field('hero_primary_button_link', 'Hero Primary Button Link', '', 'url'),
        mirrorcraft_acf_text_field('hero_secondary_button_text', 'Hero Secondary Button Text'),
        mirrorcraft_acf_text_field('hero_secondary_button_link', 'Hero Secondary Button Link', '', 'url'),
        mirrorcraft_acf_image_field('featured_bathroom_mirror_image', 'Featured Bathroom Mirror Image', 'Homepage and products page category image.'),
        mirrorcraft_acf_image_field('featured_medicine_cabinet_image', 'Featured Medicine Cabinet Image', 'Homepage and products page category image.'),
        mirrorcraft_acf_image_field('featured_makeup_mirror_image', 'Featured Makeup Mirror Image', 'Homepage and products page category image.'),
        mirrorcraft_acf_image_field('featured_custom_led_mirror_image', 'Featured Custom Mirror Image', 'Homepage and products page category image for custom mirror programs.'),
        mirrorcraft_acf_text_field('why_choose_us_title', 'Why Choose Us Title'),
        mirrorcraft_acf_text_field('why_choose_us_text', 'Why Choose Us Text', '', 'textarea'),
        mirrorcraft_acf_repeater(
          'why_choose_us_items',
          'Why Choose Us Items',
          array(
            mirrorcraft_acf_text_field('item_title', 'Item Title', '', 'text', 'why_choose_us_item_title'),
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'textarea', 'why_choose_us_item_text'),
          ),
          'Add Advantage'
        ),
        mirrorcraft_acf_text_field('product_range_eyebrow', 'Product Range Eyebrow'),
        mirrorcraft_acf_text_field('product_range_title', 'Product Range Title'),
        mirrorcraft_acf_text_field('product_range_intro', 'Product Range Intro', '', 'textarea'),
        mirrorcraft_acf_text_field('product_range_button_text', 'Product Range Button Text'),
        mirrorcraft_acf_repeater(
          'product_categories',
          'Product Categories',
          array(
            mirrorcraft_acf_text_field('category_name', 'Category Name', '', 'text', 'product_category_name'),
            mirrorcraft_acf_text_field('category_text', 'Category Text', '', 'textarea', 'product_category_text'),
            mirrorcraft_acf_text_field('category_link', 'Category Link', '', 'url', 'product_category_link'),
          ),
          'Add Category'
        ),
        mirrorcraft_acf_text_field('customization_eyebrow', 'Customization Eyebrow'),
        mirrorcraft_acf_text_field('customization_title', 'Customization Title'),
        mirrorcraft_acf_text_field('customization_text', 'Customization Text', '', 'textarea'),
        mirrorcraft_acf_text_field('customization_appearance_kicker', 'Customization Appearance Kicker'),
        mirrorcraft_acf_text_field('customization_appearance_title', 'Customization Appearance Title'),
        mirrorcraft_acf_image_field('customization_shapes_image', 'Customization Shapes Image', 'Optional. Upload the mirror shape or style image used in the top-right showcase card.'),
        mirrorcraft_acf_image_field('customization_controls_image', 'Customization Controls Image', 'Optional. Upload the touch control or feature image used in the lower-left showcase card.'),
        mirrorcraft_acf_repeater(
          'customization_items',
          'Customization Items',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'customization_item_text'),
          ),
          'Add Customization Item'
        ),
        mirrorcraft_acf_text_field('customization_function_kicker', 'Customization Function Kicker'),
        mirrorcraft_acf_text_field('customization_function_title', 'Customization Function Title'),
        mirrorcraft_acf_repeater(
          'customization_function_items',
          'Customization Function Items',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'customization_function_item_text'),
          ),
          'Add Function Item'
        ),
        mirrorcraft_acf_text_field('applications_eyebrow', 'Applications Eyebrow'),
        mirrorcraft_acf_text_field('applications_title', 'Applications Title'),
        mirrorcraft_acf_text_field('applications_text', 'Applications Text', '', 'textarea'),
        mirrorcraft_acf_text_field('applications_button_text', 'Applications Button Text'),
        mirrorcraft_acf_text_field('applications_button_link', 'Applications Button Link', '', 'url'),
        mirrorcraft_acf_repeater(
          'applications_items',
          'Applications Items',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'applications_item_text'),
          ),
          'Add Application'
        ),
        mirrorcraft_acf_repeater(
          'applications_cards',
          'Applications Cards',
          array(
            mirrorcraft_acf_text_field('item_kicker', 'Card Kicker', '', 'text', 'applications_card_kicker'),
            mirrorcraft_acf_text_field('item_title', 'Card Title', '', 'text', 'applications_card_title'),
            mirrorcraft_acf_text_field('item_text', 'Card Text', '', 'textarea', 'applications_card_text'),
          ),
          'Add Application Card'
        ),
        mirrorcraft_acf_text_field('about_preview_eyebrow', 'About Preview Eyebrow'),
        mirrorcraft_acf_text_field('about_preview_title', 'About Preview Title'),
        mirrorcraft_acf_text_field('about_preview_text', 'About Preview Text', '', 'textarea'),
        mirrorcraft_acf_text_field('about_preview_button_text', 'About Preview Button Text'),
        mirrorcraft_acf_text_field('about_preview_button_link', 'About Preview Button Link', '', 'url'),
        mirrorcraft_acf_text_field('about_preview_video_url', 'About Preview YouTube URL', 'Paste a full YouTube link to show a video card under the About preview block.', 'url'),
        mirrorcraft_acf_repeater(
          'about_preview_points',
          'About Preview Points',
          array(
            mirrorcraft_acf_text_field('item_text', 'Point Text', '', 'text', 'about_preview_point_text'),
          ),
          'Add Point'
        ),
        mirrorcraft_acf_text_field('about_preview_company_eyebrow', 'About Preview Company Eyebrow'),
        mirrorcraft_acf_repeater(
          'about_preview_metrics',
          'About Preview Metrics',
          array(
            mirrorcraft_acf_text_field('value', 'Value', '', 'text', 'about_preview_metric_value'),
            mirrorcraft_acf_text_field('label', 'Label', '', 'text', 'about_preview_metric_label'),
          ),
          'Add Metric'
        ),
        mirrorcraft_acf_text_field('about_preview_company_text', 'About Preview Company Text', '', 'textarea'),
        mirrorcraft_acf_text_field('about_preview_video_eyebrow', 'About Preview Video Eyebrow'),
        mirrorcraft_acf_text_field('about_preview_video_title', 'About Preview Video Title'),
        mirrorcraft_acf_text_field('manufacturing_strength_title', 'Manufacturing Strength Title'),
        mirrorcraft_acf_text_field('manufacturing_strength_text', 'Manufacturing Strength Text', '', 'textarea'),
        mirrorcraft_acf_repeater(
          'manufacturing_strength_items',
          'Manufacturing Strength Items',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'strength_item_text'),
          ),
          'Add Strength'
        ),
        mirrorcraft_acf_text_field('trust_signals_title', 'Trust Signals Title'),
        mirrorcraft_acf_text_field('trust_signals_text', 'Trust Signals Text', '', 'textarea'),
        mirrorcraft_acf_repeater(
          'trust_signal_items',
          'Trust Signal Items',
          array(
            mirrorcraft_acf_text_field('item_title', 'Item Title', '', 'text', 'trust_signal_item_title'),
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'textarea', 'trust_signal_item_text'),
          ),
          'Add Trust Signal'
        ),
        mirrorcraft_acf_text_field('testimonials_eyebrow', 'Testimonials Eyebrow'),
        mirrorcraft_acf_text_field('testimonials_title', 'Testimonials Title'),
        mirrorcraft_acf_text_field('testimonials_text', 'Testimonials Intro Text', '', 'textarea'),
        mirrorcraft_acf_repeater(
          'testimonials',
          'Testimonials',
          array(
            mirrorcraft_acf_text_field('quote_text', 'Quote Text', '', 'textarea', 'testimonial_quote'),
            mirrorcraft_acf_text_field('client_name', 'Client Name', '', 'text', 'testimonial_client'),
          ),
          'Add Testimonial'
        ),
        mirrorcraft_acf_text_field('faq_title', 'FAQ Title'),
        mirrorcraft_acf_text_field('faq_text', 'FAQ Intro Text', '', 'textarea'),
        mirrorcraft_acf_repeater(
          'faq_items',
          'FAQ Items',
          array(
            mirrorcraft_acf_text_field('question', 'Question', '', 'text', 'faq_question'),
            mirrorcraft_acf_text_field('answer', 'Answer', '', 'textarea', 'faq_answer'),
          ),
          'Add FAQ'
        ),
        mirrorcraft_acf_text_field('blog_section_title', 'Blog Section Title'),
        mirrorcraft_acf_text_field('blog_section_text', 'Blog Section Text', '', 'textarea'),
        mirrorcraft_acf_text_field('blog_posts_count', 'Blog Posts Count', '', 'number'),
        mirrorcraft_acf_text_field('contact_cta_eyebrow', 'Contact CTA Eyebrow'),
        mirrorcraft_acf_text_field('contact_cta_title', 'Contact CTA Title'),
        mirrorcraft_acf_text_field('contact_cta_text', 'Contact CTA Text', '', 'textarea'),
        mirrorcraft_acf_repeater(
          'contact_cta_points',
          'Contact CTA Points',
          array(
            mirrorcraft_acf_text_field('item_text', 'Point Text', '', 'text', 'contact_cta_point_text'),
          ),
          'Add Point'
        ),
        mirrorcraft_acf_text_field('contact_cta_form_eyebrow', 'Contact CTA Form Eyebrow'),
        mirrorcraft_acf_text_field('contact_cta_form_text', 'Contact CTA Form Text', '', 'textarea'),
        mirrorcraft_acf_text_field('contact_cta_button_text', 'Contact CTA Button Text'),
        mirrorcraft_acf_text_field('contact_cta_button_link', 'Contact CTA Button Link', '', 'url'),
      ),
      'location'              => array(
        array(
          array(
            'param'    => 'page_type',
            'operator' => '==',
            'value'    => 'front_page',
          ),
        ),
      ),
      'position'              => 'normal',
      'style'                 => 'default',
      'active'                => true,
      'show_in_rest'          => 0,
    )
  );

  acf_add_local_field_group(
    array(
      'key'      => 'group_mirrorcraft_about_page',
      'title'    => __('About Page Content', 'mirrorcraft'),
      'fields'   => array(
        mirrorcraft_acf_text_field('about_intro', 'About Intro', '', 'textarea'),
        mirrorcraft_acf_text_field('about_hero_eyebrow', 'About Hero Eyebrow'),
        mirrorcraft_acf_text_field('about_hero_title_line_one', 'About Hero Title Line One'),
        mirrorcraft_acf_text_field('about_hero_title_line_two', 'About Hero Title Line Two'),
        mirrorcraft_acf_repeater(
          'about_hero_chips',
          'About Hero Chips',
          array(
            mirrorcraft_acf_text_field('item_text', 'Chip Text', '', 'text', 'about_hero_chip_text'),
          ),
          'Add Chip'
        ),
        mirrorcraft_acf_repeater(
          'about_hero_stats',
          'About Hero Stats',
          array(
            mirrorcraft_acf_text_field('value', 'Value', '', 'text', 'about_hero_stat_value'),
            mirrorcraft_acf_text_field('label', 'Label', '', 'text', 'about_hero_stat_label'),
          ),
          'Add Stat'
        ),
        mirrorcraft_acf_text_field('about_hero_primary_button_text', 'About Hero Primary Button Text'),
        mirrorcraft_acf_text_field('about_hero_secondary_button_text', 'About Hero Secondary Button Text'),
        mirrorcraft_acf_image_field('about_hero_image', 'About Hero Image', 'Optional. Upload the main hero image for the About page.'),
        mirrorcraft_acf_text_field('about_overlay_kicker', 'About Hero Overlay Kicker'),
        mirrorcraft_acf_text_field('about_overlay_title', 'About Hero Overlay Title'),
        mirrorcraft_acf_repeater(
          'about_overlay_items',
          'About Hero Overlay Items',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'about_overlay_item_text'),
          ),
          'Add Item'
        ),
        mirrorcraft_acf_image_field('about_gallery_bathroom_image', 'About Gallery Bathroom Image', 'Optional. Upload the first gallery image shown in the factory/gallery section.'),
        mirrorcraft_acf_image_field('about_gallery_shapes_image', 'About Gallery Shapes Image', 'Optional. Upload the custom shapes or styling image shown in the gallery section.'),
        mirrorcraft_acf_image_field('about_gallery_controls_image', 'About Gallery Controls Image', 'Optional. Upload the smart controls or feature image shown in the gallery section.'),
        mirrorcraft_acf_image_field('about_gallery_cabinet_image', 'About Gallery Cabinet Image', 'Optional. Upload the mirror cabinet image shown in the gallery section.'),
        mirrorcraft_acf_text_field('company_profile_eyebrow', 'Company Profile Eyebrow'),
        mirrorcraft_acf_text_field('company_overview_title', 'Company Overview Title'),
        mirrorcraft_acf_text_field('company_overview_text', 'Company Overview Text', '', 'textarea'),
        mirrorcraft_acf_repeater(
          'about_capability_tags',
          'About Capability Tags',
          array(
            mirrorcraft_acf_text_field('item_text', 'Tag Text', '', 'text', 'about_capability_tag_text'),
          ),
          'Add Tag'
        ),
        mirrorcraft_acf_repeater(
          'about_strength_cards',
          'About Strength Cards',
          array(
            mirrorcraft_acf_text_field('value', 'Value', '', 'text', 'about_strength_card_value'),
            mirrorcraft_acf_text_field('label', 'Label', '', 'text', 'about_strength_card_label'),
          ),
          'Add Card'
        ),
        mirrorcraft_acf_text_field('about_trust_eyebrow', 'About Trust Eyebrow'),
        mirrorcraft_acf_text_field('mission_title', 'Mission Title'),
        mirrorcraft_acf_text_field('mission_text', 'Mission Text', '', 'textarea'),
        mirrorcraft_acf_repeater(
          'about_trust_reasons',
          'About Trust Reasons',
          array(
            mirrorcraft_acf_text_field('item_title', 'Reason Title', '', 'text', 'about_trust_reason_title'),
            mirrorcraft_acf_text_field('item_text', 'Reason Text', '', 'textarea', 'about_trust_reason_text'),
          ),
          'Add Reason'
        ),
        mirrorcraft_acf_repeater(
          'about_gallery_items',
          'About Gallery Items',
          array(
            mirrorcraft_acf_text_field('item_title', 'Item Title', '', 'text', 'about_gallery_item_title'),
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'textarea', 'about_gallery_item_text'),
          ),
          'Add Gallery Item'
        ),
        mirrorcraft_acf_text_field('about_factory_kicker', 'About Factory Kicker'),
        mirrorcraft_acf_text_field('manufacturing_capability_title', 'Manufacturing Capability Title'),
        mirrorcraft_acf_text_field('manufacturing_capability_text', 'Manufacturing Capability Text', '', 'textarea'),
        mirrorcraft_acf_repeater(
          'about_factory_points',
          'About Factory Points',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'about_factory_point_text'),
          ),
          'Add Point'
        ),
        mirrorcraft_acf_text_field('about_factory_button_text', 'About Factory Button Text'),
        mirrorcraft_acf_text_field('about_quality_kicker', 'About Quality Kicker'),
        mirrorcraft_acf_text_field('quality_commitment_title', 'Quality Commitment Title'),
        mirrorcraft_acf_text_field('quality_commitment_text', 'Quality Commitment Text', '', 'textarea'),
        mirrorcraft_acf_repeater(
          'about_quality_checks',
          'About Quality Checks',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'about_quality_check_text'),
          ),
          'Add Check'
        ),
        mirrorcraft_acf_text_field('about_certifications_eyebrow', 'About Certifications Eyebrow'),
        mirrorcraft_acf_text_field('global_service_title', 'Global Service Title'),
        mirrorcraft_acf_text_field('global_service_text', 'Global Service Text', '', 'textarea'),
        mirrorcraft_acf_repeater(
          'about_certifications',
          'About Certifications',
          array(
            mirrorcraft_acf_text_field('item_text', 'Certification Text', '', 'text', 'about_certification_text'),
          ),
          'Add Certification'
        ),
        mirrorcraft_acf_repeater(
          'about_customer_types',
          'About Customer Types',
          array(
            mirrorcraft_acf_text_field('item_text', 'Customer Type', '', 'text', 'about_customer_type_text'),
          ),
          'Add Customer Type'
        ),
        mirrorcraft_acf_text_field('about_service_eyebrow', 'About Service Eyebrow'),
        mirrorcraft_acf_text_field('partnership_title', 'Partnership Title'),
        mirrorcraft_acf_text_field('partnership_text', 'Partnership Text', '', 'textarea'),
        mirrorcraft_acf_text_field('about_service_secondary_text', 'About Service Secondary Text', '', 'textarea'),
        mirrorcraft_acf_repeater(
          'about_process_steps',
          'About Process Steps',
          array(
            mirrorcraft_acf_text_field('item_title', 'Step Title', '', 'text', 'about_process_step_title'),
            mirrorcraft_acf_text_field('item_text', 'Step Text', '', 'textarea', 'about_process_step_text'),
          ),
          'Add Step'
        ),
        mirrorcraft_acf_text_field('about_service_primary_button_text', 'About Service Primary Button Text'),
        mirrorcraft_acf_text_field('about_service_secondary_button_text', 'About Service Secondary Button Text'),
        mirrorcraft_acf_text_field('about_cta_kicker', 'About CTA Kicker'),
        mirrorcraft_acf_text_field('about_cta_title', 'About CTA Title'),
        mirrorcraft_acf_text_field('about_cta_text', 'About CTA Text', '', 'textarea'),
        mirrorcraft_acf_text_field('about_cta_primary_button_text', 'About CTA Primary Button Text'),
        mirrorcraft_acf_text_field('about_cta_secondary_button_text', 'About CTA Secondary Button Text'),
      ),
      'location' => array(
        array(
          array(
            'param'    => 'page_template',
            'operator' => '==',
            'value'    => 'page-templates/page-about.php',
          ),
        ),
      ),
    )
  );

  acf_add_local_field_group(
    array(
      'key'      => 'group_mirrorcraft_products_page',
      'title'    => __('Products Page Content', 'mirrorcraft'),
      'fields'   => array(
        mirrorcraft_acf_text_field('products_hero_eyebrow', 'Products Hero Eyebrow'),
        mirrorcraft_acf_text_field('products_hero_title', 'Products Hero Title'),
        mirrorcraft_acf_text_field('products_hero_lead', 'Products Hero Lead'),
        mirrorcraft_acf_text_field('products_intro', 'Products Intro', '', 'textarea'),
        mirrorcraft_acf_text_field('products_primary_button_text', 'Products Primary Button Text'),
        mirrorcraft_acf_text_field('products_secondary_button_text', 'Products Secondary Button Text'),
        mirrorcraft_acf_image_field('products_hero_image', 'Products Hero Image', 'Optional. Upload the main hero image shown at the top of the Products page.'),
        mirrorcraft_acf_image_field('products_bathroom_mirror_image', 'Bathroom Mirrors Image', 'Optional. Upload the category image used for Bathroom Mirrors on the Products page.'),
        mirrorcraft_acf_text_field('products_bathroom_mirror_title', 'Bathroom Mirrors Title'),
        mirrorcraft_acf_text_field('products_bathroom_mirror_text', 'Bathroom Mirrors Text', '', 'textarea'),
        mirrorcraft_acf_image_field('products_medicine_cabinet_image', 'Medicine Cabinets Image', 'Optional. Upload the category image used for Medicine Cabinets on the Products page.'),
        mirrorcraft_acf_text_field('products_medicine_cabinet_title', 'Medicine Cabinets Title'),
        mirrorcraft_acf_text_field('products_medicine_cabinet_text', 'Medicine Cabinets Text', '', 'textarea'),
        mirrorcraft_acf_image_field('products_decorative_mirror_image', 'Decorative Mirrors Image', 'Optional. Upload the category image used for Decorative Mirrors on the Products page.'),
        mirrorcraft_acf_text_field('products_decorative_mirror_title', 'Decorative Mirrors Title'),
        mirrorcraft_acf_text_field('products_decorative_mirror_text', 'Decorative Mirrors Text', '', 'textarea'),
        mirrorcraft_acf_image_field('products_makeup_mirror_image', 'Makeup Mirrors Image', 'Optional. Upload the category image used for Makeup Mirrors on the Products page.'),
        mirrorcraft_acf_text_field('products_makeup_mirror_title', 'Makeup Mirrors Title'),
        mirrorcraft_acf_text_field('products_makeup_mirror_text', 'Makeup Mirrors Text', '', 'textarea'),
        mirrorcraft_acf_image_field('products_full_length_mirror_image', 'Full Length Mirrors Image', 'Optional. Upload the category image used for Full Length Mirrors on the Products page.'),
        mirrorcraft_acf_text_field('products_full_length_mirror_title', 'Full Length Mirrors Title'),
        mirrorcraft_acf_text_field('products_full_length_mirror_text', 'Full Length Mirrors Text', '', 'textarea'),
        mirrorcraft_acf_image_field('products_custom_led_mirror_image', 'Custom LED Mirrors Image', 'Optional. Upload the category image used for Custom LED Mirrors on the Products page.'),
        mirrorcraft_acf_text_field('products_custom_led_mirror_title', 'Custom LED Mirrors Title'),
        mirrorcraft_acf_text_field('products_custom_led_mirror_text', 'Custom LED Mirrors Text', '', 'textarea'),
        mirrorcraft_acf_text_field('products_categories_eyebrow', 'Products Categories Eyebrow'),
        mirrorcraft_acf_text_field('products_categories_title', 'Products Categories Title'),
        mirrorcraft_acf_text_field('products_categories_text', 'Products Categories Text', '', 'textarea'),
        mirrorcraft_acf_text_field('products_category_link_text', 'Products Category Link Text'),
        mirrorcraft_acf_text_field('product_advantage_title', 'Product Advantage Title'),
        mirrorcraft_acf_text_field('product_advantage_text', 'Product Advantage Text', '', 'textarea'),
        mirrorcraft_acf_repeater(
          'product_advantage_items',
          'Product Advantage Items',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'product_advantage_item_text'),
          ),
          'Add Advantage'
        ),
        mirrorcraft_acf_text_field('products_cta_title', 'Products CTA Title'),
        mirrorcraft_acf_text_field('products_cta_text', 'Products CTA Text', '', 'textarea'),
        mirrorcraft_acf_text_field('products_cta_button_text', 'Products CTA Button Text'),
        mirrorcraft_acf_text_field('products_cta_button_link', 'Products CTA Button Link', '', 'url'),
      ),
      'location' => array(
        array(
          array(
            'param'    => 'page_template',
            'operator' => '==',
            'value'    => 'page-templates/page-products.php',
          ),
        ),
      ),
    )
  );

  acf_add_local_field_group(
    array(
      'key'      => 'group_mirrorcraft_projects_page',
      'title'    => __('Projects Page Content', 'mirrorcraft'),
      'fields'   => array(
        mirrorcraft_acf_text_field('projects_hero_eyebrow', 'Projects Hero Eyebrow'),
        mirrorcraft_acf_text_field('projects_hero_title', 'Projects Hero Title'),
        mirrorcraft_acf_text_field('projects_hero_text', 'Projects Hero Text', '', 'textarea'),
        mirrorcraft_acf_repeater(
          'projects_hero_chips',
          'Projects Hero Chips',
          array(
            mirrorcraft_acf_text_field('item_text', 'Chip Text', '', 'text', 'projects_hero_chip_text'),
          ),
          'Add Chip'
        ),
        mirrorcraft_acf_repeater(
          'projects_hero_stats',
          'Projects Hero Stats',
          array(
            mirrorcraft_acf_text_field('value', 'Value', '', 'text', 'projects_hero_stat_value'),
            mirrorcraft_acf_text_field('label', 'Label', '', 'text', 'projects_hero_stat_label'),
          ),
          'Add Stat'
        ),
        mirrorcraft_acf_image_field('projects_hero_image', 'Projects Hero Image', 'Optional. Upload the main hero image shown at the top of the Projects page.'),
        mirrorcraft_acf_text_field('projects_overlay_kicker', 'Projects Overlay Kicker'),
        mirrorcraft_acf_text_field('projects_overlay_title', 'Projects Overlay Title'),
        mirrorcraft_acf_repeater(
          'projects_overlay_points',
          'Projects Overlay Points',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'projects_overlay_point_text'),
          ),
          'Add Point'
        ),
        mirrorcraft_acf_text_field('projects_summary_eyebrow', 'Projects Summary Eyebrow'),
        mirrorcraft_acf_text_field('projects_summary_title', 'Projects Summary Title'),
        mirrorcraft_acf_text_field('projects_summary_text', 'Projects Summary Text', '', 'textarea'),
        mirrorcraft_acf_repeater(
          'projects_overview_points',
          'Projects Overview Points',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'projects_overview_point_text'),
          ),
          'Add Point'
        ),
        mirrorcraft_acf_text_field('projects_needs_kicker', 'Projects Needs Kicker'),
        mirrorcraft_acf_text_field('projects_needs_title', 'Projects Needs Title'),
        mirrorcraft_acf_repeater(
          'projects_needs_items',
          'Projects Needs Items',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'projects_needs_item_text'),
          ),
          'Add Item'
        ),
        mirrorcraft_acf_text_field('projects_routes_eyebrow', 'Projects Routes Eyebrow'),
        mirrorcraft_acf_text_field('projects_routes_title', 'Projects Routes Title'),
        mirrorcraft_acf_text_field('projects_routes_text', 'Projects Routes Text', '', 'textarea'),
        mirrorcraft_acf_repeater(
          'projects_routes',
          'Projects Routes',
          array(
            mirrorcraft_acf_text_field('route_eyebrow', 'Route Eyebrow', '', 'text', 'projects_route_eyebrow'),
            mirrorcraft_acf_text_field('route_title', 'Route Title', '', 'text', 'projects_route_title'),
            mirrorcraft_acf_text_field('route_text', 'Route Text', '', 'textarea', 'projects_route_text'),
            mirrorcraft_acf_image_field('route_image', 'Route Image', '', 'projects_route_image'),
            mirrorcraft_acf_text_field('route_link', 'Route Link', '', 'url', 'projects_route_link'),
            mirrorcraft_acf_repeater(
              'projects_route_tags',
              'Route Tags',
              array(
                mirrorcraft_acf_text_field('item_text', 'Tag Text', '', 'text', 'projects_route_tag_text'),
              ),
              'Add Tag'
            ),
          ),
          'Add Route'
        ),
        mirrorcraft_acf_image_field('projects_hospitality_image', 'Hospitality Route Image', 'Optional. Upload the card image used for Hotel Bathroom Programs.'),
        mirrorcraft_acf_image_field('projects_commercial_image', 'Commercial Route Image', 'Optional. Upload the card image used for Commercial Washroom Projects.'),
        mirrorcraft_acf_image_field('projects_residential_image', 'Residential Route Image', 'Optional. Upload the card image used for Residential & Apartment Supply.'),
        mirrorcraft_acf_image_field('projects_senior_living_image', 'Senior Living Route Image', 'Optional. Upload the card image used for Senior Living Bathroom Routes.'),
        mirrorcraft_acf_image_field('projects_retail_image', 'Retail Route Image', 'Optional. Upload the card image used for Retail Display & Private Label Programs.'),
        mirrorcraft_acf_image_field('projects_salon_image', 'Salon Route Image', 'Optional. Upload the card image used for Salon & Beauty Mirror Spaces.'),
        mirrorcraft_acf_text_field('projects_support_kicker', 'Projects Support Kicker'),
        mirrorcraft_acf_text_field('projects_support_title', 'Projects Support Title'),
        mirrorcraft_acf_text_field('projects_support_text', 'Projects Support Text', '', 'textarea'),
        mirrorcraft_acf_image_field('projects_support_image', 'Projects Support Image', 'Optional. Upload the image shown in the project support panel.'),
        mirrorcraft_acf_repeater(
          'projects_support_blocks',
          'Projects Support Blocks',
          array(
            mirrorcraft_acf_text_field('item_title', 'Block Title', '', 'text', 'projects_support_block_title'),
            mirrorcraft_acf_text_field('item_text', 'Block Text', '', 'textarea', 'projects_support_block_text'),
          ),
          'Add Support Block'
        ),
        mirrorcraft_acf_text_field('projects_workflow_eyebrow', 'Projects Workflow Eyebrow'),
        mirrorcraft_acf_text_field('projects_workflow_title', 'Projects Workflow Title'),
        mirrorcraft_acf_text_field('projects_workflow_text', 'Projects Workflow Text', '', 'textarea'),
        mirrorcraft_acf_repeater(
          'projects_workflow_steps',
          'Projects Workflow Steps',
          array(
            mirrorcraft_acf_text_field('item_title', 'Step Title', '', 'text', 'projects_workflow_step_title'),
            mirrorcraft_acf_text_field('item_text', 'Step Text', '', 'textarea', 'projects_workflow_step_text'),
          ),
          'Add Step'
        ),
        mirrorcraft_acf_text_field('projects_cta_kicker', 'Projects CTA Kicker'),
        mirrorcraft_acf_text_field('projects_cta_title', 'Projects CTA Title'),
        mirrorcraft_acf_text_field('projects_cta_text', 'Projects CTA Text', '', 'textarea'),
        mirrorcraft_acf_text_field('projects_cta_button_text', 'Projects CTA Button Text'),
        mirrorcraft_acf_text_field('projects_hero_secondary_button_text', 'Projects Hero Secondary Button Text'),
        mirrorcraft_acf_text_field('projects_routes_link_text', 'Projects Route Link Text'),
        mirrorcraft_acf_text_field('projects_cta_secondary_button_text', 'Projects CTA Secondary Button Text'),
      ),
      'location' => array(
        array(
          array(
            'param'    => 'page_template',
            'operator' => '==',
            'value'    => 'page-templates/page-projects.php',
          ),
        ),
      ),
    )
  );

  acf_add_local_field_group(
    array(
      'key'      => 'group_mirrorcraft_applications_page',
      'title'    => __('Applications Page Content', 'mirrorcraft'),
      'fields'   => array(
        mirrorcraft_acf_text_field('applications_hero_eyebrow', 'Applications Hero Eyebrow'),
        mirrorcraft_acf_text_field('applications_hero_title', 'Applications Hero Title'),
        mirrorcraft_acf_text_field('applications_page_intro', 'Applications Intro', '', 'textarea'),
        mirrorcraft_acf_repeater(
          'applications_hero_chips',
          'Applications Hero Chips',
          array(
            mirrorcraft_acf_text_field('item_text', 'Chip Text', '', 'text', 'applications_hero_chip_text'),
          ),
          'Add Chip'
        ),
        mirrorcraft_acf_repeater(
          'applications_hero_stats',
          'Applications Hero Stats',
          array(
            mirrorcraft_acf_text_field('value', 'Value', '', 'text', 'applications_hero_stat_value'),
            mirrorcraft_acf_text_field('label', 'Label', '', 'text', 'applications_hero_stat_label'),
          ),
          'Add Stat'
        ),
        mirrorcraft_acf_text_field('applications_hero_primary_button_text', 'Applications Hero Primary Button Text'),
        mirrorcraft_acf_text_field('applications_hero_secondary_button_text', 'Applications Hero Secondary Button Text'),
        mirrorcraft_acf_text_field('applications_solution_kicker', 'Applications Solution Kicker'),
        mirrorcraft_acf_text_field('applications_solution_title', 'Applications Solution Title'),
        mirrorcraft_acf_repeater(
          'applications_solution_points',
          'Applications Solution Points',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'applications_solution_point_text'),
          ),
          'Add Point'
        ),
        mirrorcraft_acf_text_field('applications_overview_eyebrow', 'Applications Overview Eyebrow'),
        mirrorcraft_acf_text_field('applications_overview_title', 'Applications Overview Title'),
        mirrorcraft_acf_text_field('applications_overview_text', 'Applications Overview Text', '', 'textarea'),
        mirrorcraft_acf_text_field('applications_overview_item_kicker', 'Applications Overview Item Kicker'),
        mirrorcraft_acf_text_field('applications_overview_link_text', 'Applications Overview Link Text'),
        mirrorcraft_acf_image_field('applications_hospitality_image', 'Hospitality Scenario Image', 'Optional. Upload the image used for the Hotel Bathrooms scenario.'),
        mirrorcraft_acf_image_field('applications_residential_image', 'Residential Scenario Image', 'Optional. Upload the image used for the Residential Bathrooms scenario.'),
        mirrorcraft_acf_image_field('applications_apartment_image', 'Apartment Scenario Image', 'Optional. Upload the image used for the Apartment Projects scenario.'),
        mirrorcraft_acf_image_field('applications_retail_image', 'Retail Scenario Image', 'Optional. Upload the image used for the Retail & Showroom Display scenario.'),
        mirrorcraft_acf_image_field('applications_beauty_image', 'Beauty Scenario Image', 'Optional. Upload the image used for the Beauty & Salon Spaces scenario.'),
        mirrorcraft_acf_image_field('applications_commercial_image', 'Commercial Scenario Image', 'Optional. Upload the image used for the Commercial Spaces scenario.'),
        mirrorcraft_acf_repeater(
          'applications_page_items',
          'Application Sections',
          array(
            mirrorcraft_acf_text_field('item_title', 'Section Title', '', 'text', 'applications_page_item_title'),
            mirrorcraft_acf_text_field('item_text', 'Section Text', '', 'textarea', 'applications_page_item_text'),
          ),
          'Add Section'
        ),
        mirrorcraft_acf_text_field('applications_scenarios_eyebrow', 'Applications Scenarios Eyebrow'),
        mirrorcraft_acf_text_field('applications_scenarios_title', 'Applications Scenarios Title'),
        mirrorcraft_acf_text_field('applications_scenario_needs_kicker', 'Applications Scenario Needs Kicker'),
        mirrorcraft_acf_text_field('applications_scenario_solutions_kicker', 'Applications Scenario Solutions Kicker'),
        mirrorcraft_acf_text_field('applications_scenario_products_kicker', 'Applications Scenario Products Kicker'),
        mirrorcraft_acf_text_field('applications_scenario_link_text', 'Applications Scenario Link Text'),
        mirrorcraft_acf_repeater(
          'applications_scenarios',
          'Applications Scenarios',
          array(
            mirrorcraft_acf_text_field('scenario_eyebrow', 'Scenario Eyebrow', '', 'text', 'applications_scenario_eyebrow'),
            mirrorcraft_acf_text_field('scenario_title', 'Scenario Title', '', 'text', 'applications_scenario_title'),
            mirrorcraft_acf_text_field('scenario_description', 'Scenario Description', '', 'textarea', 'applications_scenario_description'),
            mirrorcraft_acf_image_field('scenario_image', 'Scenario Image', '', 'applications_scenario_image'),
            mirrorcraft_acf_text_field('scenario_link', 'Scenario Link', '', 'url', 'applications_scenario_link'),
            mirrorcraft_acf_repeater(
              'applications_scenario_needs',
              'Scenario Needs',
              array(
                mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'applications_scenario_need_text'),
              ),
              'Add Need'
            ),
            mirrorcraft_acf_repeater(
              'applications_scenario_solutions',
              'Scenario Solutions',
              array(
                mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'applications_scenario_solution_text'),
              ),
              'Add Solution'
            ),
            mirrorcraft_acf_repeater(
              'applications_scenario_products',
              'Scenario Products',
              array(
                mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'applications_scenario_product_text'),
              ),
              'Add Product'
            ),
          ),
          'Add Scenario'
        ),
        mirrorcraft_acf_text_field('applications_who_we_serve_eyebrow', 'Applications Who We Serve Eyebrow'),
        mirrorcraft_acf_text_field('applications_who_we_serve_title', 'Applications Who We Serve Title'),
        mirrorcraft_acf_text_field('applications_who_we_serve_text', 'Applications Who We Serve Text', '', 'textarea'),
        mirrorcraft_acf_repeater(
          'applications_who_we_serve_items',
          'Applications Who We Serve Items',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'applications_who_we_serve_item_text'),
          ),
          'Add Buyer Type'
        ),
        mirrorcraft_acf_text_field('applications_support_kicker', 'Applications Support Kicker'),
        mirrorcraft_acf_text_field('applications_support_title', 'Applications Support Title'),
        mirrorcraft_acf_repeater(
          'applications_support_blocks',
          'Applications Support Blocks',
          array(
            mirrorcraft_acf_text_field('item_title', 'Block Title', '', 'text', 'applications_support_block_title'),
            mirrorcraft_acf_text_field('item_text', 'Block Text', '', 'textarea', 'applications_support_block_text'),
          ),
          'Add Support Block'
        ),
        mirrorcraft_acf_text_field('applications_editor_eyebrow', 'Applications Editor Eyebrow'),
        mirrorcraft_acf_text_field('applications_cta_kicker', 'Applications CTA Kicker'),
        mirrorcraft_acf_text_field('applications_cta_title', 'Applications CTA Title'),
        mirrorcraft_acf_text_field('applications_cta_text', 'Applications CTA Text', '', 'textarea'),
        mirrorcraft_acf_text_field('applications_cta_primary_button_text', 'Applications CTA Primary Button Text'),
        mirrorcraft_acf_text_field('applications_cta_secondary_button_text', 'Applications CTA Secondary Button Text'),
      ),
      'location' => array(
        array(
          array(
            'param'    => 'page_template',
            'operator' => '==',
            'value'    => 'page-templates/page-applications.php',
          ),
        ),
      ),
    )
  );

  acf_add_local_field_group(
    array(
      'key'      => 'group_mirrorcraft_faqs_page',
      'title'    => __('FAQs Page Content', 'mirrorcraft'),
      'fields'   => array(
        mirrorcraft_acf_text_field('faq_hero_eyebrow', 'FAQ Hero Eyebrow'),
        mirrorcraft_acf_text_field('faq_page_title', 'FAQ Page Title'),
        mirrorcraft_acf_text_field('faq_page_intro', 'FAQ Page Intro', '', 'textarea'),
        mirrorcraft_acf_repeater(
          'faq_page_chips',
          'FAQ Hero Chips',
          array(
            mirrorcraft_acf_text_field('item_text', 'Chip Text', '', 'text', 'faq_page_chip_text'),
          ),
          'Add Chip'
        ),
        mirrorcraft_acf_repeater(
          'faq_page_help_items',
          'FAQ Help Items',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'faq_page_help_item_text'),
          ),
          'Add Help Item'
        ),
        mirrorcraft_acf_text_field('faq_help_kicker', 'FAQ Help Kicker'),
        mirrorcraft_acf_text_field('faq_help_title', 'FAQ Help Title'),
        mirrorcraft_acf_repeater(
          'faq_page_meta_items',
          'FAQ Meta Items',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'faq_page_meta_item_text'),
          ),
          'Add Meta Item'
        ),
        mirrorcraft_acf_text_field('faq_browse_button_text', 'FAQ Browse Button Text'),
        mirrorcraft_acf_text_field('faq_quote_button_text', 'FAQ Quote Button Text'),
        mirrorcraft_acf_text_field('faq_directory_eyebrow', 'FAQ Directory Eyebrow'),
        mirrorcraft_acf_text_field('faq_directory_title', 'FAQ Directory Title'),
        mirrorcraft_acf_text_field('faq_directory_text', 'FAQ Directory Text', '', 'textarea'),
        mirrorcraft_acf_repeater(
          'faq_page_prep_items',
          'FAQ Prep Items',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'faq_page_prep_item_text'),
          ),
          'Add Prep Item'
        ),
        mirrorcraft_acf_text_field('faq_prep_kicker', 'FAQ Prep Kicker'),
        mirrorcraft_acf_text_field('faq_prep_title', 'FAQ Prep Title'),
        mirrorcraft_acf_text_field('faq_catalogue_button_text', 'FAQ Catalogue Button Text'),
        mirrorcraft_acf_repeater(
          'faq_page_sections',
          'FAQ Sections',
          array(
            mirrorcraft_acf_text_field('section_slug', 'Section Slug'),
            mirrorcraft_acf_text_field('section_eyebrow', 'Section Eyebrow'),
            mirrorcraft_acf_text_field('section_title', 'Section Title'),
            mirrorcraft_acf_text_field('section_description', 'Section Description', '', 'textarea'),
            mirrorcraft_acf_repeater(
              'section_items',
              'Section Items',
              array(
                mirrorcraft_acf_text_field('question', 'Question', '', 'text', 'faq_page_section_question'),
                mirrorcraft_acf_text_field('answer', 'Answer', '', 'textarea', 'faq_page_section_answer'),
              ),
              'Add FAQ Item'
            ),
          ),
          'Add FAQ Section'
        ),
        mirrorcraft_acf_text_field('faq_cta_kicker', 'FAQ CTA Kicker'),
        mirrorcraft_acf_text_field('faq_cta_title', 'FAQ CTA Title'),
        mirrorcraft_acf_text_field('faq_cta_text', 'FAQ CTA Text', '', 'textarea'),
        mirrorcraft_acf_text_field('faq_secondary_button_text', 'FAQ Secondary Button Text'),
        mirrorcraft_acf_text_field('faq_support_kicker', 'FAQ Support Kicker'),
        mirrorcraft_acf_text_field('faq_support_title', 'FAQ Support Title'),
        mirrorcraft_acf_repeater(
          'faq_support_items',
          'FAQ Support Items',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'faq_support_item_text'),
          ),
          'Add Support Item'
        ),
      ),
      'location' => array(
        array(
          array(
            'param'    => 'page_template',
            'operator' => '==',
            'value'    => 'page-templates/page-faqs.php',
          ),
        ),
      ),
    )
  );

  acf_add_local_field_group(
    array(
      'key'      => 'group_mirrorcraft_contact_page',
      'title'    => __('Contact Page Content', 'mirrorcraft'),
      'fields'   => array(
        mirrorcraft_acf_text_field('contact_intro', 'Contact Intro', '', 'textarea'),
        mirrorcraft_acf_text_field('contact_intro_eyebrow', 'Contact Intro Eyebrow'),
        mirrorcraft_acf_text_field('contact_section_title', 'Contact Section Title'),
        mirrorcraft_acf_text_field('contact_form_eyebrow', 'Contact Form Eyebrow'),
        mirrorcraft_acf_text_field('contact_section_text', 'Contact Section Text', '', 'textarea'),
        mirrorcraft_acf_repeater(
          'contact_tags',
          'Contact Tags',
          array(
            mirrorcraft_acf_text_field('item_text', 'Tag Text', '', 'text', 'contact_tag_item_text'),
          ),
          'Add Tag'
        ),
        mirrorcraft_acf_repeater(
          'contact_support_points',
          'Contact Support Points',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'contact_support_point_text'),
          ),
          'Add Support Point'
        ),
        mirrorcraft_acf_text_field('contact_support_eyebrow', 'Contact Support Eyebrow'),
        mirrorcraft_acf_text_field('contact_support_title', 'Contact Support Title'),
        mirrorcraft_acf_repeater(
          'contact_message_help_points',
          'Contact Message Help Points',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'contact_message_help_point_text'),
          ),
          'Add Help Point'
        ),
        mirrorcraft_acf_text_field('contact_message_eyebrow', 'Contact Message Eyebrow'),
        mirrorcraft_acf_text_field('contact_message_title', 'Contact Message Title'),
        mirrorcraft_acf_text_field('contact_message_placeholder', 'Contact Message Placeholder', '', 'textarea'),
        mirrorcraft_acf_text_field('contact_message_help_text', 'Contact Message Help Text', '', 'textarea'),
        mirrorcraft_acf_text_field('contact_file_help_text', 'Contact File Help Text', '', 'textarea'),
        mirrorcraft_acf_text_field('contact_submit_button_text', 'Contact Submit Button Text'),
        mirrorcraft_acf_text_field('contact_reachout_kicker', 'Contact Reachout Kicker'),
        mirrorcraft_acf_text_field('contact_reachout_title', 'Contact Reachout Title'),
        mirrorcraft_acf_text_field('contact_reachout_text', 'Contact Reachout Text', '', 'textarea'),
      ),
      'location' => array(
        array(
          array(
            'param'    => 'page_template',
            'operator' => '==',
            'value'    => 'page-templates/page-contact.php',
          ),
        ),
      ),
    )
  );

  acf_add_local_field_group(
    array(
      'key'      => 'group_mirrorcraft_download_catalogue_page',
      'title'    => __('Download Catalogue Page Content', 'mirrorcraft'),
      'fields'   => array(
        mirrorcraft_acf_text_field('download_catalogue_intro', 'Catalogue Intro', '', 'textarea'),
        mirrorcraft_acf_text_field('download_catalogue_summary', 'Catalogue Summary', '', 'textarea'),
        mirrorcraft_acf_text_field('download_catalogue_version', 'Catalogue Version / Badge'),
        mirrorcraft_acf_file_field('download_catalogue_file', 'Catalogue File', 'Upload the brochure or catalogue file buyers should download.'),
        mirrorcraft_acf_image_field('download_catalogue_preview_image', 'Catalogue Preview Image', 'Optional. Upload a preview image or brochure cover.'),
        mirrorcraft_acf_repeater(
          'download_catalogue_highlights',
          'Catalogue Highlights',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'download_catalogue_highlight_item_text'),
          ),
          'Add Highlight'
        ),
        mirrorcraft_acf_repeater(
          'download_catalogue_support_items',
          'Download Support Items',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'download_catalogue_support_item_text'),
          ),
          'Add Support Item'
        ),
      ),
      'location' => array(
        array(
          array(
            'param'    => 'page_template',
            'operator' => '==',
            'value'    => 'page-templates/page-download-catalogue.php',
          ),
        ),
      ),
    )
  );

  acf_add_local_field_group(
    array(
      'key'      => 'group_mirrorcraft_about_section_page',
      'title'    => __('About Section Page Content', 'mirrorcraft'),
      'fields'   => array(
        mirrorcraft_acf_text_field('about_section_eyebrow', 'Section Eyebrow'),
        mirrorcraft_acf_text_field('about_section_hero_title', 'Hero Title'),
        mirrorcraft_acf_text_field('about_section_hero_text', 'Hero Text', '', 'textarea'),
        mirrorcraft_acf_text_field('about_section_hero_secondary_button_text', 'Hero Secondary Button Text'),
        mirrorcraft_acf_repeater(
          'about_section_hero_chips',
          'Hero Chips',
          array(
            mirrorcraft_acf_text_field('item_text', 'Chip Text', '', 'text', 'about_section_hero_chip_text'),
          ),
          'Add Chip'
        ),
        mirrorcraft_acf_repeater(
          'about_section_hero_stats',
          'Hero Stats',
          array(
            mirrorcraft_acf_text_field('value', 'Value', '', 'text', 'about_section_hero_stat_value'),
            mirrorcraft_acf_text_field('label', 'Label', '', 'text', 'about_section_hero_stat_label'),
          ),
          'Add Stat'
        ),
        mirrorcraft_acf_text_field('about_section_focus_title', 'Focus Title'),
        mirrorcraft_acf_text_field('about_section_focus_text', 'Focus Text', '', 'textarea'),
        mirrorcraft_acf_text_field('about_section_summary_eyebrow', 'Summary Eyebrow'),
        mirrorcraft_acf_repeater(
          'about_section_focus_items',
          'Focus Items',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'about_section_focus_item_text'),
          ),
          'Add Item'
        ),
        mirrorcraft_acf_text_field('about_section_aside_kicker', 'Aside Kicker'),
        mirrorcraft_acf_text_field('about_section_aside_title', 'Aside Title'),
        mirrorcraft_acf_repeater(
          'about_section_aside_items',
          'Aside Items',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'about_section_aside_item_text'),
          ),
          'Add Item'
        ),
        mirrorcraft_acf_text_field('about_section_support_kicker', 'Support Kicker'),
        mirrorcraft_acf_text_field('about_section_support_title', 'Support Title'),
        mirrorcraft_acf_repeater(
          'about_section_support_items',
          'Support Items',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'about_section_support_item_text'),
          ),
          'Add Support Item'
        ),
        mirrorcraft_acf_text_field('about_section_cards_eyebrow', 'Cards Eyebrow'),
        mirrorcraft_acf_text_field('about_section_cards_title', 'Cards Section Title'),
        mirrorcraft_acf_text_field('about_section_cards_text', 'Cards Section Text', '', 'textarea'),
        mirrorcraft_acf_repeater(
          'about_section_cards',
          'Cards',
          array(
            mirrorcraft_acf_text_field('item_title', 'Card Title', '', 'text', 'about_section_card_title'),
            mirrorcraft_acf_text_field('item_text', 'Card Text', '', 'textarea', 'about_section_card_text'),
          ),
          'Add Card'
        ),
        mirrorcraft_acf_text_field('about_section_steps_eyebrow', 'Steps Eyebrow'),
        mirrorcraft_acf_text_field('about_section_steps_title', 'Steps Title'),
        mirrorcraft_acf_text_field('about_section_steps_text', 'Steps Text', '', 'textarea'),
        mirrorcraft_acf_repeater(
          'about_section_steps',
          'Steps',
          array(
            mirrorcraft_acf_text_field('item_title', 'Step Title', '', 'text', 'about_section_step_title'),
            mirrorcraft_acf_text_field('item_text', 'Step Text', '', 'textarea', 'about_section_step_text'),
          ),
          'Add Step'
        ),
        mirrorcraft_acf_text_field('about_section_cta_kicker', 'CTA Kicker'),
        mirrorcraft_acf_text_field('about_section_cta_title', 'CTA Title'),
        mirrorcraft_acf_text_field('about_section_cta_text', 'CTA Text', '', 'textarea'),
        mirrorcraft_acf_text_field('about_section_cta_button', 'CTA Button Text'),
        mirrorcraft_acf_text_field('about_section_secondary_button_text', 'CTA Secondary Button Text'),
        mirrorcraft_acf_text_field('about_section_related_kicker', 'Related Kicker'),
        mirrorcraft_acf_text_field('about_section_related_title', 'Related Title'),
        mirrorcraft_acf_repeater(
          'about_section_related_links',
          'Related Links',
          array(
            mirrorcraft_acf_text_field('item_text', 'Link Text', '', 'text', 'about_section_related_link_text'),
            mirrorcraft_acf_text_field('item_link', 'Link URL', '', 'url', 'about_section_related_link_url'),
          ),
          'Add Related Link'
        ),
      ),
      'location' => array(
        array(
          array(
            'param'    => 'page_template',
            'operator' => '==',
            'value'    => 'page-templates/page-about-section.php',
          ),
        ),
      ),
    )
  );

  acf_add_local_field_group(
    array(
      'key'      => 'group_mirrorcraft_application_section_page',
      'title'    => __('Application Section Page Content', 'mirrorcraft'),
      'fields'   => array(
        mirrorcraft_acf_text_field('application_section_eyebrow', 'Section Eyebrow'),
        mirrorcraft_acf_text_field('application_section_hero_title', 'Hero Title'),
        mirrorcraft_acf_text_field('application_section_hero_text', 'Hero Text', '', 'textarea'),
        mirrorcraft_acf_text_field('application_section_hero_secondary_button_text', 'Hero Secondary Button Text'),
        mirrorcraft_acf_repeater(
          'application_section_hero_chips',
          'Hero Chips',
          array(
            mirrorcraft_acf_text_field('item_text', 'Chip Text', '', 'text', 'application_section_hero_chip_text'),
          ),
          'Add Chip'
        ),
        mirrorcraft_acf_repeater(
          'application_section_hero_stats',
          'Hero Stats',
          array(
            mirrorcraft_acf_text_field('value', 'Value', '', 'text', 'application_section_hero_stat_value'),
            mirrorcraft_acf_text_field('label', 'Label', '', 'text', 'application_section_hero_stat_label'),
          ),
          'Add Stat'
        ),
        mirrorcraft_acf_image_field('application_section_image', 'Application Hero Image', 'Optional. Upload the lead image shown in the summary card.'),
        mirrorcraft_acf_text_field('application_section_focus_eyebrow', 'Focus Eyebrow'),
        mirrorcraft_acf_text_field('application_section_focus_title', 'Focus Title'),
        mirrorcraft_acf_text_field('application_section_focus_text', 'Focus Text', '', 'textarea'),
        mirrorcraft_acf_repeater(
          'application_section_focus_items',
          'Focus Items',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'application_section_focus_item_text'),
          ),
          'Add Item'
        ),
        mirrorcraft_acf_text_field('application_section_products_text', 'Products Intro Text', '', 'textarea'),
        mirrorcraft_acf_text_field('application_section_products_kicker', 'Products Kicker'),
        mirrorcraft_acf_text_field('application_section_products_button_text', 'Products Button Text'),
        mirrorcraft_acf_text_field('application_section_overview_eyebrow', 'Overview Eyebrow'),
        mirrorcraft_acf_text_field('application_section_areas_eyebrow', 'Areas Eyebrow'),
        mirrorcraft_acf_text_field('application_section_scenario_intro_title', 'Scenario Intro Title'),
        mirrorcraft_acf_text_field('application_section_scenario_intro_text', 'Scenario Intro Text', '', 'textarea'),
        mirrorcraft_acf_text_field('application_section_scenario_areas_title', 'Scenario Areas Title'),
        mirrorcraft_acf_repeater(
          'application_section_scenario_areas',
          'Scenario Areas',
          array(
            mirrorcraft_acf_text_field('area_title', 'Area Title', '', 'text', 'application_section_area_title'),
            mirrorcraft_acf_text_field('area_text', 'Area Text', '', 'textarea', 'application_section_area_text'),
            mirrorcraft_acf_image_field('area_image', 'Area Image', '', 'application_section_area_image'),
          ),
          'Add Area'
        ),
        mirrorcraft_acf_text_field('application_section_aside_kicker', 'Aside Kicker'),
        mirrorcraft_acf_text_field('application_section_aside_title', 'Aside Title'),
        mirrorcraft_acf_repeater(
          'application_section_aside_items',
          'Aside Items',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'application_section_aside_item_text'),
          ),
          'Add Item'
        ),
        mirrorcraft_acf_text_field('application_section_products_title', 'Products Title'),
        mirrorcraft_acf_repeater(
          'application_section_products',
          'Products',
          array(
            mirrorcraft_acf_text_field('item_text', 'Product Text', '', 'text', 'application_section_product_text'),
          ),
          'Add Product'
        ),
        mirrorcraft_acf_text_field('application_section_cards_eyebrow', 'Cards Eyebrow'),
        mirrorcraft_acf_text_field('application_section_cards_title', 'Cards Section Title'),
        mirrorcraft_acf_text_field('application_section_cards_text', 'Cards Section Text', '', 'textarea'),
        mirrorcraft_acf_repeater(
          'application_section_cards',
          'Cards',
          array(
            mirrorcraft_acf_text_field('item_title', 'Card Title', '', 'text', 'application_section_card_title'),
            mirrorcraft_acf_text_field('item_text', 'Card Text', '', 'textarea', 'application_section_card_text'),
          ),
          'Add Card'
        ),
        mirrorcraft_acf_text_field('application_section_recommended_eyebrow', 'Recommended Products Eyebrow'),
        mirrorcraft_acf_text_field('application_section_recommended_products_title', 'Recommended Products Title'),
        mirrorcraft_acf_text_field('application_section_recommended_products_text', 'Recommended Products Text', '', 'textarea'),
        mirrorcraft_acf_text_field('application_section_recommended_button_text', 'Recommended Products Button Text'),
        mirrorcraft_acf_text_field('application_section_recommended_secondary_text', 'Recommended Products Secondary Link Text'),
        mirrorcraft_acf_repeater(
          'application_section_recommended_products',
          'Recommended Products',
          array(
            mirrorcraft_acf_text_field('product_title', 'Product Title', '', 'text', 'application_section_recommended_product_title'),
            mirrorcraft_acf_text_field('product_text', 'Product Text', '', 'textarea', 'application_section_recommended_product_text'),
            mirrorcraft_acf_image_field('product_image', 'Product Image', '', 'application_section_recommended_product_image'),
            mirrorcraft_acf_text_field('product_link', 'Product Link', '', 'url', 'application_section_recommended_product_link'),
          ),
          'Add Product'
        ),
        mirrorcraft_acf_text_field('application_section_steps_eyebrow', 'Steps Eyebrow'),
        mirrorcraft_acf_text_field('application_section_steps_title', 'Steps Title'),
        mirrorcraft_acf_text_field('application_section_steps_text', 'Steps Text', '', 'textarea'),
        mirrorcraft_acf_repeater(
          'application_section_steps',
          'Steps',
          array(
            mirrorcraft_acf_text_field('item_title', 'Step Title', '', 'text', 'application_section_step_title'),
            mirrorcraft_acf_text_field('item_text', 'Step Text', '', 'textarea', 'application_section_step_text'),
          ),
          'Add Step'
        ),
        mirrorcraft_acf_text_field('application_section_cta_kicker', 'CTA Kicker'),
        mirrorcraft_acf_text_field('application_section_cta_title', 'CTA Title'),
        mirrorcraft_acf_text_field('application_section_cta_text', 'CTA Text', '', 'textarea'),
        mirrorcraft_acf_text_field('application_section_cta_button', 'CTA Button Text'),
        mirrorcraft_acf_text_field('application_section_secondary_button_text', 'CTA Secondary Button Text'),
        mirrorcraft_acf_text_field('application_section_related_kicker', 'Related Kicker'),
        mirrorcraft_acf_text_field('application_section_related_title', 'Related Title'),
        mirrorcraft_acf_repeater(
          'application_section_related_links',
          'Related Links',
          array(
            mirrorcraft_acf_text_field('item_text', 'Link Text', '', 'text', 'application_section_related_link_text'),
            mirrorcraft_acf_text_field('item_link', 'Link URL', '', 'url', 'application_section_related_link_url'),
          ),
          'Add Related Link'
        ),
      ),
      'location' => array(
        array(
          array(
            'param'    => 'page_template',
            'operator' => '==',
            'value'    => 'page-templates/page-application-section.php',
          ),
        ),
      ),
    )
  );

  acf_add_local_field_group(
    array(
      'key'      => 'group_mirrorcraft_site_settings',
      'title'    => __('Site Settings', 'mirrorcraft'),
      'fields'   => array(
        mirrorcraft_acf_text_field('footer_blurb', 'Footer Blurb', '', 'textarea'),
        mirrorcraft_acf_text_field('contact_email', 'Contact Email'),
        mirrorcraft_acf_text_field('contact_notification_emails', 'Notification Emails', 'Separate multiple notification emails with commas or line breaks.', 'textarea'),
        mirrorcraft_acf_text_field('contact_phone', 'Contact Phone'),
        mirrorcraft_acf_text_field('contact_whatsapp_number', 'WhatsApp Number'),
        mirrorcraft_acf_text_field('contact_whatsapp_message', 'WhatsApp Preset Message', '', 'textarea'),
        mirrorcraft_acf_text_field('contact_address', 'Contact Address', '', 'textarea'),
        mirrorcraft_acf_text_field('contact_business_hours', 'Business Hours'),
        mirrorcraft_acf_text_field('contact_map_embed_url', 'Google Maps Embed URL', 'Optional. Paste a Google Maps embed URL. Leave blank to auto-generate the map from the contact address.', 'url'),
        mirrorcraft_acf_text_field('contact_map_link', 'Google Maps Public Link', 'Optional. Paste a public Google Maps link for the map button. Leave blank to generate it from the contact address.', 'url'),
        mirrorcraft_acf_text_field('social_youtube_url', 'YouTube URL', '', 'url'),
        mirrorcraft_acf_text_field('social_facebook_url', 'Facebook URL', '', 'url'),
        mirrorcraft_acf_text_field('social_twitter_url', 'X / Twitter URL', '', 'url'),
        mirrorcraft_acf_text_field('social_instagram_url', 'Instagram URL', '', 'url'),
        mirrorcraft_acf_text_field('social_pinterest_url', 'Pinterest URL', '', 'url'),
        mirrorcraft_acf_text_field('social_linkedin_url', 'LinkedIn URL', '', 'url'),
        mirrorcraft_acf_text_field('social_tiktok_url', 'TikTok URL', '', 'url'),
      ),
      'location' => array(
        array(
          array(
            'param'    => 'options_page',
            'operator' => '==',
            'value'    => 'mirrorcraft-site-settings',
          ),
        ),
      ),
    )
  );

  acf_add_local_field_group(
    array(
      'key'      => 'group_mirrorcraft_product_category_page',
      'title'    => __('Product Category Page Content', 'mirrorcraft'),
      'fields'   => array(
        mirrorcraft_acf_text_field('category_hero_eyebrow', 'Category Hero Eyebrow'),
        mirrorcraft_acf_text_field('category_intro', 'Category Intro', '', 'textarea'),
        mirrorcraft_acf_text_field('category_hero_lead', 'Category Hero Lead', '', 'textarea'),
        mirrorcraft_acf_text_field('category_primary_button_text', 'Category Primary Button Text'),
        mirrorcraft_acf_text_field('category_secondary_button_text', 'Category Secondary Button Text'),
        mirrorcraft_acf_image_field('category_hero_image', 'Category Hero Image', 'Optional. Upload the main hero image shown at the top of the category page.'),
        mirrorcraft_acf_text_field('overview_title', 'Overview Title'),
        mirrorcraft_acf_text_field('overview_text', 'Overview Text', '', 'textarea'),
        mirrorcraft_acf_text_field('key_features_title', 'Key Features Title'),
        mirrorcraft_acf_text_field('key_features_heading', 'Key Features Heading'),
        mirrorcraft_acf_repeater(
          'key_features_items',
          'Key Features Items',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'key_features_item_text'),
          ),
          'Add Feature'
        ),
        mirrorcraft_acf_text_field('custom_options_title', 'Custom Options Title'),
        mirrorcraft_acf_text_field('custom_options_heading', 'Custom Options Heading'),
        mirrorcraft_acf_repeater(
          'custom_options_items',
          'Custom Options Items',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'custom_options_item_text'),
          ),
          'Add Option'
        ),
        mirrorcraft_acf_text_field('use_case_eyebrow', 'Use Case Eyebrow'),
        mirrorcraft_acf_text_field('use_case_title', 'Use Case Title'),
        mirrorcraft_acf_repeater(
          'use_case_items',
          'Use Case Items',
          array(
            mirrorcraft_acf_text_field('item_text', 'Item Text', '', 'text', 'use_case_item_text'),
          ),
          'Add Use Case'
        ),
        mirrorcraft_acf_text_field('closing_text', 'Closing Text', '', 'textarea'),
        mirrorcraft_acf_text_field('category_aside_kicker', 'Category Aside Kicker'),
        mirrorcraft_acf_text_field('category_aside_title', 'Category Aside Title'),
        mirrorcraft_acf_text_field('category_aside_text', 'Category Aside Text', '', 'textarea'),
        mirrorcraft_acf_text_field('category_aside_button_text', 'Category Aside Button Text'),
      ),
      'location' => array(
        array(
          array(
            'param'    => 'page_template',
            'operator' => '==',
            'value'    => 'page-templates/page-product-category.php',
          ),
        ),
      ),
    )
  );
}
add_action('acf/init', 'mirrorcraft_register_acf_notice');
