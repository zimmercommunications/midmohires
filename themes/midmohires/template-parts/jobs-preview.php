<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="section-title text-center mb-4 pb-2">
                <h4 class="title title-line pb-5">Find Your Jobs</h4>
                <p class="text-muted para-desc mx-auto mb-1">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-9 text-center mt-4 pt-2">
            <ul class="nav nav-pills nav nav-pills bg-white rounded nav-justified flex-column flex-sm-row" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link rounded active" id="recent-job-tab" data-toggle="pill" href="#recent-job" role="tab" aria-controls="recent-job" aria-selected="true">Recent Jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded" id="featured-job-tab" data-toggle="pill" href="#featured-job" role="tab" aria-controls="featured-job" aria-selected="false">Featured Jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded" id="part-job-tab" data-toggle="pill" href="#part-job" role="tab" aria-controls="part-job" aria-selected="false">Part Time</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded" id="full-job-tab" data-toggle="pill" href="#full-job" role="tab" aria-controls="full-job" aria-selected="false">Full Time</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="tab-content mt-2" id="pills-tabContent">
                <div class="tab-pane fade show active" id="recent-job" role="tabpanel" aria-labelledby="recent-job-tab">
                    <div class="row">
                        <div class="col-lg-12">
                          <?php

                          /**
                          * Setup query to show the ‘job post type with ‘4’ posts.
                          * Output the title with an excerpt.
                          */
                            $args = array(
                                'post_type' => 'job',
                                'posts_per_page' => 4
                            );
                            //starting the query
                            $query = new WP_Query( $args );


                            //Setting the querry to go through each post
                            while ( $query->have_posts() ){
                              $query->the_post();
                              get_template_part( 'template-parts/content', 'jobs-preview' );
                            }

                            wp_reset_postdata();

                          ?>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- end row -->

    <!-- end row -->
    <div class="row">
        <div class="col-lg-12 mt-4 pt-2">
            <nav aria-label="Page navigation example">
                <ul class="pagination job-pagination mb-0 justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                            <i class="mdi mdi-chevron-double-left f-15"></i>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="mdi mdi-chevron-double-right f-15"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
