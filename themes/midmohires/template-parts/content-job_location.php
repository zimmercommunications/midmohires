<?php
$company = $args[0];
$post_ID = $args[1];
$term = get_queried_object();
$address = get_field('location', $term);
$email = get_field('email', $company[0]);
$phone = get_field('phone', $company[0]);
$website = "";
$salary = get_field('salary', get_the_ID());
$facebook = get_field('social-fb', $company[0]);
$twitter = get_field('social-tw', $company[0]);
$linkedin = get_field('social-linkedin', $company[0]);
$instagram = get_field('social-ig', $company[0]);

 ?>

<div class="job-detail border rounded p-4">
    <h5 class="text-muted text-center pb-2"><i class="mdi mdi-information-variant mr-2"></i>Company Info</h5>

    <div class="job-detail-location pt-4 border-top">
      <!-- Address -->
      <?php
      if( pick_field_job('location') ){
        echo '<div class="job-details-desc-item">';
        echo '  <div class="float-left mr-2">';
        echo '    <i class="mdi mdi-bank text-muted"></i>';
        echo '  </div>';
        echo '  <p style="white-space: nowrap;" class="text-muted mb-2">: ' . pick_field_job('location') . '</p>';
        echo '</div>';
      }
       ?>
       <!-- Email -->
       <?php
       if( $email ){
         echo '<div class="job-details-desc-item">';
         echo '<div class="float-left mr-2">';
         echo '<i class="mdi mdi-email text-muted"></i>';
         echo '</div>';
         echo '<p style="white-space: nowrap; "class="text-muted mb-2">: <a href="mailto:' . $email . '">' . $email . '</a></p>';
         echo '</div>';
       }
        ?>
        <!-- Website URL -->
        <?php
        if( pick_field_company('website_url') ){
          echo '<div class="job-details-desc-item">';
          echo '<div class="float-left mr-2">';
          echo '<i class="mdi mdi-web text-muted"></i>';
          echo '</div>';
          echo '<p style="white-space: nowrap; height: 25px;" class="text-muted mb-2 overflow-hidden">: <a href="' . pick_field_company('website_url')  .'">' . str_replace(array('https://', 'https://', 'www.'), '', pick_field_company('website_url')) . '</a></p>';
          echo '</div>';
        }
         ?>
         <!-- Phone  -->
         <?php
         if( $phone ){
           echo '<div class="job-details-desc-item">';
           echo '<div class="float-left mr-2">';
           echo '<i class="mdi mdi-cellphone-iphone text-muted"></i>';
           echo '</div>';
           echo '<p style="height: 25px;" class="text-muted mb-2 overflow-hidden">: <a href="tel:' . $phone  .'">' . $phone . '</a></p>';
           echo '</div>';
         }
          ?>

          <?php
          if( $salary ){
            echo '<div class="job-details-desc-item">';
            echo '<div class="float-left mr-2">';
            echo '<i class="mdi mdi-currency-usd text-muted"></i>';
            echo '</div>';
            echo '<p class="text-muted mb-2">: ' . $salary . '</p>';
            echo '</div>';
          }
           ?>
           <!-- Google Map -->
        <?php
        $google_lookup = urlencode(pick_field_job('google_maps_lookup'));
        $google_src = "https://www.google.com/maps/embed/v1/place?key=" . get_field('google_api_setting', 'option') . "&q=" . $google_lookup;
        if($google_lookup){
          echo '<h5 class="text-dark">Job Location</h5>';
          echo '      <div class="map">';
          echo '         <iframe src="'. $google_src .'" class="rounded" style="border: 0" allowfullscreen=""></iframe>';
          echo '      </div>';
          echo '<div class="job-details-desc-item mt-2">';
          echo '      <div class="float-left mr-2">';
          echo '         <i class="mdi mdi-map-marker text-muted"></i>';
          echo '      </div>';
          echo '      <p class="text-muted mb-2"> ' . pick_field_job('google_maps_lookup') . '</p>';
          echo '</div>';

        }

        ?>

        <!-- Follow Us media buttons -->
        <?php
        if($facebook || $twitter || $instagram || $linkedin){
          echo '<h6 class="text-dark f-17 mt-3 mb-0">Follow ' . $company[0]->name . ' at :</h6>';
          echo '<ul class="social-icon list-inline mt-3 mb-0">';
           $array = array('facebook' => $facebook, 'twitter' => $twitter, 'instagram' => $instagram, 'linkedin' => $linkedin);
           display_logos($array);
          echo '</ul>';
        }

        ?>
    </div>
</div>
