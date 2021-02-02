<?php

    if( have_rows('section_slider_3')):
        while( have_rows('section_slider_3') ): the_row();
                    
            $options_slider= get_sub_field('section_slider_3_slider'); ?>
            <div class="sliderThree d-sm-none">
                <div class="sliderThree-content">
                    <?php
                    for($i=0;$i<count($options_slider);$i++){
                        $options_slider_image =$options_slider[$i]['section_slider_3_slider_image']; ?>
                        
                        <div class="sliderThree-content-slide" style="background-image: url(<?php echo $options_slider_image['url']; ?>); background-size: cover; background-repeat: no-repeat; background-position-x: center;"></div>
                        
                    <?php  
                    } 
                    ?> 
                </div>
            </div>   
            
        <?php
        endwhile;
    endif;
        
?>