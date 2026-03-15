<?php

require '../config/database.php';

if($_SESSION['role']!="Admin"){

header("Location:../login.php");

}

?>

<h1>Admin Dashboard</h1>

<a href="../logout.php">Logout</a>
