<?php

require 'PHPMailer-master/src/PHPMailer.php';
  require 'PHPMailer-master/src/SMTP.php';
    require 'PHPMailer-master/src/Exception.php';


$mail = new PHPMailer\PHPMailer\PHPMailer();;
$mail->isSMTP();
$mail->SMTPDebug = 2; //Alternative to above constant
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'abhishek.chakraborty171287@gmail.com';
$mail->Password = 'P@55word171287';
$mail->setFrom('abhishek.chakraborty171287@gmail.com');
$mail->addAddress('abhishek.chakraborty94@yahoo.com');
$mail->Subject = 'Hello from PHPMailer!';
$mail->Body = 'This is a test.';
//send the message, check for errors
if (!$mail->send())
 {
echo "ERROR: " . $mail->ErrorInfo;
} else 
{
echo "SUCCESS";
}
?>