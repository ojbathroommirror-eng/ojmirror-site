<?php
/*
Template Name: Product Category Page
*/
get_header();
?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <?php
    $page_slug = get_post_field('post_name', get_the_ID());
    $category = mirrorcraft_get_product_category_page_data($page_slug);
    $hero_image = mirrorcraft_get_product_category_image_url($category['image_key'] ?? (strpos($page_slug, 'cabinet') !== false ? 'medicine-cabinet' : 'bathroom-mirror'));
    ?>
    <section class="page-hero">
      <div class="shell page-hero-shell">
        <div class="page-hero-copy">
          <?php mirrorcraft_render_breadcrumbs(); ?>
          <p class="eyebrow"><?php esc_html_e('Product Category', 'mirrorcraft'); ?></p>
          <h1><?php the_title(); ?></h1>
          <p class="hero-lead"><?php echo esc_html(mirrorcraft_get_page_summary(get_the_ID(), $category['intro'] ?? __('Choose the product route that best fits the application, feature mix, and commercial target of the order.', 'mirrorcraft'))); ?></p>
        </div>
        <aside class="page-hero-aside page-hero-media">
          <?php if ($hero_image) : ?>
            <img src="<?php echo esc_url($hero_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" width="1200" height="1200" loading="eager" decoding="async">
          <?php endif; ?>
        </aside>
      </div>
    </section>

    <section class="section section-alt">
      <div class="shell card-grid card-grid-three">
        <article class="statement-card statement-card-dark">
          <h3><?php echo esc_html($category['overview_title'] ?? __('Category Overview', 'mirrorcraft')); ?></h3>
          <p><?php echo esc_html($category['overview_text'] ?? __('This category helps buyers compare the main product direction before locking specifications.', 'mirrorcraft')); ?></p>
        </article>
        <article class="statement-card">
          <h3><?php esc_html_e('Buyer Priorities', 'mirrorcraft'); ?></h3>
          <ul class="feature-list">
            <?php foreach (($category['buyer_tags'] ?? array()) as $tag) : ?>
              <li><?php echo esc_html($tag); ?></li>
            <?php endforeach; ?>
          </ul>
        </article>
        <article class="statement-card">
          <h3><?php esc_html_e('Typical Use Cases', 'mirrorcraft'); ?></h3>
          <ul class="feature-list">
            <?php foreach (($category['use_cases'] ?? array()) as $use_case) : ?>
              <li><?php echo esc_html($use_case); ?></li>
            <?php endforeach; ?>
          </ul>
        </article>
      </div>
    </section>

    <section class="section">
      <div class="shell card-grid card-grid-two">
        <article class="entry-card">
          <p class="eyebrow"><?php esc_html_e('Core Features', 'mirrorcraft'); ?></p>
          <ul class="feature-list">
            <?php foreach (($category['features'] ?? array()) as $feature) : ?>
              <li><?php echo esc_html($feature['item_text'] ?? ''); ?></li>
            <?php endforeach; ?>
          </ul>
        </article>
        <article class="entry-card">
          <p class="eyebrow"><?php esc_html_e('Customization Options', 'mirrorcraft'); ?></p>
          <ul class="feature-list">
            <?php foreach (($category['options'] ?? array()) as $option) : ?>
              <li><?php echo esc_html($option['item_text'] ?? ''); ?></li>
            <?php endforeach; ?>
          </ul>
        </article>
      </div>
    </section>

    <?php mirrorcraft_render_editor_content_section(array('section_class' => 'editor-bridge-section')); ?>

    <?php if (!empty($category['closing'])) : ?>
      <section class="section section-tight">
        <div class="shell cta-shell">
          <div class="cta-card">
            <div>
              <p class="eyebrow"><?php esc_html_e('Next Step', 'mirrorcraft'); ?></p>
              <h2><?php esc_html_e('Move this category into a workable quote brief.', 'mirrorcraft'); ?></h2>
              <p><?php echo esc_html($category['closing']); ?></p>
            </div>
            <div class="button-row">
              <a class="button button-primary" href="<?php echo esc_url(mirrorcraft_link_by_slug('contact', '/contact/')); ?>"><?php esc_html_e('Request a Quote', 'mirrorcraft'); ?></a>
            </div>
          </div>
        </div>
      </section>
    <?php endif; ?>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
