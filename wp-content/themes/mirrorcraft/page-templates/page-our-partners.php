<?php
/*
Template Name: Our Partners Page
*/

if (!function_exists('mirrorcraft_render_partners_page_icon')) {
  function mirrorcraft_render_partners_page_icon($slug) {
    switch ($slug) {
      case 'globe':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2Zm6.93 9h-3.17a15.7 15.7 0 0 0-1.07-4.39A8.05 8.05 0 0 1 18.93 11ZM12 4.07c.86 1.06 1.8 3.2 2.12 6.93H9.88C10.2 7.27 11.14 5.13 12 4.07ZM4.26 13h3.18a15.7 15.7 0 0 0 1.06 4.39A8.03 8.03 0 0 1 4.26 13Zm3.18-2H4.26a8.03 8.03 0 0 1 4.24-4.39A15.7 15.7 0 0 0 7.44 11Zm4.56 8.93c-.86-1.06-1.8-3.2-2.12-6.93h4.24c-.32 3.73-1.26 5.87-2.12 6.93ZM15.5 17.39A15.7 15.7 0 0 0 16.56 13h3.17a8.05 8.05 0 0 1-4.23 4.39Z"/>
        </svg>
        <?php
        break;
      case 'shield':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" d="M12 3 5.5 5.5v5.7c0 4 2.6 7.6 6.5 9.8 3.9-2.2 6.5-5.8 6.5-9.8V5.5L12 3Z"/>
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" d="m9.2 11.8 1.9 1.9 3.9-4.3"/>
        </svg>
        <?php
        break;
      case 'partnership':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" d="M8 12a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7Zm8 0a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7ZM3.5 20a4.5 4.5 0 0 1 9 0m2 0a4.5 4.5 0 0 1 9 0"/>
        </svg>
        <?php
        break;
      case 'experience':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" d="M12 3 4.5 6v5.8c0 4.1 2.7 7.8 7.5 10.2 4.8-2.4 7.5-6.1 7.5-10.2V6L12 3Z"/>
          <path fill="none" stroke="currentColor" stroke-width="1.8" d="m9.8 13.2 1.7 1.7 3.7-4"/>
        </svg>
        <?php
        break;
      case 'delivered':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" d="M4 20V7.5A1.5 1.5 0 0 1 5.5 6H11v14H4Zm9-17h5.5A1.5 1.5 0 0 1 20 4.5V20h-7V3Z"/>
          <path fill="currentColor" d="M7 9h1.8v1.8H7zm0 3.5h1.8v1.8H7zm7.5-4.5h1.8v1.8h-1.8zm0 3.5h1.8v1.8h-1.8z"/>
        </svg>
        <?php
        break;
      case 'countries':
        ?>
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2Zm0 0c2 2.1 3.2 5.7 3.2 10S14 19.9 12 22m0-20c-2 2.1-3.2 5.7-3.2 10S10 19.9 12 22M2 12h20"/>
        </svg>
        <?php
        break;
      case 'oem':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" d="m4 19 6.5-6.5M13.5 9.5 20 3M8 6l2 2m6 6 2 2m-5.5-2.5 2-2m-6.5 8 2-2"/>
        </svg>
        <?php
        break;
      default:
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <circle cx="12" cy="12" r="8" fill="none" stroke="currentColor" stroke-width="1.8"/>
        </svg>
        <?php
    }
  }
}

get_header();

$partners_quote_url   = mirrorcraft_link_by_slug('contact', '/contact/');
$partners_contact_url = $partners_quote_url;
$partners_projects_url = mirrorcraft_link_by_slug('projects', '/projects/');

$partners_hero_image = mirrorcraft_theme_image_optimized_url('home-hero-banner-20260423c.jpg');

if ($partners_hero_image === '') {
  $partners_hero_image = mirrorcraft_theme_image_optimized_url('home-hero-banner-20260423c.webp');
}

if ($partners_hero_image === '') {
  $partners_hero_image = mirrorcraft_theme_image_optimized_url('commercial-washroom-led-mirror.png');
}

$partner_highlights = array(
  array(
    'icon'  => 'globe',
    'title' => __('Global Reach', 'mirrorcraft'),
    'text'  => __('Serving clients in 30+ countries', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'shield',
    'title' => __('Reliable Quality', 'mirrorcraft'),
    'text'  => __('Premium materials and strict QC', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'partnership',
    'title' => __('Long-term Partnership', 'mirrorcraft'),
    'text'  => __('Growing together with our clients', 'mirrorcraft'),
  ),
);

$partner_logos = array(
  'Marriott',
  'Hilton',
  'Accor',
  'Wyndham',
  'JLL',
  'Crowne Plaza',
  'Sheraton',
  'Four Seasons',
  'Hyatt',
  'Radisson',
  'Westin',
  'IHG',
);

$partner_projects = array(
  array(
    'title'    => __('Luxury Hotel Project – UAE', 'mirrorcraft'),
    'location' => __('Dubai, UAE', 'mirrorcraft'),
    'supply'   => __('500+ LED Mirrors Supplied', 'mirrorcraft'),
    'spec'     => __('Custom Design / Anti-fog / Touch Sensor', 'mirrorcraft'),
    'time'     => __('Completed in 35 Days', 'mirrorcraft'),
    'image'    => mirrorcraft_theme_image_optimized_url('hospitality-led-mirror-project.png'),
  ),
  array(
    'title'    => __('Residential Project – USA', 'mirrorcraft'),
    'location' => __('California, USA', 'mirrorcraft'),
    'supply'   => __('1,200+ Units', 'mirrorcraft'),
    'spec'     => __('OEM Design / UL Certified', 'mirrorcraft'),
    'time'     => __('Completed in 45 Days', 'mirrorcraft'),
    'image'    => mirrorcraft_theme_image_optimized_url('residential-led-bathroom-mirror.png'),
  ),
  array(
    'title'    => __('Salon Chain Project – Europe', 'mirrorcraft'),
    'location' => __('Berlin, Germany', 'mirrorcraft'),
    'supply'   => __('300+ LED Mirrors', 'mirrorcraft'),
    'spec'     => __('Smart Touch / Dimmable / Anti-fog', 'mirrorcraft'),
    'time'     => __('Completed in 30 Days', 'mirrorcraft'),
    'image'    => mirrorcraft_theme_image_optimized_url('beauty-salon-led-mirror.png'),
  ),
);

$partner_stats = array(
  array('icon' => 'experience', 'value' => '10+', 'label' => __('Years Experience', 'mirrorcraft')),
  array('icon' => 'delivered', 'value' => '200+', 'label' => __('Projects Delivered', 'mirrorcraft')),
  array('icon' => 'countries', 'value' => '30+', 'label' => __('Countries Served', 'mirrorcraft')),
  array('icon' => 'oem', 'value' => 'OEM/ODM', 'label' => __('Supported', 'mirrorcraft')),
);
?>
<main id="site-main" class="site-main page-shell partners-page" tabindex="-1">
  <section class="section partners-page-hero">
    <div class="shell partners-page-hero__shell">
      <div class="partners-page-hero__copy">
        <p class="partners-page__eyebrow"><?php esc_html_e('Our Partners', 'mirrorcraft'); ?></p>
        <h1><?php esc_html_e('Trusted by Global Clients Worldwide', 'mirrorcraft'); ?></h1>
        <p><?php esc_html_e('We are proud to collaborate with leading brands, developers, and businesses across the world, delivering premium LED mirror solutions for their projects.', 'mirrorcraft'); ?></p>
        <div class="partners-page-hero__highlights">
          <?php foreach ($partner_highlights as $highlight) : ?>
            <article class="partners-page-highlight">
              <span class="partners-page-highlight__icon" aria-hidden="true"><?php mirrorcraft_render_partners_page_icon($highlight['icon']); ?></span>
              <div>
                <strong><?php echo esc_html($highlight['title']); ?></strong>
                <span><?php echo esc_html($highlight['text']); ?></span>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="partners-page-hero__media">
        <?php if ($partners_hero_image !== '') : ?>
          <img src="<?php echo esc_url($partners_hero_image); ?>" alt="<?php esc_attr_e('Trusted partner bathroom mirror project', 'mirrorcraft'); ?>" loading="eager" fetchpriority="high" decoding="async">
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="section partners-page-brands">
    <div class="shell">
      <div class="partners-page-heading partners-page-heading--center">
        <h2><?php esc_html_e('Trusted by Leading Brands', 'mirrorcraft'); ?></h2>
      </div>
      <div class="partners-page-brand-grid">
        <?php foreach ($partner_logos as $logo) : ?>
          <article class="partners-page-brand"><?php echo esc_html($logo); ?></article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section partners-page-projects">
    <div class="shell">
      <div class="partners-page-heading partners-page-heading--center">
        <h2><?php esc_html_e('Successful Projects Together', 'mirrorcraft'); ?></h2>
      </div>
      <div class="partners-page-project-grid">
        <?php foreach ($partner_projects as $project) : ?>
          <article class="partners-page-project-card">
            <?php if (!empty($project['image'])) : ?>
              <figure class="partners-page-project-card__media">
                <img src="<?php echo esc_url($project['image']); ?>" alt="<?php echo esc_attr($project['title']); ?>" loading="lazy" decoding="async">
              </figure>
            <?php endif; ?>
            <div class="partners-page-project-card__body">
              <h3><?php echo esc_html($project['title']); ?></h3>
              <ul>
                <li><?php echo esc_html($project['location']); ?></li>
                <li><?php echo esc_html($project['supply']); ?></li>
                <li><?php echo esc_html($project['spec']); ?></li>
                <li><?php echo esc_html($project['time']); ?></li>
              </ul>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
      <div class="partners-page-projects__actions">
        <a class="button button-secondary" href="<?php echo esc_url($partners_projects_url); ?>"><?php esc_html_e('View More Projects', 'mirrorcraft'); ?></a>
      </div>
    </div>
  </section>

  <section class="section partners-page-stats">
    <div class="shell partners-page-stats__shell">
      <?php foreach ($partner_stats as $stat) : ?>
        <article class="partners-page-stat">
          <span class="partners-page-stat__icon" aria-hidden="true"><?php mirrorcraft_render_partners_page_icon($stat['icon']); ?></span>
          <strong><?php echo esc_html($stat['value']); ?></strong>
          <span><?php echo esc_html($stat['label']); ?></span>
        </article>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="section partners-page-cta">
    <div class="shell partners-page-cta__shell">
      <div>
        <p class="partners-page__section-label"><?php esc_html_e('Start Your Project with a Trusted Manufacturer', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('We provide premium LED mirror solutions tailored to your project needs.', 'mirrorcraft'); ?></h2>
      </div>
      <div class="partners-page-cta__actions">
        <a class="button button-primary" href="<?php echo esc_url($partners_quote_url); ?>"><?php esc_html_e('Get a Quote', 'mirrorcraft'); ?></a>
        <a class="button button-secondary" href="<?php echo esc_url($partners_contact_url); ?>"><?php esc_html_e('Contact Us', 'mirrorcraft'); ?></a>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();
