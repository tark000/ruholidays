   
    <footer>
      <div class="container footer-general justify-content-between ">
        <div class="footer-location justify-content-between">
          <div class="footer-main-name location-mark"><?php _e("[:ru]Наше расположение[:en]Location[:de]Standort[:es]Localizacion[:fr]Localisation[:it]posizione[:pt]Localização[:]"); ?> </div>
          <div class="footer-main-description location-changes">Saint Petersburg,<br> 6v, Grivtsova Lane </div>
        </div>
        <div class="footer-contacts justify-content-between">
          <div class="footer-main-name contacts-mark"><?php _e("[:ru]Контакты[:en]Contacts[:de]Kontakte[:es]Contactos[:fr]Contacts[:it]Contatti[:pt]Contatos[:]"); ?> </div>
          <div class="footer-main-description contacts-changes">+7 (952) 396-5703</div>
        </div>
        <div class="footer-follow-us">
          <div class="footer-main-name follow-us-changes"><?php _e("[:ru]Подписывайтесь на нас в соцсетях[:en]Follow us[:de]Folge uns[:es]Síguenos[:fr]Suivez nous[:it]Seguici[:pt]Siga-nos[:]"); ?></div>
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
          <div class="footer-subscribe-join"><?php _e("[:ru]Присоединяйтесь к нашему списку рассылки[:en]Join our mailing list[:de]Trete unserer Mailing-Liste bei[:es]Únete a nuestra lista de correo[:fr]Rejoignez notre liste de diffusion[:it]Iscriviti alla nostra mailing list[:pt]Junte-se à nossa mailing list[:]"); ?> </div>
          <div>
            <input type="email" placeholder='Email address'>
          </div>
          <div>
            <button type="button" class="btn-subscribe border-general"><?php _e("[:ru]Записаться сейчас[:en]Subscribe now[:de]Jetzt abonnieren[:es]Suscríbete ahora[:fr]Inscrivez-vous maintenant[:it]Iscriviti ora[:pt]Assine agora[:]"); ?></button>
          </div>
        </div>
      </div>
      <div class="made-by container">2018 by Ruholidays</div> 
    </footer>
    <!--  modal window -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content modal-input-content">
            <div class="modal-header modal-input-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title modal-window-title" id="exampleModalLabel"><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Let's order <span>right now</span></h4>
              <h5 class="form-request"><?php _e("[:ru][:en][:de][:es][:fr][:it][:pt][:]"); ?>Leave a request and we will contact you</h5>
            </div>
        
       <?php echo do_shortcode('[contact-form-7 id="287" title="Контактная форма 1"]'); ?>
          </div>
        </div>
      </div>
    </div>
<!--finish modal window  -->
    <script type="text/javascript" src="wp-content/themes/ruholidays/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="wp-content/themes/ruholidays/js/popper.min.js"></script>
    <script type="text/javascript" src="wp-content/themes/ruholidays/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="wp-content/themes/ruholidays/js/script.js"></script>
  </body>
</html>