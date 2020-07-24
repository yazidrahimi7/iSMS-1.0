<?php

include("connection.php");
session_start();


// if (isset($_POST['username']) && isset($_POST['password'])){
// 	$username = $_POST['username'];
// 	$password = $_POST['password'];
	
// 	$sql = "SELECT * FROM tbllogin WHERE username='$username' and password = '$password'";
	
// 	$result = mysqli_query($connection,$sql);
// 	$count = mysqli_num_rows($result);

// 	if ($count == 1){
// 	$_SESSION['username'] = $username;
	
// 	header('Location: index.php');
	
// 	}
// 	else {
// 	$error = "Invalid Login";
// 	}
//}


?>
<html>
   
   <head>
      <title>Login Page</title>
      
   <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
		 
		 .eye {
			background-color: transparent;
			background-repeat:no-repeat;
			border:none;
			cursor:pointer;
			overflow:hidden;
			outline:none; 
		 }
		 
      </style>
   <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
   <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
   </head>
 
   <br><br>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Admin Login</b></div>
				
            <div style = "margin:30px">
               
               <form method = "post">
                  <label>Username  :</label>
                 <span id="sprytextfield1">
                  <input type = "text" name = "username" class = "box"/>
                  <span class="textfieldRequiredMsg">A value is required.</span></span><br /><br />
                 <label>Password  :</label>
                  <span id="sprytextfield2">
                  <input type = "password" name = "password" class = "box" id="password"/>
                  <span class="textfieldRequiredMsg">A value is required.</span></span><button type="button" id="eye" class="eye"><img src="eye.png" alt="eye"></button><br/>
                 <br />
                 <input type = "submit" value = " Submit "/>
                 <span style="font-size:11px; color:#cc0000; margin-top:10px"><br><br><?php echo @$error;?></span>
                  <p><br />
                 </p>
               </form>
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
					
            </div>
				
         </div>
			
      </div>
   <script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
/*
var timeoutId = 0;
var $button = $("#eye");
var $box = $("#password");
var $check = $("#check");

$button.mousedown(function() {
	timeoutId = setTimeout(function(){
		showPass('text');		
	},300);
}).bind('mouseup', function() {
	clearTimeout(timeoutId);
	if( !($check.prop("checked")))
	showPass('password');
});

function showPass(val){
	$box.prop('type',val);
}
*/
//
function show() {
	var p = document.getElementById('password');	
	p.setAttribute('type','text');
}
function hide() {
	var p = document.getElementById('password');
	p.setAttribute('type','password');	
}
	var passwordshown = 0;
	
	document.getElementById("eye")
.addEventListener("click", function() {
	if (passwordshown == 0) {
		passwordshown = 1;
		show(); 
	} else {
		passwordshown = 0;
		hide();
	} 
}, false);
//

   </script>
   
   </body>
</html>