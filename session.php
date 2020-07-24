<?php
include('connection.php');
session_start();
$check=$_SESSION['login_username'];
$session=mysqli_select_db("SELECT username FROM tbllogin WHERE username='$check' ");
$row=mysqli_fetch_array($session);
$login_session=$row['username'];
if(!isset($login_session))
{
header("Location:index.php");
}
?>