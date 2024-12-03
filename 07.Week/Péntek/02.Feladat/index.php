<?php

    /*
    
        Feladat:

            Feltötlés átalakítása: 
            Helyezz el 5 linket az indexen

                Feltöltés 10 számmal
                Feltöltés 20 számmal
                Feltöltés 30 számmal
                Feltöltés 40 számmal
                Feltöltés 50 számmal

            Mindegyik link a feltoltes.php oldalra navigáljon.
            Mindegyik linkben az adott számot add át, és a feltöltés oldal a linkben átadtott szám alapján adjon hozzá számokat a tömbhöz.  
    
    */

    session_start();

    if(isset($_SESSION['tomb'])) {
        print_r($_SESSION['tomb']);
        echo "<br>";
    } else {
        $_SESSION['tomb'] = array();
    }

?>

<a href="feltoltes.php?szam=10">Tömb feltöltése 10 ranndom számmal</a>
<br>
<a href="feltoltes.php?szam=20">Tömb feltöltése 20 ranndom számmal</a>
<br>
<a href="feltoltes.php?szam=30">Tömb feltöltése 30 ranndom számmal</a>
<br>
<a href="feltoltes.php?szam=40">Tömb feltöltése 40 ranndom számmal</a>
<br>
<a href="feltoltes.php?szam=50">Tömb feltöltése 50 ranndom számmal</a>
<br>
<a href="torles.php">Törlés</a>
