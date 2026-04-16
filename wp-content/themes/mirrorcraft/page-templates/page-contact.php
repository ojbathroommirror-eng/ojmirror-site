<?php
/*
Template Name: Contact Page
*/
get_header();
$faq_items = mirrorcraft_get_faq_items();
?>
<main id="site-main" class="site-main page-shell" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <section class="page-hero">
      <div class="shell page-hero-shell">
        <div class="page-hero-copy">
          <?php mirrorcraft_render_breadcrumbs(); ?>
          <p class="eyebrow"><?php esc_html_e('Contact', 'mirrorcraft'); ?></p>
          <h1><?php the_title(); ?></h1>
          <p class="hero-lead"><?php echo esc_html(mirrorcraft_get_page_summary(get_the_ID(), __('Share product family, application, quantity, target market, and custom requirements so the quotation process can start from a workable brief.', 'mirrorcraft'))); ?></p>
        </div>
        <aside class="page-hero-aside">
          <div class="mini-stat-list">
            <div><strong><?php echo esc_html(mirrorcraft_get_contact_email()); ?></strong><span><?php esc_html_e('Email', 'mirrorcraft'); ?></span></div>
            <?php if (mirrorcraft_get_contact_phone() !== '') : ?>
              <div><strong><?php echo esc_html(mirrorcraft_get_contact_phone()); ?></strong><span><?php esc_html_e('Phone / WhatsApp', 'mirrorcraft'); ?></span></div>
            <?php endif; ?>
            <div><strong><?php echo esc_html(mirrorcraft_get_contact_city_name()); ?></strong><span><?php esc_html_e('Operations base', 'mirrorcraft'); ?></span></div>
          </div>
        </aside>
      </div>
    </section>

    <section class="section">
      <div class="shell card-grid card-grid-two contact-layout">
        <article class="entry-panel">
          <div class="entry-content">
            <p class="eyebrow"><?php esc_html_e('Send Inquiry', 'mirrorcraft'); ?></p>
            <h2><?php esc_html_e('Tell us what you are trying to source.', 'mirrorcraft'); ?></h2>
            <p><?php esc_html_e('A good quote request usually includes product family, application, quantity range, target market, and any custom requirements.', 'mirrorcraft'); ?></p>
            <?php mirrorcraft_render_contact_form('page'); ?>
          </div>
        </article>

        <aside class="page-hero-aside contact-side-panel">
          <span class="feature-tag"><?php esc_html_e('Useful details to include', 'mirrorcraft'); ?></span>
          <ul class="feature-list">
            <li><?php esc_html_e('Target product family or reference image', 'mirrorcraft'); ?></li>
            <li><?php esc_html_e('Application or buyer type', 'mirrorcraft'); ?></li>
            <li><?php esc_html_e('Quantity range or launch timeline', 'mirrorcraft'); ?></li>
            <li><?php esc_html_e('Custom size, shape, feature, or packaging needs', 'mirrorcraft'); ?></li>
          </ul>
        </aside>
      </div>
    </section>

    <?php mirrorcraft_render_editor_content_section(array('section_class' => 'editor-bridge-section')); ?>

    <section class="section faq-section">
      <div class="shell">
        <div class="section-heading">
          <p class="eyebrow"><?php esc_html_e('FAQ', 'mirrorcraft'); ?></p>
          <h2><?php esc_html_e('Questions that often come up before a quote.', 'mirrorcraft'); ?></h2>
        </div>
        <?php mirrorcraft_render_faq_items($faq_items, 'contact-faq'); ?>
      </div>
    </section>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
