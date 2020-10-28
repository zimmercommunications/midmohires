<?php

    add_filter( 'embed_oembed_html', 'custom_video_oembed' );
    function custom_video_oembed( $code ){
        if( stripos( $code, 'youtube.com' ) !== FALSE || stripos( $code, 'vimeo.com' ) !== FALSE || stripos( $code, 'youtu.be' ) !== FALSE){
            if(stripos( $code, 'iframe' ) !== FALSE){
                $code = '<div class="video-holder">' . str_replace( '<iframe', '<iframe class="video-player" type="text/html" ', $code ) . '</div>';
            }
        }
        return $code;
    }
