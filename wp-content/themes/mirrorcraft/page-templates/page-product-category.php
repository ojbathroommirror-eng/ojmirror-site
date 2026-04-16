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
    $hero_image = mirrorcraft_get_product_category_image_url(strpos($page_slug, 'cabinet') !== false ? 'medicine-cabinet' : 'bathroom-mirror');
    ?>
    <section class="page-hero">
      <div class="shell page-hero-shell">
        <div class="page-hero-copy">
          <p class="eyebrow"><?php esc_html_e('Category', 'mirrorcraft'); ?></p>
          <h1><?php the_title(); ?></h1>
          <p class="hero-lead"><?php echo esc_html(mirrorcraft_get_page_summary(get_the_ID(), __('This rebuilt category template is designed to explain what makes this product route distinct before dropping the buyer into details.', 'mirrorcraft'))); ?></p>
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
        <article class="statement-card">
          <h3><?php esc_html_e('Use-case fit', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('Category pages now start with where the product works best instead of burying that logic later.', 'mirrorcraft'); ?></p>
        </article>
        <article class="statement-card">
          <h3><?php esc_html_e('Spec direction', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('Size, frame, lighting, storage, and mounting decisions should be easier to explain from this new template.', 'mirrorcraft'); ?></p>
        </article>
        <article class="statement-card">
          <h3><?php esc_html_e('Quote readiness', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('The category page now acts as a bridge into a more useful brief and inquiry conversation.', 'mirrorcraft'); ?></p>
        </article>
      </div>
    </section>

    <?php mirrorcraft_render_editor_content_section(array('section_class' => 'editor-bridge-section')); ?>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
