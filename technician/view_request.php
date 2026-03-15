<?php
require_once '../config/database.php';

$id=$_GET['id'];

$stmt=$pdo->prepare("SELECT * FROM requests WHERE id=?");
$stmt->execute([$id]);
$request=$stmt->fetch();
?>

<h2>Technician Ticket</h2>

<p>Ticket: <?php echo $request['ticket_id']; ?></p>

<p>Status: <?php echo $request['status']; ?></p>

<form method="POST">

<select name="status">

<option>Assigned</option>
<option>In Progress</option>
<option>Completed</option>

</select>

<button name="update">Update</button>

</form>