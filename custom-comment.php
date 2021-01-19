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


    $pagetitle = get_field('page_title');


    echo get_field('page_title');
    if( have_rows('commentaire')):
        while( have_rows('commentaire') ): the_row();
        $auteur = get_sub_field('avis_auteur');

        echo 'Maxi pute';

        echo '<pre>';
        print_r(get_row());
        echo '</pre>';
        switch (get_sub_field('avis_note')) {
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

        array_push($note, get_sub_field('avis_note'));   
            

        endwhile;
    endif;
    $add = 0;
    for ($i=0; $i < count($note); $i++) { 
        $add += $note[$i];
    }

    echo round(($add / count($note)), 1);
    $nbrNotes = count($note);



    ?>
    
    <h1>Note 1/5 : <?php echo $numberNoteOne ?> - <?php echo round((($numberNoteOne / count($note))*100)); ?>% </h1>
    <h1>Note 2/5 : <?php echo $numberNoteTwo ?> - <?php echo round((($numberNoteTwo / count($note))*100)); ?>% </h1>
    <h1>Note 3/5 : <?php echo $numberNoteThree ?> - <?php echo round((($numberNoteThree / count($note))*100)); ?>% </h1>
    <h1>Note 4/5 : <?php echo $numberNoteFour ?> - <?php echo round((($numberNoteFour / count($note))*100)); ?>% </h1>
    <h1>Note 5/5 : <?php echo $numberNoteFive ?> - <?php echo round((($numberNoteFive / count($note))*100)); ?>% </h1>

    <?php

    /** @link https://developer.wordpress.org/reference/functions/get_footer/ */
    get_footer();
?>
