<section class="portfolio">
  <h2>Portfolio</h2>
  <div class="portfolio-items">
    <?php for ($i=1; $i<=3; $i++): 
      $img = get_field("portfolio{$i}_image");
      $title = get_field("portfolio{$i}_title");
      $link = get_field("portfolio{$i}_link");
      if ($img && $title): ?>
        <div class="portfolio-item">
          <a href="<?php echo esc_url($link); ?>">
            <img src="<?php echo esc_url($img); ?>" alt="">
            <h3><?php echo esc_html($title); ?></h3>
          </a>
        </div>
    <?php endif; endfor; ?>
  </div>
</section>
