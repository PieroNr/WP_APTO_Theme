<div class="sectionPresentation">
    <div class="sectionPresentation-content">

        <?php 

            if( have_rows('about_section_presentation')):
                while( have_rows('about_section_presentation') ): the_row();             

                    $titre = get_sub_field("about_section_presentation_title");

                    $paragraphe = get_sub_field("about_section_presentation_paragraphe");

                    $image = wp_get_attachment_image( get_sub_field('about_section_presentation_image')['ID'] ); ?>

                    <div class="sectionPresentation-content-rubrique">
                        <div class="sectionPresentation-content-rubrique__Img">
                            <?php echo $image; ?> 
                        </div>

                        <h3 class="sectionPresentation-content-rubrique__Title"> <?php echo $titre; ?> </h3>
                        <p class="sectionPresentation-content-rubrique__Title"> <?php echo $paragraphe; ?> </p>
                    </div>
                <?php endwhile;
            endif; 

        ?>

    </div>
</div>