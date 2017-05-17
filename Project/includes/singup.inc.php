<?php
require 'conectare.php';
if(!empty($_POST['nume'])  && !empty($_POST['prenume']) && !empty($_POST['username']) && !empty($_POST['password']) 
	&& isset($_POST['nume'])&& isset($_POST['prenume']) && isset($_POST['username']) && isset($_POST['password']))
{
$nume= $_POST['nume'];
$prenume= $_POST['prenume'];
$username= $_POST['username'];
$password= $_POST['password'];
$password_hashed=password_hash($password,PASSWORD_DEFAULT);
$sql = "SELECT username FROM users WHERE username='$username'";
$result = mysqli_query($conectare,$sql);
$check=mysqli_num_rows($result);
 if($check>0)
 {
	 header("Location: ../singup.php?info=EXISTA");
	 die();
 }
else{
	

$sql = "INSERT INTO users (nume,prenume,username,password) VALUES ('$nume','$prenume','$username','$password')";
$result=mysqli_query($conectare,$sql);
header("Location: ../singup.php?info=ok");
}
else
{
	header("Location: ../singup.php?info=eroare");
}

?>