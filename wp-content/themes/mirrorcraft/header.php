<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#site-main"><?php esc_html_e('Skip to content', 'mirrorcraft'); ?></a>
<header class="site-header" data-site-header>
  <div class="announcement-bar">
    <div class="shell announcement-shell">
      <p><?php esc_html_e('OEM / ODM LED mirrors, lighted medicine cabinets, and project-ready quote support for global B2B buyers.', 'mirrorcraft'); ?></p>
    </div>
  </div>
  <div class="shell header-shell">
    <div class="site-brand">
      <?php mirrorcraft_render_brand_logo(); ?>
    </div>

    <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="site-navigation" data-nav-toggle>
      <span class="nav-toggle-box" aria-hidden="true">
        <span class="nav-toggle-line"></span>
        <span class="nav-toggle-line"></span>
        <span class="nav-toggle-line"></span>
      </span>
      <span class="nav-toggle-text"><?php esc_html_e('Menu', 'mirrorcraft'); ?></span>
    </button>

    <nav id="site-navigation" class="site-nav" aria-label="<?php esc_attr_e('Primary Menu', 'mirrorcraft'); ?>" data-nav>
      <?php mirrorcraft_rebuild_fallback_menu(); ?>
    </nav>

    <div class="header-actions">
      <a class="button button-primary" href="<?php echo esc_url(mirrorcraft_link_by_slug('contact', '/contact/')); ?>">
        <?php esc_html_e('Request a Quote', 'mirrorcraft'); ?>
      </a>
    </div>
  </div>
</header>
