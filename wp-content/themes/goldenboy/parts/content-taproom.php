    <div class="title-container">
      <h1><?= esc_html( get_field('title') ); ?></h1>
    </div>

    <div class="mx-15 mb-5">
      <!-- Top Content -->
      <div id="beer-call-to-action" class="call-to-action-container mb-5">
        <p><?= esc_html( get_field('top_content') ); ?></p>
      </div>

      <!-- Middle Content -->
      <div class="mb-5">
        <h2><?= esc_html( get_field('top_section_title') ); ?></h2>
        <div class="flex-row center flex-space-evenly">
          <!-- Main -->
          <div>
            <h3><?= esc_html( get_field('top_section_left_column_title') ); ?></h3>
            <p><?= wp_kses_post( get_field('top_section_left_column_content') ); ?></p>
          </div>
          <div>
            <h3><?= esc_html( get_field('top_section_right_column_title') ); ?></h3>
            <p><?= wp_kses_post( get_field('top_section_right_column_content') ); ?></p>
          </div>
        </div>
      </div>

      <!-- Call to Action -->
      <div>
        <h2><?= esc_html( get_field('middle_section_title') ); ?></h2>
        <p><?= wp_kses_post( get_field('middle_section_content') ); ?></p>
        <div class="mb-5"></div>
        <div class="center">
          <a href="<?= esc_url( get_field('call_to_action_button_link')['url'] ); ?>" class="black-btn">
            <?= esc_html( get_field('call_to_action_button_text') ); ?>
          </a>
        </div>
      </div>
    </div>

  </body>