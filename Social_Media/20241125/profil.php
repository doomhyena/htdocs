<?php

	require "config.php";

    $userid = $_GET['userid'];

    $lekerdezes = "SELECT * FROM users WHERE id=$userid";
    $talalt_felhasznalo = $conn->query($lekerdezes);
    $felhasznalo = $talalt_felhasznalo->fetch_assoc();

    echo '<a href="index.php">Főoldal</a>';

    echo "<h1>$felhasznalo[username] profilja</h1>";

?>

<!DOCTYPE html>
<html>
   <head>
       <title>Profil</title>
       <meta charset='UTF-8'>
       <meta name='description' content='Rövid leírás az oldal tartalmáról'>
       <meta name='keywords' content='Keresést, Segítő, Szavak, Vesszővel, Elválasztva'>
       <meta name='author' content='Neved'>
       <meta name='viewport' content='width=device-width, initial-scale=1.0'>
       <link rel='icon' href='pics/favicon.ico' type='image/x-icon'>
	   <link rel='stylesheet' type='text/css' href='css/style.css'>
       <link rel='stylesheet' href='http://huncoder.hu/files/huncoder-styles-1-0.css'
	   <link rel='stylesheet' href='http://huncoder.hu/files/huncoder-scripts-1-0.js'> 
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

