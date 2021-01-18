<?php /** 
 * Pages d'otptions + récuperer la valeur :
 * @link https://www.advancedcustomfields.com/resources/options-page/ */ ?>

<?php /**
 * Les repeaters :
 *  @link https://www.advancedcustomfields.com/resources/repeater/ */ ?>
<?php if( have_rows('fonctions', 'sections') ): ?>
    <section class="fonctions">
        <div class="container">
            <?php
              $titre_label_1 = get_field( 'titre', 'sections')["titre_label1"];
              $titre_label_2 = get_field("titre", "sections")["titre_label2"];
               
                while( have_rows('fonctions', 'sections') ) : the_row(); 
                    $soustitre = get_sub_field('fonctions_sous-titre');
                    $description = get_sub_field('fonctions_description');                   
                    $image = get_sub_field('fonctions_image');                    
                    $id = get_sub_field("fonctions_id");
                    $have_title= get_sub_field("fonctions_have-title");
                    ?>                    
                    <div class="fonction" id="<?php echo $id ?>">
                        <div class="fonction__content">
                            <?php if($have_title): ?>
                                <div class="titre fonctions__titre">
                                    <p><?php echo $titre_label_1; ?></p>
                                    <p><?php echo $titre_label_2 ?></p>
                                </div>
                            <?php endif; ?>
                            <p><?php echo $soustitre; ?></p>
                            <p><?php echo $description ?></p>
                        </div>
                        <div class="fonction__img">
                            <img alt="<?php echo $image["alt"] ?>" src="<?php echo $image["url"] ?>">
                        </div>
                    </div>                  
               <?php endwhile;?>
        </div>
    </section>
    <?php endif; ?>