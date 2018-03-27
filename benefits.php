<section id="benefits">
  <?php $benefits_posts = query_posts('category_name=benefits');
  $first_benefits = $benefits_posts[3];
  $second_benefits = $benefits_posts[2];
  $trird_benefits = $benefits_posts[1];
  $for_benefits = $benefits_posts[0];
  ?>
    <h1 class="container most-popular-title add-right remove-padd"><?php _e("[:ru]Наши[:en]Our[:de]Unsere[:es]Nuestros[:fr]Nos[:it]I nostri[:pt]Nossos[:]"); ?> <span><?php _e("[:ru]преимущества[:en]benefits[:de]Vorteile[:es]beneficios[:fr]avantages[:it]benefici[:pt]benefícios[:]"); ?><span></h1>
    <div class="our-benefits-background">
      <div class="container our-benefits justify-content-between">
        <div class="our-benefits-f">
          <div class="our-benefits-number">01</div>
          <div class="benefits-additional-display">
            <div class="our-benefits-short-text"><?php echo $first_benefits->post_title; ?></div>
            <div>
              <img src="wp-content/themes/ruholidays/image/flag.png">
            </div>
          </div>
          <div class="our-benefits-mask">
            <h2><?php echo $first_benefits->post_title; ?></h2>
            <div>
      <?php echo $first_benefits->post_content; ?>
            </div>
          </div>
        </div>
        <div class="our-benefits-f">
          <div class="our-benefits-number">02</div>
          <div class="benefits-additional-display">
            <div class="our-benefits-short-text"><?php echo $second_benefits->post_title; ?></div>
            <div>
              <img src="wp-content/themes/ruholidays/image/tourist.png">
            </div>
          </div>
          <div class="our-benefits-mask">
            <h2><?php echo $second_benefits->post_title; ?></h2>
            <div>
              <?php echo $second_benefits->post_content; ?>
            </div>
          </div>
        </div>
        <div class="our-benefits-f">
          <div class="our-benefits-number">03</div>
          <div class="benefits-additional-display">
            <div class="our-benefits-short-text"><?php echo $trird_benefits->post_title; ?></div>
            <div>
              <img src="wp-content/themes/ruholidays/image/taxi.png">
            </div>
          </div>
          <div class="our-benefits-mask">
            <h2><?php echo $trird_benefits->post_title; ?></h2>
            <div>
              <?php echo $trird_benefits->post_content; ?>
            </div>
          </div>
        </div>
        <div class="our-benefits-f">
          <div class="our-benefits-number">04</div>
          <div class="benefits-additional-display">
            <div class="our-benefits-short-text"><?php echo $for_benefits->post_title; ?></div>
            <div>
              <img src="wp-content/themes/ruholidays/image/photo-camera.png">
            </div>
          </div>
          <div class="our-benefits-mask">
            <h2><?php echo $for_benefits->post_title; ?></h2>
            <div>
              <?php echo $for_benefits->post_content; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>