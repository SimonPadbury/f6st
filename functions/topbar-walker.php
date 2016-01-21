<?php

class Topbar_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = Array() ) {
        $output .= "\n<ul class=\"submenu menu vertical\">\n";
    }
}