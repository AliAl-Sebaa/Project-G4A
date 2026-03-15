<?php

require 'config/database.php';

if($_POST){

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $pdo->prepare("SELECT * FROM users WHERE email=?");

$stmt->execute([$email]);

$user = $stmt->fetch();

if($user && password_verify($password,$user['password'])){

$_SESSION['user_id']=$user['id'];
$_SESSION['role']=$user['role'];

if($user['role']=="Admin") header("Location: admin/dashboard.php");

if($user['role']=="Employee") header("Location: employee/dashboard.php");

if($user['role']=="Technician") header("Location: technician/dashboard.php");

}

}

?>

<form method="POST">

<input type="email" name="email" placeholder="Email">

<input type="password" name="password" placeholder="Password">

<button type="submit">Login</button>

</form>
