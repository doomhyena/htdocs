<?php

    session_start();

    for ($i = 0; $i < 50; $i++) {
        $randomNumber = rand(0, 1000);
        if ($randomNumber % 2 == 0) {
            $_SESSION['tomb'][] = $randomNumber;
        } else {
            $i--;
        }
    }
    
?>

<a href="index.php">Főoldal</a>