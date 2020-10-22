<?php

global $wp_query, $paged;

$total_pages = $wp_query->max_num_pages;
$cur_page = $paged;

if($total_pages > 1) :

    $pagination_links = wpdocs_get_paginated_links($wp_query);
    $display_links = array();
    $display_pages_num = 4;
    $html = "";
    $next_page_index = $cur_page;
    if($cur_page == 0){
        $cur_page = 1;
        $next_page_index = $cur_page;
    }

    if($cur_page != 0 && $cur_page != 1) {
        $html .= '<li class="page-item"><a class="page-link" href="' . $pagination_links[0]->url . '" tabindex="-1" aria-disabled="true"><i class="mdi mdi-chevron-double-left f-15"></i></a></li>';
        $html .= '<li class="page-item"><a class="page-link" href="' . $pagination_links[$cur_page - 2]->url . '" tabindex="-1" aria-disabled="true"><i class="mdi mdi-chevron-left f-15"></i></a></li>';
    }

    if($total_pages <= $display_pages_num){
        for($i = 0; $i < $total_pages; $i++){
            $class = 'page-item';
            if($cur_page == $i) {
                $class .= ' active';
            }
            $html .= '<li class="' . $class . '"><a class="page-link" href="' . $pagination_links[$i]->url . '">' . ($i + 1) . '</a></li>';
        }
    } elseif($cur_page < 3) {
        for($i = 0; $i < $display_pages_num; $i++){
            $class = 'page-item';
            if($cur_page - 1 == $i) {
                $class .= ' active';
            }
            $html .= '<li class="' . $class . '"><a class="page-link" href="' . $pagination_links[$i]->url . '">' . ($i + 1) . '</a></li>';
        }
    } elseif($cur_page > $total_pages - ceil($display_pages_num / 2)) {
        for($i = ($cur_page - 1) - floor($display_pages_num / 2); $i < $total_pages; $i++){
            $class = 'page-item';
            if($cur_page - 1 == $i) {
                $class .= ' active';
            }
            $html .= '<li class="' . $class . '"><a class="page-link" href="' . $pagination_links[$i]->url . '">' . ($i + 1) . '</a></li>';
        }
    } else {
        for($i = ($cur_page - 1) - floor($display_pages_num / 2); $i < ($cur_page - 1) + ceil($display_pages_num / 2); $i++){
            $class = 'page-item';
            if($cur_page - 1 == $i) {
                $class .= ' active';
            }
            $html .= '<li class="' . $class . '"><a class="page-link" href="' . $pagination_links[$i]->url . '">' . ($i + 1) . '</a></li>';
        }
    }

    if($cur_page != $total_pages) {
        $html .= '<li class="page-item"><a class="page-link" href="' . $pagination_links[$next_page_index]->url . '" tabindex="-1" aria-disabled="true"><i class="mdi mdi-chevron-right f-15"></i></a></li>';
        $html .= '<li class="page-item"><a class="page-link" href="' . $pagination_links[count($pagination_links) - 1]->url . '" tabindex="-1" aria-disabled="true"><i class="mdi mdi-chevron-double-right f-15"></i></a></li>';
    }

?>

<div class="row">
    <div class="col-lg-12 mt-4 pt-2">
        <nav aria-label="Page navigation example">
            <ul class="pagination job-pagination mb-0 justify-content-center">
                <?php echo $html; ?>
            </ul>
        </nav>
    </div>
</div>

<?php endif; ?>
