<?php
require_once 'config/database.php';

$notifications=$pdo->query("SELECT * FROM notifications")->fetchAll();

echo json_encode($notifications);
?>