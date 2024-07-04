<?php

echo "CONNECTION FUNCTION RUN! ! !\n";

    $db_host = "127.0.0.1:3306"; // host database
    $db_username = "phasenol";
    $db_password = "phasenol";
    $db_name = "phase_0";

    // create connection to DB
    $conn = new mysqli($db_host, $db_username, $db_password, $db_name);

    if ($conn->connect_error){
        die("Connection Failed");
    }
    echo "Connection Successful!\n";
?>