<?php
/*
Template Name: Projects Page
*/

if (!function_exists('mirrorcraft_render_projects_page_icon')) {
  function mirrorcraft_render_projects_page_icon($slug) {
    switch ($slug) {
      case 'all':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <rect x="4" y="4" width="6" height="6" rx="1.2" fill="none" stroke="currentColor" stroke-width="1.8"/>
          <rect x="14" y="4" width="6" height="6" rx="1.2" fill="none" stroke="currentColor" stroke-width="1.8"/>
          <rect x="4" y="14" width="6" height="6" rx="1.2" fill="none" stroke="currentColor" stroke-width="1.8"/>
          <rect x="14" y="14" width="6" height="6" rx="1.2" fill="none" stroke="currentColor" stroke-width="1.8"/>
        </svg>
        <?php
        break;
      case 'hospitality':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" d="M4 20V7.5A1.5 1.5 0 0 1 5.5 6H12v14H4Zm8-10h6.5A1.5 1.5 0 0 1 20 11.5V20h-8V10Z"/>
          <path fill="currentColor" d="M7 9h2v2H7zm0 4h2v2H7zm8 0h2v2h-2zm0 4h2v2h-2z"/>
        </svg>
        <?php
        break;
      case 'residential':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" d="M5 10.5 12 4l7 6.5V20h-5v-5H10v5H5v-9.5Z"/>
        </svg>
        <?php
        break;
      case 'commercial':
      case 'real-estate':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" d="M4 20V7.5A1.5 1.5 0 0 1 5.5 6H11v14H4Zm9-17h5.5A1.5 1.5 0 0 1 20 4.5V20h-7V3Z"/>
          <path fill="currentColor" d="M7 9h1.8v1.8H7zm0 3.5h1.8v1.8H7zm7.5-4.5h1.8v1.8h-1.8zm0 3.5h1.8v1.8h-1.8zm0 3.5h1.8v1.8h-1.8z"/>
        </svg>
        <?php
        break;
      case 'healthcare':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" d="M12 4v16M4 12h16"/>
          <circle cx="12" cy="12" r="8" fill="none" stroke="currentColor" stroke-width="1.8"/>
        </svg>
        <?php
        break;
      case 'beauty':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" d="M12 4c.8 2.9 2.1 4.5 4.8 5.2-2.7.7-4 2.3-4.8 5.2-.8-2.9-2.1-4.5-4.8-5.2C9.9 8.5 11.2 6.9 12 4Zm6 8c.5 1.8 1.3 2.8 3 3.2-1.7.4-2.5 1.4-3 3.2-.5-1.8-1.3-2.8-3-3.2 1.7-.4 2.5-1.4 3-3.2ZM6 12c.5 1.8 1.3 2.8 3 3.2-1.7.4-2.5 1.4-3 3.2-.5-1.8-1.3-2.8-3-3.2 1.7-.4 2.5-1.4 3-3.2Z"/>
        </svg>
        <?php
        break;
      case 'cruise':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" d="M4 14h16l-2 4H6l-2-4Zm4-6h8v6H8V8Zm2-3h4v3h-4V5Zm-4 13c1.4 1 2.7 1.5 4 1.5s2.6-.5 4-1.5c1.4 1 2.7 1.5 4 1.5"/>
        </svg>
        <?php
        break;
      case 'location':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" d="M12 21s6-5.33 6-11a6 6 0 1 0-12 0c0 5.67 6 11 6 11Z"/>
          <circle cx="12" cy="10" r="2.3" fill="none" stroke="currentColor" stroke-width="1.8"/>
        </svg>
        <?php
        break;
      case 'product':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" d="M12 3 4.5 7.25v9.5L12 21l7.5-4.25v-9.5L12 3Zm0 0v9.5m7.5-5.25L12 12.5 4.5 7.25"/>
        </svg>
        <?php
        break;
      case 'scale':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" d="M6 18h12M7 14V7m5 11V5m5 13v-9"/>
          <circle cx="7" cy="7" r="1.2" fill="currentColor"/>
          <circle cx="12" cy="5" r="1.2" fill="currentColor"/>
          <circle cx="17" cy="9" r="1.2" fill="currentColor"/>
        </svg>
        <?php
        break;
      case 'consultation':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" d="M5 5h14v10H9l-4 4V5Zm4 4h6m-6 3h4"/>
        </svg>
        <?php
        break;
      case 'design':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" d="m4 20 4.5-1 9-9-3.5-3.5-9 9L4 20Zm10-13.5 3.5 3.5"/>
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" d="M13 4h7M17 2v4"/>
        </svg>
        <?php
        break;
      case 'quality':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" d="M12 3 5.5 5.5v5.7c0 4 2.6 7.6 6.5 9.8 3.9-2.2 6.5-5.8 6.5-9.8V5.5L12 3Z"/>
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" d="m9.2 11.8 1.9 1.9 3.9-4.3"/>
        </svg>
        <?php
        break;
      case 'delivery':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" d="M3 7h10v8H3V7Zm10 2h4l3 3v3h-7V9Zm2 9a1.8 1.8 0 1 0 0 3.6 1.8 1.8 0 0 0 0-3.6Zm-8 0a1.8 1.8 0 1 0 0 3.6 1.8 1.8 0 0 0 0-3.6Z"/>
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
      case 'quote':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round" d="M7 3h8l4 4v14H7V3Zm7 1.5V8h3.5"/>
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" d="M10 12h6M10 16h4"/>
        </svg>
        <?php
        break;
      case 'support':
        ?>
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <path fill="none" stroke="currentColor" stroke-width="1.8" d="M12 3a8 8 0 0 0-8 8v3a2 2 0 0 0 2 2h1v-5H6v-1a6 6 0 1 1 12 0v1h-1v5h1a2 2 0 0 0 2-2v-3a8 8 0 0 0-8-8Z"/>
          <path fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" d="M10 20h4"/>
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

$projects_quote_url   = mirrorcraft_link_by_slug('contact', '/contact/');
$projects_contact_url = $projects_quote_url;
$projects_about_url   = mirrorcraft_link_by_slug('about', '/about/');

$projects_hero_image = mirrorcraft_theme_image_optimized_url('commercial-washroom-led-mirror.png');

if ($projects_hero_image === '') {
  $projects_hero_image = mirrorcraft_theme_image_optimized_url('real-estate-bathroom-mirror.png');
}

$project_categories = array(
  array('icon' => 'all', 'label' => __('All Projects', 'mirrorcraft'), 'active' => true),
  array('icon' => 'hospitality', 'label' => __('Hospitality', 'mirrorcraft')),
  array('icon' => 'residential', 'label' => __('Residential', 'mirrorcraft')),
  array('icon' => 'commercial', 'label' => __('Commercial', 'mirrorcraft')),
  array('icon' => 'real-estate', 'label' => __('Real Estate', 'mirrorcraft')),
  array('icon' => 'healthcare', 'label' => __('Healthcare', 'mirrorcraft')),
  array('icon' => 'beauty', 'label' => __('Beauty & Salon', 'mirrorcraft')),
  array('icon' => 'cruise', 'label' => __('Cruise & Marine', 'mirrorcraft')),
);

$project_cards = array(
  array(
    'title'       => __('Luxury Hotel Project', 'mirrorcraft'),
    'location'    => __('Dubai, UAE', 'mirrorcraft'),
    'application' => __('Hotel', 'mirrorcraft'),
    'products'    => __('LED Mirror, Mirror Cabinet', 'mirrorcraft'),
    'scale'       => __('320 Rooms', 'mirrorcraft'),
    'image'       => mirrorcraft_theme_image_optimized_url('hospitality-led-mirror-project.png'),
  ),
  array(
    'title'       => __('Residential Project', 'mirrorcraft'),
    'location'    => __('California, USA', 'mirrorcraft'),
    'application' => __('Apartment', 'mirrorcraft'),
    'products'    => __('LED Mirror', 'mirrorcraft'),
    'scale'       => __('280 Units', 'mirrorcraft'),
    'image'       => mirrorcraft_theme_image_optimized_url('residential-led-bathroom-mirror.png'),
  ),
  array(
    'title'       => __('Commercial Project', 'mirrorcraft'),
    'location'    => __('London, UK', 'mirrorcraft'),
    'application' => __('Office Building', 'mirrorcraft'),
    'products'    => __('LED Mirror', 'mirrorcraft'),
    'scale'       => __('45 Floors', 'mirrorcraft'),
    'image'       => mirrorcraft_theme_image_optimized_url('commercial-washroom-led-mirror.png'),
  ),
  array(
    'title'       => __('Beauty Salon Project', 'mirrorcraft'),
    'location'    => __('Berlin, Germany', 'mirrorcraft'),
    'application' => __('Beauty & Salon', 'mirrorcraft'),
    'products'    => __('Smart Touch / Dimmable / Anti-fog', 'mirrorcraft'),
    'scale'       => __('120 Sets', 'mirrorcraft'),
    'image'       => mirrorcraft_theme_image_optimized_url('beauty-salon-led-mirror.png'),
  ),
);

$project_stats = array(
  array('icon' => 'globe', 'value' => '120+', 'label' => __('Projects Completed', 'mirrorcraft')),
  array('icon' => 'globe', 'value' => '30+', 'label' => __('Countries Covered', 'mirrorcraft')),
  array('icon' => 'product', 'value' => '500,000+', 'label' => __('Mirrors Installed', 'mirrorcraft')),
  array('icon' => 'support', 'value' => '98%', 'label' => __('Client Satisfaction', 'mirrorcraft')),
);

$project_process = array(
  array(
    'icon'  => 'consultation',
    'title' => __('Project Consultation', 'mirrorcraft'),
    'text'  => __('Understand your requirements and provide professional solutions.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'design',
    'title' => __('Design & Customization', 'mirrorcraft'),
    'text'  => __('Tailored designs and custom-made solutions for your project.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'quality',
    'title' => __('Production & QC', 'mirrorcraft'),
    'text'  => __('Strict quality control in every step of manufacturing.', 'mirrorcraft'),
  ),
  array(
    'icon'  => 'delivery',
    'title' => __('Delivery & Support', 'mirrorcraft'),
    'text'  => __('Safe delivery and after-sales support for every project.', 'mirrorcraft'),
  ),
);

$project_reason_cards = array(
  array(
    'title' => __('Advanced Production Equipment', 'mirrorcraft'),
    'image' => mirrorcraft_theme_image_optimized_url('who-we-are-workshop.png'),
  ),
  array(
    'title' => __('Strict Quality Control', 'mirrorcraft'),
    'image' => mirrorcraft_theme_image_optimized_url('who-we-are-inspection.png'),
  ),
  array(
    'title' => __('Safe & Professional Packaging', 'mirrorcraft'),
    'image' => mirrorcraft_theme_image_optimized_url('who-we-are-warehouse.png'),
  ),
  array(
    'title' => __('Global Delivery Service', 'mirrorcraft'),
    'image' => mirrorcraft_theme_image_optimized_url('factory.png'),
  ),
);

$project_testimonials = array(
  array(
    'quote'  => __('The LED mirrors from OJMIRROR exceeded our expectations in both quality and design. A reliable partner for our hotel projects.', 'mirrorcraft'),
    'name'   => __('Project Manager', 'mirrorcraft'),
    'role'   => __('5 Star Hotel, Turkey', 'mirrorcraft'),
  ),
  array(
    'quote'  => __('Great communication and professional team. The products were delivered on time and the quality is always consistent.', 'mirrorcraft'),
    'name'   => __('Procurement Director', 'mirrorcraft'),
    'role'   => __('Real Estate Company, USA', 'mirrorcraft'),
  ),
  array(
    'quote'  => __('We have worked with many suppliers, but OJMIRROR is the one we can trust for long term cooperation.', 'mirrorcraft'),
    'name'   => __('CEO', 'mirrorcraft'),
    'role'   => __('Bathroom Solution Company, UK', 'mirrorcraft'),
  ),
);
?>
<main id="site-main" class="site-main page-shell projects-page" tabindex="-1">
  <section class="section projects-page-hero">
    <div class="shell projects-page-hero__shell">
      <div class="projects-page-hero__copy">
        <p class="projects-page__eyebrow"><?php esc_html_e('Projects', 'mirrorcraft'); ?></p>
        <h1><?php esc_html_e('Global Projects, Proven Quality', 'mirrorcraft'); ?></h1>
        <p><?php esc_html_e('We provide high-quality LED mirrors and bathroom solutions for hotels, residential, commercial, and public projects worldwide.', 'mirrorcraft'); ?></p>
      </div>
      <div class="projects-page-hero__media">
        <?php if ($projects_hero_image !== '') : ?>
          <img src="<?php echo esc_url($projects_hero_image); ?>" alt="<?php esc_attr_e('Global mirror installation projects', 'mirrorcraft'); ?>" loading="eager" fetchpriority="high" decoding="async">
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="section projects-page-categories">
    <div class="shell">
      <div class="projects-page-heading projects-page-heading--center">
        <h2><?php esc_html_e('Project Categories', 'mirrorcraft'); ?></h2>
      </div>
      <div class="projects-page-category-nav" role="list" aria-label="<?php esc_attr_e('Project categories', 'mirrorcraft'); ?>">
        <?php foreach ($project_categories as $category) : ?>
          <article class="projects-page-category-chip<?php echo !empty($category['active']) ? ' is-active' : ''; ?>" role="listitem">
            <span class="projects-page-category-chip__icon" aria-hidden="true"><?php mirrorcraft_render_projects_page_icon($category['icon']); ?></span>
            <span><?php echo esc_html($category['label']); ?></span>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section projects-page-showcase">
    <div class="shell">
      <div class="projects-page-card-grid">
        <?php foreach ($project_cards as $card) : ?>
          <article class="projects-page-card">
            <?php if (!empty($card['image'])) : ?>
              <figure class="projects-page-card__media">
                <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
              </figure>
            <?php endif; ?>
            <div class="projects-page-card__body">
              <h3><?php echo esc_html($card['title']); ?></h3>
              <p class="projects-page-card__location"><?php echo esc_html($card['location']); ?></p>
              <ul class="projects-page-card__meta">
                <li><span aria-hidden="true"><?php mirrorcraft_render_projects_page_icon('location'); ?></span><strong><?php esc_html_e('Location', 'mirrorcraft'); ?></strong><span><?php echo esc_html($card['location']); ?></span></li>
                <li><span aria-hidden="true"><?php mirrorcraft_render_projects_page_icon('consultation'); ?></span><strong><?php esc_html_e('Application', 'mirrorcraft'); ?></strong><span><?php echo esc_html($card['application']); ?></span></li>
                <li><span aria-hidden="true"><?php mirrorcraft_render_projects_page_icon('product'); ?></span><strong><?php esc_html_e('Products', 'mirrorcraft'); ?></strong><span><?php echo esc_html($card['products']); ?></span></li>
                <li><span aria-hidden="true"><?php mirrorcraft_render_projects_page_icon('scale'); ?></span><strong><?php esc_html_e('Project Scale', 'mirrorcraft'); ?></strong><span><?php echo esc_html($card['scale']); ?></span></li>
              </ul>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
      <div class="projects-page-showcase__actions">
        <a class="button button-secondary" href="<?php echo esc_url($projects_contact_url); ?>"><?php esc_html_e('View More Projects', 'mirrorcraft'); ?></a>
      </div>
    </div>
  </section>

  <section class="section projects-page-stats">
    <div class="shell projects-page-stats__shell">
      <?php foreach ($project_stats as $stat) : ?>
        <article class="projects-page-stat">
          <span class="projects-page-stat__icon" aria-hidden="true"><?php mirrorcraft_render_projects_page_icon($stat['icon']); ?></span>
          <strong><?php echo esc_html($stat['value']); ?></strong>
          <span><?php echo esc_html($stat['label']); ?></span>
        </article>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="section projects-page-process">
    <div class="shell">
      <div class="projects-page-heading projects-page-heading--center">
        <h2><?php esc_html_e('Our Project Process', 'mirrorcraft'); ?></h2>
      </div>
      <div class="projects-page-process__grid">
        <?php foreach ($project_process as $index => $step) : ?>
          <article class="projects-page-step">
            <span class="projects-page-step__number"><?php echo esc_html(sprintf('%02d', $index + 1)); ?></span>
            <span class="projects-page-step__icon" aria-hidden="true"><?php mirrorcraft_render_projects_page_icon($step['icon']); ?></span>
            <h3><?php echo esc_html($step['title']); ?></h3>
            <p><?php echo esc_html($step['text']); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section projects-page-reasons">
    <div class="shell projects-page-reasons__shell">
      <div class="projects-page-reasons__intro">
        <p class="projects-page__section-label"><?php esc_html_e('Why Choose Us', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('Reliable Partner for Your Projects', 'mirrorcraft'); ?></h2>
        <ul class="projects-page-reasons__list">
          <li><?php esc_html_e('16+ years of manufacturing experience', 'mirrorcraft'); ?></li>
          <li><?php esc_html_e('OEM & ODM services available', 'mirrorcraft'); ?></li>
          <li><?php esc_html_e('Strict quality control system', 'mirrorcraft'); ?></li>
          <li><?php esc_html_e('Professional project solutions', 'mirrorcraft'); ?></li>
          <li><?php esc_html_e('On-time delivery guarantee', 'mirrorcraft'); ?></li>
        </ul>
        <a class="button button-secondary" href="<?php echo esc_url($projects_about_url); ?>"><?php esc_html_e('Learn More About Us', 'mirrorcraft'); ?></a>
      </div>

      <div class="projects-page-reasons__grid">
        <?php foreach ($project_reason_cards as $card) : ?>
          <article class="projects-page-reason-card">
            <?php if (!empty($card['image'])) : ?>
              <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" loading="lazy" decoding="async">
            <?php endif; ?>
            <span><?php echo esc_html($card['title']); ?></span>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section projects-page-testimonials">
    <div class="shell">
      <div class="projects-page-heading projects-page-heading--center">
        <h2><?php esc_html_e('What Our Clients Say', 'mirrorcraft'); ?></h2>
      </div>
      <div class="projects-page-testimonials__grid">
        <?php foreach ($project_testimonials as $item) : ?>
          <article class="projects-page-testimonial-card">
            <span class="projects-page-testimonial-card__quote">“</span>
            <p><?php echo esc_html($item['quote']); ?></p>
            <footer>
              <strong><?php echo esc_html($item['name']); ?></strong>
              <span><?php echo esc_html($item['role']); ?></span>
            </footer>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section projects-page-cta">
    <div class="shell projects-page-cta__shell">
      <div>
        <p class="projects-page__section-label"><?php esc_html_e('Have a Project in Mind?', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('Let’s work together to create amazing spaces.', 'mirrorcraft'); ?></h2>
        <p><?php esc_html_e('Send your size, function, quantity, and application. We will recommend suitable models or provide custom solutions for you.', 'mirrorcraft'); ?></p>
      </div>
      <div class="projects-page-cta__actions">
        <a class="button button-primary" href="<?php echo esc_url($projects_quote_url); ?>"><?php esc_html_e('Get a Quote', 'mirrorcraft'); ?></a>
        <a class="button button-secondary" href="<?php echo esc_url($projects_contact_url); ?>"><?php esc_html_e('Contact Our Team', 'mirrorcraft'); ?></a>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();
