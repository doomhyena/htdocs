<?php // 2024/10/11

    session_start();

    $_SESSION['nev'] = "Csontos Kincső";

    if(isset($_SESSION['tomb'])) {
        print_r($_SESSION['tomb']);
    } else {
        $_SESSION['tomb'] = array();
    }
    
    echo "<br>"

?>

<a href="e.php">Másik</a>