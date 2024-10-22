<?php 
get_header();

?>
<section class="mt-[150px] sm:mt-[180px]">
    <div class="container-w" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
        <div class="filtros-wrapper relative">
            <div class="flex gap-4 md:justify-center overflow-x-auto whitespace-nowrap pb-[20px]" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
             <?php
                // Obtener las categorías del post actual
                $post_categories = wp_get_post_categories(get_the_ID());
                
                // Obtener todas las categorías
                $categories = get_categories();
                
                foreach ($categories as $category) {
                    // Verificar si la categoría pertenece al post actual
                    $active_class = in_array($category->term_id, $post_categories) ? 'text-primaryBlue bg-[#E6F2FE]' : 'text-darkGray';
                    
                    echo '<a href="' . get_category_link($category->term_id) . '" class="py-[5px] px-[20px] md:py-[10px] md:px-[35px] font-medium text-sm ' . $active_class . ' border border-primaryBlue cursor-pointer rounded-[80px] hover:text-primaryBlue hover:border-primaryBlue hover:bg-[#E6F2FE]">' . $category->name . '</a>';
                }
             ?>
            </div>
        </div>
    </div>
</section>

<section class="mt-[50px] sm:mt-[80px]">
    <div class="container-w md:px-[55px]">
        <div class="flex flex-col md:flex-row gap-[30px] lg:gap-[60px]" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
            <div class="w-full md:w-[60%] max-[530px]">
                <div class="md:flex items-center gap-4 hidden mb-[15px]">
                    <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                            <g clip-path="url(#clip0_1441_4776)">
                                <path d="M3.9375 0C4.05353 0 4.16481 0.0460936 4.24686 0.128141C4.32891 0.210188 4.375 0.321468 4.375 0.4375V1.75H9.625V0.4375C9.625 0.321468 9.67109 0.210188 9.75314 0.128141C9.83519 0.0460936 9.94647 0 10.0625 0C10.1785 0 10.2898 0.0460936 10.3719 0.128141C10.4539 0.210188 10.5 0.321468 10.5 0.4375V1.75H12.1042C12.6677 1.75 13.125 2.20733 13.125 2.77083V12.1042C13.125 12.3749 13.0174 12.6346 12.826 12.826C12.6346 13.0174 12.3749 13.125 12.1042 13.125H1.89583C1.62509 13.125 1.36544 13.0174 1.174 12.826C0.982552 12.6346 0.875 12.3749 0.875 12.1042V2.77083C0.875 2.20733 1.33233 1.75 1.89583 1.75H3.5V0.4375C3.5 0.321468 3.54609 0.210188 3.62814 0.128141C3.71019 0.0460936 3.82147 0 3.9375 0ZM12.25 5.54167H1.75V12.1042C1.75 12.1847 1.81533 12.25 1.89583 12.25H12.1042C12.1428 12.25 12.1799 12.2346 12.2073 12.2073C12.2346 12.1799 12.25 12.1428 12.25 12.1042V5.54167ZM1.89583 2.625C1.85716 2.625 1.82006 2.64036 1.79271 2.66771C1.76536 2.69506 1.75 2.73216 1.75 2.77083V4.66667H12.25V2.77083C12.25 2.73216 12.2346 2.69506 12.2073 2.66771C12.1799 2.64036 12.1428 2.625 12.1042 2.625H1.89583Z" fill="#4F4F4F"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_1441_4776">
                                    <rect width="14" height="14" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="text-sm text-darkGray"><?php echo get_the_date('d F, Y'); ?></span>
                    </div>
                    <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="18" viewBox="0 0 17 18" fill="none">
                            <path d="M8.5 1.70605C7.13408 1.70605 5.79882 2.1111 4.6631 2.86997C3.52737 3.62884 2.64218 4.70744 2.11946 5.9694C1.59674 7.23135 1.45998 8.61997 1.72645 9.95965C1.99293 11.2993 2.65069 12.5299 3.61655 13.4958C4.5824 14.4616 5.81298 15.1194 7.15266 15.3859C8.49234 15.6523 9.88096 15.5156 11.1429 14.9928C12.4049 14.4701 13.4835 13.5849 14.2423 12.4492C15.0012 11.3135 15.4063 9.97823 15.4063 8.6123C15.4043 6.78125 14.6761 5.02574 13.3813 3.73098C12.0866 2.43623 10.3311 1.70799 8.5 1.70605ZM8.5 14.4561C7.34422 14.4561 6.21439 14.1133 5.25339 13.4712C4.29239 12.8291 3.54338 11.9164 3.10108 10.8486C2.65878 9.78081 2.54306 8.60582 2.76854 7.47225C2.99402 6.33867 3.55058 5.29741 4.36785 4.48015C5.18511 3.66289 6.22637 3.10632 7.35994 2.88084C8.49352 2.65536 9.6685 2.77108 10.7363 3.21338C11.8041 3.65568 12.7168 4.40469 13.3589 5.36569C14.001 6.32669 14.3438 7.45652 14.3438 8.6123C14.342 10.1616 13.7258 11.647 12.6302 12.7425C11.5347 13.8381 10.0493 14.4543 8.5 14.4561ZM12.75 8.6123C12.75 8.7532 12.694 8.88833 12.5944 8.98796C12.4948 9.08758 12.3596 9.14355 12.2188 9.14355H8.5C8.35911 9.14355 8.22398 9.08758 8.12435 8.98796C8.02472 8.88833 7.96875 8.7532 7.96875 8.6123V4.89355C7.96875 4.75266 8.02472 4.61753 8.12435 4.5179C8.22398 4.41828 8.35911 4.3623 8.5 4.3623C8.6409 4.3623 8.77603 4.41828 8.87565 4.5179C8.97528 4.61753 9.03125 4.75266 9.03125 4.89355V8.08105H12.2188C12.3596 8.08105 12.4948 8.13703 12.5944 8.23665C12.694 8.33628 12.75 8.47141 12.75 8.6123Z" fill="#4F4F4F"/>
                        </svg>
                        <span class="text-sm text-darkGray">3 min read</span>
                    </div>
                </div>
                <h3 class="text-[#00355F] font-beVietnam text-[30px] lg:text-[40px] font-medium tracking-[-2px] leading-[115%]">
                    <?php the_title(); ?>
                </h3>
            </div>
            <div class="max-w-[350px] h-[225px]">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('medium', array('class' => 'rounded-[16px] w-full h-full'));
                }
                ?>
            </div>
        </div>
        <div class="my-[60px] space-y-16" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
            <p class="text-base font-normal">
                <?php the_content(); ?>
            </p>
        </div>
        <div class="flex gap-8 justify-center border-y-[1px] py-[20px] border-[#0000004D]" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
            <?php
            if (have_rows('redes_sociales', 'option')): 
                while (have_rows('redes_sociales', 'option')): the_row();
                    $icono = get_sub_field('icono_de_red');
                    $enlace = get_sub_field('enlace_red');
                    
                    if ($icono && $enlace): ?>
                        <a href="<?php echo esc_url($enlace); ?>">
                            <img src="<?php echo esc_url($icono['url']); ?>" alt="<?php echo esc_attr($icono['alt']); ?>" class="w-[38px] h-[38ppx] md:w-[45px] md:h-[45px]" />
                        </a>
                    <?php endif;
                endwhile;
            endif;
            ?>
        </div>
        <div class="mt-[50px] md:mt-[80px]" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
            <h4 class="font-beVietnam text-[24px] md:text-[30px] text-black font-medium">
                More tags
            </h4>
            <div class="flex flex-wrap gap-4 justify-start mt-[15px] md:mt-[20px]">
              <?php 
                $tags = get_the_tags();
                if ($tags) {
                    foreach ($tags as $tag) {
                        echo '<a href="' . get_tag_link($tag->term_id) . '" class="py-[5px] px-[20px] md:py-[10px] md:px-[35px] font-medium text-sm text-darkGray border border-primaryBlue cursor-pointer rounded-[80px]">' . $tag->name . '</a>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>
<section class="mt-[50px] sm:mt-[80px]">
            <div class="container-w md:px-[55px]" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                <div class="more-news">
                    <div class="flex justify-between items-center">
                        <h4 class="font-beVietnam text-[26px] md:text-[40px] z-[2] font-semibold text-[#00355F]">
                            Related Articles
                        </h4>
                        <div class="flex items-center gap-4 md:gap-9">
                            <div
                                class="swiper-button-prev w-[38px] h-[38px] md:w-[48px] md:h-[48px] z-[2] after:content-none static mt-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62"
                                    fill="none">
                                    <circle cx="31" cy="31" r="30.5" stroke="black" />
                                    <path
                                        d="M35 24.3372L33.6615 22.9999L26.3708 30.2881C26.2533 30.4048 26.1601 30.5437 26.0964 30.6967C26.0328 30.8496 26 31.0137 26 31.1794C26 31.345 26.0328 31.5091 26.0964 31.662C26.1601 31.815 26.2533 31.9539 26.3708 32.0707L33.6615 39.3625L34.9987 38.0253L28.156 31.1812L35 24.3372Z"
                                        fill="black" />
                                </svg>
                            </div>
                            <div
                                class="swiper-button-next w-[38px] h-[38px] md:w-[48px] md:h-[48px] z-[2] after:content-none static mt-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62"
                                    fill="none">
                                    <circle cx="31" cy="31" r="30.5" transform="matrix(-1 0 0 1 62 0)" stroke="black" />
                                    <path
                                        d="M27 24.3372L28.3385 22.9999L35.6292 30.2881C35.7467 30.4048 35.8399 30.5437 35.9036 30.6967C35.9672 30.8496 36 31.0137 36 31.1794C36 31.345 35.9672 31.5091 35.9036 31.662C35.8399 31.815 35.7467 31.9539 35.6292 32.0707L28.3385 39.3625L27.0013 38.0253L33.844 31.1812L27 24.3372Z"
                                        fill="black" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="swiper moreNews mt-[50px] relative">
                        <div class="swiper-wrapper">
                           
                             <?php
                                    // Obtener la primera categoría del post actual
                                    $post_categories = wp_get_post_categories(get_the_ID());
                                    if (!empty($post_categories)) {
                                        $first_category = $post_categories[0];

                                        // Configurar los argumentos de la consulta para obtener posts relacionados
                                        $args = array(
                                            'posts_per_page' => 10,
                                            'post_status' => 'publish',
                                            'category__in' => array($first_category), // Filtrar por la primera categoría del post actual
                                            'post__not_in' => array(get_the_ID()), // Excluir el post actual de los resultados
                                        );

                                        // Realizar la consulta
                                        $query = new WP_Query($args);

                                        if($query->have_posts()) {
                                            while($query->have_posts()) {
                                                $query->the_post();
                                                echo '<div class="swiper-slide">';
                                                get_template_part('template-parts/post', 'blog');
                                                echo '</div>';
                                            }
                                        } else {
                                            echo '<p>No related posts found.</p>';
                                        }

                                        wp_reset_postdata();
                                    } else {
                                        echo '<p>No categories found for this post.</p>';
                                    }
                             ?>
                        </div>
                    </div>
                </div>
            </div>
</section>
<?php get_footer();?> 