<?php

    if( have_rows('home_section_simple')):
        while( have_rows('home_section_simple') ): the_row();
                    
            $section_title= get_sub_field('home_section_simple_title');
            $section_description = get_sub_field('home_section_simple_description');
            $section_background_img = wp_get_attachment_image( get_sub_field('home_section_simple_image')['ID']);    ?> 
            
            <div class="simple">
                <div class="simple-content">

                    <div class="simple-content-titleDesc">
                        <h2 class="simple-content-titleDesc__title"><?php echo $section_title; ?></h2>
                        <p class="simple-content-titleDesc__description"><?php echo $section_description; ?></p>
                    </div>

                    <div class="simple-content-titleDesc-image">
                        <?php echo $section_background_img; ?>
                    </div>

                </div>
            </div>
            
        <?php
        endwhile;
    endif;
        
?>