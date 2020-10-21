<?php
    global $wp_query;
    get_header();
?>

<!-- Hero Start -->
<section class="section page-next-level">
    <?php get_template_part( 'template-parts/archive', 'job_hero' ); ?>
</section>

<section class="section">
    <!-- REGISTRATION-FORM START -->
    <div class="container">
        <?php get_template_part( 'template-parts/content', 'search_form' ); ?>
    </div>
    <!-- REGISTRATION-FORM END -->

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="show-results mt-4">
                    <div class="float-left">
                        <h5 class="text-dark mb-0 pt-2">Showing ( <?php echo $wp_query->found_posts; ?> Jobs & Vacancies )</h5>
                    </div>
                    <!-- <div class="sort-button float-right">
                        <select class="nice-select rounded">
                            <option data-display="Select">Nothing</option>
                            <option value="1">Web Developer</option>
                            <option value="2">PHP Developer</option>
                            <option value="3">Web Designer</option>
                        </select>
                    </div> -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 pt-2">
                <div class="left-sidebar">
                    <div class="accordion" id="accordionExample">
                        <div class="card rounded mt-4">
                            <a data-toggle="collapse" href="#collapseOne" class="job-list" aria-expanded="true" aria-controls="collapseOne">
                                <div class="card-header" id="headingOne">
                                    <h6 class="mb-0 text-dark f-18">Date Posted</h6>
                                </div>
                            </a>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                <div class="card-body p-0">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio1">Last Hour</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio2">Last 24 hours</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio3">Last 7 days</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio4">Last 14 days</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio5">Last 30 days</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- collapse one end -->
                        <div class="card rounded mt-4">
                            <a data-toggle="collapse" href="#collapsetwo" class="job-list" aria-expanded="true" aria-controls="collapsetwo">
                                <div class="card-header" id="headingtwo">
                                    <h6 class="mb-0 text-dark f-18">Categories</h6>
                                </div>
                            </a>
                            <div id="collapsetwo" class="collapse show" aria-labelledby="headingtwo">
                                <div class="card-body p-0">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio7" name="customRadio1" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio7">Digital & Creative</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio8" name="customRadio1" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio8">Accountancy</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio9" name="customRadio1" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio9">Banking</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio10" name="customRadio1" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio10">IT Contractor</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio11" name="customRadio1" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio11">Graduate</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio12" name="customRadio1" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio12">Estate Agency</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- collapse one end -->
                        <div class="card rounded mt-4">
                            <a data-toggle="collapse" href="#collapsethree" class="job-list" aria-expanded="true" aria-controls="collapsethree">
                                <div class="card-header" id="headingthree">
                                    <h6 class="mb-0 text-dark f-18">Experince</h6>
                                </div>
                            </a>
                            <div id="collapsethree" class="collapse show" aria-labelledby="headingthree">
                                <div class="card-body p-0">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio13" name="customRadio2" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio13">1Year to 2Year</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio14" name="customRadio2" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio14">2Year to 3Year</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio15" name="customRadio2" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio15">3Year to 4Year</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio16" name="customRadio2" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio16">IT Contractor</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- collapse one end -->

                        <div class="card rounded mt-4">
                            <a data-toggle="collapse" href="#collapsefour" class="job-list" aria-expanded="true" aria-controls="collapsefour">
                                <div class="card-header" id="headingfour">
                                    <h6 class="mb-0 text-dark f-18">Gender</h6>
                                </div>
                            </a>
                            <div id="collapsefour" class="collapse show" aria-labelledby="headingfour">
                                <div class="card-body p-0">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio17" name="customRadio3" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio17">Male</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio18" name="customRadio3" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio18">Female</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio19" name="customRadio3" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio19">Others</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- collapse one end -->

                        <div class="card rounded mt-4">
                            <a data-toggle="collapse" href="#collapsefive" class="job-list collapsed" aria-expanded="false" aria-controls="collapsefive">
                                <div class="card-header" id="headingfive">
                                    <h6 class="mb-0 text-dark f-18">Offerd Salary</h6>
                                </div>
                            </a>
                            <div id="collapsefive" class="collapse" aria-labelledby="headingfive">
                                <div class="card-body p-0">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio20" name="customRadio4" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio20">$1k - $20k</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio21" name="customRadio4" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio21">$21k - $30k</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio22" name="customRadio4" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio22">$31k - $40k</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio23" name="customRadio4" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio23">$41k - $50k</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio24" name="customRadio4" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio24">$51k - $60k</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- collapse one end -->

                        <div class="card rounded mt-4">
                            <a data-toggle="collapse" href="#collapsesix" class="job-list collapsed" aria-expanded="false" aria-controls="collapsesix">
                                <div class="card-header" id="headingsix">
                                    <h6 class="mb-0 text-dark f-18">Job Type</h6>
                                </div>
                            </a>
                            <div id="collapsesix" class="collapse" aria-labelledby="headingsix">
                                <div class="card-body p-0">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio25" name="customRadio5" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio25">Part Time</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio26" name="customRadio5" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio26">Internship</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio27" name="customRadio5" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio27">Full Time</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio28" name="customRadio5" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio28">Freelance</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio29" name="customRadio5" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio29">Temporary</label>
                                    </div>

                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio30" name="customRadio5" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="customRadio30">Volunteer</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- collapse one end -->
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="row">

                        <?php if(have_posts()) : ?>
                            <?php while(have_posts()) : the_post(); ?>
                                <?php get_template_part( 'template-parts/content', 'job_grid_block' ); ?>
                            <?php endwhile; ?>
                        <?php else: ?>
                        <?php endif; ?>
                </div>
            </div>
        </div>

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
</section>

<?php get_footer(); ?>
