<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="section-title text-center mb-4 pb-2">
                <h4 class="title title-line pb-5">Featured Categories</h4>
            </div>
        </div>
    </div>
    <div class="row">
      <?php
      $query = new WP_Term_Query( array('taxonomy' => 'job_category', 'orderby' => 'name') );

      foreach ( $query->terms as $term ) {
        get_template_part('template-parts/content', 'category_block', array('term' => $term));
      }
      ?>

    </div>

    <div class="row justify-content-center">
        <div class="col-12 text-center mt-4 pt-2">
            <a href="<?php echo get_post_type_archive_link('job'); ?>" class="btn btn-primary-outline">Browse All Jobs <i class="mdi mdi-chevron-right"></i></a>
        </div>
    </div>
</div>
