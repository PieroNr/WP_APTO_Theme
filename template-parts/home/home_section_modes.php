<?php

    if( have_rows('home_section_modes')):
        while( have_rows('home_section_modes') ): the_row();
                    
            $modes_title= get_sub_field('home_section_modes_title');
            $modes_description = get_sub_field('home_section_modes_description');
            
            $tab_modes = array();
            
            if( have_rows('home_section_modes_mode')):
                while( have_rows('home_section_modes_mode') ): the_row();
                       
                    $mode_pictogram = wp_get_attachment_image( get_sub_field('home_section_modes_mode_image')['ID']); 
                    $modes_name= get_sub_field('home_section_modes_mode_name');
                    $oneMode = [$mode_pictogram,$modes_name];
                    array_push($tab_modes,$oneMode);

                endwhile;
            endif;

            /*for ($i=0; $i < count($tab_modes); $i++) { 
                for ($j=0; $j < count($tab_modes[$i]); $j++) { 
                    echo $tab_modes[$i][$j];
                    echo("<br>");
                }
            };*/ 
        endwhile;
    endif;
        
?>