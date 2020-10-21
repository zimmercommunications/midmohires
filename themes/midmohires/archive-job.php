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
        <?php get_template_part( 'template-parts/content', 'search_form_simple' ); ?>
    </div>
    <!-- REGISTRATION-FORM END -->

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="show-results mt-4">
                    <div class="float-left">
                        <h5 class="text-dark mb-0 pt-2">Showing ( <?php echo $wp_query->post_count; ?> Jobs & Vacancies )</h5>
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

                        <!-- JOB CATEGORIES -->
                        <?php
                            //Job Category Box
                            $terms = new WP_Term_Query(array('taxonomy' => 'job_category', 'orderby' => 'name', 'order' => 'ASC'));
                            if(count($terms->get_terms()) > 0) :
                                $cur_cat = "";
                                if(isset($_GET['job_category'])) $cur_cat = $_GET['job_category'];
                        ?>
                        <div class="card rounded mt-4">
                            <a data-toggle="collapse" href="#companiesjobcat" class="job-list" aria-expanded="true" aria-controls="companiesjobcat">
                                <div class="card-header" id="companiesjobcatheading">
                                    <h6 class="mb-0 text-dark f-18">Categories</h6>
                                </div>
                            </a>
                            <div id="companiesjobcat" class="collapse show" aria-labelledby="companiesjobcatheading">
                                <div class="card-body p-0">

                                    <?php foreach($terms->get_terms() as $term) : ?>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="job-category-radio-<?php echo $term->slug ?>" name="job_category" value="<?php echo $term->slug ?>" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="job-category-radio-<?php echo $term->slug ?>"><?php echo $term->name; ?></label>
                                    </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- COMPANIES -->
                        <?php
                            //Job Category Box
                            $terms = new WP_Term_Query(array('taxonomy' => 'company', 'orderby' => 'name', 'order' => 'ASC'));
                            if(count($terms->get_terms()) > 0) :
                                $cur_cat = "";
                                if(isset($_GET['company'])) $cur_cat = $_GET['company'];
                        ?>
                        <div class="card rounded mt-4">
                            <a data-toggle="collapse" href="#companiescollapse" class="job-list" aria-expanded="true" aria-controls="collapsetwo">
                                <div class="card-header" id="companiescollapseheading">
                                    <h6 class="mb-0 text-dark f-18">Companies</h6>
                                </div>
                            </a>
                            <div id="companiescollapse" class="collapse show" aria-labelledby="companiescollapseheading">
                                <div class="card-body p-0">

                                    <?php foreach($terms->get_terms() as $term) : ?>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="job-category-radio-<?php echo $term->slug ?>" name="company" value="<?php echo $term->slug ?>" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="job-category-radio-<?php echo $term->slug ?>"><?php echo $term->name; ?></label>
                                    </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>
                        </div>
                        <?php endif; ?>


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
