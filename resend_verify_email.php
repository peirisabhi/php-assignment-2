<?php

session_start();

$code = time();
$_SESSION["code"]=$code;
$email = $_SESSION["email"];

$content = "<h1>Your verification code is ".$code."</h1>";

include './email/email.php';

$s = sendMail("pet.lk", $content, $email);
if($s>0){
header("location:email_verify.php");
}

?>
