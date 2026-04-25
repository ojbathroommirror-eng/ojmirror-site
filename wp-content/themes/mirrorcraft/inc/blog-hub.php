<?php

function mirrorcraft_enqueue_blog_hub_assets() {
  $style_path = '/assets/css/blog-hub.css';
  $style_file = get_template_directory() . $style_path;

  if (!file_exists($style_file)) {
    return;
  }

  wp_enqueue_style(
    'mirrorcraft-blog-hub',
    get_template_directory_uri() . $style_path,
    array('mirrorcraft-main'),
    mirrorcraft_asset_version($style_path)
  );
}
add_action('wp_enqueue_scripts', 'mirrorcraft_enqueue_blog_hub_assets');

function mirrorcraft_get_blog_hub_index_url() {
  $posts_page_id = (int) get_option('page_for_posts');

  if ($posts_page_id) {
    $posts_page_url = get_permalink($posts_page_id);

    if ($posts_page_url) {
      return $posts_page_url;
    }
  }

  $blog_page_id = mirrorcraft_get_page_id_by_path('blog');

  if ($blog_page_id) {
    $blog_page_url = get_permalink($blog_page_id);

    if ($blog_page_url) {
      return $blog_page_url;
    }
  }

  return mirrorcraft_link_by_slug('blog', '/blog/');
}

function mirrorcraft_get_blog_hub_paged() {
  $paged = max(1, (int) get_query_var('paged'));
  $page = max(1, (int) get_query_var('page'));

  return max($paged, $page);
}

function mirrorcraft_get_blog_hub_intro($context = 'home') {
  $intro = array(
    'eyebrow' => __('Knowledge Center', 'mirrorcraft'),
    'title'   => __('Mirror Knowledge & Project Insights', 'mirrorcraft'),
    'lead'    => __('Explore expert articles about LED mirrors, mirror cabinets, customization, project applications, and B2B purchasing guides.', 'mirrorcraft'),
  );

  if ('archive' === $context) {
    $archive_title = get_the_archive_title();
    $archive_description = trim(wp_strip_all_tags(get_the_archive_description()));

    if ($archive_title !== '') {
      $intro['title'] = $archive_title;
    }

    if ($archive_description !== '') {
      $intro['lead'] = $archive_description;
    } elseif (is_category()) {
      $intro['lead'] = sprintf(
        __('Browse sourcing notes, project stories, and buyer-facing guidance filed under %s.', 'mirrorcraft'),
        single_cat_title('', false)
      );
    } else {
      $intro['lead'] = __('Browse sourcing notes, product explainers, and project-focused articles from the knowledge center.', 'mirrorcraft');
    }
  } elseif ('search' === $context) {
    $search_query = get_search_query();

    $intro['title'] = $search_query !== ''
      ? sprintf(__('Search results for "%s"', 'mirrorcraft'), $search_query)
      : __('Search the Knowledge Center', 'mirrorcraft');
    $intro['lead'] = __('Search article titles, summaries, and article content to quickly find the right mirror buying guide, application note, or project reference.', 'mirrorcraft');
  }

  return $intro;
}

function mirrorcraft_get_blog_hub_empty_state($context = 'home') {
  $empty_state = array(
    'title' => __('No articles published yet.', 'mirrorcraft'),
    'text'  => __('Use this page for buying guides, application ideas, project lessons, and sourcing notes once the first articles are ready.', 'mirrorcraft'),
  );

  if ('archive' === $context) {
    $empty_state = array(
      'title' => __('Nothing is published in this archive yet.', 'mirrorcraft'),
      'text'  => __('Try another category or return to all articles for the latest mirror knowledge content.', 'mirrorcraft'),
    );
  } elseif ('search' === $context) {
    $empty_state = array(
      'title' => __('No matching articles found.', 'mirrorcraft'),
      'text'  => __('Try broader terms such as mirror, cabinet, custom, hotel, project, or quote.', 'mirrorcraft'),
    );
  }

  return $empty_state;
}

function mirrorcraft_get_blog_hub_query_posts($query = null) {
  if (!$query instanceof WP_Query) {
    global $wp_query;
    $query = $wp_query;
  }

  if (!$query instanceof WP_Query || !is_array($query->posts)) {
    return array();
  }

  $posts = array();

  foreach ($query->posts as $post_item) {
    if (!$post_item instanceof WP_Post) {
      continue;
    }

    if ('post' !== get_post_type($post_item)) {
      continue;
    }

    $posts[] = $post_item;
  }

  return $posts;
}

function mirrorcraft_get_blog_hub_hero_image($featured_post = null) {
  if ($featured_post instanceof WP_Post) {
    $featured_image = mirrorcraft_get_article_image_url($featured_post);

    if ($featured_image !== '') {
      return $featured_image;
    }
  }

  $hero_image = mirrorcraft_theme_image_first_available_url(
    array(
      'home-hero-banner-20260423c.webp',
      'home-hero-banner-20260423c.jpg',
      'home-hero-banner-20260422.png',
      'home-hero-banner.png',
    )
  );

  if ($hero_image !== '') {
    return $hero_image;
  }

  return mirrorcraft_get_product_category_image_url('bathroom-mirror');
}

function mirrorcraft_get_blog_hub_summary($post_id, $word_count = 24) {
  $post_id = (int) $post_id;
  $summary = trim((string) mirrorcraft_get_page_summary($post_id, ''));

  if ($summary === '') {
    return __('Open the full article for the detailed explanation.', 'mirrorcraft');
  }

  return wp_trim_words(wp_strip_all_tags($summary), $word_count, '...');
}

function mirrorcraft_get_blog_post_category_data($post_id) {
  $post_id = (int) $post_id;
  $terms = get_the_terms($post_id, 'category');

  if (is_array($terms) && !empty($terms)) {
    $selected_term = null;

    foreach ($terms as $term) {
      if (!$term instanceof WP_Term) {
        continue;
      }

      if ('uncategorized' === $term->slug) {
        if ($selected_term instanceof WP_Term) {
          continue;
        }

        $selected_term = $term;
        continue;
      }

      $selected_term = $term;
      break;
    }

    if ($selected_term instanceof WP_Term) {
      $term_link = get_term_link($selected_term);

      return array(
        'label' => $selected_term->name,
        'url'   => is_wp_error($term_link) ? '' : $term_link,
      );
    }
  }

  $haystack = strtolower(
    wp_strip_all_tags(
      get_the_title($post_id) . ' ' .
      get_the_excerpt($post_id) . ' ' .
      get_post_field('post_content', $post_id)
    )
  );

  if (preg_match('/guide|buyer|choose|compare|comparison|procurement|purchase|sourcing/', $haystack)) {
    return array(
      'label' => __('Buying Guide', 'mirrorcraft'),
      'url'   => '',
    );
  }

  if (preg_match('/custom|shape|size|finish|frame|dimmable|anti-fog|oem|odm/', $haystack)) {
    return array(
      'label' => __('Customization', 'mirrorcraft'),
      'url'   => '',
    );
  }

  if (preg_match('/project|hotel|apartment|hospitality|case study|reference/', $haystack)) {
    return array(
      'label' => __('Project Solutions', 'mirrorcraft'),
      'url'   => '',
    );
  }

  if (preg_match('/news|factory|company|launch|update/', $haystack)) {
    return array(
      'label' => __('Company News', 'mirrorcraft'),
      'url'   => '',
    );
  }

  return array(
    'label' => __('Mirror Knowledge', 'mirrorcraft'),
    'url'   => '',
  );
}

function mirrorcraft_get_blog_hub_category_terms($limit = 6) {
  $terms = get_categories(
    array(
      'taxonomy'   => 'category',
      'hide_empty' => true,
      'orderby'    => 'count',
      'order'      => 'DESC',
    )
  );

  if (empty($terms) || !is_array($terms)) {
    return array();
  }

  $current_term = is_category() ? get_queried_object() : null;
  $current_term_id = $current_term instanceof WP_Term ? (int) $current_term->term_id : 0;
  $filtered_terms = array();

  foreach ($terms as $term) {
    if (!$term instanceof WP_Term) {
      continue;
    }

    if ('uncategorized' === $term->slug && $current_term_id !== (int) $term->term_id && count($terms) > 1) {
      continue;
    }

    $filtered_terms[] = $term;
  }

  if (empty($filtered_terms)) {
    return array();
  }

  $limit = max(1, (int) $limit);
  $visible_terms = array_slice($filtered_terms, 0, $limit);

  if ($current_term_id) {
    $visible_term_ids = wp_list_pluck($visible_terms, 'term_id');

    if (!in_array($current_term_id, $visible_term_ids, true)) {
      array_pop($visible_terms);
      array_unshift($visible_terms, $current_term);
    }
  }

  return $visible_terms;
}

function mirrorcraft_get_blog_hub_category_items($limit = 6) {
  $items = array();
  $blog_index_url = mirrorcraft_get_blog_hub_index_url();
  $published_posts = wp_count_posts('post');

  $items[] = array(
    'label'  => __('All Articles', 'mirrorcraft'),
    'url'    => $blog_index_url,
    'count'  => isset($published_posts->publish) ? (int) $published_posts->publish : 0,
    'active' => !is_category(),
  );

  $terms = mirrorcraft_get_blog_hub_category_terms($limit);

  foreach ($terms as $term) {
    $term_link = get_term_link($term);

    $items[] = array(
      'label'  => $term->name,
      'url'    => is_wp_error($term_link) ? '' : $term_link,
      'count'  => (int) $term->count,
      'active' => is_category() && get_queried_object_id() === (int) $term->term_id,
    );
  }

  if (count($items) > 1) {
    return $items;
  }

  foreach (
    array(
      __('Buying Guide', 'mirrorcraft'),
      __('Customization', 'mirrorcraft'),
      __('Applications', 'mirrorcraft'),
      __('Mirror Knowledge', 'mirrorcraft'),
      __('Project Solutions', 'mirrorcraft'),
      __('Company News', 'mirrorcraft'),
    ) as $label
  ) {
    $items[] = array(
      'label'  => $label,
      'url'    => '',
      'count'  => 0,
      'active' => false,
    );
  }

  return $items;
}

function mirrorcraft_render_blog_search_form($args = array()) {
  $args = wp_parse_args(
    $args,
    array(
      'class_name'   => '',
      'placeholder'  => __('Search mirror guides, applications, customization...', 'mirrorcraft'),
      'button_label' => __('Search articles', 'mirrorcraft'),
    )
  );

  static $instance = 0;
  $instance++;
  $field_id = 'mirrorcraft-blog-search-' . $instance;
  ?>
  <form role="search" method="get" class="blog-hub-search <?php echo esc_attr($args['class_name']); ?>" action="<?php echo esc_url(home_url('/')); ?>">
    <label class="screen-reader-text" for="<?php echo esc_attr($field_id); ?>"><?php esc_html_e('Search for:', 'mirrorcraft'); ?></label>
    <div class="blog-hub-search__row">
      <input
        id="<?php echo esc_attr($field_id); ?>"
        type="search"
        class="blog-hub-search__field"
        placeholder="<?php echo esc_attr($args['placeholder']); ?>"
        value="<?php echo esc_attr(get_search_query()); ?>"
        name="s"
      >
      <input type="hidden" name="post_type" value="post">
      <button type="submit" class="blog-hub-search__button" aria-label="<?php echo esc_attr($args['button_label']); ?>">
        <svg viewBox="0 0 24 24" role="presentation" focusable="false">
          <circle cx="11" cy="11" r="6.5" fill="none" stroke="currentColor" stroke-width="1.8"/>
          <path d="m16.1 16.1 4.2 4.2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.8"/>
        </svg>
      </button>
    </div>
  </form>
  <?php
}

function mirrorcraft_render_blog_category_chips() {
  $items = mirrorcraft_get_blog_hub_category_items();

  if (empty($items)) {
    return;
  }
  ?>
  <div class="blog-hub-chips" role="list" aria-label="<?php esc_attr_e('Blog categories', 'mirrorcraft'); ?>">
    <?php foreach ($items as $item) : ?>
      <?php
      $classes = 'blog-hub-chip' . (!empty($item['active']) ? ' is-active' : '');
      $label = $item['label'] ?? '';
      $url = $item['url'] ?? '';
      ?>
      <?php if ($url !== '') : ?>
        <a class="<?php echo esc_attr($classes); ?>" href="<?php echo esc_url($url); ?>" role="listitem"><?php echo esc_html($label); ?></a>
      <?php else : ?>
        <span class="<?php echo esc_attr($classes); ?>" role="listitem"><?php echo esc_html($label); ?></span>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
  <?php
}

function mirrorcraft_render_blog_featured_article($post) {
  $post = get_post($post);

  if (!$post instanceof WP_Post) {
    return;
  }

  $category = mirrorcraft_get_blog_post_category_data($post->ID);
  $image_url = mirrorcraft_get_article_image_url($post);
  $image_alt = mirrorcraft_get_article_image_alt($post);
  ?>
  <article class="blog-hub-featured">
    <a class="blog-hub-featured__media" href="<?php echo esc_url(get_permalink($post)); ?>">
      <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>" loading="lazy" decoding="async">
    </a>
    <div class="blog-hub-featured__body">
      <div class="blog-hub-featured__header">
        <span class="blog-hub-label"><?php echo esc_html($category['label']); ?></span>
        <p class="blog-hub-featured__date"><?php echo esc_html(get_the_date('F j, Y', $post)); ?></p>
      </div>
      <h2><a href="<?php echo esc_url(get_permalink($post)); ?>"><?php echo esc_html(get_the_title($post)); ?></a></h2>
      <p><?php echo esc_html(mirrorcraft_get_blog_hub_summary($post->ID, 28)); ?></p>
      <a class="blog-hub-featured__cta" href="<?php echo esc_url(get_permalink($post)); ?>">
        <?php esc_html_e('Read Guide', 'mirrorcraft'); ?>
        <span aria-hidden="true">→</span>
      </a>
    </div>
  </article>
  <?php
}

function mirrorcraft_render_blog_collection_card($post) {
  $post = get_post($post);

  if (!$post instanceof WP_Post) {
    return;
  }

  $category = mirrorcraft_get_blog_post_category_data($post->ID);
  $image_url = mirrorcraft_get_article_image_url($post);
  $image_alt = mirrorcraft_get_article_image_alt($post);
  ?>
  <article class="blog-hub-card">
    <a class="blog-hub-card__media" href="<?php echo esc_url(get_permalink($post)); ?>">
      <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>" loading="lazy" decoding="async">
    </a>
    <div class="blog-hub-card__body">
      <span class="blog-hub-label"><?php echo esc_html($category['label']); ?></span>
      <h3><a href="<?php echo esc_url(get_permalink($post)); ?>"><?php echo esc_html(get_the_title($post)); ?></a></h3>
      <p><?php echo esc_html(mirrorcraft_get_blog_hub_summary($post->ID, 18)); ?></p>
      <div class="blog-hub-card__footer">
        <span class="blog-hub-card__date"><?php echo esc_html(get_the_date('F j, Y', $post)); ?></span>
        <a class="blog-hub-card__link" href="<?php echo esc_url(get_permalink($post)); ?>">
          <?php esc_html_e('Read More', 'mirrorcraft'); ?>
          <span aria-hidden="true">→</span>
        </a>
      </div>
    </div>
  </article>
  <?php
}

function mirrorcraft_get_blog_sidebar_posts($exclude_ids = array(), $limit = 5) {
  $exclude_ids = array_filter(array_map('intval', (array) $exclude_ids));
  $limit = max(1, (int) $limit);
  $query_args = array(
    'post_type'           => 'post',
    'posts_per_page'      => $limit,
    'ignore_sticky_posts' => true,
    'post_status'         => 'publish',
  );

  if (!empty($exclude_ids)) {
    $query_args['post__not_in'] = $exclude_ids;
  }

  if (is_category()) {
    $query_args['cat'] = (int) get_queried_object_id();
  }

  $posts = get_posts($query_args);

  if (count($posts) < $limit && is_category()) {
    $query_args['cat'] = 0;
    $query_args['post__not_in'] = array_merge($exclude_ids, wp_list_pluck($posts, 'ID'));
    $posts = array_merge($posts, get_posts($query_args));
    $posts = array_slice($posts, 0, $limit);
  }

  if (empty($posts) && !empty($exclude_ids)) {
    unset($query_args['post__not_in']);
    $posts = get_posts($query_args);
  }

  return $posts;
}

function mirrorcraft_render_blog_sidebar($args = array()) {
  $args = wp_parse_args(
    $args,
    array(
      'exclude_ids' => array(),
    )
  );

  $popular_posts = mirrorcraft_get_blog_sidebar_posts($args['exclude_ids'], 5);
  $category_items = mirrorcraft_get_blog_hub_category_items();
  $sidebar_cta_image = mirrorcraft_theme_image_first_available_url(
    array(
      'home-hero-banner-20260423c.webp',
      'home-hero-banner-20260422.png',
    )
  );
  ?>
  <aside class="blog-hub-sidebar">
    <section class="blog-hub-panel">
      <h2><?php esc_html_e('Search', 'mirrorcraft'); ?></h2>
      <?php
      mirrorcraft_render_blog_search_form(
        array(
          'class_name'  => 'blog-hub-search--sidebar',
          'placeholder' => __('Search articles...', 'mirrorcraft'),
        )
      );
      ?>
    </section>

    <?php if (!empty($popular_posts)) : ?>
      <section class="blog-hub-panel">
        <h2><?php esc_html_e('Popular Articles', 'mirrorcraft'); ?></h2>
        <div class="blog-hub-sidebar-list">
          <?php foreach ($popular_posts as $post_item) : ?>
            <article class="blog-hub-sidebar-post">
              <a class="blog-hub-sidebar-post__media" href="<?php echo esc_url(get_permalink($post_item)); ?>">
                <img
                  src="<?php echo esc_url(mirrorcraft_get_article_image_url($post_item)); ?>"
                  alt="<?php echo esc_attr(mirrorcraft_get_article_image_alt($post_item)); ?>"
                  loading="lazy"
                  decoding="async"
                >
              </a>
              <div class="blog-hub-sidebar-post__body">
                <h3><a href="<?php echo esc_url(get_permalink($post_item)); ?>"><?php echo esc_html(get_the_title($post_item)); ?></a></h3>
                <p><?php echo esc_html(get_the_date('F j, Y', $post_item)); ?></p>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </section>
    <?php endif; ?>

    <?php if (count($category_items) > 1) : ?>
      <section class="blog-hub-panel">
        <h2><?php esc_html_e('Categories', 'mirrorcraft'); ?></h2>
        <ul class="blog-hub-category-list">
          <?php foreach (array_slice($category_items, 1) as $item) : ?>
            <li>
              <?php if (!empty($item['url'])) : ?>
                <a href="<?php echo esc_url($item['url']); ?>"><?php echo esc_html($item['label']); ?></a>
              <?php else : ?>
                <span><?php echo esc_html($item['label']); ?></span>
              <?php endif; ?>
              <strong><?php echo esc_html(number_format_i18n((int) $item['count'])); ?></strong>
            </li>
          <?php endforeach; ?>
        </ul>
      </section>
    <?php endif; ?>

    <section class="blog-hub-sidebar-cta">
      <div class="blog-hub-sidebar-cta__copy">
        <p class="eyebrow"><?php esc_html_e('Custom Support', 'mirrorcraft'); ?></p>
        <h2><?php esc_html_e('Need Custom Mirror Solutions?', 'mirrorcraft'); ?></h2>
        <p><?php esc_html_e('Send us your project requirements and get expert recommendations for mirror size, function, and production planning.', 'mirrorcraft'); ?></p>
        <a class="button button-primary" href="<?php echo esc_url(mirrorcraft_link_by_slug('contact', '/contact/')); ?>">
          <?php esc_html_e('Contact Us', 'mirrorcraft'); ?>
        </a>
      </div>
      <?php if ($sidebar_cta_image !== '') : ?>
        <div class="blog-hub-sidebar-cta__media">
          <img src="<?php echo esc_url($sidebar_cta_image); ?>" alt="<?php esc_attr_e('Custom mirror project support', 'mirrorcraft'); ?>" loading="lazy" decoding="async">
        </div>
      <?php endif; ?>
    </section>
  </aside>
  <?php
}

function mirrorcraft_render_blog_pagination($query = null) {
  if (!$query instanceof WP_Query) {
    global $wp_query;
    $query = $wp_query;
  }

  if (!$query instanceof WP_Query || (int) $query->max_num_pages < 2) {
    return;
  }

  $current_page = max(1, (int) $query->get('paged'), mirrorcraft_get_blog_hub_paged());
  $links = paginate_links(
    array(
      'base'      => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
      'format'    => '?paged=%#%',
      'current'   => $current_page,
      'total'     => (int) $query->max_num_pages,
      'mid_size'  => 1,
      'prev_text' => '‹',
      'next_text' => '›',
      'type'      => 'array',
    )
  );

  if (empty($links) || !is_array($links)) {
    return;
  }
  ?>
  <nav class="blog-hub-pagination" aria-label="<?php esc_attr_e('Blog pagination', 'mirrorcraft'); ?>">
    <?php foreach ($links as $link) : ?>
      <?php echo wp_kses_post($link); ?>
    <?php endforeach; ?>
  </nav>
  <?php
}

function mirrorcraft_render_blog_support_banner() {
  ?>
  <section class="blog-hub-banner">
    <div class="shell">
      <div class="blog-hub-banner__card">
        <div class="blog-hub-banner__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" role="presentation" focusable="false">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M7 4h8l4 4v12H7V4Zm8 1.5V8h2.5M10 12h6M10 16h4"/>
            <circle cx="6.5" cy="17.5" r="3.5" fill="none" stroke="currentColor" stroke-width="1.8"/>
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.8" d="m8.9 19.9 2.6 2.6"/>
          </svg>
        </div>
        <div class="blog-hub-banner__body">
          <p class="eyebrow"><?php esc_html_e('Project Assistance', 'mirrorcraft'); ?></p>
          <h2><?php esc_html_e('Looking for Reliable LED Mirror Manufacturing Support?', 'mirrorcraft'); ?></h2>
          <p><?php esc_html_e('OJMIRROR provides custom LED mirrors and mirror cabinets for hotel projects, residential developments, commercial spaces, and global B2B buyers.', 'mirrorcraft'); ?></p>
        </div>
        <a class="button button-primary blog-hub-banner__button" href="<?php echo esc_url(mirrorcraft_link_by_slug('contact', '/contact/')); ?>">
          <?php esc_html_e('Request a Quote', 'mirrorcraft'); ?>
        </a>
      </div>
    </div>
  </section>
  <?php
}

function mirrorcraft_render_blog_hub_page($args = array()) {
  global $wp_query;

  $args = wp_parse_args(
    $args,
    array(
      'context'       => 'home',
      'query'         => null,
      'show_featured' => null,
    )
  );

  $query = $args['query'] instanceof WP_Query ? $args['query'] : $wp_query;
  $context = (string) $args['context'];
  $intro = mirrorcraft_get_blog_hub_intro($context);
  $empty_state = mirrorcraft_get_blog_hub_empty_state($context);
  $posts = mirrorcraft_get_blog_hub_query_posts($query);
  $current_page = $query instanceof WP_Query ? max(1, (int) $query->get('paged'), mirrorcraft_get_blog_hub_paged()) : 1;
  $show_featured = is_bool($args['show_featured'])
    ? $args['show_featured']
    : ('search' !== $context && 1 === $current_page && !empty($posts));
  $featured_post = null;

  if ($show_featured && !empty($posts)) {
    $featured_post = array_shift($posts);
  }
  ?>
  <main id="site-main" class="site-main page-shell blog-hub" tabindex="-1">
    <section class="blog-hub-hero">
      <div class="shell blog-hub-hero__panel">
        <div class="blog-hub-hero__copy">
          <p class="eyebrow"><?php echo esc_html($intro['eyebrow']); ?></p>
          <h1><?php echo esc_html($intro['title']); ?></h1>
          <p class="blog-hub-hero__lead"><?php echo esc_html($intro['lead']); ?></p>
          <?php mirrorcraft_render_blog_search_form(); ?>
        </div>
        <div class="blog-hub-hero__media">
          <img
            src="<?php echo esc_url(mirrorcraft_get_blog_hub_hero_image($featured_post)); ?>"
            alt="<?php esc_attr_e('Mirror knowledge center hero image', 'mirrorcraft'); ?>"
            loading="eager"
            decoding="async"
          >
        </div>
      </div>
    </section>

    <section class="blog-hub-filters">
      <div class="shell">
        <?php mirrorcraft_render_blog_category_chips(); ?>
      </div>
    </section>

    <section class="blog-hub-main">
      <div class="shell blog-hub-main__shell">
        <div class="blog-hub-main__content">
          <?php if ($featured_post instanceof WP_Post) : ?>
            <?php mirrorcraft_render_blog_featured_article($featured_post); ?>
          <?php endif; ?>

          <?php if (!empty($posts)) : ?>
            <div class="blog-hub-grid">
              <?php foreach ($posts as $post_item) : ?>
                <?php mirrorcraft_render_blog_collection_card($post_item); ?>
              <?php endforeach; ?>
            </div>
          <?php elseif (!($featured_post instanceof WP_Post)) : ?>
            <article class="empty-state blog-hub-empty">
              <h2><?php echo esc_html($empty_state['title']); ?></h2>
              <p><?php echo esc_html($empty_state['text']); ?></p>
            </article>
          <?php endif; ?>

          <?php mirrorcraft_render_blog_pagination($query); ?>
        </div>

        <?php
        mirrorcraft_render_blog_sidebar(
          array(
            'exclude_ids' => $featured_post instanceof WP_Post ? array($featured_post->ID) : array(),
          )
        );
        ?>
      </div>
    </section>

    <?php mirrorcraft_render_blog_support_banner(); ?>
  </main>
  <?php
}
