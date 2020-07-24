<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Infomation</title>
</head>
<style>
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: left;
    padding: 16px;
}

tr:nth-child(even) {
    background-color: #f2f2f2
}
</style>




<?php
	include("connection.php");
		$id = $_GET['id1'];
		
		$query = "SELECT * FROM `table 2` WHERE id = '$id'";
		$result = mysqli_query($connection,$query) or die("Select Error ".mysqli_error($connection));
		$row = mysqli_fetch_array($result);
		
		if(isset($_POST['btUpdate'])) {
			$Issue_Date = $_POST['Issue_Date'];
			$Customer_Name = $_POST['Customer_Name'];
			$Plate_No = $_POST['Plate_No'];
			$Phone_No = $_POST['Phone_No'];
			$Expired_Date = $_POST['Expired_Date'];
			$Price = $_POST['Price'];
			$Status_Payment = $_POST['Status_Payment'];
			$SMS = $_POST['SMS'];
			
			$sql = "UPDATE `table 2` SET Issue_Date='$Issue_Date',Customer_Name='$Customer_Name',Plate_No='$Plate_No',Phone_No='$Phone_No',Expired_Date='$Expired_Date',Price='$Price',Status_Payment='$Status_Payment',SMS='$SMS' WHERE id = $id";
			
			$result = mysqli_query($connection,$sql);
			
			if($result == TRUE) {
				header ("location:index.php");}
			else
				echo "Update Error :".mysqli_error($connection);
			}	
		?>

<body>
<body style="background-color:powderblue;">
<form method="post" action="index.php">
<input type="submit" value="Back" >
</form>
<center>
<div data-role="page" id="page">
	<div data-role="header" data-theme="b">
    
		<h3>Please fill in the blank</h3>
	</div>
</p></h3>
<br />
<div data-role="main" class="ui-content">

<form method="post" action="">
<div class="ui-field-contain">


<table width="100" border="1" style="text-align:center; background-color:white;">
<tr>
<tr bgcolor="#fdc61e">
 <td>Issue Date</td>
    <td>Customer Name</td>
    <td>Plate No.</td>
    <td>Phone No.</td>
    <td>Expired Date</td>
    <td>Price</td>
    <td>Status Payment</td>
    <td>SMS</td>
</tr>
<tr>
	<td><input type="date" name="Issue_Date" value="<?php echo $row['Issue_Date']; ?>"/></td>
    
   
    <td><input type="text" name="Customer_Name" value="<?php echo $row['Customer_Name']; ?>"/></td>
    
    <td><input type="text" name="Plate_No" value="<?php echo $row['Plate_No']; ?>" style="width: 80px;" id="Plate_No" onkeyup="myFunction()"/></td>
    
    <td><input type="number" name="Phone_No" value="<?php echo $row['Phone_No']; ?>" style="width: 110px;" /></td>
    
    <td><input type="date" name="Expired_Date" value="<?php echo $row['Expired_Date']; ?>"/></td>
    
    <td><input type="number" name="Price" value="<?php echo $row['Price']; ?>" style="width: 80px;"/></td>
    
    <td><input type="text" name="Status_Payment" value="<?php echo $row['Status_Payment']; ?>" style="width: 100px;"/></td>
    
    <td><input type="number" name="SMS" value="<?php echo $row['SMS']; ?>" style="width: 30px;"/></td>
    </tr></table></div>
<br />
  <input type="submit" name="btUpdate" data-inline="true" value="Update"><br /><br /></form>




<script>
function myFunction(){
	var x = document.getElementById("Plate_No");
	x.value = x.value.toUpperCase();
		
}
</script>



</body>
</html>