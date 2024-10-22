<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-43K8QRV8NS"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-43K8QRV8NS'); </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W3FPN7N9');</script>
    <!-- End Google Tag Manager -->
     <?php wp_head(); ?>
</head>

<body>
    <header id="navbar"class="fixed top-0 left-0 w-full bg-white transition-all duration-500 ease-in-out z-50 shadow-md translate-y-0">
        <div class="container-w" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
            <div id="top-menu" class="justify-start w-full py-[10px]">
                 <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-principal', // Cambia esto si tu menú tiene otro nombre
                        'walker' => new Mi_Menu_Walker(),
                        'container' => false,
                        'items_wrap' => '%3$s',
                        'depth' => 1, // Profundidad del menú (1 = sin submenús)
                    ));
                    ?>
            </div>
            <div id="top-line" class="w-full border-b-[1px] border-[#9EA0A3]"></div>
            <div class="flex items-center justify-between w-full py-[10px] ttransition-all duration-500 ease-in-out">
                <div class="flex items-center gap-[30px]">
                    <a href="/">
                    <?php
                        // Obtén la URL de la imagen guardada en el campo 'logo'
                        $logo = get_field('logo', 'option');     
                        $enlace_boton = get_field('enlace_boton', 'option');
                        
                        // Obtener el idioma actual
                        $current_language = pll_current_language();

                        // Definir el texto en función del idioma
                        if ($current_language == 'en') {
                            $texto_boton = get_field('texto_del_boton', 'option');
                        } elseif ($current_language == 'es') {
                             $texto_boton = get_field('texto_del_boton_es', 'option');
                        } else {
                            $texto_boton = get_field('texto_del_boton', 'option');
                        } 
                        if ($logo) {
                            // Imprime la imagen en pantalla
                            echo '<img src="' . esc_url($logo['url']) . '" alt="' . esc_attr($logo['alt']) . '" class="w-[100px]">';
                        }
                        ?>
                    </a>
                    <div id="hidden-menu" class="hidden lg:flex opacity-0 transition-opacity duration-500 ease-in-out">
                         <?php
                            wp_nav_menu(array(
                                'theme_location' => 'menu-principal', // Cambia esto si tu menú tiene otro nombre
                                'walker' => new Mi_Menu_Hidden_Walker(),
                                'container' => false,
                                'items_wrap' => '%3$s',
                                'depth' => 1, // Profundidad del menú (1 = sin submenús)
                            ));
                          ?>
                    </div>
                </div>
                <div class="flex items-center gap-[15px] md:gap-[30px]">
                    <!--<a href="<?php echo $enlace_boton; ?>" class="btn"> <?php echo $texto_boton; ?></a>-->
                   
                    <?php custom_language_switcher(); ?>
                    <div class="w-[30px] h-[20px] flex lg:hidden justify-center items-center">
                        <div class="relative w-full h-full">
                            <input type="checkbox" id="btn_menu" class="hidden" />
                            <label for="btn_menu"
                                class="btn_menu z-30 cursor-pointer flex flex-col w-auto h-auto top-0">
                                <span id="btn_span_1" class="btn_span"></span>
                                <span id="btn_span_2" class="btn_span"></span>
                                <span id="btn_span_3" class="btn_span"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="fixed inset-0 overflow-hidden z-30 pointer-events-none">
        <div id="menu-responsive"
            class="mt-[64px] lg:mt-[113px] fixed inset-y-0 right-0 bg-[#F0F4F8] transform translate-x-full transition-transform duration-300 ease-in-out h-[100vh] w-full pointer-events-auto">
            <div class="px-[10px] py-[20px] sm:py-[30px] container-w md:hidden flex">
                <button
                    class="border-r-[1px] border-[#9EA0A3] pr-[10px] text-primaryBlue text-[16px] hover:text-primaryBlue">
                    ENGLISH
                </button>
                <button class="pl-[10px] text-[16px] hover:text-primaryBlue">
                    SPANISH
                </button>
               
            </div>
            <div class="border-[#B7B7B7] border-b-[1px] w-full"></div>
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu-principal', // Cambia esto si tu menú tiene otro nombre
                    'walker' => new Mi_Menu_Responsive_Walker(),
                    'container' => false,
                    'items_wrap' => '%3$s',
                    'depth' => 1, // Profundidad del menú (1 = sin submenús)
                ));
                ?>
            
            <div class="px-[10px] py-[30px] sm:py-[30px] container-w">
                <p class="text-[16px]">Follow us</p>
                <div class="w-fit flex gap-3 md:gap-4 pt-[10px]">
                   
                       <?php
                            if (have_rows('redes_sociales', 'option')): 
                                    while (have_rows('redes_sociales', 'option')): the_row();
                                        $icono = get_sub_field('icono_de_red');
                                        $enlace = get_sub_field('enlace_red');
                                        
                                        if ($icono && $enlace): ?>
                                            <a href="<?php echo esc_url($enlace); ?>">
                                                <img src="<?php echo esc_url($icono['url']); ?>" alt="<?php echo esc_attr($icono['alt']); ?>" class="w-[48px] h-[48px]" />
                                            </a>
                                        <?php endif;
                                    endwhile;
                                endif;
                        ?>
                </div>
            </div>
        </div>
    </div>

    <main class="mt-[64px] lg:mt-[113px]">