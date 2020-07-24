<?php

foreach($_POST["id"] as $key => $value){
	
$id = $value;

$username = "MuhdYazid";

$password = "yazid1997";

$dstno = $_POST['dest'][$key];

$msg = $_POST['msg'][$key];

//$msg = var_dump($var);

$det = "";

$tr = $_POST["tr"];

$type = 1;

$senderid = "isms";

$date = $_POST["date"];

$hour = $_POST["hour"];

$min = $_POST["min"];

$week = 1;

$month = 1;

$day = 1;

$id = isset($_POST['id']) ? $_POST['id'] : '';

//$rowCount = count($_POST['id']);
	
$sendlink = "http://www.isms.com.my/isms_scheduler.php?un=".urlencode($username)."&pwd=".urlencode($password)."&dstno=".$dstno."&msg=".urlencode($msg)."&det=".
urlencode($det)."&tr=".$tr."&type=".$type."&sendid=".urlencode($senderid)."&date=".$date."&hour=".$hour."&min=".
$min."&week=".$week."&month=".$month."&day=".$day;

	

/*
$sendlink = "http://www.isms.com.my/isms_scheduler.php";
$sendlink.="?un=$username&pwd=$password&dstno=$dstno&msg=$msg&det=$det&tr=$tr&type=$type&sendid=".urlencode($senderid)."&date=".$date."&hour=".$hour."&min=".
$min."&week=".$week."&month=".$month."&day=".$day;
*/

$handle = fopen($sendlink, "r");


if ($handle) {

while (($buffer = fgets($handle, 4096)) !== false) {

echo "This is your task scheduler ID :" .$buffer;

}

if (!feof($handle)) {

echo "Error: unexpected fgets() fail\n";

}

fclose($handle);

}
}
?>