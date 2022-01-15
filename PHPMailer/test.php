<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader


require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$username= 'nguyenchinh10011001@gmail.com';
$password = 'rgdsagcecadarwiv';

//Create an instance; passing true enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = false;
    $mail->SMTPAutoTLS = false; 
    $mail->Port = 465;
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                         //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $username;                     //SMTP username
    $mail->Password   = $password;                               //SMTP password
    $mail->SMTPSecure = 'ssl';          //Enable implicit TLS encryption
    // $mail->Port       = 465;      
    $mail->CharSet = 'UTF-8';                              //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

    //Recipients
    $mail->setFrom('nguyenchinh10011001@gmail.com','Nguyen Huu Chinh');
    $mail->addAddress('kitudu99@gmail.com', 'Dzung Kieu Tuan');     //Add a recipient
    
    
    //Attachments
    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = '[CSE 485] Điểm danh tuần 20-27/12/2021';
    $mail->Body    = '09_1951060562_NguyenHuuChinh';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}