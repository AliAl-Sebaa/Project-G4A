<?php
require_once '../config/database.php';

if(!isset($_SESSION['user_id'])){
header("Location: ../login.php");
}
?>

<h1>Employee Dashboard</h1>

<a href="create_request.php">Create Request</a>

<a href="../logout.php">Logout</a>