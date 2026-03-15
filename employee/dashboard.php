<?php

require '../config/database.php';

if($_SESSION['role']!="Employee"){
header("Location:../login.php");
}

?>

<h1>Employee Dashboard</h1>

<a href="../logout.php">Logout</a>
