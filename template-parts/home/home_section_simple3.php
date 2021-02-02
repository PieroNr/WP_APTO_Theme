<?php

    if( have_rows('section_simple_3')):
        while( have_rows('section_simple_3') ): the_row();
                    
            $section_title= get_sub_field('section_simple_3_titre');
            $section_image = wp_get_attachment_image( get_sub_field('section_simple_3_image')['ID']);  ?>
            
            <div class="simpleThree">
                <div class="simpleThree-content row row__center">
                    <div class="simpleThree-content-text col-6 col-xs-12">
                        <h2 class="simpleThree-content-text__desc"><?php echo $section_title; ?></h2>
                    </div>
                    <div class="simpleThree-content-image col-6 col-xs-12"><img src="<?php echo get_sub_field('section_simple_3_image')['url']; ?>" alt=""></div>
                </div>
            </div>

        <?php
        endwhile;
    endif;
        
?>