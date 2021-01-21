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

    //echo round(($add / count($note)), 1);
    $nbrNotes = count($note);


    



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

    <?php

    /** @link https://developer.wordpress.org/reference/functions/get_footer/ */
    get_footer();
?>
