<?php

    $env=parse_ini_file(__DIR__ . '/.env');

    define('DB_HOST', $env['Host']);
    define('DB_User', $env['UserName']);
    define('DB_Password', $env['Password']);
    define('DB_dbName', $env['dbName']);
    
    $conn= new mysqli(DB_HOST,DB_User,DB_Password,DB_dbName);

    if($conn->connect_errno){
        die("Work in progress");
    }
?>