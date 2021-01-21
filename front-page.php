<?php 
    /** @link https://developer.wordpress.org/reference/functions/get_header/ */
    get_header();

    /** @link https://developer.wordpress.org/themes/basics/the-loop/  */
    if( have_posts() ): 

        while( have_posts() ) : the_post();
            get_template_part( 'template-parts/home/home_banier' );
            get_template_part( 'template-parts/home/home_section_simple' );
            get_template_part( 'template-parts/home/home_section_modes' );
            get_template_part( 'template-parts/home/home_section_slider' );
            get_template_part( 'template-parts/home/home_section_complex' );
            get_template_part( 'template-parts/home/home_section_slider2' );
            get_template_part( 'template-parts/home/home_section_simple2' );
            get_template_part( 'template-parts/home/home_section_simple3' );
            get_template_part( 'template-parts/home/home_personnalisation' );
            get_template_part( 'template-parts/home/home_features' );
            get_template_part( 'template-parts/home/home_section_slider3' );
        endwhile; 
        
    else: 
    endif;

    /** @link https://developer.wordpress.org/reference/functions/get_footer/ */
    get_footer();
?>
