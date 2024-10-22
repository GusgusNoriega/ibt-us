<?php 
 /*
 *
 *Template Name: pagina faq
 *
 */
get_header();

?>
<section class="">
            <div class="py-[80px]">
                <h3 class="font-beVietnam font-[600] text-[30px] md:text-[36px] lg:text-[60px] text-[#00355F] tracking-[-2px] text-center"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                    <?php the_title();?>
                </h3>
                <div class="mt-[30px] w-full">
                  <?php if( have_rows('acordiones_1') ): ?>
                        <?php while( have_rows('acordiones_1') ): the_row(); 
                            $titulo = get_sub_field('titulo');
                            $parrafo = get_sub_field('parrafo');
                        ?>
                        <div class="div-accordion-item space-y-2 mx-auto aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                            <div class="accordion-item border-b max-w-[900px] mx-auto px-[30px] md:px-[100px] lg:px-0">
                                <button class="accordion-header flex justify-between w-full py-6 text-left font-semibold">
                                    <span class="accordion-title text-xl text-darkGray"><?php echo esc_html($titulo); ?>&nbsp;</span>
                                    <span class="accordion-icon transition-transform transform">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                            <rect x="39.3739" y="39.3739" width="38.7478" height="38.7478" rx="19.3739" transform="rotate(-180 39.3739 39.3739)" stroke="#00355F" stroke-width="1.25216"></rect>
                                            <line x1="12.5" y1="19" x2="28.5" y2="19" stroke="#00355F" stroke-linecap="round"></line>
                                            <line x1="20" y1="27.5" x2="20" y2="11.5" stroke="#00355F" stroke-linecap="round"></line>
                                        </svg>
                                    </span>
                                </button>
                                <div class="accordion-content mt-[-14px] pb-6 bg-[#F0F4F8] max-h-96 opacity-100 hidden">
                                    <p class="text-darkGray max-w-[770px]">
                                        <?php echo esc_html($parrafo); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                  <?php endif; ?>
                </div>
                <div class="mt-[50px] mb-[100px] w-full">
                    <h3 class="max-w-[900px] mx-auto text-[#00355F] font-semibold text-[24px] md:text-[30px] font-beVietnam tracking-[-2px] mb-[34px] px-[30px] md:px-[100px] lg:px-0"
                        data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                         <?php 
                         $titulo2 = get_field('titulo_2');
                         echo $titulo2; 
                         ?>
                    </h3>
                     <?php if( have_rows('acordiones_2') ): ?>
                            <?php while( have_rows('acordiones_2') ): the_row(); 
                                $titulo = get_sub_field('titulo');
                                $parrafo = get_sub_field('parrafo');
                            ?>
                            <div class="div-accordion-item space-y-2 mx-auto aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                                <div class="accordion-item border-b max-w-[900px] mx-auto px-[30px] md:px-[100px] lg:px-0">
                                    <button class="accordion-header flex justify-between w-full py-6 text-left font-semibold">
                                        <span class="accordion-title text-xl text-darkGray"><?php echo esc_html($titulo); ?>&nbsp;</span>
                                        <span class="accordion-icon transition-transform transform">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                                <rect x="39.3739" y="39.3739" width="38.7478" height="38.7478" rx="19.3739" transform="rotate(-180 39.3739 39.3739)" stroke="#00355F" stroke-width="1.25216"></rect>
                                                <line x1="12.5" y1="19" x2="28.5" y2="19" stroke="#00355F" stroke-linecap="round"></line>
                                                <line x1="20" y1="27.5" x2="20" y2="11.5" stroke="#00355F" stroke-linecap="round"></line>
                                            </svg>
                                        </span>
                                    </button>
                                    <div class="accordion-content mt-[-14px] pb-6 bg-[#F0F4F8] max-h-96 opacity-100 hidden">
                                        <p class="text-darkGray max-w-[770px]">
                                            <?php echo esc_html($parrafo); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
<?php get_footer();?>