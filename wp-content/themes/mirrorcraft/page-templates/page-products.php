<?php
/*
Template Name: Products Page
*/
get_header();
$product_cards = mirrorcraft_get_product_family_cards();
?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <section class="page-hero">
      <div class="shell page-hero-shell">
        <div class="page-hero-copy">
          <p class="eyebrow"><?php esc_html_e('Products', 'mirrorcraft'); ?></p>
          <h1><?php the_title(); ?></h1>
          <p class="hero-lead"><?php echo esc_html(mirrorcraft_get_page_summary(get_the_ID(), __('The rebuilt products page starts with category clarity so buyers can move into specs with much less friction.', 'mirrorcraft'))); ?></p>
        </div>
        <aside class="page-hero-aside">
          <p><?php esc_html_e('Start with the family that best matches the application, then move into size, finish, lighting, storage, and packaging detail.', 'mirrorcraft'); ?></p>
        </aside>
      </div>
    </section>

    <section class="section">
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
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="section section-alt">
      <div class="shell card-grid card-grid-three">
        <article class="statement-card">
          <h3><?php esc_html_e('Feature mix', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('Lighting direction, anti-fog, touch controls, storage, and frame language should be clarified early in the quote flow.', 'mirrorcraft'); ?></p>
        </article>
        <article class="statement-card">
          <h3><?php esc_html_e('Application fit', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('Hospitality, multifamily, healthcare, and brand programs each pull the product spec in different directions.', 'mirrorcraft'); ?></p>
        </article>
        <article class="statement-card">
          <h3><?php esc_html_e('Packaging and rollout', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('The rebuilt structure leaves space for packaging, repeat-order, and export-readiness conversations too.', 'mirrorcraft'); ?></p>
        </article>
      </div>
    </section>

    <?php mirrorcraft_render_editor_content_section(array('section_class' => 'editor-bridge-section')); ?>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
