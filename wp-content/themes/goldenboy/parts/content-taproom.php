    <div class="title-container">
      <h1 data-aos="fade-down"><?= esc_html( get_field('title') ); ?></h1>
    </div>

    <div class="mx-15 mb-5">
      <div id="menu-section">
      <!-- Top Content -->
      <div id="beer-call-to-action" class="call-to-action-container mb-5" data-aos="fade-up" data-aos-delay="500">
        <p><?= esc_html( get_field('top_content') ); ?></p>
      </div>

      <!-- Middle Content -->
      <div class="mb-5">
        <h2 data-aos="fade-up" data-aos-delay="1000"><?= esc_html( get_field('top_section_title') ); ?></h2>
        <div class="flex-row center flex-space-evenly" data-aos="fade-up" data-aos-delay="1500">
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
      </div>

      <!-- Call to Action -->
      <div>
        <h2 data-aos="fade-up" ><?= esc_html( get_field('middle_section_title') ); ?></h2>
        <div data-aos="fade-up" data-aos-delay="500">
          <?= wp_kses_post( get_field('middle_section_content') ); ?>
        </div>
        <div id="taproom-cta" class="center" data-aos="fade-up" data-aos-delay="1000">
          <a 
            href="<?= esc_url( get_field('call_to_action_button_link')['url'] ); ?>" 
            class="black-btn"
          >
            <?= esc_html( get_field('call_to_action_button_text') ); ?>
          </a>
        </div>
      </div>
    </div>

  </body>