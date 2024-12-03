<?php

    session_start();

    if(isset($_POST['login-btn'])) {
        for ($i = 0; $i < count($_SESSION['felhasznalok']); $i++) {
            if($_SESSION['felhasznalok'][$i]['felhasznalonnev'] == $_POST['username']) {
                if($_SESSION['felhasznalok'][$i]['jelszo'] == $_POST['password']) {
                    $_SESSION['felhasznalo'] = $_POST['username'];
                    header('Location: index.php');
                } else {
                    echo "Helytelen jelszó!";
                }
            }
        }
    }

?>

<h1>Bejelentkezs</h1>


<form method="post">
    <input type="text" name="username" placeholder="Felhasználónnév">
    <br>
    <input type="text" name="password" placeholder="Jelszó">
    <br>
    <input type="submit" name="login-btn" value="Bejelentkezés">
</form>

<a href="reg.php">Regisztráció</a>