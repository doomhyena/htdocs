<?php
    session_start();

    $nevek = array('András', 'Béla', 'Csongor', 'Dénes', 'Emese', 'Ferenc', 'Gréta');
    for ($i = 0; $i < count($nevek); $i++) {
        $uj_tomb = array();
        $uj_tomb[] =  $nevek[$i];

        for ($i = 0; $i < 10; $i++) {
            $randomszam = rand(1, 5);

            $uj_tomb[] = $randomszam;
        }
        $_SESSION['napló'][] = $uj_tomb;

    }
?>

<a href="index.php">Főoldal</a>
