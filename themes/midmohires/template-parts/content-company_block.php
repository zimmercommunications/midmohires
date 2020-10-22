<?php
$company = $args['term'];
 ?>
<div class="col-lg-3 col-md-4 col-6 mt-4 pt-2 text-center company-block">
    <?php
    $image = get_field('logo', $company);
    if( !empty( $image ) ): ?>
      <a class="company-logo-link" href="<?php echo get_post_type_archive_link('job'); ?>?company%5B%5D=<?php echo $company->slug ?>"><img style="height: 100px" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
    <?php endif; ?>

</div><!--end col-->
