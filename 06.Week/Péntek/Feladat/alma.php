<?php

    session_start();

    for($i = 0; $i < 5; $i++){
        array_push($_SESSION['tomb2'], $i);
    }
    
?>

<a href="index.php">Főoldal</a>