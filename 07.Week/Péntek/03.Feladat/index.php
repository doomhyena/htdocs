<?php

    /*
    
        Feladat:

            Hozz létre egy szam változót session-ban. s add meg neki a 0 értéket. (Sima változó nem tömb)
            Helyezz el két linket az oldalon
                osszeadas.php
                kivonas.php
            Az összeadás oldalon adj hpzzá a session[szam] változóhoz egy random számot 1 és 10 között. 
            A kivonás oldalonn vonj ki a session[szam] változóból egy random számot 1 és 10 között

            Mindegyik oldaon írd ki, hogy mi az alap érték, melyik számot adod hozzá/vonod ki, és hogy mi a végeredmény.
            Helyezz el mindegyik oldalon egy linket a főoldalra
    
    */
    session_start();

    if(isset($_SESSION['tomb'])) {
        print_r($_SESSION['tomb']);
        echo "<br>";
    } else {
        $_SESSION['tomb'] = array();
    }

?>

<a href="osszeadas.php">összeadás</a>
<a href="kivonas.php">kivonás</a>