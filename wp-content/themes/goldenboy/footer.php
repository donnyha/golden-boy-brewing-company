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
            <li>123 1234 1234</li>
            <li>60 Osborne St N</li>
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
          <ul>
            <li><a href="#">Reserve</a></li>
            <li><a href="#">Order</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </footer>
  </body>

  <?php
    wp_footer();
  ?>
</html>
