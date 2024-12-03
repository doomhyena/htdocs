<?php
/* 

Hozz létre három oldalt

    index
    paros
    paratlan
    torles

    Az index oldalon hozz létre a megfelelő módon egy tömböt SESSION-ben. 
    Helyezz el két linnket az oldalra paros, paratlan és a torles oldalhoz.
    A paros adjon hozzá 50 random páros számot a tömbhöz 0 és 1000 között. 
    Helyezz el ezen az oldaon egy linket a főoldahoz.
    A paratlan adjon hozzá 50 random páratlan számot a tömböhz 0 és 1000 között. 
    Helyezz el ezen az oldalon egy linket főoldalhoz.
    A törlés oldal nullázza le a tömböt
    Helyezz el ide egy linket a főloldalra

*/

session_start();

if(isset($_SESSION['tomb'])) {
    print_r($_SESSION['tomb']);
} else {
    $_SESSION['tomb'] = array();
}

echo "<br>"


?>

<a href="torles.php">Törlés</a>
<a href="paros.php">Páros</a>
<a href="paratlan.php">Páratlan</a>
