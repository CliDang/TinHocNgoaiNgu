<?php
    define('DATABASE_SERVER', 'localhost');
    define('DATABASE_USER', 'root');
    define('DATABASE_PASSWORD', '');
    define('DATABASE_NAME', 'tinhocngoaingu');
    $conn = null;
    try{
        $conn = new PDO ("mysql:host=".DATABASE_SERVER.";dbname=".DATABASE_NAME, DATABASE_USER, DATABASE_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo "Failed".$e->getMessage();
    }
    
?>