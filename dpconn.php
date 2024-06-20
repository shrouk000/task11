<?php
$server ="localhost";
$username ="root";
$pw = "";
$dbname = "restuarant";
try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname",
    $username,
    $pw);

    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);
        echo"connection sussfully";



} catch(PDOException $e) 
{
    echo"Connectio failed:".$e->getMessage();    
}


?>