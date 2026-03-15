<?php

require 'config/database.php';

if($_POST){

$name = $_POST['name'];
$email = $_POST['email'];
$department = $_POST['department'];
$password = password_hash($_POST['password'],PASSWORD_DEFAULT);
$role = $_POST['role'];

$stmt = $pdo->prepare("
INSERT INTO users(name,email,department,password,role)
VALUES(?,?,?,?,?)
");

$stmt->execute([$name,$email,$department,$password,$role]);

header("Location: login.php");

}

?>

<!DOCTYPE html>
<html>

<head>

<title>Register</title>

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card p-4 mx-auto" style="max-width:500px">

<h3 class="text-center">Create Account</h3>

<form method="POST">

<input class="form-control mb-3" name="name" placeholder="Full Name">

<input class="form-control mb-3" name="email" placeholder="Email">

<input class="form-control mb-3" name="department" placeholder="Department">

<input class="form-control mb-3" type="password" name="password" placeholder="Password">

<select class="form-control mb-3" name="role">

<option>Employee</option>
<option>Technician</option>

</select>

<button class="btn btn-success w-100">Register</button>

</form>

</div>

</div>

</body>

</html>
