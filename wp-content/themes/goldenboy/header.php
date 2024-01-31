<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php 
      wp_head();
    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Roboto+Slab:wght@400;500;600;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <!-- Desktop Nav -->
    <nav id="nav-desktop" class="nav">
      <div class="nav-container">
        <!-- Logo -->
        <div class="logo">
          <a href="<?= home_url(); ?>">
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
          wp_nav_menu(
            array(
              'menu' => 'primary',
              'container' => '',
              'theme_location' => 'primary',
              'items_wrap' => '<ul class="nav-links">%3$s</ul>',
            )
          );
        ?>
      </div>
    </nav>

    
    <!-- Mobile Nav -->
    <div id="hamburger-menu">
      <input type="checkbox" id="toggle">
      <label for="toggle">
        <span></span>
        <span></span>
        <span></span>
      </label>
        
      <nav id="nav-mobile" class="nav">
        <!-- Logo -->
        <div class="logo">
          <a href="<?= home_url(); ?>">
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

        <?php
          wp_nav_menu(
            array(
              'menu' => 'primary',
              'container' => '',
              'theme_location' => 'primary',
              'items_wrap' => '<ul class="nav-links">%3$s</ul>',
            )
          );
        ?>
      </nav>
    </div>

  </div>