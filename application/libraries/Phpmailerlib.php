<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

class Phpmailerlib
{
    public function __construct(){
        log_message('Debug', 'PHPMailer class is loaded.');
    }


    public function load(){

        require APPPATH.'third_party/phpmailer/src/Exception.php';
        require APPPATH.'third_party/phpmailer/src/PHPMailer.php';
        require APPPATH.'third_party/phpmailer/src/SMTP.php';

        $mail = new PHPMailer\PHPMailer\PHPMailer();

        try {
            //Server settings
            $mail->SMTPDebug = 1;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'vsn-digital@vsn-world.com';                     //SMTP username
            $mail->Password   = '2VwU9mEgGg8VFjDm';                               //SMTP password
            $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;  //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('vsndigital@vsn-world.com', 'Auto Email VSNDIGITAL');

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            return $mail;

        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}