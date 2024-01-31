    <div class="title-container">
      <h1><?= esc_html( get_field('title') ); ?></h1>
    </div>

    <!-- Hero -->
    <?php
      $image = get_field('hero_image');
      if (!empty($image)) :
    ?>
    <div 
      id="beer-top-image-container" 
      class="top-image-container"
      style="
        background-image: url(<?= esc_url($image['url']); ?>);
        background-position: center;
        background-size: cover;
      "
    ></div>
    <?php
       else :
    ?>
    <div 
      id="beer-top-image-container" 
      class="top-image-container"
      style="
        background-image: url('<?= get_template_directory_uri(); ?>/assets/images/careers.jpg'); 
        background-size: cover;
        background-position: center;
      "
    ></div>
    <?php endif ?>

    <div class="mx-15 mb-5">
      <!-- Content -->
      <div id="careers-content">
        <h2><?= esc_html( get_field('content_title') ); ?></h2>
        <p><?= esc_html( get_field('content') ); ?></p>
      </div>
      <!-- Form -->
      <div id="contact-form">
        <?php the_content(); ?>
      </div>
    </div>

  </body>