<?php
/*
Template Name: Products Page
*/
get_header();
$product_cards = mirrorcraft_get_product_family_cards();
$application_cards = mirrorcraft_get_application_cards();
$process_steps = mirrorcraft_get_process_steps();
$capability_points = array(
  __('Backlit, front-lit, framed, vanity, and cabinet routes organized as clear product families', 'mirrorcraft'),
  __('Lighting controls, anti-fog, touch sensors, cabinet storage, and mounting logic planned before deep quoting', 'mirrorcraft'),
  __('OEM / ODM, private label packaging, and custom development handled as part of the category discussion', 'mirrorcraft'),
  __('Application-fit guidance for hospitality, commercial, residential, salon, healthcare, and other project routes', 'mirrorcraft'),
);
?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <section class="page-hero">
      <div class="shell page-hero-shell">
        <div class="page-hero-copy">
          <?php mirrorcraft_render_breadcrumbs(); ?>
          <p class="eyebrow"><?php esc_html_e('Products', 'mirrorcraft'); ?></p>
          <h1><?php the_title(); ?></h1>
          <p class="hero-lead"><?php echo esc_html(mirrorcraft_get_page_summary(get_the_ID(), __('Explore LED bathroom mirrors, lighted medicine cabinets, framed LED mirrors, and custom development routes built for project, distribution, and private label buyers.', 'mirrorcraft'))); ?></p>
        </div>
        <aside class="page-hero-aside">
          <span class="feature-tag"><?php esc_html_e('Product-first structure', 'mirrorcraft'); ?></span>
          <ul class="feature-list">
            <li><?php esc_html_e('LED Bathroom Mirrors', 'mirrorcraft'); ?></li>
            <li><?php esc_html_e('Lighted Medicine Cabinets', 'mirrorcraft'); ?></li>
            <li><?php esc_html_e('Framed LED Mirrors', 'mirrorcraft'); ?></li>
            <li><?php esc_html_e('Makeup / Vanity Mirrors', 'mirrorcraft'); ?></li>
            <li><?php esc_html_e('Custom Mirror Programs', 'mirrorcraft'); ?></li>
          </ul>
        </aside>
      </div>
    </section>

    <section class="section">
      <div class="shell section-heading">
        <p class="eyebrow"><?php esc_html_e('Featured Product Categories', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('Start from the mirror family, then narrow the exact specification.', 'mirrorcraft'); ?></h2>
        <p class="section-copy"><?php esc_html_e('This is the fastest path for B2B buyers: confirm the category first, then refine size, lighting behavior, storage logic, packaging, and commercial detail around the right route.', 'mirrorcraft'); ?></p>
      </div>
      <div class="shell card-grid card-grid-three">
        <?php foreach ($product_cards as $card) : ?>
          <article class="feature-card product-card">
            <div class="feature-card-media">
              <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" width="1200" height="1200" loading="lazy" decoding="async">
            </div>
            <div class="feature-card-body">
              <p class="feature-tag"><?php echo esc_html($card['tag']); ?></p>
              <h3><?php echo esc_html($card['title']); ?></h3>
              <p><?php echo esc_html($card['text']); ?></p>
              <?php if (!empty($card['link'])) : ?>
                <a class="text-link" href="<?php echo esc_url($card['link']); ?>"><?php esc_html_e('View category details', 'mirrorcraft'); ?></a>
              <?php endif; ?>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="section section-alt">
      <div class="shell card-grid card-grid-three">
        <article class="statement-card">
          <h3><?php esc_html_e('Mirror family first', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('Bathroom mirrors, cabinets, framed mirrors, and vanity mirrors solve different buying problems. Clarifying that early keeps the quote path cleaner.', 'mirrorcraft'); ?></p>
        </article>
        <article class="statement-card">
          <h3><?php esc_html_e('Feature mix second', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('Lighting output, anti-fog, sensors, cabinet storage, frame direction, and finish language should be reviewed before deeper costing starts.', 'mirrorcraft'); ?></p>
        </article>
        <article class="statement-card">
          <h3><?php esc_html_e('Order model third', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('Project supply, distribution, and private label orders often share products, but they need different packaging, documentation, and rollout support.', 'mirrorcraft'); ?></p>
        </article>
      </div>
    </section>

    <section class="section">
      <div class="shell capability-shell">
        <div class="section-heading">
          <p class="eyebrow"><?php esc_html_e('Smart Mirrors & Custom Programs', 'mirrorcraft'); ?></p>
          <h2><?php esc_html_e('Use one structure for standard products, feature upgrades, and OEM development.', 'mirrorcraft'); ?></h2>
          <p class="section-copy"><?php esc_html_e('A stronger product page should not stop at model names. It should also explain how smart features, cabinets, vanity formats, and custom programs fit into one commercial route.', 'mirrorcraft'); ?></p>
        </div>
        <article class="entry-card">
          <ul class="feature-list">
            <?php foreach ($capability_points as $point) : ?>
              <li><?php echo esc_html($point); ?></li>
            <?php endforeach; ?>
          </ul>
        </article>
      </div>
    </section>

    <section class="section section-alt">
      <div class="shell section-heading">
        <p class="eyebrow"><?php esc_html_e('How Custom Programs Move', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('Move from category choice to approved production with fewer surprises.', 'mirrorcraft'); ?></h2>
      </div>
      <div class="shell process-grid">
        <?php foreach (array_slice($process_steps, 0, 4) as $index => $step) : ?>
          <article class="process-card">
            <span class="process-step"><?php echo esc_html(sprintf('%02d', $index + 1)); ?></span>
            <h3><?php echo esc_html($step['title']); ?></h3>
            <p><?php echo esc_html($step['text']); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="section">
      <div class="shell section-heading">
        <p class="eyebrow"><?php esc_html_e('Application & Industry', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('Product families land differently depending on the market you serve.', 'mirrorcraft'); ?></h2>
      </div>
      <div class="shell card-grid card-grid-three">
        <?php foreach ($application_cards as $card) : ?>
          <article class="feature-card sector-card">
            <div class="feature-card-media">
              <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['tag']); ?>" width="1400" height="1200" loading="lazy" decoding="async">
            </div>
            <div class="feature-card-body">
              <p class="feature-tag"><?php echo esc_html($card['tag']); ?></p>
              <h3><?php echo esc_html($card['title']); ?></h3>
              <p><?php echo esc_html(wp_trim_words($card['text'], 26, '...')); ?></p>
              <?php if (!empty($card['link'])) : ?>
                <a class="text-link" href="<?php echo esc_url($card['link']); ?>"><?php esc_html_e('View application route', 'mirrorcraft'); ?></a>
              <?php endif; ?>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <?php mirrorcraft_render_editor_content_section(array('section_class' => 'editor-bridge-section')); ?>

    <section class="section section-tight">
      <div class="shell cta-shell">
        <div class="cta-card">
          <div>
            <p class="eyebrow"><?php esc_html_e('Next Step', 'mirrorcraft'); ?></p>
            <h2><?php esc_html_e('Tell us the product family and market route behind your inquiry.', 'mirrorcraft'); ?></h2>
            <p><?php esc_html_e('If you already know the category, target market, or feature direction, we can turn that into a more workable quotation discussion.', 'mirrorcraft'); ?></p>
          </div>
          <div class="button-row">
            <a class="button button-primary" href="<?php echo esc_url(mirrorcraft_link_by_slug('contact', '/contact/')); ?>"><?php esc_html_e('Request a Quote', 'mirrorcraft'); ?></a>
            <a class="button button-secondary" href="<?php echo esc_url(mirrorcraft_link_by_slug('applications', '/applications/')); ?>"><?php esc_html_e('Browse Applications', 'mirrorcraft'); ?></a>
          </div>
        </div>
      </div>
    </section>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
