<?php

    //Ajax Handler
    add_action('wp_ajax_record_connection', 'ajax_record_connection');
    add_action('wp_ajax_nopriv_record_connection', 'ajax_record_connection');

    //Record a connection from ajax on apply call
    function ajax_record_connection(){

        $pid = 0;
        if(isset($_POST['job_id'])) $pid = $_POST['job_id'];
        record_connection($pid);

    }

    //Record a connection
    function record_connection($job_id){

        //Increment the post clicks
        $post_clicks = get_post_meta($job_id, 'connections', true);
        if(is_numeric($post_clicks)){
            $post_clicks++;
        } else {
            $post_clicks = 1;
        }

        //Increment the global clicks
        $global_clicks = get_option('connections');
        if(is_numeric($global_clicks)){
            $global_clicks++;
        } else {
            $global_clicks = 1;
        }

        //Update totals in DB
        update_post_meta($job_id, 'connections', $post_clicks);
        update_option('connections', $global_clicks);

        echo json_encode(array('success' => true, 'global' => $global_clicks, 'post' => $post_clicks ));
        die();
    }
