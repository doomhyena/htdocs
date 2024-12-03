<?php

    echo "<h1>9.Hét</h1>";
    echo "<h2>1.óra</h2>";
    echo "<h3>1.feladat</h3>";


    /*
    // Tömb vizsgálata
    if(isset($_POST['szövegek'])) {
        echo "<br>";
        $_SESSION['szövegek'][] =  $_POST['szöveg'];
    }

    // Számláló
    session_start();

    if(isset($_SESSION['szamlalo'])) {
        $_SESSION['szamlalo'] ++;
    } else {
        $_SESSION['szamlalo'] = 0;
    }
    echo  $_SESSION['szamlalo'];


    if(isset($_SESSION['szövegek'])) {
        print_r($_SESSION['szövegek']);
    } else {
        $_SESSION['szövegek'] = array();
    }

    // Gomb vizsgálása

    if(isset($_POST['gomb'])) {
        $uj_tomb = array();

        $uj_tomb['username'] = $_POST['username'];
        $uj_tomb['password'] = $_POST['passwword'];
    }

    
    // szövegek vizsgálata
    if(isset($_POST['szövegek'])) {
        echo "<br>";
        echo $_POST['szöveg'];
    }
    
    */
session_start();

if (!isset($_SESSION['szövegek'])) {
    $_SESSION['szövegek'] = array();
} else {
    print_r($_SESSION['szövegek']);
}

if (isset($_POST['gomb'])) {
    $uj_tomb = array();

    if (isset($_POST['username'])) {
        $uj_tomb['felhasználónév'] = $_POST['username'];
    } else {
        $uj_tomb['felhasználónév'] = '';
    }

    if (isset($_POST['password'])) {
        $uj_tomb['jelszó'] = $_POST['password'];
    } else {
        $uj_tomb['jelszó'] = ''; 
    }
}

?>

<form method="post">
    <input type="text" name="username" placeholder="Felhasználónév">
    <br>
    <input type="password" name="password" placeholder="Jelszó">
    <br>
    <input type="submit" name="gomb" value="Regisztráció">
</form>

<a href="torles.php"> Törlés </a>
<br>
<a href="felhasznalok.php"> Felhasználók </a>
<br>
<a href="bejelentkezes.php"> Bejelentkezes </a>