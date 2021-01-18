<?php 
    /** @link https://developer.wordpress.org/reference/classes/wp_query/ */

    /* On va chercher les 3 derniers postes peu importe le type */
    $the_query = new WP_Query(array(
        'post_type' => 'any',
        "posts_per_page" => 3
    ));

    /* On va chercher tous les produits qui sont dans la "category-two" que l'on stocke dans une variable */
    $the_query2 = new WP_Query(array(
        'post_type' => 'product',
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field'    => 'slug',
                'terms'    => 'category-two',
            ),
        ),
    ));
 ?>

<?php if ($the_query->have_posts()) : ?>
        <h1>Catégorie 1 :</h1>
        <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
            <p><a href="<?php the_permalink() ?>" ><?php the_title() ?></a></p>
        <?php endwhile; ?>
    <?php endif ?>

    <?php if ($the_query2->have_posts()) : ?>
        <h1>Catégorie 2 :</h1>
        <?php while($the_query2->have_posts()) : $the_query2->the_post(); ?>
            <p><a href="<?php the_permalink() ?>" ><?php the_title() ?></a></p>
        <?php endwhile; ?>
    <?php endif ?>
