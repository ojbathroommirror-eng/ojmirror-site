<?php

function mirrorcraft_customize_register($wp_customize) {
  $wp_customize->add_section(
    'mirrorcraft_branding',
    array(
      'title'    => __('MirrorCraft Branding', 'mirrorcraft'),
      'priority' => 30,
    )
  );

  $wp_customize->add_setting(
    'mirrorcraft_footer_blurb',
    array(
      'default'           => 'OJMIRROR supplies LED bathroom mirrors and lighted medicine cabinets for hospitality, commercial, multifamily, healthcare, and senior living projects.',
      'sanitize_callback' => 'sanitize_text_field',
    )
  );

  $wp_customize->add_control(
    'mirrorcraft_footer_blurb',
    array(
      'label'   => __('Footer blurb', 'mirrorcraft'),
      'section' => 'mirrorcraft_branding',
      'type'    => 'text',
    )
  );
}
add_action('customize_register', 'mirrorcraft_customize_register');
