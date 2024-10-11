<?php

    /*
        Feladat:
            index: Tömb létrehozása, kiírása 
            alma(feltoltes): Tömb feltöltése 10 alkalommal
            Torles(korte): Tömb törlése (0 adat legyen benne)
    */

    session_start();

    if(isset($_SESSION['tomb2'])) {
        print_r($_SESSION['tomb2']);
    } else {
        $_SESSION['tomb2'] = array();
    }

    echo "<br>"


?>

<a href="alma.php">Feltöltés</a>
<a href="korte.php">Törlés</a>