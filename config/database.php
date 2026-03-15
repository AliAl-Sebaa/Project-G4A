<?php
$host = "localhost";
$db_name = "key_it_maintenance";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
} catch(PDOException $e) {
    $pdo = null;
}

if(session_status() === PHP_SESSION_NONE){
    session_start();
}
?>
