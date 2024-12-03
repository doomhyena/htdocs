<?php

    session_start();

    $ertek =  $_POST['index'];

    echo $_SESSION['tomb'][$ertek];


?>

<a href="index.php">Főoldal</a>