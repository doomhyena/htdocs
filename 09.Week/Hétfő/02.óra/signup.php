<?php

    session_start();

    if(isset($_POST['gomb'])) {
        $uj_felhasznalo = array();

        $uj_felhasznalo['felhasznalonev'] = $_POST['username'];
        $uj_felhasznalo['jelszo'] = $_POST['password'];

        // $array[] = $new_element
        $uj_felhasznalo[] = $_SESSION['felhasznalok'];

        header("Location: login.php");
    }

?>

<h1>Regisztráció</h1>

<form>
    <input type ="text" name="username" placeholder="Felhasználónév">
    <input type="password" name="password"  placeholder="Jelszó">
    <input type="submit" name="gomb" placeholder="Regisztráció">

</form>

<a>Van már fiókod?</a ><a href="login.php">Jelentkezz be!</a>