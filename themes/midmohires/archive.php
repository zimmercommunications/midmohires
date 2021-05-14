<?php
    global $wp_query, $paged;
    $cur_page = $paged;
    if($cur_page == 0){
        $cur_page = 1;
    }
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
                    <div class="float-right">
                        <small>Viewing page <?php echo $cur_page ?> of <?php echo $wp_query->max_num_pages ?></small>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 pt-2">
                <div class="left-sidebar">
                    <div class="accordion" id="accordionExample">

                        <!-- JOB CATEGORIES -->
                        <?php
                            $terms = new WP_Term_Query(array('taxonomy' => 'job_category', 'orderby' => 'name', 'order' => 'ASC'));
                            if(count($terms->get_terms()) > 0) :
                                $cur_cat = "";
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
                                    <div class="custom-control custom-checkbox">
                                        <?php
                                            $checked = '';
                                            if(isset($_GET['job_category']) && in_array($term->slug, $_GET['job_category'])) $checked = 'checked="checked"';
                                        ?>
                                        <input type="checkbox" <?php echo $checked ?> id="job-category-checkbox-<?php echo $term->slug ?>" name="job_category[]" value="<?php echo $term->slug ?>" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="job-category-checkbox-<?php echo $term->slug ?>"><?php echo $term->name; ?></label>
                                    </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- COMPANIES -->
                        <?php
                            $terms = new WP_Term_Query(array('taxonomy' => 'company', 'orderby' => 'name-special', 'order' => 'ASC'));
                            if(count($terms->get_terms()) > 0) :
                                $cur_cat = "";
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
                                    <div class="custom-control custom-checkbox">
                                        <?php
                                            $checked = '';
                                            if(isset($_GET['company']) && in_array($term->slug, $_GET['company'])) $checked = 'checked="checked"';
                                        ?>
                                        <input type="checkbox" <?php echo $checked; ?> id="job-category-checkbox-<?php echo $term->slug ?>" name="company[]" value="<?php echo $term->slug ?>" class="custom-control-input">
                                        <label class="custom-control-label ml-1 text-muted" for="job-category-checkbox-<?php echo $term->slug ?>"><?php echo $term->name; ?></label>
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

        <?php get_template_part('template-parts/content', 'pagination'); ?>

    </div>
</section>

<?php get_footer(); ?>
