<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Display Customer</title>
</head>
     <?php
// ob_start();
// session_start();
// if(!isset($_SESSION['username'])) header("location: login.php");
// include "connection.php";

?>


<body style="background-color:powderblue;">
<form method="post" action="index.php">
<input type="submit" value="Back" />
</form>

     <center>
       <center>
     <section id="motor">
       <p style="font-family:Heavitas;">Sending Message</p>
  
  
<p></p>


 <!-- api_post.php -->
  <form action="#" method="post" name=""><br>
  <?php
  
  	$rowCount = count($_POST['id']);
	for($i=0;$i<$rowCount;$i++) {
		
$result = mysqli_query($connection,"SELECT * FROM `table 2` WHERE id ='" . $_POST["id"][$i] . "'");
		$row[$i] = mysqli_fetch_array($result);
	?>
	<table>
    <tr><td>
	<input type="hidden" name="id[]" value="<?php echo $row[$i]['id']; ?>"><?php /*?><?php echo $row[$i]['id']; ?> )<?php */?>
	
	
     Destinasi<br><input name="dest[]" id="dest" type="text" placeholder="Exp. 60123456789" required value="<?php echo $row[$i]['Phone_No']; ?>">
<br>  
     <br>
    <label style="vertical-align:top">    
   
    Message</label><br>
    <textarea name="msg[]" id="msg" rows="25" cols="50">Lorem ipsum <?php echo $row[$i]['Plate_No']; ?>(<?php echo $row[$i]['Customer_Name']; ?>) will be expired on <?php echo $row[$i]['Expired_Date']; ?>. Total cost RM<?php echo $row[$i]['Price']; ?>.
   
Please lorem ipsum</textarea><br /> 
    
    <label>_______________________________________________</label>
     <br><br>
 <!--    Type : <input type="radio" name="type" value="1" checked> ASCII <input type="radio" name="type" value="2"> Unicode<br><br>-->
     <br>
</td></tr>
 </table> 
 <?php
	}
 ?>
     <!-- ascii=bahasa melayu, bahasa inggeris unicode=tulisan jepun, arab, chinese -->
     
     <input type="submit" name="submit" value="Send">
     </form>
      </section>
   
   
      </div>
    
   <?php
// mysqli_close($connection);
// ob_end_flush();
?>



</body>
</html>