<?php
$title = mirrorcraft_default_text('blog_section_title', 'Knowledge & Resources');
$text  = mirrorcraft_default_text('blog_section_text', 'Use content to answer buyer questions, explain product differences, and support specification, sample, and quotation discussions.');
$count = (int) mirrorcraft_default_text('blog_posts_count', 6);
if ($count < 6) {
  $count = 6;
}
$fallback_cards = array(
  array(
    'title' => __('How to Specify LED Bathroom Mirrors for Hospitality Projects', 'mirrorcraft'),
    'text'  => __('A practical guide covering lighting direction, anti-fog, mounting, and repeatable room-type specifications.', 'mirrorcraft'),
    'image' => mirrorcraft_get_article_image_url(null, __('How to Specify LED Bathroom Mirrors for Hospitality Projects', 'mirrorcraft')),
  ),
  array(
    'title' => __('Medicine Cabinet Questions Project Teams Should Ask Early', 'mirrorcraft'),
    'text'  => __('Use this topic to explain size, installation, door configuration, and lighting expectations before quotation.', 'mirrorcraft'),
    'image' => mirrorcraft_get_article_image_url(null, __('Medicine Cabinet Questions Project Teams Should Ask Early', 'mirrorcraft')),
  ),
  array(
    'title' => __('What to Prepare Before Sending a Mirror Project Inquiry', 'mirrorcraft'),
    'text'  => __('A simple article that helps customers send clearer requirements for drawings, dimensions, functions, and delivery expectations.', 'mirrorcraft'),
    'image' => mirrorcraft_get_article_image_url(null, __('What to Prepare Before Sending a Mirror Project Inquiry', 'mirrorcraft')),
  ),
  array(
    'title' => __('How to Compare Bathroom Mirror Styles for Different Applications', 'mirrorcraft'),
    'text'  => __('Explain the difference between framed, frameless, round, rectangular, and project-driven mirror selections.', 'mirrorcraft'),
    'image' => mirrorcraft_get_article_image_url(null, __('How to Compare Bathroom Mirror Styles for Different Applications', 'mirrorcraft')),
  ),
  array(
    'title' => __('How to Evaluate Medicine Cabinet Features for Multifamily and Healthcare', 'mirrorcraft'),
    'text'  => __('Use this article to highlight storage layout, sensor controls, anti-fog options, and LED configuration choices.', 'mirrorcraft'),
    'image' => mirrorcraft_get_article_image_url(null, __('How to Evaluate Medicine Cabinet Features for Multifamily and Healthcare', 'mirrorcraft')),
  ),
  array(
    'title' => __('From Sample to Shipment: A Typical Custom Mirror Project Workflow', 'mirrorcraft'),
    'text'  => __('Show buyers how size, finish, smart functions, packaging, and approvals move from sample to mass production.', 'mirrorcraft'),
    'image' => mirrorcraft_get_article_image_url(null, __('From Sample to Shipment: A Typical Custom Mirror Project Workflow', 'mirrorcraft')),
  ),
);
$resource_items = array();
?>
<section class="section section-alt">
  <div class="shell">
    <div class="section-header">
      <div>
        <p class="eyebrow"><?php esc_html_e('Knowledge Center', 'mirrorcraft'); ?></p>
        <h2><?php echo esc_html($title); ?></h2>
        <p class="section-copy"><?php echo esc_html($text); ?></p>
      </div>
      <a class="button button-outline" href="<?php echo esc_url(mirrorcraft_link_by_slug('blog', '/blog')); ?>">
        <?php esc_html_e('View All Articles', 'mirrorcraft'); ?>
      </a>
    </div>
    <div class="card-grid three-up resource-grid">
      <?php
      $blog_query = new WP_Query(
        array(
          'posts_per_page'         => max($count + 4, 10),
          'post_status'            => 'publish',
          'ignore_sticky_posts'    => true,
          'no_found_rows'          => true,
          'update_post_meta_cache' => false,
          'update_post_term_cache' => false,
        )
      );
      if ($blog_query->have_posts()) :
        while ($blog_query->have_posts()) :
          $blog_query->the_post();

          if ('hello-world' === get_post_field('post_name', get_the_ID())) {
            continue;
          }

          $resource_items[] = array(
            'title' => get_the_title(),
            'text'  => wp_trim_words(get_the_excerpt(), 18),
            'link'  => get_permalink(),
            'image' => mirrorcraft_get_article_image_url(get_the_ID()),
            'alt'   => mirrorcraft_get_article_image_alt(get_the_ID()),
          );

          if (count($resource_items) >= $count) {
            break;
          }
        endwhile;
        wp_reset_postdata();

      endif;

      $fallback_index = 0;
      while (count($resource_items) < $count && isset($fallback_cards[$fallback_index])) {
        $resource_items[] = $fallback_cards[$fallback_index];
        $fallback_index++;
      }

      foreach ($resource_items as $card) :
        ?>
        <article class="info-card resource-card">
          <?php if (!empty($card['image'])) : ?>
            <div class="article-card-media resource-card-media">
              <?php if (!empty($card['link'])) : ?>
                <a href="<?php echo esc_url($card['link']); ?>" aria-hidden="true" tabindex="-1">
                  <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['alt'] ?? $card['title']); ?>" loading="lazy">
                </a>
              <?php else : ?>
                <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['alt'] ?? $card['title']); ?>" loading="lazy">
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <h3>
            <?php if (!empty($card['link'])) : ?>
              <a href="<?php echo esc_url($card['link']); ?>"><?php echo esc_html($card['title']); ?></a>
            <?php else : ?>
              <?php echo esc_html($card['title']); ?>
            <?php endif; ?>
          </h3>
          <p><?php echo esc_html($card['text']); ?></p>
        </article>
        <?php
      endforeach;
      ?>
    </div>
  </div>
</section>
