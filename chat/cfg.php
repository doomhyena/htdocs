<?php


    $conn = new mysqli("localhost", "root", "", "13_chat");


    if ($conn->connect_error) {

        die("Sikeretlen kapcsolás: " . $conn->connect_error);
    }

?>