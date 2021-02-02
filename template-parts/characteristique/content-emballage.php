    <div class="sectionEmballage-content">
        <?php 

            $emballage = get_field('contenu_emballage');
            $titreEmballage = $emballage['contenu_emballage_title'];
            $emballageImgQte = $emballage['contenu_emballage_content_ImageQuantity']; ?>

            <h2 class="sectionEmballage-content__title"> <?php echo $titreEmballage; ?> </h2>

            <div class="sectionEmballage-content-features row">
                <?php for ($i=0; $i < count($emballageImgQte); $i++) { 

                    $imgEmballage = wp_get_attachment_image_src($emballageImgQte[$i]['contenu_emballage_content_ImageQuantity_image']['ID'],'full');
                    $qteEmballage = $emballageImgQte[$i]['contenu_emballage_content_ImageQuantity_quantity']; ?> 

                    <div class="sectionEmballage-content-featuresUnique col-l-3 col-sm-12 col-xs-12">
                        <div class="sectionEmballage-content-featuresUnique__Img" style="background-image:url('<?php echo $imgEmballage[0] ?>')">
                        </div>
                        <span class="sectionEmballage-content-featuresUnique__title"> <?php echo $qteEmballage; ?> </span>
                    </div>

                <?php } ?>

            </div>
    </div>
</div>