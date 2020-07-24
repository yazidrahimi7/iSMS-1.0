<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Create Scheduler</title>
</head>



<body style="background-color:powderblue;">

<form method="post" action="index.php">
    <input type="submit" value="Back" />
    </form>
<center>
<center>
<h1>Create Scheduler</h1>
<p>Please log in to isms.com.my and find SMS > Task Scheduler to view task created</p>
<!-- create_scheduler.php -->
<form method="post" action="create_scheduler.php">
	
    <?php
	include"connection.php";
   if(isset($_POST["btnLater"])){ 
  	$rowCount = count($_POST['id']);
	for($i=0;$i<$rowCount;$i++) {
		
$result = mysqli_query($connection,"SELECT * FROM `table 2` WHERE id ='" . $_POST["id"][$i] . "'");
		$row[$i] = mysqli_fetch_array($result);
		
	?>
    <input type="hidden" name="id[]" value="<?php echo $row[$i]['id']; ?>"> 
    
    Destinasi<br><input name="dest[]" type="text" placeholder="Exp. 60123456789" required value="<?php echo $row[$i]['Phone_No']; ?>">
<br>  
     <br>
    <label style="vertical-align:top">    
   
       Message</label><br>
    <textarea name="msg[]" id="msg" rows="25" cols="50">Due to your busy schedule on insurance, a friendly reminder for you to renewal insurance and roadtax,
    
Message from lorem ipsum your vehicle <?php echo $row[$i]['Plate_No']; ?>(<?php echo $row[$i]['Customer_Name']; ?>) will be expired on <?php echo $row[$i]['Expired_Date']; ?>. Total cost RM<?php echo $row[$i]['Price']; ?>.
   
Please contact us at lorem ipsum. Thank you.</textarea><br />
    
    <label>_______________________________________________</label>
 
     <br><br />
<?php
	}}
	?>
<br />
     <label>Trigger </label>
     <select name="tr">
     <option value="onetime">One Time</option>
     <option value="daily">Daily</option>
     <option value="weekly">Weekly</option>
     <option value="monthly">Monthly</option>
     </select>
		
     <input type="date" name="date" required />
     
     <br /><br />
     <label>at </label>
     
     <select name="hour">
     <option value="01">01</option>
     <option value="02">02</option>
     <option value="03">03</option>
     <option value="04">04</option>
     <option value="05">05</option>
     <option value="06">06</option>
     <option value="07">07</option>
     <option value="08">08</option>
     <option value="09">09</option>
     <option value="10">10</option>
     <option value="11">11</option>
     <option value="12">12</option>     
     </select>
     
     <select name="min">
     <option value="00">00</option>
     <option value="15">15</option>
     <option value="30">30</option>
     <option value="45">45</option>
     </select>
     
     <select>
     <option value="a.m">a.m</option>
     <option value="p.m">p.m</option>
     </select>
     
     <br /><br />
     
     <input type="submit" name="submit" value="Send">
  </form>
  <br /><br /><br />
</body>
</html>
