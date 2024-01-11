<?php 

include('connection.php');


$Uname = $_POST["name"];
$Uemail= $_POST["email"];
$Uquery=$_POST["query"];
$Ures=$_POST["res"];
$UID= $_POST["uid"];
$query="UPDATE `querys` SET `Last_Reply` = '$Ures' WHERE `querys`.`ID` ='$UID' ";
$result=mysqli_query($conn,$query);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'D:\XAMP\htdocs\PHPMAIL\src\Exception.php';
require 'D:\XAMP\htdocs\PHPMAIL\src\PHPMailer.php';
require 'D:\XAMP\htdocs\PHPMAIL\src\SMTP.php';

$mail = new PHPMailer(true);

$email = 'ayush99kumar12@gmail.com';
$password = 'wweu amsp guix twdk';

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
    $mail->addAddress($Uemail, $Uname);
    $mail->addReplyTo($email, $Uname);

    // //Attachments
    // $mail->addAttachment('Chrysanthemum.jpg', 'Chrysanthemum.jpg');


    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'RE : '.$Uquery;
    $mail->Body    = $Ures;

    $mail->send();

    header("Location:index.php");
} catch (Exception $e) {
    echo 'Failed to send email: ', $mail->ErrorInfo;
}





?>