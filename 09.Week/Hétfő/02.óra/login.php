<?php

    session_start();

    if(isset($_POST['gomb'])) {
        for ($i = 0; $i < count($_SESSION['felhasznalok']); $i++) {
            if($_SESSION['felhasznalok'][$i]['felhasznalonev'] == $_POST['username']) {
                if($_SESSION['felhasznalok'][$i]['jelszo'] == $_POST['password']) {
                

                    $_SESSION['felhasznalo'] = $_POST['username'];

                    header('Location: index.php');

                }
            }
        }
    }

?>

<h1>Bejelentkezes</h1>

<form>
    <input type ="text" name="username" placeholder="Felhasználónév">
    <input type="password" name="password"  placeholder="Jelszó">
    <input type="submit" name="gomb" placeholder="Bejelentkezés">

</form>

<a>Még nincs fiókod?</a ><a href="signup.php">Regisztrálj!</a>