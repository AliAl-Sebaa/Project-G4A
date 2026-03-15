<?php
require_once '../config/database.php';

$id=$_GET['id'];

$stmt=$pdo->prepare("SELECT * FROM requests WHERE id=?");
$stmt->execute([$id]);
$request=$stmt->fetch();
?>

<h2>Ticket #<?php echo $request['ticket_id']; ?></h2>

<p><b>Type:</b> <?php echo $request['request_type']; ?></p>

<p><b>Category:</b> <?php echo $request['category']; ?></p>

<p><b>Description:</b> <?php echo $request['description']; ?></p>

<p><b>Status:</b> <?php echo $request['status']; ?></p>

<a href="dashboard.php">Back</a>