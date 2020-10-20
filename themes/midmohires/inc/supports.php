<?php

    //Add theme supports
    function some_name(){
        add_theme_support( 'title-tag' );
    }

    add_action( 'after_setup_theme', 'some_name' );
