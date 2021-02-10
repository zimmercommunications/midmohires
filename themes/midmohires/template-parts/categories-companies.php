<div class="container mt-100 mt-60 pb-5">
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
            shuffle($query->terms);
            foreach ($query->terms as $term){
                if(get_field('display_on_front_page', $term)){
                    get_template_part( 'template-parts/content', 'company_block', array('term' => $term) );
                }
            }
        ?>

    </div>
</div>
