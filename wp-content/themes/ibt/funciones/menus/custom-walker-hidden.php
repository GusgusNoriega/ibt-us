<?php

class Mi_Menu_Hidden_Walker extends Walker_Nav_Menu {

    // Inicio de un elemento de menú
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = 'py-[4px] px-[12px] text-[14px] text-darkGray';
        
        if ($depth === 0) {
            $classes .= ' border-r-[1px] border-[#9EA0A3]';
        }

        $classes .= ' hover:text-primaryBlue';

        $output .= sprintf(
            '<a href="%s" class="%s">%s</a>',
            esc_url($item->url),
            esc_attr($classes),
            esc_html($item->title)
        );
    }

    // Final de un elemento de menú
    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "\n";
    }
}