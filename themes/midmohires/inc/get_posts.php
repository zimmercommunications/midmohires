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
