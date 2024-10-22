<?php
class Footer_Servicios_Walker extends Walker_Nav_Menu {

    private $is_first_item = true; // Indicador para saber si es el primer elemento

    // Inicio del nivel de menú
    function start_lvl(&$output, $depth = 0, $args = null) {
        // No hacemos nada en este caso
    }

    // Final del nivel de menú
    function end_lvl(&$output, $depth = 0, $args = null) {
        // No hacemos nada en este caso
    }

    // Inicio de un elemento de menú
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        // Si es el primer elemento, tratamos como un título
        if ($this->is_first_item) {
            $output .= '<div class="flex flex-col gap-4">';
            $output .= '<h4 class="font-[700]">' . esc_html($item->title) . '</h4>';
            $this->is_first_item = false; // Cambiamos el indicador para los siguientes elementos
        } else {
            // Para los demás elementos, los tratamos como enlaces
            $output .= '<a href="' . esc_url($item->url) . '" class="font-[300]">' . esc_html($item->title) . '</a>';
        }
    }

    // Final de un elemento de menú
    function end_el(&$output, $item, $depth = 0, $args = null) {
        // Si es el último elemento, cerramos el div
        if ($item->menu_order == $args->menu->count) {
            $output .= '</div>';
        }
    }
}