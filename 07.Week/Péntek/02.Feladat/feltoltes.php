<?php
    session_start();

    $link = $_GET['szam'];
    $maxhossz = count($_SESSION['tomb'])+$link;

    if (!isset($_SESSION['tomb'])) {
        $_SESSION['tomb'] = array();
    }

    while (count($_SESSION['tomb']) < $maxhossz) {
        $rando = rand(0, 1000);

        if (!in_array($rando, $_SESSION['tomb'])) {
            $_SESSION['tomb'][] = $rando;
        }
    }
    echo "Feltöltés kész!";
    echo '<br>'
?>

<a href="index.php">Főoldal</a>