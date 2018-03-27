<section class="container most-popular">
  <h1 class="most-popular-title"><?php _e("[:ru]Самые[:en]The most[:de]Das[:es]El más[:fr]Le plus[:it]Il più[:pt]O mais[:]"); ?> <span><?php _e("[:ru]популярные[:en]popular[:de]beliebteste[:es]popular[:fr]populaire[:it]popolare[:pt]popular[:]"); ?></span></h1>
  
<!-- Slider start -->
  
  <div id="carouselExampleIndicators" data-interval="500000" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <?php 
          query_posts( 'category_name=popular' );
          if (have_posts()): while (have_posts()): the_post();
            $x++;
        ?>
          <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $x - 1; ?>" class="<?php if ($x == '1'): echo 'active'; endif;?>"></li>
        <?php endwhile; endif; wp_reset_query(); ?>
      </ol>
      <div class="carousel-inner">
        <?php 
          query_posts( 'category_name=popular' );
          if (have_posts()): while (have_posts()): the_post();
            $y++;
        ?>
        <div class="carousel-item <?php if ($y == '1'): echo 'active'; endif;?>" style="order: <?php echo the_field('popular_order'); ?>">
          <div class="most-popular-container " >
            <div class="most-popular-name"><?php the_title(); ?></div>
            <img src="wp-content/themes/ruholidays/image/maxres.png" data-toggle="modal" data-target="#exampleModalCenter-<?php the_id(); ?>" alt="<?php the_title(); ?>">

           
            <div class="most-popular-info justify-content-between">
              <div class="most-popular-price">
                <?php echo the_field('price'); ?>€* <span>/<?php echo the_field('time'); ?></span>
              </div>
              <div>
                <span class="dotter-shadow black-shadow">
                  <button type="button" class="btn-order-now border-general" data-toggle="modal" data-target="#exampleModal"><?php _e("[:ru]Заказать сейчас[:en]Order now[:de]Jetzt Bestellen[:es]Ordene ahora[:fr]Commandez maintenant[:it]Ordina ora[:pt]Encomendar agora[:]"); ?></button>
                </span>
              </div>
            </div>
          </div>
        </div>

        <?php endwhile; endif; wp_reset_query(); ?>
      </div>


  </div>
  <div>
    <?php 
      query_posts( 'category_name=popular' );
      if (have_posts()): while (have_posts()): the_post();
      $x++;
      get_template_part( 'modal' );
      endwhile; endif; wp_reset_query();
    ?>
  </div>
<!-- Slider end -->

  <div class="most-popular-content justify-content-between hide-for-small">
    <?php query_posts( 'category_name=popular' ); ?>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
      
      <div class="most-popular-container " style="order: <?php echo the_field('popular_order'); ?>">
        <div class="most-popular-name"><?php the_title(); ?></div>
        <img src="<?php echo the_field('image'); ?>" data-toggle="modal" data-target="#exampleModalCenter-<?php the_id(); ?>" alt="<?php the_title(); ?>">

        <?php get_template_part( 'modal' ); ?>
       
        <div class="most-popular-info justify-content-between">
          <div class="most-popular-price">
            <?php echo the_field('price'); ?>€* <span>/<?php echo the_field('time'); ?></span>
          </div>
          <div>
            <span class="dotter-shadow black-shadow">
              <button type="button" class="btn-order-now border-general" data-toggle="modal" data-target="#exampleModal"><?php _e("[:ru]Заказать сейчас[:en]Order now[:de]Jetzt Bestellen[:es]Ordene ahora[:fr]Commandez maintenant[:it]Ordina ora[:pt]Encomendar agora[:]"); ?></button>
            </span>
          </div>
        </div>
      </div>
    <?php endwhile; endif; wp_reset_query(); ?>
    
  </div>

  <div class="container aditional-margin">
    <?php $approach_posts = query_posts('category_name=approach');
      $first_aprroach = $approach_posts[0];
      $second_aprroach = $approach_posts[1];
    ?>
    <div>
      <div class="present-trip">
        <div class="add-size">
      <div class="dotter-shadow dotter-shadow-big-img">
          <img src="wp-content/themes/ruholidays/image/maxres.png" class="desktop-img">
          <img src="wp-content/themes/ruholidays/image/maxres-970.png" class="responsible-img">
        </div>
      </div>
        <div class="present-trip-text">
          <p class="present-trip-title"><?php echo $first_aprroach->post_title; ?></p>
          <p><?php echo $first_aprroach->post_content; ?></p>
        </div>
      </div>
      <div class="individual-trip">
        <div class="individual-trip-text">
          <p class="individual-trip-title"><?php echo $second_aprroach->post_title; ?></p>
          <p><?php echo $second_aprroach->post_content; ?></p>
        </div>
        <div class="add-size">
      <div class="dotter-shadow dotter-shadow-big-img add-shadow-img">
            <img src="wp-content/themes/ruholidays/image/highlights.png" class="desktop-img">
            <img src="wp-content/themes/ruholidays/image/highlights-970.png" class="responsible-img">
        </div>
    </div>
      </div>
      </div>
    </div>
  </div>
</section>