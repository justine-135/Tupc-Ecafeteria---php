<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    
    try{
        $conn = new PDO('mysql:host = $servername;', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        echo 'connected!';
    }
    catch(PDOException $e){
        echo $sql. '<br>'. $e->getMessage();
    }
    $conn = null;
?>

<!--
Item is: echo $_POST['food']
    

    $servername = 'localhost';
    $username = 'root';
    $password = '';

    try{
        $conn = new PDO('mysql: host=$servername; dbname=webApp', $username, $password);
        $conn
    }
-->