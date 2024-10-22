<?php

function mi_tema_enqueue_styles() {    
    wp_enqueue_style('output', get_template_directory_uri() . '/css/output.css');
}
add_action('wp_enqueue_scripts', 'mi_tema_enqueue_styles');

function mi_tema_enqueue_scripts() {
    // Scripts externos y locales
    wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array(), null, true);
    wp_enqueue_script('aos-script', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), null, true);
    if (is_page_template('template-blog.php')) {
        wp_enqueue_script('cargar-post', get_template_directory_uri() . '/js/cargar-post.js', array('jquery'), null, true);
    }
    
}
add_action('wp_enqueue_scripts', 'mi_tema_enqueue_scripts');