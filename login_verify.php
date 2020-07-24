<?php 
include('connection.php');
session_start();

if (isset($_POST['submit'])) {
	if (isset($_POST['username']) && isset($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = "SELECT * FROM tbllogin WHERE username='$username' and password = '$password'";
		
	$result = mysqli_query($connection,$sql);
	$count = mysqli_num_rows($result);

	if ($count == 1){
	$_SESSION['username'] = $username;
	
	header('Location: index.php');
	}
	else {
	header ('Location: login.php');
	$error = "invalid login";
	}
}

exit();
	}


?>