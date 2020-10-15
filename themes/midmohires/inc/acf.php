<?php

    //The Mid Mo Inc class. Used to load included files
    class MidMo_Acf {

        public static function init(){

            //Load all inc files
            self::load('home-page-settings');
            self::load('job-custom-field');
            self::load('per-company-field');
            self::load('job-category-settings');

        }

        private function load($file){
            require get_template_directory() . '/inc/acf/' . $file . '.php';
        }

    }

    //Init MidMo_Incs
    MidMo_Acf::init();
