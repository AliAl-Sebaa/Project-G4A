<?php

require 'config/database.php';

$error = "";

if($_SERVER['REQUEST_METHOD']=="POST"){

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $pdo->prepare("SELECT * FROM users WHERE email=?");
$stmt->execute([$email]);

$user = $stmt->fetch();

if($user && password_verify($password,$user['password'])){

$_SESSION['user_id'] = $user['id'];
$_SESSION['role'] = $user['role'];
$_SESSION['name'] = $user['name'];

if($user['role']=="Admin") header("Location: admin/dashboard.php");
if($user['role']=="Employee") header("Location: employee/dashboard.php");
if($user['role']=="Technician") header("Location: technician/dashboard.php");

exit();

}else{

$error = "Invalid login credentials";

}

}

?>

<!DOCTYPE html>
<html>

<head>

<title>Login</title>

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card p-4 mx-auto" style="max-width:400px">

<h3 class="text-center">Login</h3>

<?php if($error) echo "<div class='alert alert-danger'>$error</div>"; ?>

<form method="POST">

<input class="form-control mb-3" name="email" placeholder="Email">

<input class="form-control mb-3" type="password" name="password" placeholder="Password">

<button class="btn btn-primary w-100">Login</button>

</form>

</div>

</div>

</body>

</html>
