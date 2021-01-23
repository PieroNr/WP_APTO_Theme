<?php 
    /*Template Name: Custom comment */
    /** @link https://developer.wordpress.org/reference/functions/get_header/ */
    get_header();

    /** @link https://developer.wordpress.org/themes/basics/the-loop/  */
    $note = array();
    $numberNoteFive = 0;
    $numberNoteFour = 0;
    $numberNoteThree = 0;
    $numberNoteTwo = 0;
    $numberNoteOne = 0;

    $totalConfort = 0;
    $totalDesign = 0;
    $totalBatterie = 0;
    $totalPrix = 0;


    $pagetitle = get_field('page_title');

    $args = array(  
        'post_type' => 'avis',
        'posts_per_page' => -1,  
        'order' => 'ASC', 
    );

    $avis = new WP_Query( $args );

    for ($i = 0; $i < count($avis->posts); $i++) {

        $avisID = $avis->posts[$i]->ID;
        $auteur = get_field( "avis_auteur", $avisID );
        $avis_titre = $avis->posts[$i]->post_title;
        $avis_date = get_field( "avis_datepost", $avisID );
        $avis_commentaire = get_field( "avis_commentaire", $avisID );
        $avis_note = get_field( "avis_note", $avisID );

        $noteCarac = get_field( "note_caracteristique", $avisID );

        $noteConfort = $noteCarac['carac_confort']['carac_confort_note'];
        $noteDesign = $noteCarac['carac_design']['carac_design_note'];
        $noteBatterie = $noteCarac['carac_batterie']['carac_batterie_note'];
        $notePrix = $noteCarac['carac_prix']['carac_prix_note'];

        $totalConfort += $noteCarac['carac_confort']['carac_confort_note'];
        $totalDesign += $noteCarac['carac_design']['carac_design_note'];
        $totalBatterie += $noteCarac['carac_batterie']['carac_batterie_note'];
        $totalPrix += $noteCarac['carac_prix']['carac_prix_note'];

        switch ($avis_note) {
            case 1:
                $numberNoteOne++;
                break;
            case 2:
                $numberNoteTwo++;
                break;
            case 3:
                $numberNoteThree++;
                break;
            case 4:
                $numberNoteFour++;
                break;
            case 5:
                $numberNoteFive++;
                break;
        }

        array_push($note, $avis_note);
        ?>

        <p>Avis de <?php echo $auteur; ?></p>
        <ul>
            <li>Titre : <?php echo $avis_titre; ?></li>
            <li>Posté le :<?php echo $avis_date; ?></li>
            <li>Commentaire : <?php echo $avis_commentaire; ?></li>
            <li>Note donnée : <?php echo $avis_note ?>/5</li>
            <li>Note Caractéristiques
                <ul>
                    <li>Confort : <?php echo $noteConfort ?>/5</li>
                    <li>Design : <?php echo $noteDesign ?>/5</li>
                    <li>Batterie : <?php echo $noteBatterie ?>/5</li>
                    <li>Prix : <?php echo $notePrix ?>/5</li>
                </ul>
            </li>
        </ul>

        <?php 
        
    }
    $add = 0;
    for ($i=0; $i < count($note); $i++) { 
        $add += $note[$i];
    }

    $moyenneFinale =  round(($add / count($note)), 1);
    $nbrNotes = count($note);

    $percentOne = round((($numberNoteOne / count($note))*100));
    $percentTwo = round((($numberNoteTwo / count($note))*100));
    $percentThree = round((($numberNoteThree / count($note))*100));
    $percentFour = round((($numberNoteFour / count($note))*100));
    $percentFive = round((($numberNoteFive / count($note))*100));


    



    ?>
    
    
    <h2>Note 1/5 : <?php echo $numberNoteOne ?> - <?php echo round((($numberNoteOne / count($note))*100)); ?>% </h2>
    <h2>Note 2/5 : <?php echo $numberNoteTwo ?> - <?php echo round((($numberNoteTwo / count($note))*100)); ?>% </h2>
    <h2>Note 3/5 : <?php echo $numberNoteThree ?> - <?php echo round((($numberNoteThree / count($note))*100)); ?>% </h2>
    <h2>Note 4/5 : <?php echo $numberNoteFour ?> - <?php echo round((($numberNoteFour / count($note))*100)); ?>% </h2>
    <h2>Note 5/5 : <?php echo $numberNoteFive ?> - <?php echo round((($numberNoteFive / count($note))*100)); ?>% </h2>

    <h2> Moyenne des notes de caractéristiques : </h2>
    <h3> Confort : <?php echo round($totalConfort / $nbrNotes); ?>/5 </h3>
    <h3> Design : <?php echo round($totalDesign / $nbrNotes); ?>/5 </h3>
    <h3> Batterie : <?php echo round($totalBatterie / $nbrNotes); ?>/5 </h3>
    <h3> Prix : <?php echo round($totalPrix / $nbrNotes); ?>/5 </h3>

    <div class="container">
        <div class="row row__center box">
            <div class="col-4">
                <div class="row" style="border-right: 1px solid grey">
                <div class="col-2 box__notes__left">
                    <p class="box__notes__left__text">5/5</p>
                    <p class="box__notes__left__text">4/5</p>
                    <p class="box__notes__left__text">3/5</p>
                    <p class="box__notes__left__text">2/5</p>
                    <p class="box__notes__left__text">1/5</p>
                </div>
                <div class="col-8 box__notes__barres">
                    <p class="box__notes__barres__barre-<?php echo $percentFive ?>"></p>
                    <p class="box__notes__barres__barre-<?php echo $percentFour ?>"></p>
                    <p class="box__notes__barres__barre-<?php echo $percentThree ?>"></p>
                    <p class="box__notes__barres__barre-<?php echo $percentTwo ?>"></p>
                    <p class="box__notes__barres__barre-<?php echo $percentOne ?>"></p>
                </div>
            </div>
            </div>
            <div class="col-4">
                <div class="row row__center">
                    <div class="container box__moyenne">
                        <div class="box__moyenne__text"> <?php echo $moyenneFinale; ?> </div>
                        <div class="row row__center">
                            <?php 
                                $noteMoy = $moyenneFinale * 100;
                                for ($i=0; $i < 5; $i++) { 
                                    if($noteMoy > 100){
                                        $noteMoy -= 100;
                                        ?>
                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 820.000000 818.000000" preserveAspectRatio="xMidYMid meet">
                                            <defs>
                                                <linearGradient id="MyGradient<?php echo $i ?>">
                                                    <stop offset="100%"  stop-color="#FF6600"/>
                                                    <stop offset="100%" stop-color="grey"/>
                                                </linearGradient>
                                            </defs>

                                            <g transform="translate(0.000000,818.000000) scale(0.100000,-0.100000)"
                                                fill="url(#MyGradient<?php echo $i ?>)" stroke="none">
                                                <path d="M3864 7619 c-1363 -78 -2567 -960 -3057 -2239 -502 -1310 -172 -2798
                                                837 -3767 275 -265 566 -468 908 -632 357 -173 708 -276 1113 -327 173 -22
                                                603 -25 770 -6 677 80 1267 319 1795 728 148 114 480 446 594 594 409 528 648
                                                1118 728 1795 19 167 16 597 -6 770 -123 968 -605 1806 -1373 2388 -554 419
                                                -1213 657 -1928 697 -186 11 -179 11 -381 -1z m571 -634 c596 -77 1128 -323
                                                1578 -730 441 -397 764 -965 880 -1545 46 -227 52 -301 51 -590 0 -232 -4
                                                -297 -22 -415 -80 -511 -278 -968 -594 -1368 -104 -131 -334 -361 -465 -465
                                                -400 -316 -857 -514 -1368 -594 -118 -18 -183 -22 -415 -22 -179 -1 -308 4
                                                -370 12 -798 113 -1472 507 -1945 1137 -827 1101 -750 2649 182 3666 492 538
                                                1155 863 1888 929 136 12 454 4 600 -15z M4561 5029 c-177 -233 -239 -308 -250 -303 -57 24 -165 44 -236 44
                                                -295 0 -552 -200 -625 -486 -38 -148 -22 -297 47 -444 28 -59 55 -94 122 -161
                                                94 -94 180 -145 301 -175 89 -23 235 -21 323 4 l68 20 470 -604 c258 -332 473
                                                -605 477 -607 10 -6 288 213 285 224 -2 7 -785 1016 -915 1180 l-29 37 29 48
                                                c39 63 69 154 82 245 17 121 -13 276 -75 387 l-25 45 152 201 c84 111 192 253
                                                240 316 48 63 88 118 88 122 0 9 -276 218 -287 218 -4 0 -113 -140 -242 -311z
                                                m-366 -633 c61 -29 117 -84 147 -145 18 -36 23 -63 23 -121 -1 -124 -56 -214
                                                -163 -267 -76 -37 -183 -40 -253 -5 -61 30 -116 86 -145 147 -34 73 -34 182 2
                                                252 29 60 88 117 148 144 62 28 176 26 241 -5z"/>
                                            </g>
                                         </svg>
                                        <?php
                                    }
                                    else if($noteMoy == 0){
                                        ?>
                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 820.000000 818.000000" preserveAspectRatio="xMidYMid meet">
                                            <defs>
                                                <linearGradient id="MyGradient<?php echo $i ?>">
                                                    <stop offset="0%"  stop-color="#FF6600"/>
                                                    <stop offset="0%" stop-color="grey"/>
                                                </linearGradient>
                                            </defs>

                                            <g transform="translate(0.000000,818.000000) scale(0.100000,-0.100000)"
                                                fill="url(#MyGradient<?php echo $i ?>)" stroke="none">
                                                <path d="M3864 7619 c-1363 -78 -2567 -960 -3057 -2239 -502 -1310 -172 -2798
                                                837 -3767 275 -265 566 -468 908 -632 357 -173 708 -276 1113 -327 173 -22
                                                603 -25 770 -6 677 80 1267 319 1795 728 148 114 480 446 594 594 409 528 648
                                                1118 728 1795 19 167 16 597 -6 770 -123 968 -605 1806 -1373 2388 -554 419
                                                -1213 657 -1928 697 -186 11 -179 11 -381 -1z m571 -634 c596 -77 1128 -323
                                                1578 -730 441 -397 764 -965 880 -1545 46 -227 52 -301 51 -590 0 -232 -4
                                                -297 -22 -415 -80 -511 -278 -968 -594 -1368 -104 -131 -334 -361 -465 -465
                                                -400 -316 -857 -514 -1368 -594 -118 -18 -183 -22 -415 -22 -179 -1 -308 4
                                                -370 12 -798 113 -1472 507 -1945 1137 -827 1101 -750 2649 182 3666 492 538
                                                1155 863 1888 929 136 12 454 4 600 -15z M4561 5029 c-177 -233 -239 -308 -250 -303 -57 24 -165 44 -236 44
                                                -295 0 -552 -200 -625 -486 -38 -148 -22 -297 47 -444 28 -59 55 -94 122 -161
                                                94 -94 180 -145 301 -175 89 -23 235 -21 323 4 l68 20 470 -604 c258 -332 473
                                                -605 477 -607 10 -6 288 213 285 224 -2 7 -785 1016 -915 1180 l-29 37 29 48
                                                c39 63 69 154 82 245 17 121 -13 276 -75 387 l-25 45 152 201 c84 111 192 253
                                                240 316 48 63 88 118 88 122 0 9 -276 218 -287 218 -4 0 -113 -140 -242 -311z
                                                m-366 -633 c61 -29 117 -84 147 -145 18 -36 23 -63 23 -121 -1 -124 -56 -214
                                                -163 -267 -76 -37 -183 -40 -253 -5 -61 30 -116 86 -145 147 -34 73 -34 182 2
                                                252 29 60 88 117 148 144 62 28 176 26 241 -5z"/>
                                            </g>
                                         </svg>
                                        <?php
                                    }
                                    else{
                                        ?>
                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50px" height="50px" viewBox="0 0 820.000000 818.000000" preserveAspectRatio="xMidYMid meet">
                                            <defs>
                                                <linearGradient id="MyGradient<?php echo $i ?>">
                                                    <stop offset="<?php echo $noteMoy; ?>%"  stop-color="#FF6600"/>
                                                    <stop offset="<?php echo $noteMoy; ?>%" stop-color="grey"/>
                                                </linearGradient>
                                            </defs>

                                            <g transform="translate(0.000000,818.000000) scale(0.100000,-0.100000)"
                                                fill="url(#MyGradient<?php echo $i ?>)" stroke="none">
                                                <path d="M3864 7619 c-1363 -78 -2567 -960 -3057 -2239 -502 -1310 -172 -2798
                                                837 -3767 275 -265 566 -468 908 -632 357 -173 708 -276 1113 -327 173 -22
                                                603 -25 770 -6 677 80 1267 319 1795 728 148 114 480 446 594 594 409 528 648
                                                1118 728 1795 19 167 16 597 -6 770 -123 968 -605 1806 -1373 2388 -554 419
                                                -1213 657 -1928 697 -186 11 -179 11 -381 -1z m571 -634 c596 -77 1128 -323
                                                1578 -730 441 -397 764 -965 880 -1545 46 -227 52 -301 51 -590 0 -232 -4
                                                -297 -22 -415 -80 -511 -278 -968 -594 -1368 -104 -131 -334 -361 -465 -465
                                                -400 -316 -857 -514 -1368 -594 -118 -18 -183 -22 -415 -22 -179 -1 -308 4
                                                -370 12 -798 113 -1472 507 -1945 1137 -827 1101 -750 2649 182 3666 492 538
                                                1155 863 1888 929 136 12 454 4 600 -15z M4561 5029 c-177 -233 -239 -308 -250 -303 -57 24 -165 44 -236 44
                                                -295 0 -552 -200 -625 -486 -38 -148 -22 -297 47 -444 28 -59 55 -94 122 -161
                                                94 -94 180 -145 301 -175 89 -23 235 -21 323 4 l68 20 470 -604 c258 -332 473
                                                -605 477 -607 10 -6 288 213 285 224 -2 7 -785 1016 -915 1180 l-29 37 29 48
                                                c39 63 69 154 82 245 17 121 -13 276 -75 387 l-25 45 152 201 c84 111 192 253
                                                240 316 48 63 88 118 88 122 0 9 -276 218 -287 218 -4 0 -113 -140 -242 -311z
                                                m-366 -633 c61 -29 117 -84 147 -145 18 -36 23 -63 23 -121 -1 -124 -56 -214
                                                -163 -267 -76 -37 -183 -40 -253 -5 -61 30 -116 86 -145 147 -34 73 -34 182 2
                                                252 29 60 88 117 148 144 62 28 176 26 241 -5z"/>
                                            </g>
                                         </svg>
                                        <?php
                                        $noteMoy -= $noteMoy;
                                    }
                                }
                            
                            ?>
                        </div>
                        <p class="box__moyenne__p"> calculé à partir de <?php echo count($note); ?> avis
                            au cours des 12 derniers mois</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row row__center">
                <div class="box__notes__moybarre" style="margin-right:5px; border-top-left-radius: 10px; border-bottom-left-radius: 10px;"></div>
                <div class="box__notes__moybarre" style="margin-right:5px;"></div>
                <div class="box__notes__moybarre" style="margin-right:5px;"></div>
                <div class="box__notes__moybarre" style="margin-right:5px;"></div>
                <div class="box__notes__moybarre"></div>
                </div>
                
                Partie 3 <br>
                Partie 3 <br>
                Partie 3 <br>
                Partie 3 <br>
                Partie 3 <br>
                Partie 3 <br>
                Partie 3 <br>
                Partie 3 <br>
                Partie 3
            </div>
        </div>
    </div>



    <?php

    /** @link https://developer.wordpress.org/reference/functions/get_footer/ */
    get_footer();
?>
