<?php 

    /*$caracPrincipales = array();

    if( have_rows('charac_principal') ): 
        while( have_rows('charac_principal') ) : the_row();

            if( have_rows('charac_principal_pfeatures') ): 
                while( have_rows('charac_principal_pfeatures') ) : the_row();
                    

                    $typeCaracPrincipal = get_sub_field('charac_principal_pfeatures_type');      

                    
                    if( have_rows('charac_principal_pfeatures_options') ): 
                        while( have_rows('charac_principal_pfeatures_options') ) : the_row();
                            

                            $descriptionCaracPrincipal = get_sub_field('charac_principal_pfeatures_options_description');   
        
                        endwhile;
                    endif;

                endwhile;
            endif;

            

            $imageDeFond = wp_get_attachment_image( get_sub_field('charac_banier_backgroundImage')['ID'] );

        endwhile; else:
        
    endif;*/

    $characPrincipal = get_field('charac_principal');
    $carac = $characPrincipal['charac_principal_pfeatures'];
    $option = $carac['charac_principal_pfeatures_options'];
    $typeCaracPrincipal = $carac['charac_principal_pfeatures_type'];
    $descriptionCaracPrincipal = $option['charac_principal_pfeatures_options_description'];

    echo("<pre>");
    print_r($characPrincipal);
    echo("</pre>");
    echo("<pre>");
    print_r($carac);
    echo("</pre>");
    echo("<pre>");
    print_r($option);
    echo("</pre>");

    echo ($typeCaracPrincipal);
    echo ($descriptionCaracPrincipal);
    echo("<br>");
?>