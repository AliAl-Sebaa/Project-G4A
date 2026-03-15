<?php
require_once '../config/database.php';

$req=$pdo->query("SELECT * FROM requests")->fetchAll();
?>

<h2>All Requests</h2>

<table border="1">

<tr>

<th>Ticket</th>
<th>Status</th>

</tr>

<?php foreach($req as $r){ ?>

<tr>

<td><?php echo $r['ticket_id']; ?></td>

<td><?php echo $r['status']; ?></td>

</tr>

<?php } ?>

</table>