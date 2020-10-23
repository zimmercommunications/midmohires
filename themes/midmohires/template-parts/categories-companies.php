<div class="container mt-100 mt-60">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="section-title text-center mb-4 pb-2">
                <h4 class="title title-line pb-5">Companies</h4>
            </div>
        </div>
    </div>

    <div class="row align-items-center">
      <?php
          //Setting a querry for terms
          $query = new WP_Term_Query( array('taxonomy' => 'company') );
          foreach ($query->terms as $term){
            get_template_part( 'template-parts/content', 'company_block', array('term' => $term) );
          }
       ?>

    </div>
</div>
