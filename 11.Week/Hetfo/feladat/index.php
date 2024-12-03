<?php
    require('cfg.php');

    session_start();

    if(!isset($_SESSION['felhasznalo'])) {
        header("Location: login.php");    
    }
    echo "<h1>Üdv, $_SESSION[felhasznalo]!</h1>";

    if(isset($_POST['post_btn'])) {
        $username = $_SESSION['felhasznalo'];
        $text = $_POST['text'];
        $conn->query("INSERT INTO uzenetek (username, text) VALUES ('$username', '$text')");
        // Visszaadja az üzeneteket a JavaScript kódnak
        $lekerdezes = "SELECT * FROM uzenetek";
        $talalt_sorok = $conn->query($lekerdezes);
        $uzenetek = array();
        while($sor = $talalt_sorok->fetch_assoc()) {
            $uzenetek[] = $sor;
        }
        echo json_encode($uzenetek);
        exit;
    }
?>

<hr>

<form method="POST">
    <input type="text" name="text" placeholder="Írj ide valamit...">
    <input type="submit" name="post-btn" value="Posztolás">
</form>

<hr>
<div id="uzenetek">
    <?php
        $lekerdezes = "SELECT * FROM uzenetek";
        $talalt_sorok = $conn->query($lekerdezes);
        while($sor = $talalt_sorok->fetch_assoc()) {
            echo "<p>$sor[username]: $sor[text]</p>";
        }
    ?>
</div>