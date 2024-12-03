<?php


    $conn = new mysqli("localhost", "root", "", "013_csontoskincso_1");


    if ($conn->connect_error) {

        die("Sikeretlen kapcsolás: " . $conn->connect_error);
    }

?>