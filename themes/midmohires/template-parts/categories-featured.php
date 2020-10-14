<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="section-title text-center mb-4 pb-2">
                <h4 class="title title-line pb-5">Featured Catagories</h4>
                <p class="text-muted para-desc mx-auto mb-1">Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
            </div>
        </div>
    </div>
    <div class="row">
      <?php
      $query = new WP_Term_Query( array('taxonomy' => 'job_category') );

      foreach ( $query->terms as $term ) {
        get_template_part('template-parts/content', 'category_block', array('term' => $term));
        // echo '<pre>';
        // print_r($term);
        // echo '</pre>';
        // echo $term->slug;
      }
      ?>

    </div>

    <div class="row justify-content-center">
        <div class="col-12 text-center mt-4 pt-2">
            <a href="javascript:void(0)" class="btn btn-primary-outline">Browse All Categories <i class="mdi mdi-chevron-right"></i></a>
        </div>
    </div>
</div>
