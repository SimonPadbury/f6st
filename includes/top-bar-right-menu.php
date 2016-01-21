<?php 
  wp_nav_menu(array(
    'container'       => false,
    'menu_class'      => 'menu horizontal',
    'items_wrap'      => '<ul id="%1$s" class="%2$s" data-responsive-menu="dropdown">%3$s</ul>',
    'theme_location'  => 'top-bar-right',
    'depth'           => 3,
    'fallback_cb'     => '',
    'walker'          => new Topbar_Walker_Nav_Menu()
  ));
?>