<?php

require_once "PHPMailer/MailSender.php";

$data = "
Just an automatic mail sender using php with PHPMailer libary
";

// send mail
if ( sendmail($data, "Mail Subject", "target@mail.com") == 'error' ) {
    die("Failed to send mail !");
} else {
    die("Mail has sent !");
}
