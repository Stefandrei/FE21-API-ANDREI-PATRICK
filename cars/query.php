<?php
    require_once 'db_connect.php';

    $sql = "SELECT * FROM car";

    $result = mysqli_query($conn, $sql);

    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    


    mysqli_close($conn)

?>