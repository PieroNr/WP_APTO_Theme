<?php 
    $characBanier = get_field('charac_banier');
    $titleSlogan = $characBanier['charac_banier_titleSlogan']['charac_banier_titleSlogan_title'];
    $slogan = $characBanier['charac_banier_titleSlogan']['charac_banier_titleSlogan_slogan'];
    $priceSlogan = $characBanier['charac_banier_priceButton']['charac_banier_priceButton_price'];
    $buttonAchat = $characBanier['charac_banier_priceButton']['charac_banier_priceButton_button'];
    $imgDeFond = wp_get_attachment_image_src( $characBanier['charac_banier_backgroundImage']['ID'],'full');?>

<div class="banier">
    <div class="banier-content">

        <div class="banier-content-titleSlogan">
            <h1 class="banier-content-titleSlogan__title"><?php echo $titleSlogan; ?></h1>
            <h3 class="banier-content-titleSlogan__slogan"><?php echo $slogan; ?></h3>
        </div>

        <div class="banier-content-buy">
            <p class="banier-content-buy__price"><?php echo $priceSlogan; ?></p>
            <a class="banier-content-buy__button" href="<?php echo $buttonAchat; ?>">ACHETER</a>
        </div>

        <div class="banier-content-background -features" style="background-image:url(<?php echo $imgDeFond[0] ?>)">
        </div>

    </div>
</div>