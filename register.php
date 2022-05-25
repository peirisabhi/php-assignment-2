<?php

session_start();

include './DB.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$password = $_POST["password"];

$code = time();

$_SESSION["fname"]=$fname;
$_SESSION["lname"]=$lname;
$_SESSION["email"]=$email;
$_SESSION["password"]=$password;
$_SESSION["code"]=$code;


//$q1= "INSERT INTO user(fname,lname,email,password) VALUES('".$fname."','".$lname."','".$email."','".$password."');";

//executeQuery($q1);


$content = "<h1>Your verification code is ".$code."</h1>";

include './email/email.php';

$sendMail = sendMail("pet.lk", $content, $email);

echo $sendMail;

?>

