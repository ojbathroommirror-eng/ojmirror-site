<?php
/*
Template Name: About Page
*/
get_header();

$hero_image = mirrorcraft_get_active_hero_image_url();
$products_url = mirrorcraft_link_by_slug('products', '/products/');
$manufacturing_url = mirrorcraft_link_by_slug('manufacturing', '/manufacturing/');
$contact_url = mirrorcraft_link_by_slug('contact', '/contact/');
$custom_route_url = mirrorcraft_link_by_slug('products/custom-led-mirrors', '/products/custom-led-mirrors/');
$contact_email = mirrorcraft_get_contact_email();
$contact_phone = mirrorcraft_get_contact_phone();
$contact_phone_href = mirrorcraft_get_contact_phone_href();
$contact_address = mirrorcraft_get_contact_address();
$process_steps = mirrorcraft_get_process_steps();

$factory_points = array(
  __('LED bathroom mirrors, lighted medicine cabinets, vanity mirrors, framed mirrors, and custom mirror development', 'mirrorcraft'),
  __('Support for hospitality, residential, multifamily, commercial, salon, and healthcare sourcing routes', 'mirrorcraft'),
  __('Product brief, sampling, production planning, quality review, and export follow-through connected in one conversation', 'mirrorcraft'),
  __('Built for importers, distributors, project buyers, and private label teams that need clearer program coordination', 'mirrorcraft'),
);

$factory_confirm_points = array(
  __('Which product family best fits the target project or assortment', 'mirrorcraft'),
  __('How OEM / ODM and private label requests should be defined before quotation', 'mirrorcraft'),
  __('What needs to be confirmed during sample review before bulk production', 'mirrorcraft'),
  __('Where buyers should continue next: products, manufacturing, or direct inquiry', 'mirrorcraft'),
);

$advantage_cards = array(
  array(
    'title' => __('Product-first communication', 'mirrorcraft'),
    'text'  => __('OJMIRROR keeps the company introduction tied to real mirror and cabinet routes, so buyers can move from brand overview into a usable product discussion faster.', 'mirrorcraft'),
  ),
  array(
    'title' => __('OEM / ODM support that stays visible', 'mirrorcraft'),
    'text'  => __('Custom size, feature planning, private label direction, and packaging expectations are treated as part of the main sourcing route instead of a hidden follow-up topic.', 'mirrorcraft'),
  ),
  array(
    'title' => __('Sample-to-shipment thinking', 'mirrorcraft'),
    'text'  => __('The story emphasizes how sampling, production planning, inspection, and export follow-through connect, which is usually what repeat buyers need to evaluate first.', 'mirrorcraft'),
  ),
);

$certificate_points = array(
  __('Certification direction can be discussed according to destination requirements and the selected mirror or cabinet program.', 'mirrorcraft'),
  __('Target market, installation environment, and feature definition should be reviewed before the quotation route gets too deep.', 'mirrorcraft'),
  __('Sample review helps confirm finish, lighting behavior, control logic, cabinet structure, and packing expectations before production approval.', 'mirrorcraft'),
  __('Quality checkpoints and export preparation stay clearer when they are tied to the same approved brief.', 'mirrorcraft'),
);

$certificate_topics = array(
  __('Target Market', 'mirrorcraft'),
  __('Bathroom Use', 'mirrorcraft'),
  __('Lighting Features', 'mirrorcraft'),
  __('Control Logic', 'mirrorcraft'),
  __('Sample Review', 'mirrorcraft'),
  __('Export Packing', 'mirrorcraft'),
  __('Private Label', 'mirrorcraft'),
  __('Project Supply', 'mirrorcraft'),
);

$workshop_cards = array(
  array(
    'title' => __('Product brief and sample coordination', 'mirrorcraft'),
    'text'  => __('Factory discussion starts by matching the mirror or cabinet route to the project brief, then carrying the same logic into sample review and production planning.', 'mirrorcraft'),
  ),
  array(
    'title' => __('Component and structure review', 'mirrorcraft'),
    'text'  => __('Mirror glass, cabinet structure, lighting parts, switches, and related fittings are easier to coordinate when the route is defined clearly before production.', 'mirrorcraft'),
  ),
  array(
    'title' => __('In-process assembly checks', 'mirrorcraft'),
    'text'  => __('Alignment, feature fit, visual finish, and installation logic should be reviewed during production flow instead of waiting until the end.', 'mirrorcraft'),
  ),
  array(
    'title' => __('Function, packing, and export readiness', 'mirrorcraft'),
    'text'  => __('Final checks should confirm lighting behavior, anti-fog direction, protection, labeling, and packing readiness before shipment moves out.', 'mirrorcraft'),
  ),
);

$rnd_points = array(
  __('Category-led planning for LED mirrors, mirror cabinets, vanity formats, framed styles, and custom routes', 'mirrorcraft'),
  __('Specification refinement for lighting behavior, anti-fog, control direction, frame styling, and cabinet structure', 'mirrorcraft'),
  __('Private label and packaging direction aligned early so sample review matches final order expectations', 'mirrorcraft'),
  __('Development discussion that keeps sales, sample review, production planning, and shipment preparation tied to the same brief', 'mirrorcraft'),
);

$development_cards = array(
  array(
    'tag'   => __('Core Bathroom Route', 'mirrorcraft'),
    'title' => __('LED Bathroom Mirrors', 'mirrorcraft'),
    'text'  => __('Product programs built around bathroom lighting, anti-fog, dimming, frame direction, and specification control for B2B supply.', 'mirrorcraft'),
    'image' => mirrorcraft_get_product_category_image_url('bathroom-mirror'),
    'link'  => mirrorcraft_link_by_slug('products/led-bathroom-mirrors', '/products/led-bathroom-mirrors/'),
  ),
  array(
    'tag'   => __('Storage + Illumination', 'mirrorcraft'),
    'title' => __('Lighted Medicine Cabinets', 'mirrorcraft'),
    'text'  => __('Mirror cabinet development that combines lighting, storage, mounting direction, and installation logic for higher-value bathroom projects.', 'mirrorcraft'),
    'image' => mirrorcraft_get_product_category_image_url('medicine-cabinet'),
    'link'  => mirrorcraft_link_by_slug('products/lighted-medicine-cabinets', '/products/lighted-medicine-cabinets/'),
  ),
  array(
    'tag'   => __('OEM / ODM / Private Label', 'mirrorcraft'),
    'title' => __('Custom Mirror Programs', 'mirrorcraft'),
    'text'  => __('Development support for buyers who need custom dimensions, feature combinations, branding direction, and a sample-first approval path.', 'mirrorcraft'),
    'image' => mirrorcraft_get_product_category_image_url('custom-mirror'),
    'link'  => $custom_route_url,
  ),
);
?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <?php $faq_items = mirrorcraft_get_faq_items(get_the_ID()); ?>
    <section class="page-hero" id="top">
      <div class="shell page-hero-shell">
        <div class="page-hero-copy">
          <?php mirrorcraft_render_breadcrumbs(); ?>
          <p class="eyebrow"><?php esc_html_e('About OJMIRROR', 'mirrorcraft'); ?></p>
          <h1><?php the_title(); ?></h1>
          <p class="hero-lead">
            <?php
            echo esc_html(
              mirrorcraft_get_page_summary(
                get_the_ID(),
                __('OJMIRROR manufactures LED bathroom mirrors, lighted medicine cabinets, vanity mirrors, and custom mirror programs for B2B buyers who need a clearer path from product brief to sample review, production planning, and export follow-through.', 'mirrorcraft')
              )
            );
            ?>
          </p>
        </div>
        <aside class="page-hero-aside about-hero-aside">
          <span class="feature-tag"><?php esc_html_e('Company Snapshot', 'mirrorcraft'); ?></span>
          <div class="mini-stat-list">
            <div><strong><?php esc_html_e('LED Mirrors', 'mirrorcraft'); ?></strong><span><?php esc_html_e('Category-led sourcing routes', 'mirrorcraft'); ?></span></div>
            <div><strong><?php esc_html_e('OEM / ODM', 'mirrorcraft'); ?></strong><span><?php esc_html_e('Custom development stays visible', 'mirrorcraft'); ?></span></div>
            <div><strong><?php esc_html_e('Sample Review', 'mirrorcraft'); ?></strong><span><?php esc_html_e('Approval before production planning', 'mirrorcraft'); ?></span></div>
            <div><strong><?php echo esc_html(mirrorcraft_get_contact_city_name()); ?></strong><span><?php esc_html_e('Operations base', 'mirrorcraft'); ?></span></div>
          </div>
        </aside>
      </div>
    </section>

    <section class="section section-tight">
      <div class="shell">
        <nav class="about-anchor-nav" aria-label="<?php esc_attr_e('About page sections', 'mirrorcraft'); ?>">
          <a href="#factory"><?php esc_html_e('Factory Introduction', 'mirrorcraft'); ?></a>
          <a href="#advantages"><?php esc_html_e('Advantages', 'mirrorcraft'); ?></a>
          <a href="#certificates"><?php esc_html_e('Certificates', 'mirrorcraft'); ?></a>
          <a href="#workshop"><?php esc_html_e('Production Workshop', 'mirrorcraft'); ?></a>
          <a href="#rnd"><?php esc_html_e('R&D Team', 'mirrorcraft'); ?></a>
          <a href="#oem"><?php esc_html_e('OEM / ODM', 'mirrorcraft'); ?></a>
          <a href="#faq"><?php esc_html_e('FAQ', 'mirrorcraft'); ?></a>
        </nav>
      </div>
    </section>

    <section class="section" id="factory">
      <div class="shell about-split-grid">
        <div class="section-heading about-section-heading">
          <p class="eyebrow"><?php esc_html_e('Factory Introduction', 'mirrorcraft'); ?></p>
          <h2><?php esc_html_e('A mirror manufacturer in Zhongshan built around clearer B2B sourcing conversations.', 'mirrorcraft'); ?></h2>
          <p class="section-copy"><?php esc_html_e('This company page is now structured more like a factory profile, so buyers can quickly understand what OJMIRROR makes, who it supports, and how development, production, and export follow-through connect after the first inquiry.', 'mirrorcraft'); ?></p>
          <ul class="feature-list">
            <?php foreach ($factory_points as $point) : ?>
              <li><?php echo esc_html($point); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>

        <article class="entry-card about-story-card">
          <?php if ($hero_image) : ?>
            <div class="about-story-media">
              <img src="<?php echo esc_url($hero_image); ?>" alt="<?php esc_attr_e('OJMIRROR LED mirror display', 'mirrorcraft'); ?>" width="1200" height="900" loading="lazy" decoding="async">
            </div>
          <?php endif; ?>
          <div class="about-story-body">
            <p class="feature-tag"><?php esc_html_e('What Buyers Usually Confirm', 'mirrorcraft'); ?></p>
            <ul class="feature-list">
              <?php foreach ($factory_confirm_points as $point) : ?>
                <li><?php echo esc_html($point); ?></li>
              <?php endforeach; ?>
            </ul>
            <div class="button-row">
              <a class="button button-secondary" href="<?php echo esc_url($products_url); ?>"><?php esc_html_e('View Products', 'mirrorcraft'); ?></a>
              <a class="button button-secondary" href="<?php echo esc_url($manufacturing_url); ?>"><?php esc_html_e('Manufacturing & QC', 'mirrorcraft'); ?></a>
            </div>
          </div>
        </article>
      </div>
    </section>

    <section class="section section-alt" id="advantages">
      <div class="shell section-heading">
        <p class="eyebrow"><?php esc_html_e('Factory Advantages', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('The company story is strongest when factory strengths connect to real sourcing decisions.', 'mirrorcraft'); ?></h2>
        <p class="section-copy"><?php esc_html_e('Instead of relying on generic brochure language, the page keeps the focus on product definition, customization logic, and downstream execution.', 'mirrorcraft'); ?></p>
      </div>
      <div class="shell card-grid card-grid-three">
        <?php foreach ($advantage_cards as $index => $card) : ?>
          <article class="statement-card about-advantage-card<?php echo 0 === $index ? ' statement-card-dark' : ''; ?>">
            <h3><?php echo esc_html($card['title']); ?></h3>
            <p><?php echo esc_html($card['text']); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="section" id="certificates">
      <div class="shell capability-shell about-market-shell">
        <div class="section-heading">
          <p class="eyebrow"><?php esc_html_e('Certificates', 'mirrorcraft'); ?></p>
          <h2><?php esc_html_e('Certification and compliance discussion belongs early in the sourcing path.', 'mirrorcraft'); ?></h2>
          <p class="section-copy"><?php esc_html_e('For mirror and cabinet buyers, factory evaluation usually includes target market expectations, feature definition, and certification direction before full production planning begins.', 'mirrorcraft'); ?></p>
        </div>

        <article class="entry-card about-market-card">
          <ul class="feature-list">
            <?php foreach ($certificate_points as $point) : ?>
              <li><?php echo esc_html($point); ?></li>
            <?php endforeach; ?>
          </ul>

          <div class="about-chip-cloud">
            <p class="feature-tag"><?php esc_html_e('Common Discussion Topics', 'mirrorcraft'); ?></p>
            <ul class="page-chip-list">
              <?php foreach ($certificate_topics as $topic) : ?>
                <li><?php echo esc_html($topic); ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </article>
      </div>
    </section>

    <section class="section section-alt" id="workshop">
      <div class="shell section-heading">
        <p class="eyebrow"><?php esc_html_e('Production Workshop', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('A clearer company profile should show where production value is actually created.', 'mirrorcraft'); ?></h2>
        <p class="section-copy"><?php esc_html_e('This section reframes the factory story around the production checkpoints buyers actually care about when they review a mirror supplier.', 'mirrorcraft'); ?></p>
      </div>
      <div class="shell card-grid card-grid-two">
        <?php foreach ($workshop_cards as $card) : ?>
          <article class="entry-card about-workshop-card">
            <p class="feature-tag"><?php esc_html_e('Workshop Focus', 'mirrorcraft'); ?></p>
            <h3><?php echo esc_html($card['title']); ?></h3>
            <p><?php echo esc_html($card['text']); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="section" id="rnd">
      <div class="shell about-split-grid about-rnd-grid">
        <div class="section-heading about-section-heading">
          <p class="eyebrow"><?php esc_html_e('R&D Team', 'mirrorcraft'); ?></p>
          <h2><?php esc_html_e('Product development works best when the technical discussion stays close to the chosen product family.', 'mirrorcraft'); ?></h2>
          <p class="section-copy"><?php esc_html_e('OJMIRROR keeps development discussion tied to mirror category, feature logic, and export practicality so buyers can make cleaner decisions before production approval.', 'mirrorcraft'); ?></p>
          <ul class="feature-list">
            <?php foreach ($rnd_points as $point) : ?>
              <li><?php echo esc_html($point); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>

        <article class="entry-card about-rnd-panel">
          <p class="feature-tag"><?php esc_html_e('Development Priorities', 'mirrorcraft'); ?></p>
          <h3><?php esc_html_e('Category fit, sample alignment, and export-ready follow-through.', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('The goal is not only to design a mirror or cabinet that looks right, but to define a program that can be quoted clearly, reviewed through samples, and handed over to production with fewer surprises.', 'mirrorcraft'); ?></p>
          <div class="button-row">
            <a class="button button-secondary" href="<?php echo esc_url($manufacturing_url); ?>"><?php esc_html_e('See Manufacturing Page', 'mirrorcraft'); ?></a>
          </div>
        </article>
      </div>
    </section>

    <section class="section section-alt" id="oem">
      <div class="shell section-heading">
        <p class="eyebrow"><?php esc_html_e('OEM / ODM One-Stop Solution', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('Custom development stays easier to evaluate when it is anchored to real product families.', 'mirrorcraft'); ?></h2>
        <p class="section-copy"><?php esc_html_e('OJMIRROR supports category-led development first, then helps buyers refine specifications, custom features, and private label direction inside the right product route.', 'mirrorcraft'); ?></p>
      </div>
      <div class="shell process-grid about-process-grid">
        <?php foreach (array_slice($process_steps, 0, 4) as $index => $step) : ?>
          <article class="process-card about-process-card">
            <span class="process-step"><?php echo esc_html(sprintf('%02d', $index + 1)); ?></span>
            <h3><?php echo esc_html($step['title']); ?></h3>
            <p><?php echo esc_html($step['text']); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
      <div class="shell card-grid card-grid-three about-development-grid">
        <?php foreach ($development_cards as $card) : ?>
          <article class="feature-card product-card about-development-card">
            <div class="feature-card-media">
              <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" width="1200" height="1200" loading="lazy" decoding="async">
            </div>
            <div class="feature-card-body">
              <p class="feature-tag"><?php echo esc_html($card['tag']); ?></p>
              <h3><?php echo esc_html($card['title']); ?></h3>
              <p><?php echo esc_html($card['text']); ?></p>
              <a class="text-link" href="<?php echo esc_url($card['link']); ?>"><?php esc_html_e('View product route', 'mirrorcraft'); ?></a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
      <div class="shell about-inline-actions">
        <a class="button button-secondary" href="<?php echo esc_url($custom_route_url); ?>"><?php esc_html_e('Explore Custom Programs', 'mirrorcraft'); ?></a>
      </div>
    </section>

    <?php mirrorcraft_render_editor_content_section(array('section_class' => 'editor-bridge-section')); ?>

    <section class="section" id="faq">
      <div class="shell section-heading">
        <p class="eyebrow"><?php esc_html_e('FAQ', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('Questions buyers usually want answered before moving into quotation.', 'mirrorcraft'); ?></h2>
      </div>
      <div class="shell">
        <?php mirrorcraft_render_faq_items($faq_items, 'about-page'); ?>
      </div>
    </section>

    <section class="section section-tight" id="contact">
      <div class="shell cta-shell">
        <div class="cta-card about-cta-card">
          <div>
            <p class="eyebrow"><?php esc_html_e('Talk To OJMIRROR', 'mirrorcraft'); ?></p>
            <h2><?php esc_html_e('Start the next mirror or cabinet program with a clearer company brief behind it.', 'mirrorcraft'); ?></h2>
            <p><?php esc_html_e('If you are comparing product routes, preparing a custom mirror program, or aligning sample and production expectations, the next step is a focused inquiry.', 'mirrorcraft'); ?></p>
            <div class="button-row">
              <a class="button button-primary" href="<?php echo esc_url($contact_url); ?>"><?php esc_html_e('Send Inquiry', 'mirrorcraft'); ?></a>
              <a class="button button-secondary" href="<?php echo esc_url($products_url); ?>"><?php esc_html_e('Browse Products', 'mirrorcraft'); ?></a>
            </div>
          </div>

          <div class="about-cta-panel">
            <p><strong><?php esc_html_e('Email', 'mirrorcraft'); ?></strong><br><a href="mailto:<?php echo esc_attr($contact_email); ?>"><?php echo esc_html($contact_email); ?></a></p>
            <p><strong><?php esc_html_e('Phone / WhatsApp', 'mirrorcraft'); ?></strong><br><a href="tel:<?php echo esc_attr($contact_phone_href); ?>"><?php echo esc_html($contact_phone); ?></a></p>
            <p><strong><?php esc_html_e('Address', 'mirrorcraft'); ?></strong><br><?php echo esc_html($contact_address); ?></p>
          </div>
        </div>
      </div>
    </section>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
