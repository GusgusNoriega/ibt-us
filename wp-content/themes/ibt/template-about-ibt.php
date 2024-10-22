<?php 

 /*
 *
 *Template Name: pagina aout ibt
 *
 */

get_header();

$titulo_principal = get_field('titulo_principal_slider');
$subtitulo_principal = get_field('subtitulo_principal');
$imagen_principal_slider = get_field('imagen_principal_slider');

$titulo_2 = get_field('titulo_2');
$parrafo_2 = get_field('parrafo_2');
$imagen_2 = get_field('imagen_2');
// Separa el título en palabras
$palabras = explode(' ', $titulo_2);

// La primera palabra
$primera_palabra = $palabras[0];
// Todas las palabras después de la primera, encerradas en un <span>
$resto_del_titulo = '<span class="text-[#00355F] block sm:inline">' . implode(' ', array_slice($palabras, 1)) . '</span>';
// Combina la primera palabra con el resto del título
$titulo_formateado = $primera_palabra . ' ' . $resto_del_titulo;


$titulo_3 = get_field('titulo_3');
$parrafo_3 = get_field('parrafo_3');
$imagen_3 = get_field('imagen_3');

$titulo_7 = get_field('titulo_7');

$titulo_4 = get_field('titulo_4');
$parrafo_4 = get_field('parrafo_4');
$imagen_4 = get_field('imagen_4');

$titulo_5 = get_field('titulo_5');
$parrafo_5 = get_field('parrafo_5');
$imagen_5 = get_field('imagen_5');

$titulo_6 = get_field('titulo_6');
$parrafo_6 = get_field('parrafo_6');
$imagen_6 = get_field('imagen_6');

?>
<section class="w-full relative h-[340px] sm:h-[390px] lg:h-[425px] hero-swiper">
    <div class="swiper heroSwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="w-full h-[340px] sm:h-[390px] lg:h-[425px] relative">

                    <?php 
                            if( $imagen_principal_slider ) : 
                            ?>
                    <img src="<?php echo esc_url($imagen_principal_slider['url']); ?>"
                        alt="<?php echo esc_attr($imagen_principal_slider['alt']); ?>"
                        class="object-cover w-full h-full absolute z-0">
                    <?php 
                            endif;
                            ?>
                    <div class="absolute inset-0 bg-black bg-opacity-60"></div>
                    <div class="w-full absolute z-10 text-center top-1/2 transform -translate-y-1/2 mx-auto">
                        <h1 class="font-beVietnam text-[30px] md:text-[40px] lg:text-[60px] text-[#fff] tracking-[-2px] font-[700] max-w-[270px] sm:max-w-none mx-auto"
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

            <?php if( have_rows('imagenes_slider') ): ?>
            <?php while( have_rows('imagenes_slider') ): the_row(); 
                            $imagen = get_sub_field('imagen'); 
                            if( $imagen ): ?>
            <div class="swiper-slide">
                <div class="w-full h-[340px] sm:h-[390px] lg:h-[425px]">
                    <img src="<?php echo esc_url($imagen['url']); ?>" alt="<?php echo esc_attr($imagen['alt']); ?>"
                        class="object-cover w-full h-full absolute z-0" />
                    <div class="absolute inset-0 bg-black bg-opacity-10"></div>
                </div>
            </div>
            <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>
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
          <div class="w-full bg-[#F0F4F8] pt-[35px] pb-[45px] px-[20px] md:py-[30px] md:px-[20px] lg:py-[70px] lg:px-[60px] flex flex-col md:flex-row rounded-[20px] gap-8 md:gap-4 lg:gap-8 items-center">
            <div class="w-full md:w-auto flex-1 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
              <h3 class="font-beVietnam font-[600] text-[28px] md:text-[36px] lg:text-[40px] text-[#00B574] tracking-[-2px] leading-[34px]">
                <?php echo $titulo_formateado;?>
              </h3>

              <?php echo $parrafo_2; ?>
            </div>
            <div class="w-full md:w-auto flex-1 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
               <?php
                if( $imagen_2 ){
                        echo '<img src="' . esc_url($imagen_2['url']) . '" alt="' . esc_url($imagen_2['alt']) . '" class="rounded-[20px] w-full h-full" />';
                  }
                ?>
            </div>
          </div>
        </div>
</section>
<section class="mt-[50px] sm:mt-[80px]">
        <div class="container-w">
          <h3 class="font-beVietnam font-[600] text-[28px] md:text-[36px] lg:text-[40px] text-[#00355F] tracking-[-2px] text-center md:max-w-[540px] lg:max-w-none mx-auto aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
            <?php echo $titulo_3;?>
          </h3>
          <div class="w-full px-[20px] md:py-[30px] lg:px-[60px] lg:py-[50px] flex flex-col md:flex-row gap-4 md:gap-8 items-center aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
            <div class="w-full md:w-auto flex-1 order-2 md:order-1">
              
               <?php
                if( $imagen_3 ){
                        echo '<img src="' . esc_url($imagen_3['url']) . '" alt="' . esc_url($imagen_3['alt']) . '" class="rounded-[20px] w-full h-full" />';
                  }
                ?>
            </div>
            <div class="order-1 md:order-2">
              <p class="text-[#4F4F4F] max-w-[370px] mt-[30px]">
                <?php echo $parrafo_3;?>
              </p>
            </div>
          </div>
        </div>
</section>
<section class="mt-[50px] sm:mt-[80px]">
        <div class="container-w">
          <h3 class="font-beVietnam font-[600] text-[28px] md:text-[36px] lg:text-[40px] text-[#00355F] tracking-[-2px] text-center max-w-[540px] md:max-w-none mx-auto aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
            <?php echo $titulo_7;?>
          </h3>
          <div class="pt-[50px] grid md:grid-cols-3 gap-[30px] lg:gap-[100px] items-start aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
            <div class="flex flex-col justify-center items-center text-center max-w-[325px] md:max-w-none mx-auto">
               <?php
                if( $imagen_4 ){
                        echo '<img src="' . esc_url($imagen_4['url']) . '" alt="' . esc_url($imagen_4['alt']) . '" class="w-[56px] h-[56px]" />';
                  }
                ?>
              <h5 class="text-darkGray font-beVietnam text-[18px] lg:text-[24px] font-medium mt-[20px]">
                <?php echo $titulo_4;?>
              </h5>
              <p class="text-[16px] mt-[20px]">
                <?php echo $parrafo_4;?>
              </p>
            </div>
            <div class="flex flex-col justify-center items-center text-center max-w-[325px] md:max-w-none mx-auto">
              <?php
                if( $imagen_5 ){
                        echo '<img src="' . esc_url($imagen_5['url']) . '" alt="' . esc_url($imagen_5['alt']) . '" class="w-[56px] h-[56px]" />';
                  }
                ?>
              <h5 class="text-darkGray font-beVietnam text-[18px] lg:text-[24px] font-medium mt-[20px]">
                <?php echo $titulo_5;?>
              </h5>
              <p class="text-[16px] mt-[20px]">
                <?php echo $parrafo_5;?>
              </p>
            </div>
            <div class="flex flex-col justify-center items-center text-center max-w-[325px] md:max-w-none mx-auto">
              <?php
                if( $imagen_6 ){
                        echo '<img src="' . esc_url($imagen_6['url']) . '" alt="' . esc_url($imagen_6['alt']) . '" class="w-[56px] h-[56px]" />';
                  }
                ?>
              <h5 class="text-darkGray font-beVietnam text-[18px] lg:text-[24px] font-medium mt-[20px]">
                 <?php echo $titulo_6;?>
              </h5>
              <p class="text-[16px] mt-[20px]">
                <?php echo $parrafo_6;?>
              </p>
            </div>
          </div>
        </div>
</section>
<?php get_footer();?>   