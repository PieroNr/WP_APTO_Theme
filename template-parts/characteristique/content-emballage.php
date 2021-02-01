<?php 

    $emballage = get_field('contenu_emballage');
    $titreEmballage = $emballage['contenu_emballage_title'];
    $emballageImgQte = $emballage['contenu_emballage_content_ImageQuantity'];

    echo ($titreEmballage);
    echo('<br>');

    for ($i=0; $i < count($emballageImgQte); $i++) { 

        $imgEmballage = $emballageImgQte[$i]['contenu_emballage_content_ImageQuantity_image'];
        $qteEmballage = $emballageImgQte[$i]['contenu_emballage_content_ImageQuantity_quantity'];

        echo wp_get_attachment_image( $imgEmballage['ID']);
        echo $qteEmballage;
        echo('<br>');

    }
    
?>