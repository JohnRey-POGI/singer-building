<?php
$title = get_field('contact_title');
$texttitle = get_field('contact_text');
$email = get_field('contact_email');
$phone = get_field('contact_phone');
$form = get_field('contact_form_shortcode');
?>

<section class="contact">
  <h2><?php echo esc_html($title); ?></h2>
  <p><?php echo esc_html($texttitle); ?></p>
  <p>Email: <?php echo esc_html($email); ?></p>
  <p>Phone: <?php echo esc_html($phone); ?></p>
  <div class="contact-form">
    <?php echo do_shortcode($form); ?>
  </div>
</section>
