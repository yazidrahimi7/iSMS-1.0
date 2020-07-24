<?php
	 //We create our own function to submit our link
     //Certain hosts do not support the usage of "fopen"
      function ismscURL($link){

      $http = curl_init($link);

      curl_setopt($http, CURLOPT_RETURNTRANSFER, TRUE);
      $http_result = curl_exec($http);
      $http_status = curl_getinfo($http, CURLINFO_HTTP_CODE);
      curl_close($http);

      return $http_result;
     }


     if(isset($_POST["submit"])){ 
		
		foreach($_POST["id"] as $key => $value){
	
		$id = $value;

		$id = isset($_POST['id']) ? $_POST['id'] : '';
		
//	  $messageCount = count($_POST['id']);
//	  for($i=0;$i<$messageCount;$i++) {

//	  $result = $_POST["id"][$i];
//	  $row[$i] = mysqli_fetch_array($result);

      $destination = urlencode($_POST["dest"][$key]);
      $message = $_POST["msg"][$key];
      $message = html_entity_decode($message, ENT_QUOTES, 'utf-8'); 
      $message = urlencode($message);
      
      $username = urlencode("MuhdYazid"); //registered name
      $password = urlencode("yazid1997"); //registered password
      $sender_id = urlencode("60194063019"); //registered hp. no
    
	//  $type = (int)$_POST['type'];

      $fp = "https://www.isms.com.my/isms_send.php";
      $fp .= "?un=$username&pwd=$password&dstno=$destination&msg=$message&type=1&sendid=$sender_id&agreedterm=YES";
      //echo $fp;
   
      $result = ismscURL($fp);
      echo $result;
     }
	 }
     ?>
