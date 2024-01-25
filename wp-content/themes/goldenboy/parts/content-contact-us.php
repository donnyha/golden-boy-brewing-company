    <div class="title-container">
      <h1 data-aos="fade-down"><?= esc_html( get_field('title') ); ?></h1>
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
      <div class="mb-5" data-aos="fade-up">
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
      if( $location ): 
        $address = '';
        foreach( array('street_number', 'street_name', 'city', 'state', 'post_code', 'country') as $i => $k ) {
            if( isset( $location[ $k ] ) ) {
                $address .= sprintf( '<span class="segment-%s">%s</span>, ', $k, $location[ $k ] );
            }
        }

        $address = trim( $address, ', ' );
    ?>
        <div class="acf-map" data-zoom="<?= esc_attr($location['zoom'])?>">
            <div 
              class="marker" 
              data-lat="<?php echo esc_attr($location['lat']); ?>" 
              data-lng="<?php echo esc_attr($location['lng']); ?>" 
              data-address="<?php echo esc_attr($address) ?>"
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
        var address = $marker.data('address');
        console.log($marker);
        var contentString = '<div id="content">' +
          '<div id="siteNotice">' +
          "</div>" +
          '<h1 id="firstHeading" class="firstHeading">Golden Boy Brewing Co</h1>' +
          '<div id="bodyContent">' +
          address +
          "<br />" +
          '<a href="https://www.google.com/maps/place/60+Osborne+St+N,+Winnipeg,+MB+R3C+1V3,+Canada/@49.8836106,-97.152064,17z/data=!3m1!4b1!4m6!3m5!1s0x52ea73fefa185a97:0x33114944f4a5a6b6!8m2!3d49.8836072!4d-97.1494891!16s%2Fg%2F11c24dwd2r?hl=en-US&entry=ttu" style="text-decoration: none; color: #0000FF" target="_blank">' +
          "View on Google Maps" +
          "</a>" +
          "</div>" +
          "</div>";

        $marker.html(contentString);

        var marker = new google.maps.Marker({
            position : latLng,
            map: map,
        });


        marker.addListener("click", () => {
          infowindow.open({
            anchor: marker,
            map,
          });
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