    <!-- Title -->
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
        background-image: url('<?= get_template_directory_uri(); ?>/assets/images/our-events.jpg'); 
        background-size: cover;
        background-position: center;
      "
    ></div>
    <?php endif ?>

    <!-- Call to Action -->
    <div class="flex-col">
    <div class="mx-15 mb-5">
      <div class="call-to-action-container">
        <p><?= esc_html( get_field('top_call_to_action_content') ); ?></p>
      </div>
    </div>

    <!-- Gallery -->
    <div class="content-container-gallery-text no-margin">
      <!-- Gallery Item A -->
      <?php
        $image = get_field('gallery_image_a');
        if (!empty($image)) :
      ?>
      <div
        id="gallery-item-a" 
        class="gallery-item"
        style="background-image: url(<?= esc_url($image['url']); ?>);"
      ></div>
      <?php
        else :
      ?>
      <div
        id="gallery-item-a" 
        class="gallery-item"
        style="background-image: url('<?= get_template_directory_uri(); ?>/assets/images/our-beer.jpg');"
      ></div>
      <?php endif; ?>

      <!-- Gallery Item B -->
      <div id="gallery-text-item-a" class="gallery-item-text">
        <h2><?= esc_html( get_field('gallery_title_a') ); ?></h2>
        <p><?= esc_html( get_field('gallery_content_a') ); ?></p>
      </div>

      <!-- Gallery Item C -->
      <div id="gallery-text-item-b" class="gallery-item-text">
        <h2><?= esc_html( get_field('gallery_title_b') ); ?></h2>
        <p><?= esc_html( get_field('gallery_content_b') ); ?></p>
      </div>


      <!-- Gallery Item D -->
      <?php
        $image = get_field('gallery_image_b');
        if (!empty($image)) :
      ?>
      <div 
        id="gallery-item-b"
        class="gallery-item"
        style="background-image: url(<?= esc_url($image['url']); ?>);"
      ></div>
      <?php
        else :
      ?>
      <div 
        id="gallery-item-b"
        class="gallery-item"
        style="background-image: url('<?= get_template_directory_uri(); ?>/assets/images/kegs.jpg');"
      ></div>
      <?php endif; ?>
    </div>

    <div id="bottom-content-about-us" class="mx-15">
      <div class="call-to-action-container">
        <p><?= esc_html( get_field('bottom_section_content') ); ?></p>
        <a href="<?= esc_url( get_field('bottom_section_call_to_action_button_link')['url'] ); ?>" class="black-btn">
          <?= esc_html( get_field('bottom_section_call_to_action_button_text') ); ?>
        </a>
      </div>
    </div>
    </div>
  </body>