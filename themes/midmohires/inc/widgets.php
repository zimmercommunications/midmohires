<?php

function midmohires_widgets_init(){
  register_sidebar(
    array(
      'name'         => 'Footer Widget 1',
      'before_widget' => '<div class="col-lg-3 col-12 mb-0 mb-md-4 pb-0 pb-md-2">',
      'after_widget' => '</div>',
      'before_title' => '<h5>',
      'after_title' => '</h5>'
    )
  );
  register_sidebar(
    array(
      'name'         => 'Footer Widget 2',
      'before_widget'=> '<div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">',
      'after_widget' => '</div>',
      'before_title' => '<h5 style="text-align: center;">',
      'after_title' => '</h5>'
    )
  );
  register_sidebar(
    array(
      'name'         => 'Footer Widget 3',
      'before_widget'=> '<div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">',
      'after_widget' => '</div>'
    )
  );
  register_sidebar(
    array(
      'name'         => 'Footer Widget 4',
      'before_widget'=> '<div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">',
      'after_widget' => '</div>'
    )
  );
}

add_action('widgets_init', 'midmohires_widgets_init');
