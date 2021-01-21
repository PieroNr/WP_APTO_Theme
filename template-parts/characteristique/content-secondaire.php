<?php 

    $characSecond = get_field('charac_second');
    $titreCaracSecond = $characSecond['charac_second_title'];
    $caracSecond = $characSecond['charac_second_detail_options'];

    echo ($titreCaracSecond);
    echo('<br>');

    for ($i=0; $i < count($caracSecond); $i++) { 

        $titreOptionCaracSecond = $caracSecond[$i]['charac_second_detail_options_title'];
        $valeurOptionCaracSecond = $caracSecond[$i]['charac_second_detail_options_value'];

        echo $titreOptionCaracSecond;
        echo $valeurOptionCaracSecond;
        echo('<br>');

    }
    
?>