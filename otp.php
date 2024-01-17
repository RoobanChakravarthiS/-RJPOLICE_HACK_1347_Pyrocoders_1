<?php
session_start();
$mob = $_POST['mobile'];
$otp = rand(0000,9999);
$_SESSION['OTP'] = $otp;

$API="xxxxxxxxxxxxxxxxx";
$PHONE=$mob;
$OTP=$otp;
$REQUEST_URI="https://sms.renflair.in/V1.php?";
$URL="https://sms.renflair.in/V1.php?API=$API&PHONE=$PHONE&OTP=$OTP";
$curl=curl_init($URL);
curl_setopt($curl,CURLOPT_URL,$URL);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
$resp=curl_exec($curl);
curl_close($curl);
$data=json_decode($resp);
$status=$data->status;
$massage=$data->message;

?>