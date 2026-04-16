<?php
/*
Template Name: About Page
*/
get_header();
$product_cards = mirrorcraft_get_product_family_cards();
$support_points = array(
  __('Product categories arranged for hospitality, commercial, residential, salon, and healthcare buyers', 'mirrorcraft'),
  __('OEM / ODM and private label development kept visible alongside standard product routes', 'mirrorcraft'),
  __('Sampling, quality control, packaging, and export follow-through treated as part of the same sourcing path', 'mirrorcraft'),
  __('A cleaner structure that helps buyers move from category selection into inquiry without guessing the next step', 'mirrorcraft'),
);
?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <section class="page-hero">
      <div class="shell page-hero-shell">
        <div class="page-hero-copy">
          <?php mirrorcraft_render_breadcrumbs(); ?>
          <p class="eyebrow"><?php esc_html_e('About OJMIRROR', 'mirrorcraft'); ?></p>
          <h1><?php the_title(); ?></h1>
          <p class="hero-lead"><?php echo esc_html(mirrorcraft_get_page_summary(get_the_ID(), __('OJMIRROR supports B2B buyers with LED bathroom mirrors, lighted medicine cabinets, and custom mirror programs shaped around application, specification, and export delivery needs.', 'mirrorcraft'))); ?></p>
        </div>
        <aside class="page-hero-aside">
          <div class="mini-stat-list">
            <div><strong><?php esc_html_e('Project-led', 'mirrorcraft'); ?></strong><span><?php esc_html_e('Built for real procurement flow', 'mirrorcraft'); ?></span></div>
            <div><strong><?php esc_html_e('OEM / ODM', 'mirrorcraft'); ?></strong><span><?php esc_html_e('Custom programs stay visible', 'mirrorcraft'); ?></span></div>
            <div><strong><?php echo esc_html(mirrorcraft_get_contact_city_name()); ?></strong><span><?php esc_html_e('Operations base', 'mirrorcraft'); ?></span></div>
          </div>
        </aside>
      </div>
    </section>

    <section class="section">
      <div class="shell card-grid card-grid-three">
        <article class="statement-card statement-card-dark">
          <h3><?php esc_html_e('Category-first thinking', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('We focus the conversation around the right mirror or cabinet family first, then narrow specs from there.', 'mirrorcraft'); ?></p>
        </article>
        <article class="statement-card">
          <h3><?php esc_html_e('Custom development support', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('We support OEM and ODM discussions for private label collections, project-led programs, and buyers who need specification-based development.', 'mirrorcraft'); ?></p>
        </article>
        <article class="statement-card">
          <h3><?php esc_html_e('Repeat-order mindset', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('The story now emphasizes consistency, packaging, and execution instead of one-off brochure claims.', 'mirrorcraft'); ?></p>
        </article>
      </div>
    </section>

    <section class="section section-alt">
      <div class="shell capability-shell">
        <div class="section-heading">
          <p class="eyebrow"><?php esc_html_e('What OJMIRROR Supports', 'mirrorcraft'); ?></p>
          <h2><?php esc_html_e('A practical B2B structure works when the company page explains what happens after the first click.', 'mirrorcraft'); ?></h2>
          <p class="section-copy"><?php esc_html_e('The site should show what OJMIRROR makes, which buyers it supports, and how development, production, and export follow-through connect across the whole sourcing path.', 'mirrorcraft'); ?></p>
        </div>
        <article class="entry-card">
          <ul class="feature-list">
            <?php foreach ($support_points as $point) : ?>
              <li><?php echo esc_html($point); ?></li>
            <?php endforeach; ?>
          </ul>
        </article>
      </div>
    </section>

    <section class="section">
      <div class="shell section-heading">
        <p class="eyebrow"><?php esc_html_e('Core Product Routes', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('The company story should still lead back into real categories.', 'mirrorcraft'); ?></h2>
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
              <a class="text-link" href="<?php echo esc_url($card['link']); ?>"><?php esc_html_e('View category', 'mirrorcraft'); ?></a>
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
            <p class="eyebrow"><?php esc_html_e('Talk To Us', 'mirrorcraft'); ?></p>
            <h2><?php esc_html_e('Start the next sourcing conversation with the right product route.', 'mirrorcraft'); ?></h2>
            <p><?php esc_html_e('If you are comparing routes, planning a custom collection, or preparing a project brief, the next step is a cleaner inquiry.', 'mirrorcraft'); ?></p>
          </div>
          <div class="button-row">
            <a class="button button-primary" href="<?php echo esc_url(mirrorcraft_link_by_slug('contact', '/contact/')); ?>"><?php esc_html_e('Send Inquiry', 'mirrorcraft'); ?></a>
            <a class="button button-secondary" href="<?php echo esc_url(mirrorcraft_link_by_slug('products', '/products/')); ?>"><?php esc_html_e('View Products', 'mirrorcraft'); ?></a>
          </div>
        </div>
      </div>
    </section>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
