<?php 

 /*
 *
 *Template Name: building manager
 *
 */

get_header();

$titulo_principal = get_field('titulo_principal_slider');
$subtitulo_principal = get_field('subtitulo_principal');
$imagen_principal_slider = get_field('imagen_principal_slider');

$titulo_5 = get_field('titulo_5');
$parrafo_5 = get_field('parrafo_5');

$imagen_5 = get_field('imagen_5');
$titulo_6 = get_field('titulo_6');
$parrafo_6 = get_field('parrafo_6');

$imagen_6 = get_field('imagen_6');
$titulo_7 = get_field('titulo_7');
$parrafo_7 = get_field('parrafo_7');
$texto_del_boton_5 = get_field('texto_del_boton_5');
$enlace_del_boton_5 = get_field('enlace_del_boton_5');


$titulo_4 = get_field('titulo_4');
$icono_1 = get_field('icono_1');
$parrafo_1 = get_field('parrafo_1');
$icono_2 = get_field('imagen_2');
$parrafo_2 = get_field('parrafo_2');

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
<section class="mt-[50px] sm:mt-[80px]">
    <div class="container-w">
        <h3 class="text-[28px] md:text-[36px] lg:text-[40px] font-beVietnam text-[#00355F] font-[600] tracking-[-2px] text-center"
            data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
           <?php echo $titulo_5;?>
        </h3>
        <p class="text-center mt-[15px] mb-[50px] font-normal text-darkGray" data-aos="fade-up" data-aos-duration="1000"
            data-aos-once="true">
           <?php echo $parrafo_5;?>
        </p>
        <div class="flex flex-col md:flex-row justify-center gap-[50px] md:gap-[40px] lg:gap-[100px]" data-aos="fade-up"
            data-aos-duration="1000" data-aos-once="true">
            <div class="max-w-[330px] md:max-w-none mx-auto flex flex-col">
                <div class="rounded-t-[20px] w-auto md:w-[325px] lg:w-[335px] h-auto rounded-[20px] order-2 md:order-1 mx-auto">
                            <?php 
                                if( $imagen_5 ) : 
                            ?>
                                <img src="<?php echo esc_url($imagen_5['url']); ?>" alt="<?php echo esc_attr($imagen_5['alt']); ?>" class="w-full h-full rounded-[20px]">
                            <?php 
                                endif;
                            ?>
                </div>
                <div class="order-1 md:order-2 text-center">
                    <p class="font-beVietnam text-[24px] font-semibold text-darkGray md:mt-[20px]">
                       <?php echo $titulo_6;?>
                    </p>
                    <p class="text-darkGray text-base font-normal mb-[25px] md:mb-0">
                       <?php echo $parrafo_6;?>
                    </p>
                </div>
            </div>
            <div class="max-w-[330px] md:max-w-none mx-auto flex flex-col">
                <div class="rounded-t-[20px] w-auto md:w-[325px] lg:w-[335px] h-auto rounded-[20px] order-2 md:order-1 mx-auto">
                    
                     <?php 
                                if( $imagen_6 ) : 
                            ?>
                                <img src="<?php echo esc_url($imagen_6['url']); ?>" alt="<?php echo esc_attr($imagen_6['alt']); ?>" class="w-full h-full rounded-[20px]">
                            <?php 
                                endif;
                        ?>
                </div>
                <div class="order-1 md:order-2 text-center">
                    <p class="font-beVietnam text-[24px] font-semibold text-darkGray md:mt-[20px]">
                        <?php echo $titulo_7;?>
                    </p>
                    <p class="text-darkGray text-base font-normal mb-[25px] md:mb-0">
                        <?php echo $parrafo_7;?>
                    </p>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-[30px]" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
            <a href="<?php echo $enlace_del_boton_5;?>" class="btn"><?php echo $texto_del_boton_5;?></a>
        </div>
    </div>
</section>

<section class="mt-[50px] sm:mt-[80px]">
    <div class="container-w">
        <h3 class="text-[28px] md:text-[36px] lg:text-[40px] font-beVietnam text-[#00355F] font-[600] tracking-[-2px] text-center"
            data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
            <?php echo $titulo_4;?>
        </h3>
        <div class="flex flex-col md:flex-row gap-[60px] justify-center mt-[50px] aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                <div class="flex flex-col lg:flex-row items-center gap-4">
                   <?php 
                    if( $icono_1 ) : 
                    ?>
                        <img src="<?php echo esc_url($icono_1['url']); ?>" alt="<?php echo esc_attr($icono_1['alt']); ?>" class="w-[56px] h-[56px]">
                    <?php 
                        endif;
                    ?>
                <p class="text-darkGray text-[16px] font-normal max-w-[286px] lg:max-w-[430px] text-center lg:text-start">
                     <?php echo $parrafo_1;?>
                </p>
                </div>
                <div class="flex flex-col lg:flex-row items-center gap-4">
                            <?php 
                            if( $icono_2 ) : 
                            ?>
                                <img src="<?php echo esc_url($icono_2['url']); ?>" alt="<?php echo esc_attr($icono_2['alt']); ?>" class="w-[56px] h-[56px]">
                            <?php 
                            endif;
                            ?>
                <p class="text-darkGray text-[16px] font-normal max-w-[286px] lg:max-w-[430px] text-center lg:text-start">
                    <?php echo $parrafo_2;?>
                </p>
                </div>
          </div>
        
        
    </div>
</section>


<?php get_footer();?>