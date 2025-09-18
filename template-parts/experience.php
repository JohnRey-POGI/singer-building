<?php
$title = get_field('experience_title');
$text = get_field('experience_text');
$image = get_field('experience_image');
/*
<section class="experience">
  <div class="experience-text">
    <h2><?php echo esc_html($title); ?></h2>
    <p><?php echo esc_html($text); ?></p>
  </div>
  <div class="experience-image">
    <img src="<?php echo esc_url($image); ?>" alt="">
  </div>
</section>
*/
?>

<section class="experience" style="background-image: url('<?php echo esc_url($image); ?>');">
  <div class="experience-text">
    <h2><?php echo esc_html($title); ?></h2>
    <p><?php echo esc_html($text); ?></p>
  </div>
</section>