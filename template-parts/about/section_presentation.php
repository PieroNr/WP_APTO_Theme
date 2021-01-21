<?php 

    $presentations = array();

    if( have_rows('about_section_presentation')):
        while( have_rows('about_section_presentation') ): the_row();             

            $titre = get_sub_field("about_section_presentation_title");

            $paragraphe = get_sub_field("about_section_presentation_paragraphe");

            $image = wp_get_attachment_image( get_sub_field('about_section_presentation_image')['ID'] );

            $temp = [$titre, $paragraphe, $image];
            array_push($presentations, $temp);

        endwhile;
    endif; 

    for ($i=0; $i < count($presentations); $i++) { 
        for ($j=0; $j < count($presentations[$i]); $j++) { 
            echo $presentations[$i][$j];
            echo("<br>");
        }
    };  
?>