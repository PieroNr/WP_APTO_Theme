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
        <div class="header__burgercontainer">
            <div class="burger"></div>
        </div>
        <?php lpwd_clean_custom_menu("navigation") ?>
    </header>


    <div class="container">

