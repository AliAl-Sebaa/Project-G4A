<?php
$host = "localhost";
$db = "key_it_maintenance";
$user = "root";
$pass = "";

try{
$pdo = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
echo $e->getMessage();
}

session_start();
?>