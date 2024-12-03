<?php

	require "config.php";

    $userid = $_GET['userid'];

    $lekerdezes = "SELECT * FROM users WHERE id=$userid";
    $talalt_felhasznalo = $conn->query($lekerdezes);
    $felhasznalo = $talalt_felhasznalo->fetch_assoc();

    echo '<a href="index.php">Főoldal</a>';

    // Megvizsgáljuk, hogy mennnyien követik az adott felasználót

    $lekerdezes = "SELECT * FROM kovetok WHERE userid = $userid";
    $talalt_kovetok = $conn->query($lekerdezes);

    $kovetok_szama = mysqli_num_rows($talalt_kovetok);
    echo 'Követők: '.$kovetok_szama;
    echo '<br>';

    $lekerdezes = "SELECT * FROM kovetok WHERE koveto = $userid";
    $talalt_kovetesek = $conn->query($lekerdezes);

    $kovetesek_szama = mysqli_num_rows($talalt_kovetesek);

    echo 'Követett: '.$kovetesek_szama;

    echo "<h1>$felhasznalo[username] profilja</h1>";

?>

<!DOCTYPE html>
<html>
   <head>
       <title>Profil</title>
	   <meta charset='UTF-8'>
	   <meta name='description' content='Social Media'>
	   <meta name='keywords' content='a, b, c, d'>
	   <meta name='author' content='Csontos Kincső'>
	   <meta http-equiv="refresh" content="60"> <!-- 2 másodpercenként frissíti -->
	   <meta name='viewport' content='width=device-width, initial-scale=1.0'>
	   <link rel='icon' href='pics/favicon.ico' type='image/x-icon'> 
	   <link rel='stylesheet' type='text/css' href='css/style.css'>
   </head>
   <body>
    <hr>
    <h3>Posztok:</h3>
    <?php

        $lekerdezes = "SELECT * FROM posztok WHERE userid = $userid ORDER BY id DESC";
        $talalt_posztok = $conn->query($lekerdezes);

        while($poszt = $talalt_posztok->fetch_assoc()){

            $lekerdezes = "SELECT * FROM users WHERE id = $poszt[userid]";
            $talalt_iro = $conn->query($lekerdezes);
            $iro = $talalt_iro->fetch_assoc();

            echo "
            <p>
                $poszt[szoveg]
            </p>";


        }    
    ?>
    <footer>
        <p id='FooterP'>&copy; 2024 Csontos Kincső. Minden Jog fenntartva.</p>
    </footer>
   </body>
</html>

