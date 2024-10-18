<?php

    /*
    Feladat
        Hozz létre a megfelelő módon egy tömbtöt sessionben.
        Helyezz el 3 linket az oldalon:

        - Páros felöltés
        - Páratlan feltöltés
        - Törlés

        A páros oldal töltse fel a tömböt 10  darab 0 és 1000 közötti néggyel osztható random számmal.
        A páratlan oldal töltse fel a tömböt 10 darab 0 és 1000 közötti hárommal osztható random számmal.
        A törlés oldal törölje a tömb tartalmát.
        Mindegyik oldalon helyezz el egy linket a főoldalra. 

        A főoldalt alakítsd át úgy, hogy a tömb sima kiírása helyett linkek generálódjanak a tömb minden eleméhez:

        Elem 0
        Elem 1

        Mindegyik link az “elem.php” sablon oldalra navigáljon át, és az adott elem indexét adja át linken keresztül.

        Vizsgálja meg az oldal, hogy a tömb adott eleme osztható-e néggyel, és hogy osztható-e hárommal. 

        Ha csak néggyel osztható, írja ki, hogy csak néggyel osztható.
        Ha csak hárommal osztható, írja ki, hogy csak hárommal osztható.
        Ha mind a kettővel osztható, írja ki, hogy mind a kettővel osztható.

        A feladat minden fájlját tedd be egy a neveddel ellátott mappába.

        A mappát tömörítsd ZIP fájlba, és küldd el nekem emailben.
    */

// ---------------------------------------------------------------------------------------------------------------


    session_start();

    if(isset($_SESSION['tomb'])) {
        print_r($_SESSION['tomb']);
    } else {
        $_SESSION['tomb'] = array();
    }


// ---------------------------------------------------------------------------------------------------------------

    echo '<br>';
    for ($i = 0; $i < count($_SESSION['tomb']); $i++) {
        echo '<a href="elem.php?index='.$i.'">A tömb '.$i .' eleme</a>';        
        echo '<br>';
    }

?>
<br>
<a href="paros.php">Páros</a>
<a href="paratlan.php">Páratlan</a>
<a href="torles.php">Törlés</a>