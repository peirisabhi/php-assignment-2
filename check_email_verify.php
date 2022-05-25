<?php

session_start();

include './DB.php';

$code = $_SESSION["code"];
$fname = $_SESSION["fname"];
$lname = $_SESSION["lname"];
$email = $_SESSION["email"];
$password =$_SESSION["password"];

$user_code = $_POST["vemail"];


if ($code == $user_code) {

    $q1 = "INSERT INTO user(fname,lname,email,password) VALUES('" . $fname . "','" . $lname . "','" . $email . "','" . $password . "');";
    executeQuery($q1);

    
    
    header("location:email_verify_success.php");
} else {
    header("location:email_verify_failed.php");
}
?>

