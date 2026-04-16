<?php
$summary = get_the_excerpt();
if ('' === trim($summary)) {
  $summary = wp_trim_words(wp_strip_all_tags(get_the_content()), 22);
}
?>
<article <?php post_class('entry-card archive-card'); ?>>
  <header class="entry-header">
    <p class="card-kicker"><?php esc_html_e('Page', 'mirrorcraft'); ?></p>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </header>
  <div class="entry-content">
    <p><?php echo esc_html(wp_trim_words($summary, 22)); ?></p>
  </div>
  <a class="text-link" href="<?php the_permalink(); ?>"><?php esc_html_e('Open page', 'mirrorcraft'); ?></a>
</article>
