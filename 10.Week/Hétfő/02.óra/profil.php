<?php

    session_start();

    $iro = $_GET['iro'];

    echo "<h1>$iro</h1>";

?>

<h3>Posztok:</h3>

<?php

    for ($i = 0; $i < count($_SESSION['posztok']); $i++) {
        if ($_SESSION['posztok'][$i]['iro'] == $iro) {
            echo "
            <p>
            <a>" . $_SESSION['posztok'][$i]['iro'] .": </a>
            <a>" . $_SESSION['posztok'][$i]['szoveg'] ."</a>
            </p>
            ";
        }
    }

?>

<a href="index.php">Főoldal</a>