<div class="col-lg-3 col-md-6 mt-4 pt-2">
    <a href="<?php echo get_post_type_archive_link('job'); ?>?job_category%5B%5D=<?php echo $args['term']->slug ?>">
        <div class="popu-category-box bg-light rounded text-center p-4">
            <div class="popu-category-icon mb-3">
                <?php
                    $icon = get_field('icon', $args['term']);
                    if($icon):
                ?>
                    <i class="mdi <?php echo $icon; ?> d-inline-block rounded-pill h3 text-primary"></i>
                <?php else: ?>
                    <i class="mdi mdi-briefcase-search d-inline-block rounded-pill h3 text-primary"></i>
                <?php endif; ?>
            </div>
            <div class="popu-category-content">
                <h5 class="mb-2 text-dark title"><?php echo $args['term']->name; ?></h5>
                <p class="text-success mb-0 rounded"><?php echo $args['term']->count ?> Jobs</p>
            </div>
        </div>
    </a>
</div>
