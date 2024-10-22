
<?php

require get_template_directory() . '/funciones/estilos-scrips.php';
require get_template_directory() . '/funciones/soporte.php';
require get_template_directory() . '/funciones/menus/walker-menu-principal.php';
require get_template_directory() . '/funciones/menus/custom-walker-responsive.php';
require get_template_directory() . '/funciones/menus/custom-walker-hidden.php';
require get_template_directory() . '/funciones/menus/walker-menu-footer-servicios.php';
require get_template_directory() . '/funciones/menus/walker-menu-footer-movil.php';

function custom_language_switcher() {
    if (function_exists('pll_the_languages')) {
        $languages = pll_the_languages(array('raw' => 1));
        if (!empty($languages)) {
            echo '<div class="hidden md:flex">';
            foreach ($languages as $lang) {
                $active_class = $lang['current_lang'] ? 'border-r-[1px] border-[#9EA0A3] px-[6px] text-primaryBlue text-[16px] hover:text-primaryBlue' : 'px-[6px] text-[16px] hover:text-primaryBlue';
                echo '<button class="' . $active_class . '" data-lang-url="' . esc_url($lang['url']) . '">';
                echo strtoupper(esc_html($lang['slug']));
                echo '</button>';
            }
            echo '</div>';
        }
    }
}

function filter_posts() {
    $category = $_POST['category'];
    $page = $_POST['page'];

    $args = array(
        'posts_per_page' => 3,
        'paged' => $page,
        'post_status' => 'publish',
    );

    if($category != '') {
        $args['cat'] = $category;
    }

    $query = new WP_Query($args);

    if($query->have_posts()) {
        while($query->have_posts()) {
            $query->the_post();
            get_template_part('template-parts/post', 'blog');
        }
    } 
    wp_reset_postdata();
    die();
}
add_action('wp_ajax_filter_posts', 'filter_posts');
add_action('wp_ajax_nopriv_filter_posts', 'filter_posts');

function load_more_posts() {
    filter_posts();
}
add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');



function check_availability_handler() {
  // Extraer y sanitizar datos recibidos del formulario.
  $street = isset($_POST['stret']) ? sanitize_text_field($_POST['stret']) : '';
  $unit = isset($_POST['unit']) ? sanitize_text_field($_POST['unit']) : '';
  $zip = isset($_POST['zip']) ? sanitize_text_field($_POST['zip']) : '';
  $city = isset($_POST['city']) ? sanitize_text_field($_POST['city']) : '';
  $state = isset($_POST['state']) ? sanitize_text_field($_POST['state']) : '';
  $lat = isset($_POST['lat']) ? sanitize_text_field($_POST['lat']) : '';
  $lng = isset($_POST['lng']) ? sanitize_text_field($_POST['lng']) : '';
  $inside_polygon = isset($_POST['insidePolygon']) ? sanitize_text_field($_POST['insidePolygon']) : '';
  $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';

  // Crear el array de argumentos para el nuevo post.
  $new_post = array(
    'post_title'   => $street . ', ' . $email, // Por ejemplo, puedes usar la ciudad y el estado como título.
    'post_status'  => 'publish', // O 'draft' si quieres que se publique como borrador.
    'post_type'    => 'busqueda' // Asegúrate de que este sea tu custom post type.
  );

  // Insertar el nuevo post.
  $post_id = wp_insert_post($new_post);

  // Comprobar si el post se creó correctamente.
  if (!is_wp_error($post_id)) {
    // Guardar cada campo como metadato (campo personalizado).
    update_post_meta($post_id, 'address_primary', $street);
    update_post_meta($post_id, 'unit', $unit);
    update_post_meta($post_id, 'zip', $zip);
    update_post_meta($post_id, 'city', $city);
    update_post_meta($post_id, 'state', $state);
    update_post_meta($post_id, 'latitude', $lat);
    update_post_meta($post_id, 'longitude', $lng);
    update_post_meta($post_id, 'cobertura', $inside_polygon);
    update_post_meta($post_id, 'email', $email);

    // Enviar respuesta de éxito.
    $response = array(
      'success' => true,
      'message' => 'Nuevo post creado correctamente.',
      'post_id' => $post_id
    );
  } else {
    // Enviar respuesta de error.
    $response = array(
      'success' => false,
      'message' => 'Hubo un error al crear el post.',
      'error' => $post_id->get_error_message()
    );
  }

  // Enviar respuesta como JSON.
  wp_send_json($response);

  wp_die(); // Detener cualquier procesamiento adicional.
}

add_action('wp_ajax_check_availability', 'check_availability_handler');
add_action('wp_ajax_nopriv_check_availability', 'check_availability_handler');

add_action('wp_ajax_actualizar_publicidad', 'actualizar_publicidad_post');
add_action('wp_ajax_nopriv_actualizar_publicidad', 'actualizar_publicidad_post'); // Si deseas permitirlo a usuarios no autenticados

function actualizar_publicidad_post() {
    // Obtener los datos enviados por el formulario
    $post_id = isset($_POST['id-post-busqueda']) ? intval($_POST['id-post-busqueda']) : 0;
    $publicidad_value = isset($_POST['publicidad']) ? sanitize_text_field($_POST['publicidad']) : '';

    // Verificar que los datos sean válidos
    if ($post_id && !empty($publicidad_value)) {
        // Actualizar el meta campo "publicidad" en el post con el ID correspondiente
        if (update_post_meta($post_id, 'publicidad', $publicidad_value)) {
            wp_send_json_success(['message' => 'Campo publicidad actualizado correctamente.', 'post_id' => $post_id]);
        } else {
            wp_send_json_error(['message' => 'Error al actualizar el campo publicidad.']);
        }
    } else {
        wp_send_json_error(['message' => 'Datos no válidos.']);
    }

    wp_die(); // Terminar el script correctamente
}