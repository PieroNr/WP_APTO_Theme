<?php

    if( have_rows('home_section_complex')):
        while( have_rows('home_section_complex') ): the_row();
                    
            $section_title= get_sub_field('home_section_complex_title');
             
            $section_options = get_sub_field('home_section_complex_fonction');

            for($i=0;$i<count($section_options);$i++){
                $options_title=$section_options[$i]['home_section_complex_fonction_title'];
                $options_description =$section_options[$i]['home_section_complex_fonction_description'];
                $options_picto =$section_options[$i]['home_section_complex_fonction_pictogram'];    

            } 

            $section_image= wp_get_attachment_image( get_sub_field('home_section_complex_image')['ID'],array(600,400));            
            
            
            
            
        endwhile;
    endif;
        
?>