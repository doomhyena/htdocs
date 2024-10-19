<?php
    session_start();

    if (isset($_SESSION['tomb'])) {
        $tomb = $_SESSION['tomb'];
        $paratlanok = array();
        
        for ($i = 0; $i < count($tomb); $i++) {
            if ($i % 2 === 0) {
                $paratlanok[] = $tomb[$i];
            }
        }

        print_r($paratlanok);
        echo '<br>';
    } else {
        echo 'Nem létezik a tömb!';
    }
?>
<a href="index.php">Főoldal</a>