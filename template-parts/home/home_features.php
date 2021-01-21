<?php

    if( have_rows('caracteristiques')):
        while( have_rows('caracteristiques') ): the_row();

            $features_title= get_sub_field('caracteristiques_titre'); 
            //echo '<h1>'.$features_title.'</h1>';    
            $features_desc= get_sub_field('caracteristiques_descriptifs'); 

            for($i=0;$i<count($features_desc);$i++){
                $features_desc_icon=$features_desc[$i]['caracteristiques_descriptifs_icone'];
                $features_desc_text =$features_desc[$i]['caracteristiques_descriptifs_texte'];
                
                /*echo  wp_get_attachment_image( $features_desc_icon['ID'],array(50,50));
                echo '<p>'.$features_desc_text.'</p><br>';*/
            }     
            

        endwhile;
    endif;
        
?>