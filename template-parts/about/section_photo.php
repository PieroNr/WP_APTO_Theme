<?php 
    $images = array();
    $paragraphesPhoto = array();

    if( have_rows('about_section_photo')):
        while( have_rows('about_section_photo') ): the_row();

            if( have_rows('about_section_photo_image')):
                while( have_rows('about_section_photo_image') ): the_row();

                    $image = wp_get_attachment_image( get_sub_field('about_section_photo_image_file')['ID'] );

                    $nom = get_sub_field("about_section_photo_image_title");

                    $temp = [$image, $nom];
                    array_push($images, $temp);
                    
                endwhile;
            endif;

            if( have_rows('about_section_photo_paragraphe')):
                while( have_rows('about_section_photo_paragraphe') ): the_row();

                    $paragraphe = get_sub_field("about_section_photo_paragraphe_texte");

                    $temp = [$paragraphe];
                    array_push($paragraphesPhoto, $temp);
                    
                endwhile;
            endif;

            $slogan = get_sub_field("about_section_photo_slogan");

            

        endwhile;
    endif; 

    for ($i=0; $i < count($images); $i++) { 
        for ($j=0; $j < count($images[$i]); $j++) { 
            echo $images[$i][$j];
        }
    };  
    echo("<br>");
    for ($i=0; $i < count($paragraphesPhoto); $i++) { 
        for ($j=0; $j < count($paragraphesPhoto[$i]); $j++) { 
            echo $paragraphesPhoto[$i][$j];
        }
    }; 
    echo("<br>");
    echo ($slogan);
    echo("<br>");
?>