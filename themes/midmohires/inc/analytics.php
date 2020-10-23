<?php

    //Analytics Embed
    add_action('wp_head', 'analytics_embed');
    function analytics_embed(){

        //Google
        $ga_code = get_field('google_analytics_universal', 'option');
        if($ga_code){
            echo $ga_code;
        }

        //StackAdapt
        $sa_code = get_field('stackadapt_analytics_universal', 'option');
        if($sa_code){
            echo $sa_code;
        }
    }
