<?php
$front_page_id = mirrorcraft_get_front_page_id();
$eyebrow = mirrorcraft_default_text('customization_eyebrow', 'Custom Solutions', $front_page_id);
$title = mirrorcraft_default_text('customization_title', 'Customize LED Mirrors and Cabinets for Your Project Requirements', $front_page_id);
$text  = mirrorcraft_default_text('customization_text', 'Use OJMIRROR as a product partner for shape development, smart function selection, finish control, and packaging built around your target sector and specification needs.', $front_page_id);
$appearance_kicker = mirrorcraft_default_text('customization_appearance_kicker', 'Size, Shape or Style', $front_page_id);
$appearance_title = mirrorcraft_default_text('customization_appearance_title', 'Develop a collection that matches your brand direction', $front_page_id);
$appearance_items = mirrorcraft_get_rows('customization_items', array(
  array('item_text' => 'Custom size, shape, and mounting configuration'),
  array('item_text' => 'Frame, edge, and cabinet style adjustments'),
  array('item_text' => 'Mirror orientation and project-appropriate proportions'),
  array('item_text' => 'Logo, label, and carton presentation support'),
), $front_page_id);
$function_kicker = mirrorcraft_default_text('customization_function_kicker', 'Multi-Functions', $front_page_id);
$function_title = mirrorcraft_default_text('customization_function_title', 'Choose the features that matter for your buyers', $front_page_id);
$function_items = mirrorcraft_get_rows('customization_function_items', array(
  array('item_text' => 'Touch switch, sensor, and dimming options'),
  array('item_text' => 'Anti-fog, Bluetooth, and color temperature control'),
  array('item_text' => 'Cabinet lighting, defogging, and practical upgrades'),
  array('item_text' => 'Specification matching for hospitality, commercial, multifamily, healthcare, and senior living programs'),
), $front_page_id);
$reference_image_url = mirrorcraft_get_customization_reference_image_url();
$controls_image_url = mirrorcraft_get_customization_controls_image_url();
$reference_image_style = $reference_image_url ? '--customization-collage-image:url(' . esc_url($reference_image_url) . ');' : '';
$controls_image_style = $controls_image_url ? '--customization-controls-image:url(' . esc_url($controls_image_url) . ');' : '';
?>
<section id="customization-services" class="section section-alt">
  <div class="shell customization-layout">
    <div class="section-header customization-showcase-header">
      <div>
        <p class="eyebrow"><?php echo esc_html($eyebrow); ?></p>
        <h2><?php echo esc_html($title); ?></h2>
        <p class="section-copy"><?php echo esc_html($text); ?></p>
      </div>
    </div>
    <div class="customization-showcase-grid">
      <article class="info-card customization-panel customization-panel-appearance">
        <span class="card-kicker"><?php echo esc_html($appearance_kicker); ?></span>
        <h3><?php echo esc_html($appearance_title); ?></h3>
        <ul class="feature-list spec-list">
          <?php foreach ($appearance_items as $item) : ?>
            <li><?php echo esc_html($item['item_text'] ?? ''); ?></li>
          <?php endforeach; ?>
        </ul>
      </article>
      <div
        class="info-card customization-visual-card customization-visual-card-shapes"
        style="<?php echo esc_attr($reference_image_style); ?>"
        role="img"
        aria-label="<?php esc_attr_e('Mirror shape and style reference board', 'mirrorcraft'); ?>"
      ></div>
      <div
        class="info-card customization-visual-card customization-visual-card-controls"
        style="<?php echo esc_attr($controls_image_style); ?>"
        role="img"
        aria-label="<?php esc_attr_e('Mirror smart function and touch control demo', 'mirrorcraft'); ?>"
      ></div>
      <article class="info-card customization-panel customization-panel-dark customization-panel-functions">
        <span class="card-kicker"><?php echo esc_html($function_kicker); ?></span>
        <h3><?php echo esc_html($function_title); ?></h3>
        <ul class="feature-list spec-list">
          <?php foreach ($function_items as $item) : ?>
            <li><?php echo esc_html($item['item_text'] ?? ''); ?></li>
          <?php endforeach; ?>
        </ul>
      </article>
    </div>
  </div>
</section>
