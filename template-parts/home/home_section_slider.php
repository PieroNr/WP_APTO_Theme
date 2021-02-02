<?php

    if( have_rows('home_section_slider')):
        while( have_rows('home_section_slider') ): the_row();
                    
            $options_slider= get_sub_field('home_section_slider_option'); ?>

            <div class="slideOne">
                <div class="slideOne-content">
                    <?php for($i=0;$i<count($options_slider);$i++){
                            $options_slider_title=$options_slider[$i]['home_section_slider_option_title'];
                            $options_slider_subtitle =$options_slider[$i]['home_section_slider_option_subtitle'];
                            $options_slider_description =$options_slider[$i]['home_section_slider_option_description'];
                            $options_slider_image =$options_slider[$i]['home_section_slider_option_image']; ?>

                            <div class="slideOne-content-slide">
                                <div class="slideOne-content-slide-titleDesc">
                                    <h1 class="slideOne-content-slide-titleDesc__title"><?php echo $options_slider_title; ?></h1>
                                    <h3 class="slideOne-content-slide-titleDesc__subtitle"><?php echo $options_slider_subtitle; ?></h3>
                                    <p class="slideOne-content-slide-titleDesc__desc"><?php echo $options_slider_description; ?></p>
                                </div>
                                <div class="slideOne-content-slide-image">
                                    <?php echo wp_get_attachment_image( $options_slider_image['ID'],'full'); ?>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                </div>
            </div>

             
            
        <?php
        endwhile;
    endif;
        
?>