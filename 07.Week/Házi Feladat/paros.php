<?php

    session_start();

    for ($i = 0; $i < 10; $i++) {
        $randomNumber = rand(0, 1000);
        while ($randomNumber % 4 !== 0) {
            $randomNumber = rand(0, 1000);
        }
        $_SESSION['tomb'][] = $randomNumber;
    }

?>
<br>
<a href="index.php">Főoldal</a>