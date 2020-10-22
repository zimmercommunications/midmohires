<?php
$company = $args[0];
$ID = $args[1];
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
    <h5 class="text-muted text-center pb-2"><i class="mdi mdi-map-marker mr-2"></i>Location</h5>

    <div class="job-detail-location pt-4 border-top">
        <div class="job-details-desc-item">
            <div class="float-left mr-2">
                <i class="mdi mdi-bank text-muted"></i>
            </div>
            <p class="text-muted mb-2">: <?php pick_job_address(); ?></p>
        </div>

        <div class="job-details-desc-item">
            <div class="float-left mr-2">
                <i class="mdi mdi-email text-muted"></i>
            </div>
            <p class="text-muted mb-2">: <?php echo $email; ?></p>
        </div>

        <div class="job-details-desc-item">
            <div class="float-left mr-2">
                <i class="mdi mdi-web text-muted"></i>
            </div>
            <p style="height: 25px;" class="text-muted mb-2 overflow-hidden">: <?php pick_job_field('website_url'); ?></p>
        </div>

        <div class="job-details-desc-item">
            <div class="float-left mr-2">
                <i class="mdi mdi-cellphone-iphone text-muted"></i>
            </div>
            <p class="text-muted mb-2">: <?php echo $phone; ?></p>
        </div>

        <div class="job-details-desc-item">
            <div class="float-left mr-2">
                <i class="mdi mdi-currency-usd text-muted"></i>
            </div>
            <p class="text-muted mb-2">: <?php echo $salary; ?></p>
        </div>


        <?php showArray($args); ?>
        <?php
        // if( pick_job_address($ID) ){
        //   echo '<h5 class="text-dark">Job Location</h5>';
        //   echo    '<div class="map">';
        //   echo      '<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6030.418742494061!2d-111.34563870463673!3d26.01036670629853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1471908546569" class="rounded" style="border: 0" allowfullscreen=""></iframe>';
        //   echo '  </div>';
        //   echo '<div class="job-details-desc-item mt-2">';
        //   echo    '<div class="float-left mr-2">';
        //   echo        '<i class="mdi mdi-map-marker text-muted"></i>';
        //   echo    '</div>';
        //   echo    '<p class="text-muted mb-2">' . pick_job_address($ID); . '</p>';
        //   echo '</div>';
        // }
        ?>











        <h6 class="text-dark f-17 mt-3 mb-0">Follow us at :</h6>
        <ul class="social-icon list-inline mt-3 mb-0">
          <?php $array = array('facebook' => $facebook, 'twitter' => $twitter, 'instagram' => $instagram, 'linkedin' => $linkedin); ?>
          <?php isPresent($array); ?>

        </ul>
    </div>
</div>
