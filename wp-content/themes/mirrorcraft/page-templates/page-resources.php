<?php
/*
Template Name: Resources Page
*/
get_header();
$latest_posts = get_posts(
  array(
    'post_type'           => 'post',
    'posts_per_page'      => 3,
    'ignore_sticky_posts' => true,
  )
);

$resource_cards = array(
  array(
    'title' => __('Product catalogs', 'mirrorcraft'),
    'text'  => __('Request category-specific material for LED bathroom mirrors, lighted medicine cabinets, framed mirror lines, or custom OEM and ODM programs.', 'mirrorcraft'),
  ),
  array(
    'title' => __('Buyer FAQ and sourcing notes', 'mirrorcraft'),
    'text'  => __('Use FAQ content and practical buyer notes to answer early questions about customization, samples, packing, and quotation flow.', 'mirrorcraft'),
  ),
  array(
    'title' => __('Specification support', 'mirrorcraft'),
    'text'  => __('Resources should help buyers clarify application, quantity, market, feature direction, and compliance expectations before asking for pricing.', 'mirrorcraft'),
  ),
);
?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <section class="page-hero">
      <div class="shell page-hero-shell">
        <div class="page-hero-copy">
          <?php mirrorcraft_render_breadcrumbs(); ?>
          <p class="eyebrow"><?php esc_html_e('Resources', 'mirrorcraft'); ?></p>
          <h1><?php the_title(); ?></h1>
          <p class="hero-lead"><?php echo esc_html(mirrorcraft_get_page_summary(get_the_ID(), __('Access catalog support, FAQ content, and buyer-facing material that helps move mirror and cabinet sourcing into a clearer quotation process.', 'mirrorcraft'))); ?></p>
        </div>
        <aside class="page-hero-aside">
          <span class="feature-tag"><?php esc_html_e('Useful starting points', 'mirrorcraft'); ?></span>
          <ul class="feature-list">
            <li><a class="text-link" href="<?php echo esc_url(mirrorcraft_link_by_slug('products', '/products/')); ?>"><?php esc_html_e('Browse product lines', 'mirrorcraft'); ?></a></li>
            <li><a class="text-link" href="<?php echo esc_url(mirrorcraft_link_by_slug('faq', '/faq/')); ?>"><?php esc_html_e('Read buyer FAQ', 'mirrorcraft'); ?></a></li>
            <li><a class="text-link" href="<?php echo esc_url(mirrorcraft_link_by_slug('contact', '/contact/')); ?>"><?php esc_html_e('Request catalog support', 'mirrorcraft'); ?></a></li>
          </ul>
        </aside>
      </div>
    </section>

    <section class="section section-alt">
      <div class="shell section-heading">
        <p class="eyebrow"><?php esc_html_e('Mirror Knowledge', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('Give buyers a cleaner place to collect catalogs, FAQ, and sourcing guidance.', 'mirrorcraft'); ?></h2>
      </div>
      <div class="shell card-grid card-grid-three">
        <?php foreach ($resource_cards as $card) : ?>
          <article class="statement-card">
            <h3><?php echo esc_html($card['title']); ?></h3>
            <p><?php echo esc_html($card['text']); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <?php if (!empty($latest_posts)) : ?>
      <section class="section">
        <div class="shell section-heading">
          <p class="eyebrow"><?php esc_html_e('Latest Articles', 'mirrorcraft'); ?></p>
          <h2><?php esc_html_e('Use practical articles to support product and quotation decisions.', 'mirrorcraft'); ?></h2>
        </div>
        <div class="shell post-grid">
          <?php foreach ($latest_posts as $post_item) : ?>
            <?php mirrorcraft_render_post_card($post_item->ID); ?>
          <?php endforeach; ?>
        </div>
      </section>
    <?php endif; ?>

    <section class="section section-alt">
      <div class="shell capability-shell">
        <div class="section-heading">
          <p class="eyebrow"><?php esc_html_e('What Helps Most', 'mirrorcraft'); ?></p>
          <h2><?php esc_html_e('The right resource pack starts with the right buyer context.', 'mirrorcraft'); ?></h2>
          <p class="section-copy"><?php esc_html_e('The fastest way to send the right catalog, article, or quote support is to mention the product family, application, market, and any custom requirement from the start.', 'mirrorcraft'); ?></p>
        </div>
        <article class="entry-card">
          <ul class="feature-list">
            <li><?php esc_html_e('Product family or reference model', 'mirrorcraft'); ?></li>
            <li><?php esc_html_e('Application or sector', 'mirrorcraft'); ?></li>
            <li><?php esc_html_e('Quantity range, timeline, or launch plan', 'mirrorcraft'); ?></li>
            <li><?php esc_html_e('Feature direction, packaging, or branding needs', 'mirrorcraft'); ?></li>
          </ul>
        </article>
      </div>
    </section>

    <?php mirrorcraft_render_editor_content_section(array('section_class' => 'editor-bridge-section')); ?>

    <section class="section section-tight">
      <div class="shell cta-shell">
        <div class="cta-card">
          <div>
            <p class="eyebrow"><?php esc_html_e('Need a tailored pack?', 'mirrorcraft'); ?></p>
            <h2><?php esc_html_e('Tell us which categories, applications, or buyer requirements matter most.', 'mirrorcraft'); ?></h2>
            <p><?php esc_html_e('The fastest way to get the right resource set is to mention the product route, quantity range, destination market, and any custom requirements in the inquiry.', 'mirrorcraft'); ?></p>
          </div>
          <div class="button-row">
            <a class="button button-primary" href="<?php echo esc_url(mirrorcraft_link_by_slug('contact', '/contact/')); ?>"><?php esc_html_e('Request Resources', 'mirrorcraft'); ?></a>
          </div>
        </div>
      </div>
    </section>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
