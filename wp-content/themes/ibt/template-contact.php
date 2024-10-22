<?php 



 /*

 *

 *Template Name: pagina contact

 *

 */



get_header();



$icono_1 = get_field('icono_email');

$icono_2 = get_field('icono_telefono');

$icono_3 = get_field('icono_direccion');



$titulo_1 = get_field('email');

$titulo_2 = get_field('telefono');

$titulo_3 = get_field('direccion');



$titulo_4 = get_field('full_name');

$titulo_5 = get_field('email_placeholder');

$titulo_6 = get_field('phone');

$titulo_7 = get_field('message_placeholder');

$enlace1 = get_field('terms_&_conditions');

$enlace2 = get_field('privacy_policy');

$texto_del_boton = get_field('texto_del_boton');



// Obtener el idioma actual

$current_language = pll_current_language();



// Definir el texto en función del idioma

if ($current_language == 'en') {

    $texto1 = 'By clicking the Check button above, you agree to the'; 

    $texto2 = 'and'; 

    $texto3 = 'Terms &amp; Conditions';

    $texto4 = 'Privacy Policy';

} elseif ($current_language == 'es') {

    $texto1 = 'Al hacer clic en el botón Verifica que acepta las'; 

    $texto2 = 'y'; 

    $texto3 = 'Terminos y condiciones';

    $texto4 = 'Politicas de privacidad';

} else {

    $texto1 = 'By clicking the Check button above, you agree to the'; 

    $texto2 = 'and'; 

    $texto3 = 'Terms &amp; Conditions';

    $texto4 = 'Privacy Policy';

} 

?>

<section class="">

        <div class="container-w">

          <div class="py-[40px] md:py-[130px] px-[20px] md:px-[40px]">

            <h3 class="lg:hidden text-[30px] md:text-[36px] font-beVietnam text-[#00355F] font-[600] tracking-[-2px] text-center mb-[40px] md:mb-[50px]">

              <?php the_title();?>

            </h3>

            <div class="flex flex-col md:flex-row gap-[40px] lg:gap-[74px]">

              <div class="w-full md:w-1/2 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">

                <h3 class="hidden lg:block text-[60px] font-beVietnam text-[#00355F] font-[600] tracking-[-2px]">

                  <?php the_title();?>

                </h3>

                <div class="lg:mt-[50px] flex flex-col gap-4">

                  <a href="mailto:info@ibt.us" class="inline-flex max-w-max items-center gap-2 text-[14px] md:text-[16px]">

                    <?php
                      if( $icono_1 ){
                              echo '<img src="' . esc_url($icono_1['url']) . '" alt="' . esc_url($icono_1['alt']) . '" />';
                      }
                    ?>

                    <p><?php echo $titulo_1;?></p>

                  </a>

                  <div class="inline-flex max-w-max items-center gap-2 text-[14px] md:text-[16px]">

                    <?php

                    if( $icono_2 ){

                            echo '<img src="' . esc_url($icono_2['url']) . '" alt="' . esc_url($icono_2['alt']) . '" />';

                      }

                    ?>

                    <p><?php echo $titulo_2;?></p>

                  </div>

                  <div class="inline-flex max-w-max items-center gap-2 text-[14px] md:text-[16px]">

                   <?php

                    if( $icono_3 ){

                            echo '<img src="' . esc_url($icono_3['url']) . '" alt="' . esc_url($icono_3['alt']) . '" />';

                      }

                    ?>

                    <p>

                      <?php echo $titulo_3;?>

                    </p>

                  </div>

                </div>

              </div>

              <div class="w-full md:w-1/2 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">

                <form class="space-y-4 w-full">

                  <div class="w-full">

                    <input type="text" placeholder="<?php echo $titulo_4;?>" class="input-custom">

                  </div>

                  <div class="w-full">

                    <input type="email" placeholder="<?php echo $titulo_5;?>" class="input-custom">

                  </div>

                  <div class="w-full">

                    <input type="number" placeholder="<?php echo $titulo_6;?>" class="input-custom">

                  </div>

                  <div class="w-full">

                    <textarea placeholder="<?php echo $titulo_7;?>" class="input-custom"></textarea>

                  </div>

                  <div class="flex items-start">

                    <input type="checkbox" class="mt-[2px] h-5 w-5 text-primaryBlue focus:bg-primaryBlue border-gray-300 rounded">

                    <label class="ml-2 text-sm text-darkGray font-normal">

                      <?php echo $texto1;?>

                      <a href="<?php echo $enlace1;?>" class="text-darkGray font-medium underline"><?php echo $texto3;?></a>

                      <?php echo $texto2;?>

                      <a href="<?php echo $enlace2;?>" class="text-darkGray font-medium underline"><?php echo $texto4;?></a>.

                    </label>

                  </div>

                  <div class="flex justify-center pt-[30px]">

                    <button type="submit" class="btn"><?php echo $texto_del_boton;?></button>

                  </div>

                </form>

              </div>

            </div>

          </div>

        </div>

</section>



<?php get_footer(); ?>