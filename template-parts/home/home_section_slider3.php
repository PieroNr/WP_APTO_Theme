<?php

    if( have_rows('section_slider_3')):
        while( have_rows('section_slider_3') ): the_row();
                    
            $options_slider= get_sub_field('section_slider_3_slider'); 

            for($i=0;$i<count($options_slider);$i++){
                $options_slider_image =$options_slider[$i]['section_slider_3_slider_image'];
                
                /*echo '<pre>';
                echo  wp_get_attachment_image( $options_slider_image['ID'],array(600,400)); echo '<br>';
                echo '</pre>'; */ 
               
            }     
            

        endwhile;
    endif;
        
?>