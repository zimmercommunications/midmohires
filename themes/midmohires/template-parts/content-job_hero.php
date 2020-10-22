<?php

    $company = get_the_terms(get_the_ID(), 'company', );

?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="text-center text-white">
                <h4 class="text-uppercase title mb-4"><?php the_field('display_name'); ?></h4>
                <ul class="page-next d-inline-block mb-0">
                    <li><a href="<?php echo site_url(); ?>" class="text-white text-uppercase font-weight-bold">Home</a></li>
                    <?php if(isset($company[0])) : ?>
                        <li><a href="<?php echo get_post_type_archive_link('job'); ?>?company%5B%5D=<?php echo $company->slug ?>" class="text-white text-uppercase font-weight-bold"><?php echo $company[0]->name; ?></a></li>
                    <?php endif; ?>
                    <li>
                        <span class="text-uppercase text-white font-weight-bold"><?php the_field('display_name'); ?></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
