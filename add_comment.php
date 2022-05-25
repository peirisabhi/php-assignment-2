<?php

session_start();

include './DB.php';

if(isset($_SESSION["user"])){
    
    $user_id = $_SESSION["user"];
    $add_id = $_GET["add_id"];
    $comment = $_GET["comment"];
    
    $q1 = "INSERT INTO `pets`.`add_comment` (`add_id`, `user_id`, `comment`, `date`) VALUES ('".$add_id."', '".$user_id."', '".$comment."',NOW());";
    
    if(executeQuery($q1)){
        echo "Your comment is posted ";
    }  else {
        echo "can not update your comment";
    }
    
}  else {
    echo "Please Login First";
}

?>
