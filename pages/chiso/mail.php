<?php
session_start();
include '../../connectsql.php';
// require 'PHPMailer/PHPMailer.php';
// require 'PHPMailer/Exception.php';
// require 'PHPMailer/OAuth.php';
// require 'PHPMailer/POP3.php';
// require 'PHPMailer/SMTP.php';
require_once 'PHPMailer/PHPMailerAutoload.php';
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

                    // Passing `true` enables exceptions
try {
   $mail = new PHPMailer();          
                            // Enable verbose debug output
    $mail->isSMTP(true);                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'giaodoan35@gmail.com';                 // SMTP username
    $mail->Password = 'jnnpljrrhpmrefft';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    $mail->CharSet = "UTF-8";

    //Recipients
    $mail->setFrom('giaodoan35@gmail.com', 'HealthApp');
    $sql = "SELECT * FROM nguoidung";
    $result = $con->query($sql);
    while($row=$result-> fetch_assoc()){
        $mail->addAddress($row['ND_EMAIL']);
    }
    // $mail->addAddress('giaob1809231@student.ctu.edu.vn', 'g');     // Add a recipient
                  // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');
 
    //Attachments
    // $mail->addAttachment('');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
 
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Notice';
    $mail->Body    = "Regularly monitor your health. Thank you for reading the message.
    <a href ='http://thongtinyte.vn/'>See more information</a>";
    
    $mail->AltBody = 'Xin chào';
    if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
        }
        else{
            echo "Success";
        }
     
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>