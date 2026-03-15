<?php
require_once '../config/database.php';

$users=$pdo->query("SELECT * FROM users")->fetchAll();
?>

<h2>Users</h2>

<table border="1">

<tr>

<th>Name</th>
<th>Email</th>
<th>Role</th>

</tr>

<?php foreach($users as $u){ ?>

<tr>

<td><?php echo $u['full_name']; ?></td>

<td><?php echo $u['email']; ?></td>

<td><?php echo $u['role']; ?></td>

</tr>

<?php } ?>

</table>