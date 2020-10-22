<?php

global $wp_query;

$total_pages = $wp_query->max_num_pages;
$cur_page = $wp_query->paged;

if($total_pages > 1) :

    $display_pages_num = 4;
    $display_first = true;
    $display_prev = true;
    $display_last = true;
    $display_next = true;
    $pages = array();

    if($cur_page == $total_pages) {
        $display_next = false;
        $display_last = false;
    }

    if($cur_page == 1) {
        $display_prev = false;
        $display_first = false;
    }

    if($total_pages <= $display_pages_num){
        for($i = 1; $i <= $total_pages; $i++){
            //$pages[$i] = get_2_posts_page_link();
        }
    }

    showArray(paginate_links( array('type' => 'list') ));

?>

<div class="row">
    <div class="col-lg-12 mt-4 pt-2">
        <nav aria-label="Page navigation example">
            <ul class="pagination job-pagination mb-0 justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                        <i class="mdi mdi-chevron-double-left f-15"></i>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">
                        <i class="mdi mdi-chevron-double-right f-15"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<?php endif; ?>
