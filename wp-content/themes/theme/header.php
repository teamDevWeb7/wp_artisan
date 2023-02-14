<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/style.css">
</head>
<body>

    <header>
        <nav id="header"><?php wp_nav_menu( array('theme_location'=>'menu-top', 'container'=>'', 'menu_id'=>'menu')); ?></nav>
    </header>