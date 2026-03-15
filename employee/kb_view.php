<?php
require_once '../config/database.php';

$articles=$pdo->query("SELECT * FROM knowledge_base")->fetchAll();
?>

<h2>Knowledge Base</h2>

<?php foreach($articles as $a){ ?>

<h3><?php echo $a['title']; ?></h3>

<p><?php echo $a['content']; ?></p>

<hr>

<?php } ?>