<div class="sectionPhoto">
    <div class="sectionPhoto-content">
        <?php 
            if( have_rows('about_section_photo')):
                while( have_rows('about_section_photo') ): the_row(); ?>

                    <div class="sectionPhoto-content-Entrepreneur">

                        <?php if( have_rows('about_section_photo_image')):
                            while( have_rows('about_section_photo_image') ): the_row();
                                
                                $image = wp_get_attachment_image( get_sub_field('about_section_photo_image_file')['ID'] );

                                $nom = get_sub_field("about_section_photo_image_title");?>

                                <div class="sectionPhoto-content-EntrepreneurUnique">

                                    <div class="sectionPhoto-content-EntrepreneurUnique__Img">
                                        <?php echo $image;?>
                                    </div>
                                    
                                    <span class="sectionPhoto-content-EntrepreneurUnique__Prenom"> <?php echo $nom;?> </span>

                                </div>
                            <?php endwhile;
                        endif; ?>

                    </div>

                    <div class="sectionPhoto-content-paragraphe">

                        <?php if( have_rows('about_section_photo_paragraphe')):
                            while( have_rows('about_section_photo_paragraphe') ): the_row(); 

                                $paragraphe = get_sub_field("about_section_photo_paragraphe_texte"); ?>

                                <div class="sectionPhoto-content-paragrapheUnique">
                                    <p class="sectionPhoto-content-paragrapheUnique__text"> <?php echo $paragraphe; ?> </p>
                                </div>

                            <?php endwhile;
                        endif;?>

                    </div>

                    <div class="sectionPhoto-content-slogan">

                        <?php $slogan = get_sub_field("about_section_photo_slogan"); ?>

                        <span class="sectionPhoto-content-slogan__text"> <?php echo ($slogan); ?> </span>
                    </div>

                    <?php endwhile;
            endif;  
            
        ?>
    </div>
</div>