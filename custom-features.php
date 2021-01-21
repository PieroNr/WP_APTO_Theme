<?php 
    /*Template Name: features */
    /** @link https://developer.wordpress.org/themes/template-files-section/page-template-files/#creating-custom-page-templates-for-global-use  */
?>

<?php 
    /** @link https://developer.wordpress.org/reference/functions/get_header/ */
    get_header();

    /** @link https://developer.wordpress.org/themes/basics/the-loop/  */
    if( have_posts() ): while( have_posts() ) : the_post();


        get_template_part( 'template-parts/characteristique/content-banier' );
        get_template_part( 'template-parts/characteristique/content-principal' );
        get_template_part( 'template-parts/characteristique/content-secondaire' );
        get_template_part( 'template-parts/characteristique/content-emballage' );
    endwhile; else:
        
    endif;

    /** @link https://developer.wordpress.org/reference/functions/get_footer/ */
    get_footer();
?>
