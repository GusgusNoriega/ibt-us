 <div class="benefits relative flex flex-col md:flex-row md:p-[70px]">
    <div class="swiper-button-next w-[39px] md:w-[48px] h-auto z-[2] right-[10px] md:right-[15px] lg:right-[40px] after:content-none top-[70%] md:top-[50%]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62" fill="none"
                            data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                            <circle cx="31" cy="31" r="30.5" transform="matrix(-1 0 0 1 62 0)" stroke="black" />
                            <path
                                d="M27 24.3372L28.3385 22.9999L35.6292 30.2881C35.7467 30.4048 35.8399 30.5437 35.9036 30.6967C35.9672 30.8496 36 31.0137 36 31.1794C36 31.345 35.9672 31.5091 35.9036 31.662C35.8399 31.815 35.7467 31.9539 35.6292 32.0707L28.3385 39.3625L27.0013 38.0253L33.844 31.1812L27 24.3372Z"
                                fill="black" />
                        </svg>
    </div>
    <div class="swiper-button-prev w-[39px] md:w-[48px] h-auto z-[2] left-[10px] md:left-[15px] lg:left-[40px] after:content-none top-[70%] md:top-[50%]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62" fill="none"
                            data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                            <circle cx="31" cy="31" r="30.5" stroke="black" />
                            <path
                                d="M35 24.3372L33.6615 22.9999L26.3708 30.2881C26.2533 30.4048 26.1601 30.5437 26.0964 30.6967C26.0328 30.8496 26 31.0137 26 31.1794C26 31.345 26.0328 31.5091 26.0964 31.662C26.1601 31.815 26.2533 31.9539 26.3708 32.0707L33.6615 39.3625L34.9987 38.0253L28.156 31.1812L35 24.3372Z"
                                fill="black" />
                        </svg>
    </div>
    <!-- Bucle para las imágenes -->
    <?php if( have_rows('sliders') ): ?>
        <div class="w-full md:w-[50%] order-2 md:order-1" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
            <div class="swiper sliderLateral md:w-[330px] mx-auto w-full">
                <div class="swiper-wrapper mx-auto w-full ml-[18%] min-[641px]:ml-[30%] md:ml-[5%] lg:ml-0">
                    <?php while( have_rows('sliders') ): the_row(); 
                        $imagen = get_sub_field('imagen'); 
                    ?>
                        <div class="swiper-slide rounded-[24px] transition-opacity max-w-[230px] lg:max-w-[330px] h-auto">
                            <img src="<?php echo esc_url($imagen['url']); ?>" class="rounded-[24px] w-[230px] lg:w-[330px] h-auto" alt="<?php echo esc_attr($imagen['alt']); ?>" />
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- Bucle para los contenidos -->
    <?php if( have_rows('sliders') ): ?>
        <div class="w-full md:w-[50%] order-1 md:order-2 mt-[30px] md:mt-0" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
            <div class="h-full">
                <div class="swiper sliderLateralText h-full lg:pl-[40px] xl:pl-0 lg:pr-[40px]">
                    <div class="swiper-wrapper">
                        <?php while( have_rows('sliders') ): the_row(); 
                            $titulo = get_sub_field('titulo');
                            $descripcion = get_sub_field('descripcion');
                            $texto_del_boton = get_sub_field('texto_del_boton');
                            $enlace_del_boton = get_sub_field('enlace_del_boton');
                        ?>
                            <div class="swiper-slide flex items-center">
                                <div class="bg-[#fff] h-full max-w-[385px] flex flex-col justify-center mx-auto items-center text-center md:items-start md:text-start">
                                    <h3 class="text-[#4F4F4F] text-[20px] md:text-[30px] font-[500]">
                                        <?php echo esc_html($titulo); ?>
                                    </h3>
                                    <p class="text-[#5B5B5B] text-[16px] font-normal text-center md:text-left mt-[10px] mb-[30px] md:mb-[25px]">
                                        <?php echo esc_html($descripcion); ?>
                                    </p>
                                    <?php if($texto_del_boton && $enlace_del_boton): ?>
                                        <div class="hidden md:flex">
                                            <a href="<?php echo esc_url($enlace_del_boton); ?>" class="btn">
                                                <?php echo esc_html($texto_del_boton); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    </div>