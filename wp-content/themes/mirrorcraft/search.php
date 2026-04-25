<?php
get_header();
mirrorcraft_render_blog_hub_page(
  array(
    'context'       => 'search',
    'show_featured' => false,
  )
);
get_footer();
