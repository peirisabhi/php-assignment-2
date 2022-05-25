<?php

session_start();

include './DB.php';

$user_id = $_SESSION["user"];

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$phone = $_POST["phone"];


$q1 = "UPDATE `pets`.`user` SET `fname`='".$fname."', `lname`='".$lname."', `email`='".$email."' WHERE  `user_id`='".$user_id."';";
executeQuery($q1);

$q2 = "UPDATE `pets`.`user_data` SET `gender`='".$gender."', `dob`='".$gender."', `phone`='".$phone."' WHERE  `user_data_id`='".$user_id."';";
executeQuery($q2);

header("location:profile.php");

?>

