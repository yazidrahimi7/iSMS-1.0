<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Client Added</title>
</head>

<body style="background-color:powderblue;">
<?php

include('connection.php');


$var_Issue_Date=$_POST['Issue_Date']; 
$var_Customer_Name=$_POST['Customer_Name']; 
$var_Plate_No=$_POST['Plate_No']; 
$var_Phone_No=$_POST['Phone_No'];
$var_Expired_Date=$_POST['Expired_Date'];
$var_Price=$_POST['Price'];
$var_Status_Payment=$_POST['Status_Payment'];
$var_SMS=$_POST['SMS'];

//insert data
$result = mysqli_query($connection, "INSERT INTO `table 2`(Issue_Date,Customer_Name,Plate_No,Phone_No,Expired_Date,Price,Status_Payment,SMS) VALUES ('$var_Issue_Date','$var_Customer_Name','$var_Plate_No',$var_Phone_No,'$var_Expired_Date','$var_Price','$var_Status_Payment','SMS')" );

//checking success or not  
if ($result){
	//echo "Data recorded";
	header ("location:index.php?status=Success'");
	}
else {
	echo "Problem occured ".mysqli_error($connection);
}

mysqli_close($connection); 	
?>

<center>
<br />
<form method="post" action="Add.html">
<input type="submit" value="Insert Another Record">
</form><br />
<form method="post" action="index.php">
<input type="submit" value="Main Page">
</form>
</center>




</body>
</html>