<?php 

/*
*
*Template Name: pagina blog
*
*/

get_header();

$titulo1 = get_field('titulo_del_blog');
$sub_titulo = get_field('sub_titulo');
$image1 = get_field('imagen_de_fondo');
$texto_del_boton = get_field('texto_del_boton');
$titulo2 = get_field('featured_articles');
$titulo3 = get_field('more_articles');

?>
<section class="w-full relative h-[165px] md:h-[140px] lg:h-[176px]">
    <div class="w-full h-[176px]">
        
        <?php
        if ($image1) {
          // Imprime la imagen en pantalla
          echo '<img src="' . esc_url($image1['url']) . '" alt="' . esc_attr($image1['alt']) . '" class="object-cover w-full h-full absolute z-0 object-left">';
         }
         ?>
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
        <div class="w-full absolute z-10 text-center top-1/2 transform -translate-y-1/2">
            <h1 class="font-beVietnam text-[30px] md:text-[40px] lg:text-[60px] text-[#fff] tracking-[-2px] font-[700] max-w-[270px] sm:max-w-none mx-auto" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                <?php echo $titulo1;?>
            </h1>
            <p class="text-[#fff] font-[400] text-[16px] md:text-[20px] max-w-[256px] sm:max-w-none mx-auto" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                <?php echo $sub_titulo;?>
            </p>
        </div>
    </div>
</section>
<section class="mt-[50px] sm:mt-[80px]">
    <div class="container-w">
        <div class="filtros-wrapper relative">
            <div class="flex gap-4 md:justify-center overflow-x-auto whitespace-nowrap pb-[20px]" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                <?php
                $categories = get_categories();
                foreach($categories as $category) {
                    echo '<button class="filter-button py-[5px] px-[20px] md:py-[10px] md:px-[35px] font-medium text-sm text-darkGray border border-primaryBlue cursor-pointer rounded-[80px] hover:text-primaryBlue hover:border-primaryBlue hover:bg-[#E6F2FE]" data-category-id="' . $category->term_id . '">' . $category->name . '</button>';
                }
                ?>
            </div>
        </div>
        <div data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
        <h4 class="font-beVietnam text-[30px] text-black font-semibold"><?php echo $titulo3;?></h4>
        <div id="post-container" class="grid grid-cols-[repeat(auto-fill,_minmax(318px,_1fr))] gap-[40px] mb-[25px] mt-[15px]">
        <?php
        $args = array(
            'posts_per_page' => 3,
            'post_status' => 'publish',
        );
        $query = new WP_Query($args);

        if($query->have_posts()) {
            while($query->have_posts()) {
                $query->the_post();
              
               get_template_part('template-parts/post', 'blog');
               
            }
        } else {
            echo '<p>No posts found.</p>';
        }
        wp_reset_postdata();
        ?>
    </div>
    <div class="flex justify-center aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
             <button id="load-more" class="btn load-more-button"><?php echo $texto_del_boton;?></button>
    </div>
   </div>
        <div class="mt-[100px]" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
            <h4 class="font-beVietnam text-[30px] text-black font-semibold">
                <?php echo $titulo2;?>
            </h4>
            <div class="grid grid-cols-[repeat(auto-fill,_minmax(318px,_1fr))] gap-[40px] mb-[25px] mt-[15px]">
               <?php
                    $featured_posts = new WP_Query(array(
                        'tag' => 'featured',  // Busca por la etiqueta "featured"
                        'posts_per_page' => -1,  // Puedes cambiar esto para limitar el número de posts
                        'post_status' => 'publish'  // Solo muestra posts publicados
                    ));

                    if ($featured_posts->have_posts()) :
                        while ($featured_posts->have_posts()) : $featured_posts->the_post();
                           get_template_part('template-parts/post', 'blog');
                        endwhile;
                    else :
                        echo '<p>No featured posts found.</p>';
                    endif;

                    wp_reset_postdata();  // Restablecer $post global
                ?>
            </div>
        </div>
        
    </div>
</section>

<?php
// Definir la consulta personalizada
$args = array(
    'post_type'      => 'post', // Cambia 'post' por el tipo de post que desees consultar
    'posts_per_page' => 1, 
    // Añade más argumentos personalizados según sea necesario
);

$custom_query = new WP_Query( $args );

// Verificar si hay posts que coincidan con la consulta
if ( $custom_query->have_posts() ) {
   
} else {

    echo '<section>
                <div class="container-w flex flex-col items-center justify-center gap-6 h-[40vh]">
                    <h5 class="text-[#4F4F4F] text-[24px] font-semibold">
                        New blog posts coming soon.
                    </h5>
                    <a href="/" class="btn">Back to home</a>
                </div>
          </section>';
}

// Restablecer los datos del post global después de la consulta personalizada
wp_reset_postdata();
?>
 

<?php get_footer(); ?>