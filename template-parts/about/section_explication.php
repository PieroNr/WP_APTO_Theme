<div class="sectionExplication">
    <div class="sectionExplication-content">

        <?php  

            if( have_rows('about_section_explication')):
                while( have_rows('about_section_explication') ): the_row();             

                    $titreExplication = get_sub_field("about_section_explication_title"); ?>

                    <h3 class="sectionExplication-content__title"> <?php echo ($titreExplication); ?> </h3>

                    <div class="sectionExplication-content-paragraphe">

                        <?php 
                        if( have_rows('about_section_explication_paragraphe')):
                            while( have_rows('about_section_explication_paragraphe') ): the_row();

                                $paragraphe = get_sub_field("about_section_explication_paragraphe_texte"); ?>

                                <p class="sectionExplication-content-paragraphe__text"> <?php echo $paragraphe; ?> </p>
                                
                            <?php endwhile;
                        endif; ?>

                    </div>

                    <?php 
                    $imageExplication = wp_get_attachment_image_src( get_sub_field('about_section_explication_image')['ID'],'full');?>

                    <div class="sectionExplication-content-Img" style="background-image:url(<?php echo $imageExplication[0] ?>)">
                    </div>
                    
                <?php endwhile;
            endif; 
        ?>

    </div>
</div>