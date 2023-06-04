<?php

// require object library
include_once "PHPMailer.php";
include_once "SMTP.php";
include_once "POP3.php";

// function to sendmail
function sendmail($maildata, $subject, $sendto) {
    // configure the mail data information
    $mail = new PHPMailer;
    $mail->SMTPAuth   = true;
    $mail->Port       = 587;
    $mail->Host       = 'hostname';
    $mail->Username   = 'username email';
    $mail->From       = 'noreply@example.com';
    $mail->FromName   = 'from';
    $mail->Password   = 'password';
    $mail->SMTPSecure = 'tls';
    $mail->isSMTP();                                                                 
    $mail->addAddress($sendto);    
    $mail->isHTML(true);
    $mail->Subject    = $subject;
    $mail->Body       = $maildata;

    // send and validate success or not
    if ($mail->send()) {
        return 'success';
    } else {
        return 'error';
    }
}

?>
