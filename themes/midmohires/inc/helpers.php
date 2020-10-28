<?php

//Should check if link exists for job, and if not, returns company link, else will return null
function getApplyNowLink($company){
    $jobApplyNowLink = get_field('website_url');
    $companyApplyNowLink = get_field('website_url', $company);
    if($jobApplyNowLink){
        echo $jobApplyNowLink;
    }
    elseif($companyApplyNowLink){
        echo $companyApplyNowLink;
    }
    else{
        echo "";
    }
}

//Jesse's Function to simplify array displaying
function showArray($array){
    echo "<pre>";
    echo print_r($array);
    echo "</pre>";
}

//Class to help with counters template section on the home template
class Counters{
    public static function jobs(){
        $posts = get_posts( array('post_type' => 'job', 'posts_per_page' => -1));
        echo count($posts);
    }
    public static function companies(){
        $count = 0;
        $companies = get_terms( array('taxonomy' => 'company', 'posts_per_page' => -1));
        echo count($companies);
    }
    public static function connections(){
        $count = get_option('connections');
        echo ($count) ? $count : 0;
    }
    public static function job_connections($jid = false){
        if(!$jid) $jid = get_the_ID();
        $count = get_post_meta($jid, 'connections', true);
        echo ($count) ? $count : 0;
    }
}

//Class to help with picking between company information
class Info_Sort{
    function pick_address($arg_id){
        $company = get_the_terms($arg_id, 'company');
        $company_location = get_fields('location', $company);
        $job_address = get_field('location', $arg_id );

        if($job_address != null && $company_location != null){
            echo $job_address;
        }
        elseif($job_address != null && $company_location == null){
            echo $job_address;
        }
        elseif($job_address == null && $company_location != null){
            echo $company_location;
        }
    }
    function pick_website($arg_id){
        $company = get_the_terms($arg_id, 'company');
        $company_website = get_fields('website_url', $company);
        $job_website = get_field('website_url', $arg_id );

        if($job_website != null && $company_website != null){
            echo $job_website;
        }
        elseif($job_website != null && $company_website == null){
            echo $job_website;
        }
        elseif($job_website == null && $company_website != null){
            echo $company_website;
        }
        else{
            echo "Test";
        }
    }

    //Should take the field_name argument and use it to look up similar fields in both Company & Job //Will Default to $job_field if data of $company_field is null
    // Will only work if FIELD NAMES MATCH
    function pick_field($field_name, $arg_id){
        $companyTerms = get_the_terms($arg_id, 'company');
        $company_field = get_fields($field_name, $companyTerms);
        $job_field = get_field($field_name, $arg_id );

        if($job_field != null && $company_field != null){
            echo $job_field;
        }
        elseif($job_field != null && $company_field == null){
            echo $job_field;
        }
        elseif($job_field == null && $company_field != null){
            echo $company_field;
        }
        else{
            echo "Test";
        }
    }
    //Will favor company fields over job fields
    function pick_field_company($field_name, $arg_id){
        $companyTerms = get_the_terms($arg_id, 'company');
        $company_field = get_field($field_name, $companyTerms);
        $job_field = get_field($field_name, $arg_id );

        if($company_field) return $company_field;
        if($job_field) return $job_field;
        return false;

    }
    //Will favor job fields over company fields
    function pick_field_job($field_name, $arg_id){
        $companyTerms = get_the_terms($arg_id, 'company');
        $company_field = get_field($field_name, $companyTerms[0]);
        $job_field = get_field($field_name, $arg_id );

        if($job_field) return $job_field;
        if($company_field) return $company_field;
        return false;

    }
}
// Will take an array of field data, check if it exists, and then display the data as a sm logo.
function display_logos($array){
    foreach($array as $k => $v){
        if($v){
            echo '<li class="list-inline-item"><a target="_blank" href="' .  $v . '" class="rounded"><i class="mdi mdi-' . $k . '"></i></a></li>';
        }

    }
}

//DEPRICATED: Set to expire in 10/2023
function isPresent($array){
    display_logos($array);
}

//Helper Functions!

function pick_job_address($arg_id = false){
    if(!$arg_id) $arg_id = get_the_ID();
    return Info_Sort::pick_address($arg_id);
}

function pick_job_website($arg_id = false){
    if(!$arg_id) $arg_id = get_the_ID();
    return Info_Sort::pick_website($arg_id);
}

function pick_job_field($field_name, $arg_id = false){
    if(!$arg_id) $arg_id = get_the_ID();
    return Info_Sort::pick_field($field_name, $arg_id);
}
function pick_field_job($field_name, $arg_id = false){
    if(!$arg_id) $arg_id = get_the_ID();
    return Info_Sort::pick_field_job($field_name, $arg_id);
}
function pick_field_company($field_name, $arg_id = false){
    if(!$arg_id) $arg_id = get_the_ID();
    return Info_Sort::pick_field_company($field_name, $arg_id);
}

function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

function wpdocs_get_paginated_links( $query ) {
    // When we're on page 1, 'paged' is 0, but we're counting from 1,
    // so we're using max() to get 1 instead of 0
    $currentPage = max( 1, get_query_var( 'paged', 1 ) );

    // This creates an array with all available page numbers, if there
    // is only *one* page, max_num_pages will return 0, so here we also
    // use the max() function to make sure we'll always get 1
    $pages = range( 1, max( 1, $query->max_num_pages ) );

    // Now, map over $pages and return the page number, the url to that
    // page and a boolean indicating whether that number is the current page
    return array_map( function( $page ) use ( $currentPage ) {
        return ( object ) array(
            "isCurrent" => $page == $currentPage,
            "page" => $page,
            "url" => get_pagenum_link( $page )
        );
    }, $pages );
}
