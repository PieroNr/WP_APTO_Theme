<?php

    if( have_rows('section_simple_3')):
        while( have_rows('section_simple_3') ): the_row();
                    
            $section_title= get_sub_field('section_simple_3_titre');
            $section_image = wp_get_attachment_image( get_sub_field('section_simple_3_image')['ID'],array(600,400));    
            
            /*echo '<h1>'.$section_title.'</h1>';
            echo $section_image;*/
            

        endwhile;
    endif;
        
?>