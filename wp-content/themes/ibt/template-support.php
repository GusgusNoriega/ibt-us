 
 <?php 

 /*
 *
 *Template Name: pagina support
 *
 */

get_header();

$sub_title = get_field('subtitulo');
$imagen_1 = get_field('iimagen_support');

?> 
 <section class="py-[50px]">
            <div class="container-w">
                <h3 class="text-[30px] md:text-[36px] lg:text-[60px] font-beVietnam text-[#00355F] font-[600] tracking-[-2px] text-center"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                     <?php the_title();?>
                </h3>
                <p class="text-darkGray font-[400] text-[16px] text-center mt-[20px] mb-[40px]" data-aos="fade-up"
                    data-aos-duration="1000" data-aos-once="true">
                    <?php echo $sub_title;?>
                </p>
                <div>
                    <div class="bg-[#F0F4F8] lg:w-[780px] h-auto mx-auto rounded-[30px] flex flex-col md:flex-row px-[15px] py-[45px] md:px-[45px] md:py-[50px]">
                        <div class="w-full md:w-1/2 flex flex-col gap-6 order-2 md:order-1" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                            <?php if( have_rows('emails') ): ?>
                                    <?php while( have_rows('emails') ): the_row(); 
                                        $titulo = get_sub_field('titulo');
                                        $email = get_sub_field('email');
                                        $texto_del_boton = get_sub_field('texto_del_boton');
                                        $enlace_del_boton = get_sub_field('enlace_del_boton');
                                    ?>
                                    <div class="lg:ml-[-80px] max-w-[400px] flex flex-col gap-2 bg-white p-[16px] rounded-[12px] shadow-[0_0_109px_rgba(22,_118,_208,_0.1),_0_0_90px_rgba(22,_118,_208,_0.1)]">
                                        <div class="flex gap-2 items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                                                <path d="M20.8438 6.46875V16.5312C20.8438 16.9125 20.6923 17.2781 20.4227 17.5477C20.1531 17.8173 19.7875 17.9688 19.4062 17.9688H3.59375C3.2125 17.9688 2.84687 17.8173 2.57728 17.5477C2.3077 17.2781 2.15625 16.9125 2.15625 16.5312V6.46875M20.8438 6.46875C20.8438 6.0875 20.6923 5.72187 20.4227 5.45228C20.1531 5.1827 19.7875 5.03125 19.4062 5.03125H3.59375C3.2125 5.03125 2.84687 5.1827 2.57728 5.45228C2.3077 5.72187 2.15625 6.0875 2.15625 6.46875M20.8438 6.46875L12.3179 12.3711C12.0776 12.5374 11.7923 12.6265 11.5 12.6265C11.2077 12.6265 10.9224 12.5374 10.6821 12.3711L2.15625 6.46875" stroke="#00355F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                            <p class="text-[#00355F] text-xl font-bold font-beVietnam">
                                                <?php echo esc_html($titulo); ?>
                                            </p>
                                        </div>
                                        <p class="text-base font-normal text-darkGray ml-[32px]">
                                            <?php echo esc_html($email); ?>
                                        </p>
                                        <div class="flex ml-[32px]">
                                            <a href="<?php echo esc_url($enlace_del_boton); ?>" class="btn"><?php echo esc_html($texto_del_boton); ?></a>
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="w-full md:w-1/2 flex justify-center md:justify-end order-1 md:order-2"
                            data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                            
                             <?php
                                if( $imagen_1 ){
                                        echo '<img src="' . esc_url($imagen_1['url']) . '" alt="' . esc_url($imagen_1['alt']) . '" class="h-[158px] md:h-[260px] lg:h-[330px] w-auto" />';
                                }
                                ?>
                        </div>
                    </div>
                </div>
            </div>
</section>

<?php get_footer(); ?> 