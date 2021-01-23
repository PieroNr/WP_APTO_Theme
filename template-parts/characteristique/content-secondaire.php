<div class="sectionSecondaireEmballage">
    <div class="sectionSecondaire-content">
        <?php 

            $characSecond = get_field('charac_second');
            $titreCaracSecond = $characSecond['charac_second_title'];
            $caracSecond = $characSecond['charac_second_detail_options']; ?>
 
            <h2 class="sectionSecondaire-content__title"> <?php echo $titreCaracSecond; ?> </h2> 

            <div class="sectionSecondaire-content-features">
                <?php for ($i=0; $i < count($caracSecond); $i++) { 

                    $titreOptionCaracSecond = $caracSecond[$i]['charac_second_detail_options_title'];
                    $valeurOptionCaracSecond = $caracSecond[$i]['charac_second_detail_options_value']; ?>

                    <div class="sectionSecondaire-content-featuresUnique">
                        <span class="sectionSecondaire-content-featuresUnique__title"> <?php echo $titreOptionCaracSecond; ?> </span>
                        <span class="sectionSecondaire-content-featuresUnique__valeur"> <?php echo $valeurOptionCaracSecond; ?> </span>
                    </div>

                <?php } ?>
            </div>

    </div>
