<?php

    session_start();

    if(isset($_POST['submit'])) {
        $_SESSION['felhasznalo'] = $_POST['username'];

        header('Location: index.php');
    }

?>

<form method="post">
    <input type="text" name="username" placeholder="Adj meg egy nevet">
    <input type="submit" name="submit" value="Küldés">
</form>