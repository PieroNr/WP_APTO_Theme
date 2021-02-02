<?php

    if( have_rows('home_section_modes')):
        while( have_rows('home_section_modes') ): the_row();
                    
            $modes_title= get_sub_field('home_section_modes_title');
            $modes_description = get_sub_field('home_section_modes_description');
            
            $tab_modes = array();
            
            if( have_rows('home_section_modes_mode')):
                while( have_rows('home_section_modes_mode') ): the_row();
                       
                    //$mode_pictogram = wp_get_attachment_image( get_sub_field('home_section_modes_mode_image')['ID']); 
                    $mode_pictogram = get_sub_field('home_section_modes_mode_image')['url']; 
                    $modes_name= get_sub_field('nomhome_section_modes_mode_name');

                    $oneMode = [$mode_pictogram,$modes_name];
                    array_push($tab_modes,$oneMode);

                endwhile;
            endif; ?>

            <div class="modes">
                <div class="modes-content">

                    <div class="modes-content-titleDesc">
                        <h2 class="modes-content-titleDesc__title"><?php echo $modes_title; ?></h2>
                        <p class="modes-content-titleDesc__description"><?php echo $modes_description; ?></p>
                    </div>
                    <div class="conteneur-mode">

                    <div class="modes-content-detail">
                        <?php 


                            for ($i=0; $i < count($tab_modes); $i++) { ?>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                            <div class="modes-content-detail-one">
                                    <div class="" >
                                        <img class="modes-content-detail-one-picto" src="<?php echo $tab_modes[$i][0]; ?>" alt="">
                                         
                                    </div>
                                    <p class="modes-content-detail-one__name d-sm-none"><?php echo $tab_modes[$i][1]; ?></p>
                                </div> 
                            </div>
                                
                                  
                            <?php  
                            };

                         ?>
                         </div>
                    </div>

                </div>
            </div>

             
        <?php
        endwhile;
    endif;
        
?>