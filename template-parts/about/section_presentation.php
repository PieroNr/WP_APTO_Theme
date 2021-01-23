<div class="sectionPresentation">
    <div class="sectionPresentation-content">

        <?php 

            if( have_rows('about_section_presentation')):
                $compteur = 0;
                while( have_rows('about_section_presentation') ): the_row();             

                    $titre = get_sub_field("about_section_presentation_title");

                    $paragraphe = get_sub_field("about_section_presentation_paragraphe");

                    $image = wp_get_attachment_image_src( get_sub_field('about_section_presentation_image')['ID'],'full'); 
                    
                    if ($compteur/2 == 0 || $compteur/2 == 1){?>
                        <div class="sectionPresentation-content-rubrique row row__center space-v">
                            <div class="sectionPresentation-content-rubrique__Img col-sm-12 col-l-5 d-sm-none space-h -ImgLeft" style="background-image:url(<?php echo $image[0] ?>)">
                            </div>

                            <div class="sectionPresentation-content-rubrique-text col-sm-12 col-l-5 row__left -textLeft">
                                <h3 class="sectionPresentation-content-rubrique-text__title"> <?php echo $titre; ?> </h3>
                                <p class="sectionPresentation-content-rubrique-text__text"> <?php echo $paragraphe; ?> </p>
                            </div>
                            
                        </div>
                    <?php } else { ?>
                        <div class="sectionPresentation-content-rubrique row row__center space-v">
                            <div class="sectionPresentation-content-rubrique-text col-sm-12 col-l-5 row__right space-h -textRight">
                                <h3 class="sectionPresentation-content-rubrique-text__title"> <?php echo $titre; ?> </h3>
                                <p class="sectionPresentation-content-rubrique-text__text"> <?php echo $paragraphe; ?> </p>
                            </div>

                            <div class="sectionPresentation-content-rubrique__Img col-sm-12 col-l-5 d-sm-none" style="background-image:url(<?php echo $image[0] ?>)">
                            </div>
                        </div>
                    <?php } 
                    $compteur++;?>
                    
                <?php endwhile;
            endif; 

        ?>

    </div>
</div>