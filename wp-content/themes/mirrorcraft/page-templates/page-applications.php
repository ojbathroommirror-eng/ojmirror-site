<?php
/*
Template Name: Applications Page
*/
get_header();
$application_cards = mirrorcraft_get_application_cards();
?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <section class="page-hero">
      <div class="shell page-hero-shell">
        <div class="page-hero-copy">
          <p class="eyebrow"><?php esc_html_e('Applications', 'mirrorcraft'); ?></p>
          <h1><?php the_title(); ?></h1>
          <p class="hero-lead"><?php echo esc_html(mirrorcraft_get_page_summary(get_the_ID(), __('The rebuilt applications page is designed to help buyers understand how the right mirror route changes by space type.', 'mirrorcraft'))); ?></p>
        </div>
        <aside class="page-hero-aside">
          <p><?php esc_html_e('Application fit is usually where the best product decisions begin, so the new site brings that conversation forward.', 'mirrorcraft'); ?></p>
        </aside>
      </div>
    </section>

    <section class="section">
      <div class="shell card-grid card-grid-two">
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
    </section>

    <section class="section section-alt">
      <div class="shell card-grid card-grid-three">
        <article class="statement-card">
          <h3><?php esc_html_e('Lighting priorities', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('Guestroom mirrors, care spaces, and private label collections often need very different lighting behavior and control expectations.', 'mirrorcraft'); ?></p>
        </article>
        <article class="statement-card">
          <h3><?php esc_html_e('Maintenance reality', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('The new structure makes it easier to talk about easy-clean surfaces, storage access, and long-term use cases.', 'mirrorcraft'); ?></p>
        </article>
        <article class="statement-card">
          <h3><?php esc_html_e('Aesthetic direction', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('Projects may share product families while still needing different silhouettes, frame styles, and finish direction.', 'mirrorcraft'); ?></p>
        </article>
      </div>
    </section>

    <?php mirrorcraft_render_editor_content_section(array('section_class' => 'editor-bridge-section')); ?>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
