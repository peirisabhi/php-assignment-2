<?php

session_start();
$email = $_SESSION["em"];

$pw =$_POST["pw"];

include './DB.php';

$q = "UPDATE `pets`.`user` SET `password`='".$pw."' WHERE  `email`='".$email."';";

if(executeQuery($q)===TRUE){
//    header("location:login.php");
    echo "okk";
}  else {
    echo "eroor";
}

?>

