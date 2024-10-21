<?php
    session_start();

    if(isset($_SESSION['napló'])) {
        for ($i = 0; $i < count($_SESSION('napló')); $i++) {
            echo '';
        }
    } else {
        $_SESSION['napló'] = array();
    }
?>