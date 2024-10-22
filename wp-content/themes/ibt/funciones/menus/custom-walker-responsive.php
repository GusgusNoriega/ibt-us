<?php

class Mi_Menu_Responsive_Walker extends Walker_Nav_Menu {

    // Inicio de un elemento de menú
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        // Si el elemento de menú tiene hijos, agregamos un identificador de clase personalizado
        $has_children = !empty($args->has_children) ? 'has-children' : '';

        // Clases personalizadas
        $link_class = 'w-full flex justify-between items-center';
        $text_class = 'font-medium text-[16px] text-[#4F4F4F]';
        $img_src = 'https://ibt-usav2.nerdstudiolab.com/wp-content/themes/ibt/img/arrow.svg';
        $img_class = 'w-[12px] sm:w-[16px]';

        // Construimos el enlace del menú
        $output .= sprintf(
            '<div class="px-[10px] py-[20px] sm:py-[30px] container-w">
                <a href="%s" class="%s">
                    <p class="%s">%s</p>
                    <img src="%s" class="%s">
                </a>
            </div>
            <div class="border-[#B7B7B7] border-b-[1px] w-full"></div>',
            esc_url($item->url),
            esc_attr($link_class),
            esc_attr($text_class),
            esc_html($item->title),
            esc_url($img_src),
            esc_attr($img_class)
        );
    }

    // Final de un elemento de menú
    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "\n";
    }
}