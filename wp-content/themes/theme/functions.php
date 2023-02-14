<?php
// add_theme_support('post-thumbnails');

add_theme_support( 'post-thumnails', array('default-size'=>'cover') );

register_nav_menus(array(
    'menu-top'=>'Menu haut',
    'menu-bottom'=>'Menu bas'
));
?>