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
      style="background-image: url(<?= esc_url($image['url']); ?>);"
    ></div>
    <?php
       else :
    ?>
    <div 
      id="beer-top-image-container" 
      class="top-image-container"
      style="background-image: url('<?= get_template_directory_uri(); ?>/assets/images/beer-page-top.png');"
    ></div>
    <?php endif ?>

    <div class="mx-15">
      <div id="beer-call-to-action" class="call-to-action-container">
        <p><?= esc_html( get_field('call_to_action_content') ); ?></p>
        <a href="#" class="black-btn">
          <span class="text"><?= esc_html( get_field('call_to_action_button_text') ); ?></span>
        </a>
      </div>

      <div class="content-container">
        <div class="content-item">
          <div class="content-image"></div>
          <div class="content-description">
            <p>Brewery Pale Ale</p>
            <p>$5.99</p>
          </div>
        </div>
        <div class="content-item">
          <div class="content-image"></div>
          <div class="content-description">
            <p>Brewery Pale Ale</p>
            <p>$5.99</p>
          </div>
        </div>
        <div class="content-item">
          <div class="content-image"></div>
          <div class="content-description">
            <p>Brewery Pale Ale</p>
            <p>$5.99</p>
          </div>
        </div>
        <div class="content-item">
          <div class="content-image"></div>
          <div class="content-description">
            <p>Brewery Pale Ale</p>
            <p>$5.99</p>
          </div>
        </div>
        <div class="content-item">
          <div class="content-image"></div>
          <div class="content-description">
            <p>Brewery Pale Ale</p>
            <p>$5.99</p>
          </div>
        </div>
        <div class="content-item">
          <div class="content-image"></div>
          <div class="content-description">
            <p>Brewery Pale Ale</p>
            <p>$5.99</p>
          </div>
        </div>
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