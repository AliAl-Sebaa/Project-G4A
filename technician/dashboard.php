<?php
require_once '../config/database.php';

if($_SESSION['role']!="Technician"){
header("Location: ../login.php");
}

$tech_id=$_SESSION['user_id'];

$stmt=$pdo->prepare("SELECT * FROM requests WHERE technician_id=?");
$stmt->execute([$tech_id]);

$tasks=$stmt->fetchAll();
?>

<h1>Technician Dashboard</h1>

<table border="1">

<tr>

<th>Ticket</th>
<th>Category</th>
<th>Status</th>
<th>Open</th>

</tr>

<?php foreach($tasks as $t){ ?>

<tr>

<td><?php echo $t['ticket_id']; ?></td>

<td><?php echo $t['category']; ?></td>

<td><?php echo $t['status']; ?></td>

<td>

<a href="view_request.php?id=<?php echo $t['id']; ?>">
View
</a>

</td>

</tr>

<?php } ?>

</table>

<a href="../logout.php">Logout</a>