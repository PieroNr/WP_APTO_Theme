<?php  

    $paragraphesExplication = array();

    if( have_rows('about_section_explication')):
        while( have_rows('about_section_explication') ): the_row();             

            $titreExplication = get_sub_field("about_section_explication_title");

            if( have_rows('about_section_explication_paragraphe')):
                while( have_rows('about_section_explication_paragraphe') ): the_row();

                    $paragraphe = get_sub_field("about_section_explication_paragraphe_texte");

                    $temp = [$paragraphe];
                    array_push($paragraphesExplication, $temp);
                    
                endwhile;
            endif;

            $imageExplication = wp_get_attachment_image( get_sub_field('about_section_explication_image')['ID'] );

        endwhile;
    endif; 

    echo("<br>");
    echo ($titreExplication);
    echo("<br>");
    for ($i=0; $i < count($paragraphesExplication); $i++) { 
        for ($j=0; $j < count($paragraphesExplication[$i]); $j++) { 
            echo $paragraphesExplication[$i][$j];
            echo("<br>");
        }
    }; 
    echo("<br>");
    echo ($imageExplication);
    echo("<br>"); 
?>