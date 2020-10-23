<?php

    //This class is used to enqueue all needed styles and scripts
    class MidMo_Enqueue {

        //Manage what to load when
        public static function init(){

            //Load global styles
            add_action('wp_enqueue_scripts', array('MidMo_Enqueue', 'global_styles'));
            add_action('admin_enqueue_scripts', array('MidMo_Enqueue', 'global_styles'));

            //Load global scripts
            add_action('wp_enqueue_scripts', array('MidMo_Enqueue', 'global_scripts'));
            add_action('admin_enqueue_scripts', array('MidMo_Enqueue', 'global_scripts'));

            //Load frontend styles
            add_action('wp_enqueue_scripts', array('MidMo_Enqueue', 'frontend_styles'));

            //Load frontend scripts
            add_action('wp_enqueue_scripts', array('MidMo_Enqueue', 'frontend_scripts'));

            //Load backend styles
            add_action('admin_enqueue_scripts', array('MidMo_Enqueue', 'backend_styles'));

            //Load backend scripts
            add_action('admin_enqueue_scripts', array('MidMo_Enqueue', 'backend_scripts'));

        }

        //Used for frontend only styles
        public static function frontend_styles(){

            //The Main Theme CSS style
            wp_enqueue_style( 'midmo-main', get_template_directory_uri() . '/assets/css/style.min.css', false, time());

        }

        //Used for frontend only scripts
        public static function frontend_scripts(){

            //The Main Theme JS Script
            wp_enqueue_script( 'midmo-main', get_template_directory_uri() . '/assets/js/main.min.js', false, time(), true);

        }

        //Used for backend only styles
        public static function backend_styles(){

            //The Admin CSS style
            wp_enqueue_style( 'midmo-admin', get_template_directory_uri() . '/assets/css/admin.min.css', false, time());

        }

        //Used for backend only scripts
        public static function backend_scripts(){

        }

        //Used for global styles
        public static function global_styles(){

        }

        //Used for global only scripts
        public static function global_scripts(){

        }

    }


    //Init the class
    MidMo_Enqueue::init();
