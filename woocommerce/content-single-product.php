

<?php 
    /** @link https://developer.wordpress.org/reference/functions/wp_get_upload_dir/ */
    $upload_dir            = wp_get_upload_dir()["baseurl"] . "/"  ;
    /** @link https://developer.wordpress.org/reference/functions/get_the_id/  */
    $idProduct             = get_the_ID();
    /** @link https://woocommerce.github.io/code-reference/namespaces/default.html#function_wc_get_product */
    $product               = wc_get_product($idProduct);
    $price                 = $product->price;
    $attributes            = $product->attributes;
    $default_attributes    = $product->default_attributes;
    $attribute_strap_color = "couleur-du-bracelet";
    $attribute_dial_color  = "couleur-du-cadran";
    $attribute_dial_size   = "taille-du-cadran";
    $dial_sizes            = $attributes[$attribute_dial_size]["options"];
    $strap_colors          = $attributes[$attribute_strap_color]["options"];
    $dial_colors           = $attributes[$attribute_dial_color]["options"];

?>


<div class="row perso">
    <div class="col-12 col-md-6" id="img-product">
        <div class="watch" id="imageMontre">
            <?php if ($default_attributes[$attribute_strap_color]) : ?>
                <img class="watch__strap" data-source="<?php echo $upload_dir ?>bracelet-{color}.png" src="<?php echo $upload_dir ?>bracelet-<?php echo $default_attributes[$attribute_strap_color]?>.png" alt="">
            <?php else:  ?>
                <img class="watch__strap" data-source="<?php echo $upload_dir ?>bracelet-{color}.png" src="<?php echo $upload_dir ?>bracelet-orange.png" alt="">
            <?php endif; ?>
        </div>
        <div class="presMontre">
            <img class="presMontre__image -gauche" src="<?php echo get_template_directory_uri()?>/dist/images/1.png" onclick="zoomImage(1)" alt="" width="30%">
            <img class="presMontre__image" src="<?php echo get_template_directory_uri()?>/dist/images/2.png" onclick="zoomImage(2)" alt="" width="30%">
            <img class="presMontre__image -droite" src="<?php echo get_template_directory_uri()?>/dist/images/3.png" onclick="zoomImage(3)" alt="" width="30%">
        </div>
    </div>

    <div class="col-12 col-md-5 " id="informations-product">
        <div class="personnalisation-product">
            <h1 class="title"><?php the_title(); ?></h1>
            <p class="subtitle"><b><span id="product-final-price"><?php echo $price; ?>€</span></b></p>
            <?php if($strap_colors) : ?>
                <h2 class="subtitle">Choisir la couleur du Bracelet</h2>
                <ul class="c-colorDots">
                    <?php foreach($strap_colors as $strap_color) : ?>
                        <?php
                            $isActive = ($default_attributes[$attribute_strap_color] == $strap_color) ? "-active" : "";
                            $classname = strtolower($strap_color) 
                        ?>
                        <li data-attribute="<?php echo $attribute_strap_color; ?>" data-value="<?php echo $strap_color; ?>" class="c-colorDots__item filterItem -<?php echo $classname; ?>  <?php echo $isActive; ?>"></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <div class="button" id="add-product-to-cart">Ajouter au panier</div>
        </div>
        
    </div>
        
</div>


<div class="summary entry-summary" id="woocommerce-hidden">
    <?php
    /**
     * Hook: woocommerce_single_product_summary.
     *
     * @hooked woocommerce_template_single_title - 5
     * @hooked woocommerce_template_single_rating - 10
     * @hooked woocommerce_template_single_price - 10
     * @hooked woocommerce_template_single_excerpt - 20
     * @hooked woocommerce_template_single_add_to_cart - 30
     * @hooked woocommerce_template_single_meta - 40
     * @hooked woocommerce_template_single_sharing - 50
     * @hooked WC_Structured_Data::generate_product_data() - 60
     */
    do_action( 'woocommerce_single_product_summary' );
    ?>
</div>

	

<?php do_action( 'woocommerce_after_single_product' ); ?>
