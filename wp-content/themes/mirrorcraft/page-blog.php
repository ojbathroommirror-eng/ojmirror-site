<?php
$blog_query = new WP_Query(
  array(
    'post_type'           => 'post',
    'post_status'         => 'publish',
    'posts_per_page'      => 7,
    'paged'               => mirrorcraft_get_blog_hub_paged(),
    'ignore_sticky_posts' => true,
  )
);

get_header();
mirrorcraft_render_blog_hub_page(
  array(
    'context' => 'home',
    'query'   => $blog_query,
  )
);
get_footer();
wp_reset_postdata();
