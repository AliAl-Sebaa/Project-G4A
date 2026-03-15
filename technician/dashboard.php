<?php

require '../config/database.php';

if($_SESSION['role']!="Technician"){
header("Location:../login.php");
}

?>

<h1>Technician Dashboard</h1>

<a href="../logout.php">Logout</a>
