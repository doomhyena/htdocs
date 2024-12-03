<?php
session_start();

if (isset($_GET['index']) && is_numeric($_GET['index'])) {
    $index = (int)$_GET['index'];
    
    if (isset($_SESSION['nevek'][$index])) {
        $nev = $_SESSION['nevek'][$index];
        
        $ev = rand(1998, 2000);
        $honap = rand(1, 12);
        $nap = rand(1, 28);
        
        echo "Név: " . $nev . "<br>";
        echo "Születési dátum: " . $ev . "-" . str_pad($honap, 2, '0', STR_PAD_LEFT) . "-" . str_pad($nap, 2, '0', STR_PAD_LEFT);
    } else {
        echo "Nincs ilyen index.";
    }
} else {
    echo "Kérlek válassz egy nevet.";
}
?>