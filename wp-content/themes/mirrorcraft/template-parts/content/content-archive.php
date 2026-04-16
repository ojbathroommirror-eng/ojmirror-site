<?php
$summary = get_the_excerpt();
if ('' === trim($summary)) {
  $summary = wp_trim_words(wp_strip_all_tags(get_the_content()), 24);
}
$article_image = mirrorcraft_get_article_image_url(get_the_ID());
$article_image_alt = mirrorcraft_get_article_image_alt(get_the_ID());
?>
<article <?php post_class('entry-card archive-card'); ?>>
  <?php if ($article_image) : ?>
    <div class="article-card-media archive-card-media">
      <a href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
        <img src="<?php echo esc_url($article_image); ?>" alt="<?php echo esc_attr($article_image_alt); ?>" loading="lazy">
      </a>
    </div>
  <?php endif; ?>
  <header class="entry-header">
    <p class="card-kicker"><?php echo esc_html(get_post_type() === 'post' ? __('Article', 'mirrorcraft') : __('Page', 'mirrorcraft')); ?></p>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="archive-meta"><?php echo esc_html(get_the_date()); ?></p>
  </header>
  <div class="entry-content">
    <p><?php echo esc_html(wp_trim_words($summary, 24)); ?></p>
  </div>
  <a class="text-link" href="<?php the_permalink(); ?>"><?php esc_html_e('Read more', 'mirrorcraft'); ?></a>
</article>
