<?php
require_once '../config/database.php';

if($_SESSION['role']!="Admin"){
header("Location: ../login.php");
}

$total=$pdo->query("SELECT COUNT(*) FROM requests")->fetchColumn();

$pending=$pdo->query("SELECT COUNT(*) FROM requests WHERE status='Pending'")->fetchColumn();

$users=$pdo->query("SELECT COUNT(*) FROM users")->fetchColumn();
?>

<h1>Admin Dashboard</h1>

<p>Total Requests: <?php echo $total; ?></p>

<p>Pending Requests: <?php echo $pending; ?></p>

<p>Total Users: <?php echo $users; ?></p>

<hr>

<a href="manage_requests.php">Manage Requests</a>

<br>

<a href="manage_users.php">Manage Users</a>

<br>

<a href="analytics.php">Analytics</a>

<br>

<a href="../logout.php">Logout</a>