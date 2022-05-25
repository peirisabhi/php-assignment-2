<?php

//require('phpmailer/class.phpmailer.php');
//$mail = new PHPMailer();
//$subject = "Test Mail using PHP mailer";
//$content = "<a href ='http://128.199.225.94/Abhi/pet/'><button>click To View GYM</button></a>";
//$mail->IsSMTP();
//$mail->SMTPDebug = 0;
//$mail->SMTPAuth = TRUE;
//$mail->SMTPSecure = "tls";
//$mail->Port = 587;
//$mail->Username = "lkpet.team@gmail.com";
//$mail->Password = "pet@1212";
//$mail->Host = "smtp.gmail.com";
//$mail->Mailer = "smtp";
//$mail->SetFrom("team.pet.lk@gmail.com", "PET.LK");
//$mail->AddReplyTo("team.pet.lk@gmail.com", "PET.LK");
//$mail->AddAddress("AbhishekDananjaya1@yahoo.com");
//$mail->Subject = $subject;
//$mail->WordWrap = 80;
//$mail->MsgHTML($content);
//$mail->IsHTML(true);
//
//if (!$mail->Send())
//    echo "Problem on sending mail";
//else
//    echo "Mail sent";
?>

<?php

function sendMail($subject, $content, $to) {
    
    require('phpmailer/class.phpmailer.php');
    $mail = new PHPMailer();
//    $subject = "Test Mail using PHP mailer";
//    $content = "<a href ='http://128.199.225.94/Abhi/pet/'><button>click To View GYM</button></a>";
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
    $mail->Username = "lkpet.team@gmail.com";
    $mail->Password = "pet@12323";
    $mail->Host = "smtp.gmail.com";
    $mail->Mailer = "smtp";
    $mail->SetFrom("team.pet.lk@gmail.com", "PET.LK");
    $mail->AddReplyTo("team.pet.lk@gmail.com", "PET.LK");
    $mail->AddAddress($to);
    $mail->Subject = $subject;
    $mail->WordWrap = 80;
    $mail->MsgHTML($content);
    $mail->IsHTML(true);

    if (!$mail->Send())
        echo "Problem on sending mail";
    else
        echo "Mail sent";
    
    if(!$mail->Send()){
            return false;
        } else {
            return true;
        }

    
}

?>