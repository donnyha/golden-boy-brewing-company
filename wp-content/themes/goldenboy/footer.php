    <footer>
      <div id="footer-logo">
      <?php 
        $templateDirectory = esc_url(get_template_directory_uri());
        $footerLogo = $templateDirectory . '/assets/images/logo-white.svg';
      ?>
        <img src="<?= $footerLogo ?>" alt="logo" id="footer-logo" />
      </div>
      <div id="footer-container" class="flex-row">
        <div id="contact-info">
          <ul>
            <li><a href="tel:123 1234 1234">123 1234 1234</a></li>
            <li><a href="https://www.google.com/maps/place/60+Osborne+St+N,+Winnipeg,+MB+R3C+1V3/@49.8836072,-97.152064,17z/data=!3m1!4b1!4m6!3m5!1s0x52ea73fefa185a97:0x33114944f4a5a6b6!8m2!3d49.8836072!4d-97.1494891!16s%2Fg%2F11c24dwd2r?entry=ttu" target=”_blank”>60 Osborne St N</a></li>
            <li>Winnipeg, MB R3C 1V3</li>
          </ul>
        </div>
        <div id="hour-info">
          <ul>
            <li>Monday: Closed</li>
            <li>Tuesday - Saturday: 12:00pm - 1:00am</li>
            <li>Sunday: 12:00pm - 10:00pm</li>
          </ul>
        </div>
        <div id="links-info">
          <!-- Nav Items -->
          <?php
            wp_nav_menu(
              array(
                'menu' => 'footer',
                'container' => '',
                'theme_location' => 'footer',
                'items_wrap' => '<ul class="nav-links">%3$s</ul>',
              )
            );
          ?>
        </div>
      </div>
    </footer>
    
    <script>
      jQuery(document).ready(function($) {
          AOS.init();
      });
    </script>


    <?php
      wp_footer();
    ?>
  </body>
</html>
