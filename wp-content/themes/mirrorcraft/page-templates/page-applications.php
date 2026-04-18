<?php
/*
Template Name: Applications Page
*/
get_header();
$application_cards = mirrorcraft_get_application_cards();
$application_sector_labels = array();

foreach (mirrorcraft_get_application_submenu_pages() as $page) {
  if (!empty($page['title'])) {
    $application_sector_labels[] = $page['title'];
  }
}

$product_cards = mirrorcraft_get_product_family_cards();
$application_notes = array(
  __('The same mirror family can perform differently across hospitality, residential, healthcare, transportation, education, or beauty-led spaces.', 'mirrorcraft'),
  __('Application pages help buyers align lighting behavior, maintenance expectations, storage needs, and visual direction before asking for pricing.', 'mirrorcraft'),
  __('Projects, distributors, developers, and private label programs often need different supporting documents and rollout logic even when the product route overlaps.', 'mirrorcraft'),
  __('The best-fit product family usually becomes clear only after the space type, traffic level, and end-user expectation are defined.', 'mirrorcraft'),
);
?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <section class="page-hero">
      <div class="shell page-hero-shell">
        <div class="page-hero-copy">
          <?php mirrorcraft_render_breadcrumbs(); ?>
          <p class="eyebrow"><?php esc_html_e('Applications', 'mirrorcraft'); ?></p>
          <h1><?php the_title(); ?></h1>
          <p class="hero-lead"><?php echo esc_html(mirrorcraft_get_page_summary(get_the_ID(), __('Choose the right LED mirror or cabinet route by project type, end-user expectation, installation reality, and buyer model.', 'mirrorcraft'))); ?></p>
        </div>
        <aside class="page-hero-aside">
          <span class="feature-tag"><?php esc_html_e('Common sectors', 'mirrorcraft'); ?></span>
          <ul class="feature-list">
            <?php foreach ($application_sector_labels as $label) : ?>
              <li><?php echo esc_html($label); ?></li>
            <?php endforeach; ?>
          </ul>
        </aside>
      </div>
    </section>

    <section class="section">
      <div class="shell section-heading">
        <p class="eyebrow"><?php esc_html_e('Application and Industry', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('Start from the space where the mirror will be used.', 'mirrorcraft'); ?></h2>
        <p class="section-copy"><?php esc_html_e('This is where a stronger sourcing structure helps: different spaces pull the product in different directions, so the application route should be visible before the buyer dives into models and accessories.', 'mirrorcraft'); ?></p>
      </div>
      <div class="shell card-grid card-grid-three">
        <?php foreach ($application_cards as $card) : ?>
          <article class="feature-card sector-card">
            <div class="feature-card-media">
              <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['title']); ?>" width="1400" height="1200" loading="lazy" decoding="async">
            </div>
            <div class="feature-card-body">
              <p class="feature-tag"><?php echo esc_html($card['tag']); ?></p>
              <h3><?php echo esc_html($card['title']); ?></h3>
              <p><?php echo esc_html(wp_trim_words($card['text'], 28, '...')); ?></p>
              <?php if (!empty($card['link'])) : ?>
                <a class="text-link" href="<?php echo esc_url($card['link']); ?>"><?php esc_html_e('View application route', 'mirrorcraft'); ?></a>
              <?php endif; ?>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="section section-alt">
      <div class="shell capability-shell">
        <div class="section-heading">
          <p class="eyebrow"><?php esc_html_e('How Application Changes The Spec', 'mirrorcraft'); ?></p>
          <h2><?php esc_html_e('The product route is only half of the story. The environment changes the rest.', 'mirrorcraft'); ?></h2>
          <p class="section-copy"><?php esc_html_e('Hospitality, commercial, residential, healthcare, retail, transportation, and education buyers often start from different installation realities, maintenance concerns, and user expectations.', 'mirrorcraft'); ?></p>
        </div>
        <article class="entry-card">
          <ul class="feature-list">
            <?php foreach ($application_notes as $note) : ?>
              <li><?php echo esc_html($note); ?></li>
            <?php endforeach; ?>
          </ul>
        </article>
      </div>
    </section>

    <section class="section">
      <div class="shell section-heading">
        <p class="eyebrow"><?php esc_html_e('Common Starting Product Families', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('Once the sector is clear, compare the mirror families that usually fit it best.', 'mirrorcraft'); ?></h2>
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
              <a class="text-link" href="<?php echo esc_url($card['link']); ?>"><?php esc_html_e('View product route', 'mirrorcraft'); ?></a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="section section-alt">
      <div class="shell card-grid card-grid-three">
        <article class="statement-card">
          <h3><?php esc_html_e('Project buyers', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('Projects usually care about layout fit, repeatability, inspection follow-through, and cleaner export planning.', 'mirrorcraft'); ?></p>
        </article>
        <article class="statement-card">
          <h3><?php esc_html_e('Distribution buyers', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('Distributors often need category clarity, commercial positioning, and product families that can support repeat assortment planning.', 'mirrorcraft'); ?></p>
        </article>
        <article class="statement-card">
          <h3><?php esc_html_e('Private label buyers', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('Private label programs usually need the application route and the branding route explained together, not as separate conversations.', 'mirrorcraft'); ?></p>
        </article>
      </div>
    </section>

    <?php mirrorcraft_render_editor_content_section(array('section_class' => 'editor-bridge-section')); ?>

    <section class="section section-tight">
      <div class="shell cta-shell">
        <div class="cta-card">
          <div>
            <p class="eyebrow"><?php esc_html_e('Next Step', 'mirrorcraft'); ?></p>
            <h2><?php esc_html_e('Tell us which sector, space type, or buyer model you are serving.', 'mirrorcraft'); ?></h2>
            <p><?php esc_html_e('A clearer application brief makes it much easier to recommend the right mirror family, feature mix, and commercial route.', 'mirrorcraft'); ?></p>
          </div>
          <div class="button-row">
            <a class="button button-primary" href="<?php echo esc_url(mirrorcraft_link_by_slug('contact', '/contact/')); ?>"><?php esc_html_e('Request a Quote', 'mirrorcraft'); ?></a>
            <a class="button button-secondary" href="<?php echo esc_url(mirrorcraft_link_by_slug('products', '/products/')); ?>"><?php esc_html_e('Browse Products', 'mirrorcraft'); ?></a>
          </div>
        </div>
      </div>
    </section>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
