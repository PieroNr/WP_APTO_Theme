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

            $background_img = wp_get_attachment_image( get_sub_field('home_banier_image')['ID']);
            
            

        endwhile;
    endif;
        
?>