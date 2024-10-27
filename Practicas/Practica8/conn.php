<?php 
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'prueba';

    $con = new mysqli($host, $username, $password, $dbname);

    if (mysqli_connect_errno()){
        echo "Failed to connecto yo MySQL: " . mysqli_connect_error();
    }