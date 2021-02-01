<?php

    if( have_rows('home_section_slider_2')):
        while( have_rows('home_section_slider_2') ): the_row();

            $slider_title= get_sub_field('home_section_slider_2_title'); ?>

            <div class="sliderTWo">
                 <div class="sliderTWo-content">
                    <h1 class="sliderTWo__title"><?php echo $slider_title; ?></h1>

                    <div class="sliderTWo-slides">

                        <?php
                        $options_slider= get_sub_field('home_section_slider_2_slider'); 

                        for($i=0;$i<count($options_slider);$i++){
                            $options_slider_title=$options_slider[$i]['home_section_slider_2_slider_titre'];
                            $options_slider_description =$options_slider[$i]['home_section_slider_2_slider_description'];
                            $options_slider_image =$options_slider[$i]['home_section_slider_2_slider_image'];
                            $options_slider_image_back =$options_slider[$i]['home_section_slider_2_slider_image_fond']; ?>

                            <div class="sliderTWo-slides-one">
                                <div class="sliderTWo-slides-one-titleDesc">
                                    <h2 class="sliderTWo-slides-one-titleDesc__title"><?php echo $options_slider_title; ?></h2> 
                                    <p class="sliderTWo-slides-one-titleDesc__desc"><?php echo $options_slider_description; ?></p>
                                </div>
                                
                                <div class="sliderTWo-slides-one-image"><?php echo wp_get_attachment_image($options_slider_image['ID']); ?></div>
                                <div class="sliderTWo-slides-one-background"><?php echo wp_get_attachment_image($options_slider_image_back['ID']); ?></div>

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