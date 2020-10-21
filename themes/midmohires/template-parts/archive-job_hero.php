<?php
    global $wp_query;

    $jobs_text = "Find Jobs";
    if(have_posts()){
        $jobs_text = $wp_query->found_posts . ' Jobs Found';
    }

?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="text-center text-white">
                <h4 class="text-uppercase title mb-4"><?php echo $jobs_text ?></h4>
                <ul class="page-next d-inline-block mb-0">
                    <li><a href="<?php echo site_url(); ?>" class="text-white text-uppercase font-weight-bold">Home</a></li>
                    <li>
                        <span class="text-uppercase text-white font-weight-bold">Find Jobs</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
