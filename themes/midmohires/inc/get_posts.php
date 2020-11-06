<?php

add_action('after_setup_theme', 'clean_tax', 1);
function clean_tax(){

    $test = array('company', 'job_category');

    foreach($test as $t){
        if(isset($_GET[$t])){
            $clean = true;
            if(is_array($_GET[$t])){
                foreach($_GET[$t] as $c){
                    if($c){
                        $clean = false;
                    }
                }
            }
            if($clean){
                unset($_GET[$t]);
            }
        }
    }

}

//Make orderby random on find jobs page without order set
add_filter('pre_get_posts', 'set_order_to_rand');
function set_order_to_rand($query){
    if(is_post_type_archive('job')){
        if(!isset($_GET['posts_per_page'])){
            $query->set('posts_per_page', 24);
        }
        if(!isset($_GET['orderby'])){
            $query->set('orderby', 'rand');
        }
    }
    return $query;
}
