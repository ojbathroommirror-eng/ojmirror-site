<?php

function mirrorcraft_enqueue_blog_hub_assets() {
  if (is_front_page()) {
    return;
  }

  if (
    !is_home()
    && !is_archive()
    && !is_search()
    && !is_page('blog')
    && !is_page_template('page-blog.php')
  ) {
    return;
  }

  $style_path = '/assets/css/blog-hub.css';
  $style_file = get_template_directory() . $style_path;

  if (!file_exists($style_file)) {
    return;
  }

  wp_enqueue_style(
    'mirrorcraft-blog-hub',
    get_template_directory_uri() . $style_path,
    array('mirrorcraft-critical'),
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

function mirrorcraft_get_blog_hub_home_posts($query = null, $limit = 7) {
  $limit = max(1, (int) $limit);
  $posts = mirrorcraft_get_blog_hub_query_posts($query);

  if (count($posts) >= $limit) {
    return array_slice($posts, 0, $limit);
  }

  $existing_ids = wp_list_pluck($posts, 'ID');
  $fallback_posts = get_posts(
    array(
      'post_type'           => 'post',
      'post_status'         => 'publish',
      'posts_per_page'      => $limit - count($posts),
      'ignore_sticky_posts' => true,
      'post__not_in'        => array_filter(array_map('intval', $existing_ids)),
    )
  );

  return array_slice(array_merge($posts, $fallback_posts), 0, $limit);
}

function mirrorcraft_find_blog_hub_category_link($fragments = array()) {
  $fragments = array_filter(array_map('sanitize_title', (array) $fragments));
  $terms = mirrorcraft_get_blog_hub_category_terms(24);

  foreach ($terms as $term) {
    if (!$term instanceof WP_Term) {
      continue;
    }

    $haystack = sanitize_title($term->slug . ' ' . $term->name);

    foreach ($fragments as $fragment) {
      if ($fragment !== '' && false !== strpos($haystack, $fragment)) {
        $term_link = get_term_link($term);
        return is_wp_error($term_link) ? '' : $term_link;
      }
    }
  }

  return '';
}

function mirrorcraft_get_blog_hub_summary_categories() {
  $fallback_url = mirrorcraft_get_blog_hub_index_url();

  return array(
    array(
      'icon'  => 'guide',
      'label' => __('LED Mirror Guide', 'mirrorcraft'),
      'url'   => mirrorcraft_find_blog_hub_category_link(array('guide', 'buyer')) ?: $fallback_url,
    ),
    array(
      'icon'  => 'mirror',
      'label' => __('Bathroom Mirror Knowledge', 'mirrorcraft'),
      'url'   => mirrorcraft_find_blog_hub_category_link(array('bathroom', 'mirror', 'knowledge')) ?: $fallback_url,
    ),
    array(
      'icon'  => 'cabinet',
      'label' => __('Mirror Cabinet Solutions', 'mirrorcraft'),
      'url'   => mirrorcraft_find_blog_hub_category_link(array('cabinet', 'medicine')) ?: $fallback_url,
    ),
    array(
      'icon'  => 'custom',
      'label' => __('Custom Mirror Projects', 'mirrorcraft'),
      'url'   => mirrorcraft_find_blog_hub_category_link(array('custom', 'project')) ?: $fallback_url,
    ),
    array(
      'icon'  => 'hotel',
      'label' => __('Hotel & Commercial Projects', 'mirrorcraft'),
      'url'   => mirrorcraft_find_blog_hub_category_link(array('hotel', 'commercial', 'project')) ?: $fallback_url,
    ),
    array(
      'icon'  => 'quality',
      'label' => __('Quality & Technology', 'mirrorcraft'),
      'url'   => mirrorcraft_find_blog_hub_category_link(array('quality', 'technology')) ?: $fallback_url,
    ),
    array(
      'icon'  => 'tools',
      'label' => __('Installation & Maintenance', 'mirrorcraft'),
      'url'   => mirrorcraft_find_blog_hub_category_link(array('installation', 'maintenance')) ?: $fallback_url,
    ),
  );
}

function mirrorcraft_get_blog_hub_summary_demo_featured() {
  return array(
    'label'   => __('Hotel & Commercial Projects', 'mirrorcraft'),
    'title'   => __('How to Choose LED Bathroom Mirrors for Hotel Projects', 'mirrorcraft'),
    'summary' => __('A complete guide for hotel buyers and project managers. Learn about lighting, functions, durability, certification, and customization options.', 'mirrorcraft'),
    'date'    => __('May 20, 2024', 'mirrorcraft'),
    'image'   => mirrorcraft_theme_image_first_available_url(
      array(
        'hospitality-led-mirror-project.webp',
        'hospitality-led-mirror-project.png',
        'residential-led-bathroom-mirror.webp',
        'residential-led-bathroom-mirror.png',
      )
    ),
    'alt'     => __('Hotel bathroom mirror project guide', 'mirrorcraft'),
    'url'     => mirrorcraft_link_by_slug('contact', '/contact/'),
  );
}

function mirrorcraft_get_blog_hub_summary_demo_articles() {
  $read_url = mirrorcraft_link_by_slug('contact', '/contact/');

  return array(
    array(
      'label' => __('LED Mirror Guide', 'mirrorcraft'),
      'title' => __('LED Mirror Color Temperature Guide for Bathrooms', 'mirrorcraft'),
      'date'  => __('May 18, 2024', 'mirrorcraft'),
      'image' => mirrorcraft_theme_image_first_available_url(array('product-bathroom-mirror.webp', 'product-bathroom-mirror.jpg')),
      'alt'   => __('LED mirror color temperature guide', 'mirrorcraft'),
      'url'   => $read_url,
    ),
    array(
      'label' => __('Quality & Technology', 'mirrorcraft'),
      'title' => __('Anti-Fog Mirrors: How They Work and Why Projects Need Them', 'mirrorcraft'),
      'date'  => __('May 15, 2024', 'mirrorcraft'),
      'image' => mirrorcraft_theme_image_first_available_url(array('healthcare-hospital-mirror.webp', 'healthcare-hospital-mirror.png', 'product-bathroom-mirror.webp')),
      'alt'   => __('Anti-fog mirror technology article', 'mirrorcraft'),
      'url'   => $read_url,
    ),
    array(
      'label' => __('Custom Mirror Projects', 'mirrorcraft'),
      'title' => __('Custom Mirror Size Guide for Hotel Bathrooms', 'mirrorcraft'),
      'date'  => __('May 12, 2024', 'mirrorcraft'),
      'image' => mirrorcraft_theme_image_first_available_url(array('custom-mirrors-reference-20260422.webp', 'custom-mirrors-reference-20260422.png', 'residential-led-bathroom-mirror.webp')),
      'alt'   => __('Custom mirror size guide for hotel bathrooms', 'mirrorcraft'),
      'url'   => $read_url,
    ),
    array(
      'label' => __('Bathroom Mirror Knowledge', 'mirrorcraft'),
      'title' => __('Framed vs Frameless Bathroom Mirrors: Which Is Better?', 'mirrorcraft'),
      'date'  => __('May 10, 2024', 'mirrorcraft'),
      'image' => mirrorcraft_theme_image_first_available_url(array('product-bathroom-mirror.webp', 'product-bathroom-mirror.jpg')),
      'alt'   => __('Framed vs frameless bathroom mirror comparison', 'mirrorcraft'),
      'url'   => $read_url,
    ),
    array(
      'label' => __('Mirror Cabinet Solutions', 'mirrorcraft'),
      'title' => __('How to Choose Mirror Cabinets for Residential Projects', 'mirrorcraft'),
      'date'  => __('May 8, 2024', 'mirrorcraft'),
      'image' => mirrorcraft_theme_image_first_available_url(array('product-medicine-cabinet.webp', 'product-medicine-cabinet.jpg')),
      'alt'   => __('Mirror cabinet selection guide', 'mirrorcraft'),
      'url'   => $read_url,
    ),
    array(
      'label' => __('Hotel & Commercial Projects', 'mirrorcraft'),
      'title' => __('What Buyers Should Know Before Ordering LED Mirrors in Bulk', 'mirrorcraft'),
      'date'  => __('May 5, 2024', 'mirrorcraft'),
      'image' => mirrorcraft_theme_image_first_available_url(array('who-we-are-warehouse.webp', 'who-we-are-warehouse.png', 'factory.png')),
      'alt'   => __('Bulk LED mirror order preparation article', 'mirrorcraft'),
      'url'   => $read_url,
    ),
  );
}

function mirrorcraft_render_blog_hub_summary_icon($icon = 'guide') {
  $icons = array(
    'guide' => '<svg viewBox="0 0 24 24" role="presentation" focusable="false"><path d="M6 5.5A2.5 2.5 0 0 1 8.5 3H19v17.5H8.5A2.5 2.5 0 0 0 6 23V5.5Zm0 0A2.5 2.5 0 0 0 3.5 8v12.5H6" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"/></svg>',
    'mirror' => '<svg viewBox="0 0 24 24" role="presentation" focusable="false"><circle cx="12" cy="11" r="6.5" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="M12 17.5V21" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.7"/><path d="M9.5 21h5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.7"/></svg>',
    'cabinet' => '<svg viewBox="0 0 24 24" role="presentation" focusable="false"><rect x="5" y="3.5" width="14" height="17" rx="1.8" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="M12 3.5v17" fill="none" stroke="currentColor" stroke-width="1.7"/><circle cx="10" cy="12" r="0.8" fill="currentColor"/><circle cx="14" cy="12" r="0.8" fill="currentColor"/></svg>',
    'custom' => '<svg viewBox="0 0 24 24" role="presentation" focusable="false"><path d="M6 8.5V5h3.5M18 8.5V5h-3.5M6 15.5V19h3.5M18 15.5V19h-3.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.7"/><rect x="7.5" y="6.5" width="9" height="11" rx="1.8" fill="none" stroke="currentColor" stroke-width="1.7"/></svg>',
    'hotel' => '<svg viewBox="0 0 24 24" role="presentation" focusable="false"><path d="M5 20V7.5h14V20M3.5 20h17" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"/><path d="M9 7.5V5h6v2.5M8.5 12h.01M12 12h.01M15.5 12h.01M8.5 15.5h.01M12 15.5h.01M15.5 15.5h.01" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.7"/></svg>',
    'quality' => '<svg viewBox="0 0 24 24" role="presentation" focusable="false"><path d="M12 3.5 19 6v5c0 4.5-2.7 7.9-7 9.5-4.3-1.6-7-5-7-9.5V6l7-2.5Z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="1.7"/><path d="m9 12 2 2 4-4" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"/></svg>',
    'tools' => '<svg viewBox="0 0 24 24" role="presentation" focusable="false"><path d="m6 7 3 3m0 0 2.5-2.5A3 3 0 1 0 8 4.5L10.5 7M9 10l-5 5 5 5 5-5m1-7 5 5m-2.5-7.5L15 8m0 0L9 14" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"/></svg>',
    'calendar' => '<svg viewBox="0 0 24 24" role="presentation" focusable="false"><rect x="4" y="6" width="16" height="14" rx="2" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="M8 4v4M16 4v4M4 10h16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.7"/></svg>',
    'experience' => '<svg viewBox="0 0 24 24" role="presentation" focusable="false"><circle cx="12" cy="12" r="8" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="M12 8v4l2.5 2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"/></svg>',
    'globe' => '<svg viewBox="0 0 24 24" role="presentation" focusable="false"><circle cx="12" cy="12" r="8.5" fill="none" stroke="currentColor" stroke-width="1.7"/><path d="M3.5 12h17M12 3.5c2.5 2.4 4 5.4 4 8.5s-1.5 6.1-4 8.5c-2.5-2.4-4-5.4-4-8.5s1.5-6.1 4-8.5Z" fill="none" stroke="currentColor" stroke-width="1.7"/></svg>',
    'oem' => '<svg viewBox="0 0 24 24" role="presentation" focusable="false"><path d="m7 8 5 4-5 4V8Zm10 0-5 4 5 4V8Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"/><circle cx="12" cy="12" r="9" fill="none" stroke="currentColor" stroke-width="1.7"/></svg>',
    'certified' => '<svg viewBox="0 0 24 24" role="presentation" focusable="false"><path d="M12 3.5 6 6v5c0 4 2.2 7 6 8.5 3.8-1.5 6-4.5 6-8.5V6l-6-2.5Z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="1.7"/><path d="m9.2 12.1 1.8 1.8 3.8-3.8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7"/></svg>',
  );

  echo $icons[$icon] ?? $icons['guide']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}

function mirrorcraft_render_blog_hub_summary_featured($post) {
  $post = get_post($post);

  if (!$post instanceof WP_Post) {
    return;
  }

  $category = mirrorcraft_get_blog_post_category_data($post->ID);
  ?>
  <article class="blog-summary-featured">
    <a class="blog-summary-featured__media" href="<?php echo esc_url(get_permalink($post)); ?>">
      <img src="<?php echo esc_url(mirrorcraft_get_article_image_url($post)); ?>" alt="<?php echo esc_attr(mirrorcraft_get_article_image_alt($post)); ?>" loading="eager" decoding="async">
    </a>
    <div class="blog-summary-featured__body">
      <p class="blog-summary-featured__label"><?php echo esc_html($category['label']); ?></p>
      <h2><a href="<?php echo esc_url(get_permalink($post)); ?>"><?php echo esc_html(get_the_title($post)); ?></a></h2>
      <p class="blog-summary-featured__text"><?php echo esc_html(mirrorcraft_get_blog_hub_summary($post->ID, 26)); ?></p>
      <a class="blog-summary-button" href="<?php echo esc_url(get_permalink($post)); ?>">
        <?php esc_html_e('Read Article', 'mirrorcraft'); ?>
        <span aria-hidden="true">→</span>
      </a>
      <p class="blog-summary-meta">
        <span class="blog-summary-meta__icon" aria-hidden="true"><?php mirrorcraft_render_blog_hub_summary_icon('calendar'); ?></span>
        <span><?php echo esc_html(get_the_date('F j, Y', $post)); ?></span>
      </p>
    </div>
  </article>
  <?php
}

function mirrorcraft_render_blog_hub_summary_demo_featured_card($item) {
  if (!is_array($item) || empty($item['title'])) {
    return;
  }
  ?>
  <article class="blog-summary-featured">
    <a class="blog-summary-featured__media" href="<?php echo esc_url($item['url']); ?>">
      <img src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['alt']); ?>" loading="eager" decoding="async">
    </a>
    <div class="blog-summary-featured__body">
      <p class="blog-summary-featured__label"><?php echo esc_html($item['label']); ?></p>
      <h2><a href="<?php echo esc_url($item['url']); ?>"><?php echo esc_html($item['title']); ?></a></h2>
      <p class="blog-summary-featured__text"><?php echo esc_html($item['summary']); ?></p>
      <a class="blog-summary-button" href="<?php echo esc_url($item['url']); ?>">
        <?php esc_html_e('Read Article', 'mirrorcraft'); ?>
        <span aria-hidden="true">→</span>
      </a>
      <p class="blog-summary-meta">
        <span class="blog-summary-meta__icon" aria-hidden="true"><?php mirrorcraft_render_blog_hub_summary_icon('calendar'); ?></span>
        <span><?php echo esc_html($item['date']); ?></span>
      </p>
    </div>
  </article>
  <?php
}

function mirrorcraft_render_blog_hub_summary_article_card($post) {
  $post = get_post($post);

  if (!$post instanceof WP_Post) {
    return;
  }

  $category = mirrorcraft_get_blog_post_category_data($post->ID);
  ?>
  <article class="blog-summary-card">
    <a class="blog-summary-card__media" href="<?php echo esc_url(get_permalink($post)); ?>">
      <img src="<?php echo esc_url(mirrorcraft_get_article_image_url($post)); ?>" alt="<?php echo esc_attr(mirrorcraft_get_article_image_alt($post)); ?>" loading="lazy" decoding="async">
    </a>
    <div class="blog-summary-card__body">
      <p class="blog-summary-card__label"><?php echo esc_html($category['label']); ?></p>
      <h3><a href="<?php echo esc_url(get_permalink($post)); ?>"><?php echo esc_html(get_the_title($post)); ?></a></h3>
      <div class="blog-summary-card__footer">
        <p class="blog-summary-meta">
          <span class="blog-summary-meta__icon" aria-hidden="true"><?php mirrorcraft_render_blog_hub_summary_icon('calendar'); ?></span>
          <span><?php echo esc_html(get_the_date('F j, Y', $post)); ?></span>
        </p>
        <a class="blog-summary-card__link" href="<?php echo esc_url(get_permalink($post)); ?>">
          <?php esc_html_e('Read More', 'mirrorcraft'); ?>
          <span aria-hidden="true">→</span>
        </a>
      </div>
    </div>
  </article>
  <?php
}

function mirrorcraft_render_blog_hub_summary_demo_article_card($item) {
  if (!is_array($item) || empty($item['title'])) {
    return;
  }
  ?>
  <article class="blog-summary-card">
    <a class="blog-summary-card__media" href="<?php echo esc_url($item['url']); ?>">
      <img src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['alt']); ?>" loading="lazy" decoding="async">
    </a>
    <div class="blog-summary-card__body">
      <p class="blog-summary-card__label"><?php echo esc_html($item['label']); ?></p>
      <h3><a href="<?php echo esc_url($item['url']); ?>"><?php echo esc_html($item['title']); ?></a></h3>
      <div class="blog-summary-card__footer">
        <p class="blog-summary-meta">
          <span class="blog-summary-meta__icon" aria-hidden="true"><?php mirrorcraft_render_blog_hub_summary_icon('calendar'); ?></span>
          <span><?php echo esc_html($item['date']); ?></span>
        </p>
        <a class="blog-summary-card__link" href="<?php echo esc_url($item['url']); ?>">
          <?php esc_html_e('Read More', 'mirrorcraft'); ?>
          <span aria-hidden="true">→</span>
        </a>
      </div>
    </div>
  </article>
  <?php
}

function mirrorcraft_render_blog_hub_summary_home($query, $intro) {
  $featured_post = mirrorcraft_get_blog_hub_summary_demo_featured();
  $posts = mirrorcraft_get_blog_hub_summary_demo_articles();
  $hero_image = mirrorcraft_theme_image_first_available_url(
    array(
      'home-hero-banner-20260423c.webp',
      'home-hero-banner-20260423c.jpg',
      'home-hero-banner-20260422.webp',
      'home-hero-banner-20260422.png',
    )
  );
  $summary_categories = mirrorcraft_get_blog_hub_summary_categories();
  $blog_url = mirrorcraft_get_blog_hub_index_url();
  $support_image = mirrorcraft_theme_image_first_available_url(
    array(
      'who-we-are-workshop.webp',
      'who-we-are-workshop.png',
      'factory.avif',
      'factory.png',
    )
  );
  $knowledge_gallery = array(
    mirrorcraft_theme_image_first_available_url(array('who-we-are-workshop.webp', 'who-we-are-workshop.png')),
    mirrorcraft_theme_image_first_available_url(array('product-bathroom-mirror.webp', 'product-bathroom-mirror.jpg')),
    mirrorcraft_theme_image_first_available_url(array('who-we-are-inspection.webp', 'who-we-are-inspection.png')),
  );
  $knowledge_points = array(
    array('icon' => 'experience', 'title' => __('10+ Years', 'mirrorcraft'), 'text' => __('Experience', 'mirrorcraft')),
    array('icon' => 'globe', 'title' => __('100+ Countries', 'mirrorcraft'), 'text' => __('Exported', 'mirrorcraft')),
    array('icon' => 'oem', 'title' => __('OEM & ODM', 'mirrorcraft'), 'text' => __('Customization', 'mirrorcraft')),
    array('icon' => 'certified', 'title' => __('Quality & Safety', 'mirrorcraft'), 'text' => __('Certified', 'mirrorcraft')),
  );
  ?>
  <main id="site-main" class="site-main page-shell blog-hub blog-hub--summary" tabindex="-1">
    <section class="blog-summary-hero">
      <div class="shell">
        <div class="blog-summary-hero__panel">
          <img class="blog-summary-hero__image" src="<?php echo esc_url($hero_image); ?>" alt="<?php esc_attr_e('Mirror knowledge and project insights', 'mirrorcraft'); ?>" loading="eager" decoding="async">
          <div class="blog-summary-hero__overlay"></div>
          <div class="blog-summary-hero__copy">
            <p class="blog-summary-hero__eyebrow"><?php esc_html_e('Blog', 'mirrorcraft'); ?></p>
            <h1><?php echo esc_html($intro['title']); ?></h1>
            <p><?php echo esc_html($intro['lead']); ?></p>
          </div>
        </div>
      </div>
    </section>

    <?php if (!empty($featured_post)) : ?>
      <section class="blog-summary-featured-section">
        <div class="shell">
          <?php mirrorcraft_render_blog_hub_summary_demo_featured_card($featured_post); ?>
        </div>
      </section>
    <?php endif; ?>

    <section class="blog-summary-section">
      <div class="shell">
        <div class="blog-summary-section__head">
          <h2><?php esc_html_e('Explore Blog Categories', 'mirrorcraft'); ?></h2>
          <a href="<?php echo esc_url($blog_url); ?>"><?php esc_html_e('View All Categories', 'mirrorcraft'); ?> <span aria-hidden="true">→</span></a>
        </div>
        <div class="blog-summary-category-grid">
          <?php foreach ($summary_categories as $item) : ?>
            <a class="blog-summary-category-card" href="<?php echo esc_url($item['url']); ?>">
              <span class="blog-summary-category-card__icon" aria-hidden="true"><?php mirrorcraft_render_blog_hub_summary_icon($item['icon']); ?></span>
              <span class="blog-summary-category-card__label"><?php echo esc_html($item['label']); ?></span>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="blog-summary-section">
      <div class="shell">
        <div class="blog-summary-section__head">
          <h2><?php esc_html_e('Latest Articles', 'mirrorcraft'); ?></h2>
          <a href="<?php echo esc_url($blog_url); ?>"><?php esc_html_e('View All Articles', 'mirrorcraft'); ?> <span aria-hidden="true">→</span></a>
        </div>
        <?php if (!empty($posts)) : ?>
        <div class="blog-summary-grid">
          <?php foreach ($posts as $post_item) : ?>
              <?php mirrorcraft_render_blog_hub_summary_demo_article_card($post_item); ?>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
    </section>

    <section class="blog-summary-support">
      <div class="shell">
        <div class="blog-summary-support__card">
          <?php if ($support_image !== '') : ?>
            <img class="blog-summary-support__image" src="<?php echo esc_url($support_image); ?>" alt="<?php esc_attr_e('Mirror manufacturing support', 'mirrorcraft'); ?>" loading="lazy" decoding="async">
          <?php endif; ?>
          <div class="blog-summary-support__overlay"></div>
          <div class="blog-summary-support__body">
            <div class="blog-summary-support__intro">
              <h2><?php esc_html_e('Need Help Choosing Mirrors for Your Project?', 'mirrorcraft'); ?></h2>
            </div>
            <div class="blog-summary-support__copy">
              <p><?php esc_html_e('Our team can support size selection, lighting design, customization, samples, and bulk project solutions.', 'mirrorcraft'); ?></p>
              <div class="blog-summary-support__actions">
                <a class="blog-summary-button blog-summary-button--accent" href="<?php echo esc_url(mirrorcraft_link_by_slug('contact', '/contact/')); ?>"><?php esc_html_e('Contact Us', 'mirrorcraft'); ?></a>
                <a class="blog-summary-button blog-summary-button--ghost" href="<?php echo esc_url(mirrorcraft_link_by_slug('contact', '/contact/')); ?>"><?php esc_html_e('Request a Quote', 'mirrorcraft'); ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="blog-summary-knowledge">
      <div class="shell blog-summary-knowledge__shell">
        <div class="blog-summary-knowledge__copy">
          <h2><?php esc_html_e('Professional Mirror Knowledge for Global B2B Buyers', 'mirrorcraft'); ?></h2>
          <p><?php esc_html_e('OJMIRROR is a professional LED mirror and bathroom mirror manufacturer with over 10 years of experience. We provide one-stop solutions including design, customization, production, quality control, and global delivery. Our mirrors are widely used in hotels, apartments, villas, and commercial projects worldwide.', 'mirrorcraft'); ?></p>
          <div class="blog-summary-knowledge__points">
            <?php foreach ($knowledge_points as $point) : ?>
              <div class="blog-summary-point">
                <span class="blog-summary-point__icon" aria-hidden="true"><?php mirrorcraft_render_blog_hub_summary_icon($point['icon']); ?></span>
                <div>
                  <strong><?php echo esc_html($point['title']); ?></strong>
                  <span><?php echo esc_html($point['text']); ?></span>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="blog-summary-knowledge__gallery">
          <?php foreach ($knowledge_gallery as $gallery_image) : ?>
            <?php if ($gallery_image === '') { continue; } ?>
            <div class="blog-summary-knowledge__tile">
              <img src="<?php echo esc_url($gallery_image); ?>" alt="<?php esc_attr_e('Mirror manufacturing knowledge', 'mirrorcraft'); ?>" loading="lazy" decoding="async">
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  </main>
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

  if ('home' === $context) {
    mirrorcraft_render_blog_hub_summary_home($query, $intro);
    return;
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
