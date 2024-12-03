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

    
    // Posztok tárolása
    if(!isset($_SESSION['posztok'])) {
        $_SESSION['posztok'] = array();
    }
    // Posz feltöltése
    if(isset($_POST['post-btn'])) {
        $uj_poszt = array();

        $uj_poszt['iro'] = $_SESSION['felhasznalo'];
        $uj_poszt['szoveg'] = $_POST['text'];
        $_SESSION['posztok'][] = $uj_poszt;
    }
?>
<hr>

<form method="POST">
    <input type="text" name="text" placeholder="Írj ide valamit...">
    <input type="submit" name="post-btn" value="Posztolás">
</form>

<hr>
<?php
    //print_r($_SESSION['posztok']);
    for ($i = 0; $i < count($_SESSION['posztok']); $i++) {
        echo '        
        <p style="border: 1px solid black; padding: 10px; width: 300px; margin: 10px auto;">
        <a href="profil.php?iro="'.$_SESSION['posztok'][$i]['iro'].'><b>'. $_SESSION['posztok'][$i]['iro'] .'</b></a>
        <br>
        <a>'. $_SESSION['posztok'][$i]['szoveg'] .'</a>
        </p>
        ';
        
    }
?>
