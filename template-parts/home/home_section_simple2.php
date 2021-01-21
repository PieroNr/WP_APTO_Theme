<?php

    if( have_rows('section_simple_2')):
        while( have_rows('section_simple_2') ): the_row();
                    
            $section_texte= get_sub_field('section_simple_2_texte');
            
            for($i=0;$i<count($section_texte);$i++){
                $section_texte_title=$section_texte[$i]['section_simple_2_texte_titre'];
                $section_texte_desc=$section_texte[$i]['section_simple_2_texte_description'];
                
               /* echo '<h2>'.$section_texte_title.'</h2>';
                echo '<p>'.$section_texte_desc.'</p><br>'; */
            }

            $section_background_img = wp_get_attachment_image( get_sub_field('section_simple_2_image')['ID'],array(600,400));      
            //echo $section_background_img;      
            

        endwhile;
    endif;
        
?>