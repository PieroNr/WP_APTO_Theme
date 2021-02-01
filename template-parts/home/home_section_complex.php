<?php

    if( have_rows('home_section_complex')):
        while( have_rows('home_section_complex') ): the_row();
                    
            $section_title= get_sub_field('home_section_complex_title'); ?>
             
             <div class="complex">
                 <div class="complex-content">
                    <h1 class="complex-content__title"><?php echo $section_title; ?></h1>

                    <div class="complex-content-options row">                 

                        <?php
                        $section_options = get_sub_field('home_section_complex_fonction');

                        for($i=0;$i<count($section_options);$i++){
                            $options_title=$section_options[$i]['home_section_complex_fonction_title'];
                            $options_description =$section_options[$i]['home_section_complex_fonction_description'];
                            $options_picto =$section_options[$i]['home_section_complex_fonction_pictogram'];  ?>  

                            <div class="complex-content-options-one col-xl-6 col-l-6 col-md-12">
                                <div class="complex-content-options-one-picto"><?php echo wp_get_attachment_image($options_picto['ID'],array(125,125)); ?></div>
                                <div class="complex-content-options-one-titleDesc">
                                    <p class="complex-content-options-one-titleDesc__title"><?php echo $options_title; ?></p>
                                    <p class="complex-content-options-one-titleDesc__desc"><?php echo $options_description; ?></p>
                                </div>
                                
                            </div>
                        <?php
                        } ?>

                    </div>

                <?php $section_image= wp_get_attachment_image_src( get_sub_field('home_section_complex_image')['ID'],'full');  ?>        
                        
                        <div class="complex-content-image" style="background-image: url(<?php echo $section_image[0]; ?>);"></div>
            
                </div>
            </div>
         <?php   
        endwhile;
    endif;
        
?>