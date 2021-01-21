<?php

    if( have_rows('home_section_slider_2')):
        while( have_rows('home_section_slider_2') ): the_row();

            $slider_title= get_sub_field('home_section_slider_2_title'); 
            //echo '<h1>'.$slider_title.'</h1>';    
            $options_slider= get_sub_field('home_section_slider_2_slider'); 

            for($i=0;$i<count($options_slider);$i++){
                $options_slider_title=$options_slider[$i]['home_section_slider_2_slider_titre'];
                $options_slider_description =$options_slider[$i]['home_section_slider_2_slider_description'];
                $options_slider_image =$options_slider[$i]['home_section_slider_2_slider_image'];
                $options_slider_image_back =$options_slider[$i]['home_section_slider_2_slider_image_fond'];

               /* echo '<h2>'.$options_slider_title.'</h2>';  
                echo '<p>'.$options_slider_description.'</p><br>'; 
                echo  wp_get_attachment_image( $options_slider_image['ID'],array(200,200)); 
                echo  wp_get_attachment_image( $options_slider_image_back['ID'],array(600,400)); echo '<br>';*/
            }     
            

        endwhile;
    endif;
        
?>