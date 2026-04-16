<?php
$article_image = mirrorcraft_get_article_image_url(get_the_ID());
$article_image_alt = mirrorcraft_get_article_image_alt(get_the_ID());
?>
<article <?php post_class('entry-card entry-card-rich'); ?>>
  <header class="entry-header">
    <p class="eyebrow"><?php esc_html_e('Article', 'mirrorcraft'); ?></p>
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <div class="entry-meta">
      <span><?php echo esc_html(get_the_date()); ?></span>
      <?php
      $category_list = get_the_category_list(', ');
      if ($category_list) :
        ?>
        <span><?php echo wp_kses_post($category_list); ?></span>
      <?php endif; ?>
    </div>
  </header>
  <?php if ($article_image) : ?>
    <div class="article-hero-media single-article-media">
      <img src="<?php echo esc_url($article_image); ?>" alt="<?php echo esc_attr($article_image_alt); ?>" loading="eager">
    </div>
  <?php endif; ?>
  <div class="entry-content prose-flow">
    <?php the_content(); ?>
  </div>
</article>
