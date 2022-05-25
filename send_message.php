<?php

session_start();

include './DB.php';

$user_id = $_SESSION["user"];

$resion = $_GET["reason"];
$message = $_GET["message"];
$add_id = $_GET["add_id"];

$q = "INSERT INTO `pets`.`add_report` (`add_id`, `user_id`, `reason`, `message`, `date`) VALUES ('".$add_id."', '".$user_id."', '".$resion."', '".$message."', NOW());" ;


if(executeQuery($q)===TRUE){
    echo "Your Report Is Send";
}
        
?>