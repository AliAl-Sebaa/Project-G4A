<?php
require_once 'database.php';

if(!isset($_SESSION['user_id'])){
header("Location: ../login.php");
exit();
}
?>