<?php 
    $characBanier = get_field('charac_banier');
    $titleSlogan = $characBanier['charac_banier_titleSlogan']['charac_banier_titleSlogan_title'];
    $slogan = $characBanier['charac_banier_titleSlogan']['charac_banier_titleSlogan_slogan'];
    $priceSlogan = $characBanier['charac_banier_priceButton']['charac_banier_priceButton_price'];
    $buttonAchat = $characBanier['charac_banier_priceButton']['charac_banier_priceButton_button'];
    $imgDeFond = $characBanier['charac_banier_backgroundImage'];

    echo ($titleSlogan);
    echo ($slogan);
    echo("<br>");
    echo ($priceSlogan);
    echo ($buttonAchat);
    echo("<br>");
    echo ( wp_get_attachment_image( $imgDeFond['ID']));
?>