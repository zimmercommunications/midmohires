<?php get_header(); ?>

    <section class="section page-next-level">
        <?php get_template_part("template-parts/content", "single_hero"); ?>
    </section>

    <!-- CONTACT FORM START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT FORM END -->


<?php get_footer(); ?>
