<?php
/*
Template Name: Terms and Conditions
*/
get_header();

$terms_contact_email  = mirrorcraft_get_contact_email();
$terms_contact_phone  = mirrorcraft_get_contact_phone();
$terms_contact_href   = mirrorcraft_get_contact_phone_href();
$terms_contact_link   = mirrorcraft_link_by_slug('contact', '/contact/');
$terms_products_link  = mirrorcraft_link_by_slug('products', '/products/');
$terms_hero_image     = mirrorcraft_theme_image_url('hospitality-led-mirror-project.png');

if ($terms_hero_image === '') {
  $terms_hero_image = mirrorcraft_theme_image_url('home-hero-banner-20260422.png');
}

$terms_sections = array(
  array(
    'id'      => 'introduction',
    'number'  => '01',
    'title'   => __('Introduction', 'mirrorcraft'),
    'lead'    => __('These Terms and Conditions govern quotations, orders, and transactions between OJMIRROR and buyers for LED mirrors, mirror cabinets, and related customization programs.', 'mirrorcraft'),
    'content' => array(
      __('By requesting a quote, approving drawings, paying a deposit, or placing an order, the buyer agrees to these terms.', 'mirrorcraft'),
      __('If a signed contract or proforma invoice contains different terms, that signed document will take priority for that specific order.', 'mirrorcraft'),
    ),
  ),
  array(
    'id'      => 'product-customization',
    'number'  => '02',
    'title'   => __('Product & Customization', 'mirrorcraft'),
    'lead'    => __('OJMIRROR provides custom manufacturing support for mirror dimensions, lighting, cabinet structure, frame finish, packaging, and other OEM / ODM requirements.', 'mirrorcraft'),
    'bullets' => array(
      __('All specifications should be confirmed through drawings, approved samples, or written approval before mass production.', 'mirrorcraft'),
      __('Minor differences caused by materials, process tolerances, or screen display may occur and are considered acceptable within industry standards.', 'mirrorcraft'),
      __('Custom molds, tooling, or sample development charges will be confirmed separately when applicable.', 'mirrorcraft'),
    ),
    'callout' => array(
      'tone'  => 'note',
      'title' => __('Custom orders cannot be canceled once production begins.', 'mirrorcraft'),
      'text'  => __('Mirror cabinets between sample and mass production may vary slightly because of hardware batch, coating, and assembly tolerances.', 'mirrorcraft'),
    ),
  ),
  array(
    'id'      => 'pricing-payment',
    'number'  => '03',
    'title'   => __('Pricing & Payment', 'mirrorcraft'),
    'lead'    => __('All pricing is based on the final specification, quantity, packaging route, and agreed trade terms shown on the quotation or proforma invoice.', 'mirrorcraft'),
    'bullets' => array(
      __('Standard payment terms are 30% deposit before production and 70% balance before shipment, unless otherwise agreed in writing.', 'mirrorcraft'),
      __('Bank charges outside China are the responsibility of the buyer.', 'mirrorcraft'),
      __('Quoted prices may be adjusted if specifications, raw-material costs, or order quantities change before confirmation.', 'mirrorcraft'),
    ),
  ),
  array(
    'id'      => 'production-lead-time',
    'number'  => '04',
    'title'   => __('Production & Lead Time', 'mirrorcraft'),
    'lead'    => __('Lead times usually range from 25 to 45 days after deposit, sample approval, and artwork confirmation, depending on program complexity.', 'mirrorcraft'),
    'bullets' => array(
      __('Sample timelines and bulk production timelines are estimates and may be affected by material availability or public holidays.', 'mirrorcraft'),
      __('Any delay caused by missing approvals, revised drawings, or payment issues will extend the delivery schedule accordingly.', 'mirrorcraft'),
    ),
  ),
  array(
    'id'      => 'shipping-delivery',
    'number'  => '05',
    'title'   => __('Shipping & Delivery', 'mirrorcraft'),
    'lead'    => __('Delivery terms follow the agreed Incoterm shown on the confirmed order, such as EXW, FOB, CIF, DDP, or another written arrangement.', 'mirrorcraft'),
    'bullets' => array(
      __('The buyer is responsible for import licenses, customs clearance, duties, and local delivery unless otherwise agreed.', 'mirrorcraft'),
      __('Packaging method, palletization, carton marking, and shipping documents are prepared according to the approved route and destination requirements.', 'mirrorcraft'),
    ),
    'callout' => array(
      'tone'  => 'neutral',
      'title' => __('Risk transfers according to the agreed trade term.', 'mirrorcraft'),
      'text'  => __('Please confirm the target port, consignee details, and final shipping instruction before cargo release.', 'mirrorcraft'),
    ),
  ),
  array(
    'id'      => 'inspection-acceptance',
    'number'  => '06',
    'title'   => __('Inspection & Acceptance', 'mirrorcraft'),
    'lead'    => __('Buyers may request in-line checks, pre-shipment inspection, or third-party inspection before dispatch.', 'mirrorcraft'),
    'bullets' => array(
      __('Any visible issue relating to quantity, finish, or packaging should be reported within 7 days after receipt.', 'mirrorcraft'),
      __('Claims should include photos, videos, carton labels, and batch references so the production team can trace the issue quickly.', 'mirrorcraft'),
    ),
  ),
  array(
    'id'      => 'damage-claims',
    'number'  => '07',
    'title'   => __('Damage & Claims Policy', 'mirrorcraft'),
    'lead'    => __('Because mirrors and cabinets are fragile products, shipping claims must be documented clearly and raised without delay.', 'mirrorcraft'),
    'bullets' => array(
      __('Minor defects or transport marks that do not affect safe use may be resolved by parts support, accessory replacement, or commercial credit.', 'mirrorcraft'),
      __('Severe damage that makes goods unusable should be confirmed with delivery evidence, outer carton photos, and quantity records.', 'mirrorcraft'),
      __('No claim will be accepted where products have been modified, misused, or installed against the supplied instructions.', 'mirrorcraft'),
    ),
    'callout' => array(
      'tone'  => 'warning',
      'title' => __('Please inspect the cargo before installation.', 'mirrorcraft'),
      'text'  => __('Installation or resale of visibly damaged items may limit the scope of any compensation request.', 'mirrorcraft'),
    ),
  ),
  array(
    'id'      => 'warranty',
    'number'  => '08',
    'title'   => __('Warranty', 'mirrorcraft'),
    'lead'    => __('Warranty coverage depends on the confirmed product route, electrical specification, application environment, and agreed project standard.', 'mirrorcraft'),
    'bullets' => array(
      __('The warranty does not cover damage caused by improper installation, unauthorized repair, abuse, voltage irregularity, or unsuitable site conditions.', 'mirrorcraft'),
      __('Replacement parts, repair guidance, or commercial solutions will be offered according to the confirmed fault analysis and order history.', 'mirrorcraft'),
    ),
  ),
  array(
    'id'      => 'intellectual-property',
    'number'  => '09',
    'title'   => __('Intellectual Property', 'mirrorcraft'),
    'lead'    => __('Buyer-supplied logos, artwork, packaging layouts, and brand assets remain the property of the buyer or their rights holder.', 'mirrorcraft'),
    'bullets' => array(
      __('OJMIRROR will use buyer-provided assets only for the approved order, sampling, and delivery scope.', 'mirrorcraft'),
      __('Custom drawings, manufacturing routes, and quotation documents prepared by OJMIRROR remain confidential and should not be redistributed without written approval.', 'mirrorcraft'),
    ),
  ),
  array(
    'id'      => 'limitation-liability',
    'number'  => '10',
    'title'   => __('Limitation of Liability', 'mirrorcraft'),
    'lead'    => __('OJMIRROR is not liable for indirect, incidental, or consequential losses such as project delay penalties, lost profits, or third-party claims beyond the confirmed order value.', 'mirrorcraft'),
    'bullets' => array(
      __('The maximum total liability for any accepted claim will not exceed the invoiced value of the affected goods.', 'mirrorcraft'),
      __('Commercial remedies may include replacement parts, remake, repair support, or credit, depending on the verified issue and practical route.', 'mirrorcraft'),
    ),
  ),
  array(
    'id'      => 'force-majeure',
    'number'  => '11',
    'title'   => __('Force Majeure', 'mirrorcraft'),
    'lead'    => __('Neither party is liable for delay or failure caused by circumstances beyond reasonable control, including natural disasters, war, epidemic restrictions, labor disruption, port congestion, or government action.', 'mirrorcraft'),
    'content' => array(
      __('Where possible, both parties should communicate quickly and agree on a revised delivery plan or alternative execution route.', 'mirrorcraft'),
    ),
  ),
  array(
    'id'      => 'governing-law',
    'number'  => '12',
    'title'   => __('Governing Law', 'mirrorcraft'),
    'lead'    => __('These Terms and Conditions are governed by the laws of the People\'s Republic of China unless another jurisdiction is expressly agreed in writing.', 'mirrorcraft'),
    'content' => array(
      __('Any dispute should first be addressed through good-faith commercial negotiation. If unresolved, the dispute may be submitted to a competent court or arbitration forum agreed by both parties.', 'mirrorcraft'),
    ),
  ),
);
?>
<main id="site-main" class="site-main page-shell legal-page legal-page--terms" tabindex="-1">
  <?php while (have_posts()) : the_post(); ?>
    <section class="section legal-page-hero-section" id="legal-top">
      <div class="shell legal-page-hero-shell">
        <div class="legal-page-hero-copy">
          <?php mirrorcraft_render_breadcrumbs(); ?>
          <p class="eyebrow"><?php esc_html_e('Terms & Conditions', 'mirrorcraft'); ?></p>
          <h1><?php the_title(); ?></h1>
          <p class="legal-page-hero-lead"><?php esc_html_e('Clear terms build reliable partnerships across quotation, sampling, production, shipment, and after-sales coordination.', 'mirrorcraft'); ?></p>
        </div>

        <div class="legal-page-hero-media">
          <?php if ($terms_hero_image !== '') : ?>
            <img src="<?php echo esc_url($terms_hero_image); ?>" alt="<?php esc_attr_e('LED mirror project interior', 'mirrorcraft'); ?>" loading="eager" decoding="async">
          <?php endif; ?>
        </div>
      </div>
    </section>

    <section class="section legal-page-content-section">
      <div class="shell legal-page-layout">
        <aside class="legal-page-sidebar">
          <nav class="legal-page-nav" aria-label="<?php esc_attr_e('Terms anchor navigation', 'mirrorcraft'); ?>">
            <ol>
              <?php foreach ($terms_sections as $section) : ?>
                <li>
                  <a href="#<?php echo esc_attr($section['id']); ?>">
                    <span class="legal-page-nav-number"><?php echo esc_html($section['number']); ?>.</span>
                    <span><?php echo esc_html($section['title']); ?></span>
                  </a>
                </li>
              <?php endforeach; ?>
            </ol>
          </nav>
        </aside>

        <article class="legal-page-main">
          <?php foreach ($terms_sections as $section) : ?>
            <section class="legal-section" id="<?php echo esc_attr($section['id']); ?>">
              <header class="legal-section__header">
                <h2><?php echo esc_html($section['number'] . '. ' . $section['title']); ?></h2>
              </header>

              <div class="legal-section__body">
                <?php if (!empty($section['lead'])) : ?>
                  <p class="legal-section__lead"><?php echo esc_html($section['lead']); ?></p>
                <?php endif; ?>

                <?php if (!empty($section['content'])) : ?>
                  <?php foreach ($section['content'] as $paragraph) : ?>
                    <p><?php echo esc_html($paragraph); ?></p>
                  <?php endforeach; ?>
                <?php endif; ?>

                <?php if (!empty($section['bullets'])) : ?>
                  <ul class="legal-section__list">
                    <?php foreach ($section['bullets'] as $bullet) : ?>
                      <li><?php echo esc_html($bullet); ?></li>
                    <?php endforeach; ?>
                  </ul>
                <?php endif; ?>

                <?php if (!empty($section['callout']) && is_array($section['callout'])) : ?>
                  <div class="legal-callout legal-callout--<?php echo esc_attr($section['callout']['tone'] ?? 'neutral'); ?>">
                    <strong><?php echo esc_html($section['callout']['title'] ?? ''); ?></strong>
                    <p><?php echo esc_html($section['callout']['text'] ?? ''); ?></p>
                  </div>
                <?php endif; ?>
              </div>
            </section>
          <?php endforeach; ?>

          <section class="legal-contact-card">
            <div class="legal-contact-copy">
              <p class="eyebrow"><?php esc_html_e('Still have questions?', 'mirrorcraft'); ?></p>
              <h2><?php esc_html_e('Need help clarifying a term before you place an order?', 'mirrorcraft'); ?></h2>
              <p><?php esc_html_e('Our team can explain customization scope, payment steps, lead time, packaging, and shipment responsibilities before quotation confirmation.', 'mirrorcraft'); ?></p>
              <ul class="legal-contact-list">
                <li><a href="mailto:<?php echo antispambot(esc_attr($terms_contact_email)); ?>"><?php echo esc_html($terms_contact_email); ?></a></li>
                <li><a href="tel:<?php echo esc_attr($terms_contact_href); ?>"><?php echo esc_html($terms_contact_phone); ?></a></li>
              </ul>
            </div>

            <div class="legal-contact-actions">
              <a class="button button-primary" href="<?php echo esc_url($terms_contact_link); ?>"><?php esc_html_e('Contact Our Team', 'mirrorcraft'); ?></a>
              <a class="button button-secondary" href="<?php echo esc_url($terms_products_link); ?>"><?php esc_html_e('Browse Products', 'mirrorcraft'); ?></a>
            </div>
          </section>
        </article>
      </div>
    </section>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
