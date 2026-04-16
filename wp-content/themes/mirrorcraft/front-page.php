<?php
get_header();

$contact_url = mirrorcraft_link_by_slug('contact', '/contact/');
$products_url = mirrorcraft_link_by_slug('products', '/products/');
$applications_url = mirrorcraft_link_by_slug('applications', '/applications/');
$projects_url = mirrorcraft_link_by_slug('projects', '/projects/');
$hero_image = mirrorcraft_theme_image_url('hero-bathroom-led-scene-hero.jpg');
$product_cards = mirrorcraft_get_product_family_cards();
$application_cards = mirrorcraft_get_application_cards();
$process_steps = mirrorcraft_get_process_steps();
$faq_items = mirrorcraft_get_faq_items();
?>
<main id="site-main" class="site-main" tabindex="-1">
  <section class="hero-section">
    <div class="shell hero-shell">
      <div class="hero-copy">
        <p class="eyebrow"><?php esc_html_e('New OJMIRROR', 'mirrorcraft'); ?></p>
        <h1><?php esc_html_e('Custom LED mirror programs built for projects, brands, and repeat procurement.', 'mirrorcraft'); ?></h1>
        <p class="hero-lead"><?php esc_html_e('We rebuilt the site around what buyers actually need: product-family clarity, manufacturing capability, quote-ready conversations, and a faster path from idea to shipment.', 'mirrorcraft'); ?></p>

        <div class="button-row">
          <a class="button button-primary" href="<?php echo esc_url($contact_url); ?>"><?php esc_html_e('Start a Quote', 'mirrorcraft'); ?></a>
          <a class="button button-secondary" href="<?php echo esc_url($products_url); ?>"><?php esc_html_e('Browse Product Lines', 'mirrorcraft'); ?></a>
        </div>

        <div class="metric-grid">
          <article class="metric-card">
            <strong><?php esc_html_e('Project Ready', 'mirrorcraft'); ?></strong>
            <span><?php esc_html_e('Structured for real procurement and specification conversations.', 'mirrorcraft'); ?></span>
          </article>
          <article class="metric-card">
            <strong><?php esc_html_e('OEM / ODM', 'mirrorcraft'); ?></strong>
            <span><?php esc_html_e('Custom feature mixes, branded programs, and private label development.', 'mirrorcraft'); ?></span>
          </article>
          <article class="metric-card">
            <strong><?php esc_html_e('Mirror + Cabinet', 'mirrorcraft'); ?></strong>
            <span><?php esc_html_e('Bathroom mirrors, medicine cabinets, vanity, and custom-format routes.', 'mirrorcraft'); ?></span>
          </article>
        </div>
      </div>

      <div class="hero-visual">
        <div class="hero-media-card">
          <img src="<?php echo esc_url($hero_image); ?>" alt="<?php esc_attr_e('Custom LED bathroom mirror installation', 'mirrorcraft'); ?>" width="1400" height="1600" loading="eager" decoding="async">
        </div>
        <div class="hero-note hero-note-primary">
          <span class="hero-note-label"><?php esc_html_e('What changed', 'mirrorcraft'); ?></span>
          <p><?php esc_html_e('Less brochure language. More product direction, applications, and quote-ready clarity.', 'mirrorcraft'); ?></p>
        </div>
        <div class="hero-note hero-note-secondary">
          <span class="hero-note-label"><?php esc_html_e('Primary route', 'mirrorcraft'); ?></span>
          <p><?php esc_html_e('Brief -> sample -> confirmation -> production -> export delivery.', 'mirrorcraft'); ?></p>
        </div>
      </div>
    </div>
  </section>

  <section class="section statement-section">
    <div class="shell statement-shell">
      <div class="section-heading">
        <p class="eyebrow"><?php esc_html_e('Built For Clarity', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('This rebuilt homepage follows the same order buyers use in real sourcing conversations.', 'mirrorcraft'); ?></h2>
      </div>
      <div class="statement-grid">
        <article class="statement-card statement-card-dark">
          <h3><?php esc_html_e('Start with the family', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('Mirror buyers typically need to narrow category, feature direction, and application fit before anything else.', 'mirrorcraft'); ?></p>
        </article>
        <article class="statement-card">
          <h3><?php esc_html_e('Move into the use case', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('Hospitality, multifamily, healthcare, and private label programs each need a different product conversation.', 'mirrorcraft'); ?></p>
        </article>
        <article class="statement-card">
          <h3><?php esc_html_e('End with a better brief', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('The new structure helps visitors arrive at a more usable quote request instead of a vague inquiry.', 'mirrorcraft'); ?></p>
        </article>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="shell">
      <div class="section-heading">
        <p class="eyebrow"><?php esc_html_e('Product Families', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('High-intent lines buyers ask for first.', 'mirrorcraft'); ?></h2>
        <p class="section-copy"><?php esc_html_e('The new structure puts the most requested product routes up front so project teams and distributors can orient themselves quickly.', 'mirrorcraft'); ?></p>
      </div>
      <div class="card-grid card-grid-three">
        <?php foreach ($product_cards as $card) : ?>
          <article class="feature-card product-card">
            <div class="feature-card-media">
              <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" width="1200" height="1200" loading="lazy" decoding="async">
            </div>
            <div class="feature-card-body">
              <p class="feature-tag"><?php echo esc_html($card['tag']); ?></p>
              <h3><?php echo esc_html($card['title']); ?></h3>
              <p><?php echo esc_html($card['text']); ?></p>
              <a class="text-link" href="<?php echo esc_url($card['link']); ?>"><?php esc_html_e('Explore this line', 'mirrorcraft'); ?></a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section section-alt">
    <div class="shell">
      <div class="section-heading section-heading-split">
        <div>
          <p class="eyebrow"><?php esc_html_e('Applications', 'mirrorcraft'); ?></p>
          <h2><?php esc_html_e('Built around where the mirrors actually go.', 'mirrorcraft'); ?></h2>
        </div>
        <a class="text-link" href="<?php echo esc_url($applications_url); ?>"><?php esc_html_e('See all applications', 'mirrorcraft'); ?></a>
      </div>

      <div class="card-grid card-grid-two">
        <?php foreach ($application_cards as $card) : ?>
          <article class="feature-card sector-card">
            <div class="feature-card-media">
              <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" width="1400" height="1200" loading="lazy" decoding="async">
            </div>
            <div class="feature-card-body">
              <p class="feature-tag"><?php echo esc_html($card['tag']); ?></p>
              <h3><?php echo esc_html($card['title']); ?></h3>
              <p><?php echo esc_html($card['text']); ?></p>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="shell process-shell">
      <div class="section-heading">
        <p class="eyebrow"><?php esc_html_e('How We Work', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('The rebuilt site now mirrors the delivery workflow itself.', 'mirrorcraft'); ?></h2>
      </div>
      <div class="process-grid">
        <?php foreach ($process_steps as $index => $step) : ?>
          <article class="process-card">
            <span class="process-step"><?php echo esc_html(sprintf('%02d', $index + 1)); ?></span>
            <h3><?php echo esc_html($step['title']); ?></h3>
            <p><?php echo esc_html($step['text']); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section capability-section">
    <div class="shell capability-shell">
      <div class="capability-copy">
        <p class="eyebrow"><?php esc_html_e('Capability Stack', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('What the new site chooses to emphasize.', 'mirrorcraft'); ?></h2>
        <p class="section-copy"><?php esc_html_e('Instead of repeating generic claims, the rebuilt structure makes room for feature mix, packaging thinking, specification support, and the project rhythm buyers care about most.', 'mirrorcraft'); ?></p>
      </div>
      <div class="capability-columns">
        <ul class="feature-list">
          <li><?php esc_html_e('Custom sizing, shapes, frame directions, and lighting behavior', 'mirrorcraft'); ?></li>
          <li><?php esc_html_e('Medicine cabinet and mirror category planning across multiple price tiers', 'mirrorcraft'); ?></li>
          <li><?php esc_html_e('Sample review before full production to reduce downstream friction', 'mirrorcraft'); ?></li>
        </ul>
        <ul class="feature-list">
          <li><?php esc_html_e('Packaging conversation early enough to avoid shipment surprises', 'mirrorcraft'); ?></li>
          <li><?php esc_html_e('Export-focused production follow-through and repeat-order framing', 'mirrorcraft'); ?></li>
          <li><?php esc_html_e('A cleaner foundation for future case studies, detail pages, and buying guides', 'mirrorcraft'); ?></li>
        </ul>
      </div>
    </div>
  </section>

  <?php mirrorcraft_render_editor_content_section(array('section_class' => 'editor-bridge-section')); ?>

  <section class="section faq-section" id="faq">
    <div class="shell">
      <div class="section-heading">
        <p class="eyebrow"><?php esc_html_e('FAQ', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('Questions the rebuilt site should answer earlier.', 'mirrorcraft'); ?></h2>
      </div>
      <?php mirrorcraft_render_faq_items($faq_items, 'home-faq'); ?>
    </div>
  </section>

  <section class="section section-tight">
    <div class="shell cta-shell">
      <div class="cta-card">
        <div>
          <p class="eyebrow"><?php esc_html_e('Next Step', 'mirrorcraft'); ?></p>
          <h2><?php esc_html_e('Use the rebuilt inquiry path when you are ready to talk product direction, pricing, or a custom mirror program.', 'mirrorcraft'); ?></h2>
          <p><?php esc_html_e('The goal of the rebuild is simple: fewer dead ends, better product context, and a cleaner route into the right conversation.', 'mirrorcraft'); ?></p>
        </div>
        <div class="button-row">
          <a class="button button-primary" href="<?php echo esc_url($contact_url); ?>"><?php esc_html_e('Send Inquiry', 'mirrorcraft'); ?></a>
          <a class="button button-secondary" href="<?php echo esc_url($projects_url); ?>"><?php esc_html_e('View Project Routes', 'mirrorcraft'); ?></a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
