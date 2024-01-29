<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php 
      wp_head();
    ?>
  </head>
  <body>
    <!-- Desktop Nav -->
    <nav id="nav-desktop" class="nav">
      <div class="nav-container">
        <!-- Logo -->
        <div class="logo">
          <a href="#">
            <?php 
              if (function_exists('the_custom_logo')) {
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id)[0];
              } else {
                $templateDirectory = esc_url(get_template_directory_uri());
                $logo = $templateDirectory . '/assets/images/logo.svg';
              }
            ?>
            <img src="<?= $logo ?>" alt="Logo" />
          </a>
        </div>

        <!-- Nav Items -->
        <?php
          $beerLink = get_permalink('beer');
          print_r($beerLink);
        ?>
        <ul class="nav-links">
          <li><a href="#" class="nav-item">Taproom</a></li>
          <li><a href="<?= $beerLink ?>" class="nav-item">Beer</a></li>
          <li><a href="#" class="nav-item">Events</a></li>
          <li><a href="#" class="nav-item">About</a></li>
        </ul>
      </div>
    </nav>

    <!-- Mobile Nav -->
    <nav id="nav-mobile" class="nav">
      <div class="logo">Brewery</div>
      <ul class="nav-links">
        <li><a href="#" class="nav-item">Taproom</a></li>
        <li><a href="#" class="nav-item">Beer</a></li>
        <li><a href="#" class="nav-item">Events</a></li>
        <li><a href="#" class="nav-item">About</a></li>
      </ul>
    </nav>