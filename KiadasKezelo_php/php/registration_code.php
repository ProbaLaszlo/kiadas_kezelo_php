<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$fnev = $email = $jelszo = $pwd = '';

$nev = $_POST['username'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql = "INSERT INTO user (nev,email,jelszo) VALUES ('$nev','$email','$password')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: bejelentkezes.php");
}
else
{
	echo "Error :".$sql;
}
?>