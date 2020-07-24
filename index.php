     <html>
     <head>
     <title>iSMS 1.0</title>
     <meta http-equiv="Content-Type" content="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     </head>
     <?php

?>
<style>
 a:link {text-decoration: none; color:black;}
 a:visited {text-decoration: none;color:black;}
 a:hover {text-decoration: underline;color:black;}
 a:active {text-decoration: underline;color:black;}
 
 label {
	
	padding-top: 12px;
	padding-bottom: 12px;
	
	border: solid transparent 0px;
	color: transparent;
	user-select: none; 
 }
	
	/* header dan footer */
div.container {
	width: 100%;
	border: 1px solid gray;
	
}

html {
	position:relative;	
}

header {
	padding: 0.05em;
	color: white;
	background-color: black;
	clear: left;
}

footer{
	padding: 1em;	
	color: white;
	background-color: black;
	text-align: center;
	position: absolute;
	clear: left;	
	left: 0;
	bottom: 0;
	width: 100%;
	overflow: hidden;
	
}

	/* css topnav */
body {
	margin: 0 0 100px;
	padding: 0;
	overflow-x: hidden;	
}

.topnav {
  overflow: hidden;
  background-color: black;
  text-align:center;
}

.topnav a {
  float: left;
  color: #fff;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  transition: .3s background-color;
  display: inline-block;
}

.topnav a:hover {
  background-color: #fdc61e;
  color: white;
   border-bottom: 3px solid red;
}

.topnav a.active {
  background-color: #fdc61e;
   border-bottom: 3px solid red;
  color: black;
}
  /* end of css topnav */
  
  /* modal login check_balance */
 span.psw {
	float: right;	
}

.modal {
	display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px;
    left: 0;
    top: 0;
	overflow:auto;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

.modal-content {
	background-color: #fefefe;
    margin: auto;
	padding:20px;
	border:1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */	
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
  
  
  
  /* end of modal login check_balance */
  
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: center;
    padding: 2px;
}

tr:nth-child(even) {
    background-color: #f2f2f2
}

button {
	display: inline-block;
}

#btnSend,#btnLater {
	display:inline-block;
}
</style>



  
 
     <div class="container">
     <body style="background-color:powderblue;">
     
    <header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="/js/my.js"></script>
  <!--  style="vertical-align: left; --><center><img src="#" width="200" height="110" style="margin-left:70px;">

 <!-- text belah hujung kanan atas -->
   <span style="float:right; margin-right: 10px;">      <h4 align="center"><a style="color:#FFF;" href="logout.php">Logout</a> </h4>
</span></center>
     </header>
    </div>
    
    <script type="text/javascript">
$(document).ready(function () {
    $('#btnSend').click(function() {
      checked = $("input[type=checkbox]:checked").length;

      if(!checked) {
        alert("You must check at least one checkbox.");
        return false;
      }

    });
});
</script>
<script type="text/javascript">
$(document).ready(function () {
    $('#btnLater').click(function() {
      checked = $("input[type=checkbox]:checked").length;

      if(!checked) {
        alert("You must check at least one checkbox.");
        return false;
      }

    });
});

</script>
    
          <!-- topnav -->
      <div class="topnav">
<a class="active" href="#">Home</a>
      
<a onClick="document.getElementById('id01').style.display='block'" style="width:auto; cursor:pointer;">Balance</a>
       
    </div>

       </div>
       
      
       
       </div>
      <!-- end of top nav -->
      
    <br><br>  
    
    <div id="id01" class="modal">
    <div class="modal-content animate">
   
    <form action="check_balance.php" method="POST">
  
    	<b>Username iSMS</b>
        <input type="text" name="name">
      
        <b style="padding-left:1em;">Password iSMS</b>
        <input type="password" name="password">
     
        </p>
        <button type="submit" value="submit">Login</button> <a href="http://www.isms.com.my/forgot_password.php" style="text-decoration:none;"> Forgot password?</a></p>
      
      <div class="container" style="background-color:#f1f1f1">
      <p style="margin-left: 10px; font-weight: bold;">*Tekan diluar kotak untuk tutup* <br><br> Jika tidak dapat diakses atau error, login ke website <a href="http://www.isms.com.my/" style="color:blue;">iSMS account</a> console untuk menyemak baki kredit.</p></div>
      </form>
       </div>
        </div>
   
   <?php
	if(isset($_GET['id']))
		echo "Update Success<br>"
?>
<center>
<h2>List Client</h2>

<span> <h4 align="center"><a style="color:black;" href="Add.html">Add Client</a> </h4></span>

 


<form method="post" action="display.php" name="formSend" >
<div>
<input type="submit" name="btnSend" value="Send Messages" id="btnSend"/>
<input type="submit" formaction="scheduler.php" name="btnLater" value="Send Later" id="btnLater"/>
 
<p>
<table width="1100" border="1" style="text-align:center; background-color:white;">
  <tr>
<tr>
	<td style="width:30px;">&nbsp;</td>
	<th>Issue Date</th>
	<th>Customer Name</th>
    <th>Plate No.</th>
    <th>Phone No.</th>
    <th>Expired Date</th>
    <th>Price(RM)</th>
    <th style="width:100px;">Status Payment</th>
    <th>SMS</th>  
    <th colspan="2">Action</th>
</tr>

<?php
	include("connection.php");	
	$query = "SELECT * FROM `table 2`";
	$result = mysqli_query ($connection, $query) or die ("SELECT Error ". mysqli_error($connection));
	$i=1;
	while ($row = mysqli_fetch_array($result)) {
		?>
      
   <tr>  
   		<td style="width:30px;" ><label>aaa<input name="id[]" type="checkbox" value="<?php echo $row['id']; ?>" />aaa</label></td>
   		<td><?php echo $row['Issue_Date']; ?></td>
        <td style="text-align:left;"><?php echo $row['Customer_Name']; ?></td>
        <td><?php echo $row['Plate_No']; ?></td>
        <td><?php echo $row['Phone_No']; ?></td>
        <td><?php echo $row['Expired_Date']; ?></td>
        <td><?php echo $row['Price']; ?></td>
        <td style="width:100px;"><?php echo $row['Status_Payment']; ?></td>
        <td><?php echo $row['SMS']; ?></td>
        
   
   		<td width="69" style="text-decoration:none;">
	<?php echo "<a href=update.php?id1=".$row['id'].">". "Edit"; 
	?>
	</td>
	<td width="82" style="text-decoration:none;">
	<?php echo "<a href=confirm_delete.php?id2=".$row['id'].">". "Delete"; 
	?></td>
</tr>  
  <?php
	$i++;
	}	
	mysqli_close($connection);
	ob_end_flush();
  ?>
</table>
  </div>

  </form>
</center>
   
 <script>
 /*$(document).ready(function(){
	 $("form").submit(function(){
		 if($('input:checkbox').filter(':checked').length<1){
			 alert("Please check at least one!");
			 return false;
		 }
	 });
 });*/
 
var modal = document.getElementById('id01');
 window.onclick = function(event){
	 if(event.target == modal){
		 modal.style.display = "none";
	 }
 }
 


 
   
   
  </script>
   <footer> 	&copy; All Rights Reserved  </footer>
     </body>
     </html>