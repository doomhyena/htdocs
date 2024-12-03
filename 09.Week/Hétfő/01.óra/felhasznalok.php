<?php

    session_start();

    for ($i = 0; $i < count($_SESSION['szövegek']); $i++) {
        echo $_SESSION['szövegek'][$i]['felhasználónév'].'<br>';
    }

?>

<a href="index.php"> Főoldal </a>
