    <div class="sectionEmballage-content">
        <?php 

            $emballage = get_field('contenu_emballage');
            $titreEmballage = $emballage['contenu_emballage_title'];
            $emballageImgQte = $emballage['contenu_emballage_content_ImageQuantity']; ?>

            <h2 class="sectionEmballage-content__title"> <?php echo $titreEmballage; ?> </h2>

            <div class="sectionEmballage-content-features">
                <?php for ($i=0; $i < count($emballageImgQte); $i++) { 

                    $imgEmballage = wp_get_attachment_image($emballageImgQte[$i]['contenu_emballage_content_ImageQuantity_image']['ID']);
                    $qteEmballage = $emballageImgQte[$i]['contenu_emballage_content_ImageQuantity_quantity']; ?> 

                    <div class="sectionEmballage-content-featuresUnique">
                        <div class="sectionEmballage-content-featuresUnique__Img">
                            <?php echo $imgEmballage; ?>
                        </div>
                        <span class="sectionEmballage-content-featuresUnique__title"> <?php echo $qteEmballage; ?> </span>
                    </div>

                <?php } ?>

            </div>
    </div>
</div>