<?php
    //Creating a database connection
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "furaha_ebooks";

    $connection = new mysqli ($servername, $username, $password, $dbname);

    //Testing the connection
    /*if ($connection -> connect_error) {
        die ("Connection Failed " . $connection -> connect_error);
    } else {
            echo "Connected Successfull";
        }