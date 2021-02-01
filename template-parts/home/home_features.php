<?php

    if( have_rows('caracteristiques')):
        while( have_rows('caracteristiques') ): the_row();

            $features_title= get_sub_field('caracteristiques_titre'); ?>
            
            <div class="perso">
                <div class="featuresHome-content">
                    <h2 class="featuresHome-content__title"><?php echo $features_title; ?></h2>

                    <div class="featuresHome-content-detail">

                        <?php
                        $features_desc= get_sub_field('caracteristiques_descriptifs'); 

                        for($i=0;$i<count($features_desc);$i++){
                            $features_desc_icon=$features_desc[$i]['caracteristiques_descriptifs_icone'];
                            $features_desc_text =$features_desc[$i]['caracteristiques_descriptifs_texte']; ?>

                            <div class="featuresHome-content-detail-one">
                                <div class="featuresHome-content-detail-one__picto"><?php echo wp_get_attachment_image($features_desc_icon['ID']); ?></div>
                                <p class="featuresHome-content-detail-one__name"><?php echo $features_desc_text; ?></p>
                            </div>

                        
                        <?php
                        }  
                        ?> 

                    </div>
                </div>
            </div>

            
        <?php
        endwhile;
    endif;
        
?>