<?php


class Custom_Accordion_Walker extends Walker_Nav_Menu {

    // No queremos iniciar un <ul>
    function start_lvl(&$output, $depth = 0, $args = null) {
        // No hacemos nada aquí, evitamos los <ul>
    }

    // No queremos cerrar un <ul>
    function end_lvl(&$output, $depth = 0, $args = null) {
        // No hacemos nada aquí, evitamos los <ul>
    }

    // Comienza cada elemento del menú
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        // Verificar si es el primer ítem para ser la cabecera del acordeón
        if ($depth == 0 && $item->menu_order == 1) {
            // Imprimir la cabecera del acordeón (etiqueta <p> y SVG)
            $output .= '<p class="flex gap-2 items-center text-darkGray font-bold mx-auto sm:mx-0 cursor-pointer toggle-accordion justify-between text-[14px]">';
            $output .= apply_filters('the_title', $item->title, $item->ID);
            $output .= '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="8" viewBox="0 0 14 8" fill="none" class="chevron transform transition-transform duration-300">
                            <path d="M12.4198 7.58585L13.4798 6.52485L7.70277 0.745854C7.6102 0.6527 7.50012 0.578771 7.37887 0.528323C7.25762 0.477875 7.12759 0.451904 6.99627 0.451904C6.86494 0.451904 6.73491 0.477875 6.61366 0.528323C6.49241 0.578771 6.38233 0.6527 6.28977 0.745854L0.509766 6.52485L1.56977 7.58485L6.99477 2.16085L12.4198 7.58585Z" fill="#4F4F4F"></path>
                        </svg>';
            $output .= '</p>';

            // Iniciar la lista de enlaces
            $output .= '<div class="accordion-content flex flex-col gap-3 overflow-hidden transition-[max-height,opacity] duration-500 ease-in-out max-h-96 opacity-100">';
        }

        // Agregar enlaces dentro del acordeón
        if ($depth == 0 && $item->menu_order > 1) {
            $output .= '<a href="' . esc_attr($item->url) . '" class="font-[300] text-[14px] mt-[15px]">';
            $output .= apply_filters('the_title', $item->title, $item->ID);
            $output .= '</a>';
        }
    }

    // Termina cada elemento del menú
    function end_el(&$output, $item, $depth = 0, $args = null) {
        // Cerrar el acordeón al final del último ítem del menú
        $menu_items = wp_get_nav_menu_items($args->menu->term_id); // Obtener todos los ítems del menú
        $last_item = end($menu_items); // Obtener el último ítem del menú

        // Si el ítem actual es el último ítem del menú, cerramos el acordeón
        if ($depth == 0 && $item->ID == $last_item->ID) {
            $output .= '</div>'; // Cerrar el contenedor de los enlaces
        }
    }
}