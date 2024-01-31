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
        <p><?= esc_html( get_field('top_call_to_action_content') ); ?></p>
        <a href="<?= esc_url( get_field('top_call_to_action_button_link')['url'] ); ?>" class="black-btn">
          <?= esc_html( get_field('top_call_to_action_button_text') ); ?>
        </a>
      </div>

      <div class="content-container">
      <?php
        $category_slug = 'beer';
        $args = array('category_name' => $category_slug);
        $beer_posts_query = new WP_Query( $args );

        if ( $beer_posts_query->have_posts() ) :
          while ( $beer_posts_query->have_posts() ) : $beer_posts_query->the_post();
      ?>
        <div class="content-item">
        <?php
          $image = get_field('beer_image');
          if (!empty($image)) :
        ?>
          <div 
            class="content-image" 
            style="background-image: url(<?= esc_url($image['url']); ?>);"
          ></div>
        <?php else : ?>
          <div 
            class="content-image" 
            style="background-image: url('<?= get_template_directory_uri(); ?>/assets/images/beer-can.jpg');"
          ></div>
        <?php endif; ?>
          <div class="content-description">
            <p><?= esc_html( get_field('beer_name') ); ?></p>
            <p><?= esc_html( get_field('beer_price') ); ?></p>
          </div>
        </div>
      <?php 
          endwhile;
        endif; 
        wp_reset_postdata();
      ?>
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
        <a href="<?= esc_url( get_field('bottom_left_call_to_action_button_link')['url'] ); ?>" class="black-btn">
          <?= esc_html( get_field('bottom_left_call_to_action_button_text') ); ?>
        </a>
        <a href="<?= esc_url( get_field('bottom_right_call_to_action_button_link')['url'] ); ?>" class="black-btn">
          <?= esc_html( get_field('bottom_right_call_to_action_button_text') ); ?>
        </a>
      </div>
    </div>
  </body>