<?php

    if( have_rows('caracteristiques')):
        while( have_rows('caracteristiques') ): the_row();

            $features_title= get_sub_field('caracteristiques_titre'); ?>
            
            <div class="featuresHome row__center" style="margin-top: 35px; margin-left:25px; margin-right:25px;">
                <div class="featuresHome-content">
                    <h2 class="featuresHome-content__title"><?php echo $features_title; ?></h2>

                    <div class="featuresHome-content-detail row">

                        <?php
                        $features_desc= get_sub_field('caracteristiques_descriptifs'); 

                        for($i=0;$i<count($features_desc);$i++){
                            $features_desc_icon=$features_desc[$i]['caracteristiques_descriptifs_icone'];
                            $features_desc_text =$features_desc[$i]['caracteristiques_descriptifs_texte']; ?>

                            <div class="featuresHome-content-detail-one col-6 col-xs-12">
                                <div class="row row__center">
                                <div class=" col-5"> <img class="featuresHome-content-detail-one__picto" src="<?php echo $features_desc_icon['url'] ?>" alt=""></div>
                                <p class="featuresHome-content-detail-one__name col-7"><?php echo $features_desc_text; ?></p>
                                </div>
                                
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