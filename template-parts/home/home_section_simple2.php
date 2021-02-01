<?php

    if( have_rows('section_simple_2')):
        while( have_rows('section_simple_2') ): the_row();
                    
            $section_texte= get_sub_field('section_simple_2_texte'); ?>
            <div class="simpleTWo">
                 <div class="simpleTWo-content">
                     <div class="simpleTwo-content-options">

                     

                        <?php
                        for($i=0;$i<count($section_texte);$i++){
                            $section_texte_title=$section_texte[$i]['section_simple_2_texte_titre'];
                            $section_texte_desc=$section_texte[$i]['section_simple_2_texte_description']; ?>
                            <div class="simpleTwo-content-options-one">
                                <h2 class="simpleTwo-content-options-one__title"><?php echo $section_texte_title; ?></h2> 
                                <p class="simpleTwo-content-options-one__desc"><?php echo $section_texte_desc; ?></p>
                            </div>
                            
                        <?php  
                        }

                        $section_background_img = wp_get_attachment_image( get_sub_field('section_simple_2_image')['ID']);  ?>  
                        <div class="simpleTwo-content-options-one-image"><?php echo $section_background_img; ?></div>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
    endif;
        
?>