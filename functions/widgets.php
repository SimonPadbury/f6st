<?php

function f6st_widgets_init() {

  /*
  Sidebar (one widget area)
   */
  register_sidebar( array(
    'name'            => __( 'Sidebar', 'f6st' ),
    'id'              => 'sidebar-widget-area',
    'description'     => __( 'The sidebar widget area.', 'f6st' ),
    'before_widget'   => '<div class="%1$s %2$s">',
    'after_widget'    => '</div>',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );

  /*
  Footer (three widget areas)
   */
  register_sidebar( array(
    'name'            => __( 'Footer', 'f6st' ),
    'id'              => 'footer-widget-area',
    'description'     => __( 'The footer widget area', 'f6st' ),
    'before_widget'   => '<div class="%1$s %2$s small-4 columns">',
    'after_widget'    => '</div>',
    'before_title'    => '<h4>',
    'after_title'     => '</h4>',
  ) );

}
add_action( 'widgets_init', 'f6st_widgets_init' );