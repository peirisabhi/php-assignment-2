<?php
include './DB.php';
session_start();



$user_id = $_SESSION["user"];

$reason = $_GET["reason"];
$message = $_GET["message"];
$add_id = $_GET["add_id"];

echo $reason;
echo $message;
echo $add_id;
echo $user_id;

$q1 = "INSERT INTO `pets`.`add_report` (`add_id`, `user_id`, `reason`, `message`, `date`) VALUES ('".$add_id."', '".$user_id."', '".$reason."', '".$message."', NOW());";


if(executeQuery($q1) === TRUE){
    echo "your report is posted";
}  else {
    echo "error";
}
        
?>