<?php


    $conn = new mysqli("localhost", "root", "", "013_csontoskincso_feladat");


    if ($conn->connect_error) {

        die("Sikeretlen kapcsolás: " . $conn->connect_error);
    }

?>