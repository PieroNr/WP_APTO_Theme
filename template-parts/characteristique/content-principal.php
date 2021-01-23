<div class="sectionPrincipal">
    <div class="sectionPrincipal-content">

        <?php 
            $characPrincipal = get_field('charac_principal');
            $carac = $characPrincipal['charac_principal_pfeatures'];;

            for ($i=0; $i < count($carac); $i++) { 

                $typeCaracPrincipal = $carac[$i]['charac_principal_pfeatures_type']; ?>
                
                <div class="sectionPrincipal-content-unique">
                    <span class="sectionPrincipal-content-unique__title"> <?php echo($typeCaracPrincipal); ?> </span>

                    <?php for ($j=0; $j < count($carac[$i]['charac_principal_pfeatures_options']); $j++) { 
                        
                        for ($p=0; $p < count($carac[$i]['charac_principal_pfeatures_options'][$j]); $p++) { 
                            $descriptionCaracPrincipal = $carac[$i]['charac_principal_pfeatures_options'][$j]['charac_principal_pfeatures_options_description'];?>

                            <p class="sectionPrincipal-content-unique__text"> <?php echo($descriptionCaracPrincipal); ?> </p>
                        <?php }        

                    } ?>

                </div>
                
            <?php }
        ?>
    </div>
</div>