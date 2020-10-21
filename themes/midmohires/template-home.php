<?php

/*
Template Name: Home Page
*/

get_header(); ?>

<!-- front page hero start -->
<?php get_template_part('template-parts/content', 'front_hero'); ?>
<!-- front page hero end -->

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
<section class="section bg-counter position-relative" style="background: url('<?php echo get_template_directory_uri() . '/assets/img/counter-back.jpg'; ?>') center center; background-size: cover; background-repeat: no-repeat;">
    <?php get_template_part('template-parts/content', 'counter'); ?>
</section>
<!-- counter end -->

<?php get_footer(); ?>
