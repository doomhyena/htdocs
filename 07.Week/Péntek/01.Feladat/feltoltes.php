<?php

session_start();

if (!isset($_SESSION['tomb'])) {
    $_SESSION['tomb'] = array();
}

while (count($_SESSION['tomb']) < 50) {
    $rando = rand(0, 1000);

    if (!in_array($rando, $_SESSION['tomb'])) {
        $_SESSION['tomb'][] = $rando;
    }
}

/* 

session_start();

$maxhossz = count($_SESSION['tomb'])+50

if (!isset($_SESSION['tomb'])) {
    $_SESSION['tomb'] = array();
}

while (count($_SESSION['tomb']) < $maxhossz) {
    $rando = rand(0, 1000);

    if (!in_array($rando, $_SESSION['tomb'])) {
        $_SESSION['tomb'][] = $rando;
    }
}

*/

?>

<a href="index.php">Főoldal</a>