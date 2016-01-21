<?php 
  wp_nav_menu(array(
    'container'       => false,
    'menu_class'      => 'dropdown menu',
    'items_wrap'      => '<ul id="%1$s" class="%2$s" data-dropdown-menu role="menubar" data-click-open="false">%3$s</ul>',
    'theme_location'  => 'top-bar-left',
    'depth'           => 3,
    'fallback_cb'     => '',
    'walker'          => new Topbar_Walker_Nav_Menu()
  ));
?>