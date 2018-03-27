<section>
  <div class="container remove-padd" id="our-tours">
    <h1 class="most-popular-title remove-add-margin"><?php _e("[:ru]Наши[:en]Our[:de]Unsere[:es]Nuestros[:fr]Les visites de[:it]I tour del[:pt]Passeios[:]"); ?> <span><?php _e("[:ru]авторские туры[:en]author's tours[:de]Touren[:es]viajes[:fr]notre auteur[:it]nostro autore[:pt]do nosso autor[:]"); ?></span></h1>
  

    <div class="most-popular-content author-tours justify-content-between">
    <?php query_posts( 'category_name=tours&posts_per_page=-1' ); ?>

    <?php if (have_posts()): while (have_posts()): the_post(); ?>
      <div class="most-popular-container <?php echo the_field('add_css_class'); ?>" style="order: <?php echo the_field('order'); ?>">
        <div class="most-popular-name"><?php the_title(); ?></div>
        <img src="<?php echo the_field('image'); ?>" class="short-img-tuor" data-toggle="modal" data-target="#exampleModalCenter-<?php the_id(); ?>" alt="<?php the_title(); ?>">
    
    
    <img src="<?php echo the_field('image_lon'); ?>" class="long-img-tuor" data-toggle="modal" data-target="#exampleModalCenter-<?php the_id(); ?>" alt="<?php the_title(); ?>">
    
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

  </div>
</section>