<?php

    session_start();

    if(isset($_POST['gomb'])) {
        for ($i = 0; $i < count($_SESSION['szövegek']); $i++) {
            if($_SESSION['szövegek'][$i]['felhasználónév'] === $_POST['username']) {
                if($_SESSION['szövegek'][$i]['Jelszó'] === $_POST['password']) {
                    //echo "Sikeres bejelentkezés!";
                    header("Location: index.php");
                }
            }
        }
    }

?>

<form method="post">
    <input type="text" name="username" placeholder="Felhasználónév">
    <br>
    <input type="password" name="password" placeholder="Jelszó">
    <br>
    <input type="submit" name="gomb" value="Bejelentkezés">
</form>

<a href="torles.php"> Törlés </a>
<br>
<a href="felhasznalok.php"> Felhasználók </a>
<br>
<a href="index.php"> Főoldal </a>