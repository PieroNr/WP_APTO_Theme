<?php

    if( have_rows('home_section_slider_2')):
        while( have_rows('home_section_slider_2') ): the_row();

            $slider_title= get_sub_field('home_section_slider_2_title');
            $options_slider= get_sub_field('home_section_slider_2_slider'); ?>

            <div class="sliderTwo">
            <h1 class="sliderTwo__title"><?php echo $slider_title; ?></h1>
                 <div class="sliderTwo-content">
                    <div class="sliderTwo-slides">

                        <?php 
                        for($i=0;$i<count($options_slider);$i++){
                            $options_slider_title=$options_slider[$i]['home_section_slider_2_slider_titre'];
                            $options_slider_description =$options_slider[$i]['home_section_slider_2_slider_description'];
                            $options_slider_image =$options_slider[$i]['home_section_slider_2_slider_image'];
                            $options_slider_image_back =$options_slider[$i]['home_section_slider_2_slider_image_fond']; ?>

                            <div class="sliderTwo-content-slide" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo $options_slider_image_back['url']; ?>); background-size: cover; background-repeat: no-repeat; background-position-x: center;">
                            <div class="row row__center" style='height:100%;'>
                            <div class="sliderTwo-slides-one-titleDesc col-4 col-xs-12">
                                    <h2 class="sliderTwo__slide__title"><?php echo $options_slider_title; ?></h2> 
                                    <p class="sliderTwo__slide__desc"><?php echo $options_slider_description; ?></p>
                                </div>                           
                                <div class="sliderTwo-slides-one-image col-6 col-xs-12"> <img style="height:50%; width:50%;" src="<?php echo $options_slider_image['url'] ?>" alt=""></div>
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