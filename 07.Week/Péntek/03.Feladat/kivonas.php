<?php

    session_start();

    if (!isset($_SESSION['szam'])) {
        $_SESSION['szam'] = 0;
    }

    $randomSzam = rand(1, 10);
    $alapErtek = $_SESSION['szam'];
    $_SESSION['szam'] -= $randomSzam; 

?>

<p>Alap érték: <?php echo $alapErtek; ?></p>
<p>Kivont szám: <?php echo $randomSzam; ?></p>
<p>Végeredmény: <?php echo $_SESSION['szam']; ?></p>

<a href="index.php">Főoldal</a>
