<?php

function midmohires_widgets_init(){
  register_sidebar(
    array(
      'name'         => 'Footer Widget 1',
      'id'           => 'footerWidget1',
      'class'        => 'col-lg-3 col-12 mb-0 mb-md-4 pb-0 pb-md-2',
      'before_widget'=> '<div>',
      'after_widget' => '</div>'
    )
  );
  register_sidebar(
    array(
      'name'         => 'Footer Widget 2',
      'id'           => 'footerWidget2',
      'class'        => 'col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0',
      'before_widget'=> '<div>',
      'after_widget' => '</div>'
    )
  );
  register_sidebar(
    array(
      'name'         => 'Footer Widget 3',
      'id'           => 'footerWidget3',
      'class'        => 'col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0',
      'before_widget'=> '<div>',
      'after_widget' => '</div>'
    )
  );
  register_sidebar(
    array(
      'name'         => 'Footer Widget 4',
      'id'           => 'footerWidget4',
      'class'        => 'col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0',
      'before_widget'=> '<div>',
      'after_widget' => '</div>'
    )
  );
}

add_action('widgets_init', 'footer_widgets_init');
