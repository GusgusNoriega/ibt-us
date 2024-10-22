<?php

function mi_tema_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    register_nav_menus(array(
        'menu-principal' => 'Menú header',
        'menu-footer1' => 'Menu footer servicies',
        'menu-footer2' => 'Menu footer Legal',
        'menu-footer3' => 'Menu footer About Us',
    ));
}
add_action('after_setup_theme', 'mi_tema_setup');

