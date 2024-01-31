    <div class="title-container">
      <h1><?= esc_html( get_field('title') ); ?></h1>
    </div>

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
        background-image: url('<?= get_template_directory_uri(); ?>/assets/images/events-header.jpg');
        background-position: center;
        background-size: cover;
      "
    ></div>
    <?php endif ?>

    <div class="mx-15 mb-5">
      <div id="beer-call-to-action" class="call-to-action-container">
        <p><?= esc_html( get_field('top_call_to_action_content') ); ?></p>
        <a href="#" class="black-btn">
          <span class="text"><?= esc_html( get_field('top_call_to_action_button_text') ); ?></span>
        </a>
      </div>

      <div class="content-container-gallery">
        <!-- Gallery Item A -->
        <?php
          $image = get_field('gallery_image_a');
          if (!empty($image)) :
        ?>
        <div
          id="gallery-item-a" 
          class="gallery-item"
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
          id="gallery-item-a" 
          class="gallery-item"
          style="
            background-image: url('<?= get_template_directory_uri(); ?>/assets/images/restaurant.jpg');
            background-position: center;
            background-size: cover;
          "
        ></div>
        <?php endif; ?>

        <!-- Gallery Item B -->
        <?php
          $image = get_field('gallery_image_b');
          if (!empty($image)) :
        ?>
        <div
          id="gallery-item-b" 
          class="gallery-item"
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
          id="gallery-item-b" 
          class="gallery-item"
          style="
            background-image: url('<?= get_template_directory_uri(); ?>/assets/images/patio.jpg');
            background-position: center;
            background-size: cover;  
          "
        ></div>
        <?php endif; ?>

        <!-- Gallery Item C -->
        <?php
          $image = get_field('gallery_image_c');
          if (!empty($image)) :
        ?>
        <div 
          id="gallery-item-c"
          class="gallery-item"
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
          id="gallery-item-c"
          class="gallery-item"
          style="
            background-image: url('<?= get_template_directory_uri(); ?>/assets/images/our-events.jpg');
            background-position: center;
            background-size: cover;
          "
        ></div>
        <?php endif; ?>
      </div>

    </div>

    <?php
      $image = get_field('bottom_call_to_action_image');
      if (!empty($image)) :
    ?>
    <div 
      class="bottom-image-container"
      style="background-image: url(<?= esc_url($image['url']); ?>);"
    >
    <?php
       else :
    ?>
    <div 
      class="bottom-image-container"
      style="background-image: url('<?= get_template_directory_uri(); ?>/assets/images/bar.jpg');"
    >
    <?php endif ?>
      <div class="flex-row">
        <a href="#" class="black-btn">
          <span class="text"><?= esc_html( get_field('bottom_left_call_to_action_button_text') ); ?></span>
        </a>
        <a href="#" class="black-btn">
          <span class="text"><?= esc_html( get_field('bottom_right_call_to_action_button_text') ); ?></span>
        </a>
      </div>
    </div>
  </body>