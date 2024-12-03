<?php
    session_start();

    if (isset($_POST['reg-btn'])) {
        $vane = false;
        for ($i = 0; $i < count($_SESSION['felhasznalok']); $i++) {
            if ($_SESSION['felhasznalok'][$i]['felhasznalonev'] == $_POST['username']) {
                $vane = true;
                break;
            }
        }

        if ($vane = false) {
            echo "Ilyen fiók van már!";
        } else {
            $uj_felhasznalo = array();
            $uj_felhasznalo['felhasznalonev'] = $_POST['username'];
            $uj_felhasznalo['jelszo'] = $_POST['password'];

            $_SESSION['felhasznalok'][] = $uj_felhasznalo;

            header('Location: login.php');
        }
    }
?>

<h1>Regisztráció</h1>

<form method="post">
    <input type="text" name="username" placeholder="Felhasználónév" required>
    <br>
    <input type="password" name="password" placeholder="Jelszó" required>
    <br>
    <input type="submit" name="reg-btn" value="Regisztráció">
</form>

<a href="login.php">Bejelentkezés</a>
