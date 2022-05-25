<?php

session_start();

$from = $_SESSION["user"];

$add_id = $_GET["add_id"];
$to = $_GET["to"];
$msg = $_GET["msg"];

//echo $from;
//echo $add_id;
//echo $to;
//echo $msg;

if($from == $to){
    echo "This add owner is you,Because can't send a message ";
}  else {
    
    include './DB.php';
    
    $q = "INSERT INTO `pets`.`message` (`add_id`, `to`, `from`, `message`, `date`, `time`) VALUES ('".$add_id."', '".$to."', '".$from."', '".$msg."', NOW(), NOW());";
    
    if(executeQuery($q) === TRUE ){
        echo "your  message sent";
    }  else {
        echo "error";
    }
    
}

?>

