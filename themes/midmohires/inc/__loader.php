<?php

    //The Mid Mo Inc class. Used to load included files
    class MidMo_Incs {

        public static function init(){

            //Load all inc files
            self::load('enqueue');
            self::load('cpt');
            self::load('ctax');
            self::load('acf');
            self::load('helpers');
            self::load('supports');
            self::load('menus');
            self::load('widgets');
            self::load('connections');
            self::load('ajax');
            self::load('analytics');
            self::load('get_posts');
            self::load('get_terms');
            self::load('oembeds');

        }

        private function load($file){
            require get_template_directory() . '/inc/' . $file . '.php';
        }

    }

    //Init MidMo_Incs
    MidMo_Incs::init();
