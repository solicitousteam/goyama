<?php 

$srvername = "localhost";
$username = "cloudsolicitous_goyama";
$password = "Z!6vu!a1Uf-?";
$database = "cloudsolicitous_goyama";


$conn = new mysqli($srvername,$username,$password ,$database);


if ($conn -> connect_errno) {
 //cho "Failed" . $mysqli -> connect_error;
}else{
	//echo "Good";
}

date_default_timezone_set('Asia/Kolkata');


?>