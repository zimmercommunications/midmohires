<div class="bg-overlay bg-overlay-gradient"></div>
<div class="container">
    <div class="row" id="counter">
        <div class="col-md-3 col-6">
            <div class="home-counter pt-4 pb-4">
                <div class="float-left counter-icon mr-3">
                    <i class="mdi mdi-bank h1 text-white"></i>
                </div>
                <div class="counter-content overflow-hidden">
                    <h1 class="counter-value text-white mb-1" data-count="<?php wp_count_terms('company') ?>"></h1>
                    <p class="counter-name text-white text-uppercase mb-0">Companies</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-6">
            <div class="home-counter pt-4 pb-4">
                <div class="float-left counter-icon mr-3">
                    <i class="mdi mdi-file-document-box h1 text-white"></i>
                </div>
                <div class="counter-content overflow-hidden">
                    <h1 class="counter-value text-white mb-1" data-count="480">80</h1>
                    <p class="counter-name text-white text-uppercase mb-0">Connections</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-6">
            <div class="home-counter pt-4 pb-4">
                <div class="float-left counter-icon mr-3">
                    <i class="mdi mdi-calendar-multiple-check h1 text-white"></i>
                </div>
                <div class="counter-content overflow-hidden">
                    <h1 class="counter-value text-white mb-1" data-count="<?php wp_count_posts("Jobs"); ?>"></h1>
                    <p class="counter-name text-white text-uppercase mb-0">Jobs Posted</p>
                </div>
            </div>
        </div>
    </div>

</div>
