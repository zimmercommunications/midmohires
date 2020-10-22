<?php get_header(); ?>
    <!-- Start home -->
    <?php get_template_part("template-parts/content", "job_hero"); ?>
    <!-- end home -->
    <?php
    //Variables -- Declared Up Top and Unset at bottom
      $post_ID = get_the_ID();
      $jobDescription = get_field('description', get_the_id() );
      $jobQualifications = get_field('qualifications', get_the_id() );
      $display_name = get_field('display_name', get_the_id());
      $jobResponsibilities = get_field('responsibilities', get_the_id() );
      $companyTax = get_the_terms(get_the_ID(), 'company');
      $companyLogo = get_field('logo', $companyTax[0]);
      $companyLogoThumb = $companyLogo['sizes']['thumbnail'];

     ?>
    <!-- JOB DETAILS START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="text-dark mb-3">
                      <?php
                      if($display_name){
                        echo $display_name;
                      }
                      unset($display_name);
                       ?>
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-7">
                  <!-- Job Overview Start -->
                  <div class="job-detail border rounded p-4">
                      <div class="job-detail-content">
                          <img src="<?php echo $companyLogoThumb ?>" alt="" class="img-fluid float-left mr-md-3 mr-2 mx-auto d-block">
                          <div class="job-detail-com-desc overflow-hidden d-block">
                              <h4 class="mb-2"><a href="#" class="text-dark">
                                <?php echo get_the_terms(get_the_id(), 'company')[0]->name; ?>

                              </a></h4>
                              <p style="height: 50px;" class="overflow-hidden text-muted mb-0 col-lg-6"><i class="mdi mdi-link-variant mr-2"></i> <?php echo pick_job_website(); ?></p>
                              <p class="text-muted mb-0"><i class="mdi mdi-map-marker mr-2"></i> <?php echo pick_job_address(); ?></p>
                          </div>
                      </div>
                  </div>
                  <!-- Job Overview End -->
                 <!-- Job Description Section  -->
                    <?php $args = array($jobDescription); ?>
                    <?php
                    if(null !== $jobDescription){
                      echo '<div class="row">';
                      echo    '<div class="col-lg-12">';
                      echo        '<h5 class="text-dark mt-4">Job Description :</h5>';
                      echo    '</div>';
                      echo '</div>';

                      get_template_part('template-parts/content','job_description', $args);
                    }
                     ?>

                     <!-- End of Job Description Section  -->


                     <!-- Job Qualifications Section Start  -->

                    <?php $args = array($jobQualifications); ?>
                    <?php
                    if(null !== $jobQualifications){
                      echo '<div class="row">';
                      echo    '<div class="col-lg-12">';
                      echo        '<h5 class="text-dark mt-4">Qualifications :</h5>';
                      echo    '</div>';
                      echo '</div>';
                      get_template_part("template-parts/content", "job_qualifications", $args);
                    }
                     ?>

                    <!-- Job Qualifications Section End  -->

                    <!-- Job Responsibilities Section Start -->

                    <?php
                    if(null !== $jobResponsibilities){
                      echo '<div class="row">';
                      echo    '<div class="col-lg-12">';
                      echo        '<h5 class="text-dark mt-4">Primary Responsibilities :</h5>';
                      echo    '</div>';
                      echo '</div>';

                      $args = array($jobResponsibilities);
                      get_template_part('template-parts/content', 'job_responsibilities', $args);
                    }
                    else{
                      echo 'Null variable!';
                    }
                    ?>
                    <!-- Job Responsibilities Section End -->

                </div>
                <!-- Left Section End -->


                <div class="col-lg-4 col-md-5 mt-4 mt-sm-0">
                    <?php $args = array($companyTax, $post_ID); ?>
                    <?php get_template_part('template-parts/content', 'job_location', $args) ?>

                    <div style="background-color: #E1C128;" class="job-detail border rounded mt-4">
                        <a target="_blank" href="<?php pick_job_website(); ?>" class="btn btn-secondary btn-block">Apply For Job</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JOB DETAILS END -->
    <?php
    //Variables -- Declared Up Top and Unset at bottom
    unset($jobDescription);
     ?>
<?php get_footer(); ?>
