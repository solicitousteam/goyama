<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';


//Load Composer's autoloader
require 'vendor/autoload.php';
  require("testmail/class.phpmailer.php");

include('connection.php');



if(isset($_POST['password-reset-token']) && $_POST['email'])
{
  
$emailId = $_POST['email'];

 
    $result = "SELECT * FROM admin WHERE email= '$emailId'";
 
    $cresultss = $conn->query($result);
$row = $cresultss->fetch_assoc();
 
  if($row)
  {
     
     $token = md5($emailId).rand(10,9999);
 
     $expFormat = mktime(
     date("H"), date("i")+15, date("s"), date("m") ,date("d"), date("Y")
     );
 
    $expDate = date("Y-m-d H:i:s",$expFormat);
 
    $update = mysqli_query($conn,"UPDATE admin set reset_link_token='" . $token . "' ,exp_date='" . $expDate . "' WHERE email='" . $emailId . "'");
 
    
    
    
    
    
 
     $link ="
  <a href='https://main.solicitous.cloud/finances-master/Admin/reset-password.php?key=".$emailId."&token=".$token."' style='background:#20e277;text-decoration:none !important; font-weight:500; margin-top:35px; color:#fff;text-transform:uppercase; font-size:14px;padding:10px 24px;display:inline-block;border-radius:50px;'>Reset password</a>";
  
    

   
  $mail = new PHPMailer(true);

try{

$mail->IsSMTP();
$mail->Host = "gts.digital";
$mail->SMTPAuth = true;
$mail->Port = 587;
$mail->Username = "test@gts.digital";
$mail->Password = "6dtNZ[7%+Gbf)";

$mail->From = "test@gts.digital";
$mail->FromName = "IPEPC";
$mail->AddAddress($emailId);
$mail->IsHTML(true);
$mail->Subject = 'Reset Password';
$mail->Body = '<html><head><title>Reset Password</title></head>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px;, background-color: #fff;" leftmargin="0">
   
    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="">
        <tr>
            <td>
                <table style="background-color: #fff; max-width:670px;  margin:0 auto;" width="100%" border="0"
                    align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="height:80px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">
                          <a href="#"  target="_blank">
                            <img width="100px" src="https://p1.gts.digital/landing_page_2/Gts_ipepc/admin/plugins/images/logo.png">
                          </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                                style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td style="padding:0 35px;">
                                        <h1 style="color:#1e1e2d; font-weight:500; margin:0;font-size:32px;">You have
                                            requested to reset your password</h1>
                                        <span
                                            style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>
                                        <p style="color:#455056; font-size:15px;line-height:24px; margin:0;">
                                            We cannot simply send you your old password. A unique link to reset your
                                            password has been generated for you. To reset your password, click the
                                            following link and follow the instructions.
                                        </p>
                                       '.$link.'
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    
                    <tr>
                        <td style="height:20px; color:red;">*This email will expire in 5 minutes*</td>
                    </tr>
                    
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">
                            <p style="font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;">&copy; <strong><a href="gts.digital" style="    text-decoration: none;
">gts.digital</a></strong></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:80px;">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
  
</body>

</html>';
 $mail->send(); {?>
   <script>
     setTimeout(function() {
    swal({
    title: "SuccessFully Email Sent",
    text: "Thanks!",
    type: "success"
    }).then(function() {
    window.location.href = 'Login.php';
    });
    }, 1000);
    </script>
    <?php }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}}else{?>
									    
	<script>
    setTimeout(function() {
    swal({
    title: "Email Not Match",
    text: "Thanks!",
    type: "error"
    }).then(function() {
    window.location.href = 'Forgotpassword.php';
    });
    }, 1000);
    </script><?php
}
}

?>

	<script src="assets/js/sweetalert2.all.min.js"></script>

