<?php
/*
Template Name: Download Catalogue Page
*/
get_header();
?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <section class="page-hero">
      <div class="shell page-hero-shell page-hero-shell-basic">
        <div class="page-hero-copy">
          <?php mirrorcraft_render_breadcrumbs(); ?>
          <p class="eyebrow"><?php esc_html_e('Catalogue', 'mirrorcraft'); ?></p>
          <h1><?php the_title(); ?></h1>
          <p class="hero-lead"><?php echo esc_html(mirrorcraft_get_page_summary(get_the_ID(), __('Use this page to request the right catalogue, product pack, or buyer material for the category and market you are evaluating.', 'mirrorcraft'))); ?></p>
        </div>
      </div>
    </section>

    <section class="section section-alt">
      <div class="shell card-grid card-grid-three">
        <article class="statement-card">
          <h3><?php esc_html_e('Ask for the right pack', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('Bathroom mirrors, medicine cabinets, and custom programs should be requested differently depending on the buyer type.', 'mirrorcraft'); ?></p>
        </article>
        <article class="statement-card">
          <h3><?php esc_html_e('Share your market context', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('Project, distribution, and private label teams usually need different document depth and product direction.', 'mirrorcraft'); ?></p>
        </article>
        <article class="statement-card">
          <h3><?php esc_html_e('Move into the inquiry flow', 'mirrorcraft'); ?></h3>
          <p><?php esc_html_e('If the catalogue request is real, the next step should still be a quote-ready conversation.', 'mirrorcraft'); ?></p>
        </article>
      </div>
    </section>

    <?php mirrorcraft_render_editor_content_section(array('section_class' => 'editor-bridge-section')); ?>

    <section class="section section-tight">
      <div class="shell cta-shell">
        <div class="cta-card">
          <div>
            <p class="eyebrow"><?php esc_html_e('Need a tailored pack?', 'mirrorcraft'); ?></p>
            <h2><?php esc_html_e('Use the inquiry page and tell us which categories or project routes matter most.', 'mirrorcraft'); ?></h2>
          </div>
          <div class="button-row">
            <a class="button button-primary" href="<?php echo esc_url(mirrorcraft_link_by_slug('contact', '/contact/')); ?>"><?php esc_html_e('Request Catalogue Support', 'mirrorcraft'); ?></a>
          </div>
        </div>
      </div>
    </section>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
