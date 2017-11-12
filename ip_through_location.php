<?php
//echo $ip = '203.88.136.139';
//$ip = '85.90.227.224'; //london
$ip = '219.75.27.16';
//$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
echo $details->country; 
echo  $details->city;
//echo $details->region;
?>
