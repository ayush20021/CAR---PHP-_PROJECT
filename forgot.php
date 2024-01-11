<?php 

$Uemail=$_POST['email'];
$otp = random_int(1000, 9999);


include('connection.php');

$sql="SELECT * FROM `users` WHERE `Email`='$Uemail'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$ID= $row["ID"];



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'D:\XAMP\htdocs\PHPMAIL\src\Exception.php';
require 'D:\XAMP\htdocs\PHPMAIL\src\PHPMailer.php';
require 'D:\XAMP\htdocs\PHPMAIL\src\SMTP.php';

$mail = new PHPMailer(true);

$email = 'ayush99kumar12@gmail.com';
$password = 'wweu amsp guix twdk';
if(mysqli_num_rows($result)> 0){
try {
    // Configure SMTP settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $email;
    $mail->Password = $password;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Recipient information
    $mail->setFrom($email, 'BMW GROUP');
    $mail->addAddress($Uemail, 'T1');
    $mail->addReplyTo($email, 'T2');

    // //Attachments
    // $mail->addAttachment('Chrysanthemum.jpg', 'Chrysanthemum.jpg');


    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'RE : OTP TO RESET PASSWORD';
    $mail->Body    = 'Your OTP for resetting your password id '.$otp;
    
    $mail->send();

    
} catch (Exception $e) {
    echo 'Failed to send email: ', $mail->ErrorInfo;
}
$sql="UPDATE `users` SET `OTP` = '$otp' WHERE `users`.`ID` = '$ID'";
$result = mysqli_query($conn, $sql);
// $url = "PH1.php?data=" . urlencode($otp);
// header("Locaion:$url");
// header("Location:PH1.php");
$variableData = "Hello World";
$url = "PH1.php?data=" . urlencode($Uemail);
header("Location: $url");
exit();

}else{
    header("Location:PH1.php");
}

?>