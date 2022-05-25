<?php

session_start();
$user_id = $_SESSION["user"];

include './DB.php';

$current_pw = $_POST["current_password"];
$new_pw = $_POST["new_password"];

//echo $current_pw;
//echo $new_pw;

$q1 = "SELECT * FROM `user` WHERE `user_id` = '" . $user_id . "';";
$result1 = executeQuery($q1);

$row = mysqli_fetch_assoc($result1);

$password = $row["password"];


if ($password == $current_pw) {

    $q2 = "UPDATE `pets`.`user` SET `password`='" . $new_pw . "' WHERE  `user_id`='" . $user_id . "';";

    if (executeQuery($q2) === TRUE) {
        echo "password updated";
    } else {
        echo "password can not update";
    }
} else {
    echo "incorrect password";
}
?>
