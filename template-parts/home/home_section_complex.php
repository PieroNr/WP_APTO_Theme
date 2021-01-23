<?php

    if( have_rows('home_section_complex')):
        while( have_rows('home_section_complex') ): the_row();
                    
            $section_title= get_sub_field('home_section_complex_title'); ?>
             
             <div class="complex">
                 <div class="complex-content">
                    <h1 class="complex-content__title"><?php echo $section_title; ?></h1>

                    <div class="complex-content-options">                 

                        <?php
                        $section_options = get_sub_field('home_section_complex_fonction');

                        for($i=0;$i<count($section_options);$i++){
                            $options_title=$section_options[$i]['home_section_complex_fonction_title'];
                            $options_description =$section_options[$i]['home_section_complex_fonction_description'];
                            $options_picto =$section_options[$i]['home_section_complex_fonction_pictogram'];  ?>  

                            <div class="complex-content-options-one">
                                <div class="complex-content-options-one-picto"><?php echo wp_get_attachment_image($options_picto['ID']); ?></div>
                                <p class="complex-content-options-one__title"><?php echo $options_title; ?></p>
                                <p class="complex-content-options-one__desc"><?php echo $options_description; ?></p>
                            </div>
                        <?php
                        } ?>

                    </div>

                <?php $section_image= wp_get_attachment_image( get_sub_field('home_section_complex_image')['ID']);  ?>        
                        
                        <div class="complex-content-image"><?php echo $section_image; ?></div>
            
                </div>
            </div>
         <?php   
        endwhile;
    endif;
        
?>