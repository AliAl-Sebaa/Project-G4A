<?php

$host = "localhost";
$dbname = "key_it_maintenance";
$user = "root";
$pass = "";

try {

$pdo = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);

$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){

die("Database Error");

}

session_start();
