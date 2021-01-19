<?php 
    /*Template Name: Contact */
    /** @link https://developer.wordpress.org/themes/template-files-section/page-template-files/#creating-custom-page-templates-for-global-use  */
?>

<?php 
    /** @link https://developer.wordpress.org/reference/functions/get_header/ */
    get_header();

    /** @link https://developer.wordpress.org/themes/basics/the-loop/  */
    if( have_posts() ): while( have_posts() ) : the_post();


        /** @link https://developer.wordpress.org/reference/functions/get_template_part/ */
        get_template_part( 'template-parts/content', get_post_type() );
    endwhile; else:
        
    endif;

    /** @link https://developer.wordpress.org/reference/functions/get_footer/ */
    get_footer();
?>
