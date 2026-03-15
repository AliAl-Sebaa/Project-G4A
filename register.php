<?php
require_once 'config/database.php';

if($_SERVER['REQUEST_METHOD']=="POST"){

$name=$_POST['name'];
$email=$_POST['email'];
$pass=password_hash($_POST['password'],PASSWORD_DEFAULT);

$stmt=$pdo->prepare("INSERT INTO users(full_name,email,password) VALUES(?,?,?)");

$stmt->execute([$name,$email,$pass]);

header("Location: login.php");

}
?>

<form method="POST">

<h2>Create Account</h2>

<input name="name" placeholder="Name">

<input name="email" placeholder="Email">

<input name="password" type="password" placeholder="Password">

<button>Register</button>

</form>