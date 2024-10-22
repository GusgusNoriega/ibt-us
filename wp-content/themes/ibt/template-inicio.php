<?php 

 /*
 *
 *Template Name: pagina Inicio
 *
 */

get_header();

$titulo_principal = get_field('titulo_principal_slider');
$subtitulo_principal = get_field('subtitulo_principal');
$imagen_principal_slider = get_field('imagen_principal_slider');

$titulo_principal_2 = get_field('titulo_principal_slider_2');

$titulo2 = get_field('titulo_planes');
$subtitulo_titulo2 = get_field('sub_titulo_planes');
$tipos_de_planes = get_field('tipos_de_planes');
$taxes_apply = get_field('taxes_apply');

$imagen_1banner = get_field('imagen_1banner');
$imagen_2banner = get_field('imagen_2banner');
$titulo_banner = get_field('titulo_banner');
$sub_titulo_banner = get_field('sub_titulo_banner');
$descripcion_banner = get_field('descripcion_banner');
$titulo_del_boton_banner = get_field('titulo_del_boton_banner');

$titulo_slider_2 = get_field('titulo_slider_2');
?>   
  
<section class="w-full relative h-[390px] lg:h-[425px] hero-swiper">
    <div class="swiper heroSwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="w-full h-[390px] lg:h-[425px] relative">
                    <?php 
                            if( $imagen_principal_slider ){
                                echo '<img src="' . esc_url($imagen_principal_slider['url']) . '" alt="' . esc_url($imagen_principal_slider['alt']) . '" class="object-cover w-full h-full absolute z-0" />';
                            }
                            
                    ?>
                    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
                    <div class="w-full absolute z-10 text-center top-1/2 transform -translate-y-1/2 mx-auto">
                        <h1 class="font-beVietnam text-[30px] md:text-[40px] lg:text-[60px] text-[#fff] tracking-[-2px] font-[700] max-w-[270px] sm:max-w-none mx-auto leading-[32px] mb-[20px]"
                            data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                             <?php echo $titulo_principal;?>
                        </h1>
                        <p class="text-[#fff] font-[400] text-[16px] md:text-[20px] max-w-[300px] sm:max-w-none mx-auto"
                            data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                            <?php echo $subtitulo_principal;?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="w-full h-[390px] lg:h-[425px] bg-[#DFEBF6]">
                    <div
                        class="w-full absolute z-10 text-center top-1/2 transform -translate-y-1/2 mx-auto pointer-events-auto mt-[-20px]">
                        <h3 class="font-beVietnam text-[30px] md:text-[40px] lg:text-[60px] text-[#00355F] tracking-[-2px] font-[700] max-w-[270px] sm:max-w-none mx-auto mb-[20px] md:mb-[50px]"
                            data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                            <?php echo $titulo_principal_2;?>
                        </h3>
                        <div class="flex flex-col md:flex-row mx-auto w-full justify-center gap-[35px] md:gap-[30px] lg:gap-[100px] relative container-w" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                         
                            <?php if( have_rows('imagenes_slider') ): ?>
                            
                                <?php 
                                $gradient_class_counter = 1; // Para alternar las clases de gradiente
                                while ( have_rows('imagenes_slider') ) : the_row(); 
                                    $imagen = get_sub_field('imagen');
                                    $texto = get_sub_field('texto');
                                ?>
                                    <div class="max-w-[250px] md:max-w-[180px] lg:max-w-[215px] flex flex-row md:flex-col items-center gap-4 z-10 mx-auto">
                                        <?php if( $imagen ): ?>
                                            <img src="<?php echo esc_url($imagen['url']); ?>" alt="<?php echo esc_attr($imagen['alt']); ?>" class="w-[55px] h-[55px] lg:w-[70px] lg:h-[70px]" />
                                        <?php endif; ?>
                                        <p class="text-[14px] lg:text-[16px] font-normal relative <?php echo 'custom-gradient-movil' . ($gradient_class_counter > 1 ? '-' . $gradient_class_counter : ''); ?>">
                                            <?php echo esc_html($texto); ?>
                                        </p>
                                    </div>

                                    <?php if( $gradient_class_counter === 1 || $gradient_class_counter === 2 ): ?>
                                        <div class="hidden md:block absolute top-[25%] <?php echo $gradient_class_counter === 1 ? 'md:left-[15%] lg:left-[12%]' : 'md:right-[15%] lg:right-[12%]'; ?> w-[300px] lg:w-[400px] h-[2px] custom-gradient<?php echo $gradient_class_counter > 1 ? '-' . $gradient_class_counter : ''; ?>">
                                        </div>
                                    <?php endif; ?>

                                <?php 
                                $gradient_class_counter++; // Incrementamos para cambiar el gradiente
                                endwhile; 
                                ?>
 
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="hidden md:flex swiper-button-next absolute after:content-none w-[62px] h-[62px] right-[2%] md:right-[5%] lg:right-[8%] xl:right-[10%] 2xl:right-[20%]">
            <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62" fill="none"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                <circle cx="31" cy="31" r="30.5" transform="matrix(-1 0 0 1 62 0)" stroke="white"
                    class="shadow-xl shadow-black/60" />
                <path
                    d="M27 24.3372L28.3385 22.9999L35.6292 30.2881C35.7467 30.4048 35.8399 30.5437 35.9036 30.6967C35.9672 30.8496 36 31.0137 36 31.1794C36 31.345 35.9672 31.5091 35.9036 31.662C35.8399 31.815 35.7467 31.9539 35.6292 32.0707L28.3385 39.3625L27.0013 38.0253L33.844 31.1812L27 24.3372Z"
                    fill="white" />
            </svg>
        </div>
        <div
            class="hidden md:flex swiper-button-prev absolute after:content-none w-[62px] h-[62px] left-[2%] md:left-[5%] lg:left-[8%] xl:left-[10%] 2xl:left-[20%]">
            <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62" fill="none"
                data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                <circle cx="31" cy="31" r="30.5" stroke="white" class="shadow-xl shadow-black/60" />
                <path
                    d="M35 24.3372L33.6615 22.9999L26.3708 30.2881C26.2533 30.4048 26.1601 30.5437 26.0964 30.6967C26.0328 30.8496 26 31.0137 26 31.1794C26 31.345 26.0328 31.5091 26.0964 31.662C26.1601 31.815 26.2533 31.9539 26.3708 32.0707L33.6615 39.3625L34.9987 38.0253L28.156 31.1812L35 24.3372Z"
                    fill="white" />
            </svg>
        </div>
        <div class="flex w-full absolute bottom-[20px] left-0">
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<section class="mt-[50px] sm:mt-[80px]" id="residential_plans">
            <div class="container-w" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                <h2 class="text-center font-beVietnam text-[24px] sm:text-[30px] font-medium text-darkGray" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                    <?php echo $titulo2;?>
                </h2>
                <p class="text-center mt-[15px] mb-[50px] font-normal text-darkGray" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                    <?php echo $subtitulo_titulo2;?>
                </p>
                <div class="grid grid-cols-[repeat(auto-fill,_minmax(260px,_1fr))] md:grid-cols-3 gap-[40px] md:gap-[15px] xl:gap-[40px] mb-[25px]">
                 
                   <?php
                        // Suponiendo que el ID de la taxonomía se pasa como un parámetro de la URL
                        if ($tipos_de_planes) {

                            // Obtener el término traducido de la taxonomía en el idioma actual
                            $translated_tipos_de_planes = pll_get_term($tipos_de_planes, pll_current_language());

                            // Asegúrate de que obtuviste un término válido
                            if ($translated_tipos_de_planes) {
                                $args = array(
                                    'post_type' => 'plan',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'categoria-de-plan',
                                            'field'    => 'term_id',
                                            'terms'    => $translated_tipos_de_planes, // Usamos el término traducido
                                        ),
                                    ),
                                    // Ordenar por el campo personalizado "orden"
                                    'meta_key'  => 'orden',  // Nombre del campo personalizado
                                    'orderby'   => 'meta_value_num', // Ordenar por un valor numérico
                                    'order'     => 'ASC', // Orden ascendente, puedes usar 'DESC' si prefieres descendente
                                );

                                $query = new WP_Query($args);

                                if($query->have_posts()) {
                                    echo '';
                                    while($query->have_posts()) {
                                        $query->the_post();

                                        // Mostrar el contenido del plan utilizando la plantilla 'plan-card'
                                        get_template_part('template-parts/plan', 'card');
                                    }
                                    echo '';
                                } else {
                                    echo 'No se encontraron planes en esta categoría.';
                                }

                                // Resetear la consulta
                                wp_reset_postdata();
                            } else {
                                echo 'No se encontró el término de la taxonomía en este idioma.';
                            }
                        } 
                        ?>
                </div>
                <p class="text-center text-darkGray"><?php echo $taxes_apply;?></p>
            </div>
</section>
<section class="mt-[50px] sm:mt-[80px] overflow-hidden">
            <div class="container-w">
                <h3 class="max-w-[276px] mx-auto sm:max-w-none text-[28px] sm:text-[36px] lg:text-[40px] font-beVietnam text-[#00355F] font-[600] tracking-[-2px] text-center"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                    <?php echo $titulo_slider_2;?>
                </h3>
               
                <?php get_template_part('template-parts/slider', 'section'); ?>
                
            </div>
</section>
<section class="mt-[50px] sm:mt-[80px]">
            <div class="container-w">
                <div class="bg-[#F0F4F8] relative min-h-[455px] overflow-hidden rounded-[20px] md:flex justify-center items-center hidden" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                    <div class="absolute top-1/2 left-[-260px] lg:left-[-160px] xl:left-[-100px] w-[630px] h-[630px] bg-[#DFEBF6] rounded-full transform -translate-y-1/2 z-0">
                    </div>
                    <div class="w-[50%]">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon.svg" alt="" class="absolute top-[5%] left-[2%]" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-2.svg" alt="" class="absolute top-[45%] left-[12%] z-10" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-3.svg" alt="" class="absolute bottom-[20%] left-[23%] z-10" />
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-4.svg" alt="" class="absolute bottom-[25%] left-[15%] z-10" />
                       
                        <?php 
                            if( $imagen_1banner ){
                                echo '<img src="' . esc_url($imagen_1banner['url']) . '" alt="' . esc_url($imagen_1banner['alt']) . '" class="absolute top-[15%] left-[6%] rounded-[12px]" />';
                            }
                            if( $imagen_2banner ){
                                echo '<img src="' . esc_url($imagen_2banner['url']) . '" alt="' . esc_url($imagen_2banner['alt']) . '" class="absolute bottom-[10%] left-[25%] rounded-full" />';
                            }
                        ?>

                    </div>
                    <div class="w-[45%]">
                        <h3 class="text-[29px] lg:text-[40px] font-beVietnam text-[#00355F] font-[600] tracking-[-2px]">
                            <?php echo $titulo_banner;?>
                        </h3>
                        <h4 class="text-[30px] lg:text-[40px] font-beVietnam text-[#00B574] font-[600] tracking-[-2px]">
                            <?php echo $sub_titulo_banner;?>
                        </h4>
                        <p class="text-darkGray max-w-[455px] mt-[20px] mb-[50px]">
                            <?php echo $descripcion_banner;?>
                        </p>
                        <a href="#residential_plans" class="btn"><?php echo $titulo_del_boton_banner;?></a>
                    </div>
                </div>
                <div class="md:hidden">
                    <h3 class="text-[28px] font-beVietnam text-[#00355F] font-[600] tracking-[-2px]">
                        <?php echo $titulo_banner;?>
                    </h3>
                    <h4 class="text-[28px] font-beVietnam text-[#00B574] font-[600] tracking-[-2px]">
                        <?php echo $sub_titulo_banner;?>
                    </h4>
                    <p class="text-darkGray max-w-[455px] mt-[16px] mb-[16px]">
                        <?php echo $descripcion_banner;?>
                    </p>
                    <div class="bg-[#F0F4F8] relative h-[166px] sm:h-[300px] overflow-hidden rounded-[20px] lg:flex justify-center items-center"
                        data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                        <div
                            class="absolute top-1/2 left-[-20px] sm:left-[-80px] w-[248px] sm:w-[450px] h-[248px] sm:h-[450px] bg-[#DFEBF6] rounded-full transform -translate-y-1/2 z-0">
                        </div>
                        <div class="">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon.svg" alt=""
                                class="absolute top-[5%] left-[2%] w-[70px] h-[70px] sm:w-[100px] sm:h-[100px]" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/conectar.svg" alt=""
                                class="absolute bottom-[8%] right-[22%] z-10 w-[36%] max-[375px]:w-[30%]" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/img.webp" alt=""
                                class="absolute top-[20%] left-[10%] rounded-[12px] w-[140px] sm:w-[240px] h-auto" />
                            <img src="<?php echo get_template_directory_uri(); ?>/img/img-2.webp" alt=""
                                class="absolute top-[20%] sm:top-[30%] right-[10%] rounded-full h-[96px] w-auto sm:h-[150px]" />
                        </div>
                    </div>
                </div>
            </div>
</section>

 <?php get_footer();?>    