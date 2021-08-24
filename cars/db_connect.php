<?php

    $conn = new mysqli("localhost", "root", "", "cars");

    if(!$conn) {
        die("Connection failed. " .  mysqli_connect_error());
    }



?>