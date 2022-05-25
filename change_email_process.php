<?php

session_start();

$new_email = $_POST["newMail"];

$_SESSION["email"] = $new_email;

$code = time();
$_SESSION["code"]=$code;

$content = "<h1>Your verification code is ".$code."</h1>";

include './email/email.php';

sendMail("pet.lk", $content, $new_email);

header("location:email_verify.php");

?>

