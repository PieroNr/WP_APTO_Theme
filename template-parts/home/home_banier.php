<?php

    if( have_rows('home_banier')):
        while( have_rows('home_banier') ): the_row();

            if( have_rows('home_banier_titleSlogan')):
                while( have_rows('home_banier_titleSlogan')): the_row();
                    
                    $title_Site = get_sub_field('home_banier_titleSlogan_title');
                    $slogan = get_sub_field('home_banier_titleSlogan_slogan');
            
                endwhile;
            endif;

            if( have_rows('home_banier_priceButton')):
                while( have_rows('home_banier_priceButton')): the_row();

                    $price = get_sub_field('home_banier_priceButton_price');
                    $buy_button = get_sub_field('home_banier_priceButton_BuyButton');
            
                endwhile;
            endif;

            $background_img = wp_get_attachment_image( get_sub_field('home_banier_image')['ID']); ?>

            <div class="banier">
                <div class="banier-content">

                    <div class="banier-content-titleSlogan">
                        <h1 class="banier-content-titleSlogan__title"><?php echo $title_Site; ?></h1>
                        <h3 class="banier-content-titleSlogan__slogan"><?php echo $slogan; ?></h3>
                    </div>

                    <div class="banier-content-buy">
                        <p class="banier-content-buy__price"><?php echo $price; ?></p>
                        <a class="banier-content-buy__button" href="<?php echo $buy_button; ?>">ACHETER</a>
                    </div>

                    <div class="banier-content-background">
                        <?php echo $background_img; ?>
                    </div>

                </div>
            </div>
            
            

        <?php     
        endwhile;
    endif;
        
?>