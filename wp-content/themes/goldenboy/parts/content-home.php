    <!-- Parallax 1 -->
    <?php
      $image = get_field('parrallax_image_1');
      if (!empty($image)) :
    ?>
    <div 
      id="para1" 
      class="parallax" 
      style="
        background-image: url(<?= esc_url($image['url']); ?>); 
        min-height: 100%;
      "
    >
    <?php
       else :
    ?>
    <div 
      id="para1" 
      class="parallax" 
      style="
        background-image: url('<?= get_template_directory_uri(); ?>/assets/images/beer-board.jpg'); 
        min-height: 100%;
      "
    >
    <?php endif ?>
      <div class="heading">
        <h1><?= esc_html( get_field('brewery_name') ); ?></h1>
      </div>
    </div>

    <!-- Parrallax 2 -->
    <div id="para2" class="parallax">
      <div>
        <h2><?= esc_html( get_field('text_section_1_title') ); ?></h2>
        <p><?= esc_html( get_field('text_section_1_content') ); ?></p>
        <div class="flex-row">
          <a href="#" class="black-btn">
            <span class="text"><?= esc_html( get_field('text_section_1_button_left_text') ); ?></span>
          </a>

          <a href="#" class="black-btn">
            <span class="text"><?= esc_html( get_field('text_section_1_button_right_text') ); ?></span>
          </a>
        </div>
      </div>
    </div>

    <!-- Parallax 3 -->
    <?php
      $image = get_field('parrallax_image_2');
      if (!empty($image)) :
    ?>
    <div 
      id="para3" 
      class="parallax"
      style="
        background-image: url(<?= esc_url($image['url']); ?>);
        min-height: 100%;
      "
    ></div>
    <?php
       else :
    ?>
    <div 
      id="para3" 
      class="parallax"
      style="
        background-image: url('<?= get_template_directory_uri(); ?>/assets/images/bar.jpg');
        min-height: 100%;
      "
    ></div>
    <?php endif ?>

    <!-- Parrallax 4 -->
    <div id="para4" class="parallax">
      <div id="beer-and-events" class="flex-row">
        <a href="#">
        <?php
          $image = get_field('text_section_2_button_left_image');
          if (!empty($image)) :
        ?>
          <div 
            id="go-beer"
            style="background-image: url(<?= esc_url($image['url']); ?>);"
          >
        <?php
          else :
        ?>
        <div 
            id="go-beer"
            style="background-image: url(<?= get_template_directory_uri(); ?>/assets/images/our-beer.jpg);"
          >
        <?php endif ?>
            <div class="black-btn">
              <span class="text"><?= esc_html( get_field('text_section_2_button_left_text') ); ?></span>
            </div>
          </div>
        </a>

        <a href="#">
          <?php
            $image = get_field('text_section_2_button_right_image');
            if (!empty($image)) :
          ?>
          <div 
            id="go-events"
            style="background-image: url(<?= esc_url($image['url']); ?>);"
          >
          <?php
            else :
          ?>
          <div 
            id="go-events"
            style="background-image: url(<?= get_template_directory_uri(); ?>/assets/images/our-events.jpg);"
          >
          <?php endif ?>
            <div class="black-btn"><span class="text"><?= esc_html( get_field('text_section_2_button_right_text') ); ?></span></div>
          </div>
        </a>
      </div>
      <div id="about-us">
        <h2><?= esc_html( get_field('text_section_2_title') ); ?></h2>
        <p><?= esc_html( get_field('text_section_2_content') ); ?></p>
      </div>
    </div>