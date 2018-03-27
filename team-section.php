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
            <div class="photo-name"><?php _e("[:ru]Зоя[:en]Zoya[:de][:es]Zoya[:fr]Zoya[:it]Zoe[:pt]Zoya[:]"); ?></div>
            <div class="photo-text">
              <div class="photo-year"><?php _e("[:ru]5 лет в туризме[:en]5 years in tourism[:de][:es]5 años en el turismo[:fr]5 ans dans le tourisme[:it]5 anni nel settore del turismo[:pt]5 anos no turismo[:]"); ?></div>
              <div class="font-lang"><?php _e("[:ru]Языки[:en]Languages[:de][:es]Idiomas[:fr]Langues[:it]Lingue[:pt]Idiomas[:]"); ?>:</div>
              <div class=""><?php _e("[:ru]Русский, английский, немецкий, испанский[:en]Russian, English, German, Spanish[:de][:es]Ruso, inglés, alemán, español[:fr]Russe, anglais, allemand, espagnol [:it]Russo, inglese, tedesco, spagnolo[:pt]Russo, Inglês, Alemão, Espanhol[:]"); ?></div>
            </div>
          </div>
        </div>
        <div class="add-function">
          <img src="wp-content/themes/ruholidays/image/photo-maksim.png">
          <div class="photo-content">
            <div class="photo-name"><?php _e("[:ru]Максим[:en]Maksim[:de][:es]Maxim[:fr]Maxim[:it]Massimo[:pt]Maxim[:]"); ?></div>
            <div class="photo-text">
              <div class="photo-year"><?php _e("[:ru]10 лет в туризме[:en]10 years in tourism[:de][:es]10 años en el turismo[:fr]10 ans dans le tourisme[:it]10 anni nel settore del turismo[:pt]10 anos no turismo[:]"); ?></div>
              <div class="font-lang"><?php _e("[:ru]Языки[:en]Languages[:de][:es]Idiomas[:fr]Langues[:it]Lingue[:pt]Idiomas[:]"); ?>:</div>
              <div class=""><?php _e("[:ru]Русский, английский[:en]Russian, English[:de][:es]Ruso, Inglés[:fr]Russe, Anglais[:it]Russo, Inglese[:pt]Russo, inglês[:]"); ?> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>