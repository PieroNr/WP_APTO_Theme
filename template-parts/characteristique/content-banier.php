<?php 
    $characBanier = get_field('charac_banier');
    $titleSlogan = $characBanier['charac_banier_titleSlogan']['charac_banier_titleSlogan_title'];
    $slogan = $characBanier['charac_banier_titleSlogan']['charac_banier_titleSlogan_slogan'];
    $priceSlogan = $characBanier['charac_banier_priceButton']['charac_banier_priceButton_price'];
    $buttonAchat = $characBanier['charac_banier_priceButton']['charac_banier_priceButton_button'];

    echo ($titleSlogan);
    echo ($slogan);
    echo("<br>");
    echo ($priceSlogan);
    echo ($buttonAchat);
    echo("<br>");
    echo ($imageDeFond);
?>