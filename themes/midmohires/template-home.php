<?php

/*
Template Name: Home Page
*/

get_header(); ?>

<!-- front page hero start -->
<?php get_template_part('template-parts/content', 'front_hero'); ?>
<!-- front page hero end -->

<!-- how it works start -->
<section class="section">
    <?php get_template_part("template-parts/content", "how_it_works"); ?>
</section>
<!-- how it works end -->

<!-- companies start -->
<section>
    <?php get_template_part("template-parts/categories", "companies"); ?>
</section>
<!-- companies end -->

<!-- all jobs start -->
<section class="section bg-light">
    <?php get_template_part("template-parts/jobs", "preview"); ?>
</section>
<!-- all jobs end -->

<!-- popular category start -->
<section class="section">
    <?php get_template_part("template-parts/categories", 'featured'); ?>
</section>
<!-- popular category end -->

<!-- counter start -->
<section class="section bg-counter position-relative" style="background: url('https://via.placeholder.com/200X700//88929f/5a6270C/O https://placeholder.com/') center center;">
    <?php get_template_part('template-parts/content', 'counter'); ?>
</section>
<!-- counter end -->

<?php get_footer(); ?>
