<?php
/* 


*/

session_start();

if(isset($_SESSION['tomb'])) {
    print_r($_SESSION['tomb']);
} else {
    $_SESSION['tomb'] = array();
}

echo "<br>"


?>

<a href="torles.php">Törlés</a>
<a href="paros.php">Páros</a>
<a href="paratlan.php">Páratlan</a>
