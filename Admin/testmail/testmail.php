<?php

require("class.phpmailer.php");

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "119.18.48.83";
$mail->SMTPAuth = true;
//$mail->SMTPSecure = "ssl";
$mail->Port = 587;
$mail->Username = "testmail@dhamisaab.com";
$mail->Password = "kneL#Go;[nXJ";

$mail->From = "testmail@dhamisaab.com";
$mail->FromName = "Test from Info";
$mail->AddAddress("maheshkumawat8275@gmail.com");
//$mail->AddReplyTo("mail@mail.com");

$mail->IsHTML(true);

$mail->Subject = "Test message from server";
$mail->Body = "Test Mail<b>in bold!</b>";
//$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
echo "Message could not be sent. <p>";
echo "Mailer Error: " . $mail->ErrorInfo;
exit;
}

echo "Message has been sent";

?>