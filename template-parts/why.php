<?php
$title = get_field('why_title');
$text = get_field('why_text');
$image = get_field('why_image');
?>

<section class="why">
  <div class="why-text">
    <h2><?php echo esc_html($title); ?></h2>
    <p><?php echo esc_html($text); ?></p>
  </div>
  <div class="why-image">
    <img src="<?php echo esc_url($image); ?>" alt="">
  </div>
</section>
