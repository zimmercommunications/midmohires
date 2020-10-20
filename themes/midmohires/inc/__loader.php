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
        }

        private function load($file){
            require get_template_directory() . '/inc/' . $file . '.php';
        }

    }

    //Init MidMo_Incs
    MidMo_Incs::init();
