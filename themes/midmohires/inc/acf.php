<?php

    //The Mid Mo Inc class. Used to load included files
    class MidMo_Acf {

        public static function init(){

            //Load all inc files
            self::load('home-page-settings');
            self::load('job-custom-field');
            self::load('per-company-field');
            self::load('job-category-settings');
            self::load('theme-settings-api-keys');
            self::load('theme-settings-pages');
            self::load('theme-settings-analytics');

            //Declare Option Pages
            add_action('acf/init', array('MidMo_Acf', 'option_pages'));

        }

        private function load($file){
            require get_template_directory() . '/inc/acf/' . $file . '.php';
        }

        //Add the option pages for acf
        public static function option_pages(){

            acf_add_options_page(array(
                'page_title' 	=> 'Mid-Mo Hires',
                'menu_title'	=> 'Mid-Mo Hires',
                'menu_slug' 	=> 'midmo-general-settings',
                'capability'	=> 'edit_posts',
                'redirect'		=> false,
                'icon_url'      => 'dashicons-list-view'
            ));

        }

    }

    //Init MidMo_Incs
    MidMo_Acf::init();
