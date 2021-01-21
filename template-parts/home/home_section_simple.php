<?php

    if( have_rows('home_section_simple')):
        while( have_rows('home_section_simple') ): the_row();
                    
            $section_title= get_sub_field('home_section_simple_title');
            $section_description = get_sub_field('home_section_simple_description');
            $section_background_img = wp_get_attachment_image( get_sub_field('home_section_simple_image')['ID'],'full');            
            

        endwhile;
    endif;
        
?>