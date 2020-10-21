<?php

    //The Main Mid Mo class that setups up the whole theme.
    class MidMo {

        public static function init(){

            //Load all inc files
            self::load('inc/__loader');

        }

        private function load($file){
            require get_template_directory() . '/' . $file . '.php';
        }

    }
    register_nav_menu('top_menu', 'Menu for all basic website naviagation');


    //Init MidMo_Incs
    MidMo::init();
