<?php 
    /*Template Name: About */
    /** @link https://developer.wordpress.org/themes/template-files-section/page-template-files/#creating-custom-page-templates-for-global-use  */
?>

<?php 
    /** @link https://developer.wordpress.org/reference/functions/get_header/ */
    get_header();

    /** @link https://developer.wordpress.org/themes/basics/the-loop/  */
    if( have_posts() ): while( have_posts() ) : the_post();

            $id = get_the_ID(  );
            $postData = get_post(  );
            $title = $postData->post_title;

            

            echo $title;
            echo '<pre>';
            print_r(get_post( get_the_ID()));
            echo '</pre>';

        /** @link https://developer.wordpress.org/reference/functions/get_template_part/ */
        get_template_part( 'template-parts/content', get_post_type() );
    endwhile; else:
        
    endif;

    /** @link https://developer.wordpress.org/reference/functions/get_footer/ */
    get_footer();
?>
