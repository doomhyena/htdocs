<?php

    session_start();

    if(!isset($_SESSION["felhasznalok"])) {
        $_SESSION['felhasznalok']  = array();
    }

    if(isset($_SESSION['felhasznalo'])) {
        header("Location: signup.php");
    }
?>

<hr>

<form method="post">
    <input type="text" name="text" placeholder="Írj ide valamt">
    <input type="submit" name="gomb" placeholder="Küldd el">
</form>