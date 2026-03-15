<?php

require 'config/database.php';

if($_POST){

$name=$_POST['name'];
$email=$_POST['email'];
$department=$_POST['department'];
$password=password_hash($_POST['password'],PASSWORD_DEFAULT);
$role=$_POST['role'];

$stmt=$pdo->prepare("INSERT INTO users(name,email,department,password,role)
VALUES(?,?,?,?,?)");

$stmt->execute([$name,$email,$department,$password,$role]);

header("Location:login.php");

}

?>

<form method="POST">

<input name="name" placeholder="Full Name">

<input name="email" placeholder="Email">

<input name="department" placeholder="Department">

<input type="password" name="password">

<select name="role">

<option>Employee</option>
<option>Technician</option>

</select>

<button type="submit">Register</button>

</form>
