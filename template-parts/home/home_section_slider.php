<?php

    if( have_rows('home_section_slider')):
        while( have_rows('home_section_slider') ): the_row();
                    
            $options_slider= get_sub_field('home_section_slider_option'); 

            for($i=0;$i<count($options_slider);$i++){
                $options_slider_title=$options_slider[$i]['home_section_slider_option_title'];
                $options_slider_subtitle =$options_slider[$i]['home_section_slider_option_subtitle'];
                $options_slider_description =$options_slider[$i]['home_section_slider_option_description'];
                $options_slider_image =$options_slider[$i]['home_section_slider_option_image'];
                
            /*    echo '<pre>';
                print_r($options_slider_title); echo '<br>';
                print_r($options_slider_subtitle);  echo '<br>';
                print_r($options_slider_description);   echo '<br>';
                echo  wp_get_attachment_image( $options_slider_image['ID'],array(600,400)); echo '<br>';
                echo '</pre>';  
            */    
            }     
            

        endwhile;
    endif;
        
?>