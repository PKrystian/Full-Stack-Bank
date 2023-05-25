<?php
    $servername = getenv("SERVER");
    $username = getenv("USERNAME");
    $password = getenv("PASSWORD");
    $database = getenv("DATABASE"); // database name

    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
?>