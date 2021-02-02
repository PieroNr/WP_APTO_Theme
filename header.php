<!DOCTYPE html>
<?php /** @link https://developer.wordpress.org/reference/functions/language_attributes/ */ ?>
<html <?php language_attributes(); ?>>

<head>
    <?php /** @link https://developer.wordpress.org/reference/functions/bloginfo/ */ ?>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php /** @link https://developer.wordpress.org/reference/functions/the_title/ */?>
    <title> <?php bloginfo("name"); ?> | <?php the_title(); ?></title>

    <?php /** @link https://developer.wordpress.org/reference/functions/wp_head/ */ ?>
    <?php wp_head(); ?>

</head>

<body>

<header class="header">
        <div class="wrapper-mob">
            <div class="header__logo-mobile">
                <img src="<?php echo get_template_directory_uri() .'/dist/images/logo_apto2.png' ?>" alt="" width="70px">
            </div>
            <a class="burgerMobile" onclick="openMenu();">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>

        <div class="menu -close">
            <div class="mainHeader">
                <div class="header__logo">
                    <img src="<?php echo get_template_directory_uri() .'/dist/images/logo_apto2.png' ?>" alt="" width="80px">
                </div>
                
        
                <div class="headerPages">
                    <?php lpwd_clean_custom_menu("navigation") ?>
                </div>
            </div>
            <div class="secondaryHeader">
                
            <?php lpwd_clean_custom_menuSecond("navigation-second") ?>
            
            </div>
            
        </div>  
        
</header>
<div class="flux"></div>

        