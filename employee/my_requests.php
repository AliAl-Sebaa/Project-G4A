<?php
require_once '../config/database.php';

if(!isset($_SESSION['user_id'])){
header("Location: ../login.php");
}

$user_id=$_SESSION['user_id'];

$stmt=$pdo->prepare("SELECT * FROM requests WHERE user_id=? ORDER BY created_at DESC");
$stmt->execute([$user_id]);

$requests=$stmt->fetchAll();
?>

<h2>My Requests</h2>

<a href="create_request.php">Create Request</a>

<table border="1">

<tr>
<th>Ticket</th>
<th>Category</th>
<th>Status</th>
<th>Date</th>
<th>View</th>
</tr>

<?php foreach($requests as $r){ ?>

<tr>

<td><?php echo $r['ticket_id']; ?></td>

<td><?php echo $r['category']; ?></td>

<td><?php echo $r['status']; ?></td>

<td><?php echo $r['created_at']; ?></td>

<td>

<a href="view_request.php?id=<?php echo $r['id']; ?>">
Open
</a>

</td>

</tr>

<?php } ?>

</table>

<a href="dashboard.php">Back</a>