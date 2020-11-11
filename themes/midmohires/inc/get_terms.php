<?php

    //Set company order to name if on jobs archive page
    add_filter('get_terms_orderby', 'set_companies_order_to_name_on_jobs_page', 99, 3);
    
    function set_companies_order_to_name_on_jobs_page($orderby, $args){
        if(!is_admin()){
            if(is_post_type_archive('job')){
                if (is_admin() && ! wp_doing_ajax())
                    return $orderby;

                if (!isset($args['taxonomy']))
                    return $orderby;


                if(is_array($args['taxonomy'])){
                    if(isset($args['taxonomy'][0])){
                        $taxonomy = $args['taxonomy'][0];
                    } else {
                        $taxonomy = false;
                    }

                } else {
                    $taxonomy = $args['taxonomy'];
                }


                if (!in_array($taxonomy, array('company')))
                    return $orderby;

                $orderby = 't.name';
                return $orderby;
            }
        }
        return $orderby;
    }
