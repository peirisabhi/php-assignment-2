<?php

include './DB.php';

$email = $_POST["email"];
$password = $_POST["password"];

$q = "SELECT * FROM user WHERE email='" . $email . "' && password='" . $password . "';";


$result = executeQuery($q);

$row = mysqli_fetch_assoc($result);

if ($row["email"] == $email && $row["password"] == $password) {

    session_start();
    $_SESSION["user"] = $row["user_id"];

    $q2 = "SELECT * FROM user_data WHERE user_id = '" . $row["user_id"] . "';";
    $result2 = executeQuery($q2);
    $row2 = mysqli_num_rows($result2);

    if ($row2 > 0) {
        header("Location:index.php");
    } else {
//        echo "please verify your deatiles";
        header("Location:location_verify.php");
    }
} else {
//    echo "error";
    header("Location:login.php");
}
?>

