<?php

    if( have_rows('home_section_simple')):
        while( have_rows('home_section_simple') ): the_row();
                    
            $section_title= get_sub_field('home_section_simple_title');
            $section_description = get_sub_field('home_section_simple_description');
            $section_background_img_src = wp_get_attachment_image_src( get_sub_field('home_section_simple_image')['ID'],'full'); 
              
            $id = get_sub_field('id');    ?> 
            
            <div class="simple -sectionHome" >
                <div id="<?php echo $id; ?>" class="simple-content" style="">

                    <div class="simple-content-titleDesc">
                        <div class="row row__center">
                            <h2 class="simple-content-titleDesc__title"><?php echo $section_title; ?></h2>
                        </div>
                        <div class="row row__center">
                            <p class="simple-content-titleDesc__description"><?php echo $section_description; ?></p>
                        </div>
                        
                        
                    </div>
                    <div class="container">
                        <div class="row row__center">
                            <img src="<?php echo $section_background_img_src[0]; ?>" alt="" class="simple-content-image">

                        
                        </div>
                    </div>
                    
                        
                    </div>

                    

                </div>
            </div>
            
        <?php
        endwhile;
    endif;
        
?>