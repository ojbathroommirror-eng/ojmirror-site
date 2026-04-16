<?php
$eyebrow = mirrorcraft_default_text('applications_eyebrow', 'Applications');
$title = mirrorcraft_default_text('applications_title', 'Built for Hospitality, Commercial, Multifamily, Healthcare, and Senior Living');
$text  = mirrorcraft_default_text('applications_text', 'Our LED bathroom mirrors and medicine cabinets are designed around real project environments, performance needs, and installation requirements.');
$button_label = mirrorcraft_default_text('applications_button_text', 'View Use Cases');
$button_link = mirrorcraft_default_text('applications_button_link', mirrorcraft_link_by_slug('applications', '/applications'));
$apps = mirrorcraft_get_rows(
  'applications_items',
  array(
    array('item_text' => 'Hospitality'),
    array('item_text' => 'Commercial'),
    array('item_text' => 'Multifamily Housing'),
    array('item_text' => 'Healthcare'),
    array('item_text' => 'Senior Living'),
    array('item_text' => 'Architects & Designers'),
    array('item_text' => 'Purchasing Teams'),
    array('item_text' => 'Facilities Teams'),
  )
);
$app_descriptions = array(
  __('Guestroom, suite, and amenity-space mirror programs with lighting, storage, and project-ready consistency.', 'mirrorcraft'),
  __('Practical LED mirror and cabinet solutions for public washrooms, shared amenities, and commercial interiors.', 'mirrorcraft'),
  __('Repeatable mirror specifications for apartment units, build-to-rent programs, and multifamily developments.', 'mirrorcraft'),
  __('Mirror and cabinet options that support clear lighting, easy maintenance, and dependable bathroom performance.', 'mirrorcraft'),
  __('Comfort-focused mirror solutions for resident bathrooms, dressing areas, and long-term care environments.', 'mirrorcraft'),
  __('Specification support for concept development, finish direction, and project documentation.', 'mirrorcraft'),
  __('Clear product recommendations, quoting support, and sample coordination for purchasing workflows.', 'mirrorcraft'),
  __('Mirror programs planned with maintenance, replacement practicality, and day-to-day usability in mind.', 'mirrorcraft'),
);
$application_cards = mirrorcraft_get_rows('applications_cards', array());
$cards_to_render = array();

if (!empty($application_cards)) {
  foreach ($application_cards as $index => $card_row) {
    if (!is_array($card_row)) {
      continue;
    }

    $legacy_title = trim((string) ($card_row['item_text'] ?? ''));
    $title_value = trim((string) ($card_row['item_title'] ?? ''));

    $cards_to_render[] = array(
      'kicker' => trim((string) ($card_row['item_kicker'] ?? '')),
      'title'  => $title_value !== '' ? $title_value : $legacy_title,
      'text'   => trim((string) ($card_row['item_text'] ?? '')),
    );
  }
}

if (empty($cards_to_render)) {
  foreach ($apps as $index => $app) {
    $cards_to_render[] = array(
      'kicker' => sprintf(__('Focus %02d', 'mirrorcraft'), $index + 1),
      'title'  => $app['item_text'] ?? '',
      'text'   => $app_descriptions[$index] ?? __('Suitable for specification-driven buyers and product planning teams.', 'mirrorcraft'),
    );
  }
}
?>
<section id="applications" class="section">
  <div class="shell">
    <div class="section-header">
      <div>
        <p class="eyebrow"><?php echo esc_html($eyebrow); ?></p>
        <h2><?php echo esc_html($title); ?></h2>
        <p class="section-copy"><?php echo esc_html($text); ?></p>
      </div>
      <a class="button button-outline" href="<?php echo esc_url($button_link); ?>">
        <?php echo esc_html($button_label); ?>
      </a>
    </div>
    <div class="card-grid four-up applications-grid">
      <?php foreach ($cards_to_render as $card) : ?>
        <article class="info-card app-card application-tile">
          <span class="card-kicker"><?php echo esc_html($card['kicker']); ?></span>
          <h3><?php echo esc_html($card['title']); ?></h3>
          <p><?php echo esc_html($card['text']); ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
