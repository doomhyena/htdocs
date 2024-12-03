<?php
    session_start();

    if (!isset($_SESSION['felhasznalok'])) {
        $_SESSION['felhasznalok'] = array();
    }

    if (!isset($_SESSION['felhasznalo'])) {
        header("Location: login.php");
        exit;
    }
    echo "<h1>Üdvözöljük, " . htmlspecialchars($_SESSION['felhasznalo']) . "!</h1>";
?>
<hr>

<form method="POST">
    <input type="text" name="text" placeholder="Írj ide valamit...">
    <input type="submit" name="post-btn" value="Posztolás">
</form>

<hr>
<?php
    for ($i = 0; $i < count($_SESSION['posztok']); $i++) {
        echo '        
        <p>
        <a href="profil.php?iro="><b>'. $_SESSION['posztok'][$i]['iro'] .'</b></a>
        <br>
        <a>'. $_SESSION['posztok'][$i]['szoveg'] .'</a>
        </p>
        ';
        
    }
?>
