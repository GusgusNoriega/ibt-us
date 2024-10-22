<?php 

 /*
 *
 *Template Name: pagina privacy Policy
 *
 */

get_header();

?> 
 <div class="container-w py-[30px]">
            <h2 class="text-center text-[30px] lg:text-[40px] font-beVietnam text-[#00355F] font-[600] tracking-[-2px]">
                <?php the_title();?>
            </h2>
        <div class="mx-0 sm:mx-[55px] xl:mx-0 mt-8 text-[#4F4F4F] text-[16px] lg:text-[18px] leading-relaxed space-y-6">
         <?php echo get_the_content();?>
         </div>
        </div>
<?php get_footer();?>    