<?php

/* 

    Feladat:
        Hozz létre 5 oldalt:
            index.php
            feltoltes.php
            paros.php
            paratlan.php
            torles.php

        Az indexen megefelelő módon hozz létre egy session tömböt.
        A feltöltés oldal töltse fel 50 darab 1 és 1000 közötti random számmal a tömböt, és minden szám csak egyszer szerepelhessen a tömbben
        A paros oldal írja ki a ki a tömb páros elemeit.
        A paratlan oldal írja ki a tomb paratlan elemeit.
        A törlés oldalon töröld a tömb tartalmát

*/

session_start();

if(isset($_SESSION['tomb'])) {
    print_r($_SESSION['tomb']);
} else {
    $_SESSION['tomb'] = array();
}

echo "<br>"


?>

<a href="paros.php">Páros</a>
<a href="paratlan.php">Páratlan</a>
<a href="feltoltes.php">Feltöltés</a>
<a href="torles.php">Törlés</a>
