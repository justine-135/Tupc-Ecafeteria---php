<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    try{
        $conn = new PDO("mysql:host=$servername", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "CREATE DATABASE 4jdb";
       $conn->exec($sql);
        echo "db created";
        }
    catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;


?>
