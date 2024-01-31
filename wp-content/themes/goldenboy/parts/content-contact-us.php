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
        background-image: url('<?= get_template_directory_uri(); ?>/assets/images/taproom2.jpg'); 
        background-size: cover;
        background-position: center;
      "
    ></div>
    <?php endif ?>

    <div class="mx-15 mb-5">
      <!-- Content -->
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
    </div>

    <!-- Map -->
    <?php 
      $location = get_field('location');
      if( $location ): ?>
        <div class="acf-map" data-zoom="<?= esc_attr($location['zoom'])?>">
            <div 
              class="marker" 
              data-lat="<?php echo esc_attr($location['lat']); ?>" 
              data-lng="<?php echo esc_attr($location['lng']); ?>"
            ></div>
        </div>
    <?php endif; ?>

  </body>
  <style type="text/css">
    .acf-map {
        width: 100%;
        height: 400px;
        border: #ccc solid 1px;
        margin: 20px 0;
    }

    .acf-map img {
      max-width: inherit !important;
    }
  </style>
  <?php
    $api_key = esc_attr($_ENV['GOOGLE_MAPS_API_KEY']);
    if (!empty($api_key)) {
      echo '<script src="https://maps.googleapis.com/maps/api/js?key=' . $api_key . '&callback=Function.prototype" defer></script>';
    }
  ?>
  <script type="text/javascript">
    (function( $ ) {

    function initMap( $el ) {

        var $markers = $el.find('.marker');
        var mapArgs = {
            zoom        : $el.data('zoom') || 16,
            mapTypeId   : google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map( $el[0], mapArgs );

        map.markers = [];
        $markers.each(function(){
            initMarker( $(this), map );
        });

        centerMap( map );

        return map;
    }

    function initMarker( $marker, map ) {

        var lat = $marker.data('lat');
        var lng = $marker.data('lng');
        var latLng = {
            lat: parseFloat( lat ),
            lng: parseFloat( lng )
        };

        var marker = new google.maps.Marker({
            position : latLng,
            map: map
        });

        map.markers.push( marker );

        if( $marker.html() ){

            var infowindow = new google.maps.InfoWindow({
                content: $marker.html()
            });

            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open( map, marker );
            });
        }
    }

    function centerMap( map ) {

        var bounds = new google.maps.LatLngBounds();
        map.markers.forEach(function( marker ){
            bounds.extend({
                lat: marker.position.lat(),
                lng: marker.position.lng()
            });
        });

        if( map.markers.length == 1 ){
            map.setCenter( bounds.getCenter() );
        } else{
            map.fitBounds( bounds );
        }
    }

    $(document).ready(function(){
        $('.acf-map').each(function(){
            var map = initMap( $(this) );
        });
    });

    })(jQuery);
  </script>