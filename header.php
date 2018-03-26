<!DOCTYPE html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RuHolidays</title>
    <link rel="stylesheet" href="wp-content/themes/ruholidays/css/bootstrap.min.css">
    <link rel="stylesheet" href="wp-content/themes/ruholidays/css/fonts.css">
    <link rel="stylesheet" href="wp-content/themes/ruholidays/css/main.css">
  </head>
  <body>
    <header class="container header-content justify-content-between">
      <div class="header-left">
        <div class="logo-text"><span class="logo-color">Russian</span> Holidays</div>
        <nav dropdown class="mane-menu mane-desctop">
          <div class="menu-togle" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></div>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu">
            <a class="dropdown-item" href="#faset-order"><?php _e("[:ru]Быстрый заказ[:en]Fast Order[:de]Schnelle Bestellung[:es]Pedido rápido[:fr]Commande rapide[:it]Ordine veloce[:pt]Ordem Rápida[:]"); ?></a>
            <a class="dropdown-item" href="#benefits"><?php _e("[:ru]Преимущества[:en]Benefits[:de]Vorteile[:es]Beneficios[:fr]Avantages[:it]Vantaggi[:pt]Benefícios[:]"); ?></a>
            <a class="dropdown-item" href="#our-tours"><?php _e("[:ru]Наши туры[:en]Our tours[:de]Unsere Touren[:es]Nuestros tours[:fr]Nos tours[:it]I nostri tour[:pt]Nossos passeios[:]"); ?></a>
            <a class="dropdown-item" href="#our-team"><?php _e("[:ru]Наша команда[:en]Our team[:de]Unser Team[:es]Nuestro equipo[:fr]Notre équipe[:it]Il nostro team[:pt]Nossa equipe[:]"); ?></a>
          </div>
        </nav>
        <div class="mane-menu mane-mobile" data-toggle="collapse" href="#dropdownMenuMobile" role="button" aria-expanded="false" aria-controls="dropdownMenuMobile"></div>
      </div>
      <div class="header-contact" class="collapse" id="dropdownMenuMobile">
        <div class="header-tel">+7 (952) 396-5703</div>
        <div class="dropdown show language">
          <button class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="languages language-menu">
             <!--  <button class="dropdown-item active" href="#"><img src="image/UK.png" alt="UK">Eng</button>
              <button class="dropdown-item" href="#"><img src="image/russia2.png" alt="Russia">Rus</button>
              <button class="dropdown-item" href="#"><img src="image/portugal1.png" alt="Portugal">Por</button>
              <button class="dropdown-item" href="#"><img src="image/france1.png" alt="France">Fra</button>
              <button class="dropdown-item" href="#"><img src="image/italy1.png" alt="Italy">Ita</button>
              <button class="dropdown-item" href="#"><img src="image/germany1.png" alt="Germany">Deu</button>
              <button class="dropdown-item" href="#"><img src="image/spain1.png" alt="Spain">Spa</button> -->
              
            <?php qtranxf_generateLanguageSelectCode('short'); ?>
              

              <!-- <ul class="language-chooser language-chooser-short qtranxs_language_chooser" id="qtranslate-chooser">
                <li><a href="http://ruholidays.com/?lang=en" class="qtranxs_short_en qtranxs_short" title="English (en)"><span>en</span></a></li>
                <li><a href="http://ruholidays.com/?lang=ru" class="qtranxs_short_ru qtranxs_short" title="Русский (ru)"><span>ru</span></a></li>
                <li><a href="http://ruholidays.com/?lang=pt" class="qtranxs_short_pt qtranxs_short" title="Português (pt)"><span>pt</span></a></li>
                <li><a href="http://ruholidays.com/?lang=es" class="qtranxs_short_es qtranxs_short" title="Español (es)"><span>es</span></a></li>
                <li><a href="http://ruholidays.com/?lang=de" class="qtranxs_short_de qtranxs_short" title="Deutsch (de)"><span>de</span></a></li>
                <li><a href="http://ruholidays.com/?lang=fr" class="qtranxs_short_fr qtranxs_short" title="Français (fr)"><span>fr</span></a></li>
                <li class="active"><a href="http://ruholidays.com/?lang=it" class="qtranxs_short_it qtranxs_short" title="Italiano (it)"><span>it</span></a></li>
              </ul> -->
            </div>
          </button>
          <div class="dropdown-menu languages language-list" aria-labelledby="dropdownMenuLink">
            <!-- <a class="dropdown-item active" href="#"><img src="image/UK.png" alt="UK">Eng</a>
            <a class="dropdown-item" href="#"><img src="image/russia2.png" alt="Russia">Rus</a>
            <a class="dropdown-item" href="#"><img src="image/portugal1.png" alt="Portugal">Por</a>
            <a class="dropdown-item" href="#"><img src="image/france1.png" alt="France">Fra</a>
            <a class="dropdown-item" href="#"><img src="image/italy1.png" alt="Italy">Ita</a>
            <a class="dropdown-item" href="#"><img src="image/germany1.png" alt="Germany">Deu</a>
            <a class="dropdown-item" href="#"><img src="image/spain1.png" alt="Spain">Spa</a> -->

            <?php qtranxf_generateLanguageSelectCode('short'); ?>

            <!-- <ul class="language-chooser language-chooser-short qtranxs_language_chooser" id="qtranslate-chooser">
              <li><a href="http://ruholidays.com/?lang=en" class="qtranxs_short_en qtranxs_short" title="English (en)"><span>en</span></a></li>
              <li><a href="http://ruholidays.com/?lang=ru" class="qtranxs_short_ru qtranxs_short" title="Русский (ru)"><span>ru</span></a></li>
              <li><a href="http://ruholidays.com/?lang=pt" class="qtranxs_short_pt qtranxs_short" title="Português (pt)"><span>pt</span></a></li>
              <li><a href="http://ruholidays.com/?lang=es" class="qtranxs_short_es qtranxs_short" title="Español (es)"><span>es</span></a></li>
              <li><a href="http://ruholidays.com/?lang=de" class="qtranxs_short_de qtranxs_short" title="Deutsch (de)"><span>de</span></a></li>
              <li><a href="http://ruholidays.com/?lang=fr" class="qtranxs_short_fr qtranxs_short" title="Français (fr)"><span>fr</span></a></li>
              <li class="active"><a href="http://ruholidays.com/?lang=it" class="qtranxs_short_it qtranxs_short" title="Italiano (it)"><span>it</span></a></li>
            </ul> -->
          </div>
        </div>
        <div class="header-social-network">
          <a href="https://www.instagram.com/russianholiday/">
            <img src="wp-content/themes/ruholidays/image/instagram.png" class="icon-instagram">
          </a>
          <a href="https://www.facebook.com/ruholidays/?ti=as" class="icon-facebook">
            <img src="wp-content/themes/ruholidays/image/facebook.png" class="icon-facebook">
          </a>
        </div>
        <div class="mobile-menu">
          <a class="dropdown-item" href="#faset-order"><?php _e("[:ru]Быстрый заказ[:en]Fast Order[:de]Schnelle Bestellung[:es]Pedido rápido[:fr]Commande rapide[:it]Ordine veloce[:pt]Ordem Rápida[:]"); ?></a>
          <a class="dropdown-item" href="#benefits"><?php _e("[:ru]Преимущества[:en]Benefits[:de]Vorteile[:es]Beneficios[:fr]Avantages[:it]Vantaggi[:pt]Benefícios[:]"); ?></a>
          <a class="dropdown-item" href="#our-tours"><?php _e("[:ru]Наши туры[:en]Our tours[:de]Unsere Touren[:es]Nuestros tours[:fr]Nos tours[:it]I nostri tour[:pt]Nossos passeios[:]"); ?></a>
          <a class="dropdown-item" href="#our-team"><?php _e("[:ru]Наша команда[:en]Our team[:de]Unser Team[:es]Nuestro equipo[:fr]Notre équipe[:it]Il nostro team[:pt]Nossa equipe[:]"); ?></a>
        </div>
      </div>
    </header>

    <section class="main-section">
      <div class="container main-text">
        <h1><?php _e("[:ru]Индивидуальные туры по Санкт-Петербургу[:en]Individual tours around SPb[:de]Individuelle Touren rund um Sankt Petersburg[:es]Tours individuales alrededor de San Petersburgo[:fr]Visites individuelles autour de SPb[:it]Tour individuali intorno a SPB[:pt]Viagens individuais ao redor do SPb[:]"); ?></h1>
        <h2 id="faset-order">Saint-<br>Petersburg</h2>
        <span class="dotter-shadow">
          <button type="button" class="btn-quick-order border-general" data-toggle="modal" data-target="#exampleModal"><?php _e("[:ru]Быстрый заказ[:en]Quick order[:de]Schnelle Bestellung[:es]Orden rápida[:fr]Commande rapide[:it]Ordine rapido[:pt]Pedido rápido[:]"); ?></button>
        </span>
      </div>
    </section>

    <section class="container most-popular">
      <h1 class="most-popular-title"><?php _e("[:ru]Самые[:en]The most[:de]Das[:es]El más[:fr]Le plus[:it]Il più[:pt]O mais[:]"); ?> <span><?php _e("[:ru]популярные[:en]popular[:de]beliebteste[:es]popular[:fr]populaire[:it]popolare[:pt]popular[:]"); ?></span></h1>
      <div class="most-popular-content justify-content-between">

        <!-- Slider start -->

            <div id="carouselExampleIndicators" data-interval="500000" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
          <?php query_posts( 'category_name=popular' ); ?>
          
          <?php if (have_posts()): while (have_posts()): the_post();
                     $x++;
          ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $x - 1; ?>" class="<?php if ($x == '1'): echo 'active'; endif;?>"></li>
          <?php endwhile; endif; wp_reset_query(); ?>
              </ol>
              <div class="carousel-inner">
                <?php query_posts( 'category_name=popular' ); ?>

                <?php if (have_posts()): while (have_posts()): the_post(); 
          $y++;
          ?>
                  <div class="most-popular-container carousel-item <?php if ($y == '1'): echo 'active'; endif;?>" style="order: <?php echo the_field('popular_order'); ?>">
                    <div class="most-popular-name"><?php the_title(); ?></div>
                    <img src="<?php echo the_field('image'); ?>" data-toggle="modal" data-target="#exampleModalCenter-<?php the_id(); ?>" alt="<?php the_title(); ?>">
                    


          <!-- Modal window START-->
                    <div class="modal fade" id="exampleModalCenter-<?php the_id(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle-<?php the_id(); ?>" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-form-description" role="document">
                      <div class="modal-content modal-form-content">
                        <div class="row">
                          <div class="col-12 col-sm-6">
                            <img src="<?php echo the_field('image'); ?>" alt="<?php the_title(); ?>">
                            <div class="row justify-content-between">
                              <div class="col-12 col-sm-6 modal-form-price-pic">
                                <?php echo the_field('price'); ?>€*<span>/<?php echo the_field('time'); ?></span>
                              </div>
                              <div class="col-12 col-sm-6 modal-form-text-pic">
                                <?php echo the_field('add_info'); ?>
                              </div>
                            </div>
                            <div class="modal-form-text-booking">
                            <?php echo the_field('cost'); ?>
                            </div>
                            <div class="row justify-content-between">
                              <div class="col-12 col-sm-8 modal-form-people">
                                <div class="row justify-content-between modal-form-people-cost-border">
                                  <div class="col-12 col-sm-6 modal-form-people">
                                    <b><?php echo the_field('people3-5'); ?></b>
                                  </div>
                                  <div class="col-12 col-sm-6 modal-form-cost">
                                    <?php echo the_field('people_3-5_price'); ?>
                                  </div>
                                </div>
                                <div class="row justify-content-between modal-form-people-cost-border">
                                  <div class="col-12 col-sm-6 modal-form-people">
                                    <b><?php echo the_field('people_6-19'); ?></b>
                                  </div>
                                  <div class="col-12 col-sm-6 modal-form-cost">
                                    <?php echo the_field('people_6-19_price'); ?>
                                  </div>
                                </div>
                                <div class="row justify-content-between modal-form-people-cost-border">
                                  <div class="col-12 col-sm-6 modal-form-people">
                                    <b><?php echo the_field('people20'); ?></b>
                                  </div>
                                  <div class="col-12 col-sm-6 modal-form-cost">
                                    <?php echo the_field('people_20_price'); ?>
                                  </div>
                                </div>
                              </div>
                              <div class="col-12 col-sm-4">
                                <div class="modal-input-footer">
                                  <span class="dotter-shadow black-shadow input-send-form">
                                    <button type="button" class="btn-order-now border-general" data-toggle="modal" data-target="#exampleModal"><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Order now</button>
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-12 col-sm-6">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <h5 class="modal-title modal-form-title" id="exampleModalLongTitle"><?php the_title(); ?></h5>
                            <div class="modal-form-text-title">
                              <?php the_content(); ?>
                            </div>
                            <div class="row justify-content-between modal-form-people-cost-border">
                              <div class="col-12 col-sm-5">
                                <b><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Duration:</b>
                              </div>
                              <div class="col-12 col-sm-7 text-align-right">
                                <?php echo the_field('duration'); ?>
                              </div>
                            </div>
                            <div class="row justify-content-between modal-form-people-cost-border">
                              <div class="col-12 col-sm-5">
                                <b><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Limits:</b>
                              </div>
                              <div class="col-12 col-sm-7 text-align-right">
                                <?php echo the_field('limits'); ?>
                              </div>
                            </div>
                            <div class="row justify-content-between modal-form-people-cost-border">
                              <div class="col-12 col-sm-5">
                                <b><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Physical activity:</b>
                              </div>
                              <div class="col-12 col-sm-7 text-align-right">
                                <?php echo the_field('physical_activity'); ?>
                              </div>
                            </div>
                            <div class="row justify-content-between add-margin-top">
                              <div class="col-12 col-sm-6">
                                
                                <b><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Included:</b><br>
                                <?php echo the_field('included'); ?>
                              </div>
                              <div class="col-12 col-sm-6">
                                <b><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Not included:</b><br>
                                <?php echo the_field('not_included'); ?>
                              </div>
                            </div>
                          </div>
                        </div>
                        </div>
                      </div>
                    </div>
          <!-- Modal window END-->
                   
                    <div class="most-popular-info justify-content-between">
                      <div class="most-popular-price">
                        <?php echo the_field('price'); ?>€* <span>/<?php echo the_field('time'); ?></span>
                      </div>
                      <div>
                        <span class="dotter-shadow black-shadow">
                          <button type="button" class="btn-order-now border-general" data-toggle="modal" data-target="#exampleModal"><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Order now</button>
                        </span>
                      </div>
                    </div>
                  </div>
                <?php endwhile; endif; wp_reset_query(); ?>


              </div>
             
            </div>
<?php
 
        query_posts( 'category_name=popular' );

        ?>
<!-- Slider END -->
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
          
          <div class="most-popular-container hide-for-small" style="order: <?php echo the_field('popular_order'); ?>">
            <div class="most-popular-name"><?php the_title(); ?></div>
            <img src="<?php echo the_field('image'); ?>" data-toggle="modal" data-target="#exampleModalCenter-<?php the_id(); ?>" alt="<?php the_title(); ?>">
            


  <!-- Modal window START-->
            <div class="modal fade" id="exampleModalCenter-<?php the_id(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle-<?php the_id(); ?>" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-form-description" role="document">
              <div class="modal-content modal-form-content">
                <div class="row">
                  <div class="col-12 col-sm-6">
                    <img src="<?php echo the_field('image'); ?>" alt="<?php the_title(); ?>">
                    <div class="row justify-content-between">
                      <div class="col-12 col-sm-6 modal-form-price-pic">
                        <?php echo the_field('price'); ?>€*<span>/<?php echo the_field('time'); ?></span>
                      </div>
                      <div class="col-12 col-sm-6 modal-form-text-pic">
                        <?php echo the_field('add_info'); ?>
                      </div>
                    </div>
                    <div class="modal-form-text-booking">
                    <?php echo the_field('cost'); ?>
                    </div>
                    <div class="row justify-content-between">
                      <div class="col-12 col-sm-8 modal-form-people">
                        <div class="row justify-content-between modal-form-people-cost-border">
                          <div class="col-12 col-sm-6 modal-form-people">
                            <b><?php echo the_field('people3-5'); ?></b>
                          </div>
                          <div class="col-12 col-sm-6 modal-form-cost">
                            <?php echo the_field('people_3-5_price'); ?>
                          </div>
                        </div>
                        <div class="row justify-content-between modal-form-people-cost-border">
                          <div class="col-12 col-sm-6 modal-form-people">
                            <b><?php echo the_field('people_6-19'); ?></b>
                          </div>
                          <div class="col-12 col-sm-6 modal-form-cost">
                            <?php echo the_field('people_6-19_price'); ?>
                          </div>
                        </div>
                        <div class="row justify-content-between modal-form-people-cost-border">
                          <div class="col-12 col-sm-6 modal-form-people">
                            <b><?php echo the_field('people20'); ?></b>
                          </div>
                          <div class="col-12 col-sm-6 modal-form-cost">
                            <?php echo the_field('people_20_price'); ?>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-4">
                        <div class="modal-input-footer">
                          <span class="dotter-shadow black-shadow input-send-form">
                            <button type="button" class="btn-order-now border-general" data-toggle="modal" data-target="#exampleModal"><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Order now</button>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title modal-form-title" id="exampleModalLongTitle"><?php the_title(); ?></h5>
                    <div class="modal-form-text-title">
                      <?php the_content(); ?>
                    </div>
                    <div class="row justify-content-between modal-form-people-cost-border">
                      <div class="col-12 col-sm-5">
                        <b><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Duration:</b>
                      </div>
                      <div class="col-12 col-sm-7 text-align-right">
                        <?php echo the_field('duration'); ?>
                      </div>
                    </div>
                    <div class="row justify-content-between modal-form-people-cost-border">
                      <div class="col-12 col-sm-5">
                        <b><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Limits:</b>
                      </div>
                      <div class="col-12 col-sm-7 text-align-right">
                        <?php echo the_field('limits'); ?>
                      </div>
                    </div>
                    <div class="row justify-content-between modal-form-people-cost-border">
                      <div class="col-12 col-sm-5">
                        <b><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Physical activity:</b>
                      </div>
                      <div class="col-12 col-sm-7 text-align-right">
                        <?php echo the_field('physical_activity'); ?>
                      </div>
                    </div>
                    <div class="row justify-content-between add-margin-top">
                      <div class="col-12 col-sm-6">
                        
                        <b><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Included:</b><br>
                        <?php echo the_field('included'); ?>
                      </div>
                      <div class="col-12 col-sm-6">
                        <b><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Not included:</b><br>
                        <?php echo the_field('not_included'); ?>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
  <!-- Modal window END-->
           
            <div class="most-popular-info justify-content-between">
              <div class="most-popular-price">
                <?php echo the_field('price'); ?>€* <span>/<?php echo the_field('time'); ?></span>
              </div>
              <div>
                <span class="dotter-shadow black-shadow">
                  <button type="button" class="btn-order-now border-general" data-toggle="modal" data-target="#exampleModal"><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Order now</button>
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
            <div class="dotter-shadow dotter-shadow-big-img add-size">
              <img src="wp-content/themes/ruholidays/image/maxres.png" class="desktop-img">
              <img src="wp-content/themes/ruholidays/image/maxres-970.png" class="responsible-img">
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
            <div class="dotter-shadow dotter-shadow-big-img add-shadow-img add-size">
              <img src="wp-content/themes/ruholidays/image/highlights.png" class="desktop-img">
              <img src="wp-content/themes/ruholidays/image/highlights-970.png" class="responsible-img">
            </div>
          </div>
        </div>
      </div>
    </section>



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
        
  <!-- Modal window START-->
            <div class="modal fade" id="exampleModalCenter-<?php the_id(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle-<?php the_id(); ?>" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-form-description" role="document">
              <div class="modal-content modal-form-content">
                <div class="row">
                  <div class="col-12 col-sm-6">
                    <img src="<?php echo the_field('image'); ?>" alt="<?php the_title(); ?>">
                    <div class="row justify-content-between">
                      <div class="col-12 col-sm-6 modal-form-price-pic">
                        <?php echo the_field('price'); ?>€*<span>/<?php echo the_field('time'); ?></span>
                      </div>
                      <div class="col-12 col-sm-6 modal-form-text-pic">
                        <?php echo the_field('add_info'); ?>
                      </div>
                    </div>
                    <div class="modal-form-text-booking">
                    <?php echo the_field('cost'); ?>
                    </div>
                    <div class="row justify-content-between">
                      <div class="col-12 col-sm-8 modal-form-people">
                        <div class="row justify-content-between modal-form-people-cost-border">
                          <div class="col-12 col-sm-6 modal-form-people">
                            <b><?php echo the_field('people3-5'); ?></b>
                          </div>
                          <div class="col-12 col-sm-6 modal-form-cost">
                            <?php echo the_field('people_3-5_price'); ?>
                          </div>
                        </div>
                        <div class="row justify-content-between modal-form-people-cost-border">
                          <div class="col-12 col-sm-6 modal-form-people">
                            <b><?php echo the_field('people_6-19'); ?></b>
                          </div>
                          <div class="col-12 col-sm-6 modal-form-cost">
                            <?php echo the_field('people_6-19_price'); ?>
                          </div>
                        </div>
                        <div class="row justify-content-between modal-form-people-cost-border">
                          <div class="col-12 col-sm-6 modal-form-people">
                            <b><?php echo the_field('people20'); ?></b>
                          </div>
                          <div class="col-12 col-sm-6 modal-form-cost">
                            <?php echo the_field('people_20_price'); ?>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-sm-4">
                        <div class="modal-input-footer">
                          <span class="dotter-shadow black-shadow input-send-form">
                            <button type="button" class="btn-order-now border-general" data-toggle="modal" data-target="#exampleModal"><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Order now</button>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title modal-form-title" id="exampleModalLongTitle"><?php the_title(); ?></h5>
                    <div class="modal-form-text-title">
                      <?php the_content(); ?>
                    </div>
                    <div class="row justify-content-between modal-form-people-cost-border">
                      <div class="col-12 col-sm-5">
                        <b><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Duration:</b>
                      </div>
                      <div class="col-12 col-sm-7 text-align-right">
                        <?php echo the_field('duration'); ?>
                      </div>
                    </div>
                    <div class="row justify-content-between modal-form-people-cost-border">
                      <div class="col-12 col-sm-5">
                        <b><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Limits:</b>
                      </div>
                      <div class="col-12 col-sm-7 text-align-right">
                        <?php echo the_field('limits'); ?>
                      </div>
                    </div>
                    <div class="row justify-content-between modal-form-people-cost-border">
                      <div class="col-12 col-sm-5">
                        <b><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Physical activity:</b>
                      </div>
                      <div class="col-12 col-sm-7 text-align-right">
                        <?php echo the_field('physical_activity'); ?>
                      </div>
                    </div>
                    <div class="row justify-content-between add-margin-top">
                      <div class="col-12 col-sm-6">
                        
                        <b><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Included:</b><br>
                        <?php echo the_field('included'); ?>
                      </div>
                      <div class="col-12 col-sm-6">
                        <b><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Not included:</b><br>
                        <?php echo the_field('not_included'); ?>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
  <!-- Modal window END-->
           
            <div class="most-popular-info justify-content-between">
              <div class="most-popular-price">
                <?php echo the_field('price'); ?>€* <span>/<?php echo the_field('time'); ?></span>
              </div>
              <div>
                <span class="dotter-shadow black-shadow">
                  <button type="button" class="btn-order-now border-general" data-toggle="modal" data-target="#exampleModal"><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Order now</button>
                </span>
              </div>
            </div>
          </div>
        <?php endwhile; endif; wp_reset_query(); ?>
       
        
      </div>

      </div>
    </section>
    <section id="our-team">
    <?php $team_posts = query_posts('category_name=team')[0];?>
      <h1 class="container most-popular-title remove-padd"><?php _e("[:ru]Познакомьтесь[:en]Meet[:de]Treffen[:es]Conoce[:fr]Rencontrez[:it]Incontra[:pt]Conheça[:]"); ?> <span><?php _e("[:ru]с командой[:en]the team[:de]Sie das Team[:es]al equipo[:fr]l'équipe[:it]la squadra[:pt]a equipe[:]"); ?></span></h1>
      <div class="container meet-team-content justify-content-between">
        <div class="meet-team-text">
          <?php echo $team_posts->post_content; ?>
        </div>
        <div class="meet-team-photo">
          <div class="add-function">
            <img src="wp-content/themes/ruholidays/image/photo-zoya.png" alt="photo-Zoya" class="class-zoya">
            <div class="photo-content">
              <div class="photo-name">Zoya</div>
              <div class="photo-text">
                <div class="photo-year"><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?> 5 years in tourism</div>
                <div class="font-lang"><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?> Languages:</div>
                <div class=""><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?> Russian, English, German, Spanish</div>
              </div>
            </div>
          </div>
          <div class="add-function">
            <img src="wp-content/themes/ruholidays/image/photo-maksim.png">
            <div class="photo-content">
              <div class="photo-name">Maksim</div>
              <div class="photo-text">
                <div class="photo-year"><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?> 10 years in tourism</div>
                <div class="font-lang"><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?> Languages:</div>
                <div class=""><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?> Russian, English</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

