</main>
 <footer class="mt-[120px] bg-[#F0F4F8] overflow-hidden">
        <div class="container-w" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
            <div class="w-full flex justify-center md:justify-between py-[20px] lg:py-[30px] items-center">
                <a href="/">
                 <?php
                        // Obtén la URL de la imagen guardada en el campo 'logo'
                        $logo = get_field('logo_footer', 'option');
                        
                        if ($logo) {
                            // Imprime la imagen en pantalla
                            echo '<img src="' . esc_url($logo['url']) . '" alt="' . esc_attr($logo['alt']) . '">';
                        }
                        ?>
                </a>
                <div class="hidden w-fit md:flex gap-4">
                    <?php
                        if (have_rows('redes_sociales', 'option')): 
                            while (have_rows('redes_sociales', 'option')): the_row();
                                $icono = get_sub_field('icono_de_red');
                                $enlace = get_sub_field('enlace_red');
                                
                                if ($icono && $enlace): ?>
                                    <a href="<?php echo esc_url($enlace); ?>">
                                        <img src="<?php echo esc_url($icono['url']); ?>" alt="<?php echo esc_attr($icono['alt']); ?>" class="w-[35px] h-[35px]" />
                                    </a>
                                <?php endif;
                            endwhile;
                        endif;
                        ?>
                </div>
            </div>
            <div class="border-b-[1px] border-[#9EA0A3] mr-[-8%] ml-[-8%] md:mr-0 md:ml-0"></div>
            <div class="hidden md:flex justify-between text-darkGray text-[14px] py-[20px] px-[40px] lg:py-[40px]">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-footer1', // Asegúrate de que esta ubicación del menú esté registrada en tu tema
                        'walker' => new Footer_Servicios_Walker(), // Utiliza el walker personalizado
                    ));

                    wp_nav_menu(array(
                        'theme_location' => 'menu-footer2', // Asegúrate de que esta ubicación del menú esté registrada en tu tema
                        'walker' => new Footer_Servicios_Walker(), // Utiliza el walker personalizado
                    ));

                    wp_nav_menu(array(
                        'theme_location' => 'menu-footer3', // Asegúrate de que esta ubicación del menú esté registrada en tu tema
                        'walker' => new Footer_Servicios_Walker(), // Utiliza el walker personalizado
                    ));
                ?>
                
            </div>
            <div class="block md:hidden">
            <div class="p-[15px]">
             <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-footer1', // Reemplaza con tu ubicación de menú
                        'walker' => new Custom_Accordion_Walker(),
                        'container'      => false, // Elimina el div contenedor
                        'items_wrap'     => '%3$s', // Elimina el ul envolvente
                    ) );
                ?>
                </div>
                <div class="mr-[-8%] ml-[-8%] border-b-[1px] border-[#9EA0A3]"></div>
                <div class="p-[15px]">
                   <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-footer2', // Reemplaza con tu ubicación de menú
                            'walker' => new Custom_Accordion_Walker(),
                            'container'      => false, // Elimina el div contenedor
                            'items_wrap'     => '%3$s', // Elimina el ul envolvente
                        ) );
                    ?>
                </div>
                <div class="mr-[-8%] ml-[-8%] border-b-[1px] border-[#9EA0A3]"></div>
                <div class="p-[15px]">
                     <?php
                            wp_nav_menu( array(
                                'theme_location' => 'menu-footer3', // Reemplaza con tu ubicación de menú
                                'walker' => new Custom_Accordion_Walker(),
                                'container'      => false, // Elimina el div contenedor
                                'items_wrap'     => '%3$s', // Elimina el ul envolvente
                            ) );
                        ?>
                </div>
            </div>
            <div class="border-b-[1px] border-[#9EA0A3] mr-[-8%] ml-[-8%] md:mr-0 md:ml-0"></div>
            <div class="py-[25px] flex md:hidden items-center justify-center gap-4">
                <p class="text-[16px]">Follow us</p>
                <div class="w-fit flex gap-3 md:gap-4">
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
            <div class="border-b-[1px] border-[#9EA0A3] mr-[-8%] ml-[-8%] md:hidden block"></div>
            <div
                class="flex justify-between py-[20px] text-darkGray font-[300] text-[14px] flex-col md:flex-row items-center gap-2">
                <p class="text-[#00355F]">
                    <span class="font-bold">IBT Group,</span> LLC. - ©<?php echo date('Y'); ?> All rights reserved 14261 Commerce Way | Suite 101 | Miami Lakes, Florida 33016
                </p>
                <p class="flex gap-1 items-center text-[#00355F]">
                    Made with
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                        <path
                            d="M4 7.79604C3.87649 7.79589 3.75588 7.76016 3.65386 7.69351C2.1426 6.71154 1.48821 6.03824 1.12727 5.61729C0.358079 4.71998 -0.0101705 3.79875 0.00021353 2.80113C0.0123283 1.65791 0.970546 0.728027 2.13625 0.728027C2.9839 0.728027 3.57098 1.18506 3.91289 1.5657C3.92372 1.57763 3.9371 1.5872 3.95213 1.59376C3.96716 1.60032 3.98348 1.60372 4 1.60372C4.01652 1.60372 4.03284 1.60032 4.04787 1.59376C4.0629 1.5872 4.07628 1.57763 4.08711 1.5657C4.42902 1.18469 5.0161 0.728027 5.86375 0.728027C7.02945 0.728027 7.98767 1.65791 7.99979 2.80131C8.01017 3.79911 7.64154 4.72035 6.87273 5.61747C6.51179 6.03842 5.8574 6.71172 4.34614 7.6937C4.2441 7.76028 4.12349 7.79594 4 7.79604Z"
                            fill="#00355F" />
                    </svg><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="67" height="14" viewBox="0 0 67 14"
                            fill="none">
                            <path
                                d="M10.3483 7.07487H10.2427L7.05726 0.334383C6.96927 0.123193 6.75808 0 6.52929 0H0.58077C0.263985 0 0 0.263988 0 0.580773V13.2346C0 13.5514 0.263985 13.8154 0.58077 13.8154H4.85737C5.17415 13.8154 5.43815 13.5514 5.43815 13.2346V6.68769H5.54374L8.95798 13.4986C9.06358 13.6922 9.25716 13.8154 9.46835 13.8154H15.2057C15.5225 13.8154 15.7865 13.5514 15.7865 13.2346V0.580773C15.7865 0.263988 15.5225 0 15.2057 0H10.9291C10.6123 0 10.3483 0.263988 10.3483 0.580773V7.07487Z"
                                fill="#00355F" />
                            <path
                                d="M23.4597 7.76121H31.0977C31.2913 7.76121 31.4321 7.60282 31.4321 7.42683V6.40608C31.4321 6.21249 31.2737 6.07169 31.0977 6.07169H23.4597V4.11818H31.4497C31.7665 4.11818 32.0305 3.8542 32.0305 3.53741V0.598349C32.0305 0.281564 31.7665 0.0175781 31.4497 0.0175781H18.1447C17.8279 0.0175781 17.564 0.281564 17.564 0.598349V13.2698C17.564 13.5865 17.8279 13.8329 18.1271 13.8329H31.5201C31.8369 13.8329 32.1009 13.5689 32.1009 13.2522V10.4891C32.1009 10.1723 31.8369 9.90831 31.5201 9.90831H23.4421V7.76121H23.4597Z"
                                fill="#00355F" />
                            <path
                                d="M49.7002 5.47334C49.7002 0.66877 46.9547 0 43.3117 0H34.4945C34.1777 0 33.9137 0.263988 33.9137 0.580773V13.2346C33.9137 13.5514 34.1777 13.8154 34.4945 13.8154H39.2287C39.5454 13.8154 39.8094 13.5514 39.8094 13.2346V10.7883H40.8126C41.1294 12.3018 42.3437 13.481 43.8924 13.745C44.0684 13.7802 44.262 13.8154 44.4732 13.8154H49.137C49.4538 13.8154 49.7178 13.5514 49.7178 13.2346V10.7883C49.7178 10.4715 49.4538 10.2075 49.137 10.2075H47.2363C48.8202 9.55635 49.7002 8.20122 49.7002 5.47334ZM39.7918 4.06541H42.4493C43.1005 4.06541 43.6461 4.57578 43.6989 5.22695C43.822 6.74048 43.3469 7.25086 42.0445 7.28606H39.7918V4.06541Z"
                                fill="#00355F" />
                            <path
                                d="M67 6.82848C67 1.81272 64.5713 0 59.8723 0H52.0759C51.7591 0 51.4951 0.263988 51.4951 0.580773V13.1642C51.4951 13.5338 51.7943 13.8154 52.1463 13.8154H59.8723C64.5889 13.8154 67 12.0026 67 6.98687C67 6.95167 67 6.93408 67 6.91648C67 6.88128 67 6.86368 67 6.82848ZM58.8692 9.57395H57.2852V8.02522V4.2414H58.8692C60.6291 4.2414 61.0867 5.20935 61.1043 6.89888C61.0867 8.6236 60.6291 9.57395 58.8692 9.57395Z"
                                fill="#00355F" />
                        </svg></a>
                </p>
            </div>
        </div>
    </footer>
   <?php wp_footer(); ?>
</body>

</html>