<?php
require_once '../config/database.php';

if(isset($_POST['add'])){

$title=$_POST['title'];
$content=$_POST['content'];

$stmt=$pdo->prepare("INSERT INTO knowledge_base(title,content) VALUES(?,?)");

$stmt->execute([$title,$content]);

}

?>

<h2>Add Article</h2>

<form method="POST">

<input name="title" placeholder="Title">

<textarea name="content"></textarea>

<button name="add">Add</button>

</form>