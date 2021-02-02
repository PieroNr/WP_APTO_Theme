<?php

    if( have_rows('section_simple_2')):
        while( have_rows('section_simple_2') ): the_row();
                    
            $section_texte= get_sub_field('section_simple_2_texte'); ?>
            <div class="simpleTwo">
                 <div class="simpleTwo-content">
                     <div class="simpleTwo-content-options" style="position: relative;">

                     

                        <?php
                        for($i=0;$i<count($section_texte);$i++){
                            $section_texte_title=$section_texte[$i]['section_simple_2_texte_titre'];
                            $section_texte_desc=$section_texte[$i]['section_simple_2_texte_description']; ?>
                            <?php if($i%2 == 0){ ?>
                                 <div class="row row__left" style="left:0;">
                            <?php } 
                            else{ ?>
                                <div class="row row__right" style="position:relative;">
                        <?php    } ?>
                        <div class="simpleTwo-content-options-one" <?php if($i%2 == 1){ ?>style="float:right; width:100%" <?php } ?>>
                                <h2 class="simpleTwo-content-options-one__title"><?php echo $section_texte_title; ?></h2> 
                                <p class="simpleTwo-content-options-one__desc"><?php echo $section_texte_desc; ?></p>
                            </div>

                                 </div>
                                 
                            
                            
                        <?php  
                        }

                        $section_background_img = wp_get_attachment_image( get_sub_field('section_simple_2_image')['ID']);  ?>  
                        <div class="simpleTwo-content-options-one-image" style="background-image: url(<?php echo get_sub_field('section_simple_2_image')['url']; ?>); background-size: cover; background-repeat: no-repeat; background-position-x: center;"></div>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
    endif;
        
?>