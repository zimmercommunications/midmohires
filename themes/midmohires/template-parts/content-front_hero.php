<section class="bg-home">
    <div class="back">
        <div class="bg-layer"></div>
        <img class="people" src="<?php echo get_template_directory_uri() . '/assets/img/job-fair-dude.jpg'; ?>" />
        <img class="hands blend--color-dodge" src="<?php echo get_template_directory_uri() . '/assets/img/handshake.png'; ?>" />
    </div>
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="title-heading text-center text-white">
                            <h6 class="small-title text-uppercase text-light mb-3">Find jobs, create trackable resumes and enrich your applications.</h6>
                            <h1 class="heading font-weight-bold mb-4">The Easiest Way to Get Your New Job</h1>
                        </div>
                    </div>
                </div>
                <?php get_template_part( 'template-parts/content', 'search_form' ); ?>
            </div>
        </div>
    </div>
</section>
