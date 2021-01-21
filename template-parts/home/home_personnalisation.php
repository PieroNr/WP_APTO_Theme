<?php

    if( have_rows('personnalisation')):
        while( have_rows('personnalisation') ): the_row();
                    
            $section_title= get_sub_field('personnalisation_titre');
            $section_description= get_sub_field('personnalisation_description');
            $section_image = wp_get_attachment_image( get_sub_field('personnalisation_images_image')['ID'],array(1500,400));  
            $section_bouton= get_sub_field('personnalisation_bouton');  
            
            /*echo '<h1>'.$section_title.'</h1>';
            echo '<p>'.$section_description.'</p><br>';
            echo $section_image;
            echo $section_bouton;*/
            

        endwhile;
    endif;
        
?>