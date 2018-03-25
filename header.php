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
            <a class="dropdown-item" href="#faset-order">Fast order</a>
            <a class="dropdown-item" href="#benefits">Benefits</a>
            <a class="dropdown-item" href="#our-tours">Our tours</a>
            <a class="dropdown-item" href="#our-team">Our team</a>
          </div>
        </nav>
        <div class="mane-menu mane-mobile" data-toggle="collapse" href="#dropdownMenuMobile" role="button" aria-expanded="false" aria-controls="dropdownMenuMobile"></div>
      </div>
      <div class="header-contact" class="collapse" id="dropdownMenuMobile">
        <div class="header-tel">+7 (123) 456-7890</div>
        <div class="dropdown show language">
          <batton class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="languages language-menu">
              <?php qtranxf_generateLanguageSelectCode('short'); ?>
            </div>
          </batton>
          <div class="dropdown-menu languages language-list" aria-labelledby="dropdownMenuLink">
            <?php qtranxf_generateLanguageSelectCode('short'); ?>
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
          <a class="dropdown-item" href="#faset-order">Fast order</a>
          <a class="dropdown-item" href="#benefits">Benefits</a>
          <a class="dropdown-item" href="#our-tours">Our tours</a>
          <a class="dropdown-item" href="#our-team">Our team</a>
        </div>
      </div>
    </header>
    <section class="main-section">
      <div class="container main-text">
        <h1>Individual tours around</h1>
        <h2>Saint-<br>Petersburg</h2>
        <span class="dotter-shadow">
          <button type="button" class="btn-quick-order border-general">Quick order</button>
        </span>
      </div>
    </section>
    <section class="container most-popular">
      <h1 class="most-popular-title">The most <span>popular</span></h1>
      <div class="most-popular-content justify-content-between">
         <?php if (have_posts()): while (have_posts()): the_post(); ?>
          <?php echo the_field(); ?>
          <?php echo the_field('includes'); ?>
    		  <div class="most-popular-container">
    			  <div class="most-popular-name"><?php the_title(); ?></div>
    			  <img src="<?php the_field('image'); ?>">
    			  <div class="most-popular-info justify-content-between">
    				<div class="most-popular-price">
    				  <?php echo the_field('price'); ?>€ <span>/5 hours</span>
    				</div>
    				<div>
    				  <span class="dotter-shadow black-shadow">
    					<button type="button" class="btn-order-now border-general">Order now</button>
    				  </span>
    				</div>
    			  </div>
    			</div>
    		<?php endwhile; endif; ?>
		 
        
      </div>
      <div class="container aditional-margin">
        <div>
          <div class="present-trip">
            <div class="dotter-shadow dotter-shadow-big-img add-size">
              <img src="wp-content/themes/ruholidays/image/maxres.png" class="desktop-img">
              <img src="wp-content/themes/ruholidays/image/maxres-970.png" class="responsible-img">
            </div>
            <div class="present-trip-text">
              <p>Our excursions are wonderful trips in space and time, where we will see not only the famous sights of St.Petersburg, but also we will look to <span>where the foot of tourist does not often step.</span></p>
              <p>We will acquaint you with the secrets, legends and secrets of this wonderful city.</p>
              <p>If you are in St.Petersburg not for the first time, <span>we will show you the city from a completely new side.</span></p>
            </div>
          </div>
          <div class="individual-trip">
            <div class="individual-trip-text">
              <p class="individual-trip-title"><span>Individual</span> Approach</p>
              <p class="additional-style">Individual approach for us is not just an on-duty phrase.</p>
              <p>We will plan for you a personal program of acquaintance with the city taking into account all your wishes (including the organization of transfers, reservations of restaurants and tickets to museums or theaters of the city).</p>
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
      <h1 class="container most-popular-title add-right remove-padd">Our <span>benefits<span></h1>
      <div class="our-benefits-background">
        <div class="container our-benefits justify-content-between">
          <div class="our-benefits-f">
            <div class="our-benefits-number">01</div>
            <div class="benefits-additional-display">
              <div class="our-benefits-short-text">Explore the city without queues</div>
              <div>
                <img src="wp-content/themes/ruholidays/image/flag.png">
              </div>
            </div>
            <div class="our-benefits-mask">
              <h2>Explore the city without queues</h2>
              <div>
                In St.Petersburg, almost all year around there are huge amounts of tourists.<br>There are hundreds of meters-queues to the most popular museums and this is not a joke.<br>Our tourists do not waste time before the entry of the museums.<br>For our clients, the doors of the Palaces are always open, we are always welcome in theaters and museums, and tickets are always in our hands.<br>Yes, even to the Hermitage and the Catherine Palace in Tsarskoe Selo!
              </div>
            </div>
          </div>
          <div class="our-benefits-f">
            <div class="our-benefits-number">02</div>
            <div class="benefits-additional-display">
              <div class="our-benefits-short-text">Flexible pick up and drop off points</div>
              <div>
                <img src="wp-content/themes/ruholidays/image/tourist.png">
              </div>
            </div>
            <div class="our-benefits-mask">
              <h2>Flexible pick up and drop off points</h2>
              <div>
                You yourself plan a convenient route for you - we just advise and adjust.<br>We can pick up from the hotel, and after the end of our event, deliver you to a place convenient for you.<br>
                If you arrive and you have time before checking in at the hotel, we can meet you at the place of arrival, organize for you an interesting pastime and deliver directly to the entrance of the hotel.
              </div>
            </div>
          </div>
          <div class="our-benefits-f">
            <div class="our-benefits-number">03</div>
            <div class="benefits-additional-display">
              <div class="our-benefits-short-text">Comfortable<br>cars</div>
              <div>
                <img src="wp-content/themes/ruholidays/image/taxi.png">
              </div>
            </div>
            <div class="our-benefits-mask">
              <h2>Comfortable cars</h2>
              <div>
                We own an extensive fleet of cars for your various wishes.<br>Among them are a roomy Hyundai H1, the most comfortable Mercedes Viano and Mercedes Sprinter for bigger groups.<br>In our cars there is always water, snacks and safety seats for small tourists.<br>Of course, in our cars nobody smokes.
              </div>
            </div>
          </div>
          <div class="our-benefits-f">
            <div class="our-benefits-number">04</div>
            <div class="benefits-additional-display">
              <div class="our-benefits-short-text">Professional photographer</div>
              <div>
                <img src="wp-content/themes/ruholidays/image/photo-camera.png">
              </div>
            </div>
            <div class="our-benefits-mask">
              <h2>Professional<br>photographer</h2>
              <div>
                We cooperate with a photographer who has been dealing with hisbusiness for more than 8 years.<br>Relax, be yourself, immerse yourself in the secrets of our city and you will look charming, and realy catch the right frame - the task of ourphotographer.<br>Souvenir USB-flash drive with your photos when ordering a photographer as a gift!
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container remove-padd" id="our-tours">
        <h1 class="most-popular-title remove-add-margin">Our <span>autor's tours</span></h1>
      




      </div>
    </section>
    <section id="our-team">
      <h1 class="container most-popular-title remove-padd">Meet <span>the team</span></h1>
      <div class="container meet-team-content justify-content-between">
        <div class="meet-team-text">
          <p><b>We are a team of young, active people who are ready to decorate your holiday in the cultural capital of Russia.</b> We really love St.Petersburg and try toconvey our love to every guest whocomes to visit our city.</p>
          <p><b>Our goal</b> is to find an individual approach to each client and make his stay in St.Petersburg the most comfortable and memorable.</p>
          <p><b>We have assembled the best team of the best:</b> fine guides with prestigious education - native Petersburgers enjoying their work, and drivers who know the city as their five fingers and putting your safety and comfort first.</p>
          <P><b>Entrust you rest to us and you will want to come back here again!</b></P>
        </div>
        <div class="meet-team-photo">
          <div class="add-function">
            <img src="wp-content/themes/ruholidays/image/photo-zoya.png" alt="photo-Zoya" class="class-zoya">
            <div class="photo-content">
              <div class="photo-name">Zoya</div>
              <div class="photo-text">
                <div class="photo-year">5 years in tourism</div>
                <div class="font-lang">Languages:</div>
                <div class="">Russian, English, German, Spanish</div>
              </div>
            </div>
          </div>
          <div class="add-function">
            <img src="wp-content/themes/ruholidays/image/photo-maksim.png">
            <div class="photo-content">
              <div class="photo-name">Maksim</div>
              <div class="photo-text">
                <div class="photo-year">10 years in tourism</div>
                <div class="font-lang">Languages:</div>
                <div class="">Russian, English</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container footer-general justify-content-between ">
        <div class="footer-location justify-content-between">
          <div class="footer-main-name location-mark">Location</div>
          <div class="footer-main-description location-changes">Saint Petersburg,<br> Zaporozhskaya street, 12</div>
        </div>
        <div class="footer-contacts justify-content-between">
          <div class="footer-main-name contacts-mark">Contacts</div>
          <div class="footer-main-description contacts-changes">+7 (123) 123-4567<br>+7 (123) 123-4567</div>
        </div>
        <div class="footer-follow-us">
          <div class="footer-main-name follow-us-changes">Follow us</div>
          <div class="header-social-network footer-network">
            <a href="https://www.instagram.com/russianholiday/">
              <img src="wp-content/themes/ruholidays/image/instagram.png" class="icon-instagram">
            </a>
            <a href="https://www.facebook.com/ruholidays/?ti=as" class="icon-facebook">
              <img src="wp-content/themes/ruholidays/image/facebook.png" class="icon-facebook">
            </a>
          </div>
        </div>
        <div class="footer-subscribe ">
          <div class="footer-subscribe-join">Join our mailing list</div>
          <div>
            <input type="email" placeholder="Email address" aria-label="Email address">
          </div>
          <div>
            <button type="button" class="btn-subscribe border-general">Subscribe now</button>
          </div>
        </div>
      </div>
      <div class="made-by container">2018 by Ruholidays</div> 
    </footer>
    <script type="text/javascript" src="wp-content/themes/ruholidays/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="wp-content/themes/ruholidays/js/popper.min.js"></script>
    <script type="text/javascript" src="wp-content/themes/ruholidays/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="wp-content/themes/ruholidays/js/script.js"></script>
  </body>
</html>
