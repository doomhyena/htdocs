<?php

    session_start();

    if(isset($_SESSION['tomb'])) {
        print_r($_SESSION['tomb']);
        echo "<br>";
    } else {
        $_SESSION['tomb'] = array();
    }
    for ($i = 0; $i < count($_SESSION['tomb']); $i++) {
        echo '<a href="elem.php?index=">A tömb '.$i.' eleme</a>';
        echo '<br>';
    }
?>
<a href="feltoltes.php?szam=5">Tömb feltöltése 5 ranndom számmal</a>
<br>
<a href="feltoltes.php?szam=10">Tömb feltöltése 10 ranndom számmal</a>
<br>
<a href="feltoltes.php?szam=15">Tömb feltöltése 15 ranndom számmal</a>
<br>
<a href="feltoltes.php?szam=20">Tömb feltöltése 20 ranndom számmal</a>
<br>
<a href="torles.php">Törlés</a>