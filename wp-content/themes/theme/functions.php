<?php
// add_theme_support('post-thumbnails');

add_theme_support( 'post-thumnails');
add_image_size('thumnail', 150, 150, true);

register_nav_menus(array(
    'menu-top'=>'Menu haut',
    'menu-bottom'=>'Menu bas'
));
?>