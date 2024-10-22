<?php
// Obtener el idioma actual
$current_language = pll_current_language();

// Definir el texto en función del idioma
if ($current_language == 'en') {
    $texto1 = 'mo'; 
    $texto2 = 'From'; 
    $texto3 = 'Most popular';
} elseif ($current_language == 'es') {
    $texto1 = 'mes'; 
    $texto2 = 'Desde';
    $texto3 = 'Mas popular'; 
} else {
    $texto1 = 'mo'; // Por defecto, si el idioma no es inglés o español
    $texto2 = 'From';
    $texto3 = 'Most popular'; 
} 

$capacidad = get_field('capacidad');
$precio  = get_field('precio');
$most_popular = get_field('most_popular');
$texto_del_boton = get_field('texto_del_boton');
$enlace_del_boton = get_field('enlace_del_boton');
$titulo_features = get_field('titulo_features');
?>
 <div class="border-[1px] rounded-[20px] border-[#9EA0A3] w-full max-w-[338px] max-h-fit mx-auto">
                                        <div class="bg-[#F0F4F8] relative h-[75px] sm:h-[100px] lg:h-[135px] rounded-t-[20px] flex flex-row sm:flex-col items-center justify-center gap-2 sm:gap-0">
                                            <p class="font-[400] text-[20px] lg:text-[24px] text-darkGray font-beVietnam md:mt-3 lg:mt-4">
                                                   <?php echo get_the_title(); ?>
                                            </p>
                                            <p class="font-[600] text-[20px] lg:text-[24px] text-primaryBlue font-beVietnam">
                                                <?php echo $capacidad; ?>
                                            </p>
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/wifi.svg" alt="" class="absolute top-5 sm:top-3 right-2 sm:right-3 w-[32px] lg:w-[43px] h-[32px] lg:h-[43px]" />
                                            <?php 
                                            if($most_popular) {
                                               echo '<div class="absolute top-0 bg-green font-beVietnam lg:py-[2px] py-[1px] px-[15px] lg:px-[35px] rounded-b-[10px] text-[#fff] text-[14px] lg:text-[16px]">' . $texto3 . '</div>';
                                             }
                                            ?>
                                        </div>
                                        <div class="py-[12px] lg:py-[16px] px-[30px] md:px-[18px] lg:px-[30px] flex flex-col">
                                            <p class="text-darkGray text-center mb-[12px] text-[14px] sm:text-[16px] items-center flex justify-center">
                                                <?php echo $texto2; ?>
                                                <span class="text-[30px] lg:text-[36px] font-[500] mx-[2px] sm:mx-1">$ <?php echo $precio; ?>*</span>/<?php echo $texto1; ?>
                                            </p>
                                            <a href="<?php echo $enlace_del_boton; ?>" class="btn mb-[12px] sm:mb-[15px] !flex !max-w-full"><?php echo $texto_del_boton; ?></a>
                                            <p class="mb-[10px] sm:mb-[15px] flex gap-2 items-center text-primaryBlue mx-auto sm:mx-0 cursor-pointer toggle-accordion font-normal">
                                                <?php echo $titulo_features; ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="8" viewBox="0 0 14 8"
                                                    fill="none" class="chevron transform transition-transform duration-300">
                                                    <path d="M12.4198 7.58585L13.4798 6.52485L7.70277 0.745854C7.6102 0.6527 7.50012 0.578771 7.37887 0.528323C7.25762 0.477875 7.12759 0.451904 6.99627 0.451904C6.86494 0.451904 6.73491 0.477875 6.61366 0.528323C6.49241 0.578771 6.38233 0.6527 6.28977 0.745854L0.509766 6.52485L1.56977 7.58485L6.99477 2.16085L12.4198 7.58585Z"
                                                        fill="#007AF3" />
                                                </svg>
                                            </p>
                                            <div class="accordion-content overflow-auto-accordion flex flex-col gap-3 transition-[max-height,opacity] duration-500 ease-in-out max-h-0 opacity-0">
                                                
                                                <?php if( have_rows('beneficios') ): ?>
                                                        <?php while( have_rows('beneficios') ): the_row(); 
                                                            $titulo = get_sub_field('titulo'); 
                                                            if( $titulo ): ?>
                                                            <p class="text-[14px] text-darkGray flex items-center md:items-start lg:items-center gap-2">
                                                              <img src="<?php echo get_template_directory_uri(); ?>/img/check.svg" />
                                                                  <?php echo esc_html($titulo); ?>
                                                              </p>
                                                            <?php endif; ?>
                                                        <?php endwhile; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
</div>