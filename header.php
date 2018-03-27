<!DOCTYPE html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RuHolidays</title>
  <meta name="description" content="Spend time in russia">
    <meta name="keywords" content="Ruholidays">
    <link rel="stylesheet" href="wp-content/themes/ruholidays/css/bootstrap.min.css">
    <link rel="stylesheet" href="wp-content/themes/ruholidays/css/fonts.css">
    <link rel="stylesheet" href="wp-content/themes/ruholidays/css/main.css">
  </head>
  <body>
    <header class="container header-content justify-content-between">
      <div class="header-left">
        <div class="logo-text"><img src="wp-content/themes/ruholidays/image/logo.png" alt="Ru holidays"></div>
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
        <div class="header-tel">
          <?php $phone_posts = query_posts('category_name=phone')[0];?>
          <?php echo $phone_posts->post_title; ?>
        </div>
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

      <!-- HEADR SLIDER -->
          <div id="headerSlider" class="carousel slide" data-ride="header-slider carousel">
            <div class="carousel-inner">
              <div class="carousel-item slide-1 active">
              </div>
              <div class="carousel-item slide-2">
              </div>
              <div class="carousel-item slide-3">
              </div>
              <div class="carousel-item slide-4">
              </div>
            </div>
          </div>
          <!-- END HEADER SLIDER -->
      <div class="container main-text">
        <h1><?php _e("[:ru]Индивидуальные туры по Санкт-Петербургу[:en]Individual tours around SPb[:de]Individuelle Touren rund um Sankt Petersburg[:es]Tours individuales alrededor de San Petersburgo[:fr]Visites individuelles autour de SPb[:it]Tour individuali intorno a SPB[:pt]Viagens individuais ao redor do SPb[:]"); ?></h1>
        <h2 id="faset-order"><?php _e("[:ru]Санкт-[:en]Saint-[:de]Sankt[:es]San[:fr]Saint-[:it]San[:pt]São[:]"); ?><br><?php _e("[:ru]Петербург[:en]Petersburg[:de]Petersburg[:es]Petersburgo[:fr]Pétersbourg[:it]Petersburgo[:pt]Petersburgo[:]"); ?></h2>
        <span class="dotter-shadow">
          <button type="button" class="btn-quick-order border-general" data-toggle="modal" data-target="#exampleModal"><?php _e("[:ru]Быстрый заказ[:en]Quick order[:de]Schnelle Bestellung[:es]Orden rápida[:fr]Commande rapide[:it]Ordine rapido[:pt]Pedido rápido[:]"); ?></button>
        </span>
      </div>
    </section>

    

    

    
    <?php get_template_part( 'approach-most-popular' ); ?>


    <?php get_template_part( 'benefits' ); ?>

    
    <?php get_template_part( 'our-tours' ); ?>

    
    <?php get_template_part( 'team-section' ); ?>

