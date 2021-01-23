<?php

    if( have_rows('personnalisation')):
        while( have_rows('personnalisation') ): the_row();
                    
            $section_title= get_sub_field('personnalisation_titre');
            $section_description= get_sub_field('personnalisation_description');
            $section_image = wp_get_attachment_image( get_sub_field('personnalisation_images_image')['ID'],array(1500,400));  
            $section_bouton= get_sub_field('personnalisation_bouton'); ?>  
            
            <div class="perso">
                <div class="perso-content">
                    <div class="perso-content-titleDesc">
                        <h2 class="perso-content-titleDesc__title"><?php echo $section_title; ?></h2>
                        <p class="perso-content-titleDesc__desc"><?php echo $section_description; ?></p>
                    </div>
                    <div class="perso-content-image"><?php echo $section_image; ?></div>
                    <a href="<?php echo $section_bouton; ?>" class="perso-content__button">Personnaliser</a>
                </div>
            </div>

            
        <?php
        endwhile;
    endif;
        
?>