<?php
    session_start();

    $ertek = $_GET['szam'];

    if ($ertek == 5 || $ertek == 10 || $ertek == 15 || $ertek == 20) {
        $_SESSION['tomb'] = [];
        for ($i = 0; $i < $ertek; $i++) {
            $randomNumber = rand(0, 1000);
            $_SESSION['tomb'][] = $randomNumber;
        }
    }

?>
<a href="index.php">Főoldal</a>
<a href="torles.php">Törlés</a>