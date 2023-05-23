<?php
    $dotenv = parse_ini_file('.env');

    $servername = $dotenv["SERVER"];
    $username = $dotenv["USERNAME"];
    $password = $dotenv["PASSWORD"];
    $database = $dotenv["DATABASE"]; // database name

    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
?>