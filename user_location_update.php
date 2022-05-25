<?php

session_start();
$user_id = $_SESSION["user"];

include './DB.php';

$location = $_POST["location"];
$sublocation = $_POST["sublocation"];
$street = $_POST["street"];
$address = $_POST["address"];

$q1 = "UPDATE `pets`.`user_address` SET `location_id`='".$location."', `sub_location_id`='".$sublocation."', `street`='".$street."', `address`='".$address."' WHERE  `user_id`='".$user_id."';";

executeQuery($q1);

header("location:profile.php");

?>