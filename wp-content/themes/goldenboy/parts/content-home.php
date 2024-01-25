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
        <h1 id="home-header" data-aos="zoom-in"><?= esc_html( get_field('title') ); ?></h1>
      </div>
    </div>

    <!-- Parrallax 2 -->
    <div id="para2" class="parallax">
      <div>
        <h2 data-aos="fade-up"><?= esc_html( get_field('text_section_1_title') ); ?></h2>
        <p data-aos="fade-up"><?= esc_html( get_field('text_section_1_content') ); ?></p>
        <div class="flex-row">
          <a 
            href="<?= esc_url( get_field('text_section_1_button_link')['url'] ); ?>" 
            class="black-btn"
            data-aos="fade-up" 
            data-aos-delay="200"
          >
            <?= esc_html( get_field('text_section_1_button_text') ); ?>
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
        <a href="<?= esc_url( get_field('text_section_2_button_left_link')['url'] ); ?>" data-aos="fade-up">
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
              <?= esc_html( get_field('text_section_2_button_left_text') ); ?>
            </div>
          </div>
        </a>

        <a href="<?= esc_url( get_field('text_section_2_button_right_link')['url'] ); ?>" data-aos="fade-up">
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
            <div class="black-btn">
              <?= esc_html( get_field('text_section_2_button_right_text') ); ?>
            </div>
          </div>
        </a>
      </div>
      <div id="about-us" data-aos="fade-up">
        <h2><?= esc_html( get_field('text_section_2_title') ); ?></h2>
        <p><?= esc_html( get_field('text_section_2_content') ); ?></p>
      </div>
    </div>