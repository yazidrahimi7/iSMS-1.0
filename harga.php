     <html>
     <head>
     <title>iSMS 1.0</title>
     <meta http-equiv="Content-Type" content="utf-8">
     </head>
     <?php
// ob_start();
// session_start();
// if(!isset($_SESSION['username'])) header("location: login.php");
// include "connection.php";

?>
<style>
 a:link {text-decoration: none; color:white;}
 a:visited {text-decoration: none;color:white;}
 a:hover {text-decoration: underline;color:white;}
 a:active {text-decoration: underline;color:white;}
	
	/* header dan footer */
div.container {
	width: 100%;
	border: 1px solid gray;
	
}

header {
	padding: 0.05em;
	color: white;
	background-color: black;
	clear: left;
}

footer {
	padding: 1em;	
	color: white;
	background-color: black;
	clear: left;
	text-align: center;	
}

	/* css topnav */
body {
	margin: 0;
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
}

.topnav a.active {
  background-color: #fdc61e;
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
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

.modal-content {
	background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
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
	</style>
     <div class="container">
     <body style="background-color:powderblue;">
     
    <header>
  <!--  style="vertical-align: left; --><center><img src="aam-logo-white.png" width="200" height="110">

 <!-- text belah hujung kanan atas -->
   <span style="float:right; margin-right: 10px;">      <h4 align="center"><a href="logout.php">Logout</a> </h4>
</span></center>
     </header>
    </div>
          <!-- topnav -->
      <div class="topnav">
<a class="active" href="#">Home</a>

<a href="index.php">Message1</a>
       
<a href="#TunjukHarga" style="cursor:pointer;">Message2</a>
        
<a onClick="document.getElementById('id01').style.display='block'" style="width:auto; cursor:pointer;">Balance</a>

<a href="#">Jadual</a>

<a href="display.php">Client</a>
	
       
    </div>

       </div>
       
      
       
       </div>
      <!-- end of top nav -->
      
    <br><br>  
    
    <div id="id01" class="modal">
    <div class="modal-content animate">
    <form action="check_balance.php" method="POST">
    <div class="container" style="padding:20px;">
    	<b>Username</b>
        <input type="text" name="name">
        
        <br><br>
        
        <label><b>Password </b></label>
        <input type="password" name="password">
        
        <br><br>
        <button type="submit" value="submit">Login</button>
      
      </div><div class="container" style="background-color:#f1f1f1">
      <p style="margin-left: 10px; font-weight: bold;">*Tekan diluar kotak untuk tutup* <br><br> Jika tidak dapat diakses atau mengalami error, sila ke website iSMS account console untuk menyemak baki kredit.</p></div>
      </form>
       </div>
    
        </div>
    
  
     <center>
       <center>
     <section id="TunjukHarga">
       <p style="font-family:Heavitas;">Sistem iSMS 1.0 Harga</p>
  
  
<table>  
        


     
   <tr>  
   <td style="text-align:right;">    Name : </td><td>
   <!-- <input name="cust" id="cust" type="text"> -->
   
  <select id="cust" name="cust" style="width:173px;"><option value="" disabled selected>-- Please select --</option>
  <?php
	$res=mysqli_query($connection,"SELECT * FROM `table 2`");
	$i = 1;
	while($row=mysqli_fetch_array($res))
{
?>
	<option><?php echo $row["Nama"]; ?></option>
 
   
<?php
 }   
   ?></select>
   
   
   
      </td><td>  <button onClick="myFunction1()">Masukkan</button></td>
    </tr>
  <tr>
<td style="text-align:right;">    Harga(RM) : </td><td>

 <select id="Harga" name="harga" style="width:173px;">
 <option value="" disabled selected>-- Please select --</option>
  <?php
	$res=mysqli_query($connection,"SELECT * FROM `table 2`");
	$i = 1;
	while($row=mysqli_fetch_array($res))
{
?>
	
	<option><?php echo $row["Harga"]; ?></option>
 
   
<?php
 }   
   ?></select></td>  

<td> 
 <button onClick="myFunction2()">Masukkan</button></td> 
</tr>
<tr>
    
  <td style="text-align:right;">
  </td>
  </table>
  <form action="api_post.php" method="post"><br>
     Destinasi (Multiple number [ , ]) : <br><input name="dest" type="text" placeholder="Eg. 60123456789" required>
<br>  
     <br>
    <label style="vertical-align:top">    
       
    Message : </label><br><textarea name="msg" id="msg" rows="25" cols="50">This is an auto-generated message.Please don't reply to this number. Message to Sir/Madam
     
You are required of re-topup your insurances bill as your insurances are nearing expiring date.
    </textarea>
     <br><br>
     Type : <input type="radio" name="type" value="1" checked> ASCII <input type="radio" name="type" value="2"> Unicode<br><br>
     <!-- ascii=bahasa melayu, bahasa inggeris unicode=tulisan jepun, arab, chinese -->
     
     <input type="submit" name="submit" value="Send">
     </form>
      </section>
        <br><br>  <br><br>
	  
   <footer> 	&copy; 2017 by Azam Achievers Management. All Rights Reserved  </footer>
      </div>
      <script src="https://code.jquery.com/jquery-1.12.4.min.js">
	  </script>
	  <script type="text/javascript">
	 
	 function textCounter( field, countfield, maxlimit ) {
 if ( field.value.length > maxlimit ) {
  field.value = field.value.substring( 0, maxlimit );
  field.blur();
  field.focus();
  return false;
 } else {
  countfield.value = maxlimit - field.value.length;
 }
}
	  
	  
	  // Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
	 
	 /* jenis motor sahaja */
	var message1 = document.getElementById('msg');
/*	var jenis1 = document.getElementById('jenis');
	

	jenis1.onchange = function(){
     message1.value = message1.value  + this.value +  "\n                Nama :";
} */

	function myFunction3() {
		document.getElementById("msg").value = message1.value + "\nJenis Insurance : " +  document.getElementById("jenis").value ; 

	}
    /* customer nama */

	function myFunction1() {
		document.getElementById("msg").value = message1.value + "\nNama  :" + " " + document.getElementById("cust").value ;	
	}
	
	function myFunction2() {
		document.getElementById("msg").value = message1.value + "\nHarga :"+  " RM " + document.getElementById("Harga").value;
		
		 }

	 </script>
     
   <?php
mysqli_close($connection);
ob_end_flush();
?>
     </body>
     </html>