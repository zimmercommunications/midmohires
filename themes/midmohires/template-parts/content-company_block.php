<?php
$company = $args['term'];
//echo print_r($company);
 ?>



<div class="col-lg-4 col-md-4 col-6 mt-4 pt-2 text-center">
    <?php
    $image = get_field('logo', $company);
    if( !empty( $image ) ): ?>
      <a class="company-logo-link" href="<?php echo get_term_link($company); ?>"><img style="height: 100px" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
    <?php endif; ?>

    <!-- <h5 class="mb-2 text-dark title"><?php echo $company->name; ?></h5>
    <div style="height: 100px"><p><?php the_field('excerpt', $company); ?></p></div> -->
</div><!--end col-->
