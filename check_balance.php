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


if($_POST['name']!=NULL){

   $name=$_POST['name'];

}


if($_POST['password']!=NULL){

   $pass=$_POST['password'];

}


$result = ismscURL("https://www.isms.com.my/isms_balance.php?un=".urlencode($name)."&pwd=".urlencode($pass));

echo $result;


?>