<?php

class Mi_Menu_Walker extends Walker_Nav_Menu {

    function start_lvl(&$output, $depth = 0, $args = null) {
        // No hacemos nada en este caso
    }

    function end_lvl(&$output, $depth = 0, $args = null) {
        // No hacemos nada en este caso
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        global $wp;

        // Obtén la URL actual y elimina la barra final si existe
        $current_url = rtrim(home_url($_SERVER['REQUEST_URI']), '/');
        $item_url = rtrim(esc_url($item->url), '/');

        // Inicializa las clases base
        $classes = 'py-[4px] px-[12px] text-[14px] text-darkGray';
        
        if ($depth === 0) {
            $classes .= ' border-r-[1px] border-[#9EA0A3]';
        }

        // Comparar la URL del ítem con la URL actual
        if ($current_url === $item_url) {
            $classes .= ' text-primaryBlue'; // Clase para el ítem activo
        } else {
            $classes .= ' hover:text-primaryBlue';
        }

        // Construir la salida final solo para este ítem
        $item_output = sprintf(
            '<a href="%s" class="%s">%s</a>',
            esc_url($item->url),
            esc_attr($classes),
            esc_html($item->title)
        );

        // Añadir el item_output a $output
        $output .= $item_output;

        // Depuración de la salida final del ítem
       
    }

    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= "\n";
    }
}