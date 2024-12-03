<?php
session_start();

if (isset($_GET['index'])) {
    $index = $_GET['index'];
    if (isset($_SESSION['tomb'][$index])) {
        $ertek = $_SESSION['tomb'][$index];
        if ($ertek % 4 == 0 && $ertek % 3 == 0) {
            echo "A(z) $ertek érték mind a kettővel osztható.";
        } else if ($ertek % 4 == 0) {
            echo "A(z) $ertek érték csak néggyel osztható.";
        } else if ($ertek % 3 == 0) {
            echo "A(z) $ertek érték csak hárommal osztható.";
        }
    }
}
?>

<br>
<a href="index.php">Főoldal</a>