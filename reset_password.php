<?php

$email = $_POST["email"];

$q = "SELECT * FROM `user` WHERE `email` = '".$email."';";

include './DB.php';

 $result = executeQuery($q);

$row = mysqli_num_rows($result);

$content = "<p>Dear abhi</p>
        <p>We received  a request to change your password for PET.LK. </p>
        <p>Click the below link to set a new password</p>
        <a href='http://localhost:8080/php_assignment2/new_password.php?email=".$email."'><p>link</p></a>
        <p>If you don't want to change your password, You can ignore this email.</p>
        <p>Thanks</p>
        <p>The Pet.lk Team</p>";
$subject = "Reset Password";

if($row>0){
    
    include './email/email.php';

    $a = sendMail($subject, $content, $email);
    
    if($a>0){
        header("location:password_reset_mail_send.php");
    }  else {
        echo "mail sending error";
    }
    
}  else {
    echo "error";
}

?>
