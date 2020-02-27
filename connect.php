<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "alumni";

    $connection = mysqli_connect($server, $username, $password);
    $dbconfig = mysqli_select_db($connection, $db);
?>