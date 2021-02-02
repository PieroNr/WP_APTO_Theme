<div class="sectionPrincipal">
    <div class="sectionPrincipal-content">

        <?php 
            $characPrincipal = get_field('charac_principal');
            $carac = $characPrincipal['charac_principal_pfeatures'];;

            for ($i=0; $i < count($carac); $i++) { 

                $typeCaracPrincipal = $carac[$i]['charac_principal_pfeatures_type']; ?>
                
                <div class="sectionPrincipal-content-unique row">
                    <span class="sectionPrincipal-content-unique__title col-l-12 col-sm-6 col-xs-6"> <?php echo($typeCaracPrincipal); ?> </span>
                    <div class="sectionPrincipal-content-uniqueOption col-l-12 col-sm-6 col-xs-6">
                        <?php for ($j=0; $j < count($carac[$i]['charac_principal_pfeatures_options']); $j++) { ?>
                            <?php for ($p=0; $p < count($carac[$i]['charac_principal_pfeatures_options'][$j]); $p++) { 
                                $descriptionCaracPrincipal = $carac[$i]['charac_principal_pfeatures_options'][$j]['charac_principal_pfeatures_options_description'];?>

                                <p class="sectionPrincipal-content-uniqueOption__text"> <?php echo($descriptionCaracPrincipal); ?> </p>
                            <?php } ?>  
                        <?php } ?>
                    </div>
                </div>
                
            <?php }
        ?>
    </div>
</div>