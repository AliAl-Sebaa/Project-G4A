<?php

require '../config/database.php';

if($_SESSION['role']!="Admin"){

header("Location:../login.php");

}

?>

<!DOCTYPE html>
<html>

<head>

<title>Admin Dashboard</title>

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>

<div class="sidebar">

<h4>Admin Panel</h4>

<a href="#">Dashboard</a>
<a href="#">Manage Users</a>
<a href="#">Requests</a>
<a href="../logout.php">Logout</a>

</div>

<div class="content">

<h2>Welcome Admin</h2>

</div>

</body>

</html>
