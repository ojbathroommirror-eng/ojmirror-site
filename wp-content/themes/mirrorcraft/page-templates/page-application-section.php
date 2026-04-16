<?php
/*
Template Name: Application Section Page
*/
get_header();
?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <?php
    $page_slug = get_post_field('post_name', get_the_ID());
    $page = mirrorcraft_get_application_section_page_data($page_slug);
    $hero_chips = $page['hero_chips'] ?? array();
    $hero_stats = $page['hero_stats'] ?? array();
    $focus_items = $page['focus_items'] ?? array();
    $aside_items = $page['aside_items'] ?? array();
    $scenario_areas = $page['scenario_areas'] ?? array();
    $cards = $page['cards'] ?? array();
    $recommended_products = $page['recommended_products'] ?? array();
    $steps = $page['steps'] ?? array();
    $hero_image = $page['image'] ?? '';
    $cta_button = !empty($page['cta_button']) ? $page['cta_button'] : __('Request a Quote', 'mirrorcraft');
    ?>
    <section class="page-hero">
      <div class="shell page-hero-shell">
        <div class="page-hero-copy">
          <?php mirrorcraft_render_breadcrumbs(); ?>
          <p class="eyebrow"><?php echo esc_html($page['eyebrow'] ?? __('Application Section', 'mirrorcraft')); ?></p>
          <h1><?php the_title(); ?></h1>
          <p class="hero-lead"><?php echo esc_html(mirrorcraft_get_page_summary(get_the_ID(), $page['hero_text'] ?? __('Use this template to explain one buying environment at a time, including installation reality, feature priorities, and the best-fit mirror route.', 'mirrorcraft'))); ?></p>
        </div>
        <aside class="page-hero-aside">
          <?php if ($hero_image) : ?>
            <div class="page-hero-media">
              <img src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" width="1400" height="1200" loading="eager" decoding="async">
            </div>
          <?php endif; ?>

          <?php if (!empty($hero_chips)) : ?>
            <span class="feature-tag"><?php esc_html_e('Sector focus', 'mirrorcraft'); ?></span>
            <ul class="page-chip-list">
              <?php foreach ($hero_chips as $chip) : ?>
                <li><?php echo esc_html($chip); ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>

          <?php if (!empty($hero_stats)) : ?>
            <div class="mini-stat-list">
              <?php foreach ($hero_stats as $stat) : ?>
                <div>
                  <strong><?php echo esc_html($stat['value'] ?? ''); ?></strong>
                  <span><?php echo esc_html($stat['label'] ?? ''); ?></span>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </aside>
      </div>
    </section>

    <?php if (!empty($page['focus_title']) || !empty($page['aside_title'])) : ?>
      <section class="section">
        <div class="shell capability-shell">
          <div class="section-heading">
            <?php if (!empty($page['focus_title'])) : ?>
              <h2><?php echo esc_html($page['focus_title']); ?></h2>
            <?php endif; ?>
            <?php if (!empty($page['focus_text'])) : ?>
              <p class="section-copy"><?php echo esc_html($page['focus_text']); ?></p>
            <?php endif; ?>
            <?php if (!empty($focus_items)) : ?>
              <ul class="feature-list">
                <?php foreach ($focus_items as $item) : ?>
                  <li><?php echo esc_html($item); ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>
          <article class="entry-card">
            <?php if (!empty($page['aside_kicker'])) : ?>
              <p class="eyebrow"><?php echo esc_html($page['aside_kicker']); ?></p>
            <?php endif; ?>
            <?php if (!empty($page['aside_title'])) : ?>
              <h3><?php echo esc_html($page['aside_title']); ?></h3>
            <?php endif; ?>
            <?php if (!empty($aside_items)) : ?>
              <ul class="feature-list">
                <?php foreach ($aside_items as $item) : ?>
                  <li><?php echo esc_html($item); ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </article>
        </div>
      </section>
    <?php endif; ?>

    <?php if (!empty($scenario_areas)) : ?>
      <section class="section section-alt">
        <div class="shell section-heading">
          <?php if (!empty($page['scenario_intro_title'])) : ?>
            <p class="eyebrow"><?php echo esc_html($page['scenario_intro_title']); ?></p>
          <?php endif; ?>
          <?php if (!empty($page['scenario_areas_title'])) : ?>
            <h2><?php echo esc_html($page['scenario_areas_title']); ?></h2>
          <?php endif; ?>
          <?php if (!empty($page['scenario_intro_text'])) : ?>
            <p class="section-copy"><?php echo esc_html($page['scenario_intro_text']); ?></p>
          <?php endif; ?>
        </div>
        <div class="shell card-grid card-grid-three">
          <?php foreach ($scenario_areas as $area) : ?>
            <article class="feature-card">
              <?php if (!empty($area['image'])) : ?>
                <div class="feature-card-media">
                  <img src="<?php echo esc_url($area['image']); ?>" alt="<?php echo esc_attr($area['title'] ?? get_the_title()); ?>" width="1400" height="1200" loading="lazy" decoding="async">
                </div>
              <?php endif; ?>
              <div class="feature-card-body">
                <h3><?php echo esc_html($area['title'] ?? ''); ?></h3>
                <p><?php echo esc_html($area['text'] ?? ''); ?></p>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </section>
    <?php endif; ?>

    <?php if (!empty($cards)) : ?>
      <section class="section">
        <div class="shell section-heading">
          <?php if (!empty($page['cards_title'])) : ?>
            <h2><?php echo esc_html($page['cards_title']); ?></h2>
          <?php endif; ?>
          <?php if (!empty($page['cards_text'])) : ?>
            <p class="section-copy"><?php echo esc_html($page['cards_text']); ?></p>
          <?php endif; ?>
        </div>
        <div class="shell card-grid card-grid-two">
          <?php foreach ($cards as $card) : ?>
            <article class="statement-card">
              <h3><?php echo esc_html($card['title'] ?? ''); ?></h3>
              <p><?php echo esc_html($card['text'] ?? ''); ?></p>
            </article>
          <?php endforeach; ?>
        </div>
      </section>
    <?php endif; ?>

    <?php if (!empty($recommended_products)) : ?>
      <section class="section section-alt">
        <div class="shell section-heading">
          <?php if (!empty($page['recommended_products_title'])) : ?>
            <h2><?php echo esc_html($page['recommended_products_title']); ?></h2>
          <?php endif; ?>
          <?php if (!empty($page['recommended_products_text'])) : ?>
            <p class="section-copy"><?php echo esc_html($page['recommended_products_text']); ?></p>
          <?php endif; ?>
        </div>
        <div class="shell card-grid card-grid-two">
          <?php foreach ($recommended_products as $product) : ?>
            <article class="feature-card">
              <?php if (!empty($product['image'])) : ?>
                <div class="feature-card-media">
                  <img src="<?php echo esc_url($product['image']); ?>" alt="<?php echo esc_attr($product['title'] ?? get_the_title()); ?>" width="1400" height="1200" loading="lazy" decoding="async">
                </div>
              <?php endif; ?>
              <div class="feature-card-body">
                <h3><?php echo esc_html($product['title'] ?? ''); ?></h3>
                <p><?php echo esc_html($product['text'] ?? ''); ?></p>
                <?php if (!empty($product['link'])) : ?>
                  <a class="text-link" href="<?php echo esc_url($product['link']); ?>"><?php esc_html_e('View product route', 'mirrorcraft'); ?></a>
                <?php endif; ?>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </section>
    <?php endif; ?>

    <?php if (!empty($steps)) : ?>
      <section class="section">
        <div class="shell section-heading">
          <?php if (!empty($page['steps_title'])) : ?>
            <h2><?php echo esc_html($page['steps_title']); ?></h2>
          <?php endif; ?>
          <?php if (!empty($page['steps_text'])) : ?>
            <p class="section-copy"><?php echo esc_html($page['steps_text']); ?></p>
          <?php endif; ?>
        </div>
        <div class="shell process-grid">
          <?php foreach ($steps as $index => $step) : ?>
            <article class="process-card">
              <span class="process-step"><?php echo esc_html(sprintf('%02d', $index + 1)); ?></span>
              <h3><?php echo esc_html($step['title'] ?? ''); ?></h3>
              <p><?php echo esc_html($step['text'] ?? ''); ?></p>
            </article>
          <?php endforeach; ?>
        </div>
      </section>
    <?php endif; ?>

    <?php mirrorcraft_render_editor_content_section(array('section_class' => 'editor-bridge-section')); ?>

    <?php if (!empty($page['cta_title']) || !empty($page['cta_text'])) : ?>
      <section class="section section-tight">
        <div class="shell cta-shell">
          <div class="cta-card">
            <div>
              <?php if (!empty($page['cta_title'])) : ?>
                <h2><?php echo esc_html($page['cta_title']); ?></h2>
              <?php endif; ?>
              <?php if (!empty($page['cta_text'])) : ?>
                <p><?php echo esc_html($page['cta_text']); ?></p>
              <?php endif; ?>
            </div>
            <div class="button-row">
              <a class="button button-primary" href="<?php echo esc_url(mirrorcraft_link_by_slug('contact', '/contact/')); ?>"><?php echo esc_html($cta_button); ?></a>
            </div>
          </div>
        </div>
      </section>
    <?php endif; ?>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
