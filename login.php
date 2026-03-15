<?php
require_once 'config/database.php';

if($_SERVER['REQUEST_METHOD']=="POST"){

$email=$_POST['email'];
$password=$_POST['password'];

$stmt=$pdo->prepare("SELECT * FROM users WHERE email=?");
$stmt->execute([$email]);

$user=$stmt->fetch();

if($user && password_verify($password,$user['password'])){

$_SESSION['user_id']=$user['id'];
$_SESSION['role']=$user['role'];

header("Location: employee/dashboard.php");

}else{
$error="Wrong login";
}

}
?>

<form method="POST">

<h2>Login</h2>

<?php if(isset($error)) echo $error; ?>

<input name="email" placeholder="Email">

<input type="password" name="password" placeholder="Password">

<button>Login</button>

</form>